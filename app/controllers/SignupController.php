<?php
declare(strict_types=1);
namespace App\Controllers;

use Phalcon\Mvc\Controller;

use App\Models\Users as Users;

use App\Validation\UserValidation as UserValidation;

class SignupController extends ControllerBase
{

    public function indexAction()
    {

    }
    public function registerAction()
    {
        $user = new Users();

        //assign value from the form to $user
        $user->assign(
            $this->request->getPost(),
            [
                'username',
                'nama',
                'email',
                'alamat',
                'no_hp',
            ]
        );
        $pass = $this->request->getPost('pass');
        $user->pass = $this->security->hash($pass);
        // Store and check for errors
        $success = $user->save();

        // passing the result to the view
        $this->view->success = $success;

        if ($success) {
            $message = "Thanks for registering!";
        } else {
            $message = "Sorry, the following problems were generated:<br>"
                     . implode('<br>', $user->getMessages());
        }

        // passing a message to the view
        $this->view->message = $message;
    }
    // public function listAction()
    // {
    //     $user = new Users();
    //     $this->view->users = Users::find();
    // }
    public function editAction($id_user)
    {
        // echo "$this->session->has('auth')";
        $editUser = Users::findFirstByid_user($id_user);
        $this->view->user = $editUser;
        // $this->view->setVar('user', $editUser);
        
        // echo $this->tag->linkTo(["'/home/index'", 'List User', 'class' => 'btn btn-primary']);
    }
    // public function hapusAction($id_user)
    // {
    //     $user = new Users();
    //     $usr = Users::findFirstByid_user($id_user);
    //     $success = $usr->delete();
    //     if($success)
    //     {
    //         $this->flashSession->error('User berhasil dihapus.');
    //     }
    //     echo 'User berhasil dihapus.<br>';
    //     echo $this->tag->linkTo(['/signUp/list', 'List User', 'class' => 'btn btn-primary']);
    // }
    public function updateAction($id_user)
    {
        // $user = new Users();
        $valid = new UserValidation();
        $message = $valid->validate($_POST);
        if(!count($message))
        {
            $usr = Users::findFirstByid_user($id_user);
            $usr->assign(
                $this->request->getPost(),
                [
                    'username',
                    'nama',
                    'email',
                    'alamat',
                    'no_hp',
                ]
            );
            
            $pass = $this->request->getPost('pass');
            $usr->pass = $this->security->hash($pass);
            // Store and check for errors
            // $usr->updated_at = date('Y-m-d h:i:sa');
            $success = $usr->save();
            // $this->flashSession->error('Produk berhasil dirubah.');
            echo 'User berhasil dirubah!! <br>';
            echo $this->tag->linkTo(['/home', 'Ke Home Yuk!', 'class' => 'btn btn-primary']);
        }
        else
        {
            foreach ($message as $msg) 
            {
                $this->flashSession->error($msg->getMessage());
            }
            echo 'Gagal Bro, <br>';
            echo $this->tag->linkTo(['/signup/edit ~ user.id_user', 'Kembali Yuk', 'class' => 'btn btn-primary']);

        }
    }
    // public function updateAction($id)
    // {
    //     $validation = new UserValidation();
    //     $messages = $validation->validate($_POST);
    //     if(count($messages))
    //     {
    //         foreach ($messages as $message)
    //         {
    //             $this->flashSession->error($message->getMessage());
    //         }
    //         $this->response->redirect('/signup/edit');
    //     }
    //     else
    //     {
    //         $name = User::findFirstById_pemilik($id);
    //         $nama = $this->request->getPost('nama', 'string');
    //         $checkNama = User::findFirst("nama = '$nama'");
    //         $flag=0;
    //         if($name->nama != $nama)
    //         {
    //             if($checkNama){
    //                 $this->flashSession->error('Nama sudah dipakai');
    //                 $this->response->redirect('/signup/edit/'.$id);
    //             }
    //             else
    //             {
    //                 $flag=1;
    //             }
    //         }
    //         if($flag)
    //         {
    //             $name->assign(
    //                 $this->request->getPost(),
    //                 [
    //                     'username',
    //                     'nama',
    //                     'email',
    //                     'alamat',
    //                     'no_hp',
    //                 ]
    //             );
    //             $pass = $this->request->getPost('pass');
    //             $usr->pass = $this->security->hash($pass);
    //             $name->updated_at = date('Y-m-d h:i:sa');
                
    //             $success = $name->save();
                
    //             if($success)
    //             {
    //                 $this->flashSession->success('Edit data berhasil');
    //             }
        
    //             $this->response->redirect('/home');
    //         }
    //     }
    // }


}


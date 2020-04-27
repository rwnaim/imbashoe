<?php
namespace App\Controllers;

use Phalcon\Mvc\Controller;

use App\Models\Users as Users;

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
    public function listAction()
    {
        $user = new Users();
        $this->view->users = Users::find();
    }
}
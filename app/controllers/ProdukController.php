<?php
namespace App\Controllers;

use Phalcon\Mvc\Controller;

use App\Models\Produk as Produk;

class ProdukController extends ControllerBase
{
    public function indexAction()
    {

    }
    public function tambahAction()
    {
        $produk = new Produk();

        //assign value from the form to $user
        $produk->assign(
            $this->request->getPost(),
            [
                'nama_produk',
                'brand_produk',
                'deskripsi_produk',
                'harga_produk',
                'status_produk'
            ]
        );

        // Store and check for errors
        $success = $produk->save();

        // passing the result to the view
        $this->view->success = $success;

        if ($success) {
            $message = "Produk berhasil ditambahkan.";
        } else {
            $message = "Terdapat kesalahan ketika menambahkan produk:<br>"
                     . implode('<br>', $produk->getMessages());
        }

        // passing a message to the view
        $this->view->message = $message;
    }
    public function listAction()
    {
        $produk = new Produk();
        $this->view->produk = Produk::find();
    }
}
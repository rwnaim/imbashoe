<?php
namespace App\Controllers;

use Phalcon\Mvc\Controller;

use App\Models\Produk as Produk;

class ListprodukController extends ControllerBase
{
    public function indexAction()
    {
        $produk = new Produk();
        $this->view->produk = Produk::find();
    }
}
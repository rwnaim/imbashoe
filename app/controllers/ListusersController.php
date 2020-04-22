<?php
namespace App\Controllers;

use Phalcon\Mvc\Controller;

use App\Models\Users as Users;

class ListusersController extends ControllerBase
{
    public function indexAction()
    {
        $user = new Users();
        $this->view->users = Users::find();
    }
}
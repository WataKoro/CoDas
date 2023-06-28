<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Profile extends BaseController
{
    public $useModel;

    public function __construct()
    {
        $this->userModel = new userModel();
    }

    public function index()
    {
        $user = $this->userModel->findAll();
        $data = [
            'regis' => $user
        ];
        return view('profile', $data);
    }

    public function save()
    {
        $session = session();
        $profilePicture = $this->request->getFile('profilePicture');
        $profilePicture->move('assets/profile');

        $pictureName = $profilePicture->getName();
        //include helper form
        helper(['form']);

        $model = new UserModel();
        $data = [
            'id'                   => $session->get('id'),
            'profilePicture'       => $pictureName,
        ];
        $model->save($data);
        $_SESSION["profilePicture"] = $pictureName;
        return redirect()->to('/');
    }
}

<?php

namespace App\Controllers;

use \App\Models\User;

class Login extends BaseController
{
    public function index(): string
    {
        return view('login');
    }

    public function get_login()
    {
        $userModel = new User();
        $session = session();
        $email = $this->request->getPost('email');
        $password = md5((string)$this->request->getPost('password'));
        $user = $userModel->where('email', $email)->first();
        if ($user!=NULL) 
        {
            if ($password == $user['password']) 
            {
                echo "MATCH";
                $userData = [
                    'email' => $user['email'],
                    'fname' => $user['fname'],
                    'lname' => $user['lname'],
                    'contact' => $user['contact']
                ];

                $session->set($userData);
                $session->setFlashdata('session_message', 'Login successful.');
                return redirect()->to('LoggedUser');
            } 
            else 
            {
                echo "MISMATCH";
                $session->setFlashdata('session_message', 'Login unsuccessful.');
                return redirect()->to('login');
            }
        } 
        else 
        {
            $session->setFlashdata('session_message', 'User not found.');
            return redirect()->to('login');
        }
    }
}

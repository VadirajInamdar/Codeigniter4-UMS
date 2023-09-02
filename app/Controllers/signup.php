<?php

namespace App\Controllers;

use \App\Models\User;
class Signup extends BaseController
{

    public function index(): string
    {
        return view('signup');
    }

    public function get_signup() {
        echo "signup taken";
        $userModel = new User();
        $session = session();
    
        $email = $this->request->getPost('email');
        $password = md5((string)$this->request->getPost('password'));
        $fname = $this->request->getPost('fname');
        $lname = $this->request->getPost('lname');
        $contact = $this->request->getPost((string)'contact');
        // Hash the password using bcrypt
        // $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    
        $data = [
            'email' => $email,
            'password' => $password,
            'fname' => $fname,
            'lname' => $lname,
            'contact' => $contact
        ];
    
        $r = $userModel->insert($data);
    
        if ($r) {
            echo "insertion successful";
            $session->setFlashdata('session_message', 'Signup successful.');
            return redirect()->to('signup');
        } else {
            echo "insertion unsuccessful";
            $session->setFlashdata('session_message', 'Signup unsuccessful.');
            return redirect()->to('signup');
        }
    }    
}
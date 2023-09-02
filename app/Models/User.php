<?php 
namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'email';
    
    protected $allowedFields = ['email','password','fname','lname','contact'];
}
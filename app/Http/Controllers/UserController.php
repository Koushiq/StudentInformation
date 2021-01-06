<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function getAllStudents()
    {
        $user  = new User();
        $data= $user->getAll("student");
        return json_encode($data);
    }
}

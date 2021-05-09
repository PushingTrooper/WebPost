<?php

namespace App\Http\Controllers;

use App\Models\Perdorues;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAllUsers()
    {
        return ["users" => Perdorues::all()];
    }
}

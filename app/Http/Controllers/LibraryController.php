<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function login()
    {
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function insert(Request $request){

        $Name = $request->input('Name');
        $Email = $request->input('Email');
        $password = $request->input('password');

        $data = array("Name" => $Name, "Email" => $Email, "password" => $password);

        DB::table('users')->insert($data);
        echo "<script>";
        echo "alert('User Registered.');";
        echo "</script>";
        return redirect('/home');
    }

    public  function home(){
        return view('home');
    }
}
<?php

namespace App\Http\Controllers;
use App\Users;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;



class UserLoginController extends Controller
{
    function userlogin_check(Request $req1)
    {
    	$username= $req1->input('username');
        $password= $req1->input('password');

        $list= Users::select('email','password')
        ->where('email',$username)
        ->get();

        $list_elem = $list[0];
        $db_pass= $list_elem['password'];

        if($password == $db_pass)
        {
        	echo " <script> alert('LOGGED IN SUCCESSFULLY');  </script>";
        	return view('user_welcome');
        }
        else{
        	echo " <script> alert('INVALID LOGIN');  </script>";
        }





    }
}

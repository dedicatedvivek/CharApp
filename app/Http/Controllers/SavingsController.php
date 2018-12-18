<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class SavingsController extends Controller
{
    //class BanksController extends Controller

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insertsaving(Request $req)

    {
        $fo_b_code= $req->input('fo_b_code');
    	$acc_holder= $req->input('acc_holder');
    	$acc_number= $req->input('acc_number');
    	$acc_balance= $req->input('acc_balance');
    	$th_amt = $req->input('th_amt');
    	$dep_amt = $req->input('dep_amount');
        $acc_code = $req->input('acc_code');
    	
    	

        $data=$arrayName = array('fo_b_code' =>$fo_b_code ,'acc_holder' =>$acc_holder ,'acc_number' =>$acc_number ,'acc_balance' =>$acc_balance, 'th_amt' =>$th_amt, 'dep_amount' =>$dep_amt);

        DB::table('savings_master')->insert($data);

        echo "<script>
        window.alert('RECORD SUBMITTED SUCCESSFULLY');
        </script>";

        
        return view('new_saving');
    }
     function deposit(Request $req1)
     {
        $depid = $req1->input('depid');
        echo "<script> 
        var deposit_amount = prompt('Enter deposit amount');
        </script>";

        if(isset($_GET['deposit_amount']
        { 
              $da = $_GET['deposit_amount'] 
        }  

        $new_bal = $da + $acc_balance;

        $acc_balance = Update::where('acc_code',$acc_code)->update($new_bal);

        return view('list_savings');
        
     }
}



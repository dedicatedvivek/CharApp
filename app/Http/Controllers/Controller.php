<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;
use App\applicant;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req1)

    {
    	$id= $req1->input('id');
        $fullname= $req1->input('fullname');
        $aadharnumber= $req1->input('aadharnumber');
        $address= $req1->input('address');
        $city= $req1->input('city');
        $category= $req1->input('category');
        $phone1= $req1->input('phone1');
        $phone2= $req1->input('phone2');
        $visitmethod= $req1->input('visitmethod');
        $appissue= $req1->input('appissue');
        $appsubmit= $req1->input('appsubmit');
        $doc1= $req1->input('doc1');
        $doc2=$req1->input('doc2');


        $data1=$arrayName = array('name' =>$fullname ,'aadhar' =>$aadharnumber , 'address' =>$address , 'city' =>$city , 'category' =>$category , 'phone1' =>$phone1 , 'phone2' =>$phone2 , 'vist_method' =>$visitmethod ,'issue_date' =>$appissue ,'submission_date' =>$appsubmit,'doc1' =>$doc1,'doc2' =>$doc2);


        $aadharchklist = applicant::select('aadhar')->
                    where('aadhar',$aadharnumber)
                    ->get();
        $aadharchk = $aadharchklist[0];
        $aadharval = $aadharchk['aadhar'];
        setcookie("user", "", time() - 3600);

        if (isset($aadharval)) {
            $fetch =  "<script> var r= window.confirm('APPLICANT HAD APPLIED PREVIOUSLY!!! CLICK OK TO PROCEED ANYWAY');
                Document.cookie = ' convar = ' + r;
            </script>";
            
        }
        echo $fetch;
        $ansvar = $_COOKIE['convar'];

        if (isset($fetch)) {
            
        
        DB::table('applicants')->insert($data1);

        // echo "<script>
        // window.alert('RECORD SUBMITTED SUCCESSFULLY');
        // </script>";
        }

        
        return view('list_applicant');
    }
    
}



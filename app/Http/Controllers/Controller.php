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
        $recommended_by= $req1->input('recommended_by');
        $appissue= $req1->input('appissue');
        $appsubmit= $req1->input('appsubmit');
        $doc1= $req1->input('doc1');
        $doc2=$req1->input('doc2');
        $monthly_income=$req1->input('monthly_income');
        $annual_income=$req1->input('annual_income');
        $applicant_expenses=$req1->input('applicant_expenses');
        $family_members=$req1->input('family_members');
        $earning_members=$req1->input('earning_members');



        $data1=$arrayName = array('name' =>$fullname ,'aadhar' =>$aadharnumber , 'address' =>$address , 'city' =>$city , 'category' =>$category , 'phone1' =>$phone1 , 'phone2' =>$phone2 , 'vist_method' =>$visitmethod , 'recommended_by' =>$recommended_by ,'issue_date' =>$appissue ,'submission_date' =>$appsubmit,'doc1' =>$doc1,'doc2' =>$doc2,'monthly_income' =>$monthly_income, 'annual_income' => $annual_income, 'applicant_expenses' =>$applicant_expenses, 'family_members' =>$family_members, 'earning_members' =>$earning_members);


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

    function rtdown(Request $req2)

    {

        $sql = "SELECT applicants.cheque_issue_date, applicants.name,applicants.city,applicants.recommended_by,applicants.monthly_income,applicants.annual_income,applicants.category,applicants.applicant_expenses,applicnts.family_members,applicants.earning_members,disbursements.sanction_amount,disbursements.sanction_date,disbursements.cheque_number FROM disbursements,applicants where disbursements.fo_id = applicants.id";
       
       applicant::select('cheque_issue_date','name','city','recommended_by','monthly_income','annual_income','category','applicant_expenses','family_members','earning_members',)

    }
    
}









        

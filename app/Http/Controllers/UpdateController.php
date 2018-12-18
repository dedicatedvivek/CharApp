<?php


namespace App\Http\Controllers;
use App\Update;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class UpdateController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function update(Request $req3)
  {

        $id= $req3->input('id');
        $fullname= $req3->input('fullname');
        $aadharnumber= $req3->input('aadharnumber');
        $address= $req3->input('address');
        $city= $req3->input('city');
        $category= $req3->input('category');
        $phone1= $req3->input('phone1');
        $phone2= $req3->input('phone2');
        $visitmethod= $req3->input('visitmethod');
        $appissue= $req3->input('appissue');
        $appsubmit= $req3->input('appsubmit');
        $sanctionstatus= $req3->input('sanctionstatus');
        $cidstatus=$req3->input('cidstatus');
        $csstatus= $req3->input('csstatus');


        $data1=$arrayName = array('name' =>$fullname ,'aadhar' =>$aadharnumber , 'address' =>$address , 'city' =>$city , 'category' =>$category , 'phone1' =>$phone1 , 'phone2' =>$phone2 , 'vist_method' =>$visitmethod ,'issue_date' =>$appissue ,'submission_date' =>$appsubmit,'sanction_status' =>$sanctionstatus,'cheque_issue_date' =>$cidstatus,'cheque_status' =>$csstatus);
         
         $applicants = \App\Update::where('id',$id)
                       ->update($data1);

                       

         return view('list_applicant');     

     }

     function delete(Request $req3)
{
    
 $delud= $req3->input('del_id');
 // $doc1view= $req3->input('doc1view');
 // $doc2view= $req3->input('doc2view');

    

    $set0 = 0;

     $datadel=$arrayName = array('active_status' =>$set0);
  

    


     $update_active = Update::where('id',$delud)
                      ->update($datadel);

      return view('list_applicant');





  
}

function doc1(Request $reqd)
{
   $doc1= $reqd->input('del_id');
   return view('imagetest') -> with('img_id',$doc1);

}
  
function doc2(Request $reqss)
{
   $doc2= $reqss->input('del_id');
   
   return view('imagetest') -> with('img_id2',$doc2);



}
     
}     
    
?>

    
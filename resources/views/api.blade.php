<!DOCTYPE html>
<html>
<head>
    <title>SANCTION STATUS</title>
</head>
<body>

</body>
</html>    



<?php
header("Content-Type:application/json");
require "data.php";

if(!empty($_POST['name']))
{    
    $name=$_POST['name'];
    $price = get_status($name);
    if(empty($stat))
    {
        response(200,"Applicant Not Found",NULL);
    }
    else
    {
        response(200,"Applicant Found",$stat);
    }	
}
else
{
    response(400,"Invalid Request",NULL);
}

function response($status,$status_message,$data)
{	
    $response['status']=$status;
    $response['status_message']=$status_message;
    $response['data']=$data;

    $json_response = json_encode($response);
    echo $json_response;
}
?>
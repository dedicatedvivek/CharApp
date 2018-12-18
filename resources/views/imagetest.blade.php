<?php
use App\applicant;


// echo $docname;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
<?php
if (isset($img_id)) {
	# code.

$image= applicant::select('doc1')->
		where('id',$img_id)->
		get();

$image1= $image[0];

$actual_image= $image1['doc1'];

}
else{
	$image= applicant::select('doc2')->
		where('id',$img_id2)->
		get();

$image1= $image[0];

$actual_image= $image1['doc2'];


}

?>

<center>
<img width="50%" height="80%" src="<?php echo $actual_image ?>">
</center>
</body>
</html>
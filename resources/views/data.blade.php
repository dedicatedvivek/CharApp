<?php

use App\Update;


function get_status($name)
{
	$appli= Update::select('firstname','lastname','sanction_status')
	->where('firstname',$name);
	$list_elem= $appli[0];
	$stat= 'YOUR APPLICATION HAS BEEN'.$list_elem['sanction_status'];



	return $stat;


}
?>
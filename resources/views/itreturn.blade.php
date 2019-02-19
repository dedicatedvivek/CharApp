<?php
use App\applicant;
use App\Expense;

?>

<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="printit.css" type="text/css" media="print" />



	<title>IT Returns</title>


<style type="text/css">
	#itreturntable {
    border: solid 1px #DDEEBB;
    border-collapse: collapse;
    border-spacing: 0;
    font: normal 13px Arial, sans-serif;
}
#itreturntable thead th {
    background-color: #DDEFEF;
    border: solid 1px #DDEEEE;
    color: #336B6B;
    padding: 10px;
    text-align: left;
    text-shadow: 1px 1px 1px #fff;
}
#itreturntable tbody td {
    border: solid 1px #DDEEEE;
    color: #333;
    padding: 10px;
    text-shadow: 1px 1px 1px #fff;
    font:150px;
}




</style>
</head>
<body onload="PrintElem()">

<?php

$appl_fetch = applicant::select('id','name','address','city','category','recommended_by','monthly_income','annual_income','applicant_expenses','family_members','earning_members','sanction_amt','cheque_issue_date')->get();

$count_appl_fetch= count($appl_fetch);





?>
<form id="form1" runat="server">
<div id="printablediv">
<table id="itreturntable">
						<thead>
							<tr class="table100-head">
								<th class ="column1">Serial Number</th>
								<th class="column2">Name</th>
								<th class="column3">Address</th>
								<th class="column4">City</th>
								<th class="column5">Aid</th>
								<th class="column6">Recommended By</th>
								<th class="column7">Monthly Income</th>
								<th class="column8">Annual Income</th>
								<th class="column9">Applicant Expenses</th>
								<th class="column10">Family Members</th>
								<th class="column11">Earning Members</th>
								<th class="column12">Sanctioned Amount</th>
								<th class="column13">Cheque Issue Date</th>

								
							</tr>
						</thead>

						<?php	
								
									for ($i=0; $i <$count_appl_fetch ; $i++) { 
												$array_elem = $appl_fetch[$i];

								echo "<tr class='rowtable'>"	;

									echo"<td>".$array_elem['id']."</td> "; 
									echo"<td>".$array_elem['name']."</td> "; 
									echo"<td>".$array_elem['address']."</td> "; 
									echo"<td>".$array_elem['city']."</td> "; 
									echo"<td>".$array_elem['category']."</td> "; 
									echo"<td>".$array_elem['recommended_by']."</td> "; 
									echo"<td>".$array_elem['monthly_income']."</td> "; 
									echo"<td>".$array_elem['annual_income']."</td> "; 
									echo"<td>".$array_elem['applicant_expenses']."</td> "; 
									echo"<td>".$array_elem['family_members']."</td> "; 
									echo"<td>".$array_elem['earning_members']."</td> "; 
									echo"<td>".$array_elem['sanction_amt']."</td> "; 
									echo"<td>".$array_elem['cheque_issue_date']."</td> "; 

									

									

									echo "</tr>";

											}	

											echo "</table>";	
									


									?>
									</div>

					<center>
						 <input type="button" value="PRINT" onclick="javascript:printDiv('printablediv')" />
					</center>

				</form>


<script>
function printDiv(divID)
{

	 //Get the HTML of div
        var divElements = document.getElementById(divID).innerHTML;
        //Get the HTML of whole page
        var oldPage = document.body.innerHTML;
        //Reset the page's HTML with div's HTML only
        document.body.innerHTML = 
          "<html><head><title></title></head><body>" + 
          divElements + "</body>";
        //Print Page
        window.print();
        //Restore orignal HTML
        document.body.innerHTML = oldPage;

   }

</script>
</body>
</html>
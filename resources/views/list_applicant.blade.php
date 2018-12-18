<?php
use App\Update;
?>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
	 $(function(){ $('tr:contains(Accepted)').addClass('accepted'); });
	 $(function(){ $('tr:contains(Pending/Rejected)').addClass('pending'); });






	 
</script>
<style>
body{
	background-color: #f4f2ef;
	background-repeat: no-repeat;
	background-size:cover;
}



#table1{
	 font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;


}
#table1 td, #table1 th
{
	border: 2px solid black;
	padding: 2px;
	font-family: monospace;
	font-size: 0.8vw;
	color: #19303A;
	font-weight: bold;
	font-style: italic;
}

.accepted:hover{background-color: #c6f733;}
.pending:hover{background-color: #ed1a47;}


.dropdown-content a:hover {
      color: white;
}



#table1 tr{
	cursor: pointer;
}

#table1 th {
	 padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #2A88AD;
    color: white;
}

input {
	padding: 1px;
	color: #19303A;
	border: 2px solid #19303A;
	
}
.one {
	width: 100px;
}
.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}
.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: red;
}

.dropdown:hover .dropdown-content {
    display: block;
}
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}



/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
   }
  .close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content1 {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close1 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
   }
  .close1:hover,
.close1:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.click-btn {
    background-color: #4187a3;
    border: none;
    color: white;
    padding: 2px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

.active {
  background-color: red;
}


</style>


	
</script>


<nav class="navbar navbar-default" style="background-color: rgb(35,162,218);">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/" style="color: white">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="{{ url('/newapplicant') }}"   style="color: white">New Applicant</a></li>
        <li><a class="active" href="{{ url('/listapplicant') }}"  style="color: white">Applicants List</a></li>
        <li>
           <div class="dropdown">
             <button class="dropbtn tag ">Banks
               <i class="fa fa-caret-down"></i>
             </button>
              <div class="dropdown-content">
                 <a  href="{{ url('/new_bank') }}">New Bank</a>
                 <a  href="{{ url('/list_bank') }}">Bank Detail</a>
                 
              </div>
          </div> 
        </li>
        <li>
          <div class="dropdown">
             <button class="dropbtn ">Savings
               <i class="fa fa-caret-down"></i>
             </button>
              <div class="dropdown-content">
                 <a href="{{ url('/new_saving') }}" >ADD A SAVINGS ACCOUNT</a>
                 <a href="{{ url('/list_savings') }}">ACCOUNTS' DETAILS</a>
                 
              </div>
        </li>
        <li><div class="dropdown">
             <button class="dropbtn">Transactions
               <i class="fa fa-caret-down"></i>
             </button>
              <div class="dropdown-content">
                 <a  href="{{ url('/new_fd') }}">ADD FD ACCOUNT</a>
                 <a  href="{{ url('/new_expense') }}">LOCAL EXPENSE</a>
                 <a  href="{{ url('/list_disbursements') }}">SANCTION DETAILS</a>
                 <a  href="{{ url('/fd_list') }}">FD LIST</a>
                 
              </div></li>
        <li><a  href="{{ url('/aboutus') }}"  style="color: white">About Us</a></li>
        <li><a  href="{{ url('/index') }}"  style="color: white">View Status</a></li>
        <li><a  href="{{ url('/overview') }}"  style="color: white">Overview</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/home') }}" style="color: white"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>









</head>
<body>
    <aside>
    <div id="search-bars">
        <span>
    <input type="text" id="myInput" onkeyup="searchByName()" placeholder="Search by name.." title="Type in a name">
        </span>

        <span>
    <input type="text" id="myInput1" onkeyup="searchByCategory()" placeholder="Search by Category.." title="Type in a name">
        </span>
</div>
</aside>




<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "auth";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

$sql = "SELECT id,aadhar, name,address,city,category,phone1,phone2,vist_method,issue_date,submission_date,sanction_status,cheque_issue_date,cheque_status FROM applicants";
$result = $conn->query($sql);
echo"<center>";






    echo "<table class='appl-list-table' id='table1'><tr><th>Applicant ID</th><th>Aadhar Number</th><th>Name</th><th>Address</th><th>City</th><th>Aid<th>Phone 1</th><th>Phone 2</th><th>Visit/Call</th><th>Form Issue Date</th><th>Form Submission Date</th><th>Sanction Status</th><th>Cheque Issue Date</th><th>Cheque Status</th><th>Sanction Amount</th><th>Edit</th><th>Delete</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {


        echo "<tr onclick='showappl()'><td>".$row["id"]."</td><td>".$row["aadhar"]."</td><td>".$row["name"]."</td><td>".$row["address"]."</td><td>".$row["city"]."</td><td>".$row["category"]."</td><td>".$row["phone1"]."</td><td>".$row["phone2"]."</td><td>".$row["vist_method"]."</td><td>".$row["issue_date"]."</td><td>".$row["submission_date"]."</td><td>".$row["sanction_status"]."</td><td>".$row["cheque_issue_date"]."</td><td>".$row["cheque_status"]."</td><td><button class='click-btn' onclick='modalopen_delete()'>CLICK HERE</button></td><td><button class='click-btn' onclick='modalopen()'>EDIT</button></td><td><form method='POST' action='delete()'<button class='click-btn' type='submit' name='delbutton'>DELETE</button></form></td></tr>";
    }

        echo "</table>";


echo"</center>";

?>

<?php

use App\Expense;


$savings= Expense::select('acc_code','acc_number')
          ->get();

$length= count($savings);



?>

<center> <br>
<div id="myModal" class="modal">
	<div class="modal-content">
		<span class= "close1">&times;</span>



<form id='form1' action="/update" method='POST'>
	{{ csrf_field() }}
	<table id='table_form'>
		<tr>
			<td>id</td> <td><input type="number" id="idmod" name="id" readonly></td>
		</tr>
	
		<tr>
			<td>Aadhar Number</td> <td><input type="text" id="aadharmod" name="aadharnumber"></td>
		</tr>
		<tr>
			<td>Name</td> <td><input type="text" id="namemod" name="fullname"></td>
		</tr>
		<tr>
			<td>Address</td> <td><input type="text" id="addressmod" name="address"></td>
		</tr>
		<tr>
			<td>City</td> <td><input type="text" id="citymod" name="city"></td>
		</tr>
		<tr>
			<td>Aid</td> <td><input type="text" id="aidmod" name="category"></td>
		</tr>
		<tr>
			<td>Phone 1</td> <td><input type="text" id="p1mod" name="phone1"></td>
		</tr>
		<tr>
			<td>Phone 2</td> <td><input type="text" id="p2mod" name="phone2"></td>
		</tr>
		<tr>
			<td>Visit/Call</td> <td><input type="text" id="vcmod" name="visitmethod"></td>
		</tr>
		<tr>
			<td>Form Date</td> <td><input type="text" id="fidmod" name="appissue"></td>
		</tr>
		<tr>
			<td>Form Submission Date</td> <td><input type="text" id="fsdmod" name="appsubmit"></td>
		</tr>
		<tr>
			<td>Sanction Status<td> <td><input type="text" id="sanctionmod" name="sanctionstatus"></td>
		</tr>
		<tr>
			<td>Cheque Issue Date</td> <td><input type="text" id="cidmod" name="cidstatus"></td>
		</tr>
    <tr>
      <td>Cheque Status</td> <td><input type="text" id="csmod" name="csstatus"></td>
    </tr>

		
</table> <br>
         <input class="one" type="submit" name="submit" value="UPDATE" style="font-size: 1.2vw; width: auto">
         &nbsp &nbsp &nbsp &nbsp
         

</form>
</center>
</div>
</div>
<div id="myModal1" class="modal1">
	<div class="modal-content1">
	

<form id="form1" action="/sanction_amount" method="post">
	{{ csrf_field() }}
	<table id='table_form'>
		<tr>
			<td>id</td> <td><input type="number" id="idi" name="id" readonly></td>
		</tr>
			
		<tr>
			<td>Sanction Date: </td> <td><input type="date" id="sanction_date" name="sanction_date"></td>
		</tr>
		<tr>
			<td>Sanction Amount: </td> <td><input type="number" id="sanction_amount" name="sanction_amount"></td>
		</tr>
		<tr>
			<td>Cheque Number: </td> <td><input type="text" id="cheque_number" name="cheque_number"></td>
		</tr>
		<tr>
			<td>Savings Account Number: </td> <td><select id="saving_select" name= "acc_number">
        <?php
        for ($i=0; $i <$length ; $i++) { 
           $list_elem = $savings[$i];
           echo "<option>";
           echo $list_elem["acc_number"];
           echo "</option>";
         } 
        ?>
      </select></td>
		</tr>
		
</table> <br>
         <input class="one" type="submit" name="submit" value="UPDATE" style="font-size: 1.2vw; width: auto">
         &nbsp &nbsp &nbsp &nbsp

</form>
</div>
</div>
</center>


    



<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks the button, open the modal 

	

 function modalopen() {
    modal.style.display = "block";
}


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


// Get the modal
var modal1 = document.getElementById('myModal1');

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 

	

 function modalopen_delete() {
    modal1.style.display = "block";
}


// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

</script>



     		

<script type="text/javascript">
	let table= document.getElementById('table1')   ;
	for(let i=0; i<table.rows.length; i++){
		table.rows[i].onclick= function(){
			rIndex=this.rowIndex;
			
			document.getElementById('idmod').value=this.cells[0].innerHTML;
			document.getElementById('aadharmod').value=this.cells[1].innerHTML;
			document.getElementById('namemod').value=this.cells[2].innerHTML;
			document.getElementById('addressmod').value=this.cells[3].innerHTML;
			document.getElementById('citymod').value=this.cells[4].innerHTML;
			document.getElementById('aidmod').value=this.cells[5].innerHTML;
			document.getElementById('p1mod').value=this.cells[6].innerHTML;
			document.getElementById('p2mod').value=this.cells[7].innerHTML;
			document.getElementById('vcmod').value=this.cells[8].innerHTML;
			document.getElementById('fidmod').value=this.cells[9].innerHTML;
			document.getElementById('fsdmod').value=this.cells[10].innerHTML;
			document.getElementById('sanctionmod').value=this.cells[11].innerHTML;
			document.getElementById('cidmod').value=this.cells[12].innerHTML;
			document.getElementById('csmod').value=this.cells[13].innerHTML;

		}
	}
</script>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<footer class="container-fluid text-center" style="background-color:rgb(35,162,218);">
 <marquee> <div height="20%" style="font-weight: bold; font-size: 20px">
 BAI MOTIBAI KASARA BAUG BORIVALI CHARITABLE TRUST
</div>
</marquee>
</footer>
<script>

function showappl() {
  let table= document.getElementById('table1')   ;
  for(let i=0; i<table.rows.length; i++){
    table.rows[i].onclick= function(){
      rIndex=this.rowIndex;
      
      window.alert(rIndex);
      

    }
  }
}



function searchByName() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table1");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

function searchByCategory() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("table1");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[10];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

<?php
function delete()
{
  if(isset($_POST['delbutton'])){

     $update_active = Update::where('id',$fo_id)
                      ->update(['cheque_status' =>'Issued']);

  }
}
?>
</script>

</body>
</html>
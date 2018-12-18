<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">

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
	font-size: 1vw;
	color: #19303A;
	font-weight: bold;
	font-style: italic;
}

#table1 tr:hover{background-color: #dde;}





#table1 tr{
	cursor: default;
}

#table1 th {
	 padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #2A88AD;
    color: white;
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
    color: white;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropbtn {
    background-color: rgb(35,162,218);
}

.active {
    background-color: red;
    color: white;
   } 



	</style>

</head>


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
        <li><a href="{{ url('/listapplicant') }}"  style="color: white">Applicants List</a></li>
        <li>
           <div class="dropdown">
             <button class="dropbtn tag">Banks
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
             <button class="dropbtn active">Transactions
               <i class="fa fa-caret-down"></i>
             </button>
              <div class="dropdown-content">
                 <a  href="{{ url('/new_fd') }}">ADD FD ACCOUNT</a>
                 <a  href="{{ url('/new_expense') }}">LOCAL EXPENSE</a>
                 <a class="active" href="{{ url('/list_disbursements') }}">SANCTION DETAILS</a>
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







<h2 style="color: #19303A" align="center">DISBURSEMENT LIST</h2>
<body>



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

$sql = "SELECT disbursements.sanction_id, savings_master.acc_number,applicants.name,disbursements.sanction_amount,disbursements.cheque_number,disbursements.sanction_date FROM savings_master,disbursements,applicants where disbursements.fo_acc_code = savings_master.acc_code AND disbursements.fo_id = applicants.id";
$result = $conn->query($sql);
echo"<center>";
if ($result->num_rows > 0) {


    echo "<table class='appl-list-table' id='table1'><tr><th>Sr.No</th><th>Name</th><th>Account Number</th><th>Sanction Amount</th><th>Cheque Number</th><th>Sanction Date</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["sanction_id"]."</td><td>".$row["name"]."</td><td>".$row["acc_number"]."</td><td>".$row["sanction_amount"]."</td><td>".$row["cheque_number"]."</td><td>".$row["sanction_date"]."</td> </tr>";
    }

        echo "</table>";
} 

?>
</body>
</html>
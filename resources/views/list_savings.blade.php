<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
.active {
    background-color: red;
    color: white;
}

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
.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
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

.dropbtn {
    background-color: rgb(35,162,218);
}


.dropdown:hover .dropdown-content {
    display: block;
}

.active {
    background-color: red;
    color: white;
}
</style>

<script type="text/javascript">
	
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
             <button class="dropbtn active ">Savings
               <i class="fa fa-caret-down"></i>
             </button>
              <div class="dropdown-content">
                 <a href="{{ url('/new_saving') }}" >ADD A SAVINGS ACCOUNT</a>
                 <a class="active" href="{{ url('/list_savings') }}">ACCOUNTS' DETAILS</a>
                 
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
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/home') }}" style="color: white"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>







<h2 style="color: #19303A" align="center">ACCOUNT DETAILS</h2>
<br><br>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "auth";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT savings_master.fo_b_code, savings_master.acc_holder, savings_master.acc_number, savings_master.acc_balance, banks_master.b_name FROM savings_master,banks_master WHERE savings_master.fo_b_code = banks_master.b_code";
$result = $conn->query($sql);

echo"<center>";
if ($result->num_rows > 0) {


    echo "<table id='table1'><tr><th>Bank Code</th><th>Account Holder</th><th>Account Number</th><th>Account Balance</th><th>Bank Name</th></tr>";
    
    // output data of each row
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["fo_b_code"]."</td><td>".$row["acc_holder"]."</td><td>".$row["acc_number"]."</td><td>".$row["acc_balance"]."</td><td>".$row["b_name"]."</td></tr>";
    }

        echo "</table>";
} 

echo"</center>";
$conn->close();
?>
<br><br>
<center>
<input class="one" type="button" value="BACK" onclick="window.location='/new_saving'" style="width: auto;" /> 
</center>

</center>
</body>
</html>
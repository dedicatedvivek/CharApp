<?php

use App\Applicants;

?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

  <title>Overview</title>
  <style type="text/css">
    body {
  
  color:#fff;
  
  text-align: center;
  
}

.counter {
  display: table-cell;
  margin:1.5%;
  font-size:30px;
  background-color: white;
  color:green;
  width:200px;
  border-radius: 50%;
  height:200px;
  vertical-align: middle;
  position: relative;
  left:100px;

}
.val-description{
    color: black;

  font-size:20px;
  background-color: white;
  
  
  
  position: absolute;
  
  left:106px;
  top: 280px;
  z-index: 10;
}

.counter2 {
  display: table-cell;
  margin:1.5%;
  font-size:30px;
  background-color: white;
  color:red;
  width:200px;
  border-radius: 50%;
  height:200px;
  vertical-align: middle;
  position: relative;
  left:250px;

}


.val-description2{
  color: black;

  font-size:20px;
  background-color: white;
  
  
  
  position: absolute;
  
  left:430px;
  top: 280px;
  z-index: 10;
}

.counter3 {
  display: table-cell;
  margin:1.5%;
  font-size:30px;
  background-color: white;
  color:red;
  width:200px;
  border-radius: 50%;
  height:200px;
  vertical-align: middle;
  position: relative;
  left:450px;

}
.val-description3{
  color: black;

  font-size:20px;
  background-color: white;
  
  
  
  position: absolute;
  
  left:800px;
  top: 280px;
  z-index: 10;
}


.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
    position: center;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url("spinner-animation.gif") center no-repeat #fff;
}

}
.one {
    width: auto;
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


  </style>

</head>
<body>
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
        <li><a  href="{{ url('/overview') }}"   style="color: white">Overview</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/home') }}" style="color: white"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php

$total_forms = Applicants::where('category','medical')->count();

       ?>

<?php
$accepted = Applicants::where('sanction_status','Accepted')->where('category','medical')->count();
          

        ?>
<?php
$rejected = $total_forms - $accepted;
          

        ?>


<br>
<br>
<br>
<div class="counter" data-count="<?php echo $total_forms; ?>">0</div>
<div class="counter2" data-count="<?php echo $accepted; ?>">0</div>
<div class="counter3" data-count="<?php echo $rejected; ?>">0</div>
<div class="val-description"> MEDICAL APPLICANTS </div>
<div class="val-description2"> MEDICAL FORMS ACCEPTED </div>
<div class="val-description3"> MEDICAL FORMS PENDING/REJECTED </div>




  <script type="text/javascript">
    $('.counter').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {

    duration: 2000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });  
  
  

});
  </script>
<script type="text/javascript">
    $('.counter2').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {

    duration: 3000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });  
  
  

});
  </script>

<script type="text/javascript">
    $('.counter3').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {

    duration: 4000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });  
  
  

});
  </script>
<br>

<div>
  
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

$sql = "SELECT id,formnum,firstname, lastname,age,gender,nationality,address,city,pincode,category,email,phone,sanction_status FROM applicants where category = 'medical'";
$result = $conn->query($sql);
echo"<center>";


   echo "<table class='appl-list-table' id='table1'><tr><th>id</th><th>Form Number</th><th>First Name</th><th>Last Name</th><th>Age</th><th>Gender</th><th>Nationality</th><th>Address</th><th>City</th><th>Pincode</th><th>Category</th><th>Email id</th><th>Phone Number</th><th>SANCTION STATUS</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {


        echo "<tr onclick='showappl()'><td>".$row["id"]."</td><td>".$row["formnum"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["age"]."</td><td>".$row["gender"]."</td><td>".$row["nationality"]."</td><td>".$row["address"]."</td><td>".$row["city"]."</td><td>".$row["pincode"]."</td><td>".$row["category"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["sanction_status"]."</td> </tr>";
    }

        echo "</table>";


echo"</center>";

?>


</div>


</body>
</html>
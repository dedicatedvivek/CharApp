<?php

use App\Expense;
use App\Expenses;
use App\Disburse;
use App\Fd;
use App\applicant;

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
  border-radius: 0%;
  height:200px;
  vertical-align: middle;
  position: relative;
  left:208px;


}
.val-description{
	color: black;

  font-size:20px;
  background-color: white;
  
  
  
  position: absolute;
  
  left:276px;
  top: 294px;
  z-index: 10;
}
.rupeesym1{
display: table-cell;
  
  font-size:30px;
  background-color: white;
  color:green;
  
  border-radius: 50%;
  height:200px;
  vertical-align: middle;
  position: relative;
  left:296px;
  z-index: 10;	
}

.counter2 {
  display: table-cell;
  margin:1.5%;
  font-size:30px;
  background-color: white;
  color:red;
  width:200px;
  border-radius: 0%;
  height:200px;
  vertical-align: middle;
  position: relative;
  left:270px;

}


.val-description2{
	color: black;

  font-size:20px;
  background-color: white;
  
  
  
  position: absolute;
  
  left:507px;
  top: 294px;
  z-index: 10;
}
.rupeesym2{
display: table-cell;
  
  font-size:30px;
  background-color: white;
  color:red;
  
  border-radius: 50%;
  height:200px;
  vertical-align: middle;
  position: relative;
  left:545px;
  z-index: 10;	
}
.counter3 {
  display: table-cell;
  margin:1.5%;
  font-size:30px;
  background-color: white;
  color:red;
  width:200px;
  border-radius: 0%;
  height:200px;
  vertical-align: middle;
  position: relative;
  left:350px;

}
.val-description3{
	color: black;

  font-size:20px;
  background-color: white;
  
  
  
  position: absolute;
  
  left:800px;
  top: 294px;
  z-index: 10;
}

.rupeesym3{
display: table-cell;
  
  font-size:30px;
  background-color: white;
  color:red;
  
  border-radius: 50%;
  height:200px;
  vertical-align: middle;
  position: relative;
  left:820px;
  z-index: 10;	
}
.counter4 {
  display: table-cell;
  margin:1.5%;
  font-size:30px;
  background-color: white;
  color:green;
  width:200px;
  border-radius: 0%;
  height:200px;
  vertical-align: middle;
  position: relative;
  left:390px;

}
.val-description4{
	color: black;

  font-size:20px;
  background-color: white;
  
  
  
  position: absolute;
  
  left:1070px;
  top: 294px;
  z-index: 10;
}
.rupeesym4{
display: table-cell;
  
  font-size:30px;
  background-color: white;
  color:green;
  
  border-radius: 50%;
  height:200px;
  vertical-align: middle;
  position: relative;
  left:1035px;
  z-index: 10;	
}
.counter5 {
  display: table-cell;
  margin:1.5%;
  font-size:30px;
  background-color: white;
  color:#058c8c;
  width:200px;
  border-radius: 0%;
  height:200px;
  vertical-align: middle;
  position: relative;
  left:500px;
  top: 1px;
  

}
.val-description5{
	color: black;

  font-size:20px;
  background-color: white;
  
  
  
  position: absolute;
  
  left:500px;
  top: 550px;
  z-index: 10;
}

.counter6 {
  display: table-cell;
  margin:1.5%;
  font-size:30px;
  background-color: white;
  color:#058c8c;
  width:200px;
  border-radius: 0%;
  height:200px;
  vertical-align: middle;
  position: relative;
  left:650px;

  top: 1px;

}
.val-description6{
	color: black;

  font-size:20px;
  background-color: white;
  
  
  
  position: absolute;
  
  left:870px;
  top: 550px;
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
    z-index: 100;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    z-index: 100;
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

.ruler {
	border-color: black;
	width: 50%;
}

.header{
	color: black;

	
	padding: 20px;

  font-size:23px;
  background-color: white;
  
  
  
  position: relative;
  
  left:0px;
  top: 50px;
  z-index: 50;
}
.formhead{
	color: black;

	
	padding: 20px;

  font-size:23px;
 
  
  background-color: white;
  
  
  
  position: absolute;
  
  left:650px;
  top: 440px;
  z-index: 50;
}

.form-style-10{
    width:80%;
    padding:30px;
    margin:40px auto;
    background: #FFF;
    border-radius: 10px;
    -webkit-border-radius:10px;
    -moz-border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
}
.form-style-10 .inner-wrap{
    padding: 30px;
    background: #F8F8F8;
    border-radius: 6px;
    margin-bottom: 15px;
}
.form-style-10 h1{
    background: #2A88AD;
    padding: 20px 30px 15px 30px;
    margin: -30px -30px 30px -30px;
    border-radius: 10px 10px 0 0;
    -webkit-border-radius: 10px 10px 0 0;
    -moz-border-radius: 10px 10px 0 0;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
}
.form-style-10 h1 > span{
    display: block;
    margin-top: 2px;
    font: 19px Arial, Helvetica, sans-serif;
}

#canvas{background: #ffffff;
        box-shadow:5px 5px 5px #ccc;
		border:5px solid #eee;
		margin-bottom:10px;}

.catmeter{
	width:300px;
	height: 35px;
	 
}

.active {

  background-color: red;
}



	</style>

	

</head>
<body onload="init()">
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
        <li><a href="{{ url('/newapplicant') }}"  target="iframe" style="color: white">New Applicant</a></li>
        <li><a href="{{ url('/listapplicant') }}" target="iframe" style="color: white">Applicants List</a></li>
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
        <li><a class="active" href="{{ url('/overview') }}"  style="color: white">Overview</a></li>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/home') }}" style="color: white"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>


<?php
$acc_values= Expense::select('acc_balance')
          ->get();

          $sum= 0;

          foreach ($acc_values as $key => $value) {
          	$sum = $value["acc_balance"] + $sum;


          }
$acc
          
        ?>

<?php
$dis_values= Disburse::select('sanction_amount')
          ->get();

          $sumdis= 0;

          foreach ($dis_values as $key1 => $value1) {
          	$sumdis = $value1["sanction_amount"] + $sumdis;


          }
          
        ?>

<?php
$exp_values= Expenses::select('expense_amount')
          ->get();

          $sumexp= 0;

          foreach ($exp_values as $key2 => $value2) {
          	$sumexp = $value2["expense_amount"] + $sumexp;


          }
          
        ?>
<?php
$fd_values= Fd::select('deposit_amount')
          ->get();

          $sumfd= 0;

          foreach ($fd_values as $key3 => $value3) {
          	$sumfd = $value3["deposit_amount"] + $sumfd;


          }
          
        ?>

 <?php
$total_nos= applicant::select('id')
          ->get();

          $listcount= 0;

          foreach ($total_nos as $ke => $valu) {
          	$listcount= $listcount + 1;


          }
$totalc= $listcount;

          $acceptedform = applicant::select('id')
          ->where('sanction_status','Accepted')
          ->get();

          $accept=0;
          foreach ($acceptedform as $k => $val) {
          	$accept = $accept + 1;

          }

          $accept_count = $accept;

          $reject_count = $totalc - $accept_count;


          $medical = applicant::select('id')
          ->where([['category','medical'],['sanction_status','Accepted']])
          ->get();

          $medical_count = 0;

          foreach ($medical as $medkey => $medvalue) {
          	$medical_count = $medical_count + 1;
          }
          $medi_frac = $medical_count / $accept_count ;
          $medi_per = $medi_frac * 100;  

           $educational = applicant::select('id')
          ->where([['category','educational'],['sanction_status','Accepted']])
          ->get();

          $educational_count = 0;

          foreach ($educational as $edukey => $eduvalue) {
          	$educational_count = $educational_count + 1;
          }
          $edu_frac = $educational_count / $accept_count ;
          $edu_per = $edu_frac * 100;  

           $financial = applicant::select('id')
          ->where([['category','financial'],['sanction_status','Accepted']])
          ->get();

          $financial_count = 0;

          foreach ($financial as $finkey => $dinvalue) {
          	$financial_count = $financial_count + 1;
          }

          $fin_frac = $financial_count / $accept_count ;
          $fin_per = $fin_frac * 100; 


            $others = applicant::select('id')
          ->where([['category','others'],['sanction_status','Accepted']])
          ->get();

          $others_count = 0;

          foreach ($others as $othkey => $othvalue) {
          	$others_count = $others_count + 1;
          }
          $oth_frac = $others_count / $accept_count ;
          $oth_per = $oth_frac * 100; 

        ?>






<br>
<center>
<header class="header">OVERALL FINANCIAL STATUS</header>
</center>

<div class = "rupeesym1">&#8377;</div>
<div class = "rupeesym2">&#8377;</div>
<div class = "rupeesym3">&#8377;</div>
<div class = "rupeesym4">&#8377;</div>
<div class="counter" data-count="<?php echo $sum; ?>">0</div>
<div class="counter2" data-count="<?php echo $sumdis; ?>">0</div>
<div class="counter3" data-count="<?php echo $sumexp; ?>">0</div>
<div class="counter4" data-count="<?php echo $sumfd; ?>">0</div>
<div class="val-description"> SAVINGS BALANCE </div>
<div class="val-description2"> TOTAL DISBURSEMENTS </div>
<div class="val-description3"> TOTAL EXPENDITURE </div>
<div class="val-description4"> FIXED DEPOSITS </div>

<br>
<hr class="ruler">

<header class="formhead">SANCTION STATUS</header>
<div class="counter5" data-count="<?php echo $accept_count; ?>">0</div>
<div class="counter6" data-count="<?php echo $reject_count; ?>">0</div>
<div class="val-description5"> FORMS SANCTIONED </div>
<div class="val-description6"> FORMS PENDING </div>

<br>

<div class= "form-style-10">

<h1>APPLICATION CATEGORIES<span>(sanctioned)</span></h1>

<center>
	<div class="category_meter">
		<p ><font size="5px" color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Medical:&nbsp;</font><meter class="catmeter" value="<?php echo $medical_count; ?>" min="0" max="<?php echo $accept_count; ?>"></meter><font size="5px" color="black">&nbsp;<?php echo $medical_count; ?>&nbsp;form/s(<?php echo $medi_per; ?> %)</font></p><br>
		 <p ><font size="5px" color="black">Educational:&nbsp;</font><meter class="catmeter" value="<?php echo $educational_count; ?>" min="0" max="<?php echo $accept_count; ?>"></meter><font size="5px" color="black">&nbsp;<?php echo $educational_count; ?>&nbsp;form/s(<?php echo $edu_per; ?> %)</font></p><br>
		 <p ><font size="5px" color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Financial:&nbsp;</font><meter class="catmeter" value="<?php echo $financial_count; ?>" min="0" max="<?php echo $accept_count; ?>"></meter><font size="5px" color="black">&nbsp;<?php echo $financial_count; ?>&nbsp;form/s(<?php echo $fin_per; ?> %)</font></p><br>
		 <p ><font size="5px" color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Others:&nbsp;</font><meter class="catmeter" value="<?php echo $others_count; ?>" min="0" max="<?php echo $accept_count; ?>"></meter><font size="5px" color="black">&nbsp;<?php echo $others_count; ?>&nbsp;form/s(<?php echo $oth_per; ?> %)</font></p><br>
		 
	</div>
</center>






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
		$('.counter4').each(function() {
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
		$('.counter5').each(function() {
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
		$('.counter4').each(function() {
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
		$('.counter6').each(function() {
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

</body>
</html>
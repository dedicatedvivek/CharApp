<?php

use App\Expense;
use App\Expenses;
use App\Disburse;

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
  left:62px;

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
.rupeesym1{
display: table-cell;
  
  font-size:30px;
  background-color: white;
  color:green;
  
  border-radius: 50%;
  height:200px;
  vertical-align: middle;
  position: relative;
  left:130px;
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
  left:120px;

}


.val-description2{
	color: black;

  font-size:20px;
  background-color: white;
  
  
  
  position: absolute;
  
  left:337px;
  top: 280px;
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
  left:370px;
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
  left:190px;

}
.val-description3{
	color: black;

  font-size:20px;
  background-color: white;
  
  
  
  position: absolute;
  
  left:630px;
  top: 280px;
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
  left:630px;
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


	</style>

</head>
<body>
@include('mynav')

<?php
$acc_values= Expense::select('acc_balance')
          ->get();

          $sum= 0;

          foreach ($acc_values as $key => $value) {
          	$sum = $value["acc_balance"] + $sum;


          }
          
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

<br>
<br>
<br>
<div class = "rupeesym1">&#8377;</div>
<div class = "rupeesym2">&#8377;</div>
<div class = "rupeesym3">&#8377;</div>
<div class="counter" data-count="<?php echo $sum; ?>">0</div>
<div class="counter2" data-count="<?php echo $sumdis; ?>">0</div>
<div class="counter3" data-count="<?php echo $sumexp; ?>">0</div>
<div class="val-description"> SAVINGS BALANCE </div>
<div class="val-description2"> TOTAL DISBURSEMENTS </div>
<div class="val-description3"> TOTAL EXPENDITURE </div>




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



</body>
</html>
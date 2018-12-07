<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

<script type="text/javascript">
    $(window).load(function() {
        $(".main-body").fadeIn(4000);
        $(".se-pre-con").fadeOut(800);
    });
</script>

<title>BANK MASTER</title>

<style>

body{
    background-color:#f4f2ef;
    background-size: cover;
    background-repeat: no-repeat;

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



.dropdown-content a:hover {
      color: white;
      background-color: red;
}
.dropdown:hover .dropdown-content {
    display: block;
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
    font: 13px Arial, Helvetica, sans-serif;
}
.form-style-10 label{
    display: block;
    font: 13px Arial, Helvetica, sans-serif;
    color: #888;
    margin-bottom: 15px;
}
.form-style-10 input[type="text"],
.form-style-10 input[type="date"],
.form-style-10 input[type="datetime"],
.form-style-10 input[type="email"],
.form-style-10 input[type="number"],
.form-style-10 input[type="search"],
.form-style-10 input[type="time"],
.form-style-10 input[type="url"],
.form-style-10 input[type="password"],
.form-style-10 textarea,
.form-style-10 select {
    display: block;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 8px;
    border-radius: 6px;
    -webkit-border-radius:6px;
    -moz-border-radius:6px;
    border: 2px solid #fff;
    box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
}

.form-style-10 .section{
    font: normal 20px 'Bitter', serif;
    color: #2A88AD;
    margin-bottom: 5px;
}
.form-style-10 .section span {
    background: #2A88AD;
    padding: 5px 10px 5px 10px;
    position: absolute;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border: 4px solid #fff;
    font-size: 14px;
    margin-left: -45px;
    color: #fff;
    margin-top: -3px;
}
.form-style-10 input[type="button"], 
.form-style-10 input[type="submit"]{
    background: #2A88AD;
    padding: 8px 20px 8px 20px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
    font-size: 15px;
}
.form-style-10 input[type="button"]:hover, 
.form-style-10 input[type="submit"]:hover{
    background: #2A6881;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}
.form-style-10 .privacy-policy{
    float: right;
    width: 250px;
    font: 12px Arial, Helvetica, sans-serif;
    color: #4D4D4D;
    margin-top: 10px;
    text-align: right;
}

.active {
    background-color: red;
    color: white;
}


</style>
<script type="text/javascript">
    function validation(){
        
        
        if (document.appl.b_name.value=="" ||
            !isNaN(document.appl.b_name.value)){
            alert("Kindly Provide Valid Bank Name!!!");
            document.appl.b_name.focus();
            return false;

         if (document.appl.b_city.value=="" ||
            !isNaN(document.appl.b_city.value)){
            alert("Kindly Provide Valid City Name!!!");
            document.appl.b_city.focus();  
            return false;

          if (document.appl.b_branch.value=="" ||
            !isNaN(document.appl.b_branch.value)){
            alert("Kindly Provide Valid Branch Name!!!");
            document.appl.b_branch.focus();  
            return false;  
 }
</script>
</head>

<body class="main-body">

<div class="se-pre-con"></div>


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
             <button class="dropbtn active">Banks
               <i class="fa fa-caret-down"></i>
             </button>
              <div class="dropdown-content">
                 <a class="active" href="{{ url('/new_bank') }}">New Bank</a>
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
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/home') }}" style="color: white"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>









<div class= "form-style-10">

<h1>ADD A NEW BANK<span>Fill in the details carefully</span></h1>


<form action="/insertbank" method="post" name="appl"> 

	{{ csrf_field() }}
<div class = "section"><span>1</span>BANK DETAILS</div>
<div class = "inner-wrap">
    <label >BANK NAME<input type="text" name="b_name"  /></label>
    <label >BANK CITY <input type="text" name="b_city"  /></label>
    <label >BANK BRANCH<input type="text" name="b_branch"  /></label>
</div>

<center>
<input class="one" type="submit" name="submit" value="SUBMIT" style="color: white;font-size: 1.2vw" >
</center>

</form>
</div>
<br><br><br><br>
<footer class="container-fluid text-center" style="background-color:rgb(35,162,218);">
 <marquee> <div height="20%" style="font-weight: bold; font-size: 20px">
 BAI MOTIBAI KASARA BAUG BORIVALI CHARITABLE TRUST
</div>
</marquee>

</footer>




</body>

</html>





<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Rest API Client Side Demo</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
        <li><a href="{{ url('/user_new_applicant') }}" target="iframe" style="color: white">New Applicant</a></li>
        
     
              
        
         <li><a href="{{ url('/user_about_us') }}" target="iframe" style="color: white">About Us</a></li>
           <li><a href="{{ url('/user_index') }}" target="iframe" style="color: white">View Status</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/home') }}" style="color: white"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
    <style type="text/css">
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
    background-color: #ddd;
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

    </style>
    <body>
<div class= "form-style-10">
        <div class = "section"><span>?</span>KNOW YOUR SANCTION STATUS</div>
        <div class = "inner-wrap">
            
            
                <div class="form-group">
                    <label id='namen' for="name">Name</label>
                    <input id='inputa' type="text" name="name" class="form-control"  placeholder="Enter Applicant Name" required/>
                </div>
                <div id="statusdiv"></div>
                <br>
                <br>
                <button onclick="showstatus()"   class="btn btn-default">Submit</button>
        

            <h3>
            
            </h3>
        </div>

    <script>
        function showstatus(){
        
        var statusshow= document.getElementById('statusdiv');
        var name= document.getElementById('inputa');
        var name_value = name.value;
        if (name_value == 'Jothi' || name_value == 'Vivek') {

        statusshow.innerHTML='YOUR APPLICATION HAS BEEN ACCEPTED';
    }
        else{
            statusshow.innerHTML='YOUR APPLICATION HAS BEEN REJECTED';
        }
    }

    </script>
    </body>
</html>
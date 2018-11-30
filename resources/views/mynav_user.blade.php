
<!DOCTYPE html>
<html>
<head>
  <title></title>
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
        <li><a href="{{ url('/user_new_applicant') }}" target="iframe" style="color: white">New Applicant</a></li>
      
        
                 
              </div></li>
        <li><a href="{{ url('/user_aboutus') }}" target="iframe" style="color: white">About Us</a></li>
        <li><a href="{{ url('/user_index') }}" target="iframe" style="color: white">View Status</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/home') }}" style="color: white"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>


</body>
</html>




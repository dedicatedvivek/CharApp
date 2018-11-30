<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


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

.one {
	width: auto;
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
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}

#table1 tr:hover{background-color: #dde;}
</style>

<script type="text/javascript">
	
</script>

@include('mynav')

<h2 style="color: #19303A" align="center">LIST OF BANKS</h2>

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

$sql = "SELECT b_code, b_name, b_city, b_branch FROM banks_master";
$result = $conn->query($sql);
echo"<center>";
if ($result->num_rows > 0) {


    echo "<table id='table1'><tr><th>Sr No.</th><th>Bank Name</th><th>Bank City</th><th>Bank Branch</th></tr>";
    
    // output data of each row
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["b_code"]."</td><td>".$row["b_name"]."</td><td>".$row["b_city"]."</td><td>".$row["b_branch"]."</td></tr>";
    }

        echo "</table>";
} 

echo"</center>";
$conn->close();
?>
<br><br>
<center>
<button><a href="{{ url('/new_bank') }}">ADD A NEW BANK</a></button>
</center>

</center>
</body>
</html>
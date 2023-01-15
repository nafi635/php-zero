<!doctype html >
<html>
<style>
body
{
	background-color:#F5F5DC;
}
h2
{
	color:violet;
	margin:10px 100px;
	
}
h3
{
	color:CCCC66;
	text-align:center;
	margin:150px 350px;
}
div
{
	margin:10px 400px;
	background-color:#C0C0C0;
	
	border-radius:10px;
	width:700px;
}
input[type=text],[type=password] 
{
	color:green;
	margin:0px 100px;
	padding:10px;
	width:300px;
	background-color:#f9f9f9;
}
a
{
	text-decoration:none;
	margin: 10px 550px;
}
input[type=submit]
{
	color:000066;
	
	padding:14px;
	margin:0px 90px;
	width:160px;
	background-color:006666;
}
label
{
	margin:0px 100px;
	color:#780000 ;
}
textarea
{
	background-color:#f9f9f9;
}
input:hover
{
	background-color:Gainsboro;
}
textarea:hover
{
	background-color:Gainsboro;
}
select
{
	background-color:99CCFF;
	padding:8px 15px ;
}
option
{
	padding:8px 15px ;
}
fieldset
{
	margin:100px 170px;
	padding:50px;
	width:200px;
	height:300px;
}
</style>
</style>
<body>
<div>
<?php
if(!isset($_POST['save']))
{
?>
	<h2>Register here</h2>
     <form method="post" action="Register.php">
    <label> Firstname:<br><input type="text" name="fname" >
     <p>
     <label>Lastname:<br><input type="text" name="lname" >
     <p>
     <label>Email:<br><input type="text" name="email" >
     <p>
     <label>Phone number:<br><input type="text" name="phone" ><p>
     <label>Username:<br><input type="text" name="uname" ><br><p>
     <label>Password :<br><input type="password" name="pwd"><p>
     
     <input type="submit" value="Proceed" name="save">
     <input type="submit" value="Home" name="home"><br>
     </form>
 <?php
 }
 else
 {
     $fname=$_POST['fname'];
     $lname=$_POST['lname'];
     $email=$_POST['email'];
     $phone=$_POST["phone"];
     $uname=$_POST["uname"];
     $pwd=$_POST["pwd"];
      $user_name="root";
     $password="rgukt123";
     $database="Student";
     $server="localhost";
     $db_handle = mysql_connect($server, $user_name, $password);
     $db_found=mysql_select_db($database,$db_handle);
       if($db_found)
     {                      
                    $SQL = "insert into Details values('$fname','$lname','$email','$uname','$pwd','$phone')";
                    $result = mysql_query($SQL);
                    if($result)
                    {
                         echo "Succesfully inserted";
                    }
            mysql_close($db_handle);
         }
         ?>
      <h2>Login Here</h2>
      <form action="Login.php" method="post">
      <input type="submit" name="login" value="Log In">
         </form>
         <?php
        } 
    ?> 
   </div> 
     

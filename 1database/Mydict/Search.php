<html>
<body background="wall.jpg">
<style>
h2
{
	color:orange;
	
}
h3
{
	color:CCCC66;
}
div
{
	margin:0px 350px;
	border-radius:5px;
	width:700px;
}
input 
{
	color:blue;
	padding:10px;
	background-color:#f9f9f9;
}
textarea
{
	background-color:#f9f9f9;
}
a.bb
{
	
	font-size:30px;
	color:9933FF;
	background-color:#F5F5DC;
	text-decoration:none;
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
	margin:50px 50px;
	padding:100px;
	width:100px;
	height:300px;
}
input[type=submit]
{
	color:white;
	padding:14px;
	margin:0px 90px;
	width:160px;
	background-color:663399;
}
input[type=submit].a
{
	color:white;
	padding:10px;
	margin:-37px 190px;
	width:160px;
	background-color:663399;
}
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
   } 
 a.aa
 {
 	color:green;
 	font-size:20px;
 } 
</style>
<div>
<?php
if(isset($_POST['search']))
{
	$search=$_POST['naamam'];
	//echo "$search<br>";
	$user_name="root";
     $password="rgukt123";
     $database="Dictionary";
     $server="localhost";
     $db_handle = mysql_connect($server, $user_name, $password);
     $db_found=mysql_select_db($database,$db_handle);
       if($db_found)
     {      
     		echo "<h3>"."Search Results:"."</h3>";
    		 $SQL = "select english,telugu,other from studentEng where word='$search'";
                    $result = mysql_query($SQL);
                    if(mysql_num_rows($result)>0)
                    {
		            $sql1="select * from studentEng where word='$search'";
				$result1=mysql_query($sql1);
				while ( $field = mysql_fetch_assoc($result1) )
				 {
					echo "<table border='1'>";
					echo "<tr><th>Word</th><th>English</th><th>Telugu</th><th>Others</th>";
					echo "<tr><td>".$field['word']."</td><td>".$field['english']."</td><td>".$field['telugu']."</td><td>".$field['other']."</td></tr>";
					echo "</table>";
					
					
				}
		}
		else
		{
			echo "<h3>".$search."</h3>Not found<br><br>";
			
			?>
			<a class='bb' href="MyDict.php" >want2store?</a>
			<br><br><br>
			<a class='bb' href="http://dictionary.cambridge.org/dictionary/english/<?php echo $search;?>">cambridge?</a>
			<br><br><br>
			<a class='bb' href="https://www.google.co.in/?gws_rd=ssl#safe=active&q=<?php echo $search.' meaning';?>" >g00gle?</a>
			<?php
			echo "<p style='color:blue;font-size:20px;'>Suggestions:</p>";
			$sql="select * from studentEng";
     			$res=mysql_query($sql);
     			$num=mysql_num_rows($res);
     			$sn=strlen($search);
     			echo "<br>".$sn."<br>";
     			$cn=0;
     			while($f=mysql_fetch_assoc($res))
     			{
				$find=$f['word'];
				$fn=strlen($find);
				for($j=0;$j<$sn;$j++)
				{
					for($k=0;$k<$fn;$k++)
					{
						if($search[$j]==$find[$k])
						{
							$cn++;		
						}
					}
				}		
				if($find[0]==$search[0])
					echo "--   "."<a class='aa' href='MyDict.php'>".$find."</a>"."<br>";
     			}
		}			
	     mysql_close($db_handle);
         }  	
}    
?>
<br>


</div>
</body>
</html>



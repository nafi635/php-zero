<html>
<body>
<form action="FileUpload.php" method="post" enctype="multipart/form-data">
Select an image:
<input type="file" name="this" id="this">
<input type="submit" value="Save" name="submit">
</form>
<?php
$target="uploads/";
$targ_file=$target.basename($_FILES['this']['name']);
echo $targ_file;
/*$uploaded=1;
$imagetype=pathinfo($targ_file,PATHINFO_EXTENSION);
if(isset($_POST['submit']))
{
	$check=getimagesize($_FILES['this']['tmp_name']);
	if($check!==false)
	{
		echo "FIles is --".$check['mime'];
		$uploaded=0;
		echo "moved";
	}
	else
	{
		echo "file is not an image";
		$uploaded=0;
	}
	
		if (move_uploaded_file($_FILES["this"]["tmp_name"], $targ_file)) 
			{
		     		   echo "<br>"."The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		   	 }
		   	else 
		   	{
		       		 echo "<br>"."Sorry, there was an error uploading your file.";
		  	}
}
	*/

?>
</body>
</html>


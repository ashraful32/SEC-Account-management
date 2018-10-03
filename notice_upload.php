<!DOCTYPE html>
<html>
<body>
<?php 

mysql_connect("localhost","root","");
mysql_select_db("store");


 if(isset($_FILES['image'])){
	 	 
	 $filename = $_FILES['image']['name'];
	 $filetmp = $_FILES['image']['tmp_name'];
	 move_uploaded_file($filetmp,"images/".$filename);
	 echo "Image Upload Successfully.";
	 $image = $filename;
	 
	  $sql = "insert into file_st(file_name,file_id,file_date) values ('$image','abc2','def2')";
	 mysql_query($sql);
	 
 }

?>
<form action="notice_upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="image" >
    <input type="submit" value="Submit" >
</form>

</body>
</html>

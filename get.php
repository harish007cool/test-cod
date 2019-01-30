<?php
$con = mysqli_connect("localhost","root","","test_a");

  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 

    $temp = explode(".",$_FILES["image"]["name"]);
	$newfilename = rand(1,89768) . '.' .end($temp);
	move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$newfilename);
	$path="uploads/".$newfilename; 
	
    $name = $_POST['name'];
    $sir = $_POST['sir'];
   
    $query = mysqli_query($con,"insert into test_a (name,sir,photo) values ('$name','$sir','$path')");

		if(!$query)
		{
		echo "failed";
		}
		else
		{
		header("Location:index.php?status=insert");
		}
  ?>
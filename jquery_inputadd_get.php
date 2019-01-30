<?php
$con = mysqli_connect("localhost","root","","test_a");

  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $sdate = $_POST['sdate'];
    $edate = $_POST['edate'];
    $discrption = $_POST['discrption'];
    $tokan_no = implode(',',$_POST['tokan_no']);
    $tokan_rs = implode(',',$_POST['tokan_Rs']);
    $tokan_value = implode(',',$_POST['tokan_value']);
    $created = date('Y-m-d H:i:s');
   //$tokan_no = implode(',',Input::get("tokan_no"));
    $query = mysqli_query($con,"insert into test_c (name,email,sdate,edate,discrption,tokan_no,tokan_rs,tokan_value,created) values ('$name','$email','$sdate','$edate','$discrption','$tokan_no','$tokan_rs','$tokan_value','$created')");
    
	
	
		 if(!$query)
		{
		echo "failed";
		}
		else
		{
		header("Location:index.php?status=insert");
		} 
		 
  ?>
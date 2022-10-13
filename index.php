<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="malakis" />

	<title>Untitled 1</title>
</head>

<body>




<?php 

include 'BusinessLayer.php';



$b=new BusinessLayer() ;

  
echo($b->user_add("mza","mehditest@.com",'13'));


?>

</body>
</html>




<?php 
  //creating connection to database
$con=mysqli_connect("localhost","root","","asciicode") or die(mysqli_error());

  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables
$Name = $con->real_escape_string($_POST['name']);
$Email = $con->real_escape_string($_POST['email']);
$Subject = $con->real_escape_string($_POST['subject']);
$comments = $con->real_escape_string($_POST['msg']);

  //query to insert the variable data into the database
$sql="INSERT INTO contactus (name, email, subject, msg) VALUES ('".$Name."','".$Email."', '".$Subject."', '".$comments."')";

  //Execute the query and returning a message
if(!$result = $con->query($sql)){
die('Error occured [' . $conn->error . ']');
}
else
   echo '<script type="text/javascript">

   window.onload = function () { alert("Thank you we will get in touch!."); }

</script>';
}
header("location: index.php");

?>
<?php


if(isset($_POST['submit'])) {
    
   $fname       = $_POST['fname'];
   if(!preg_match("/^[a-zA-Z]+$/",$fname)) { die ("Invalid Name");}

   $lname       = $_POST['lname'];
   if(!preg_match("/^[a-zA-Z]+$/",$lname)) { die ("Invalid last Name");}

   $username    = $_POST['username'];
   if(!preg_match("/^[a-zA-Z0-9]+$/",$username)) { die ("Invalid Username");}

   $gender      = $_POST['gender'];
   if(!preg_match("/^[a-zA-Z]+$/",$gender)) { die ("Invalid gender");}

   $email       = $_POST['email'];
   if(!preg_match("/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/",$email)) { die ("Invalid Email-ID");}


   $nationality = $_POST['nationality'];
   if(!preg_match("/^[a-zA-Z]+$/",$nationality)) { die ("Invalid nationality");}

   $phone       = $_POST['phone'];
   if(!preg_match('/^[0-9]{10}+$/', $phone)) {
      die ("IN Valid Phone Number");}
   
   $dob         = $_POST['dob'];


   $profilepic  = $_POST['profilepic'];
   $filepath = "uploads/" . $_FILES["profilepic"]["name"];

if(move_uploaded_file($_FILES["profilepic"]["tmp_name"], $filepath)) 
{
   $imgfile=$_FILES["profilepic"]["name"];$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
  
   $allowed_extensions = array(".jpg","jpeg",".png",".gif");
   
   if(!in_array($extension,$allowed_extensions))
   {
   echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
   }
   else
   {

   $imgnewfile=md5($imgfile).$extension;
 
   move_uploaded_file($_FILES["profilepic"]["tmp_name"],"uploads/".$imgnewfile);
echo "<h2>Image uploaded and registered successfully</h2><p>Check uploads folder to see images uploaded</p>";
} 

  


   $host = 'localhost';
   $user = 'root';
   $pass = '';
   $dbname = 'registration';

   $conn = mysqli_connect($host,$user,$pass,$dbname);

   

   $sql = "INSERT INTO alldata (fname,lname,username,gender,email,nationality,phone,dob,profilepic) VALUES('$fname','$lname', '$username','$gender','$email','$nationality','$phone','$dob','$profilepic')";

   mysqli_query($conn,$sql);



}

echo "<script>alert('sucessfully Registerd');</script>";


}

?> 

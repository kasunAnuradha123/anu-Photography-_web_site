<?php 
$uname = $_POST['uname'];
$email = $_POST['email'];
$pon = $_POST['pon'];
$msg = $_POST['msg'];
$submit = $_POST['submit'];

$con = mysqli_connect('localhost','root','','anu_photo');    //connectin
if(!$con){
    die('Could not connect: ' . mysql_error());
    }
    if(isset($_POST['submit'])){                                    
        function validate($data){
            $data = trim($data);            //spece out
            $data = stripcslashes($data);    //clear
            $data = htmlspecialchars($data);   //convert to html
            return $data;
        }
        $uname = validate($_POST['uname']);
        $emaile = validate($_POST['email']);
        $pon = validate($_POST['pon']);
        $msg = validate($_POST['msg']);
        
    }
   $query = "INSERT INTO contact VALUES (DEFAULT,'$uname','$email','$pon','$msg')";
   If($con->query($query) == TRUE){
    echo "<script>alert('Message Succesfully send');window.location='index.php'</script>";
   }
   else
   {
       echo "error: " . $con->error;
   }
   

   mysqli_close($con);


    
?>
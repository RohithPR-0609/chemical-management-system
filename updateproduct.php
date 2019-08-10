<?php
include('config.php');
if (isset($_POST['submit'])) {
    
    $chid = $_POST["chid"];
	$chname = $_POST["chname"];
	$chcost = $_POST["chcost"];
     $chavilability = $_POST["chavilability"];
     $chduedate = $_POST["chduedate"];
     $chstate = $_POST["chstate"];
     
    
     $id = $_POST['submit'];
    
    mysqli_query($connection, "UPDATE chemical SET chid='$chid',chname='$chname',chcost='$chcost',chavilability='$chavilability',chduedate='$chduedate',chstate='$chstate' WHERE id=$id");
    
	Print '<script>alert("Successfully updated!");</script>';
                            
	Print '<script>window.location.assign("viewProduct.php");</script>';
        }
		

?>
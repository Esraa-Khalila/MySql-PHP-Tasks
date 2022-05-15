    <?php
include('./config/constant.php');

$id =$_GET['id'];

$data="DELETE FROM tbl_courses WHERE id=$id";

$result = mysqli_query($connect , $data);

if($result==TRUE){

   header("location:".SITURL.'manage-courses.php');
   
}else {
  
   header("location:".SITURL.'/manage-courses.php');
 
}

?>


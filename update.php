<?PHP include("./config/constant.php") ;?>

    <?php


    $id =$_GET['id'];
    $data = "SELECT * FROM tbl_courses WHERE id =$id";
    $result=mysqli_query($connect , $data);
    if( $result==true){
       $view = mysqli_num_rows($result);
      if( $view==1){
         $view =mysqli_fetch_assoc($result);
        $course_name = $view['course_name'];
        $course_de =$view['course_des'];
        $course_dep =$view['course_depar'];
        $course_time = $view['course_time'];
       $course_day = $view['course_day'];
       }else {

       header('location'.SITURL.'admin/manage-courses.php');
         }
      }
     
  
    ?>
       <div class="card-body">
                  <form method='post'>
             
            
                        <div class="form-group">
                          <label class="bmd-label-floating">course name</label>
                          <input type="text" placeholder="Full Name" name='course_name'   value="<?php echo $course_name; ?> ">
                        </div>
                      </div>
                        <br> <br>
                        <div class="form-group">
                          <label class="bmd-label-floating">course description</label>
                           <input type="text" placeholder="username" name='course_des' value="<?php echo $course_de; ?>" >
                        </div>
                      </div>
                 
                  
                            <br> <br>
             
                        <div class="form-group">
                          <label class="bmd-label-floating">course department</label>
                          <input type="text" class="form-control" name='course_dep'  value="<?php echo $course_dep; ?>">
               
                      </div>
                            <br> <br>
                        <div class="form-group">
                          <label class="bmd-label-floating">course time</label>
                          <input type="time" class="form-control" name='course_time'  value="<?php echo $course_time; ?>">
          
                      </div>
                              <br> <br>
                        <div class="form-group">
                          <label class="bmd-label-floating">course day</label>
                          <input type="text" class="form-control" name='course_day'  value="<?php echo $course_day; ?>">
               
                      </div>
                    </div>
                        <br> <br>
                        <center>
                       <div class="form-group">
                          
                         
                         <input type="submit"class="btn btn-primary pull-right" name='submit' value="Add">
                      </div>
                    </div>
                        </center>
                         <br> <br>
                  </form>
                </div>
              </div>
            </div>
<?php 
if(isset($_POST['submit'])){
  $id=$_POST['id'];
 $course_name = $_POST['course_name'];
 $course_dec	 = $_POST['course_des'];
 $course_dep = $_POST['course_dep'];
 $course_time	 = $_POST['course_time'];
 $course_day	 = $_POST['course_day'];

  $data1 = "UPDATE  tbl_couses SET
 course_name= '$course_name',
 course_des= '$course_name',
 course_depar='$course_dep',
 course_time='$course_time',
 course_day= '$course_day'
  WHERE id=$id
  ";

  $result1=mysqli_query($conn,$data1);
  if($result==true){
   
    header('location:'.SITURL.'manage-courses.php');
  }else{
     
    header('location:'.SITURL.'update.php');
  }
}
?>
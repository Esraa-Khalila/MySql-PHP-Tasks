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
       }
      }
     
  
    ?>
       <div class="card-body">
                  <form method='post'>
             
            
                        <div class="form-group">
                          <label>course name</label>
                          <input type="text"  name='course_name'   value="<?php echo $course_name; ?> ">
                        </div>
                      </div>
                        <br> <br>
                        <div class="form-group">
                          <label >course description</label>
                           <input type="text"  name='course_des' value="<?php echo $course_de; ?>" >
                        </div>
                      </div>
                 
                  
                            <br> <br>
             
                        <div class="form-group">
                          <label >course department</label>
                          <input type="text" name='course_dep'  value="<?php echo $course_dep; ?>">
               
                      </div>
                            <br> <br>
                        <div class="form-group">
                          <label>course time</label>
                          <input type="time" name='course_time'  value="<?php echo $course_time; ?>">
          
                      </div>
                              <br> <br>
                        <div class="form-group">
                          <label >course day</label>
                          <input type="text"  name='course_day'  value="<?php echo $course_day; ?>">
               
                      </div>
                    </div>
                        <input type="hidden"  name='id'  value="<?php echo $id; ?>">
                        <br> <br>
                      
                       <div class="form-group">
                         <input type="submit" name='submit' value="Add">
                      </div>
                    </div>
                      
                         <br> <br>
                  </form>
                </div>
              </div>
           
<?php 
if(isset($_POST['submit'])){
  $id=$_POST['id'];
 $course_name = $_POST['course_name'];
 $course_dec= $_POST['course_des'];
 $course_dep= $_POST['course_dep'];
 $course_tim =$_POST['course_time'];
 $course_day = $_POST['course_day'];

  $data1 = "UPDATE  tbl_courses SET
 course_name= '$course_name',
 course_des= '$course_name',
 course_depar='$course_dep',
 course_time='$course_time',
 course_day= '$course_day'
  WHERE id=$id
  ";

  $result1=mysqli_query($connect,$data1);
  if($result==true){
   
    header('location:'.SITURL.'manage-courses.php');
  }else{
     
    header('location:'.SITURL.'update.php');
  }
}
?>
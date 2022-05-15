<?php include ('./config/constant.php');?>
<div class="content" style='text-align:center'>
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Add Courses</h4>
                </div>
                <div class="card-body">
                  <form method='post'>
                        <div class="form-group">
                          <label >course name</label>
                          <input type="text" placeholder="course name" name='course_name' required >
                        </div>
                      </div>
                        <br> <br>
                        <div class="form-group">
                          <label >course description</label>
                           <input type="text" placeholder="course description" name='course_des' required>
                        </div>
                      </div>
                 
                  
                            <br> <br>
             
                        <div class="form-group">
                          <label>course department</label>
                          <input type="text" placeholder="course department" name='course_dep'>
               
                      </div>
                            <br> <br>
                        <div class="form-group">
                          <label >course time</label>
                          <input type="time"  name='course_time'>
          
                      </div>
                              <br> <br>
                        <div class="form-group">
                          <label >course day</label>
                          <input type="text"  placeholder="course day" name='course_day'>
               
                      </div>
                    </div>
                        <br> <br>
                        <center>
                       <div class="form-group">
                          
                         
                         <input type="submit" name='submit' value="Add">
                      </div>
                    </div>
                        </center>
                         <br> <br>
                  </form>
                </div>
              </div>
 

<?php 
if(isset($_POST['submit']))
{
 $course_name = $_POST['course_name'];
 $course_dec	 = $_POST['course_des'];
 $course_dep = $_POST['course_dep'];
 $course_time	 = $_POST['course_time'];
 $course_day	 = $_POST['course_day'];


$data="INSERT INTO tbl_courses SET
course_name= '$course_name',
course_des= '$course_name',
course_depar='$course_dep',
course_time='$course_time',
course_day= '$course_day'
";
$db = mysqli_query($connect , $data);
if($db==TRUE){
   echo 'added';
 
   
}else {
  echo 'not added';
 
}
} 
?>
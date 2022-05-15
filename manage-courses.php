<?php include('./config/constant.php')?>

          
         
        
   
<center> <h2> courses manage</h2></center>
         


 <div class="content">
        <div class="container-fluid"> 
          <button style='background:#7b508c'> <a  href="add-course.php">Add course</a> </button>
          <div class="row">
           
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          course name
                        </th>
                        <th>
                          course description
                        </th>
                        <th>
                          course department 
                        </th>
                         <th>
                          course time 
                        </th>
                         <th>
                          course day 
                        </th>
                      </thead>
                      <tbody>
                            <?php
                $data = "SELECT * FROM tbl_courses";
                $result = mysqli_query($connect , $data);
                $count=1;
                if($result==TRUE){
                    $view=mysqli_num_rows($result);
                    if($view>0){
                        while($view=mysqli_fetch_assoc($result)){
                           $id=$view['id'];
                          $course_name = $view['course_name'];
                          $course_de =$view['course_des'];
                          $course_dep =$view['course_depar'];
                          $course_time = $view['course_time'];
                          $course_day = $view['course_day'];
                             ?>
                               
                               <tr>
                             <td><?php echo $count++; ?></td>
                             <td><?php echo $course_name; ?></td>
                             <td><?php echo  $course_de ; ?></td>
                             <td><?php echo  $course_dep ; ?></td>
                             <td><?php echo  $course_time ; ?></td>
                            <td><?php echo  $course_day ; ?></td>
                              <td> <button class='btnAdmin'style='background:#575a96'><a  href="<?php echo SITURL ?>update.php?id=<?php echo $id;?>">Update Admin</a></button>
                              <button class='btnDelete' style='background:#a6505a'> <a  href="<?php echo SITURL;?>delete-course.php?id=<?php echo $id;?>">Delete Admin</a></button>
                              </td>
                            </tr>
                             <?php
                        }
                    }
                }else{

                }
                ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
 
      
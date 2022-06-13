<?php
include('header.php');
?>
<link rel="stylesheet" href="../../validation/dist/css/bootstrapValidator.css"/>
    
<script type="text/javascript" src="../../validation/dist/js/bootstrapValidator.js"></script>
  <!-- =============================================== -->
  <?php
    include('../../form.php');
    $frm=new formBuilder;      
  ?>   
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Customer Detail
      </h1>
      
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Add Movies News</li>
      </ol>
    </section>
<?php
require('config.php');
$did=$_GET['user'];
$query="select * from tbl_registration where user_id='$did'";
$data=mysqli_query( $con,$query);
$result= mysqli_fetch_assoc($data);
  ?>

    <!-- Main content -->
    <section class="content">

      <!-- Default box --> 
      <div class="box">
        <div class="box-body">
            
          <table class="table">
                <tbody>
                    <tr>
                       
                      <th>Customer Name</th>
                      <th><?php echo $result['name'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Email</th>
                      <th><?php echo $result['email'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                      <th><?php echo $result['phone'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>DOB</th>
                      <th><?php echo $result['age'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Gender</th>
                      <th><?php echo $result['gender'] ?></th>
                      
                    </tr>
                   

                    
                </tbody>
          </table>
        </div>
   </div>
               <?php $frm->validate("attachment",array("required","label"=>"Image")); // Validating form using form builder written in form.php ?>
              </div>
              
        </form>
        </div> 
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <?php
include('footer.php');
?>
<script>
        <?php $frm->applyvalidations("form1");?>
    </script>
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
        All Bookings
      </h1>
      
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Add Movies News</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box --> 
      <div class="box">
        <div class="box-body">
            
            <h4></h4>
                        <table class="table">
                            <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Customer Name </th>
                                  <th>E-mail</th>
                                  <th>Phone No</th>
                                  <th>DOB</th>
                                  <th>Gender</th>
                                  <th>Option</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>


<?php
require('config.php');
$query="select * from tbl_registration";
$data=mysqli_query($con,$query);
//$result= mysql_fetch_assoc($data);
   $num = 1;
  while($result=mysqli_fetch_assoc($data))
    {
        $uid = $result['user_id'];
    
        echo"
        <tr>
        <td>".$num."</td>
        <td>".$result['name']."</td>
        <td>".$result['email']."</td>
        <td>".$result['phone']."</td>
        <td>".$result['age']."</td>
         <td>".$result['gender']."</td>
        <td><a href='editcustomer.php?user=$uid'>Edit</a> | <a href='deletecustomer.php?user=$uid'>Delete</a></td>
        <td><a href='viewcustomer.php?user=$uid'><i class='fa fa-eye'></i></a></td>
        </tr>
        
        ";
        $num++;
    }
?>

</tbody>
</table>
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
            <?php //include('include/header.php');?>
      
            <script type="text/javascript">

  function delet(id)
  {
    if(confirm("you want to delete ?"))
    {
      window.location.href='delete_property.php?x='+id;
    }
  }

</script>
    <!-- Header -->
    
    <section>
       
       <!-- Left Sidebar -->
<?php //include('include/sidebar.php');?>
        <!-- #END# Left Sidebar -->
        <section class="content">
                    <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <!--<a class="btn btn-info nav-link" href="#add_property.php" data-page="add_property.php">Add Property</a>-->
                            <h2 style="text-align: center;" class="hs">
                             View Users
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                       <tr>
                                            <th>S.no</th>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Email Address</th>
                                        </tr>
                                    </thead>
                                    <tfoot>


                                        <tr>
                                            <th>S.no</th>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Email Address</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $i=1;
include'include/config.php';



// Select specific data from the first table
$query1 = mysqli_query($con,"SELECT * FROM users");
while($result1 = mysqli_fetch_array($query1)){


?>

                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $result1['fname']; ?></td>
                                            <td><?php echo $result1['lname'] ;?></td>
                                            <td><?php echo $result1['email'];?></td>
   
   <!-- <a class='btn btn-success' href="dashboard.php?page=c_info&id=<?php echo $id;?>"><span class="fa fa-eye"></span></a>-->
  
    </td>
                                        </tr>
<?php 
} 
?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
            <?php //include'include/footer.php';?>


                                
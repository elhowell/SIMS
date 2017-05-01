<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Student list</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
	<?php include('header.php'); ?>
	<?php include('sidebar.php'); ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Student list
        <small>Student panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Student list</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     
			<div class="box">
            <div class="box-header">
              <h3 class="box-title">Student list</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Full Name</th>
				  <th>Email</th>
                  <th>City</th>
                  <th>Country</th>
                  <th>Date of Birth</th>
				  <th>Student Id</th>
				  <th>Courses</th>
				  <th>Status</th>
				  <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php
				if(!empty($userlist))
					{
						for($i=0;$i<count($userlist);$i++)
						{
				?>
                
                <tr>
                  <td><?=$userlist[$i]['title']?></td>
                  <td><?=$userlist[$i]['f_name']?> <?=$userlist[$i]['surname']?></td>
				  <td><?=$userlist[$i]['email']?></td>
                  <td><?=$userlist[$i]['city']?></td>
                  <td><?=$userlist[$i]['country']?></td>
                  <td><?=$userlist[$i]['date_of_birth']?></td>
				  <td><?=$userlist[$i]['student_id']?></td>
				  <td><?=$userlist[$i]['courses']?></td>
				  <td><span style="cursor:pointer;" class="label label-success" > <?=$userlist[$i]['status']?></span></td>
				  <td><a href="adduser/<?=$userlist[$i]['id']?>" style="cursor:pointer;" class="label label-success" > Edit</a> / <a href="userdelete/<?=$userlist[$i]['id']?>" style="cursor:pointer;" class="label label-success" > Delete</a></td>
                </tr>
				<?php
						}
					}
					else
					{
				?>
				<tr>
                  <td colspan="10">No record found.</td>
                  </tr>
				<?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Title</th>
                  <th>Full Name</th>
				  <th>Email</th>
                  <th>City</th>
                  <th>Country</th>
                  <th>Date of Birth</th>
				  <th>Student Id</th>
				  <th>Courses</th>
				  <th>Status</th>
				  <th>Action</th>
                </tr>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php include('footer.php'); ?>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Student add</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">

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
        Add Student
        <small>Student panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Add Student</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     
			<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Student</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>adduser/<?=$user[0]['id']?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                 <select class="form-control" name="title">
						<option <?php if($user[0]['title']=='Mr.'){ ?> selected="selected" <?php } ?>>Mr.</option>
						<option <?php if($user[0]['title']=='Mrs.'){ ?> selected="selected" <?php } ?>>Mrs.</option>
				  </select>	
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">First Name</label>
                  <input type="text" class="form-control" name="f_name" value="<?=$user[0]['f_name']?>"  placeholder="Enter First Name">
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">Surname</label>
                  <input type="text" class="form-control" name="surname" value="<?=$user[0]['surname']?>"  placeholder="Enter Surname">
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">City</label>
                  <input type="text" class="form-control" name="city" value="<?=$user[0]['city']?>"  placeholder="Enter City">
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">Country</label>
                  <select class="form-control" name="country">
					<?php
					$country =$this->module->country();
					if(!empty($country))
					{
						for($i=0;$i<count($country);$i++)
						{
					?>
						<option <?php if($user[0]['country']==$country[$i]['country_name']){ ?> selected="selected" <?php } ?> ><?=$country[$i]['country_name']?></option>
					<?php
						}
					}
					?>
				  </select>				  
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">Date of Birth</label>
                  <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" value="<?=$user[0]['date_of_birth']?>"  id="datepicker" name="date_of_birth">
                </div>
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" class="form-control" name="email" value="<?=$user[0]['email']?>" placeholder="Enter Email">
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">Student Id</label>
                  <input type="text" class="form-control" name="student_id" value="<?=$user[0]['student_id']?>" placeholder="Student Id">
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">Courses</label>
                  <input type="text" class="form-control" name="courses" value="<?=$user[0]['courses']?>" placeholder="Enter Courses">
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">Exam score 1</label>
                  <input type="text" class="form-control" name="exam_score_1" value="<?=$user[0]['exam_score_1']?>" placeholder="Enter Exam score 1">
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">Exam score 2</label>
                  <input type="text" class="form-control" name="exam_score_2" value="<?=$user[0]['exam_score_2']?>" placeholder="Enter Exam score 2">
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">Exam score 3</label>
                  <input type="text" class="form-control" name="exam_score_3" value="<?=$user[0]['exam_score_3']?>" placeholder="Enter Exam score 3">
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">GPA</label>
                  <input type="text" class="form-control" name="gpa" value="<?=$user[0]['gpa']?>" placeholder="Enter GPA">
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password" value="<?=$user[0]['password']?>" placeholder="Enter Password">
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">Conform Password</label>
                  <input type="password" class="form-control" name="c_password" value="<?=$user[0]['password']?>" placeholder="Enter Conform Password">
                </div>
				 <div class="form-group">
                  <label for="exampleInputEmail1">Status</label>
                 <select class="form-control" name="status">
						<option <?php if($user[0]['status']=='Active'){ ?> selected="selected" <?php } ?> >Active</option>
						<option <?php if($user[0]['status']=='Inactive'){ ?> selected="selected" <?php } ?>>Inactive</option>
						<option <?php if($user[0]['status']=='Pending'){ ?> selected="selected" <?php } ?>>Pending</option>
				  </select>	
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Add Student</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php include('footer.php'); ?>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url(); ?>plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url(); ?>plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url(); ?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url(); ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url(); ?>plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
</body>
</html>

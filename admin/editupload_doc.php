<?php
 session_start();
 if($_SESSION['adminUName']=='')
 {
  header('Location:login.php');
 }
 include_once 'Config.php';
  if(isset($_GET['upload_id'])){
  $service_provider_id=base64_decode($_GET['upload_id']);
  $_SESSION['service_provider_id']=$service_provider_id;
  }
 global $msg;
  $id=base64_decode($_GET['id']);
  if(isset($_POST['submit'])){
 
   if($_FILES['doc_file']['name']<>''){
    $res='';
   $ifileext=explode('.',$_FILES['doc_file']['name']);
   $ifileext1=$ifileext[count($ifileext)-1];
   if($ifileext1=='jpg' or $ifileext1=='docx' or $ifileext1=='doc' or $ifileext1=='pdf' or $ifileext1=='jpeg' or $ifileext1=='png')
   {
    $image_file='upload_doc/'.time().rand(1111,9999).'.'.$ifileext1;
        $itarget2 = "";
   $itarget2 = $itarget2.$image_file;
   $query=$mysqli->query("SELECT * FROM `upload_doc` WHERE `doc_id`='$id'");
   if($query->num_rows > 0)
   {
   $res=$query->fetch_assoc();
   $img=$res['doc_file'];
   if($img!='')
   {
   $path="images/";
   unlink("$path"."$img");
   }
   }
   move_uploaded_file($_FILES['doc_file']['tmp_name'], $itarget2);
   $target_file = $itarget2.basename($_FILES["doc_file"]["name"]);
    $image_file='../admin/'.$image_file;
   $res=$mysqli->query("UPDATE `upload_doc` SET `doc_file`='".$image_file."',`doc_name`='".addslashes($_POST['doc_name'])."',`service_provider_id`='".$_SESSION['service_provider_id']."' WHERE `doc_id`='$id'");
  }     
  if($res)
  {
  $msg='<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">X</button><strong>Well done!</strong> Data succesfully Saved</div>';
   }
   else 
   {
   $msg='<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">X</button><strong>Oh snap!</strong>  Failed to save Please try again.</div>';   
   }
   }
   elseif($_POST['doc_name']<>'')
   {
    $res=$mysqli->query("UPDATE `upload_doc` SET `doc_name`='".addslashes($_POST['doc_name'])."',`service_provider_id`='".$_SESSION['service_provider_id']."' WHERE `doc_id`='$id'");
   $msg='<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">X</button><strong>Well done!</strong> Data succesfully Saved</div>';
   }
   else
   {
     $msg='<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">X</button><strong>Oh snap!</strong> Failed to save Please try again.</div>';   
   }
 }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<script type="text/javascript">
      function readURL(input,d) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#image'+d)
                        .attr('src', e.target.result)
                        .width(250)
                        .height(200);
                };
                reader.readAsDataURL(input.files[0]);
            }
        } 
</script>

</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
  <!-- Navbar -->
  <?php include_once('includes/header.php'); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include_once('includes/left.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Upload Document</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Upload Document</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <?php if(isset($msg)){echo $msg;}?>
                  <?php  
                     $query=$mysqli->query("SELECT * FROM upload_doc WHERE doc_id='$id'");
                     $upload_doc_res=$query->fetch_assoc();
                   ?>
      <div class="row">
        <div class="col-md-12">
          <div class="card card-info card-outline">
            <div class="card-header">
              <h3 class="card-title">
               Edit Details
                <small></small>
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm"
                        data-widget="collapse"
                        data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool btn-sm"
                        data-widget="remove"
                        data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
             
            <div class="card-body">
                <form  method="post" enctype="multipart/form-data">

                      <div class="form-group">
                        <label class="col-sm-6 control-label">Document Name</label>
                        <div class="col-sm-6">
                          <select class="form-control" name="doc_name" required readonly>
                              <option <?php if($upload_doc_res['doc_name']){ ?> selected <?php }?> value="<?php echo $upload_doc_res['doc_name'];?>"><?php echo $upload_doc_res['doc_name'];?></option>
                              
                          </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Image</label>
                        <div class="col-sm-10">
                         <input type="file" name="doc_file" onChange="readURL(this,1);" required">
                         <p class="help-block">You can upload only png pdf docx and jpg or jpeg.</p>
                          
                           <a href="upload_doc/<?php echo $upload_doc_res['doc_file'];?>" download>
                              <img src="upload_doc/images/download.jpg" id="image1" height="200px;" >
                            </a>
                          
                        </div>
                      </div>
                      
                     

                   
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" name="submit" class="btn btn-success btn-flat">Submit</button>
                          <a href="upload_doc.php">
                            <input type="button" class="btn btn-info btn-flat" value="Back" style="margin-left:10px;">
                          </a>
                        </div>
                      </div>
                </form>
            </div>

          </div>
          <!-- /.card -->

        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <?php echo include_once('includes/footer.php');?>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- CK Editor -->
<script src="plugins/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>


<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    
  })
</script>
</body>
</html>

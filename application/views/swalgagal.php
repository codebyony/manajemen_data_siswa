<?php
$this->load->view('_bagian/kepala');
?>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <?php echo form_open('login/cek_login');?>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username" id="username">
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" id="password">
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" id="login">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    <?php echo form_close(); ?>
    
  </div>
  <!-- /.login-box-body -->
</div>

<?php
$this->load->view('_bagian/kaki');
?>

<script>
  Swal({
  title: 'Gagal',
  text: "Proses Login Gagal",
  type: 'error',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'Ok'
}).then((result) => {
  if (result.value) {
      window.location.href = "http://localhost/onyy/index.php/login/";
    
  }
})
  </script>
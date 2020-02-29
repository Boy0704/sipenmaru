
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="Pendaftaran Mahasiswa Baru STIE IGI" content="Sistem Informasi Pendaftaran Berbasis Online Mahasiswa Baru STIE IGI">
  <meta name="IT STIE IGI" content="">
  <!--<link rel="icon" href="assets/logo.png">-->

  <title>Penerimaan Mahasiswa Baru STIE IGI</title>
  <base href="<?php echo base_url() ?>" />
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/bootstrap-datepicker.css" rel="stylesheet">
  <script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
  <style>
      body{padding-top: 50px;}
      .panel-heading {
        background-color: #FFA500!important;
      }

      .panel-default > .panel-heading {
        color: #fff;
      }
  </style>
</head>

<body style="background-color:orange;">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url() ?>">Sipenmaru STIE IGI</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <!-- <ul class="nav navbar-nav">
                        <li class="active"><a href="blog/artikel/8">VISI MISI <span class="sr-only">(current)</span></a></li>
                              <li><a href="blog/artikel/2">PROGRAM STUDI</a></li>
                              <li><a href="blog/artikel/3">KALENDER</a></li>
                              <li><a href="blog/artikel/4">KONTAK</a></li>
                              <li><a href="blog/artikel/5">FAQ</a></li>
                              <li><a href="blog/artikel/9">FASILITAS</a></li>
                  </ul> -->
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
</nav>
<div style="margin-top: 30px;"></div>
<!-- <section style="background-color:#fff;margin-bottom: 20px;color:black">
	<div class="container">
	    <div class="row" style="padding-top:10px; padding-bottom:10px;" >
	    	<div class="col-md-12 text-center">
	    		 <img src="assets/logo2.png" style="height:130px;width:100%;margin:auto" />
	    	</div>
	       	<div class="col-md-8 text-center">
	    		<h4>SEKOLAH TINGGI ILMU EKONOMI PONTIANAK</h4>
	    		<h5>SISTEM INFORMASI PENERIMAAN MAHASISWA BARU</h5>
	    		<h5>Jl. Sultan Hamid II No 163, Pontianak Timur, Kota Pontianak, Kalimantan Barat 78243</h5>
	    	</div>

	    </div>
	</div>
  <hr>
</section> -->

<div class="container">
    <div class="row">
        <div class="col-md-3">

            <div class="row">
          <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">MENU UTAMA</div>
                <!--<div class="panel-body">-->
                  <table class="table table-hover">
                    <?php 
                    if ($this->session->userdata('level') == '') {
                     } elseif ($this->session->userdata('level') == 'mahasiswa') {
                     ?>
                      <tr>
                        <td></td>
                        <?php 
                        $no_p = $this->session->userdata('username');
                        $foto = $this->db->query("SELECT foto FROM pendaftaran where no_pendaftaran='$no_p'")->row();
                         ?>
                        <td><img src="files/foto/<?php echo $foto->foto; ?>" style="width: 50px; height: 50px;"></td>
                      </tr>
                      <?php
                      }
                      ?>
                    <tr>
                      <td></td>
                      <td><b>Selamat Datang, <?php echo $this->session->userdata('username')?></b></td>
                    </tr>
                    <?php 
                    if ($this->session->userdata('level') == '') {
                     ?>

                    <tr>
                      <td><i class="glyphicon glyphicon-check"></i></td>
                      <td><a href="app/formdaftar"> Pendaftaran</a></td>
                    </tr>
                    <tr>
                      <td><i class="glyphicon glyphicon-check"></i></td>
                      <td><a href="app/download_brosur/"> Download Brosur</a></td>
                    </tr>
                    <?php } elseif ($this->session->userdata('level') == 'mahasiswa') {?>
                    <tr>
                      <td><i class="glyphicon glyphicon-check"></i></td>
                      <td><a href="app/ubah_daftar/<?php echo $this->session->userdata('username') ?>" target="_blank"> Ubah Data Pendaftaran</a></td>
                    </tr>
                    <!-- <tr>
                      <td><i class="glyphicon glyphicon-check"></i></td>
                      <td><a href="app/cetak_kartu/<?php echo $this->session->userdata('username') ?>" target="_blank"> Cetak Kartu Ujian</a></td>
                    </tr> -->
                    <tr>
                      <td><i class="glyphicon glyphicon-check"></i></td>
                      <td><a href="app/bypass_ujian_pmb/<?php echo $this->session->userdata('username') ?>" target="_blank"> Ujian PMB</a></td>
                    </tr>
                    <tr>
                      <td><i class="glyphicon glyphicon-check"></i></td>
                      <td><a href="app/cetak_pendaftaran/<?php echo $this->session->userdata('username') ?>" target="_blank"> Cetak Pendaftaran</a></td>
                    </tr>
                    <tr>
                      <td><i class="glyphicon glyphicon-check"></i></td>
                      <td><a href="app/upload_bukti/"> Upload Bukti Pembayaran</a></td>
                    </tr>
                    <tr>
                      <td><i class="glyphicon glyphicon-check"></i></td>
                      <td><a href="app/logout"> Logout</a></td>
                    </tr>
                    <?php } elseif ($this->session->userdata('level') == 'admin') {?>
                      <tr>
                      <td><i class="glyphicon glyphicon-check"></i></td>
                      <td><a href="app/bypass_ujian_pmb/<?php echo $this->session->userdata('username'); ?>"> Manajemen Ujian PMB</a></td>
                    </tr>
                    <tr>
                      <td><i class="glyphicon glyphicon-check"></i></td>
                      <td><a href="konten"> Manajemen Konten</a></td>
                    </tr>
                    <tr>
                      <td><i class="glyphicon glyphicon-check"></i></td>
                      <td><a href="brosur"> Brosur</a></td>
                    </tr>
                    <tr>
                      <td><i class="glyphicon glyphicon-check"></i></td>
                      <td><a href="pendaftaran"> Data Calon Mahasiswa</a></td>
                    </tr>
                    <tr>
                      <td><i class="glyphicon glyphicon-check"></i></td>
                      <td><a href="bukti_pembayaran"> Data Pembayaran Transfer</a></td>
                    </tr>
                    <tr>
                      <td><i class="glyphicon glyphicon-check"></i></td>
                      <td><a href="users"> Manajemen User</a></td>
                    </tr>
                    <tr>
                      <td><i class="glyphicon glyphicon-check"></i></td>
                      <td><a href="app/logout"> Logout</a></td>
                    </tr>
                    <?php } ?>

                  </table>

                <!--</div>-->
              </div>
          </div>
      </div>      
                            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">Login Calon Mahasiswa</div>
                        <table class="table table-hover">    
                            <tr><td><form method="post" action="app/aksi_login">
<input class="form-control" type="text" name="username" value="" placeholder="No. Pendaftaran" /><br>
<input class="form-control" type="password" name="password" value=""  placeholder="Kode Sandi"  />
<br />
<input type="submit" class="btn btn-primary" name="masuk" value="Login" />
</form></td></tr>
                        </table>
                    </div>
                </div>
            </div>
  
  

</div><!-- /.blog-sidebar -->
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-12">
              <?php include $konten.'.php'; ?>
            </div>
        </div>
    </div>
        

    </div>
    <!-- /.row -->
    <div class="row">
    <hr>
    <div class="col-sm-12">
        <footer style="text-align: center">
            <p>Hak Cipta &copy; 2019 - 2020, IT STIE IGI </p>
        </footer>
    </div>
</div>
    <script src="assets/jquery.js"></script>
    <script>window.jQuery || document.write('<script src="assets/jquery.js"><\/script>')</script>
    <script src="assets/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/ie10-viewport-bug-workaround.js"></script>
    <script src="assets/bootstrap-datepicker.js"></script>
	
	<script type="text/javascript">
			$('.tgl').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                //startView: 2,
                todayBtn: true,
                todayHighlight: true,
                //clearBtn: true,
                language: 'id'
            });
	</script><script src="assets/form-validator.min.js"></script>
  <!-- BEGIN JIVOSITE CODE {literal} -->
  <!-- <script type='text/javascript'>
  (function(){ var widget_id = 'd1aWCNVAQD';var d=document;var w=window;function l(){
  var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script> -->
  <!-- {/literal} END JIVOSITE CODE -->

</body>
</html>
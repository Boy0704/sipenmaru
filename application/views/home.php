<?php 
$data = $this->db->query("SELECT * FROM konten where id_konten='1'")->row();
 ?>
<div class="alert alert-success">
    <img src="assets/brosur_home.jpg" class="img-responsive" alt="Cinque Terre">
  <marquee><h1>SELAMAT DATANG DI APLIKASI SIPENMARU AKADEMI KEBIDANAN KELUARGA BUNDA JAMBI</h1></marquee>
</div>

<div class="panel panel-info">
	<div class="panel-heading" style="color: white">
		<?php echo $data->judul ?>
	</div>
	<div class="panel-body">
		<?php echo $data->isi_konten ?>
	</div>
</div>

<div class="row">
            <div class="col-sm-12">
              <div class="well">
                  <div id="carousel" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner" role="listbox">
                      	<?php 
                      	$s = $this->db->query("SELECT * FROM brosur where id_brosur='3'")->row();
                      	$d = $this->db->query("SELECT * FROM brosur where id_brosur='5'")->row();
                      	
                      	$k = $this->db->query("SELECT * FROM brosur where id_brosur='6'")->row();

                      	 ?>
                                              <div class="item active">
                            <h2><?php echo $s->judul ?> </h2>
                            <p><img src="files/brosur/<?php echo $s->brosur ?>" alt="" width="100%" /></p>                        </div>
                                              <div class="item ">
                            <h2><?php echo $d->judul ?> </h2>
                            <p><img src="files/brosur/<?php echo $d->brosur ?>" alt="" width="100%" /></p>                        </div>
                                            </div>
                            <div class="item ">
                            <h2><?php echo $k->judul ?> </h2>
                            <p><img src="files/brosur/<?php echo $k->brosur ?>" alt="" width="100%" /></p>                        </div>
                                            </div>
                  </div>
              </div>
            </div>
          </div>  


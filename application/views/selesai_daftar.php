<div class="alert alert-success">
    <b><?php echo $this->session->flashdata('pesan'); ?></b>
</div>

<div class="alert alert-info">
    <h3>Informasi Akun</h3>
    <p>Silahkan login untuk bisa melakukan pembayaran</p>
    Username : <?php echo $this->session->flashdata('username'); ?><br>
    Password : <?php echo $this->session->flashdata('password'); ?><br>
</div>
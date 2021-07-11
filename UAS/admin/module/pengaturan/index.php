
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
						<h2>Setting</h2>
						<hr>
						<?php if(isset($_GET['success'])){?>
						<div class="alert alert-success">
							<p>Ubah Data Berhasil !</p>
						</div>
						<?php }?>
								<form method="post" action="fungsi/edit/edit.php?pengaturan=ubah">
									<label for="">Nama Toko</label>
									<input class="form-control" name="namatoko" value="<?php echo $toko['nama_toko'];?>" placeholder="Nama Toko">
									<label for="">Alamat</label>
									<textarea class="form-control" name="alamat"placeholder="Alamat Toko"><?php echo $toko['alamat_toko'];?></textarea>
									<label for="">Telepon</label>
									<input class="form-control" name="kontak" value="<?php echo $toko['tlp'];?>" placeholder="Kontak (Hp)">
									<label for="">Owner</label>
									<input class="form-control" name="pemilik" value="<?php echo $toko['nama_pemilik'];?>" placeholder="Nama Pemilik Toko">
									<button style="margin-top:20px" id="tombol-simpan" class="btn btn-primary pull-right"><i class="fa fa-pencil"></i> Update Data</button>
								</form>
						<div class="clearfix" style="padding-top:41%;"></div>
				  </div>
              </div>
          </section>
      </section>
	

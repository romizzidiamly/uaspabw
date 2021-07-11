
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12">
					<div class="row" style="margin-left:1pc;margin-right:1pc;">
				  <h1>Dashboard</h1>
				  <hr>
				   <?php 
						$sql=" select * from barang where stok <=3";
						$row = $config -> prepare($sql);
						$row -> execute();
						$q = $row -> fetch();
							if($q['stok'] == 3){	
							if($q['stok'] == 2){	
							if($q['stok'] == 1){	
								?>	
								<script>
									$(document).ready(function(){
										$('#pesan_sedia').css("color","red");
										$('#pesan_sedia').append("<span class='glyphicon glyphicon-asterisk'></span>");
									});
								</script>
								<?php
								echo "
								<br/>
								<div class='col-sm-12'>
									<div style='padding:5px;' class='alert alert-warning'>
										<span class='glyphicon glyphicon-info-sign'></span> Stok  <a style='color:red'>". $q['nama_barang']."</a> yang tersisa sudah kurang dari 3 . silahkan pesan lagi !!
										<span class='pull-right'><a href='index.php?page=barang'>Tabel Barang <i class='fa fa-arrow-right'></i></a></span>
									</div>
								</div>
								";	
							}}}
						?>
				  <?php $hasil_barang = $lihat -> barang_row();?>
				  <?php $hasil_kategori = $lihat -> kategori_row();?>
				  <?php $stok = $lihat -> barang_stok_row();?>
				  <?php $jual = $lihat -> jual_row();?>
                      <!--STATUS PANELS -->
                      	<div class="col-md-3">
                      		<div class="panel panel-primary">
                      			<div class="panel-heading">
						  			<h5><i class="fa fa-file-text" aria-hidden="true"></i> Nama Barang</h5>
                      			</div>
                      			<div class="panel-body">
									<center><h1><?php echo $hasil_barang;?></h1></center>
								</div>
								<div class="panel-footer">
									<h4 style="font-size:15px;"><a href='index.php?page=barang'>Lihat Barang <i class='fa fa-arrow-right'></i></a></h4>
								</div>
	                      	</div><!--/grey-panel -->
                      	</div><!-- /col-md-3-->
                      <!-- STATUS PANELS -->
                      	<div class="col-md-3">
                      		<div class="panel panel-success">
                      			<div class="panel-heading">
						  			<h5><i class="fa fa-th-large" aria-hidden="true"></i> Stok Barang</h5>
                      			</div>
                      			<div class="panel-body">
									<center><h1><?php echo $stok['jml'];?></h1></center>
								</div>
								<div class="panel-footer">
									<h4 style="font-size:15px;"><a href='index.php?page=barang'>Lihat Stok Barang <i class='fa fa-arrow-right'></i></a></h4>
								</div>
	                      	</div><!--/grey-panel -->
                      	</div><!-- /col-md-3-->
                      <!-- STATUS PANELS -->
                      	<div class="col-md-3">
                      		<div class="panel panel-info">
                      			<div class="panel-heading">
						  			<h5><i class="fa fa-bell" aria-hidden="true"></i> Telah Terjual</h5>
                      			</div>
                      			<div class="panel-body">
									<center><h1><?php echo $jual['stok'];?></h1></center>
								</div>
								<div class="panel-footer">
									<h4 style="font-size:15px;"><a href='index.php?page=laporan'>Lihat Laporan <i class='fa fa-arrow-right'></i></a></h4>
								</div>
	                      	</div><!--/grey-panel -->
                      	</div><!-- /col-md-3-->
                      	<div class="col-md-3">
                      		<div class="panel panel-danger">
                      			<div class="panel-heading">
						  			<h5><i class="fa fa-bookmark" aria-hidden="true"></i> Kategori Barang</h5>
                      			</div>
                      			<div class="panel-body">
									<center><h1><?php echo $hasil_kategori;?></h1></center>
								</div>
								<div class="panel-footer">
									<h4 style="font-size:15px;"><a href='index.php?page=kategori'>Lihat Kategori Barang <i class='fa fa-arrow-right'></i></a></h4>
								</div>
	                      	</div><!--/grey-panel -->
						  </div><!-- /col-md-3-->
						  

						<!--STATUS PANELS -->
						<div class="col-md-6">
                      		<div class="panel panel-default">
                      			<div class="panel-heading">
						  			<h3><i class="fa fa-money" aria-hidden="true"></i> Pemasukan</h3>
                      			</div>
                      			<div class="panel-body">
								  <?php $hasil = $lihat -> jumlah_nota(); ?>
									<center><h1>Rp. <?php echo number_format($hasil['bayar']);?>,-</h1></center>
								</div>
	                      	</div><!--/grey-panel -->
                      	</div><!-- /col-md-3-->
                      <!-- STATUS PANELS -->
                      	<div class="col-md-6">
                      		<div class="panel panel-warning">
                      			<div class="panel-heading">
						  			<h3><i class="fa fa-money" aria-hidden="true"></i> Pengeluaran</h3>
                      			</div>
                      			<div class="panel-body">
								  <?php  $c = $lihat -> jml(); ?>
									<center><h1>Rp. <?php echo number_format($c['byr']);?>,-</h1></center>
								</div>
	                      	</div><!--/grey-panel -->
                      	</div><!-- /col-md-3-->
					</div>
				</div>
           </div><!-- /col-lg-9 END SECTION MIDDLE -->         
                  
			
		 <div class="clearfix" style="padding-top:18%;"></div>
	  </section>
  </section>


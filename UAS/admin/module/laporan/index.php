
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
						<h2>Data Laporan</h2>
						<hr>
						<h4>Cari Laporan Perbulan</h4>
						<br/>
						<form method="post" action="index.php?page=laporan&cari=ok">
							<table class="table-responsive table-condensed">
								<tr>
								<td>
									Pilih Bulan
								</td>
								<td>
									Pilih Tahun
								</td>
								<td>
									Aksi
								</td>
								</tr>
								<tr>
								<td>
								<select name="bln">
									<option selected="selected">Bulan</option>
									<?php
									$bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
									$jlh_bln=count($bulan);
									$bln1 = array('01','02','03','04','05','06','07','08','09','10','11','12');
									$no=1;
									for($c=0; $c<$jlh_bln; $c+=1){
										echo"<option value='$bln1[$c]'> $bulan[$c] </option>";
									$no++;}
									?>
									</select>
								</td>
								<td style="padding-left:2pc;">
								<?php
									$now=date('Y');
									echo "<select name='thn'>";
									echo '
									<option selected="selected">Tahun</option>';
									for ($a=2000;$a<=$now;$a++)
									{
										echo "<option value='$a'>$a</option>";
									}
									echo "</select>";
									?>
								</td>
								<td style="padding-left:2pc;">
									<input type="hidden" name="periode" value="ya">
									<button class="btn btn-primary">
										Cari
									</button>
								</td>
								</tr>
							</table>
						</form>
						<br/>
						<br/>
						<?php if(isset($_GET['remove'])){?>
						<div class="alert alert-danger">
							<p>Hapus Data Berhasil !</p>
						</div>
						<?php }?>
						
						<?php if(!empty($_GET['cari'])){?>
						<!-- view barang -->	
						<div class="modal-view">
							<table class="table table-bordered table-hover table-striped" id="example1">
								<thead>
									<tr style="background:#26747E;color:#fff;">
										<td> No</td>
										<td> ID Barang</td>
										<td> Nama Barang</td>
										<td style="width:10%;"> Jumlah</td>
										<td style="width:20%;"> Total</td>
										<td> Kasir</td>
										<td> Tanggal Input</td>
									</tr>
								</thead>
								<tbody>
									<?php 
										$periode = $_POST['bln'].'-'.$_POST['thn'];
										$no=1; 
										$bayar = 0;
										$hasil = $lihat -> periode_jual($periode);
										foreach($hasil as $isi){
											$bayar += $isi['total'];
									?>
									<tr>
										<td><?php echo $no;?></td>
										<td><?php echo $isi['id_barang'];?></td>
										<td><?php echo $isi['nama_barang'];?></td>
										<td><?php echo $isi['jumlah'];?> </td>
										<td>Rp.<?php echo number_format($isi['total']);?>,-</td>
										<td><?php echo $isi['nm_member'];?></td>
										<td><?php echo $isi['tanggal_input'];?></td>
									</tr>
									<?php $no++; }?>
								</tbody>
							</table>
							<h3>
								<?php $hasil = $lihat -> jumlah_nota(); ?>
								Pemasukan : Rp.<?php echo number_format($bayar);?>,-
							</h3>
							<div class="clearfix" style="padding-top:27%;"></div>
						</div>
						<?php }else{?>
						<!-- view barang -->	
						<div class="modal-view">
							<table class="table table-bordered table-hover table-striped" id="example1">
								<thead>
									<tr style="background:#26747E;color:#fff;">
										<td> No</td>
										<td> ID Barang</td>
										<td> Nama Barang</td>
										<td style="width:10%;"> Jumlah</td>
										<td style="width:20%;"> Total</td>
										<td> Kasir</td>
										<td> Tanggal Input</td>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; $hasil = $lihat -> jual();?>
									<?php 
									$bayar = 0;
									foreach($hasil as $isi){ 
											$bayar += $isi['total'];
									?>
									<tr>
										<td><?php echo $no;?></td>
										<td><?php echo $isi['id_barang'];?></td>
										<td><?php echo $isi['nama_barang'];?></td>
										<td><?php echo $isi['jumlah'];?> </td>
										<td>Rp.<?php echo number_format($isi['total']);?>,-</td>
										<td><?php echo $isi['nm_member'];?></td>
										<td><?php echo $isi['tanggal_input'];?></td>
									</tr>
									<?php $no++; }?>
								</tbody>
							</table>
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
							<div class="clearfix" style="padding-top:27%;"></div>
						</div>
						<?php }?>
					</div>
				  </div>
              </div>
          </section>
      </section>
	


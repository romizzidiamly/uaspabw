
<?php 
  $id = $_SESSION['admin']['id_member'];
  $hasil_profil = $lihat -> member_edit($id);
?>
      <aside>
          <div id="sidebar"  class="nav-collapse" style="background-color:#005B66">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              	  	
                  <li class="mt">
                      <a href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                      <i class="fa fa-database" aria-hidden="true"></i>
                          <span>Inventori <span style="padding-left:2px;"> <i class="fa fa-angle-down"></i></span></span>
                      </a>
                      <ul class="sub">
                          <li><a  href="index.php?page=barang">Barang</a></li>
                          <li><a  href="index.php?page=kategori">Kategori</a></li>
                          <li><a  href="index.php?page=user">User</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                      <i class="fa fa-credit-card" aria-hidden="true"></i>
                          <span>Transaksi <span style="padding-left:2px;"> <i class="fa fa-angle-down"></i></span></span>
                      </a>
                      <ul class="sub">
                          <li><a  href="index.php?page=jual">Transaksi Jual</a></li>
                          <li><a  href="index.php?page=laporan">Laporan Penjualan</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cog"></i>
                          <span>Setting <span style="padding-left:2px;"> <i class="fa fa-angle-down"></i></span></span>
                      </a>
                      <ul class="sub">
                          <li><a href="index.php?page=pengaturan">Pengaturan Toko</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      

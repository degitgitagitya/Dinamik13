
	<div id="event-detail" class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h3 class="title">
					<img class="ss-ornament" src="<?php echo base_url("assets/img/logo/ss-left-or.png"); ?>">
					<b>DAFTAR LOMBA</b>
					<img class="ss-ornament" src="<?php echo base_url("assets/img/logo/ss-right-or.png"); ?>">
				</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<ul class="nav nav-tabs event-tabs">
					<li <?php if(!isset($activetab) || $activetab == "pca") echo "class='active'"; ?>><a data-toggle="tab" href="#pca">PCA</a></li>
					<li <?php if(isset($activetab) && $activetab == "cspc") echo "class='active'"; ?>><a data-toggle="tab" href="#cspc">CSPC</a></li>
					<li <?php if(isset($activetab) && $activetab == "ic") echo "class='active'"; ?>><a data-toggle="tab" href="#ic">IC</a></li>
					<li <?php if(isset($activetab) && $activetab == "lda") echo "class='active'"; ?>><a data-toggle="tab" href="#lda">LDA</a></li>
					<li <?php if(isset($activetab) && $activetab == "lcw") echo "class='active'"; ?>><a data-toggle="tab" href="#lcw">LCW</a></li>
					<li <?php if(isset($activetab) && $activetab == "lca") echo "class='active'"; ?>><a data-toggle="tab" href="#lca">LCA</a></li>
					<li <?php if(isset($activetab) && $activetab == "kj") echo "class='active'"; ?>><a data-toggle="tab" href="#kj">KJ</a></li>
					<!-- <li <?php if(isset($activetab) && $activetab == "kj") echo "class='active'"; ?>><a data-toggle="tab" href="#kompetisijaringan">KJ</a></li> -->
				</ul>
				
				<div class="tab-content event-detail-list">

					<!-- pca -->
					<div id="pca" class="tab-pane fade in <?php if(!isset($activetab) || $activetab == "pca") echo "active"; ?>">
					  <img src="<?php echo base_url("assets/img/icon_white/pca.png"); ?>" class="img-contest" align="center"><br><br>
					  <h3 class="event-detail-title">PERSONAL COMPUTER ASSEMBLING</h3>
					  <p class="event-detail-date">
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Kamis, 22 November 2018
					  </p>
					  <p class="event-detail-date">
						<?php echo "Rp. ".number_format($list[3]['event_price'],0,',','.'); ?>
					  </p>					  					  
					  <p class="event-detail-date">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Gedung FPMIPA B,  Universitas Pendidikan Indonesia
					  </p>
					  <p class="event-detail-text">
					  <?php echo $list[3]['event_description']; ?>
					  </p>
					  <p class="event-detail-date">
						<span class="glyphicon glyphicon glyphicon-download" aria-hidden="true"></span> <a href="<?php 	echo $list[3]['event_rule']; ?>" title="" style="color:orange;" target="_blank">Download Booklet PCA</a>
					  </p>						  
					</div>

					<!-- cspc -->
					<div id="cspc" class="tab-pane fade in <?php if(isset($activetab) && $activetab == "cspc") echo "active"; ?>">
					  <img src="<?php echo base_url("assets/img/icon_white/cspc.png"); ?>" class="img-contest" align="center"><br><br>
					  <h3 class="event-detail-title">COMPUTER SCIENCE PROGRAMMING COMPETITION</h3>
					  <p class="event-detail-date">
					  	<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Warming Up : Jumat, 12 Oktober 2018 - Kamis, 18 Oktober 2018<br>	
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Penyisihan : Kamis, 25 Oktober 2018 <br>	
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Semifinal : Senin, 05 November 2018 <br>	
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Final : Kamis, 22 November 2018
					  </p>
					  <p class="event-detail-date">
						<?php echo "Rp. ".number_format($list[4]['event_price'],0,',','.'); ?>
					  </p>					  					  
					  <p class="event-detail-date">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Online
					  </p>
					  <p class="event-detail-text">
					  <?php echo $list[4]['event_description']; ?>
					  </p>
					  <p class="event-detail-date">
						<span class="glyphicon glyphicon glyphicon-download" aria-hidden="true"></span> <a href="<?php 	echo $list[4]['event_rule']; ?>" title="" style="color:orange;" target="_blank">Download Booklet CSPC</a>
					  </p>						  
					</div>

					<!-- ic -->
					<div id="ic" class="tab-pane fade in <?php if(isset($activetab) && $activetab == "ic") echo "active"; ?>">
					  <img src="<?php echo base_url("assets/img/icon_white/IC.png"); ?>" class="img-contest" align="center"><br><br>
					  <h3 class="event-detail-title">ILKOM CHALLENGE</h3>
					  <p class="event-detail-date">
					  	<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Technical Meeting :<br>	
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Penyisihan 5x5 :<br>	
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Semifinal 5x5 :<br>	
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Penyisihan 3x3 :<br>	
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Semifinal & Final 3x3 :<br>	
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Final 5x5:
					  </p>
					  <p class="event-detail-date">
						<?php echo "Rp. ".number_format($list[0]['event_price'],0,',','.'); ?>
					  </p>					  
					  <p class="event-detail-date">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Online
					  </p>
					  <p class="event-detail-text">
					  <?php echo $list[0]['event_description']; ?>
					  </p>
					  <p class="event-detail-date">
						<span class="glyphicon glyphicon glyphicon-download" aria-hidden="true"></span> <a href="<?php 	echo $list[0]['event_rule']; ?>" title="" style="color:orange;" target="_blank">Download Booklet IC </a>
					  </p>						  
					</div>

					<!-- lda -->
					<div id="lda" class="tab-pane fade in <?php if(isset($activetab) && $activetab == "lda") echo "active"; ?>">
					  <img src="<?php echo base_url("assets/img/icon_white/opk.png"); ?>" class="img-contest brightness" align="center"><br><br>
					  <h3 class="event-detail-title">LOMBA DESAIN APLIKASI</h3>
					  <p class="event-detail-date">
					  	<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Batas Pengumpulan Karya : Jumat, 26 Oktober 2018<br>	
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Seleksi Administrasi : Minggu. 28 Oktober 2018 - Rabu, 31 Oktober 2018<br>	
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Babak Penyisihan : Kamis, 1 November 2018 - Selasa, 6 November 2018<br>	
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Pengumuman Peserta Lolos Babak Penyisihan : Rabu, 7 November 2018<br>	
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Final : Kamis, 22 November						
					  </p>
					  <p class="event-detail-date">
						<?php echo "Rp. ".number_format($list[2]['event_price'],0,',','.'); ?>
					  </p>					  
					  <p class="event-detail-date">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Online
					  </p>
					  <p class="event-detail-text">
					  <?php echo $list[2]['event_description']; ?>
					  </p>
					  <p class="event-detail-date">
						<span class="glyphicon glyphicon glyphicon-download" aria-hidden="true"></span> <a href="<?php 	echo $list[2]['event_rule']; ?>" title="" style="color:orange;" target="_blank">Download Booklet LDA</a>
					  </p>					  
					</div>																		
					
					<!-- lcw -->
					<div id="lcw" class="tab-pane fade in <?php if(isset($activetab) && $activetab == "lcw") echo "active"; ?>">
					  <img src="<?php echo base_url("assets/img/icon_white/lcw.png"); ?>" class="img-contest" align="center"><br><br>
					  <h3 class="event-detail-title">LOMBA CIPTA WEB</h3>
					  <p class="event-detail-date">
					  	<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
						Pengumpulan Abstraksi : Kamis, 20 September 2018 – Rabu, 10 Oktober 2018<br>
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
						Pengumuman Lolos Abstraksi : Rabu, 17 Oktober 2018<br>
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
						Pengumpulan Proposal dan Karya : Kamis, 18 Oktober 2018 - Jumat, 09 November 2018<br>
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
						Pengumuman Lolos Proposal dan Karya    : Jumat, 	16 November 2018<br>
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
						Presentasi Karya    : Kamis, 22 November 2018						
					  </p>
					  <p class="event-detail-date">
						<?php echo "Rp. ".number_format($list[1]['event_price'],0,',','.'); ?>
					  </p>					  					  
					  <p class="event-detail-date">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Gymnasium, Universitas Pendidikan Indonesia
					  </p>					  
					  <p class="event-detail-text">
					  <?php echo $list[1]['event_description']; ?>
					  </p>
					  <p class="event-detail-date">
						<span class="glyphicon glyphicon glyphicon-download" aria-hidden="true"></span> <a href="<?php 	echo $list[1]['event_rule']; ?>" title="" style="color:orange;" target="_blank">Download Booklet LCW </a>
					  </p>					  
					</div>										
					
					<!-- lca -->
					<div id="lca" class="tab-pane fade in <?php if(isset($activetab) && $activetab == "lca") echo "active"; ?>">
					  <img src="<?php echo base_url("assets/img/icon_white/lca.png"); ?>" class="img-contest" align="center"><br><br>
					  <h3 class="event-detail-title">LOMBA CIPTA ANIMASI</h3>
					  <p class="event-detail-date">
					  	<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
						Batas Pengumpulan Karya : Rabu, 7 November 2018<br>
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
						Penyisihan : Selasa, 13 November 2018 - Kamis, 15 November 2018<br>
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
						Pengumpulan Lolos Penyisihan : Sabtu, 17 November 2018<br>
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
						Final    : Kamis, 22 November 2018						
					  </p>
					  <p class="event-detail-date">
						<?php echo "Rp. ".number_format($list[5]['event_price'],0,',','.'); ?>
					  </p>					  					  
					  <p class="event-detail-date">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Online
					  </p>
					  <p class="event-detail-text">
					  <?php echo $list[5]['event_description']; ?>
					  </p>
					  <p class="event-detail-date">
						<span class="glyphicon glyphicon glyphicon-download" aria-hidden="true"></span> <a href="<?php 	echo $list[5]['event_rule']; ?>" title="" style="color:orange;" target="_blank">Download Booklet LCA</a>
					  </p>						  
					</div>
															
					
					<!-- kompetisijaringan -->
					<div id="kj" class="tab-pane fade in <?php if(isset($activetab) && $activetab == "kj") echo "active"; ?>">
					  <img src="<?php echo base_url("assets/img/icon_white/network.png"); ?>" class="img-contest" align="center"><br><br>
					  <h3 class="event-detail-title">KOMPETISI JARINGAN</h3>
					  <p class="event-detail-date">
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Jum’at, 7 April 2017
					  </p>
					  <p class="event-detail-date">
						<?php echo "Rp. ".number_format($list[7]['event_price'],0,',','.'); ?>
					  </p>					  					  
					  <p class="event-detail-date">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Ruang A Gymnasium, Universitas Pendidikan Indonesia
					  </p>
					  <p class="event-detail-text">
					  <?php echo $list[7]['event_description']; ?>
					  </p>
					  <p class="event-detail-date">
						<span class="glyphicon glyphicon glyphicon-download" aria-hidden="true"></span> <a href="<?php 	echo $list[7]['event_rule']; ?>" title="" style="color:orange;" target="_blank">Download Booklet KJ</a>
					  </p>						  
					</div>
					
				  </div>
				</div>

			</div>
		</div>
    </div><!-- /.container -->
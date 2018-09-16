
	<div id="event-detail" class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h3 class="title">
					<img class="ss-ornament" src="<?php echo base_url("assets/img/logo/ss-left-or.png"); ?>">
					<b>DAFTAR ACARA</b>
					<img class="ss-ornament" src="<?php echo base_url("assets/img/logo/ss-right-or.png"); ?>">
				</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<ul class="nav nav-tabs event-tabs">
					<li <?php if(!isset($activetab) || $activetab == "malpen") echo "class='active'"; ?>><a data-toggle="tab" href="#malpen">MALAM PENGANUGERAHAN</a></li>
					<li <?php if(isset($activetab) && $activetab == "semnas") echo "class='active'"; ?>><a data-toggle="tab" href="#semnas">SEMINAR NASIONAL</a></li>
					<li <?php if(isset($activetab) && $activetab == "felose") echo "class='active'"; ?>><a data-toggle="tab" href="#felose">FESTIVAL IT</a></li>					
				</ul>
				
				<div class="tab-content event-detail-list">
					<!-- malpen -->
					<div id="malpen" class="tab-pane fade in <?php if(!isset($activetab) || $activetab == "malpen") echo "active"; ?>">
					  <img src="<?php echo base_url("assets/img/icon_white/opk.png"); ?>" class="img-contest" align="center"><br><br>
					  <h3 class="event-detail-title">MALAM PENGANUGERAHAN</h3>
					  <p class="event-detail-date">
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Kamis, 22 November 2018
					  </p>
					  <p class="event-detail-date">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Gedung Achmad Sanusi, Universitas Pendidikan Indonesia
					  </p>						  			  					  
					  <!-- <p class="event-detail-date">
						<?php echo "Rp. ".number_format($list[9]['event_price'],0,',','.'); ?>
					  </p> -->					  					  
					  <p class="event-detail-text">
					 	<?php echo $list[8]['event_description']; ?>
					  </p>
					</div>
					
					<!-- semnas -->
					<div id="semnas" class="tab-pane fade in <?php if(isset($activetab) && $activetab == "semnas") echo "active"; ?>">
					  <img src="<?php echo base_url("assets/img/icon_white/semnas.png"); ?>" class="img-contest" align="center"><br><br>
					  <h3 class="event-detail-title">SEMINAR NASIONAL</h3>
					  <p class="event-detail-date">
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Kamis, 22 November 2018
					  </p>
<!-- 					  <p class="event-detail-date">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span> 08.00 - 15.00 WIB
					  </p> -->
					  <!-- <p class="event-detail-date">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Gedung Achmad Sanusi, Universitas Pendidikan Indonesia
					  </p>
					  <p class="event-detail-date">
						Presale 2 : (1 Mar - 30 Mar) <br>
						Mahasiswa: <?php echo "Rp. ".number_format($list[8]['event_price']+10000,0,',','.'); ?><br>
						Umum: <?php echo "Rp. ".number_format($list[8]['event_price']+45000,0,',','.'); ?><br>
					  </p>		
					  <p class="event-detail-date">
						On The Spot <br>
						Mahasiswa: <?php echo "Rp. ".number_format($list[8]['event_price']+25000,0,',','.'); ?><br>
						Umum: <?php echo "Rp. ".number_format($list[8]['event_price']+60000,0,',','.'); ?><br>
					  </p> -->					  
					  <p class="event-detail-text">
					 	<?php echo $list[9]['event_description']; ?>
					  </p>
					</div>
					
					<!-- felose -->
					<div id="felose" class="tab-pane fade in <?php if(isset($activetab) && $activetab == "felose") echo "active"; ?>">
					  <img src="<?php echo base_url("assets/img/icon_white/felose.png"); ?>" class="img-contest" align="center"><br><br>
					  <h3 class="event-detail-title">FESTIVAL IT</h3>
					  <!-- <p class="event-detail-date">
						<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Pendaftaran Dibuka 1 Februari 2017
					  </p> -->
					  <p class="event-detail-date">
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Kamis, 22 November 2018
					  </p>					  
					  <p class="event-detail-date">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Gedung Achmad Sanusi, Universitas Pendidikan Indonesia
					  </p>
					  <p class="event-detail-text">
					 	<?php echo $list[10]['event_description']; ?>

					  </p>
					</div>																			
					
				</div>
			</div>

		</div>
	</div>
</div><!-- /.container -->
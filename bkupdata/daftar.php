<!-- Register -->
					<div id="daftar" class="tab-pane fade in <?php if(isset($activetab) && $activetab == "daftarsekolah") echo "active"; ?>">
						<div class="register-box">
							<div class="register-logo">
								<img class="dinamik-foot" src="<?php echo base_url("assets/img/logo/logo-white.png"); ?>">
							</div>

							<div class="register-box-body">
							<p class="login-box-msg">Pendaftaran Sekolah (Lomba)</p>
								<?php echo form_open('home/Akun/regAsSchool'); ?>
									<div class="form-group has-feedback">
										<select name="grade" required class="form-control">
											<option value="">--Pilih Kategori--</option>
											<!-- <option value="SD">SD</option> -->
											<!-- <option value="SMP">SMP</option> -->
											<option value="SMA">SMA</option>
											<option value="SMK">SMK</option>
										</select>
									</div>
									<div class="form-group has-feedback">
										<input type="text" class="form-control" placeholder="Nama Sekolah" name="name">
										<span class="glyphicon glyphicon-home form-control-feedback"></span>
									</div>
									<div class="form-group has-feedback">
										<input type="text" class="form-control" placeholder="Website Sekolah" name="web">
										<span class="glyphicon glyphicon-globe form-control-feedback"></span>
									</div>
									<div class="form-group has-feedback">
										<select name="city" required class="form-control">
											<?php
											echo "<option value=''>--Pilih kota/kabupaten--</option>";
											foreach($city as $data) 
												echo "<option value=".$data['city_id'].">".$data['city_name']."</option>";
											?>
										</select>
									</div>
									<div class="form-group has-feedback">
										<input type="email" required class="form-control" placeholder="E-mail Resmi Sekolah" name="email">
										<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
									</div>
									
									<div class="form-group has-feedback">
										<input type="number" required class="form-control" placeholder="Kontak Resmi" name="contact">
										<span class="glyphicon glyphicon-phone form-control-feedback"></span>
									</div>
									
									<div class="row">
										<div class="col-xs-8">
											<div class="checkbox icheck">
												<label>
													<input type="checkbox" name="cb" required> Saya setuju terhadap <br>
													<a href="#">syarat dan ketentuan.</a>
												</label>
											</div>
										</div>
									<!-- /.col -->
										<div class="col-xs-4">
											<button type="submit" class="btn btn-primary btn-block btn-flat" name="btnDaftarSekolah">Daftar</button>
										</div>
									<!-- /.col -->
									</div>
								</form>
								
<!-- 								 CURRENTLY NOT USED
								<div class="social-auth-links text-center">
									<p>- OR -</p>
									<a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
										Facebook</a>
									<a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
										Google+</a>
								</div>
								 -->
								 <p>Username dan sandi akan dikirim melalui surel yang tersedia setelah kami <b>verifikasi</b></p>
								<a data-toggle="tab" href="#masuk" class="text-center">Saya sudah mempunyai akun</a>
							</div>
							<!-- /.form-box -->
						</div>
					</div>
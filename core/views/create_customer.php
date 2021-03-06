<?php $f = '';	?>

<!-- container-fluid -->
<!-- ===================================================================================================== -->
	<div class="container-fluid">
		<!-- row -->
		<!-- ===================================================================================================== -->
			<div class="row my-5">
				<!-- col -->
				<!-- ===================================================================================================== -->
					<div class="col-sm-6 offset-sm-3">
						<h3 class="text-center">Registo de Novo customer</h3>
						<!-- form -->
						<!-- ===================================================================================================== -->				
							<form action="?a=create_customer" method="post">
								<!-- Email -->
								<!-- ===================================================================================================== -->				
									<div class="my-3">
										<label>Email</label>
										<input type="email" class="form-control" name="text_email"  placeholder="Email" required>
									</div>
								<!-- ===================================================================================================== -->					
								
								<!-- pass_1 -->
								<!-- ===================================================================================================== -->					
									<div class="my-3">
										<label>Pass</label>
										<input type="password" class="form-control" name="text_pass_1"  placeholder="Pass" required>
									</div>
								<!-- ===================================================================================================== -->					

								<!-- pass_2 -->
								<!-- ===================================================================================================== -->					
									<div class="my-3">
										<label>Repetir Pass</label>
										<input type="password" class="form-control" name="text_pass_2"  placeholder="Repetir Pass" required>
									</div>
								<!-- ===================================================================================================== -->					

								<!-- Full Name -->
								<!-- ===================================================================================================== -->					
									<div class="my-3">
										<label>Full Name</label>
										<input type="text" class="form-control" name="text_full_name"  placeholder="Full Name" required>
									</div>
								<!-- ===================================================================================================== -->					

								<!-- address -->
								<!-- ===================================================================================================== -->					
									<div class="my-3">
										<label>address</label>
										<input type="text" class="form-control" name="text_address"  placeholder="address" required>
									</div>
								<!-- ===================================================================================================== -->					

								<!-- city -->
								<!-- ===================================================================================================== -->					
									<div class="my-3">
										<label>city</label>
										<input type="text" class="form-control" name="text_city"  placeholder="city" required>
									</div>
								<!-- ===================================================================================================== -->					

								<!-- telephone -->
								<!-- ===================================================================================================== -->					
									<div class="my-3">
										<label>telephone</label>
										<input type="text" class="form-control" name="text_telephone"  placeholder="telephone">
									</div>
								<!-- ===================================================================================================== -->	
								
								<!-- gender -->
								<!-- ===================================================================================================== -->					
									<div class="my-3">
											<label>Gender</label>
											<select id="combo-status" name="text_gender" class="form-control" onchange=""> 
													<option value="" <?= $f == '' ? 'selected' : '' ?> class="nav-it"></option>
													<option value="M" <?= $f == 'masculino' ? 'selected' : '' ?> class="nav-it">Masculino</option>
													<option value="F" <?= $f == 'feminino' ? 'selected' : '' ?> class="nav-it">Feminino</option>
											</select>
									</div>
								<!-- ===================================================================================================== -->									

								<!-- Picture -->
								<!-- ===================================================================================================== -->					
									<div class="my-3">
												<label>Picture</label>
												<input type="file" class="form-control" name="user_image" id="user_image">
									</div>
								<!-- ===================================================================================================== -->								

								<!-- div button -->
								<!-- ===================================================================================================== -->					
									<div class="my-4">
										<input action="?a=create_customer" type="submit" value="Criar conta" class="mb-3 btn btn-black text-uppercase filter-btn m-2">
									</div>	
								<!-- ===================================================================================================== -->					

								<!-- se a variavel erro estiver configurada -->
								<!-- ===================================================================================================== -->
									<?php if(isset($_SESSION['erro'])):?>	
										<!-- alert-danger -->
										<!-- ===================================================================================================== -->
											<div class="alert alert-danger text-center p-2">
												<?= $_SESSION['erro'] ?>
												<?php unset($_SESSION['erro']) ?>
											</div>
										<!-- ===================================================================================================== -->
									<?php endif; ?>	
								<!-- ===================================================================================================== -->

							</form>	
						<!-- ===================================================================================================== -->			
					</div>
				<!-- ===================================================================================================== -->
			</div>
		<!-- ===================================================================================================== -->
	</div>
<!-- ===================================================================================================== -->	



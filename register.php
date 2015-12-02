<?php require_once dirname(__FILE__) . '/includes/common/_header.php'; ?>

	<section class="registration-container">
		<div class="container-fluid">
			<div class="registration-inner">
				
				<div class="head">
					<h2>Create Your Account </h2>
				</div>
				<div class="body" hidden-->
					<div class="registration-form-container tth-form-container">
						<form action="#" novalidate>
							
							<div class="form-body" hidden-->
								<div class="form-group has-error">
									<input type="email" name="txt_user_email" id="txt_user_email" class="form-control" placeholder="Email Address already exists"/>
								</div>
								<div class="form-group">
									<input type="password" name="txt_user_password" id="txt_user_password" class="form-control" placeholder="Password"/>
								</div>
								<div class="form-group has-error">
									<input type="password" name="txt_user_password_repeat" id="txt_user_password_repeat" class="form-control" placeholder="Password do not match"/>
								</div>
							</div>

							<div class="form-footer" hidden-->
								<div class="form-actions" hidden-->
									<div class="check-action">
										<label for="chkbx_agree_terms">
											<input type="checkbox" name="chkbx_agree_terms" id="chkbx_agree_terms" class="icheck"/>
											<span>I accept the <a href="#">Terms of Agreement.</a></span>
										</label>
									</div>
									<div class="btn-submit">
										<button class="btn btn-secondary-outline btn-tth-base">Create Account</button>
									</div>
								</div>
								<div class="form-alternate-signups-actions" hidden-->
									<div class="action-subtitle">
										<p>Or, create account with</p>
									</div>
									<div class="actions-buttons">
										<div class="btns-wrapper">
											<div class="row row-20">
												
												<div class="col col-xs-6">
													<div class="action-btns">
														<a href="#" class="btn btn-block btn-twitter" target="_blank"><span class="fa fa-twitter"></span></a>
													</div>
												</div>
												<div class="col col-xs-6">
													<div class="action-btns">
														<a href="#" class="btn btn-block btn-facebook" target="_blank"><span class="fa fa-facebook"></span></a>
													</div>
												</div>

											</div>
										</div>
									</div>
									<div class="action-subtitle">
										<p>Don’t have an account? <a href="#">Create one!</a></p>
									</div>
								</div>
							</div>

						</form>
					</div>
				</div>

			</div>
		</div>
	</section>

<?php require_once dirname(__FILE__) . '/includes/common/_footer.php'; ?>
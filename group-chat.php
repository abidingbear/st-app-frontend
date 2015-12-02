<?php require_once dirname(__FILE__) . '/includes/common/_header.php'; ?>

	<?php 
		global $form_actions;
		$form_actions = false;
	?>

	<section class="window group-chat-window-container" hidden-->
		<div class="window-inner">

			<div class="add-more-users-container">
				<div class="add-more-users-inner">
					
					<div class="users-blocks-container cnt_custom_scroll" data-mcs-axis="x">
						<div class="users-blocks-wrapper" id="cnt_users_blocks">
							
							<?php for ($i = 0; $i < 10; $i++) { ?>
								<div class="user-block">
									<a href="#">
										<div class="user-icon has-border icon-sm">
											<img data-placeholdit data-ph-class="" data-ph-dimension="100x100" data-ph-text="CD" data-ph-txtcolor="818285" data-ph-bgcolor="e7e7e8"/>
										</div>
										<div class="user-username">
											<p>douglaschris</p>
										</div>
									</a>
								</div>
							<?php } ?>

						</div>
					</div>
					<div class="btn-add-remove">
						<a href="#"><img src="assets/icons/add-remove-icon.png" class="img-responsive" alt=""/></a>
					</div>

				</div>
			</div>
			
			<?php require_once dirname(__FILE__) . '/includes/common/_user-rows.php'; ?>

		</div>
	</section>

	<?php require_once dirname(__FILE__) . '/includes/common/_ask-question-form.php'; ?>

<?php require_once dirname(__FILE__) . '/includes/common/_footer.php'; ?>
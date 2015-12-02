<section class="ask-new-question-container" hidden-->
	<form action="#">
		<div class="form-group">
			<textarea name="txt_ask_ques" class="form-control" placeholder="Ask a question..."></textarea>
		</div>
		<?php if ($form_actions) { ?>
			<div class="form-btns">
				<div class="btn-arrow">
					<a href="#"><img src="assets/icons/external-link-icon.png" class="img-responsive" alt=""/></a>
				</div>
				<div class="btn-submit">
					<button class="btn btn-secondary-outline">Send</button>
				</div>
			</div>
		<?php } ?>
	</form>
</section>
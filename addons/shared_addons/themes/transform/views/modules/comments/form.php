<?php echo form_open("comments/create/{$module}", 'id="create-comment" class="form-horizontal"') ?>

	<noscript><?php echo form_input('d0ntf1llth1s1n', '', 'style="display:none"') ?></noscript>

	<h5><?php echo lang('comments:your_comment') ?></h5>

	<?php echo form_hidden('entry', $entry_hash) ?>

	<?php if ( ! is_logged_in()): ?>


	<div class="form-group">
		<label for="name" class="col-sm-2 control-label"><?php echo lang('comments:name_label') ?></label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
		</div>
	</div>

	<div class="form-group">
		<label for="email" class="col-sm-2 control-label"><?php echo lang('global:email') ?></label>
		<div class="col-sm-10">
			<input type="email" class="form-control" id="email" name="email" placeholder="Your Email Address">
		</div>
	</div>

	<div class="form-group">
		<label for="website" class="col-sm-2 control-label"><?php echo lang('comments:website_label') ?></label>
		<div class="col-sm-10">
			<input type="website" class="form-control" id="website" name="website" placeholder="Your Website Address (optional)">
		</div>
	</div>

	<?php endif ?>

	<div class="form-group">
		<label for="comment" class="col-sm-2 control-label"><?php echo lang('comments:message_label') ?></label>
		<div class="col-sm-10">
			<textarea id="comment" class="form-control" rows="3" placeholder="<?php echo lang('comments:message_label') ?>"><?php echo $comment['comment'] ?></textarea>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<?php echo form_submit(array('name'=>'submit', 'class'=>'btn btn-default'), lang('comments:send_label')) ?>
		</div>
	</div>

<?php echo form_close() ?>
<div class="container">
<!-- <a href="{{ base:url }}blog" title="Back to the blog">&larr; Back</a></small> -->

{{ post }}

<article class="single_post">	
	<h2>{{ title }}<small></h2>
			
	<div class="post_date">
		<span class="date">
			{{ helper:date format="l, F jS, Y" timestamp=created_on }}
		</span>
	</div>
			
	<hr>
	
	<div class="post_body">
		{{ body }}
	</div>
			
	<div class="post_meta">
		{{ if keywords }}
			{{ theme:image file="tags.png" }}
			<span class="tags">
				{{ keywords }}
			</span>
		{{ endif }}
	</div>
	
	<?php if (Settings::get('enable_comments')): ?>	
		
		<div id="existing-comments">
			<h4><?php echo lang('comments:title') ?></h4>
			<?php if (!empty($this->comments)) echo $this->comments->display(); ?>
		</div>		

		
		<?php if ($form_display): ?>
			<?php echo $this->comments->form() ?>
		<?php else: ?>
			<?php echo sprintf(lang('blog:disabled_after'), strtolower(lang('global:duration:'.str_replace(' ', '-', $post[0]['comments_enabled'])))) ?>
		<?php endif ?>
	
	<?php endif; ?>
</article>

{{ /post }}

</div>
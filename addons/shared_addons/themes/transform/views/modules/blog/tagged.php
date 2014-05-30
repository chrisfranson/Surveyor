<div class="container">

{{ if posts }}
	{{ posts }}
	
		<article class="post">
			<h2><a href="{{ url }}">{{ title }}</a></h2>
			
			<div class="post_date">
				<span class="date">
					About {{ helper:timespan timestamp=created_on }} ago.
				</span>
			</div>
			
			<hr>
			
			<div class="post_intro">
				{{ intro }}
			</div>
			
			<hr>
			
			<div class="post_meta">
				{{ if keywords }}
					{{ theme:image file="tags.png" }}
					<span class="tags">
						{{ keywords }}
					</span>
				{{ endif }}
			</div>
		</article>

	{{ /posts }}

	{{ pagination }}

{{ else }}
	
	{{ helper:lang line="blog:currently_no_posts" }}

{{ endif }}

</div>
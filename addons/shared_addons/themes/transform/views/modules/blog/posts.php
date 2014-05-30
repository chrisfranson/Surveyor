<div class="container">

{{ if posts }}
	{{ posts }}
	
		<article class="post">
			<h3><a href="{{ url }}">{{ title }}</a></h3>
			
			<div class="post-date">
				<span class="date">
					{{ helper:date format="l, F jS, Y" timestamp=created_on }}
				</span>
			</div>
			
			<div class="post-intro">
				{{ intro }}
			</div>

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
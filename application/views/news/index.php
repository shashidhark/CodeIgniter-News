<div class="row">
	<div class="col-sm-8 blog-main">
		<div class="blog-post">
			<?php if(isset($msg)) echo $msg; ?>
			<?php foreach ($news as $news_item): ?>
			<blockquote>
			   <h2 class="blog-post-title"><?php echo $news_item['title'] ?></h2>
    			    <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>
				<p>
				<?php echo $news_item['text'] ?><br />
					<a href="news/view/<?php echo $news_item['slug'] ?>">More</a>
				</p>
			 </blockquote>
				<hr>
			<?php endforeach ?>
		</div>
	</div>
</div>




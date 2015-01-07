<div class="row">
	<div class="col-sm-8 blog-main">
		<div class="blog-post">
			<?php if(isset($msg)) echo $msg; ?>
			<?php foreach ($news as $news_item): ?>
			<blockquote>
			   <b><?php echo $news_item['title'] ?></b>
				.  Created on: <?php echo $news_item['date'];?>
					<?php echo anchor('index.php/news/view/'.$news_item['slug'], 'Read');?>
			 </blockquote>
				<hr>
			<?php endforeach ?>
		</div>
	</div>
</div>




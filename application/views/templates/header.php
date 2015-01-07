<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?> News </title>
	 <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
     <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
	 <link href="<?php echo base_url('assets/css/blog.css') ?>" rel="stylesheet">
</head>
<body>
	<div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
		<?php
			$last = $this->uri->total_segments();
			$record_num = $this->uri->segment($last);
		?>
          <a class="blog-nav-item <?php if($record_num != 'create') echo 'active';?>" href="http://localhost/index.php">Home</a>
		  <a class="blog-nav-item <?php if($record_num == 'create') echo 'active';?>" href="http://localhost/index.php/news/create">Create</a>
        </nav>
      </div>
    </div>
	<div class="container">
		<div class="blog-header">
		    <h1 class="blog-title">SIT News</h1>
		    <p class="lead blog-description">The official News site of SIT</p>
		</div>

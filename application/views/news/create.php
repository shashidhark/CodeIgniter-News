<h2>Create a news item</h2>
    <div class="alert">
    <?php echo validation_errors(); ?>
    </div>

<?php 
		$attributes = array('class' => 'form-horizontal');
		echo form_open('news/create') 

?>
	<div class="control-group">
		<label class="control-label" for="title">Title</label>
		 <div class="controls">
			<input type="input" name="title" />
		 </div>
	</div>
	 <div class="control-group">
		<label class="control-label"  for="text">Text</label>
		<div class="controls">
			<textarea name="text"></textarea>
		</div>
	</div>
	

	<input type="submit" class="btn" name="submit" value="Create news item" />

</form>

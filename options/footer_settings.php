<?php
//botstrap
	wp_enqueue_style('bootstrap-style3',get_template_directory_uri().'/assets/assets/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap-style7',get_template_directory_uri().'/assets/assets/fonts/style.css');
	wp_enqueue_style('w3css',get_template_directory_uri().'/assets/bower/w3css-v4/w3.css');
	wp_enqueue_style('w3css',get_template_directory_uri().'/assets/css/app.css');
?>
<div class="head_footer w3-margin-top">
<div class="w3-container w3-green">
<h4>Footer Settings</h4>
</div>

<div class="w3-container">
<div class="row">
<div class="col-md-4">
<div class="form-group">
<label>Change Color</label>
<input type="text" class="form-control" name="" placeholder="place color here">
</div>
</div>
</div>
<div class="row">
<div class="col-md-3">
<button class="btn btn-success">Save</button>
</div>
</div>
</div>
</div>
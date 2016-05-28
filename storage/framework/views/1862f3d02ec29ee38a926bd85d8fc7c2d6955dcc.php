<?php $__env->startSection('content'); ?>

	<!-- Page container -->
  	<div class="page-container login-container">

  		<!-- Page content -->
  		<div class="page-content">

  			<!-- Main content -->
  			<div class="content-wrapper">

  				<!-- Content area -->
  				<div class="content">

  					<!-- Advanced login -->
  					<form action="index.html">
  						<div class="panel panel-body login-form">
  							<div class="text-center">
  								<div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
  								<h5 class="content-group">Create account
                    <small class="display-block">All fields are required</small></h5>
  							</div>


  							<div class="form-group has-feedback has-feedback-left">
  								<input type="text" class="form-control" placeholder="Eugene">
  								<div class="form-control-feedback">
  									<i class="icon-user-check text-muted"></i>
  								</div>
  								<span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> This username is already taken</span>
  							</div>

  							<div class="form-group has-feedback has-feedback-left">
  								<input type="text" class="form-control" placeholder="Create password">
  								<div class="form-control-feedback">
  									<i class="icon-user-lock text-muted"></i>
  								</div>
  							</div>


  							<div class="form-group has-feedback has-feedback-left">
  								<input type="text" class="form-control" placeholder="Your email">
  								<div class="form-control-feedback">
  									<i class="icon-mention text-muted"></i>
  								</div>
  							</div>




  							<button type="submit" class="btn bg-teal btn-block btn-lg">Register <i class="icon-circle-right2 position-right"></i></button>
  						</div>
  					</form>
  					<!-- /advanced login -->


  					<!-- Footer -->
  					<div class="footer text-muted">
  						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
  					</div>
  					<!-- /footer -->

  				</div>
  				<!-- /content area -->

  			</div>
  			<!-- /main content -->

  		</div>
  		<!-- /page content -->

  	</div>
  	<!-- /page container -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
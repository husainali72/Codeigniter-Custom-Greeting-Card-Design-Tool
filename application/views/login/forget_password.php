<?php  $this->load->view('admin/include/head'); ?>
        <!-- Reminder Content -->
        <div class="content overflow-hidden">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                    <!-- Reminder Block -->
                    <div class="block block-themed animated fadeIn">
                        <div class="block-header bg-primary">
                            <ul class="block-options">
                                <li>
                                    <a href="<?php echo config_item('base_url'); ?>" data-toggle="tooltip" data-placement="left" title="Log In"><i class="si si-login"></i></a>
                                </li>
                            </ul>
                            <h3 class="block-title">Password Reminder</h3>
                        </div>
                        <div class="block-content block-content-full block-content-narrow">
                            <!-- Reminder Title -->
                            <h1 class="h2 font-w600 push-30-t push-5">Booklet</h1>
                            <p>Please provide your account’s email and we will send you your password.</p>
                            <!-- END Reminder Title -->

                            <!-- Reminder Form -->
                            <!-- jQuery Validation (.js-validation-reminder class is initialized in js/pages/base_pages_reminder.js) -->
                            <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            <form class="js-validation-reminder form-horizontal push-30-t push-50" action="<?php echo base_url('login/test'); ?>" method="post">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary floating">
                                            <input class="form-control" type="email" id="reminder_email" name="reminder_email">
                                            <label for="reminder-email">Email</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-6 col-md-5">
                                        <button class="btn btn-block btn-primary" type="submit"><i class="si si-envelope-open pull-right"></i> Send Mail</button>
                                    </div>
                                </div>
                            </form>
                            <!-- END Reminder Form -->
                        </div>
                    </div>
                    <!-- END Reminder Block -->
                </div>
            </div>
        </div>
        <!-- END Reminder Content -->
		<!-- Reminder Footer -->
        <div class="push-10-t text-center animated fadeInUp">
            <small class="text-muted font-w600"><span class="js-year-copy"></span> &copy; Booklet 1.0</small>
        </div>
        <!-- END Reminder Footer -->
        
		<?php $this->load->view('admin/include/footer_script'); ?>
        
        <!-- Page JS Plugins -->
        <script src="<?php echo config_item('asset_url'); ?>js/plugins/jquery-validation/jquery.validate.min.js"></script>
        
        <!-- Page JS Code -->
        <script src="<?php echo config_item('asset_url'); ?>js/pages/base_pages_reminder.js"></script>
    </body>
</html>

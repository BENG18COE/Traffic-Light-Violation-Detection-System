<!doctype html>
<html lang="en" class="no-focus">
   <?php include $header; ?>
    <body>
		<div id="page-container" class="main-content-boxed">

         <?php require_once $page; ?>
        </div>

        <!-- Slide Up Modal -->
        <div class="modal fade actionModal"  tabindex="-1" role="dialog" aria-labelledby="modal-slideup" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideup modal-xl" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Action Modal</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">

                            <div id="contents"></div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
        <!-- END Slide Up Modal -->

    <?php include $footer; ?>
	<script type = "text/javascript" >
        jQuery(function(){ Codebase.helpers(['slimscroll','table-tools','ckeditor', 'maxlength', 'select2', 'tags-inputs','notify']); });

        $(document).on('click','#actionModal',function (e) {
            Codebase.layout('header_loader_on')
            //$('.az-content-body').LoadingOverlay("show");
            e.preventDefault();
            let c = ($(this).attr('c'));
            let f = ($(this).attr('f'));
            let d = ($(this).attr('d'));
            let o = ($(this).attr('o'));
            $.ajax({
                type : 'GET',
                url : '<?php echo site_url(); ?>'+ c +'/' + f + '/' + d + '/' + o,
                success:function (data) {
                    //$('.az-content-body').LoadingOverlay("hide");
                    $('#contents').html(data);
                    $('.actionModal').modal("show");
                    Codebase.layout('header_loader_off')
                }
            });
        });

        $(document).on('click','#saveModal',function (e) {
            Codebase.layout('header_loader_on')
            e.preventDefault();
            let c = ($(this).attr('c'));
            let f = ($(this).attr('f'));
            let d = ($(this).attr('d'));
            let o = ($(this).attr('o'));
            var form = $('form').get(0);
            var formData  = new FormData(form);
            $.ajax({
                type : 'POST',
                data : $('form').serialize(),
                //data : formData,
                //processData: false,
                //contentType: false,
                url : '<?php echo site_url(); ?>'+ c +'/' + f + '/' + d + '/'+ o,
                success:function (data) {
                    $('#contents').html(data);
                    Codebase.layout('header_loader_off')
                }
            });
        });

        var base_url  = "<?php echo base_url(); ?>";
		<?php $method = $this->router->fetch_method(); $class = $this->router->fetch_class(); if ($method == 'lock'){  ?>
		//Increment the idle time counter every minute.
		var idleInterval = setInterval(timerIncrement, 60000); // 1 minute
		idleTime = 0;
		//Zero the idle timer on mouse movement.
		$(this).mousemove(function (e) {
			idleTime = 0;
		});

		$(this).keypress(function (e) {
			idleTime = 0;
		});

		function timerIncrement() {
			idleTime = idleTime + 1;
			if (idleTime > 4) {
				window.location.assign("<?php echo site_url('Auth/signOut') ?>");

			}
		}

		<?php  } ?>
	</script>
    </body>
</html>

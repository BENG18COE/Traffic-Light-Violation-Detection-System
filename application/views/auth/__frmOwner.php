<?php if(isset($message) && $message['description'] != null):  ?>
	<!-- Alert -->
	<div class="alert alert-<?php echo $message['class']; ?> alert-dismissable" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<h3 class="alert-heading font-size-h4 font-w400"><?php echo $message['header']; ?></h3>
		<p class="mb-0"><?php echo $message['description']; ?></p>
	</div>
	<!-- END Alert -->
<?php endif; ?>
<?php echo form_open(""); ?>

<?php echo form_open("", array('class'=>'px-30')); ?>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <h4 class="text-muted text-center">Verify Your Identity</h4>
        <div class="form-group row">
            <div class="col-12">
                <div class="form-material floating">
                    <input type="text" class="form-control" id="login-username" name="phone" >
                    <label for="login-username">Phone number</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-12">
                <div class="form-material floating">
                    <input type="text" class="form-control" id="login-password" name="car" >
                    <label for="login-password">Car registration</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-group">
                <button type="submit" class="btn btn-sm btn-hero btn-alt-primary btn-block" name="login" id="saveModal" c="Base" f="owner" d="0" o="1">
                    <i class="si si-check mr-10"></i> Verify
                </button>
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>

<?php echo form_close(); ?>
<?php
if (isset($pass) && $pass){
    ?>
    <!-- Full Table -->
    <div class="table-responsive">
        <table class="table table-striped table-vcenter">
            <thead>
            <tr>
                <th class="text-center" >S/N</th>
                <th>OFFENCE</th>
                <th>MESSAGE</th>
                <th>CONTROL NUMBER</th>
                <th class="text-center">COMMITTED</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if (isset($datas)){
                foreach ($datas as $data){
                    ?>
                    <tr>
                        <td class="text-center">
                            <?php echo $data->violation_id; ?>
                        </td>
                        <td class="font-w600"><?php echo $data->offence_name; ?></td>
                        <td class="font-w600"><?php echo $data->sms; ?></td>
                        <td class="font-w600"><?php echo $data->control_number; ?></td>
                        <td class="font-w600 text-center"><?php echo date('D  d M Y, h:i:s a',strtotime($data->violation_time)); ?></td>
                    </tr>
                    <?php
                }
            }
            ?>

            </tbody>
        </table>
    </div>
    <!-- END Full Table -->
<?php
}
?>
<br>
<hr>

<?php echo form_close(); ?>

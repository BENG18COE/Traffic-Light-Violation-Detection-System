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
<div class="form-group row gutters-tiny mb-0 items-push">
	<div class="col-md-4">
		<input type="text" class="form-control" id="example-hosting-name" name="car"  placeholder="Car plate number" required>
	</div>
	<div class="col-md-3">
		<?php
		if (in_array(106,$this->session->userdata('controls'))){
			?>
			<?php if (isset($button)){ echo $button; } ?>
			<?php
		}
		?>
	</div>
</div>
<br>
<hr>
<!-- Full Table -->
<div class="table-responsive">
    <table class="table table-striped table-vcenter">
        <thead>
        <tr>
            <th class="text-center" >S/N</th>
            <th>PLATE NUMBER</th>
            <th class="text-center">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if (isset($cars)){
            foreach ($cars as $car){
                ?>
                <tr>
                    <td class="text-center">
                        <?php echo $car->car_id; ?>
                    </td>
                    <td class="font-w600"><?php echo $car->plate_number; ?></td>

                    <td class="text-center">
                        <?php
                        if (in_array(1006,$this->session->userdata('controls'))){
                            ?>
                            <a class="btn btn-sm btn-outline-secondary btn-rounded mr-5 my-5" href="javascript:void(0)" id="actionModal" d="<?php echo $owner->user_id ?>" o="1" f="addCar" c="Car">
                                <i class="fa fa-plus mr-5"></i> Add Cars
                            </a>
                            <?php
                        }
                        ?>
                        <?php
                        if (in_array(1007,$this->session->userdata('controls'))){
                            ?>
                            <a class="btn btn-sm btn-outline-danger btn-rounded mr-5 my-5" href="javascript:void(0)" id="actionModal" d="<?php echo $owner->user_id ?>" o="1" f="ownerDelete" c="Car">
                                <i class="fa fa-times mr-5"></i> Delete
                            </a>
                            <?php
                        }
                        ?>
                    </td>
                </tr>
                <?php
            }
        }
        ?>

        </tbody>
    </table>
</div>
<!-- END Full Table -->
<?php echo form_close(); ?>

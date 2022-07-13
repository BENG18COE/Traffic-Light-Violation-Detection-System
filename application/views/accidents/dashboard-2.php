<!-- Main Container -->
<main id="main-container">
	<!-- Page Content -->
	<div class="content">
		<h2 class="content-heading">Violations - Dashboard</h2>
		<div class="row">
			<div class="col-md-12">
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
				<!-- VPS -->
						<?php
						if (in_array(12,$this->session->userdata('controls'))){
							?>
							<table class="table table-bordered table-striped table-vcenter js-dataTable-full" style="font-size: 11px !important;">
								<thead>
								<tr>
									<th class="text-center">S/N</th>
									<th>Owner</th>
									<th >Plate number</th>
									<th class="text-center" >Date</th>
								</tr>
								</thead>
								<tbody>
								<?php
								if (isset($datas)){
									$id = 1;
									foreach ($datas as $data){
										?>
										<tr>
											<td class="text-center"><?php echo $id; ?></td>
											<td class="font-w600"><?php echo $data->user_fullname; ?></td>
											<td class=""><?php echo $data->plate_number; ?></td>
											<td class="text-center">
												<?php echo date('D d, M Y H:i:s',strtotime($data->violation_time)); ?>
											</td>
										</tr>
										<?php
										$id++;
									}
								}
								?>
								</tbody>
							</table>
						<?php
						}
						?>

				<!-- END VPS -->

			</div>

		</div>
	</div>
	<!-- END Page Content -->
</main>
<!-- END Main Container -->

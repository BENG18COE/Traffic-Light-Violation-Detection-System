<!-- Main Container -->
<main id="main-container">
    <!-- Page Content -->
    <div class="content">
        <h2 class="content-heading">Accidents - Dashboard</h2>
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

                <?php if (in_array(107,$this->session->userdata('controls'))){ ?>
                    <!-- VPS -->
                    <div class="d-flex justify-content-between align-items-center mt-50 mb-20">
                        <h2 class="h4 font-w300 mb-0">Searching Accidents</h2>
                        <button type="button" class="btn btn-primary btn-sm btn-alt-primary btn-rounded" onclick="Codebase.blocks('#cb-add-server', 'open');">
                            <i class="fa fa-search mr-1"></i> Search car
                        </button>
                    </div>
                <?php } ?>
                <div id="cb-add-server" class="block bg-body-light animated fadeIn d-none">
                    <div class="block-header">
                        <h3 class="block-title">Report parameter</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option">
                                <i class="si si-question"></i>
                            </button>
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <?php echo form_open(""); ?>
                        <div class="form-group row gutters-tiny mb-0 items-push">
                            <div class="col-md-3">
                                <div class="input-group">
                                    <select class="js-select2 form-control" id="example-select2" name="car" style="width: 100%;" data-placeholder="Choose choose car" required>
                                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        <option disabled selected > choose car</option>
                                        <?php
                                        if (isset($cars)){
                                            foreach ($cars as $car){
                                                ?>
                                                <option value="<?php echo $car->car_id; ?>" > <?php echo $car->plate_number ?> </option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-3">

                            </div>
                            <?php if (in_array(107,$this->session->userdata('controls'))){ ?>
                                <div class="col-md-3">
                                    <button type="submit" name="save" class="btn btn-alt-success btn-block">
                                        <i class="fa fa-search mr-1"></i> Search
                                    </button>
                                </div>
                            <?php } ?>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>



                <!-- END VPS -->

            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <!-- Block Tabs Animated Fade -->
                <div class="block">
                    <div class="block-content tab-content overflow-hidden">
                        <!-- Full Table -->
                        <div class="table-responsive">
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
                                if (isset($accidents)){
                                    $id = 1;
                                    foreach ($accidents as $accident){
                                        ?>
                                        <tr>
                                            <td class="text-center"><?php echo $id; ?></td>
                                            <td class="font-w600"><?php echo $accident->user_fullname; ?></td>
                                            <td class=""><?php echo $accident->plate_number; ?></td>
                                            <td class="text-center">
                                                <?php echo date('D d, M Y H:i:s',strtotime($accident->violation_time)); ?>
                                            </td>
                                        </tr>
                                        <?php
                                        $id++;
                                    }
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- END Full Table -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->

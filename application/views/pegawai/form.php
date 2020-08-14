<div class="row">
    <!--  form area -->
    <div class="col-sm-12">
        <div  class="panel panel-bd">
 
            <!-- <div class="panel-heading no-print"> 
              <div class="btn-group m-t-10 m-b-5"> <a class="btn btn-primary" href="<?php echo base_url("human_resources/employee/index/accountant") ?>"> <i class="fa fa-list"></i>  <?php echo display('accountant_list') ?> </a>  </div>
                <div class="btn-group m-t-10 m-b-5"><a class="btn btn-primary" href="<?php echo base_url("human_resources/employee/index/laboratorist") ?>"> <i class="fa fa-list"></i>  <?php echo display('laboratorist_list') ?> </a> </div>
                <div class="btn-group m-t-10 m-b-5"><a class="btn btn-primary" href="<?php echo base_url("human_resources/employee/index/nurse") ?>"> <i class="fa fa-list"></i>  <?php echo display('nurse_list') ?> </a></div>
                <div class="btn-group m-t-10 m-b-5"><a class="btn btn-primary" href="<?php echo base_url("human_resources/employee/index/pharmacist") ?>"> <i class="fa fa-list"></i>  <?php echo display('pharmacist_list') ?> </a></div> 
                <div class="btn-group m-t-10 m-b-5"><a class="btn btn-primary" href="<?php echo base_url("human_resources/employee/index/receptionist") ?>"> <i class="fa fa-list"></i>  <?php echo display('receptionist_list') ?> </a></div>
               <div class="btn-group m-t-10 m-b-5"><a class="btn btn-primary" href="<?php echo base_url("human_resources/employee/index/representative") ?>"> <i class="fa fa-list"></i>  <?php echo display('representative_list') ?> </a></div>
                <div class="btn-group m-t-10 m-b-5"><a class="btn btn-primary" href="<?php echo base_url("human_resources/employee/index/case_manager") ?>"> <i class="fa fa-list"></i>  <?php echo display('case_manager') ?> </a></div> 
            </div>  -->


            <div class="panel-body panel-form">
                <div class="row">
                    <div class="col-md-9 col-sm-12">

                        <?php echo form_open_multipart('pegawai/employee/form/'.html_escape($employee->user_id),'class="form-inner"') ?>

                            <?php echo form_hidden('user_id',html_escape($employee->user_id)) ?>


                            <div class="form-group row">
                                <label for="user_role" class="col-xs-3 col-form-label"><?php echo display('user_role') ?>  <i class="text-danger">*</i></label>
                                <div class="col-xs-9"> 
                                    <?php
                                        echo form_dropdown('user_role', $userRoles, html_escape($employee->user_role), 'class="form-control" id="user_role" '); 
                                    ?>
                                </div>
                            </div> 

                            <div class="form-group row">
                                <label for="firstname" class="col-xs-3 col-form-label"><?php echo display('first_name') ?> <i class="text-danger">*</i></label>
                                <div class="col-xs-9">
                                    <input name="firstname" type="text" class="form-control" id="firstname" placeholder="<?php echo display('first_name') ?>" value="<?php echo html_escape($employee->firstname); ?>" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lastname" class="col-xs-3 col-form-label"><?php echo display('last_name') ?> <i class="text-danger">*</i></label>
                                <div class="col-xs-9">
                                    <input name="lastname" type="text" class="form-control" id="lastname" placeholder="<?php echo display('last_name') ?>" value="<?php echo html_escape($employee->lastname); ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-xs-3 col-form-label"><?php echo display('email')?> <i class="text-danger">*</i></label>
                                <div class="col-xs-9">
                                    <input name="email" class="form-control" type="email" placeholder="<?php echo display('email')?>" id="email"  value="<?php echo html_escape($employee->email); ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-xs-3 col-form-label"><?php echo display('password') ?> <i class="text-danger">*</i></label>
                                <div class="col-xs-9">
                                    <input name="password" class="form-control" type="password" placeholder="<?php echo display('password') ?>" id="password" >
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="mobile" class="col-xs-3 col-form-label"><?php echo display('mobile') ?> <i class="text-danger">*</i></label>
                                <div class="col-xs-9">
                                    <input name="mobile" class="form-control" type="number" placeholder="<?php echo display('mobile') ?>" id="mobile"  value="<?php echo html_escape($employee->mobile); ?>">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-xs-3"><?php echo display('sex') ?></label>
                                <div class="col-xs-9">
                                    <div class="form-check">
                                        <label class="radio-inline">
                                        <input type="radio" name="sex" value="Male" <?php echo  html_escape(set_radio('sex', 'Male', TRUE)); ?> ><?php echo display('male') ?>
                                        </label>
                                        <label class="radio-inline">
                                        <input type="radio" name="sex" value="Female" <?php echo  html_escape(set_radio('sex', 'Female')); ?> ><?php echo display('female') ?>
                                        </label>
                                        <label class="radio-inline">
                                        <input type="radio" name="sex" value="Other" <?php echo  html_escape(set_radio('sex', 'Other')); ?> ><?php echo display('other') ?>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- if employee picture is already uploaded -->
                            <?php if(!empty($employee->picture)) {  ?>
                            <div class="form-group row">
                                <label for="picturePreview" class="col-xs-3 col-form-label"></label>
                                <div class="col-xs-9">
                                    <img src="<?php echo base_url(html_escape($employee->picture)) ?>" alt="Picture" class="img-thumbnail" />
                                </div>
                            </div>
                            <?php } ?>

                            <div class="form-group row">
                                <label for="picture" class="col-xs-3 col-form-label"><?php echo display('picture') ?></label>
                                <div class="col-xs-9">
                                    <input type="file" name="picture" id="picture" value="<?php echo html_escape($employee->picture); ?>">
                                    <input type="hidden" name="old_picture" value="<?php echo html_escape($employee->picture); ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-xs-3 col-form-label"><?php echo display('address') ?> <i class="text-danger">*</i></label>
                                <div class="col-xs-9">
                                    <textarea name="address" class="form-control" id="address" placeholder="<?php echo display('address') ?>" maxlength="140" rows="7"><?php echo html_escape($employee->address); ?></textarea>
                                </div>
                            </div> 
 
                            <div class="form-group row">
                                <label class="col-xs-3"><?php echo display('status') ?></label>
                                <div class="col-xs-9">
                                    <div class="form-check">
                                        <label class="radio-inline">
                                        <input type="radio" name="status" value="1" <?php echo  html_escape(set_radio('status', '1', TRUE)); ?> ><?php echo display('active') ?>
                                        </label>
                                        <label class="radio-inline">
                                        <input type="radio" name="status" value="0" <?php echo  html_escape(set_radio('status', '0')); ?> ><?php echo display('inactive') ?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <div class="ui buttons">
                                        <button type="reset" class="ui button"><?php echo display('reset') ?></button>
                                        <div class="or"></div>
                                        <button class="ui positive button"><?php echo display('save') ?></button>
                                    </div>
                                </div>
                            </div>
                        <?php echo form_close() ?>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>

</div>
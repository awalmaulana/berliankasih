<div class="row">
    <div class="col-md-12 ">

        <div  class="panel panel-default panel-form">
            <div class="panel-body">
                <div class="portlet-body form">
                <?php echo form_open_multipart('sms/sms_setup_controller/save_sms_scheduler', array('class' => 'form-horizontal','method'=>'post','role'=>'form')); ?>
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label"> <?php echo display('schedule_name');?> : </label>
                                <div class="col-md-5">
                                    <input type="text" name="schedule_name" value="" required="1" class="form-control" placeholder="<?php echo display('schedule_name');?>"> 
                                </div>
                            </div>

                             <div class="form-group">
                                <label class="col-md-3 control-label"> <?php echo display('sms_template');?> : </label>
                                <div class="col-md-5">
                                   <select class="form-control" name="teamplate_id" required="1" >
                                        <option value="">--Select--</option>
                                        <?php foreach($teamplate as $value1) {?>
                                        <option value="<?php echo $value1->teamplate_id?>"><?php echo html_escape($value1->teamplate_name);?></option>
                                        <?php }?>
                                    </select>
                                <?php echo form_error('sms_provider', '<div class=" text-danger">', '</div>'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label"> <?php echo display('time');?> : </label>
                                <div class="col-md-5">
                                    <select name="day">
                                      <option value="0">--Day--</option>
                                      <?php for($i=1;$i<=30; $i++)
                                      echo '<option value="'.$i.'">'.$i.'</option>'
                                      ?>
                                    </select>
                                    <select name="hour">
                                      <option value="0">--Hour--</option>
                                      <?php for($i=1;$i<=23; $i++)
                                        echo '<option value="'.$i.'">'.$i.'</option>'
                                      ?>
                                    </select>
                                    <select name="minute">
                                      <option value="0">--Minute--</option>
                                      <?php for($i=1;$i<=59; $i++)
                                        echo '<option value="'.$i.'">'.$i.'</option>'
                                      ?>
                                    </select>
                                    
                                </div>
                            </div>
                        </div>

                       <div class="form-group row">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="reset" class="btn btn-danger"><?php echo display('reset');?></button>
                                <button type="submit" class="btn btn-success"><?php echo display('submit');?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>  
     </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="sms-cornjobs">
            <p>curl --request GET <?php echo base_url();?>sms/sms_sender/ 
            <br> <?php echo display('sms_cronjob_des');?></p>
            
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12"> 
        <div class="breadcrumbs ng-scope">
            <h2> <?php echo display('sms_schedule_list');?></h2>
        </div>
    </div>
</div>
    

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr class="center">
                            <th class="all"><?php echo display('schedule_name');?></th>
                            <th class="all"><?php echo display('template_name');?> </th>
                            <th class="all"><?php echo display('time');?> </th>
                            <th class="all"><?php echo display('action');?> </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($schedule as $value){?>
                        <tr>
                            <td><?php echo html_escape($value->ss_name);?></td>
                            <td><?php echo html_escape($value->teamplate_name);?></td>
                            <td><?php echo html_escape($value->ss_schedule);?></td>
                            
                            <td class="text-right">
                                <a href="<?php echo base_url();?>sms/sms_setup_controller/delete_schedule/<?php echo $value->ss_id ;?>" onclick="return confirm('Are you want to delelte?');" class="btn btn-xs btn-danger">
                                <i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                        <?php }?>
                       
                    </tbody>
            </table>
            </div>
        </div>
    </div>
</div>




<?php
if($this->session->flashdata('success_msg')!=""){
    ?>
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="fa fa-check pr10"></i>
           <strong>Well done!</strong> <?php echo $this->session->flashdata('success_msg'); ?>
        <a href="#" class="alert-link">this important alert message</a>.
    </div>
<?php
}
?>
<?php
if($this->session->flashdata('error_msg')!=""){
    ?>
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="fa fa-check pr10"></i>
        <strong>Note well done!</strong>  <?php echo $this->session->flashdata('error_msg'); ?>
        <a href="#" class="alert-link">this important alert message</a>.
    </div>
    <?php
}
?>

<div class="col-md-12">
    <div class="panel panel-visible" id="spy2">
        <div class="panel-heading">
            <div class="panel-title hidden-xs">
                <span class="glyphicon glyphicon-tasks"></span>Search Bar Filtering of <?php  echo $frm_name;  ?></div>
        </div>
        <div class="panel-body pn">
            <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%" style="width: 800px;
        margin: 0 auto;">
                    <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Picture</th>
                        <th>Name</th>
                        <th>Tourtypes</th>
                        <th style="width:15%;">Action</th>
                    </tr>
                    </thead>
                <tbody>
                <?php
              if(sizeof($tours)>0){
                    foreach($tours as $row){
                    $status = $row['status'] == 1 ? "tick.png" : "cross.png";
                    $deleted = $row['status'] == 1 ? "delete.png" : "cross.png";
                ?>
                <tr>
                    <td style="width:10px;" ><?php echo $row['id'];  ?></td>
                    <td> <img style="height: 30px; border-radius: 15%;" src="<?php echo base_url()."uploads/".$c_name."/".$row['picture']; ?>"></td>
                    <td style="width:100px;" ><?php echo $row['name'];  ?></td>
                    <td><?php echo $row['tourstype'];  ?></td> 
                    <td>
                        <a href="<?php echo site_url();?>backend/<?php echo $c_name;?>/set_status/<?php /* echo $ttype['tours_id']; */ echo $this->m_ps->encrypt_decrypt('encrypt',$row['id']); ?>/<?php echo $row['status'];?>" title="Public"><img src="<?php echo base_url()?>icons/<?php echo $status;?>" class="tooltip-info" data-rel="tooltip" title="Public">
                        </a>

                        <a href="<?php echo site_url();?>backend/<?php echo $c_name;?>/edit/<?php  echo $row['id'] //echo $this->m_ps->encrypt_decrypt('encrypt',$row['id'])?>" title="Edit"><img src="<?php echo base_url()?>icons/edit.png" class="tooltip-info" data-rel="tooltip" title="Edit">
                        </a>
                        <a href="<?php echo site_url();?>backend/<?php echo $c_name;?>/set_deleted/<?php /* echo $ttype['tours_id']; */ echo $this->m_ps->encrypt_decrypt('encrypt',$row['id']); ?>/<?php echo $row['deleted'];?>" title="Public"><img src="<?php echo base_url()?>icons/<?php echo $deleted;?>" class="tooltip-info" data-rel="tooltip" title="Public">

                        </a>                   

                    </td>

                </tr>

                    <?php

                }

              }

                ?>
                </tbody>

            </table>

        </div>

    </div>

</div>


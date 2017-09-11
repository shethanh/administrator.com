<?php

if($this->session->userdata('message')){

    ?>

<?php }?>


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
<form action="<?php echo site_url();?>backend/<?php echo $c_name; ?>/update/<?php echo $c_name; ?>" method="post" class="form" id="validate" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?php echo $tours[0]['id']; ?>">
<div class="panel panel-info">
    <div class="panel-heading">
        <span class="panel-title" > <i class="glyphicons glyphicons-circle_plus"></i><?php echo $frm_name;  ?></span>
    </div>
<div class="panel-body p20 pb10">
        <div class="tab-content pn br-n admin-form">
            <div id="tab1_1" class="tab-pane active">
                <div class="section row mbn">
                    <div class="col-md-9">
                        <div class="section row ">
                           <div class="col-md-12">
                              <label for="name1" class="field prepend-icon">
                                    <input type="text" name="name" value="<?php echo $tours[0]['name'] ;?>" id="name" class="event-name gui-input br-light light" placeholder="Tour Name" required="">
                                    <label for="name" class="field-icon">
                                    </label>
                                </label>
                            </div>
                            
                        </div>
                        <div class="section row ">
                         <div class="col-md-6">
                         <label for="customer-group" class="field select">
                            <select id="customer-group" name="tourstype">                              
                                <!-- <option value="<?php echo $tourstype[0]['name'] ;?>" selected="selected"><?php echo $tourstype[0]['name'] ;?></option> -->
                            <?php 
                                foreach($tourstype as $row){
                                    ?>
                                    <option value="<?php echo $row['slug'] ?>"><?php echo $row['name'] ?></option>
                                    <?php
                                }
                            ?>                         
                            </select>
                            <i class="arrow double"></i>
                        </label>
                            </div> 

                             <div class="col-md-6">
                               <label for="price1" class="field prepend-icon">
                                    <input type="number" name="price" value="<?php echo $tours[0]['price'] ;?>" id="price" class="event-name gui-input br-light light" placeholder="$ Tours Price" required="">
                                    <label for="price" class="field-icon">
                                    </label>
                            </label>
                            </div>  
                        </div>
                        <div class="section row ">
                           <div class="col-md-6">                          

                        <label for="customer-group" class="field select">
                            <select id="customer-group" name="show_price">     
                                <option value="<?php echo $tours[0]['show_price'] ;?>" selected="selected"><?php echo $tours[0]['show_price'] ;?></option>                         
                                <option value="No" >No</option>
                                <option value="Yes" >Yes</option>                
                            </select>
                            <i class="arrow double"></i>
                        </label>
                            </div>
                            <div class="col-md-6">
                                <label for="customer-group" class="field select">
                                    <select id="customer-group" name="show_in">     
                                        <option value="<?php echo $tours[0]['show_in'] ;?>" selected="selected"><?php

                                        // echo $tours[0]['show_in'] ;
                                        echo  $this->db->get_where('position',array('id'=>$tours[0]['show_in']))->row()->name;

                                         ?></option>
                                        <?php
                                        foreach($position as $row){
                                            ?>
                                            <option value="<?php echo $row['id']; ?>" ><?php echo $row['name']; ?></option>
                                            <?php
                                        } 
                                        ?>                                       
                                                   
                                    </select>
                                    <i class="arrow double"></i>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                            <div class="fileupload-preview thumbnail mb15">
                               
                                <img data-src="holder.js/100%x147" src="<?php echo base_url()?>/uploads/<?php echo $c_name."/".$tours[0]['picture'] ; ?>" alt="holder">

                            </div>
                            <span class="button btn-system btn-file btn-block ph5">
                                <span class="fileupload-new">Change</span>
                                <span class="fileupload-exists">Change</span>
                                <input type="file" name="picture" >
                                <input type="hi" name="old_pic" value="<?php  echo $tours[0]['picture'] ; ?>">
                            </span>
                        </div>
                    </div>
                </div>
                <hr class="short alt mtn">
                   <div class="section mb10">
                            <input id="tagsinput" class="bg-light" name="tage" placeholder="Tage Words..." type="text" value="<?php echo $tours[0]['tage'] ;?>">
                        </div>
                <div class="section mb15">
                    <label class="field prepend-icon">
                        <textarea class="gui-textarea br-light bg-light" id="description" name="description" placeholder=" Description..." required=""><?php echo $tours[0]['description'] ;?></textarea>
                        <label for="description" class="field-icon"><i class="fa fa-edit"></i>
                        </label>
                    </label>
                </div>
                <div class="section mb15">
                    <label class="field prepend-icon">
                        <textarea class="gui-textarea br-light bg-light" id="detail" name="detail" placeholder="Detail ..." required=""><?php echo $tours[0]['detail'] ;?></textarea>
                        <label for="detail" class="field-icon"><i class="fa fa-edit"></i>
                        </label>
                    </label>
                </div>
                <div class="section row mbn">
                    <div class="col-sm-8">
                        <label class="field option mt10">
                            <input type="checkbox" name="accept_term" id="accept_term" checked>
                            <span class="checkbox"></span>Save  <?php echo $c_name; ?>
                            <em class="small-text text-muted">- A Random Unique ID will be generated</em>
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <p class="text-right">
                            <input type="submit" class="btn btn-primary" name="userSubmit" data-note-style="success" value="save <?php echo $c_name; ?>">
                        </p>
                    </div>
                </div>
                <!-- end section row -->
            </div>
        </div>
    </div>
</div>
</form>
<!--Script for CK Editor-->
<script>
    CKEDITOR.replace('description' ,{
        filebrowserImageBrowseUrl : '<?php echo base_url();?>assets/filemanager/index.html'
    });
    CKEDITOR.replace('detail' ,{
        filebrowserImageBrowseUrl : '<?php echo base_url();?>assets/filemanager/index.html'
    });
    CKEDITOR.replace('packages' ,{
        filebrowserImageBrowseUrl : '<?php echo base_url();?>assets/filemanager/index.html'
    });
</script>
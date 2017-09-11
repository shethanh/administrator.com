
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="fa fa-check pr10"></i>
           <strong>Well done!</strong> <?php echo $this->session->flashdata('success_msg'); ?>
        <a href="#" class="alert-link">this important alert message</a>.
    </div>

    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="fa fa-check pr10"></i>
        <strong>Note well done!</strong>  <?php echo $this->session->flashdata('error_msg'); ?>
        <a href="#" class="alert-link">this important alert message</a>.
    </div>

<form action="#" method="post" class="form" id="validate" enctype="multipart/form-data">
<div class="panel panel-info">
    <div class="panel-heading">
        <span class="panel-title" > <i class="glyphicons glyphicons-circle_plus"></i>Angkor</span>
    </div>
<div class="panel-body p20 pb10">
        <div class="tab-content pn br-n admin-form">
            <div id="tab1_1" class="tab-pane active">
                <div class="section row mbn">
                    <div class="col-md-9">
                        <div class="section row ">
                           <div class="col-md-12">
                              <label for="name1" class="field prepend-icon">
                                    <input type="text" name="name" value="name" id="name" class="event-name gui-input br-light light" placeholder="Tour Name" required="">
                                    <label for="name" class="field-icon">
                                    </label>
                                </label>
                            </div>
                            
                        </div>
                        <div class="section row ">
                         <div class="col-md-6">
                         <label for="customer-group" class="field select">
                            <select id="customer-group" name="tourstype">                              
                                <option value="0" selected="selected">Tour Type...</option>
                            <?php 
                               // foreach($tour_type as $row_id=>$row_val){
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
                                    <input type="text" name="price" value="<?php echo set_value('price1'); ?>" id="price" class="event-name gui-input br-light light" placeholder="$ Tours Price" required="">
                                    <label for="price" class="field-icon">
                                    </label>
                            </label>
                            </div>  
                        </div>
                        <div class="section row ">
                           <div class="col-md-6">                          

                        <label for="customer-group" class="field select">
                            <select id="customer-group" name="show_price">     
                                <option value="0" selected="selected">--Show Price--</option>                         
                                <option value="0" >No</option>
                                <option value="1" >Yes</option>                
                            </select>
                            <i class="arrow double"></i>
                        </label>
                            </div>
                            <div class="col-md-6">
                                <label for="customer-group" class="field select">
                                    <select id="customer-group" name="show_in">    
                                        <option value="0" selected="selected">Appear</option>
                                                                          
                                                   
                                    </select>
                                    <i class="arrow double"></i>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                            <div class="fileupload-preview thumbnail mb15">
                                <img data-src="holder.js/100%x147" alt="holder">
                            </div>
                            <span class="button btn-system btn-file btn-block ph5">
                                <span class="fileupload-new">Change</span>
                                <span class="fileupload-exists">Change</span>
                                <input type="file" name="picture">
                            </span>
                        </div>
                    </div>
                </div>
                <hr class="short alt mtn">
                   <div class="section mb10">
                            <input id="tagsinput" class="bg-light" name="tage" placeholder="Tage Words..." type="text" value=" ">
                        </div>
                <div class="section mb15">
                    <label class="field prepend-icon">
                        <textarea class="gui-textarea br-light bg-light" id="description" name="description" placeholder=" Description..." required=""></textarea>
                        <label for="description" class="field-icon"><i class="fa fa-edit"></i>
                        </label>
                    </label>
                </div>
                <div class="section mb15">
                    <label class="field prepend-icon">
                        <textarea class="gui-textarea br-light bg-light" id="detail" name="detail" placeholder="Detail ..." required=""></textarea>
                        <label for="detail" class="field-icon"><i class="fa fa-edit"></i>
                        </label>
                    </label>
                </div>
                <!--   -->
               <!--  <div class="section mb15">
                    <label class="field prepend-icon">
                        <textarea class="gui-textarea br-light bg-light" id="cust-note" name="exclude" placeholder="Exclude..." required=""></textarea>
                        <label for="cust-note" class="field-icon"><i class="fa fa-edit"></i>
                        </label>
                    </label>
                </div> -->
               <!--  <div class="section mb15">
                    <label class="field prepend-icon">
                        <textarea class="gui-textarea br-light bg-light" id="cust-note" name="note" placeholder="Notify..." required=""></textarea>
                        <label for="cust-note" class="field-icon"><i class="fa fa-edit"></i>
                        </label>
                    </label>
                </div> -->
                <div class="section row mbn">
                    <div class="col-sm-8">
                        <label class="field option mt10">
                            <input type="checkbox" name="accept_term" id="accept_term" checked>
                            <span class="checkbox"></span>Save
                            <em class="small-text text-muted">- A Random Unique ID will be generated</em>
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <p class="text-right">
                            <input type="submit" class="btn btn-primary" name="userSubmit" data-note-style="success" value="Save">
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
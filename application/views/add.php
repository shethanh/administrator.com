<!DOCTYPE html>
<html>
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title><?php echo $page_title; ?></title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="AdminDesigns - SHARED ON THEMELOCK.COM">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/assets/skin/default_skin/css/theme.css">

    <!-- Admin Panels CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/assets/admin-tools/admin-plugins/admin-panels/adminpanels.css">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/assets/admin-tools/admin-forms/css/admin-forms.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>backend/assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->



    <!-- Datatables CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/vendor/plugins/datatables/media/css/dataTables.bootstrap.css">

    <!-- Datatables Editor CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/vendor/plugins/datatables/extensions/Editor/css/dataTables.editor.css">


</head>

<body class="dashboard-page sb-l-o sb-r-c">
<!-- Start: Theme Preview Pane -->
<div id="skin-toolbox">
    <div class="panel">
        <div class="panel-heading">
                <span class="panel-icon"><i class="fa fa-gear text-primary"></i>
                </span>
            <span class="panel-title"> Theme Options</span>
        </div>
        <div class="panel-body pn">

            <ul class="nav nav-list nav-list-sm pl15 pt10" role="tablist">
                <li class="active">
                    <a href="#toolbox-header" role="tab" data-toggle="tab">Navbar</a>
                </li>
                <li>
                    <a href="#toolbox-sidebar" role="tab" data-toggle="tab">Sidebar</a>
                </li>
                <li>
                    <a href="#toolbox-settings" role="tab" data-toggle="tab">Misc</a>
                </li>
            </ul>

            <div class="tab-content p20 ptn pb15">
                <div role="tabpanel" class="tab-pane active" id="toolbox-header">
                    <form id="toolbox-header-skin">
                        <h4 class="mv20">Header Skins</h4>

                        <!--                             <div class="checkbox-custom checkbox-disabled mb5">
                                                        <input type="checkbox" name="headerTwoTone" id="headerTwoTone" checked>
                                                        <label for="headerTwoTone">Two Tone Header</label>
                                                    </div>

                                                    <hr class="mv10 alt">
                         -->

                        <div class="skin-toolbox-swatches">
                            <div class="checkbox-custom checkbox-disabled fill mb5">
                                <input type="radio" name="headerSkin" id="headerSkin8" checked value="bg-light">
                                <label for="headerSkin8">Light</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-primary mb5">
                                <input type="radio" name="headerSkin" id="headerSkin1" value="bg-primary">
                                <label for="headerSkin1">Primary</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-info mb5">
                                <input type="radio" name="headerSkin" id="headerSkin3" value="bg-info">
                                <label for="headerSkin3">Info</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-warning mb5">
                                <input type="radio" name="headerSkin" id="headerSkin4" value="bg-warning">
                                <label for="headerSkin4">Warning</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-danger mb5">
                                <input type="radio" name="headerSkin" id="headerSkin5" value="bg-danger">
                                <label for="headerSkin5">Danger</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-alert mb5">
                                <input type="radio" name="headerSkin" id="headerSkin6" value="bg-alert">
                                <label for="headerSkin6">Alert</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-system mb5">
                                <input type="radio" name="headerSkin" id="headerSkin7" value="bg-system">
                                <label for="headerSkin7">System</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-success mb5">
                                <input type="radio" name="headerSkin" id="headerSkin2" value="bg-success">
                                <label for="headerSkin2">Success</label>
                            </div>
                            <div class="checkbox-custom fill mb5">
                                <input type="radio" name="headerSkin" id="headerSkin9" value="bg-dark">
                                <label for="headerSkin9">Dark</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="toolbox-sidebar">
                    <form id="toolbox-sidebar-skin">

                        <h4 class="mv20">Sidebar Skins</h4>
                        <div class="skin-toolbox-swatches">
                            <div class="checkbox-custom fill mb5">
                                <input type="radio" name="sidebarSkin" checked id="sidebarSkin3" value="">
                                <label for="sidebarSkin3">Dark</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-disabled mb5">
                                <input type="radio" name="sidebarSkin" id="sidebarSkin1" value="sidebar-light">
                                <label for="sidebarSkin1">Light</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-light mb5">
                                <input type="radio" name="sidebarSkin" id="sidebarSkin2" value="sidebar-light light">
                                <label for="sidebarSkin2">Lighter</label>
                            </div>

                        </div>

                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="toolbox-settings">
                    <form id="toolbox-settings-misc">
                        <h4 class="mv20 mtn">Layout Options</h4>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb5">
                                <input type="checkbox" checked="" id="header-option">
                                <label for="header-option">Fixed Header</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb5">
                                <input type="checkbox" id="sidebar-option">
                                <label for="sidebar-option">Fixed Sidebar</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb5">
                                <input type="checkbox" id="breadcrumb-option">
                                <label for="breadcrumb-option">Fixed Breadcrumbs</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb5">
                                <input type="checkbox" id="breadcrumb-hidden">
                                <label for="breadcrumb-hidden">Hide Breadcrumbs</label>
                            </div>
                        </div>
                        <h4 class="mv20">Layout Options</h4>
                        <div class="form-group">
                            <div class="radio-custom mb5">
                                <input type="radio" id="fullwidth-option" checked name="layout-option">
                                <label for="fullwidth-option">Fullwidth Layout</label>
                            </div>
                        </div>
                        <div class="form-group mb20">
                            <div class="radio-custom radio-disabled mb5">
                                <input type="radio" id="boxed-option" name="layout-option" disabled>
                                <label for="boxed-option">Boxed Layout <b class="text-muted">(Coming Soon)</b></label>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="form-group mn br-t p15">
                <a href="#" id="clearLocalStorage" class="btn btn-primary btn-block pb10 pt10">Clear LocalStorage</a>
            </div>

        </div>
    </div>
</div>
 
<form action="#" method="post" class="form" id="validate" enctype="multipart/form-data">
<div class="panel panel-info">
    <div class="panel-heading">
        <span class="panel-title" > <i class="glyphicons glyphicons-circle_plus"></i>#</span>
    </div>
<div class="panel-body p20 pb10">
        <div class="tab-content pn br-n admin-form">
            <div id="tab1_1" class="tab-pane active">
                <div class="section row mbn">
                    <div class="col-md-9">
                        <div class="section row ">
                           <div class="col-md-12">
                              <label for="name1" class="field prepend-icon">
                                    <input type="text" name="name" value="<?php echo set_value('name1'); ?>" id="name" class="event-name gui-input br-light light" placeholder="Tour Type Name" required="">
                                    <label for="name" class="field-icon">
                                    </label>
                                </label>
                            </div>
                        </div>
                        <div class="section row ">
                        <div class="col-md-12">
                                <label for="name2" class="field prepend-icon">
                                    <input type="text" name="slug" id="slug" value="<?php echo set_value('slug'); ?>" class="event-name gui-input br-light light" placeholder="Slug..." required="">
                                    <label for="slug" class="field-icon">
                                    </label>
                                </label>
                        </div>
                        </div>
                        <div class="section mb10">
                            <input id="tagsinput" class="bg-light" name="metakey" placeholder="Metakey Word Description..." type="text" value=" ">
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
                <div class="section mb15">
                    <label class="field prepend-icon">
                        <textarea class="gui-textarea br-light bg-light" id="description" name="description" placeholder="Description of Location or Destination..." required=""></textarea>
                        <label for="description" class="field-icon"><i class="fa fa-edit"></i>
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
                            <input type="submit" class="btn btn-primary" name="userSubmit" data-note-style="success" value="Save <?php echo $c_name; ?>">
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

    CKEDITOR.replace('tour_detail' ,{

        filebrowserImageBrowseUrl : '<?php echo base_url();?>assets/filemanager/index.html'

    });

    CKEDITOR.replace('packages' ,{
        filebrowserImageBrowseUrl : '<?php echo base_url();?>assets/filemanager/index.html'

    });
</script>
<!-- Template form-->
<!-- Header -->
<?php 
	$this->load->view('inc_head/head_form');

	 $this->load->view('desktop/inc/header');
    $this->load->view('desktop/inc/menuleft');
   $this->load->view('desktop/inc/navigation');
    $this->load->view('desktop/inc/right_side');
    
?>
<!-- End Header -->
<?php 
    $router= & load_class('Router', 'core');
    $controller_name=$router->fetch_class();
?>
<!-- Body -->
<?php 
	$this->load->view($main_content);
//echo " Hello world";
?>
<!-- End Header -->
<!-- Footer -->
<?php 
$this->load->view('inc_footer/footer_form');

?>

<!-- End Footer -->
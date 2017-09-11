<?php
    $this->load->view('desktop/inc/head');
    $this->load->view('desktop/inc/header');
    $this->load->view('desktop/inc/menuleft');
   $this->load->view('desktop/inc/navigation');
    $this->load->view('desktop/inc/right_side');
?>
<?php 
    $router= & load_class('Router', 'core');
    $controller_name=$router->fetch_class();
?>
<?php 
$this->load->view($body); 
?>

  
<?php
    $this->load->view('desktop/inc/footer');
?>


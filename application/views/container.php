<!DOCTYPE html>
<html lang="en">
  <head>
    <title>
      Welcome User
    </title>
  </head>
  <body>
  <?php
  		$this->load->view('include/header');
        $this->load->view('body/userheader');
        $this->load->view('body/sidebar');
        $this->load->view(isset($viewFile)?$viewFile:'dashboard');
        $this->load->view('include/footer');
  ?>
  </body>
</html>
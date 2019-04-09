<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Sports Basahin</title>
	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
  
   	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="<?php echo base_url(); ?>js/jquery-2.1.3.js"></script>
    <script src="<?php echo base_url(); ?>js/bootbox.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
       
      //  console.log('ready');
        if($('#message').length){
          $('#message').delay(3000).fadeOut({}, 3000);
        }

        // add a jquery confirmation dialog to delete..or anything else you want
        // using Bootbox
        // show bootbox confirm on any link using .confirm class; if yes, will continue to href link
        $(".confirm").click(function(){
          var url = $(this).attr('href')
          bootbox.confirm("Are you sure?", function(result) {
            if(result == true){
              document.location = url;
            }else{
              location.reload();
            }
          }); 
          return false;

        }); // \ confirm click

      }); // \ doc ready

    </script>
   
  </head>

  <body class="container">

  <!-- Content here -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo base_url();?>">Sports Basahin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url();?>">Home</a>
        </li>
        <!-- BIRDS DROPDOWN -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Birds
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo base_url()?>birds">Birds Main</a>
            <a class="dropdown-item" href="<?php echo base_url()?>birds/loon">Loon</a>
            <!-- <div class="dropdown-divider"></div> -->
            <a class="dropdown-item" href="<?php echo base_url()?>birds/falcon">Falcon</a>
          </div>
        </li>
        <!-- ARTICLES DROPDOWN -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Articles
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            
            <a class="dropdown-item" href="<?php echo base_url()?>article/read">Read</a>
            <!-- <div class="dropdown-divider"></div> -->
            <a class="dropdown-item" href="<?php echo base_url()?>article/write">Write</a>
            
          </div>
        </li>


        <!-- LOGIN -->

        <?php if ($this->tank_auth->is_logged_in()): ?>
        <?php $username = $this->tank_auth->get_username(); ?>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>Logged In <b><?php echo $username; ?></b>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo base_url()?>auth/logout">Logout</a>
            <a class="dropdown-item" href="<?php echo base_url()?>auth/change_password">Change Password</a>
            <!-- <div class="dropdown-divider"></div> -->
            <a class="dropdown-item" href="<?php echo base_url()?>auth/change_email">Change Email</a>
          </div>
        </li>

        <?php else: ?>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url()?>auth/login"><i class="fa fa-user mr-1"></i>Login</a>
        </li>

        <?php endif; ?>

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

    <?php
     $message = $this->session->flashdata('message');
     if($message){
       echo "\n<h3 class=\"alert alert-info\" id=\"message\">$message</h3>";
     }
    ?>

 


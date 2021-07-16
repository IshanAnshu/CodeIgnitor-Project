<!DOCTYPE html>

<html lang="en">



<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="">

  <meta name="author" content="">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>css/gallery-grid.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

  <style type="text/css">

  	/*

Fade content bs-carousel with hero headers

Code snippet by maridlcrmn (Follow me on Twitter @maridlcrmn) for Bootsnipp.com

Image credits: unsplash.com

*/



/********************************/

/*       Fade Bs-carousel       */

/********************************/

.fade-carousel {

    position: relative;

    height: 100vh;

}

.fade-carousel .carousel-inner .item {

    height: 100vh;

}

.fade-carousel .carousel-indicators > li {

    margin: 0 2px;

    background-color: #f39c12;

    border-color: #f39c12;

    opacity: .7;

}

.fade-carousel .carousel-indicators > li.active {

  width: 10px;

  height: 10px;

  opacity: 1;

}



/********************************/

/*          Hero Headers        */

/********************************/

.hero {

    position: absolute;

    top: 50%;

    left: 50%;

    z-index: 3;

    color: #fff;

    text-align: center;

    text-transform: uppercase;

    text-shadow: 1px 1px 0 rgba(0,0,0,.75);

      -webkit-transform: translate3d(-50%,-50%,0);

         -moz-transform: translate3d(-50%,-50%,0);

          -ms-transform: translate3d(-50%,-50%,0);

           -o-transform: translate3d(-50%,-50%,0);

              transform: translate3d(-50%,-50%,0);

}

.hero h1 {

    font-size: 6em;    

    font-weight: bold;

    margin: 0;

    padding: 0;

}



.fade-carousel .carousel-inner .item .hero {

    opacity: 0;

    -webkit-transition: 2s all ease-in-out .1s;

       -moz-transition: 2s all ease-in-out .1s; 

        -ms-transition: 2s all ease-in-out .1s; 

         -o-transition: 2s all ease-in-out .1s; 

            transition: 2s all ease-in-out .1s; 

}

.fade-carousel .carousel-inner .item.active .hero {

    opacity: 1;

    -webkit-transition: 2s all ease-in-out .1s;

       -moz-transition: 2s all ease-in-out .1s; 

        -ms-transition: 2s all ease-in-out .1s; 

         -o-transition: 2s all ease-in-out .1s; 

            transition: 2s all ease-in-out .1s;    

}



/********************************/

/*            Overlay           */

/********************************/

.overlay {

    position: absolute;

    width: 100%;

    height: 100%;

    z-index: 2;

    background-color: #080d15;

    opacity: .7;

}



/********************************/

/*          Custom Buttons      */

/********************************/

.btn.btn-lg {padding: 10px 40px;}

.btn.btn-hero,

.btn.btn-hero:hover,

.btn.btn-hero:focus {

    color: #f5f5f5;

    background-color: #1abc9c;

    border-color: #1abc9c;

    outline: none;

    margin: 20px auto;

}



/********************************/

/*       Slides backgrounds     */

/********************************/

.fade-carousel .slides .slide-1, 

.fade-carousel .slides .slide-2,

.fade-carousel .slides .slide-3 {

  height: 100vh;

  background-size: cover;

  background-position: center center;

  background-repeat: no-repeat;

}

.fade-carousel .slides .slide-1 {

  background-image: url('https://rukminim1.flixcart.com/image/612/612/jqo3b0w0/protein-supplement/v/p/p/gold-standard-100-on0028-optimum-nutrition-original-imafcmssx9dfxbpq.jpeg?q=70'); 

}

.fade-carousel .slides .slide-2 {

  background-image: url('https://rukminim1.flixcart.com/image/612/612/jex4yvk0/protein-supplement/f/y/s/631656710496-muscletech-original-imaezazdxznzpavm.jpeg?q=70');

}

.fade-carousel .slides .slide-3 {

  background-image: url('https://rukminim1.flixcart.com/image/612/612/jbmjf680/protein-supplement/d/g/h/631656711813-muscletech-original-imafyxxtafhfb9wt.jpeg?q=70');

}



/********************************/

/*          Media Queries       */

/********************************/

@media screen and (min-width: 980px){

    .hero { width: 980px; }    

}

@media screen and (max-width: 640px){

    .hero h1 { font-size: 4em; }    

}

  </style>

  <title>Products</title>



  <!-- Bootstrap Core CSS -->

  <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">



  <!-- Fonts -->

  <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <link href="<?php echo base_url(); ?>css/animate.css" rel="stylesheet" type="text/css"/>

  <!-- Squad theme CSS -->

  <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css">

  <link href="<?php echo base_url(); ?>css/default.css" rel="stylesheet" type="text/css">

  <link href="<?php echo base_url(); ?>css/spl_for_adding_tags_and_styling_images.css" rel="stylesheet" type="text/css">

  <!-- =======================================================

    Theme Name: Squadfree

    Theme URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/

    Author: BootstrapMade

    Author URL: https://bootstrapmade.com

  ======================================================= -->

  <style type="text/css">

  	#quote-carousel {

    padding: 0 10px 30px 10px;

    margin-top: 60px;

}

#quote-carousel .carousel-control {

    background: none;

    color: #CACACA;

    font-size: 2.3em;

    text-shadow: none;

    margin-top: 30px;

}

#quote-carousel .carousel-indicators {

    position: relative;

    right: 50%;

    top: auto;

    bottom: 0px;

    margin-top: 20px;

    margin-right: -19px;

}

#quote-carousel .carousel-indicators li {

    width: 50px;

    height: 50px;

    cursor: pointer;

    border: 1px solid #ccc;

    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);

    border-radius: 50%;

    opacity: 0.4;

    overflow: hidden;

    transition: all .4s ease-in;

    vertical-align: middle;

}

#quote-carousel .carousel-indicators .active {

    width: 128px;

    height: 128px;

    opacity: 1;

    transition: all .1s;

}

.item blockquote {

    border-left: none;

    margin: 0;

}

.item blockquote p:before {

    content: "\f10d";

    font-family: 'Fontawesome';

    float: left;

    margin-right: 10px;

}
nav.navbar.navbar-custom.navbar-fixed-top.top-nav-collapse{

  margin-top:0%!important;
}

#dropdown
{
  display: none;
}
/*
#product_dropdown a:hover + #dropdown
{
  /*animation: mydropdown 1.5s; 
  display: block;
} */

/*#product_dropdown ul li 
{
  float : none;
}

#product_dropdown ul 
{
  display: none;
}
 #dropdown: hover ul
{
  display: block;
}*/
/* @keyframes mydropdown
{
  0%
  {
     document.getElementById('dropdown').style.display='block';

  }
  100%
  {
     document.getElementById('dropdown').style.display='none';
  }
} */

/*nav a:visited
{
  color:green;
}*/

/* CSS For thr Modal */

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: rgb(2, 162, 206);
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color:rgb(2, 162, 206);
  color: white;
}





  </style>


<script type="text/javascript">
 function clickfunction()
  {
    document.getElementById("dropdown").style.display="block";
  }

 function clickoutfunction()
  {
    document.getElementById("dropdown").style.display="none";
  }

 /* function checkLoggedUser()
  {
    <?php
          if($this->session->userdata('username')!='')
          { ?>
            redirect('http://127.0.0.1/CodeIgniter-3.1.9/index.php/cart.php');
            <?php }
          else
          {  ?>
            document.getElementById("signupbutton").style.display="block";
            document.getElementById("loginbutton").style.display="block";
            <?php  } 
    ?>
  }*/
</script>


</head>



<body id="page-top" data-spy="scroll" data-target=".navbar-custom">  

  


  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="margin-top:-1%;    background-color:rgb(2, 162, 206);">

    <div class="container">

      <div class="navbar-header page-scroll">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">

                    <i class="fa fa-bars"></i>

                </button>

        <a class="navbar-brand" href="#">

          <img src="<?php echo base_url(); ?>images/spl_logo.jpeg" height="42" width="42" alt='logo'>

        </a>

      </div>



      <!-- Collect the nav links, forms, and other content for toggling -->

      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">

        <ul style="   background-color: rgb(2, 162, 206);" class="nav navbar-nav">

          <li class="active"><a style="color:green" href="http://127.0.0.1/CodeIgniter-3.1.9/index.php/splController">Home</a></li>
         <!-- <li class="active"><a style="color:green" href="#top_area">Products</a></li>   -->

          <li onclick="clickfunction()"><a style="color:green" href="#about">Your Bite<i class="fa fa-caret-down"></i></a>
            <ul id = "dropdown">
              <li><a style="color:green" href="http://127.0.0.1/CodeIgniter-3.1.9/index.php/splController/toLoadProductsPage/#proteins">Proteins</a></li>
              <li><a style="color:green" href="http://127.0.0.1/CodeIgniter-3.1.9/index.php/splController/toLoadProductsPage/#gainers">Gainers</a></li> 
              <li><a style="color:green" href="http://127.0.0.1/CodeIgniter-3.1.9/index.php/splController/toLoadProductsPage/#amino_acids">Amino Acids</a></li> 
            </ul>  
          </li>

          
          <li><a style="color:green" href="http://127.0.0.1/CodeIgniter-3.1.9/index.php/splController/cart"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
          <li><a style="color:green" href="http://127.0.0.1/CodeIgniter-3.1.9/index.php/splController/toLoadProductsPage/#contact">Contact</a></li>
          <li><a style="color:green" href="http://127.0.0.1/CodeIgniter-3.1.9/index.php/splController/logout">Logout</a></li>
        </ul>

      </div>

      <!-- /.navbar-collapse -->

    </div>

    <!-- /.container -->

  </nav>



  <!-- Table for order begins here -->
<div class = "container" style="margin-top:7%">
            <table class="table table-hover">
                <thead>
                <tr>
                     <th>Item</th>
                    <th> Name</th>
                    <th>Cost</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($fetch_data->result() as $row)
                 {?>


                <tr>
                    <td><?php echo $row->item?></td>
                    <td><?php echo $row->product_name?></td>
                    <td><?php echo $row->cost?></td>
                    <td></td>
                  <!--  <td><a href="http://127.0.0.1/CodeIgniter-3.1.9/index.php/splController/removeProtein/<?php echo $row->id;?>"><button class="w3-button w3-round-xxlarge" style="background-color: rgb(237, 221, 187); color:red;">Remove</button></a></center></td>
                 -->  </tr>

                 <?php }?>
               
                </tbody>
            </table>
            <a href="http://127.0.0.1/CodeIgniter-3.1.9/index.php/splController/confirmOrder"> <button type="button" class="w3-button w3-round-xxlarge" style="background-color: rgb(244, 210, 154);">Confirm Order</button></a>
  </div>
</body>
</html>
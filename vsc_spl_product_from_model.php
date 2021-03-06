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

  <!-- Preloader -->

  <div id="preloader">

    <div id="load"></div>

  </div>



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
          <li class="active"><a style="color:green" href="#top_area">Products</a></li>

          <li onclick="clickfunction()"><a style="color:green" href="#about">Your Bite<i class="fa fa-caret-down"></i></a>
            <ul id = "dropdown">
              <li><a style="color:green" href=#proteins>Proteins</a></li>
              <li><a style="color:green" href=#gainers>Gainers</a></li> 
              <li><a style="color:green" href=#amino_acids>Amino Acids</a></li> 
            </ul>  
          </li>

          
          <li><a style="color:green" href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
          <li><a style="color:green" href="#contact">Contact</a></li>

        </ul>

      </div>

      <!-- /.navbar-collapse -->

    </div>

    <!-- /.container -->

  </nav>








  <div onclick="clickoutfunction()">
  <!-- For the Products section  -->
  
        <div id="top_area" class="container">
          <div style="margin-top:6%; margin-left: 4%; background-color:rgb(229, 248, 249);">
              
              
              <div class="col-sm-3"><p style="font-size:32px; color: rgb(226, 11, 54)">Our Products</p></div>
              
                            
      </div>   
      </div>
      <div  class="container" style="margin-top:3%;">
      <div class="col-md-3 col-sm-6" data-toggle="modal" data-target="#myModal">
          <div class="thumbnail" style="background-color:rgb(237, 242, 240); border-style: none;" >
              <img src="<?php echo base_url(); ?>images/7.jpeg" class="onPage" >
              <div class="caption">
                  <center>
                  <h4>Whey Gold</h4><br>
                  </center>         
              </div>
              <img src="<?php echo base_url(); ?>images/ribbon_best_seller.jpg" class="ribbon">
          </div>
      </div>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <center><h4 class="modal-title">Modal Header</h4></center>
            </div>
            <div class="modal-body">
              <div class="col-sm-4"><img src="<?php echo base_url(); ?>images/7.jpeg" style="height:130px;"></div>
              <div class="col-sm-4"></div>
              <div class="col-sm-4"></div>
              <p>The popularity of vaporization has left little time for conversation on the art of rolling. However, this minimalist, easily accessible, tried-and-true consumption method still reigns supreme globally, and combustion aside, the creative potential and skill required to craft a functional roll is celebrated among many cannabis enthusiasts.</p>

                   <p>If you???re new to cannabis, there are three broad categories by which to delineate rolls (substantiated by withstanding popularity): joints, spliffs, and blunts. Each can be defined by their content (cannabis-tobacco ratio) as well as the paper material (tobacco, hemp, wood pulp, etc.).</p>
            </div>
            <div class="modal-footer">
                    <center><button class="w3-button w3-round-xxlarge" style="background-color: lawngreen">Rs. 1000</button></center>
                    <a href="http://127.0.0.1/CodeIgniter-3.1.9/index.php/splController/add_to_cart"><button type="button" class="btn btn-primary" style="float: left; display:<?php echo $btt_state;?>" ><?php echo $btt_text;?></button>
                    <a href="http://127.0.0.1/CodeIgniter-3.1.9/index.php/splController/signup"><button type="button" class="w3-button w3-round-xxlarge"  style= " margin-bottom:2px; background-color: rgb(244, 210, 154);display:<?php echo $btt_signup_or_login;?> "><?php echo $btt_text_sign_up;?></button></a>
                    <a href="http://127.0.0.1/CodeIgniter-3.1.9/index.php/splController/login"> <button type="button" class="w3-button w3-round-xxlarge" style="background-color: rgb(244, 210, 154); display:<?php echo $btt_signup_or_login;?>"><?php echo $btt_text_login;?></button></a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
      </div>

      


      <div class="col-md-3 col-sm-6">
          <div class="thumbnail" style="background-color:rgb(237, 242, 240); border-style: none;">
              <img src="<?php echo base_url(); ?>images/2.jpeg" class="onPage" >
              <div class="caption">
                  <center>
                  <h4>ISO Sensation</h4><br>
                  
                  </center>
                  
               </div>
              <img src="<?php echo base_url(); ?>images/ribbon_best_seller.jpg" class="ribbon">
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail" style="background-color:rgb(237, 242, 240); border-style: none;">
              <img src="<?php echo base_url(); ?>images/3.jpeg" class="onPage" >
              <div class="caption">
                  <center>
                  <h4>Xtend BCAAs</h4><br>
                  
                  </center>
                  
               </div>
              <img src="<?php echo base_url(); ?>images/ribbon_best_seller.jpg" class="ribbon">
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail" style="background-color:rgb(237, 242, 240); border-style: none;">
              <img src="<?php echo base_url(); ?>images/4.jpeg" class="onPage" >
              <div class="caption">
                  <center>
                  <h4>Xtend BCAAs</h4><br>
                 
                  </center>
                  
               </div>
              <img src="<?php echo base_url(); ?>images/ribbon_trending.jpg" class="ribbon">
          </div>
      </div>
          <div class="col-md-3 col-sm-6">
          <div class="thumbnail" style="background-color:rgb(237, 242, 240); border-style: none;">
              <img src="<?php echo base_url(); ?>images/5.jpeg" class="onPage" >
              <div class="caption">
                  <center>
                  <h4>BCAA Powder</h4><br>
                  
                  </center>
                  
               </div>
              <img src="<?php echo base_url(); ?>images/ribbon_trending.jpg" class="ribbon">
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail" style="background-color:rgb(237, 242, 240); border-style: none;">
              <img src="<?php echo base_url(); ?>images/6.jpeg" class="onPage" >
              <div class="caption">
                  <center>
                  <h4>Gluta Test</h4><br>
                 
                  </center>
                  
               </div>
              <img src="<?php echo base_url(); ?>images/ribbon_trending.jpg" class="ribbon">
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail" style="background-color:rgb(237, 242, 240); border-style: none;">
              <img src="<?php echo base_url(); ?>images/7.jpeg" class="onPage" >
              <div class="caption">
                  <center>
                  <h4>Van Heusen</h4><br>
                 
                  </center>
                  
               </div>
              <img src="<?php echo base_url(); ?>images/ribbon_on_sale.jpg" class="ribbon">
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail" style="background-color:rgb(237, 242, 240); border-style: none;">
              <img src="<?php echo base_url(); ?>images/8.jpeg" class="onPage" >
              <div class="caption">
                  <center>
                  <h4>Whey Gold</h4><br>
                  
                  </center>
                  
               </div>
              <img src="<?php echo base_url(); ?>images/ribbon_on_sale.jpg" class="ribbon">
          </div>
      </div>
  
      </div>
 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <!-- For the Proteins Section-->
  
  
  <section id="proteins" class="home-section text-center bg-gray">



    <div class="heading-about">

      <div class="container">

        <div class="row">

          <div class="col-lg-8 col-lg-offset-2">

            <div class="wow bounceInDown" data-wow-delay="0.4s">

              <div class="section-heading">

                <h2>Trending In Proteins</h2>

                <i class="fa fa-2x fa-angle-down"></i>



              </div>

            </div>

          </div>

        </div>

      </div>

    </div>
      
      <div class="container">

      <div class="row">

        <div class="col-lg-2 col-lg-offset-5">

          <hr class="marginbot-50">

        </div>

      </div>
          
          <div class="container" style="margin-top:3%;">
      <div class="col-md-3 col-sm-6" data-toggle="modal" data-target="#proteins_model">
          <div class="thumbnail" style="background-color:rgb(237, 242, 240); border-style: none;" >
              <img src="<?php echo base_url(); ?>images/7.jpeg" class="onPage" >
              <div class="caption">
                  <center>
                  <h4>Whey Gold</h4><br>
                  
                  </center>
                  
               </div>
          </div>
      </div>


<!-- Modal -->
<div class="modal fade" id="proteins_model" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <center><h4 class="modal-title">Modal Header</h4></center>
            </div>
            <div class="modal-body">
              <div class="col-sm-4"><img src="<?php echo base_url(); ?>images/7.jpeg" style="height:130px;"></div>
              <div class="col-sm-4"></div>
              <div class="col-sm-4"></div>
              <p>The popularity of vaporization has left little time for conversation on the art of rolling. However, this minimalist, easily accessible, tried-and-true consumption method still reigns supreme globally, and combustion aside, the creative potential and skill required to craft a functional roll is celebrated among many cannabis enthusiasts.</p>

                   <p>If you???re new to cannabis, there are three broad categories by which to delineate rolls (substantiated by withstanding popularity): joints, spliffs, and blunts. Each can be defined by their content (cannabis-tobacco ratio) as well as the paper material (tobacco, hemp, wood pulp, etc.).</p>
            </div>
            <div class="modal-footer">
                    <center><button class="w3-button w3-round-xxlarge" style="background-color: lawngreen">Rs. 1000</button></center>
                    <a href="http://127.0.0.1/CodeIgniter-3.1.9/index.php/splController/add_to_cart"><button type="button" class="btn btn-primary" style="float: left; display:<?php echo $btt_state;?>" ><?php echo $btt_text;?></button>
                    <a href="http://127.0.0.1/CodeIgniter-3.1.9/index.php/splController/signup"><button type="button" class="w3-button w3-round-xxlarge"  style= " margin-bottom:2px; background-color: rgb(244, 210, 154);display:<?php echo $btt_signup_or_login;?> "><?php echo $btt_text_sign_up;?></button></a>
                    <a href="http://127.0.0.1/CodeIgniter-3.1.9/index.php/splController/login"> <button type="button" class="w3-button w3-round-xxlarge" style="background-color: rgb(244, 210, 154); display:<?php echo $btt_signup_or_login;?>"><?php echo $btt_text_login;?></button></a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
      </div>








      <div class="col-md-3 col-sm-6">
          <div class="thumbnail" style="background-color:rgb(237, 242, 240); border-style: none;">
              <img src="<?php echo base_url(); ?>images/2.jpeg" class="onPage" >
              <div class="caption">
                  <center>
                  <h4>ISO Sensation</h4><br>
                  
                  </center>
                  
               </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail" style="background-color:rgb(237, 242, 240); border-style: none;">
              <img src="<?php echo base_url(); ?>images/3.jpeg" class="onPage" >
              <div class="caption">
                  <center>
                  <h4>Xtend BCAAs</h4><br>
                  
                  </center>
                  
               </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail" style="background-color:rgb(237, 242, 240); border-style: none;">
              <img src="<?php echo base_url(); ?>images/4.jpeg" class="onPage" >
              <div class="caption">
                  <center>
                  <h4>Xtend BCAAs</h4><br>
                 
                  </center>
                  
               </div>
          </div>
      </div>
          <div class="col-md-3 col-sm-6">
          <div class="thumbnail" style="background-color:rgb(237, 242, 240); border-style: none;">
              <img src="<?php echo base_url(); ?>images/5.jpeg" class="onPage" >
              <div class="caption">
                  <center>
                  <h4>BCAA Powder</h4><br>
                  
                  </center>
                  
               </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail" style="background-color:rgb(237, 242, 240); border-style: none;">
              <img src="<?php echo base_url(); ?>images/6.jpeg" class="onPage" >
              <div class="caption">
                  <center>
                  <h4>Gluta Test</h4><br>
                 
                  </center>
                  
               </div>
          </div>
      </div>
          </div>
        </div>
  
  </section>
  
  
  <!-- For the Gainers Section  -->
  
  <section id="gainers" class="home-section text-center bg-gray">



    <div class="heading-about">

      <div class="container">

        <div class="row">

          <div class="col-lg-8 col-lg-offset-2">

            <div class="wow bounceInDown" data-wow-delay="0.4s">

              <div class="section-heading">

                <h2>Trending In Gainers</h2>

                <i class="fa fa-2x fa-angle-down"></i>



              </div>

            </div>

          </div>

        </div>

      </div>

    </div>
      
      <div class="container">

      <div class="row">

        <div class="col-lg-2 col-lg-offset-5">

          <hr class="marginbot-50">

        </div>

      </div>
          
          <div class="container" style="margin-top:3%;">
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail" style="background-color:rgb(237, 242, 240); border-style: none;" >
              <img src="<?php echo base_url(); ?>images/7.jpeg" class="onPage" >
              <div class="caption">
                  <center>
                  <h4>Whey Gold</h4><br>
                  
                  </center>
                  
               </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail" style="background-color:rgb(237, 242, 240); border-style: none;">
              <img src="<?php echo base_url(); ?>images/2.jpeg" class="onPage" >
              <div class="caption">
                  <center>
                  <h4>ISO Sensation</h4><br>
                  
                  </center>
                  
               </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail" style="background-color:rgb(237, 242, 240); border-style: none;">
              <img src="<?php echo base_url(); ?>images/3.jpeg" class="onPage" >
              <div class="caption">
                  <center>
                  <h4>Xtend BCAAs</h4><br>
                  
                  </center>
                  
               </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail" style="background-color:rgb(237, 242, 240); border-style: none;">
              <img src="<?php echo base_url(); ?>images/4.jpeg" class="onPage" >
              <div class="caption">
                  <center>
                  <h4>Xtend BCAAs</h4><br>
                 
                  </center>
                  
               </div>
          </div>
      </div>
          <div class="col-md-3 col-sm-6">
          <div class="thumbnail" style="background-color:rgb(237, 242, 240); border-style: none;">
              <img src="<?php echo base_url(); ?>images/5.jpeg" class="onPage" >
              <div class="caption">
                  <center>
                  <h4>BCAA Powder</h4><br>
                  
                  </center>
                  
               </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail" style="background-color:rgb(237, 242, 240); border-style: none;">
              <img src="<?php echo base_url(); ?>images/6.jpeg" class="onPage" >
              <div class="caption">
                  <center>
                  <h4>Gluta Test</h4><br>
                 
                  </center>
                  
               </div>
          </div>
      </div>
          </div>
        </div>
  
  </section>
  
  
  <!-- For the Amino Acids Section  -->
  
  
  
  <section id="amino_acids" class="home-section text-center bg-gray">



    <div class="heading-about">

      <div class="container">

        <div class="row">

          <div class="col-lg-8 col-lg-offset-2">

            <div class="wow bounceInDown" data-wow-delay="0.4s">

              <div class="section-heading">

                <h2>Trending In Amino Acids </h2>

                <i class="fa fa-2x fa-angle-down"></i>



              </div>

            </div>

          </div>

        </div>

      </div>

    </div>
      
      <div class="container">

      <div class="row">

        <div class="col-lg-2 col-lg-offset-5">

          <hr class="marginbot-50">

        </div>

      </div>
          
          <div class="container" style="margin-top:3%;">
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail" style="background-color:rgb(237, 242, 240); border-style: none;" >
              <img src="<?php echo base_url(); ?>images/7.jpeg" class="onPage" >
              <div class="caption">
                  <center>
                  <h4>Whey Gold</h4><br>
                  
                  </center>
                  
               </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail" style="background-color:rgb(237, 242, 240); border-style: none;">
              <img src="<?php echo base_url(); ?>images/2.jpeg" class="onPage" >
              <div class="caption">
                  <center>
                  <h4>ISO Sensation</h4><br>
                  
                  </center>
                  
               </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail" style="background-color:rgb(237, 242, 240); border-style: none;">
              <img src="<?php echo base_url(); ?>images/3.jpeg" class="onPage" >
              <div class="caption">
                  <center>
                  <h4>Xtend BCAAs</h4><br>
                  
                  </center>
                  
               </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail" style="background-color:rgb(237, 242, 240); border-style: none;">
              <img src="<?php echo base_url(); ?>images/4.jpeg" class="onPage" >
              <div class="caption">
                  <center>
                  <h4>Xtend BCAAs</h4><br>
                 
                  </center>
                  
               </div>
          </div>
      </div>
          <div class="col-md-3 col-sm-6">
          <div class="thumbnail" style="background-color:rgb(237, 242, 240); border-style: none;">
              <img src="<?php echo base_url(); ?>images/5.jpeg" class="onPage" >
              <div class="caption">
                  <center>
                  <h4>BCAA Powder</h4><br>
                  
                  </center>
                  
               </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail" style="background-color:rgb(237, 242, 240); border-style: none;">
              <img src="<?php echo base_url(); ?>images/6.jpeg" class="onPage" >
              <div class="caption">
                  <center>
                  <h4>Gluta Test</h4><br>
                 
                  </center>
                  
               </div>
          </div>
      </div>
          </div>
        </div>
  
  </section>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  









  <!-- Section: contact -->

  <section id="contact" class="home-section text-center">

    <div class="heading-contact">

      <div class="container">

        <div class="row">

          <div class="col-lg-8 col-lg-offset-2">

            <div class="wow bounceInDown" data-wow-delay="0.4s">

              <div class="section-heading">

                <h2>Get in touch</h2>

                <i class="fa fa-2x fa-angle-down"></i>



              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

    <div class="container">



      <div class="row">

        <div class="col-lg-2 col-lg-offset-5">

          <hr class="marginbot-50">

        </div>

      </div>

      <div class="row">

        <div class="col-lg-8">

          <div class="boxed-grey">



            <div id="sendmessage">Your message has been sent. Thank you!</div>

            <div id="errormessage"></div>

            <form id="contact-form" action="" method="post" role="form" class="contactForm">

              <div class="row">

                <div class="col-md-6">

                  <div class="form-group">

                    <label for="name">

                                Name</label>

                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />

                    <div class="validation"></div>

                  </div>

                  <div class="form-group">

                    <label for="email">

                                Email Address</label>

                    <div class="form-group">

                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />

                      <div class="validation"></div>

                    </div>

                  </div>

                  <div class="form-group">

                    <label for="subject">

                                Subject</label>

                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />

                    <div class="validation"></div>

                  </div>

                </div>

                <div class="col-md-6">

                  <div class="form-group">

                    <label for="name">

                                Message</label>

                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>

                    <div class="validation"></div>

                  </div>

                </div>

                <div class="col-md-12">

                  <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">

                            Send Message</button>

                </div>

              </div>

            </form>

          </div>

        </div>



        <div class="col-lg-4">

          <div class="widget-contact">

            <h5>Main Office</h5>



            <address>
<!-- 
          <strong>Squas Design, Inc.</strong><br> -->
          7th Floor, Indira Gandhi Bhawan, Mahatma Gandhi Marg, Civil Lines, 
         <br>

         Prayagraj, Uttar Pradesh 211011<br>

          <abbr title="Phone">MBL:</abbr>99999999 

        </address>



            <address>

          <strong>Email</strong><br>

          <a href="mailto:#">ishanmisra1111@gmail.com</a>

        </address>

            <address>

          <strong>We're on social networks</strong><br>

                        <ul class="company-social">

                            <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>

                            <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>

                            <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>

                            <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>

                        </ul>

        </address>



          </div>

        </div>

      </div>



    </div>

  </section>

  <!-- /Section: contact -->



  <footer>

    <div class="container">

      <div class="row">

        <div class="col-md-12 col-lg-12">

          <div class="wow shake" data-wow-delay="0.4s">

            <div class="page-scroll marginbot-30">

              <a href="#intro" id="totop" class="btn btn-circle">

              <i class="fa fa-angle-double-up animated"></i>

            </a>

            </div>

          </div>

          <p> All rights reserved &copy;Ziddi Hoon Mai</p>

          <div class="credits">

            <!--

              All the links in the footer should remain intact. 

              You can delete the links only if you purchased the pro version.

              Licensing information: https://bootstrapmade.com/license/

              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Squadfree

            -->

            Designed by <a href="https://bootstrapmade.com/">Ishan Misra</a>

          </div>

        </div>

      </div>

    </div>

  </footer>

</div>

  <!-- Core JavaScript Files -->

  <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>

  <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

  <script src="<?php echo base_url(); ?>js/jquery.easing.min.js"></script>

  <script src="<?php echo base_url(); ?>js/jquery.scrollTo.js"></script>

  <script src="<?php echo base_url(); ?>js/wow.min.js"></script>

  <!-- Custom Theme JavaScript -->

  <script src="<?php echo base_url(); ?>js/custom.js"></script>

  <script src="<?php echo base_url(); ?>js/contactform.js"></script>



</body>



</html>


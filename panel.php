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

  <title>Panel Spl</title>



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

/* CSS Modal Styling*/
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
  background-color: #5cb85c;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
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

  <!-- Preloader 

  <div id="preloader">

    <div id="load"></div>

  </div>
            -->


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

          <li class="active" style="margin-right:100px;"><a style="color:green" href="http://127.0.0.1/CodeIgniter-3.1.9/index.php/splController" target =_blank;>Home Page</a></li>
          <li class="active"><a style="color:green" href="<?php echo base_url(); ?>index.php/splController/toLoadProductsPage" target =_blank;>Products Page</a></li>

        <!--  <li onclick="clickfunction()"><a style="color:green" href="#about">Your Bite<i class="fa fa-caret-down"></i></a>
            <ul id = "dropdown">
              <li><a style="color:green" href=#proteins>Proteins</a></li>
              <li><a style="color:green" href=#gainers>Gainers</a></li> 
              <li><a style="color:green" href=#amino_acids>Amino Acids</a></li> 
            </ul>  
          </li>

          
          <li><a style="color:green" href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
          <li><a style="color:green" href="#contact">Contact</a></li>-->

        </ul>

      </div>

      <!-- /.navbar-collapse -->

    </div>

    <!-- /.container -->

  </nav>
  
  <div class="container" style="margin-top:3.1%;">
          <!--<div style="margin-top:6%; margin-left: 4%; background-color:rgb(229, 248, 249);">   -->
          <div class="col-sm-3"><img src=" <?php echo base_url(); ?>images/settings.jpg" style="width:80px; height:80px; margin-top:4%; margin-left:9%" alt="Image not Found" class="img-responsive" height="162" width="292"/></div>        
              <div class="col-sm-3" style="margin-left: 4%; margin-top:2.1%;"><p style="font-size:32px; color: rgb(210,105,30); font-weight:5px;"><b>Manage Your Site</b></p>
            </div>                   
    <!--  </div>   -->
      </div>
      <div class="container">
          <div style="margin-top:4%; margin-left: -2%; background-color:rgb(229, 248, 249);">
          <div class="col-sm-3"><p style="font-size:26px; color: rgb(226, 11, 54)">On HomePage</p>
        </div>  
      </div>   
      </div>



<!--  Table for showing buttons in format  -->




      <div class="container">
        
  <table class="table">
    <thead>
      <tr>
        <th>Change Sliders</th>


        <!-- First Slider -->
        <th><button type="button" class="w3-button w3-round-xxlarge" style="background-color: rgb(175, 213, 237);" id="bttSlider1">Slider 1</button>
        
<!-- Modal -->
<div class="modal" id="Slider1">
          
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
              <span class="close">&times;</span>
             <center><h4>Changing First Slider</h4> </center>
              </div>
              <div class="modal-body">
              <?php echo form_open_multipart('splController/changeSlider1'); ?>

                <h5>New Slider Image:</h5><br/>
                <input type="file" name="image" value="" size="50" style="margin-top:-3%;"/>                
                <br/>
                    <div class="modal-footer">
              <div style="float:left;"><button type="submit"  class="w3-button w3-round-xxlarge" style="background-color: rgb(175, 213, 237);" >Change Slider</button></div>

                </form>
                
              </div>
            </div>
            
          </div>
        </div>


      

        </th>

        <script>
// Get the modal
var modal1 = document.getElementById('Slider1');

// Get the button that opens the modal
var btn1 = document.getElementById("bttSlider1");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn1.onclick = function() {
  modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
  modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}
</script>


<!-- Second Slider -->
<th><button type="button" class="w3-button w3-round-xxlarge" style="background-color: rgb(175, 213, 237);" id="bttSlider2">Slider 2</button>
        
        <!-- Modal -->
        <div class="modal" id="Slider2">
                  
                  
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                      <span class="close">&times;</span>
                     <center><h4>Changing Second Slider</h4> </center>
                      </div>
                      <div class="modal-body">
                      <?php echo form_open_multipart('splController/changeSlider2'); ?>
        
                        <h5>New Slider Image:</h5><br/>
                        <input type="file" name="image" value="" size="50" style="margin-top:-3%;"/>                
                        <br/>
                            <div class="modal-footer">
                      <div style="float:left;"><button type="submit"  class="w3-button w3-round-xxlarge" style="background-color: rgb(175, 213, 237);" >Change Slider</button></div>
        
                        </form>
                        
                      </div>
                    </div>
                    
                  </div>
                </div>
        
        
              
        
                </th>
        
                <script>
        // Get the modal
        var modal2 = document.getElementById('Slider2');
        
        // Get the button that opens the modal
        var btn2 = document.getElementById("bttSlider2");
        
        // Get the <span> element that closes the modal
        var span2 = document.getElementsByClassName("close")[0];
        
        // When the user clicks the button, open the modal 
        btn2.onclick = function() {
          modal2.style.display = "block";
        }
        
        // When the user clicks on <span> (x), close the modal
        span2.onclick = function() {
          modal2.style.display = "none";
        }
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal2) {
            modal2.style.display = "none";
          }
        }
        </script>


                <!-- Third Slider -->
        <th><button type="button" class="w3-button w3-round-xxlarge" style="background-color: rgb(175, 213, 237);" id="bttSlider3">Slider 3</button>
        
        <!-- Modal -->
        <div class="modal" id="Slider3">
                  
                  
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                      <span class="close">&times;</span>
                     <center><h4>Changing Third Slider</h4> </center>
                      </div>
                      <div class="modal-body">
                      <?php echo form_open_multipart('splController/changeSlider3'); ?>
        
                        <h5>New Slider Image:</h5><br/>
                        <input type="file" name="image" value="" size="50" style="margin-top:-3%;"/>                
                        <br/>
                            <div class="modal-footer">
                      <div style="float:left;"><button type="submit"  class="w3-button w3-round-xxlarge" style="background-color: rgb(175, 213, 237);" >Change Slider</button></div>
        
                        </form>
                        
                      </div>
                    </div>
                    
                  </div>
                </div>
        
        
              
        
                </th>
        
                <script>
        // Get the modal
        var modal3 = document.getElementById('Slider3');
        
        // Get the button that opens the modal
        var btn3 = document.getElementById("bttSlider3");
        
        // Get the <span> element that closes the modal
        var span3 = document.getElementsByClassName("close")[0];
        
        // When the user clicks the button, open the modal 
        btn3.onclick = function() {
          modal3.style.display = "block";
        }
        
        // When the user clicks on <span> (x), close the modal
        span3.onclick = function() {
          modal3.style.display = "none";
        }
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal3) {
            modal3.style.display = "none";
          }
        }
        </script>
      </tr>
    </thead>
    <tbody>

<!-- Proteins Image -->


      <tr>
        <td>Proteins Image</td>
        
        <td><button type="button" class="w3-button w3-round-xxlarge" style="background-color: rgb(175, 213, 237);" id="bttProteinsImage">Change</button>
        
<!-- Modal -->
<div class="modal" id="ProteinsImage">
          
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
              <span class="close">&times;</span>
             <center><h4>Changing Proteins Image</h4> </center>
              </div>
              <div class="modal-body">
              <?php echo form_open_multipart('splController/changeProteinsImage'); ?>

                <h5>New Proteins Image:</h5><br/>
                <input type="file" name="image" value="" size="50" style="margin-top:-3%;"/>                
                <br/>
                    <div class="modal-footer">
              <div style="float:left;"><button type="submit"  class="w3-button w3-round-xxlarge" style="background-color: rgb(175, 213, 237);" >Change Image</button></div>

                </form>
                
              </div>
            </div>
            
          </div>
        </div>     

        </td>

        <script>
// Get the modal
var modal4 = document.getElementById('ProteinsImage');

// Get the button that opens the modal
var btn4 = document.getElementById("bttProteinsImage");

// Get the <span> element that closes the modal
var span4 = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn4.onclick = function() {
  modal4.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span4.onclick = function() {
  modal4.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal4) {
    modal4.style.display = "none";
  }
}
</script>       
      </tr>

      <!-- Gainers Image -->
      <tr>
        <td>Gainers Image</td>
        
        <td><button type="button" class="w3-button w3-round-xxlarge" style="background-color: rgb(175, 213, 237);" id="bttGainersImage">Change</button>
        
<!-- Modal -->
<div class="modal" id="GainersImage">
          
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
              <span class="close">&times;</span>
             <center><h4>Changing Gainers Image</h4> </center>
              </div>
              <div class="modal-body">
              <?php echo form_open_multipart('splController/changeGainersImage'); ?>

                <h5>New Gainers Image:</h5><br/>
                <input type="file" name="image" value="" size="50" style="margin-top:-3%;"/>                
                <br/>
                    <div class="modal-footer">
              <div style="float:left;"><button type="submit"  class="w3-button w3-round-xxlarge" style="background-color: rgb(175, 213, 237);" >Change Image</button></div>

                </form>
                
              </div>
            </div>
            
          </div>
        </div>     

        </td>

        <script>
// Get the modal
var modal5 = document.getElementById('GainersImage');

// Get the button that opens the modal
var btn5 = document.getElementById("bttGainersImage");

// Get the <span> element that closes the modal
var span5 = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn5.onclick = function() {
  modal5.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span5.onclick = function() {
  modal5.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal5) {
    modal5.style.display = "none";
  }
}
</script>       
      </tr>


      <!-- Protein Bars Image -->



      <tr>
        <td>Protein Bars Image</td>
        
        <td><button type="button" class="w3-button w3-round-xxlarge" style="background-color: rgb(175, 213, 237);" id="bttProteinBarsImage">Change</button>
        
<!-- Modal -->
<div class="modal" id="ProteinBarsImage">
          
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
              <span class="close">&times;</span>
             <center><h4>Changing Protein Bars Image</h4> </center>
              </div>
              <div class="modal-body">
              <?php echo form_open_multipart('splController/changeProteinBarsImage'); ?>

                <h5>New Protein Bars Image:</h5><br/>
                <input type="file" name="image" value="" size="50" style="margin-top:-3%;"/>                
                <br/>
                    <div class="modal-footer">
              <div style="float:left;"><button type="submit"  class="w3-button w3-round-xxlarge" style="background-color: rgb(175, 213, 237);" >Change Image</button></div>

                </form>
                
              </div>
            </div>
            
          </div>
        </div>     

        </td>

        <script>
// Get the modal
var modal6 = document.getElementById('ProteinBarsImage');

// Get the button that opens the modal
var btn6 = document.getElementById("bttProteinBarsImage");

// Get the <span> element that closes the modal
var span6 = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn6.onclick = function() {
  modal6.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span6.onclick = function() {
  modal6.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal6) {
    modal6.style.display = "none";
  }
}
</script>       
      </tr>

      <!-- Amino Acids Image -->
      <tr>
        <td>Amino Acids Image</td>
        <td><button type="button" class="w3-button w3-round-xxlarge" style="background-color: rgb(175, 213, 237);" id="bttAminoAcidsImage">Change</button>
        
<!-- Modal -->
<div class="modal" id="AminoAcidsImage">
          
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
              <span class="close">&times;</span>
             <center><h4>Changing Amino  Acids Image</h4> </center>
              </div>
              <div class="modal-body">
              <?php echo form_open_multipart('splController/changeAminoAcidsImage'); ?>

                <h5>New Amino Acids Image:</h5><br/>
                <input type="file" name="image" value="" size="50" style="margin-top:-3%;"/>                
                <br/>
                    <div class="modal-footer">
              <div style="float:left;"><button type="submit"  class="w3-button w3-round-xxlarge" style="background-color: rgb(175, 213, 237);" >Change Image</button></div>

                </form>
                
              </div>
            </div>
            
          </div>
        </div>     

        </td>

        <script>
// Get the modal
var modal7 = document.getElementById('AminoAcidsImage');

// Get the button that opens the modal
var btn7 = document.getElementById("bttAminoAcidsImage");

// Get the <span> element that closes the modal
var span7 = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn7.onclick = function() {
  modal7.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span7.onclick = function() {
  modal7.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal7) {
    modal7.style.display = "none";
  }
}
</script>           
      </tr>
      </tbody>
  </table>
</div>





<!--  For the Products Page  -->






<div class="container">
          <div style="margin-top:4%; margin-left: -2%; background-color:rgb(229, 248, 249);">
          <div class="col-sm-3"><p style="font-size:26px; color: rgb(226, 11, 54)">On Products Page</p>
        </div>  
      </div>   
</div>



<!--  Table for showing buttons in format  -->
<div class="container">

<table class="table">
    <thead>
      <tr>
        <th>Show Case</th>
        <th><button type="button" class="w3-button w3-round-xxlarge" style="background-color: rgb(175, 213, 237);" id="bttAddShelf">Click to Add</button>
        </th>
     </tr>

<!-- Modal -->
<div class="modal" id="AddShelfModal">
         
          
         <!-- Modal content-->
         <div class="modal-content">
           <div class="modal-header">
           <span class="close">&times;</span>
          <center><h4>Adding to Showcase</h4> </center>
           </div>
           <div class="modal-body">
           <?php echo form_open_multipart('splController/addShelf'); ?>

             <h5>Name :</h5>
             <input type="text" name="name" value="" size="50" style="margin-top:-3%;"/>

             <h5 style="margin-top:4%;">Image</h5>
             <input type="file" name="image" value="" />

             <h5 style="margin-top:4%;">Cost</h5>
             <input type="int" name="cost" value="" />

             <h5 style="margin-top:4%;">Select Tag</h5>
             <select name = "tag">
             <option>------Tag------</option>
             <option value="ribbon_best_seller">Best Seller</option>
             <option value="ribbon_trending">Trending</option>
             <option value="ribbon_on_sale">On Sale</option>
             </select>

            <!-- <div><input type="submit" value="Submit" /></div>

             </form> 
           </div>     -->
           <div class="modal-footer">
           <div style="float:left;"><button type="submit"  class="w3-button w3-round-xxlarge" style="background-color: rgb(175, 213, 237);" >Add to Showcase Collection</button></div>

             </form>
             
           </div>
         </div>
         
      
     </div>

     <script>
// Get the modal
var modal12 = document.getElementById('AddShelfModal');

// Get the button that opens the modal
var btn12 = document.getElementById("bttAddShelf");

// Get the <span> element that closes the modal
var span12 = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn12.onclick = function() {
modal12.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span12.onclick = function() {
modal12.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal12) {
 modal12.style.display = "none";
}
}
</script>   

    </thead>




    <tbody>




      <tr>
        <td>Proteins</td>
        <td><button type="button" class="w3-button w3-round-xxlarge" style="background-color: rgb(175, 213, 237);" id="bttAddProteins">Add Product</button>
        </td>       
      </tr>

      <!-- Modal -->
      <div class="modal" id="AddProteinsModal">
         
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
              <span class="close">&times;</span>
             <center><h4>Adding to Proteins</h4> </center>
              </div>
              <div class="modal-body">
              <?php echo form_open_multipart('splController/addProtein'); ?>

                <h5>Name :</h5>
                <input type="text" name="name" value="" size="50" style="margin-top:-3%;"/>

                <h5 style="margin-top:4%;">Image</h5>
                <input type="file" name="image" value="" />

                <h5 style="margin-top:4%;">Cost</h5>
                <input type="int" name="cost" value="" />

               <!-- <div><input type="submit" value="Submit" /></div>

                </form> 
              </div>     -->
              <div class="modal-footer">
              <div style="float:left;"><button type="submit"  class="w3-button w3-round-xxlarge" style="background-color: rgb(175, 213, 237);" >Add to Proteins Collection</button></div>

                </form>
                
              </div>
            </div>
            
         
        </div>

        <script>
// Get the modal
var modal8 = document.getElementById('AddProteinsModal');

// Get the button that opens the modal
var btn8 = document.getElementById("bttAddProteins");

// Get the <span> element that closes the modal
var span8 = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn8.onclick = function() {
  modal8.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span8.onclick = function() {
  modal8.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal8) {
    modal8.style.display = "none";
  }
}
</script>   













<!-- Gainers button  -->
      <tr>
        <td>Gainers</td>
        <td><button type="button" class="w3-button w3-round-xxlarge" style="background-color: rgb(175, 213, 237);" id="bttAddGainers">Add Product</button>
        </td>       
      </tr>

      <!-- Modal -->
      <div class="modal" id="AddGainersModal">
         
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
              <span class="close">&times;</span>
             <center><h4>Adding to Gainers</h4> </center>
              </div>
              <div class="modal-body">
              <?php echo form_open_multipart('splController/addGainer'); ?>

                <h5>Name :</h5>
                <input type="text" name="name" value="" size="50" style="margin-top:-3%;"/>

                <h5 style="margin-top:4%;">Image</h5>
                <input type="file" name="image" value="" />

                <h5 style="margin-top:4%;">Cost</h5>
                <input type="int" name="cost" value="" />

               <!-- <div><input type="submit" value="Submit" /></div>

                </form> 
              </div>     -->
              <div class="modal-footer">
              <div style="float:left;"><button type="submit"  class="w3-button w3-round-xxlarge" style="background-color: rgb(175, 213, 237);" >Add to Gainers Collection</button></div>

                </form>
                
              </div>
            </div>
            
         
        </div>

        <script>
// Get the modal
var modal9 = document.getElementById('AddGainersModal');

// Get the button that opens the modal
var btn9 = document.getElementById("bttAddGainers");

// Get the <span> element that closes the modal
var span9 = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn9.onclick = function() {
  modal9.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span9.onclick = function() {
  modal9.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal9) {
    modal9.style.display = "none";
  }
}
</script>   



<!-- Amino Acids button  -->




      <tr>
        <td>Amino Acids</td>
        <td><button type="button" class="w3-button w3-round-xxlarge" style="background-color: rgb(175, 213, 237);" id="bttAddAminoAcids">Add Product</button>
        </td>       
      </tr>

      <!-- Modal -->
      <div class="modal" id="AddAminoAcidsModal">
         
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
              <span class="close">&times;</span>
             <center><h4>Adding to Amino Acids</h4> </center>
              </div>
              <div class="modal-body">
              <?php echo form_open_multipart('splController/addAminoAcid'); ?>

                <h5>Name :</h5>
                <input type="text" name="name" value="" size="50" style="margin-top:-3%;"/>

                <h5 style="margin-top:4%;">Image</h5>
                <input type="file" name="image" value="" />

                <h5 style="margin-top:4%;">Cost</h5>
                <input type="int" name="cost" value="" />

               <!-- <div><input type="submit" value="Submit" /></div>

                </form> 
              </div>     -->
              <div class="modal-footer">
              <div style="float:left;"><button type="submit"  class="w3-button w3-round-xxlarge" style="background-color: rgb(175, 213, 237);" >Add to Amino Acids Collection</button></div>

                </form>
                
              </div>
            </div>
            
         
        </div>

        <script>
// Get the modal
var modal10 = document.getElementById('AddAminoAcidsModal');

// Get the button that opens the modal
var btn10 = document.getElementById("bttAddAminoAcids");

// Get the <span> element that closes the modal
var span10 = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn10.onclick = function() {
  modal10.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span10.onclick = function() {
  modal10.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal10) {
    modal10.style.display = "none";
  }
}
</script>   



        <!-- Mobile Number button  -->
      <tr>
        <td>Mobile Number</td>
        <td><button type="button" class="w3-button w3-round-xxlarge" style="background-color: rgb(175, 213, 237);" id="bttMobileNumber">Change</button></td>       
      </tr>


<!-- Modal -->
<div class="modal" id="MobileNumberModal">
          
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
              <span class="close">&times;</span>
             <center><h4>Changing Mobile Number</h4> </center>
              </div>
              <div class="modal-body">
              <?php echo form_open_multipart('splController/changeMobileNumber'); ?>

                <h5>New Number :</h5>
                <input type="text" name="name" value="" size="50" style="margin-top:-3%;"/>                

                    <div class="modal-footer">
              <div style="float:left;"><button type="submit"  class="w3-button w3-round-xxlarge" style="background-color: rgb(175, 213, 237);" >Change Mobile Number</button></div>

                </form>
               
              </div>
            </div>
            
          </div>
 </div>

 <script>
// Get the modal
var modal11 = document.getElementById('MobileNumberModal');

// Get the button that opens the modal
var btn11 = document.getElementById("bttMobileNumber");

// Get the <span> element that closes the modal
var span11 = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn11.onclick = function() {
  modal11.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span11.onclick = function() {
  modal11.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal11) {
    modal11.style.display = "none";
  }
}
</script>   

    </tbody>
  </table>











  </body>
  </html>
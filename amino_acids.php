<!DOCTYPE html>

<html lang="en">



<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="">

  <meta name="author" content="">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>css/gallery-grid.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

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
<body>


<!-- For the Amino Acids Section-->
  
  
<section id="amino_acids" class="home-section text-center bg-gray">



<div class="heading-about">

  <div class="container">

    <div class="row">

      <div class="col-lg-8 col-lg-offset-2">

        <div class="wow bounceInDown" data-wow-delay="0.4s">

          <div class="section-heading">

            <h2>Trending In Amino Acids</h2>

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
      <?php foreach($fetch_data->result() as $row)
       {?>
  <div class="col-md-3 col-sm-6" id="proteins_model<?php echo $row->id;?>" onClick="reply_click(<?php echo $row->id;?>)">
      <div class="thumbnail" style="background-color:rgb(237, 242, 240); border-style: none;" >
       <!--   <img src="<?php echo base_url(); ?>images/7.jpeg" class="onPage" >  -->
      <img src="<?php  echo base_url(); ?>uploads/<?php echo $row->file_name;?>" class="onPage" alt ="Image" >  
               <div class="caption">
              <center>
              <h4><?php echo $row->product_name;?></h4><br>
              
              </center>
              
           </div>
      </div>
  </div> 



<!-- The Modal -->
<div class="modal" id="my_proteins_model<?php echo $row->id;?>">
    
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <span class="close">&times;</span>
          <center><h4><?php echo $row->product_name;?></h4></center>
        </div>
        <div class="modal-body">
          <div class="col-sm-4"><img src="<?php  echo base_url(); ?>uploads/<?php echo $row->file_name;?>" style="height:130px;"></div>
          <div class="col-sm-4"></div>
          <div class="col-sm-4"></div>
          <p>The popularity of vaporization has left little time for conversation on the art of rolling. However, this minimalist, easily accessible, tried-and-true consumption method still reigns supreme globally, and combustion aside, the creative potential and skill required to craft a functional roll is celebrated among many cannabis enthusiasts.</p>

               <p>If you???re new to cannabis, there are three broad categories by which to delineate rolls (substantiated by withstanding popularity): joints, spliffs, and blunts. Each can be defined by their content (cannabis-tobacco ratio) as well as the paper material (tobacco, hemp, wood pulp, etc.).</p>
        </div>
        <div class="modal-footer">
                <center><button class="w3-button w3-round-xxlarge" style="background-color: lawngreen"><?php echo $row->cost;?></button></center>
                <a href="http://127.0.0.1/CodeIgniter-3.1.9/index.php/splController/add_to_cart_amino_acids/<?php echo $row->id;?>"><button type="button" class="btn btn-primary" style="float: left; display:<?php echo $btt_state;?>" ><?php echo $btt_text;?></button>
                <a href="http://127.0.0.1/CodeIgniter-3.1.9/index.php/splController/signup"><button type="button" class="w3-button w3-round-xxlarge"  style= " margin-bottom:2px; background-color: rgb(244, 210, 154);display:<?php echo $btt_signup_or_login;?> "><?php echo $btt_text_sign_up;?></button></a>
                <a href="http://127.0.0.1/CodeIgniter-3.1.9/index.php/splController/login"> <button type="button" class="w3-button w3-round-xxlarge" style="background-color: rgb(244, 210, 154); display:<?php echo $btt_signup_or_login;?>"><?php echo $btt_text_login;?></button></a>
                
        </div>
      </div>
      
   
  </div>







<!-- Script for the Modal  -->











<script>
var dc;
// Get the modal
function reply_click(id)
{
   //var clicked=clicked_id;
   var modal = document.getElementById("my_proteins_model"+id);
   dc=modal;
   // alert("ashu");
   modal.style.display = "block";

}

// Get the button that opens the modal
var btn = document.getElementById("proteins_model<?php echo $row->id;?>");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[<?php echo $row->id;?>];

// When the user clicks the button, open the modal 
// btn.onclick = function() {
//   var modal = document.getElementById("my_proteins_model1");
//   modal.style.display = "block";
// }

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  dc.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    dc.style.display = "none";
  }
}




</script>














  <?php } ?>






 <!-- <div class="col-md-3 col-sm-6">
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
  </div>  -->
      </div>
    </div>

</section>







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

<!DOCTYPE html>

<html lang="en">



<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="">

  <meta name="author" content="">

  <link rel="stylesheet" href="<?php echo base_url(); ?>css/gallery-grid.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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

  background-image: url(<?php echo base_url(); ?>uploads/<?php echo $slider1?>); 

}

.fade-carousel .slides .slide-2 {

  background-image: url(<?php echo base_url(); ?>uploads/<?php echo $slider2?>);

}

.fade-carousel .slides .slide-3 {

  background-image: url(<?php echo base_url(); ?>uploads/<?php echo $slider3?>);

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

  <title>Homepage</title>



  <!-- Bootstrap Core CSS -->

  <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">



  <!-- Fonts -->

  <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <link href="<?php echo base_url(); ?>css/animate.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>css/fontawesome-webfont.woff" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>css/fontawesome-webfont.ttf" rel="stylesheet" />
  

  <!-- Squad theme CSS -->

  <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>css/default.css" rel="stylesheet">
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
  </style>

<script type="text/javascript">
  function underlinefxn1()
   {
     document.getElementById("protein_heading").innerHTML="<u>Proteins</u>";
     document.getElementById("protein_subheading").innerHTML="<u>Machine Whey</u>";
   }

   function remove_underlinefxn1()
   {
     document.getElementById("protein_heading").innerHTML="Proteins";
     document.getElementById("protein_subheading").innerHTML="Machine Whey";
   }

   function underlinefxn2()
   {
     document.getElementById("gainer_heading").innerHTML="<u>Gainers</u>";
     document.getElementById("gainer_subheading").innerHTML="<u>Serious Mass</u>";
   }

   function remove_underlinefxn2()
   {
     document.getElementById("gainer_heading").innerHTML="Gainers";
     document.getElementById("gainer_subheading").innerHTML="Serious Mass";
   }

   function underlinefxn3()
   {
     document.getElementById("protein_bar_heading").innerHTML="<u>Protein Bars</u>";
     document.getElementById("protein_bar_subheading").innerHTML="<u>SimplyProtein Bar</u>";
   }

   function remove_underlinefxn3()
   {
     document.getElementById("protein_bar_heading").innerHTML="Protein Bars";
     document.getElementById("protein_bar_subheading").innerHTML="SimplyProtein Bar";
   }
 

   function underlinefxn4()
   {
     document.getElementById("amino_acids_heading").innerHTML="<u>Amino Acids</u>";
     document.getElementById("amino_acids_subheading").innerHTML="<u>BCAA Energy</u>";
   }

   function remove_underlinefxn4()
   {
     document.getElementById("amino_acids_heading").innerHTML="Amino Acids";
     document.getElementById("amino_acids_subheading").innerHTML="BCAA Energy";
   }
  
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

          <!--<img src="../../images/spl_logo.jpeg" height="42" width="42"> -->
          <img src=" <?php echo base_url(); ?>images/spl_logo.jpeg" height="42" width="42">
        </a>

      </div>



      <!-- Collect the nav links, forms, and other content for toggling -->

      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">

        <ul style="   background-color: rgb(2, 162, 206);" class="nav navbar-nav">

          <li style ="display:<?php echo $btt_state_logout_and_username;?>"><a style="color:red" href="#">Hi <?php echo $btt_username;?></a></li>

          <li class="active"><a style="color:green" href="#intro">Home</a></li>

          <li><a style="color:green" href="#about">Products</a></li>

          <li><a style="color:green" href="#gallery">Latest News</a></li>

          <li><a style="color:green" href="#service">Service</a></li>

          <li><a style="color:green" href="#contact">Contact</a></li>

          <li style ="display:<?php echo $btt_state_logout_and_username;?>"><a style="color:green" href="http://127.0.0.1/CodeIgniter-3.1.9/index.php/splController/logout">Logout</a></li>

        </ul>

      </div>

      <!-- /.navbar-collapse -->

    </div>

    <!-- /.container -->

  </nav>







  <!-- Section: intro -->

  <section id="intro"> 

<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">

  <!-- Overlay -->

  <div class="overlay"></div>



  <!-- Indicators -->

  <ol class="carousel-indicators">

    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>

    <li data-target="#bs-carousel" data-slide-to="1"></li>

    <li data-target="#bs-carousel" data-slide-to="2"></li>

  </ol>

  

  <!-- Wrapper for slides -->

  <div class="carousel-inner">

    <div class="item slides active">

      <div class="slide-1"></div>

      <div class="hero">

        <hgroup>

            <h1>Your Dreams : Our Responsibilities.</h1>        

            <h3>A perfect body that sets you apart.</h3>

        </hgroup>

      <!--  <button class="btn btn-hero btn-lg" role="button">See all features</button>  -->

      </div>

    </div>

    <div class="item slides">

      <div class="slide-2"></div>

      <div class="hero">        

        <hgroup>

            <h1>Looks Do Matter.</h1>        

            <h3>A perfect body is an unending charisma.</h3>

        </hgroup>       

      <!--  <button class="btn btn-hero btn-lg" role="button">See all features</button>   -->

      </div>

    </div>

    <div class="item slides">

      <div class="slide-3"></div>

      <div class="hero">        

        <hgroup>

            <h1>Let Us Achieve Together.</h1>        

            <h3>A perfect body is all that you wanna get.</h3>

        </hgroup>

       <!--  <button class="btn btn-hero btn-lg" role="button">See all features</button>   -->

      </div>

    </div>

  </div> 

</div>

</section>

  <!-- /Section: intro -->



  <!-- Section: about -->

  <section id="about" class="home-section text-center">

    <div class="heading-about">

      <div class="container">

        <div class="row">

          <div class="col-lg-8 col-lg-offset-2">

            <div class="wow bounceInDown" data-wow-delay="0.4s">

              <div class="section-heading">

                <h2>OUR PRODUCTS</h2>

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

        <div class="col-md-3">

          <div class="wow bounceInUp" data-wow-delay="0.2s">

            <div class="team boxed-grey">
               
              <a href="<?php echo base_url(); ?>index.php/splController/toLoadProductsPage/#proteins" style="color:inherit;" onmouseover="underlinefxn1()" onmouseout="remove_underlinefxn1()">
              <div class="inner">

                <h5 id="protein_heading">Proteins</h5>

                <p class="subtitle" id="protein_subheading">Machine Whey</p>

                <div class="avatar"><img src=" <?php  echo base_url(); ?>uploads/<?php echo $ProteinsImage;?>" style="width:223px; height:223px " alt="" class="img-responsive" height="162" width="292"/></div>

              </div>
            </a>
            </div>

          </div>

        </div>

        <div class="col-md-3">

          <div class="wow bounceInUp" data-wow-delay="0.5s">

            <div class="team boxed-grey">
                <a href="<?php echo base_url(); ?>index.php/splController/toLoadProductsPage/#gainers" style="color:inherit;" onmouseover="underlinefxn2()" onmouseout="remove_underlinefxn2()">

              <div class="inner">

                <h5 id="gainer_heading">Gainers</h5>

                <p class="subtitle" id="gainer_subheading">Serious Mass</p>

                <div class="avatar"><img src=" <?php  echo base_url(); ?>uploads/<?php echo $GainersImage;?>" alt="" style="width:223px; height:223px "  class="img-responsive " height="162" width="292"/></div>

                

              </div>
            </a>
            </div>

          </div>

        </div>

        <div class="col-md-3">

          <div class="wow bounceInUp" data-wow-delay="0.8s">

            <div class="team boxed-grey">
                <a href="<?php echo base_url(); ?>index.php/splController/toLoadProductsPage/#proteins" style="color:inherit;" onmouseover="underlinefxn3()" onmouseout="remove_underlinefxn3()" >

              <div class="inner">

                <h5 id="protein_bar_heading">Protein Bars</h5>

                <p class="subtitle" id="protein_bar_subheading">SimplyProtein Bar</p>

                <div class="avatar"><img src=" <?php  echo base_url(); ?>uploads/<?php echo $ProteinBarsImage;?>" alt="" style="width:223px; height:223px " class="img-responsive"/></div>

              </div>
              </a>

            </div>

          </div>

        </div>

        <div class="col-md-3">

          <div class="wow bounceInUp" data-wow-delay="1s">

            <div class="team boxed-grey">
               <a href="<?php echo base_url(); ?>index.php/splController/toLoadProductsPage/#amino_acids" style="color:inherit;" onmouseover="underlinefxn4()" onmouseout="remove_underlinefxn4()" >

<div class="inner">

                <h5 id="amino_acids_heading">Amino Acids</h5>

                <p class="subtitle" id="amino_acids_subheading">BCAA Energy</p>

                <div class="avatar"><img src=" <?php  echo base_url(); ?>uploads/<?php echo $AminoAcidsImage;?>" alt="" style="width:223px; height:223px " class="img-responsive" height="162" width="292"/></div>



              </div>
              </a>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

  <!-- /Section: about -->

  <!--gallery-->

  <section id="gallery">

<div class=" gallery-container">



    <h1>Latest News</h1>

    

    <div class="tz-gallery">



        <div class="row">

            <div class="col-sm-6 col-md-4">

                <a class="lightbox" href="images/park.jpg">

                    <img src="images/bridge.jpg" alt="Park" style="max-height: 100%; max-width: 100%;">

                </a>

            </div>

            <div class="col-sm-6 col-md-4">

                <a class="lightbox" href="images/bridge.jpg">

                    <img src="images/bridge.jpg" alt="Bridge">

                </a>

            </div>

            <div class="col-sm-12 col-md-4">

                <a class="lightbox" href="images/tunnel.jpg">

                    <img src="images/tunnel.jpg" alt="Tunnel">

                </a>

            </div>

            <div class="col-sm-6 col-md-4">

                <a class="lightbox" href="images/coast.jpg">

                    <img src="images/coast.jpg" alt="Coast">

                </a>

            </div>

            <div class="col-sm-6 col-md-4">

                <a class="lightbox" href="images/rails.jpg">

                    <img src="images/rails.jpg" alt="Rails">

                </a>

            </div>

            <div class="col-sm-6 col-md-4">

                <a class="lightbox" href="images/traffic.jpg">

                    <img src="images/traffic.jpg" alt="Traffic">

                </a>

            </div>

            <div class="col-sm-6 col-md-4">

                <a class="lightbox" href="images/rocks.jpg">

                    <img src="images/rocks.jpg" alt="Rocks">

                </a>

            </div>

            <div class="col-sm-6 col-md-4">

                <a class="lightbox" href="images/benches.jpg">

                    <img src="images/benches.jpg" alt="Benches">

                </a>

            </div>

            <div class="col-sm-6 col-md-4">

                <a class="lightbox" href="images/sky.jpg">

                    <img src="images/sky.jpg" alt="Sky">

                </a>

            </div>

        </div>



    </div>



</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>

<script>

    baguetteBox.run('.tz-gallery');

</script>

</section>



<!-- Section: testinomial -->

<div class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="carousel slide" data-ride="carousel" id="quote-carousel">

                    <!-- Carousel Slides / Quotes -->

                    <div class="carousel-inner text-center">

                        <!-- Quote 1 -->

                        <div class="item active">

                            <blockquote>

                                <div class="row">

                                    <div class="col-sm-8 col-sm-offset-2">

                                        <p> Most of the supplements sold in India are fake. And the stark reality is, it is extremely difficult to identify them. In a market flooded with unregistered counterfeit, and low quality supplements, we take the onus to become consumers' favourite, and we assure quality products with cutting edge performance at an honest price.</p>

                                        <small>OUR STORY</small>

                                    </div>

                                </div>

                            </blockquote>

                        </div>

                        <!-- Quote 2 -->

                        <div class="item">

                            <blockquote>

                                <div class="row"> 

                                    <div class="col-sm-8 col-sm-offset-2">

                                        <p>

Our passion for bringing the international-grade fitness supplement has made us look around the world to source the very best whey and flavours. Driven by the desire to exceed your expectations, we have tried to bring together leaders in the health and supplements field and gave our best to provide the best health and body positivity experience to our valuable clients. We aim to be a sports brand that gives you international-grade quality supplements and 100% safety assurance at a genuine price. </p>

                                        <small>OUR MOTIVATION</small>

                                    </div>

                                </div>

                            </blockquote>

                        </div>

                        <!-- Quote 3 -->

                        <div class="item">

                            <blockquote>

                                <div class="row">

                                    <div class="col-sm-8 col-sm-offset-2">

                                        <p>We beam with pride when we receive acknowledgements, accolades and expressions of gratitude from our valuable customers. It becomes another moment in our Hall of Memoirs and we cherish those times. After all, Hard Work always pays off.  </p>

                                        <small>OUR RESULTS</small>

                                    </div>

                                </div>

                            </blockquote>

                        </div>

                    </div>

                    <!-- Bottom Carousel Indicators -->

                    <ol class="carousel-indicators">

                        <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src=" <?php echo base_url(); ?>images/1.jpeg" alt="">

                        </li>

                        <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src=" <?php echo base_url(); ?>images/4.jpeg" alt="">

                        </li>

                        <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src=" <?php echo base_url(); ?>images/3.jpeg" alt="">

                        </li>

                    </ol>



                    <!-- Carousel Buttons Next/Prev -->

                  <a data-slide="prev" href="#quote-carousel" class="left carousel-control"></a>

                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"></a>

                </div>

            </div>

        </div>

    </div>

  <!-- Section: services -->



  <section id="service" class="home-section text-center bg-gray">



    <div class="heading-about">

      <div class="container">

        <div class="row">

          <div class="col-lg-8 col-lg-offset-2">

            <div class="wow bounceInDown" data-wow-delay="0.4s">

              <div class="section-heading">

                <h2>Our Services</h2>

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

        <div class="col-md-3">

          <div class="wow fadeInLeft" data-wow-delay="0.2s">

            <div class="service-box">

              <div class="service-icon">

                <img src="img/icons/service-icon-1.png" alt="" />

              </div>

              <div class="service-desc">

                <h5>Home Delivery of Supplements.</h5>

                <p>Keeping in mind the strict schedule of our clients, we have home delivery serivce and we can vouch for your timely access to our supplements. </p>

              </div>

            </div>

          </div>

        </div>

        <div class="col-md-3">

          <div class="wow fadeInUp" data-wow-delay="0.2s">

            <div class="service-box">

              <div class="service-icon">

                <img src="img/icons/service-icon-2.png" alt="" />

              </div>

              <div class="service-desc">

                <h5>Membership to Gyms</h5>

                <p>Gyms are as essential for the todays lifestyle as are the supplements themselves.We arrange for our clients memberships to best gyms within and without the city at discounted prices.</p>

              </div>

            </div>

          </div>

        </div>

        <div class="col-md-3">

          <div class="wow fadeInUp" data-wow-delay="0.2s">

            <div class="service-box">

              <div class="service-icon">

                <img src="img/icons/service-icon-3.png" alt="" />

              </div>

              <div class="service-desc">

                <h5>Purchase of Gym Equipments</h5>

                <p>If you don't have time for hitting the gyms, we can arrange for you the best equipments of your choice that too at discounted prices.</p>

              </div>

            </div>

          </div>

        </div>

        <div class="col-md-3">

          <div class="wow fadeInRight" data-wow-delay="0.2s">

            <div class="service-box">

              <div class="service-icon">

                <img src="img/icons/service-icon-4.png" alt="" />

              </div>

              <div class="service-desc">

                <h5>Personal Trainers</h5>

                <p>Personal Trainers can greatly enhance the body transformation experience and we can arrange for the best of trainers at a jaw dropping prices.</p>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

  <!-- /Section: services -->









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

				  <abbr title="Phone">MBL:</abbr><?php echo $MobileNumber;?>

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


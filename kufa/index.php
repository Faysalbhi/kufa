<?php
require_once"config.php";

// logo query 
$query_flogo="SELECT * FROM flogos WHERE status=1";
$db_flogo=mysqli_query($db_connect,$query_flogo);
$flogos=mysqli_fetch_assoc($db_flogo);

// menu query 
$query_fmenu="SELECT * FROM fmenu WHERE status=1";
$db_fmenu=mysqli_query($db_connect,$query_fmenu);

// banner quer with img 
$query_fbanner="SELECT * FROM fbanners";
$db_fbanner=mysqli_query($db_connect,$query_fbanner);
$fbanners=mysqli_fetch_assoc($db_fbanner);

// about me quer with img 
$aboutme="SELECT * FROM aboutme";
$db_aboutme=mysqli_query($db_connect,$aboutme);
$faboutme=mysqli_fetch_assoc($db_aboutme);


// Educational quer with img 
$education="SELECT * FROM educatioal_qualifications";
$db_education=mysqli_query($db_connect,$education);


// Service quer with img 
$fservices="SELECT * FROM fservices";
$db_fservices=mysqli_query($db_connect,$fservices);


// testimonals quer with img 
$testimonials="SELECT * FROM testimonials";
$db_testimonials=mysqli_query($db_connect,$testimonials);


// achivement quer with img 
$achievements="SELECT * FROM achievements";
$db_achievements=mysqli_query($db_connect,$achievements);


// Brands quer with img 
$brands="SELECT * FROM our_members";
$db_brands=mysqli_query($db_connect,$brands);


// Contuct information on website
$contuct_informations="SELECT * FROM contuct_informations";
$db_contuct_informations=mysqli_query($db_connect,$contuct_informations);
$fetch_cont_info=mysqli_fetch_assoc($db_contuct_informations);


// Footer information on website
$ffooter="SELECT * FROM ffooter";
$db_ffooter=mysqli_query($db_connect,$ffooter);
$fetch_db_ffooter=mysqli_fetch_assoc($db_ffooter);


?>
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:27:43 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kufa - Personal Portfolio HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="frontend_assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="frontend_assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="frontend_assets/css/animate.min.css">
        <link rel="stylesheet" href="frontend_assets/css/magnific-popup.css">
        <link rel="stylesheet" href="frontend_assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="frontend_assets/css/flaticon.css">
        <link rel="stylesheet" href="frontend_assets/css/slick.css">
        <link rel="stylesheet" href="frontend_assets/css/aos.css">
        <link rel="stylesheet" href="frontend_assets/css/default.css">
        <link rel="stylesheet" href="frontend_assets/css/style.css">
        <link rel="stylesheet" href="frontend_assets/css/responsive.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <a href="frontend_assets/index.html" class="navbar-brand logo-sticky-none"><img src="<?=$hostName?>frontend_assets/img/logo/<?=$flogos['logo_pic']?>" alt="Logo"></a>
                                    <a href="frontend_assets/index.html" class="navbar-brand s-logo-none"><img src="frontend_assets/img/logo/s_logo.png" alt="Logo"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                        <?php foreach($db_fmenu as $fmenu):?>
                                            <li class="nav-item"><a class="nav-link" href="#<?=$fmenu['section_id']?>"><?=$fmenu['menu']?></a></li>
                                            <?php endforeach?>
                                        </ul>
                                    </div>
                                    
                                    <div class="header-btn">
                                        <a href="frontend_assets/#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas-start -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="frontend_assets/index-2.html">
                        <img src="frontend_assets/img/logo/logo.png" alt="" />
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p>123/A, Miranda City Likaoli
                            Prikano, Dope</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p>+0989 7876 9865 9</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p>info@example.com</p>
                    </div>
                </div>
                <div class="social-icon-right mt-20">
                    <a href="frontend_assets/#"><i class="fab fa-facebook-f"></i></a>
                    <a href="frontend_assets/#"><i class="fab fa-twitter"></i></a>
                    <a href="frontend_assets/#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="frontend_assets/#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s"><?=$fbanners['heading']?></h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s"><?=$fbanners['name']?></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s"><?=$fbanners['description']?></p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>
                                        <?php
                                        $selectsi="SELECT * FROM social_icons WHERE status=1";
                                        $db_result_sl=mysqli_query($db_connect,$selectsi);
                                        foreach($db_result_sl as $social_icons):
                                        ?>
                                        <li><a href="<?=$social_icons['url']?>"><i class="<?=$social_icons['icon']?>"></i></a></li>
                                        <?php endforeach?>       
                                    </ul>
                                </div>
                                <a href="portfolio_single.php" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img src="frontend_assets/img/banner/<?=$fbanners['banner_image']?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="frontend_assets/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
            
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="frontend_assets/img/banner/<?=$faboutme['image']?>" title="me-01" alt="me-01">
                            </div>
                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Introduction</span>
                                <h2><?=$faboutme['heading']?></h2>
                            </div>
                            <div class="about-content">
                                <p><?=$faboutme['description']?></p>
                                <h3>Education:</h3>
                            </div>
                            <!-- Education Item -->

                            <?php foreach($db_education as $educ):?>
                            <div class="education">
                                <div class="year"><?=$educ['year']?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?=$educ['title']?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width:<?=$educ['progress_with']?>%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach?>
                            
                            <!-- End Education Item -->
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="frontend_assets/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
            <!-- about-area-end -->

            <!-- Services-area -->
            <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>WHAT WE DO</span>
                                <h2>Services and Solutions</h2>
                            </div>
                        </div>
                    </div>
                     
                    
					<div class="row">
                        <?php foreach($db_fservices as $serv):?>
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="<?=$serv['service_icon']?>"></i>
								<h3><?=$serv['service_title']?></h3>
								<p><?=$serv['service_description']?></p>
							</div>
						</div>
						<?php endforeach?>
					</div>
				</div>
               
			</section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <?php
                    
                    $pselect="SELECT * FROM fportfolios";
                    $db_result_p=mysqli_query($db_connect,$pselect);

                    ?>
                    <?php 
                      foreach($db_result_p as $portfolilo):
                    ?>
                      <div class="col-lg-4 col-md-6 pitem">
                          <div class="speaker-box">
                          <div class="speaker-thumb">
                            <img src="frontend_assets/img/images/1.jpg" alt="img">
                          </div>
                          <div class="speaker-overlay">
                            <span><?=$portfolilo['portfolio_category']?></span>
                            <h4><a href="portfolio_single.php"><?=$portfolilo['portfolio_title']?></a></h4>
                            <a href="frontend_assets/portfolio-single.html" class="arrow-btn">More information <span></span></a>
                          </div>
                      </div>
                    <?php endforeach?>  
                      
              </div>
             </div>
            
            </section>
            <!-- services-area-end -->


            <!-- fact-area -->
            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                        <div class="row justify-content-between">
                        <?php foreach($db_achievements as $achiev):?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="<?=$achiev['icon']?>"></i>
                                    </div>
                                    <div class="fact-content">
                                        <?php
                                        $total_number_achi=$achiev['total_number'];
                                        echo $total_number_achi;
                                            if($total_number_achi>=1000){
                                               $total_number_achieve=floor($total_number_achi/1000);
                                             echo "<h2><span class='count'>$total_number_achieve</span><span>k</span></h2>";
                                            }else{
                                             echo "<h2><span class='count'>$total_number_achi</span></h2>";
                                            
                                            
                                            }
                                        ?>
                                        <span><?=$achiev['title']?></span>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- fact-area-end -->

            <!-- testimonial-area -->
            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>happy customer quotes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="testimonial-active">

                                <?php foreach($db_testimonials as $testimo):?>
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                    <img style="width:120px; border-radius:15px 40px" src="frontend_assets/img/testimionial/<?=$testimo['image']?>" alt="img">
                                        </div>
                                        <div class="testi-content">
                                            <h4><span>“</span><?=$testimo['description']?><span>”</span></h4>
                                            <div class="testi-avatar-info">
                                                <h5><?=$testimo['name']?></h5>
                                                <span><?=$testimo['designation']?></span>
                                            </div>
                                        </div>
                                </div>
                                <?php endforeach?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            <div id="brands" class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">

                    <?php foreach($db_brands as $brandss):?>
                        <div class="col-xl-4">
                            <div class="single-brand">
                                <img src="frontend_assets/img/brand/<?=$brandss['image']?>" alt="img">
                            </div>
                        </div>
                    <?php endforeach?>
                        
                       
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <div class="contact-content">
                                <p><?=$fetch_cont_info['description']?></p>
                                <h5>OFFICE IN <span><?=$fetch_cont_info['heading']?></span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span><?=$fetch_cont_info['address']?></li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span><?=$fetch_cont_info['phone']?></li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?=$fetch_cont_info['email']?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <form action="#">
                                    <input type="text" placeholder="your name *">
                                    <input type="email" placeholder="your email *">
                                    <textarea name="message" id="message" placeholder="your message *"></textarea>
                                    <button class="btn">SEND US</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p><?=$fetch_db_ffooter['description']?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->





		<!-- JS here -->
        <script src="frontend_assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="frontend_assets/js/popper.min.js"></script>
        <script src="frontend_assets/js/bootstrap.min.js"></script>
        <script src="frontend_assets/js/isotope.pkgd.min.js"></script>
        <script src="frontend_assets/js/one-page-nav-min.js"></script>
        <script src="frontend_assets/js/slick.min.js"></script>
        <script src="frontend_assets/js/ajax-form.js"></script>
        <script src="frontend_assets/js/wow.min.js"></script>
        <script src="frontend_assets/js/aos.js"></script>
        <script src="frontend_assets/js/jquery.waypoints.min.js"></script>
        <script src="frontend_assets/js/jquery.counterup.min.js"></script>
        <script src="frontend_assets/js/jquery.scrollUp.min.js"></script>
        <script src="frontend_assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="frontend_assets/js/jquery.magnific-popup.min.js"></script>
        <script src="frontend_assets/js/plugins.js"></script>
        <script src="frontend_assets/js/main.js"></script>

       <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/63c58788c2f1ac1e202ded65/1gmtpirn0';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
    </body>

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:28:17 GMT -->
</html>

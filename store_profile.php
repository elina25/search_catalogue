
<?php 
require_once("inc/init.php");

$ControllerCustomer = new controllerCustomer();
$customer = $ControllerCustomer->getCustomerWithID($_GET['store_id']);
$customer_social = $ControllerCustomer->getCustomerSocialWithID($_GET['store_id']);

?>



<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="css/reset.css">
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/color.css">

        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.png">
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="pin"></div>
            <div class="pulse"></div>
        </div>
        <!--loader end-->
        <!-- Main  -->
        <div id="main">
              <!-- header-->
            <header class="main-header dark-header center-header sticky">
                <div class="header-inner">
                    <div class="logo-holder">
                        <a href="index.html"><img src="images/elarisa-logo.png" alt=""></a>
                    </div>
                     <div class="nav-button-wrap color-bg">
                        <div class="nav-button">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                  <div class="nav-holder main-menu">
                        <nav>
                            <ul>
                                <li><a href="index.php">Αρχική</a></li>

                                <li><a href="about.html">Εταιρία</a></li>

                                <li><a href="how-itworks.html">Χρήσιμες Πληροφορίες</a></li>

                                <li><a href="contacts.html">Επικοινωνία</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- navigation  end -->
                </div>
            </header>
            <!--  header end -->
            <!-- wrapper -->    
            <div id="wrapper">
                <!--  content  --> 
                <div class="content">
                    <!--  section  --> 
                    <section class="parallax-section single-par list-single-section" data-scrollax-parent="true" id="sec1">
                        <div class="slideshow-container" data-scrollax="properties: { translateY: '200px' }" >
                            <!-- slideshow-item --> 
                            <div class="slideshow-item">
                                <div class="bg"  data-bg="images/bg/bg23.jpg"></div>
                            </div>
                   
                            <!--  slideshow-item end  -->                           
                        </div>
                        <div class="overlay"></div>
                        <div class="bubble-bg"></div>
                        <div class="list-single-header absolute-header fl-wrap">
                            <div class="container">
                                <div class="list-single-header-item">
                                    <div class="list-single-header-item-opt fl-wrap">
                                        <div class="list-single-header-cat fl-wrap">
                                            <a href="#">Fitness</a>
                                        </div>
                                    </div>
                                    <h2><?php echo $customer->customer_name;?></h2>
                                    <span class="section-separator"></span>
                                    
                                    <div class="clearfix"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="list-single-header-contacts fl-wrap">
                                                <ul>
                                                    <li style="color:fff;><i class="fa fa-phone"></i><?php echo $customer->phone;?></li>
                                                    <li style="color:fff;"><i class="fa fa-map-marker"></i><?php echo $customer->street ." ".$customer->street_number." ". "Λάρισα" ?></li>
                                                    <li style="color:fff;"><i class="fa fa-envelope-o"></i><a  href="mailto:<?php echo $customer->email;?>"><?php echo $customer->email;?></a></li>
                                                    <?php  if($customer->customer_website == NULL || $customer->customer_website == " ") { ?>                                                
                                                    <li><i class="fa fa-flobe"></i><a  href="<?php echo $customer->customer_website;?> target=_blank"><?php echo $customer->customer_website;?></a></li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fl-wrap list-single-header-column">
                                                <div class="share-holder hid-share">
                                                    <div class="showshare"><span>Share </span><i class="fa fa-share"></i></div>
                                                    <div class="share-container  isShare"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--  section end --> 
                    <div class="scroll-nav-wrapper fl-wrap">
                        <div class="container">
                            <nav class="scroll-nav scroll-init">
                                <ul>
                                    <li><a class="act-scrlink" href="#sec1">Top</a></li>
                                    <li><a href="#sec6">Σχετικά με εμάς</a></li>
                                    <li><a href="#sec3">Φωτογραφίες</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--  section  --> 
                    <section class="gray-section no-top-padding">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="list-single-main-wrapper fl-wrap" id="sec2">
                                      <!--   <div class="breadcrumbs gradient-bg  fl-wrap"><a href="#">Home</a><a href="#">Listings</a><span>Listing Single</span></div> -->
                           
                                        <!-- list-single-main-item -->
                                        <div class="list-single-main-item fl-wrap" id="sec6">
                                            <div class="list-single-main-item-title fl-wrap">
                                                <h3>Σχετικά με εμάς</h3>
                                            </div>
                                            <p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus.</p>
                                            <p></p>
                                            <span class="fw-separator"></span>
                                        </div>
                                   
                                        <div class="list-single-main-item fl-wrap" id="sec3">
                                            <div class="list-single-main-item-title fl-wrap">
                                                <h3>Φωτογραφίες</h3>
                                            </div>
                                            <!-- gallery-items   -->
                                            <div class="gallery-items grid-small-pad  list-single-gallery three-coulms lightgallery">
                                                <!-- 1 -->
                                                <div class="gallery-item">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            <img  src="images/company/auxisi-pelatwn.jpg"   alt="">
                                                            <a href="images/all/single/1.jpg" class="gal-link popup-image"><i class="fa fa-search"  ></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 1 end -->
                                                <!-- 2 -->
                                                <div class="gallery-item">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            <img  src="images/company/digital-promotion.jpg"   alt="">
                                                            <a href="images/all/single/1.jpg" class="gal-link popup-image"><i class="fa fa-search"  ></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 2 end -->
                                                <!-- 3 -->
                                                <div class="gallery-item">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            <img  src="images/company/digital-promotion.jpg"   alt="">
                                                            <a href="images/all/single/1.jpg" class="gal-link popup-image"><i class="fa fa-search"  ></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 3 end -->
                                                <!-- 4 -->
                                                <div class="gallery-item">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            <img  src="images/company/auxisi-pelatwn.jpg"   alt="">
                                                            <a href="images/all/single/1.jpg" class="gal-link popup-image"><i class="fa fa-search"  ></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 4 end -->
                                                <!-- 5 -->
                                                <div class="gallery-item">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            <img  src="images/company/auxisi-pelatwn.jpg"   alt="">
                                                            <a href="images/all/single/1.jpg" class="gal-link popup-image"><i class="fa fa-search"  ></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 5 end -->
                                                <!-- 7 -->
                                                <div class="gallery-item">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            <img  src="images/company/auxisi-pelatwn.jpg"   alt="">
                                                            <a href="images/all/single/1.jpg" class="gal-link popup-image"><i class="fa fa-search"  ></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 7 end -->
                                            </div>
                                            <!-- end gallery items -->                                 
                                        </div>
                                        <!-- list-single-main-item end -->   
                                        
                                                   
                                    </div>
                                </div>
                                <!--box-widget-wrap -->
                                <div class="col-md-4">
                                    <div class="box-widget-wrap">
                                                                                      
                                                                  
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
                                            <div class="box-widget-item-header">
                                                <h3>Στοιχεία Επικοινωνίας</h3>
                                            </div>
                                            <div class="box-widget">
                                                <div class="map-container">  

                                                    
       
                                                    <div id="singleMap" data-latitude="<?php echo $customer->latitude = rtrim($customer->latitude, '0');?>" data-longitude="<?php echo $customer->longitude = rtrim($customer->longitude, '0');?>" data-mapTitle="Out Location"></div>
                                                     <div class="map-container">
                                        </div>
                                                </div>
                                                <div class="box-widget-content">
                                                    <div class="list-author-widget-contacts list-item-widget-contacts">
                                                        <ul>
                                                            <li><span><i class="fa fa-map-marker"></i> Διεύθυνση :</span><?php echo $customer->street ." ".$customer->street_number." ". "Λάρισα" ?></li>
                                                            <li><span><i class="fa fa-phone"></i> Τηλέφωνο :</span><?php echo $customer->customer_phone; ?></li>
                                                            <li><span><i class="fa fa-envelope-o"></i> Εmail :</span> <a href="mailto:<?php echo $customer->email; ?>"><?php echo $customer->email; ?></a></li>

                                                            <?php  if($customer->customer_website == NULL || $customer->customer_website == " ") { ?>                                                    
                                                            <li><span><i class="fa fa-globe"></i>Ιστοσελίδα</span><a  href="<?php echo $customer->email; ?> target=_blank"><?php echo $customer->email; ?></a></li>
                                                            <?php } ?>

                                                        </ul>
                                                    </div>
                                                    <div class="list-widget-social">
                                                        <ul> 
                                                           <?php if(count ($customer_social) > 0) { ?>


                                                        <?php  if ($customer_social->social_network_id = 1) { ?>
                                                            <li><a href="<?php echo $customer_social->url ?>" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                                                        <?php } else if ($customer_social->social_network_id = 2) { ?>

                                                            <li><a href="<?php echo $customer_social->url ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                        <?php } else if ($customer_social->social_network_id = 3) {?>

                                                            <li><a href="<?php echo $customer_social->url ?>" target="_blank" ><i class="fa fa-google"></i></a></li>

                                                        <?php } else if ($customer_social->social_network_id = 4 ) { ?>
                                                            <li><a href="<?php echo $customer_social->url ?>" target="_blank" ><i class="fa fa-skype"></i></a></li>

                                                        <?php } else if ($customer_social->social_network_id = 5) {?>
                                                            <li><a href="<?php echo $customer_social->url ?>" target="_blank" ><i class="fa fa-linkedin"></i></a></li>

                                                        <?php } else if ($customer_social->social_network_id = 6 ) { ?>
                                                            <li><a href="<?php echo $customer_social->url ?>" target="_blank" ><i class="fa fa-youtube"></i></a></li>

                                                        <?php } else if ($customer_social->social_network_id = 7 ) { ?>
                                                            <li><a href="<?php echo $customer_social->url ?>" target="_blank" ><i class="fa fa-instagram"></i></a></li>

                                                        <?php } else if ($customer_social->social_network_id = 8 ) { ?>
                                                            <li><a href="<?php echo $customer_social->url ?>" target="_blank" ><i class="fa fa-tripadvisor"></i></a></li>

                                                        <?php } else { ?>
                                                            <li><a href="<?php echo $customer_social->url ?>" target="_blank" ><i class="fa fa-pinterest"></i></a></li>
                                                        <?php } ?>

                                                        <?php } ?>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->
                          
                                  
                                    </div>
                                </div>
                                <!--box-widget-wrap end -->
                            </div>
                        </div>
                    </section>
                    <!--  section end --> 
                    <div class="limit-box fl-wrap"></div>
                <section style=" color:#F9F9F9; margin-top:150px; padding:50px!important;" class="gradient-bg">
                        <div class="cirle-bg">
                            <div class="bg" data-bg="images/bg/circle.png"></div>
                        </div>
                        <div class="container">
                            <div class="join-wrap fl-wrap">
                                <div class="row">
                                    <div class="col-md-8">
                                        <img style="margin-top:25px!important;" src="images/all/ebook-white.png" alt="">
                                    </div>
                                    <div class="col-md-4"><a href="http://www.thehive.gr/larisabusinessguide-setup-0.1.0.exe" target="_blank" class="join-wrap-btn modal-open">Κατεβαστε το e-book δωρεαν!</a>
                                              <p><br/><br/>Ο Eπαγγελματικός Oδηγός Λάρισας καινοτομεί
και σας προσφέρει την έντυπη έκδοση του βιβλίου
σε ψηφιακή μορφή.</p>
                                    </div>

                                </div>
                          
                            </div>
                        </div>
                    </section>

                </div>
                <!--  content end  --> 
            </div>
            <!-- wrapper end -->
            <!--footer -->
            <footer class="main-footer dark-footer  ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                                <h3>Επαγγελματικοί Οδηγοί </h3>
                                    
                                    <ul  class="footer-contacts fl-wrap">
                                        <li><a href="https://f-all.gr/" target="_blank">Find All</a></li>

                                        <li><a href="http://aitoloaka.gr/" target="_blank">Αιτωλοκαρνανίας και Ευρυτανίας</a></li>
                                        <li><a href="http://www.argolidaonline.gr/newsite/index.php">Αργολίδας</a></li>
                                        <li><a href="https://www.eoi.gr/" target="_blank">Ιωαννίνων</a></li>
                                        <li><a href="http://www.odigos.gr/" target="_blank">Ηλείας</a></li>
<!--                                         <li><a href="http://www.ecentralgreece.gr/">Κεντρικής Ελλάδος/</a></li>
 -->                                        <li><a href="http://www.kefaloniavres.gr/" target="_blank">Κεφαλονιάς και Ιθάκης</a></li>
<!--                                         <li><a href="http://www.korinthiaonline.com/" target="_blank">Κορινθίας</a></li>
 -->                                        <li><a href="http://www.eop.gr/">Πάτρας</a></li>
                                    </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                           <div class="footer-widget fl-wrap">
                                <h3> Σχετικά με τον Οδηγό </h3>
                                    
                                    <ul  class="footer-contacts fl-wrap">
                                        <li><a href="about.html" target="_blank">Η Εταιρεία</a></li>
                                        <li><a href="gdpr.html">Πολιτική Προστασίας Δεδομένων</a></li>
                                        <li><a href="terms.html" target="_blank">Όροι χρήσης</a></li>
                                        
                                    </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                              <h3> Χρήσιμες Πληροφορίες </h3>
                                    
                                    <ul  class="footer-contacts fl-wrap">
                                        <li><a href="how-itworks.html#protes_anages" target="_blank">Πρώτες Ανάγκες</a></li>

                                        <li><a href="how-itworks.html#odiki">Οδική Βοήθεια</a></li>
                                        <li><a href="how-itworks.html#sigoinonies">Συγκοινωνίες</a></li>
                                        <li><a href="how-itworks.html#nosokomeia">Νοσοκομεία</a></li>
                                        <li><a href="how-itworks.html#ipiresies">Δήμος Λάρισας</a></li>
                                        <li><a href="how-itworks.html#protes_anages">Δημόσιες Υπηρεσίες</a></li>
                                        
                                    </ul>
                            </div>
                           
                        </div>
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                                <h3>Επαγγελματικός Οδηγός Λάρισας</h3>
                                    <ul  class="footer-contacts fl-wrap">
                                            <li style="color:#fff;"><i class="fa fa-map"></i>Ηρώων Πολυτεχνείου 214(1ος Όροφος)</li>
                                            <li><i class="fa fa-phone"></i><a href="#">2410 533-884</a></li>
                                            <li><i class="fa fa-phone"></i><a href="#" target="_blank">6932 460676</a></li>
                                            <li><i class="fa fa-envelope"></i><a href="mailto:info@elarisa.gr" target="_blank">info@elarisa.gr</a></li>
                                            
                                    </ul>
                               
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/elarisagr?fref=ts" target="_blank" ><i class="fa fa-facebook-official"></i></a></li>
                                        <li style="margin-left:23px;"><a href="https://twitter.com/elarisagr" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                     
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub-footer fl-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="about-widget">
                                    <img src="images/elarisa-logo.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="copyright"> &#169; Elarisa 2018 .  All rights reserved.</div>
                            </div>
                            <div class="col-md-4">
                               <!--  <div class="footer-social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/elarisagr?fref=ts" target="_blank" ><i class="fa fa-facebook-official"></i></a></li>
                                        <li><a href="https://twitter.com/elarisagr" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://plus.google.com/u/0/111544486618846160456" target="_blank" ><i class="fa fa-chrome"></i></a></li>
                                       
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!--footer end  -->
       
            <a class="to-top"><i class="fa fa-angle-up"></i></a>
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>   
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0AWZMLOIyjTxUKO2Ikkq2gYTwZ25EQnE&callback=initMap"></script>
        <script type="text/javascript" src="js/map_infobox.js"></script>
        <script type="text/javascript" src="js/markerclusterer.js"></script>  
        <script type="text/javascript" src="js/maps.js"></script>
    </body>
</html>

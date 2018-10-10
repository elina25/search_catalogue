
<?php
require_once("inc/init.php");
$controllerCategory = new ControllerCategory();
$categories = $controllerCategory->getAllCategories();


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
                                <li><a href="index.php" class="act-link">Αρχική</a></li>

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
            <!--  wrapper  -->
            <div id="wrapper">
                <!-- Content-->
                <div class="content">
                    <!--section -->
                    <section class="scroll-con-sec hero-section" data-scrollax-parent="true" id="sec1">
                        <div class="bg"  data-bg="images/bg/bg12.jpg" data-scrollax="properties: { translateY: '200px' }"></div>
                        <div class="overlay"></div>
                        <div class="hero-section-wrap fl-wrap">
                            <div class="container">
                                <div class="intro-item fl-wrap">
                                    <h2>Το απόλυτο εργαλείο αναζήτησης επαγγελματιών</h2>
                                    <h3>Αναζητήστε: την επωνυμία της επιχείρησης</h3>
                                </div>
                                <div class="main-search-input-wrap">
                                    <div class="main-search-input fl-wrap">
                                        <div class="main-search-input-item">
                                            <input type="text" placeholder="Όνομα επιχείρησης;" value=""/>
                                        </div>
                                        <!-- <div class="main-search-input-item location" id="autocomplete-container">
                                            <input type="text" placeholder="Location" id="autocomplete-input" value=""/>
                                            <a href="#"><i class="fa fa-dot-circle-o"></i></a>
                                        </div> -->
                                       <div class="main-search-input-item">
                                            <select data-placeholder="Κατηγορίες" class="chosen-select" >
                                                <option selected>Όλες οι κατηγορίες</option>
                                                <?php foreach($categories as $category) { ?>
                                                    <option value="<?php echo $category->category_id; ?>" > <?php echo $category->descr?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <button class="main-search-button" onclick="window.location.href='listings-half-screen-map-list.html'">Αναζήτηση</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </section>
                    <!-- section end -->

                     <section style="padding:50px!important;" class="gradient-bg">
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

                    <section id="sec2">
                        <div class="container">
                            <div class="section-title">
                                <h2>Υπηρεσίες</h2>
                                <div class="section-subtitle"></div>
                                <span class="section-separator"></span>
<!--                                 <p>Explore some of the best tips from around the city from our partners and friends.</p>
 -->                            </div>
                            <!-- portfolio start -->
                            <div class="gallery-items fl-wrap mr-bot spad">
                                <!-- gallery-item-->
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="listing-item-grid">
                                            <img  src="images/services/website.jpg"   alt="">
                                            <div class="listing-item-cat">
                                                <h3><a href="" target="_blank">Χρειάζεσαι ιστοσελίδα; </a></h3>
                                                <p>Το κάνουμε εμείς για σένα!</p>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <!-- gallery-item end-->
                                <!-- gallery-item-->
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="listing-item-grid">
                                            <img  src="images/services/etairiki-tautothta.jpg"   alt="">
                                           <div class="listing-counter"></div>
                                            <div class="listing-item-cat">
                                                <h3><a href="" target="_blank">Χρειάζεσαι εταιρική ταυτότητα; </a></h3>
                                                <p>Το κάνουμε εμείς για σένα!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- gallery-item end-->
                                <!-- gallery-item-->
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="listing-item-grid">
                                            <img  src="images/services/mixanografisi.jpg"   alt="">
                                            <div class="listing-item-cat">
                                                <h3><a href="" target="_blank">Χρειάζεσαι πρόγραμμα μηχανογράφησης προσαρμοσμένο στα μέτρα σου;</a></h3>
                                                <p></p>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <!-- gallery-item end-->
                                <!-- gallery-item-->
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="listing-item-grid">
                                            <img  src="images/services/facebook.jpg"   alt="">
                                            <div class="listing-item-cat">
                                                <h3><a href="" target="_blank">Το ήξερες ότι υπάρχει τρόπος να φτάσεις τις πωλήσεις σου στην κορυφή μέσω του FACEBOOK</a></h3>
                                                <p></p>
                                            </div>
                                            </div> 
                                        </diV>
                                </div>
                                <!-- gallery-item end-->
                                <!-- gallery-item-->
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="listing-item-grid">
                                            <img  src="images/services/SEO.jpg"   alt="">
                                            <div class="listing-item-cat">
                                                <h3><a href="" target="_blank">Θέλεις να φτάσεις την επιχείρηση σου στη κορυφή των μηχανών αναζήτησης;</a></h3>
                                                <p></p>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <!-- gallery-item end-->

                                <!-- gallery-item-->
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="listing-item-grid">
                                            <img  src="images/services/online-media.jpg"   alt="">
                                            <div class="listing-item-cat">
                                                <h3><a href="" target="_blank">Θες να προωθήσεις την επιχείρησή σου με στυλ; Κάντο στα Online media!</a></h3>
                                                <p></p>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <!-- gallery-item end-->
                            </div>

                            <!-- portfolio end -->
<!--                             <a href="listing.html" class="btn  big-btn circle-btn dec-btn  color-bg flat-btn">View All<i class="fa fa-eye"></i></a>
                         <img class="img-responsive" src="images/all/hive.jpg"   alt=""> -->  

    					
                            </div>
                    </section>
                    <!-- section end -->


                        <section style="background-color:#2a2a2a; padding: 0px!important;" class="center" >
                        <div class="container">
                            <div class=" fl-wrap">
                                   
                          <img class="img-responsive" src="images/all/hive.jpg" class="respimg">     
                              
                            </div>
                        </div>
                    </section>
                    <!-- section end -->

                
                    <!--section -->
                    <section class=" center gray-section">
                        <div class="container">
                            <div class="fl-wrap spons-list">
                                <ul class="client-carousel">
                                    <li><img src="images/clients/argiris-logo.png" alt=""></li>
                                    <li><img src="images/clients/europa-logo.png" alt=""></li>
                                    <li><img src="images/clients/illy-logo.png" alt=""></li>
                                    <li><img src="images/clients/nova-logo.png" alt=""></li>
                                    <li><img src="images/clients/remax-logo.png" alt=""></li>
                               </ul>
                                <div class="sp-cont sp-cont-prev"><i class="fa fa-angle-left"></i></div>
                                <div class="sp-cont sp-cont-next"><i class="fa fa-angle-right"></i></div>
                            </div>
                        </div>
                    </section>
                    <!-- section end -->
                
                    <section class="">
                        <div class="shapes-bg-big"></div>
                        <div class="container">
                            <div class="single-facts fl-wrap">
                                <!-- inline-facts -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="254">154</div>
                                            </div>
                                        </div>
                                        <h6>New Visitors Every Week</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="12168">12168</div>
                                            </div>
                                        </div>
                                        <h6>Happy customers every year</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="172">172</div>
                                            </div>
                                        </div>
                                        <h6>Won Awards</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="732">732</div>
                                            </div>
                                        </div>
                                        <h6>New Listing Every Week</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                            </div>
                        </div>
                    </section>
                    
               
                    
                  
                </div>
                <!-- Content end -->
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
            <!--register form -->
    
            <!--register form end -->
            <a class="to-top"><i class="fa fa-angle-up"></i></a>
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&libraries=places&callback=initAutocomplete"></script>

       
    </body>
</html>

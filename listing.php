<?php
require_once("inc/init.php");
$controllerCategory = new ControllerCategory();

$categories = $controllerCategory->getAllCategories();

$countOfRecords = $controllerCategory->GetCountAll_SearchResults();

$currentPage = 1;
$offset = 0;
$num_of_pages = 0;


 if(isset($_GET['page']) && is_numeric($_GET['page']))
 {
     $currentPage = $_GET['page'];
 }

$offset = ($currentPage - 1)  * $PAGE_SIZE;
//$countOfRecords = $controllerCategory->GetCountSearchResults($_POST['search_text'], $_POST['category_id']);

$search_results = $controllerCategory->GetSearchResults($_GET['search_text'], $_GET['category_id'],$PAGE_SIZE, $offset);

$num_of_pages = ceil($countOfRecords / $PAGE_SIZE);




?>






<!DOCTYPE HTML>
<html lang="en">
       <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Επαγγελματικός Οδηγός Λάρισας - elarisa.gr</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <Smeta name="keywords" content="Επαγγελματίες, Λάρισα, επιχειρήσεις, επαγγελματικός οδηγός Λάρισας, επαγγελματικός κατάλογος, ενοικιαζόμενα δωμάτια Λάρισα, τηλέφωνα, elarisa.gr"/>
        <meta name="description" content="Βρες στη Λάρισα επαγγελματίες, επιχειρήσεις, ενοικιαζόμενα δωμάτια στα παράλια της Λάρισας στο elarisa.gr."/>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="css/reset.css">
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/color.css">\
        <link type="text/css" rel="stylesheet" href="css/tabs.css">


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
                                <li><a href="index.html" class="act-link">Αρχική</a></li>

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
                            <form class="filter" method="GET" action="listing.php">
                                <div class="main-search-input-wrap">
                                    <div class="main-search-input fl-wrap">
                                        <div class="main-search-input-item">
                                            <input type="text" placeholder="Τι ψάχνετε;" value="<?php echo !empty($_GET['search_text']) ? $_GET['search_text']: NULL  ?>" name="search_text" >
                                        </div>
                                     
                                        <div class="main-search-input-item">
                                            <select data-placeholder="Κατηγορίες" class="chosen-select" name="category_id">
                                                <option value ="">Όλες οι κατηγορίες</option>
                                                <?php foreach($categories as $category) { ?>
                                                <?php if (isset($_GET['category_id']) && ($_GET['category_id']==$category->id) ){ ?>
                                                <option value="<?php echo $category->id; ?>" selected> <?php echo $category->descr?></option>
                                                   <?php } else { ?>
                                                <option value="<?php echo $category->id; ?>" > <?php echo $category->descr?></option>
                                                <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <button class="main-search-button" type="submit">Αναζήτηση</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                       
                    </section>
                    <!-- section end -->

                    <!--  section  --> 
                    <section class="gray-bg no-pading no-top-padding" id="sec1">
                        <div class="col-list-wrap  center-col-list-wrap left-list">
                            <div class="container">
                                <div class="listsearch-maiwrap box-inside fl-wrap">
                                    <div class="listsearch-header fl-wrap">
                                        <h3>Αποτελέσματα για : <span>All Listings</span></h3>

                                   <!--              <table class="responsive-table">
                                                    <thead>
                                                      <tr>
                                                        <th scope="col">Όνομα πελάτη</th>
                                                        <th scope="col">Όνομα εταιρίας</th>
                                                        <th scope="col">Κατηγορία</th>

                                                      </tr>
                                                    </thead>
                                                     <tfoot>
                                             
                                                     </tfoot>
                                                        <tbody>
                                                            <?php foreach ($search_results as $result) {  ?>

                                                             <tr>
                                                            
                                                                <td scope="row"><?php echo $result->customer_name;?></td>
                                                                <td data-title="Τηλέφωνο"><?php echo $result->customer_company_name;?></td>
                                                                <td data-title="Τηλέφωνο"><?php echo $result->category_description;?></td>
                                                          
                                                            </tr>
                                                           <?php } ?>
                                                            
                                                        
                                                        </tbody>
                                                </table>
                                       -->
                                    </div>
                                </div>
                            <!-- list-main-wrap-->
                                <div class="list-main-wrap fl-wrap card-listing">
                                    <!-- listing-item -->
                                    <div class="listing-item list-layout">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <a class="listing-geodir-category" href="listing.html">Restaurants</a>
                                                <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/1.jpg" alt=""></a>
                                                    <span class="avatar-tooltip">Added By  <strong>Lisa Smith</strong></span>
                                                </div>
                                                 <?php foreach ($search_results as $result) {  ?>
                                                <h3><a href="store_profile.php?store_id=<?php echo $result->customer_id?>"><?php echo $result->customer_name;?></a></h3>
                                                <p><?php echo $result->customer_company_name;?></p>
                                                <p><?php echo $result->category_description;?></p>
                                                <div class="geodir-category-options fl-wrap">
                                                    
                                                    <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> 27th Brooklyn New York, NY 10065</a></div>
                                                </div>
                                                    <?php } ?>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->                           
                                 
                                    
                                  
                                 
                                    <!-- pagination-->
                                    <div class="pagination">
                                         <?php if($currentPage > 1) { ?>
                                        <a href="<?php echo GetPageUrl('page').'&page='.($currentPage-1) ?>" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
                                          <?php } ?>
                                           <?php for ($i=1; $i <= $num_of_pages; $i++) 
                                        { 
                                        if (IsNeighbourPage($currentPage, $i, $num_of_pages))  { ?>
                                        <a href="<?php echo GetPageUrl('page').'&page='.$i ?>" class="blog-page transition <?php echo ($currentPage == $i ? 'active' : '') ?>"><?php echo $i ?></a>
                                         <?php } ?> 
                                         <?php } ?>
                                          <?php if($currentPage < $num_of_pages ) { ?>
                                        <a href="<?php echo GetPageUrl('page').'&page='.($currentPage+1) ?>" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
                                           <?php } ?>
                                        </div>


              <!--   <ul class="pagination pull-right">
                <?php if($currentPage > 1) { ?>
                <li class="page-item"><a class="page-link" href="<?php echo GetPageUrl('page').'&page=1' ?>">Start</a></li>
                <li class="page-item"><a class="page-link" href="<?php echo GetPageUrl('page').'&page='.($currentPage-1) ?>">Previous</a></li>
                <?php } ?>
                <?php for ($i=1; $i <= $num_of_pages; $i++) 
                { 
                    if (IsNeighbourPage($currentPage, $i, $num_of_pages))  { ?>

                    <li class="page-item">
                        <a class="page-link <?php echo ($currentPage == $i ? 'active' : '') ?>" href="<?php echo GetPageUrl('page').'&page='.$i ?>"><?php echo $i ?></a>
                    </li>

                <?php } ?> 
                <?php } ?>
                <?php if($currentPage < $num_of_pages ) { ?>
                <li class="page-item"><a class="page-link" href="<?php echo GetPageUrl('page').'&page='.($currentPage+1) ?>">Next</a></li>
                <li class="page-item"><a class="page-link" href="<?php echo GetPageUrl('page').'&page='.($num_of_pages) ?>">End</a></li>
                <?php } ?>
              
            </ul> -->
                                </div>
                                <!-- list-main-wrap end-->                           
                            </div>
                        </div>
                    </section>
                    <!--  section  end--> 
                   
                </div>
                <!--  content  end--> 
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
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0AWZMLOIyjTxUKO2Ikkq2gYTwZ25EQnE&libraries=places&callback=initAutocomplete"></script>
    </body>
</html>
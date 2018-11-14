<!DOCTYPE html>
<html lang="en">

<?php
  $title = "About Us";
  $dir = '';
  include $dir."partials/head.php";
?>
<body>
  <div class=" container mt-4 ml-4 mb-4">
    <div class="row ">
      <div class="col-md-4 offset-md-1">
        <img src="<?= $dir.'img/bethanylogo.png' ?>" alt="">
      </div>
    </div>
  </div>


<?php
  include $dir."partials/banner.php";
  include $dir."partials/nav.php";
?>

       <!-- Slider starts here -->
      
       <div class="container-fluid mt-5">
        <div class="row">
          <div class="col-md-12">
              <div id="carouselExampleIndicators" class="carousel slide mt-2" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="<?= $dir.'assets/img/immigration2.jpg' ?>" alt="First slide"  height="600">
                      <div class="carousel-caption  d-md-block">
                        <h1 class="display-2">Let Our Experience be Your Guide</h1>
                        
                        
                      </div>
                    </div>
                    <div class="carousel-item ">
                      <img class="d-block w-100" src="<?= $dir.'assets/img/Gavel-and-Scale.jpg' ?>" alt="Second slide"  height="600">
                      <div class="carousel-caption  d-md-block">
                        <h1 class="display-2 text-danger">Legal Insight. Business Instinct. </h1>
                        
                        
                      </div>
                    </div>
                    <div class="carousel-item ">
                      <img class="d-block w-100" src="<?= $dir.'assets/img/shipping2.jpg' ?>" alt="Third slide"  height="600">
                      <div class="carousel-caption  d-md-block">
                        <h1 class="display-2 text-white"> Industry focused. </h1>
                        
                        
                      </div>
                    </div>
                    <div class="carousel-item ">
                      <img class="d-block w-100" src="<?= $dir.'assets/img/business.jpg' ?>" alt="Third slide"  height="600">
                      <div class="carousel-caption  d-md-block">
                        <h1 class="display-2 text-warning"> Relationship driven. </h1>
                      </div>
                    </div>
                    
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div> 
          </div>  
      </div>
<!-- Slider ends here -->

       <!--jumbotron-->
    
    <hr class="my-4">
 <div class="container-fluid padding mt-5">
   <div class="row padding mr-5 ml-5">
      <div class="col-md-12 col-lg-6">
          <div class="jumbotron">
              <h1 class="display-4">Welcome to Bethany Law & Partners</h1>
              <hr class="my-4">
              <h2>About Us</h2>
              <p class="lead">Bethany Law & Partners was duly registered in 2005 at the company registery in Nigeria
                  asa  law firm with expertise in general legal services.
                  Since incoporation, we have established a reputation for cutting-edge legal service
                   that enables clients to capitalize on business opportunities and manage change
                   effectively
              </p>
              <hr class="my-4">
              <p>Most of our partners have also been engaged in various legal transactions in different organizations.
                  We offer depth, and are experienced in a wide variety of practice areas, such as Commercial & 
                  Coporate Law, Immigration Services, Maritime Law, Oil and Gas Law, Property Law(Real Estate),
                  and Inteelctual Property Law(Trademarks and Patents).  

              </p>
             
          </div>
    </div>
    <div class="col-md-12 col-lg-6">
      <img src="<?= $dir.'assets/img/law+office.jpg' ?>" alt="" height="600" class="img-fluid">

    </div>
  </div>  
    <hr class="my-4">
 <div class="container-fluid padding mt-5">
   <div class="row padding mr-5 ml-5">
      <div class="col-md-12 col-lg-6">
          <div class="jumbotron">
              <h1 class="display-4">Our Goal</h1>
              <hr class="my-4">
              
              <p class="lead">The Firm's goal is to remain the Legal Solution Providers by delivering to our
                   clients responsive legal and excellent professional services. Our objective is to always
                    maintain our core professional values and adhere to strict professional ethics bearing 
                    in mind the needs of mour clients.
                    Our strength lies in the firm'spersonnel who have extensive experience 
                    in all our practice areas noted above. 
                   
              </p>
              <hr class="my-4">
              <p> At Bethany Law we work diligently to provide the finest legal services to our clients.
                    Because of our extensive training and experience, we are able to quickly and efficiently
                     advice our clients on the most complex legal issues. 
                   Our firm has access to a network of highly experienced lawyers and Counsel for support
                    throughout Nigeria. Our professional legal team possesses a unique advocacy methodology 
                    which strengthens our litigation services in the trail and
                    appelate courts including Arbitration.  

              </p>
             
          </div>
    </div>
    <div class="col-md-12 col-lg-6">
      <img src="<?= $dir.'assets/img/team1.jpg' ?>" alt="" height="600" class="img-fluid">

    </div>

    </div>  
  </div> 
  <hr class="my-4">
 <!-- Jumbotron ends here -->

      <!-- Card section starts here -->

              <!--3 card section-->
  
              <h1 class="text-center  myfocus" >Our services</h1>
              <div class="card-deck mx-5 mb-4">
                  <div class="card">
                    <img class="card-img-top" src="<?= $dir.'assets/img/courtroom.jpg' ?>" alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title edu">COMMERCIAL AND CORPORATE PRACTICE</h4>
                      <p class="card-text text-justify">The Corporate and Commercial Practice Unit of our firm falls at the heart of our
                        practice. It is headed by the managing partner and supported by a team of well  trained and experienced
                        lawyers who specializes in advising clients on a wide spectrum of services ... <br>
                      </p>
                      <a href="<?= $dir.'practices/commercial_and_corporate_practice.php' ?>" class="btn btn-outline-dark">Find out more</a>
                    </div>
            
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="<?= $dir.'assets/img/bigstock-Decorative-Scales-Of-Justice-I-33449441.jpg' ?>" alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">GENERAL CIVIL LITIGATION</h4>
                      <p class="card-text text-justify">Keeping in mind that disputes between individuals, firms or companies can occur in a variety 
                        of different circumstances, Bethany Law & Partners represents parties in a wide variety of Civil and 
                        Criminal litigations and complex business matters at both the Trial Courts and Appellate Courts. ... <br>
                      </p>
                      <a href="<?= $dir.'practices/general_civil_litigation.php' ?>" class="btn btn-outline-dark">Find out more</a>
                    </div>
            
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="<?= $dir.'assets/img/immigration1.jpg' ?>" alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">IMMIGRATION CONSULTANCY SERVICES</h4>
                      <p class="card-text text-justify">We provide one of the most comprehensive immigration law services in Nigeria. 
                        Our experts in this field have over 10 years practice experience of providing immigration and 
                        nationality services, we offer clients a personal and friendly comprehensive solution to their 
                        migration needs. ... <br>
                      </p>
                      <a href="<?= $dir.'practices/immigration_consultancy_services.php' ?>" class="btn btn-outline-dark">Find out more</a>
                    </div>
            
                  </div>
                </div>
            
                  <!-- 3Card section ends here -->
            
                  <!-- 2 card section -->
                <div class="card-deck mx-5 mb-4">
                  <div class="card">
                      <img class="card-img-top" src="<?= $dir.'assets/img/int.jpg' ?>" alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title">INTELLECTUAL PROPERTY</h4>
                        <p class="card-text text-justify">In a dynamic commercial landscape with ever-expanding technological horizons, it 
                          is increasingly important for businesses to capture value from their intellectual capital and 
                          knowledge-based assets. We work closely with many leading businesses to help them develop effective 
                          strategies for managining their IP portfolios. We are on hand to ensure that the IP they and their 
                          employees create is protected and where appropriate, enforced and explotied. ... <br>
                        </p>
                        <a href="<?= $dir.'assets/practices/intellectual_property.php' ?>" class="btn btn-outline-dark">Find out more</a>
                      </div>
                    </div>
            
                    <div class="card">
                      <img class="card-img-top" src="<?= $dir.'assets/img/shipping2.jpg' ?>" alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title">MARITIME AND ADMIRALTY SERVICES</h4>
                        <p class="card-text text-justify">Considering the various international laws and regulations, including 
                          the local legislations, the maritime industry can be a challenge to navigate. Bethany Law 
                          & Partners' maritime team is experienced in sorting out complex issues and getting things 
                          done for our clients. Our lawyers find financing, regulatory compliance, vessel sales, 
                          bareboat charters, maritime litigation, and environmental pollution defense. ... <br>
                        </p>
                        <a href="<?= $dir.'practices/maritime_and_admiralty_services.php' ?>" class="btn btn-outline-dark">Find out more</a>
                      </div>
            
                    </div>
                </div>    
                  <!-- 2 card section ends here-->
            <!-- Social media links  -->
 <div>
        <hr class="my-4">
      </div>
          <div class="container-fluid padding mt-4">
            <div class="row text-center padding">
               <div class="col-12 mt-4">
                  <h2>Connect</h2>
               </div>
               <div class="col-12 social padding mt-4">
                 <a href="#"><i class="fab fa-facebook"></i></a>
                 <a href="#"><i class="fab fa-twitter"></i></a>
                 <a href="#"><i class="fab fa-instagram"></i></a>
                 <a href="#"><i class="fab fa-youtube"></i></a>
               </div>
            </div>
          </div>
      <!-- Social media links end here -->

      <!--Footer-->
      <?php
        include "partials/footer.php";
        include "partials/script.php";
      ?>
  
  </body>
</html>
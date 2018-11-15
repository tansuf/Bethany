
<!DOCTYPE html>
<html lang="en">

<?php 
  $title = "Home";
  $dir = '';
  include $dir."partials/head.php"; 
?>

<body>

<?php
  include $dir."partials/banner.php";
  include $dir."partials/nav.php";
?>
      <!-- Slider starts here -->
      
<div class="container mt-3 mt-md-5">
  <div class="row">
    <div class="col-md-12">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
          
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid" src="<?= $dir.'assets/img/slider/immigration1.jpg' ?>" alt="First slide"  height="500">
            <div class="carousel-caption">
              <h1 class="display-2 text-white d-none d-lg-block">
                Let Our Experience Be Your Guide
              </h1>
            </div>
          </div>
          <div class="carousel-item ">
            <img class="d-block w-100 img-fluid" src="<?= $dir.'assets/img/slider/scale.jpg' ?>" alt="Second slide"  height="500">
            <div class="carousel-caption">
              <h1 class="display-2 text-white d-none d-lg-block">
                Legal Insight
                <br>
                Business Instinct
              </h1>
            </div>
          </div>
          <div class="carousel-item ">
            <img class="d-block w-100 img-fluid" src="<?= $dir.'assets/img/slider/shipping.jpg' ?>" alt="Third slide"  height="500">
            <div class="carousel-caption">
              <h1 class="display-2 text-white d-none d-lg-block">
                Industry focused
              </h1>
            </div>
          </div>
          <div class="carousel-item ">
            <img class="d-block w-100 img-fluid" src="<?= $dir.'assets/img/slider/small_business_legal_entities.jpg' ?>" alt="Third slide"  height="500">
            <div class="carousel-caption">
              <h1 class="display-2 text-white d-none d-lg-block">
                Relationship driven
              </h1>
            </div>
          </div>
          <div class="carousel-item ">
            <img class="d-block w-100 img-fluid" src="<?= $dir.'assets/img/slider/immigration2.jpg' ?>" alt="Third slide"  height="500">
            <div class="carousel-caption">
              <h1 class="display-2 text-white d-none d-lg-block">
                ...
              </h1>
            </div>
          </div>
          <div class="carousel-item ">
            <img class="d-block w-100 img-fluid" src="<?= $dir.'assets/img/slider/law_library.jpg' ?>" alt="Third slide"  height="500">
            <div class="carousel-caption">
              <h1 class="display-2 text-white d-none d-lg-block">
                ...
              </h1>
            </div>
          </div>
          <div class="carousel-item ">
            <img class="d-block w-100 img-fluid" src="<?= $dir.'assets/img/slider/law_office.jpg' ?>" alt="Third slide"  height="500">
            <div class="carousel-caption">
              <h1 class="display-2 text-white d-none d-lg-block">
                ...
              </h1>
            </div>
          </div>
          <div class="carousel-item ">
            <img class="d-block w-100 img-fluid" src="<?= $dir.'assets/img/slider/legal_officer.jpg' ?>" alt="Third slide"  height="500">
            <div class="carousel-caption">
              <h1 class="display-2 text-white d-none d-lg-block">
                ...
              </h1>
            </div>
          </div>
          <div class="carousel-item ">
            <img class="d-block w-100 img-fluid" src="<?= $dir.'assets/img/slider/scales_of_justice.jpg' ?>" alt="Third slide"  height="500">
            <div class="carousel-caption">
              <h1 class="display-2 text-white d-none d-lg-block">
                ...
              </h1>
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

      <!-- Slider ends here -->

      <!-- Jumbotron starts here -->

   <div class="container padding mt-3 mt-md-5">
     <div class="row">
        <div class="col-md-12 col-lg-6">
            <div class="jumbotron">
                <h1 class="display-4">From the desk of the managing partner</h1>
                <hr class="my-4">
                <p class="lead">The dream of putting in place a one stop law firm that would remain the 
                  best legal solution provider came into inception with the birth of Bethany Law and Partners.
                  In it's infant stage, the firm dealt with such recondite legal issues which have today
                  contributed immensely towards the growth and development of the firm. But despite
                  the successes we have achieved, I am still not satisfied. 

                </p>
                <hr class="my-4">
                <p>I did not want to have a merely successful firm; I wanted a law firm that would
                  be a name to be reckoned with
                </p>
                <p class="lead">
                  <a class="btn  btn-lg" href="#" role="button">Read more</a>
                </p>
            </div>
      </div>
      <div class="col-md-12 col-lg-6">
        <img src="<?= $dir.'assets/img/ike2.jpg' ?>" alt="" height="700" class="img-fluid">
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
        <img class="card-img-top" src="<?= $dir.'assets/img/bg/law_office.jpg' ?>" alt="Card image cap">
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
        <img class="card-img-top" src="<?= $dir.'assets/img/bg/scale.jpg' ?>" alt="Card image cap">
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
        <img class="card-img-top" src="<?= $dir.'assets/img/bg/immigration1.jpg' ?>" alt="Card image cap">
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
        <img class="card-img-top" src="<?= $dir.'assets/img/bg/law_library.jpg' ?>" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">INTELLECTUAL PROPERTY</h4>
          <p class="card-text text-justify">In a dynamic commercial landscape with ever-expanding technological horizons, it 
            is increasingly important for businesses to capture value from their intellectual capital and 
            knowledge-based assets. We work closely with many leading businesses to help them develop effective 
            strategies for managining their IP portfolios. We are on hand to ensure that the IP they and their 
            employees create is protected and where appropriate, enforced and explotied. ... <br>
          </p>
          <a href="<?= $dir.'practices/intellectual_property.php' ?>" class="btn btn-outline-dark">Find out more</a>
        </div>
      </div>

      <div class="card">
        <img class="card-img-top" src="<?= $dir.'assets/img/bg/shipping.jpg' ?>" alt="Card image cap">
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
      

    

    <?php
      include "partials/footer.php";
      include "partials/script.php";
    ?>
 
    
  </body>
</html>
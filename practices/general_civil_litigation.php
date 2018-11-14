<!DOCTYPE html>
<html lang="en">

<?php
    $dir = "../";
    include $dir."partials/head.php";
?>
<body>

    <?php
        include $dir."partials/banner.php";
        include $dir."partials/nav.php";
    ?>
    
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="card bg-dark text-white">
                    <img class="card-img" src="<?= $dir.'assets/img/Gavel-and-Scale.jpg' ?>" alt="Card image">
                    <div class="card-img-overlay">
                        <br><br><br><br><br><br>
                        <h5 class="card-title display-4 text-center text-white">General Civil Litigation</h5>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-8 mt-4">
                    <h2 class="font-weight-bold mb-4">General Civil Litigation</h2>
                    <p class="lead text-justify">Keeping in mind that disputes between individuals, firms or companies can occur in a variety 
                        of different circumstances, Bethany Law & Partners represents parties in a wide variety of Civil and 
                        Criminal litigations and complex business matters at both the Trial Courts and Appellate Courts. It is 
                        not uncommon for individuals or businesses to find themselves involved in a legal dispute with another 
                        party. Disputes of this nature, such as a breach of contract, typically fall under what is known as civil 
                        litigation which entails the use of Courts of Artbitration/Mediation for adjuciation. <br><br>
                        Our areas of expertise includes commercial disputes arising out of national and transnational transactions, 
                        Environmental Law Claims, Contract Disputes, disputes involving Estate and Inheritance Claims, Accident Claims, 
                        Professional Negligence and matters involving the enforcement of Fundamental Human Rights in Nigeria. <br><br>
                        In addition to cases handled in both Trial and Appellate Courts, Bethany Law & Partners represent businesses 
                        and individuals Alternative Dispute Resolution Forum such as Mediations and Arbitrations. <br><br>
                        Our civil litigation department is closely tied with our Personal Injury Department which provides a wealth 
                        of experience and knowledge to help regardless of the size or nature of the action. We aim to provide 
                        the best possible outcome for our clients by conducting in-depth investigations and research into the 
                        prospects or otherwise a case before proceeding to reduce time and expense. Our swat analysis enables us 
                        to achieve the best judgement for our client before proceeding to court.
                    </p>

                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>

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
            include $dir."partials/footer.php";
            include $dir."partials/script.php";
        ?> 
    
</body>
</html>
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
        <div class="container mt-3 mt-md-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-dark text-white">
                        <img class="card-img" src="<?= $dir.'assets/img/slider/immigration2.jpg' ?>" alt="Card image">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-8 mt-4">
                    <h2 class="font-weight-bold mb-4">Immigration Consultancy Services</h2>
                    <p class="lead text-justify">We provide one of the most comprehensive immigration law services in Nigeria. 
                        Our experts in this field have over 10 years practice experience of providing immigration and 
                        nationality services, we offer clients a personal and friendly comprehensive solution to their 
                        migration needs. With the benefit of our extensive experience, we are able to understand 
                        your needs and advise on the prospects of success and potential pitfalls in pursuing an 
                        application. Working together, we will use our experience to find a solution that matches 
                        your needs wherever possible. Our services span to the following prevalent immigration issues: <br>
                        <ul class="lead text-justify">
                            <li>Expatriate Quota Applications: Most companies in Nigeria require certain foreign expertise 
                            to execute their business operations.
                            </li>
                            <li>
                            Business Permit: A business permit is required by a foreign company seeking to operate in Nigeria.
                            </li>
                            <li>
                            Temporay Work Permit: This work permit is granted by the Immigration Service in Abuja for a duration 
                            not exceeding 3 months.
                            </li>
                            <li>CERPAC (Combined Expatriate Residence Permit and Aliens Card) Regularization: 
                            Monthly Returns and Deletion from quota
                            </li>
                            <li>
                            Re-designation and Change of Employment.
                            </li>
                        </ul>
                    </p>

                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>


        <?php
            include $dir."partials/footer.php";
            include $dir."partials/script.php";
        ?> 
    
</body>
</html>
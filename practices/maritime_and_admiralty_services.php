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
                        <img class="card-img" src="<?= $dir.'assets/img/slider/shipping.jpg' ?>" alt="Card image">
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-8 mt-4">
                    <h2 class="font-weight-bold mb-4">Maritime and Admiralty Services</h2>
                    <p class="lead text-justify">Considering the various international laws and regulations, including 
                        the local legislations, the maritime industry can be a challenge to navigate. Bethany Law 
                        & Partners' maritime team is experienced in sorting out complex issues and getting things 
                        done for our clients. Our lawyers find financing, regulatory compliance, vessel sales, 
                        bareboat charters, maritime litigation, and environmental pollution defense. Our clients 
                        include a broad range of vessel owners, operators and managers, government contractors, 
                        maritime terminal operators, shipyards, logistics providers, marine equipment suppliers, 
                        port authorities, financial institutions, businesses that charter vessels, and others 
                        engaged in the provision or purchase of maritime transportation services. <br><br>
                        At Bethany Law & Partners, we provide maritime and admiralty legal services in the following areas:
                        <ul class="lead text-justify">
                            <li>Litigation</li>
                            <li>Government Contracts</li>
                            <li>Finance, Leasing, and Mergers and Acquisitions</li>
                            <li>Legislation</li>
                            <li>International Trade</li>
                            <li>Seafarers Registration</li>
                            <li>Cabotage Compliance & Registration</li>
                            <li>Flagship Registration</li>
                            <li>Registration of Tanker Vessels</li>
                            <li>Obtainment of Tonnage & Safe Manning Certificates</li>
                            <li>Conversion of Vessels to Home Use</li>
                            <li>Processing of Temporary Importation</li>
                            <li>Vessel Arrest and Release</li>
                            <li>Advice on Local Contract Act</li>
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
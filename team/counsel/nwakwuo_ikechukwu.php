<!DOCTYPE html>
<html lang="en">
<?php
    $dir = "../../";
    include $dir."partials/head.php";
?>

<body>

<?php
    include $dir."partials/banner.php";
    include $dir."partials/nav.php";
?>
        <!-- End nav -->

      <!-- Team -->
      <div class="container mt-3 mt-md-5">
            <div class="row">
                <div class="col-md-12 pr-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb ml-1">
                            <li class="breadcrumb-item"><a href="">Our Team</a></li>
                            <li class="breadcrumb-item"><a href="<?= $dir.'team/counsel.php' ?>">Counsel</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Nwakwuo Ikechukwu</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="card border-0">
                        
                        <div class="card-body pt-1">
                            <div class="row mb-3">
                                <div class="col-md-12 bg-success px-0">
                                    <img src="<?= $dir.'assets/img/people/ike2.jpg' ?>" alt="" class="img-fluid">
                                </div>
                            </div>
                            <!--  -->
                            <div class="row">
                                <p class="lead text-justify">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non iusto nulla 
                                    iure explicabo, deserunt vel, aut nam dolore consequatur maxime eum suscipit 
                                    vitae nisi architecto saepe ipsa illum quasi, dolorum nobis modi veniam? 
                                    Asperiores animi at quis eos est nostrum repellat assumenda eius! Facere 
                                    sint molestiae deleniti sed itaque error? <br><br>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero esse iusto 
                                    sequi enim aut accusantium porro magnam consequatur mollitia non.
                                </p>
                            </div>
                            <!--  -->
                            <div class="row">
                                <div class="accordion col-md-12 px-0" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header px-0 py-0" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn glow-0 btn-lg btn-block border-0 text-left text-white bg-footer p-3 collapsed" type="button" data-toggle="collapse" data-target="#practiceAreas">
                                                    <i class="fa fa-sm fa-angle-right mr-2"></i>
                                                    Practice Areas
                                                </button>
                                            </h5>
                                        </div>
                                    
                                        <div id="practiceAreas" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header px-0 py-0" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn glow-0 btn-lg btn-block border-0 text-left text-white bg-footer p-3" type="button" data-toggle="collapse" data-target="#bars">
                                                    <i class="fa fa-sm fa-angle-right mr-2"></i>
                                                    Bars
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="bars" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header px-0 py-0" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn glow-0 btn-lg btn-block border-0 text-left text-white bg-footer p-3 collapsed" type="button" data-toggle="collapse" data-target="#education">
                                                    <i class="fa fa-sm fa-angle-right mr-2"></i>
                                                    Education
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="education" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header px-0 py-0" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button class="btn glow-0 btn-lg btn-block border-0 text-left text-white bg-footer p-3 collapsed" type="button" data-toggle="collapse" data-target="#membership">
                                                        <i class="fa fa-sm fa-angle-right mr-2"></i>
                                                        Membership & Professional Bodies
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="membership" class="collapse" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header px-0 py-0" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button class="btn glow-0 btn-lg btn-block border-0 text-left text-white bg-footer p-3 collapsed" type="button" data-toggle="collapse" data-target="#books">
                                                        <i class="fa fa-sm fa-angle-right mr-2"></i>
                                                        Books
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="books" class="collapse" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--  -->
                        </div>

                        <div class="card-footer"></div>
                    </div>
                </div>
                <!-- col-md-8 end -->
                <div class="col-md-4">
                    <div class="row py-3 color2 text-white rounded text-center">
                        <h3 class="mx-auto">Other Counsel Members</h3>
                    </div>
                    <div class="row align-middle mt-4 pl-2">
                        <div class="col-3 col-md-3 offset-md-1 px-0">
                            <img src="<?= $dir.'assets/img/people/JosephLawyer.jpg' ?>" alt="" class="rounded-circle img-fluid">
                        </div>
                        <div class="col-8 col-md-8">
                            <h5 class="font-weight-bold mt-2 mb-0">Joseph Ekere</h5>
                            <p class="my-0">Lawyer<br>
                                <a href="<?= $dir.'team/counsel/joseph_ekere.php' ?>" class="text-info">View Full Bio</a>
                            </p>
                        </div>
                    </div>
                    <div class="row align-middle mt-4 pl-2">
                        <div class="col-3 col-md-3 offset-md-1 px-0">
                            <img src="<?= $dir.'assets/img/people/chioma4.jpg' ?>" alt="" class="rounded-circle img-fluid">
                        </div>
                        <div class="col-8 col-md-8">
                            <h5 class="font-weight-bold mt-2 mb-0">Chioma Oyehara</h5>
                            <p class="my-0">Lawyer<br>
                                <a href="<?= $dir.'team/counsel/chioma_oyehara.php' ?>" class="text-info">View Full Bio</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
      </div>
      
      <!-- End team -->

        <!--Footer-->
        <?php
            include $dir."partials/footer.php";
            include $dir."partials/script.php";
        ?> 
    
</body>
</html>
     
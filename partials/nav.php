
<!--navigation-->
<nav class="navbar navbar-expand-lg navbar-light color2">
  <span class="navbar-brand">
    <a href="https://facebook.com" class="social_link">
      <span class="fa-stack rounded fa-border pt-0">
        <i class="fas fa-square fa-stack-2x transparent fa-margin"></i>
        <i class="fab fa-facebook-f fa-stack-1x fa-inverse fa-margin"></i>
      </span>
    </a>
    <a href="https://twitter.com" class="social_link">
      <span class="fa-stack rounded fa-border p-0">
        <i class="fas fa-square fa-stack-2x transparent fa-margin"></i>
        <i class="fab fa-twitter fa-stack-1x fa-inverse fa-margin"></i>
      </span>
    </a>
    <a href="https://linkedin.com" class="social_link">
      <span class="fa-stack rounded fa-border p-0">
        <i class="fas fa-square fa-stack-2x transparent fa-margin"></i>
        <i class="fab fa-linkedin-in fa-stack-1x fa-inverse fa-margin"></i>
      </span>
    </a>
    <a href="https://facebook.com" class="social_link">
      <span class="fa-stack rounded fa-border p-0">
        <i class="fas fa-square fa-stack-2x transparent fa-margin"></i>
        <i class="fab fa-youtube fa-stack-1x fa-inverse fa-margin"></i>
      </span>
    </a>
      <!-- <a href="#"><i class="fab fa-facebook social-links"></i></a>
      <a href="#"><i class="fab fa-twitter social-links"></i></a>
      <a href="#"><i class="fab fa-instagram social-links"></i></a>
      <a href="#"><i class="fab fa-youtube social-links"></i></a> -->
  </span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item mx-3 active">
        <a class="nav-link lead color1" href="<?= $dir . 'index.php' ?>">Home</a>
      </li>
      <li class="nav-item mx-3 dropdown">
        <a class="nav-link lead color1 dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Our Team
        </a>
        <div class="dropdown-menu color2">
          <a class="dropdown-item color1" href="<?= $dir . 'team/administration.php' ?>">Administration</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item color1" href="<?= $dir . 'team/counsel.php' ?>">Counsel</a>
        </div>
      </li>
      <li class="nav-item mx-3">
        <a class="nav-link lead color1" href="<?= $dir . 'careers.php' ?>">Careers</a>
      </li>
      <li class="nav-item mx-3">
        <a class="nav-link lead color1" href="<?= $dir . 'about.php' ?>">About Us</a>
      </li>
      <li class="nav-item mx-3 dropdown">
        <a class="nav-link lead color1 dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Practice
        </a>
        <div class="dropdown-menu color2">
          <a class="dropdown-item color1" href="<?= $dir . 'practices/commercial_and_corporate_practice.php' ?>">Commercial and Corporate Practice</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item color1" href="<?= $dir . 'practices/general_civil_litigation.php' ?>">General Civil Litigation</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item color1" href="<?= $dir . 'practices/immigration_consultancy_services.php' ?>">Immigration Consultancy Services</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item color1" href="<?= $dir . 'practices/intellectual_property.php' ?>">Intellectual Property</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item color1" href="<?= $dir . 'practices/maritime_and_admiralty_services.php' ?>">Maritime and Admiralty Services</a>
        </div>
      </li>
      <li class="nav-item mx-3">
        <a class="nav-link lead color1" href="#" data-toggle="tooltip" data-placement="top" title="News and Publications">Blog</a>
      </li>
      <li class="nav-item mx-3">
        <a class="nav-link lead color1" href="<?= $dir . 'contact.php' ?>">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>

<!-- End nav -->
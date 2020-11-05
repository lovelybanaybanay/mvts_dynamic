<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title><?= isset($PageTitle) ? $PageTitle : "Default Title"?></title>
    <!-- Additional tags here -->
    <?php if (function_exists('customPageHeader')){
      customPageHeader();
    }?>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

</head>
<body>

<!-- start nav -->

<nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="#">
        <img src="img/mvtslogo.png" class="logoimg">
      </a>
      <div class="logocontainer text-center">
        <a href="index.php"> <h1>Molave Vocational <br> Technical School</h1></a>
      </div>
      <i class="fas fa-bars navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation""></i>
        <!-- </button> -->

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="mr-auto"></div>
        <ul class="navbar-nav">
          <li class="nav-item active text-center">
            <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item text-center">
            <a class="nav-link" href="#">Programs</a>
          </li>
          <li class="nav-item text-center">
            <a class="nav-link" href="#">Enroll</a>
          </li>
          <li class="nav-item text-center">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
        <hr class="menudivider">
        <div class="d-flex justify-content-center h-100">
          <div class="searchbar">
            <input class="search_input" type="text" name="" placeholder="Search...">
            <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
          </div>
        </div> 
        <hr class="menudivider">
        <div class="d-flex justify-content-center h-100"> 
          <a href="#" id="userlink">
            <div class="userprofile">
              <i class="fas fa-user"></i>
              <span class="username"> Juan Dela Cruz </span>
            </div> 
          </a>
        </div>  
    </div>
</nav>
<!-- end nav -->
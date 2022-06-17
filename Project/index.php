<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hayatt</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- icon -->
    <link rel="shortcut icon" href="https://img.freepik.com/free-psd/logo-mockup-grey-wall_35913-2122.jpg?w=2000"
        type="image/x-icon">


    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Ubuntu:300,300i,400,400i,500,500i,700,700i|Aclonica:400|Alegreya:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">

 
</head>

<body>
    <div id="preloader">
        <div id="loader"></div>
      </div>
      <script>
        window.addEventListener("load",()=>{
      const preloader=document.querySelector("#preloader");
      const loader=document.querySelector(".loader-bg");

      preloader.classList.add("preloader-hidden");
      preloader.addEventListener("transitionend",()=>{
          document.body.classList.remove("reloader");
          document.body.classList.remove("loader-bg");

      });
  });
</script>




    <header class=" header" id="header">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light position-fixed ">
            <div class="container-fluid top-header ">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center " id="navbarNav">
                    <ul class="navbar-nav menus">
                        <li class="nav-item">
                            <a class="nav-link  btn " aria-current="page" href="index.php"><i id="about"
                                    class="fa fa-home icon" aria-hidden="true"></i> ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  btn" href="Menu.php"><i class="fa fa-cutlery  icon" id="menu"
                                    aria-hidden="true"></i> MENU</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  btn " href="Timing.php"><i class="fa fa-clock-o icon"></i>DINING</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  btn " href="reservation.php"><i class="fa fa-pencil-square icon"
                                    id="reservation" aria-hidden="true"></i> RESERVATION</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  btn " href="awards.php"><i class="fa fa-star icon"
                                    aria-hidden="true"></i>AWARDS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  btn " href="location.php"><i class="fa fa-map-marker icon"
                                    aria-hidden="true"></i> LOCATION</a>
                        </li>
                        <!--  -->
                    </ul>
                    <ul class="navbar-nav justify-content-end ">
                        <li class="nav-item">
                            <a class="nav-link  btn active"><i class="fa fa-phone icon" aria-hidden="true"></i> +91
                                8894132038</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  btn active"><i class="fa fa-envelope icon" aria-hidden="true"></i>
                                hayattrestaurent@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- carosel -->
        <div id="carouselExampleIndicators" class="carousel slide header-img" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner justify-content-center">
                <div class="carousel-item active">
                    <img src="https://assets.hyatt.com/content/dam/hyatt/hyattdam/images/2022/03/31/1633/HYCOM-AMR-Mosaic-033122.jpg/HYCOM-AMR-Mosaic-033122.16x9.jpg?imwidth=960"
                        data-image-width="1200" data-image-height="1200" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item ">
                    <img src="https://akm-img-a-in.tosshub.com/businesstoday/images/story/202204/ezgif-sixteen_nine_161.jpg?size=948:533"
                        data-image-width="1200" data-image-height="1200" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://img.etimg.com/thumb/width-1200,height-900,imgsize-91564,resizemode-1,msid-90858708/industry/services/hotels-/-restaurants/hyatt-hotels-plans-to-add-over-3800-keys-with-over-50-hotels-in-india-by-2023.jpg"
                        data-image-width="1200" data-image-height="1200" class="d-block w-100" alt="...">
                </div>
                <div class="container-fluid d-flex text-center justify-content-center d-lg-block d-none">
                    <div class="carousel-caption  nav-content  align-self-center ">
                       <div class="pt-5 mt-5 ">
                        <img class="home-header-logo" src="https://air-marketing-assets.s3.amazonaws.com/blog/logo-db/hyatt-Logo.png" alt="">
                    </div>
                        <h2>HAYATT RESTAUREANT</h2><br><br><br>
                        <span>GET IN TOUCH</span>
                        <br><br>
                        <h4>YOU'RE more THAN WELCOME</h4>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>
    <main class="justify-content-center">
        <section>
            <hr>
            <div>
                <div>
                    <div>
                        <div>
                            <div>
                                <div class="container text-center">
                                    <div class="row ">
                                        <div class="col-lg-8 d-lg-block d-none img-1 image">
                                        </div>

                                        <div class=" d-flex col-lg-4  container-1 ">
                                            <h1 class=" container  text-center content-1 ">

                                                GET DOWN HERE! <br>
                                            </h1>

                                        </div>
                                    </div>
                                </div>
                                <div class="container ">

                                    <div class="row">
                                        <div class="col-lg-8 " id="container-2">
                                            <div class="container-2">
                                                <br><br>
                                                <h2>OUR HISTORY </h2>
                                                <p class="font-1">
                                                    Hyatt was founded by Jay Pritzker in 1957 when he purchased the
                                                    Hyatt House motel adjacent to the Los Angeles International Airport.
                                                    Over the following decade, Jay Pritzker and his brother, Donald
                                                    Pritzker, working together with other Pritzker family business
                                                    interests, grew the company into a North American management and
                                                    hotel ownership company, which became a public company in 1962. In
                                                    1968, Hyatt International was formed and subsequently became a
                                                    separate public company. Hyatt Corporation and Hyatt International
                                                    Corporation were taken private by the Pritzker family business
                                                    interests in 1979 and 1982, respectively.

                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4  img-2 image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container padding-1">
                        <p> On December 31, 2004, substantially all of the hospitality assets owned by Pritzker family
                            business interests, including Hyatt Corporation and Hyatt International Corporation, were
                            consolidated under a single entity, now Hyatt Hotels Corporation.</p>
                    </div>
                </div>


        </section>
        <section class="container container-6">
            <div>
                <div>
                    <h2>
                        <span>
                            WE CARE FOR PEOPLE SO THEY CAN BE THEIR BEST
                        </span>
                    </h2>
                    <p class="font-1">As we continue to grow, we don't lose sight of what's most important—people. Hyatt
                        is a company that was built by family. It's a workplace where coworkers become friends. Every
                        day we care for our guests. Care is at the heart of our business, and it's this distinct guest
                        experience that makes Hyatt one of the world's best hospitality brands. </p>
                    <h2>
                        <span>WE ARE FAMILY</span>

                    </h2>
                    <span class="font-1">Our foundation in family goes back to 1957, when entrepreneur Jay Pritzker
                        purchased the original Hyatt House motel. Pritzker and his brother, Donald, worked to grow the
                        Hyatt brand, powered by their belief in the importance of family and care. As of December 31,
                        2021, Hyatt's portfolio included more than 1,150 hotel and all-inclusive properties in 70
                        countries across six continents.</span>
                </div>
            </div>
        </section>
        <section class="container float-md-end ">
            <div class="clearfix sheet-1 ">
                <div class=" d-none d-md-block chef-bg-img">
                    <svg class="u-svg-link d-none d-lg-block" preserveAspectRatio="none" viewBox="0 0 160 150">
                        <use xlink:href="#svg-4d96"></use>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        xml:space="preserve" class="u-svg-content chef-image" viewBox="0 0 160 150" x="0px" y="0px"
                        id="svg-4d96">
                        <path d="M43.2,126.9c14.2,1.3,27.6,7,39.1,15.6c8.3,6.1,19.4,10.3,32.7,5.3c11.7-4.4,18.6-17.4,21-30.2c2.6-13.3,8.1-25.9,15.7-37.1 
      c8.3-12.1,10.8-27.9,5.3-42.7C150.5,20.3,134.6,9,117,7.6C107.9,6.9,98.8,5,90.1,1.9C83-0.6,75-0.7,67.4,2.1
      c-9.9,3.7-17,11.6-20.1,21c-3.3,10.1-10.9,18-20.6,22.2c-0.1,0-0.1,0.1-0.2,0.1c-20.3,8.9-31,32-24.6,53.2
      C6.9,115.6,25.2,125.2,43.2,126.9z"></path>
                    </svg>
                </div>

                <div class="main-con-1 d-none d-lg-block">
                    <div class="row chef-row">
                        <div class=" col-md-8 frame-1 ">
                            <div class=" container-3  float-left">
                                <div class="u-container-layout">
                                    <h1 class="u-text">
                                        <font class="text-1 font-2">
                                            Our ambiance is unparalleled
                                        </font>

                                    </h1>
                                    <p class="text-2 font-1">
                                        Our year-round our restro is the number one in the city. Our ambiance is
                                        unparalleled, our service goes above and beyond; El Catrin is an
                                        experience, not just a meal out.
                                    </p>

                                </div>

                                <div class="col-md-4 img-outer-1">
                                    <div class="img-container">
                                        <div class="img-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-4">
                    <h1 class="text-3">
                        <span>FIND your place AT HYATT</span>

                    </h1>
                    <p>
                        <span class="font-1">
                            Be a part of something bigger. Enjoy life every day. Make a difference in the lives of those
                            around you. Love where you work. Join a company that values respect, integrity, humility,
                            empathy, creativity, and fun. With careers spanning the globe, your perfect opportunity
                            awaits. Discover why Hyatt is consistently ranked one of the world'Ss best places to work.
                        </span><br><br><br><br><br>
                        <hr>
                    </p>
                </div>
            </div>
        </section>
    </main>
    <section class="container ">
        <div class="container ">
            <div class="row ">
                <div class="col-md-8 img-4 ">
                </div>

                <div class="  col-md-4  container-5 ">
                    <div class=" container   ">
                        <h2>
                            <hr>
                            Contact World of Hyatt

                        </h2>
                        <p class="font-1">You can request account information by mail, phone or email. Please be sure to
                            have your World of Hyatt account number and password ready.</p>
                    </div>
                    <hr>
                </div>
            </div>
            <br>
            <hr><br><br>
        </div>

    </section>
    <footer>
        <div class="container text-center font-2 ">
            <p>
                <a href="#header">Move to top</a>
            </p>
        </div>
    </footer>

</body>

</html>
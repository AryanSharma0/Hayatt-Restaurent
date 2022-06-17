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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- icon -->
    <link rel="shortcut icon" href="https://img.freepik.com/free-psd/logo-mockup-grey-wall_35913-2122.jpg?w=2000"
        type="image/x-icon">
    <!-- font -->
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Aclonica:400|Alegreya:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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
<!-- font -->
<link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
<link id="u-page-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Aclonica:400|Alegreya:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
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
                document.body.removeChild(reloader);
                document.body.removeChild(loader-bg);
    
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
                            <a class="nav-link  btn active" aria-current="page" href="index.php"><i id="about"
                                    class="fa fa-home icon" aria-hidden="true"></i> ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  btn active" href="Menu.php"><i class="fa fa-cutlery  icon" id="menu"
                                    aria-hidden="true"></i> MENU</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  btn active" href="Timing.php"><i
                                    class="fa fa-clock-o icon"></i>DINING</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  btn active" href="reservation.php"><i class="fa fa-pencil-square icon"
                                    id="reservation" aria-hidden="true"></i> RESERVATION</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  btn active" href="awards.php"><i class="fa fa-star icon"
                                    aria-hidden="true"></i>AWARDS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  btn active" href="location.php"><i class="fa fa-map-marker icon"
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
                    <img src="https://images.unsplash.com/photo-1626777552726-4a6b54c97e46?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1031&q=80"
                        data-image-width="1200" data-image-height="1200" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://images.healthshots.com/healthshots/en/uploads/2021/12/13130033/soup-1.jpg"
                        data-image-width="1200" data-image-height="1200" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://previews.123rf.com/images/baibakova/baibakova1908/baibakova190800142/129010608-assorted-indian-food-on-black-background-indian-cuisine-.jpg"
                        data-image-width="1200" data-image-height="1200" class="d-block w-100" alt="...">
                </div>
                <div>
                    <div class="carousel-caption  d-md-block d-none nav-content">
                        <div class="pt-5 mt-5 ">
                            <img class="home-header-logo" src="https://air-marketing-assets.s3.amazonaws.com/blog/logo-db/hyatt-Logo.png" alt="">
                        </div>
                        <h2>HAYATT RESTAUREANT</h2><br><br><br>
                        <span>GET IN TOUCH</span>
                        <br><br>
                        <h4>We're people who care about food</h4>
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
    <section class="container pt-4">
        <div>
            <div class="text-center">
                <h2>
                    <span class="menu-span-1">NOW OPEN</span>
                </h2>
                <p>
                    <span class="menu-span-2" >To provide you a truly memorable experience, the chefs have curated exclusive and distinctive menu that present ultimate fusion recipes.
                        <br>
                        You can relish the best of local and global exotic flavours.
                    </p>
                    <h2 class="pt-4">
                        <span class="menu-span-1"> What do you feel like today …</span>
                    </h2>
                    <p class="menu-span-2">
                        We have a menu and ambience for your every mood, from peckish to ravenous, and from comfy to elegant.
                    </p>
            </div>
            <div class="text-center pt-5">
                <h1 class="menu">Menu<br><br>
                </h1>
            </div>
            <div>
                <div class="container">
                    <div class="row pb-5">
                        <div id="main-btn" class="col-md-4 text-center">
        <button class="btn aspecial" onclick="ShowAndHide()">
            <div class=" pr-3 ">
                <img class="menu-btn-img rounded-circle "
                    src="https://www.spiceupthecurry.com/wp-content/uploads/2021/04/paneer-butter-masala-1.jpg"
                    alt="">
                <h2 class="pt-3">Menu</h2>
            </div>
        </button>
                        </div>
        <div class="col-md-4 text-center">
        <button class="btn aspecial" ONCLICK="ShowAndHde()">
                <img class="menu-btn-img rounded-circle "
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLXV5DBVY7junMjKw6rJgXCwJGZRWjKY5OVw&usqp=CAU"
                    alt="">
                <h2 class="pt-3"> Wine        </h2>                    
        </button>
            </div>
            <div class="col-md-4 text-center">
                </button>
                <button class="btn aspecial" ONCLICK="ShowAndHie()">
            <img class="menu-btn-img rounded-circle "
                src="https://img.onmanorama.com/content/dam/mm/en/food/features/images/2021/10/17/pizza.jpg"
                alt="">
            <h2 class="pt-3">Special</h2>


        </button>
    </div>
</div>
</div>
</div>
</div>
    </section>

<script>
    function ShowAndHide(blank,Menu) {
        var element = document.getElementById("wine");
        $('#Menu').toggleClass("d-none");
        if(        $('#Menu').show()){

            $('#wine').hide();
            $('#special').hide();
        }else{
            $('#wine').show();
            $('#special').show();
        }
        }

        
                    
</script>
<script>
    function ShowAndHde(blank,Menu) {
        var element = document.getElementById("wine");
        $('#wine').toggleClass("d-none");
        // if($('#Menu').toggleClass("d-none")){
            // $('#wine').classList.add("d-none");
            if(        $('#wine').show()){

$('#Menu').hide();
$('#special').hide();
}else{
$('#Menu').show();
$('#special').show();
// }
        }
    }   
</script>
<script>
    function ShowAndHie(blank,Menu) {
        var element = document.getElementById("wine");
        $('#special').toggleClass("d-none");
        // if($('#Menu').toggleClass("d-none")){
            // $('#wine').classList.add("d-none");
            if(        $('#special').show()){

$('#Menu').hide();
$('#wine').hide();
}else{
$('#wine').show();
$('#Menu').show();
}
        }
                    
</script>
<section id="blank">

</section>
    <section id="Menu" class="container d-none">
        <div>
            <div>
                <div>
                    <div>
                        <div>
                            <div class="row">
                                <div class="col-md-6" data-aos="flip-left">
                                    <div class="menu-breakfast-0 text-center">

                                        <h3>Breakfast<br>
                                        </h3>
                                    </div>

                                </div>
                                <div class=" col-md-6 d-md-block d-none" data-aos="flip-right">
                                    <div class="menu-1">
                                        <img class="menu-1"
                                            src="https://i2.wp.com/www.skiptomylou.org/wp-content/uploads/2017/12/DSC_3173-2-800x1208.jpg"
                                            data-image-width="800" data-image-height="1208">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-md-6" data-aos="fade-right">
                                    <div class="menu-img-1">
                                        <img class="menu-img-1"
                                            src="https://www.chefspencil.com/wp-content/uploads/Chole-Bhature.jpg"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-left">
                                    <div class="menu-container-1">
                                        <div class="row">
                                            <div class="menu-min-1 col-md-8 col-sm-8">
                                                <div>
                                                    <blockquote>Aloo Parantha<br>Onion Paratha <br>Gobi
                                                        Parantha<br>Mooli
                                                        Parantha<br>Mix Parantha<br>Paneer Parantha<br>Cholle Bhature
                                                        <br>

                                                        Egg Parantha<br>Paneer Pakoda<br>Mix Pakoda<br>Veg Assorted
                                                        Pakora<br>Bread Pakoda(2pcs)<br>Puri Bhaji
                                                    </blockquote>
                                                </div>
                                            </div>
                                            <div class="menu-min-2 col-md-4 col-sm-4 ">
                                                <div>
                                                    <p>80<br>70 <br> 70 <br> 70 <br>90 <br>95 <br>150 <br> 80 <br>120
                                                        <br>100 <br>100 <br>80 <br>100 <br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row h-80 menu-container-0">
                                <div class="col-md-6" data-aos="fade-right">
                                    <div class="menu-container-2">
                                        <div class="row">
                                            <div class="menu-min-1 col-sm-8">

                                                <h1>Eggs</h1>
                                                <blockquote> Omelet/Fried/Poached<br>Boiled Egg (2Pcs)<br>
                                                    Mushroom Omelet<br>Cheese Omelet <br>
                                                </blockquote>

                                            </div>

                                            <div class="menu-min-2 col-sm-4 menu-price-1">
                                                <div>
                                                    <p>150 <br>80 <br>170 <br> 170 <br></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 d-md-block d-none" data-aos="fade-left">
                                    <div class="menu-img-2">
                                        <img class="menu-img-2 "
                                            src="https://www.thedeliciouscrescent.com/wp-content/uploads/2019/03/Egg-Paratha-Square.jpg"
                                            alt="" data-image-width="1200" data-image-height="1200">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div>
                    <div>
                        <div>
                            <div class="row ">
                                <div class="col-md-6" data-aos="fade-right">
                                    <div class="menu-img-3">
                                        <img class="menu-img-3" src="https://www.readyseteat.com/sites/g/files/qyyrlu501/files/uploadedImages/img_8909_00416.jpg"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-left">
                                    <div class="menu-container-3">
                                        <div class="row">
                                            <div class="menu-min-1 col-md-8 col-sm-8">
                                                <h1>Sandwich</h1>
                                                <blockquote>Veg Sandwich <br>Veg Grilled
                                                    Sandwich<br>Cheese Sandwich <br>Cheese Grilled Sandwich<br>Toasted
                                                    Chicken
                                                    
                                                </blockquote>
                                                <blockquote>Veg Cheese Sandwich<br>Chicken
                                                    Sandwich<br>Chicken Cheese<br>Grilled Chicken 
                                                </blockquote>
                                            </div>
                                            <div class="menu-min-2 col-md-4 col-sm-4 ">
                                                <p> 80<br>100 <br>100 <br>140 <br>180
                                                </p>
                                                <div class="menu-price-5">140 <br>160 <br>180 <br>180</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div>
                    <div>
                        <div class="row">
                            <div class="col-md-6" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                data-aos-duration="2000">
                                <div class="menu-container-4">
                                    <div class="menu-lunch text-center">

                                        <h3>Lunch<br>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-6" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                data-aos-duration="2000">
                                <div class="lunch-1">
                                    <img class="lunch-1"
                                        src="https://media.istockphoto.com/photos/closeup-on-notebook-over-wood-table-background-focus-on-wooden-blocks-picture-id989191962?k=20&m=989191962&s=612x612&w=0&h=_ljhUnxPDJpXAhc4f196BTi59TeWLlwFeCGNDRdG8Xg="
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div>
                                <div>
                                    <div class="row">
                                        <div class="d-md-block d-none col-md-6" data-aos="fade-right">
                                            <div class="menu-img-4">
                                                <img src="https://www.whiskaffair.com/wp-content/uploads/2020/06/Chicken-Tikka-2-3.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6" data-aos="fade-left">
                                            <div class="menu-container-4">
                                                <div class="row">
                                                    <div class="menu-min-1 col-sm-8">
                                                        <h1>Non-Veg <br>
                                                        </h1>
                                                        <blockquote>
                                                            <div>
                                                                Chicken Tandoori<br>Chicken Tandoori(Full)<br>Chicken
                                                                Afgani<br>Chicken
                                                                Afgani(Full)<br>Chicken Pahadi<br>Chicken
                                                                Pahadi(Full)<br>Tangri
                                                                Kabab(4Pcs)<br>Bharwan Tangri Kabab<br>Kalmi
                                                                Kabab<br>Chicken
                                                                Tikka<br>Chicken Malai Tikka
                                                            </div>
                                                        </blockquote>
                                                    </div>
                                                    <div class="menu-min-2 col-sm-4">
                                                        <p> 320 <br>550 <br>320 <br>550 <br> 320 <br>550 <br>360 <br>400
                                                            <br>360 <br>320 <br>360 <br>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6" data-aos="fade-right">
                                        <div class="menu-container-5">
                                            <div class="row">
                                                <div class="menu-min-1 col-sm-8">
                                                    <blockquote>
                                                        <div>
                                                            Chicken Angara Tikka<br>Chicken Achari Tikka<br>Kasturi
                                                            Kabab<br>Chicken Seekh kabab<br>Mutton Seekh
                                                            Kabab<br>Dohra Kabab<br>Galouti Kabab<br>Mutton Champ<br>Non
                                                            Veg
                                                            Platter
                                                        </div>
                                                    </blockquote>
                                                </div>
                                                <div class="menu-min-2 col-sm-4 ">
                                                    <p>340 <br>340 <br>380 <br>380 <br>380 <br>380 <br>380 <br>340
                                                        <br>500

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" data-aos="fade-left">
                                        <div class="menu-img-5">
                                            <img class="menu-img-5"
                                                src="https://indianfood.com.sg/wp-content/uploads/2021/01/Non-Veg-Kebab-Platter.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div>
                        <div>
                            <div>
                                <div>
                                    <div class="row">
                                        <div class="d-md-block d-none col-md-6" data-aos="fade-right">
                                            <div class="menu-img-6">
                                                <img class="menu-img-6"
                                                    src="https://kitchenmai.com/wp-content/uploads/2020/12/kashmiri_dum_aloo_blog.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6" data-aos="fade-left">
                                            <div class="menu-container-6">
                                                <div class="row">
                                                    <div class="menu-min-1 col-sm-8">
                                                        <h1>Main Course<br>
                                                        </h1>
                                                        <blockquote>
                                                            <div>
                                                                <div> Dal Yellow <br>Dal Fry<br>Dal Makhni<br>Dal
                                                                    Maharani<br>Jeera Aloo Hingwala<br>Aloo
                                                                    Gobhi/CApsicum<br>Dum Aloo Punjabi<br>Dum Aloo
                                                                    Kashmiri
                                                                    <br>Matar mushroom<br>Mushroom Do Pyaza<br>Palak
                                                                    Corn<br>Kadai Veg<br>Veg Jalfrezi<br>Veg
                                                                    Kolhapuri<br>Diwani
                                                                    Handi<br>Tawa Veg<br>Malai Kofta <br>Palak
                                                                    Kofta<br>Veg
                                                                    Curry
                                                                    Kofta<br>Rajmah Raseela<br>Chana
                                                                    masala<br>Kadi
                                                                    Pakoda
                                                                </div>
                                                        </blockquote>
                                                    </div>
                                                    <div class="menu-min-2 col-sm-4">
                                                        <p>120 <br>140 <br>130<br>150 <br>130 <br>150 <br>150 <br>150
                                                            <br>180
                                                            <br>200 <br>190 <br> 160 <br>140 <br>160 <br>180 <br>200
                                                            <br>220
                                                            <br>210 <br>200 <br>190 <br>220 <br>210
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6" data-aos="fade-right">
                                            <div class="menu-container-13">
                                                <div class="row">
                                                    <div class="menu-min-1 col-sm-8">
                                                        <h1> Roti & Rice </h1>
                                                        <blockquote>
                                                            <div>Tawa/Tandoori roti <br>Butter naan <br>Aaloo Naan
                                                                <br>Garllic
                                                                Naan <br>Lachha Prantha <br>Plain Prantha <br> Steam
                                                                Rice
                                                                <br>Jeera Rice <br>Veg Fried Rice <br>Egg Fried Rice
                                                                <br>Chicken
                                                                Fried Rice <br>Veg Biryani <br>Egg Biryani <br>Chicken
                                                                Biryani
                                                                <br>Mutton Biryani
                                                            </div>
                                                        </blockquote>
                                                    </div>
                                                    <div class="menu-min-2 col-sm-4">
                                                        <p>340 <br>360 <br>340 <br>340 <br>380 <br>300
                                                            <br>360 <br>360 <br>330 <br>340 <br>320 <br>350 <br>350
                                                            <br>350
                                                            <br>350
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6" data-aos="fade-left">
                                            <div class="menu-img-13">
                                                <img class="menu-img-13"
                                                    src="https://media.gettyimages.com/photos/indian-roti-and-fried-rice-picture-id501994365"
                                                    alt="">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div>
                            <div>
                                <div>
                                    <div>
                                        <div class="row">
                                            <div class="d-md-block d-none col-md-6" data-aos="fade-right">
                                                <div class="menu-img-7">
                                                    <img class="menu-img-7"
                                                        src="https://c.ndtvimg.com/2020-07/1lm82rsg_paneer-tiffin_625x300_29_July_20.jpg?im=FaceCrop,algorithm=dnn,width=1200,height=886"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6" data-aos="fade-left">
                                                <div class="menu-container-7">
                                                    <div class="row">
                                                        <div class="menu-min-1 col-sm-8">
                                                            <h1>Main Course Paneer<br>
                                                            </h1>
                                                            <blockquote>
                                                                <div>
                                                                    Shahi Paneer<br>Makhani Paneer<br>Lababdar
                                                                    Paneer<br>Palak
                                                                    Paneer<br>Mast Kalandar Paneer<br>Kaleji
                                                                    Paneer<br>Kadai
                                                                    Paneer<br>Paneer Bhurji<br>Mirch Masala
                                                                    Paneer<br>Kurchan
                                                                    Paneer<br>Peshawari Paneer<br>Handi Paneer
                                                                </div>
                                                            </blockquote>
                                                        </div>
                                                        <div class="menu-min-2 col-sm-4">
                                                            <p>370 <br> 340 <br>360 <br>320 <br> 340 <br>360 <br>350
                                                                <br>300 <br>370
                                                                <br> 350 <br>340 <br> 370
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6" data-aos="fade-right">
                                            <div class="menu-container-8">
                                                <div class="row">
                                                    <div class="menu-min-1 col-sm-8">
                                                        <h1>Snacks</h1>
                                                        <blockquote>
                                                            French Fry<br>Veg Cutlet<br>Veg cocktail kabab<br>Veg hara
                                                            bhara kabab
                                                        </blockquote>
                                                    </div>
                                                    <div class="menu-min-2 col-sm-4">
                                                        <p>300 <br>350 <br>330 <br>250</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-md-block d-none col-md-6" data-aos="fade-left">
                                            <div class="menu-img-8">
                                                <img class="menu-img-8"
                                                    src="https://simplyvegetarian777.com/wp-content/uploads/2016/01/image-30-1024x1024.png"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div>
                            <div>
                                <div>
                                    <div>
                                        <div class="row">
                                            <div class="col-md-6" data-aos="fade-right">
                                                <div class="menu-img-9">
                                                    <img class="menu-img-9"
                                                        src="https://www.licious.in/blog/wp-content/uploads/2020/12/Tandoori-Fish.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6" data-aos="fade-left">
                                                <div class="menu-container-9">
                                                    <div class="row">
                                                        <div class="menu-min-1 col-sm-8">
                                                            <h1>Fish<br>
                                                            </h1>
                                                            <blockquote>
                                                                <div>
                                                                    Nimbu malaidar Macchi<br>
                                                                    Prawn Tandoori<br>Fish Tandoori<br>Fish Achari
                                                                    Tikka<br>Amritsari
                                                                    Fish
                                                                </div>
                                                            </blockquote>
                                                        </div>
                                                        <div class="menu-min-2 col-sm-4">
                                                            <p>450 <br> 400 <br>450 <br>500 <br>550</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6" data-aos="fade-right">
                                            <div class="menu-container-10">
                                                <div class="row">
                                                    <div class="menu-min-1 col-sm-8">
                                                        <h1> Tandoor </h1>
                                                        <blockquote>
                                                            <div> Paneer Tikka<br>
                                                                Cheese Malai tikka<br>Paneer Pudina Tikka<br>Paneer
                                                                Achari
                                                                Tikka<br>Paneer Hariyali Tikka<br>Paneer Sufiyana
                                                                Tikka<br>Mushroom
                                                                Tikka<br>Stuff Mushroom Tikka<br>Allo Nazakat<br>Veg
                                                                Seekh
                                                                Kabab<br>Veg
                                                                Sikkim Puri<br>Veg Kurkure Kabab<br>Veg Galouti
                                                                Kabab<br>Tandoori
                                                                veg<br>E Gulfam Kabab<br>Aman Nourani Kabab<br>Aman
                                                                Zafrani
                                                                Kabab<br>Aman Bhindi Kurkure
                                                            </div>
                                                        </blockquote>
                                                    </div>
                                                    <div class="menu-min-2 col-sm-4">
                                                        <p>320 <br>300 <br>340 <br>360 <br>340 <br>340 <br>380 <br>380
                                                            <br>300
                                                            <br>360 <br>360 <br>330 <br>340 <br>320 <br>350 <br>350
                                                            <br>350 <br>350
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-md-block d-none col-md-6" data-aos="fade-left">
                                            <div class="menu-img-10">
                                                <img class="menu-img-10"
                                                    src="https://i.pinimg.com/originals/78/fe/06/78fe06d364c2fdfb68a9d95bff8b54e6.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div>
                            <div>
                                <div>
                                    <div>
                                        <div class="row">
                                            <div class="col-md-6 col-xm-6" data-aos="fade-right">
                                                <div class="menu-img-11">
                                                    <img class="menu-img-11"
                                                        src="https://tmbidigitalassetsazure.blob.core.windows.net/rms3-prod/attachments/37/1200x1200/Chocolate-Peanut-Butter-Shakes_EXPS_FT19_245766_F_1008_1.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xm-6" data-aos="fade-left">
                                                <div class="menu-container-11">
                                                    <div class="row">
                                                        <div class="menu-min-1 col-sm-8">
                                                            <h1>Shakes<br>
                                                            </h1>
                                                            <blockquote>
                                                                <div>
                                                                    Mango Shakes<br>Banana shake<br>Strawberry
                                                                    Shake<br>Chocolate
                                                                    Shake<br>Vanilla Shake<br>Cold Coffee<br>Cold Coffee
                                                                    With
                                                                    Ice<br>Mojito Smoothies<br>Fruit Punch<br>Virgin
                                                                    Pina
                                                                    Colada<br>Sluches<br>Guava Marry<br>Virgin Marry
                                                                </div>
                                                            </blockquote>
                                                        </div>
                                                        <div class="menu-min-2 col-sm-4">
                                                            <p>150 <br>170 <br>200 <br>200 <br>180 <br>150 <br> 180
                                                                <br>170 <br>200
                                                                <br>160 <br>170 <br>150 <br>150
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6" data-aos="fade-right">
                                            <div class="menu-container-12">
                                                <div class="row">
                                                    <div class="menu-min-1 col-sm-8">
                                                        <h1> Hot Beverages</h1>
                                                        <blockquote>
                                                            <div>
                                                                Separate Tea <br>Readymade Tea<br>Black Tea<br>Green
                                                                tea<br>Ice
                                                                Tea<br>Coffee<br>Hot Milk<br>Bournvita/Chocolate
                                                            </div>
                                                        </blockquote>
                                                        <h1>Cold Beverages</h1>
                                                        <blockquote>
                                                            <div>
                                                                Mineral Water<br>Soda<br>
                                                                Soft Drinks<br>Fresh Lime Water<br>Fresh Lime
                                                                Soda<br>Lassi Mango
                                                                Flavor<br>Lassi Chocolate Flavor<br>Lassi Strawberry
                                                                Flavor<br>Lassi
                                                                vanilla Flavor<br>Lassi Butterscotch Flavor<br>Lassi
                                                                Salted<br>Lassi
                                                                Sweet<br>Jal Jeera
                                                            </div>
                                                        </blockquote>
                                                    </div>
                                                    <div class="menu-min-2 col-sm-4">
                                                        <div>
                                                            <p>150 <br>170 <br>200 <br>200 <br>180 <br>150 <br> 180
                                                                <br>200 <br>

                                                            </p>

                                                            <p>150 <br>170 <br>200 <br>200 <br>180 <br>150 <br> 180
                                                                <br>200
                                                                <br>160 <br>170 <br>150 <br>150 <br>170
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-md-block d-none col-md-6" data-aos="fade-left">
                                            <div class="menu-img-12">
                                                <img class="menu-img-12"
                                                    src="https://goodiegodmother.com/wp-content/uploads/2015/09/Mango-Lassi-for-Two-1024x1024.png.webp"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </section>
    






 
    <body>
        <section id="wine" class="container d-none">
            <div>
                <div class="text-center ">
                    <h1 class="wine">Wine<br><br>
                    </h1>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="wine-img-1">
                        <img class="wine-img-1"
                            src="https://sc01.alicdn.com/kf/UTB83Tl7nKvJXKJkSajhq6A7aFXap/Hennessy-Cognac-XO-VSOP-VS-700ml-750ml.jpg"
                            alt="">
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="wine-container-1">
                        <div class="row">
                            <div class="menu-min-1 col-sm-8">

                                <h1>Cognac & Liqueurs</h1>
                                <blockquote> Hennesy XO <br>Martell XO <br>Kahlua <br>Jagermeister
                                    <br>Baileys Irish
                                    Cream <br>Sambuca <br>Camus <br>Courvoisier <br>Martell <br>Remy
                                    <br>Otard <br> ST-Remy
                                    <br>Emperador <br>Fundador
                                </blockquote>

                            </div>

                            <div class="menu-min-2 col-sm-4">
                                <div>
                                    <p> 7500<br>7500<br>7800 <br> 8200 <br>6500 <br>6700 <br>29600 <br>3880
                                        <br>13540
                                        <br>27580 <br>16640 <br>2460 <br>2500 <br>5400
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row ">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="wine-container-2">
                        <div class="row">
                            <div class="menu-min-1 col-sm-8">

                                <h1>Mocktails</h1>
                                <blockquote> Apple and Mint tall <br> Sweet Lime Basil  <br>Passion
                                    Fruit Mojito
                                    <br>White Tea Sangria <br>Iced Tea <br>Fresh Lime
                                </blockquote>

                            </div>

                            <div class="menu-min-2 col-sm-4">
                                <div>
                                    <p>1500 <br>1200<br>1400 <br> 1100 <br>1100 <br>1200 </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="wine-img-2">
                        <img class="wine-img-2 "
                            src="https://cdn.shopify.com/s/files/1/0257/2645/1765/products/virgin-mary-mocktail_1000x1500.jpg?v=1601016414"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 d-md-block d-none" data-aos="fade-right">
                    <div class="wine-img-3">
                        <img class="wine-img-3"
                            src="https://images.unsplash.com/photo-1607190345101-031b3e4080fc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fGdpbnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                            alt="">
                    </div>
                </div>
                <div class="col-md-6 " data-aos="fade-left">
                    <div class="wine-container-3">
                        <div class="row">
                            <div class="menu-min-1 col-sm-8">

                                <h1>Gin</h1>
                                <blockquote> Bombay Sapphire Gin<br>Monkey 47 <br>Tanqueray Gin <br>Tanquery
                                    No.10
                                    <br>Gordons London Dry <br>London Dry <br>New World <br>Plyouth
                                    <br>Old Tom <br>The
                                    Outliers <br>Ginebra San Miguel <br>Beefeater<br>Aviation American Gin
                                </blockquote>

                            </div>

                            <div class="menu-min-2 col-sm-4">
                                <div>
                                    <p> 5500<br>5700<br>5200 <br>5400 <br>4800 <br>4585 <br>3560 <br>3500
                                        <br>6470 <br>8500
                                        <br>7500 <br>9500 <br>5600
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row ">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="wine-container-4">
                        <div class="row">
                            <div class="menu-min-1 col-sm-8">

                                <h1>Vodka</h1>
                                <blockquote> Absolut Vodka <br> Grey Goose <br>Ketel One<br>Smirnoff Vodka
                                    <br>Belvedere
                                    Vodka <br>Stolichnaya <br>Svedka <br>Stillhouse Classic  <br>Beluga
                                    <br>Russian
                                    Standard <br>Hangar 1 <br>Kastra Elion vodka <br>Pinnacle <br>Van Gogh
                                    Vodka
                                </blockquote>
                            </div>
                            <div class="menu-min-2 col-sm-4">
                                <div>
                                    <p>4400 <br>9300<br>5400 <br> 3100 <br>8500 <br>7500<br>7800 <br> 8200
                                        <br>6500 <br>6700
                                        <br>2650 <br>2300
                                        <br>2100 <br>2100
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 d-md-block d-none" data-aos="fade-left">
                    <div class="wine-img-4">
                        <img class="wine-img-4 "
                            src="https://images.unsplash.com/photo-1618412046321-f8127c4589ca?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8dm9ka2F8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                            alt="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="wine-img-5">
                        <img class="wine-img-5"
                            src="https://cdn.pixabay.com/photo/2017/12/11/06/17/champagne-3011490_960_720.jpg"
                            alt="">
                    </div>
                </div>
                <div class="col-sm-6" data-aos="fade-left">
                    <div class="wine-container-5">
                        <div class="row">
                            <div class="menu-min-1 col-sm-8">

                                <h1>Beer</h1>
                                <blockquote> Draught Beer <br>Hoegaarden <br>Bira White/Blonde <br>Budweiser
                                    <br>Kingfisher
                                </blockquote>
                                <blockquote> Kingfisher Premium <br>Turborg <br>Kingfisher Ultra
                                    <br>Carlsberg <br>Heineken
                                    <br> Simba <br>Bira/Blonde <br>Budweiser <br>Corona <br>Hoegaarden
                                </blockquote>
                            </div>

                            <div class="menu-min-2 col-sm-4">
                                <div>
                                    <p>2700 <br> 2600<br>1925<br>1650 <br> 1525 </p>
                                    <div class="wine-container-5-price">3100 <br>2400 <br>3200 <br>2500
                                        <br>2650 <br>2300
                                        <br>2100 <br>2100 <br>2550 <br>2700
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row ">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="wine-container-6">
                        <div class="row">
                            <div class="menu-min-1 col-sm-8">

                                <h1>Rum</h1>
                                <blockquote> Bacarddi Superior <br>Captain Morgan Rum <br>Old Monk
                                    <br>Bacardi
                                    Gold<br>Bacardi Ocho <br>White Rum <br>Aged Rum <br>Dark Rum <br>French
                                    Caribbean 
                                    <br>Cachaca Rum <br>Spiced Rum <br>Gold Rum <br>Navy Rum <br>Rhum
                                    Agricole <br>
                                </blockquote>

                            </div>

                            <div class="menu-min-2 col-sm-4">
                                <div>
                                    <p>2755 <br>2925 <br>2280 <br>2755 <br>9250 <br>6700 <br>2650 <br>2300
                                        <br> 3200
                                        <br>2500 <br>2650 <br>2300
                                        <br>2100 <br>5540
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 d-md-block d-none" data-aos="fade-left">
                    <div class="wine-img-6">
                        <img class="wine-img-6"
                            src="https://images.unsplash.com/photo-1569529465841-dfecdab7503b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8d2hpc2t5fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="wine-img-7">
                        <img class="wine-img-7"
                            src="https://images.unsplash.com/photo-1625126590447-cb769384e1f0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y29sZCUyMGRyaW5rfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                            alt="">
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="wine-container-7">
                        <div class="row">
                            <div class="menu-min-1 col-sm-8">

                                <h1>Soft Beverages</h1>
                                <blockquote> Aerated Drinks <br>Juices <br>Ginger Ale <br>Red Bull <br>Beer
                                    <br>Cider
                                    <br>Spirites <br>A&W Root Beer <br>7 Up <br>Orange Crush <br>Schweppes
                                    <br>Polar Club
                                    Soda <br>Topo Chico <br> Spectacular
                                </blockquote>
                            </div>
                            <div class="menu-min-2 col-sm-4">
                                <div>
                                    <p> 550<br>570<br>600 <br>700 <br>750 <br> 700 <br>850 <br>650 <br>550
                                        <br>525 <br>900
                                        <br>730 <br>860 <br>640
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row ">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="wine-container-8">
                        <div class="row">
                            <div class="menu-min-1 col-sm-8">

                                <h1>Sparking</h1>
                                <blockquote> Sparking rose<br>Sweet Sparking <br>Moscato <br>Sparking red
                                    <br>Lus Sparking
                                    <br>Champagne <br>Almond <br>Sparking White
                                </blockquote>
                            </div>
                            <div class="menu-min-2 col-sm-4">
                                <div>
                                    <p>4300 <br>4460<br>3400 <br> 3100 <br>5500 <br>4500 <br>2200 <br>4100
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 d-md-block d-none" data-aos="fade-left">
                    <div class="wine-img-8">
                        <img class="wine-img-8 "
                            src="https://cdn.pixabay.com/photo/2021/10/07/15/12/wine-6688901__480.jpg"
                            alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="special" class="container d-none">
            <div>
                <div class="text-center ">
                    <h1 class="special">Special <br><br>
                    </h1>
                </div>
            </div>
        
            <div class="row">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="special-img-1">
                        <img class="special-img-1" src="https://wallpaperaccess.com/full/866845.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="special-container-1">
                        <div class="row">
                            <div class="menu-min-1 col-sm-8">

                                <h1>Pizza's</h1>
                                <blockquote> Plain Cheese Pizza <br>Capsicum, Onion Pizza <br>Tomato, Onion
                                    Pizza
                                    <br>Capsicum,Mashroom <br>Jaim Spl Pizza <br>Tandoon Pizza <br>Super
                                    Veggle Pizza
                                    <br>Neapolitan Pizza <br>Chicago Pizza <br>Sicilian Pizza <br>Detroit
                                    Pizza <br>Veggie
                                    Pizza <br>Pepperoine Pizza <br>Hawaiian Pizza
                                </blockquote>

                            </div>

                            <div class="menu-min-2 col-sm-4">
                                <div>
                                    <p> 450<br>570<br>500 <br>500 <br>750 <br> 700 <br>850 <br>650 <br>550
                                        <br>525 <br>900
                                        <br>730 <br>860 <br>640
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row ">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="special-container-2">
                        <div class="row">
                            <div class="menu-min-1 col-sm-8">

                                <h1>Noodles </h1>
                                <blockquote>Veg Hakka Noodles <br>Chilli Garlic Noodles <br>Pan Fried
                                    Noodles <br>Gravy
                                    Noodles <br>Soba Noodles <br>Udon Noodles
                                </blockquote>

                            </div>

                            <div class="menu-min-2 col-sm-4">
                                <div>
                                    <p>600 <br>550 <br>555 <br>670 <br>860 <br>645</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 d-md-block d-none" data-aos="fade-left">
                    <div class="special-img-2">
                        <img class="special-img-2 " src="https://wallpaperaccess.com/full/3708857.jpg"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="special-img-3">
                        <img class="special-img-3"
                            src="https://images.unsplash.com/photo-1603105037880-880cd4edfb0d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c291cHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                            alt="">
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="special-container-3">
                        <div class="row">
                            <div class="menu-min-1 col-sm-8">

                                <h1>Soups</h1>
                                <blockquote> Hot & Sour <br>Lemon & Coriander <br>Veg Noodle Soup <br>sweet
                                    Corn <br>Veg
                                    Munchow <br>Veg Clear soup <br>Tomata Soup <br>Lentil Soup <br>Chicken
                                    Tortilla Soup
                                    <br>French Onion Soup <br>Cream Soup <br>Puree Soup <br>Chowder Soup<br>
                                </blockquote>

                            </div>

                            <div class="menu-min-2 col-sm-4">
                                <div>
                                    <p> 320 <br>550 <br>320 <br>550 <br> 320 <br>550 <br>360 <br>400 <br>440
                                        <br>415 <br>560
                                        <br>380
                                        <br>360
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row ">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="special-container-4">
                        <div class="row">
                            <div class="menu-min-1 col-sm-8">

                                <h1>Chaats</h1>
                                <blockquote> Dahi Bhalla <br>Gol Gappa(6 pcs) <br>Aloo Chana Chaat <br>Corn
                                    Chaat <br>Papdi
                                    Chaat <br>Fruit Chaat<br>Aloo Paneer Chaat <br>Aloo and Peas Chaat
                                    <br>Bondi chaat
                                    <br>Raw Mango Chaat <br>Idli Chaat <br>Aloo Tikki <br>Bhelpuri
                                    <br>Samosa chat
                                </blockquote>
                            </div>
                            <div class="menu-min-2 col-sm-4">
                                <div>
                                    <p> 150 <br>180
                                        <br>200 <br>190 <br> 160 <br>140 <br>160 <br>180 <br>200 <br>220
                                        <br>210 <br>200 <br>190 <br>220
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 d-md-block d-none" data-aos="fade-left">
                    <div class="special-img-4">
                        <img class="special-img-4 " src="https://wallpapercave.com/dwp1x/wp10316624.jpg"
                            alt="">
                    </div>
                </div>
            </div>



            <div class="row ">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="special-img-5">
                        <img class="special-img-5 "
                            src="https://cdn.pixabay.com/photo/2018/03/15/12/16/food-3228057__340.jpg"
                            alt="">
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="special-container-5">
                        <div class="row">
                            <div class="menu-min-1 col-sm-8">

                                <h1>Starters</h1>
                                <blockquote> Spring Roll <br>Chilly Paneer Dry <br>Veg Manchurian
                                    Dry<br>Potatoes in Honey
                                    <br>Potatoes in Chilly<br>Fried Vegetables and salt <br>rispy Spinach
                                    <br>Chilly
                                    Mashroom Dry <br>
                                </blockquote>
                            </div>
                            <div class="menu-min-2 col-sm-4">
                                <div>
                                    <p>4300 <br>4460<br>3400 <br> 3100 <br>5500 <br>4500 <br>2200 <br>4100
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
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

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 30, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 800, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: false, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

      });
    </script>
</body>

</html>
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
  <link rel="stylesheet" href="location.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />






<body class="location-body">
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
    <nav class="navbar location-navbar navbar-expand-lg navbar-light position-fixed ">
      <div class="container-fluid top-header text-center">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse location-navbar-collapse justify-content-center " id="navbarNav">
          <ul class="navbar-nav menus">
            <li class="nav-item location-nav-item">
              <a class="nav-link  location-btn active" aria-current="page" href="index.php"><i id="about"
                  class="fa fa-home icon" aria-hidden="true"></i> ABOUT</a>
            </li>
            <li class="nav-item location-nav-item">
              <a class="nav-link  location-btn active" href="Menu.php"><i class="fa fa-cutlery  icon" id="menu"
                  aria-hidden="true"></i> MENU</a>
            </li>
            <li class="nav-item location-nav-item">
              <a class="nav-link  location-btn active" href="Timing.php"><i class="fa fa-clock-o icon"></i>DINING</a>
            </li>
            <li class="nav-item location-nav-item">
              <a class="nav-link  location-btn active" href="reservation.php"><i class="fa fa-pencil-square icon"
                  id="reservation" aria-hidden="true"></i> RESERVATION</a>
            </li>
            <li class="nav-item location-nav-item">
              <a class="nav-link  location-btn active" href="awards.php"><i class="fa fa-star icon"
                  aria-hidden="true"></i>AWARDS</a>
            </li>
            <li class="nav-item location-nav-item">
              <a class="nav-link  location-btn active" href="location.php"><i class="fa fa-map-marker icon"
                  aria-hidden="true"></i> LOCATION</a>
            </li>
            <!--  -->

            <li class="nav-item location-nav-item">
              <a class="nav-link  location-btn active"><i class="fa fa-phone icon" aria-hidden="true"></i> +91
                8894132038</a>
            </li>
            <li class="nav-item location-nav-item">
              <a class="nav-link  location-btn active"><i class="fa fa-envelope icon" aria-hidden="true"></i>
                hayattrestaurent@gmail.com</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="">
      <div class="location-content text-center col-lg-6 col-md-8 " data-aos="zoom-out-up">
        <h1 data-aos="fade-up" data-aos-anchor-placement="bottom-center">
          Hyatt Regency Chandigarh

        </h1>
        <p> 178, Industrial Area Phase I, Chandigarh, 160002</p>
        <p class="mt-5 hayatt-logo" data-aos="zoom-out-right"></p>

        <div>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.4590443383595!2d76.7990674154994!3d30.70549298164665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fecea2c68902d%3A0x7a40aedf459393a0!2sHyatt%20Regency%20Chandigarh!5e0!3m2!1sen!2sin!4v1652683790494!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" class="text-center location-map  " div
            data-aos="zoom-in-up"></iframe>
        </div>

      </div>
    </main>
  </header>
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
      offset: 300, // offset (in px) from the original trigger point
      delay: 0, // values from 0 to 3000, with step 50ms
      duration: 500, // values from 0 to 3000, with step 50ms
      easing: 'ease', // default easing for AOS animations
      once: false, // whether animation should happen only once - while scrolling down
      mirror: false, // whether elements should animate out while scrolling past them
      anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });
  </script>
</body>

</html>
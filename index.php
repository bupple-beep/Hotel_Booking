<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel X </title>
    <?php require('inc/link.php');?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <style>
    .availability-form{
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width: 575px){
      .availability-form{
        margin-top: 25px;
        padding: 0 35px;



      }

    }
    

    
  </style>
</head>
<body class="bg-light">

    <?php require('inc/header.php');?>

 <!--Swiper image-->
  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide ">
          <img src="image/deluxe/1.png" class="w-100 d-block ">
        </div>
        <div class="swiper-slide">
          <img src="image/deluxe/2.png" class="w-100 d-block">
        </div>
        <div class="swiper-slide" >
          <img src="image/deluxe/3.png"class="w-100 d-block">
        </div>
        <div class="swiper-slide" >
          <img src="image/deluxe/4.png" class="w-100 d-block">
        </div>
      </div>
    </div>
  </div>
  
  <!--check availability form-->
  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="ab-4">
          Check Booking Availability
        </h5>
        <form >
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label  class="form-label" stye="font-weight: 500;">Check-in</label>
              <input type="date" class="form-control shadow-none">

            </div>
            <div class="col-lg-3 mb-3">
              <label  class="form-label" stye="font-weight: 500;">Check-out</label>
              <input type="date" class="form-control shadow-none">

            </div>
            <div class="col-lg-3 mb-3">
              <label  class="form-label" stye="font-weight: 500;">Adult</label>
              <select class="form-select">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>

            </div>
            <div class="col-lg-2 mb-3">
              <label  class="form-label" stye="font-weight: 500;">Children</label>
              <select class="form-select">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>

            </div>
            <div class="col-lg-1  nb-lg-3 mt-2">
              <button type="submit" class="btn-text-white shadow-none custom-bg">Submit</button>



          </div>

        </form>
      </div>
    </div>
  </div>

  <!--Our rooms-->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="image/standard/1.png" class="card-img-top" >
          <div class="card-body">
            <h5>Standard Room</h5>
            <h6 class="mb-4">₱3,500.00 per day/night</h6>
            <div class="features mb-4">
              <h6 class="mb-1"> Features</h6>
              <span class="badge bg-light text-dark text-wrap">
                2 Rooms
              </span>
              <span class="badge bg-light text-dark text-wrap">
                1 Bathroom
              </span>              <span class="badge bg-light text-dark text-wrap">
                1 Balcony
              </span>              <span class="badge bg-light text-dark text-wrap">
                3 Sofa
              </span>

            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1"> Facilities</h6>
              <span class="badge bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge bg-light text-dark text-wrap">
                Television
              </span>              <span class="badge bg-light text-dark text-wrap">
                AC
              </span>              <span class="badge bg-light text-dark text-wrap">
                Room heater
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1"> Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
             
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-black custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>


            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="image/premium/1.png" class="card-img-top" >
          <div class="card-body">
            <h5>Premium Room</h5>
            <h6 class="mb-4">₱5,000.00 per day/night</h6>
            <div class="features mb-4">
              <h6 class="mb-1"> Features</h6>
              <span class="badge bg-light text-dark text-wrap">
                2 Rooms
              </span>
              <span class="badge bg-light text-dark text-wrap">
                1 Bathroom
              </span>              <span class="badge bg-light text-dark text-wrap">
                1 Balcony
              </span>              <span class="badge bg-light text-dark text-wrap">
                3 Sofa
              </span>

            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1"> Facilities</h6>
              <span class="badge bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge bg-light text-dark text-wrap">
                Television
              </span>              <span class="badge bg-light text-dark text-wrap">
                AC
              </span>              <span class="badge bg-light text-dark text-wrap">
                Room heater
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1"> Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
             
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-black custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>


            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="image/premium/6.png" class="card-img-top" >
          <div class="card-body">
            <h5>Deluxe Room</h5>
            <h6 class="mb-4">₱7,500.00 per day/night</h6>
            <div class="features mb-4">
              <h6 class="mb-1"> Features</h6>
              <span class="badge bg-light text-dark text-wrap">
                2 Rooms
              </span>
              <span class="badge bg-light text-dark text-wrap">
                1 Bathroom
              </span>              <span class="badge bg-light text-dark text-wrap">
                1 Balcony
              </span>              <span class="badge bg-light text-dark text-wrap">
                3 Sofa
              </span>

            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1"> Facilities</h6>
              <span class="badge bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge bg-light text-dark text-wrap">
                Television
              </span>              <span class="badge bg-light text-dark text-wrap">
                AC
              </span>              <span class="badge bg-light text-dark text-wrap">
                Room heater
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1"> Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
             
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-black custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>


            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>></a>

      </div>
    </div>
  </div>

<!--our facilities-->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">FACILITIES</h2>

  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="image/features/wifi.png" width="80px">
        <h5 class="mt-5">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="image/features/heater.png" width="80px">
        <h5 class="mt-5">Room Heater</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="image/features/tv.png" width="80px">
        <h5 class="mt-5">Flat-screen TV </h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="image/features/desk.png" width="80px">
        <h5 class="mt-5">Work desk</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="image/features/ac.png" width="80px">
        <h5 class="mt-5">AC</h5>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> More facilities>> </a>

      </div>
    </div>
  </div>

<!--Testimonials-->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

  <div class="container mt-5">
    <div class="swiper testimonials">
      <div class="swiper-wrapper mb5">
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="image/features/starr.png" width="30px">
            <h6 class="m-0 ms-2">Random user1</h6>            
          </div>
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
            ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
          <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="image/features/starr.png" width="30px">
            <h6 class="m-0 ms-2">Random user1</h6>            
          </div>
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
            ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
          <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="image/features/starr.png" width="30px">
            <h6 class="m-0 ms-2">Random user1</h6>            
          </div>
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
            ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
          <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

<!--Reach Us-->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3865.653302802506!2d121.08088!3d14.33156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d9e19688207f%3A0x9a0ba2439ae75327!2sBinan!5e0!3m2!1sen!2sph!4v1708251499051!5m2!1sen!2sph"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Contact us</h5>
          <a href="tel: +63 123 456 789 " class="d-inline-block mb-2 text-decoration-none text-dark"> 
            <i class="bi bi-telephone"></i> +63 123 456 789 
          </a>
          <br>
          <a href="tel: +63 123 456 789 " class="d-inline-block mb-2 text-decoration-none text-dark"> 
            <i class="bi bi-telephone"></i> +63 123 456 789 
          </a>
        </div>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Email us</h5>
          <a href="#" class="d-inline-block mb-3"> 
            <span class="badge bg-light text-dark fs-6 p-2">
              <a href="info@hotelx.gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark"></a>
              <i class="bi bi-envelope-exclamation-fill me-1"></i>Customer Service
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3"> 
            <span class="badge bg-light text-dark fs-6 p-2">
              <a href="inquiries@hotelx.gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark"> </a>

              <i class="bi bi-envelope-exclamation me-1"></i> Inquiries
            </span>
          </a>
          <br>

        </div>
      </div>
    </div>
  </div>




<br><br><br>
<br><br><br>
    

  
      
    <?php require('inc/footer.php');?>
  
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".mySwiper",{
      spaceBetween:30,
      effect:"fade",
      loop: true,
      autoplay:{
        delay:3500,
        disableOnInteraction: false,

      }

      
    });

   
    var swiper = new Swiper(".testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView:"3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
        320: {
          slidesPerView:1,
        },
        640: {
          slidesPerView:1,
        },
        768: {
          slidesPerView:2,
        },
        1024: {
          slidesPerView:3,
        },
      }
      
    });
  </script>
</body>
</html>



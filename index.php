<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Global Pride International</title>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=PT+Sans:wght@700&family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="Styles.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  <script src="jquery.counterup.min.js" charset="utf-8"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="index.js" charset="utf-8"></script>
</head>

<body>
  <section class="container-fluid">
    <div id=home class="header">
      <nav id="nav">
        <div class="menu-icon">
          <i class="fa fa-bars fa-2x"></i>
        </div>

        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="#about">ABOUT</a></li>
          <div class="dropdown">
            <span>
              <li><a href="#academics" style="padding-left: 35px; margin-right: 36px">ACADEMICS</a></li>
            </span>
            <div class="dropdown-content" style="padding-top: 0px; padding-bottom: 0px;">
              <p><a href="notice.php">Notices</a> <br> <a href="syllabus.php">Syllabus</a> <br><a href="curriculum.php">Curriculum</a></p>
            </div>
          </div>
          <li><a href="#con">CONTACT</a></li>
          <li><a class="gallery-nav" href="gallery.php">GALLERY</a></li>
        </ul>
        <button type="button" class="btn admissions btn-success" style="
        position: relative;
          left: 25%;
          width: 48%;
          margin: 0;
          background-color: #d0ab6d;
          border-bottom-left-radius: 55px;
          border-bottom-right-radius: 55px;
          z-index: 4;
          color: black;
          font-family: 'Cinzel', serif;
          font-size: 100%;
          border-color: #d0ab6d;
          display: inherit;
"><a href="https://docs.google.com/forms/d/e/1FAIpQLScDlrA08SjT_ry_cnJdnIvzm7Vrh_izMY3wh2ihbuSD9Dac5Q/viewform?embedded=true
">Book For Admissions</button></a>
      </nav>

      <img id="logo_school" class="logo_school animate__animated animate__backInLeft" src="logohd.png" alt="">
      <h1 class="animate__animated animate__bounce">Global Pride International School</h1>
      <h2 class="animate__animated animate__bounce">Welcomes You</h2>
      <div id=about class="bahrain" data-aos="fade-up" data-aos-duration="1500">
        <h1>About Us</h1>
        <p> Global Pride International School was established on 1st January 2020
          with the aim to provide its educational excellence to shape the students
          of tomorrow. GPIS is a one of a kind institution that follows the Cambridge
          Curriculum which is designed to promote the overall development of students to
          ensure they excel in life.
        </p>
        <h1>Our Vision & Mission</h1>
        <p> Global Pride International School aims to prepare students to
          understand, contribute to, and succeed in a rapidly changing society,
          thus making the world a better and more just place. We will ensure that
           our students develop both the skills that a sound education provides
           and the competencies essential for success and leadership in the emerging
            creative economy. We will also lead in generating practical and theoretical
             knowledge that enables people to better understand our world and improve
             conditions for local and global communities.</p>
      </div>
      <h1 class="gallery_text">Gallery</h1>
      <div id="gallery" class="swiper-la-tasrikh">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class=imgBx><img class="img" src="carouselimg/galleryimg1.jpg" alt=""></div>
            </div>
            <div class="swiper-slide">
              <div class=imgBx><img class="img" src="carouselimg/galleryimg2.jpg" alt=""></div>
      		</div>
            <div class="swiper-slide">
              <div class=imgBx><img class="img" src="carouselimg/galleryimg3.jpg" alt=""></div>

            </div>
            <div class="swiper-slide">
              <div class=imgBx><img class="img" src="carouselimg/galleryimg4.jpg" alt=""></div>

            </div>
            <div class="swiper-slide">
              <div class=imgBx><img class="img" src="carouselimg/galleryimg5.jpg" alt=""></div>

            </div>
            <div class="swiper-slide">
              <div class=imgBx><img class="img" src="carouselimg/galleryimg6.jpg" alt=""></div>

            </div>
            <div class="swiper-slide">
              <div class=imgBx><img class="img" src="carouselimg/galleryimg7.jpg" alt=""></div>

            </div>
            <div class="swiper-slide">
              <div class=imgBx><img class="img" src="carouselimg/galleryimg8.jpeg" alt=""></div>

            </div>
            <div class="swiper-slide">
              <div class=imgBx><img class="img" src="carouselimg/galleryimg9.jpg" alt=""></div>

            </div>
          </div>
        </div>
      </div>
      <div id="stats " class="acts animate__animated ">
        <h1>What We Offer</h1>
        <div class="container counter-section ">
          <div class="row text-center">
            <div class="col-md-3 counter-box">
              <div class="icon-box"><i class="fa fa-thumbs-up"></i></div>
              <p>Quality Education</p>
              <!-- <p>Administration</p> -->
            </div>
            <div class="col-md-3 counter-box">
              <div class="icon-box"><i class="fa fa-graduation-cap"></i></div>
              <p>1:30 Student Ratio</p>
              <!-- <p>Classrooms</p> -->
            </div>
            <div class="col-md-3 counter-box">
              <div class="icon-box"><i class="fa fa-handshake-o"></i></div>
              <p>Equal Care</p>
              <!-- <p>Students</p> -->
            </div>

            <div class="col-md-3 counter-box">
              <div class="icon-box"><i class="fa fa-book"></i></div>
              <p>Cambridge Syllabus</p>
              <!-- <p>Teachers</p> -->
            </div>
          </div>
        </div>
      </div>
      <div id="con" class="row">
        <div class="col-sm-12 col-md-6 location animate__animated ">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title loco">Location</h5>

              <div class="mapouter">
                <div class="gmap_canvas"><iframe id="gmap_canvas" src="https://maps.google.com/maps?q=santoshnagar&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
                <a href="https://www.google.com/maps/place/Santosh+Nagar,+Hyderabad,+Telangana,+India/@17.345238,78.507596,13z/data=!4m5!3m4!1s0x3bcb987210930741:0xfaea6be0940d7ea5!8m2!3d17.3472352!4d78.5083082?hl=en-US" class="btn btn-primary">Go Here</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-6 enquire animate__animated ">
          <form>
            <h5>Enquiry Form</h5>
            <div class="form-row enquiry">
              <div class="form-content col-md-12 mb-3">
                <label for="validationTooltip01">Full Name</label>
                <input placeholder="Please Enter Your Full Name" type="text" class="form-control">
              </div>
            </div>
            <div class="form-row enquiry">
              <div class="form-content col-md-12 mb-3">
                <label for="validationTooltip05">E-mail</label>
                <input placeholder="Kindly Enter you e-mail ID" type="text" class="form-control">
              </div>
            </div>
            <div class="form-row enquiry">
              <div class=" form-content col-md-12 mb-3">
                <label for="validationTooltip03">Phone</label>
                <input placeholder="Kindly Enter Your Phone Number" type="text" class="form-control">
              </div>
            </div>
            <button  class="btn btn-primary" style="left: 39%;" > <a style="color:white;" href="mailto:mzamza1100@gmail.com">Submit form</a></button>
          </form>
        </div>
      </div>
      <div id="cont" class="row">
        <div class="col-sm-12 animate__animated">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Contact Us</h5>
              <a href="#"><i class="fa fa-instagram animate__animated "></i></a>
              <a href="#"><i class="fa fa-whatsapp animate__animated "></i></a>
              <a href="#"> <i class="fa fa-facebook animate__animated "></i></a>
              <a href="#"><i class="fa fa-phone animate__animated "></i></a>
              <a style="
          display: inline-block;
          font-family: 'Josefin Sans', sans-serif;
          font-size: 1.5rem;
          border-right: solid;
          padding: 2%;
      ">+91-9866058320 </a> <a style="
          font-family: 'Josefin Sans', sans-serif;
          display: inline-block;
          font-size: 1.5rem;
          border-right: solid;
          padding: 2%;
      ">+91-9701018320 </a> <a style="
          font-family: 'Josefin Sans', sans-serif;
          display: inline-block;
          font-size: 1.5rem;
          padding: 2%;
      "> 040-2438320 </a>
            </div>
          </div>
        </div>


      </div>
        <h5 class="foot">Developed and maintained by mettech media 	&#169;</h5>
    </div>
  </section>



  <script>
    AOS.init();
  </script>

  <script src="jquery.counterup.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

  <script>
    jQuery(document).ready(function($) {
      $('.counter').counterUp({
        delay: 10,
        time: 1000
      });
    });
  </script>

  <!--Script for gallery  -->

  <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 20,
        stretch: 0,
        depth: 200,
        modifier: 1,
        slideShadows: true,
      },
      loop: true,
      autoplay: {
        delay: 500,
        disableOnInteraction: true,
      },
    });
  </script>
</body>

</html>

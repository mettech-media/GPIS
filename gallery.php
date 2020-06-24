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
  <link rel="stylesheet" href="stylez.css">
    <link rel="stylesheet" href="gallery.css">



  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="zstyles.css"> -->
  <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
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
          <li><a href="index.php">ABOUT</a></li>
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
">Book For Admissions</button>
      </nav>

      <img id="logo_school" class="logo_school animate__animated animate__backInLeft" src="logo.png" alt="">
      <h1 class="animate__animated animate__bounce">Global Pride International School</h1>
      <h2 class="animate__animated animate__bounce">Gallery</h2>

          <div class="gallery-container container" style="margin-top:400px;margin-left:250px;margin-right:30px;">
            <?php
            include_once 'includes/dbh.inc.php';

            $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL statement failed!";
            } else {
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);

              while ($row = mysqli_fetch_assoc($result)) {
                echo '<a href="#">
                  <div style="background-image: url(img/gallery/'.$row["imgFullNameGallery"].');"></div>
                  <h3>'.$row["titleGallery"].'</h3>
                  <p>'.$row["descGallery"].'</p>
                </a>';
              }
            }
            ?>
          </div>

          <?php
          if (isset($_SESSION['username'])) {
            echo '<div class="gallery-upload">
              <h2>Upload</h2>
              <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
                <input type="text" name="filename" placeholder="File name...">
                <input type="text" name="filetitle" placeholder="Image title...">
                <input type="text" name="filedesc" placeholder="Image description...">
                <input type="file" name="file">
                <button type="submit" name="submit">UPLOAD</button>
              </form>
            </div>';
          }
          ?>

          <div id="con" class="row">
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
          "> 040-2438320 </a> </div>
              </div>
            </div>
        </div>
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

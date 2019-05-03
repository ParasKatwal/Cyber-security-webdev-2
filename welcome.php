<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/png" href="image/titlelogo.png">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <title>LOGED IN</title>
</head>
<body>
<?php include('headerLogin.php') ?>
<div class="welcome">
  <div class="info">
    <h1>welcome</h1>
    <div class="setting">
      <i class="fas fa-user-cog"></i>
    </div>
    <?php  if (isset($_SESSION['email'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['email']; ?></strong></p>
    <?php endif ?>
  </div>

  <div class="activity">

        <div class="mycourse">
          <a href="#"><button>My Course</button></a>
          <a href="#"><button>My Progress</button></a>
        </div>

        <div class="course-box">
          <div class="course course-1">
                <div class="img-box">
                    <img src="image/c1.jpg" alt="">
                </div>
                <div class="text-box">
                    <h3>Cyber Security in 90 Minutes</h3>
                    <a href="introduction.pdf" download><button>Download</button></a>
                </div>
            </div>
            <div class="course course-2">
                <div class="img-box">
                    <img src="image/c2.png" alt="">
                </div>
                <div class="text-box">
                    <h3>Incident Handling and Response</h3>
                    <a href="introduction.pdf" download><button>Download</button></a>
                </div>
            </div>
            <div class="course course-3">
                <div class="img-box">
                    <img src="image/c3.jpg" alt="">
                </div>
                <div class="text-box">
                    <h3>CySA Exam Express Bootcamp</h3>
                    <a href="introduction.pdf" download><button>Download</button></a>
                </div>
            </div>
            <div class="course course-4">
                <div class="img-box">
                    <img src="image/c4.jpg" alt="">
                </div>
                <div class="text-box">
                    <h3>Cyber Security Fundamentals 2019</h3>
                    <a href="introduction.pdf" download><button>Download</button></a>
                </div>
            </div>
          </div>
      </div>
</div>


  <?php include('footer.php') ?>
</body>
</html>

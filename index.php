
<!DOCTYPE html>
<html lang="en">
<?php include('header.php') ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="image/titlelogo.png">
    <title>HOME</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
    <script>
    window.addEventListener("load", function(){
    window.cookieconsent.initialise({
    "palette": {
        "popup": {
        "background": "#000"
        },
        "button": {
        "background": "#f1d600"
        }
    },
    "theme": "classic",
    "position": "bottom-left",
    "content": {
        "href": "http://localhost:3000/privacy.php"
    }
    })});
    </script>

</head>
<body>
    <div class="intro">
        <!-- <img src="image/intro.jpg" alt=""> -->
        <div class="intro-text">
        <h1>CURIOUS CYBERSECURITY</h1>
        <P>Curious Cybersecurity is a research-based company founded in 2016, created by John and Steven Yung. Our ambition is to research and help companies with the human elements of cybersecurity with a view to developing anti-phishing filtering solutions.
            The company formed when the brothers left University and were subject to a number of phishing attacks which disabled their website for a number of days. We produce press releases and provide training to companies with a view to strengthening cybersecurity defences.
        </P>
        </div>
    </div>

    <div class="get-start">
        <div class="form-box">
            <form action="backend/login.php" method="POST">
                <h1>Start here</h1>
                <input type="text" name="email" placeholder="Enter email">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" name="submit" value="submit">
                <a href="#">Forgot my password ?</a>
                <a href="signup.php">Sign Up</a>
            </form>
        </div>
    </div>

    <div class="search">
            <input type="text">
            <button>Search</button>
    </div>

    <div class="image-slider">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/11.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/22.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/33.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
    </div>

    <div class="feeds">
        <div class="container">
            <div class="d1">
                <a href="#">
                    <img src="image/press-release.jpg" alt="">
                    <p>Press Release</p>
                </a>
            </div>
            <div class="d2">
                <a href="#">
                    <img src="image/award.jpg" alt="">
                    <p>Awards</p>
                </a>
            </div>
            <div class="d3">
                <a href="#">
                    <img src="image/news.jpg" alt="">
                    <p>News</p>
                </a>
            </div>
        </div>
    </div>
    <?php include('footer.php') ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Party Portfolio of Tony LightArt</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- owl carousel -->
    <link href="../css/owl.carousel.css" rel="stylesheet">
    <link href="../css/owl.theme.css" rel="stylesheet">
    <!-- flex slider
    <link href="css/flexslider.css" rel="stylesheet"> -->
    <!-- font awesome -->
    <link href="../css/font-awesome.css" rel="stylesheet">
    <!-- custom stylesheet -->
    <link href="../css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="container-fluid" id="portfolio-page">
<div>
    <?php
    include ('../includes/header.php');
    ?>
    <div class="header-dark header-small">
        <h3>My Party Portfolio</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item mgn"><a href="../">Home</a></li>
                <li class="breadcrumb-item mgn"><a href="../photography/">My Portfolio</a></li>
                <li class="breadcrumb-item active" aria-current="page">My Party Portfolio</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Container for the image gallery -->
<div class="container">

    <!-- Full-width images with number text -->
    <div class="mySlides">
        <div class="numbertext">1 / 6</div>
        <img src="../images/boy-from-tandale.png" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">2 / 6</div>
        <img src="https://scontent.fnbo2-1.fna.fbcdn.net/v/t1.0-9/29103654_1221434861321119_4416925980451405824_n.jpg?oh=8780527915b109b07567447bbfd6abf2&oe=5B2EDB11" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">3 / 6</div>
        <img src="https://scontent.fnbo2-1.fna.fbcdn.net/v/t1.0-9/23231420_1138258722972067_7314588325921372959_n.jpg?_nc_cat=0&oh=425ae7fc3c138d2e8f3ef7741c8cb32d&oe=5B3DCAD0" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">4 / 6</div>
        <img src="https://scontent.fnbo2-1.fna.fbcdn.net/v/t1.0-9/22089683_1120284544769485_2818734373959495322_n.jpg?_nc_cat=0&oh=8749f9f0f0cb6b49928f36d8759a9bdf&oe=5B344D2C" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">5 / 6</div>
        <img src="https://scontent.fnbo2-1.fna.fbcdn.net/v/t1.0-9/19554447_1068612499936690_3638812135205967100_n.jpg?_nc_cat=0&oh=b6deb50d7c07f31f4e9265984b4a30fb&oe=5B2F76CE" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">6 / 6</div>
        <img src="https://scontent.fnbo2-1.fna.fbcdn.net/v/t1.0-9/16997741_986867924777815_8780340460867804166_n.jpg?oh=252ee85f0334dfda9d0caef6684bb184&oe=5B38289A" style="width:100%">
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Image text -->
    <div class="caption-container">
        <p id="caption"></p>
    </div>

    <!-- Thumbnail images -->
    <div class="row">
        <div class="column">
            <img class="demo cursor" src="../images/boy-from-tandale.png" style="width:100%" onclick="currentSlide(1)" alt="'A Boy From Tandale' album launch">
        </div>
        <div class="column">
            <img class="demo cursor" src="https://scontent.fnbo2-1.fna.fbcdn.net/v/t1.0-9/29103654_1221434861321119_4416925980451405824_n.jpg?oh=8780527915b109b07567447bbfd6abf2&oe=5B2EDB11" style="width:100%" onclick="currentSlide(2)" alt="Diamond performing at the Pongezi awards">
        </div>
        <div class="column">
            <img class="demo cursor" src="https://scontent.fnbo2-1.fna.fbcdn.net/v/t1.0-9/23231420_1138258722972067_7314588325921372959_n.jpg?_nc_cat=0&oh=425ae7fc3c138d2e8f3ef7741c8cb32d&oe=5B3DCAD0" style="width:100%" onclick="currentSlide(3)" alt="The audience">
        </div>
        <div class="column">
            <img class="demo cursor" src="https://scontent.fnbo2-1.fna.fbcdn.net/v/t1.0-9/22089683_1120284544769485_2818734373959495322_n.jpg?_nc_cat=0&oh=8749f9f0f0cb6b49928f36d8759a9bdf&oe=5B344D2C" style="width:100%" onclick="currentSlide(4)" alt="Attendees at the Jameson Connect">
        </div>
        <div class="column">
            <img class="demo cursor" src="https://scontent.fnbo2-1.fna.fbcdn.net/v/t1.0-9/19554447_1068612499936690_3638812135205967100_n.jpg?_nc_cat=0&oh=b6deb50d7c07f31f4e9265984b4a30fb&oe=5B2F76CE" style="width:100%" onclick="currentSlide(5)" alt="Jidenna performing at the Carnivore Grounds">
        </div>
        <div class="column">
            <img class="demo cursor" src="https://scontent.fnbo2-1.fna.fbcdn.net/v/t1.0-9/16997741_986867924777815_8780340460867804166_n.jpg?oh=252ee85f0334dfda9d0caef6684bb184&oe=5B38289A" style="width:100%" onclick="currentSlide(6)" alt="An ongoing performance at the Safaricom Jazz Festival">
        </div>
    </div>
</div>
<div>
    <p class="text-center">
        <br>
        <a href="../photography/" class="btn btn-primary btn-lg"><span class="fa fa-arrow-left"></span>Back To My Portfolio</a>
    </p>
</div>

<!-- //portfolio slide -->

<!-- testimonials -->
<section id="testimonials">
    <div class="header-light">
        <h1>KIND WORDS</h1>
    </div>
    <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#testimonial-carousel" data-slide-to="1"></li>
            <li data-target="#testimonial-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div>
                    <p>Quisque posuere, ipsum eu faucibus cursus, ex tortor elementum leo, eget varius lorem quam a nisl.<br>
                        <span>Kate</span></p>
                </div>
            </div>
            <div class="carousel-item">
                <div>
                    <p>Quisque posuere, ipsum eu faucibus cursus, ex tortor elementum leo, eget varius lorem quam a nisl.<br>
                        <span>Peris</span></p>
                </div>
            </div>
            <div class="carousel-item">
                <div>
                    <p>Quisque posuere, ipsum eu faucibus cursus, ex tortor elementum leo, eget varius lorem quam a nisl.<br>
                        <span>Julz</span></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //testimonials -->

<!-- contact -->
<section id="contact">
    <div class="header-light">
        <h1>CHECK TONY'S AVAILABILITY</h1>
        <h3>GET IN TOUCH WITH TONY</h3>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <br><h3>SEND ME A MESSAGE</h3><br>
            <form>
                <div class="form-group">
                    <label class="sr-only" for="name">Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="telephone">Telephone</label>
                    <input type="tel" class="form-control" id="telephone" aria-describedby="phoneHelp" placeholder="Enter phone number">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="Message">Email address</label>
                    <textarea type="text" class="form-control" rows="10" id="message" aria-describedby="messageHelp" placeholder="Enter message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send message</button>
            </form>
        </div>
        <div class="col-sm-4">
            <br><h3>CONTACT INFORMATION</h3><br>
            <address>
                Address:<br>
                16 W Central St, London WC1A 1JJ <br>
                <br>
                <br>
                Phone number: <br>
                +254 796 258 741<br>
                <br>
                <br>
                Email:<br>
                tonylighart@lightart.com<br>
                <br>
                <br>
                Social links:<br>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
            </address>
        </div>
    </div>
</section>
<!-- //contact -->

<div class="col-w"></div>
<div>
    <?php
    include '../includes/stay-connected.php';
    ?>
</div>
<div class="col-w"></div>
<div id="footer">
    <?php
    include ('../includes/footer.php');
    ?>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
    }
</script>
</body>
</html>
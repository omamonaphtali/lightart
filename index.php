<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Kenya event photographer</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- owl carousel -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <!-- flex slider
    <link href="css/flexslider.css" rel="stylesheet"> -->
    <!-- font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- custom stylesheet -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="container-fluid">
<!-- header -->
<section>
    <?php
        include ('includes/header.php');
    ?>
    <div class="w3_agile_banner_info">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="item">
                            <p>We are never afraid of technical challenges…</p>
                            <h3>Just see our most recent works projects!</h3>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <p>We are never afraid of technical challenges…</p>
                            <h3>Just see our most recent works projects!</h3>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <p>We are never afraid of technical challenges…</p>
                            <h3>Just see our most recent works projects!</h3>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <p>We are never afraid of technical challenges…</p>
                            <h3>Just see our most recent works projects!</h3>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- flexSlider -->
        <script defer src="js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(window).load(function(){
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <!-- //flexSlider -->
    </div>
</section>
<!-- //header -->
<!-- about -->
<section id="about">
    <div class="header-dark">
        <h1>Tony LightArt</h1>
        <h3>Kenyan Event Photographer</h3>
    </div>
    <div class="row">
        <p>Duis turpis arcu, dictum eu tincidunt id, congue vel urna. Quisque posuere, ipsum eu faucibus cursus, ex tortor elementum leo, eget varius lorem quam a nisl. Mauris ut enim sed tortor auctor luctus at vitae est. Duis dignissim auctor rhoncus. Curabitur diam lorem, ultricies eu pellentesque sed, elementum sodales urna. Pellentesque molestie maximus nisl at ultrices.</p>
        <p>Duis turpis arcu, dictum eu tincidunt id, congue vel urna. Quisque posuere, ipsum eu faucibus cursus, ex tortor elementum leo, eget varius lorem quam a nisl. Mauris ut enim sed tortor auctor luctus at vitae est. Duis dignissim auctor rhoncus. Curabitur diam lorem, ultricies eu pellentesque sed, elementum sodales urna. Pellentesque molestie maximus nisl at ultrices.</p>
        <p>Duis turpis arcu, dictum eu tincidunt id, congue vel urna. Quisque posuere, ipsum eu faucibus cursus, ex tortor elementum leo, eget varius lorem quam a nisl. Mauris ut enim sed tortor auctor luctus at vitae est. Duis dignissim auctor rhoncus. Curabitur diam lorem, ultricies eu pellentesque sed, elementum sodales urna. Pellentesque molestie maximus nisl at ultrices.</p>
    </div>
    <a href="about.php">Meet Tony <i class="fa fa-chevron-circle-right"></i></a>
</section>
<!-- //about -->

<!-- portfolio -->
<section id="portfolio">
    <div class="header-light">
        <h1>MY PORTFOLIO</h1>
        <h3>PHOTOS THAT MAKE ME SMILE</h3>
    </div>
    <!-- portfolio thumbnails -->
    <div class="row">
        <div class="col-sm-3">
            <div>
                <a href="first-portfolio/">
                    <img src="images/parties.jpg" alt="" class="img-thumbnail">
                </a>
            </div>
            <div class="w-100"></div>
            <div>
                <button type="button" class="btn btn-primary btn-sm">
                    <a href="first-portfolio/">View my first portfolio</a>
                </button>
            </div>
        </div><!-- //portfolio thumbnail -->
        <div class="col-sm-3">
            <div>
                <a href="first-portfolio/">
                    <img src="images/parties.jpg" alt="" class="img-thumbnail">
                </a>
            </div>
            <div class="w-100"></div>
            <div>
                <button type="button" class="btn btn-primary btn-sm">
                    <a href="first-portfolio/">View my first portfolio</a>
                </button>
            </div>
        </div><!-- //portfolio thumbnail -->
        <div class="col-sm-3">
            <div>
                <a href="first-portfolio/">
                    <img src="images/parties.jpg" alt="" class="img-thumbnail">
                </a>
            </div>
            <div class="w-100"></div>
            <div>
                <button type="button" class="btn btn-primary btn-sm">
                    <a href="first-portfolio/">View my first portfolio</a>
                </button>
            </div>
        </div><!-- //portfolio thumbnail -->
        <div class="col-sm-3">
            <div>
                <a href="first-portfolio/">
                    <img src="images/parties.jpg" alt="" class="img-thumbnail">
                </a>
            </div>
            <div class="w-100"></div>
            <div>
                <button type="button" class="btn btn-primary btn-sm">
                    <a href="first-portfolio/">View my first portfolio</a>
                </button>
            </div>
        </div><!-- //portfolio thumbnail -->
        <div id="text">
            <br><p class="text-center">If you’re getting married, throwing a party or planning an event take a look at what Tony could do for you.</p><br>
        </div>
    </div>
    <!-- //portfolio thumbnails -->
    <div>
        <button type="button" class="btn btn-primary btn-lg">
            <a href="full-portfolio/">View my full portfolio here <span class="fa fa-arrow-right"></span></a>
        </button><br>
    </div>
</section>
<!-- //portfolio -->

<!-- services -->
<section id="services">
    <div class="header-light">
        <h1>MY PHOTOGRAPHY SERVICES</h1>
        <h3>WHAT I AM GOOD AT</h3>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="camera">
                <a href="photography/wedding-photography.php"><span class="fa fa-camera-retro"></span></a>
            </div>
            <div class="service-content">
                <a href="photography/wedding-photography.php"><h4>Weddings</h4></a>
                <p>Photographing someone’s wedding is a massive privilege and a real thrill. I like to understand the family dynamics so I can get great photographs of all the key people whilst ensuring I never interrupt the flow of the day. I enjoy catching the atmosphere and getting stunning shots of the new bride and groom. These are photographs that have to last a lifetime.</p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="camera">
                <a href="photography/events.php"><span class="fa fa-camera-retro"></span></a>
            </div>
            <div class="service-content">
                <a href="photography/events.php"><h4>Corporate Events</h4></a>
                <p>I love the challenge of corporate and charity events. They can vary from brand launches, high profile events, charity balls or art exhibitions. Behind each one there is always a group of people who have worked like crazy to make the event happen. I have to do those people justice and my photographs have to sparkle.</p>
            </div>
        </div>
        <div class="w-100"></div>
        <div class="col-sm-6">
            <div class="camera">
                <a href="photography/party.php"><span class="fa fa-camera-retro"></span></a>
            </div>
            <div class="service-content">
                <a href="photography/party.php"><h4>Parties</h4></a>
                <p>I take fun and creative party photos that capture the true spirit of your celebration. I love photographing parties and, whether it’s an 18th or a 50th, there’s a strong possibility you’ll be updating your profile picture after I’ve snapped your party!</p>
            </div>
        </div>
        <div class=" col-sm-6">
            <div class="camera">
                <a href="photography/children-party.php"><span class="fa fa-camera-retro"></span></a>
            </div>
            <div class="service-content">
                <a href="photography/children-party.php"><h4>Children's Parties</h4></a>
                <p>If I don’t need a lie down after photographing a children’s party, then I haven’t done a good job. I throw myself into it. It’s a blast and I can get some great photographs which always seem to make me laugh and smile when I edit them.</p>
            </div>
        </div>
    </div>
</section>
<!-- //services -->

<!-- events and news -->
<section id="events">
    <div class="header-light">
        <h1>WHAT'S BEEN GOING ON</h1>
        <h3>LATEST EVENTS BY TONY</h3>
    </div>
    <div class="agileits-feedback-grids">
        <div id="owl-events" class="owl-carousel owl-theme">
            <div class="item">
                <div class="event grid-1">
                    <div class="first-grid">
                        <img src="images/parties.jpg" alt="" />
                        <h3>Federeka</h3>
                        <p>Cras tortor ipsum, gravida vitae finibus non, bibendum quis turpis. Cras semper accumsan metus, et aliquet diam vestibulum ut. </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="event grid-1">
                    <div class="first-grid">
                        <img src="images/parties.jpg" alt="" />
                        <h3>Mary watson</h3>
                        <p>Cras tortor ipsum, gravida vitae finibus non, bibendum quis turpis. Cras semper accumsan metus, et aliquet diam vestibulum ut. </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="event grid-1">
                    <div class="first-grid">
                        <img src="images/parties.jpg" alt="" />
                        <h3>Thompson</h3>
                        <p>Cras tortor ipsum, gravida vitae finibus non, bibendum quis turpis. Cras semper accumsan metus, et aliquet diam vestibulum ut. </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="event grid-1">
                    <div class="first-grid">
                        <img src="images/parties.jpg" alt="" />
                        <h3>Gomez</h3>
                        <p>Cras tortor ipsum, gravida vitae finibus non, bibendum quis turpis. Cras semper accumsan metus, et aliquet diam vestibulum ut. </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="event grid-1">
                    <div class="first-grid">
                        <img src="images/parties.jpg" alt="" />
                        <h3>john whick</h3>
                        <p>Cras tortor ipsum, gravida vitae finibus non, bibendum quis turpis. Cras semper accumsan metus, et aliquet diam vestibulum ut. </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="event grid-1">
                    <div class="first-grid">
                        <img src="images/parties.jpg" alt="" />
                        <h3>Federeka</h3>
                        <p>Cras tortor ipsum, gravida vitae finibus non, bibendum quis turpis. Cras semper accumsan metus, et aliquet diam vestibulum ut. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //events and news -->

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





<!-- footer -->
<section class="" id="footer">
    <?php
        include ('includes/footer.php');
    ?>
</section>
<!-- //footer -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- for news and events slider-js-file-->
<script src="js/owl.carousel.js"></script>
<!-- //for news and events slider-js-file-->
<script>
    $(document).ready(function() {
        $("#owl-events").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds
            autoPlay:true,
            items :3,
            itemsDesktop : [640,5],
            itemsDesktopSmall : [414,4]
        });
    });
</script>
</body>
</html>
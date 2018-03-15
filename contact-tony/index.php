<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Kenya event photographer</title>

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
<body class="container-fluid">
<div>
    <?php
    include '../includes/header.php';
    ?>
    <div class="header-dark">
        <h3>CONTACT TONY</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Tony</li>
            </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <p>Please do get in touch via the form and social media links below. I will be happy to give you a quote and answer any questions you may have.</p>
        <p>I look forward to hearing from you!</p>
    </div>
    <div class="col-sm-8">
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="event-enquiry">
                    <h5 data-toggle="collapse" data-target="#event-enquiry-body" aria-expanded="true" aria-controls="event-enquiry-body">Event Enquiry</h5>
                </div>
                <div id="event-enquiry-body" class="collapse show" aria-labelledby="event-enquiry" data-parent="#accordion">
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label for="name" class="col-md-12">Name*</label>
                                <input type="text" class="form-control col-md-6" id="name" aria-describedby="nameHelp" placeholder="First">
                                <input type="text" class="form-control col-md-6" id="name" aria-describedby="nameHelp" placeholder="Last">
                            </div>
                            <div class="form-group row">
                                <label class="col-md-12" for="exampleInputEmail1">Email*</label>
                                <input type="email" class="form-control col-md-6" id="enter-email" aria-describedby="emailHelp" placeholder="Enter email">
                                <input type="email" class="form-control col-md-6" id="confirm-email" aria-describedby="emailHelp" placeholder="Confirm email">
                            </div>
                            <div class="form-group row">
                                <label class="col-md-12" for="telephone">Phone*</label>
                                <input type="tel" class="form-control col-md-4" id="telephone">
                            </div>
                            <div class="form-group row">
                                <label class="col-md-12" for="venue">Event Venue*</label>
                                <input type="text" class="form-control col-md-4" id="venue">
                            </div>
                            <div class="form-group row">
                                <label class="col-md-12" for="event-date">Event Date*</label>
                                <input type="datetime-local" class="form-control col-md-4" id="event-date">
                            </div>
                            <div class="form-group row">
                                <label class="col-md-12" for="message">What are your plans for the event?</label>
                                <textarea type="text" rows="6" class="form-control col-md-6" id="message"></textarea>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-12" for="referee">How did you hear about me?</label>
                                <input type="text" class="form-control col-md-6" id="referee">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="media-enquiry">
                    <h5 data-toggle="collapse" data-target="#media-enquiry-body" aria-expanded="true" aria-controls="media-enquiry-body">Event Enquiry</h5>
                </div>
                <div id="media-enquiry-body" class="collapse show" aria-labelledby="media-enquiry" data-parent="#accordion">
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label for="name" class="col-md-12">Name*</label>
                                <input type="text" class="form-control col-md-6" id="name" placeholder="First">
                                <input type="text" class="form-control col-md-6" id="name" placeholder="Last">
                            </div>
                            <div class="form-group row">
                                <label class="col-md-12" for="exampleInputEmail1">Email*</label>
                                <input type="email" class="form-control col-md-6" id="enter-email" placeholder="Enter email">
                                <input type="email" class="form-control col-md-6" id="confirm-email" placeholder="Confirm email">
                            </div>
                            <div class="form-group row">
                                <label class="col-md-12" for="telephone">Phone*</label>
                                <input type="tel" class="form-control col-md-4" id="telephone">
                            </div>
                            <div class="form-group row">
                                <label class="col-md-12" for="enquiry">Detail your enquiry</label>
                                <textarea type="text" rows="6" class="form-control col-md-6" id="enquiry"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //accordion -->
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
</body>
</html>

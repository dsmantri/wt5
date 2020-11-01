<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <title>Event Registration</title>
</head>
<body>

    <!---------------------NAVBAR--------------------->

    <nav class="navbar navbar-expand-lg navbar-dark navigation fixed-top" >
        <a class="navbar-brand ml-5 font-weight-bold " href="index.html">MUSIC CONCERT EVENT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto mr-5">
            <a class="nav-item nav-link active pr-3 mr-3" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link  pr-3 mr-3" href="form.html">Register</a>
          </div>
        </div>
      </nav>

      <section class="header">
        <div class="header_box ">
          <h1 class="header_heading h1 mb-3">AN EVENT OF</h1>
          <h3 class="header_subheading font-weight-bold " >28 july</h3>
          <h3 class="header_subheading mb-4 font-weight-bold ">Delhi, India</h3>
          <a href="form.html" class="btn btn-success btn-lg mr-3">Register</a>
          <a href="#" class="btn bg-success btn-lg border text-white">Learn More </a>
        </div>
      </section>

      <section class="about_event container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pr-5">
            <img src="singer4.jpg" alt="" height="100%" width="100%">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="event_description">
              <h1 class="h1">About Event</h1>
              <p class="h4 text-muted mt-4" style="letter-spacing: 2px;word-spacing: 4px;line-height: 3rem;">
                A concert is a live music performance in front of an audience.The performance may be by a single musician, sometimes then called a recital, or by a musical ensemble, such as an orchestra, choir, or band.
                Concerts are held in a wide variety and size of settings, from private houses and small nightclubs, dedicated concert halls, arenas and parks to large multipurpose buildings, and even sports stadiums.
                Indoor concerts held in the largest venues are sometimes called arena concerts or amphitheatre concerts.

              </p>
            </div>
          </div>
        </div>
      </section>

      <section class=" container-fluid speakers">
        <div class="h1 text-center mb-5 font-weight-light">Our Singers</div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
            <div class="card" style="width: 18rem;">
              <img src="singer1.jpg" class="card-img-top" alt="..." height="290px">
              <div class="card-body">
                <a href="#" class="btn btn-success d-block py-2 font-weight-bold">Neha Kakkar</a>
                <p class="text-muted mt-3 text-monospace "></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
            <div class="card" style="width: 18rem;">
              <img src="singer2.jpg" class="card-img-top" alt="..." height="290px">
              <div class="card-body">
                <a href="#" class="btn btn-success d-block py-2 font-weight-bold">Arjit Singh</a>
                <p class="text-muted mt-3 text-monospace "></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
            <div class="card" style="width: 18rem;">
              <img src="singer3.jpg" class="card-img-top" alt="..." height="290px">
              <div class="card-body">
                <a href="#" class="btn btn-success d-block py-2 font-weight-bold">Sonu Nigam</a>
                <p class="text-muted mt-3 text-monospace "></p>
              </div>
            </div>
          </div>

      </section>


      <section class=" container-fluid parallax">
        <div class="container d-flex justify-content-between ">
        <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 my-auto pr-3 section1">
          <p class="font-weight-bold h2  text-white parllax_heading">The Venue</p>
          <p class="mt-3  text-white   parllax_text"> Delhi, India</p>
          <p class="  text-white  parllax_text">+61 3 8396 6284.</p>
        </div>
        <div class=" col-lg-8 col-md-8 col-sm-8 col-xs-12 my-auto mx-auto section2">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448183.7390930067!2d76.81307038634928!3d28.646677254552095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1595778316310!5m2!1sen!2sin"
          class="mt-5 ml-5 rounded" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
      </div>
      </section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>


<?php

include_once "configure.php";
require "Database.php";
require "Register.php";



if (isset($_GET['req'])) {

    try {
        $db = new Database();
        $registration = new Register($db->connect());
    }
    catch (Exception $error) {
        echo json_encode([$error->getMessage()]);

        return "error";
    }

    $req=$_GET['req'];
    switch ($req) {
        case 'insert':
            $registration->name= $_GET['name'] ;
            $registration->mail = $_GET['mail'] ;
            $registration->college = $_GET['college'] ;
            $registration->dept= $_GET['dept'] ;
            $registration->question = $_GET['quest'] ;
            $registration->app = $_GET['app'] ;
            $registration->ts = $_GET['ts'] ;
            echo $registration->insertr();
            break;
        case 'display':
            $stmt = $registration->getRecords();
            $row_count = $stmt->rowCount();
            if ($row_count > 0) {
                $student_arr = array(
                    "records" => array()
                );
                while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                    $student_arr['records'][] = $row;
                }
                echo json_encode($student_arr);
            }
            break;
        default:
            echo json_encode(["In-valid request"]);
            break;
    }
}

?>

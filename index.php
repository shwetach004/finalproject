include 'db_connection.php';
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us</title>

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="resonsive.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
     <!-- Navigation -->
     <nav>
      <img src="images/logo.png" alt="">
      <div class="navigation">
          <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="staff.html">Staff</a></li>
              <li><a href="courses.html">Courses</a></li>
              <li><a href="contact1.php">Contact</a></li>
              <li><a href="event.html">Event</a></li>
              <li><a href="placement.html">Placement</a></li>              
          </ul>
        </div>
  </nav>
    <!-- Home -->
    <section id="home" style="height: 53rem;">
      <h3
      style="
font-family: times new roman;
text-align: center;
margin-top: 7rem;
color: gold;
font-weight: bold;
font-size: 3rem;
margin-bottom: -5rem;">
      Contact Us
    </h3>
  <div class="container w-50 m-auto">
    <form action="action.php" method="POST" autocomplete="off">
      <div class="user">
        <label for="username my-4">Username: </label>
        <input type="text" name="username" id="username" class="form-control" required>
      </div>
      <div class="email my-4">
        <label for="email">E-mail: </label>
        <input type="email" name="email" id="email" class="form-control" required>
      </div>
      <div class="contact my-4">
        <label for="contact">Contact: </label>
        <input type="number" name="contact" id="contact" class="form-control" required>
      </div>
      <div class="address my-4">
        <label for="address">Address: </label>
        <input type="text" name="address" id="address" class="form-control" required>
      </div>
      <div class="message my-4">
        <label for="message">Message: </label>
        <textarea name="message" id="message" cols="30" rows="5" class="form-control" required></textarea>
      </div>
      <button class="btn btn-success" style="height:3rem; width:41rem;"> Send Message</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</section>

<div
            class="col-sm-11"
            style="
font-family: Calibri;
font-size: 3rem;
color: black;
text-align: center;
margin-top: 2rem;
margin-left: 0rem;
width: 98vw;
            "
          >
            CONTACT US
                <div class="text-center mv">
      <img src="images/img2.png" class="img-responsive fd" alt="line" />
    </div>
          </div>
        </div>
        <div style="height: 25rem; background: #efefef; text-align: center;">
                        <div class="custom">
                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.464013628993!2d77.4675861155795!3d28.675763188872754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf18a012b899f%3A0x5877fd5186901cdc!2sGovernment%20Polytechnic%20Ghaziabad!5e0!3m2!1sen!2sin!4v1627841828270!5m2!1sen!2sin" style="border: 0;
                             width: 97vw;
                             height: 25rem;
                             margin-left: 0px;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
            </div>
          
        </div>
        

<!-- footer -->
<footer>
  <div class="row" id="foot1" style="min-height: 240px">
    <div class="col-sm-12 flex-footer" style="display: flex;">
      <div class="col-sm-1"></div>
      <div class="col-sm-3 address" style="
          font-family: 'Times New Roman';
          font-size: 18px;
          color: white;
        ">
        <h3 style="color: #d9d9d9; font-weight: 600">
          <br>Address of Office
        </h3>
        <br>
        Government Polytechnic Ghaziabad<br>
        Hapur Road, Near Petrol Pump<br>
        D, Block Shastri Nagar, Ghaziabad<br>
        Uttar Pradesh , India<br>
        Ph. No. : 0120 2719500<br>
      </div>
      <div class="col-sm-1"></div>
      <div class="col-sm-3">
        <br><br>
        <img src="images/logo.png" style="
            height: 140px;
            width: 140px;
            border-radius: 50%;
            margin-top: 0%;
          ">
      </div>
      <div class="col-sm-1"></div>
      <div class="col-sm-3" style="padding-top: 20px">
        &gt;
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.4704614980296!2d77.46829421810432!3d28.675570223502984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf18a012b899f%3A0x5877fd5186901cdc!2sGovernment+Polytechnic+Ghaziabad!5e0!3m2!1sen!2sin!4v1557681922006!5m2!1sen!2sin" style="border: 0" allowfullscreen="" width="80%" height="200px" frameborder="0"></iframe>
      </div>
    </div>
  </div>
</footer>
</body>

</html>

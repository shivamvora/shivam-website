<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SHIVAM VORA</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,500&family=Quicksand:wght@500&display=swap" rel="stylesheet">
  </head>
  <body>

    <?php include('manu.php') ?>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">About Us</h2>
  </div>

<div class="container-fluid">
  <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
             <img src="images/10.jpg" class="img-fluid" >
            </div>

            <div class="col-lg-6 col-md-6 col-12">
            <h2>I am shivam vora</h2>
            <p>I utilize professional knowledge of the latest HTML
               (HTML5), CSS (CSS3) and Javascript -(ES6 with backwards
               -compatibility) on front-end to achieve results.
                PHP and MySQL on the back-end.Expert in CSS & HTML & Wordpress
               Great understanding and implementation with JavaScript & jQuery.
               Writing efficient code
              Creating websites/a website using standard HTML/CSS practices
              Working closely with web designers and programmers to produce the website
               </p>
               <a href="about.php" class="btn btn-success">Check More</a>
            </div>
  </div>
  </div>
</section>

    <section class="my-5">
      <div class="py-5">
        <h2 class="text-center">My Services</h2>
      </div>

      <div class="container-fluid bg-dark">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
      <img class="card-img-top" src="images/html.jpg" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title">* FULL-STACK HTML</h4>
                      <p class="card-text">Hello clients i can design website using FULLSTACK HTML.</p>
                      <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                    </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
      <img class="card-img-top" src="images/php.jpg" alt="Card image" height="285">
                    <div class="card-body">
                      <h4 class="card-title">WEB DEVELOPMENT</h4>
                      <p class="card-text">I provide Web Development service to my clients.</p>
                      <a href="https://www.upwork.com/o/profiles/users/~0116e5e55ccf3359cf/" class="btn btn-success">See My Upwork Profile</a>
                    </div>
                    </div>
          </div>


          <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
      <img class="card-img-top" src="images/word1.jpg" alt="Card image" height="285" >
                    <div class="card-body">
                      <h4 class="card-title">WORDPRESS</h4>
                      <p class="card-text">I will Create a Beautiful CMS website using Wordpress Themes and plugins.</p>
                      <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                    </div>
          </div>


        </div>

      </div>
    </section>

    <section class="my-5">
      <div class="py-5">
        <h2 class="text-center">MY WORK</h2>
      </div>

        <div class="container-fluid bg-dark">
            <div class="row">
              <div class="class-lg-4 col-md-4 col-12">
                 <img src="images/up1.jpg" class="img-fluid pb-3">
              </div>

              <div class="class-lg-4 col-md-4 col-12">
                 <img src="images/up2.jpg" height="300" width="380" >
              </div>

              <div class="class-lg-4 col-md-4 col-12">
                 <img src="images/up3.jpg" height="300" width="380" >
              </div>

              <div class="class-lg-4 col-md-4 col-12">
                 <img src="images/up4.jpg" height="300" width="380" >
              </div>

              <div class="class-lg-4 col-md-4 col-12">
                 <img src="images/up5.jpg" height="300" width="380" >
              </div>

              <div class="class-lg-4 col-md-4 col-12">
                 <img src="images/up6.jpg" height="300" width="380" >
              </div>
            </div>
        </div>

    </section>

    <section class="my-5">
      <div class="py-5">
        <h2 class="text-center">Register form</h2>
      </div>

      <div class="w-50 m-auto">
           <form  action="userinfo.php" method="post">
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="user" autocomplete="off" class="form-control" value="">
              </div>

              <div class="form-group">
                <label>Email Id</label>
                <input type="text" name="email" autocomplete="off" class="form-control" value="">
              </div>

              <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control" value="">
              </div>

              <div class="form-group">
                <label>Comment</label>
                <textarea class="form-control" name="comments"> </textarea>
              </div>

              <button type="submit" class="btn btn-success">Submit</button>
           </form>
      </div>
    </section>

       <footer>
          <p class="p-3 bg-dark text-white text-right">@Shivamvora webdevelopment agency</p>
       </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>

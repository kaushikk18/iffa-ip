<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />

    <title>Hello, world!</title>
    <style>
      .carousel {
        width: 80%;
        margin: 0% auto;
        margin-top: 5%;
        margin-bottom: 5%;
      }
    </style>
  </head>
  <body>
    <div id="carousel-div">
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            data-target="#carouselExampleIndicators"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              class="d-block w-100"
              src="images/liverpool-02.jpg"
              alt="First slide"
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>line jdjdd</h5>
              <p>kodsdnkfndkf bkgvi</p>
              <button class="btn enroll-btn" data-toggle="modal" data-target="#exampleModal"
>click me</button>
            </div>
          </div>
          <div class="carousel-item">
            <img
              class="d-block w-100"
              src="images/liverpool-02.jpg"
              alt="Second slide"
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>line jdjdd</h5>
              <p>kodsdnkfndkf bkgvi</p>
              <button class="btn enroll-btn" data-toggle="modal"       data-target="#exampleModal"
>click me</button>
            </div>
          </div>
          <div class="carousel-item">
            <img
              class="d-block w-100"
              src="images/liverpool-02.jpg"
              alt="Third slide"
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>line jdjdd</h5>
              <p>kodsdnkfndkf bkgvi</p>
              <button class="btn" onclick="confirmregistration()" >click me</button>
            </div>
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
@include('navbar')
<html>
    <head>
        <style>
          .slide{
            height: 200px;
            width: 1000px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 30px;

          }
          .v{
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 220px;

          }
          .card{
            margin-top:220px;
          }
          .card1{
            margin-top:220px;
            margin-left:500px;
          }

          .card2{
            margin-top:220px;

          }

        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
      <div class="slide">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="/images/n.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="/images/m.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="/images/o.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>


          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/images/s.jpg" alt="Card image cap" style="height:100px;">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <a href="#" class="btn btn-primary">উপভোগকারীর সংখ্যা </a>
            </div>
          </div>
      </div>




      <div class="card1" style="width: 18rem;">
        <img class="card-img-top" src="/images/o.jpg" alt="Card image cap" style="height:100px;">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <a href="#" class="btn btn-primary">প্রাপ্ত আবেদন সংখ্যা </a>
        </div>
      </div>







          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

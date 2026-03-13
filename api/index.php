<?php $pagetitle = 'Home'; 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('include/head.php') ?>
    <style>
    </style>
  </head>

  <body>
    <?php include('include/rolling-banner.php') ?>
    <header class="site-header sticky-top py-1">
        <?php include('include/navbar.php') ?>
    </header>

    <main>
      <!-- start BANNER -->
      <div
        class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light"
        style="background-image: url('../assets/image/bg/bg1.png'); background-repeat: no-repeat; background-size: 100% 100%;"
      >
        <div class="col-md-5 p-lg-5 mx-auto my-5">
          <h1 class="display-4 fw-normal">Durian Token</h1>
          <p class="lead fw-normal">
            An amazing token meme
          </p>
          <!-- <a class="btn btn-outline-secondary" href="#">Coming soon</a> -->
        </div>
        <div style="margin-top: -50px; margin-left: -100px">
            <img src="/assets/image/creature/creature6.png" width="30%">
        </div>

        <!-- top -->
        <div
          class="product-device-1 product-device-2 shadow-sm d-none d-md-block"
          style="background-image: url('../assets/image/creature/creature3.png'); background-repeat: no-repeat; background-size: 100% auto"
        >
        </div>

        <!-- bottom -->
        <div class="product-device shadow-sm d-none d-md-block" style="background-image: url('../assets/image/creature/creature5.png'); background-size: 100% auto"></div>
      </div>
      <!-- end of BANNER -->

      <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
        <div
          class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden"
        >
          <div class="my-3 py-3">
            <h2 class="display-5">Durian 1</h2>
            <p class="lead">An amazing meme token.</p>
          </div>
          <div
            class="bg-dark shadow-sm mx-auto"
            style="width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-image: url('../assets/image/product/product1.jpg'); background-repeat: no-repeat; background-size: 100% auto"
          ></div>
        </div>
        <div
          class="me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden"
          style="background-color: #A99D86;"
        >
          <div class="my-3 p-3">
            <h2 class="display-5">Durian 2</h2>
            <p class="lead">An amazing meme token.</p>
          </div>
          <div
            class="shadow-sm mx-auto"
            style="background-color: #A99D86; width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-image: url('../assets/image/product/product2.jpg'); background-repeat: no-repeat; background-size: 100% auto"
          ></div>
        </div>
      </div>

      <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
        <div
          class="me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden"
          style="background-color: #9D8C82;"
        >
          <div class="my-3 p-3">
            <h2 class="display-5">Durian 3</h2>
            <p class="lead">An amazing meme token.</p>
          </div>
          <div
            class="shadow-sm mx-auto"
            style="background-color: #9D8C82; width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-image: url('../assets/image/product/product3.jpg'); background-repeat: no-repeat; background-size: 100% auto"
          ></div>
        </div>
        <div
          class="me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden"
          style="background-color: #2B1811;"
        >
          <div class="my-3 py-3">
            <h2 class="display-5">Durian 4</h2>
            <p class="lead">An amazing meme token.</p>
          </div>
          <div
            class="shadow-sm mx-auto"
            style="background-color: #2B1811; width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-image: url('../assets/image/product/product4.jpg'); background-repeat: no-repeat; background-size: 100% auto"
          ></div>
        </div>
      </div>

      <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
        <div
          class="me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden"
          style="background-color: #908029;"
        >
          <div class="my-3 p-3">
            <h2 class="display-5">Durian 5</h2>
            <p class="lead">An amazing meme token.</p>
          </div>
          <div
            class="shadow-sm mx-auto"
            style="background-color: #908029; width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-image: url('../assets/image/product/product1.jpg'); background-repeat: no-repeat; background-size: 100% auto"
          ></div>
        </div>
        <div
          class="me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden"
          style="background-color: #707940;"
        >
          <div class="my-3 py-3">
            <h2 class="display-5">Durian 6</h2>
            <p class="lead">An amazing meme token.</p>
          </div>
          <div
            class="shadow-sm mx-auto"
            style="background-color: #707940; width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-image: url('../assets/image/product/product6.jpg'); background-repeat: no-repeat; background-size: 100% auto"
          ></div>
        </div>
      </div>

      <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
        <div
          class="me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden"
           style="background-color: #B19251;"
        >
          <div class="my-3 p-3">
            <h2 class="display-5">Durian 7</h2>
            <p class="lead">An amazing meme token.</p>
          </div>
          <div
            class="shadow-sm mx-auto"
            style="background-color: #B19251; width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-image: url('../assets/image/product/product7.jpg'); background-repeat: no-repeat; background-size: 100% auto"
          ></div>
        </div>
        
        <div
          class="me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden"
          style="background-color: #3E332D;"
        >
          <div class="my-3 py-3">
            <h2 class="display-5">Durian 8</h2>
            <p class="lead">An amazing meme token.</p>
          </div>
          <div
            class="shadow-sm mx-auto"
            style="background-color: #3E332D; width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-image: url('../assets/image/product/product8.jpg'); background-repeat: no-repeat; background-size: 100% auto"
          ></div>
        </div>
      </div>

      <div class="px-4 py-5 my-5 text-center">
        <img
          class="d-block mx-auto mb-4"
          src="/assets/image/logo/logo.png"
          alt=""
          width="72"
          height="57"
        />
        <h1 class="display-5 fw-bold">Durian Token</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4"> 
            An amazing meme token. An amazing meme token. An amazing meme token.
            An amazing meme token. An amazing meme token.An amazing meme token.
            An amazing meme token. An amazing meme token. An amazing meme token.
            An amazing meme token. An amazing meme token. An amazing meme token.
          </p>
          <!-- <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button type="button" class="btn btn-primary btn-lg px-4 gap-3">
              Primary button
            </button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">
              Secondary
            </button>
          </div> -->
        </div>
      </div>


        <!--  START SLIDER  -->
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
                <img src="/assets/image/slider/slider1.jpg">
                <div class="container">
                <div class="carousel-caption text-start">
                    <h1>DURIAN TOKEN</h1>
                    <p>Amazing Meme Token</p>
                    <!-- <p><a class="btn btn-lg btn-primary" href="#">Buy Today</a></p> -->
                </div>
                </div>
            </div>
            <div class="carousel-item">
                <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
                <img src="/assets/image/slider/slider2.jpg">
                <div class="container">
                <div class="carousel-caption">
                    <h1>DURIAN TOKEN</h1>
                    <p>Amazing Meme Token</p>
                    <!-- <p><a class="btn btn-lg btn-primary" href="#">Learn More</a></p> -->
                </div>
                </div>
            </div>
            <div class="carousel-item">
                <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
                <img src="/assets/image/slider/slider3.jpg">
                <div class="container">
                <div class="carousel-caption text-end">
                    <h1>DURIAN TOKEN</h1>
                    <p>Amazing Meme Token</p>
                    <!-- <p><a class="btn btn-lg btn-primary" href="#">Buy Now</a></p> -->
                </div>
                </div>
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!--  END OF SLIDER  -->


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
        <img src="/assets/image/team/team1.jpg" style="width:140px; border-radius: 150px">
        <h2>Durian 1</h2>
        <p>An amazing meme token. An amazing meme token. An amazing meme token. An amazing meme token. An amazing meme token.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
        <img src="/assets/image/team/team2.jpg" style="width:140px; border-radius: 150px">
        <h2>Durian 2</h2>
        <p>An amazing meme token. An amazing meme token. An amazing meme token. An amazing meme token. An amazing meme token.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
        <img src="/assets/image/team/team3.jpg" style="width:140px; border-radius: 150px">
        <h2>Durian 3</h2>
        <p>An amazing meme token. An amazing meme token. An amazing meme token.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First Durian Token. <span class="text-muted">An amazing meme token.</span></h2>
        <p class="lead">An amazing meme token. An amazing meme token. An amazing meme token. An amazing meme token.</p>
      </div>
      <div class="col-md-5">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        <div class="container">
            <img src="/assets/image/feature/feature1.jpg" width="500px" class="img-fluid">
        </div>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Second Durian Token. <span class="text-muted">An amazing meme token.</span></h2>
        <p class="lead">An amazing meme token. An amazing meme token. An amazing meme token. An amazing meme token. An amazing meme token. An amazing meme token. An amazing meme token.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        <img src="/assets/image/feature/feature2.jpg" width="350px" class="img-fluid">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Third Durian Token. <span class="text-muted">An amazing meme token.</span></h2>
        <p class="lead">An amazing meme token. An amazing meme token. An amazing meme token. An amazing meme token. An amazing meme token. An amazing meme token. An amazing meme token.An amazing meme token. An amazing meme token. An amazing meme token.</p>
      </div>
      <div class="col-md-5">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        <img src="/assets/image/feature/feature3.jpg" width="500px" class="img-fluid">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

        <div class="">
            <div class="px-4 my-5 text-center">
                <h1 class="display-5 fw-bold">Frequently Asked Question</h1>
            </div>
            <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h4 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" style="background-color: #F8F3DB" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h4>Is Durian amazing?</h4>
                </button>
                </h4>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p class="lead">
                        <strong>Durian is a very stinky fruit in whole.</strong> It is amazing, until the collapse appropriate classes that we use to bring. These durian control the overall appearance, as well as the showing and hiding via crypto currency. You can buy any of this with token or overriding our default assets. It is amazing token, Durian token. It's also worth you nothing that just about any token can go within the <code>Durian Token</code>, though the buying does limit overflow.
                    </p>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h4 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" style="background-color: #F8F3DB" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h4>Is Durian stinky fruit?</h4>
                </button>
                </h4>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p class="lead">
                        <strong>Durian is a very stinky fruit in whole.</strong> It is amazing, until the collapse appropriate classes that we use to bring. These durian control the overall appearance, as well as the showing and hiding via crypto currency. You can buy any of this with token or overriding our default assets. It is amazing token, Durian token. It's also worth you nothing that just about any token can go within the <code>Durian Token</code>, though the buying does limit overflow.
                    </p>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h4 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" style="background-color: #F8F3DB" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h4>Is Durian a token?</h4>
                </button>
                </h4>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p class="lead">
                        <strong>Durian is a very stinky fruit in whole.</strong> It is amazing, until the collapse appropriate classes that we use to bring. These durian control the overall appearance, as well as the showing and hiding via crypto currency. You can buy any of this with token or overriding our default assets. It is amazing token, Durian token. It's also worth you nothing that just about any token can go within the <code>Durian Token</code>, though the buying does limit overflow.
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>

        <hr class="featurette-divider">
  </div><!-- /.container -->

    </main>

    <footer class="text-muted py-5">
        <?php include('include/footer.php') ?>
    </footer>

    <?php include('include/foot.php') ?>
  </body>
</html>

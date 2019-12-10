<template>
  <!-- Carousel -->
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/1.jpg" alt="First slide" />
        <!-- Static Header -->
        <div class="header-text">
          <div class="col-md-12 text-center">
            <h2>Welcome to Us !</h2>
            <br />
            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
            <br />
          </div>
        </div>
        <!-- /header-text -->
      </div>
      <div class="item">
        <img src="images/2.jpg" alt="Second slide" />
        <!-- Static Header -->
        <div class="header-text">
          <div class="col-md-12 text-center">
            <h2>Sed diam nonumy eirmod tempor invidunt</h2>
            <br />
            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
            <br />
          </div>
        </div>
        <!-- /header-text -->
      </div>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
  <!-- /carousel -->
  <!-- Header -->

  <!-- /Back To Top -->
</template>
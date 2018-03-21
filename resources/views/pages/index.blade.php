@extends('layouts.app')

@section('content')
  <div id="page-top">
    <!-- Navigation -->
    <a class="menu-toggle rounded" href="#">
      <i class="fa fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
          <a class="js-scroll-trigger" href="#page-top">Start Bootstrap</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#page-top">Home</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#about">About</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#services">Services</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#portfolio">Portfolio</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#contact">Contact</a>
        </li>
      </ul>
    </nav>

    <!-- Header -->
    <header class="masthead d-flex">
      <div class="container text-center my-auto">
        <h1 class="mb-1" style="color: #ffffff">Travel Cost</h1>


        <h3 class="mb-5">
          <em style="color: #ffffff">Estimate the budget of your trip according to your travel style.</em>
        </h3>
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="/search">Calculate</a>
      </div>
      <div class="overlay"></div>
    </header>

    <!-- About -->
    <section class="content-section bg-light" id="about">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h2>Travelanture is the perfect guide for your next trip!</h2>
            <p class="lead mb-5">The Travelanture ecosystem will be evolving into a complete guide for backpacking in Asia!</p>
            <a class="btn btn-dark btn-xl js-scroll-trigger" href="http://travelanture.com">Visit the Blog</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Services -->
    <section class="content-section bg-primary text-white text-center" id="services">
      <div class="container">
        <div class="content-section-heading">
          <h3 class="text-secondary mb-0">Travelanture Ecosystem</h3>
          <h2 class="mb-5">Coming Soon...</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-screen-smartphone"></i>
            </span>
            <h4>
              <strong>Mobile App</strong>
            </h4>
            <p class="text-faded mb-0">Your travel companion in your pocket.</p>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-location-pin"></i>
            </span>
            <h4>
              <strong>City based Calculator</strong>
            </h4>
            <p class="text-faded mb-0">Prepare budget based on the cities you'll visit.</p>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-map"></i>
            </span>
            <h4>
              <strong>Travel Planning</strong>
            </h4>
            <p class="text-faded mb-0">Get personalised travel planning.</p>
          </div>
          <div class="col-lg-3 col-md-6">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-magic-wand"></i>
            </span>
            <h4>
              <strong>and more...</strong>
            </h4>
            <p class="text-faded mb-0">There's a lot for travelanture to grow, stick around...</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Callout -->
    <section class="callout">
      <div class="container text-center">
        <h2 class="mx-auto mb-5" style="color: #ffffff">Help
          <em>Travel Cost</em>
         	get better!</h2>
        <a class="btn btn-primary btn-xl" href="https://goo.gl/forms/WMBWcQq1bcBGF84D3">Contribute!</a>
      </div>
    </section>

    <!-- Portfolio -->
    <section class="content-section" id="portfolio">
      <div class="container">
        <div class="content-section-heading text-center">
          <h3 class="text-secondary mb-0">Portfolio</h3>
          <h2 class="mb-5">Planned Projects</h2>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Travelanture</h2>
                  <p class="mb-0">A travel companion ecosystem focused on backpacking around Asia!</p>
                </span>
              </span>
              <img class="img-fluid" src="img/portfolio-1.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Languages</h2>
                  <p class="mb-0">A small step in making an individual a global citizen!</p>
                </span>
              </span>
              <img class="img-fluid" src="img/portfolio-2.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>History</h2>
                  <p class="mb-0">A dive into less explored historical and archeological marvels!</p>
                </span>
              </span>
              <img class="img-fluid" src="img/portfolio-3.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>More</h2>
                  <p class="mb-0">There are endless ways in which we can give back to this world.</p>
                </span>
              </span>
              <img class="img-fluid" src="img/portfolio-4.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action -->
    <section class="content-section bg-primary text-white" id="con">
      <div class="container text-center">
        <h2 class="mb-4">There's more to travelanture</h2>
        <a href="https://www.quora.com/profile/Vipul-Kumar-109" class="btn btn-xl btn-light mr-4">Find me on Quora!</a>
        <a href="mailto:travelanture@gmail.com?Subject=Through%20Travel%20Cost" class="btn btn-xl btn-dark">Connect via Email!</a>
      </div>
    </section>
</div>

@endsection
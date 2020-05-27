<section class="carousel-container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img srcset="@asset('images/slider/slide-1/home-slides@0.25x.jpg') 640w,
                      @asset('images/slider/slide-1/home-slides@0.5x.jpg') 1280w,
                      @asset('images/slider/slide-1/home-slides@0.75x.jpg') 1920w,
                      @asset('images/slider/slide-1/home-slides.jpg') 2560w"
                      sizes="(min-width: 1921px) 2560px,
                              (min-width: 1281px) 1920px,
                              (min-width: 641px) 1280px,
                              640px"
                      src="@asset('images/slider/slide-1/home-slides@0.75x.jpg')"
          alt="Let’s make the internet safe for kids slide">
        <div class="carousel-caption">
          <div class="row align-items-center">
            <div class="col-3">
              <img class="img-fluid" srcset="@asset('images/slider-logos/slide-logo-1/slider-logo@0.25x.png') 127w,
                      @asset('images/slider-logos/slider-logo-1/slider-logo@0.5x.png') 254w,
                      @asset('images/slider-logos/slider-logo-1/slider-logo@0.75x.png') 380w,
                      @asset('images/slider-logos/slider-logo-1/slider-logo.png') 507w"
                      sizes="(min-width: 1921px) 507px,
                              (min-width: 1200px) 380px,
                              (min-width: 576px) 254px,
                              127px"
                      src="@asset('images/slider-logos/slider-logo-1/slider-logo@0.75x.png')"
                      alt="Let’s make the internet safe for kids slide">
            </div>
            <div class="col-9">
              <h1 class="font-weight-bold text-left ml-3">Let’s make the internet safe for kids.</h1>
            </div>
          </div>

        </div>
      </div>

      <div class="carousel-item">
        <img srcset="@asset('images/slider/slide-2/home-slides@0.25x.jpg') 640w,
                      @asset('images/slider/slide-2/home-slides@0.5x.jpg') 1280w,
                      @asset('images/slider/slide-2/home-slides@0.75x.jpg') 1920w,
                      @asset('images/slider/slide-2/home-slides.jpg') 2560w"
                      sizes="(min-width: 1921px) 2560px,
                              (min-width: 1281px) 1920px,
                              (min-width: 641px) 1280px,
                              640px"
                      src="@asset('images/slider/slide-2/home-slides@0.75x.jpg')"
          alt="Help stop the online sexual abuse and exploitation of children slide">
        <div class="carousel-caption">
          <div class="row align-items-center">
            <div class="col-3">
              <img class="img-fluid" srcset="@asset('images/slider-logos/slider-logo-2/slider-logo@0.25x.png') 127w,
              @asset('images/slider-logos/slider-logo-2/slider-logo@0.5x.png') 254w,
              @asset('images/slider-logos/slider-logo-2/slider-logo@0.75x.png') 380w,
              @asset('images/slider-logos/slider-logo-2/slider-logo.png') 507w"
              sizes="(min-width: 1921px) 507px,
                      (min-width: 1200px) 380px,
                      (min-width: 576px) 254px,
                      127px"
              src="@asset('images/slider-logos/slider-logo-2/slider-logo@0.75x.png')"
              alt="Let’s make the internet safe for kids slide">
            </div>
            <div class="col-9">
              <h1 class="font-weight-bold text-left ml-3">Help stop the online sexual abuse and exploitation of children.</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
</section>

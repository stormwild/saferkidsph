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
        <img class="d-block w-100" srcset="@asset('images/slider/slide-1/home-slides-1@0.25x.jpg') 640w,
                      @asset('images/slider/slide-1/home-slides-1@0.5x.jpg') 1280w,
                      @asset('images/slider/slide-1/home-slides-1@0.75x.jpg') 1920w,
                      @asset('images/slider/slide-1/home-slides-1.jpg') 2560w" sizes="(min-width: 1921px) 2560px,
                              (min-width: 1281px) 1920px,
                              (min-width: 641px) 1280px,
                              640px" src="@asset('images/slider/slide-1/home-slides-1@0.75x.jpg')"
          alt="Let’s make the internet safe for kids slide">
        <div class="carousel-caption">
          <div class="row align-items-center">
            <div class="col-3">
              <img class="img-fluid" srcset="@asset('images/slider-logos/slider-logo-1/slider-logo-1@0.25x.png') 127w,
                      @asset('images/slider-logos/slider-logo-1/slider-logo-1@0.5x.png') 254w,
                      @asset('images/slider-logos/slider-logo-1/slider-logo-1@0.75x.png') 380w,
                      @asset('images/slider-logos/slider-logo-1/slider-logo-1.png') 507w" sizes="(min-width: 1921px) 507px,
                              (min-width: 1200px) 380px,
                              (min-width: 576px) 254px,
                              127px" src="@asset('images/slider-logos/slider-logo-1/slider-logo-1@0.75x.png')"
                alt="Let’s make the internet safe for kids slide">
            </div>
            <div class="col-9">
              <h1 class="caption-title font-weight-bold text-left ml-3">Let’s make the internet safe for kids.</h1>
            </div>
          </div>

        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" srcset="@asset('images/slider/slide-2/home-slides-2@0.25x.jpg') 640w,
                      @asset('images/slider/slide-2/home-slides-2@0.5x.jpg') 1280w,
                      @asset('images/slider/slide-2/home-slides-2@0.75x.jpg') 1920w,
                      @asset('images/slider/slide-2/home-slides-2.jpg') 2560w" sizes="(min-width: 1921px) 2560px,
                              (min-width: 1281px) 1920px,
                              (min-width: 641px) 1280px,
                              640px" src="@asset('images/slider/slide-2/home-slides-2@0.75x.jpg')"
          alt="Help stop the online sexual abuse and exploitation of children slide">
        <div class="carousel-caption">
          <div class="row align-items-center">
            <div class="col-3">
              <img class="img-fluid" srcset="@asset('images/slider-logos/slider-logo-2/slider-logo-2@0.25x.png') 127w,
                      @asset('images/slider-logos/slider-logo-2/slider-logo-2@0.5x.png') 254w,
                      @asset('images/slider-logos/slider-logo-2/slider-logo-2@0.75x.png') 380w,
                      @asset('images/slider-logos/slider-logo-2/slider-logo-2.png') 507w" sizes="(min-width: 1921px) 507px,
                              (min-width: 1200px) 380px,
                              (min-width: 576px) 254px,
                              127px" src="@asset('images/slider-logos/slider-logo-2/slider-logo-2@0.75x.png')"
                alt="Let’s make the internet safe for kids slide">
            </div>
            <div class="col-9">
              <h1 class="caption-title font-weight-bold text-left ml-3">Help stop the online sexual abuse and exploitation of
                children.</h1>
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

@include('static.happening')

<section class="section-home-action">
  <section class="section-header container">
    <div class="row">
      <div class="col">
        <h1>You can help stop the online sexual abuse
          and exploitation of Filipino children.</h1>
          <hr class="my-4 hr-orange-short">
      </div>
    </div>
  </section>
  <section class="section-body">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-5">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title text-center">Take Action</h3>
              <ul class="card-list mb-5">
                <li class="card-list-check">Be the voice of the children who need help.</li>

                <li class="card-list-check">Teach children how to stay safe online.</li>

                <li class="card-list-check">Demand accountability of government. <br>
                  Sign the petition now.</li>

                <li class="card-list-check">Stay safe online.</li>

                <li class="card-list-check">Follow SaferKidsPH on social media
                  and share our content.</li>
              </ul>
              <p class="text-center"><a href="" class="btn btn-primary rounded-0">Follow us on Facebook</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-5 d-flex">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title text-center">Report</h3>
              <p class="card-text">
                To report cases of online child sexual abuse and exploitation, call:
              </p>
              <ul class="card-list">
                <li>
                  <h5>PNP Aleng Pulis Hotline:</h5>
                  <p>(+63) 919 777 7377</p></li>

                <li><h5>Action Against Human Trafficking: 1343 for Metro Manila</h5>
                  <p>(02) 1343 for outside Metro Manila</p>
                  </li>

                <li><h5>Bantay Bata 163:</h5>
                  <p>163</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>

<section class="section-home-donate">
  <section class="section-body">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-5">
          <div class="card">
            <img class="card-img" src="@asset('images/donate-bg-photo-assets/donate-bg-photo@0.75x.jpg')" alt="Donate bg photo">
            <div class="card-img-overlay text-center d-flex flex-column justify-content-around">
              <h3 class="card-title">Donate</h3>
              <img class="donate-svg" src="@asset('images/icons/various/hello.svg')" alt="Hello svg image">
              <p class="card-text">With your donation, you can help rescue and protect children from online abuse.</p>
              <p class="card-text"><a href="" class="btn btn-primary rounded-0">Donate Now</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-5">
          <div class="card">
            <img class="card-img" src="@asset('images/safe-bg-photo-assets/safe-bg-photo@0.75x.jpg')" alt="Donate bg photo">
            <div class="card-img-overlay d-flex flex-column justify-content-around">
              <h3 class="card-title text-center">Keep your children safe online</h3>
              <p class="text-center"><a href="" class="btn btn-primary rounded-0">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>

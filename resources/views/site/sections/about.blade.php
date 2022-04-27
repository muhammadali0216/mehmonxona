@isset ($about)
    
    <!-- ======= About Section ======= -->
    <section class="section-about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 position-relative">
            <div class="about-img-box">
              <img src="/assets/img/about.jpg" alt="" class="img-fluid">
            </div>
            <div class="sinse-box">
              <h3 class="sinse-title">FAR Dunyo 
                <span></span>
                <br> Baraka 2022
              </h3>
              <p>Art & Creative</p>
            </div>
          </div>
          <div class="col-md-12 section-t8 position-relative">
            <div class="row">
                  <div class="col-md-6 col-lg-5">
                    <img src="assets/img/{{ $about->photo }}" alt="" class="img-fluid">
                  </div>
                  {{-- <div class="col-lg-2  d-none d-lg-block position-relative">
                    <div class="title-vertical d-flex justify-content-start">
                      <span>EstateAgency Exclusive Property</span>
                    </div>
                  </div> --}}
                  <div class="col-md-6 col-lg-5 section-md-t3">
                  <div class="title-box-d">
                    <h3 class="title-d" style="text-align: center">
                      {{ $about->{'title'.app::getLocale()} }}
                    </h3>
                  </div>
                  <p class="color-text-a">
                    {{ $about->{'description'.app::getLocale()} }}
                  </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endif
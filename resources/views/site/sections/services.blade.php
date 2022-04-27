@isset ($services)
        <!-- ======= Services Section ======= -->
        <section class="section-services section-t8">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="title-wrap d-flex justify-content-between">
                  <div class="title-box">
                    <h2 class="title-a">{{ __('words.services') }}</h2>
                  </div>
                </div>
              </div>
            </div>            
            <div class="row">
              @foreach ($services as $servis)
                <div class="col-md-4">
                  <div class="card-box-c foo">
                    <div class="card-header-c d-flex">
                      <div class="card-box-ico" >
                      <img style="width: 100%;"  src="/assets/img/{{ $servis->photo }}" alt="Services-Photo"> 
                      </div>
                      <div class="card-title-c align-self-center">
                        <h4 class="title-c">{{ $servis->{'title'.app::getLocale()} }}</h4>
                      </div>
                    </div>
                    <div class="card-body-c">
                      <p class="content-c">
                        {{ $servis->{'description'.app::getLocale()} }}
                      </p>
                    </div>
                    {{-- <div class="card-footer-c">
                      <a href="#" class="link-c link-icon">Batafsil
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div> --}}
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </section><!-- End Services Section -->
@endif
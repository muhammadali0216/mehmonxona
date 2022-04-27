@isset($rooms)
      <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative" >
    <div class="swiper-wrapper">
      @foreach ($rooms as $room)
          @php
              $photo=$room->photos['0']
          @endphp  
           
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/{{$photo->photos}})">
        <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
            <div class="table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="intro-body">
                      <h1 class="intro-title mb-4 ">
                        <span class="color-b">{{ $room->number }}</span> - {{ __('words.room') }}
                        <br> {{ $room->{'title'.\App::getLocale()} }}
                      </h1>
                      <p class="intro-subtitle intro-price">
                        <a href="#"><span class="price-a">{{ $room->price }} | So'm</span></a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
      </div>
    <div class="swiper-pagination"></div>
  </div><!-- End Intro Section -->
@endif
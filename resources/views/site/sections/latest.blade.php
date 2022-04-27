@isset($rooms)
  
    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">{{ __('words.rooms') }}</h2>
              </div>
              <div class="title-link">
                <a href="{{ route('property') }}">{{ __('words.all') }}
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div id="property-carousel" class="swiper">
          <div class="swiper-wrapper">
            @foreach ($rooms as $room)
                  @php
                    $photos=$room->photos[0]
                  @endphp
            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="/assets/img/{{ $photos->photos }}" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="{{ route('property-single', $room->id) }}">{{ $room->number }} - {{__('words.room')}}
                          <br /> {{ $room->title.\App::getLocale() }}</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">{{ $room->price }}| So'm</span>
                      </div>
                      <a href="{{ route('property-single', $id=$room->id) }}" class="link-a">{{__('words.more')}}
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        @foreach ($room->category as $item)
                            <li>
                          <h4 class="card-info-title">{{ $item->category->{'name'.\App::getLocale()} }}</h4>
                          <span>{{ $item->{'name'.\App::getLocale()} }}</span>
                        </li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->
            @endforeach
          </div>
        </div>
      <div class="propery-carousel-pagination carousel-pagination"></div>
    </section><!-- End Latest Properties Section -->
@endif
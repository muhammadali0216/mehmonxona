<!-- ======= Property Single ======= -->
<section class="property-single nav-arrow-b">
  <div style="text-align: center">
     @if (\Session::has('rooms'))
              @php
                $xabar=session('rooms')
              @endphp 
              <h4 style="color: red">
                Kechirasiz ushbu xona <br>
                @foreach ($xabar as $x)
                    {{$x->forstday. ' kundan ' .$x->lastday.' kungacha,' }}
                @endforeach
                <br>
                 band qilingan.
              </h4>
      @elseif(\Session::has('message'))
              <h3 style="color: rgb(32, 184, 32)">{{ session('message') }}</h3>
      @endif
    </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 py-5 ">
        <div id="property-single-carousel" class="swiper">
          <div class="swiper-wrapper">
            @foreach ($room->photos as $photo)
            <div class="carousel-item-b swiper-slide">
              <img src="/assets/img/{{ $photo->photos }}" class="img-fluid">
            </div>
            @endforeach
          </div>
        </div>
        <div class="property-single-carousel-pagination carousel-pagination"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="row justify-content-between ">
          <div class="">
            <div class="">
              <div class="row justify-content-center text-center" >
                <div  class="xona-informatsiya-row ">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">{{ $room['title'.\App::getLocale()] }}</h3>
                    </div>
                  </div>
                  <div class="property-description">
                    <p class=" description color-text-a text-center" style="padding: 0 25%"  >
                       {{ $room->{'body'.app::getLocale()} }}
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="yonma-yon">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-cash">So'm</span>
                </div>
                <div class="card-title-c align-self-center">
                  <h5 class="title-c">{{ $room->price }}</h5>
                </div>
              </div>
              <div class="property-summary">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="sarlavxa">
                      <div class="title-box-d section-t4">
                        <h3 class="title-d">{{ __('words.and') }}</h3>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="xona-malumot">
                  <div class="summary-list">
                    <ul class="list">
                      <li class="d-flex justify-content-between">
                        <strong>{{__('words.room')}} ID:</strong>
                        <span>{{ $room->id }}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>{{__('woords.location')}}:</strong>
                        <span>Farg'ona, A.Navoiy 36</span>
                      </li>
                      @foreach ($room->category as $item)
                      <li class="d-flex justify-content-between">
                        <strong>{{ $item->category->{'name'.app::getLocale()} }}:</strong>
                        <span>{{ $item->{'name'.app::getLocale()} }}</span>
                      </li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="col-md-10 offset-md-1">
        <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-video-tab" data-bs-toggle="pill" href="#pills-video" role="tab"
              aria-controls="pills-video" aria-selected="true">Video</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-plans-tab" data-bs-toggle="pill" href="#pills-plans" role="tab"
              aria-controls="pills-plans" aria-selected="false">{{ __('words.plan') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-map-tab" data-bs-toggle="pill" href="#pills-map" role="tab"
              aria-controls="pills-map" aria-selected="false">{{ __('words.location') }}</a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
            <iframe src="https://player.vimeo.com/video/73221098" width="100%" height="460" frameborder="0"
              webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
          <div class="tab-pane fade" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
            <img src="/assets/img/plan2.jpg" alt="" class="img-fluid">
          </div>
          <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48629.00973693082!2d71.71870349329981!3d40.37975262388162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bb83431937abc5%3A0xcfa4d876b34e7bbc!2z0KTQtdGA0LPQsNC90LAsINCj0LfQsdC10LrQuNGB0YLQsNC9!5e0!3m2!1sru!2s!4v1650278436187!5m2!1sru!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="row section-t3">
          <div class="col-sm-12">
            <div class="title-box-d">
              <h3 class="title-j" style="font-weight: 600; font-size: 2rem;" >{{__('words.section')}} </h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <img src="/assets/img/about-1.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="property-agent">
              <h4 class="title-agent">{{__('words.instruction')}}</h4>
              <p class="color-text-a" >
                {{__('words.istructionText')}}
              </p>
              <ul class="list-unstyled">
                <li class="d-flex justify-content-between">
                  <strong>Phone:</strong>
                  <span class="color-text-a">{{ $contact->phone }}</span>
                </li>
                <li class="d-flex justify-content-between">
                  <strong>Mobile:</strong>
                  <span class="color-text-a">+998 71 234 56 78</span>
                </li>
                <li class="d-flex justify-content-between">
                  <strong>Email:</strong>
                  <span class="color-text-a">{{ $contact->email}}</span>
                </li>
              </ul>
              <div class="socials-a">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="bi bi-facebook" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="bi bi-twitter" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="bi bi-instagram" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="bi bi-linkedin" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <div class="property-contact">
              <form class="form-a" action="{{ route('messageStore') }}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-md-12 mb-1">
                    <div class="form-group">
                      <input type="text" name="room" class="form-control form-control-lg form-control-a" 
                        value="{{ $room->number }}" >
                    </div>
                  </div>
                  <div class="col-md-12 mb-1">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-lg form-control-a" name="name"
                        placeholder="Name *" required>
                    </div>
                  </div>
                  <div class="col-md-12 mb-1">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-lg form-control-a" name="surname"
                        placeholder="Surname *" required>
                    </div>
                  </div>
                  <div class="col-md-12 mb-1">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-lg form-control-a" name="pasport"
                        placeholder="Pasport Numbers *" required>
                    </div>
                  </div>
                  <div class="col-md-12 mb-1">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-lg form-control-a" name="phone"
                        placeholder="Phone Number *" required>
                    </div>
                  </div>
                  <div class="col-md-12 mb-1">
                    <div class="form-group">
                      от<input type="date" class="form-control form-control-lg form-control-a" name="forstday" required>
                      до<input type="date" class="form-control form-control-lg form-control-a" name="lastday" required>
                    </div>
                  </div>
                  <div class="col-md-12 mt-3">
                    <button type="submit" class="btn btn-a">{{ __('words.send') }}</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Property Single-->
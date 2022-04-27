@if ($rooms and $categories)
      <!-- ======= Property Grid ======= -->
  <section class="property-grid grid">
    <div class="container">
      <div class="row justify-content-end py-5">
        <div class="col-md-5">
          <!--checkbox-->
             @foreach($categories as $category)
              <form action="{{ route('property')}}">
                  @foreach($category->items as $item)
                    <div style="margin: 10px; display: inline-block;">
                      <label for="">{{ $item->{'name'.\App::getLocale()} }}</label>
                      <input type="checkbox" name="category[]" value="{{ $item->id }}">
                    </div>
                  @endforeach
                  <button  class="btn btn-outline-success" > {{ __('words.filter') }}</button>
              </form>
              @endforeach
        </div>
      </div>
      <div class="row">
        @foreach ($rooms as $room)
          <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                @php
                $photo=$room->photos[0]
                @endphp
                <img src="assets/img/{{ $photo->photos }}" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="{{ route('property-single', $room->id) }}">{{ $room->{'title'.app::getLocale()} }}</a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">{{ $room->price }} | So'm</span>
                    </div>
                    <a href="{{ route('property-single', $room->id) }}" class="link-a">{{__('words.more')}}
                      <span class="bi bi-chevron-right"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      @foreach ($room->category as $item)
                      <li>
                        <h4 class="card-info-title">{{ $item->category->{'name'.app::getLocale()} }}</h4>
                        <span>{{ $item->{'name'.app::getLocale()} }}</span>
                      </li>
                      @endforeach

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <div class="row">
        <div class="col-sm-12">
          <nav class="pagination-a">
            {{$rooms->links('site.sections.paginate')}}
          </nav>
        </div>
      </div>
    </div>
  </section><!-- End Property Grid Single-->
@endif
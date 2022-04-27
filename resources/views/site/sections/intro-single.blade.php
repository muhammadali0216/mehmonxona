    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row" >
          <div class="col-md-12 col-lg-8" style=" border-left: 3px solid #2eca6a;">
            <div class="title-single-box">
              <h1 class="title-single" style="padding: 0;   
              ">{{ $h1 }}</h1>
              <span class="color-text-a">{{ $span }}</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb d-none d-lg-flex">
                <li class="breadcrumb-item">
                  <a  href="{{ route('home') }}">{{ __('words.home') }}</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  {{ $layout }}
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single -->
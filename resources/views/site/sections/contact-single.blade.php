
    <!-- ======= Contact Single ======= -->
    <section class="contact">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="contact-map box">
                <div id="map" class="contact-map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48629.00973693082!2d71.71870349329981!3d40.37975262388162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bb83431937abc5%3A0xcfa4d876b34e7bbc!2z0KTQtdGA0LPQsNC90LAsINCj0LfQsdC10LrQuNGB0YLQsNC9!5e0!3m2!1sru!2s!4v1650278436187!5m2!1sru!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
            <div class="col-sm-12 section-t8">
              <div class="row">
                <div class="col-md-7">
                  <form action="{{ route('comentStore') }}" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <div class="form-group">
                          <input type="text" name="phone" class="form-control form-control-lg form-control-a" placeholder="Tel Number" required>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <div class="form-group">
                          <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Email" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Name" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <textarea  class="form-control" name="description" cols="45" rows="8" placeholder="Massage..." required></textarea>
                        </div>
                      </div>
                      <div class="col-md-12 my-3">
                        {{-- <div class="mb-3">
                          <div class="loading">Loading</div>
                          <div class="error-message"></div> 
                          <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div> --}}
                      </div>
  
                      <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-a">{{ __('words.send') }}</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-md-5 section-md-t3">
                  <div class="icon-box section-b2">
                    <div class="icon-box-icon">
                      <span class="bi bi-envelope"></span>
                    </div>
                    <div class="icon-box-content table-cell">
                      <div class="icon-box-title">
                        <h4 class="icon-title"> {{ __('words.address') }} </h4>
                      </div> 
                      @isset ($contact)
                        <div class="icon-box-content">
                          <p class="mb-1">Email.
                            <span class="color-a">{{$contact->email}}</span>
                          </p>
                          <p class="mb-1">Tel.
                            <span class="color-a">{{ $contact->phone }}</span>
                          </p>
                        </div>  
                      @endif
                    </div>
                  </div>
                  <div class="icon-box section-b2">
                    <div class="icon-box-icon">
                      <span class="bi bi-geo-alt"></span>
                    </div>
                    <div class="icon-box-content table-cell">
                      <div class="icon-box-title">
                        <h4 class="icon-title">{{ __('words.location') }}</h4>
                      </div>
                      <div class="icon-box-content">
                        <p class="mb-1">
                         Farg'ona shaxar
                          <br> AL Farg'oyin 36.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="icon-box">
                    <div class="icon-box-icon">
                      <span class="bi bi-share"></span>
                    </div>
                    <div class="icon-box-content table-cell">
                      <div class="icon-box-title">
                        <h4 class="icon-title">{{__('words.messenjers')}}</h4>
                      </div>
                      <div class="icon-box-content">
                        <div class="socials-footer">
                          <ul class="list-inline">
                            <li class="list-inline-item">
                              <a href="#" class="link-one">
                                <i class="bi bi-facebook" aria-hidden="true"></i>
                              </a>
                            </li>
                            <li class="list-inline-item">
                              <a href="#" class="link-one">
                                <i class="bi bi-twitter" aria-hidden="true"></i>
                              </a>
                            </li>
                            <li class="list-inline-item">
                              <a href="#" class="link-one">
                                <i class="bi bi-instagram" aria-hidden="true"></i>
                              </a>
                            </li>
                            <li class="list-inline-item">
                              <a href="#" class="link-one">
                                <i class="bi bi-linkedin" aria-hidden="true"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End Contact Single-->
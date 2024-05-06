<!-- Register Modal -->
<div class="modal fade" id="registerModalCenter" tabindex="-1" role="dialog" aria-labelledby="registerModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="loginModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body">
        <div class="row justify-content-between mr-2 py-2 mb-4">
            <img class="col-auto" src="{{ asset('img/ak_logo2.png') }}" style="height:35px">
            <button type="button" class="close col-auto" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <h4 class="pt-2 text-muted mb-1">Welcome!</h4>
        <!-- <h6 class="font-weight-light text-muted">Happy to see you!</h6> -->
        <h6 class="font-weight-light text-muted">We are happy to have you on board!</h6>
        <form class="py-4" action="{{ route('register') }}" method="POST" id="registration_form">
            @csrf
            <div class="row">
                <div class="col-md-6 form-group mb-4">
                    <label for="exampleInputEmail">First Name</label>
                    <input type="text" name="first_name" id="registration_first_name" class="form-control" placeholder="Ex : John">
                    <small class="text-danger" id="registration_first_name_error"></small>
                </div>
                <div class="col-md-6 form-group mb-4">
                    <label for="exampleInputEmail">Last Name</label>
                    <input type="text" name="last_name" id="registration_last_name" class="form-control" placeholder="Ex : Doe">
                    <small class="text-danger" id="registration_last_name_error"></small>
                </div>
            </div>

            <div class="form-group mb-4">
                <label for="exampleInputEmail">Email</label>
                <input type="email" name="email" id="registration_email" class="form-control" placeholder="Ex : john@example.com">
                <small class="text-danger" id="registration_email_error"></small>
            </div>

            <div class="form-group mb-4">
                <label for="exampleInputEmail">Phone</label>
                <div class="row">
                    <div class="col-4 col-md-3 pr-0">
                        <select class="form-control" name="country_code">
                            @foreach( $country_codes as $code=>$emoji )
                            <option value="{{ $code }}" {{ $code == 91 ? 'selected':'' }}>{{ $emoji.' '.$code }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-8 col-md-9 pl-0">
                        <input type="text" name="phone" id="registration_phone" class="form-control" placeholder="Ex : 9998887779">
                    </div>
                </div>
                <small class="text-danger" id="registration_phone_error"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword">Password</label>
                <input type="password" name="password" class="form-control" id="registration_password" placeholder="Password">
                <small class="text-danger" id="registration_password_error"></small>
            </div>

            <div class="form-group my-4">
                <button type="submit" class="btn btn-block btn-info font-weight-medium">Register</button>
            </div>
            <div class="form-group my-4 row">
                <div class="col-6">
                <button type="button" class="col-12 btn text-white btn-facebook">
                    <i class="mdi mdi-facebook"></i>
                    Facebook
                </button>
                </div>
                <div class="col-6">
                <button type="button" class="col-12 btn text-white btn-google">
                    <i class="mdi mdi-google"></i>
                    Google
                </button>
                </div>
            </div>
            <div class="text-center mt-4 font-weight-light">
                Already have an account? <a class="text-primary open-login-modal cursor-pointer">Login</a>
            </div>
        </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
<!-- Login Modal end -->

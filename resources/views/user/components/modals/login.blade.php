<!-- Login Modal -->
<div class="modal fade" id="loginModalCenter" tabindex="-1" role="dialog" aria-labelledby="loginModalCenterTitle" aria-hidden="true">
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
        <h4 class="pt-2 text-muted mb-1">Welcome back!</h4>
        <h6 class="font-weight-light text-muted">Happy to see you again!</h6>
        <form class="py-4" action="{{ route('login') }}" method="POST" id="login_form">
            @csrf
            <div class="alert alert-danger d-none" id="invalid_credentials" role="alert"></div>

            <div class="form-group mb-4">
                <label for="exampleInputEmail">Email</label>
                <input type="email" name="email" class="form-control" id="login_email" placeholder="Ex : john@example.com">
                <small class="text-danger" id="login_email_error"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword">Password</label>
                <input type="password" name="password" class="form-control" id="login_password" placeholder="Password">
                <small class="text-danger" id="login_password_error"></small>
            </div>
            <div class="my-4 d-flex justify-content-between align-items-center">
                <div class="form-check">
                    <label class="form-check-label text-muted">
                        <input type="checkbox" name="remember" class="form-check-input">
                        Keep me signed in
                    </label>
                </div>
                <a href="{{ route('password.request') }}" class="auth-link text-black">Forgot password?</a>
            </div>
            <div class="my-4">
                <button type="submit" class="btn btn-block btn-info font-weight-medium">LOGIN</button>
            </div>
            <div class="my-4 row">
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
                Don't have an account? <a class="text-primary open-register-modal cursor-pointer">Create</a>
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

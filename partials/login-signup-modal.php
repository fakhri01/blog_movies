<div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header pb-0 border-bottom-0">
        <ul class="nav nav-tabs w-100" id="authTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active w-100" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab">Login</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link w-100" id="signup-tab" data-bs-toggle="tab" data-bs-target="#signup" type="button" role="tab">Sign Up</button>
          </li>
        </ul>
      </div>
      <div class="modal-body">
        <div class="tab-content" id="authTabContent">
          <!-- Login Form -->
          <div class="tab-pane fade show active" id="login" role="tabpanel">
            <form method="POST">
              <div class="mb-3">
                <label for="loginUser" class="form-label">Username</label>
                <input type="text" name="user" class="form-control" id="loginUser">
              </div>
              <div class="mb-3">
                <label for="loginPassword" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="loginPassword">
              </div>
              <input type="submit" name="login" class="btn btn-primary w-100" value="Login" />
            </form>
          </div>

          <!-- Sign Up Form -->
          <div class="tab-pane fade" id="signup" role="tabpanel">
            <form method="POST">
              <div class="mb-3">
                <label for="signupUser" class="form-label">Username</label>
                <input type="text" name="user" class="form-control" id="signupUser">
              </div>
              <div class="mb-3">
                <label for="signupPassword" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="signupPassword">
              </div>
              <div class="mb-3">
                <label for="signupConfirm" class="form-label">Confirm Password</label>
                <input type="password" name="cpassword" class="form-control" id="signupConfirm">
              </div>
              <input type="submit" name="signup" class="btn btn-success w-100" value="Sign Up" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
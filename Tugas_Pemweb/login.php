<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="./assets/css/login-style.css" />
    <!-- Bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="./assets/images/favicon.ico" />

    <title>National Geographic | Login</title>
  </head>
  <body>
    <header>
      <nav class="nav fixed-top">
        <img src="assets/images/logo.png" width="10%"alt="Logo" />
      </nav>
    </header>
    <section
      class="vh-100"
      style="
        background: url('assets/images/N.jpg');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
      "
    >
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div
              class="card"
              style="
                backdrop-filter: blur(7px) saturate(169%);
                -webkit-backdrop-filter: blur(7px) saturate(169%);
                background-color: rgba(255, 255, 255, 0.43);
                border-radius: 12px;
                border: 1px solid rgba(255, 255, 255, 0.125);
              "
            >
              <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                  <img
                    height=""
                    src="./assets/images/thumb.png"
                    alt="login form"
                    class="img-fluid"
                    style="border-radius: 1rem 0 0 1rem"
                  />
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                  <div class="card-body p-4 p-lg-5 text-black">
                    <form method="post" action="aksi_login.php">
                      <div class="d-flex align-items-center mb-3 pb-1">
                        <i
                          class="fas fa-cubes fa-2x me-3"
                          style="color: #ff6219"
                        ></i>
                        <span class="h1 fw-bold mb-0"
                          ><img
                            src="./assets/images/logoalt.png"
                            width="40%"
                            bg
                            alt=""
                        /></span>
                      </div>

                      <h5
                        class="fw-normal mb-3 pb-3"
                        style="letter-spacing: 1px"
                      >
                        Sign into your account
                      </h5>

                      <div class="form-outline mb-4">
                        <input
                          type="email"
                          name="email"
                          id="form2Example17"
                          class="form-control form-control-lg"
                        />
                        <label class="form-label" for="form2Example17"
                          >Email address</label
                        >
                      </div>

                      <div class="form-outline mb-4">
                        <input
                          type="password"
                          name="password"
                          id="form2Example27"
                          class="form-control form-control-lg"
                        />
                        <label class="form-label" for="form2Example27"
                          >Password</label
                        >
                      </div>

                      <div class="pt-1 mb-4">
                        <button
                          class="btn btn-dark btn-lg btn-block"
                          type="submit"
                        >
                          Login
                        </button>
                      </div>

                      <a class="small text-muted" href="#!">Forgot password?</a>
                      <p class="mb-5 pb-lg-2" style="color: #393f81">
                        Don't have an account?
                        <a href="#!" style="color: #393f81">Register here</a>
                      </p>
                      <a href="#!" class="small text-muted">Terms of use.</a>
                      <a href="#!" class="small text-muted">Privacy policy</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

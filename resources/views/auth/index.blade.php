<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>PPDB AL AMIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- owl.carousel css -->
    <link rel="stylesheet" href="/assets/libs/owl.carousel/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="/assets/libs/owl.carousel/assets/owl.theme.default.min.css">

    <!-- Bootstrap Css -->
    <link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
  </head>

  <body class="auth-body-bg">
      
    <div>
      <div class="container-fluid p-0">
        <div class="row g-0">
            
          <div class="col-xl-9">
            <div class="auth-full-bg pt-lg-5 p-4">
                <div class="w-100">
                    <div class="bg-overlay"></div>
                    <div class="d-flex h-100 flex-column">

                        <div class="p-4 mt-auto">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <div class="text-center">
                                        
                                        <h4 class="mb-3"><i class="bx bxs-quote-alt-left text-primary h1 align-middle me-3"></i><span class="text-primary">5k</span>+ Satisfied clients</h4>
                                        
                                        <div dir="ltr">
                                            <div class="owl-carousel owl-theme auth-review-carousel" id="auth-review-carousel">
                                                <div class="item">
                                                    <div class="py-3">
                                                        <p class="font-size-16 mb-4">" Fantastic theme with a ton of options. If you just want the HTML to integrate with your project, then this is the package. You can find the files in the 'dist' folder...no need to install git and all the other stuff the documentation talks about. "</p>

                                                        <div>
                                                            <h4 class="font-size-16 text-primary">Abs1981</h4>
                                                            <p class="font-size-14 mb-0">- Skote User</p>
                                                        </div>
                                                    </div>
                                                    
                                                </div>

                                                <div class="item">
                                                    <div class="py-3">
                                                        <p class="font-size-16 mb-4">" If Every Vendor on Envato are as supportive as Themesbrand, Development with be a nice experience. You guys are Wonderful. Keep us the good work. "</p>

                                                        <div>
                                                            <h4 class="font-size-16 text-primary">nezerious</h4>
                                                            <p class="font-size-14 mb-0">- Skote User</p>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>

          {{-- TODO::Form --}}
          <div class="col-xl-3">
            <div class="auth-full-page-content p-md-5 p-4">
              <div class="w-100">

                <div class="d-flex flex-column h-100">
                  <div class="mb-4 mb-md-5">
                      <a href="index.html" class="d-block auth-logo">
                          <img src="/assets/images/logo-dark.png" alt="" height="18" class="auth-logo-dark">
                          <img src="/assets/images/logo-light.png" alt="" height="18" class="auth-logo-light">
                      </a>
                  </div>
                  <div class="my-auto">
                      <div>
                          <h5 class="text-primary">Welcome Back !</h5>
                          <p class="text-muted">Sign in to continue to AMIN.</p>
                      </div>
                      <div class="mt-4">
                          <form action="/administrator" method="post">
                              @csrf
                              <div class="mb-3">
                                  <label for="username" class="form-label">Username</label>
                                  <input type="text" class="form-control @error('fullname') is-invalid @enderror" id="username" placeholder="Enter username" autocomplete="off" name="username">
                                  @error('username')
                                      <div class="invalid-feedback">{{ $message }}</div>
                                  @enderror
                              </div>
                              <div class="mb-3">
                                  <label class="form-label">Password</label>
                                  <div class="input-group auth-pass-inputgroup">
                                      <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" name="password">
                                      <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                  </div>
                              </div>
                              <div class="mt-4 d-grid">
                                  <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                              </div>
                          </form>
                          <div class="mt-5 text-center">
                              <p>Don't have an account ? <a href="tel:+6285352594403" class="fw-medium text-primary"> Contact Admin </a> </p>
                          </div>
                      </div>
                  </div>

                  {{-- TODO::Footer --}}
                  <div class="mt-4 mt-md-5 text-center">
                      <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> PPDB Al Amin. Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://daniziadulmarwan.github.io" target="_blank">Zeiteim Tech</a></p>
                  </div>
                  {{-- TODO::Footer --}}

                </div>
              </div>
            </div>
          </div>
          {{-- TODO::Form --}}

        </div>
      </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="/assets/libs/jquery/jquery.min.js"></script>
    <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/assets/libs/node-waves/waves.min.js"></script>

    <!-- owl.carousel js -->
    <script src="/assets/libs/owl.carousel/owl.carousel.min.js"></script>

    <!-- auth-2-carousel init -->
    <script src="/assets/js/pages/auth-2-carousel.init.js"></script>
    
    <!-- App js -->
    <script src="/assets/js/app.js"></script>

  </body>
</html>

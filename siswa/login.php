<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
    <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
  <body class="text-center">
        <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-5 text-black">
                <!-- <div class=""id="telkom">
                    <h1>SMK TELKOM</h1>
                    <style>

                    </style>
                </div> -->
                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                <form style="width: 23rem;" action="proses_login.php" method="post">

                    <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Semangat Pagi Moklet</h3>

                    <div class="form-outline mb-4">
                    <input type="text" name="nama" id="floatingInput" class="form-control form-control-lg" require="required" >
                    <label class="form-label" for="floatigInput ">Username</label>
                    </div>

                    <div class="form-outline mb-4">
                    <input type="password" name="password" class="form-control form-control-lg" required="required">
                    <label class="form-label" for="floatingInput">Password</label>
                    </div>

                    <div class="pt-1 mb-4">
                    <button class="btn btn-danger btn-lg btn-block" type="submit">Login</button>
                    </div>

                    <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
                    <p>Info lebih lanjut ! <a href="https://smktelkom-mlg.sch.id/" class="link-info">SMK TELKOM</a></p>

                </form>

                </div>

            </div>
            <div class="col-sm-7 px-0 d-none d-sm-block">
                <img src="/PHP/spp/foto/telkom1.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
            </div>
        </div>
        </section>
    </main>

  </body>
</html>
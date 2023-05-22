<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lobook</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hina+Mincho&display=swap" rel="stylesheet">

        <!-- style -->
        <link rel="stylesheet" href="{{ mix('css/app.css')}}">

        <!-- script -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <!-- Bootstrap5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

        <!-- jQuery -->
        {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> --}}
        {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> --}}
    </head>
    <body class="body-bg col-10 mx-auto">
        <!-- header -->
        <header class="header-bg">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="container">
                <a class="navbar-brand text-lg" href="#">Lobook</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div>
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">Sing up</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">Log in</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </header>
        <!-- カルーセル -->
        <div id="carouselExampleControls" class="carousel slide w-75 mx-auto" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/top1.png" class="d-block w-100 h-75" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/images/top2.png" class="d-block w-100 h-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- メイン -->
        <main>
            <div class="col-8 mx-auto text-center my-5">
                <div class="h1">Lobook</div>
                <p>Lobook（ラブック）は、お気に入りの本を紹介していく掲示板です。</p>
            </div>


            <!-- 一覧 -->


        </main>
        <!-- footer -->
        <footer></footer>
    </body>
</html>

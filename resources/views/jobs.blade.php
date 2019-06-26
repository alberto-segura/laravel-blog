<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jobs</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        <!-- Semantyc-UI Scripts -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="{{ asset('js/semantic.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
    </head>
    <body>
      <div class="ui container">
        <div class="ui menu">
          <div class="header item">Company Logo</div>
          <a class="item">About Us</a>
          <a class="item">Jobs</a>
          <a class="item">Locations</a>
          <div class="right menu">
            <div class="item">
              <div class="ui icon input">
                <input type="text" placeholder="Search...">
                <i class="search link icon"></i>
              </div>
            </div>
            @if (Route::has('login'))
              @auth
                <a class="ui item" href="{{ url('/home') }}">Home</a>
              @else
                  <a class="ui item" href="{{ route('login') }}">Login</a>
                  @if (Route::has('register'))
                  <a class="ui item" href="{{ route('register') }}">Register</a>
                  @endif
              @endauth
            @else
              <a class="ui item">Login</a>
            @endif
          </div>
        </div>
      </div>


        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
            @endif

            <div class="content">
                <div class="wrapper">
                  <div class="ui search">
                    <div class="ui icon input">
                      <input class="prompt" type="text" placeholder="Search countries...">
                      <i class="search icon"></i>
                    </div>
                    <div class="results"></div>
                  </div>

                </div>
            </div>
        </div>
    </body>
</html>

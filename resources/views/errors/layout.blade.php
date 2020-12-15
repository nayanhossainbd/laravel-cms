<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/assets/bootstrap.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('css/assets/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('css/assets/fontawesome.css') }}" rel="stylesheet" />
      <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 100;
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

            .content {
                text-align: center;
            }

            .title {
                font-size: 36px;
                padding: 20px;
            }
            .error-page {
                margin: 20px auto 0;
                width: 600px;
            }
            .error-page > .headline {
                    float: left;
                    font-size: 100px;
                    font-weight: 300;
                }
            .error-page > .error-content {
                    display: block;
                    margin-left: 190px;
                }
                .pt-8{padding-top:5rem}
        </style>
    </head>
    <body>
        <div class="content-wrapper  pt-8">
   
    <!-- Main content -->
    <section class="content  pt-8">
      <div class="error-page pt-5">
        <h2 class="headline text-danger">@yield('code')</h2>

        <div class="error-content">
          <h3><i class="fas fa-exclamation-triangle text-danger"></i> @yield('title') !</h3>

          <p>
            We will work on fixing that right away.
            Meanwhile, you may return back or try to contact us.
          </p>

         
        </div>
      </div>
      <!-- /.error-page -->

    </section>
    <!-- /.content -->
  </div>
  <script src="{{ asset('js/assets/jquery.min.js') }}"></script>
<script src="{{ asset('js/assets/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/assets/popper.min.js') }}"></script>
    </body>
</html>

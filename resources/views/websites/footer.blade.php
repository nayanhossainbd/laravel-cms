 <!-- Main Footer -->
      <footer class="main-footer">
          <!-- To the right -->
          <div class="float-right d-none d-sm-inline">
              Anything you want
          </div>
          <!-- Default to the left -->
          <strong>Copyright &copy; 2014-2020 <a href="#">AR CMS</a>.</strong> All rights reserved.
      </footer>
      </div>
      <!-- ./wrapper -->

      <!-- REQUIRED SCRIPTS -->

      <script src="{{ asset('js/assets/jquery.min.js') }}"></script>
      <script src="{{ asset('js/assets/bootstrap.min.js') }}"></script>
      <script src="{{ asset('js/assets/popper.min.js') }}"></script>
      <script src="{{ asset('js/assets/select2.full.min.js') }}"></script>
      <script src="{{ asset('js/assets/moment.min.js') }}"></script>

      <script src="{{ asset('js/assets/sweetalert2.all.min.js') }}"></script>
      <script src="{{ asset('js/adminlte.js') }}"></script>
      <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>



      <script type="text/javascript">
          $('.slider').slick({
              dots: true,
              infinite: false,
              speed: 300,
              prevArrow: '<i class="prev fas fa-arrow-left"></i>',
              nextArrow: '<i class="next fas fa-arrow-right"></i>',
              slidesToShow: 1,
              slidesToScroll: 1,
              responsive: [{
                      breakpoint: 1024,
                      settings: {
                          slidesToShow: 1,
                          slidesToScroll: 1,
                          infinite: true,
                          dots: true
                      }
                  },
                  {
                      breakpoint: 600,
                      settings: {
                          slidesToShow: 2,
                          slidesToScroll: 2
                      }
                  },
                  {
                      breakpoint: 480,
                      settings: {
                          slidesToShow: 1,
                          slidesToScroll: 1
                      }
                  }
                  // You can unslick at a given breakpoint now by adding:
                  // settings: "unslick"
                  // instead of a settings object
              ]
          });

      </script>
  </body>

  </html>

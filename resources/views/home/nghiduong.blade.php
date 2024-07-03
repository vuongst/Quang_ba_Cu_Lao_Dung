<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <link rel="stylesheet" href="css/tintuc&sukien.css">
    @include('home.homecss', ['title' => 'Nghỉ dưỡng'])
</head>

<body class="flex-wrapper">

    @include('home.header')

    @include('home.banner', ['title' => 'NGHỈ DƯỠNG', 'link' => url('/nghiduong')])

  <!-- CONTENT -->
  <div class="nghiduong-content">
    <div class="container py-md-4">
      <div class="title">
        <h2>Nghỉ dưỡng</h2>
      </div>
      <div class="container">
        <div class="container">
          <div class="selector d-flex justify-content-end my-3">
            <div class="dropdown">
              <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Tất cả
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('khachsan') }}">Khách sạn</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{ url('homestay') }}">Homestay</a></li>
              </ul>
            </div>
          </div>

          <div class="">
            <div class="row justify-content-center">
              @foreach ($post as $post)
              <div class="col-4 card border-0 p-0 me-lg-4 me-md-4 mb-4">
                
                  <div class="backgroundEffect"></div>
                  <div class="pic">
                    <img src="/postimage/{{$post->main_image}}" alt="Image" class="img-fluid">
                    <div class="date"> <span class="day">{{$post->created_at->format('d')}}</span> <span class="month">Th {{$post->created_at->format('m')}}</span> <span
                        class="year">{{$post->created_at->format('Y')}}</span>
                    </div>
                  </div>
                  <div class="content">
                    <p class="h-1 mt-4">{{$post->title}}</p>
                    <p class="text-muted mt-3">Địa chỉ: {{$post->location}}</p>
                    <div class="d-flex align-items-center justify-content-between mt-3 pb-3">
                      <div class="btn btn-primary">
                        <a href="{{ url('location_details', $post->id) }}" class="text-decoration-none">Xem thêm</a>
                        <span class="fas fa-arrow-right"></span>
                      </div>
                    </div>
                  </div>
                
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END CONTENT -->


  <!-- FOOTER -->
  <div class="footer">
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #23242a;">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
          <!--Grid row-->
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold">
                WEBSITE QUẢNG BÁ DU LỊCH CÙ LAO DUNG
              </h5>
              <p>Bản quyền thuộc về </p>
              <p>Đơn vị thực hiện: </p>
              <p>Chịu trách nhiệm nội dung: </p>
              <p>Giấy phép số: </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">thông tin liên hệ</h6>
              <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
              <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
              <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
              <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">theo dõi</h6>

              <!-- Facebook -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!" role="button"><i
                  class="fab fa-facebook-f"></i></a>

              <!-- Twitter -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!" role="button"><i
                  class="fab fa-twitter"></i></a>

              <!-- Google -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!" role="button"><i
                  class="fab fa-google"></i></a>

              <!-- Instagram -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button"><i
                  class="fab fa-instagram"></i></a>

              <!-- Linkedin -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!" role="button"><i
                  class="fab fa-linkedin-in"></i></a>
              <!-- Github -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!" role="button"><i
                  class="fab fa-github"></i></a>
            </div>
          </div>
          <!--Grid row-->
        </section>
        <!-- Section: Links -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright:
        <a class="text-white" href="#">123456789</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </div>
  <!-- END FOOTER -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</body>

<script>

</script>

</html>
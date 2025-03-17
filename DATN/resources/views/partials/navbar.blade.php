<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
      <a class="navbar-brand" href="{{ asset('index.html') }}">
        <img src="{{ asset('asset/images/logo.png') }}" class="logo-top" alt="">
      </a>
      <div class="desk-menu collapse navbar-collapse justify-content-md-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{ asset('index.html') }}">TRANG CHỦ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ asset('product.html') }}">BỘ SƯU TẬP</a>
          </li>
          <li class="nav-item lisanpham">
            <a class="nav-link" href="{{ asset('detailproduct.html') }}">SẢN PHẨM
              <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </a>
            <ul class="sub_menu">
              <li><a href="{{ asset('detailproduct.html') }}" title="Sản phẩm - Style 1">Sản phẩm - Style 1</a></li>
              <li><a href="{{ asset('detailproduct.html') }}" title="Sản phẩm - Style 2">Sản phẩm - Style 2</a></li>
              <li><a href="{{ asset('detailproduct.html') }}" title="Sản phẩm - Style 3">Sản phẩm - Style 3</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ asset('introduce.html') }}">GIỚI THIỆU</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ asset('blog.html') }}">BLOG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ asset('contact.html') }}">LIÊN HỆ</a>
          </li>
        </ul>
      </div>

      <div class="icon-ol">
        <a style="color: #272727" href="{{ asset('signin.html') }}">
          <i class="fas fa-user-alt"></i>
        </a>
        <a href="" class="" uk-toggle="target: #offcanvas-flip">
          <i class="fas fa-search" style="color: black"></i>
        </a>
        <a style="color: #272727" href="" uk-toggle="target: #offcanvas-flip2">
          <i class="fas fa-shopping-cart"></i>
        </a>
        <button class="navbar-toggler" type="button" uk-toggle="target: #offcanvas-flip1" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </nav>

  <!-- Owl-Carousel -->
  <div class="owl-carousel owl-theme owl-carousel-setting">
    <div class="item"><img src="./images/slideshow_1.jpg" class="d-block w-100" alt="..."></div>
  </div>

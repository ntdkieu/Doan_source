<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>My Page</title>
  <style>
    body {
      padding: 0;
      margin: 0;
    }

    .footer {
      background-color: #006738;
      color: white;
    }
    .footer p {
      font-size: 13px;
    }

    .footer .container {
      margin: 0 auto;
    }


    .footer .wrap-column {
      display: grid;
      grid-template-columns: repeat(1, 1fr);
      padding: 40px 0px;
    }
    
    .footer .wrap-column .column { 
      padding-right: 30px;
    }
    @media screen and (max-width: 767px) {
      .title {
      margin-left: 15px;
    }
    .footer .wrap-column {
      padding: 0 10px;
    }
  }

    @media screen and (min-width: 767px) {
      .footer .wrap-column {
        grid-template-columns: repeat(2, 1fr);
        margin: 0 auto;
      }
      
    }

    @media screen and (min-width: 1200px) {
      .footer .wrap-column {
        grid-template-columns: repeat(4, 1fr);
      }
    }

    @media screen and (min-width: 992px) {
      .footer .container {
        width: 960px;
        padding: 0;
      }
    }

    @media screen and (min-width: 1120px) {
      .footer .container {
        width: 1080px;
        margin-left: auto;
        margin-right: auto;
      }
    }

    @media screen and (min-width: 1280px) {
      .footer .container {
        width: 1200px;
        margin-left: auto;
        margin-right: auto;
      }
    }

    /* Additional styles */
    .footer ul {
      padding-left: 0;
    }

    .footer li {
      list-style: none;
    }

    .footer a {
      color: white;
      /* Updated link color */
      text-decoration: none;
    }
    .title {
      text-align: left;
    padding-bottom: 10px;
    margin-bottom: 15px;
    font-weight: normal;
    border-bottom: 1px solid;
    display: inline-block;
    }

    .title h2 {
      margin: 0;
      padding-top: 20px;
      color: #daa969;
      text-transform: uppercase;
    }


    /* Swiper styles */
    .wrap-swiper {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 10px;
    }

    .swiper-slide {
      background-color: transparent;
      padding: 20px;
      text-align: center;
    }

    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 0;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
</head>

<body>
  <!-- Add your page content here -->

  <footer class="footer">
    <div class="container">
      <div class="title">
        <h2>ĐỐI TÁC</h2>
      </div>

      <div class="wrap-swiper swiper">
        <div class="swiper-wrapper">
          
          <div class="swiper-slide">
            <a href="#">
              <img src="https://www.dtvietnam.com/storage/pagedata/100303/img/upload/doitac/logo3-01.jpg" alt="Slide 2">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <img src="	https://www.dtvietnam.com/storage/pagedata/100303/img/upload/doitac/nam%20duoc.png" alt="Slide 3">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <img src="https://www.dtvietnam.com/storage/pagedata/100303/img/upload/doitac/tiki.png" alt="Slide 4">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <img src="https://www.dtvietnam.com/storage/pagedata/100303/img/upload/doitac/concung-01.jpg" alt="Slide 5">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <img src="https://www.dtvietnam.com/storage/pagedata/100303/img/upload/doitac/logo%20ava.png" alt="Slide 6">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <img src="https://www.dtvietnam.com/storage/pagedata/100303/img/upload/doitac/logo1-01.jpg" alt="Slide 7">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <img src="https://www.dtvietnam.com/storage/pagedata/100303/img/upload/doitac/z3874387028290_0da5ec17836b356afbf2459c0c0fda81.jpg" alt="Slide 8">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <img src="https://www.dtvietnam.com/storage/pagedata/100303/img/upload/doitac/vin.png" alt="Slide 9">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <img src="https://www.dtvietnam.com/storage/pagedata/100303/img/upload/doitac/logo201-01.jpg" alt="Slide 10">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <img src="https://www.dtvietnam.com/storage/pagedata/100303/img/upload/doitac/ali.png" alt="Slide 11">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <img src="https://www.dtvietnam.com/storage/pagedata/100303/img/upload/doitac/z3874387037990_52100ece489ec29b184653edd204e43c.jpg" alt="Slide 12">
            </a>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
      <div class="wrap-column">
        <div class="column">
          <h5>CÔNG TY CỔ PHẦN DT FOOD</h5>
          <p>GPKD Số 4201794039 do Sở KH và ĐT TP Nha Trang cấp ngày 23/05/2018</p>
          <p>Địa chỉ: Thôn Lương Hòa , X. Vĩnh Lương , Tp. Nha Trang, Khánh Hòa</p>
          <p>Chuyên sản xuất, phân phối và kinh doanh thương mại các loại thực phẩm, mỹ phẩm làm đẹp từ nguyên liệu thiên nhiên – đặc sản của Việt Nam.</p>
          <p>© Bản quyền thuộc về DTGROUP</p>
        </div>
        <div class="column">
        <h5>CHÍNH SÁCH</h5>
              <ul class="check-list list-cat-product">
                  <li><a href="http://dtvietnam.com/chinh-sach-thanh-toan">Chính sách thanh toán</a></li>
                  <li><a href="http://dtvietnam.com/chinh-sach-xu-ly-khieu-nai">Chính sách khiếu nại</a></li>
                  <li><a href="http://dtvietnam.com/chinh-sach-van-chuyen">Chính sách vận chuyển</a></li>
                  <li><a href="http://dtvietnam.com/chinh-sach-doi-tra-hoan-tien">Chính sách đổi trả và hoàn tiền</a>
                  </li>
                  <li><a href="http://dtvietnam.com/chinh-sach-bao-hanh">Chính sách bảo hành</a></li>
                  <li><a href="http://dtvietnam.com/chinh-sach-kiem-hang">Chính sách kiểm hàng</a></li>
                  <li><a href="http://dtvietnam.com/chinh-sach-bao-mat-thong-tin">Chính sách bảo mật thông tin</a>
                  </li>
              </ul>
              <a href="http://online.gov.vn/Home/WebDetails/100511?AspxAutoDetectCookieSupport=1" target="_blank"><img
                      src="http://online.gov.vn/Content/EndUser/LogoCCDVSaleNoti/logoSaleNoti.png"
                      alt="Đăng ký bộ công thương" width="168px"></a>
        </div>
        <div class="column">
          <h5>SẢN PHẨM</h5>
          <ul class="check-list list-cat-product">
                  <li>Nước Yến Sào</li>
                  <li>Yến Sào Tươi</li>
                  <li>Yến Sào Tinh Chế</li>
                  <li>Yến Sào Chưng Sẵn</li>
                  <li>Rong Nho Muối</li>
                  <li>Rong Nho Tươi</li>
              </ul>
        </div>
        <div class="column">
           <h5>LIÊN HỆ</h5>
              <div class="form-group">
                  <div class=""><em class="fa fa-map-marker">&nbsp;</em></div>
                  <div class="col-xs-12 col-sm-11">
                      <address>316 Quốc Lộ 1A, Lương Hòa, Vĩnh Lương, Tp. Nha Trang, Khánh Hòa&nbsp;</address>
                  </div>
              </div>
              <div class="form-group">
                  <div class=""><em class="fa-solid fa-envelope">&nbsp;</em></div>
                  <div class="col-xs-12 col-sm-11">
                      <p><a href="mailto:info@dtvietnam.com">info@dtvietnam.com</a>&nbsp;</p>
                  </div>
              </div>
              <div class="form-group">
                  <div class=""><em class="fa fa-phone">&nbsp;</em></div>
                  <div class="col-xs-11 col-sm-11">
                      <p>0258.222.6999 - 0833.831.183</p>
                  </div>
              </div>
              <h3>FOLLOW US</h3>
              <ul class="icon-follow-us">
                  <li><a href="https://www.facebook.com/yensaoDTNest.official" target="_blank"><span
                              class="fa-brands fa-facebook"> &nbsp;</span></a></li>
                  <li><a href="https://www.youtube.com/channel/UCt8TK-9kaPddi2qPybr-ctw" target="_blank"><span
                              class="fa-brands fa-youtube"> &nbsp;</span></a></li>
              </ul>
          </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper('.wrap-swiper', {
      slidesPerView: 5,
      spaceBetween: 0,
      loop: true,
      autoplay: {
        delay: 5000,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        320: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 4,
        },
        1200: {
          slidesPerView: 5,
        }
      }
    });
  </script>
</body>

</html>
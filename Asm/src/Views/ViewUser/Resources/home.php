<head>
  <title>Trang chủ | FPT Polytechnic</title>
</head>
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed">
  <div id="app">
    <div id="kt_header_mobile" class="kt-header-mobile kt-header-mobile--fixed">
      <div class="kt-header-mobile__logo">
        <a href=""><img alt="Logo" src="../../../Public/img/logo.png" width="135" /></a>
      </div>
      <div class="kt-header-mobile__toolbar">
        <button id="kt_aside_mobile_toggler" class="kt-header-mobile__toggler kt-header-mobile__toggler--left">
          <span></span>
        </button>
        <button id="kt_header_mobile_topbar_toggler" class="kt-header-mobile__topbar-toggler">
          <i class="flaticon-more"></i>
        </button>
      </div>
    </div>
    <div class="kt-grid kt-grid--hor kt-grid--root">
      <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <?
        include 'src/View/ViewUser/Component/saidbar.php'
        ?>
        <div id="kt_wrapper" class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper">
          <?
          include 'src/View/ViewUser/Component/header.php'
          ?>
          <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">
            <div class="row">
              <div class="col-xl-12">
                <div class="kt-portlet">
                  <div class="kt-portlet__body kt-portlet__body--fit">
                    <div class="row row-no-padding row-col-separator-xl">
                      <div class="col-md-12 col-lg-3 col-xl-3" style="border-right: 1px solid rgb(235, 237, 242)">
                        <div id="show-newsletter-student" class="kt-widget1" style="padding: 16px; height: 60vh">
                          <h3>
                            <a href="/danh-muc?category_id=1" class="kt-link kt-font-boldest">Thông tin học tập</a>
                          </h3>
                          <div class="kt-widget1__item" style="display: block">
                            <div class="kt-widget1__info">
                              <h6 class="kt-widget1__title">
                                <a href="#" class="kt-link" style="color: red; font-weight: bold">
                                  🥇 THÔNG BÁO KẾ HOẠCH THI LẠI KỲ SPRING
                                  2024
                                </a>
                              </h6>
                            </div>
                          </div>
                          <div type="button">
                            <a href="#" class="btn btn-primary">Xem Thêm</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 col-lg-3 col-xl-3" style="border-right: 1px solid rgb(235, 237, 242)">
                        <div id="show-newsletter-student" class="kt-widget1" style="padding: 16px; height: 60vh">
                          <h3>
                            <a href="#" class="kt-link kt-font-boldest">Thông tin hoạt động</a>
                          </h3>
                          <div class="kt-widget1__item" style="display: block">
                            <div class="kt-widget1__info">
                              <h6 class="kt-widget1__title">
                                <a href="#" class="kt-link" style="color: red; font-weight: bold">
                                  🥇 [QHDN] BẢNG CẬP NHẬT THÔNG TIN VIỆC LÀM
                                  2024
                                </a>
                              </h6>
                            </div>
                          </div>
                          <div type="button">
                            <a href="#" class="btn btn-primary">Xem Thêm</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 col-lg-3 col-xl-3" style="border-right: 1px solid rgb(235, 237, 242)">
                        <div id="show-newsletter-student" class="kt-widget1" style="padding: 16px; height: 60vh">
                          <h3>
                            <a href="#" class="kt-link kt-font-boldest">Thông tin học phí</a>
                          </h3>
                          <div class="kt-widget1__item" style="display: block">
                            <div class="kt-widget1__info">
                              <h6 class="kt-widget1__title">
                                <a href="#" class="kt-link" style="color: red; font-weight: bold">
                                  🥉 THÔNG BÁO THU HỌC PHÍ FALL 2022
                                </a>
                              </h6>
                            </div>
                          </div>
                          <div type="button">
                            <a href="#" class="btn btn-primary">Xem Thêm</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 col-lg-3 col-xl-3" style="border-right: 1px solid rgb(235, 237, 242)">
                        <div id="show-newsletter-student" class="kt-widget1" style="padding: 16px; height: 60vh">
                          <h3>
                            <a href="#" class="kt-link kt-font-boldest">Thông tin việc làm</a>
                          </h3>
                          <div class="kt-widget1__item" style="display: block">
                            <div class="kt-widget1__info">
                              <h6 class="kt-widget1__title">
                                <a href="#" class="kt-link" style="color: red; font-weight: bold">
                                  🥈 Nơi tiếp nhận hồ sơ ứng tuyển của sinh
                                  viên tìm việc làm
                                </a>
                              </h6>
                            </div>
                          </div>
                          <div type="button">
                            <a href="#" class="btn btn-primary">Xem Thêm</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- thông báo -->
            <button type="button" data-toggle="modal" data-target="#showNotiForStudent" class="d-none btn btn-primary show-noti-student">
            </button>
            <div id="showNotiForStudent" tabindex="-1" role="dialog" aria-labelledby="showNotiForStudentLabel" class="modal fade" aria-hidden="true" style="display: none">
              <div role="document" class="modal-dialog modal-xl popup-modal-dialog">
                <div class="modal-content popup-modal-content">
                  <div class="modal-header text-center border-bottom-0 pb-1 text-light">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="closes">X</button>
                  </div>
                  <div class="modal-body popup-modal-body">
                    <h4 class="popup-header text-center mb-4">
                      <span><strong>THÔNG BÁO</strong></span>
                    </h4>
                    <h3 class="popup-header text-center mb-4">
                      THÔNG BÁO TRIỂN KHAI ƯU ĐÃI PHÍ HỌC LẠI CHO SINH VIÊN
                    </h3>
                    <div class="popup-today_timenow-created_by">
                      <p>
                        <!-- nội dung tb ở đây-->
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- thông báo -->
          </div>
        </div>
        <!-- footer -->
        <?
        include 'src/View/ViewUser/Component/footer.php'
        ?>
        <!-- footer -->
      </div>
    </div>
  </div>
  </div>
  <!-- thông báo nổi-->
  <!-- <script>
    $(".otp-term-modal").click();
    $(".is-valid-phone-all-modal").click();
    $(".show-noti-student").click();
  </script> -->
</body>
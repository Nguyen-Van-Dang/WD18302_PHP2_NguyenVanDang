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
          <div id="kt_content" class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
            <div id="kt_subheader" class="kt-subheader kt-grid__item">
              <div class="kt-container kt-container--fluid">
                <div class="kt-subheader__main">
                  <h3 class="kt-subheader__title">Xếp loại</h3> <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                  <div class="kt-subheader__breadcrumbs"><a href="https://ap.poly.edu.vn/sinh-vien" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a> <span class="kt-subheader__breadcrumbs-separator"></span> <a href="javascript:void(0)" class="kt-subheader__breadcrumbs-link">Điểm</a></div>
                </div>
              </div>
            </div>
            <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">
              <div class="kt-portlet">
                <div class="kt-portlet__body">
                  <!-- <form method="get" action="">
                    <div class="form-group"><label for="term_id">Học kỳ</label> <select id="term_id" name="term_id" onchange="this.form.submit()" class="form-control">
                        <option value="58" selected="selected">Spring 2024</option>
                        <option value="53">Fall 2023</option>
                        <option value="52">Summer 2023</option>
                        <option value="51">Spring 2023</option>
                        <option value="50">Fall 2022</option>
                        <option value="40">Summer 2022</option>
                        <option value="39">Spring 2022</option>
                        <option value="38">Fall 2021</option>
                        <option value="37">Summer 2021</option>
                        <option value="36">Spring 2021</option>
                        <option value="35">Fall 2020</option>
                        <option value="34">Summer 2020</option>
                        <option value="33">Spring 2020</option>
                        <option value="32">Fall 2019</option>
                        <option value="29">Summer 2019</option>
                        <option value="28">Spring 2019</option>
                        <option value="25">Fall 2018</option>
                        <option value="24">Summer 2018</option>
                      </select> <span class="form-text text-muted">Lựa chọn học kỳ để hiện thị chi tiết điểm theo kỳ</span></div>
                  </form> -->
                </div>
              </div>
              <div class="kt-portlet">
                <!-- <div class="kt-portlet__head kt-portlet__head--lg">
                  <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                      1: Lập trình PHP 2 (WEB3014) - WD18302
                    </h3>
                  </div>
                </div> -->
                <div class="table-responsive">
                  <div class="kt-portlet__body">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
                      <div class="row">
                        <div class="col-sm-6 text-left"></div>
                        <!-- <div class="col-sm-6 text-right">
                          <div class="dt-buttons btn-group"> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span>Print</span></button> <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span>Copy</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span>Excel</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span>CSV</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span>PDF</span></button> </div>
                        </div> -->
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <table class="table table-bordered table-content dataTable dtr-inline" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1325px;">
                            <thead>
                              <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 113.361px;" aria-sort="ascending" aria-label="#: activate to sort column descending">#</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 344.361px;" aria-label="Tên đầu điểm: activate to sort column ascending">Tên đầu điểm</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 252.361px;" aria-label="Trọng số: activate to sort column ascending">Trọng số</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 185.361px;" aria-label="Điểm: activate to sort column ascending">Điểm</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 227.25px;" aria-label="Ghi chú: activate to sort column ascending">Ghi chú</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr class="odd">
                                <td valign="top" colspan="5" class="dataTables_empty">Không tìm thấy dòng nào phù hợp</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr>
                                <th rowspan="1" colspan="1"></th>
                                <th colspan="2" rowspan="1">Trung bình: <span class="red">0.0</span></th>
                                <td colspan="2" rowspan="1">Trạng thái: <span class="blue">Studying</span></td>
                              </tr>
                            </tfoot>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
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
</body>
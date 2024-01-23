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
                <div id="kt_content" class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="margin-left: 15%;">
                    <!-- <div id="kt_subheader" class="kt-subheader kt-grid__item">
                        <div class="kt-container kt-container--fluid">
                            <div class="kt-subheader__main">
                                <h3 class="kt-subheader__title">Lich sử học</h3> <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                                <div class="kt-subheader__breadcrumbs"><a href="https://ap.poly.edu.vn/sinh-vien" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a> <span class="kt-subheader__breadcrumbs-separator"></span> <a href="javascript:void(0)" class="kt-subheader__breadcrumbs-link">Điểm</a></div>
                            </div>
                        </div>
                    </div> -->
                    <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">
                        <div class="kt-portlet">
                            <div class="kt-portlet__head kt-portlet__head--lg">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">
                                        Danh sách các môn đã học
                                    </h3>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <div class="kt-portlet__body">
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="row">
                                            <div class="col-sm-6 text-left"></div>
                                            <div class="col-sm-6 text-right">
                                                <div class="dt-buttons btn-group"> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span>Print</span></button> <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span>Copy</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span>Excel</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span>CSV</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span>PDF</span></button> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table class="table table-bordered table-content dataTable no-footer dtr-inline" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1326px;">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 15.3611px;" aria-sort="ascending" aria-label="#: activate to sort column descending">#</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 189.361px;" aria-label="Tên môn: activate to sort column ascending">Tên môn</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 61.3611px;" aria-label="Mã môn: activate to sort column ascending">Mã môn</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 254.361px;" aria-label="Lớp: activate to sort column ascending">Lớp</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 69.3611px;" aria-label="Số tín chỉ: activate to sort column ascending">Số tín chỉ</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 63.3611px;" aria-label="Kỳ: activate to sort column ascending">Kỳ</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 113.361px;" aria-label="Điểm trung bình: activate to sort column ascending">Điểm trung bình</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 74.3611px;" aria-label="Trạng thái: activate to sort column ascending">Trạng thái</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 120.25px;" aria-label="Tổng số buổi học: activate to sort column ascending">Tổng số buổi học</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr role="row" class="odd">
                                                            <td tabindex="0" class="sorting_1">1</td>
                                                            <td>Lập trình JavaScript nâng cao</td>
                                                            <td>WEB2062</td>
                                                            <td>WD18302</td>
                                                            <td>3</td>
                                                            <td>Spring 2024</td>
                                                            <td class="text-center">0.0</td>
                                                            <td class="text-center"><span class="text-info">Studying</span></td>
                                                            <td class="text-center">6</td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td tabindex="0" class="sorting_1">2</td>
                                                            <td>Lập trình PHP 2</td>
                                                            <td>WEB3014</td>
                                                            <td>WD18302</td>
                                                            <td>3</td>
                                                            <td>Spring 2024</td>
                                                            <td class="text-center">0.0</td>
                                                            <td class="text-center"><span class="text-info">Studying</span></td>
                                                            <td class="text-center">17</td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td tabindex="0" class="sorting_1">3</td>
                                                            <td>Tiếng Anh 2.2</td>
                                                            <td>ENT2226</td>
                                                            <td>ENT2226.03</td>
                                                            <td>3</td>
                                                            <td>Spring 2024</td>
                                                            <td class="text-center">0.0</td>
                                                            <td class="text-center"><span class="text-info">Studying</span></td>
                                                            <td class="text-center">17</td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td tabindex="0" class="sorting_1">4</td>
                                                            <td>Tiếng Anh 2.1</td>
                                                            <td>ENT2126</td>
                                                            <td>ENT2126.10</td>
                                                            <td>3</td>
                                                            <td>Fall 2023</td>
                                                            <td class="text-center">7.6</td>
                                                            <td class="text-center"><span class="text-success">Passed</span></td>
                                                            <td class="text-center">17</td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td tabindex="0" class="sorting_1">5</td>
                                                            <td>Dự án 1 (TKTW)</td>
                                                            <td>PRO1014</td>
                                                            <td>WD18306</td>
                                                            <td>3</td>
                                                            <td>Fall 2023</td>
                                                            <td class="text-center">9.5</td>
                                                            <td class="text-center"><span class="text-success">Passed</span></td>
                                                            <td class="text-center">17</td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td tabindex="0" class="sorting_1">6</td>
                                                            <td>Dự án mẫu (TKTW)</td>
                                                            <td>WEB2041</td>
                                                            <td>WD18306</td>
                                                            <td>3</td>
                                                            <td>Fall 2023</td>
                                                            <td class="text-center">9.3</td>
                                                            <td class="text-center"><span class="text-success">Passed</span></td>
                                                            <td class="text-center">6</td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td tabindex="0" class="sorting_1">7</td>
                                                            <td>Quản trị website</td>
                                                            <td>WEB1022</td>
                                                            <td>WD18302</td>
                                                            <td>3</td>
                                                            <td>Fall 2023</td>
                                                            <td class="text-center">9.2</td>
                                                            <td class="text-center"><span class="text-success">Passed</span></td>
                                                            <td class="text-center">17</td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td tabindex="0" class="sorting_1">8</td>
                                                            <td>Tiếng Anh 1.2</td>
                                                            <td>ENT1225</td>
                                                            <td>TL_EOS test_ENT1225_2023-06-23_Slot2</td>
                                                            <td>3</td>
                                                            <td>Summer 2023</td>
                                                            <td class="text-center">6.3</td>
                                                            <td class="text-center"><span class="text-success">Passed</span></td>
                                                            <td class="text-center">14</td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td tabindex="0" class="sorting_1">9</td>
                                                            <td>Tiếng Anh 1.2</td>
                                                            <td>ENT1225</td>
                                                            <td>TL_EOS test_ENT1225_2023-06-01_Slot2</td>
                                                            <td>3</td>
                                                            <td>Summer 2023</td>
                                                            <td class="text-center">2.8</td>
                                                            <td class="text-center"><span class="text-danger">Failed</span></td>
                                                            <td class="text-center">14</td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td tabindex="0" class="sorting_1">10</td>
                                                            <td>Pháp luật</td>
                                                            <td>VIE1026</td>
                                                            <td>VIE1026.02</td>
                                                            <td>2</td>
                                                            <td>Summer 2023</td>
                                                            <td class="text-center">8.2</td>
                                                            <td class="text-center"><span class="text-success">Passed</span></td>
                                                            <td class="text-center">4</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-5">
                                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Đang xem 1 đến 10 trong tổng số 27 mục</div>
                                            </div>
                                            <div class="col-sm-12 col-md-7 dataTables_pager">
                                                <div class="dataTables_length" id="DataTables_Table_0_length"><label>Xem <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                                            <option value="10">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                        </select> mục</label></div>
                                                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Trước</a></li>
                                                        <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                        <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                        <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                                        <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">Tiếp</a></li>
                                                    </ul>
                                                </div>
                                            </div>
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
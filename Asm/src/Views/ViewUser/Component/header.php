<div id="kt_header" class="kt-header kt-grid__item kt-header--fixed">
    <div id="kt_header_menu_wrapper" class="kt-header-menu-wrapper" style="opacity: 1"></div>
    <div class="kt-header__topbar">
        <a href="#" title="Đổi màu" class="kt-header__topbar-item kt-header__topbar-item--langs">
            <div class="kt-header__topbar-wrapper">
                <span class="kt-header__topbar-icon"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <path d="M12,20 C7.581722,20 4,16.418278 4,12 C4,7.581722 7.581722,4 12,4 C16.418278,4 20,7.581722 20,12 C20,16.418278 16.418278,20 12,20 Z M12,5.99999664 C8.6862915,6 6,8.6862915 6,12 C6,15.3137085 8.6862915,18 12,18.0000034 L12,5.99999664 Z" fill="#000000" fill-rule="nonzero"></path>
                        </g>
                    </svg></span>
            </div>
        </a>
        <div class="kt-header__topbar-item kt-header__topbar-item--user">
            <div data-toggle="dropdown" data-offset="0px,0px" class="kt-header__topbar-wrapper">
                <div class="kt-header__topbar-user">
                    <span class="kt-header__topbar-welcome kt-hidden-mobile">Xin chào,</span>
                    <span class="kt-header__topbar-username kt-hidden-mobile">Đặng</span>
                </div>
            </div>
            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
                <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x">
                    <div class="kt-user-card__avatar"></div>
                    <div class="kt-user-card__name" style="color: #5867dd;">Nguyễn Văn Đặng</div>
                </div>
                <div class="kt-notification">
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification">
                            <img src="src/Public/img/user.jpg" alt="" style="width: 50px; height:50px;">
                        </div>
                        <div class="kt-notification__item-details" style="padding-left: 10px;">
                            <div class="kt-notification__item-time">
                                Thông tin cá nhân
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </div>
                    </a>
                    <div class="kt-notification__custom kt-space-between">
                        <?
                        if (isset($_COOKIE['userID'])) {
                            if ($_COOKIE['role'] == 2) {
                                echo '
                                <div class="kt-notification__custom kt-space-between">
                                        <a href="index.php?pages=user&action=Logout" class="btn btn-label btn-label-brand btn-sm btn-bold">Đăng xuất</a>
                                        </div>';
                            } else {
                                echo '
                                <div class="kt-notification__custom kt-space-between">
                                <a href="index.php?pages=admin&action=Dashboard" class="btn btn-label btn-label-brand btn-sm btn-bold">Quản trị</a>
                                        <a href="index.php?pages=user&action=Logout" class="btn btn-label btn-label-brand btn-sm btn-bold">Đăng xuất</a>
                                        </div>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="kt_content" class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
    <div id="kt_subheader" class="kt-subheader kt-grid__item">
        <div class="kt-container kt-container--fluid">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">Trang chủ</h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="" class="kt-subheader__breadcrumbs-home"><ion-icon name="home-outline"></ion-icon></a>
                </div>
            </div>
        </div>
    </div>
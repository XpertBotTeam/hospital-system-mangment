<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>

    <title>Hospital Management System</title>
    <meta name="description" content="Page with empty content">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <!--begin::Fonts -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <!--end::Fonts -->

    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="{{url('/adminpanel')}}/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
          type="text/css"/>
    <!--end::Page Vendors Styles -->


    <!--begin:: Global Mandatory Vendors -->
    <link href="{{url('/adminpanel')}}/assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css"
          rel="stylesheet" type="text/css"/>
    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="{{url('/adminpanel')}}/assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css"
          rel="stylesheet"
          type="text/css"/>
    <link
        href="{{url('/adminpanel')}}/assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css"
        rel="stylesheet"
        type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css"
          rel="stylesheet"
          type="text/css"/>
    <link
        href="{{url('/adminpanel')}}/assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css"
        rel="stylesheet"
        type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css"
          rel="stylesheet" type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/quill/dist/quill.snow.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/animate.css/animate.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/toastr/build/toastr.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/dual-listbox/dist/dual-listbox.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/socicon/css/socicon.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/custom/vendors/line-awesome/css/line-awesome.css"
          rel="stylesheet" type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css"
          rel="stylesheet"
          type="text/css"/>
    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{url('/adminpanel')}}/assets/css/demo12/style.bundle.css" rel="stylesheet"
              type="text/css"/>

    <!--end::Global Theme Styles -->

    <!--begin::Custom Styles -->
    @yield('styles')
    <!--end::Custom Styles -->

    <link rel="shortcut icon" href="{{url('/adminpanel')}}/assets/media/logos/favicon.ico"/>
</head>
<!-- end::Head -->

<!-- begin::Body -->
<body
    class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">


<!-- begin:: Page -->

<!-- begin:: Header Mobile -->
<div>
    <!-- <div class="kt-header-mobile__logo">
        <a href="{{url('/adminpanel')}}">
            <img alt="Logo" src="{{url('/adminpanel')}}/assets/media/logos/logo-12.png"/>
        </a>
    </div> -->
    <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>

        <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>

        <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
    </div>
</div>
<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <!-- begin:: Aside -->
    @include('users.admin.layouts.sidebar')
    <!-- end:: Aside -->
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
            <!-- begin:: Header -->
            <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">
                <!-- begin: Header Menu -->
                <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i
                        class="la la-close"></i></button>
                <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
                    <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-tab ">
                        <ul class="kt-menu__nav ">
                            <li class="kt-menu__item " aria-haspopup="true"><a
                                    href="{{url('/adminpanel')}}"
                                    class="kt-menu__link "><span
                                        class="kt-menu__link-text">Dashboard</span></a></li>
                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
                                data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;"
                                                                                           class="kt-menu__link kt-menu__toggle"><span
                                        class="kt-menu__link-text">Components</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                    class="kt-menu__link-icon flaticon2-start-up"></i><span
                                                    class="kt-menu__link-text">Base</span><i
                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div
                                                class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/base/colors.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">State Colors</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/base/typography.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Typography</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/base/buttons.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Buttons</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/base/button-group.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Button Group</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/base/dropdown.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Dropdown</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/base/tabs/bootstrap.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Bootstrap Tabs</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/base/tabs/line.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Line Tabs</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/base/accordions.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Accordions</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/base/tables.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Tables</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/base/progress.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Progress</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/base/modal.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Modal</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/base/alerts.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Alerts</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/base/popover.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Popover</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/base/tooltip.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Tooltip</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                    class="kt-menu__link-icon flaticon2-photograph"></i><span
                                                    class="kt-menu__link-text">Custom</span><i
                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div
                                                class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/custom/badge.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Badge</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/custom/navs.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Navigations</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/custom/lists.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Lists</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/custom/notes.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Notes</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/custom/timeline.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Timeline</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/custom/media.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Media</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/custom/spinners.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Spinners</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/custom/pagination.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Pagination</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/custom/iconbox.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Iconbox</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/custom/infobox.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Infobox</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/custom/callout.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Callout</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/custom/ribbon.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Ribbon</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/custom/miscellaneous.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Miscellaneous</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                    class="kt-menu__link-icon flaticon2-lorry"></i><span
                                                    class="kt-menu__link-text">Extended</span><i
                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div
                                                class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/extended/kanban-board.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Kanban Board</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/extended/sticky-panels.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Sticky Panels</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/extended/blockui.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Block UI</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/extended/perfect-scrollbar.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Perfect Scrollbar</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/extended/treeview.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Tree View</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/extended/bootstrap-notify.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Bootstrap Notify</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/extended/toastr.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Toastr</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/extended/sweetalert2.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">SweetAlert2</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/extended/dual-listbox.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Dual Listbox</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                    class="kt-menu__link-icon flaticon2-cube-1"></i><span
                                                    class="kt-menu__link-text">Icons</span><i
                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div
                                                class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/icons/flaticon.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Flaticon</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/icons/fontawesome5.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Fontawesome 5</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/icons/lineawesome.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Lineawesome</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/icons/socicons.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Socicons</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/icons/svg.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">SVG Icons</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                    class="kt-menu__link-icon flaticon2-browser-1"></i><span
                                                    class="kt-menu__link-text">Portlets</span><i
                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div
                                                class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/portlets/base.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Base Portlets</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/portlets/advanced.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Advanced Portlets</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/portlets/tabbed.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Tabbed Portlets</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/portlets/draggable.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Draggable Portlets</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/portlets/tools.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Portlet Tools</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/portlets/sticky-head.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Sticky Head</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                    class="kt-menu__link-icon flaticon2-pie-chart-4"></i><span
                                                    class="kt-menu__link-text">Widgets</span><i
                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div
                                                class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/widgets/lists.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Lists</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/widgets/charts.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Charts</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/widgets/general.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">General</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                    class="kt-menu__link-icon flaticon2-calendar-2"></i><span
                                                    class="kt-menu__link-text">Calendar</span><i
                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div
                                                class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/calendar/basic.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Basic Calendar</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/calendar/list-view.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">List Views</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/calendar/google.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Google Calendar</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/calendar/external-events.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">External Events</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/calendar/background-events.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Background Events</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                    class="kt-menu__link-icon flaticon2-graph-1"></i><span
                                                    class="kt-menu__link-text">Charts</span><i
                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div
                                                class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">amCharts</span><i
                                                                class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div
                                                            class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/components/charts/amcharts/charts.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">amCharts Charts</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/components/charts/amcharts/stock-charts.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">amCharts Stock Charts</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/components/charts/amcharts/maps.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">amCharts Maps</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/charts/flotcharts.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Flot Charts</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/charts/google-charts.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Google Charts</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/charts/morris-charts.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Morris Charts</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                    class="kt-menu__link-icon flaticon2-location"></i><span
                                                    class="kt-menu__link-text">Maps</span><i
                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div
                                                class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/maps/google-maps.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Google Maps</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/maps/jqvmap.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">JQVMap</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                    class="kt-menu__link-icon flaticon2-cube-1"></i><span
                                                    class="kt-menu__link-text">Utils</span><i
                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div
                                                class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/utils/session-timeout.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Session Timeout</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/components/utils/idle-timer.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Idle Timer</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
                                data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;"
                                                                                           class="kt-menu__link kt-menu__toggle"><span
                                        class="kt-menu__link-text">Crud</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                    class="kt-menu__link-icon flaticon2-architecture-and-city"></i><span
                                                    class="kt-menu__link-text">Forms & Controls</span><i
                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div
                                                class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Form Controls</span><i
                                                                class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div
                                                            class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/controls/base.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Base Inputs</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/controls/input-group.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Input Groups</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/controls/checkbox.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Checkbox</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/controls/radio.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Radio</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/controls/switch.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Switch</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/controls/option.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Mega Options</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Form Widgets</span><i
                                                                class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div
                                                            class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/widgets/bootstrap-datepicker.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Datepicker</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/widgets/bootstrap-datetimepicker.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Datetimepicker</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/widgets/bootstrap-timepicker.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Timepicker</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/widgets/bootstrap-daterangepicker.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Daterangepicker</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/widgets/tagify.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Tagify</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/widgets/bootstrap-touchspin.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Touchspin</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/widgets/bootstrap-maxlength.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Maxlength</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/widgets/bootstrap-switch.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Switch</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/widgets/bootstrap-multipleselectsplitter.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Multiple Select Splitter</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/widgets/bootstrap-select.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Bootstrap Select</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/widgets/select2.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Select2</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/widgets/typeahead.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Typeahead</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Form Widgets 2</span><i
                                                                class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div
                                                            class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/widgets/nouislider.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">noUiSlider</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/widgets/form-repeater.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Form Repeater</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/widgets/ion-range-slider.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Ion Range Slider</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/widgets/input-mask.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Input Masks</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/widgets/quill.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Quill Text Editor</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/widgets/summernote.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Summernote WYSIWYG</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/widgets/bootstrap-markdown.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Markdown Editor</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/widgets/autosize.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Autosize</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/widgets/clipboard.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Clipboard</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/widgets/dropzone.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Dropzone</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/widgets/recaptcha.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Google reCaptcha</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Form Layouts</span><i
                                                                class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div
                                                            class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/layouts/default-forms.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Default Forms</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/layouts/multi-column-forms.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Multi Column Forms</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/layouts/action-bars.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Basic Action Bars</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/layouts/sticky-action-bar.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Sticky Action Bar</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Form Validation</span><i
                                                                class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div
                                                            class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/validation/states.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Validation States</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/validation/form-controls.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Form Controls</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/forms/validation/form-widgets.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Form Widgets</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                    class="kt-menu__link-icon flaticon2-browser-2"></i><span
                                                    class="kt-menu__link-text">KTDatatable</span><i
                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div
                                                class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Base</span><i
                                                                class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div
                                                            class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/metronic-datatable/base/data-local.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Local Data</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/metronic-datatable/base/data-json.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">JSON Data</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/metronic-datatable/base/data-ajax.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Ajax Data</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/metronic-datatable/base/html-table.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">HTML Table</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/metronic-datatable/base/local-sort.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Local Sort</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/metronic-datatable/base/translation.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Translation</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Advanced</span><i
                                                                class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div
                                                            class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/metronic-datatable/advanced/record-selection.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Record Selection</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/metronic-datatable/advanced/row-details.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Row Details</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/metronic-datatable/advanced/modal.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Modal Examples</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/metronic-datatable/advanced/column-rendering.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Column Rendering</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/metronic-datatable/advanced/column-width.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Column Width</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/metronic-datatable/advanced/vertical.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Vertical Scrolling</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Child Datatables</span><i
                                                                class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div
                                                            class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/metronic-datatable/child/data-local.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Local Data</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/metronic-datatable/child/data-ajax.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Remote Data</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">API</span><i
                                                                class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div
                                                            class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/metronic-datatable/api/methods.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">API Methods</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/metronic-datatable/api/events.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Events</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                    class="kt-menu__link-icon flaticon2-list-3"></i><span
                                                    class="kt-menu__link-text">Datatables.net</span><i
                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div
                                                class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Basic</span><i
                                                                class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div
                                                            class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/datatables/basic/basic.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Basic Tables</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/datatables/basic/scrollable.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Scrollable Tables</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/datatables/basic/headers.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Complex Headers</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/datatables/basic/paginations.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Pagination Options</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Advanced</span><i
                                                                class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div
                                                            class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/datatables/advanced/column-rendering.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Column Rendering</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/datatables/advanced/multiple-controls.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Multiple Controls</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/datatables/advanced/column-visibility.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Column Visibility</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/datatables/advanced/row-callback.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Row Callback</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/datatables/advanced/row-grouping.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Row Grouping</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/datatables/advanced/footer-callback.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Footer Callback</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Data sources</span><i
                                                                class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div
                                                            class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/datatables/data-sources/html.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">HTML</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/datatables/data-sources/javascript.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Javascript</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/datatables/data-sources/ajax-client-side.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Ajax Client-side</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/datatables/data-sources/ajax-server-side.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Ajax Server-side</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Search Options</span><i
                                                                class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div
                                                            class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/datatables/search-options/column-search.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Column Search</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/datatables/search-options/advanced-search.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Advanced Search</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Extensions</span><i
                                                                class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div
                                                            class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/datatables/extensions/buttons.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Buttons</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/datatables/extensions/colreorder.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">ColReorder</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/datatables/extensions/keytable.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">KeyTable</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/datatables/extensions/responsive.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Responsive</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/datatables/extensions/rowgroup.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">RowGroup</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/datatables/extensions/rowreorder.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">RowReorder</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/datatables/extensions/scroller.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Scroller</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/crud/datatables/extensions/select.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">Select</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                    class="kt-menu__link-icon flaticon2-list-3"></i><span
                                                    class="kt-menu__link-text">File Upload</span><i
                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div
                                                class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/crud/file-upload/dropzonejs.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">DropzoneJS</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/crud/file-upload/uppy.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Uppy</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
                                data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;"
                                                                                           class="kt-menu__link kt-menu__toggle"><span
                                        class="kt-menu__link-text">Apps</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                    class="kt-menu__link-icon flaticon2-cube-1"></i><span
                                                    class="kt-menu__link-text">Users</span><i
                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div
                                                class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/user/list-default.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">List - Default</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/user/list-datatable.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">List - Datatable</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/user/list-columns-1.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">List - Columns 1</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/user/list-columns-2.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">List - Columns 2</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/user/add-user.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Add User</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/user/edit-user.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Edit User</span></a></li>
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Profile 1</span><i
                                                                class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div
                                                            class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/custom/apps/user/profile-1/overview.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                            class="kt-menu__link-text">Overview</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/custom/apps/user/profile-1/personal-information.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                            class="kt-menu__link-text">Personal Information</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/custom/apps/user/profile-1/account-information.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                            class="kt-menu__link-text">Account Information</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/custom/apps/user/profile-1/change-password.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                            class="kt-menu__link-text">Change Password</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                        href="{{url('/adminpanel')}}/demo3/custom/apps/user/profile-1/email-settings.html"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                            class="kt-menu__link-text">Email Settings</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/user/profile-2.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Profile 2</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/user/profile-3.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Profile 3</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/user/profile-4.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Profile 4</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                    class="kt-menu__link-icon flaticon2-writing"></i><span
                                                    class="kt-menu__link-text">Contacts</span><i
                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div
                                                class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/contacts/list-columns.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">List - Columns</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/contacts/list-datatable.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">List - Datatable</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/contacts/view-contact.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">View Contact</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/contacts/add-contact.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Add Contact</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/contacts/edit-cotact.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Edit Contact</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                    class="kt-menu__link-icon flaticon2-writing"></i><span
                                                    class="kt-menu__link-text">Chat</span><i
                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div
                                                class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/chat/private.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Private</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/chat/group.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Group</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/chat/popup.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Popup</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                    class="kt-menu__link-icon flaticon2-telegram-logo"></i><span
                                                    class="kt-menu__link-text">Projects</span><i
                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div
                                                class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/projects/list-columns-1.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">List - Columns 1</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/projects/list-columns-2.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">List - Columns 2</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/projects/list-columns-3.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">List - Columns 3</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/projects/list-columns-4.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">List - Columns 4</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/projects/list-datatable.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">List - Datatable</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/projects/view-project.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">View Project</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/projects/add-project.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Add Project</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/projects/edit-project.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Edit Project</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                    class="kt-menu__link-icon flaticon2-rocket"></i><span
                                                    class="kt-menu__link-text">Support Center</span><i
                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div
                                                class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/support-center/home-1.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Home 1</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/support-center/home-2.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Home 2</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/support-center/faq-1.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">FAQ 1</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/support-center/faq-2.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">FAQ 2</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/support-center/faq-3.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">FAQ 3</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/support-center/feedback.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Feedback</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/apps/support-center/license.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">License</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a
                                                href="{{url('/adminpanel')}}/demo3/custom/apps/inbox.html"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-icon flaticon2-rocket"></i><span
                                                    class="kt-menu__link-text">Inbox</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--danger kt-badge--inline">new</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
                                data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;"
                                                                                           class="kt-menu__link kt-menu__toggle"><span
                                        class="kt-menu__link-text">Pages</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu  kt-menu__submenu--fixed kt-menu__submenu--center"
                                     style="width:1000px">
                                    <div class="kt-menu__subnav">
                                        <ul class="kt-menu__content">
                                            <li class="kt-menu__item "><h3 class="kt-menu__heading kt-menu__toggle">
                                                    <span class="kt-menu__link-text">Pricing Tables</span><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></h3>
                                                <ul class="kt-menu__inner">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/pages/pricing/pricing-1.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">Pricing Tables 1</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/pages/pricing/pricing-2.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">Pricing Tables 2</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/pages/pricing/pricing-3.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">Pricing Tables 3</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/pages/pricing/pricing-4.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">Pricing Tables 4</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="kt-menu__item "><h3 class="kt-menu__heading kt-menu__toggle">
                                                    <span class="kt-menu__link-text">Wizards</span><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></h3>
                                                <ul class="kt-menu__inner">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/pages/wizard/wizard-1.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">Wizard 1</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/pages/wizard/wizard-2.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">Wizard 2</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/pages/wizard/wizard-3.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">Wizard 3</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/pages/wizard/wizard-4.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">Wizard 4</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="kt-menu__item "><h3 class="kt-menu__heading kt-menu__toggle"><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Invoices & FAQ</span><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></h3>
                                                <ul class="kt-menu__inner">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/pages/invoices/invoice-1.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">Invoice 1</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/pages/invoices/invoice-2.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">Invoice 2</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/pages/faq/faq-1.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">FAQ 1</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="kt-menu__item "><h3 class="kt-menu__heading kt-menu__toggle"><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">User Pages</span><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></h3>
                                                <ul class="kt-menu__inner">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/pages/user/login-1.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">Login 1</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/pages/user/login-2.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">Login 2</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/pages/user/login-3.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">Login 3</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/pages/user/login-4.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">Login 4</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/pages/user/login-5.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">Login 5</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/pages/user/login-6.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">Login 6</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="kt-menu__item "><h3 class="kt-menu__heading kt-menu__toggle"><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Error Pages</span><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></h3>
                                                <ul class="kt-menu__inner">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/pages/error/error-1.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">Error 1</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/pages/error/error-2.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">Error 2</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/pages/error/error-3.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">Error 3</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/pages/error/error-4.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">Error 4</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/pages/error/error-5.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">Error 5</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                            href="{{url('/adminpanel')}}/demo3/custom/pages/error/error-6.html"
                                                            class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">Error 6</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end: Header Menu -->        <!-- begin:: Header Topbar -->
                <div class="kt-header__topbar">
                    <!--begin: Search -->
                    <div class="kt-header__topbar-item kt-header__topbar-item--search dropdown"
                         id="kt_quick_search_toggle">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                            <span class="kt-header__topbar-icon"><i class="flaticon2-search-1"></i></span>
                        </div>
                        <div
                            class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-top-unround dropdown-menu-anim dropdown-menu-lg">
                            <div class="kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact"
                                 id="kt_quick_search_dropdown">
                                <form method="get" class="kt-quick-search__form">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="flaticon2-search-1"></i></span></div>
                                        <input type="text" class="form-control kt-quick-search__input"
                                               placeholder="Search...">
                                        <div class="input-group-append"><span class="input-group-text"><i
                                                    class="la la-close kt-quick-search__close"></i></span></div>
                                    </div>
                                </form>
                                <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="325"
                                     data-mobile-height="200">

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Search -->

                    <!--begin: Notifications -->
                    <div class="kt-header__topbar-item dropdown">
                        <div aria-expanded="true" class="kt-header__topbar-wrapper" data-offset="10px,0px" data-toggle="dropdown">
                            <span class="kt-header__topbar-icon"><i class="flaticon2-bell-alarm-symbol"></i></span>
                            <span class="kt-hidden kt-badge kt-badge--dot kt-badge--notify kt-badge--sm"></span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg">
                            <form>
                                <!--begin: Head -->
                                <div class="kt-head kt-head--skin-light kt-head--fit-x kt-head--fit-b">
                                    <h3 class="kt-head__title">
                                        User Notifications
                                        &nbsp;
                                        <span class="btn btn-label-primary btn-sm btn-bold btn-font-md">23 new</span>
                                    </h3>
                                    <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
                                        <li class="nav-item">
                                            <a aria-selected="true" class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications" role="tab">Alerts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a aria-selected="false" class="nav-link" data-toggle="tab" href="#topbar_notifications_events" role="tab">Events</a>
                                        </li>
                                        <li class="nav-item">
                                            <a aria-selected="false" class="nav-link" data-toggle="tab" href="#topbar_notifications_logs" role="tab">Logs</a>
                                        </li>
                                    </ul>
                                </div>
                                <!--end: Head -->

                                <div class="tab-content">
                                    <div class="tab-pane active show" id="topbar_notifications_notifications" role="tabpanel">
                                        <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-height="300" data-mobile-height="200" data-scroll="true">
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-line-chart kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New order has been received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        2 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-box-1 kt-font-brand"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New customer is registered
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        3 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-chart2 kt-font-danger"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Application has been approved
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        3 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-image-file kt-font-warning"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New file has been uploaded
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        5 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-drop kt-font-info"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New user feedback received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        8 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-pie-chart-2 kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        System reboot has been successfully completed
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        12 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-favourite kt-font-danger"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New order has been placed
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        15 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item kt-notification__item--read" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-safe kt-font-primary"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Company meeting canceled
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        19 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-psd kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New report has been received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        23 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon-download-1 kt-font-danger"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Finance report has been generated
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        25 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon-security kt-font-warning"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New customer comment recieved
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        2 days ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-pie-chart kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New customer is registered
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        3 days ago
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                        <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-height="300" data-mobile-height="200" data-scroll="true">
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-psd kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New report has been received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        23 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon-download-1 kt-font-danger"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Finance report has been generated
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        25 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-line-chart kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New order has been received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        2 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-box-1 kt-font-brand"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New customer is registered
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        3 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-chart2 kt-font-danger"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Application has been approved
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        3 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-image-file kt-font-warning"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New file has been uploaded
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        5 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-drop kt-font-info"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New user feedback received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        8 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-pie-chart-2 kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        System reboot has been successfully completed
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        12 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-favourite kt-font-brand"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New order has been placed
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        15 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item kt-notification__item--read" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-safe kt-font-primary"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Company meeting canceled
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        19 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-psd kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New report has been received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        23 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon-download-1 kt-font-danger"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Finance report has been generated
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        25 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon-security kt-font-warning"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New customer comment recieved
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        2 days ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-pie-chart kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New customer is registered
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        3 days ago
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                        <div class="kt-grid kt-grid--ver" style="min-height: 200px;">
                                            <div class="kt-grid kt-grid--hor kt-grid__item kt-grid__item--fluid kt-grid__item--middle">
                                                <div class="kt-grid__item kt-grid__item--middle kt-align-center">
                                                    All caught up!
                                                    <br>No new notifications.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--end: Notifications -->

                    <!--begin: Language bar -->
                    <div class="kt-header__topbar-item kt-header__topbar-item--langs">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
	        <span class="kt-header__topbar-icon">
				<img class="" src="{{url('/adminpanel')}}/assets/media/flags/012-uk.svg" alt=""/>
			</span>
                        </div>
                        <div
                            class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround">
                            <ul class="kt-nav kt-margin-t-10 kt-margin-b-10">
                                <li class="kt-nav__item kt-nav__item--active">
                                    <a href="" class="kt-nav__link">
                                        <span class="kt-nav__link-icon"><img
                                                src="{{url('/adminpanel')}}/assets/media/flags/020-flag.svg"
                                                alt=""/></span>
                                        <span class="kt-nav__link-text">English</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="" class="kt-nav__link">
                                        <span class="kt-nav__link-icon"><img
                                                src="{{url('/adminpanel')}}/assets/media/flags/016-spain.svg"
                                                alt=""/></span>
                                        <span class="kt-nav__link-text">Arabic</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!--end: Language bar -->

                    <!--begin: User Bar -->
                    <div class="kt-header__topbar-item kt-header__topbar-item--user">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                            <div class="kt-header__topbar-user">
                                <span class="kt-hidden kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
                                <span class="kt-hidden kt-header__topbar-username kt-hidden-mobile">Sean</span>
                                <img class="kt-hidden" alt="Pic"
                                     src="{{url('/adminpanel')}}/assets/media/users/300_25.jpg"/>
                                <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                <span
                                    class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bolder">S</span>
                            </div>
                        </div>
                        <div
                            class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
                            <!--begin: Head -->
                            <div class="kt-user-card kt-user-card--skin-success kt-notification-item-padding-x"
                                 style="background-image: url({{url('/adminpanel')}}/assets/media/misc/bg-1.jpg)">
                                <div class="kt-user-card__avatar">
                                    <img class="kt-hidden" alt="Pic"
                                         src="{{url('/adminpanel')}}/assets/media/users/300_25.jpg"/>
                                    <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                    <span
                                        class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">S</span>
                                </div>
                                <div class="kt-user-card__name">
                                    Sean Stone
                                </div>
                                <div class="kt-user-card__badge">
                                    <span class="btn btn-success btn-sm btn-bold btn-font-md">23 messages</span>
                                </div>
                            </div>
                            <!--end: Head -->

                            <!--begin: Navigation -->
                            <div class="kt-notification">
                                <a href="{{url('/adminpanel')}}/demo3/custom/apps/user/profile-1/personal-information.html"
                                   class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-calendar-3 kt-font-success"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">
                                            My Profile
                                        </div>
                                        <div class="kt-notification__item-time">
                                            Account settings and more
                                        </div>
                                    </div>
                                </a>
                                <a href="{{url('/adminpanel')}}/demo3/custom/apps/user/profile-3.html"
                                   class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-mail kt-font-warning"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">
                                            My Messages
                                        </div>
                                        <div class="kt-notification__item-time">
                                            Inbox and tasks
                                        </div>
                                    </div>
                                </a>
                                <a href="{{url('/adminpanel')}}/demo3/custom/apps/user/profile-2.html"
                                   class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-rocket-1 kt-font-danger"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">
                                            My Activities
                                        </div>
                                        <div class="kt-notification__item-time">
                                            Logs and notifications
                                        </div>
                                    </div>
                                </a>
                                <a href="{{url('/adminpanel')}}/demo3/custom/apps/user/profile-3.html"
                                   class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-hourglass kt-font-brand"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">
                                            My Tasks
                                        </div>
                                        <div class="kt-notification__item-time">
                                            latest tasks and projects
                                        </div>
                                    </div>
                                </a>

                                <a href="{{url('/adminpanel')}}/demo3/custom/apps/user/profile-1/overview.html"
                                   class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-cardiogram kt-font-warning"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">
                                            Billing
                                        </div>
                                        <div class="kt-notification__item-time">
                                            billing & statements <span
                                                class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded">2 pending</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="kt-notification__custom kt-space-between">
                                    <a href="{{url('/adminpanel')}}/demo3/custom/user/login-v2.html" target="_blank"
                                       class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>

                                    <a href="{{url('/adminpanel')}}/demo3/custom/user/login-v2.html" target="_blank"
                                       class="btn btn-clean btn-sm btn-bold">Upgrade Plan</a>
                                </div>
                            </div>
                            <!--end: Navigation -->
                        </div>
                    </div>
                    <!--end: User Bar -->
                </div>
                <!-- end:: Header Topbar -->
            </div>
            <!-- end:: Header -->

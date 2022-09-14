@extends('users.admin.layouts.master')
@section('content')
    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <!-- begin:: Content Head -->
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">

                    <h3 class="kt-subheader__title">Doctor / {{$doctor->first_name}} {{$doctor->last_name}}</h3>

                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                    <span class="kt-subheader__desc">#Page-ID</span>

                    {{-- <a href="#" class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10">
                         Add New
                     </a>--}}

                    {{--<div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
                        <input type="text" class="form-control" placeholder="Search order..."
                               id="generalSearch">
                        <span class="kt-input-icon__icon kt-input-icon__icon--right">
                        <span><i class="flaticon2-search-1"></i></span>
                        </span>
                    </div>--}}
                </div>
                {{-- <div class="kt-subheader__toolbar">
                     <div class="kt-subheader__wrapper">
                         <a href="#" class="btn kt-subheader__btn-secondary">Today</a>

                         <a href="#" class="btn kt-subheader__btn-secondary">Month</a>

                         <a href="#" class="btn kt-subheader__btn-secondary">Year</a>

                         <a href="#" class="btn kt-subheader__btn-primary">
                             Actions &nbsp;
                             <!--<i class="flaticon2-calendar-1"></i>-->
                         </a>

                         <div class="dropdown dropdown-inline" data-toggle-="kt-tooltip" title="Quick actions"
                              data-placement="left">
                             <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                 <svg xmlns="http://www.w3.org/2000/svg"
                                      xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                      viewBox="0 0 24 24" version="1.1"
                                      class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
                                     <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                         <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
                                         <path
                                             d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                                             id="Combined-Shape" fill="#000000" fill-rule="nonzero"
                                             opacity="0.3"/>
                                         <path
                                             d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z"
                                             id="Combined-Shape" fill="#000000"/>
                                     </g>
                                 </svg>                        <!--<i class="flaticon2-plus"></i>-->
                             </a>
                             <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
                                 <!--begin::Nav-->
                                 <ul class="kt-nav">
                                     <li class="kt-nav__head">
                                         Add anything or jump to:
                                         <i class="flaticon2-information" data-toggle="kt-tooltip"
                                            data-placement="right" title="Click to learn more..."></i>
                                     </li>
                                     <li class="kt-nav__separator"></li>
                                     <li class="kt-nav__item">
                                         <a href="#" class="kt-nav__link">
                                             <i class="kt-nav__link-icon flaticon2-drop"></i>
                                             <span class="kt-nav__link-text">Order</span>
                                         </a>
                                     </li>
                                     <li class="kt-nav__item">
                                         <a href="#" class="kt-nav__link">
                                             <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                             <span class="kt-nav__link-text">Ticket</span>
                                         </a>
                                     </li>
                                     <li class="kt-nav__item">
                                         <a href="#" class="kt-nav__link">
                                             <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                                             <span class="kt-nav__link-text">Goal</span>
                                         </a>
                                     </li>
                                     <li class="kt-nav__item">
                                         <a href="#" class="kt-nav__link">
                                             <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                             <span class="kt-nav__link-text">Support Case</span>
                                             <span class="kt-nav__link-badge">
                                         <span class="kt-badge kt-badge--brand kt-badge--rounded">5</span>
                                     </span>
                                         </a>
                                     </li>
                                     <li class="kt-nav__separator"></li>
                                     <li class="kt-nav__foot">
                                         <a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
                                         <a class="btn btn-clean btn-bold btn-sm kt-hidden" href="#"
                                            data-toggle="kt-tooltip" data-placement="right"
                                            title="Click to learn more...">Learn more</a>
                                     </li>
                                 </ul>
                                 <!--end::Nav-->
                             </div>
                         </div>
                     </div>
                 </div>--}}
            </div>
        </div>
        <!-- end:: Content Head -->

        <!-- begin:: Container -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

            <!--Begin::App-->
            <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
                <!--Begin:: App Aside Mobile Toggle-->
                <button class="kt-app__aside-close" id="kt_user_profile_aside_close">
                    <i class="la la-close"></i>
                </button>
                <!--End:: App Aside Mobile Toggle-->

                <!--Begin:: App Aside-->
                <div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">
                    <!--Begin::Portlet-->
                    <div class="kt-portlet kt-portlet--height-fluid-">
                        <div class="kt-portlet__head kt-portlet__head--noborder">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">

                                </h3>
                            </div>
                            <div class="kt-portlet__head-toolbar">
                                <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                    <i class="flaticon-more-1"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="kt-nav">
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                <span class="kt-nav__link-text">Reports</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-send"></i>
                                                <span class="kt-nav__link-text">Messages</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                <span class="kt-nav__link-text">Charts</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                <span class="kt-nav__link-text">Members</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                <span class="kt-nav__link-text">Settings</span>
                                            </a>
                                        </li>
                                    </ul>            </div>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <!--begin::Widget -->
                            <div class="kt-widget kt-widget--user-profile-2">
                                <div class="kt-widget__head">
                                    <div class="kt-widget__media">
                                        @if(strpos($doctor->picture,'doctors_pictures')!==false)
                                            <img src="{{asset('storage/'.$doctor->picture)}}" class="img-circle kt-widget__img">
                                        @else
                                            <img src="{{$doctor->picture}}" class="img-circle kt-widget__img">
                                        @endif

                                    </div>
                                    <div class="kt-widget__info">
                                        <a href="#" class="kt-widget__username">
                                            {{$doctor->first_name}} {{$doctor->last_name}}
                                        </a>
                                        <span class="kt-widget__desc">
                                            {{$doctor->national_id}}
                                        </span>
                                    </div>
                                </div>

                                <div class="kt-widget__body">
                                    <div class="kt-widget__section">
                                        {{$doctor->biography}}
                                    </div>

                                    <div class="kt-widget__content">
                                        <div class="kt-widget__stats kt-margin-r-20">
                                            <div class="kt-widget__icon">
                                                <i class="flaticon-piggy-bank"></i>
                                            </div>
                                            <div class="kt-widget__details">
                                                <span class="kt-widget__title">Total Appointments</span>
                                                <span class="kt-widget__value"><span></span>999999</span>
                                            </div>
                                        </div>

                                        <div class="kt-widget__stats">
                                            <div class="kt-widget__icon">
                                                <i class="flaticon-pie-chart"></i>
                                            </div>
                                            <div class="kt-widget__details">
                                                <span class="kt-widget__title">Working Hours</span>
                                                <span class="kt-widget__value"><span></span>40 h/w</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="kt-widget__item">
                                        <div class="kt-widget__contact">
                                            <span class="kt-widget__label">Email:</span>
                                            <a href="#" class="kt-widget__data">{{$doctor->email}}</a>
                                        </div>
                                        <div class="kt-widget__contact">
                                            <span class="kt-widget__label">Mobile:</span>
                                            <a href="#" class="kt-widget__data">{{$doctor->mobile}}</a>
                                        </div>
                                        <div class="kt-widget__contact">
                                            <span class="kt-widget__label">Gender:</span>
                                            <span class="kt-widget__data">{{$doctor->gender}}</span>
                                        </div>
                                        <div class="kt-widget__contact">
                                            <span class="kt-widget__label">Birth Date:</span>
                                            <span class="kt-widget__data">{{$doctor->birth_date}}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="kt-widget__footer">
                                    <button type="button" class="btn btn-label-success btn-lg btn-upper">write message</button>
                                </div>
                            </div>
                            <!--end::Widget -->

                        </div>
                    </div>
                    <!--End::Portlet-->

                </div>
                <!--End:: App Aside-->

                <!--Begin:: App Content-->
                <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
                    <div class="row">
                        <div class="col">
                            <!--Begin::Section-->
                            <div class="kt-portlet">
                                <div class="kt-portlet__body kt-portlet__body--fit">
                                    <div class="row row-no-padding row-col-separator-xl">
                                        <div class="col-md-12 col-lg-12 col-xl-4">
                                            <!--begin:: Widgets/Stats2-1 -->
                                            <div class="kt-widget1">
                                                <div class="kt-widget1__item">
                                                    <div class="kt-widget1__info">
                                                        <h3 class="kt-widget1__title">Departments</h3>
                                                        @foreach($doctor->departments as $de)
                                                            <span
                                                                class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">{{$de->name}}</span>
                                                        @endforeach
                                                    </div>
                                                </div>

                                                <div class="kt-widget1__item">
                                                    <div class="kt-widget1__info">
                                                        <h3 class="kt-widget1__title">Phone</h3>
                                                        <span class="kt-widget1__desc">{{$doctor->phone}}</span>
                                                    </div>
                                                </div>

                                                <div class="kt-widget1__item">
                                                    <div class="kt-widget1__info">
                                                        <h3 class="kt-widget1__title">Emergency Number</h3>
                                                        <span class="kt-widget1__desc">{{$doctor->emergency}}</span>
                                                    </div>
                                                </div>

                                                <div class="kt-widget1__item">
                                                    <div class="kt-widget1__info">
                                                        <h3 class="kt-widget1__title">Address</h3>
                                                        <span class="kt-widget1__desc">{{$doctor->address}}</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--end:: Widgets/Stats2-1 -->                            </div>
                                        <div class="col-md-12 col-lg-12 col-xl-4">
                                            <!--begin:: Widgets/Stats2-2 -->
                                            <div class="kt-widget1">
                                                <div class="kt-widget1__item">
                                                    <div class="kt-widget1__info">
                                                        <h3 class="kt-widget1__title">Medical Degree</h3>
                                                        <span class="kt-widget1__desc">{{$doctor->medical_degree}}</span>
                                                    </div>
                                                </div>

                                                <div class="kt-widget1__item">
                                                    <div class="kt-widget1__info">
                                                        <h3 class="kt-widget1__title">Specialist</h3>
                                                        <span class="kt-widget1__desc">{{$doctor->specialist}}</span>
                                                    </div>
                                                </div>

                                                <div class="kt-widget1__item">
                                                    <div class="kt-widget1__info">
                                                        <h3 class="kt-widget1__title">Educational Qualification</h3>
                                                        <span class="kt-widget1__desc">{{$doctor->educational_qualification}}</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--end:: Widgets/Stats2-2 -->                            </div>
                                    </div>
                                </div>
                            </div>
                            <!--End::Section-->
                        </div>
                    </div>
                </div>
                <!--End:: App Content-->
            </div>
            <!--End::App-->	</div>
        <!-- end:: Container -->
    </div>
    <!-- end:: Content -->
@endsection

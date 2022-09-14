@extends('users.admin.layouts.master')
@section('styles')
    <link href="{{url('adminpanel')}}/assets/css/demo3/pages/invoices/invoice-1.css" rel="stylesheet" type="text/css"/>
@endsection
@section('content')

    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <!-- begin:: Content Head -->
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">

                    <h3 class="kt-subheader__title">Invoice</h3>

                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                    <span class="kt-subheader__desc">#XRS-45670</span>

                    <div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
                        <input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
                        <span class="kt-input-icon__icon kt-input-icon__icon--right">
                        <span><i class="flaticon2-search-1"></i></span>
                </span>
                    </div>
                </div>
                <div class="kt-subheader__toolbar">
                    <div class="kt-subheader__wrapper">
                        <a href="#" class="btn kt-subheader__btn-secondary">Today</a>

                        <a href="#" class="btn kt-subheader__btn-secondary">Month</a>

                        <a href="#" class="btn kt-subheader__btn-secondary">Year</a>

                        <a href="#" class="btn kt-subheader__btn-daterange" id="kt_dashboard_daterangepicker"
                           data-toggle="kt-tooltip" title="Select dashboard daterange" data-placement="left">
                            <span class="kt-subheader__btn-daterange-title" id="kt_dashboard_daterangepicker_title">Today</span>&nbsp;
                            <span class="kt-subheader__btn-daterange-date"
                                  id="kt_dashboard_daterangepicker_date">Aug 16</span>
                            <i class="flaticon2-calendar-1"></i>
                        </a>

                        <div class="dropdown dropdown-inline" data-toggle-="kt-tooltip" title="Quick actions"
                             data-placement="left">
                            <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                     class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
                                        <path
                                            d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                                            id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
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
                                        <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right"
                                           title="Click to learn more..."></i>
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
                </div>
            </div>
        </div>
        <!-- end:: Content Head -->

        <!-- begin:: Content Container-->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="kt-portlet">
                        <div class="kt-portlet__body kt-portlet__body--fit">
                            <div class="kt-invoice-1" id="invoiceDiv">
                                <div class="kt-invoice__head"
                                     style="background-image: url({{url('adminpanel')}}/assets/media/bg/bg-6.jpg);">
                                    <div class="kt-invoice__container">
                                        <div class="kt-invoice__brand">
                                            <h1 class="kt-invoice__title">Clinic MS</h1>

                                            <div href="#" class="kt-invoice__logo">
                                                <a href="#"><img
                                                        src="{{url('adminpanel')}}/assets/media/company-logos/logo_client_white.png"></a>

                                                <span class="kt-invoice__desc">
								<span>Address : Cairo , Egypt</span>
								<span>Phone : 01010101010</span>
								<span>Postal Code : 11111</span>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="kt-invoice__items">
                                            <div class="kt-invoice__item">
                                                <span class="kt-invoice__subtitle">INVOICE No. : {{$payment->id}}</span>
                                                <span class="kt-invoice__subtitle">INVOICE Date : {{now()}}</span>

                                            </div>
                                            <div class="kt-invoice__item">
                                                @if(isset($payment->patient))
                                                    <span
                                                        class="kt-invoice__subtitle">Patient Name : {{$payment->patient->first_name.' '.$payment->patient->last_name}}</span>
                                                    <span
                                                        class="kt-invoice__subtitle">Patient Id : {{$payment->patient->id}}</span>
                                                @endif
                                                @if(isset($payment->doctor))
                                                    <span
                                                        class="kt-invoice__subtitle">Refereed By Doctor : {{$payment->doctor->first_name.' '.$payment->doctor->last_name}}</span>
                                                @endif
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="kt-invoice__body">
                                    <div class="kt-invoice__container">
                                        <div class="table-responsive">
                                            <table id="invoice" class="table">
                                                <thead>
                                                <tr>
                                                    <th>Item Name</th>
                                                    <th>Item Price</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($payment->paymentitems as $p)
                                                    <tr>
                                                        <td>{{$p->name}}</td>
                                                        <td>${{$p->price}}</td>
                                                        <td>{{$p->pivot->payment_item_quantity}}</td>
                                                        <td>${{$p->price*$p->pivot->payment_item_quantity}}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="kt-invoice__footer">
                                    <div class="kt-invoice__container">
                                        <div class="kt-invoice__bank">
                                            <div class="kt-invoice__title">Payment Details</div>

                                            <div class="kt-invoice__item">
                                                <span class="kt-invoice__label">Payment Method:</span>
                                                <span class="kt-invoice__value">Cash</span></span>
                                            </div>

                                            <div class="kt-invoice__item">
                                                <span class="kt-invoice__label">Amount Received:</span>
                                                <span
                                                    class="kt-invoice__value">${{$payment->amount_received}}</span></span>
                                            </div>

                                            <div class="kt-invoice__item">
                                                <span class="kt-invoice__label">Amount To Pay:</span>
                                                <span
                                                    class="kt-invoice__value">${{$payment->amount_to_pay}}</span></span>
                                            </div>

                                        </div>
                                        <div class="kt-invoice__total">
                                            <span class="kt-invoice__title">TOTAL AMOUNT :</span>
                                            <span class="kt-invoice__price">${{$payment->total}}</span>
                                            <span class="kt-invoice__notice">Taxes Included</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-invoice__actions">
                                    <div class="kt-invoice__container">
                                        <button type="button" class="btn btn-label-brand btn-bold"
                                                onclick="window.print();">Download Invoice
                                        </button>
                                        <button type="button" class="btn btn-brand btn-bold" onclick="window.print();">
                                            Print Invoice
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Content Container-->
    </div>
    <!-- begin:: Content -->

@endsection

@section('scripts')

    <script>

        /* function PrintElem(divName) {
             var printContents = document.getElementById(divName).innerHTML;
             var originalContents = document.body.innerHTML;

             document.body.innerHTML = printContents;

             window.print();

             document.body.innerHTML = originalContents;
         }
 */
    </script>
@endsection

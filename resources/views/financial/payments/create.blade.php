@extends('users.admin.layouts.master')
@section('styles')
    <link href="{{url('adminpanel')}}/assets/css/demo3/pages/invoices/invoice-1.css" rel="stylesheet" type="text/css"/>

    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
@endsection
@section('content')

    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <!-- begin:: Content Head -->
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">

                    <h3 class="kt-subheader__title">{{isset($payment) ? 'Edit Payment Info' : 'Add Payment'}}</h3>

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
            <form class="kt-form kt-form--label-right"
                  action="{{isset($payment) ? route('payments.update',$payment->id) : route('payments.store')}}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                <input id="TP" type="hidden" name="sub_total_price" value="">
                <input id="DC" type="hidden" name="total_commission" value="">
                <div class="row">

                    <div class="col-md-6">
                        <!--begin::Portlet-->
                        <div class="kt-portlet kt-portlet--height-fluid">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">
                                        Payment Items
                                    </h3>
                                </div>
                            </div>

                            <div class="kt-portlet__body">

                                <div class="form-group">
                                    <label>Patient</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        @if(isset($patients))
                                            <select class="form-control" name="patient" id="patient">
                                                <option value="0">select patient</option>
                                                @foreach($patients as $patient)
                                                    <option
                                                        value="{{$patient->id}}" @if(isset($payment)) {{$patient->id == $payment->patient_id ? 'selected' : ''}} @endif>{{$patient->first_name.''.$patient->last_name}}</option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Doctor</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        @if(isset($doctors))
                                            <select class="form-control" name="doctor" id="doctor">
                                                <option value="0">select doctor</option>
                                                @foreach($doctors as $doctor)
                                                    <option
                                                        value="{{$doctor->id}}" @if(isset($payment)) {{$doctor->id == $payment->doctor_id ? 'selected' : ''}} @endif>{{$doctor->first_name.''.$doctor->last_name}}</option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select id="kt-dual-listbox-3" class="kt-dual-listbox" name="items[]" multiple>
                                        @foreach($paymentitems as $paymentitem)
                                            <option value="{{$paymentitem->id}}">{{$paymentitem->code}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <input type="submit" value="{{isset($payment) ? 'Update' : 'Submit'}}"
                                           class="btn-lg btn-primary">
                                    <input type="reset" class="btn-lg btn-danger" value="Cancel">
                                </div>
                            </div>

                        </div>
                        <!--end::Portlet-->

                    </div>
                    <div class="col-md-6">
                        <div class="kt-portlet kt-portlet--height-fluid">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">
                                        Cart
                                    </h3>
                                </div>
                            </div>
                            <div class="kt-portlet__body">
                                <div class="kt-widget27">
                                    <div class="kt-widget27__container kt-portlet__space-x">
                                        <div id="kt_personal_income_quater_1" class="tab-pane active">
                                            <div class="kt-widget11">
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table id="cart" class="table">
                                                        <!--begin::Thead-->
                                                        <thead>
                                                        <tr>
                                                            <td>Name</td>
                                                            <td>price</td>
                                                            <td>Qty</td>
                                                            <td class="kt-align-center">Total</td>
                                                        </tr>
                                                        </thead>
                                                        <!--end::Thead-->
                                                        <!--begin::Tbody-->
                                                        <tbody>
                                                        {{--<tr id="2">
                                                            <input type="hidden" name="item2" value="2">
                                                            <input type="hidden" name="doctor_commission2" value="2">
                                                            <td>
                                                                <a href="#" class="kt-widget11__title">Dariana Donnelly</a>
                                                            </td>
                                                            <td class="kt-align-right">$<span id="price2">3313.67</span></td>
                                                            <td>
                                                                <div
                                                                    class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                                                    <input type="number" id="qty2"
                                                                           class="form-control qtynum" value="1"
                                                                           name="qty2" min="1"><span
                                                                        class="input-group-btn-vertical"><button
                                                                            onclick="this.parentNode.parentNode.querySelector('input[type=number]').stepUp()"
                                                                            class="btn btn-secondary bootstrap-touchspin-up"
                                                                            type="button"><i
                                                                                class="la la-plus"></i></button><button
                                                                            onclick="this.parentNode.parentNode.querySelector('input[type=number]').stepDown()"
                                                                            class="btn btn-secondary bootstrap-touchspin-down"
                                                                            type="button"><i
                                                                                class="la la-minus"></i></button></span>
                                                                </div>
                                                            </td>
                                                            <td class="kt-align-right kt-font-brand kt-font-bold">$<span id="total2">3313.67</span></td>
                                                        </tr>--}}
                                                        </tbody>
                                                        <!--end::Tbody-->
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__foot">
                                <div class="form-group">
                                    <label>Amount Received</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <input id="amount_received" class="form-control" type="number"
                                               name="amount_received"
                                               value="{{isset($payment) ? $payment->amount_received : ''}}">
                                    </div>
                                </div>
                                <button type="button" id="acct" class="btn btn-brand btn-bold">
                                    Update Invoice
                                </button>
                                <p style="float:right; font-size:24px;">$<span id="totalprice">55</span></p>

                            </div>
                        </div>

                    </div>

                </div>
            </form>
        </div>

        <!-- end:: Content Container-->
    </div>
    <!-- begin:: Content -->

@endsection

@section('scripts')
    <script src="{{url('adminpanel')}}/assets/js/demo3/pages/dashboard.js" type="text/javascript"></script>

    <script>

        $('#acct').click(function () {
            var s = 0;
            //var dc = 0;
            $('#cart tbody').children('tr').each(function () {
                //total single item
                var i = this.id;
                var t = $("#qty" + i).val() * parseFloat($("#price" + i).text());
                $("#total" + i).text(t.toFixed(2));
                $("#totalitem" + i).val(t.toFixed(2));
                // total of all items
                s += parseFloat($("#total" + i).text());

                /*$("#DC" + i).val(t*parseInt($("#DC" + i).val())/100);
                dc += parseFloat($("#DC" + i).val());*/
            });
            $("#totalprice").text(s.toFixed(2));
            $("#TP").val(s.toFixed(2));
            //$("#DC").val(dc.toFixed(2));
        });

        var listBoxes = $('.kt-dual-listbox');

        listBoxes.each(function () {
            var $this = $(this);
            var id = '#' + $this.attr('id');
            // get titles
            var availableTitle = ($this.attr('data-available-title') != null) ? $this.attr('data-available-title') : 'Available options';
            var selectedTitle = ($this.attr('data-selected-title') != null) ? $this.attr('data-selected-title') : 'Selected options';

            // get button labels
            var addLabel = ($this.attr('data-add') != null) ? $this.attr('data-add') : 'Add';
            var removeLabel = ($this.attr('data-remove') != null) ? $this.attr('data-remove') : 'Remove';
            var addAllLabel = ($this.attr('data-add-all') != null) ? $this.attr('data-add-all') : 'Add All';
            var removeAllLabel = ($this.attr('data-remove-all') != null) ? $this.attr('data-remove-all') : 'Remove All';

            // get options
            var options = [];
            $this.children('option').each(function () {
                var value = $(this).val();
                var label = $(this).text();
                var selected = ($(this).is(':selected')) ? true : false;
                options.push({text: label, value: value, selected: selected});
            });


            // get search option
            var search = ($this.attr('data-search') != null) ? $this.attr('data-search') : "";

            // clear duplicates
            $this.empty();
            // init dual listbox
            var dualListBox = new DualListbox(id, {
                addEvent: function (value) {
                    console.log(value);
                    $.ajax({
                        url: "{{ route('get-payment-item-by-item-id') }}?id=" + value,
                        method: 'GET',
                        success: function (data) {
                            jsonar = JSON.parse(data.html);
                            $("#cart tbody").append('<tr id="' + value + '"><input id="DC' + value + '" type="hidden" name="doctor_commission' + value + '" value="' + jsonar[0].commission + '"><input type="hidden" name="item' + value + '" value="' + value + '"><input type="hidden" id="totalitem' + value + '" name="total' + value + '"><td><a href="#" class="kt-widget11__title">' + jsonar[0].name + '</a></td><td class="kt-align-right">$<span id="price' + value + '">' + jsonar[0].price + '</span></td><td><div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><input type="number" id="qty' + value + '" class="form-control qtynum" value="1" name="qty' + value + '" min="1"><span class="input-group-btn-vertical"><button onclick="this.parentNode.parentNode.querySelector(\'input[type=number]\').stepUp()" class="btn btn-secondary bootstrap-touchspin-up" type="button"><i class="la la-plus"></i></button><button onclick="this.parentNode.parentNode.querySelector(\'input[type=number]\').stepDown()" class="btn btn-secondary bootstrap-touchspin-down" type="button"><i class="la la-minus"></i></button></span></div></td><td class="kt-align-right kt-font-brand kt-font-bold">$<span id="total' + value + '">' + jsonar[0].price + '</span></td></tr>');
                        }
                    });

                },

                removeEvent: function (value) {
                    console.log(value);
                    $('#cart tbody tr#' + value).remove();
                },
                availableTitle: availableTitle,
                selectedTitle: selectedTitle,
                addButtonText: addLabel,
                removeButtonText: removeLabel,
                addAllButtonText: addAllLabel,
                removeAllButtonText: removeAllLabel,
                options: options
            });

            if (search == "false") {
                dualListBox.search.classList.add('dual-listbox__search--hidden');
            }
        });

        /*   $("#acct").click(function () {
               //alert(name);
               var test;
               $("#cart tbody tr").each(function (i, el) {
                   var $tds = $(this).children('td'),
                       name = $tds.eq(0).text(),
                       qty = $tds.eq(1).find('input').val(),
                       price = $tds.eq(2).find('span').text();
                   //alert(qty);
                   test += '<tr><td>' + name + '</td><td>$' + price + '</td><td>' + qty + '</td><td>$' + price * qty + '</td></tr>';
               });
               $("#invoice tbody").html(test);
           });


           $("#patient").change(function () {
               $("#pat").text($("#patient :selected").text());
               $("#pat").attr('data-id',$(this).val());
           });

           $("#doctor").change(function () {
               $("#doc").text($("#doctor :selected").text());
               $("#doc").attr('data-id',$(this).val());
           });*/


        function PrintElem(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }

    </script>
@endsection

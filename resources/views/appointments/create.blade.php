@extends('users.admin.layouts.master')
@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_green.css">

    <link rel="stylesheet" href="{{url('select2/dist/css/select2.min.css')}}">
@endsection
@section('content')

    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <!-- begin:: Content Head -->
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">

                    <h3 class="kt-subheader__title">{{isset($appointment) ? 'Edit Appointment Info' : 'Add Appointment'}}</h3>

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
                <div class="offset-2 col-md-8">
                    <!--begin::Portlet-->
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    {{isset($appointment) ? 'Edit Appointment Info' : 'Add Appointment'}}
                                </h3>
                            </div>
                        </div>

                        <!--begin::Form-->
                        <form class="kt-form kt-form--label-right"
                              action="{{isset($appointment) ? route('appointments.update',$appointment->id) : route('appointments.store')}}"
                              method="POST"
                              enctype="multipart/form-data">
                            <div class="kt-portlet__body">
                                <div class="form-group form-group-last">
                                    <div class="alert alert-secondary" role="alert">
                                        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                                        <div class="alert-text">
                                            You Can Add New Appointment From This Form.
                                        </div>
                                    </div>
                                </div>
                                @csrf
                                @if(isset($appointment))
                                    @method('PUT')
                                @endif
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
                                                        value="{{$patient->id}}" @if(isset($appointment)) {{$patient->id == $appointment->patient_id ? 'selected' : ''}} @endif>{{$patient->first_name.''.$patient->last_name}}</option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row" id="newPatientDiv">
                                    <div class="col-md-6">
                                        <label>Patient First Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="fa fa-heading"></i></span></div>
                                            <input type="text" name="first_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Patient Last Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="fa fa-heading"></i></span></div>
                                            <input type="text" name="last_name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Department</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
							               <span class="input-group-text">
								             <i class="fa fa-clock"></i>
                                           </span>
                                        </div>
                                        @if(isset($departments))
                                            <select class="form-control" name="department" id="department">
                                                <option>select department</option>
                                                @foreach($departments as $department)
                                                    <option
                                                        value="{{$department->id}}" @if(isset($appointment)) {{$department->id == $appointment->department_id ? 'selected' : ''}} @endif>{{$department->name}}</option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Doctor</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
							               <span class="input-group-text">
								             <i class="fa fa-clock"></i>
                                           </span>
                                        </div>
                                        <select class="form-control" name="doctor" id="doctor">
                                            <option>select doctor</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" id="timeScheduleDiv" style="display: none">
                                    <label>Time Schedules</label>
                                    <div class="input-group">
                                        <ul class="list-group" id="timeSchedule">

                                        </ul>

                                    </div>
                                </div>
                                <div class="form-group" id="dateDiv" style="display: none">
                                    <label>Date</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-calendar"></i></span></div>
                                        <input class="form-control" type="text" name="date" id="date" readonly
                                               placeholder="Select Date"
                                               @if(isset($appointment)) value="{{$appointment->date}}"@endif>
                                    </div>
                                </div>
                                <div class="form-group" id="timeSlotsDiv" style="display: none">
                                    <label>Available Slots</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <select class="form-control" name="timeSlots" id="timeSlots">

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <select class="form-control" name="status" id="status">
                                            <option value="confirmed">confirmed</option>
                                            <option value="pending">pending</option>
                                            <option value="cancelled">cancelled</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" id="priceDiv" style="display:none;">
                                    <label>Price</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-dollar-sign"></i></span></div>
                                        <input class="form-control" type="text" name="price" id="price" readonly>
                                        <input class="form-control" type="hidden" name="commission" id="commission">
                                        <input class="form-control" type="hidden" name="item" id="item">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Notes</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <textarea class="form-control" name="notes" id="notes"></textarea>

                                    </div>
                                </div>

                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <input type="submit" value="{{isset($appointment) ? 'Update' : 'Submit'}}"
                                           class="btn-lg btn-primary">
                                    <input type="reset" class="btn-lg btn-danger" value="Cancel">
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Portlet-->
                </div>
            </div>
        </div>
        <!-- end:: Content Container-->
    </div>
    <!-- begin:: Content -->

@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>--}}

    <script>

        $("#patient").change(function () {
            if ($(this).val() != 0){
                $('#newPatientDiv').hide();
            } else {
                $('#newPatientDiv').show();
            }
        });

        /*ajax to get doctors by department*/
        $("#department").change(function () {
            $.ajax({
                url: "{{ route('get-doctors-by-department') }}?id=" + $(this).val(),
                method: 'GET',
                success: function (data) {
                    $('#doctor').html(data.html);
                }
            });
        });

        $("#status").change(function () {
            if ($("#status").val() == 'confirmed') {
                $('#priceDiv').show();
            } else {
                $('#priceDiv').hide();
            }
        });

        /*ajax to get time schedule of each doctor*/
        $("#doctor").change(function () {

            // Get Doctor Appointment Price
            $.ajax({
                url: "{{route('get-payment-item-by-doctor_id')}}?doctor=" + $('#doctor').val(),
                method: 'GET',
                success: function (data) {
                    jaa = JSON.parse(data.html);
                    //alert($('#doctor').val());
                    //alert(jaa[0].price);
                    $('#priceDiv').show();
                    $('#price').val(jaa[0].price);
                    $('#commission').val(jaa[0].commission);
                    $('#item').val(jaa[0].id);
                }
            });

            $.ajax({
                url: "{{ route('get-time-schedule-by-doctor') }}?id=" + $(this).val(),
                method: 'GET',
                success: function (data) {
                    $('#dateDiv').show();
                    $('#timeScheduleDiv').show();
                    // display Time Schedule Week Day
                    $('#timeSchedule').html(data.html);
                    // return Arr of Week Day Num
                    var arr = [];
                    $(".tm").each(function (index, obj) {
                        if ($(this).text() == 'saturday') {
                            arr.push(6);
                        } else if ($(this).text() == 'sunday') {
                            arr.push(0);
                        } else if ($(this).text() == 'monday') {
                            arr.push(1);
                        } else if ($(this).text() == 'tuesday') {
                            arr.push(2);
                        } else if ($(this).text() == 'wednesday') {
                            arr.push(3);
                        } else if ($(this).text() == 'thursday') {
                            arr.push(4);
                        } else if ($(this).text() == 'friday') {
                            arr.push(5);
                        }
                    });


                    // create flat picker with specific Week Days
                    flatpickr('#date', {
                        altInput: true,
                        altFormat: "F j, Y",
                        dateFormat: "Y-m-d",
                        minDate: "today",
                        enable: [function (date) {
                            // return (date === 2020-01-30);
                            if (arr.length == 1) {
                                return (date.getDay() === arr[0]);
                            } else if (arr.length == 2) {
                                return (date.getDay() === arr[0] || date.getDay() === arr[1]);
                            } else if (arr.length == 3) {
                                return (date.getDay() === arr[0] || date.getDay() === arr[1] || date.getDay() === arr[2]);
                            } else if (arr.length == 4) {
                                return (date.getDay() === arr[0] || date.getDay() === arr[1] || date.getDay() === arr[2] || date.getDay() === arr[3]);
                            } else if (arr.length == 5) {
                                return (date.getDay() === arr[0] || date.getDay() === arr[1] || date.getDay() === arr[2] || date.getDay() === arr[3] || date.getDay() === arr[4]);
                            } else if (arr.length == 6) {
                                return (date.getDay() === arr[0] || date.getDay() === arr[1] || date.getDay() === arr[2] || date.getDay() === arr[3] || date.getDay() === arr[4] || date.getDay() === arr[5]);
                            } else if (arr.length == 7) {
                                return (date.getDay() === arr[0] || date.getDay() === arr[1] || date.getDay() === arr[2] || date.getDay() === arr[3] || date.getDay() === arr[4] || date.getDay() === arr[5] || date.getDay() === arr[6]);
                            }
                        }],
                    });

                }
            });
        });


        // Fill Time Slots By The Date & check appointments & check day offs
        $("#date").change(function () {
            var date = moment($(this).val());
            var dadada = $(this).val();
            var time = [];
            // check appointments already reserved
            $.ajax({
                url: "{{route('get-appointments-by-date')}}?date=" + $(this).val(),
                method: 'GET',
                success: function (data) {
                    jsonar = JSON.parse(data.html);
                    $.each(jsonar, function (i, value) {
                        time.push(jsonar[i].time);
                    });
                }
            });

            /*ajax to get day off schedule of each doctor*/
            $.ajax({
                url: "{{ route('get-dayoff-schedule-by-doctor') }}?id=" + $("#doctor").val(),
                method: 'GET',
                success: function (data) {
                    check = 0;
                    dayoffs = JSON.parse(data.html);

                    $.each(dayoffs, function (i, value) {
                        if (dayoffs[i].date == dadada) {
                            check = 1;
                        }
                    });

                    if (check == 1) {
                        /*check if the Date is day off*/
                        $("#timeSlots").empty();
                        $('#timeSlotsDiv').show();
                        $("#timeSlots").append('<option>This is a Day off</option>');

                    } else if (check == 0) {
                        /*ajax to Fill Time Slots By The Date if the Date not day off*/
                        $.ajax({
                            url: "{{ route('get-time-by-time-schedule') }}?week_num=" + date.day() + "&doctor_id=" + $('#doctor').val(),
                            method: 'GET',
                            success: function (data) {
                                res = JSON.parse(data.html);
                                $("#timeSlots").empty();
                                $('#timeSlotsDiv').show();
                                $.each(res, function (i, value) {
                                    start = moment(res[i].start_time, 'HH:mm').format('HH:mm');
                                    end = moment(res[i].end_time, 'HH:mm').format('HH:mm');
                                    while (start <= moment(end, 'HH:mm').subtract(res[i].duration, 'm').format('HH:mm')) {
                                        for (j = 0; j < time.length; j++) {
                                            if (moment(start, 'HH:mm').isSame(moment(time[j], 'HH:mm'))) {
                                                start = moment(start, 'HH:mm').add(res[i].duration, 'm').format('HH:mm');
                                                j = 0;
                                            }
                                        }
                                        $("#timeSlots").append('<option value=' + moment(start, 'HH:mm').format('HH:mm') + '>' + moment(start, 'HH:mm').format('HH:mm') + '</option>');
                                        start = moment(start, 'HH:mm').add(res[i].duration, 'm').format('HH:mm');
                                    }
                                });
                            }
                        });
                    }
                }
            });


        });

    </script>
@endsection

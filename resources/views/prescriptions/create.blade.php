@extends('users.admin.layouts.master')
@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_green.css">

@endsection
@section('content')

    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <!-- begin:: Content Head -->
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">

                    <h3 class="kt-subheader__title">{{isset($prescription) ? 'Edit Prescription Info' : 'Add Prescription'}}</h3>

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
                                    {{isset($prescription) ? 'Edit Prescription Info' : 'Add Prescription'}}
                                </h3>
                            </div>
                        </div>

                        <!--begin::Form-->
                        <form class="kt-form kt-form--label-right"
                              action="{{isset($prescription) ? route('prescriptions.update',$prescription->id) : route('prescriptions.store')}}"
                              method="POST"
                              enctype="multipart/form-data">
                            <div class="kt-portlet__body">
                                <div class="form-group form-group-last">
                                    <div class="alert alert-secondary" role="alert">
                                        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                                        <div class="alert-text">
                                            You Can Add New Prescription From This Form.
                                        </div>
                                    </div>
                                </div>
                                @csrf
                                @if(isset($prescription))
                                    @method('PUT')
                                @endif
                                <div class="form-group">
                                    <label>Patient</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        @if(isset($patients))
                                            <select class="form-control" name="patient" id="patient">
                                                <option>select patient</option>
                                                @foreach($patients as $patient)
                                                    <option
                                                        value="{{$patient->id}}" @if(isset($prescription)) {{$patient->id == $prescription->patient_id ? 'selected' : ''}} @endif>{{$patient->first_name.''.$patient->last_name}}</option>
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
                                                <option>select doctor</option>
                                                @foreach($doctors as $doctor)
                                                    <option
                                                        value="{{$doctor->id}}" @if(isset($prescription)) {{$doctor->id == $prescription->doctor_id ? 'selected' : ''}} @endif>{{$doctor->first_name.''.$doctor->last_name}}</option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group" id="dateDiv">
                                    <label>Date</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-calendar"></i></span></div>
                                        <input class="form-control" type="text" name="date" id="date"
                                               @if(isset($prescription)) value="{{$prescription->date}}"@endif>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Patient Gender</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <input disabled type="text" class="form-control" name="gender" id="gender"
                                               @if(isset($prescription)) value="{{$prescription->patient->gender}}"@endif>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Patient Age</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <input disabled type="text" class="form-control" name="age" id="age"
                                               @if(isset($prescription)) value="{{$age}}" @endif>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Patient Mobile</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <input disabled type="text" class="form-control" name="mobile" id="mobile"
                                               @if(isset($prescription)) value="{{$prescription->patient->mobile}}"@endif>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Patient Blood Pressure</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <input type="text" class="form-control" name="blood_pressure"
                                               id="blood_pressure"
                                               @if(isset($prescription)) value="{{$prescription->blood_pressure}}"@endif>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Patient Diabetes</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <input type="text" class="form-control" name="diabetes" id="diabetes"
                                               @if(isset($prescription)) value="{{$prescription->diabetes}}"@endif>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Symptoms</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <textarea class="form-control" name="symptoms"
                                                  id="symptoms">@if(isset($prescription)) {{$prescription->symptoms}} @endif</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Diagnosis</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <textarea class="form-control" name="diagnosis"
                                                  id="diagnosis">@if(isset($prescription)) {{$prescription->diagnosis}} @endif</textarea>
                                    </div>
                                </div>
                                <div class="kt-portlet">
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title">
                                                Choose Existing Medicine
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__body">
                                        <div class="kt_repeater_3">
                                            <div class="form-group  row">
                                                <label class="col-lg-2 col-form-label text-left">Medicine :</label>
                                                <div data-repeater-list="medicines_exist" class="col-lg-10">
                                                    @if(isset($prescription) && $prescription->medicines->count() != 0)
                                                        @foreach($prescription->medicines as $m)
                                                            <div data-repeater-item class="row kt-margin-b-10">
                                                                <div class="col-lg-5">
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="la la-phone"></i>
                                                    </span>
                                                                        </div>
                                                                        <select class="form-control" name="medicine_exist"
                                                                                id="medicine_exist">
                                                                            <option>Select Medicine</option>
                                                                            @foreach($medicines as $medicine)
                                                                                <option value="{{$medicine->id}}" {{$medicine->id == $m->id ? 'selected' : ''}}>{{$medicine->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-5">
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="la la-envelope"></i>
                                                    </span>
                                                                        </div>
                                                                        <textarea class="form-control form-control-danger"
                                                                                  name="medicine_exist_instruction"
                                                                                  placeholder="Medicine Instruction">{{$m->pivot->instructions}}</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2">
                                                                    <a href="javascript:;" data-repeater-delete=""
                                                                       class="btn btn-danger btn-icon">
                                                                        <i class="la la-remove"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div data-repeater-item class="row kt-margin-b-10">
                                                            <div class="col-lg-5">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="la la-phone"></i>
                                                    </span>
                                                                    </div>
                                                                    <select class="form-control" name="medicine_exist"
                                                                            id="medicine_exist">
                                                                        <option>Select Medicine</option>
                                                                        @foreach($medicines as $medicine)
                                                                            <option value="{{$medicine->id}}">{{$medicine->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-5">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="la la-envelope"></i>
                                                    </span>
                                                                    </div>
                                                                    <textarea class="form-control form-control-danger"
                                                                              name="medicine_exist_instruction"
                                                                              placeholder="Medicine Instruction"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <a href="javascript:;" data-repeater-delete=""
                                                                   class="btn btn-danger btn-icon">
                                                                    <i class="la la-remove"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2"></div>
                                                <div class="col">
                                                    <div data-repeater-create="" class="btn btn btn-primary">
                                        <span>
                                            <i class="la la-plus"></i>
                                            <span>Add</span>
                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-portlet">
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title">
                                                Add New Medicine
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__body">
                                        <div class="kt_repeater_3">
                                            <div class="form-group  row">
                                                <label class="col-lg-2 col-form-label text-left">Medicine :</label>
                                                <div data-repeater-list="medicine" class="col-lg-10">
                                                        <div data-repeater-item class="row kt-margin-b-10">
                                                            <div class="col-lg-5">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="la la-phone"></i>
                                                    </span>
                                                                    </div>
                                                                    <input type="text"
                                                                           class="form-control form-control-danger"
                                                                           name="name"
                                                                           placeholder="Medicine Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-5">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="la la-envelope"></i>
                                                    </span>
                                                                    </div>
                                                                    <textarea class="form-control form-control-danger"
                                                                              name="instruction"
                                                                              placeholder="Medicine Instruction"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <a href="javascript:;" data-repeater-delete=""
                                                                   class="btn btn-danger btn-icon">
                                                                    <i class="la la-remove"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2"></div>
                                                <div class="col">
                                                    <div data-repeater-create="" class="btn btn btn-primary">
                                        <span>
                                            <i class="la la-plus"></i>
                                            <span>Add</span>
                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Advice</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <textarea class="form-control" name="advice"
                                                  id="advice">@if(isset($prescription)) {{$prescription->advice}} @endif</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <input type="submit" value="{{isset($prescription) ? 'Update' : 'Submit'}}"
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
    <script src="{{url('adminpanel')}}/assets/js/demo3/pages/crud/forms/widgets/form-repeater.js"
            type="text/javascript"></script>

    <script>
        /*$("#medicine_exist").change(function () {

        });*/
        flatpickr('#date', {
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
        });

    </script>
@endsection

@extends('users.admin.layouts.master')
@section('styles')
    <link href="{{url('adminpanel')}}/assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet"
          type="text/css"/>
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

                    <h3 class="kt-subheader__title">Dayoff Schedules
                        List {{isset($doctor) ? '( For Doctor : '.$doctor->first_name.' '.$doctor->last_name.')' : ''}}</h3>

                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                    <span class="kt-subheader__desc">#Page-ID</span>

                </div>
            </div>
        </div>
        <!-- end:: Content Head -->

        <!-- begin:: Container -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <!-- begin:: Alert -->
            @if(session()->has('success'))
                <div class="alert alert-light alert-elevate" role="alert">
                    <div class="alert-icon"><i class="flaticon2-check-mark kt-font-success"></i></div>
                    <div class="alert-text">
                        {{session()->get('success')}}
                    </div>
                </div>
        @endif
        <!-- end:: Alert -->

            <!-- begin:: Portlet -->
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
			<span class="kt-portlet__head-icon">
				<i class="kt-font-brand flaticon2-line-chart"></i>
			</span>
                        <h3 class="kt-portlet__head-title">
                            Dayoff Schedules List
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions">

                                <a href="{{isset($doctor) ? route('create-time-schedule-for-doctor',$doctor->id) : route('dayoffschedules.create')}}"
                                   class="btn btn-brand btn-elevate btn-icon-sm">
                                    <i class="la la-plus"></i>
                                    Add Day Off Schedule</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="kt-portlet__body">
                    <form id="filterform" action="{{route('dayoffschedules.index')}}" method="get">
                        @csrf
                        <div class="form-group row">
                            <div class="col-12"><label>filter by date</label></div>
                            <div class="col-4">
                                <div class="input-group ">
                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                class="fa fa-calendar"></i></span></div>
                                    <input class="form-control" type="text" name="start_date" id="start_date"
                                           placeholder="Select Start Date">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group ">
                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                class="fa fa-calendar"></i></span></div>
                                    <input class="form-control" type="text" name="end_date" id="end_date"
                                           placeholder="Select End Date">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="kt-form__actions">
                                    <input type="submit" value="Filter"
                                           class="btn btn-brand ">
                                    <input id="reset" type="reset" class="btn btn-danger">
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--begin: Datatable -->
                    <table class="table table-striped- table-bordered table-hover table-checkable  kt_table_1"
                           id="kt_table_1">
                        <thead>
                        <tr>
                            <th>Doctor</th>
                            <th>Date</th>
                            <th>Actions</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dayoffschedules as $dayoffschedule)
                            <tr>
                                <td>{{$dayoffschedule->user->first_name.' '.$dayoffschedule->user->last_name}}</td>
                                <td>{{$dayoffschedule->date}}</td>
                                <td>
                                     <span class="dropdown">
                                    <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown"
                                       aria-expanded="true">
                                       <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item"
                                           href="{{route('dayoffschedules.edit',$dayoffschedule->id)}}"><i
                                                class="fa fa-edit"></i>Edit Details</a>
                                        <a href="{{route('dayoffschedules.show',$dayoffschedule->id)}}"
                                           class="dropdown-item"><i
                                                class="la la-eye"></i>Display</a>
                                    </div>
                                     </span>
                                </td>
                                <td>
                                    <form action="{{route('dayoffschedules.destroy',$dayoffschedule->id)}}"
                                          method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i
                                                class="fa fa-trash-alt"></i></button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    <!--end: Datatable -->
                </div>
            </div>
            <!-- end:: Portlet -->
        </div>
        <!-- end:: Container -->
    </div>
    <!-- begin:: Content -->

@endsection

@section('scripts')
    <script src="{{url('adminpanel')}}/assets/vendors/custom/datatables/datatables.bundle.js"
            type="text/javascript"></script>
    <script src="{{url('adminpanel')}}/assets/js/demo3/pages/crud/datatables/advanced/multiple-controls.js"
            type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        flatpickr('#start_date', {
            altInput: true,
            altFormat: "Y-m-d",
            dateFormat: "Y-m-d",
        });

        flatpickr('#end_date', {
            altInput: true,
            altFormat: "Y-m-d",
            dateFormat: "Y-m-d",
        });

        $('#reset').click(function () {
            $('#filterform').submit();
        })
    </script>
@endsection

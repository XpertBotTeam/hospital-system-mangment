@extends('users.admin.layouts.master')
@section('styles')
    <link href="{{url('adminpanel')}}/assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet"
          type="text/css"/>

@endsection
@section('content')

    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Content Head -->
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">

                    <h3 class="kt-subheader__title">Time Schedules
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
                            Time Schedules List
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions">

                                <a href="{{isset($doctor) ? route('create-time-schedule-for-doctor',$doctor->id) : route('timeschedules.create')}}"
                                   class="btn btn-brand btn-elevate btn-icon-sm">
                                    <i class="la la-plus"></i>
                                    Add Time Schedule                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="kt-portlet__body">
                    <!--begin: Datatable -->
                    <table class="table table-striped- table-bordered table-hover table-checkable kt_table_1" id="kt_table_1">
                        <thead>
                        <tr>
                            <th>Week Day</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Appointment Duration</th>
                            <th>Doctor Name</th>
                            <th>Actions</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($doctor))
                            @foreach($doctor->timeSchedules as $timeschedule)
                                <tr>
                                    <td>{{$timeschedule->week_day}}</td>
                                    <td>{{$timeschedule->start_time}}</td>
                                    <td>{{$timeschedule->end_time}}</td>
                                    <td>{{$timeschedule->duration.' Minute'}}</td>
                                    <td>
                                            <span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">{{$timeschedule->user->first_name}}</span>
                                    </td>
                                    <td>
                                     <span class="dropdown">
                                    <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown"
                                       aria-expanded="true">
                                       <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item"
                                           href="{{route('timeschedules.edit',$timeschedule->id)}}"><i
                                                class="fa fa-edit"></i>Edit Details</a>
                                        <a href="{{route('timeschedules.show',$timeschedule->id)}}"
                                           class="dropdown-item"><i
                                                class="la la-eye"></i>Display</a>
                                    </div>
                                     </span>
                                    </td>
                                    <td>
                                        <form action="{{route('timeschedules.destroy',$timeschedule->id)}}"
                                              method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i
                                                    class="fa fa-trash-alt"></i></button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        @else
                            @foreach($timeschedules as $timeschedule)
                                <tr>
                                    <td>{{$timeschedule->week_day}}</td>
                                    <td>{{$timeschedule->start_time}}</td>
                                    <td>{{$timeschedule->end_time}}</td>
                                    <td>{{$timeschedule->duration.' Minute'}}</td>
                                    <td>
                                        <span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">{{$timeschedule->user->first_name}}</span>
                                    </td>
                                    <td>
                                     <span class="dropdown">
                                    <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown"
                                       aria-expanded="true">
                                       <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item"
                                           href="{{route('timeschedules.edit',$timeschedule->id)}}"><i
                                                class="fa fa-edit"></i>Edit Details</a>
                                        <a href="{{route('timeschedules.show',$timeschedule->id)}}"
                                           class="dropdown-item"><i
                                                class="la la-eye"></i>Display</a>
                                    </div>
                                     </span>
                                    </td>
                                    <td>
                                        <form action="{{route('timeschedules.destroy',$timeschedule->id)}}"
                                              method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i
                                                    class="fa fa-trash-alt"></i></button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        @endif
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
@endsection

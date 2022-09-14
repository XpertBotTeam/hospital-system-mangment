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

                    <h3 class="kt-subheader__title">Appointments List</h3>

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
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Appointments List
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions">
                                <a href="{{route('appointments.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
                                    <i class="la la-plus"></i>
                                    Add Appointment
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <ul class="nav nav-pills nav-fill" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#kt_tabs_5_1">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_5_2">Pending</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_5_3">Confirmed</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_5_4">Treated</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_5_5">Cancelled</a>
                        </li>

                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="kt_tabs_5_1" role="tabpanel">
                            <!--begin: Datatable -->
                            <table class="table table-striped- table-bordered table-hover table-checkable  kt_table_1">
                                <thead>
                                <tr>
                                    <th>Patient</th>
                                    <th>Doctor</th>
                                    <th>Department</th>
                                    <th>Date/Time</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($appointments as $appointment)
                                    <tr>
                                        <td>{{$appointment->patient->first_name}}</td>
                                        <td>{{$appointment->doctor->first_name}}</td>
                                        <td>{{$appointment->department->name}}</td>
                                        <td>{{$appointment->date.' / '.$appointment->time}}</td>
                                        <td>{{$appointment->status}}</td>
                                        <td>
                                     <span class="dropdown">
                                    <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                                       <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{route('appointments.edit',$appointment->id)}}"><i
                                                class="fa fa-edit"></i>Edit Details</a>
                                        <a href="{{route('appointments.show',$appointment->id)}}" class="dropdown-item"><i
                                                class="la la-eye"></i>Display</a>
                                    </div>
                                     </span>

                                        </td>
                                        <td>
                                            <form action="{{route('appointments.destroy',$appointment->id)}}" method="post">
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
                        <div class="tab-pane" id="kt_tabs_5_2" role="tabpanel">
                            <!--begin: Datatable -->
                            <table class="table table-striped- table-bordered table-hover table-checkable  kt_table_1">
                                <thead>
                                <tr>
                                    <th>Patient</th>
                                    <th>Doctor</th>
                                    <th>Department</th>
                                    <th>Date/Time</th>
                                    <th>Actions</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($pendingAppointments as $appointment)
                                    <tr>
                                        <td>{{$appointment->patient->first_name}}</td>
                                        <td>{{$appointment->doctor->first_name}}</td>
                                        <td>{{$appointment->department->name}}</td>
                                        <td>{{$appointment->date.' / '.$appointment->time}}</td>
                                        <td>
                                     <span class="dropdown">
                                    <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                                       <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{route('appointments.edit',$appointment->id)}}"><i
                                                class="fa fa-edit"></i>Edit Details</a>
                                        <a href="{{route('appointments.show',$appointment->id)}}" class="dropdown-item"><i
                                                class="la la-eye"></i>Display</a>
                                    </div>
                                     </span>

                                        </td>
                                        <td>
                                            <form action="{{route('appointments.destroy',$appointment->id)}}" method="post">
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
                        <div class="tab-pane" id="kt_tabs_5_3" role="tabpanel">
                            <!--begin: Datatable -->
                            <table class="table table-striped- table-bordered table-hover table-checkable  kt_table_1">
                                <thead>
                                <tr>
                                    <th>Patient</th>
                                    <th>Doctor</th>
                                    <th>Department</th>
                                    <th>Date/Time</th>
                                    <th>Actions</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($confirmedAppointments as $appointment)
                                    <tr>
                                        <td>{{$appointment->patient->first_name}}</td>
                                        <td>{{$appointment->doctor->first_name}}</td>
                                        <td>{{$appointment->department->name}}</td>
                                        <td>{{$appointment->date.' / '.$appointment->time}}</td>
                                        <td>
                                     <span class="dropdown">
                                    <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                                       <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{route('appointments.edit',$appointment->id)}}"><i
                                                class="fa fa-edit"></i>Edit Details</a>
                                        <a href="{{route('appointments.show',$appointment->id)}}" class="dropdown-item"><i
                                                class="la la-eye"></i>Display</a>
                                    </div>
                                     </span>

                                        </td>
                                        <td>
                                            <form action="{{route('appointments.destroy',$appointment->id)}}" method="post">
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
                        <div class="tab-pane" id="kt_tabs_5_4" role="tabpanel">
                            <!--begin: Datatable -->
                            <table class="table table-striped- table-bordered table-hover table-checkable  kt_table_1">
                                <thead>
                                <tr>
                                    <th>Patient</th>
                                    <th>Doctor</th>
                                    <th>Department</th>
                                    <th>Date/Time</th>
                                    <th>Actions</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($treatedAppointments as $appointment)
                                    <tr>
                                        <td>{{$appointment->patient->first_name}}</td>
                                        <td>{{$appointment->doctor->first_name}}</td>
                                        <td>{{$appointment->department->name}}</td>
                                        <td>{{$appointment->date.' / '.$appointment->time}}</td>
                                        <td>
                                     <span class="dropdown">
                                    <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                                       <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{route('appointments.edit',$appointment->id)}}"><i
                                                class="fa fa-edit"></i>Edit Details</a>
                                        <a href="{{route('appointments.show',$appointment->id)}}" class="dropdown-item"><i
                                                class="la la-eye"></i>Display</a>
                                    </div>
                                     </span>

                                        </td>
                                        <td>
                                            <form action="{{route('appointments.destroy',$appointment->id)}}" method="post">
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
                        <div class="tab-pane" id="kt_tabs_5_5" role="tabpanel">
                            <!--begin: Datatable -->
                            <table class="table table-striped- table-bordered table-hover table-checkable  kt_table_1">
                                <thead>
                                <tr>
                                    <th>Patient</th>
                                    <th>Doctor</th>
                                    <th>Department</th>
                                    <th>Date/Time</th>
                                    <th>Actions</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($cancelledAppointments as $appointment)
                                    <tr>
                                        <td>{{$appointment->patient->first_name}}</td>
                                        <td>{{$appointment->doctor->first_name}}</td>
                                        <td>{{$appointment->department->name}}</td>
                                        <td>{{$appointment->date.' / '.$appointment->time}}</td>
                                        <td>
                                     <span class="dropdown">
                                    <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                                       <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{route('appointments.edit',$appointment->id)}}"><i
                                                class="fa fa-edit"></i>Edit Details</a>
                                        <a href="{{route('appointments.show',$appointment->id)}}" class="dropdown-item"><i
                                                class="la la-eye"></i>Display</a>
                                    </div>
                                     </span>

                                        </td>
                                        <td>
                                            <form action="{{route('appointments.destroy',$appointment->id)}}" method="post">
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
                </div>
            </div>
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

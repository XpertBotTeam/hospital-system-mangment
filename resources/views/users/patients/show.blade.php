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

                    <h3 class="kt-subheader__title">Patient History</h3>

                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                    <span class="kt-subheader__desc">#XRS-45670</span>

                </div>

            </div>
        </div>
        <!-- end:: Content Head -->
        <!-- begin:: Content -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <!--Begin::Section-->
            <div class="row">
                <div class="col-xl-12">
                    <!--begin:: Widgets/Applications/User/Profile3-->
                    <div class="kt-portlet kt-portlet--height-fluid">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    Patient Details
                                </h3>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <div class="kt-widget kt-widget--user-profile-3">
                                <div class="kt-widget__top">
                                    <div class="kt-widget__media kt-hidden-">
                                        @if(strpos($patient->picture,'patients_pictures')!==false)
                                            <img src="{{asset('storage/'.$patient->picture)}}">
                                        @else
                                            <img src="{{$patient->picture}}">
                                        @endif
                                    </div>
                                    <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
                                        JM
                                    </div>
                                    <div class="kt-widget__content">
                                        <div class="kt-widget__head">
                                            <a href="#" class="kt-widget__username">
                                                {{$patient->first_name.' '.$patient->last_name}}
                                                <i class="flaticon2-correct"></i>
                                            </a>

                                            <div class="kt-widget__action">
                                                <button type="button" class="btn btn-label-success btn-sm btn-upper">ask</button>&nbsp;
                                                <button type="button" class="btn btn-brand btn-sm btn-upper">hire</button>
                                            </div>
                                        </div>

                                        <div class="kt-widget__subhead">
                                            <a href="#"><i class="flaticon2-new-email"></i>{{$patient->email}}</a>
                                            <a href="#"><i class="flaticon2-calendar-3"></i>{{$patient->national_id}}</a>
                                            <a href="#"><i class="flaticon2-placeholder"></i>{{$patient->birth_date}}</a>
                                            <a href="#"><i class="flaticon2-placeholder"></i>{{$patient->gender}}</a>
                                            <a href="#"><i class="flaticon2-placeholder"></i>{{$patient->blood_group}}</a>
                                        </div>

                                        <div class="kt-widget__info">
                                            <div class="kt-widget__desc">

                                                <i class="flaticon-home-2"></i>  {{$patient->address}}
                                            </div>
                                        </div>
                                        <div class="kt-widget__info">
                                            <div class="kt-widget__desc">
                                                <div class="row">
                                                    <div class="col-4"><i class="flaticon2-phone"></i> {{$patient->mobile}}</div>
                                                    <div class="col-4"><i class="flaticon2-phone"></i> {{$patient->phone}}</div>
                                                    <div class="col-4"><i class="flaticon2-phone"></i> {{$patient->emergency}}</div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget__bottom">
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon-piggy-bank"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Appointments</span>
                                            <span class="kt-widget__value"><span>$</span>249,500</span>
                                        </div>
                                    </div>

                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon-confetti"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Case Histories</span>
                                            <span class="kt-widget__value"><span>$</span>164,700</span>
                                        </div>
                                    </div>

                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon-pie-chart"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Prescriptions</span>
                                            <span class="kt-widget__value"><span>$</span>164,700</span>
                                        </div>
                                    </div>

                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon-file-2"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Documents</span>
                                            <span class="kt-widget__value"><span>$</span>164,700</span>
                                        </div>
                                    </div>

                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon-chat-1"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Labs</span>
                                            <span class="kt-widget__value"><span>$</span>164,700</span>
                                        </div>
                                    </div>

                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon-chat-1"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Bed Allotments</span>
                                            <span class="kt-widget__value"><span>$</span>164,700</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end:: Widgets/Applications/User/Profile3-->    </div>
            </div>
            <!--End::Section-->

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Patient History
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <ul class="nav nav-pills nav-fill" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#kt_tabs_5_1">Appointments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_5_2">Case Histories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_5_3">Documents</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_5_4">Prescriptions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_5_5">Labs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_5_6">Bed Allotments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_5_7">Timeline</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="kt_tabs_5_1" role="tabpanel">
                            <!--begin: Datatable -->
                            <table class="table table-striped- table-bordered table-hover table-checkable kt_table_1">
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
                                @foreach($appointments as $appointment)
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
                        <div class="tab-pane" id="kt_tabs_5_2" role="tabpanel">
                            <!--begin: Datatable -->
                            <table class="table table-striped- table-bordered table-hover table-checkable kt_table_1">
                                <thead>
                                <tr>
                                    <th>Patient</th>
                                    <th>Date</th>
                                    <th>Title</th>
                                    <th>Actions</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($casehistories as $casehistory)
                                    <tr>
                                        <td>{{$casehistory->patient->first_name}}</td>
                                        <td>{{$casehistory->date}}</td>
                                        <td>{{$casehistory->title}}</td>
                                        <td>
                                     <span class="dropdown">
                                    <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                                       <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{route('casehistories.edit',$casehistory->id)}}"><i
                                                class="fa fa-edit"></i>Edit Details</a>
                                        <a href="{{route('casehistories.show',$casehistory->id)}}" class="dropdown-item"><i
                                                class="la la-eye"></i>Display</a>
                                    </div>
                                     </span>

                                        </td>
                                        <td>
                                            <form action="{{route('casehistories.destroy',$casehistory->id)}}" method="post">
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
                            <table class="table table-striped- table-bordered table-hover table-checkable kt_table_1">
                                <thead>
                                <tr>
                                    <th>Patient</th>
                                    <th>Doctor</th>
                                    <th>Date</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($documents as $document)
                                    <tr>
                                        <td>{{$document->patient->first_name}}</td>
                                        <td>{{$document->doctor->first_name}}</td>
                                        <td>{{$document->date}}</td>
                                        <td>{{$document->description}}</td>
                                        <td>
                                     <span class="dropdown">
                                    <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                                       <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{route('documents.edit',$document->id)}}"><i
                                                class="fa fa-edit"></i>Edit Details</a>
                                        <a href="{{route('documents.show',$document->id)}}" class="dropdown-item"><i
                                                class="la la-eye"></i>Display</a>
                                    </div>
                                     </span>

                                        </td>
                                        <td>
                                            <form action="{{route('documents.destroy',$document->id)}}" method="post">
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
                            <table class="table table-striped- table-bordered table-hover table-checkable kt_table_1">
                                <thead>
                                <tr>
                                    <th>Patient</th>
                                    <th>Doctor</th>
                                    <th>date</th>
                                    <th>Actions</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($prescriptions as $prescription)
                                    <tr>
                                        <td>{{$prescription->patient->first_name}}</td>
                                        <td>{{$prescription->doctor->first_name}}</td>
                                        <td>{{$prescription->date}}</td>
                                        <td>
                                     <span class="dropdown">
                                    <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                                       <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{route('prescriptions.edit',$prescription->id)}}"><i
                                                class="fa fa-edit"></i>Edit Details</a>
                                        <a href="{{route('prescriptions.show',$prescription->id)}}" class="dropdown-item"><i
                                                class="la la-eye"></i>Display</a>
                                    </div>
                                     </span>

                                        </td>
                                        <td>
                                            <form action="{{route('prescriptions.destroy',$prescription->id)}}" method="post">
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
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        </div>
                        <div class="tab-pane" id="kt_tabs_5_6" role="tabpanel">
                            <!--begin: Datatable -->
                            <table class="table table-striped- table-bordered table-hover table-checkable kt_table_1">
                                <thead>
                                <tr>
                                    <th>Bed ID</th>
                                    <th>Patient ID</th>
                                    <th>Alloted Date / Time</th>
                                    <th>Discharge Date / Time</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($bedallotments as $bedallotment)
                                    <tr>
                                        <td>{{$bedallotment->bed_id}}</td>
                                        <td>{{$bedallotment->patient_id}}</td>
                                        <td>{{$bedallotment->start_date.' / '.$bedallotment->start_time}}</td>
                                        <td>{{$bedallotment->end_date.' / '.$bedallotment->end_time}}</td>
                                        <td><span
                                                class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">{{$bedallotment->status}}</span></td>
                                        <td>
                                     <span class="dropdown">
                                    <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                                       <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{route('bedallotments.edit',$bedallotment->id)}}"><i
                                                class="fa fa-edit"></i>Edit Details</a>
                                        <a href="{{route('bedallotments.show',$bedallotment->id)}}" class="dropdown-item"><i
                                                class="la la-eye"></i>Display</a>
                                    </div>
                                     </span>
                                        </td>
                                        <td>
                                            <form action="{{route('bedallotments.destroy',$bedallotment->id)}}" method="post">
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
                        <div class="tab-pane" id="kt_tabs_5_7" role="tabpanel">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Portlet-->
        </div>
        <!-- end:: Content -->				</div>

    <!-- begin:: Content -->

@endsection

@section('scripts')
    <script src="{{url('adminpanel')}}/assets/vendors/custom/datatables/datatables.bundle.js"
            type="text/javascript"></script>
    <script src="{{url('adminpanel')}}/assets/js/demo3/pages/crud/datatables/advanced/multiple-controls.js"
            type="text/javascript"></script>
    <script src="{{url('adminpanel')}}/assets/js/demo3/pages/dashboard.js" type="text/javascript"></script>

@endsection

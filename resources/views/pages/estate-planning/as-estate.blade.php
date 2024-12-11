@extends('layouts.master')
{{-- <title>Account Summary: Estate Planning | {{ env('APP_NAME', 'Xinui') }}</title> --}}
@section('title', 'Account Summary: Estate Planning | ' . env('APP_NAME', 'Framework'))
@section('content')
    <div class="container-fluid">

        <!-- Start::page-header -->
        <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <nav>
                    <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">
                                Estate Planning
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Account Summary</li>
                    </ol>
                </nav>
                <h1 class="page-title fw-medium fs-18 mb-0">Overview</h1>
            </div>
        </div>
        <!-- End::page-header -->

        <div class="row">
            <div class="col-xxl-8">
                <div class="row">
                    <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body pb-0 pe-0">
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <span class="avatar avatar-rounded bg-primary svg-white mb-3">
                                            <i class="bx bx-file fs-22"></i>
                                        </span>
                                        <span class="fw-medium fs-13 text-muted pe-3 ps-1">Active Wills</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="pb-3">
                                        <span class="fs-20 fw-medium mb-0 d-flex align-items-center">20</span>
                                        <div class="text-muted fs-13">Increased By </div>
                                        <span class="text-success">10.00%<i class="ti ti-arrow-narrow-up fs-16"></i></span>
                                    </div>
                                    <div id="chart-21"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body pb-0 pe-0">
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <span class="avatar avatar-rounded bg-primary1 svg-white mb-3">
                                            <i class="bx bx-home fs-22"></i>
                                        </span>
                                        <span class="fw-medium fs-13 text-muted pe-3 ps-1">Total Assets</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="pb-3">
                                        <span class="fs-20 fw-medium mb-0 d-flex align-items-center">$2,345,000</span>
                                        <div class="text-muted fs-13">Increased By </div>
                                        <span class="text-success">5.50%<i class="ti ti-arrow-narrow-up fs-16"></i></span>
                                    </div>
                                    <div id="chart-22"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body pb-0 pe-0">
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <span class="avatar avatar-rounded bg-primary2 svg-white mb-3 flex-shrink-0"> 
                                            <i class="bx bx-shield fs-22"></i>
                                        </span>
                                        <span class="fw-medium fs-13 text-muted pe-3 ps-1">Insurance Policies</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="pb-3">
                                        <span class="fs-20 fw-medium mb-0 d-flex align-items-center">15</span>
                                        <div class="text-muted fs-13">Increased By </div>
                                        <span class="text-danger">3.00%<i class="ti ti-arrow-narrow-up fs-16"></i></span>
                                    </div>
                                    <div id="chart-23"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body pb-0 pe-0">
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <span class="avatar avatar-rounded bg-primary3 svg-white mb-3">
                                            <i class="bx bx-user fs-22"></i>
                                        </span>
                                        <span class="fw-medium fs-13 text-muted pe-3 ps-1">Total Beneficiaries</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="pb-3">
                                        <span class="fs-20 fw-medium mb-0 d-flex align-items-center">31</span>
                                        <div class="text-muted fs-13">Increased By </div>
                                        <span class="text-success">12.35%<i class="ti ti-arrow-narrow-up fs-16"></i></span>
                                    </div>
                                    <div id="chart-24"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start:: row-3 -->
        <div class="row">
            <div class="col-xxl-4">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">Active Estate Planning Items</div>
                        <button type="button" class="btn btn-sm btn-primary-light">View All</button>
                    </div>
                    <div class="p-3 pb-2">
                        <div class="d-flex align-items-start gap-3 mb-3">
                            <div class="flex-grow-1">
                                <p class="fw-medium mb-1 fs-14">Living Trust Document
                                    <a href="javascript:void(0);" class="text-info" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Get Info">
                                        <i class="ri-information-2-line fs-13 op-7 lh-1 align-middle"></i>
                                    </a>
                                </p>
                                <p class="text-muted mb-1 fw-normal fs-12">Draft revision in progress.</p>
                                <div>Status: <span class="text-success fw-normal fs-12">90% completed</span></div>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <p class="mb-3 fs-11 text-muted"><i
                                        class="ri-time-line text-muted fs-11 align-middle lh-1 me-1 d-inline-block"></i>2
                                    mins ago</p>
                                <div class="avatar-list-stacked">
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../assets/images/faces/11.jpg" alt="img">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../assets/images/faces/2.jpg" alt="img">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../assets/images/faces/5.jpg" alt="img">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="progress progress-lg rounded-pill p-1 ms-auto bg-primary-transparent"
                                role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-striped progress-bar-animated rounded-pill"
                                    style="width: 90%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 pb-2">
                        <div class="d-flex align-items-start gap-3 mb-3">
                            <div class="flex-grow-1">
                                <p class="fw-medium mb-1 fs-14">Will For John Doe
                                    <a href="javascript:void(0);" class="text-info" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Get Info">
                                        <i class="ri-information-2-line fs-13 op-7 lh-1 align-middle"></i>
                                    </a>
                                </p>
                                <p class="text-muted mb-1 fw-normal fs-12">Waiting for client approval.</p>
                                <div>Status: <span class="text-warning fw-medium fs-12">70% completed</span></div>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <p class="mb-3 fs-11 text-muted"><i
                                        class="ri-time-line text-muted fs-11 align-middle lh-1 me-1 d-inline-block"></i>15
                                    mins ago</p>
                                <div class="avatar-list-stacked">
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../assets/images/faces/8.jpg" alt="img">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../assets/images/faces/2.jpg" alt="img">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="progress progress-lg rounded-pill p-1 ms-auto flex-fill bg-primary1-transparent"
                                role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-primary1 progress-bar-striped progress-bar-animated rounded-pill"
                                    style="width: 70%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="d-flex align-items-start gap-3 mb-3">
                            <div class="flex-grow-1">
                                <p class="fw-medium mb-1 fs-14">Trust Fund Allocation
                                    <a href="javascript:void(0);" class="text-info" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Get Info">
                                        <i class="ri-information-2-line fs-13 op-7 lh-1 align-middle"></i>
                                    </a>
                                </p>
                                <p class="text-muted mb-1 fs-12">Awaiting final adjustments.</p>
                                <div>Status: <span class="text-success fw-medium fs-12">60% completed</span></div>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <p class="mb-3 fs-11 text-muted"><i
                                        class="ri-time-line text-muted fs-11 align-middle lh-1 me-1 d-inline-block"></i>20
                                    mins ago</p>
                                <div class="avatar-list-stacked">
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../assets/images/faces/15.jpg" alt="img">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../assets/images/faces/3.jpg" alt="img">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="progress progress-lg rounded-pill p-1 ms-auto flex-fill bg-primary2-transparent"
                                role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-primary2 progress-bar-striped progress-bar-animated rounded-pill"
                                    style="width: 60%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-6">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">Monthly Planning Goals</div>
                        <a href="javascript:void(0);" class="btn btn-sm btn-light">View All</a>
                    </div>
                    <div class="card-body">
                        <div class="d-flex gap-3 align-items-center justify-content-between text-center p-3 bg-light">
                            <div>
                                <span class="mb-1 d-block"><i
                                        class="ri-circle-fill fs-8 align-middle lh-1 text-primary"></i> New
                                    Documents</span>
                                <h6 class="mb-1">15</h6>
                                <span class="text-success fw-medium"><i class="ri-arrow-up-s-fill"></i> 5.0%</span>
                            </div>
                            <div>
                                <span class="mb-1 d-block"><i
                                        class="ri-circle-fill fs-8 align-middle lh-1 text-primary1"></i> Completed
                                    Tasks</span>
                                <h6 class="mb-1">8</h6>
                                <span class="text-danger fw-medium"><i class="ri-arrow-down-s-fill"></i> 2.0%</span>
                            </div>
                            <div>
                                <span class="mb-1 d-block"><i
                                        class="ri-circle-fill fs-8 align-middle lh-1 text-primary2"></i> Pending
                                    Tasks</span>
                                <h6 class="mb-1">3</h6>
                                <span class="text-success fw-medium"><i class="ri-arrow-up-s-fill"></i> 1.5%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-lg-6">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">Daily Estate Planning Tasks</div>
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                View All <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a class="dropdown-item" href="javascript:void(0);">Download Reports</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Import Documents</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Export Data</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush list-unstyled">
                            <li class="list-group-item border-bottom-0 d-flex gap-3 p-0 align-items-start mb-1">
                                <div class="flex-shrink-0 daily-tasks-time">
                                    <span class="text-muted ms-auto fs-11 flex-shrink-0 flex-fill">09:00 AM</span>
                                </div>
                                <div
                                    class="card border border-primary border-opacity-25 shadow-none custom-card mb-0 bg-primary-transparent">
                                    <div class="card-body">
                                        <p
                                            class="fw-medium mb-2 lh-1 d-flex align-items-center gap-2 justify-content-between">
                                            Review Wills
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="float-end fs-16 text-primary" data-bs-title="View Details"
                                                data-bs-placement="top" data-bs-toggle="tooltip">
                                                <i class="ri-add-circle-fill"></i>
                                            </a>
                                        </p>
                                        <div class="d-flex flex-wrap gap-2 align-items-center">
                                            <span class="badge bg-primary-transparent">Task</span>
                                            <span class="badge bg-primary-transparent">Urgent</span>
                                            <div class="avatar-list-stacked ms-auto">
                                                <span class="avatar avatar-xs avatar-rounded">
                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                </span>
                                                <span class="avatar avatar-xs avatar-rounded">
                                                    <img src="../assets/images/faces/8.jpg" alt="img">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-bottom-0 d-flex gap-3 p-0 align-items-start pt-1 mb-1">
                                <div class="flex-shrink-0 daily-tasks-time">
                                    <span class="text-muted ms-auto fs-11 flex-shrink-0 flex-fill">10:30 AM</span>
                                </div>
                                <div
                                    class="card border border-primary1 border-opacity-25 shadow-none custom-card mb-0 bg-primary1-transparent">
                                    <div class="card-body">
                                        <p
                                            class="fw-medium mb-2 lh-1 d-flex align-items-center gap-2 justify-content-between">
                                            Consultation with Client
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="float-end fs-16 text-primary1" data-bs-title="View Details"
                                                data-bs-placement="top" data-bs-toggle="tooltip">
                                                <i class="ri-add-circle-fill"></i>
                                            </a>
                                        </p>
                                        <div class="d-flex flex-wrap gap-2 align-items-center">
                                            <span class="badge bg-primary-transparent">Meeting</span>
                                            <span class="badge bg-secondary-transparent">Client</span>
                                            <div class="avatar-list-stacked ms-auto">
                                                <span class="avatar avatar-xs avatar-rounded">
                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-bottom-0 d-flex gap-3 p-0 align-items-start pt-1 mb-1">
                                <div class="flex-shrink-0 daily-tasks-time">
                                    <span class="text-muted ms-auto fs-11 flex-shrink-0 flex-fill">12:00 PM</span>
                                </div>
                                <div
                                    class="card border border-primary2 border-opacity-25 shadow-none custom-card mb-0 bg-primary2-transparent">
                                    <div class="card-body">
                                        <p
                                            class="fw-medium mb-2 lh-1 d-flex align-items-center gap-2 justify-content-between">
                                            Finalize Trust Agreement
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="float-end fs-16 text-primary2" data-bs-title="View Details"
                                                data-bs-placement="top" data-bs-toggle="tooltip">
                                                <i class="ri-add-circle-fill"></i>
                                            </a>
                                        </p>
                                        <div class="d-flex flex-wrap gap-2 align-items-center">
                                            <span class="badge bg-info-transparent">Trust</span>
                                            <div class="avatar-list-stacked ms-auto">
                                                <span class="avatar avatar-xs avatar-rounded">
                                                    <img src="../assets/images/faces/12.jpg" alt="img">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-bottom-0 d-flex gap-3 p-0 align-items-start pt-1 mb-0">
                                <div class="flex-shrink-0 daily-tasks-time">
                                    <span class="text-muted ms-auto fs-11 flex-shrink-0 flex-fill">02:00 PM</span>
                                </div>
                                <div
                                    class="card border border-primary3 border-opacity-25 shadow-none custom-card mb-0 bg-primary3-transparent">
                                    <div class="card-body">
                                        <p
                                            class="fw-medium mb-2 lh-1 d-flex align-items-center gap-2 justify-content-between">
                                            Estate Planning Review
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="float-end fs-16 text-primary3" data-bs-title="View Details"
                                                data-bs-placement="top" data-bs-toggle="tooltip">
                                                <i class="ri-add-circle-fill"></i>
                                            </a>
                                        </p>
                                        <div class="d-flex flex-wrap gap-2 align-items-center">
                                            <span class="badge bg-primary-transparent">Review</span>
                                            <div class="avatar-list-stacked ms-auto">
                                                <span class="avatar avatar-xs avatar-rounded">
                                                    <img src="../assets/images/faces/8.jpg" alt="img">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-3 -->

    </div>

@endsection


@section('scripts')
    <!-- Apex Charts JS -->
    <script src="../assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Analytics Dashboard -->
    <script src="../assets/js/analytics-dashboard.js"></script>
@endsection

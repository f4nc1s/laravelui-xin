@extends('layouts.master')
{{-- <title>Dashboard | {{ env('APP_NAME', 'Framework') }}</title> --}}
@section('title', 'Dashboard | ' . env('APP_NAME', 'Framework'))
@section('content')
    <div class="container-fluid">
        <!-- Start::page-header -->
        <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <nav>
                    <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">
                                Dashboards
                            </a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End::page-header -->

        <!-- Start::row-1 -->
        <div class="row mb-4">
            <div class="col-xxl-3 col-md-6">
                <div class="card custom-card overflow-hidden">
                    <div class="card-body">
                        <div class="mb-3 d-flex align-items-start justify-content-between">
                            <span class="avatar avatar-sm bg-primary svg-white">
                                <i class="ri-money-dollar-circle-line fs-16"></i>
                            </span>
                            <span class="badge bg-danger-transparent">-5.20%</span>
                        </div>
                        <div class="d-flex align-items-end justify-content-between flex-wrap">
                            <div class="flex-shrink-0">
                                <div class="text-muted mb-1">Total Investments</div>
                                <h4 class="mb-0 fs-20 fw-medium">$432,000</h4>
                            </div>
                            <div id="Investments" class="flex-shrink-0 text-end ms-auto"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-6">
                <div class="card custom-card overflow-hidden">
                    <div class="card-body">
                        <div class="mb-3 d-flex align-items-start justify-content-between">
                            <span class="avatar avatar-sm bg-success svg-white">
                                <i class="ri-check-double-line fs-16"></i>
                            </span>
                            <span class="badge bg-success-transparent">+7.20%</span>
                        </div>
                        <div class="d-flex align-items-end justify-content-between flex-wrap">
                            <div class="flex-shrink-0">
                                <div class="text-muted mb-1">Completed Plans</div>
                                <h4 class="mb-0 fs-20 fw-medium">122</h4>
                            </div>
                            <div id="CompletedPlans" class="flex-shrink-0 text-end ms-auto"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-6">
                <div class="card custom-card overflow-hidden">
                    <div class="card-body">
                        <div class="mb-3 d-flex align-items-start justify-content-between">
                            <span class="avatar avatar-sm bg-primary2 svg-white">
                                <i class="ri-loop-left-fill fs-16"></i>
                            </span>
                            <span class="badge bg-danger-transparent">-5.20%</span>
                        </div>
                        <div class="d-flex align-items-end justify-content-between flex-wrap">
                            <div class="flex-shrink-0">
                                <div class="text-muted mb-1">Ongoing Policies</div>
                                <h4 class="mb-0 fs-20 fw-medium">1,265</h4>
                            </div>
                            <div id="OngoingPolicies" class="flex-shrink-0 text-end ms-auto"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-6">
                <div class="card custom-card overflow-hidden">
                    <div class="card-body">
                        <div class="mb-3 d-flex align-items-start justify-content-between">
                            <span class="avatar avatar-sm bg-primary3 svg-white">
                                <i class="ri-time-line fs-16"></i>
                            </span>
                            <span class="badge bg-success-transparent">+5.20%</span>
                        </div>
                        <div class="d-flex align-items-end justify-content-between flex-wrap">
                            <div class="flex-shrink-0">
                                <div class="text-muted mb-1">Pending Tasks</div>
                                <h4 class="mb-0 fs-20 fw-medium">320</h4>
                            </div>
                            <div id="PendingTasks" class="flex-shrink-0 text-end ms-auto"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::row-1 -->


        <!-- Start:: row-2 -->
        <div class="row">
            <div class="col-xxl-4">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Current Financial Projects
                        </div>
                        <button type="button" class="btn btn-sm btn-primary-light">View All</button>
                    </div>
                    <div class="p-3 pb-2">
                        <div class="d-flex align-items-start gap-3 mb-3">
                            <div class="flex-grow-1">
                                <p class="fw-medium mb-1 fs-14">Investment Portfolio Review <a href="javascript:void(0);"
                                        class="text-info" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Get Info"><i
                                            class="ri-information-2-line fs-13 op-7 lh-1 align-middle"></i></a></p>
                                <p class="text-muted mb-1 fw-normal fs-12">Reviewing current asset allocations.</p>
                                <div>Status: <span class="text-success fw-normal fs-12">70% completed</span></div>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <p class="mb-3 fs-11 text-muted"><i
                                        class="ri-time-line text-muted fs-11 align-middle lh-1 me-1 d-inline-block"></i>5mins
                                    ago</p>
                                <div class="avatar-list-stacked">
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../assets/images/faces/11.jpg" alt="img">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../assets/images/faces/2.jpg" alt="img">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="progress progress-lg rounded-pill p-1 ms-auto bg-primary-transparent"
                                role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-striped progress-bar-animated rounded-pill"
                                    style="width: 70%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 pb-2">
                        <div class="d-flex align-items-start gap-3 mb-3">
                            <div class="flex-grow-1">
                                <p class="fw-medium mb-1 fs-14">Estate Planning Document Draft <a href="javascript:void(0);"
                                        class="text-info" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Get Info"><i
                                            class="ri-information-2-line fs-13 op-7 lh-1 align-middle"></i></a></p>
                                <p class="text-muted mb-1 fw-normal fs-12">Drafting essential legal documents.</p>
                                <div>Status: <span class="text-warning fw-medium fs-12">40% completed</span></div>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <p class="mb-3 fs-11 text-muted"><i
                                        class="ri-time-line text-muted fs-11 align-middle lh-1 me-1 d-inline-block"></i>15mins
                                    ago</p>
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
                                role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-primary1 progress-bar-striped progress-bar-animated rounded-pill"
                                    style="width: 40%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="d-flex align-items-start gap-3 mb-3">
                            <div class="flex-grow-1">
                                <p class="fw-medium mb-1 fs-14">Insurance Policy Review <a href="javascript:void(0);"
                                        class="text-info" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Get Info"><i
                                            class="ri-information-2-line fs-13 op-7 lh-1 align-middle"></i></a></p>
                                <p class="text-muted mb-1 fw-normal fs-12">Evaluating current insurance premiums.</p>
                                <div>Status: <span class="text-success fw-medium fs-12">55% completed</span></div>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <p class="mb-3 fs-11 text-muted"><i
                                        class="ri-time-line text-muted fs-11 align-middle lh-1 me-1 d-inline-block"></i>30mins
                                    ago</p>
                                <div class="avatar-list-stacked">
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../assets/images/faces/15.jpg" alt="img">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="../assets/images/faces/3.jpg" alt="img">
                                    </span>
                                    <a class="avatar avatar-sm bg-primary border border-2 avatar-rounded text-fixed-white"
                                        href="javascript:void(0);"> 2+ </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="progress progress-lg rounded-pill p-1 ms-auto flex-fill bg-primary2-transparent"
                                role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-primary2 progress-bar-striped progress-bar-animated rounded-pill"
                                    style="width: 55%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-xl-6">
                <div class="card custom-card overflow-hidden">
                    <div class="card-header justify-content-between">
                        <div class="card-title">Assets Allocation</div>
                        <div class="dropdown">
                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-light"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <ul class="dropdown-menu" data-popper-placement="bottom-start">
                                <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div id="allocationAnalysis" class=""></div>
                        <div class="border-top border-block-start-dashed p-3">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <span class="avatar avatar-md bg-primary">
                                    <i class="ri-stock-line fs-20"></i>
                                </span>
                                <div>
                                    <div class="fw-medium text-muted op-7">Equities</div>
                                    <h5 class="mb-0">$240,000 USD</h5>
                                </div>
                                <div class="ms-auto">
                                    <div class="text-success fw-medium"><i
                                            class="ri-arrow-up-s-fill me-1 align-middle"></i>+3.45%</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <span class="avatar avatar-md bg-success">
                                    <i class="ri-file-paper-2-line fs-20"></i>
                                </span>
                                <div>
                                    <div class="fw-medium text-muted op-7">Bonds</div>
                                    <h5 class="mb-0">$150,000 USD</h5>
                                </div>
                                <div class="ms-auto">
                                    <div class="text-danger fw-medium"><i
                                            class="ri-arrow-down-s-fill me-1 align-middle"></i>-1.25%</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <span class="avatar avatar-md bg-warning">
                                    <i class="ri-money-dollar-circle-line fs-20"></i>
                                </span>
                                <div>
                                    <div class="fw-medium text-muted op-7">Cash</div>
                                    <h5 class="mb-0">$42,000 USD</h5>
                                </div>
                                <div class="ms-auto">
                                    <div class="text-success fw-medium"><i
                                            class="ri-arrow-up-s-fill me-1 align-middle"></i>+0.75%</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <span class="avatar avatar-md bg-danger">
                                    <i class="ri-building-line fs-20"></i>
                                </span>
                                <div>
                                    <div class="fw-medium text-muted op-7">REITs</div>
                                    <h5 class="mb-0">$54,784 USD</h5>
                                </div>
                                <div class="ms-auto">
                                    <div class="text-danger fw-medium"><i
                                            class="ri-arrow-down-s-fill me-1 align-middle"></i>-0.50%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-xl-6">
                <div class="card custom-card overflow-hidden">
                    <div class="card-header justify-content-between">
                        <div class="card-title">Assets Overview</div>
                        <div class="dropdown">
                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-light"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <ul class="dropdown-menu" data-popper-placement="bottom-start">
                                <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div id="assetOverview" class=""></div>
                        <div class="border-top border-block-start-dashed p-3">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <span class="avatar avatar-md bg-primary">
                                    <i class="ri-home-4-line fs-20"></i>
                                </span>
                                <div>
                                    <div class="fw-medium text-muted op-7">Real Estate</div>
                                    <h5 class="mb-0">$500,000 USD</h5>
                                </div>
                                <div class="ms-auto">
                                    <div class="text-success fw-medium"><i 
                                            class="ri-arrow-up-s-fill me-1 align-middle"></i>+2.10%</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <span class="avatar avatar-md bg-success">
                                    <i class="ri-file-text-line fs-20"></i>
                                </span>
                                <div>
                                    <div class="fw-medium text-muted op-7">Wills & Trusts</div>
                                    <h5 class="mb-0">6 Documents</h5>
                                </div>
                                <div class="ms-auto">
                                    <div class="text-success fw-medium"><i 
                                            class="ri-arrow-up-s-fill me-1 align-middle"></i>+1 Document</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <span class="avatar avatar-md bg-warning">
                                    <i class="ri-shield-check-line fs-20"></i>
                                </span>
                                <div>
                                    <div class="fw-medium text-muted op-7">Insurance Policies</div>
                                    <h5 class="mb-0">3 Active Policies</h5>
                                </div>
                                <div class="ms-auto">
                                    <div class="text-danger fw-medium"><i 
                                            class="ri-arrow-down-s-fill me-1 align-middle"></i>-0.50%</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <span class="avatar avatar-md bg-danger">
                                    <i class="ri-clipboard-line fs-20"></i>
                                </span>
                                <div>
                                    <div class="fw-medium text-muted op-7">Assets Declared</div>
                                    <h5 class="mb-0">$300,000 USD</h5>
                                </div>
                                <div class="ms-auto">
                                    <div class="text-success fw-medium"><i 
                                            class="ri-arrow-up-s-fill me-1 align-middle"></i>+10%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="col-xxl-5 col-lg-6">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Daily Financial Tasks
                        </div>
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush list-unstyled">
                            <li class="list-group-item border-bottom-0 d-flex gap-3 p-0 align-items-start mb-1">
                                <div class="flex-shrink-0 daily-tasks-time">
                                    <span class="text-muted ms-auto fs-11 flex-shrink-0 flex-fill">09:15 AM</span>
                                </div>
                                <div
                                    class="card border border-primary border-opacity-25 shadow-none custom-card mb-0 bg-primary-transparent">
                                    <div class="card-body">
                                        <p
                                            class="fw-medium mb-2 lh-1 d-flex align-items-center gap-2 justify-content-between">
                                            Investment Review Meeting
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="float-end fs-16 text-primary" data-bs-title="View Details"
                                                data-bs-placement="top" data-bs-toggle="tooltip"><i
                                                    class="ri-add-circle-fill"></i></a>
                                        </p>
                                        <div class="d-flex flex-wrap gap-2 align-items-center">
                                            <span class="badge bg-primary-transparent">Investment</span>
                                            <span class="badge bg-secondary-transparent">Real Estate</span>
                                            <div class="avatar-list-stacked ms-auto">
                                                <span class="avatar avatar-xs avatar-rounded">
                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                </span>
                                                <span class="avatar avatar-xs avatar-rounded">
                                                    <img src="../assets/images/faces/12.jpg" alt="img">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-bottom-0 d-flex gap-3 p-0 align-items-start pt-1 mb-1">
                                <div class="flex-shrink-0 daily-tasks-time">
                                    <span class="text-muted ms-auto fs-11 flex-shrink-0 flex-fill">10:15 AM</span>
                                </div>
                                <div
                                    class="card border border-primary1 border-opacity-25 shadow-none custom-card mb-0 bg-primary1-transparent">
                                    <div class="card-body">
                                        <p
                                            class="fw-medium mb-2 lh-1 d-flex align-items-center gap-2 justify-content-between">
                                            Policy Updates
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="float-end fs-16 text-primary1" data-bs-title="View Details"
                                                data-bs-placement="top" data-bs-toggle="tooltip"><i
                                                    class="ri-add-circle-fill"></i></a>
                                        </p>
                                        <div class="d-flex flex-wrap gap-2 align-items-center">
                                            <span class="badge bg-primary-transparent">Insurance</span>
                                            <span class="badge bg-danger-transparent">Urgent</span>
                                            <div class="avatar-list-stacked ms-auto">
                                                <span class="avatar avatar-xs avatar-rounded">
                                                    <img src="../assets/images/faces/12.jpg" alt="img">
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
                                    <span class="text-muted ms-auto fs-11 flex-shrink-0 flex-fill">04:30 PM</span>
                                </div>
                                <div
                                    class="card border border-primary2 border-opacity-25 shadow-none custom-card mb-0 bg-primary2-transparent">
                                    <div class="card-body">
                                        <p
                                            class="fw-medium mb-2 lh-1 d-flex align-items-center gap-2 justify-content-between">
                                            Document Organization
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="float-end fs-16 text-primary2" data-bs-title="View Details"
                                                data-bs-placement="top" data-bs-toggle="tooltip"><i
                                                    class="ri-add-circle-fill"></i></a>
                                        </p>
                                        <div class="d-flex flex-wrap gap-2 align-items-center">
                                            <span class="badge bg-info-transparent">Tax Documents</span>
                                            <span class="badge bg-danger-transparent">Legal</span>
                                            <div class="avatar-list-stacked ms-auto">
                                                <span class="avatar avatar-xs avatar-rounded">
                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                </span>
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
                                    <span class="text-muted ms-auto fs-11 flex-shrink-0 flex-fill">06:00 PM</span>
                                </div>
                                <div
                                    class="card border border-primary3 border-opacity-25 shadow-none custom-card mb-0 bg-primary3-transparent">
                                    <div class="card-body">
                                        <p
                                            class="fw-medium mb-2 lh-1 d-flex align-items-center gap-2 justify-content-between">
                                            End-of-Day Review
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="float-end fs-16 text-primary3" data-bs-title="View Details"
                                                data-bs-placement="top" data-bs-toggle="tooltip"><i
                                                    class="ri-add-circle-fill"></i></a>
                                        </p>
                                        <div class="d-flex flex-wrap gap-2 align-items-center">
                                            <span class="badge bg-primary-transparent">Daily Tasks</span>
                                            <div class="avatar-list-stacked ms-auto">
                                                <span class="avatar avatar-xs avatar-rounded">
                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                </span>
                                                <span class="avatar avatar-xs avatar-rounded">
                                                    <img src="../assets/images/faces/12.jpg" alt="img">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- End:: row-2 -->
        <!-- End:: row-2 -->

        <!-- Start:: row-3 -->
        <div class="row">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                Transaction History
                            </div>
                            <div class="d-flex flex-wrap gap-2">
                                <div>
                                    <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                        Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">This Month</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">This Year</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <button class="btn btn-secondary btn-sm btn-wave">View All</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col">Transaction Type</th>
                                            <th scope="col">Date & Time</th>
                                            <th scope="col">Reference ID</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Details</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Example of Asset Declaration -->
                                        <tr class="transaction-list">
                                            <td><div class="fw-medium">Asset Declaration</div></td>
                                            <td>2024-06-01 10:15:22</td>
                                            <td>DEC123456789</td>
                                            <td>$500,000 USD</td>
                                            <td><span class="badge bg-primary-transparent">Completed</span></td>
                                            <td class="text-muted">Declared: 3 properties</td>
                                            <td>
                                                <button class="btn btn-info-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View Details"><i class="ri-eye-line"></i></button>
                                                <button class="btn btn-danger-light btn-icon ms-1 btn-sm"><i class="ri-delete-bin-5-line"></i></button>
                                            </td>
                                        </tr>
                                        <!-- Example of Policy Purchase -->
                                        <tr class="transaction-list">
                                            <td><div class="fw-medium">Policy Purchase</div></td>
                                            <td>2024-06-02 14:30:45</td>
                                            <td>POL987654321</td>
                                            <td>$1,200 USD</td>
                                            <td><span class="badge bg-primary-transparent">Completed</span></td>
                                            <td class="text-muted">Purchased: Life Insurance</td>
                                            <td>
                                                <button class="btn btn-info-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View Details"><i class="ri-eye-line"></i></button>
                                                <button class="btn btn-danger-light btn-icon ms-1 btn-sm"><i class="ri-delete-bin-5-line"></i></button>
                                            </td>
                                        </tr>
                                        <!-- Example of Policy Update -->
                                        <tr class="transaction-list">
                                            <td><div class="fw-medium">Policy Update</div></td>
                                            <td>2024-06-03 09:45:10</td>
                                            <td>POL567890123</td>
                                            <td>$0 USD</td>
                                            <td><span class="badge bg-primary-transparent">Completed</span></td>
                                            <td class="text-muted">Updated: Coverage Increased</td>
                                            <td>
                                                <button class="btn btn-info-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View Details"><i class="ri-eye-line"></i></button>
                                                <button class="btn btn-danger-light btn-icon ms-1 btn-sm"><i class="ri-delete-bin-5-line"></i></button>
                                            </td>
                                        </tr>
                                        <!-- Example of Asset Distribution -->
                                        <tr class="transaction-list">
                                            <td><div class="fw-medium">Asset Distribution</div></td>
                                            <td>2024-06-04 16:20:55</td>
                                            <td>DISTR246801357</td>
                                            <td>$300,000 USD</td>
                                            <td><span class="badge bg-primary-transparent">Completed</span></td>
                                            <td class="text-muted">Distributed to beneficiaries</td>
                                            <td>
                                                <button class="btn btn-info-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View Details"><i class="ri-eye-line"></i></button>
                                                <button class="btn btn-danger-light btn-icon ms-1 btn-sm"><i class="ri-delete-bin-5-line"></i></button>
                                            </td>
                                        </tr>
                                        <!-- Example of Withdrawal -->
                                        <tr class="transaction-list">
                                            <td><div class="fw-medium">Withdrawal</div></td>
                                            <td>2024-06-05 11:55:30</td>
                                            <td>WITHD654321789</td>
                                            <td>$5,000 USD</td>
                                            <td><span class="badge bg-primary3-transparent">Pending</span></td>
                                            <td class="text-muted">Requested for personal expenses</td>
                                            <td>
                                                <button class="btn btn-info-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View Details"><i class="ri-eye-line"></i></button>
                                                <button class="btn btn-danger-light btn-icon ms-1 btn-sm"><i class="ri-delete-bin-5-line"></i></button>
                                            </td>
                                        </tr>
                                        <!-- Example of Transfer -->
                                        <tr class="transaction-list">
                                            <td><div class="fw-medium">Transfer</div></td>
                                            <td>2024-06-06 08:10:18</td>
                                            <td>TRANS135790246</td>
                                            <td>$1,500 USD</td>
                                            <td><span class="badge bg-primary-transparent">Completed</span></td>
                                            <td class="text-muted">Transferred to savings account</td>
                                            <td>
                                                <button class="btn btn-info-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View Details"><i class="ri-eye-line"></i></button>
                                                <button class="btn btn-danger-light btn-icon ms-1 btn-sm"><i class="ri-delete-bin-5-line"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer border-top-0">
                            <nav aria-label="Page navigation">
                                <ul class="pagination mb-0 float-end">
                                    <li class="page-item disabled">
                                        <a class="page-link">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="javascript:void(0);">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0);">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-xxl-3 col-xl-6">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Market Cap
                        </div>
                        <a href="javascript:void(0);"
                            class="btn btn-light btn-wave btn-sm text-muted waves-effect waves-light">View All<i
                                class="ti ti-arrow-narrow-right ms-1"></i></a>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled market-cap-list mb-1">
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <span class="avatar bg-primary-transparent avatar-rounded svg-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28"
                                                viewBox="0 0 128 128">
                                                <path
                                                    d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z">
                                                </path>
                                                <path fill="#fff"
                                                    d="M94.3 71.4c-.5-3.6-2.3-6.4-5.4-8.2-1.4-.8-3.1-1.4-4.7-2.1.2-.1.3-.3.4-.3 7.9-4.1 7.2-16.3 1.5-20.5-2.3-1.7-4.9-2.8-7.7-3.4-2-.4-3.9-.7-6-1.1 0-3.5.1-8.5.1-12.4H65c0 3.8-.1 8.7-.1 12.1H59c0-3.5 0-8.3.1-12.1h-7.4c0 4-.1 8.8-.1 12.3-5.1 0-10-.1-15-.1 0 2.7 0 5.3-.1 7.9h3c.9 0 1.9 0 2.8.1 2.6.2 3.9 1.6 3.9 4.2l-.3 31.9c0 2.3-1 3.3-3.3 3.3h-5c-.5 3-1 5.9-1.6 8.9 5 .1 10 .1 15 .2 0 3.8 0 8.7-.1 12.7h7.4c0-4 .1-8.7.1-12.5 2.1.1 4 .1 5.9.2 0 3.8-.1 8.4-.1 12.3h7.4c0-4 .1-8.7.1-12.4.3 0 .5-.1.6-.1 3.5-.6 7.2-.9 10.6-1.7 4.5-1.1 8.1-3.7 9.9-8.2 1.7-3.6 2-7.2 1.5-11zM59 44.3c4.6 0 9.1-.4 13.4 1.5 2.8 1.2 4.2 3.5 4 6.3-.2 2.9-1.9 5-4.8 6-4.1 1.3-8.3 1.3-12.7 1.1 0-5 .1-9.8.1-14.9zm16.2 37.1c-4.1 1.8-8.5 1.8-12.8 1.9-1.2 0-2.4-.1-3.8-.1.1-5.5.1-10.9.2-16.4 5.6 0 11.2-.4 16.5 1.9 2.7 1.2 4.3 3.3 4.3 6.4 0 3.1-1.6 5.1-4.4 6.3z">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="fw-semibold d-block mb-1">Bitcoin</span>
                                        <div class="d-flex align-items-center text-muted gap-2 lh-1 fs-13">
                                            <span class="d-block">BTC</span>
                                            <div class="vr"></div>
                                            <span>$15 B</span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <span class="d-block h6 mb-1 fw-semibold">$18,907.01</span>
                                        <div class="d-flex align-items-center text-success gap-2 lh-1 fs-13">
                                            <span class="d-block">+1,30.90</span>
                                            <div class="vr"></div>
                                            <span><i class="ti ti-arrow-narrow-up"></i>2.9%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <div class="avatar bg-secondary-transparent svg-secondary avatar-rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28"
                                                viewBox="0 0 128 128">
                                                <path
                                                    d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z">
                                                </path>
                                                <path fill="#fff"
                                                    d="M65.2 87.2v22.7l28.1-39.5zM92.3 63.1l-27.1-45v32.7zM65.2 53.3v28l26.9-15.7zM35.8 63.1l27-45v32.7zM62.8 53.3v28L35.9 65.6zM62.8 87.2v22.7L34.7 70.4z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="fw-semibold d-block mb-1">Ethereum</span>
                                        <div class="d-flex align-items-center text-muted gap-2 lh-1 fs-13">
                                            <span class="d-block">ETH</span>
                                            <div class="vr"></div>
                                            <span>$11 B</span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <span class="d-block h6 mb-1 fw-semibold">$15,135.25</span>
                                        <div class="d-flex align-items-center text-success gap-2 lh-1 fs-13">
                                            <span class="d-block">+1,07.09</span>
                                            <div class="vr"></div>
                                            <span><i class="ti ti-arrow-narrow-up"></i>3.0%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <span class="avatar bg-success-transparent svg-success avatar-rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28"
                                                viewBox="0 0 128 128">
                                                <path
                                                    d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z">
                                                </path>
                                                <path fill="#fff"
                                                    d="M20.8 89.3c1.4-4.1 2.7-7.9 4.1-11.8.1-.4.9-.7 1.3-.7 2.3-.1 4.7 0 7 0H79c1.2 0 1.8-.4 2.1-1.5 2.5-7.5 5.2-15 7.8-22.5.1-.4.2-.8.4-1.4H33.8c1.4-4.2 2.8-8.1 4.1-12 .1-.3.7-.6 1.1-.6 1.4-.1 2.8 0 4.2 0 18.8 0 37.6.1 56.3-.1 5.6-.1 11.6 4.3 9.2 12.5-1.8 6.1-4.1 12.1-6.2 18.2-.7 2.1-1.4 4.1-2.1 6.2-2.6 7.2-7.9 11.6-15.2 13.6-.7.2-1.4.2-2.1.2H22.3c-.4-.1-.8-.1-1.5-.1z">
                                                </path>
                                                <path fill="#fff"
                                                    d="M55.9 58.1c-1.4 4-2.8 7.7-4.2 11.4-.1.3-.7.5-1 .5H19.2c-.1 0-.3-.1-.6-.2 1.3-3.7 2.6-7.3 4-10.9.1-.3.7-.7 1-.7 10.7-.1 21.4-.1 32.3-.1z">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="fw-semibold d-block mb-1">Dash</span>
                                        <div class="d-flex align-items-center text-muted gap-2 lh-1 fs-13">
                                            <span class="d-block">DASH</span>
                                            <div class="vr"></div>
                                            <span>$23 B</span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <span class="d-block h6 mb-1 fw-semibold">$15,176.46</span>
                                        <div class="d-flex align-items-center text-danger gap-2 lh-1 fs-13">
                                            <span class="d-block">-1,8.01</span>
                                            <div class="vr"></div>
                                            <span><i class="ti ti-arrow-narrow-down"></i>0.1%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <div class="avatar bg-warning-transparent svg-warning avatar-rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28"
                                                viewBox="0 0 128 128">
                                                <path
                                                    d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z">
                                                </path>
                                                <path fill="#fff"
                                                    d="M63.8 22.6c3.7-.1 7.2.6 10.2 2.7 1.4.9 2.4.8 3.6-.5 2.4-2.6 5-5 7.5-7.6.9-.9 1.8-1.5 2.9-.2 1.1 1.1.8 2-.2 2.9-2.6 2.6-5 5.2-7.6 7.8-1.1 1.1-1.3 1.9-.5 3.3 5.8 10.4 2.9 22.5-8.6 28.1-1.1.5-2.3.8-3.5 1-1.4.3-1.9 1-1.9 2.5.1 3 .1 6 0 8.9 0 1.6.5 2.3 2.1 2.7 6.2 1.5 10.6 5.2 13.3 10.9 2.6 5.5 1.9 15.4-3.8 21.3-4.8 4.9-13.2 6.9-19.5 4.4-7.5-3-12.1-9.6-12.2-17.5-.1-9.6 5.1-16.4 14.3-19 1.4-.4 2.2-1 2.1-2.5-.1-3.4 0-6.8-.2-10.2 0-.6-1.1-1.4-1.8-1.6-6-1.6-10.4-5.2-12.9-10.8-5.6-13 4.3-27.4 16.7-26.6zM79 92.8c0-7.9-6.9-15.1-14.5-15.1-8-.1-15.3 7-15.4 15-.1 7.9 7.3 15.6 14.9 15.5 8.1-.1 15-7.2 15-15.4zM49.3 41.1c0 8.6 6.6 15.6 14.9 15.6 7.7 0 14.8-7.1 14.8-15.1 0-7.4-5.5-15.2-14.7-15-8.4.1-14.9 6.3-15 14.5z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="fw-semibold d-block mb-1">Golem</span>
                                        <div class="d-flex align-items-center text-muted gap-2 lh-1 fs-13">
                                            <span class="d-block">GLM</span>
                                            <div class="vr"></div>
                                            <span>$2 B</span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <span class="d-block h6 mb-1 fw-semibold">$11,576.1</span>
                                        <div class="d-flex align-items-center text-success gap-2 lh-1 fs-13">
                                            <span class="d-block">+1,67.08</span>
                                            <div class="vr"></div>
                                            <span><i class="ti ti-arrow-narrow-up"></i>0.03%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <div class="avatar bg-info-transparent svg-info avatar-rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28"
                                                viewBox="0 0 128 128">
                                                <path
                                                    d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z">
                                                </path>
                                                <path fill="#fff"
                                                    d="M59.5 87.6l5-19 11.9-4.4 3-11.2-.1-.2-11.7 4.3L76 25.2H52L40.9 66.8l-9.2 3.4-3.1 11.5 9.3-3.4-6.6 24.5h64l4.1-15.2z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="fw-semibold d-block mb-1">Litecoin</span>
                                        <div class="d-flex align-items-center text-muted gap-2 lh-1 fs-13">
                                            <span class="d-block">LTC</span>
                                            <div class="vr"></div>
                                            <span>$13 B</span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <span class="d-block h6 mb-1 fw-semibold">$16,581.81</span>
                                        <div class="d-flex align-items-center text-danger gap-2 lh-1 fs-13">
                                            <span class="d-block">-1,01.05</span>
                                            <div class="vr"></div>
                                            <span><i class="ti ti-arrow-narrow-down"></i>3.8%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <div class="avatar bg-danger-transparent svg-danger avatar-rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28"
                                                viewBox="0 0 128 128">
                                                <path
                                                    d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z">
                                                </path>
                                                <path fill="#fff"
                                                    d="M63.9 111.8c-.9-.4-1.7-.7-2.4-1.1-11.8-7-23.7-14.1-35.5-21.2-2.7-1.6-3.2-3.2-1.6-6.1 12-21.5 24-43 35.9-64.5.8-1.5 1.8-2.6 3.6-2.6s2.8 1.2 3.6 2.7c11.9 21.4 23.9 42.9 35.8 64.3 1.6 2.9 1.2 4.5-1.6 6.2l-35.1 21c-.8.5-1.8.9-2.7 1.3zm-4.2-22.2c-2.8-1.7-5.5-3.3-8.2-4.9-2-1.2-3.9-2.6-5.9-3.8-.8-.5-2-.9-2.9-.6-4.9 1.4-9.4 3.9-14 6.8 11.3 6.7 22.2 13.3 33.4 20 0-4.5.1-8.6 0-12.7-.1-2.5.9-4.5 2.6-6.1 1.2-1.1 2.6-2.1 4-2.8 4-1.9 7.2-4.5 9-8.9.8 1.3 1.5 2.3 2.2 3.4-1.9 3.5-4.7 6-8.1 7.8-1.6.8-3.1 1.8-4.5 2.9-.7.6-1.6 1.6-1.6 2.4-.2 4.5-.1 9.1-.1 14 11.2-6.7 22-13.2 33.3-19.9-4.4-2.2-8.4-4.3-12.4-6.2-2.9-1.4-4.9-3.4-6.1-6.3-.8-2-1.5-4.1-2.1-6.3-1.5-5.8-5-9.6-10.8-11.3-.6-.2-1.3-.3-2-.5 2.4-3.4 2.4-3.4 5.9-1.8 5.3 2.5 8.9 6.6 10.1 12.3 1.2 6 3.8 10.5 9.9 12.5 1.6.5 3.1 1.5 4.6 2.3.9.4 1.7.8 2.6 1.2.1-.1.2-.2.3-.4-10.8-19.6-21.8-39.2-32.7-58.8-.2 0-.4.1-.6.1v2.2c0 7-.2 14 .1 21 .1 4.1-1.5 6.8-4.8 8.9-1.2.8-2.4 1.5-3.7 2.1-4 2-6.7 5.2-7.6 9.5-.5 2.4-.4 4.9-.5 7.3-3.7-1.1-3.7-1.1-3.4-5.1.6-6.8 4.1-11.7 10-15 1.6-.9 3.3-1.7 4.6-3 .9-.9 1.7-2.4 1.7-3.7.2-7.7.1-15.4.1-23.2 0-.4-.1-.9-.3-1.7-11 20-21.8 39.4-32.9 59.2 3.8-1.8 7.2-3.3 10.6-4.9 2.8-1.3 5.6-1.1 8.2.3 1.7.9 3.4 1.8 4.9 3.1 2.8 2.5 5.8 4.5 9.8 5-.9 1.2-1.6 2.1-2.7 3.6z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="fw-semibold d-block mb-1">Augur</span>
                                        <div class="d-flex align-items-center text-muted gap-2 lh-1 fs-13">
                                            <span class="d-block">REP</span>
                                            <div class="vr"></div>
                                            <span>$10 B</span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <span class="d-block h6 mb-1 fw-semibold">$10,107.51</span>
                                        <div class="d-flex align-items-center text-success gap-2 lh-1 fs-13">
                                            <span class="d-block">+1,10.30</span>
                                            <div class="vr"></div>
                                            <span><i class="ti ti-arrow-narrow-up"></i>1.89%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-xxl-4 col-xl-6">
                <div class="card custom-card overflow-hidden">
                    <div class="card-header justify-content-between">
                        <div class="card-title">Assets Overview</div>
                        <div class="dropdown">
                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-light"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <ul class="dropdown-menu" data-popper-placement="bottom-start">
                                <li><a class="dropdown-item" href="javascript:void(0);">Today </a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">This week</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div id="balanceAnalysis" class=""></div>
                        <div class="border-top border-block-start-dashed p-3">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <span class="avatar avatar-md bg-primary">
                                    <i class="ri-wallet-3-line fs-20"></i>
                                </span>
                                <div>
                                    <div class="fw-medium text-muted op-7">Funding</div>
                                    <h5 class="mb-0">$54,784 USD</h5>
                                </div>
                                <div class="ms-auto">
                                    <div class="text-success fw-medium"><i
                                            class="ri-arrow-down-s-fill me-1 align-middle"></i>1.05%</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-3 pt-1 mb-1">
                                <span class="avatar avatar-md bg-primary1">
                                    <i class="ri-arrow-up-down-line fs-20"></i>
                                </span>
                                <div>
                                    <div class="fw-medium text-muted op-7">Trading</div>
                                    <h5 class="mb-0">$23,489 USD</h5>
                                </div>
                                <div class="ms-auto">
                                    <div class="text-danger fw-medium"><i
                                            class="ri-arrow-down-s-fill me-1 align-middle"></i>1.05%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-xxl-5">
                <div class="card custom-card overflow-hidden">
                    <div class="card-header justify-content-between">
                        <div class="card-title">Transaction History</div>
                        <a href="javascript:void(0);" class="text-muted text-decoration-underline link-offset-2">View
                            All</a>
                    </div>
                    <div class="card-body p-0 pt-1">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Cryptocurrency</th>
                                        <th>Action</th>
                                        <th>Date & Time</th>
                                        <th>Change</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="lh-1">
                                                    <span
                                                        class="avatar avatar-rounded avatar-md p-2 bg-primary3-transparent">
                                                        <img src="../assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg"
                                                            alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="d-block fw-medium">Bitcoin</span>
                                                    <span class="d-block text-muted">BTC</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Deposited</td>
                                        <td>12 Apr, 2024 13:12</td>
                                        <td>
                                            <span class="text-success">+ 25,00 BTC<i
                                                    class="ri-arrow-up-line fs-12 lh-1 text-success ms-1"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-rounded avatar-md p-2 bg-gray-200">
                                                        <img src="../assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg"
                                                            alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="d-block fw-medium">Ethereum</span>
                                                    <span class="d-block text-muted">ETH</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Withdraw</td>
                                        <td>20 Apr, 2024 08:14</td>
                                        <td>
                                            <span class="text-danger">- 25,00 ETH<i
                                                    class="ri-arrow-down-line fs-12 lh-1 text-danger ms-1"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="lh-1">
                                                    <span
                                                        class="avatar avatar-rounded avatar-md p-2 bg-primary3-transparent">
                                                        <img src="../assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg"
                                                            alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="d-block fw-medium">Bitcoin</span>
                                                    <span class="d-block text-muted">BTC</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Buy</td>
                                        <td>12 Apr, 2024 16:37</td>
                                        <td>
                                            <span class="text-success">+ 25,00 BTC<i
                                                    class="ri-arrow-up-line fs-12 lh-1 text-success ms-1"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="lh-1">
                                                    <span
                                                        class="avatar avatar-rounded avatar-md p-2 bg-success-transparent">
                                                        <img src="../assets/images/crypto-currencies/crypto-icons/tether-usdt-logo.svg"
                                                            alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="d-block fw-medium">Tether</span>
                                                    <span class="d-block text-muted">USDT</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Convert</td>
                                        <td>12 Apr, 2024 11:45</td>
                                        <td>
                                            <span class="text-success">+ $610,539 USDT<i
                                                    class="ri-arrow-up-line fs-12 lh-1 text-success ms-1"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-rounded avatar-md p-2 bg-gray-200">
                                                        <img src="../assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg"
                                                            alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="d-block fw-medium">Ethereum</span>
                                                    <span class="d-block text-muted">ETH</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">Deposited</td>
                                        <td class="border-bottom-0">20 Apr, 2024 08:55</td>
                                        <td class="border-bottom-0">
                                            <span class="text-danger">- 25,00 ETH<i
                                                    class="ri-arrow-down-line fs-12 lh-1 text-danger ms-1"></i></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- End:: row-3 -->

        <!-- Start:: row-4 -->
        {{-- <div class="row">
            <!-- Start:: row-1 -->
            <div class="row justify-content-center">
                <div class="col-xxl-11">
                    <div class="card custom-card border overflow-hidden">
                        <div class="card-header">
                            <div class="card-title">
                                History
                            </div>
                        </div>
                        <div class="card-body bg-light">
                            <div class="timeline container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="timeline-container">
                                            <div class="timeline-end">
                                                <span
                                                    class="p-1 fs-11 bg-primary2 text-fixed-white backdrop-blur text-center border border-primary2 border-opacity-10 rounded-1 lh-1 fw-medium">
                                                    22 January 2024
                                                </span>
                                            </div>
                                            <div class="timeline-continue">
                                                <div class="timeline-right">
                                                    <div class="timeline-content">
                                                        <p class="timeline-date text-muted mb-2">
                                                            15:36, Monday
                                                        </p>
                                                        <div class="timeline-box">
                                                            <p class="mb-2">
                                                                <b>You </b> Tagged <b> Emma Thompson</b> in a Photo.
                                                            </p>
                                                            <p class="mb-2">
                                                                "Including Emma in cherished memories captured on camera,
                                                                tagging her in a photo to share a moment of joy or
                                                                significance and inviting her to reminisce together."
                                                            </p>
                                                            <p class="profile-activity-media mb-0">
                                                                <a href="javascript:void(0);">
                                                                    <img src="../assets/images/media/media-17.jpg"
                                                                        alt="" class="mb-0">
                                                                </a>
                                                                <a href="javascript:void(0);">
                                                                    <img src="../assets/images/media/media-18.jpg"
                                                                        alt="" class="mb-0">
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="timeline-right">
                                                    <div class="timeline-content">
                                                        <p class="timeline-date text-muted mb-2">
                                                            22:45, Monday
                                                        </p>
                                                        <div class="timeline-box">
                                                            <p class="text-muted mb-2">
                                                                <span class="text-default"><b>Michel</b> Retweeted Emily <a
                                                                        href="javascript:void(0);"
                                                                        class="text-primary1 fw-medium text-decoration-underline">Davis</a>'s
                                                                    Tweet </span>.
                                                            </p>
                                                            <p class="text-muted mb-0">
                                                                Amplifying Emily's message and sharing it with your own
                                                                Twitter followers, acknowledging the importance or relevance
                                                                of her tweet and extending its reach across the platform.Sed
                                                                ut perspiciatis unde omnis iste natus error sit voluptatem
                                                                accusantium doloremque laudantium
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="timeline-end mb-5">
                                                    <span
                                                        class="p-1 fs-11 bg-primary3 text-fixed-white backdrop-blur text-center border border-primary2 border-opacity-10 rounded-1 lh-1 fw-medium z-1 position-relative">
                                                        25 January 2024
                                                    </span>
                                                </div>
                                                <div class="timeline-right">
                                                    <div class="timeline-content">
                                                        <p class="timeline-date text-muted mb-2">
                                                            09:14, Thursday
                                                        </p>
                                                        <div class="timeline-box">
                                                            <p class="text-muted mb-1">
                                                                <span class="text-default"><b>You</b> Shared <b>a Recipe
                                                                    </b></span>on Sarah Johnson's Timeline.
                                                            </p>
                                                            <p class="text-muted">Spreading culinary inspiration by sharing
                                                                a mouth-watering recipe on Sarah's timeline, encouraging
                                                                others to indulge in delicious homemade dishes and fostering
                                                                a sense of community around food.</p>
                                                            <p class="profile-activity-media mb-0">
                                                                <a href="javascript:void(0);">
                                                                    <img src="../assets/images/media/media-59.jpg"
                                                                        class="mb-0" alt="">
                                                                </a>
                                                                <a href="javascript:void(0);">
                                                                    <img src="../assets/images/media/media-60.jpg"
                                                                        class="mb-0" alt="">
                                                                </a>
                                                                <a href="javascript:void(0);">
                                                                    <img src="../assets/images/media/media-61.jpg"
                                                                        class="mb-0" alt="">
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="timeline-right">
                                                    <div class="timeline-content">
                                                        <p class="timeline-date text-muted mb-2">
                                                            17:56, Thursday
                                                        </p>
                                                        <div class="timeline-box mb-2">
                                                            <p class="mb-1">
                                                                <b>You</b> Participated in a Poll Created by <b> Ethan
                                                                    Clark</b> <a class="text-primary2"
                                                                    href="javascript:void(0);"><u>#analysis-decision-making</u></a>.
                                                            </p>
                                                            <p class="text-muted">Sharing your perspective and contributing
                                                                to Ethan's data collection through participation in his
                                                                poll, providing valuable feedback and insights to inform
                                                                further analysis and decision-making.</p>
                                                            <p class="profile-activity-media mb-0">
                                                                <a href="javascript:void(0);">
                                                                    <img src="../assets/images/media/media-26.jpg"
                                                                        alt="" class="mb-0">
                                                                </a>
                                                                <a href="javascript:void(0);">
                                                                    <img src="../assets/images/media/media-29.jpg"
                                                                        alt="" class="mb-0">
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End:: row-1 -->
        </div> --}}
        <!-- End:: row-4 -->


    </div>
@endsection

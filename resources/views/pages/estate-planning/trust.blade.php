@extends('layouts.master')
{{-- <title>Empty | {{ env('APP_NAME', 'Xinui') }}</title> --}}
@section('title', 'Trust | ' . env('APP_NAME', 'Framework'))
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
                        <li class="breadcrumb-item active" aria-current="page">Trust</li>
                    </ol>
                </nav>
                {{-- <h1 class="page-title fw-medium fs-18 mb-0">HRM</h1> --}}
            </div>
            {{-- <div class="btn-list">
                <button class="btn btn-white btn-wave">
                    <i class="ri-filter-3-line align-middle me-1 lh-1"></i> Filter
                </button>
                <button class="btn btn-primary btn-wave me-0">
                    <i class="ri-share-forward-line me-1"></i> Share
                </button>
            </div> --}}
        </div>
        <!-- End::page-header -->

        <!-- Start::row-1 -->
        <div class="row row-cols row-cols-xl-5">
            <div class="col-xxl col-xl-6">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="d-flex gap-3 align-items-center">
                            <div class="flex-fill">
                                <p class="text-muted fw-medium mb-2">TOTAL TRUST FUNDS</p>
                                <h4 class="mb-1">$47,784</h4> <!-- Adjusted to show currency -->
                                <div class="text-muted fs-13">Increased By <span class="text-success">1.6%<i
                                            class="ti ti-arrow-narrow-up fs-16"></i></span></div>
                            </div>
                            <span
                                class="avatar avatar-lg bg-primary-transparent svg-primary avatar-rounded border-3 border border-opacity-50 flex-shrink-0 border-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                                    viewBox="0 0 256 256">
                                    <path d="M224,80l-96,56L32,80l96-56Z" opacity="0.2"></path>
                                    <path
                                        d="M230.91,172A8,8,0,0,1,228,182.91l-96,56a8,8,0,0,1-8.06,0l-96-56A8,8,0,0,1,36,169.09l92,53.65,92-53.65A8,8,0,0,1,230.91,172ZM220,121.09l-92,53.65L36,121.09A8,8,0,0,0,28,134.91l96,56a8,8,0,0,0,8.06,0l96-56A8,8,0,1,0,220,121.09ZM24,80a8,8,0,0,1,4-6.91l96-56a8,8,0,0,1,8.06,0l96,56a8,8,0,0,1,0,13.82l-96,56a8,8,0,0,1-8.06,0l-96-56A8,8,0,0,1,24,80Zm23.88,0L128,126.74,208.12,80,128,33.26Z">
                                    </path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl col-xl-6">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="d-flex gap-3 align-items-center">
                            <div class="flex-fill">
                                <p class="text-muted fw-medium mb-2">ACTIVE TRUST ACCOUNTS</p>
                                <h4 class="mb-1">5</h4> <!-- Representing the number of active trusts -->
                                <div class="text-muted fs-13">Stable <span class="text-warning">0.0%<i
                                            class="ti ti-minus fs-16"></i></span></div>
                            </div>
                            <span
                                class="avatar avatar-lg bg-primary1-transparent svg-primary1 avatar-rounded border-3 border border-opacity-50 flex-shrink-0 border-primary1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                                    viewBox="0 0 256 256">
                                    <path d="M216,48V88H40V48a8,8,0,0,1,8-8H208A8,8,0,0,1,216,48Z" opacity="0.2"></path>
                                    <path
                                        d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-68-76a12,12,0,1,1-12-12A12,12,0,0,1,140,132Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,184,132ZM96,172a12,12,0,1,1-12-12A12,12,0,0,1,96,172Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,140,172Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,184,172Z">
                                    </path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl col-xl-6">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="d-flex gap-3 align-items-center">
                            <div class="flex-fill">
                                <p class="text-muted fw-medium mb-2">APPLICATIONS IN PROGRESS</p>
                                <h4 class="mb-1">2</h4> <!-- Number of applications currently being processed -->
                                <div class="text-muted fs-13">Increased By <span class="text-success">1.3%<i
                                            class="ti ti-arrow-narrow-up fs-16"></i></span></div>
                            </div>
                            <span
                                class="avatar avatar-lg bg-primary2-transparent svg-primary2 avatar-rounded border-3 border border-opacity-50 flex-shrink-0 border-primary2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                                    viewBox="0 0 256 256">
                                    <path d="M120,104A40,40,0,1,1,80,64,40,40,0,0,1,120,104Z" opacity="0.2"></path>
                                    <path
                                        d="M152,80a8,8,0,0,1,8-8h88a8,8,0,0,1,0,16H160A8,8,0,0,1,152,80Zm96,40H160a8,8,0,0,0,0,16h88a8,8,0,0,0,0-16Zm0,48H184a8,8,0,0,0,0,16h64a8,8,0,0,0,0-16Zm-96.25,22a8,8,0,0,1-5.76,9.74,7.55,7.55,0,0,1-2,.26,8,8,0,0,1-7.75-6c-6.16-23.94-30.34-42-56.25-42s-50.09,18.05-56.25,42a8,8,0,0,1-15.5-4c5.59-21.71,21.84-39.29,42.46-48a48,48,0,1,1,58.58,0C129.91,150.71,146.16,168.29,151.75,190ZM80,136a32,32,0,1,0-32-32A32,32,0,0,0,80,136Z">
                                    </path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl col-xl-6">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="d-flex gap-3 align-items-center">
                            <div class="flex-fill">
                                <p class="text-muted fw-medium mb-2">REJECTED APPLICATIONS</p>
                                <h4 class="mb-1">1</h4> <!-- Number of applications rejected -->
                                <div class="text-muted fs-13">Decreased By <span class="text-danger">0.3%<i
                                            class="ti ti-arrow-narrow-down fs-16"></i></span></div>
                            </div>
                            <span
                                class="avatar avatar-lg bg-primary3-transparent svg-primary3 avatar-rounded border-3 border border-opacity-50 flex-shrink-0 border-primary3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                                    viewBox="0 0 256 256">
                                    <path d="M224,128a96,96,0,1,1-96-96A96,96,0,0,1,224,128Z" opacity="0.2"></path>
                                    <path
                                        d="M165.66,101.66,139.31,128l26.35,26.34a8,8,0,0,1-11.32,11.32L128,139.31l-26.34,26.35a8,8,0,0,1-11.32-11.32L116.69,128,90.34,101.66a8,8,0,0,1,11.32-11.32L128,116.69l26.34-26.35a8,8,0,0,1,11.32,11.32ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z">
                                    </path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl col-xl-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="d-flex gap-3 align-items-center">
                            <div class="flex-fill">
                                <p class="text-muted fw-medium mb-2">APPLICATIONS ON HOLD</p>
                                <h4 class="mb-1">1</h4> <!-- Number of applications on hold -->
                                <div class="text-muted fs-13">Increased By <span class="text-success">0.1%<i
                                            class="ti ti-arrow-narrow-up fs-16"></i></span></div>
                            </div>
                            <span
                                class="avatar avatar-lg bg-secondary-transparent svg-secondary avatar-rounded border-3 border border-opacity-50 flex-shrink-0 border-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                                    viewBox="0 0 256 256">
                                    <path
                                        d="M159.46,53l-17.78,83H114.32L96.54,53A24,24,0,0,1,120,24h16A24,24,0,0,1,159.46,53Z"
                                        opacity="0.2"></path>
                                    <path
                                        d="M224,224a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,224Zm0-80v40a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V144a16,16,0,0,1,16-16h56.43L88.72,54.71A32,32,0,0,1,120,16h16a32,32,0,0,1,31.29,38.71L151.57,128H208A16,16,0,0,1,224,144ZM120.79,128h14.42l16.43-76.65A16,16,0,0,0,136,32H120a16,16,0,0,0-15.65,19.35ZM208,184V144H48v40H208Z">
                                    </path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::row-1 -->

        <!-- Start::row-3 -->
        <div class="row">
            <div class="row mb-3"> <!-- Adds a small margin at the bottom -->
                <div class="col-xl-12">
                    <div class="d-flex justify-content-between mb-2">
                        <h6 class="mb-0">Manage Your Trusts</h6>
                        <a href="{{ route('trust.create') }}" class="btn btn-primary">
                            <i class="ri-add-line align-middle"></i> Create New Trust
                        </a>
                    </div>
                </div>
            </div>

            <!-- User's Recent Trust Applications -->
            <div class="col-xxl-3 col-md-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Your Recent Trust Applications
                        </div>
                        <div class="dropdown">
                            <div class="btn btn-outline-light border btn-full btn-sm" data-bs-toggle="dropdown">
                                View All<i class="ti ti-chevron-down ms-1"></i>
                            </div>
                            <ul class="dropdown-menu" role="menu">
                                <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="mb-0 list-unstyled">
                            <li class="mb-4">
                                <div class="d-flex align-items-center">
                                    <a aria-label="anchor" href="javascript:void(0);" class="me-2">
                                        <span class="avatar avatar-md bg-primary-transparent text-primary">
                                            <img src="../assets/images/faces/1.jpg" alt="">
                                        </span>
                                    </a>
                                    <div class="flex-grow-1">
                                        <a href="javascript:void(0);" class="fs-13 fw-medium">John Doe</a>
                                        <p class="text-muted mb-0 fw-normal fs-12">
                                            <span class="fw-medium">Trustee Application</span>
                                        </p>
                                    </div>
                                    <div class="btn-list">
                                        <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="View Details"
                                            class="btn btn-icon btn-sm rounded-pill btn-info-light">
                                            <i class="ti ti-eye align-middle"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!-- Additional trusts can be added here -->
                        </ul>
                    </div>
                </div>
            </div>

            <!-- User's Recent Trust Transactions -->
            <div class="col-xxl-6 col-md-12">
                <div class="mb-3 d-flex align-items-center justify-content-between">
                    <h6 class="mb-0">Your Recent Transactions:</h6>
                    <div>
                        <button type="button" class="btn btn-sm btn-primary-light">View All</button>
                    </div>
                </div>
                <div class="card custom-card overflow-hidden">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table text-nowrap recent-job">
                                <thead>
                                    <tr>
                                        <th scope="col">Transaction Type</th>
                                        <th scope="col">Trust Name</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="badge bg-success">Deposit</span></td>
                                        <td>Smith Family Trust</td>
                                        <td>$10,000</td>
                                        <td>Oct 10, 2023</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge bg-danger">Withdrawal</span></td>
                                        <td>Johnson Educational Trust</td>
                                        <td>$5,000</td>
                                        <td>Oct 11, 2023</td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                    </tr>
                                    <!-- Additional transactions can be added here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- User's Activity and Notifications -->
            <div class="col-xxl-3 col-md-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Notifications & Alerts
                        </div>
                        <div class="dropdown">
                            <div class="btn btn-outline-light border btn-full btn-sm" data-bs-toggle="dropdown">
                                View All<i class="ti ti-chevron-down ms-1"></i>
                            </div>
                            <ul class="dropdown-menu" role="menu">
                                <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush list-unstyled">
                            <li class="list-group-item border-bottom-0 d-flex gap-2 align-items-start pb-2">
                                <div class="avatar avatar-sm bg-primary-transparent flex-shrink-0">
                                    <i class="ri-user-fill"></i>
                                </div>
                                <div class="text-truncate">
                                    <span class="fw-medium">Application Approved</span>
                                    <p class="text-muted mb-0 fs-12">Your application for the Smith Family Trust has been
                                        approved.</p>
                                </div>
                                <span class="text-muted ms-auto fs-12">2 mins ago</span>
                            </li>
                            <li class="list-group-item border-bottom-0 d-flex gap-2 align-items-start pb-2">
                                <div class="avatar avatar-sm bg-primary1-transparent flex-shrink-0">
                                    <i class="ri-file-list-3-fill"></i>
                                </div>
                                <div class="text-truncate">
                                    <span class="fw-medium">New Trust Created</span>
                                    <p class="text-muted mb-0 fs-12">A new trust has been created for you.</p>
                                </div>
                                <span class="text-muted ms-auto fs-12">5 mins ago</span>
                            </li>
                            <!-- More notifications can be added here -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::row-3 -->

        <!-- Start::row-4 -->
        {{-- <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Recents
                        </div>
                        <div class="d-flex">
                            <div class="me-3">
                                <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="btn btn-primary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">New</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-nowrap table-hover border table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Designation</th>
                                        <th scope="col">Mail</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">01</th>
                                        <td>
                                            <div class="d-flex align-items-center fw-medium">
                                                <span class="avatar avatar-sm me-2 avatar-rounded">
                                                    <img src="../assets/images/faces/4.jpg" alt="img">
                                                </span>Mayor Kelly
                                            </div>
                                        </td>
                                        <td>Manufacture</td>
                                        <td><span class="text-primary">Team Lead</span></td>
                                        <td>mayorkelly@gmail.com</td>
                                        <td>
                                            <div class="d-inline-flex align-items-center">
                                                <i class="ri-map-pin-line text-muted"></i>
                                                <span class="ms-1">Germany</span>
                                            </div>
                                        </td>
                                        <td>Sep 15 - Oct 12, 2023</td>
                                        <td><span class="badge bg-primary-transparent">Full Time</span></td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-success-light"><i class="ri-download-2-line"></i></a>
                                                <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">02</th>
                                        <td>
                                            <div class="d-flex align-items-center fw-medium">
                                                <span class="avatar avatar-sm me-2 avatar-rounded">
                                                    <img src="../assets/images/faces/15.jpg" alt="img">
                                                </span>Andrew Garfield
                                            </div>
                                        </td>
                                        <td>Development</td>
                                        <td><span class="text-secondary">Sr.UI Developer</span></td>
                                        <td>andrewgarfield@gmail.com</td>
                                        <td>
                                            <div class="d-inline-flex align-items-center">
                                                <i class="ri-map-pin-line text-muted"></i>
                                                <span class="ms-1">Canada</span>
                                            </div>
                                        </td>
                                        <td>Apr 10 - Dec 12, 2023</td>
                                        <td><span class="badge bg-primary-transparent">Full Time</span></td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i class="ri-download-2-line"></i></a>
                                                <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">03</th>
                                        <td>
                                            <div class="d-flex align-items-center fw-medium">
                                                <span class="avatar avatar-sm me-2 avatar-rounded">
                                                    <img src="../assets/images/faces/11.jpg" alt="img">
                                                </span>Simon Cowel
                                            </div>
                                        </td>
                                        <td>Service</td>
                                        <td><span class="text-secondary">Sr.UI Developer</span></td>
                                        <td>simoncowel234@gmail.com</td>
                                        <td>
                                            <div class="d-inline-flex align-items-center">
                                                <i class="ri-map-pin-line text-muted"></i>
                                                <span class="ms-1">Europe</span>
                                            </div>
                                        </td>
                                        <td>Sep 15 - Oct 12, 2023</td>
                                        <td><span class="badge bg-secondary-transparent">Part Time</span></td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i class="ri-download-2-line"></i></a>
                                                <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">04</th>
                                        <td>
                                            <div class="d-flex align-items-center fw-medium">
                                                <span class="avatar avatar-sm me-2 avatar-rounded">
                                                    <img src="../assets/images/faces/8.jpg" alt="img">
                                                </span>Mirinda Hers
                                            </div>
                                        </td>
                                        <td>Marketing</td>
                                        <td><span class="text-danger">Sales Executive</span></td>
                                        <td>mirindahers@gmail.com</td>
                                        <td>
                                            <div class="d-inline-flex align-items-center">
                                                <i class="ri-map-pin-line text-muted"></i>
                                                <span class="ms-1">USA</span>
                                            </div>
                                        </td>
                                        <td>Apr 10 - Dec 12, 2023</td>
                                        <td><span class="badge bg-danger-transparent">Hybride</span></td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i class="ri-download-2-line"></i></a>
                                                <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">05</th>
                                        <td>
                                            <div class="d-flex align-items-center fw-medium">
                                                <span class="avatar avatar-sm me-2 avatar-rounded">
                                                    <img src="../assets/images/faces/16.jpg" alt="img">
                                                </span>Andrew Garfield
                                            </div>
                                        </td>
                                        <td>Development</td>
                                        <td><span class="text-secondary">Sr.UI Developer</span></td>
                                        <td>andrewgarfield@gmail.com</td>
                                        <td>
                                            <div class="d-inline-flex align-items-center">
                                                <i class="ri-map-pin-line text-muted"></i>
                                                <span class="ms-1">London</span>
                                            </div>
                                        </td>
                                        <td>Jun 10 - Dec 12, 2022</td>
                                        <td><span class="badge bg-success-transparent">Freelancer</span></td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i class="ri-download-2-line"></i></a>
                                                <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex align-items-center">
                            <div>
                                Showing 6 Entries <i class="bi bi-arrow-right ms-2 fw-medium align-middle"></i>
                            </div>
                            <div class="ms-auto">
                                <nav aria-label="Page navigation" class="pagination-style-4">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="javascript:void(0);">
                                                Prev
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                        <li class="page-item">
                                            <a class="page-link text-primary" href="javascript:void(0);">
                                                next
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- New Design --}}
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Trust Management Dashboard
                        </div>
                        <div class="d-flex">
                            <div class="me-3">
                                <input class="form-control form-control-sm" type="text" placeholder="Search Trusts..."
                                    aria-label=".form-control-sm example">
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="btn btn-primary btn-sm" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Name</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Date Created</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Type</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-nowrap table-hover border table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Trust Name</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Trustee</th>
                                        <th scope="col">Beneficiaries</th>
                                        <th scope="col">Asset Value</th>
                                        <th scope="col">Date Created</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">01</th>
                                        <td>
                                            <div class="d-flex align-items-center fw-medium">
                                                <span class="avatar avatar-sm me-2 avatar-rounded">
                                                    <img src="../assets/images/faces/4.jpg" alt="img">
                                                </span>Smith Family Trust
                                            </div>
                                        </td>
                                        <td><span class="badge bg-primary">Revocable</span></td>
                                        <td>John Smith</td>
                                        <td>Jane Smith, Chris Smith</td>
                                        <td>$1,000,000</td>
                                        <td>Jan 05, 2022</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a aria-label="anchor" href="{{ route('trust.view') }}"
                                                    class="btn btn-icon btn-sm btn-success-light"><i
                                                        class="ri-eye-line"></i></a>
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-primary-light"><i
                                                        class="ri-edit-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">02</th>
                                        <td>
                                            <div class="d-flex align-items-center fw-medium">
                                                <span class="avatar avatar-sm me-2 avatar-rounded">
                                                    <img src="../assets/images/faces/15.jpg" alt="img">
                                                </span>The Johnson Educational Trust
                                            </div>
                                        </td>
                                        <td><span class="badge bg-secondary">Irrevocable</span></td>
                                        <td>Alice Johnson</td>
                                        <td>Robert Johnson</td>
                                        <td>$500,000</td>
                                        <td>Mar 15, 2021</td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i
                                                        class="ri-download-2-line"></i></a>
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i
                                                        class="ri-edit-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">03</th>
                                        <td>
                                            <div class="d-flex align-items-center fw-medium">
                                                <span class="avatar avatar-sm me-2 avatar-rounded">
                                                    <img src="../assets/images/faces/11.jpg" alt="img">
                                                </span>Global Charitable Trust
                                            </div>
                                        </td>
                                        <td><span class="badge bg-success">Charitable</span></td>
                                        <td>Richard Roe</td>
                                        <td>Community Development Fund</td>
                                        <td>$250,000</td>
                                        <td>Apr 10, 2020</td>
                                        <td><span class="badge bg-danger">Inactive</span></td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i
                                                        class="ri-download-2-line"></i></a>
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i
                                                        class="ri-edit-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">04</th>
                                        <td>
                                            <div class="d-flex align-items-center fw-medium">
                                                <span class="avatar avatar-sm me-2 avatar-rounded">
                                                    <img src="../assets/images/faces/8.jpg" alt="img">
                                                </span>The Health and Welfare Trust
                                            </div>
                                        </td>
                                        <td><span class="badge bg-danger">Special Needs</span></td>
                                        <td>Jessica Green</td>
                                        <td>Tim Green, Laura Green</td>
                                        <td>$750,000</td>
                                        <td>Sep 30, 2022</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i
                                                        class="ri-download-2-line"></i></a>
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i
                                                        class="ri-edit-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex align-items-center">
                            <div>
                                Showing 4 Trusts <i class="bi bi-arrow-right ms-2 fw-medium align-middle"></i>
                            </div>
                            <div class="ms-auto">
                                <nav aria-label="Page navigation" class="pagination-style-4">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="javascript:void(0);">
                                                Prev
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link"
                                                href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                        <li class="page-item">
                                            <a class="page-link text-primary" href="javascript:void(0);">
                                                Next
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::row-new-design -->
        <!-- End::row-4 -->


    </div>
@endsection

@section('scripts')

    <!-- Apex Charts JS -->
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Jobs Dashboard -->
    <script src="{{ asset('assets/js/jobs-dashboard.js') }}"></script>

@endsection

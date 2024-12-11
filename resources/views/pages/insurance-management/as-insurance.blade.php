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
                                Insurance Management
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
                <h1 class="page-title fw-medium fs-18 mb-0">Overview</h1>
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
                        <p class="text-muted fw-medium mb-2">ACTIVE POLICIES</p>
                        <h4 class="mb-1">12,345</h4>
                        <div class="text-muted fs-13">Increased By <span class="text-success">2.7%<i class="ti ti-arrow-narrow-up fs-16"></i></span></div>
                    </div>
                    <span class="avatar avatar-lg bg-primary-transparent svg-primary avatar-rounded border-3 border border-opacity-50 flex-shrink-0 border-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,80l-96,56L32,80l96-56Z" opacity="0.2"></path><path d="M230.91,172A8,8,0,0,1,228,182.91l-96,56a8,8,0,0,1-8.06,0l-96-56A8,8,0,0,1,36,169.09l92,53.65,92-53.65A8,8,0,0,1,230.91,172ZM220,121.09l-92,53.65L36,121.09A8,8,0,0,0,28,134.91l96,56a8,8,0,0,0,8.06,0l96-56A8,8,0,1,0,220,121.09ZM24,80a8,8,0,0,1,4-6.91l96-56a8,8,0,0,1,8.06,0l96,56a8,8,0,0,1,0,13.82l-96,56a8,8,0,0,1-8.06,0l-96-56A8,8,0,0,1,24,80Zm23.88,0L128,126.74,208.12,80,128,33.26Z"></path></svg>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl col-xl-6">
        <div class="card custom-card ">
            <div class="card-body">
                <div class="d-flex gap-3 align-items-center">
                    <div class="flex-fill">
                        <p class="text-muted fw-medium mb-2">CLAIMS FILED</p>
                        <h4 class="mb-1">2,456</h4>
                        <div class="text-muted fs-13">Decreased By <span class="text-danger">1.4%<i class="ti ti-arrow-narrow-down fs-16"></i></span></div>
                    </div>
                    <span class="avatar avatar-lg bg-primary1-transparent svg-primary1 avatar-rounded border-3 border border-opacity-50 flex-shrink-0 border-primary1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M216,48V88H40V48a8,8,0,0,1,8-8H208A8,8,0,0,1,216,48Z" opacity="0.2"></path><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-68-76a12,12,0,1,1-12-12A12,12,0,0,1,140,132Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,184,132ZM96,172a12,12,0,1,1-12-12A12,12,0,0,1,96,172Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,140,172Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,184,172Z"></path></svg>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl col-xl-6">
        <div class="card custom-card ">
            <div class="card-body">
                <div class="d-flex gap-3 align-items-center">
                    <div class="flex-fill">
                        <p class="text-muted fw-medium mb-2">CLAIMS APPROVED</p>
                        <h4 class="mb-1">1,782</h4>
                        <div class="text-muted fs-13">Increased By <span class="text-success">3.5%<i class="ti ti-arrow-narrow-up fs-16"></i></span></div>
                    </div>
                    <span class="avatar avatar-lg bg-primary2-transparent svg-primary2 avatar-rounded border-3 border border-opacity-50 flex-shrink-0 border-primary2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M120,104A40,40,0,1,1,80,64,40,40,0,0,1,120,104Z" opacity="0.2"></path><path d="M152,80a8,8,0,0,1,8-8h88a8,8,0,0,1,0,16H160A8,8,0,0,1,152,80Zm96,40H160a8,8,0,0,0,0,16h88a8,8,0,0,0,0-16Zm0,48H184a8,8,0,0,0,0,16h64a8,8,0,0,0,0-16Zm-96.25,22a8,8,0,0,1-5.76,9.74,7.55,7.55,0,0,1-2,.26,8,8,0,0,1-7.75-6c-6.16-23.94-30.34-42-56.25-42s-50.09,18.05-56.25,42a8,8,0,0,1-15.5-4c5.59-21.71,21.84-39.29,42.46-48a48,48,0,1,1,58.58,0C129.91,150.71,146.16,168.29,151.75,190ZM80,136a32,32,0,1,0-32-32A32,32,0,0,0,80,136Z"></path></svg>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl col-xl-6">
        <div class="card custom-card ">
            <div class="card-body">
                <div class="d-flex gap-3 align-items-center">
                    <div class="flex-fill">
                        <p class="text-muted fw-medium mb-2">CLAIMS REJECTED</p>
                        <h4 class="mb-1">674</h4>
                        <div class="text-muted fs-13">Decreased By <span class="text-danger">1.2%<i class="ti ti-arrow-narrow-down fs-16"></i></span></div>
                    </div>
                    <span class="avatar avatar-lg bg-primary3-transparent svg-primary3 avatar-rounded border-3 border border-opacity-50 flex-shrink-0 border-primary3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,128a96,96,0,1,1-96-96A96,96,0,0,1,224,128Z" opacity="0.2"></path><path d="M165.66,101.66,139.31,128l26.35,26.34a8,8,0,0,1-11.32,11.32L128,139.31l-26.34,26.35a8,8,0,0,1-11.32-11.32L116.69,128,90.34,101.66a8,8,0,0,1,11.32-11.32L128,116.69l26.34-26.35a8,8,0,0,1,11.32,11.32ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"></path></svg>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl col-xl-12">
        <div class="card custom-card ">
            <div class="card-body">
                <div class="d-flex gap-3 align-items-center">
                    <div class="flex-fill">
                        <p class="text-muted fw-medium mb-2">PENDING CLAIMS</p>
                        <h4 class="mb-1">1,120</h4>
                        <div class="text-muted fs-13">Increased By <span class="text-success">0.5%<i class="ti ti-arrow-narrow-up fs-16"></i></span></div>
                    </div>
                    <span class="avatar avatar-lg bg-secondary-transparent svg-secondary avatar-rounded border-3 border border-opacity-50 flex-shrink-0 border-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M159.46,53l-17.78,83H114.32L96.54,53A24,24,0,0,1,120,24h16A24,24,0,0,1,159.46,53Z" opacity="0.2"></path><path d="M224,224a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,224Zm0-80v40a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V144a16,16,0,0,1,16-16h56.43L88.72,54.71A32,32,0,0,1,120,16h16a32,32,0,0,1,31.29,38.71L151.57,128H208A16,16,0,0,1,224,144ZM120.79,128h14.42l16.43-76.65A16,16,0,0,0,136,32H120a16,16,0,0,0-15.65,19.35ZM208,184V144H48v40H208Z"></path></svg>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End::row-1 -->
    </div>

    <!-- Start::row-2 -->
    <div class="row">
        <div class="col-xxl-3">
            <div class="card custom-card">
                <div class="card-header justify-content-between flex-wrap pb-1">
                    <div class="card-title">
                        Activity
                    </div>
                    <div class="dropdown">
                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icons btn-sm text-muted"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="analytics-timeline">
                        <ul class="list-unstyled analytics-activity mb-0">
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-primary-transparent">
                                            <i class="ri-timer-2-line"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="d-block fw-medium">Avg. Session Duration</span>
                                        <span class="fs-13 text-muted">Increased by <span
                                                class="text-success fw-medium ms-1">5.2% <i
                                                    class="ti ti-arrow-narrow-up"></i></span></span>
                                    </div>
                                    <div>
                                        <span class="d-block fs-15 mb-0 fw-medium">2m 35s</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-primary1-transparent">
                                            <i class="ri-user-add-line fs-18"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="d-block fw-medium">New Users</span>
                                        <span class="fs-13 text-muted">Increased by <span
                                                class="text-success fw-medium ms-1">10.3%<i
                                                    class="ti ti-arrow-narrow-up"></i></span></span>
                                    </div>
                                    <div>
                                        <span class="d-block fs-15 mb-0 fw-medium">5,621</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-primary2-transparent">
                                            <i class="ri-eye-line fs-18"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="d-block fw-medium">Page Views</span>
                                        <span class="fs-13 text-muted">Decreased by <span
                                                class="text-danger fw-medium ms-1"> 2.15% <i
                                                    class="ti ti-arrow-narrow-down"></i></span></span>
                                    </div>
                                    <div>
                                        <span class="d-block fs-15 mb-0 fw-medium">45,890</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-primary3-transparent">
                                            <i class="ri-line-chart-line fs-18"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="d-block fw-medium">Conversion Rate</span>
                                        <span class="fs-13 text-muted">Increased by <span
                                                class="text-success fw-medium ms-1">1.5% <i
                                                    class="ti ti-arrow-narrow-up"></i></span></span>
                                    </div>
                                    <div>
                                        <span class="d-block fs-15 mb-0 fw-medium">4.8%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-secondary-transparent">
                                            <i class="ri-arrow-down-s-line fs-18"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="d-block fw-medium">Bounce Rate</span>
                                        <span class="fs-13 text-muted">Decreased by <span
                                                class="text-danger fw-medium ms-1"> 3.8%<i
                                                    class="ti ti-arrow-narrow-down"></i></span></span>
                                    </div>
                                    <div>
                                        <span class="d-block fs-15 mb-0 fw-medium">32.5%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-warning-transparent">
                                            <i class="ri-user-line fs-18"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="d-block fw-medium">Returning Visitors</span>
                                        <span class="fs-13 text-muted">Increased by<span
                                                class="text-success fw-medium ms-1"> 7.2% <i
                                                    class="ti ti-arrow-narrow-up"></i></span></span>
                                    </div>
                                    <div>
                                        <span class="d-block fs-15 mb-0 fw-medium">8,932</span>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-0">
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-info-transparent">
                                            <i class="ri-money-dollar-circle-line fs-18"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="d-block fw-medium">Avg. Order Value</span>
                                        <span class="fs-13 text-muted">Decreased by<span
                                                class="text-danger fw-medium ms-1"> 2.7%<i
                                                    class="ti ti-arrow-narrow-down"></i></span></span>
                                    </div>
                                    <div>
                                        <span class="d-block fs-15 mb-0 fw-medium">$56.78</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-5">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Visitor Analytics
                    </div>
                    <div>
                        <button type="button" class="btn btn-primary-light btn-sm"><i
                                class="ri-share-forward-line me-1 align-middle d-inline-block"></i>Export</button>
                    </div>
                </div>
                <div class="card-body pb-0">
                    <div id="audienceMetric"></div>
                </div>
            </div>
        </div>
        {{-- <div class="col-xxl-3">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Users By Countries
                        </div>
                        <div class="">
                            <a href="javascript:void(0);" class="btn btn-light btn-sm text-muted">
                                View All
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-0 analytics-visitors-countries">
                            <li class="mb-4">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-xs avatar-rounded text-default">
                                            <img src="../assets/images/flags/us_flag.jpg" alt="">
                                        </span>
                                    </div>
                                    <div class="ms-1 flex-fill lh-1">
                                        <span class="fs-14">United States</span>
                                    </div>
                                    <div class="text-success ms-1">5.1%<i class="ti ti-arrow-narrow-up"></i></div>
                                    <div>
                                        <span class="text-default badge bg-light fw-medium">26,890</span>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-4">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-xs avatar-rounded text-default">
                                            <img src="../assets/images/flags/germany_flag.jpg" alt="">
                                        </span>
                                    </div>
                                    <div class="ms-1 flex-fill lh-1">
                                        <span class="fs-14">Germany</span>
                                    </div>
                                    <div class="text-success">1.3%<i class="ti ti-arrow-narrow-up"></i></div>
                                    <div class="ms-1">
                                        <span class="text-default badge bg-light fw-medium">12,345</span>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-4">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-xs avatar-rounded text-default">
                                            <img src="../assets/images/flags/spain_flag.jpg" alt="">
                                        </span>
                                    </div>
                                    <div class="ms-1 flex-fill lh-1">
                                        <span class="fs-14">Spain</span>
                                    </div>
                                    <div class="text-success">2.7%<i class="ti ti-arrow-narrow-up"></i></div>
                                    <div class="ms-1">
                                        <span class="text-default badge bg-light fw-medium">18,765</span>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-4">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-xs avatar-rounded text-default">
                                            <img src="../assets/images/flags/china_flag.jpg" alt="">
                                        </span>
                                    </div>
                                    <div class="ms-1 flex-fill lh-1">
                                        <span class="fs-14">China</span>
                                    </div>
                                    <div class="text-danger">1.0%<i class="ti ti-arrow-narrow-down"></i></div>
                                    <div class="ms-1">
                                        <span class="text-default badge bg-light fw-medium">9,874</span>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-4">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-xs avatar-rounded text-default">
                                            <img src="../assets/images/flags/mexico_flag.jpg" alt="">
                                        </span>
                                    </div>
                                    <div class="ms-1 flex-fill lh-1">
                                        <span class="fs-14">Mexico</span>
                                    </div>
                                    <div class="text-success">2.7%<i class="ti ti-arrow-narrow-up"></i></div>
                                    <div class="ms-1">
                                        <span class="text-default badge bg-light fw-medium">21,456</span>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-4">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-xs avatar-rounded text-default">
                                            <img src="../assets/images/flags/canada_flag.jpg" alt="">
                                        </span>
                                    </div>
                                    <div class="ms-1 flex-fill lh-1">
                                        <span class="fs-14">Canada</span>
                                    </div>
                                    <div class="text-success">2.1%<i class="ti ti-arrow-narrow-up"></i></div>
                                    <div class="ms-1">
                                        <span class="text-default badge bg-light fw-medium">28,976</span>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-4">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-xs avatar-rounded text-default">
                                            <img src="../assets/images/flags/argentina_flag.jpg" alt="">
                                        </span>
                                    </div>
                                    <div class="ms-1 flex-fill lh-1">
                                        <span class="fs-14">Argentina</span>
                                    </div>
                                    <div class="text-success">5.4%<i class="ti ti-arrow-narrow-up"></i></div>
                                    <div class="ms-1">
                                        <span class="text-default badge bg-light fw-medium">21,456</span>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-4">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-xs avatar-rounded text-default">
                                            <img src="../assets/images/flags/singapore_flag.jpg" alt="">
                                        </span>
                                    </div>
                                    <div class="ms-1 flex-fill lh-1">
                                        <span class="fs-14">Singapore</span>
                                    </div>
                                    <div class="text-success">0.7%<i class="ti ti-arrow-narrow-up"></i></div>
                                    <div class="ms-1">
                                        <span class="text-default badge bg-light fw-medium">16,789</span>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-2">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-xs avatar-rounded text-default">
                                            <img src="../assets/images/flags/italy_flag.jpg" alt="">
                                        </span>
                                    </div>
                                    <div class="ms-1 flex-fill lh-1">
                                        <span class="fs-14">Italy</span>
                                    </div>
                                    <div class="text-danger">0.3%<i class="ti ti-arrow-narrow-down"></i></div>
                                    <div class="ms-1">
                                        <span class="text-default badge bg-light fw-medium">21,456</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div> --}}
        <div class="col-xxl-4">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <h5 class="card-title">Estate Planning Goals</h5>
                    <a href="javascript:void(0);"
                        class="btn btn-light btn-wave btn-sm text-muted waves-effect waves-light">View All</a>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <div class="d-flex mb-1">
                            <span>main/landing-page/home</span>
                            <span class="ms-auto fs-14 fw-semibold">2,345 Visits</span>
                        </div>
                        <div class="progress progress-md p-1">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
                                role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex mb-1">
                            <span>main/landing-page/products/popular-category</span>
                            <span class="ms-auto fs-14 fw-semibold">1,987 Visits</span>
                        </div>
                        <div class="progress progress-md p-1">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary1"
                                role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex mb-1">
                            <span>main/landing-page/blog/latest-article</span>
                            <span class="ms-auto fs-14 fw-semibold">1,532 Visits</span>
                        </div>
                        <div class="progress progress-md p-1">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary2"
                                role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex mb-1">
                            <span>main/landing-page/about-us/team-page</span>
                            <span class="ms-auto fs-14 fw-semibold">1,254 Visits</span>
                        </div>
                        <div class="progress progress-md p-1">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary3"
                                role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex mb-1">
                            <span>main/landing-page/about-us/profile</span>
                            <span class="ms-auto fs-14 fw-semibold">1,103 Visits</span>
                        </div>
                        <div class="progress progress-md p-1">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary3"
                                role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="mb-0">
                        <div class="d-flex mb-1">
                            <span>main/landing-page/contact/support</span>
                            <span class="ms-auto fs-14 fw-semibold">985 Visits</span>
                        </div>
                        <div class="progress progress-md p-1">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                                role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End::row-2 -->


    </div>
@endsection

@section('scripts')
 <!-- Apex Charts JS -->
 <script src="../assets/libs/apexcharts/apexcharts.min.js"></script>

 <!-- Jobs Dashboard --> 
 <script src="../assets/js/jobs-dashboard.js"></script>


 @endsection
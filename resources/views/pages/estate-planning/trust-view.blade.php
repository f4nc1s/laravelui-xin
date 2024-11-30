@extends('layouts.master')
{{-- <title>Empty | {{ env('APP_NAME', 'Xinui') }}</title> --}}
@section('title', 'Trust Details | ' . env('APP_NAME', 'Framework'))
@section('content')
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <nav>
                    <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Estate Planning</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Trusts</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Trust Details</li>
                    </ol>
                </nav>
                {{-- <h1 class="page-title fw-medium fs-18 mb-0">Products Details</h1> --}}
            </div>
            <div class="btn-list">
                <button class="btn btn-white btn-wave">
                    <i class="ri-filter-3-line align-middle me-1 lh-1"></i> Filter
                </button>
                <button class="btn btn-primary btn-wave me-0">
                    <i class="ri-share-forward-line me-1"></i> Share
                </button>
            </div>
        </div>
        <!-- Page Header Close -->

        <!-- Start:: Row-1 -->
        <div class="row">
            <div class="col-xxl-8">
                <div class="card custom-card">
                    <div class="card-body">
                        <div>
                            <p class="fs-20 fw-semibold mb-3">Smith Family Trust - 2024 Edition</p>
                            <p class="fs-16 mb-3">
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star-half text-warning"></i>
                                <span class="fw-medium ms-1 fs-13">4.6<a class="text-muted ms-2"
                                        href="javascript:void(0);">(3.1k Reviews)</a></span>
                            </p>
                            <div class="mb-3">
                                <p class="fs-15 fw-semibold mb-1">Description :</p>
                                <p class="text-muted mb-0 fs-13">
                                    The Smith Family Trust is designed to protect the family assets and ensure that future
                                    generations benefit from their inheritance.
                                </p>
                            </div>
                            <div class="d-flex gap-2 align-items-center mb-3">
                                <p class="fs-15 fw-semibold mb-1">Trustee:</p>
                                <div class="btn btn-light">John Smith</div>
                            </div>
                            <div class="d-flex gap-2 align-items-center mb-3">
                                <p class="fs-15 fw-semibold mb-1">Beneficiaries:</p>
                                <div class="btn btn-light">Jane Smith</div>
                                <div class="btn btn-light">Chris Smith</div>
                            </div>
                            <div class="d-flex gap-2 align-items-center mb-3">
                                <p class="fs-15 fw-semibold mb-1">Creation Date:</p>
                                <span class="btn btn-light">January 5, 2022</span>
                            </div>
                            <div class="d-flex gap-2 align-items-center mb-3">
                                <p class="fs-15 fw-semibold mb-1">Trust Value:</p>
                                <span class="h2 fw-semibold">$1,000,000</span>
                            </div>
                            <div class="d-flex gap-2 align-items-center mb-3">
                                <p class="fs-15 fw-semibold mb-1">Status:</p>
                                <p class="mb-1 text-success py-1 px-2 bg-success-transparent rounded-pill fs-12"><i
                                        class="ri-checkbox-circle-fill me-1 align-middle d-inline-block"></i> Active</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4">
                <div class="card custom-card">
                    <div class="card-body">
                        <a href="../assets/images/trusts/1.png" class="glightbox card border-0 mb-0" data-gallery="gallery1"
                            data-title="Trust Document (1/5)" data-type="image" data-draggable="true">
                            <div class="trust-gallery d-block text-center">
                                <span class="badge bg-success tag-badge">Active Trust</span>
                                {{-- <img src="../assets/images/trusts/1.png" alt="Trust Document" class=""> --}}
                                <span class="p-3 py-2 rounded text-fixed-white view-lightbox">View More Documents</span>
                            </div>
                        </a>
                        {{-- <div class="row ad-gallery">
                            <div class="col-xl-3">
                                <a href="../assets/images/trusts/2.png" class="glightbox card" data-gallery="gallery1"
                                    data-title="Trust Document (2/5)" data-type="image" data-draggable="true">
                                    <img src="../assets/images/trusts/2.png" alt="Trust Document">
                                </a>
                            </div>
                            <div class="col-xl-3">
                                <a href="../assets/images/trusts/3.png" class="glightbox card" data-gallery="gallery1"
                                    data-title="Trust Document (3/5)" data-type="image" data-draggable="true">
                                    <img src="../assets/images/trusts/3.png" alt="Trust Document">
                                </a>
                            </div>
                            <div class="col-xl-3">
                                <a href="../assets/images/trusts/4.png" class="glightbox card" data-gallery="gallery1"
                                    data-title="Trust Document (4/5)" data-type="image" data-draggable="true">
                                    <img src="../assets/images/trusts/4.png" alt="Trust Document">
                                </a>
                            </div>
                            <div class="col-xl-3">
                                <a href="../assets/images/trusts/5.png" class="glightbox card" data-gallery="gallery1"
                                    data-title="Trust Document (5/5)" data-type="image" data-draggable="true">
                                    <img src="../assets/images/trusts/5.png" alt="Trust Document">
                                </a>
                            </div>
                        </div> --}}
                    </div>
                    <div class="card-footer text-center d-flex gap-2 flex-wrap justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-primary btn-w-lg me-2">View Trust Details</a>
                        <a href="javascript:void(0);" class="btn btn-secondary btn-w-lg">Download Trust Document</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-8">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">Trust Details</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-nowrap table-bordered">
                                <tbody>
                                    <tr>
                                        <th scope="row" class="fw-semibold">Trust Type</th>
                                        <td>Revocable Trust</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="fw-semibold">Management Style</th>
                                        <td>Discretionary Management</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="fw-semibold">Total Assets</th>
                                        <td>$1,000,000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="fw-semibold">Purpose</th>
                                        <td>Asset Protection and Family Wealth Management</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="fw-semibold">Review Period</th>
                                        <td>Annual Review</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
                            Reviews & Ratings
                        </div>
                        <a href="javascript:void(0);"
                            class="fs-14 text-center d-block text-primary fw-medium text-decoration-underline ms-auto">
                            View More Reviews
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-start">
                            <div class="col-xxl-4 col-xl-12 text-center bg-light rounded p-3 pt-2">
                                <div class="fs-2">4.2</div>
                                <div class="badge bg-secondary rounded-pill align-middle mb-3">Very Good</div>
                                <p class="mb-1">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star-half text-warning"></i>
                                </p>
                                <div class="fw-medium mb-3"><a class="text-muted" href="javascript:void(0);">Based on
                                        (23,435) ratings</a></div>
                                <a class="btn btn-primary w-100" href="javascript:void(0);">Leave Us a Review</a>
                            </div>
                            <div class="col-xxl-8 col-xl-12 mt-xxl-0 mt-3 pe-0">
                                <div class="swiper swiper-reviews">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="card custom-card border shadow-none mb-0">
                                                <div class="card-body">
                                                    <div class="d-sm-flex d-block align-items-center mb-3">
                                                        <div class="d-flex flex-fill align-items-center">
                                                            <span class="avatar avatar-sm avatar-rounded me-2">
                                                                <img src="../assets/images/faces/1.jpg" alt="">
                                                            </span>
                                                            <p class="mb-0 fs-14 lh-1 fw-semibold">Phillip John
                                                                <span class="mb-0 fs-12 fw-normal ms-1">
                                                                    <i
                                                                        class="ri-star-s-fill text-warning align-middle lh-1 fs-10 me-1 fw-normal align-middle"></i>
                                                                    4.3
                                                                </span>
                                                            </p>
                                                        </div>
                                                        <div class="ps-sm-0 mt-sm-0 mt-3 ps-sm-0 ps-2">
                                                            <span class="badge bg-success">Verified User</span>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <p class="fw-semibold mb-1">Well Managed Trust!</p>
                                                        <p class="mb-0 fs-11">The Smith Family Trust provides excellent
                                                            support and management. Highly recommend!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card custom-card border shadow-none mb-0">
                                                <div class="card-body">
                                                    <div class="d-sm-flex d-block align-items-center mb-3">
                                                        <div class="d-flex flex-fill align-items-center">
                                                            <span class="avatar avatar-sm avatar-rounded me-2">
                                                                <img src="../assets/images/faces/2.jpg" alt="">
                                                            </span>
                                                            <p class="mb-0 fs-14 lh-1 fw-semibold">Henry Milo
                                                                <span class="mb-0 fs-12 fw-normal ms-1">
                                                                    <i
                                                                        class="ri-star-s-fill text-warning align-middle lh-1 fs-10 me-1 fw-normal align-middle"></i>
                                                                    4.5
                                                                </span>
                                                            </p>
                                                        </div>
                                                        <div class="ps-sm-0 mt-sm-0 mt-3 ps-sm-0 ps-2">
                                                            <span class="badge bg-success">Verified User</span>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <p class="fw-semibold mb-1">Great Experience!</p>
                                                        <p class="mb-0 fs-11">The trustees are very responsive and I feel
                                                            secure with my assets.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- More reviews can be added here -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4">
                <div class="card custom-card overflow-hidden">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Other Active Trusts
                        </div>
                        <a href="javascript:void(0);" class="btn btn-sm btn-primary-light">View All</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0);">
                                                <div class="d-flex align-items-top">
                                                    <div class="similar-products-image me-2">
                                                        <img src="../assets/images/trusts/2.png" alt="Trust Image">
                                                    </div>
                                                    <div class="flex-fill">
                                                        <p
                                                            class="mb-1 fs-14 fw-semibold similar-product-name text-truncate">
                                                            Johnson Educational Trust</p>
                                                        <p class="mb-2">
                                                            <span class="text-muted ms-1 fs-12">Active</span>
                                                        </p>
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <p class="mb-0 fs-18 fw-semibold">$500,000</p>
                                                            <p class="mb-0 text-muted fw-normal">Management Style: Fixed
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto align-self-center">
                                                        <div class="btn btn-primary">View Trust</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0);">
                                                <div class="d-flex align-items-top">
                                                    <div class="similar-products-image me-2">
                                                        <img src="../assets/images/trusts/3.png" alt="Trust Image">
                                                    </div>
                                                    <div class="flex-fill">
                                                        <p class="mb-1 fw-semibold similar-product-name text-truncate">
                                                            Global Charitable Trust</p>
                                                        <p class="mb-2">
                                                            <span class="text-muted ms-1 fs-12">Inactive</span>
                                                        </p>
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <p class="mb-0 fs-18 fw-semibold">$250,000</p>
                                                            <p class="mb-0 text-muted fw-normal">Management Style:
                                                                Charitable</p>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto align-self-center">
                                                        <div class="btn btn-primary">View Trust</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- More trust entries can be added here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: Row-1 -->


    </div>
@endsection

@section('scripts')

    <!-- Swiper JS -->
    <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Gallery JS -->
    <script src="{{ asset('assets/libs/glightbox/js/glightbox.min.js') }}"></script>

    <!-- Internal Ecommerce Product Details -->
    <script src="{{ asset('assets/js/ecommerce-product-details.js') }}"></script>

@endsection

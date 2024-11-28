@extends('layouts.master')
{{-- <title>Empty | {{ env('APP_NAME', 'Xinui') }}</title> --}}
@section('title', 'Declare Estate Assets | ' . env('APP_NAME', 'Framework'))
@section('content')
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <nav>
                    <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item"><a href="javascript:void(0);"></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Declare Assets</li>
                    </ol>
                </nav>
                <h1 class="page-title fw-medium fs-18 mb-0">Asset Declaration</h1>
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
        <!-- Page Header Close -->

        <!-- Start:: row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
                            SHEPHERD JS
                        </div>
                    </div>
                    <div class="card-body p-5 text-center">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 mb-5 pb-3">
                                <span class="avatar avatar-xl">
                                    <img src="../assets/images/company-logos/7.png" alt="" id="step-1">
                                </span>
                                <h5 class="fw-medium">Welcome to Asset Declaration</h5>
                                <span class="text-muted">Ensure your financial future is protected with our Asset
                                    Declaration Legal Power of Attorney documentation. This essential legal tool empowers
                                    you to designate a trusted individual to manage and disclose your assets on your behalf.
                                    Whether for financial planning, estate management, or health-related decisions, our
                                    comprehensive documents provide clarity and security, allowing you to focus on what
                                    matters most. Safeguard your interests and ensure your wishes are honored with
                                    professional assistance to navigate the complexities of asset declaration.</span>
                            </div>
                        </div>
                        <div class="row justify-content-center gap-3">
                            <div class="col-xl-3">
                                <div class="card custom-card shadow-none bg-primary-transparent text-start">
                                    <div class="card-body">
                                        <div class="d-flex gap-3 align-items-start">
                                            <span class="avatar avatar-xl bg-primary svg-white flex-shrink-0"
                                                id="step-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-home-dollar">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M19 10l-7 -7l-9 9h2v7a2 2 0 0 0 2 2h6" />
                                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2c.387 0 .748 .11 1.054 .3" />
                                                    <path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />
                                                    <path d="M19 21v1m0 -8v1" />
                                                </svg>
                                            </span>
                                            <div>
                                                <h6 class="fw-meidum mb-2">Real Estate</h6>
                                                <span class="fs-12 text-muted">This category encompasses all tangible
                                                    properties owned by an individual or entity. Commonly declared real
                                                    estate includes residential homes, commercial properties, land, and
                                                    rental units. Accurate declaration of real estate assets is crucial for
                                                    estate planning, tax obligations, and financial assessments.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card shadow-none text-start bg-primary1-transparent">
                                    <div class="card-body">
                                        <div class="d-flex gap-3 align-items-start">
                                            <span class="avatar avatar-xl bg-primary1 svg-white flex-shrink-0"
                                                id="step-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-moneybag">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M9.5 3h5a1.5 1.5 0 0 1 1.5 1.5a3.5 3.5 0 0 1 -3.5 3.5h-1a3.5 3.5 0 0 1 -3.5 -3.5a1.5 1.5 0 0 1 1.5 -1.5z" />
                                                    <path
                                                        d="M4 17v-1a8 8 0 1 1 16 0v1a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                                </svg>
                                            </span>
                                            <div>
                                                <h6 class="fw-meidum mb-2">Financial Assets</h6>
                                                <span class="fs-12">Financial assets are resources that derive value from a
                                                    contractual claim. This category includes cash and cash equivalents
                                                    (such as bank accounts), stocks, bonds, shares, and various savings
                                                    instruments. Declaring these assets is essential for financial
                                                    transparency and impacts net worth calculations and investment
                                                    strategies.

                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card shadow-none text-start bg-primary2-transparent">
                                    <div class="card-body">
                                        <div class="d-flex gap-3 align-items-start">
                                            <span class="avatar avatar-xl bg-primary2 svg-white flex-shrink-0"
                                                id="step-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-chart-line">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M4 19l16 0" />
                                                    <path d="M4 15l4 -6l4 2l4 -5l4 4" />
                                                </svg>
                                            </span>
                                            <div>
                                                <h6 class="fw-meidum mb-2">Investments</h6>
                                                <span class="fs-12">Investments cover a broad range of financial
                                                    instruments and vehicles designed to generate income or appreciate over
                                                    time. This includes cryptocurrencies, mutual funds, ETFs
                                                    (Exchange-Traded Funds), and other securitized assets. Properly
                                                    declaring investments helps in assessing risk exposure and preparing for
                                                    future financial planning and asset management.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card shadow-none text-start bg-primary3-transparent">
                                    <div class="card-body">
                                        <div class="d-flex gap-3 align-items-start">
                                            <span class="avatar avatar-xl bg-primary3 svg-white flex-shrink-0"
                                                id="step-5">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                                    <g fill-rule="evenodd">
                                                        <path
                                                            d="M7.95 20h13.06c1.092 0 1.99-.892 1.99-1.992V6.992A1.992 1.992 0 0 0 21.01 5H4.99C3.899 5 3 5.892 3 6.992v8.059a3.51 3.51 0 0 1 1-.714V6.992C4 6.447 4.448 6 4.99 6h16.02c.546 0 .99.445.99.992v11.016a.996.996 0 0 1-.99.992H8.662a3.51 3.51 0 0 1-.714 1Z">
                                                        </path>
                                                        <path
                                                            d="M23 10h-4.49A2.498 2.498 0 0 0 16 12.5c0 1.39 1.123 2.5 2.51 2.5H23v-1h-4.49c-.839 0-1.51-.667-1.51-1.5 0-.832.668-1.5 1.51-1.5H23v-1ZM18.747 2.465c.716-.183 1.248.234 1.246.975l-.008 2.012-.002.5 1 .004.002-.5.008-2.012c.005-1.394-1.142-2.294-2.494-1.948L4.53 5.073l-.698 1.211 14.914-3.819ZM5.5 22a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm0-1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z">
                                                        </path>
                                                        <path
                                                            d="m3 17.328.707-.707 1.414 1.415 2.122-2.122.707.707L5.12 19.45z">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <div>
                                                <h6 class="fw-meidum mb-2">Payment Methods</h6>
                                                <span class="fs-12">Various payment options available to make your
                                                    transactions secure.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card shadow-none text-start bg-secondary-transparent">
                                    <div class="card-body">
                                        <div class="d-flex gap-3 align-items-start">
                                            <span class="avatar avatar-xl bg-secondary svg-white flex-shrink-0"
                                                id="step-6">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    id="approve">
                                                    <path
                                                        d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <div>
                                                <h6 class="fw-meidum mb-2">Confirm Booking</h6>
                                                <span class="fs-12">Verifying every detail and securing reservations for a
                                                    stress-free trip ahead.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-sm-flex justify-content-end">
                            <button class="btn btn-primary-light m-1">Cancel Journey</button>
                            <button class="btn btn-success-light m-1" id="step-7">Start Your Journey</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-1 -->


    </div>
@endsection

@section('scripts')
    <!-- Shepherd JS -->
    <script src="{{ asset('assets/libs/shepherd.js/js/shepherd.min.js') }}"></script>
    <!-- Internal Tour JS -->
    <script src="{{ asset('assets/js/tour.js') }}"></script>
    <!-- Shepherd Css -->
    <link rel="stylesheet" href="../assets/libs/shepherd.js/css/shepherd.css">
@endsection

@extends('layouts.master')
{{-- <title>Dashboard | {{ env('APP_NAME', 'Framework') }}</title> --}}
@section('title', 'Beneficiary | ' . env('APP_NAME', 'Framework'))
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
                        <li class="breadcrumb-item active" aria-current="page">Beneficiaries</li>
                    </ol>
                </nav>
                <h1 class="page-title fw-medium fs-18 mb-0">Add Beneficiary</h1>
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
        <div class="row">
            <div class="row gy-4">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <p class="mb-2 text-muted">First Name:</p>
                    <input type="text" class="form-control" id="input-first-name">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="input-last-name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="input-last-name">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="input-relationship" class="form-label">Relationship</label>
                    <input type="text" class="form-control" id="input-relationship" placeholder="Relationship">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="input-email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="input-email" placeholder="Email@xyz.com">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="input-phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="input-phone" placeholder="+1100-2031-1233">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="input-file" class="form-label">Image</label>
                    <input class="form-control" type="file" id="input-file">
                </div>

                <!-- Button Column -->
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start align-items-center">
                    <input type="reset" class="btn btn-secondary me-2" id="input-reset" value="Reset">
                    <input type="button" class="btn btn-primary" id="input-submit" value="Submit">
                </div>
            </div>
        </div>
        <!-- End::row-1 -->

        {{-- Dev::row-2 --}}
        <div class="container mt-5">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">User Information</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row gy-4">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <p class="mb-2 text-muted">First Name:</p>
                                <input type="text" class="form-control" id="input-first-name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="input-last-name" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="input-last-name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="input-relationship" class="form-label">Relationship</label>
                                <input type="text" class="form-control" id="input-relationship"
                                    placeholder="Relationship">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="input-email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="input-email" placeholder="Email@xyz.com">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="input-phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="input-phone" placeholder="+1100-2031-1233">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="input-file" class="form-label">Image</label>
                                <input class="form-control" type="file" id="input-file">
                            </div>

                            <!-- Button Column -->
                            <div
                                class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start align-items-center">
                                <input type="reset" class="btn btn-secondary me-2" id="input-reset" value="Reset">
                                <input type="button" class="btn btn-primary" id="input-submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- Dev::end-row-1 --}}

        {{-- New Check --}}
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" placeholder="First name"
                    aria-label="First name">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" placeholder="Last name"
                    aria-label="Last name">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Address</label>
                <div class="row">
                    <div class="col-xl-12 mb-3">
                        <input type="text" class="form-control" placeholder="Street"
                        aria-label="Street">
                    </div>
                    <div class="col-xl-12 mb-3">
                        <input type="text" class="form-control" placeholder="Landmark"
                        aria-label="Landmark">
                    </div>
                    <div class="col-xl-6 mb-3">
                        <input type="text" class="form-control" placeholder="City"
                        aria-label="City">
                    </div>
                    <div class="col-xl-6 mb-3">
                        <select id="inputState1" class="form-select">
                            <option selected>State/Province</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-xl-6 mb-3">
                        <input type="text" class="form-control" placeholder="Postal/Zip code"
                        aria-label="Postal/Zip code">
                    </div>
                    <div class="col-xl-6 mb-3">
                        <select id="inputCountry" class="form-select">
                            <option selected>Country</option>
                            <option>...</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="row">
                    <div class="col-xl-12 mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Email"
                        aria-label="email">
                    </div>
                    <div class="col-xl-12 mb-3">
                        <label class="form-label">D.O.B</label>
                        <input type="date" class="form-control"
                        aria-label="dateofbirth">
                    </div>
                    <div class="col-xl-12 mb-3">
                        <div class="row">
                            <label class="form-label mb-1">Maritial Status</label>
                            <div class="col-xl-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="status-married" required="">
                                    <label class="form-check-label" for="status-married">
                                        Married
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="status-unmarried" required="">
                                    <label class="form-check-label" for="status-unmarried">
                                        Single
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
        
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Contact Number</label>
                <input type="number" class="form-control" placeholder="Phone number"
                    aria-label="Phone number">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Alternative Contact</label>
                <input type="number" class="form-control" placeholder="Phone number"
                    aria-label="Phone number">
            </div>
            <div class="col-md-12">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </div> 
        


    </div>
@endsection


@section('scripts')
    <!-- Shepherd JS -->
    <script src="{{ asset('assets/js/form-wizard-init.js') }}"></script>
    <!-- Vanilla-Wizard JS -->
    <script src="{{ asset('assets/libs/vanilla-wizard/js/wizard.min.js') }}"></script>

    <!-- Internal Form Wizard JS -->
    <script src="{{ asset('assets/js/form-wizard.js') }}"></script>
    <script src="{{ asset('assets/js/form-wizard-init.js') }}"></script>

    <link rel="stylesheet" href="../assets/libs/quill/quill.snow.css">
    <link rel="stylesheet" href="../assets/libs/quill/quill.bubble.css">

    <!-- Filepond CSS -->
    <link rel="stylesheet" href="../assets/libs/filepond/filepond.min.css">
    <link rel="stylesheet" href="../assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">
    <link rel="stylesheet" href="../assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css">

@endsection

@extends('layouts.master')
{{-- <title>Empty | {{ env('APP_NAME', 'Xinui') }}</title> --}}
@section('title', 'Create Trust | ' . env('APP_NAME', 'Framework'))
@section('content')
    <div class="container-fluid">

        <!-- Start::page-header -->
        <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <nav>
                    <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">
                                Estate Management
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Trust</li>
                    </ol>
                </nav>
                <h1 class="page-title fw-medium fs-18 mb-0">Create Trust</h1>
            </div>
        </div>
        <!-- End::page-header -->

        <div class="row">
            <div class="col-xxl-12">
                {{-- <h3 class="mb-4 fw-bold">Create a Trust</h3> --}}
                <div class="row">
                    <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card overflow-hidden h-100" style="min-height: 250px;">
                            <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
                                <h5 class="fw-medium">Revocable Living Trust</h5>
                                <p class="text-muted fs-12 d-inline">Easily manage your assets while you're alive.
                                    <a class="svg-secondary" href="javascript:void(0)" data-bs-toggle="popover"
                                       data-bs-placement="top" data-bs-custom-class="popover-secondary only-body" 
                                       data-bs-content="A trust that you can change or revoke during your lifetime. It can help avoid probate and allows for flexible management of your assets.">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#000000" class="ms-1" style="vertical-align: middle;">
                                            <path d="M0 0h24v24H0V0z" fill="none"/>
                                            <path d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                                        </svg>
                                    </a>
                                </p>
                                <button class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#createTrustModal" onclick="setTrustType('revocable-living')">Create</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card overflow-hidden h-100" style="min-height: 250px;">
                            <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
                                <h5 class="fw-medium">Irrevocable Trust</h5>
                                <p class="text-muted fs-12 d-inline">Protects assets without the ability to change once created.
                                    <a class="svg-secondary" href="javascript:void(0)" data-bs-toggle="popover"
                                       data-bs-placement="top" data-bs-custom-class="popover-secondary only-body" 
                                       data-bs-content="This trust cannot be modified after it is created without the consent of the beneficiaries. It provides greater asset protection and tax benefits.">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#000000" class="ms-1" style="vertical-align: middle;">
                                            <path d="M0 0h24v24H0V0z" fill="none"/>
                                            <path d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                                        </svg>
                                    </a>
                                </p>
                                <button class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#createTrustModal" onclick="setTrustType('irrevocable')">Create</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card overflow-hidden h-100" style="min-height: 250px;">
                            <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
                                <h5 class="fw-medium">Testamentary Trust</h5>
                                <p class="text-muted fs-12 d-inline">Established through a will and activated upon death.
                                    <a class="svg-secondary" href="javascript:void(0)" data-bs-toggle="popover"
                                       data-bs-placement="top" data-bs-custom-class="popover-secondary only-body" 
                                       data-bs-content="A trust that is created through a will and comes into effect only after your death. It is often used for minors or individuals who need assistance managing assets.">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#000000" class="ms-1" style="vertical-align: middle;">
                                            <path d="M0 0h24v24H0V0z" fill="none"/>
                                            <path d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                                        </svg>
                                    </a>
                                </p>
                                <button class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#createTrustModal" onclick="setTrustType('testamentary')">Create</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card overflow-hidden h-100" style="min-height: 250px;">
                            <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
                                <h5 class="fw-medium">Charitable Trust</h5>
                                <p class="text-muted fs-12 d-inline">Supports charitable organizations while offering tax benefits.
                                    <a class="svg-secondary" href="javascript:void(0)" data-bs-toggle="popover"
                                       data-bs-placement="top" data-bs-custom-class="popover-secondary only-body" 
                                       data-bs-content="A trust that benefits a charity or charities, allowing donors to receive a charitable deduction while fulfilling philanthropic goals.">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#000000" class="ms-1" style="vertical-align: middle;">
                                            <path d="M0 0h24v24H0V0z" fill="none"/>
                                            <path d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                                        </svg>
                                    </a>
                                </p>
                                <button class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#createTrustModal" onclick="setTrustType('charitable')">Create</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card overflow-hidden h-100" style="min-height: 250px;">
                            <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
                                <h5 class="fw-medium">Special Needs Trust</h5>
                                <p class="text-muted fs-12 d-inline">Provides financial support without affecting governmental benefits.
                                    <a class="svg-secondary" href="javascript:void(0)" data-bs-toggle="popover"
                                       data-bs-placement="top" data-bs-custom-class="popover-secondary only-body" 
                                       data-bs-content="Designed to benefit an individual with disabilities, this trust helps provide for their needs without affecting eligibility for government assistance.">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#000000" class="ms-1" style="vertical-align: middle;">
                                            <path d="M0 0h24v24H0V0z" fill="none"/>
                                            <path d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                                        </svg>
                                    </a>
                                </p>
                                <button class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#createTrustModal" onclick="setTrustType('special-needs')">Create</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card overflow-hidden h-100" style="min-height: 250px;">
                            <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
                                <h5 class="fw-medium">Asset Protection Trust</h5>
                                <p class="text-muted fs-12 d-inline">Safeguards assets against creditors while ensuring limited beneficiary access.
                                    <a class="svg-secondary" href="javascript:void(0)" data-bs-toggle="popover"
                                       data-bs-placement="top" data-bs-custom-class="popover-secondary only-body" 
                                       data-bs-content="A trust set up to protect assets from creditors while providing limited access to beneficiaries.">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#000000" class="ms-1" style="vertical-align: middle;">
                                            <path d="M0 0h24v24H0V0z" fill="none"/>
                                            <path d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                                        </svg>
                                    </a>
                                </p>
                                <button class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#createTrustModal" onclick="setTrustType('asset-protection')">Create</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal for Creating Trust -->
        <div class="modal fade" id="createTrustModal" tabindex="-1" aria-labelledby="createTrustModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createTrustModalLabel">Create Trust</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="trustCreationForm" action="#" method="POST">
                            <input type="hidden" id="trustTypeInput" name="trustType" value="">
                            <div class="mb-3">
                                <label for="trustName" class="form-label">Trust Name</label>
                                <input type="text" class="form-control" id="trustName" name="trustName" required>
                            </div>
                            <div class="mb-3">
                                <label for="trustDescription" class="form-label">Description</label>
                                <textarea class="form-control" id="trustDescription" name="trustDescription" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="trustAssets" class="form-label">Assets to Include</label>
                                <input type="text" class="form-control" id="trustAssets" name="trustAssets" required>
                            </div>
                            <!-- Add any other relevant fields here -->
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="submitTrustForm()">Create Trust</button>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection

@section('scripts')
    {{-- Add Needed Libraries --}}
    {{-- <!-- Shepherd JS -->
    <script src="{{ asset('assets/js/form-wizard-init.js') }}"></script>
    <!-- Vanilla-Wizard JS -->
    <script src="{{ asset('assets/libs/vanilla-wizard/js/wizard.min.js') }}"></script>

    <!-- Internal Form Wizard JS -->
    <script src="{{ asset('assets/js/form-wizard.js') }}"></script>
    <script src="{{ asset('assets/js/form-wizard-init.js') }}"></script> --}}

    <!-- dragula css-->
    <link rel="stylesheet" href="../assets/libs/dragula/dragula.min.css">

    <script>
        function setTrustType(trustType) {
            document.getElementById('trustTypeInput').value = trustType;
        }
    
        function submitTrustForm() {
            document.getElementById('trustCreationForm').submit();
        }
    
        // Initialize Bootstrap popovers
        document.addEventListener('DOMContentLoaded', function () {
            const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
            const popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl);
            });
        });
    </script>


@endsection

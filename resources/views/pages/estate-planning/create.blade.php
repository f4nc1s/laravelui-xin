@extends('layouts.master')
{{-- <title>Create Will | {{ env('APP_NAME', 'Xinui') }}</title> --}}
@section('title', 'Create New Will | ' . env('APP_NAME', 'Framework'))
@section('content')
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <nav>
                    <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Estate Planning</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Will</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
                <h1 class="page-title fw-medium fs-18 mb-0">Create Will</h1>
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

        <!-- Start::row-1 -->
        {{-- <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body add-products">
                        <div class="row gx-4">
                            <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                <div class="card custom-card shadow-none mb-0 border-0">
                                    <div class="card-body p-0">
                                        <div class="row gy-3">
                                            <div class="col-xl-12">
                                                <label for="product-name-add" class="form-label">Document Name</label>
                                                <input type="text" class="form-control" id="product-name-add"
                                                    placeholder="Name">
                                                <label for="product-name-add"
                                                    class="form-label mt-1 fs-12 fw-normal text-muted mb-0">*Name
                                                    should not exceed 30 characters</label>
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="product-size-add" class="form-label">Size</label>
                                                <select class="form-control" data-trigger name="product-size-add"
                                                    id="product-size-add">
                                                    <option value="">Select</option>
                                                    <option value="Extra Small">Extra Small</option>
                                                    <option value="Small">Small</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="Large">Large</option>
                                                    <option value="Extra Large">Extra Large</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="product-brand-add" class="form-label">Brand</label>
                                                <select class="form-control" data-trigger name="product-brand-add"
                                                    id="product-brand-add">
                                                    <option value="">Select</option>
                                                    <option value="Armani">Armani</option>
                                                    <option value="Lacoste">Lacoste</option>
                                                    <option value="Puma">Puma</option>
                                                    <option value="Spykar">Spykar</option>
                                                    <option value="Mufti">Mufti</option>
                                                    <option value="Home Town">Home Town</option>
                                                    <option value="Arrabi">Arrabi</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="product-category-add" class="form-label">Category</label>
                                                <select class="form-control" data-trigger name="product-category-add"
                                                    id="product-category-add">
                                                    <option value="">Category</option>
                                                    <option value="Clothing">Clothing</option>
                                                    <option value="Footwear">Footwear</option>
                                                    <option value="Accesories">Accesories</option>
                                                    <option value="Grooming">Grooming</option>
                                                    <option value="Ethnic & Festive">Ethnic & Festive</option>
                                                    <option value="Jewellery">Jewellery</option>
                                                    <option value="Toys & Babycare">Toys & Babycare</option>
                                                    <option value="Festive Gifts">Festive Gifts</option>
                                                    <option value="Kitchen">Kitchen</option>
                                                    <option value="Dining">Dining</option>
                                                    <option value="Home Decors">Home Decors</option>
                                                    <option value="Stationery">Stationery</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="product-gender-add" class="form-label">Gender</label>
                                                <select class="form-control" data-trigger name="product-gender-add"
                                                    id="product-gender-add">
                                                    <option value="">Select</option>
                                                    <option value="All">All</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-6 color-selection">
                                                <label for="product-color-add" class="form-label">Colors</label>
                                                <select class="form-control" name="product-color-add" id="product-color-add"
                                                    multiple>
                                                    <option value="White">White</option>
                                                    <option value="Black">Black</option>
                                                    <option value="Red">Red</option>
                                                    <option value="Orange">Orange</option>
                                                    <option value="Yellow">Yellow</option>
                                                    <option value="Green">Green</option>
                                                    <option value="Blue">Blue</option>
                                                    <option value="Pink">Pink</option>
                                                    <option value="Purple">Purple</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="product-cost-add" class="form-label">Enter Cost</label>
                                                <input type="text" class="form-control" id="product-cost-add"
                                                    placeholder="Cost">
                                                <label for="product-cost-add"
                                                    class="form-label mt-1 fs-12 fw-normal text-muted mb-0">*Mention final
                                                    price of the product</label>
                                            </div>
                                            <div class="col-xl-12">
                                                <label for="product-description-add" class="form-label">Product
                                                    Description</label>
                                                <textarea class="form-control" id="product-description-add" rows="2"></textarea>
                                                <label for="product-description-add"
                                                    class="form-label mt-1 fs-12 fw-normal text-muted mb-0">*Description
                                                    should not exceed 500 letters</label>
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="product-type" class="form-label">Product Type</label>
                                                <input type="text" class="form-control" id="product-type"
                                                    placeholder="Type">
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="product-discount" class="form-label">Item Weight</label>
                                                <input type="text" class="form-control" id="product-discount1"
                                                    placeholder="Weight in gms">
                                            </div>
                                            <div class="col-xl-12 product-documents-container">
                                                <p class="fw-medium mb-2 fs-14">Product Images :</p>
                                                <input type="file" class="form-control product-Images" name="filepond"
                                                    multiple data-allow-reorder="true" data-max-file-size="3MB"
                                                    data-max-files="6">
                                            </div>
                                            <label class="form-label text-muted mt-3 fw-normal fs-12">* Minimum of 6 images
                                                are need to be uploaded,
                                                all images should be uniformly maintained, width and height to the
                                                container.
                                            </label>
                                            <div class="col-xl-12">
                                                <label for="product-status-add1" class="form-label">Availability</label>
                                                <select class="form-control" data-trigger name="product-status-add1"
                                                    id="product-status-add1">
                                                    <option value="">Select</option>
                                                    <option value="In Stock">In Stock</option>
                                                    <option value="Out Of Stock">Out Of Stock</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                <div class="card custom-card shadow-none mb-0 border-0">
                                    <div class="card-body p-0">
                                        <div class="row gy-3">
                                            <div class="col-xl-12">
                                                <label class="form-label">Product Features</label>
                                                <div id="product-features"></div>
                                            </div>
                                            <div class="col-xl-12 product-documents-container">
                                                <p class="fw-medium mb-2 fs-14">Warrenty Documents :</p>
                                                <input type="file" class="form-control product-documents"
                                                    name="filepond" multiple data-allow-reorder="true"
                                                    data-max-file-size="3MB" data-max-files="6">
                                            </div>
                                            <div class="col-xl-4">
                                                <label for="product-actual-price" class="form-label">Actual Price</label>
                                                <input type="text" class="form-control" id="product-actual-price"
                                                    placeholder="Actual Price">
                                            </div>
                                            <div class="col-xl-4">
                                                <label for="product-dealer-price" class="form-label">Dealer Price</label>
                                                <input type="text" class="form-control" id="product-dealer-price"
                                                    placeholder="Dealer Price">
                                            </div>
                                            <div class="col-xl-4">
                                                <label for="product-discount" class="form-label">Discount</label>
                                                <input type="text" class="form-control" id="product-discount"
                                                    placeholder="Discount in %">
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="publish-date" class="form-label">Publish Date</label>
                                                <input type="text" class="form-control" id="publish-date"
                                                    placeholder="Choose date">
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="publish-time" class="form-label">Publish Time</label>
                                                <input type="text" class="form-control" id="publish-time"
                                                    placeholder="Choose time">
                                            </div>
                                            <div class="col-xl-12">
                                                <label for="product-status-add" class="form-label">Published
                                                    Status</label>
                                                <select class="form-control" data-trigger name="product-status-add"
                                                    id="product-status-add">
                                                    <option value="">Select</option>
                                                    <option value="Published">Published</option>
                                                    <option value="Scheduled">Scheduled</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-12">
                                                <label for="product-tags" class="form-label">Product Tags</label>
                                                <select class="form-control" name="product-tags" id="product-tags"
                                                    multiple>
                                                    <option value="Relaxed" selected>Relaxed</option>
                                                    <option value="Solid">Solid</option>
                                                    <option value="Washed">Washed</option>
                                                    <option value="Plain" selected>Plain</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-top border-block-start-dashed d-sm-flex justify-content-end">
                        <button class="btn btn-primary1 me-2 mb-2 mb-sm-0">Add Product<i
                                class="bi bi-plus-lg ms-2"></i></button>
                        <button class="btn btn-primary mb-2 mb-sm-0">Save Product<i
                                class="bi bi-download ms-2"></i></button>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--End::row-1 -->

        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
                            Estate Planning Questionnaire
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <form class="wizard wizard-tab horizontal" method="POST">
                            <aside class="wizard-content container">
                                <!-- Step 1: Client Information -->
                                <div class="wizard-step active" data-title="Client Information"
                                    data-id="client-information">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-12">
                                            <h6 class="mb-3">I. Client Information</h6>
                                            <div class="row gy-3">
                                                <div class="col-xl-6">
                                                    <label for="full-name" class="form-label">1. What is your full name
                                                        (as it appears on your government-issued ID)?</label>
                                                    <input type="text" class="form-control" id="full-name"
                                                        placeholder="Enter Full Name">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="dob" class="form-label">2. What is your date of
                                                        birth?</label>
                                                    <input type="date" class="form-control" id="dob">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-label">3. What is your marital status?</label>
                                                    <select class="form-select" id="marital-status">
                                                        <option value="single">a) Single</option>
                                                        <option value="married">b) Married</option>
                                                        <option value="separated">c) Separated</option>
                                                        <option value="divorced">d) Divorced</option>
                                                        <option value="widowed">e) Widowed</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-label">4. Do you have any children?</label>
                                                    <select class="form-select" id="children">
                                                        <option value="yes">a) Yes</option>
                                                        <option value="no">b) No</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-12" id="children-details" style="display: none;">
                                                    <label for="children-names" class="form-label">5. If yes, please
                                                        provide their names and dates of birth.</label>
                                                    <textarea class="form-control" id="children-names" rows="3" placeholder="Names and Dates of Birth"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Step 2: Assets and Liabilities -->
                                <div class="wizard-step" data-title="Assets and Liabilities"
                                    data-id="assets-and-liabilities">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-12">
                                            <h6 class="mb-3">II. Assets and Liabilities</h6>
                                            <div class="row gy-3">
                                                <div class="col-xl-6">
                                                    <label class="form-label">1. Do you own any real estate
                                                        properties?</label>
                                                    <select class="form-select" id="real-estate">
                                                        <option value="yes">a) Yes</option>
                                                        <option value="no">b) No</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-12" id="property-addresses" style="display: none;">
                                                    <label for="property-details" class="form-label">2. If yes, please
                                                        provide the property addresses and estimated values.</label>
                                                    <textarea class="form-control" id="property-details" rows="3"
                                                        placeholder="Property Addresses and Estimated Values"></textarea>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-label">3. Do you have any bank accounts?</label>
                                                    <select class="form-select" id="bank-accounts">
                                                        <option value="yes">a) Yes</option>
                                                        <option value="no">b) No</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-12" id="account-details" style="display: none;">
                                                    <label for="bank-details" class="form-label">4. If yes, please provide
                                                        the account numbers, bank names, and estimated balances.</label>
                                                    <textarea class="form-control" id="bank-details" rows="3"
                                                        placeholder="Account Numbers, Bank Names, Estimated Balances"></textarea>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-label">5. Do you have any investments (e.g., stocks,
                                                        bonds, mutual funds)?</label>
                                                    <select class="form-select" id="investments">
                                                        <option value="yes">a) Yes</option>
                                                        <option value="no">b) No</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-12" id="investment-details" style="display: none;">
                                                    <label for="investment-details" class="form-label">6. If yes, please
                                                        provide the investment details (e.g., account numbers, investment
                                                        types, estimated values).</label>
                                                    <textarea class="form-control" id="investment-details" rows="3" placeholder="Investment Details"></textarea>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-label">7. Do you have any retirement accounts (e.g.,
                                                        401(k), IRA, pension)?</label>
                                                    <select class="form-select" id="retirement-accounts">
                                                        <option value="yes">a) Yes</option>
                                                        <option value="no">b) No</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-12" id="retirement-details" style="display: none;">
                                                    <label for="retirement-details" class="form-label">8. If yes, please
                                                        provide the account details (e.g., account numbers, account types,
                                                        estimated values).</label>
                                                    <textarea class="form-control" id="retirement-details" rows="3" placeholder="Retirement Account Details"></textarea>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-label">9. Do you have any life insurance
                                                        policies?</label>
                                                    <select class="form-select" id="life-insurance">
                                                        <option value="yes">a) Yes</option>
                                                        <option value="no">b) No</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-12" id="insurance-details" style="display: none;">
                                                    <label for="insurance-details" class="form-label">10. If yes, please
                                                        provide the policy details (e.g., policy numbers, insurance
                                                        companies, beneficiaries).</label>
                                                    <textarea class="form-control" id="insurance-details" rows="3" placeholder="Policy Details"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Step 3: Beneficiaries and Bequests -->
                                <div class="wizard-step" data-title="Beneficiaries and Bequests" data-id="beneficiaries">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-12">
                                            <h6 class="mb-3">III. Beneficiaries and Bequests</h6>
                                            <div class="row gy-3">
                                                <div class="col-xl-6">
                                                    <label class="form-label">1. Who do you want to inherit your
                                                        assets?</label>
                                                    <select class="form-select" id="inherit-assets">
                                                        <option value="spouse">a) Spouse</option>
                                                        <option value="children">b) Children</option>
                                                        <option value="relatives">c) Other relatives</option>
                                                        <option value="friends">d) Friends</option>
                                                        <option value="charities">e) Charities</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-label">2. Do you want to leave any specific
                                                        bequests?</label>
                                                    <select class="form-select" id="specific-bequests">
                                                        <option value="yes">a) Yes</option>
                                                        <option value="no">b) No</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-12" id="bequest-details" style="display: none;">
                                                    <label for="bequest-details" class="form-label">3. If yes, please
                                                        provide the bequest details.</label>
                                                    <textarea class="form-control" id="bequest-details" rows="3" placeholder="Bequest Details"></textarea>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-label">4. Do you want to create a residuary clause
                                                        to distribute any remaining assets?</label>
                                                    <select class="form-select" id="residuary-clause">
                                                        <option value="yes">a) Yes</option>
                                                        <option value="no">b) No</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-12" id="residuary-details" style="display: none;">
                                                    <label for="residuary-details" class="form-label">5. If yes, please
                                                        specify how you want the remaining assets to be distributed.</label>
                                                    <textarea class="form-control" id="residuary-details" rows="3" placeholder="Distribution Details"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Step 4: Executor and Trustees -->
                                <div class="wizard-step" data-title="Executor and Trustees" data-id="executor-trustees">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-12">
                                            <h6 class="mb-3">IV. Executor and Trustees</h6>
                                            <div class="row gy-3">
                                                <div class="col-xl-6">
                                                    <label class="form-label">1. Who do you want to appoint as the executor
                                                        of your estate?</label>
                                                    <select class="form-select" id="executor">
                                                        <option value="spouse">a) Spouse</option>
                                                        <option value="child">b) Child</option>
                                                        <option value="relative">c) Other relative</option>
                                                        <option value="friend">d) Friend</option>
                                                        <option value="professional">e) Professional executor</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-label">2. Do you want to appoint any alternate
                                                        executors?</label>
                                                    <select class="form-select" id="alternate-executors">
                                                        <option value="yes">a) Yes</option>
                                                        <option value="no">b) No</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-12" id="alternate-executor-details"
                                                    style="display: none;">
                                                    <label for="alternate-executor" class="form-label">3. If yes, please
                                                        provide the alternate executor's name and contact
                                                        information.</label>
                                                    <textarea class="form-control" id="alternate-executor" rows="3" placeholder="Alternate Executor Details"></textarea>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-label">4. Do you want to create any trusts?</label>
                                                    <select class="form-select" id="trusts">
                                                        <option value="yes">a) Yes</option>
                                                        <option value="no">b) No</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-12" id="trust-details" style="display: none;">
                                                    <label for="trust-details" class="form-label">5. If yes, please
                                                        specify the trust details.</label>
                                                    <textarea class="form-control" id="trust-details" rows="3" placeholder="Trust Details"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Step 5: Guardianship and Minor Children -->
                                <div class="wizard-step" data-title="Guardianship and Minor Children"
                                    data-id="guardianship">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-12">
                                            <h6 class="mb-3">V. Guardianship and Minor Children</h6>
                                            <div class="row gy-3">
                                                <div class="col-xl-6">
                                                    <label class="form-label">1. Do you have any minor children?</label>
                                                    <select class="form-select" id="minor-children">
                                                        <option value="yes">a) Yes</option>
                                                        <option value="no">b) No</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-6" id="guardian-details" style="display: none;">
                                                    <label class="form-label">2. If yes, who do you want to appoint as
                                                        their guardian?</label>
                                                    <select class="form-select" id="guardian">
                                                        <option value="spouse">a) Spouse</option>
                                                        <option value="relative">b) Other relative</option>
                                                        <option value="friend">c) Friend</option>
                                                        <option value="professional">d) Professional guardian</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-label">3. Do you want to appoint any alternate
                                                        guardians?</label>
                                                    <select class="form-select" id="alternate-guardians">
                                                        <option value="yes">a) Yes</option>
                                                        <option value="no">b) No</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-12" id="alternate-guardian-details"
                                                    style="display: none;">
                                                    <label for="alternate-guardian" class="form-label">4. If yes, please
                                                        provide the alternate guardian's name and contact
                                                        information.</label>
                                                    <textarea class="form-control" id="alternate-guardian" rows="3" placeholder="Alternate Guardian Details"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Step 6: Special Instructions and Wishes -->
                                <div class="wizard-step" data-title="Special Instructions and Wishes"
                                    data-id="special-instructions">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-12">
                                            <h6 class="mb-3">VI. Special Instructions and Wishes</h6>
                                            <div class="row gy-3">
                                                <div class="col-xl-6">
                                                    <label class="form-label">1. Do you have any specific funeral
                                                        arrangements or instructions?</label>
                                                    <select class="form-select" id="funeral-arrangements">
                                                        <option value="yes">a) Yes</option>
                                                        <option value="no">b) No</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-12" id="funeral-details" style="display: none;">
                                                    <label for="funeral-details" class="form-label">2. If yes, please
                                                        provide the details.</label>
                                                    <textarea class="form-control" id="funeral-details" rows="3" placeholder="Funeral Details"></textarea>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-label">3. Do you want to make any charitable
                                                        donations or bequests?</label>
                                                    <select class="form-select" id="charitable-donations">
                                                        <option value="yes">a) Yes</option>
                                                        <option value="no">b) No</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-12" id="charity-details" style="display: none;">
                                                    <label for="charity-details" class="form-label">4. If yes, please
                                                        specify charity name and donation details.</label>
                                                    <textarea class="form-control" id="charity-details" rows="3" placeholder="Charity Details"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Step 7: Taxes and Estate Planning -->
                                <div class="wizard-step" data-title="Taxes and Estate Planning"
                                    data-id="taxes-estate-planning">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-12">
                                            <h6 class="mb-3">VII. Taxes and Estate Planning</h6>
                                            <div class="row gy-3">
                                                <div class="col-xl-6">
                                                    <label class="form-label">1. Have you considered any tax implications
                                                        for your estate?</label>
                                                    <select class="form-select" id="tax-implications">
                                                        <option value="yes">a) Yes</option>
                                                        <option value="no">b) No</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-label">2. Do you want to minimize taxes for your
                                                        beneficiaries?</label>
                                                    <select class="form-select" id="minimize-taxes">
                                                        <option value="yes">a) Yes</option>
                                                        <option value="no">b) No</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-label">3. Have you considered any estate planning
                                                        strategies?</label>
                                                    <select class="form-select" id="estate-strategies">
                                                        <option value="yes">a) Yes</option>
                                                        <option value="no">b) No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Step 8: Review and Updates -->
                                <div class="wizard-step" data-title="Review and Updates" data-id="review-updates">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-12">
                                            <h6 class="mb-3">VIII. Review and Updates</h6>
                                            <div class="row gy-3">
                                                <div class="col-xl-6">
                                                    <label class="form-label">1. How often do you want to review and update
                                                        your will?</label>
                                                    <select class="form-select" id="review-frequency">
                                                        <option value="every-2-5-years">a) Every 2-5 years</option>
                                                        <option value="as-circumstances-change">b) As circumstances change
                                                        </option>
                                                        <option value="other">c) Other (please specify)</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-12" id="other-review-frequency"
                                                    style="display: none;">
                                                    <label for="other-frequency" class="form-label">Please
                                                        specify:</label>
                                                    <input type="text" class="form-control" id="other-frequency"
                                                        placeholder="Other Frequency">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-label">2. Do you want to receive reminders to review
                                                        your will?</label>
                                                    <select class="form-select" id="reminders">
                                                        <option value="yes">a) Yes</option>
                                                        <option value="no">b) No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submission -->
                                <div class="wizard-step" data-title="Submission" data-id="submission">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="d-flex justify-content-end mt-4">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </aside>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::row-1 -->


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

    <script>
        // JavaScript to toggle visibility of additional input fields based on selections
        document.getElementById('children').addEventListener('change', function() {
            document.getElementById('children-details').style.display = this.value === 'yes' ? 'block' : 'none';
        });

        document.getElementById('real-estate').addEventListener('change', function() {
            document.getElementById('property-addresses').style.display = this.value === 'yes' ? 'block' : 'none';
        });

        document.getElementById('bank-accounts').addEventListener('change', function() {
            document.getElementById('account-details').style.display = this.value === 'yes' ? 'block' : 'none';
        });

        document.getElementById('investments').addEventListener('change', function() {
            document.getElementById('investment-details').style.display = this.value === 'yes' ? 'block' : 'none';
        });

        document.getElementById('retirement-accounts').addEventListener('change', function() {
            document.getElementById('retirement-details').style.display = this.value === 'yes' ? 'block' : 'none';
        });

        document.getElementById('life-insurance').addEventListener('change', function() {
            document.getElementById('insurance-details').style.display = this.value === 'yes' ? 'block' : 'none';
        });

        document.getElementById('specific-bequests').addEventListener('change', function() {
            document.getElementById('bequest-details').style.display = this.value === 'yes' ? 'block' : 'none';
        });

        document.getElementById('residuary-clause').addEventListener('change', function() {
            document.getElementById('residuary-details').style.display = this.value === 'yes' ? 'block' : 'none';
        });

        document.getElementById('alternate-executors').addEventListener('change', function() {
            document.getElementById('alternate-executor-details').style.display = this.value === 'yes' ? 'block' :
                'none';
        });

        document.getElementById('trusts').addEventListener('change', function() {
            document.getElementById('trust-details').style.display = this.value === 'yes' ? 'block' : 'none';
        });

        document.getElementById('minor-children').addEventListener('change', function() {
            document.getElementById('guardian-details').style.display = this.value === 'yes' ? 'block' : 'none';
        });

        document.getElementById('alternate-guardians').addEventListener('change', function() {
            document.getElementById('alternate-guardian-details').style.display = this.value === 'yes' ? 'block' :
                'none';
        });

        document.getElementById('funeral-arrangements').addEventListener('change', function() {
            document.getElementById('funeral-details').style.display = this.value === 'yes' ? 'block' : 'none';
        });

        document.getElementById('charitable-donations').addEventListener('change', function() {
            document.getElementById('charity-details').style.display = this.value === 'yes' ? 'block' : 'none';
        });

        document.getElementById('review-frequency').addEventListener('change', function() {
            document.getElementById('other-review-frequency').style.display = this.value === 'other' ? 'block' :
                'none';
        });
    </script>

@endsection

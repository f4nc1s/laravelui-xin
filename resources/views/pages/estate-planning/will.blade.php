@extends('layouts.master')
{{-- <title>Account Summary: Estate Planning | {{ env('APP_NAME', 'Xinui') }}</title> --}}
@section('title', 'Will | ' . env('APP_NAME', 'Framework'))
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
                        <li class="breadcrumb-item active" aria-current="page">Will</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End::page-header -->
        <div class="row">
            <div class="col-xxl-3 col-xl-6">
              <div class="card custom-card overflow-hidden">
                <div class="card-body">
                  <div class="d-flex gap-3 align-items-center">
                    <div class="avatar avatar-lg bg-primary svg-white">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                        <path d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z"></path>
                      </svg>
                    </div>
                    <div>
                      <div class="flex-fill fs-13 text-muted">Total Will Created</div>
                      <div class="fs-21 fw-medium">87 </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-6">
              <div class="card custom-card overflow-hidden">
                <div class="card-body">
                  <div class="d-flex gap-3 align-items-center">
                    <div class="avatar avatar-lg bg-primary1 svg-white">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                        <path d="M152,120H136V56h8a32,32,0,0,1,32,32,8,8,0,0,0,16,0,48.05,48.05,0,0,0-48-48h-8V24a8,8,0,0,0-16,0V40h-8a48,48,0,0,0,0,96h8v64H104a32,32,0,0,1-32-32,8,8,0,0,0-16,0,48.05,48.05,0,0,0,48,48h16v16a8,8,0,0,0,16,0V216h16a48,48,0,0,0,0-96Zm-40,0a32,32,0,0,1,0-64h8v64Zm40,80H136V136h16a32,32,0,0,1,0,64Z"></path>
                      </svg>
                    </div>
                    <div>
                      <div class="flex-fill fs-13 text-muted">Approved</div>
                      <div class="fs-21 fw-medium">46</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-6">
              <div class="card custom-card overflow-hidden">
                <div class="card-body">
                  <div class="d-flex gap-3 align-items-center">
                    <div class="avatar avatar-lg bg-primary2 svg-white">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                        <path d="M244.24,60a8,8,0,0,0-7.75-.4c-42.93,21-73.59,11.16-106,.78-34-10.89-69.25-22.14-117.95,1.64A8,8,0,0,0,8,69.24V189.17a8,8,0,0,0,11.51,7.19c42.93-21,73.59-11.16,106.05-.78,19.24,6.15,38.84,12.42,61,12.42,17.09,0,35.73-3.72,56.91-14.06a8,8,0,0,0,4.49-7.18V66.83A8,8,0,0,0,244.24,60ZM232,181.67c-40.6,18.17-70.25,8.69-101.56-1.32-19.24-6.15-38.84-12.42-61-12.42a122,122,0,0,0-45.4,9V74.33c40.6-18.17,70.25-8.69,101.56,1.32S189.14,96,232,79.09ZM128,96a32,32,0,1,0,32,32A32,32,0,0,0,128,96Zm0,48a16,16,0,1,1,16-16A16,16,0,0,1,128,144ZM56,96v48a8,8,0,0,1-16,0V96a8,8,0,1,1,16,0Zm144,64V112a8,8,0,1,1,16,0v48a8,8,0,1,1-16,0Z"></path>
                      </svg>
                    </div>
                    <div>
                      <div class="flex-fill fs-13 text-muted">Total Rejected</div>
                      <div class="fs-21 fw-medium">5</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-6">
              <div class="card custom-card overflow-hidden">
                <div class="card-body">
                  <div class="d-flex gap-3 align-items-center">
                    <div class="avatar avatar-lg bg-primary3 svg-white">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                        <path d="M192,116a12,12,0,1,1-12-12A12,12,0,0,1,192,116ZM152,64H112a8,8,0,0,0,0,16h40a8,8,0,0,0,0-16Zm96,48v32a24,24,0,0,1-24,24h-2.36l-16.21,45.38A16,16,0,0,1,190.36,224H177.64a16,16,0,0,1-15.07-10.62L160.65,208h-57.3l-1.92,5.38A16,16,0,0,1,86.36,224H73.64a16,16,0,0,1-15.07-10.62L46,178.22a87.69,87.69,0,0,1-21.44-48.38A16,16,0,0,0,16,144a8,8,0,0,1-16,0,32,32,0,0,1,24.28-31A88.12,88.12,0,0,1,112,32H216a8,8,0,0,1,0,16H194.61a87.93,87.93,0,0,1,30.17,37c.43,1,.85,2,1.25,3A24,24,0,0,1,248,112Zm-16,0a8,8,0,0,0-8-8h-3.66a8,8,0,0,1-7.64-5.6A71.9,71.9,0,0,0,144,48H112A72,72,0,0,0,58.91,168.64a8,8,0,0,1,1.64,2.71L73.64,208H86.36l3.82-10.69A8,8,0,0,1,97.71,192h68.58a8,8,0,0,1,7.53,5.31L177.64,208h12.72l18.11-50.69A8,8,0,0,1,216,152h8a8,8,0,0,0,8-8Z"></path>
                      </svg>
                    </div>
                    <div>
                      <div class="flex-fill fs-13 text-muted">Pending</div>
                      <div class="fs-21 fw-medium">8 </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="page-title fw-medium fs-18 mb-0">My Recently Added Wills</h1>
            <a href="{{ route('addNewWill') }}" class="btn btn-success">ADD NEW WILL</a>
          </div>
        <div class="row">
            <div class="col-xl-3">
              <div class="card custom-card">
                <div class="card-body">
                  <img src="{{ asset('assets/images/media/media-4.jpg') }}" class="card-img mb-3" alt="...">
                  <h6 class="card-title fw-medium mb-3">Monaco Estate	 <span class="badge bg-primary float-end fs-10">2022R-01</span>
                  </h6>
                  <p class="card-text">Assets will be inherited by Spouse (Mrs Jane Smith)</p>
                  <div class="d-flex justify-content-between mt-3">
                    <button class="btn btn-primary btn-sm">Download</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3">
              <div class="card custom-card">
                <div class="card-body">
                  <img src="{{ asset('assets/images/media/media-9.jpg') }}" class="card-img mb-3" alt="...">
                  <h6 class="card-title fw-medium mb-3">Lifetong Assets and Share <span class="badge bg-primary float-end fs-10">2022R-02</span>
                  </h6>
                  <p class="card-text">Assets will be inherited by Spouse (Mrs Jane Smith)</p>
                  <div class="d-flex justify-content-between mt-3">
                    <button class="btn btn-primary btn-sm">Download</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3">
              <div class="card custom-card">
                <div class="card-body">
                  <img src="{{ asset('assets/images/media/media-15.jpg') }}" class="card-img mb-3" alt="...">
                  <h6 class="card-title fw-medium mb-3">After Death in Hospital <span class="badge bg-primary float-end fs-10">2022R-03</span>
                  </h6>
                  <p class="card-text">Assets will be inherited by Spouse (Mrs Jane Smith)</p>
                  <div class="d-flex justify-content-between mt-3">
                    <button class="btn btn-primary btn-sm">Download</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3">
                <div class="card custom-card">
                  <div class="card-body">
                    <img src="{{ asset('assets/images/media/media-16.jpg') }}" class="card-img mb-3" alt="...">
                    <h6 class="card-title fw-medium mb-3">Accident <span class="badge bg-primary float-end fs-10">Accident</span>
                    </h6>
                    <p class="card-text">Assets will be inherited by Spouse (Mrs Jane Smith)</p>
                    <div class="d-flex justify-content-between mt-3">
                        <button class="btn btn-primary btn-sm">Download</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </div>
                  </div>
                </div>
              </div>
        </div>

    </div>
    @endsection

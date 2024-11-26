@extends('layouts.master')
<title>Empty | {{ env('APP_NAME', 'Xinui') }}</title>
@section('content')
    <div class="container-fluid">

        <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <nav>
                    <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Estate Planning</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Will</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Manage</li>
                    </ol>
                </nav>
                <h1 class="page-title fw-medium fs-18 mb-0">Wills</h1>
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

        <div class="row">
            <div class="table-responsive">
                <table class="table text-nowrap table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">User</th>
                            <th scope="col">Status</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs me-2 online avatar-rounded">
                                        <img src="../assets/images/faces/13.jpg" alt="img">
                                    </span>Sukuro Kim
                                </div>
                            </th>
                            <td><span class="badge bg-success-transparent">Active</span></td>
                            <td>kimosukuro@gmail.com</td>
                            <td>
                                <div class="hstack gap-2 flex-wrap">
                                    <a href="javascript:void(0);" class="text-info fs-14 lh-1"><i
                                            class="ri-edit-line"></i></a>
                                    <a href="javascript:void(0);" class="text-danger fs-14 lh-1"><i
                                            class="ri-delete-bin-5-line"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs me-2 offline avatar-rounded">
                                        <img src="../assets/images/faces/6.jpg" alt="img">
                                    </span>Hasimna
                                </div>
                            </th>
                            <td><span class="badge bg-light text-dark">Inactive</span></td>
                            <td>hasimna2132@gmail.com</td>
                            <td>
                                <div class="hstack gap-2 flex-wrap">
                                    <a href="javascript:void(0);" class="text-info fs-14 lh-1"><i
                                            class="ri-edit-line"></i></a>
                                    <a href="javascript:void(0);" class="text-danger fs-14 lh-1"><i
                                            class="ri-delete-bin-5-line"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs me-2 online avatar-rounded">
                                        <img src="../assets/images/faces/15.jpg" alt="img">
                                    </span>Azimo Khan
                                </div>
                            </th>
                            <td><span class="badge bg-success-transparent">Active</span></td>
                            <td>azimokhan421@gmail.com</td>
                            <td>
                                <div class="hstack gap-2 flex-wrap">
                                    <a href="javascript:void(0);" class="text-info fs-14 lh-1"><i
                                            class="ri-edit-line"></i></a>
                                    <a href="javascript:void(0);" class="text-danger fs-14 lh-1"><i
                                            class="ri-delete-bin-5-line"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs me-2 online avatar-rounded">
                                        <img src="../assets/images/faces/5.jpg" alt="img">
                                    </span>Samantha Julia
                                </div>
                            </th>
                            <td><span class="badge bg-success-transparent">Active</span></td>
                            <td>julianasams143@gmail.com</td>
                            <td>
                                <div class="hstack gap-2 flex-wrap">
                                    <a href="javascript:void(0);" class="text-info fs-14 lh-1"><i
                                            class="ri-edit-line"></i></a>
                                    <a href="javascript:void(0);" class="text-danger fs-14 lh-1"><i
                                            class="ri-delete-bin-5-line"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
@endsection

@extends('layouts.master')
{{-- <title>Empty | {{ env('APP_NAME', 'Xinui') }}</title> --}}
@section('title', 'Empty | ' . env('APP_NAME', 'Framework'))
@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12 mt-xl-3">
                <div class="card custom-card">
                    <div class="card-body">
                        <h6 class="mb-0">THIS IS AN EMPTY PAGE</h6>
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
    

@endsection

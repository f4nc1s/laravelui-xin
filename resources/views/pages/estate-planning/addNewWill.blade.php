@extends('layouts.master')
@section('title', 'Will Creation Process | ' . env('APP_NAME', 'Xinui'))
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-4 shadow-lg" style="max-width: 500px; width: 100%;">
            <h3 class="text-center fw-bold mb-4">Will Creation Checklist</h3>
            <p><b>Each step takes less than 4mins to complete.</b></p>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="#" class="text-decoration-none">Client Information</a>
                    <span class="badge bg-secondary">Step 1</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="#" class="text-decoration-none">Assets and Liabilities</a>
                    <span class="badge bg-secondary">Step 2</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="#" class="text-decoration-none">Beneficiaries and Bequests</a>
                    <span class="badge bg-secondary">Step 3</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="#" class="text-decoration-none">Executor and Trustees</a>
                    <span class="badge bg-secondary">Step 4</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="#" class="text-decoration-none">Guardianship and Minor Children</a>
                    <span class="badge bg-secondary">Step 5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="#" class="text-decoration-none">Special Instructions and Wishes</a>
                    <span class="badge bg-secondary">Step 6</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="#" class="text-decoration-none">Taxes and Estate Planning</a>
                    <span class="badge bg-secondary">Step 7</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="#" class="text-decoration-none">Review and Submit</a>
                    <span class="badge bg-secondary">Final Step</span>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection

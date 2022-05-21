@extends('layout.master')
@section('title','Hybrid Template')
@section('content')
@section('bg-body','bg-dark')
<div class="container bg-dark" style="padding-top:10%;padding-bottom:10%">
    <div class="row g-3">
        {{-- LANDING PAGE --}}
        <div class="col-md-12" style="text-align: center; padding-top:5%;padding-bottom:5%;color:#f2f2f7">
            <svg xmlns="http://www.w3.org/2000/svg" width="90px" height="90px" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
                <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
            </svg>
            <h1>Hybrid Template</h1>
        </div>
        {{-- CATEGORY --}}
        <div class="col-md-12" style="padding-top: 5%; padding-bottom:5%;">
            <h3 style="text-align: center; color:#f2f2f7">Category</h3>
        </div>
        {{-- TOP 4 FREE CONTENT --}}
        <div class="col-md-12" style="padding-top: 5%; padding-bottom:5%;">
            <h3 style="text-align: center; color:#f2f2f7">Top 4 Free Content</h3>
        </div>
        {{-- TOP 4 PAID CONTENT --}}
        <div class="col-md-12" style="padding-top: 5%; padding-bottom:5%;">
            <h3 style="text-align: center; color:#f2f2f7">Top 4 Paid Content</h3>
        </div>
    </div>
</div>
@stop
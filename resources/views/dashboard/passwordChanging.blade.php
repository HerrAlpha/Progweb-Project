@extends('dashboard.main')
@section('title','Change Password')
@section('content')
@section('subHeader')
@stop
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>New Password</h5>
            </div>
            <div class="card-body">
                <form action="/dashboard/settings/update-pass" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Password Confirmation</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror">
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-success">
                            <span data-feather="check"></span>
                            Confirm
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- MODAL PASSWORD CHANGE CONFIRMATION CONFIRM OR DISCARD --}}


@stop

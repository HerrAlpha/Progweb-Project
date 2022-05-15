@extends('dashboard.main')
@section('title','Password Confirmation')
@section('content')
@section('subHeader')
@stop
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Password Confirmation</h5>
            </div>
            <div class="card-body">
                <form action="{{route('password.confirm')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group">
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
@stop
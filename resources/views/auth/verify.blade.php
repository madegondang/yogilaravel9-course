@extends('layouts.custom')
@section('title', 'Login')
@section('content')
<div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
      <div class="login-brand">
        <img src="../assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
      </div>

      <div class="card card-primary">
        <div class="card-header"><h4>Please Check Your Email For Verification</h4></div>

        <div class="card-body">
            @if (session('status')=='verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                A New Email Verification Link Has Been Emailed To You
            </div>
                
            @endif
          <form method="POST" action="{{route('verification.send')}}" class="needs-validation" novalidate="">
            @csrf
            
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                Re-Send Email Verification
              </button>
            </div>
          </form>

        </div>
      </div>
      <div class="simple-footer">
        Copyright &copy; Stisla 2018
      </div>
    </div>
  </div>
@endsection
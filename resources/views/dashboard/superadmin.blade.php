@extends('layouts.app')
@section('title','Super Admin')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Super Admin</h1>
    </div>

    <div class="section-body">
        Content Here
    </div>
  </section>
@endsection

@section('sidebar')
@parent
{{-- <li><a class="nav-link" href="{{ route('superadmin') }}"><i class="fas fa-pencil-ruler"></i> <span>Home</span></a></li> --}}
@endsection
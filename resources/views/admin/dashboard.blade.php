@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">
      <div class="d-flex justify-content-between flex-wrap">
        <div class="d-flex align-items-end flex-wrap">
          <div class="me-md-3 me-xl-5">

            @if(session('message'))
              <h2>{{ session('message') }}</h2>
            @endif

            <p class="mb-md-0">Lumin Eyes dashboard</p>
          </div>
          <div class="d-flex">
            <i class="mdi mdi-home text-muted hover-cursor"></i>
            <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;&nbsp;</p>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection

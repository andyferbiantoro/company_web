@extends('layouts.app')

@section('title')
Dashboard
@endsection


@section('content')

<div class="row">
 <div class="col-lg-12">
  <div class="card">
                <div class="card-header">
                  <h4>Selamat Datang !, Admin</h4>
                </div>
                <div class="card-body">
                  @if (session('success'))
                  <div class="alert alert-success">
                    {{ session('success') }}
                  </div>
                  @endif
                  

                 
                </div>
              </div>
            </div>
          </div>

         
          @endsection



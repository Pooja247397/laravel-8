@extends('layouts.app')
@section('content')
<script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_SANDBOX_CLIENT_ID') }}"></script>
<div class="container">
<div class="row justify-content-center">
   <div class="col-md-8">
      <div class="card">
         <div class="card-header">{{ __('Donate with Paypal') }}</div>
         <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
               {{ session('status') }}
            </div>
            @endif
         </div>
         <div class="container">
            <form action="{{ route('processTransaction') }}" method="post">
               @csrf
               <div class="form-group">
                  <input type="text" name="price" placeholder="Enter Price" class="form-control">
               </div>
               <input type="submit" value="Submit" class="btn btn-primary mt-3">
               <a href="{{url('/home') }}"  class="btn btn-danger mt-3">Back</a>
            </form>
            @if(\Session::has('error'))
            <div class="alert alert-danger">{{ \Session::get('error') }}</div>
            {{ \Session::forget('error') }}
            @endif
            @if(\Session::has('success'))
            <div class="alert alert-success">{{ \Session::get('success') }}</div>
            {{ \Session::forget('success') }}
            @endif
         </div>
      </div>
   </div>
</div>
@endsection
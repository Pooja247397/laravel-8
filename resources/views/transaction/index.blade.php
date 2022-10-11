@extends('layouts.app')
@section('content')
<script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_SANDBOX_CLIENT_ID') }}"></script>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">{{ __('Transaction List') }}</div>
<div class="card-body">
   @if (session('status'))
   <div class="alert alert-success" role="alert">
      {{ session('status') }}
   </div>
   @endif
</div>
<div class="container">
<table class="table">
   <thead>
      <tr>
         <td>Id</td>
         <td>Transaction Id</td>
         <td>Status</td>
      </tr>
   </thead>
   <tbody>
      @if($transaction)  
      @foreach($transaction as $key=>$row)
      <tr>
         @php $key++; @endphp 
         <td>{{ $key }}</td>
         <td>{{ $row->txn_id }}</td>
         <td>{{ $row->status }}</td>
      </tr>
      @endforeach
      @endif
   </tbody>
</table>

@endsection
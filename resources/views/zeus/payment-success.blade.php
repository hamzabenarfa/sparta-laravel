<!-- resources/views/frontend/payment-success.blade.php -->

@extends('frontend.zeus.layouts.app') <!-- Assuming you have a layout file, adjust as needed -->

@section('content')
    <div class="container">
        <h2>Payment Successful</h2>
        <p>Thank you for your payment!</p>

        <!-- Assuming you have a route named 'payment.confirmation' for payment confirmation -->
        <a href="{{ route('payment.confirmation') }}">View Payment Confirmation</a>
    </div>
@endsection
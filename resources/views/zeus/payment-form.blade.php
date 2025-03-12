<!-- resources/views/frontend/zeus/payment-form.blade.php -->

@extends('frontend.zeus.layouts.app') <!-- Assuming you have a layout file, adjust as needed -->

@section('content')
    <div class="container">
        <h2>Payment Form</h2>

        <form action="{{ route('process-payment) }}" method="post">
            @csrf
            <label for="amount">Payment Amount:</label>
            <input type="text" name="amount" id="amount" required>

            <label for="cryptocurrency">Select Cryptocurrency:</label>
            <select name="cryptocurrency" id="cryptocurrency" required>
                <!-- Add cryptocurrency options dynamically based on your preferences -->
                <option value="bitcoin">Bitcoin</option>
                <option value="ethereum">Ethereum</option>
                <!-- Add more options as needed -->
            </select>

            <button type="submit">Proceed to Payment</button>
        </form>
    </div>
@endsection
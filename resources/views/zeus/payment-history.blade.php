@foreach($payments as $payment)
    <p>Payment ID: {{ $payment->payment_id }}</p>
    <p>Amount: {{ $payment->amount }} {{ $payment->currency }}</p>
    <p>Status: {{ $payment->status }}</p>
    <!-- Add more details and styling as needed -->
@endforeach
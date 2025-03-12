@extends('frontend.zeus.layouts.app')

@section('content')
    <h1>About Us</h1>
    <p>{{ $setting->about_us ?? 'Default About Us Content' }}</p>
@endsection

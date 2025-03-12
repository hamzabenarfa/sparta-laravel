@extends('frontend.zeus.layouts.app')

@section('page-title', $title)
@section('body', $body)
@section('keywords', $keywords)
@section('description', $description)

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
<style>
    .nav {
        display: flex;
        gap: 4px;
        overflow-x: auto; /* Allow horizontal scrolling */
        scrollbar-width: none; /* Hide scrollbar */
        -ms-overflow-style: none; /* Hide scrollbar for IE and Edge */
    }

    .nav::-webkit-scrollbar {
        display: none; /* Hide scrollbar for Chrome, Safari, and Opera */
    }

    .nav div {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        flex: 0 0 auto; /* Prevent items from shrinking */
        padding: 12px 60px;
        background-color: white;
        transition: background-color 0.3s ease;
        min-width: 150px;
        font-weight: bold;
        border-radius: 8px; /* Rounded corners */
    }

    .nav div img {
        width: 24px;
        filter: grayscale(100%);
    }

    .nav div h1 {
        color: #3b3c3d;
        font-size: 16px;
        margin: 0;
    }

    .nav div:hover {
        background-color: #facc15;
        cursor: pointer;
    }

    .nav div:hover img {
        filter: none;
    }

    .filter-bar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 20px;
        gap: 10px;
    }

    .filter-bar .providers,
    .filter-bar .search {
        display: flex;
        align-items: center;
        gap: 5px;
        background-color: white;
        padding: 8px 16px;
        border-radius: 999px;
        font-weight: bold;
        flex: 1; /* Allow these to grow */
    }

    .filter-bar .providers span {
        color: rgb(0, 0, 0);
        text-transform: uppercase;
        margin-right: 10px;
    }

    .filter-bar .order-by {
        color: rgb(255, 255, 255);
        text-transform: uppercase;
        margin-right: 10px;
    }

    .filter-bar .order-by button,
    .filter-bar .providers button {
        background: transparent;
        border: none;
        padding: 6px 12px;
        border-radius: 999px;
        cursor: pointer;
        color: rgb(240, 240, 240);
        transition: background-color 0.3s;
        font-weight: bold;
    }

    .filter-bar .order-by button.active {
        background-color: #facc15;
        color: black;
    }

    .filter-bar .providers select {
        background-color: transparent;
        border: none;
        font-weight: bold;
        flex: 1; /* Allow select to grow */
    }

    .filter-bar .search input {
        background-color: transparent;
        border: none;
        outline: none;
        color: #6b7280;
        padding: 0;
        font-weight: bold;
        flex: 1; /* Allow input to grow */
    }

    .filter-bar .search img {
        width: 16px;
        opacity: 0.5;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .nav {
            flex-wrap: nowrap; /* Prevent wrapping of nav items */
        }

        .filter-bar {
            flex-direction: column;
            align-items: stretch;
        }

        .filter-bar .providers,
        .filter-bar .search,
        .filter-bar .order-by {
            flex: 1 1 100%; /* Allow full width */
            margin-bottom: 10px;
        }

        select, input {
            width: 100%; /* Full width for select and input */
        }
    }
</style>
@endsection

@section('content')
<!-- BANNERS -->
<div class="owl-carousel owl-theme" id="banner">
    <div class="item">
        <img src="https://www.platinbet365.com/_next/image?url=https%3A%2F%2Fassets.platinbet365.com%2Fsites%2Fplatinbet365%2Fsliders%2F2%2Fslide_1_fr_1705664387.jpg&w=1920&q=75" class="d-block d-sm-none" alt="banner">
        <img src="/web/img/banners/BANNERS-DROP-WIN2024E.jpg" class="d-none d-sm-block" alt="Banner">
    </div>
    <div class="item">
        <img src="https://www.platinbet365.com/_next/image?url=https%3A%2F%2Fassets.platinbet365.com%2Fsites%2Fplatinbet365%2Fsliders%2F4%2Fslide_2_fr_1705666513.jpg&w=1920&q=75" class="d-block d-sm-none" alt="Banner">
        <img src="https://thumbs.strikobet.com/bnrs/home.webp" class="d-none d-sm-block" alt="Banner">
        </div>
        <div class="item">
        <img src="https://www.platinbet365.com/_next/image?url=https%3A%2F%2Fassets.platinbet365.com%2Fsites%2Fplatinbet365%2Fsliders%2F2%2Fslide_3_fr_1705664479.jpg&w=1920&q=75" class="d-block d-sm-none" alt="banner">
        <img src="https://betplus216.com/static/img/banner_2.webp" class="d-none d-sm-block" alt="Banner">
        </div>
        <div class="item">
        <img src="https://www.platinbet365.com/_next/image?url=https%3A%2F%2Fassets.platinbet365.com%2Fsites%2Fplatinbet365%2Fsliders%2F4%2Fslide_4_fr_1705666594.jpg&w=1920&q=75" class="d-block d-sm-none" alt="banner">
        <img src="/web/img/banners/BANNERS-DROP-WIN2024E.jpg" class="d-none d-sm-block" alt="Banner">
    </div>
</div>
<!-- BANNERS -->
    
<div class="filter-bar">
    <div class="order-by">
        <span>Order By:</span>
        <button class="active">Popularity</button>
        <button>Newest</button>
        <button>A-Z</button>
    </div>

    <div class="providers">
<select id="provider-select" class="form-select custom-select" onchange="location = this.value;">
        <option value="{{ route('frontend.casino') }}" {{ empty($currentProvider) ? 'selected' : '' }}>
            @lang('web.filter.providers.all')
        </option>
        @foreach($providerslist as $provider)
            <option value="{{ route('frontend.category', $provider) }}" {{ $currentProvider === $provider ? 'selected' : '' }}>
                {{ ucfirst($provider) }}
            </option>
        @endforeach
    </select>
    </div>

    
@include('frontend.zeus.components.casino-filters')
@include('frontend.zeus.components.casino-search')
	</div>
</form>
    </div>
</div>
</nav>


@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
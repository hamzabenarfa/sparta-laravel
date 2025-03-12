@extends('frontend.zeus.layouts.app')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    /* Styles for Jackpot Section */
.jackpot-title {
    font-size: 36px; /* Adjust the size as needed */
    color: #00f6ef;
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    margin-bottom: 20px;
    text-align: center; /* Center the text */
}

.jackpot-container {
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin: 20px 0;
}


.jackpot-item {
    text-align: center;
    margin: 0 10px; /* Adjust the spacing between items as needed */
}

.jackpot-image {
    width: 100px; /* Adjust the size as needed */
    height: auto;
    box-shadow: 0 0 20px 0 #dddce2; /* Adding the box-shadow effect */
}

.jackpot-value {
    font-size: 15px; /* Adjust the size as needed */
    color: white;
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    margin-top: 10px;
}

.jackpot-item1 {
    text-align: center;
    margin: 0 10px; /* Adjust the spacing between items as needed */
}

.jackpot-image1 {
    width: 100px; /* Adjust the size as needed */
    height: auto;
    box-shadow: 0 0 20px 0 #c77cfc; /* Adding the box-shadow effect */
}

.jackpot-value1 {
    font-size: 15px; /* Adjust the size as needed */
    color: white;
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    margin-top: 10px;
}

.jackpot-item2 {
    text-align: center;
    margin: 0 10px; /* Adjust the spacing between items as needed */
}

.jackpot-image2 {
    width: 100px; /* Adjust the size as needed */
    height: auto;
    box-shadow: 0 0 20px 0 #0a56ed; /* Adding the box-shadow effect */
}

.jackpot-value2 {
    font-size: 15px; /* Adjust the size as needed */
    color: white;
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    margin-top: 10px;
}


    /* Game Categories Styles */
    .game-categories {
        background: linear-gradient(135deg, #060b27, #1c1e36);
        border-radius: 20px;
        padding: 20px;
        margin-bottom: 20px;
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
    }

    .game-category {
        text-align: center;
        cursor: pointer;
        flex: 1 0 40px;
        max-width: 100px;
    }

    .game-category img {
        width: 40px;
        height: 30px;
    }

    .game-category span {
        display: block;
        font-size: 16px;
        font-weight: 500;
        color: white;
    }

    /* Provider Logos Styles */
    .home-providers {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-bottom: 30px;
        margin-top: 30px;
        width: 75% !important;
    }

    .home-providers .home-provider {
        cursor: pointer;
        margin: 15px;
    }

    .home-providers .home-provider img {
        -webkit-filter: grayscale(1);
        filter: grayscale(1);
        height: 35px;
        transition-duration: .5s;
    }

    .home-providers .home-provider:hover img {
        -webkit-filter: grayscale(0) !important;
        filter: grayscale(0) !important;
        transition-duration: .5s;
    }

    @media (max-width: 800px) {
        .home-providers {
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100% !important;
        }

        .home-providers .home-provider img {
            height: 20px;
        }
    }

.image-container {
    display: flex; /* استخدام الفليكس لجعل العناصر تتوسط */
    justify-content: flex-start; /* محاذاة المحتوى إلى اليسار */
    align-items: center; /* توسيط المحتوى عمودياً */
    padding: 0 10px; /* إضافة حواف صغيرة من الجانبين */
}

.game-image {
    width: 100%; /* يجعل الصورة تأخذ عرض العنصر بالكامل */
    max-width: 300px; /* يمكنك تعديل القيمة حسب الحجم المرغوب للصورة */
    height: auto; /* يحافظ على نسبة العرض إلى الارتفاع */
    border-radius: 10px; /* إضافة زوايا مدورة للصورة */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* إضافة ظل للصورة */
    transition: transform 0.3s; /* تأثير التحويل عند التمرير */
    object-fit: cover; /* يجعل الصورة تغطي العنصر بشكل جميل */
    margin-left: 10px; /* إضافة مساحة صغيرة من اليسار لتحريك الصورة إلى اليمين */
}

.game-image:hover {
    transform: scale(1.05); /* تكبير الصورة عند التمرير */
}



</style>
@endsection

@section('content')
<!-- BANNERS -->
<div class="owl-carousel owl-theme" id="banner">
    <div class="item">
        <img src="https://www.platinbet365.com/_next/image?url=https%3A%2F%2Fassets.platinbet365.com%2Fsites%2Fplatinbet365%2Fsliders%2F4%2Fslide_3_fr_1705666556.jpg&w=1920&q=75" class="d-block d-sm-none" alt="banner">
        <img src="/web/img/banners/18.png" class="d-none d-sm-block" alt="Banner">
    </div>
    <div class="item">
        <img src="/web/img/banners/20.webp" class="d-block d-sm-none" alt="Banner">
        <img src="https://thumbs.strikobet.com/bnrs/home.webp" class="d-none d-sm-block" alt="Banner">
        </div>
        <div class="item">
        <img src="/web/img/banners/21.webp" class="d-block d-sm-none" alt="banner">
        <img src="/web/img/banners/19.webp" class="d-none d-sm-block" alt="Banner">
    </div>
</div>
<!-- BANNERS -->
<!-- Jackpot Section -->
<div class="jackpot-title">JACKPOT</div>
<div class="jackpot-container">
    <div class="jackpot-item">
        <img src="/static/media/grand.ffe90001fe2af4c55e6d.png" class="jackpot-image" alt="Jackpot Image">
        <div class="jackpot-value">
            {{ $jackpots[1] }} TND
        </div>
    </div>
    <div class="jackpot-item1">
        <img src="/static/media/major.836f35b70db1484490c5.png" class="jackpot-image1" alt="Jackpot Image">
        <div class="jackpot-value1">
 {{ $jackpots[0] }} TND
        </div>
    </div>
    <div class="jackpot-item2">
        <img src="/static/media/minor.04361204339b989af309.png" class="jackpot-image2" alt="Jackpot Image">
        <div class="jackpot-value2">
            {{ $jackpots[2] }} TND
        </div>
    </div>
</div>

 <!-- <!-- Jackpot Section 3 -->
<!-- Game Carousels -->
<div class="row g-0 py-3">
    <div class="col-12 px-2">
        <div class="home-title d-flex justify-content-center py-2">
            <h3 class="fw-bolder text-uppercase d-flex align-items-center w-100 mb-0">
                <div class="jackpot-title">Top Games</div>
            </h3>
        </div>
    </div>



<div class="row">
    @foreach($topGames as $game)
        <div class="col-6 col-sm-4 col-md-3 mb-4"> <!-- تعديل الأعمدة حسب الحجم -->
            <a href="{{ route('frontend.game.go', $game['name']) }}" class="game-link">
                <img src="{{ asset('frontend/Default/ico/' . $game['image']) }}" alt="{{ $game['title'] }}" class="game-image">
                <div class="game-title">{{ $game['title'] }}</div>
            </a>
        </div>
    @endforeach
</div>

<!-- hot games -->
<div class="row g-0 py-3">
    <div class="col-12 px-2">
        <div class="home-title d-flex justify-content-center py-2">
            <h3 class="fw-bolder text-uppercase d-flex align-items-center w-100 mb-0">
                <div class="jackpot-title">Hot Games</div>
            </h3>
        </div>
    </div>


<div class="row">
    @foreach($hotGames as $game)
        <div class="col-6 col-sm-4 col-md-3 mb-4"> <!-- تعديل الأعمدة حسب الحجم -->
            <a href="{{ route('frontend.game.go', $game['name']) }}" class="game-link">
                <img src="{{ asset('frontend/Default/ico/' . $game['image']) }}" alt="{{ $game['title'] }}" class="game-image">
                <div class="game-title">{{ $game['title'] }}</div>
            </a>
        </div>
    @endforeach
</div>

<!-- hot games -->
<!-- Provider Logos -->
<div class="home home-providers">
    <div class="home-provider">
        <img src="/web/img/providers/pragmatic.svg" alt="Pragmatic">
    </div>
    <div class="home-provider">
        <img src="/web/img/providers/pariplay.png" alt="Pariplay">
    </div>
    <div class="home-provider">
        <img src="/web/img/providers/evolution.svg" alt="Evolution">
    </div>
    <div class="home-provider">
        <img src="/web/img/providers/booming.svg" alt="Booming">
    </div>
    <div class="home-provider">
        <img src="/web/img/providers/boongo.svg" alt="Boongo">
    </div>
    <div class="home-provider">
        <img src="/web/img/providers/pgsoft.svg" alt="PG Soft">
    </div>
    <div class="home-provider">
        <img src="/web/img/providers/betsoft.svg" alt="Betsoft">
    </div>
    <div class="home-provider">
        <img src="/web/img/providers/isoftbet.png" alt="iSoftBet">
    </div>
    <div class="home-provider">
        <img src="/web/img/providers/superspade.png" alt="Super Spade">
    </div>
    <div class="home-provider">
        <img src="/web/img/providers/mancala.svg" alt="Mancala">
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6NV571GKRV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6NV571GKRV');
</script>

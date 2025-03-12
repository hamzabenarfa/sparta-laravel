<header>
  <nav class="navbar navbar-dark" style="background: linear-gradient(135deg, #060b27, #1c1e36);">
    <div class="container-fluid px-0">
      <a href="{{ route('frontend.game.list') }}" class="navbar-left-item navbar-brand py-0">
        <img src="/web/img/logo.png" alt="Logo">
      </a>

      <!-- Center item: Play button for Casino, visible only on desktop -->
      <ul class="navbar-center-menu d-lg-flex d-none">
        <li><a href="https://glovebet.me/provider/all">CASINO</a></li>
        <li><a href="">SPORTS</a></li>
        <li><a href="">LIVE CASINO</a></li>
        <li><a href="https://aviator.glovebet.me/crash">Aviator</a></li>
        <li><a href="">VIRTUALS</a></li>
      </ul>

      <div class="navbar-right-item d-flex align-items-center">
        @if(!auth()->check())
        <button type="button" class="btn btn-primary btn-login fw-bold text-uppercase me-3 my-sm-0 my-2" data-bs-toggle="modal" data-bs-target="#loginModal">@lang('Login')</button>
        <button type="button" class="btn btn-primary btn-login fw-bold text-uppercase me-3 my-sm-0 my-2" data-bs-toggle="modal" data-bs-target="#registerModal">@lang('register')</button>
        @else
        <div class="balance border-end border-white d-none d-lg-block pe-3 me-3">
          <p class="text-white text-uppercase mb-0">@lang('web.header.balance'): 
            <span class="fw-bold ms-2">{{ number_format(Auth::user()->balance, 2,".",",") }} @if( auth()->user()->present()->shop ){{ auth()->user()->present()->shop->currency }}@endif</span>
          </p>
        </div>

        
          <div class="user-balance d-none d-sm-flex d-lg-none me-2">
            <span class="text-white fw-bold">{{ auth()->user()->username }}</span>
            <span class="text-white fw-bold">{{ number_format(Auth::user()->balance, 2,".",",") }} @if( auth()->user()->present()->shop ){{ auth()->user()->present()->shop->currency }}@endif</span>
          </div>

          <div class="dropdown d-none d-lg-block">
            <button type="button" class="btn btn-user text-white fw-bold dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false" id="user-data">
              <span>{{ auth()->user()->username }}</span>
              <i class="fas fa-angle-down ms-2"></i>
            </button>

            <div class="dropdown-menu dropdown-menu-end text-white p-0 m-0">
              <a href="{{ route('frontend.profile') }}" class="dropdown-item text-white">
                <i class="fas fa-database fa-fw me-1"></i> @lang('web.header.profile')
              </a>
              <a href="{{ route('frontend.profile.password') }}" class="dropdown-item text-white">
                <i class="fas fa-key me-1"></i> @lang('web.header.change password')
              </a>
              <a href="{{ route('frontend.profile.history') }}" class="dropdown-item text-white">
                <i class="fas fa-history fa-fw me-1"></i> @lang('web.header.history')
              </a>
              <a href="javascript:void(0);" class="dropdown-item text-white" data-bs-toggle="modal" data-bs-target="#limitsModal">
                <i class="fas fa-sort-amount-down-alt me-1"></i> @lang('web.header.limits')
              </a>
              <a href="{{ route('frontend.auth.logout') }}" class="dropdown-item text-white">
                <i class="fas fa-power-off fa-fw me-1"></i> @lang('web.header.logout')
              </a>
            </div>
          </div>
        </div>
        @endif

        <button type="button" class="navbar-toggler bg-transparent border-0 shadow-none d-lg-none d-block p-0" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-expanded="false">
          <span class="icon-bar"></span>
        </button>
      </div>
    </div>
  </nav>
</header>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasDarkNavbar">
  <div class="offcanvas-body p-0">
    @if(auth()->check())
    <div class="user-info d-flex align-items-center px-2 pt-2">
      <div class="avatar text-center border border-white rounded-2 overflow-hidden pt-1 me-2">
        <i class="fas fa-user text-white"></i>
      </div>

      <a href="{{ route('frontend.profile') }}" class="btn btn-user text-white dropdown-toggle d-flex align-items-center">
        <div class="user-balance d-flex">
          <span>{{ auth()->user()->username }}</span>
          <span>{{ number_format(Auth::user()->balance, 2,".",",") }} @if( auth()->user()->present()->shop ){{ auth()->user()->present()->shop->currency }}@endif</span>
        </div>
        <i class="fas fa-angle-right"></i>
      </a>
    </div>

    <div class="row g-1 p-2">
      <div class="col-6">
        <a href="{{ route('frontend.profile.history') }}" class="text-center text-white bg-transparent rounded-2 d-block w-100">
          <i class="fas fa-history me-1"></i>
          <span>@lang('web.header.record')</span>
        </a>
      </div>

      <div class="col-6">
        <a href="{{ route('frontend.profile.password') }}" class="text-center text-white bg-transparent rounded-2 d-block w-100">
          <i class="fas fa-key me-1"></i>
          <span>@lang('web.header.password')</span>
        </a>
      </div>

      <div class="col-6">
        <a href="{{ route('frontend.auth.logout') }}" class="text-center text-white bg-transparent rounded-2 d-block w-100">
          <i class="fas fa-power-off me-1"></i>
          <span>@lang('web.header.logout')</span>
        </a>
      </div>
    </div>
    @endif

    <ul class="navbar-nav justify-content-end flex-grow-1">
      <li class="nav-item">
        <a href="{{ route('frontend.game.list') }}" class="nav-link text-white fw-bold text-uppercase d-flex align-items-center w-100 active" aria-current="page">
          <img src="/web/img/icons/home.svg" class="me-2" alt="@lang('web.header.home')">
          <span>@lang('web.header.home')</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('frontend.casino') }}" class="nav-link text-white fw-bold text-uppercase d-flex align-items-center w-100">
          <img src="/web/img/icons/casino.svg" class="me-2" alt="@lang('web.header.casino')">
          <span>@lang('web.header.casino')</span>
        </a>
      </li>
      <li class="nav-item">
  <a href="https://aviator.glovebet.me/crash" class="nav-link text-white fw-bold text-uppercase d-flex align-items-center w-100">
    <img src="https://aviator.glovebet.me/images/logo.svg" class="me-2" alt="Aviator">
    <span></span>
        </a>
      </li>
    </ul>
  </div>
</div>
<style>
 .navbar-center-menu {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 15px;
  padding: 8px 9px;
  border-radius: 10px;
  transition: all 0.3s ease-in-out;
}

.navbar-center-menu a {
  color: #00f6ef;
  font-size: 13px;
  font-weight: bold;
  text-transform: uppercase;
  padding: 8px 11px;
  border-radius: 6px;
  transition: all 0.3s ease-in-out;
  position: relative;
}

.navbar-center-menu a::after {
  content: "";
  position: absolute;
  width: 0%;
  height: 3px;
  bottom: -5px;
  left: 50%;
  background: #00f6ef;
  transition: all 0.3s ease-in-out;
}

.navbar-center-menu a:hover {
  color: #060b27;
  background: #00f6ef;
  box-shadow: 0px 0px 10px rgba(0, 246, 239, 0.5);
}

.navbar-center-menu a:hover::after {
  width: 100%;
  left: 0;
}

@media (max-width: 768px) {
  .navbar-center-menu {
    flex-direction: column;
    gap: 10px;
    padding: 8px;
  }

  .navbar-center-menu a {
    font-size: 16px;
    padding: 6px 12px;
  }
}
.dropdown-menu {
    background-color: #060b27 !important;
    background-clip: padding-box !important;
}
</style>

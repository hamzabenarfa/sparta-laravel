<div class="providers d-none d-lg-grid p-2">
    <div class="align-self-center">
        <a href="{{ route('frontend.category', 'all') }}" class="provider all-providers text-white text-center bg-black d-block">
            <span class="provider-name text-white text-center">@lang('web.filter.providers.all')</span>
        </a>
    </div>

    @foreach($top_categories as $key => $value)
    <div>
        <a href="@if(auth()->check()){{ route('frontend.category', $key) }}@else{{ 'javascript:void(0);' }}@endif" class="provider d-flex flex-column align-items-center" @if(!auth()->check()) onclick="unauthenticated();" @endif>
            <div class="image bg-black rounded-circle d-flex justify-content-center align-items-center mb-2">
                <img src="/web/img/isologos/{{ $key }}.svg" alt="{{ $value }}">
            </div>
            <span class="provider-name text-white text-center">{{ $value }}</span>
        </a>
    </div>
    @endforeach
</div>
<!-- Providers Modal -->
<div class="modal fade" id="providersModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-2">
            <div class="modal-header border-0 d-flex justify-content-end position-relative">
                <div class="text-white rounded-2 d-flex justify-content-center align-items-center position-relative" data-bs-dismiss="modal" aria-label="Close">
                    <span>@lang('form.buttons.close')</span>
                </div>
            </div>
            <div class="modal-body p-0">
                <ul class="list exclusive d-flex flex-column m-0">
                    <li class="d-flex">
                        <a href="{{ route('frontend.category', 'all') }}" class="d-flex justify-content-between align-items-center w-100">
                            <div class="d-flex align-items-center">
                                <div class="provider-logo bg-black rounded-circle d-inline-flex justify-content-center align-items-center me-2">
                                    <img src="/web/img/isologos/4-squares.svg">
                                </div>
                                <span class=>@lang('web.filter.providers.all games')</span>
                            </div>
                        </a>
                    </li>
                    @foreach($top_categories as $key => $value)
                    <li class="d-flex">
                        <a href="@if(auth()->check()){{ route('frontend.category', $key) }}@else{{ 'javascript:void(0);' }}@endif" class="d-flex justify-content-between align-items-center w-100" @if(!auth()->check()) onclick="unauthenticated();" @endif>
                            <div class="d-flex align-items-center">
                                <div class="provider-logo bg-black rounded-circle d-inline-flex justify-content-center align-items-center me-2">
                                    <img src="/web/img/isologos/{{ $key }}.svg" alt="{{ $value }}">
                                </div>
                                <span>{{ $value }}</span>
                            </div>
                            <i class="fas fa-fire fa-fw"></i>
                        </a>
                    </li>
                    @endforeach
                </ul>

                <ul class="list d-flex flex-column m-0">
                    @foreach($others_categories as $key => $value)
                    <li class="d-flex">
                        <a href="@if(auth()->check()){{ route('frontend.category', $key) }}@else{{ 'javascript:void(0);' }}@endif" class="d-flex justify-content-between align-items-center w-100" @if(!auth()->check()) onclick="unauthenticated();" @endif>
                            <div class="d-flex align-items-center">
                                <div class="provider-logo bg-black rounded-circle d-inline-flex justify-content-center align-items-center me-2">
                                    <img src="/web/img/isologos/{{ $key }}.svg" alt="{{ $value }}">
                                </div>
                                <span>{{ $value }}</span>
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
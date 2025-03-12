<a href="@if(auth()->check()){{ route('frontend.game.go', $game->name).'?api_exit=/' }}@else{{ 'javascript:void(0);' }}@endif" class="game position-relative overflow-hidden m-0">
	<div class="picture rounded-2 d-flex justify-content-center align-items-center position-relative overflow-hidden h-100" @if(!auth()->check()) onclick="unauthenticated();" @endif>
		<img src="/frontend/Default/ico/{{ $game->name }}.jpg" class="w-100 h-100" title="{{ $game->title }}" alt="{{ $game->title }}">
	</div>
	@if(auth()->check())
	{{-- <div class="favorite rounded-circle d-flex justify-content-center align-items-center">
		<i class="far fa-heart text-white"></i>
	</div> --}}
	@endif
</a>
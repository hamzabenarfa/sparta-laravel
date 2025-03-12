@extends('frontend.zeus.layouts.app')

@section('page-title', $title)
@section('body', $body)
@section('keywords', $keywords)
@section('description', $description)

@section('content')

@include('frontend.zeus.components.casino-filters')

@include('frontend.zeus.components.providers')

<div class="row g-0 py-3">
	<div class="col-12 games-category d-flex justify-content-between align-items-center px-2 mb-3">
		<p class="h4 fw-bold text-uppercase mb-0">@lang('web.filter.search.title'): {{ $query }}</p>

		@include('frontend.zeus.components.category-search')
	</div>

	<div class="col-12 px-2 mb-3">
		<div class="games-grid p-0">
			@foreach($games as $game)
			@if(file_exists(public_path().'/../../frontend/Default/ico/'.$game->name.'.jpg'))
			@include('frontend.zeus.components.card-game', ['game' => $game])
			@endif
			@endforeach
		</div>
	</div>
</div>

@endsection

@section('scripts')
@endsection
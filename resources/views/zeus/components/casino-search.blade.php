<div class="casino-search d-none d-lg-flex justify-content-lg-center align-items-lg-center">
	<form action="{{ route('frontend.search') }}" method="GET" class="search-input position-relative">
		<input type="text" name="search" class="form-control" placeholder="@lang('web.filter.search.placeholder')" pattern="^[A-Za-z\d\sáéíóúñÑ_/.-]+$">
		<i class="fas fa-search fa-fw text-white"></i>
	</form>
</div>
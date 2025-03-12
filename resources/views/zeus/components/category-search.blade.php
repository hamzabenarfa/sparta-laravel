<form action="{{ route('frontend.search') }}" method="GET" class="category-search input-group d-none d-lg-flex m-0">
	<input type="search" name="search" class="form-control" placeholder="@lang('web.filter.search.placeholder')" pattern="^[A-Za-z\d\sáéíóúñÑ_/.-]+$">
	<div class="input-group-append d-flex">
		<button type="submit" class="btn btn-primary">
			<span class="fa fa-search"></span>
		</button>
	</div>
</form>
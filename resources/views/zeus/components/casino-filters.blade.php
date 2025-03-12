<div class="casino-filters d-lg-none position-relative p-1">
    <form action="{{ route('frontend.search') }}" method="GET" class="search-filter rounded-2 position-relative">
        <input type="search" name="search" class="form-control text-white bg-transparent border-0 shadow-none h-100" placeholder="@lang('web.filter.search.placeholder')" pattern="^[A-Za-z\d\sáéíóúñÑ_/.-]+$">
        <i class="fas fa-search fa-fw text-white"></i>
    </form>

</div>
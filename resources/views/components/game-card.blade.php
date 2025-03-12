<div class="relative group">
    @if ($isNew)
        <span class="absolute top-2 left-2 bg-yellow-500 text-black text-xs font-bold px-2 py-1 rounded">
            NEW
        </span>
    @endif

    <div class="rounded-lg overflow-hidden">
        <img src="{{ asset($image) }}" alt="{{ $title }}" class="w-full h-auto transition-transform group-hover:scale-110">
    </div>

    <h3 class="flex items-center justify-center pt-1 rounded-b-xl h-10 bg-neutral-900 text-sm font-medium text-center text-white">{{ $title }}</h3>
</div>

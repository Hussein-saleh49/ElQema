<div class="container mb-4" style="position: relative;">
   <input type="text"
       wire:model.debounce.300ms="search"
       wire:keyup="searchProducts"
       class="form-control rounded-pill"
       placeholder="{{ __("theme.search_placeholder") }}">


  @if($search !== '')
    <ul class="list-group mt-1 position-absolute w-100" style="z-index: 1000; background:#fff;">
        @forelse($results as $product)
            <li class="list-group-item list-group-item-action">
                <a href="{{ route('front.productDetails', $product) }}">{{ $product->name }}</a>
            </li>
        @empty
            <li class="list-group-item text-muted">لا توجد نتائج</li>
        @endforelse
    </ul>
@endif

</div>

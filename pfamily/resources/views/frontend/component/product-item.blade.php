@php
// dd($product);
    $name = $product->languages->first()->pivot->name;
    $canonical = write_url($product->languages->first()->pivot->canonical);
    $image = image($product->image);
    $price = getPrice($product);
    // dd($price);
    // $catName = array_map(function($category, $product){
    //     return ($category['id'] === $product->product_catalogue_id) ? $category['languages'][0]['pivot']['name'] : '';
    // }, $product->product_catalogues->toArray(), [$product])[0];
    $catName = $product->product_catalogues->first()->languages->first()->pivot->name;
    $review = getReview($product);
@endphp
<div class="product-item product">
    
    <a href="{{ $canonical }}" class="image img-scaledown img-zoomin"><img src="{{ $image }}" alt="{{ $name }}"></a>
    <div class="info">
        {{-- <div class="category-title"><a href="{{ $canonical }}" title="{{ $name }}">{{ $catName }}</a></div> --}}
        <h3 class="title"><a href="{{ $canonical }}" title="{{ $name }}">{{ $name }}</a></h3>
        <div class="rating">
            <div class="uk-flex uk-flex-middle uk-flex-space-between">
                <span class="rate-number">({{ $review['count'] }} đánh giá)</span>
                <div class="star-rating">
                    <div class="stars" style="--star-width: {{ $review['star'] }}%"></div>
                </div>
            </div>
        </div>
        <div class="price-and-button-container">
            <div class="price uk-flex uk-flex-middle mt10">
                {!! $price['html'] !!}
            </div>
            <a href="{{ $canonical }}" class="btn-view-detail">Xem chi tiết</a>
        </div>
    </div>
</div>
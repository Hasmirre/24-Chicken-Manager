<x-layout-end-user>
    @push('title')
        <title>24 Chicken Menu</title>
    @endpush

    @push('styles')
        <link href="{{ asset('css/menu-styles.css') }}" rel="stylesheet">
    @endpush

    <div class="header">
        <div class="content-margin">
            <h1>24 Chicken Menu</h1>
            <p>Enjoy your meal with your 24 Chicken favorites!</p>
        </div>
    </div>

    <div class="functions">
        <x-search route="menu"/>
        {{ $foods->links('vendor.pagination.simple-default') }}
    </div>

    <div class="cards">

        @if ($foods->count())
            @foreach ($foods as $food)
                <x-menu-card :food="$food" />
            @endforeach
        @else
            <p style="text-align: center; font-size: 30px; font-weight: 800">No posts yet. Please check back later.</p>
        @endif
    </div>


    <a href="{{ Route('checkout.index') }}" style="text-decoration:none;"><button id="checkout">Checkout</button></a>
</x-layout-end-user>

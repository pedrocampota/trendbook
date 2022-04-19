<head>
    <link href="css/wishlist-section.css" rel="stylesheet">
</head>

<x-layout>
    <section id="wishlist-section">
        <header>
            <nav class="flex">
                <h1><i class="fa-solid fa-heart" style="color: #ff5053; margin-right: 15px"></i>My Wishlist</h1>
            </nav>
        </header>

        <div class="container" style="padding: 0px;">
            @if ($wishlists->count())
                <x-wishlist-books-grid :wishlists="$wishlists"></x-wishlist-books-grid>

                {{ $wishlists->links() }}
            @else
                <div style="margin: 0 auto;" class="flex items-center">
                    <div style="text-align:center;margin: 0 auto; border-radius: 12px; border: 1px solid #cccccc; padding: 35px">
                        <h1 style="margin-bottom: 10px"><i class="fa-solid fa-heart-crack" style="margin-right: 10px"></i>Oops!</h1>
                        <p style="font-size: 16px">There are no books on your wishlist. Add some.</p>
                    </div>
                </div>
            @endif
        </div>
    </section>
</x-layout>

@props(['wishlists'])

        <div class="row gx-5 gy-4">
                @if (Auth::user()->wishlist->count() )
                    @foreach ($wishlists as $wishlist)
                        <x-wishlist-book-card
                            :wishlist="$wishlist"></x-wishlist-book-card>
                    @endforeach
                @endif
        </div>

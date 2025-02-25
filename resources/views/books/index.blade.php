<x-layout>
    <div class="container" style="padding: 0px;">
        <div class="flex">
            <x-categories-sidebar></x-categories-sidebar>

            <div class="block" style="margin: 0 auto;">
                @if ($books->count())
                    <x-books-grid :books="$books" :categories="$categories"></x-books-grid>

                    {{ $books->links() }}
                @else
                    <div style="margin: 0 auto; margin-top: 100px" class="flex items-center">
                        <div style="text-align:center;margin: 0 auto; border-radius: 12px; border: 1px solid #cccccc; padding: 35px">
                            <h1 style="margin-bottom: 10px"><i class="fa-solid fa-face-grimace" style="margin-right: 10px"></i>Oops!</h1>
                            <p style="font-size: 16px">No books yet. Please check back later.</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-layout>

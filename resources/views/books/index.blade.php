<x-layout>
    <div class="container flex" style="padding: 0px;">
        <div class="col-md-auto">
            <x-categories-sidebar></x-categories-sidebar>
        </div>
        @if ($books->count())
            <x-books-grid :books="$books"></x-books-grid>

            {{ $books->links() }}
        @else
            <div style="margin: 0 auto;" class="flex items-center">
                <div style="text-align:center;margin: 0 auto; border-radius: 12px; border: 1px solid #cccccc; padding: 35px">
                    <h1 style="margin-bottom: 10px"><i class="fa-solid fa-face-grimace" style="margin-right: 10px"></i>Oops!</h1>
                    <p style="font-size: 16px">No books yet. Please check back later.</p>
                </div>
            </div>
        @endif
    </div>
</x-layout>

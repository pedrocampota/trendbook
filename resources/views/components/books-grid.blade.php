@props(['books'])
@props(['categories'])
<head>
    <link href="css/books-section.css" rel="stylesheet">
</head>

<section id="books-section">
    <header>
        <nav class="flex">
            <h1><a href="#" style="font-weight: 600">For You</a></h1>
            <h1><a href="#" style="margin-left: 90px; color: #adadad; font-weight: 400">New Releases</a></h1>
        </nav>
    </header>

    <div id="category-dropdown">
        <x-category-dropdown :categories="$categories"></x-category-dropdown>
    </div>

    <div class="container" style="padding: 0px;">
        <div class="row gx-5 gy-4">
            @if ($books->count() > 1)
                @foreach ($books as $book)
                    <x-book-card
                        :book="$book"
                        :categories="$categories"
                        class="{{ $loop->iteration < 3 }}"></x-book-card>
                @endforeach
            @else
                @foreach ($books as $book)
                    <x-one-book-card
                        :book="$book"
                        :categories="$categories"
                        class="{{ $loop->iteration < 3 }}"></x-one-book-card>
                @endforeach
            @endif
        </div>
    </div>
</section>

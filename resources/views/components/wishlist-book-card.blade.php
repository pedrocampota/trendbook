@props(['wishlist'])

<div class="col-sm col-book">
    <article
        class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
        <div class="wrapper" style="min-width: 50vh;display: flex;margin: 0px;">
            <div class="col-4">
                <div
                    style="border-bottom-left-radius: 0px; border-bottom-right-radius: 20px; border-top-left-radius: 12px; border-top-right-radius: 0px;background: #fb9f20;padding-top: 8px;padding-bottom: 8px;max-width: 100px;position: absolute;z-index: 10;">
                    <a href="#"
                       style="color: #ffff;font-weight: 400;font-size: 12px;padding-top: 8px;padding-bottom: 8px;padding-left: 20px;padding-right: 20px;">Best
                        Seller</a>
                </div>
                <img src="{{ $wishlist->book->thumbnail }}" alt="Book Cover"
                     class="rounded-xl img-fluid" style="height: 100%;object-fit: cover;object-position: center;">
            </div>

            <div class="col-8 flex items-center">
                <div class="book-info-panel">
                    <div style="margin-bottom: 18px;">
                        <h1 style="font-weight: 400;font-size: 20px;margin-bottom: 10px;">
                            <a href="#">{{$wishlist->book->title}}</a>
                        </h1>

                        <p style="font-family: 'ProximaNova', Arial, sans-serif;font-size: 12px;padding-bottom: 5px;padding-top: 5px;">
                            <a href="#" style="color:#adadad;">Business &amp; Money</a>
                        </p>
                    </div>

                    <div style="font-size:14px;margin-bottom: 25px;">
                        <div class="star-rating flex space-x-2"
                             style="margin-top: 0px; margin-bottom: 25px;">
                            <i class="fa-solid fa-star" style="color: #FE9F1F"></i>
                            <i class="fa-solid fa-star" style="color: #FE9F1F"></i>
                            <i class="fa-solid fa-star" style="color: #FE9F1F"></i>
                            <i class="fa-solid fa-star" style="color: #FE9F1F"></i>
                            <i class="fa-solid fa-star" style="color: #FE9F1F"></i>
                        </div>
                        <p style="color:#9ecc74;">
                            $22.00
                        </p>
                    </div>

                    <footer class="flex justify-between items-center">
                        <div class="flex items-center">
                            <button
                                style="border-radius: 50px; background: #2c3135; color: #ffffff; padding-bottom: 10px;padding-top: 10px;padding-left: 25px;padding-right: 25px;margin-right: 18px;font-size: 14px;">
                                Add to cart
                            </button>

                            <a href="#" style="font-size: 14px;">Remove</a>
                        </div>
                    </footer>
                </div>

            </div>
        </div>
    </article>
</div>

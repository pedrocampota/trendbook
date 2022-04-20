@props(['wishlist'])

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
    <article
        class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
        <div class="wrapper flex">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div
                    style="border-bottom-left-radius: 0px; border-bottom-right-radius: 20px; border-top-left-radius: 12px; border-top-right-radius: 0px;background: #fb9f20;padding-top: 8px;padding-bottom: 8px;max-width: 100px;position: absolute;z-index: 10;">
                    <a href="#"
                       style="color: #ffff;font-weight: 400;font-size: 12px;padding-top: 8px;padding-bottom: 8px;padding-left: 20px;padding-right: 20px;">Best
                        Seller</a>
                </div>
                <img src="{{ $wishlist->book->thumbnail }}" alt="Book Cover"
                     class="thumbnail rounded-xl">
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 flex items-center">
                <div style="padding-left: 15px;padding-right: 15px;padding-top: 15px;padding-bottom: 15px;">
                    <div style="margin-bottom: 18px;">
                        <h1 style="font-weight: 400;font-size: 20px;margin-bottom: 10px;">
                            <a href="#">{{ $wishlist->book->title }}</a>
                        </h1>
                    </div>

                    <!TODO><!--We can add Book: rating, price, categories and more-->

                    <footer class="flex justify-between items-center">
                        <div>
                            <button
                                style="border-radius: 50px; background: #2c3135; color: #ffffff;
                                padding-bottom: 10px;padding-top: 10px;padding-left: 10px;padding-right: 10px;
                                margin-right: 10px;font-size: 14px;"
                            >Add to cart
                            </button>

                            <a href="#" style="font-size: 14px; color: #ff5053;">Remove</a>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </article>
</div>

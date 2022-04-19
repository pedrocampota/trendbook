@props(['book'])

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
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
                <img src="{{ $book->thumbnail }}" alt="Book Cover"
                     class="thumbnail rounded-xl">
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 flex items-center">
                <div style="padding-left: 15px;padding-right: 15px;padding-top: 15px;padding-bottom: 15px;">
                    <div style="margin-bottom: 18px;">
                        <h1 style="font-weight: 400;font-size: 20px;margin-bottom: 10px;">
                            <a href="#">{{Str::limit($book->title, 20, ' ...')}}</a>
                        </h1>

                        <p style="font-family: 'ProximaNova', Arial, sans-serif;font-size: 12px;padding-bottom: 5px;padding-top: 5px;">
                            <a href="#" style="color:#adadad;">{{ $book->slug }}</a>
                        </p>
                    </div>

                    <div style="font-size:14px;margin-bottom: 25px;">
                        <div class="star-rating flex space-x-2" style="margin-top: 0px; margin-bottom: 25px;">
                            <i class="fa-solid fa-star" style="color: #FE9F1F"></i>
                            <i class="fa-solid fa-star" style="color: #FE9F1F"></i>
                            <i class="fa-solid fa-star" style="color: #FE9F1F"></i>
                            <i class="fa-solid fa-star" style="color: #FE9F1F"></i>
                            <i class="fa-solid fa-star" style="color: #FE9F1F"></i>
                        </div>
                        <p style="color:#9ecc74;">
                            ${{ $book->price }}
                        </p>
                    </div>

                    <footer class="flex justify-between items-center">
                        <div class="flex items-center">
                            <button
                                style="border-radius: 50px; background: #2c3135; color: #ffffff; padding-bottom: 10px;padding-top: 10px;padding-left: 25px;padding-right: 25px;margin-right: 18px;font-size: 14px;">
                                Add to cart
                            </button>


                            @auth
                            <a href="#"
                               x-data="{}"
                               @click.prevent="document.querySelector('#wishlist-form').submit()"><i class="fa-solid fa-heart" style="font-size: 18px; color: #ff5053"></i></a>
                            <!--<a href="#"><i class="fa-solid fa-heart" style="font-size: 18px; color: #ff5053"></i></a>-->
                            <form id="wishlist-form" method="POST" action="/wishlist" class="hidden">
                                @csrf
                                <input name="user_id" type="text" value="{{Auth::user()->id}}" />
                                <input name="book_id" type="text" value="{{$book->id}}" />
                            </form>
                            @else
                                <a href="/login"><i class="fa-solid fa-heart" style="font-size: 18px; color: #ff5053"></i></a>
                            @endauth
                        </div>
                    </footer>
                </div>

            </div>
        </div>
    </article>
</div>

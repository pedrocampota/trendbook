<header id="main-header">
    <!--flex items-center-->
    <div class="container px-0">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none" style="min-width: 150px;max-width: 170px;">
                <img src="/images/trendesignbook-logo.png" alt="trendbook_logo" width="100%" height="16">
            </a>

            @auth
                <ul id="center-menu" class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="main-menu mr-6 font-semibold">Book Store</a></li>
                    <li><a href="/wishlist" class="main-menu ml-6" style="color: #adadad;">Wishlist</a></li>
                </ul>
            @else
                <ul id="center-menu" class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="main-menu mr-6 font-semibold">Book Store</a></li>
                </ul>
            @endauth

            <div class="text-end mr-14 items-center flex">
                <a href="/cart" class="cart position-relative d-inline-flex" aria-label="View your shopping cart">
                   <i class="fa-solid fa-cart-shopping" style="text-decoration: none;font-size: 18px;color: #2e3337;"></i>
                    <span class="cart-basket d-flex align-items-center justify-content-center" style="background: #ff5053;width: 18px;height: 18px;color: white;border-radius: 50px;align-content: center;position: absolute;left: 12px;top: -12px;padding-top: 5px;padding-bottom: 5px;">
                        2
                     </span>
                </a>
            </div>

            @auth
            <div class="dropdown text-end">
                <button href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <div style="display: flex;align-items: center;">
                        <img src="https://i.pravatar.cc/60" alt="" width="45" height="45" class="rounded-circle mr-3">
                        <a href="#" class="main-menu"><span style="color: #adadad;">Hi, </span>{{ auth()->user()->name }}</a>
                    </div>
                </button>
                <ul class="dropdown-menu text-small mt-2" aria-labelledby="dropdownUser1" style="position: absolute; inset: 0px auto auto 0px;  transform: translate(0px, 47px); width: 100%; border-radius: 12px;margin: 0px;">
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-house-user pr-3"></i> Profile</a></li>
                    <li><a class="dropdown-item" href="/wishlist"><i class="fa-solid fa-heart pr-3"></i> My Wishlist</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-gear pr-3"></i> Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#"
                           x-data="{}"
                           @click.prevent="document.querySelector('#logout-form').submit()"><i class="fa-solid fa-arrow-right-from-bracket pr-2"></i> Log out</a></li>
                </ul>
                <form id="logout-form" method="POST" action="/logout" class="hidden">
                    @csrf
                </form>
            </div>

            @else
            <div class="items-center flex">
                <i class="fa-solid fa-circle-user mr-4" style="font-size: 24px"></i>
                <a href="/register"
                   class="main-menu mr-2 font-semibold {{ request()->is('register') ? 'text-blue-500' : '' }}">
                    Register
                </a>
                <span> / </span>
                <a href="/login"
                   class="main-menu ml-2 font-semibold {{ request()->is('login') ? 'text-blue-500' : '' }}">
                    Log In
                </a>
            </div>
            @endauth

        </div>
    </div>
</header>

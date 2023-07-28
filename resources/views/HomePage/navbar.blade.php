<nav>
            <div class="nav__logo"><a href="/">Booking.Com</a></div>
            <ul class="nav__links">
                <li class="link"><a href="/">Home</a></li>
                <li class="link"><a href="#">Book</a></li>
                @auth
                    <li class="user-icon">
                        <!-- Hiển thị biểu tượng người dùng chỉ khi đã đăng nhập -->
                        <a href="javascript:void(0);"><i class="ri-account-pin-circle-fill"></i></a>
                    </li>
                @else
                    <li class="link"><a href="/login">Login</a></li>
                    <li class="link"><a href="/register">Register</a></li>
                @endauth
            </ul>
        </nav>
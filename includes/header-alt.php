
<header class="header header-alt">
    <div class="header__banner banner-alt">
        <div class="banner__container">
            <a href="/signup" target="_blank" class="banner__btn banner__btn--signup">Sign Up</a>
            <!-- <a href="/login" class="banner__btn banner__btn--login">LOGIN</a> -->
        </div>
    </div>
   
    <nav class="nav nav-alt">
        <div class="nav__container">
            <a href="/" class="nav__link nav__logo">
                <img src="/assets/img/logo.png" alt="Bottoms Up Organics Logo link to homepage" class="img" />
            </a>
            <a href="/csa" class="nav__link <?= (trim($_SERVER['REQUEST_URI'], '/') == "/csa") ? "nav__link--active" : "" ?>">
                Community Supported Agriculture
            </a> 
            <a href="/about" class="nav__link <?= (trim($_SERVER['REQUEST_URI'], '/') == "/about") ? "nav__link--active" : "" ?>">
                Our Story
            </a>
            <a href="/farmer" class="nav__link <?= (trim($_SERVER['REQUEST_URI'], '/') == "/farmer") ? "nav__link--active" : "" ?>">
                Farmer Colin
            </a>
            <a href="/contact" class="nav__link <?= (trim($_SERVER['REQUEST_URI'], '/') == "/contact") ? "nav__link--active" : "" ?>">
                Contact Us
            </a>
        </div>
    </nav>
</header>



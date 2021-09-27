
<header class="header">
    <div class="header__banner banner">
        <div class="banner__container">
            <h3 class="banner__title">Now Accepting <?= $seassonOrders; ?> Orders, Sign Up Now!</h3>
            <a href="/signup" target="_blank" class="banner__btn banner__btn--signup">Sign Up</a>
            <!-- <a href="/login" target="_blank" class="banner__btn banner__btn--login">LOGIN</a> -->
        </div>
    </div>
    <div class="header__video">        
        <video autoplay muted loop class="header__video-item">
        <source src="/assets/video/header-farm.mp4?v1" type="video/mp4">
        Your browser does not support the video tag.
        </video>
    </div>
    <nav class="nav">
        <div class="nav__container">
            <a href="/csa" class="nav__link">
                Community Supported Agriculture
            </a>    
            <a href="/" class="nav__link nav__logo">
                <img src="/assets/img/logo.png" alt="Bottoms Up Organics Logo link to homepage" class="img" />
            </a>
            <a href="/about" class="nav__link">
                Our Story
            </a>
            <a href="/farmer" class="nav__link">
                Farmer Colin
            </a>
            <a href="/contact" class="nav__link">
                Contact Us
            </a>
        </div>
    </nav>
</header>


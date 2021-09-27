<?php if(trim($_SERVER['REQUEST_URI'], '/') == "404"){ ?>
    <title>Oops, Content Still Growing | Bottoms Up Organics</title>
    <meta name="keywords" content="organics, bottoms up organics, soil, local, farmers, farming"/>
    <meta property="og:title" content="Oops, Content Still Growing | Bottoms Up Organics" />
    <link rel='canonical' itemprop="url" href='https://bottomsuporganics.com/404' />
    <meta property="og:url" content="https://bottomsuporganics.com/404" />
    <meta property="og:description" content="Fixing Soil thru Mentoring Future Farmers" />
    <meta name="description" content="Fixing Soil thru Mentoring Future Farmers" />
<?php }else{ ?>
    <title>Bottoms Up Organics - Fixing Soil thru Mentoring Future Farmers</title>
    <meta name="keywords" content="organics, bottoms up organics, soil, local, farmers, farming"/>
    <meta property="og:title" content="<?= (trim($_SERVER['REQUEST_URI'], '/') == "login?act=signup") ? "Signup" : trim($_SERVER['REQUEST_URI'], '/') ?> | Bottoms Up Organics" />
    <link rel='canonical' itemprop="url" href='https://bottomsuporganics.com/<?= (trim($_SERVER['REQUEST_URI'], '/') == "login?act=signup") ? "signup" : trim($_SERVER['REQUEST_URI'], '/') ?>' />
    <meta property="og:url" content="https://bottomsuporganics.com/<?= (trim($_SERVER['REQUEST_URI'], '/') == "login?act=signup") ? "signup" : trim($_SERVER['REQUEST_URI'], '/') ?>" />
    <meta property="og:description" content="Fixing Soil thru Mentoring Future Farmers" />
    <meta name="description" content="Fixing Soil thru Mentoring Future Farmers" />
<?php }?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<?php include('templates/head.php'); ?>
<!-- custom css -->
<link href="css/custom.css" rel="stylesheet">
<style>
section {
    padding-top: 50px;
}
.position-sticky {
    position: sticky !important;
    top: 0;
    z-index: 10;
}
.nav {
    display: flex;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
@media (prefers-reduced-motion: no-preference) {
  :root {
    scroll-behavior: smooth;
  }
}
</style>
</head>

<body class="shortcode-page">

    <?php include('templates/header.php'); ?>

    <main>
        <div class="container-fluid">
            <div class="row">
                <!-- side menu -->
                <div class="col-lg-3" >
                    <div class="nav flex-column nav-pills border-right position-sticky">
                        <a class="nav-link active" href="#buttons">Buttons</a>
                        <a class="nav-link" href="#inputs">Inputs</a>
                        <a class="nav-link" href="#text">Text</a>
                        <a class="nav-link" href="#headings">Headings</a>
                        <a class="nav-link" href="#popups">Popups</a>
                        <a class="nav-link" href="#img-banners">Banners</a>
                        <a class="nav-link" href="#tooltips">Tooltips</a>
                        <a class="nav-link" href="#product-items">Product items</a>
                        <a class="nav-link" href="#forms">Forms</a>
                        <a class="nav-link" href="#filters">Filters</a>
                        <a class="nav-link" href="#lists">Lists</a>
                        <a class="nav-link" href="#progress-bars">Progress Bar</a>
                        <!-- <a class="nav-link" href="#accordions">Accordions</a> -->
                        <!-- <a class="nav-link" href="#alerts">Alerts</a> -->
                        <!-- <a class="nav-link" href="#blockquotes">Blockquote</a> -->
                        <!-- <a class="nav-link" href="#process">Process</a> -->
                        <!-- <a class="nav-link" href="#typography">Typography</a> -->
                        <!-- <a class="nav-link" href="#columns">Columns</a> -->
                        <!-- <a class="nav-link" href="#contact-form">Contact Form</a> -->
                        <!-- <a class="nav-link" href="#google-maps">Google Maps</a> -->
                        <!-- <a class="nav-link" href="#tables">Tables</a> -->
                        <!-- <a class="nav-link" href="#tabs">Tabs</a> -->
                        <!-- <a class="nav-link" href="#gallerys">Gallery</a> -->
                        <!-- <a class="nav-link" href="#partners">Partner</a> -->
                        <!-- <a class="nav-link" href="#icon-content-boxes">Icon Content Box </a> -->
                        <!-- <a class="nav-link" href="#image-content-boxes">Image Content Box </a> -->
                        <!-- <a class="nav-link" href="#numbered-process">Numbered Process</a> -->
                        <!-- <a class="nav-link" href="#pricing-table">Pricing Table</a> -->
                        <!-- <a class="nav-link" href="#sliders">Slider</a> -->
                        <!-- <a class="nav-link" href="#icons">Icons</a> -->
                        <!-- <a class="nav-link" href="#counters">Counters</a> -->
                        <!-- <a class="nav-link" href="#countdowns">Countdown</a> -->
                        <!-- <a class="nav-link" href="#team">Team</a> -->
                        <!-- <a class="nav-link" href="#testimonials">Testimonials</a> -->
                    </div>
                </div>
                <!-- content -->
                <div class="col-lg-9">
                    <!-- template -->
                    <section id="template" class="template-section min-vh-100">
                        <div class="container-fluid template-container">
                            <div class="row template-content">
                                <div class="col-lg-4 mb-3 template-content-item">
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- buttons -->
                    <section id="buttons" class="buttons-section min-vh-100">
                        <div class="container-fluid buttons-container">
                            <div class="row buttons-content">
                                <div class="col-lg-4 mb-3 buttons-content-item">
                                    <a class="btn main-bg-color" href="javascript:;">View more</a>
                                </div>
                                <div class="col-lg-4 mb-3 buttons-content-item">
                                    <a class="btn with-icon" href="javascript:;">Subscribe <img src="images/right-arrow-icon.png" alt="Details"></a>
                                </div>
                                <div class="col-lg-4 mb-3 buttons-content-item">
                                    <a class="btn main-bg-color with-icon" href="javascript:;">Read more <img src="images/right-arrow-icon.png" alt="Details"></a>
                                </div>              
                                <div class="col-lg-4 mb-3 buttons-content-item">
                                    <a class="btn link" href="javascript:;">Contact us</a>
                                </div>           
                                <div class="col-lg-4 mb-3 buttons-content-item">
                                    <a class="btn second-bg-color w-100" href="javascript:;">Contact us</a>
                                </div>          
                                <div class="col-lg-4 mb-3 buttons-content-item">
                                    <a class="btn gray-bg-color w-100" href="javascript:;">Contact us</a>
                                </div>       
                                <div class="col-lg-4 mb-3 buttons-content-item">
                                    <div class="quantity-btn">
                                        <div id="quantity">
                                            <span class="controls" onclick="decrementValue(); return false">-</span>
                                            <input type="text" value="0" id="kolicina" name="kolicina">
                                            <span class="controls" onclick="incrementValue(); return false">+</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>  
                    <!-- inputs -->
                    <section id="inputs" class="inputs-section min-vh-100">
                        <div class="container-fluid inputs-container">
                            <div class="row inputs-content">
                                <div class="col-lg-4 mb-3 inputs-content-item">
                                    <div class="form-group">
                                        <input type="text" name="email" class="custom-input" placeholder="Your email">
                                        <span class="custom-input-placeholder">Your email</span>
                                        <span id="email_error" class="field_error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3 inputs-content-item">
                                    <div class="form-group">
                                        <span class="custom-input-placeholder">Your email <span class="required">*</span></span>
                                        <input type="text" name="email" placeholder="Your email">
                                        <span id="email_error" class="field_error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3 inputs-content-item">
                                    <div class="form-group">
                                        <textarea name="message" class="custom-textarea" rows="6" placeholder="Your message" spellcheck="false"></textarea>
                                        <span class="custom-input-placeholder">Your message</span>
                                        <span id="message_error" class="field_error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3 inputs-content-item">
                                    <div class="form-group">
                                        <input type="text" name="email" class="custom-input" placeholder="Your email">
                                        <span class="custom-input-placeholder">Your email<span class="desc">(Heslo musí obsahovat minimálně 6 znaků.)</span></span>
                                        <span id="email_error" class="field_error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3 inputs-content-item">
                                    <div class="form-group">
                                        <span class="custom-input-placeholder">Your email <span class="required">*</span><span class="desc">(Heslo musí obsahovat minimálně 6 znaků.)</span></span>
                                        <input type="text" name="email" placeholder="Your email">
                                        <span id="email_error" class="field_error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3 inputs-content-item">
                                    <div id="radio-box">
                                        <input id="question3-1" type="radio" value="1" name="question3[]">
                                        <label for="question3-1">TRUE</label>
                                    </div>
                                    <div id="radio-box">
                                        <input id="question3-2" type="radio" value="1" name="question3[]">
                                        <label for="question3-2">FALSE</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3 inputs-content-item">
                                    <label class="custom-checkbox-container">
                                        I am available on only on this location
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </section>    
                    <!-- text -->
                    <section id="text" class="text-section min-vh-100">
                        <div class="container-fluid text-container">
                            <div class="row text-content">
                                <div class="col-lg-12 mb-3 text-content-item">
                                    <div class="lead-txt text-center">
                                        <p>Vyplňte prosím všechny povinné (*) údaje a odešlete stisknutím tlačítka "Odeslat registraci".<br>Vaše žádost bude odeslána pracovníkům společnosti PAPE - kancelářské potřeby ke zpracování.<br>O výsledcích zpracování budete informován na Vámi zadaném kontaktu.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- headings -->
                    <section id="headings" class="headings-section min-vh-100">
                        <div class="container-fluid headings-container">
                            <div class="row headings-content">
                                <div class="col-lg-12 mb-3 headings-content-item">
                                    <div class="heading-holder">
                                        <h1>Typ zákaznického účtu</h1>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3 headings-content-item">
                                    <div class="heading-holder">
                                        <h2>Typ zákaznického účtu</h2>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3 headings-content-item">
                                    <div class="heading-holder">
                                        <h3>Typ zákaznického účtu</h3>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3 headings-content-item">
                                    <div class="heading-holder">
                                        <h4>Typ zákaznického účtu</h4>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3 headings-content-item">
                                    <div class="heading-holder">
                                        <h5>Typ zákaznického účtu</h5>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3 headings-content-item">
                                    <div class="heading-holder">
                                        <h6>Typ zákaznického účtu</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row headings-content">                   
                                <div class="col-lg-12 mb-3 headings-content-item">
                                    <div class="heading-holder">
                                        <h1>Typ zákaznického účtu<span class="desc">Věnujte pozornost pečlivému vyplnění těchto údajů, pomocí nich budou vystaveny daňové doklady.</span></h1>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3 headings-content-item">
                                    <div class="heading-holder">
                                        <h2>Typ zákaznického účtu<span class="desc">Věnujte pozornost pečlivému vyplnění těchto údajů, pomocí nich budou vystaveny daňové doklady.</span></h2>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3 headings-content-item">
                                    <div class="heading-holder">
                                        <h3>Typ zákaznického účtu<span class="desc">Věnujte pozornost pečlivému vyplnění těchto údajů, pomocí nich budou vystaveny daňové doklady.</span></h3>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3 headings-content-item">
                                    <div class="heading-holder">
                                        <h4>Typ zákaznického účtu<span class="desc">Věnujte pozornost pečlivému vyplnění těchto údajů, pomocí nich budou vystaveny daňové doklady.</span></h4>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3 headings-content-item">
                                    <div class="heading-holder">
                                        <h5>Typ zákaznického účtu<span class="desc">Věnujte pozornost pečlivému vyplnění těchto údajů, pomocí nich budou vystaveny daňové doklady.</span></h5>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3 headings-content-item">
                                    <div class="heading-holder">
                                        <h6>Typ zákaznického účtu<span class="desc">Věnujte pozornost pečlivému vyplnění těchto údajů, pomocí nich budou vystaveny daňové doklady.</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- popups -->
                    <section id="popups" class="popups-section min-vh-100">
                        <div class="container-fluid popups-container">
                            <div class="row popups-content">
                                <div class="col-lg-12 mb-3 popups-content-item">
                                    <i class="cart-info popupp" data-popup=".basket-meni">i</i>
                                </div>
                                <div class="col-lg-12 mb-3 popups-content-item">
                                    <i class="cart-info popupp" data-popup=".login-meni">i</i>
                                </div>
                                <div class="col-lg-12 mb-3 popups-content-item">
                                    <i class="cart-info popupp" data-popup=".login-box">i</i>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- image banners -->
                    <section id="img-banners" class="img-banners-section min-vh-100">
                        <div class="container-fluid img-banners-container">
                            <div class="row img-banners-content">
                                <div class="col-lg-7 mb-3 img-banners-content-item">
                                    <a class="img-banners-item" href="javascript:;"><img class="img-fluid h-610" src="images/banner-img-01.jpg" alt="Banner"></a>
                                </div>
                                <div class="col-lg-5 mb-3 img-banners-content-item">
                                    <a class="img-banners-item" href="javascript:;"><img class="img-fluid h-303" src="images/banner-img-02.jpg" alt="Banner"></a>
                                    <a class="img-banners-item" href="javascript:;"><img class="img-fluid h-303" src="images/banner-img-03.jpg" alt="Banner"></a>
                                </div>
                            </div>
                            <div class="row img-banners-content">
                                <div class="col-lg-6 mb-3 img-banners-content-item">
                                    <a class="img-banners-item" href="javascript:;"><img class="img-fluid" src="images/banner-img-04.jpg" alt="Banner"></a>
                                </div>
                                <div class="col-lg-6 mb-3 img-banners-content-item">
                                    <a class="img-banners-item" href="javascript:;"><img class="img-fluid" src="images/banner-img-05.jpg" alt="Banner"></a>
                                </div>
                            </div>
                            <div class="row img-banners-content">
                                <div class="col-lg-12 mb-3 img-banners-content-item">
                                    <a class="img-banners-item" href="javascript:;"><img class="img-fluid" src="images/banner-img-06.jpg" alt="Banner"></a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- tooltips -->
                    <section id="tooltips" class="tooltips-section min-vh-100">
                        <div class="container-fluid tooltips-container">
                            <div class="row tooltips-content">
                                <div class="col-lg-4 mb-3">
                                    <div class="tooltip-btn-holder">
                                        <a href="javascript:;" class="btn main-bg-color" data-bs-placement="right" data-bs-html="true" data-bs-toggle="tooltip" data-bs-trigger="focus" title="And here's <b>some</b> amazing content. It's very engaging. Right?">Focus</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="tooltip-btn-holder">
                                        <a href="javascript:;" class="btn main-bg-color" data-bs-placement="right" data-bs-html="true" data-bs-toggle="tooltip" data-bs-trigger="click" title="And here's <b>some</b> amazing content. It's very engaging. Right?">Click</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="tooltip-btn-holder">
                                        <a href="javascript:;" class="btn main-bg-color" data-bs-placement="right" data-bs-html="true" data-bs-toggle="tooltip" data-bs-trigger="hover" title="And here's <b>some</b> amazing content. It's very engaging. Right?">Hover</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- product items -->
                    <section id="product-items" class="product-items-section min-vh-100">
                        <div class="container-fluid basket-products-container mb-50">
                            <div class="row basket-products-content">
                                <div class="col-lg-12 basket-products-item">
                                    <div class="img-holder">
                                        <img src="images/product-item-01.jpg" alt="Product">
                                    </div>
                                    <h4>Čtyřděrovač SAX 588 lorem ipsum</h4>
                                    <div class="quantity-btn">
                                        <div id="quantity">
                                            <span class="controls" onclick="decrementValue(); return false">-</span>
                                            <input type="text" value="0" name="" id="kolicina">
                                            <span class="controls" onclick="incrementValue(); return false">+</span>
                                        </div>
                                    </div>
                                    <div class="price">265 Kč</div>
                                    <div class="stock">Skladem 10 Ks</div>
                                    <div class="price"><strong>265 Kč</strong></div>
                                    <div class="btn-holder">
                                        <a class="close-btn" href="javascript:;">✖</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row basket-products-content">
                                <div class="col-lg-12 basket-products-item">
                                    <div class="img-holder">
                                        <img src="images/product-item-02.jpg" alt="Product">
                                    </div>
                                    <h4>Čtyřděrovač SAX 588 lorem ipsum</h4>
                                    <div class="quantity-btn">
                                        <div id="quantity">
                                            <span class="controls" onclick="decrementValue(); return false">-</span>
                                            <input type="text" value="0" name="" id="kolicina">
                                            <span class="controls" onclick="incrementValue(); return false">+</span>
                                        </div>
                                    </div>
                                    <div class="price">265 Kč</div>
                                    <div class="stock">Skladem 10 Ks</div>
                                    <div class="price"><strong>265 Kč</strong></div>
                                    <div class="btn-holder">
                                        <a class="close-btn" href="javascript:;">✖</a>
                                    </div>
                                </div>
                            </div>              
                        </div>
                        <div class="container-fluid product-items-container"> 
                            <div class="row product-items-content">                            
                                <div class="col-lg-3 mb-3 product-items-content-item">
                                    <div class="product-item-container">
                                        <div class="badge-container">
                                            <div class="badge-item active">
                                                <span class="badge-discount">-20%</span>
                                            </div>
                                            <div class="badge-item active">
                                                <span class="badge-new">Novinka</span>
                                            </div>
                                            <div class="badge-item active">
                                                <span class="badge-sale">Akce</span>
                                            </div>
                                            <div class="badge-item active">
                                                <span class="badge-delivery">
                                                    <img src="images/delivery-icon.png" alt="Delivery" data-bs-placement="right" data-bs-html="true" data-bs-toggle="tooltip" data-bs-trigger="focus hover" title="And here's <b>some</b> amazing content. It's very engaging. Right?">
                                                </span>
                                            </div>
                                            <div class="badge-item active">
                                                <span class="badge-gift">
                                                    <img src="images/gift-icon.png" alt="Gift" data-bs-placement="right" data-bs-html="true" data-bs-toggle="tooltip" data-bs-trigger="focus hover" title="And here's <b>some</b> amazing content. It's very engaging. Right?">
                                                </span>
                                            </div>
                                            <span class="badge-wish-list">
                                                <img class="wish-list-icon" src="images/wish-list-icon.png" alt="Wishlist">
                                                <img class="wish-list-icon active" src="images/wish-list-active-icon.png" alt="Wishlist">
                                            </span>
                                        </div>
                                        <div class="img-holder">
                                            <img src="images/product-item-01.jpg" alt="Product">
                                        </div>
                                        <div class="product-description">
                                            <h3>Akce kancelářský papír PAPE</h3>
                                            <div class="code">Kód: 2324c-786</div>
                                            <div class="stock">Skladem < 20 KR</div>
                                            <div class="price">4 950 Kč</div>
                                            <div class="vat">s DPD 5 989,50 Kč</div>
                                            <div class="quantity-btn">
                                                <div id="quantity">
                                                    <span class="controls" onclick="decrementValue(); return false">-</span>
                                                    <input type="text" value="0" id="kolicina" name="kolicina">
                                                    <span class="controls" onclick="incrementValue(); return false">+</span>
                                                </div>
                                            </div>
                                            <div class="btn-holder">
                                                <a class="btn main-bg-color" href="javscript:;">Do košíku</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="col-lg-3 mb-3 product-items-content-item">
                                    <div class="product-item-container">
                                        <div class="badge-container">
                                            <div class="badge-item active">
                                                <span class="badge-discount">-20%</span>
                                            </div>
                                            <div class="badge-item">
                                                <span class="badge-new">Novinka</span>
                                            </div>
                                            <div class="badge-item">
                                                <span class="badge-sale">Akce</span>
                                            </div>
                                            <div class="badge-item active">
                                                <span class="badge-delivery">
                                                    <img src="images/delivery-icon.png" alt="Delivery" data-bs-placement="right" data-bs-html="true" data-bs-toggle="tooltip" data-bs-trigger="focus hover" title="And here's <b>some</b> amazing content. It's very engaging. Right?">
                                                </span>
                                            </div>
                                            <div class="badge-item">
                                                <span class="badge-gift">
                                                    <img src="images/gift-icon.png" alt="Gift" data-bs-placement="right" data-bs-html="true" data-bs-toggle="tooltip" data-bs-trigger="focus hover" title="And here's <b>some</b> amazing content. It's very engaging. Right?">
                                                </span>
                                            </div>
                                            <span class="badge-wish-list">
                                                <img class="wish-list-icon active" src="images/wish-list-icon.png" alt="Wishlist">
                                                <img class="wish-list-icon" src="images/wish-list-active-icon.png" alt="Wishlist">
                                            </span>
                                        </div>
                                        <div class="img-holder">
                                            <img src="images/product-item-02.jpg" alt="Product">
                                        </div>
                                        <div class="product-description">
                                            <h3>Akce kancelářský papír PAPE</h3>
                                            <div class="code">Kód: 2324c-786</div>
                                            <div class="stock">Skladem < 20 KR</div>
                                            <div class="price">4 950 Kč</div>
                                            <div class="vat">s DPD 5 989,50 Kč</div>
                                            <div class="quantity-btn">
                                                <div id="quantity">
                                                    <span class="controls" onclick="decrementValue(); return false">-</span>
                                                    <input type="text" value="0" id="kolicina" name="kolicina">
                                                    <span class="controls" onclick="incrementValue(); return false">+</span>
                                                </div>
                                            </div>
                                            <div class="btn-holder">
                                                <a class="btn main-bg-color" href="javscript:;">Do košíku</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>    
                    <!-- forms -->
                    <section id="forms" class="forms-section min-vh-100">
                        <div class="container-fluid forms-container">
                            <div class="row forms-content">
                                <div class="col-lg-12 mb-3 forms-content-item">
                                    <form action="javascript:;" class="points-form">
                                        <p>Na vašem bodovém kontě je aktuálně <strong>120 PAPE bodů.</strong></p>
                                        <div class="points-form-content">
                                            <input type="text">
                                            <a class="btn main-bg-color" href="javascript:;">Čerpat</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6 mb-3 forms-content-item">
                                    <form action="javascript:;" class="basket-msg-form">
                                        <p>Poznámka k objednávce: </p>
                                        <div class="basket-form-content mb-45">
                                            <textarea name="message" class="custom-textarea" rows="6" placeholder="" spellcheck="false"></textarea><grammarly-extension data-grammarly-shadow-root="true" style="position: absolute; top: 0px; left: 0px; pointer-events: none; z-index: 12;" class="cGcvT"></grammarly-extension><grammarly-extension data-grammarly-shadow-root="true" style="position: absolute; top: 0px; left: 0px; pointer-events: none; z-index: 12;" class="cGcvT"></grammarly-extension>
                                            <a class="btn main-bg-color" href="javascript:;">Čerpat</a>
                                        </div>
                                        <a class="btn link" href="javascript:;">Zpět do E-shopu</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- filters -->
                    <section id="filters" class="filters-section min-vh-100">
                        <div class="container-fluid filters-container">
                            <div class="row filters-content">
                                <div class="col-lg-4 mb-3 filters-content-item">
                                    
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- lists -->
                    <section id="lists" class="lists-section min-vh-100">
                        <div class="container-fluid lists-container">
                            <div class="row lists-content">
                                <div class="col-lg-4 mb-3 lists-content-item">
                                    <ul class="account-menu-item-container">
                                        <li>
                                            <a href="javascript:;" class="account-menu-item">
                                                <img src="images/account-oreder-icon.png" alt="Item">
                                                <span>Vaše objednávky</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="account-menu-item">
                                                <img src="images/account-return-icon.png" alt="Item">
                                                <span>Vrátit zboží</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="account-menu-item">
                                                <img src="images/account-your-returns-icon.png" alt="Item">
                                                <span>Vaše vrácené zboží</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="account-menu-item">
                                                <img src="images/account-your-data.png" alt="Item">
                                                <span>Vaše údaje</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="account-menu-item">
                                                <img src="images/account-your-address.png" alt="Item">
                                                <span>Vaše adresy</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="account-menu-item">
                                                <img src="images/account-your-wish-list.png" alt="Item">
                                                <span>Vámi oblibenepolozky</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="account-menu-item">
                                                <img src="images/account-newsletter-icon.png" alt="Item">
                                                <span>Vaše newsletterya mailové správy</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="account-menu-item">
                                                <img src="images/account-delete-data -icon.png" alt="Item">
                                                <span>Vyžádata smazat data</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="account-menu-item">
                                                <img src="images/account-info-icon.png" alt="Item">
                                                <span>Nápovědaa kontakt</span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- progress bars -->
                    <section id="progress-bars" class="progress-bars-section min-vh-100">
                        <div class="container-fluid progress-bars-container">
                            <div class="row progress-bars-content">
                                <div class="col-lg-4 mb-3 progress-bars-content-item">
                                    <div class="progres-content">
                                        <p>Objednejte ještě za 368 Kč a budete mít <strong>dopravu ZDARMA</strong></p>
                                        <div class="progress">
                                            <div class="progress-bar" style="width:70%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main> 

	<?php include('templates/footer.php'); ?>
	<?php include('templates/popups.php'); ?>

<script>
    var max_kolicina = 10;
    var is_selected = 0;
    function incrementValue(){
        var value = parseInt(document.getElementById('kolicina').value, 10);
        value = isNaN(value) ? 0 : value;
        if(value < max_kolicina)
        {
            value++;
        }
        document.getElementById('kolicina').value = value;
    }
    function decrementValue(){
        var value = parseInt(document.getElementById('kolicina').value, 10);
        value = isNaN(value) ? 0 : value;
        if(value > 0){value--};
        document.getElementById('kolicina').value = value;
    }
</script>
<!-- custom -->
<script src="js/custom.js"></script>
</body>
</html>
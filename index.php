<?php
include "includes/header.php";
?>

    <div id="main-index">
        <img src="/assets/images/hotdog-icon.png" width="92" height="92" alt="Dirty Dogs" title="Dirty Dogs">
        <h1>Dirty Dogs serves all-beef, vegan and vegatagian hot dogs.</h1>
        <a class="more-dogs-button" href="#">More Dogs ‘n Make Em Hot</a>
    </div>
    <div id="gormet-dogs" class="dog-div">
        <div class="info-box">
            <h2>Gormet All Beef Hotdogs</h2>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean eu leo quam. Pellentesque
                ornare sem lacinia quam venenatis vestibulum.</p>
        </div>
        <div class="picture-box">
            <picture>
                <source type="image/webp" media="(min-width: 460px)"
                        srcset="/assets/images/hotdogs-gormet-all-beef.jpg.webp">
                <source type="image/png" media="(min-width: 460px)" srcset="/assets/images/hotdogs-gormet-all-beef.jpg">
                <source type="image/webp" media="(max-width: 460px)"
                        srcset="/assets/images/hotdogs-gormet-all-beef-510x382.jpg.webp">
                <source type="image/png" media="(max-width: 460px)"
                        srcset="/assets/images/hotdogs-gormet-all-beef-510x382.jpg">
                <img src="/assets/images/hotdogs-gormet-all-beef.jpg" alt="A delicious hotdog">
            </picture>
        </div>
    </div>


    <div id="vegan-dogs" class="dog-div">
        <div class="info-box">
            <h2>Vegan Hotdogs</h2>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean eu leo quam. Pellentesque
                ornare sem lacinia quam venenatis vestibulum.</p>
        </div>
        <div class="picture-box">
            <picture>
                <source type="image/webp" media="(min-width: 460px)" srcset="/assets/images/hotdogs-vegan.jpg.webp">
                <source type="image/png" media="(min-width: 460px)" srcset="/assets/images/hotdogs-vegan.jpg">
                <source type="image/webp" media="(max-width: 460px)"
                        srcset="/assets/images/hotdogs-vegan-510x382.jpg.webp">
                <source type="image/png" media="(max-width: 460px)" srcset="/assets/images/hotdogs-vegan-510x382.jpg">
                <img src="/assets/images/hotdogs-vegan.jpg" alt="A delicious hotdog">
            </picture>
        </div>
    </div>


    <div id="vegitarian-dogs" class="dog-div">
        <div class="info-box">
            <h2>Vegitarian Hotdogs</h2>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean eu leo quam. Pellentesque
                ornare sem lacinia quam venenatis vestibulum.</p>
        </div>
        <div class="picture-box">
            <picture>
                <source type="image/webp" media="(min-width: 460px)"
                        srcset="/assets/images/hotdogs-vegitarian.jpg.webp">
                <source type="image/png" media="(min-width: 460px)" srcset="/assets/images/hotdogs-vegitarian.jpg">
                <source type="image/webp" media="(max-width: 460px)"
                        srcset="/assets/images/hotdogs-vegitarian-510x382.jpg.webp">
                <source type="image/png" media="(max-width: 460px)"
                        srcset="/assets/images/hotdogs-vegitarian-510x382.jpg">
                <img src="/assets/images/hotdogs-vegitarian.jpg" alt="A delicious hotdog">
            </picture>
        </div>
    </div>
<?php
include "includes/footer.php";
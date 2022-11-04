<?php
get_header();
the_post();
?>
<main class="page__home">
    <section class="hero">
        <div class="container">
            <div class="hero__banner">
                <p>Offering 20% discount on selected trips</p>
            </div>
            <h1 class="hero__title">Explore Beyond the<br><strong>Himalayas</strong></h1>
            <input type="text" class="hero__searchBar">
        </div>
    </section>
    <section class="slider">
        <div class="slider__slick">
            <div class="slider__content">
                <figure class="slider__img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/slider1.jpg')">
                    <img class="screen-reader-text" src="<?php echo get_template_directory_uri() ?>/uploads/slider1.jpg" alt="Logo of Website" />
                    <span class="slider__mask"></span>
                </figure>
                <div class="slider__innerContent">
                    <p>Play Video <br><strong>2:53</strong></p>
                    <h2 class="slider__title">List of easy trek for the first timers’</h2>
                </div>
            </div>
            <div class="slider__content">.
                <figure class="slider__img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/slider1.jpg')">
                    <img class="screen-reader-text" src="<?php echo get_template_directory_uri() ?>/uploads/slider1.jpg" alt="Logo of Website" />
                    <span class="slider__mask"></span>
                </figure>
                <div class="slider__innerContent">
                    <p>Play Video <br><strong>2:53</strong></p>
                    <h2 class="slider__title">List of easy trek for the first timers’</h2>
                </div>
            </div>
            <div class="slider__content">
                <figure class="slider__img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/slider1.jpg')">
                    <img class="screen-reader-text" src="<?php echo get_template_directory_uri() ?>/uploads/slider1.jpg" alt="Logo of Website" />
                    <span class="slider__mask"></span>
                </figure>
                <div class="slider__innerContent">
                    <p>Play Video <br><strong>2:53</strong></p>
                    <h2 class="slider__title">List of easy trek for the first timers’</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="textList">
        <div class="container">
            <h2 class="textList__title">Our values above everything</h2>
            <div class="textList__content">
                <div class="textList__innerList">
                    <h3 class="textList__heading">We are not a regular travel agency; We’re here to understand your needs, consult you a better travel experience and create a lifetime relation with you.</h3>
                    <p>We proudly say that we are one of those few, who love to put ourselves under the list of “Different People do Things Differently”, just like you try to create a lasting impression upon your clients, who will remember how much hard you have worked work for them to give a satisfying service in the remotest regions of Nepal.</p>
                    <ul class="textList__nav">
                        <li>More About Us</li>
                        <li>Why TMG?</li>
                        <li>Meet Our Team</li>
                        <li>FAQs</li>
                    </ul>
                </div>
                <div class="textList__quote">
                    <h3 class="textList__quoteText">We aspire to be the world’s most trustable and progressive travel management company.</h3>
                    <p>— John shrestha, Founder</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cardSlider">
        <div class="container">
            <h2 class="cardSlider__mainTitle">Explore <strong>Nepal with us</strong> </h2>
            <h3 class="cardSlider__introDes">Nepal is as old as the hills, and so are its Himalayas that were formed billions of years ago, and this is where the trekking trails lie.</h3>
            <div class="cardSlider__slider">
                <div class="cardSlider__content" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/img1.jpg')">
                    <h3 class="cardSlider__price">USD 1,500</h3>
                    <h4 class="cardSlider__title">Everest Base Camp Trek via Gokyo Lakes</h4>
                    <p>12 Days, Setrenuous</p>
                </div>
                <div class="cardSlider__content" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/img2.jpg')">
                    <h3 class="cardSlider__price">USD 1,500</h3>
                    <h4 class="cardSlider__title">Everest Base Camp Trek</h4>
                    <p>12 Days, Setrenuous</p>
                </div>
                <div class="cardSlider__content" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/img3.jpg')">
                    <h3 class="cardSlider__price">USD 1,500</h3>
                    <h4 class="cardSlider__title">Annapurna Base Camp Trek</h4>
                    <p>12 Days, Setrenuous</p>
                </div>
                <div class="cardSlider__content" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/img1.jpg')">
                    <h3 class="cardSlider__price">USD 1,500</h3>
                    <h4 class="cardSlider__title">Everest Base Camp Trek via Gokyo Lakes</h4>
                    <p>12 Days, Setrenuous</p>
                </div>
                <div class="cardSlider__content" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/img2.jpg')">
                    <h3 class="cardSlider__price">USD 1,500</h3>
                    <h4 class="cardSlider__title">Everest Base Camp Trek</h4>
                    <p>12 Days, Setrenuous</p>
                </div>
                <div class="cardSlider__content" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/img3.jpg')">
                    <h3 class="cardSlider__price">USD 1,500</h3>
                    <h4 class="cardSlider__title">Annapurna Base Camp Trek</h4>
                    <p>12 Days, Setrenuous</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cfa">
        <div class="container">
            <div class="cfa__head">
                <h2 class="cfa__heading">Our values venenatis magna <strong>everything</strong></h2>
            </div>
            <div class="cfa__body">
                <h3 class="cfa__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet justo at justo tempus semper</h3>
                <button type="submit" class="button cfa__button "><strong>VIEW ALL TRIPS</strong></button>
            </div>
        </div>
    </section>

    <section class="blogImg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/blog.jpg')">
        <span class="blogImg__top-left"></span>
        <span class="blogImg__top-right"></span>
        <span class="blogImg__bottom-left"></span>
        <span class="blogImg__bottom-right"></span>
        <div class="container">
            <h2 class="blogImg__head">STORIES FROM THE HIMALAYA</h2>
            <div class="blogImg__body">
                <div class="blogImg__text">
                    <h3 class="blogImg__title">TRAVEL <strong>PHOTOGRAPHY</strong> at it’s <strong>best</strong></h3>
                    <p>Nepal is as old as the hills, and so are its Himalayas that were formed billions of years ago, and this is where the trekking trails lie.</p>
                </div>
                <div class="blogImg__img">
                    <div class="blogImg__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/blog1.jpg')">
                        <h4 class="blogImg__imgTitle">Nepal Adventure</h4>
                    </div>
                    <div class="blogImg__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/blog2.jpg')">
                        <h4 class="blogImg__imgTitle">Lower Dolpo Trek</h4>
                    </div>
                    <div class="blogImg__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/blog3.jpg')">
                        <h4 class="blogImg__imgTitle">Sightseeing Kathmandu</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="slideScroll">
        <div class="container">
            <h2 class="slideScroll__head">We servce experiences that last long...</h2>
            <div class="slideScroll__scrollerContainer">
                <div class="slideScroll__scrollContent">
                    <figure class="slideScroll__logo">
                        <svg class="icon slideScroll__scroller trekking">
                            <use xlink:href="#trekking"></use>
                        </svg>
                    </figure>
                    <p>Trekking</p>
                </div>
                <div class="slideScroll__scrollContent">
                    <figure class="slideScroll__logo">
                        <svg class="icon slideScroll__scroller icon-dayTrip">
                            <use xlink:href="#dayTrip"></use>
                        </svg>
                    </figure>
                    <p>Day Trips</p>
                </div>
                <div class="slideScroll__scrollContent">
                    <figure class="slideScroll__logo">
                        <svg class="icon slideScroll__scroller heliTours">
                            <use xlink:href="#heliTours"></use>
                        </svg>
                    </figure>
                    <p>Heli Tours</p>
                </div>
                <div class="slideScroll__scrollContent slideScroll__scrollContent--active">
                    <figure class="slideScroll__logo">
                        <svg class="icon slideScroll__scroller mountaineering">
                            <use xlink:href="#mountaineering"></use>
                        </svg>
                    </figure>
                    <p>Mountaineering</p>
                </div>
                <div class="slideScroll__scrollContent">
                    <figure class="slideScroll__logo">
                        <svg class="icon slideScroll__scroller biking">
                            <use xlink:href="#biking"></use>
                        </svg>
                    </figure>
                    <p>Biking</p>
                </div>
                <div class="slideScroll__scrollContent">
                    <figure class="slideScroll__logo">
                        <svg class="icon slideScroll__scroller adventure">
                            <use xlink:href="#adventure"></use>
                        </svg>
                    </figure>
                    <p>Adventure</p>
                </div>
                <div class="slideScroll__scrollContent">
                    <figure class="slideScroll__logo">
                        <svg class="icon slideScroll__scroller volunteering">
                            <use xlink:href="#volunteering"></use>
                        </svg>
                    </figure>
                    <p>Volunteering</p>
                </div>
                <div class="slideScroll__scrollContent">
                    <figure class="slideScroll__logo">
                        <svg class="icon slideScroll__scroller wildlifeSafari">
                            <use xlink:href="#wildlifeSafari"></use>
                        </svg>
                    </figure>
                    <p>Wildlife Safari</p>
                </div>
            </div>
            <div class="slideScroll__cardContainer">
                <div class="slideScroll__card">
                    <figure class="sliderScroll__img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/card1.jpg')">
                        <img class="screen-reader-text" src="<?php echo get_template_directory_uri() ?>/uploads/card1.jpg" alt="Logo of Website" />
                    </figure>
                    <div class="sliderScroll__cardConatiner">
                        <div class="slideScroll__tags">
                            <h3 class="slideScroll__tag">USD 1,500</h3>
                            <h3 class="slideScroll__tag slideScroll__tag--alt">New Trip</h3>
                        </div>
                        <h4 class="slideScroll__title">Everest Base Camp Trek via Gokyo Lakes</h4>
                        <div class="slideScroll__information">
                            <h5 class="slideScroll__info">12 Days</h5>
                            <h5 class="slideScroll__info">Setrenuous</h5>
                            <h5 class="slideScroll__info">Trekking</h5>
                        </div>
                        <h6 class="slideScroll__description">Annapurna Circuit Trekking is a whole trek; it is your trek; it is the trek that the National Geographic has enlisted as the world’s best. Annapurna Circuit Trekking is not ...</h6>
                        <button class="button slideScroll__button">VIEW DETAILS</button>
                    </div>
                </div>
                <div class="slideScroll__card">
                    <figure class="sliderScroll__img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/card1.jpg')">
                        <img class="screen-reader-text" src="<?php echo get_template_directory_uri() ?>/uploads/card1.jpg" alt="Logo of Website" />
                    </figure>
                    <div class="sliderScroll__cardConatiner">
                        <div class="slideScroll__tags">
                            <h3 class="slideScroll__tag">USD 1,500</h3>
                            <h3 class="slideScroll__tag slideScroll__tag--alt">Popular</h3>
                        </div>
                        <h4 class="slideScroll__title">Everest Base Camp Trek via Gokyo Lakes</h4>
                        <div class="slideScroll__information">
                            <h5 class="slideScroll__info">12 Days</h5>
                            <h5 class="slideScroll__info">Setrenuous</h5>
                            <h5 class="slideScroll__info">Trekking</h5>
                        </div>
                        <h6 class="slideScroll__description">Annapurna Circuit Trekking is a whole trek; it is your trek; it is the trek that the National Geographic has enlisted as the world’s best. Annapurna Circuit Trekking is not ...</h6>
                        <button class="button slideScroll__button">VIEW DETAILS</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include('modules/flex-content/flex-content.php') ?>
</main>
<?php get_footer(); ?>
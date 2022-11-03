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
                <button type="submit" class="button cfa__button "><strong>VIEW  ALL TRIPS</strong></button>
            </div>
        </div>
    </section>

    <?php include('modules/flex-content/flex-content.php') ?>
</main>
<?php get_footer(); ?>
<?php get_header(); ?>
<div class="intro-section wrapper-container">
    <div class="wrapper">
        <div class="intro-text">
            <h2>Searching For A Property?</h2>
            <h4>Find it here at <div class="brand-name">Gharjagga</div>
            </h4>
            <span>Discover a wide range of properties for sale or rent in your desired location.</span>
            <div class="btn-group">
                <a href="#" class="btn-primary property-btn">
                    Search Property
                </a>
            </div>
        </div>
        <div class="hero-img">
            <img src="<?php echo get_template_directory_uri(); ?> /assets/images/hero.jpg" alt="">
        </div>
    </div>
</div>
<section class="product-list-container wrapper-container">
    <div class="wrapper">
        <div class="header-content">
            <h2 class="title-text">Housing & Apartments</h2>
            <a href="#" class="view-more">
                <span class="label-text">
                    View More
                </span>
                <span class="icon-container-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                </span>
            </a>
        </div>
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                // the_content();
            }
        }

        ?>
        <!-- <ul class="product-list">
            <li class="list-item">
                <a href="#" class="list-link product-card">
                    <div class="img-container">
                        <img src="<?php echo get_template_directory_uri(); ?> /assets/images/prop_1.jpg" alt="">
                    </div>
                    <div class="product-card-content">
                        <h2 class="title-text">Property Name</h2>
                        <div class="details">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                        <div class="view-details">
                            <button type="button" class="btn btn-primary">
                                View Details
                            </button>
                        </div>
                    </div>
                </a>
            </li>
            <li class="list-item">
                <a href="#" class="list-link product-card">
                    <div class="img-container">
                        <img src="<?php echo get_template_directory_uri(); ?> /assets/images/prop_2.jpg" alt="">
                    </div>

                    <div class="product-card-content">
                        <h2 class="title-text">Property Name</h2>
                        <div class="details">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                        <div class="view-details">
                            <button type="button" class="btn btn-primary">
                                View Details
                            </button>
                        </div>
                    </div>
                </a>
            </li>
            <li class="list-item">
                <a href="#" class="list-link product-card">
                    <div class="img-container">
                        <img src="<?php echo get_template_directory_uri(); ?> /assets/images/prop_3.jpg" alt="">
                    </div>
                    
                    <div class="product-card-content">
                        <h2 class="title-text">Property Name</h2>
                        <div class="details">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                        <div class="view-details">
                            <button type="button" class="btn btn-primary">
                                View Details
                            </button>
                        </div>
                    </div>                
                </a>
            </li>
            <li class="list-item">
                <a href="#" class="list-link product-card">
                    <div class="img-container">
                        <img src="<?php echo get_template_directory_uri(); ?> /assets/images/prop_4.jpg" alt="">
                    </div>

                    <div class="product-card-content">
                        <h2 class="title-text">Property Name</h2>
                        <div class="details">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                        <div class="view-details">
                            <button type="button" class="btn btn-primary">
                                View Details
                            </button>
                        </div>
                    </div>                
                </a>
            </li>
            <li class="list-item">
                <a href="#" class="list-link product-card">
                    <div class="img-container">
                        <img src="<?php echo get_template_directory_uri(); ?> /assets/images/prop_5.jpg" alt="">
                    </div>
                    <div class="product-card-content">
                        <h2 class="title-text">Property Name</h2>
                        <div class="details">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                        <div class="view-details">
                            <button type="button" class="btn btn-primary">
                                View Details
                            </button>
                        </div>
                    </div>                
                </a>
            </li>
        </ul> -->
    </div>
</section>

<?php get_footer(); ?>
<div id="site-navigation" class="main-navigation navbar navbar-expand-lg " role="navigation" aria-label="<?php esc_attr_e('Primary Navigation', 'zinoviev-school'); ?>">
    <div class="container">
        <?php /* Logo */
        if (has_custom_logo()) {
            the_custom_logo();
        } else { ?>
            <a class="navbar-brand" href="<?php echo esc_url_raw(home_url()); ?>"><?php bloginfo('name'); ?></a>
        <?php } ?>
        <div class="main_menu d-none d-lg-block">
            <?php
            wp_nav_menu(
                array(
                    'theme_location'  => 'header',
                    'container_class' => 'primary-navigation',
                )
            );
            // get_search_form();
            ?>

        </div>
        <div class="offcanvas-menu d-lg-none">
            <input type="checkbox" id="toogle-menu" />
            <label for="toogle-menu" class="toogle-open"><span></span></label>
            <div class="nav1">
                <div>
                    <label for="toogle-menu" class="toogle-close">
                        <span></span>
                    </label>
                </div>

                <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'header',
                        'container_class' => 'accordion-menu example mobile-navigation',
                    )
                );
                // get_search_form();
                ?>
                <?php
                echo '<div class="wpml-floating-language-switcher">';
                do_action('wpml_add_language_selector');
                echo '</div>';
                ?>

            </div>
        </div>
    </div><!-- #site-navigation -->
    <div class="container-fluid widget-bottom-header">
        <div class="container">

            <div class="row">
                <div class="header__right-widgets col-8 col-md-6 d-flex justify-content-start">
                    <div class="widget  widget-social-icons ">
                        <a class="social-icons__link" href="https://wa.me/66988869108" target="_blank"><i class="fab fa-whatsapp fa-fw"></i></a>
                        <a class="social-icons__link" href="tel:<?php the_field('contacts_phone', 'option'); ?>" target="_blank"><i class="fa-solid fa-phone"></i></a>
                        <a class="social-icons__link" href="https://telegram.me/plavanieZinoviev" target="_blank"><i class="fa-brands fa-telegram"></i></a>
                    </div>
                </div>
                <div class="header__left-widgets col-4 col-md-6">
                    <?php
                    echo '<div class="wpml-floating-language-switcher d-flex justify-content-end">';
                    do_action('wpml_add_language_selector');
                    echo '</div>';
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        let AccordionMenu = function(selector) {
            this.colMenu = document.querySelectorAll(`${selector} li`);
            let This = this;
            this.colMenu.forEach(function(items) {
                if (items.querySelector('ul')) {
                    items.firstElementChild.insertAdjacentHTML('beforeend', '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 451.847 451.847" xml:space="preserve"> <g> <path d="M225.923,354.706c-8.098,0-16.195-3.092-22.369-9.263L9.27,151.157c-12.359-12.359-12.359-32.397,0-44.751 c12.354-12.354,32.388-12.354,44.748,0l171.905,171.915l171.906-171.909c12.359-12.354,32.391-12.354,44.744,0 c12.365,12.354,12.365,32.392,0,44.751L248.292,345.449C242.115,351.621,234.018,354.706,225.923,354.706z"/> </g> </svg>');
                    items.firstElementChild.onclick = function(e) {
                        e.preventDefault();
                        let isTrue = this.parentElement.classList.toggle('open');
                        if (isTrue) {
                            This.show(this.nextElementSibling);
                        } else {
                            This.hide(this.nextElementSibling);
                        }
                    }
                }
            })
        }

        // Show an element
        AccordionMenu.prototype.show = function(elem) {
            // Get the natural height of the element
            var getHeight = function() {
                elem.style.display = 'block'; // Make it visible
                var height = elem.scrollHeight + 'px'; // Get it's height
                return height;
            };

            var height = getHeight(); // Get the natural height
            elem.style.height = height; // Update the height   
            setTimeout(function() {
                elem.style.height = 'auto';
            }, 350);
        };

        // Hide an element
        AccordionMenu.prototype.hide = function(elem) {
            // Give the element a height to change from
            elem.style.height = elem.scrollHeight + 'px';
            // Set the height back to 0
            setTimeout(function() {
                elem.style.height = '0';
            }, 110);
            setTimeout(function() {
                elem.style.display = '';
            }, 700);
        };
        new AccordionMenu('.example');
    </script>
<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mamamedicine
 */

$header_logo = get_field('header_logo', 'option');
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <title>Mama Medicine</title>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'mamamedicine'); ?></a>
        <header id="masthead" class="site-header">
            <div class="uk-navbar-transparent uk-navbar-container" uk-navbar>
                <div class="uk-navbar-left">
                    <a href="<?php echo home_url(); ?>" class="uk-navbar-item uk-logo">
                        <img src="<?php echo $header_logo['url']; ?>" alt="logo" title="logo">
                    </a>
                    <ul class="uk-navbar-nav uk-navbar-middle">
                        <li><a href="<?php echo home_url('/events/'); ?>">Events</a></li>
                        <li><a href="<?php echo home_url('/courses/'); ?>">courses</a></li>
                        <li><a href="<?php echo home_url('/membership/'); ?>">Membership</a></li>
                        <li><a href="<?php echo home_url('/about-us/'); ?>">About Us</a></li>
                        <li><a href="<?php echo home_url('/conatct/'); ?>">Conatct</a></li>
                        <li><a href="<?php echo home_url('/book-now/'); ?>">Book Now</a></li>
                    </ul>
                    <div class="language-wrapper">
                        <?php echo do_shortcode('[wpml_language_selector_widget]'); ?>
                    </div>
                    <div class="uk-navbar-item uk-navbar-right">
                        <ul class="social-nav">
                            <li><a href="https://www.facebook.com/login/">
                                    <svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 1H9C7.67392 1 6.40215 1.52678 5.46447 2.46447C4.52678 3.40215 4 4.67392 4 6V9H1V13H4V21H8V13H11L12 9H8V6C8 5.73478 8.10536 5.48043 8.29289 5.29289C8.48043 5.10536 8.73478 5 9 5H12V1Z" stroke="#EFE9E8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </li>
                            <li><a href="https://www.instagram.com/accounts/login/">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16 1H6C3.23858 1 1 3.23858 1 6V16C1 18.7614 3.23858 21 6 21H16C18.7614 21 21 18.7614 21 16V6C21 3.23858 18.7614 1 16 1Z" stroke="#EFE9E8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M15 10.37C15.1234 11.2022 14.9812 12.0522 14.5937 12.799C14.2062 13.5458 13.5931 14.1514 12.8416 14.5297C12.0901 14.9079 11.2384 15.0396 10.4077 14.9059C9.57708 14.7723 8.80971 14.3801 8.21479 13.7852C7.61987 13.1902 7.22768 12.4229 7.09402 11.5922C6.96035 10.7615 7.09202 9.90989 7.47028 9.15837C7.84854 8.40685 8.45414 7.79374 9.20094 7.40624C9.94773 7.01874 10.7977 6.87658 11.63 7C12.4789 7.12588 13.2648 7.52146 13.8716 8.1283C14.4785 8.73515 14.8741 9.52107 15 10.37Z" stroke="#EFE9E8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M16.5 5.5H16.51" stroke="#EFE9E8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </li>
                            <li><a href="https://x.com/i/flow/login">
                                    <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M23 1.01006C22.0424 1.68553 20.9821 2.20217 19.86 2.54006C19.2577 1.84757 18.4573 1.35675 17.567 1.13398C16.6767 0.911216 15.7395 0.967251 14.8821 1.29451C14.0247 1.62177 13.2884 2.20446 12.773 2.96377C12.2575 3.72309 11.9877 4.62239 12 5.54006V6.54006C10.2426 6.58562 8.50127 6.19587 6.93101 5.4055C5.36074 4.61513 4.01032 3.44869 3 2.01006C3 2.01006 -1 11.0101 8 15.0101C5.94053 16.408 3.48716 17.109 1 17.0101C10 22.0101 21 17.0101 21 5.51006C20.9991 5.23151 20.9723 4.95365 20.92 4.68006C21.9406 3.67355 22.6608 2.40277 23 1.01006V1.01006Z" stroke="#EFE9E8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <?php wp_footer(); ?>
</body>

</html>
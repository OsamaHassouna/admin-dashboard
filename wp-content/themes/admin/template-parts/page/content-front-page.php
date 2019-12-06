<?php
/**
 * Template Name: Landing Page
 * The template for displaying Landing Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#slider
 *
 * @package WordPress
 * @since 1.0.0
 */


?>
<!-- Home Header -->
    <header class='header'>
        <div class="bg-overlay"></div>
        <div class='container'>
            <!-- Navigation -->
            <div class='nav-menu row no-gutters'>
                <div class='col-12'>
                    <!-- Main Header -->
                    <!-- Navigation -->
                    <div class='row navbar navbar-expand-lg no-gutters'>
                        <!-- Logo -->
                        <div class='logo'>
                            <a href='<?php echo home_url(); ?>'>
                                <!-- <img src='images/logo.png' alt='IMG-LOGO'> -->
                                <!-- <svg viewBox='0 0 66.5 29.38' id='logo-svg'>
                                    <use xlink:href='#logo'></use>
                                </svg> -->
                                <h1 class="logo-typo">DashBoard</h1>
                            </a>
                        </div>
                        <!-- Mobile menu Button -->
                        <button class='navbar-toggler collapsed' type='button' data-toggle='collapse'
                            data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent'
                            aria-expanded='false' aria-label='Toggle navigation'>
                            <span class='navbar-toggler-icon'>
                                <svg viewBox='0 0 448 512' id='mobile-bars'>
                                    <use xlink:href='#bars'></use>
                                </svg>
                            </span>
                        </button>
                       <!-- Menu -->
                        <div class='wrap_menu navbar-collapse collapse' id='navbarSupportedContent'>
                            <div class='main-menu'>
                                <nav class='menu'>
                                    <ul class='navbar-nav'>
                                        <li>
                                            <a href='<?php echo home_url(); ?>'>Home</a>
                                        </li>
                                        <li>
                                            <a href='#'>Docs</a>
                                        </li>
                                        <li>
                                            <a href='#'>Support</a>
                                        </li>
                                        <li>
                                            <a href='#'>Blog</a>
                                        </li>
                                        <li>
                                            <a href='#'>Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Header Content -->
            <div class="header-content row no-gutters">
                <div class="col-12">
                    <h2>Welcome To Deja Dashboard</h2>
                    <div class="btn-container">
                        <a href="<?php echo home_url('/signup'); ?>" class="btn register">Sign Up</a>
                        <a href="<?php echo home_url('/deja-user-login'); ?>" class="btn login">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

<!-- SVG -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1302.61 513.34" style="width: 0; position: absolute;">
        <defs></defs>
        <title>svgs</title>
        <g id="bars" data-name="bars">
            <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
        </g>
    </svg>

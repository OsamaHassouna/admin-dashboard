<header class="header mainBoardMenu">
    <div class="container">
        <div class='nav-menu row no-gutters'>
            <div class='col-12'>
            <!-- Menu Sidebar -->
                <!-- Navigation -->
                <div class='row navbar navbar-expand-lg no-gutters'>
                    <!-- Logo -->
                    <div class='logo'>
                        <a href='<?php echo home_url(); ?>'>
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
                                        <a href='<?php echo home_url('/mainBoard'); ?>'>Home</a>
                                    </li>
                                    <li>
                                        <a href='#'>Docs</a>
                                    </li>
                                    <li>
                                        <a href='#'>....</a>
                                    </li>
                                    <li>
                                        <a href='#'>Profile</a>
                                    </li>
                                    <li>
                                        <a href='<?php echo wp_logout_url( home_url() ); ?>'>Logout</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>

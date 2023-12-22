<header class="w-100">
    <nav class="container d-flex justify-content-between align-items-center ps-4 pe-4">
        <div class="logo ms-auto me-auto ms-lg-0 me-lg-0" >
            @include('365jobs.partials.icons.mainLogoImage')
        </div>
        <ul class="nav-list d-none d-lg-flex align-items-center">
            <li class="nav-link">
                <a href="#">
                    Θέσεις Εργασίας
                </a>
            </li>
            <li class="nav-link">
                <a href="#">
                    Υπηρεσίες
                </a>
            </li>
            <li class="nav-link">
                <a href="#">
                    Σχετικά με εμάς
                </a>
            </li>
            <li class="nav-link">
                <a href="#">
                    Testimonials
                </a>
            </li>
            <li class="nav-link">
                <a href="#">
                    Νέα
                </a>
            </li>
        </ul>
        <a class="d-none d-lg-flex" href="#">Contact</a>
    </nav>
    <div class="overlay">
        <a href="#" id="burger-btn" class="d-flex d-lg-none" aria-label="mobile nav button">
            @include('365jobs.partials.burger')
        </a>
        <ul class="overlay-list">
            <li class="nav-link">
                <a href="#">
                    Θέσεις Εργασίας
                </a>
            </li>
            <li class="nav-link">
                <a href="#">
                    Υπηρεσίες
                </a>
            </li>
            <li class="nav-link">
                <a href="#">
                    Σχετικά με εμάς
                </a>
            </li>
            <li class="nav-link">
                <a href="#">
                    Testimonials
                </a>
            </li>
            <li class="nav-link">
                <a href="#">
                    Νέα
                </a>
            </li>
            <a href="#">Contact</a>
        </ul>
    </div>
    <div id="overlay-backdrop">
    </div>
</header>

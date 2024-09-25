<div class="container">

    <a class="navbar-brand logo-image d-flex align-items-center text-decoration-none" href="{{ route('home') }}">
        <h4 class="m-0 p-0 text-uppercase" style="color: #174c46;"><img src="{{ asset('images/main_logo.png') }}" alt=""></h4>
    </a>

    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
        <i class="fa fa-bars p-1" style="color: #f99b21;font-size: 24px;"></i>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ms-auto navbar-nav-scroll">
            <li class="nav-item">
                <a style="color: #174c46;" class="nav-link " aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
            <a style="color: #174c46;" class="nav-link " href="{{ route('about_us') }}">About Us</a>

            {{-- active for main menu class="active"
            active for sub menu class="temp_active" --}}

            </li>
            <li class="nav-item dropdown">
                <a style="color: #174c46;" class="nav-link dropdown-toggle"
                    href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdown01" id="servicesDropdown">
                    <li><a style="color: #174c46;" class="dropdown-item " href="{{ route('all_services') }}">All Services</a></li>
                    <li><div class="dropdown-divider"></div></li>
                    <li>
                        <a style="color: #174c46;" class="dropdown-item" href="{{ route('service_1') }}"> Products research and Development </a>
                    </li>
                    <li>
                        <a style="color: #174c46;" class="dropdown-item" href="{{ route('service_2') }}"> Technical Staffing Solution and Training </a>
                    </li>
                    <li>
                        <a style="color: #174c46;" class="dropdown-item" href="{{ route('service_3') }}"> Packaging and Labelling Design consulting </a>
                    </li>
                    <li>
                        <a style="color: #174c46;" class="dropdown-item" href="{{ route('service_4') }}"> Production Planning and Stock management consulting </a>
                    </li>
                    <li>
                        <a style="color: #174c46;" class="dropdown-item" href="{{ route('service_5') }}"> Production Equipment Selection & Raw Materials Consulting </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a style="color: #174c46;" class="nav-link" href="{{ asset('announcements') }}">Announcements</a>
            </li>
        </ul>
        <span class="nav-item">
            <a class="btn-solid-sm" href="{{ route('contact') }}">Contact Us</a>
        </span>
    </div>
</div>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>

function displayServicesOnSmallScreens() {
    if (window.innerWidth <= 768) {
        var currentPage = window.location.pathname.split('/').pop();
        var servicePages = [
            'services.php',
            'service_1.php',
            'service_2.php',
            'service_3.php',
            'service_4.php',
            'service_5.php'
        ];
    }
    // Check if the current page is one of the service pages
    if (servicePages.includes(currentPage)) {
        // Add the 'show' class to the dropdown menu
        var dropdownMenu = document.getElementById('servicesDropdown');
        if (dropdownMenu) {
            dropdownMenu.classList.add('show');
        }
    }
}
window.addEventListener('load', displayServicesOnSmallScreens);


$(document).ready(function() {
    var timeout;

    // Enable Bootstrap dropdowns on hover (for desktop) and on click (for mobile)
    $('.nav-item.dropdown').on('mouseenter focus', function() {
        var dropdownMenu = $(this).find('.dropdown-menu');
        if (!dropdownMenu.is(':visible')) {
            $(this).addClass('show');
            dropdownMenu.stop(true, true).fadeIn(200);
        }
    }).on('mouseleave blur', function() {
        var dropdownMenu = $(this).find('.dropdown-menu');
        if (dropdownMenu.is(':visible')) {
            // Use setTimeout to add a delay before hiding the dropdown
            timeout = setTimeout(function() {
                $('.nav-item.dropdown').removeClass('show');
                dropdownMenu.stop(true, true).fadeOut(200);
            }, 200); // 2000 milliseconds (2 seconds)
        }
    });

    // Prevent dropdown menu from closing when hovering over it
    $('.dropdown-menu').on('mouseenter', function() {
        clearTimeout(timeout); // Clear the timeout to prevent hiding the menu
        $(this).stop(true, true).addClass('show');
        $(this).closest('.nav-item.dropdown').addClass('show');
    }).on('mouseleave', function() {
        var dropdownMenu = $(this);
        timeout = setTimeout(function() {
            dropdownMenu.stop(true, true).removeClass('show');
            dropdownMenu.closest('.nav-item.dropdown').removeClass('show');
        }, 200); // 2000 milliseconds (2 seconds)
    });

});

</script>

<div class="container-xxl py-5 page-header position-relative mb-5">
    <div class="container py-5">
        <h1 class="display-2 text-white animated slideInDown mb-4">
            @if (Request::is('about'))
                About Us
            @elseif (Request::is('classes'))
                Classes
            @elseif (Request::is('facility'))
                Facilities
            @elseif (Request::is('contact'))
                Contact Us
            @elseif (Request::is('team'))
                Teachers
            @elseif (Request::is('callToAction'))
                Become A Teacher
            @elseif (Request::is('appointment'))
                Appointment
            @elseif (Request::is('testimonial'))
                Testimonial
            @elseif (Request::is('error'))
                404 Error
            @else
                Default Title
            @endif
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                @if (Request::is('about'))
                    <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>
                @elseif (Request::is('classes'))
                    <li class="breadcrumb-item text-white active" aria-current="page">Classes</li>
                @elseif (Request::is('facility'))
                    <li class="breadcrumb-item text-white active" aria-current="page">Facilities</li>
                @elseif (Request::is('contact'))
                    <li class="breadcrumb-item text-white active" aria-current="page">Contact Us</li>
                @elseif (Request::is('team'))
                    <li class="breadcrumb-item text-white active" aria-current="page">Teachers</li>
                @elseif (Request::is('callToAction'))
                    <li class="breadcrumb-item text-white active" aria-current="page">Become A Teacher</li>
                @elseif (Request::is('appointment'))
                    <li class="breadcrumb-item text-white active" aria-current="page">Appointment</li>
                @elseif (Request::is('error'))
                    <li class="breadcrumb-item text-white active" aria-current="page">404 Error</li>
                @elseif (Request::is('testimonial'))
                    <li class="breadcrumb-item text-white active" aria-current="page">Testimonial</li>
                @endif
            </ol>
        </nav>
    </div>
</div>

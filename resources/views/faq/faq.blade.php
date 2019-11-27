<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="vendors/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendors/css/owl.carousel.min.css">
    <style>
        @import url(resources/css/styles.css);
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <style>

    .faq__hero_container {
        width: 100%;
        position: relative;
        background:  url({{url('storage/'.$faqbanner->hero_bg)}});
        /* url(../resources/images/faq.jpg); */
        background-position: left left;
        background-size: cover;
        height: 60vh;
    }
    /* hero_bg */
   </style>

    <title>FAQ Tru-Data</title>
</head>


<body>

    <header class="why__header">

        <nav class="why__header_navigation">

            <div class="row why__header_inner_nav">

                    <div class="header__menu_btn header__menu_btn--resp">
                            <img src="resources/images/R.svg" alt="">
                        </div>

                        <?php 

                        $menu = json_decode($menu->menu);
                        
                        
                        ?>
                        
                <div class="why__header_menu_links">

                    <a href="{{url('/')}}" class="why__header_link">
                        {{Ucfirst($menu[0])}}
                    </a>
                    <a href="{{url('/about-us/')}}" class="why__header_link">
                        {{Ucfirst($menu[1])}}
                    </a>
                    <a href="{{url('/why-tru-data/')}}" class="why__header_link">
                        {{Ucfirst($menu[2])}}
                    </a>
                    <a href="{{url('/contact-us/')}}" class="why__header_link">
                        {{Ucfirst($menu[3])}}
                    </a>
                    {{-- <a href="c{{url('/contact-us/')}}" class="why__header_link">
                        Contact
                    </a> --}}

                </div>

                <div class="Why__header__links">

                    {{-- <a href="{{url('')}}" class="header_link">
                        Log In
                    </a>

                    <a href="" class="header_link header_link--bordered">
                        GET STARTED
                    </a> --}}

                </div>

            </div>

        </nav>
       

        <div class="why__hero_text why__hero_text--center">
            <h2 class="why__hero_title why__hero_title--faq">
                    {{$faqbanner->header_one}} ?
            </h2>
            <form action="{{url('/search')}}" method="POST" style="text-align: center;">
                @csrf
                <input type="text" name="search" class="header__input_faq" autocomplete=""
                    placeholder="type key words to find answers" id="">
                <p class="why__hero_sub why__hero_sub--faq">
                        {{$faqbanner->header_two}}
                </p>
            </form>

        </div>

        <div class="faq__hero_container">

            <!-- <img src="resources/images/faq.jpg" alt=""> -->

        </div>



    </header>

    <section class="faq_main_container">

        <div class="faq__row faq__content_container">
       @foreach($faqs as $faq)
            <div class="faq__content_item_container">
                <h2 class="faq__content_item_title">
                    {{-- What is the uniqueness of tru-DATA? --}}
                    {{$faq->title}}
                    <span>
                        <img src="resources/images/Polygon.svg" class="js_handle" alt="">
                    </span>
                </h2>

                <p class="faq__content_item_read">
                    {{$faq->desc}}
                    {{-- The encrypted code (created by a High Definition Barcoding System) is stored on the printed document
                    itself, creating a unique barcode encrypted on the document. This makes fake certificates and
                    documents absolutely impossible to replicate or hack because the data (to be hacked) is on the
                    printed document (e.g Certificates, ID-card, Secure Documents). Unlike the QR Coding technology,
                    that is an Open Source technology (available for everyone to use), the code generated is stored on a
                    physical server that can be hacked in years to come, and cannot guarantee whether the information on
                    the document will still be available after many years.<br>
                    The QR code maximum size limit is about 3mb with a maximum of 7089 characters (not words). However,
                    the tru-DATA’s Barcode has the size limit of up to 516mb with unlimited characters, pictures, Zip
                    Files and even a webpage can be integrated. --}}
                </p>
            </div>
        @endforeach

            {{-- <div class="faq__content_item_container">
                <h2 class="faq__content_item_title">
                    What are the existing problems with document verification? <span>
                        <img src="resources/images/Polygon.svg" class="js_handle" alt="">
                    </span>
                </h2>

                <p class="faq__content_item_read">
                    The encrypted code (created by a High Definition Barcoding System) is stored on the printed document
                    itself, creating a unique barcode encrypted on the document. This makes fake certificates and
                    documents absolutely impossible to replicate or hack because the data (to be hacked) is on the
                    printed document (e.g Certificates, ID-card, Secure Documents). Unlike the QR Coding technology,
                    that is an Open Source technology (available for everyone to use), the code generated is stored on a
                    physical server that can be hacked in years to come, and cannot guarantee whether the information on
                    the document will still be available after many years.<br>
                    The QR code maximum size limit is about 3mb with a maximum of 7089 characters (not words). However,
                    the tru-DATA’s Barcode has the size limit of up to 516mb with unlimited characters, pictures, Zip
                    Files and even a webpage can be integrated.
                </p>
            </div>

            <div class="faq__content_item_container">
                <h2 class="faq__content_item_title">
                    Why tru-DATA?
                    <span>
                        <img src="resources/images/Polygon.svg" class="js_handle" alt="">
                    </span>
                </h2>

                <p class="faq__content_item_read">
                    The encrypted code (created by a High Definition Barcoding System) is stored on the printed document
                    itself, creating a unique barcode encrypted on the document. This makes fake certificates and
                    documents absolutely impossible to replicate or hack because the data (to be hacked) is on the
                    printed document (e.g Certificates, ID-card, Secure Documents). Unlike the QR Coding technology,
                    that is an Open Source technology (available for everyone to use), the code generated is stored on a
                    physical server that can be hacked in years to come, and cannot guarantee whether the information on
                    the document will still be available after many years.<br>
                    The QR code maximum size limit is about 3mb with a maximum of 7089 characters (not words). However,
                    the tru-DATA’s Barcode has the size limit of up to 516mb with unlimited characters, pictures, Zip
                    Files and even a webpage can be integrated.
                </p>
            </div>

            <div class="faq__content_item_container">
                <h2 class="faq__content_item_title">
                    How does tru-DATA work? <span>
                        <img src="resources/images/Polygon.svg" class="js_handle" alt="">
                    </span>
                </h2>

                <p class="faq__content_item_read">
                    The encrypted code (created by a High Definition Barcoding System) is stored on the printed document
                    itself, creating a unique barcode encrypted on the document. This makes fake certificates and
                    documents absolutely impossible to replicate or hack because the data (to be hacked) is on the
                    printed document (e.g Certificates, ID-card, Secure Documents). Unlike the QR Coding technology,
                    that is an Open Source technology (available for everyone to use), the code generated is stored on a
                    physical server that can be hacked in years to come, and cannot guarantee whether the information on
                    the document will still be available after many years.<br>
                    The QR code maximum size limit is about 3mb with a maximum of 7089 characters (not words). However,
                    the tru-DATA’s Barcode has the size limit of up to 516mb with unlimited characters, pictures, Zip
                    Files and even a webpage can be integrated.
                </p>
            </div>

            <div class="faq__content_item_container">
                <h2 class="faq__content_item_title">
                    Is my data secure on tru-DATA?
                    <span>
                        <img src="resources/images/Polygon.svg" class="js_handle" alt="">
                    </span>
                </h2>

                <p class="faq__content_item_read">
                    The encrypted code (created by a High Definition Barcoding System) is stored on the printed document
                    itself, creating a unique barcode encrypted on the document. This makes fake certificates and
                    documents absolutely impossible to replicate or hack because the data (to be hacked) is on the
                    printed document (e.g Certificates, ID-card, Secure Documents). Unlike the QR Coding technology,
                    that is an Open Source technology (available for everyone to use), the code generated is stored on a
                    physical server that can be hacked in years to come, and cannot guarantee whether the information on
                    the document will still be available after many years.<br>
                    The QR code maximum size limit is about 3mb with a maximum of 7089 characters (not words). However,
                    the tru-DATA’s Barcode has the size limit of up to 516mb with unlimited characters, pictures, Zip
                    Files and even a webpage can be integrated.
                </p>
            </div>

            <div class="faq__content_item_container">
                <h2 class="faq__content_item_title">
                    How long does it take to verify my ID?
                    <span>
                        <img src="resources/images/Polygon.svg" class="js_handle" alt="">
                    </span>
                </h2>

                <p class="faq__content_item_read">
                    The encrypted code (created by a High Definition Barcoding System) is stored on the printed document
                    itself, creating a unique barcode encrypted on the document. This makes fake certificates and
                    documents absolutely impossible to replicate or hack because the data (to be hacked) is on the
                    printed document (e.g Certificates, ID-card, Secure Documents). Unlike the QR Coding technology,
                    that is an Open Source technology (available for everyone to use), the code generated is stored on a
                    physical server that can be hacked in years to come, and cannot guarantee whether the information on
                    the document will still be available after many years.<br>
                    The QR code maximum size limit is about 3mb with a maximum of 7089 characters (not words). However,
                    the tru-DATA’s Barcode has the size limit of up to 516mb with unlimited characters, pictures, Zip
                    Files and even a webpage can be integrated.
                </p>
            </div>

            <div class="faq__content_item_container">
                <h2 class="faq__content_item_title">
                    What happens to my ID data after it is verified?
                    <span>
                        <img src="resources/images/Polygon.svg" class="js_handle" alt="">
                    </span>
                </h2>

                <p class="faq__content_item_read">
                    The encrypted code (created by a High Definition Barcoding System) is stored on the printed document
                    itself, creating a unique barcode encrypted on the document. This makes fake certificates and
                    documents absolutely impossible to replicate or hack because the data (to be hacked) is on the
                    printed document (e.g Certificates, ID-card, Secure Documents). Unlike the QR Coding technology,
                    that is an Open Source technology (available for everyone to use), the code generated is stored on a
                    physical server that can be hacked in years to come, and cannot guarantee whether the information on
                    the document will still be available after many years.<br>
                    The QR code maximum size limit is about 3mb with a maximum of 7089 characters (not words). However,
                    the tru-DATA’s Barcode has the size limit of up to 516mb with unlimited characters, pictures, Zip
                    Files and even a webpage can be integrated.
                </p>
            </div>

            <div class="faq__content_item_container">
                <h2 class="faq__content_item_title">
                    Is ID verification Important?
                    <span>
                        <img src="resources/images/Polygon.svg" class="js_handle" alt="">
                    </span>
                </h2>

                <p class="faq__content_item_read">
                    The encrypted code (created by a High Definition Barcoding System) is stored on the printed document
                    itself, creating a unique barcode encrypted on the document. This makes fake certificates and
                    documents absolutely impossible to replicate or hack because the data (to be hacked) is on the
                    printed document (e.g Certificates, ID-card, Secure Documents). Unlike the QR Coding technology,
                    that is an Open Source technology (available for everyone to use), the code generated is stored on a
                    physical server that can be hacked in years to come, and cannot guarantee whether the information on
                    the document will still be available after many years.<br>
                    The QR code maximum size limit is about 3mb with a maximum of 7089 characters (not words). However,
                    the tru-DATA’s Barcode has the size limit of up to 516mb with unlimited characters, pictures, Zip
                    Files and even a webpage can be integrated.
                </p>
            </div>

            <div class="faq__content_item_container">
                <h2 class="faq__content_item_title">
                    Is tru-DATA trusted and secure?
                    <span>
                        <img src="resources/images/Polygon.svg" class="js_handle" alt="">
                    </span>
                </h2>

                <p class="faq__content_item_read">
                    The encrypted code (created by a High Definition Barcoding System) is stored on the printed document
                    itself, creating a unique barcode encrypted on the document. This makes fake certificates and
                    documents absolutely impossible to replicate or hack because the data (to be hacked) is on the
                    printed document (e.g Certificates, ID-card, Secure Documents). Unlike the QR Coding technology,
                    that is an Open Source technology (available for everyone to use), the code generated is stored on a
                    physical server that can be hacked in years to come, and cannot guarantee whether the information on
                    the document will still be available after many years.<br>
                    The QR code maximum size limit is about 3mb with a maximum of 7089 characters (not words). However,
                    the tru-DATA’s Barcode has the size limit of up to 516mb with unlimited characters, pictures, Zip
                    Files and even a webpage can be integrated.
                </p>
            </div>

            <div class="faq__content_item_container">
                <h2 class="faq__content_item_title">
                    What is tru-DATA?
                    <span>
                        <img src="resources/images/Polygon.svg" class="js_handle" alt="">
                    </span>
                </h2>

                <p class="faq__content_item_read">
                    The encrypted code (created by a High Definition Barcoding System) is stored on the printed document
                    itself, creating a unique barcode encrypted on the document. This makes fake certificates and
                    documents absolutely impossible to replicate or hack because the data (to be hacked) is on the
                    printed document (e.g Certificates, ID-card, Secure Documents). Unlike the QR Coding technology,
                    that is an Open Source technology (available for everyone to use), the code generated is stored on a
                    physical server that can be hacked in years to come, and cannot guarantee whether the information on
                    the document will still be available after many years.<br>
                    The QR code maximum size limit is about 3mb with a maximum of 7089 characters (not words). However,
                    the tru-DATA’s Barcode has the size limit of up to 516mb with unlimited characters, pictures, Zip
                    Files and even a webpage can be integrated.
                </p>
            </div> --}}


        </div>

        <div class="faq__row bottom__info_container">

            <p class="faq__info">
                Was this page Helpful?
            </p>

            <div class="faq_feedback_btn">
                <a href="" class="yes_btn_fd">
                    <img src="resources/images/check.svg" alt="">
                    Yes
                </a>
                <a href="" class="yes_btn_fd">
                    <img src="resources/images/multiply.svg" alt="">
                    No
                </a>
            </div>

        </div>

    </section>

    

    <footer class="footer">

 
            @include('partials.footer')

       

    </footer>

    <script src="resources/js/faq.js"></script>

</body>

</html>
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
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico">
    <style>
        @import url(resources/css/styles.css);
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <style>
        .why__hero_container {
            width: 100%;
            position: relative;
            background: linear-gradient(rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)),  url({{url('storage/'.$trudata->hero_bg_img)}}) ;
            background-position: left left;
            background-size: cover;
            height: 50vh;
        }

 /* //url(../resources/images/why__hero_img.jpg) */
   </style>

    <title>Tru-Data</title>
</head>


<body>

    <header class="why__header">

        <nav class="why__header_navigation">

            {{-- <div class="row why__header_inner_nav">

                    <div class="header__menu_btn menu__icon header__menu_btn--resp">
                            <img src="resources/images/R.svg" alt="">
                        </div>

                <div class="why__header_logo_container">
                    <img src="resources/images/icon_logo__white.png" alt="">
                </div>

                <div class="why__header_menu_links">

                    <a href="index.html" class="why__header_link">
                        Home
                    </a>
                    <a href="about.html" class="why__header_link">
                        About tru-DATA
                    </a>
                    <a href="why_tru.html" class="why__header_link why__header_link--active">
                        Why tru-DATA
                    </a>
                    <!-- <a href="blog.html" class="why__header_link">
                        Blog
                    </a> -->
                    <a href="contact.html" class="why__header_link">
                        Contact
                    </a>

                </div>

                <div class="Why__header__links">

                    <!-- <a href="" class="header_link  header_log">
                        Log In
                    </a> -->

                    <a href="" class="header_link header_link--bordered">
                        GET STARTED
                    </a>

                </div>



            </div> --}}
            @include('partials.nav')

        </nav>

        <div class="why__hero_text">
            <h2 class="why__hero_title">
                {{$trudata->hero_bg_text}}
                {{-- When Verification Matters, Trust <span style="white-space: nowrap;text-transform: lowercase">tru-</span><span style="text-transform:uppercase">DATA</span> --}}
            </h2>
            <p class="why__hero_sub">
               {{$trudata->hero_bg_small}}
            </p>
        </div>

        <div class="why__hero_container">

            <!-- <img src="resources/images/why__hero_img.jpg" alt="" srcset=""> -->

        </div>

    </header>


    <section class="why__content">

        <div class="row">

            <div class="page__location">
                <span class="page__name">
                    Home
                </span>
                <span class="page__nav_arrow">
                    >>
                </span>
                <span class="page__current">
                    why tru-data
                </span>
            </div>

            <h2 class="why__content_title">
                why tru-DATA!!
            </h2>

            <div class="why__center_content">

                <div class="why__text_content">
                    <?php 
                 $whyTrudata = json_decode($trudata->why_us);
                

                     ?>
                    <div class="why__text_inner_content">
                        <div class="image_wy_container">
                            <img src="resources/images/mob_tech.svg" alt="">
                        </div>
                        <h2 class="why__inner_text">
                            {{$whyTrudata[0]}}

                        </h2>
                    </div>

                    <div class="why__text_inner_content">
                        <div class="image_wy_container">
                            <img src="resources/images/leader.svg" alt="">
                        </div>

                        <h2 class="why__inner_text">
                            <span style="text-transform: lowercase">
                              
                            {{$whyTrudata[1]}}
                          
                        </h2>
                    </div>

                    <div class="why__text_inner_content">
                        <div class="image_wy_container">
                            <img src="resources/images/licensed_agent.svg" alt="">
                        </div>
                        <h2 class="why__inner_text">
                                {{$whyTrudata[2]}}
                        </h2>
                    </div>

                    <div class="why__text_inner_content">
                        <div class="image_wy_container">
                            <img src="resources/images/licensed_agent.svg" alt="">
                        </div>
                        <h2 class="why__inner_text">
                                {{$whyTrudata[3]}}
                        </h2>
                    </div>

                </div>

                <div class="why__center_img_container">
                    {{-- <img src="resources/images/why__imgside.png" alt=""> --}}
                    <img src="{{url('storage/'.$trudata->why_us_img)}}" alt="">
                </div>

            </div>

        </div>

    </section>

    <section class="why__call_to_action">

        <div class="row why__call_inner_container">
            <h3 class="why__call_title">
                Ready To Start Verify ?
            </h3>

            <a href="contact.html" class="home__btn home__btn--colored home__btn--call">
                REQUEST ACCOUNT
            </a>
        </div>

    </section>

    <section class="info-map">

            <div class="info-map_container">
    
                <div class="info__container">
    
                    <h2 class="info__title">
                        STAY UPDATED WITH US
                    </h2>
    
                    <div class="info__input_container">
                        <input type="" class="info__email_input">
                        <input type="submit" value="SUSCRIBE" class="info__submit">
                    </div>
    
                    <div class="info__main_content_container">
    
                        <h2 class="info__main_content_title">
                            NEED MORE INFORMATION
                        </h2>
    
                        <p class="info__main_content_text">
                            Our associates are on standby and looking forward to sharing more.
                        </p>
    
                        <a href="contact.html" class="home__btn contact__btn">
                            CONTACT US
                        </a>
    
                        <div class="info__contact_container">
    
                            <div class="info__inner_contact_container">
                                <img src="resources/images/phone.svg" alt="" class="info_inner_icon">
                                <span class="info_inner_text">
                                    {{$trudata->contact_number}}
                                </span>
                            </div>
                            <div class="info__inner_contact_container">
                                <img src="resources/images/mail.svg" alt="" class="info_inner_icon">
                                <span class="info_inner_text">
                                    {{$trudata->contact_email}}
                                </span>
                            </div>
    
                        </div>
    
                    </div>
    
                </div>
    
                <div class="map__container">
                    <div class="mapouter">
                                <div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas"
                                        src="{{$trudata->embed_url}}"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Werbung: <a
                                        href="https://www.jetzt-drucken-lassen.de">jetzt-drucken-lassen.de</a></div>
                                <style>
                                    .mapouter {
                                        position: relative;
                                        text-align: right;
                                        height: 100%;
                                        width: 100%;
                                    }
            
                                    .gmap_canvas {
                                        overflow: hidden;
                                        background: none !important;
                                        height: 100%;
                                        width: 100%;
                                    }
                                </style>
                    </div>
                </div>
    
            </div>
    
        </section>
    
        <footer class="footer">
                  @include('partials.footer')
         </footer>
         <?php   
         
           $menu = json_decode($menu->menu);
                 
         ?>
        
            <div class="nav_menu__resp">
                        <nav class="resp_menu">
                            <div class="resp_menu__logo">
                                <img src="resources/images/icon_logo__white.png" alt="">
                            </div>
                            <img src="resources/images/close__btn.svg" class="menu__close" width="18px" alt="">
                            <a href="{{url('/')}}" class="resp_menu__link">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                    id="Capa_1" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 460.298 460.297"
                                    style="enable-background:new 0 0 460.298 460.297;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M230.149,120.939L65.986,256.274c0,0.191-0.048,0.472-0.144,0.855c-0.094,0.38-0.144,0.656-0.144,0.852v137.041    c0,4.948,1.809,9.236,5.426,12.847c3.616,3.613,7.898,5.431,12.847,5.431h109.63V303.664h73.097v109.64h109.629    c4.948,0,9.236-1.814,12.847-5.435c3.617-3.607,5.432-7.898,5.432-12.847V257.981c0-0.76-0.104-1.334-0.288-1.707L230.149,120.939    z"
                                                    data-original="#000000" class="active-path" data-old_color="#F4F4F4"
                                                    fill="#ffffff" />
                                                <path
                                                    d="M457.122,225.438L394.6,173.476V56.989c0-2.663-0.856-4.853-2.574-6.567c-1.704-1.712-3.894-2.568-6.563-2.568h-54.816    c-2.666,0-4.855,0.856-6.57,2.568c-1.711,1.714-2.566,3.905-2.566,6.567v55.673l-69.662-58.245    c-6.084-4.949-13.318-7.423-21.694-7.423c-8.375,0-15.608,2.474-21.698,7.423L3.172,225.438c-1.903,1.52-2.946,3.566-3.14,6.136    c-0.193,2.568,0.472,4.811,1.997,6.713l17.701,21.128c1.525,1.712,3.521,2.759,5.996,3.142c2.285,0.192,4.57-0.476,6.855-1.998    L230.149,95.817l197.57,164.741c1.526,1.328,3.521,1.991,5.996,1.991h0.858c2.471-0.376,4.463-1.43,5.996-3.138l17.703-21.125    c1.522-1.906,2.189-4.145,1.991-6.716C460.068,229.007,459.021,226.961,457.122,225.438z"
                                                    data-original="#000000" class="active-path" data-old_color="#F4F4F4"
                                                    fill="#ffffff" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                               {{Ucfirst($menu[0])}} <img src="resources/images/arrow-point-to-right.svg" height="12px" class="right__arrow_resp" alt="">
                            </a>
                
                            <a href="{{url('/about-us/')}}" class="resp_menu__link">
                                <?xml version="1.0"?>
                                <?xml version="1.0"?>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                viewBox="0 0 502.643 502.643" style="enable-background:new 0 0 502.643 502.643;" xml:space="preserve" width="15px"
                                height="15px">
                                <g>
                                    <g>
                                        <g>
                                            <path d="M251.256,237.591c37.166,0,67.042-30.048,67.042-66.977c0.043-37.037-29.876-66.999-67.042-66.999    c-36.908,0-66.869,29.962-66.869,66.999C184.387,207.587,214.349,237.591,251.256,237.591z"
                                                data-original="#000000" class="active-path" data-old_color="#FFFfFf" fill="#FFFfFf" />
                                            <path d="M305.032,248.506H197.653c-19.198,0-34.923,17.602-34.923,39.194v107.854c0,1.186,0.604,2.243,0.669,3.473h175.823    c0.129-1.229,0.626-2.286,0.626-3.473V287.7C339.912,266.108,324.187,248.506,305.032,248.506z"
                                                data-original="#000000" class="active-path" data-old_color="#FFFfFf" fill="#FFFfFf" />
                                            <path d="M431.588,269.559c29.832,0,53.754-24.008,53.754-53.668s-23.922-53.711-53.754-53.711    c-29.617,0-53.582,24.051-53.582,53.711C377.942,245.53,401.972,269.559,431.588,269.559z"
                                                data-original="#000000" class="active-path" data-old_color="#FFFfFf" fill="#FFFfFf" />
                                            <path d="M474.708,278.317h-86.046c-15.445,0-28.064,14.107-28.064,31.472v86.413c0,0.928,0.453,1.812,0.518,2.826h141.03    c0.065-1.014,0.496-1.898,0.496-2.826v-86.413C502.707,292.424,490.11,278.317,474.708,278.317z"
                                                data-original="#000000" class="active-path" data-old_color="#FFFfFf" fill="#FFFfFf" />
                                            <path d="M71.011,269.559c29.789,0,53.733-24.008,53.733-53.668S100.8,162.18,71.011,162.18c-29.638,0-53.603,24.051-53.603,53.711    S41.373,269.559,71.011,269.559L71.011,269.559z"
                                                data-original="#000000" class="active-path" data-old_color="#FFFfFf" fill="#FFFfFf" />
                                            <path d="M114.109,278.317H27.977C12.576,278.317,0,292.424,0,309.789v86.413c0,0.928,0.453,1.812,0.539,2.826h141.03    c0.065-1.014,0.475-1.898,0.475-2.826v-86.413C142.087,292.424,129.489,278.317,114.109,278.317z"
                                                data-original="#000000" class="active-path" data-old_color="#FFFfFf" fill="#FFFfFf" />
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                
                            {{Ucfirst($menu[1])}} <img src="resources/images/arrow-point-to-right.svg" height="12px" class="right__arrow_resp" alt="">
                
                
                
                            </a>
                
                        
                
                            <a href="{{url('/why-tru-data/')}}" class="resp_menu__link resp_menu__link--active">
                                    <?xml version="1.0"?>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 912.1 912.1" style="enable-background:new 0 0 912.1 912.1;" xml:space="preserve" class=""><g><g>
                                        <g>
                                            <path d="M504.607,574.9c102.8,0,186.4-83.601,186.4-186.4s-83.601-186.4-186.4-186.4c-102.799,0-186.4,83.6-186.4,186.4    S401.808,574.9,504.607,574.9z" data-original="#000000" class="active-path" data-old_color="#ffffff" fill="#ffffff"/>
                                            <g>
                                                <path d="M346.108,611.9c-71.8,0-130,58.199-130,130V887.1c0,13.801,11.2,25,25,25h527c13.8,0,25-11.199,25-25V745.5     c2.2-3.8,4.2-7.9,5.8-12.2l102-270c3.4-9,5.2-18.6,5.2-28.3V132c0-44.2-35.8-80-80-80s-80,35.8-80,80v288.4l-72.3,191.5H346.108z     " data-original="#000000" class="active-path" data-old_color="#ffffff" fill="#ffffff"/>
                                                <path d="M30.808,178.1h59c12.4,0,22.9-9,24.7-21.2c3.4-22.2,10.3-38.6,20.5-48.5c9.5-9.2,22.6-13.7,40.2-13.7     c18.2,0,32.1,5,42.7,15.4c10.6,10.4,15.5,22.9,15.5,39.5c0,7.8-1.8,15-5.5,22c-1.9,3.5-9.3,14.3-37.5,38.2     c-26.2,22.2-43.9,43.1-54.2,63.8c-10.5,21.1-15.6,51.8-15.6,93.6l0,0c0,13.8,11.2,25,25,25h53.3c13.8,0,25-11.2,25-25l0,0     c0-32.3,3.9-45.5,6.2-50.5c1.8-4,9.3-15.8,39-40.4c27.6-22.9,46.2-43.8,56.8-63.8c10.9-20.5,16.4-43,16.4-66.8     c0-42.5-16.101-78-48-105.6c-30.8-26.6-71-40.1-119.5-40.1c-46.2,0-85.3,13.8-116,40.9c-31,27.4-48.7,64.5-52.7,110.2l0,0     C4.708,165.5,16.208,178.1,30.808,178.1z" data-original="#000000" class="active-path" data-old_color="#ffffff" fill="#ffffff"/>
                                                <path d="M198.708,533.6c13.8,0,25-11.199,25-25V455.4c0-13.801-11.2-25-25-25h-53.2c-13.8,0-25,11.199-25,25V508.6     c0,13.801,11.2,25,25,25H198.708z" data-original="#000000" class="active-path" data-old_color="#ffffff" fill="#ffffff"/>
                                            </g>
                                        </g>
                                    </g></g> </svg>
                                    
                
                                    {{Ucfirst($menu[2])}} <img src="resources/images/arrow-point-to-right.svg" height="12px" class="right__arrow_resp" alt="">
                            </a>
            
                            <!-- <a href="blog.html" class="resp_menu__link">
                                   
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.00095 512" width="20px" height="20px" class=""><g><path d="m255 202c11.046875 0 20 8.953125 20 20s-8.953125 20-20 20-20-8.953125-20-20 8.953125-20 20-20zm70 20c0 11.046875 8.953125 20 20 20s20-8.953125 20-20-8.953125-20-20-20-20 8.953125-20 20zm-180 0c0 11.046875 8.953125 20 20 20s20-8.953125 20-20-8.953125-20-20-20-20 8.953125-20 20zm349.414062 187.5625c23.40625 23.40625 23.40625 61.46875.011719 84.863281-11.695312 11.695313-27.0625 17.546875-42.425781 17.546875s-30.730469-5.851562-42.425781-17.546875l-109.789063-109.542969c-2.332031-2.328124-4.050781-5.191406-5.007812-8.347656l-23.914063-78.722656c-2.121093-6.980469-.273437-14.558594 4.820313-19.78125 5.09375-5.21875 12.625-7.25 19.65625-5.304688l80.722656 22.359376c3.324219.921874 6.351562 2.683593 8.792969 5.121093zm-162.824218-49.453125 74.089844 73.925781 28.289062-28.289062-73.652344-73.511719-40.609375-11.25zm134.550781 77.75-3.859375-3.855469-28.285156 28.285156 3.847656 3.835938c7.8125 7.816406 20.5 7.816406 28.296875.015625 7.800781-7.796875 7.800781-20.484375 0-28.28125zm-199.015625-23.40625c-3.695312.160156-7.4375.242187-11.125.242187-32.160156 0-63.121094-5.988281-92.019531-17.796874-4.921875-2.007813-10.445313-1.976563-15.34375.089843l-91.066407 38.441407 30.683594-72.683594c3-7.105469 1.644532-15.308594-3.488281-21.074219-29.285156-32.898437-44.765625-72.261719-44.765625-113.824219 0-103.578125 96.898438-187.847656 216-187.847656s216 84.269531 216 187.847656c0 24.5625-6.03125 49.222656-17.929688 73.289063-4.894531 9.902343-.835937 21.898437 9.066407 26.792969 9.902343 4.894531 21.898437.835937 26.792969-9.066407 14.644531-29.628906 22.070312-60.25 22.070312-91.015625 0-125.636718-114.839844-227.847656-256-227.847656-141.15625 0-256 102.210938-256 227.847656 0 47.421875 16.078125 92.332032 46.636719 130.632813l-45.0625 106.742187c-3.164063 7.496094-1.46875 16.164063 4.285156 21.917969 3.828125 3.828125 8.941406 5.859375 14.144531 5.859375 2.621094 0 5.265625-.515625 7.773438-1.574219l128.929687-54.425781c31.445313 11.746094 64.808594 17.695312 99.292969 17.695312 4.265625 0 8.597656-.097656 12.875-.28125 11.035156-.484374 19.589844-9.820312 19.105469-20.855468-.480469-11.035156-9.835938-19.617188-20.855469-19.105469zm0 0" data-original="#000000" class="active-path" data-old_color="#ffffff" fill="#ffffff"/></g> </svg>
            
                
                                Blog
                            </a> -->
            
                            <a href="{{url('/contact-us/')}}" class="resp_menu__link">
                                    <?xml version="1.0"?>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 511.882 511.882" style="enable-background:new 0 0 511.882 511.882;" xml:space="preserve" width="15px" height="15px" class=""><g><g>
                                        <g>
                                            <g>
                                                <path d="M389.898,430.449l-86.29-57.527c-3.86-2.548-9.03-1.709-11.886,1.929l-25.125,32.302     c-8.143,10.612-22.839,13.641-34.514,7.113l-4.645-2.551c-16.759-9.143-37.623-20.517-79.04-61.934     c-41.417-41.417-52.8-62.281-61.934-79.049l-2.56-4.645c-6.527-11.672-3.498-26.366,7.113-34.505l32.293-25.134     c3.642-2.854,4.482-8.026,1.929-11.886l-57.518-86.299c-2.616-3.916-7.843-5.094-11.886-2.679l-36.105,21.65     c-7.746,4.521-13.443,11.863-15.899,20.489c-11.858,43.182-1.883,118.793,112.96,233.646s190.437,124.846,233.655,112.978     c8.628-2.459,15.969-8.159,20.489-15.909l21.641-36.105C394.997,438.293,393.818,433.063,389.898,430.449z" data-original="#000000" class="active-path" data-old_color="#ffffff" fill="#ffffff"/>
                                                <path d="M510.425,15.156c-0.946-0.946-2.234-1.471-3.572-1.456H123.767c-1.338-0.015-2.626,0.51-3.572,1.456     c-0.946,0.946-1.471,2.234-1.456,3.572V151.83l21.723,32.585c7.835,11.838,5.26,27.708-5.915,36.462l-32.265,25.134     c-3.454,2.62-4.458,7.38-2.359,11.173l2.633,4.8c8.395,15.966,18.635,30.892,30.51,44.471h373.787     c2.743,0.02,4.988-2.176,5.029-4.919V18.728C511.897,17.39,511.372,16.102,510.425,15.156z M250.661,181.434v-0.046     l-93.659,100.343c-3.444,3.694-9.23,3.896-12.923,0.453c-3.694-3.444-3.896-9.23-0.453-12.923l93.659-100.297     c3.444-3.694,9.23-3.896,12.923-0.453C253.902,171.955,254.105,177.741,250.661,181.434z M315.31,174.23     c-6.589,0.03-13.009-2.088-18.286-6.034L144.211,52.319c-4.024-3.065-4.802-8.812-1.737-12.837     c3.065-4.024,8.812-4.802,12.837-1.737l152.75,115.877c4.323,3.141,10.177,3.141,14.501,0L475.356,37.745     c4.024-3.052,9.761-2.264,12.814,1.76s2.264,9.761-1.76,12.814L333.596,168.196C328.319,172.142,321.9,174.26,315.31,174.23z      M487.123,282.18c-1.773,1.656-4.132,2.539-6.557,2.455c-2.425-0.084-4.717-1.128-6.371-2.903l-93.65-100.343     c-3.182-3.729-2.856-9.304,0.737-12.637c3.594-3.334,9.177-3.24,12.657,0.212l93.632,100.297     C491.013,272.952,490.813,278.735,487.123,282.18z" data-original="#000000" class="active-path" data-old_color="#ffffff" fill="#ffffff"/>
                                            </g>
                                        </g>
                                    </g></g> </svg>
                                    
                                    {{Ucfirst($menu[3])}} <img src="resources/images/arrow-point-to-right.svg" height="12px" class="right__arrow_resp" alt="">
                            </a>
                
                   
            
        
                   
    
                   
            
                </nav>
    </div>
    
    <script src="resources/js/nav.js"></script>


</body>


</html>
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
        .terms__hero_container {
            width: 100%;
            position: relative;
            background: url(../resources/images/faq.jpg);
            background-position: left left;
            background-size: cover;
            height: 45vh;
        }


   </style>

    <title>Blog Tru-Data</title>
</head>



<body>

    <header class="why__header">

        <nav class="why__header_navigation">

            <div class="row why__header_inner_nav">

                <div class="header__menu_btn header__menu_btn--resp">
                    <img src="resources/images/R.svg" alt="">
                </div>

                <div class="why__header_menu_links">

                    <a href="{{url('/')}}" class="why__header_link">
                        Home
                    </a>
                    <a href="{{url('/about-us/')}}" class="why__header_link">
                        About
                    </a>
                    <a href="{{url('/why-tru-data/')}}" class="why__header_link">
                        Why tru-Data
                    </a>
                    <!-- <a href="blog.html" class="why__header_link">
                        Blog
                    </a> -->
                    <a href="{{url('/contact-us/')}}" class="why__header_link">
                        Contact
                    </a>

                </div>

                <div class="Why__header__links">

                    <!-- <a href="" class="header_link">
                        Log In
                    </a> -->

                    <a href="" class="header_link header_link--bordered">
                        GET STARTED
                    </a>

                </div>

            </div>

        </nav>

        <div class="why__hero_text why__hero_text--center">
            <h2 class="why__hero_title why__hero_title--terms">
                Terms & Policies
            </h2>
        </div>

        <div class="terms__hero_container">

            <!-- <img src="resources/images/faq.jpg" alt=""> -->

        </div>



    </header>

    <section>



        <div class="terms__main_wrapper">

            <div class="terms__side_nav">

                <div class="terms__side_items">
                    <a href="#terms__service" class="terms__side_items_link terms__side_items_link--active">
                        User Terms of Service
                    </a>
                </div>
                <div class="terms__side_items">
                    <a href="#privacy__policy" class="terms__side_items_link">
                        Privacy Policy
                    </a>
                </div>
                
                <div class="terms__side_items">
                    <a href="#cookies__policy" class="terms__side_items_link">
                        Cookies Policy
                    </a>
                </div>
                <div class="terms__side_items">
                    <a href="#security" class="terms__side_items_link">
                        Security
                    </a>
                </div>
                

            </div>

            <div class="terms__main_content">

                <div id="terms__service">

                    <div class="terms__policy_container">

                        <h2 class="terms__policy_title">
                            tru-data User Terms of Service<span>
                                <img src="resources/images/Ellipse.png" alt="">
                            </span>
                        </h2>

                        <h3 class="terms__policy_sub_text">
                            {{-- EFFECTIVE DATE: April 18, 2019 --}}
                            {{$term[0]->policy_date}}
                        </h3>

                        <p class="terms__policy_text">
                            {{$term[0]->policy}}
                            {{-- Welcome to the tru-data.com website (the "Site"). These terms & conditions ("Terms and
                            Conditions") apply to the Site, and all of its divisions, subsidiaries, and affiliate
                            operated Internet sites which reference these Terms and Conditions. --}}
                        </p>
                        {{-- <p class="terms__policy_text">
                            This website is owned and operated by tru-DATA LIMITED. For the purposes of this website,
                            "seller", "we", "us" and "our" all refer tru-data.com.
                        </p>
                        <p class="terms__policy_text">
                            The Site reserves the right, to change, modify, add, or remove portions of both the Terms
                            and Conditions of Use and the Terms and Conditions of Sale at any time. Changes will be
                            effective when posted on the Site with no other notice provided. Please check these Terms
                            and Conditions regularly for updates. Your continued use of the Site following the posting
                            of changes to these Terms and Conditions constitutes your acceptance of those changes.
                        </p>
                        <p class="terms__policy_text">
                            Kindly review the Terms and Conditions listed below diligently prior to using this website
                            as
                            your use of the website indicates your agreement to be wholly bound by its Terms and
                            Conditions
                            without modification.
                        </p> --}}
                    </div>

                    <div class="terms__main_text_container">
                        <h3 class="terms__p_title">
                            <span class="terms__numbering">
                                1.
                            </span>
                            SITE USAGE<span>
                                <img src="resources/images/Ellipse.png" alt="">
                            </span>
                        <?php $usage = json_decode($term[0]->site_usage); ?>
                        </h3>

                        <p class="terms__policy_text">
                            <span class="number_terms">
                                1.1
                            </span>
                            {{$usage[0]}}
                            {{-- This website may only be used in accordance with these Terms and Conditions of Use. If you
                            do not agree with the Terms and Conditions of Use or do not wish to be bound by them, you
                            agree to desist from using this website. --}}
                        </p>
                        <p class="terms__policy_text">
                            <span class="number_terms">
                                1.2
                            </span>
                            {{-- We grant you a non-transferable, revocable and non-exclusive license to use this
                            Site, in accordance with the Terms and Conditions of Use, for such things as: shopping for
                            personal items sold on the site, gathering prior information regarding our products and
                            services and making purchases. Commercial use or use on behalf of any third party is
                            prohibited, except as explicitly permitted by us in advance. These Terms and Conditions of
                            Use specifically prohibit actions such as: accessing our servers or internal computer
                            systems, interfering in any way with the functionality of this website, gathering or
                            changing any underlying software code, violating any intellectual property rights. This list
                            is non-exhaustive and related actions are also severely outlawed --}}
                            {{$usage[1]}}
                        </p>
                        <p class="terms__policy_text">
                            <span class="number_terms">
                                1.3
                            </span>
                            {{-- Any breach of these Terms and Conditions of Use shall result in the immediate revocation of
                            the license granted in this paragraph without prior notice to you. Should we determine at
                            our sole discretion that you are in breach of any of these conditions, we reserve the right
                            to deny you access to this website and its contents and do so without prejudice to any
                            available remedies at law or otherwise. --}}
                            {{$usage[2]}}
                        </p>
                        <p class="terms__policy_text">
                            <span class="number_terms">
                                1.4
                            </span>
                            {{-- Certain services and related features that may be made available on the Site may
                            require registration or subscription. Should you choose to register or subscribe for any
                            such services or related features; you agree to provide accurate and current information
                            about yourself, and to promptly update such information if there are any changes. Every user
                            of the Site is solely responsible for keeping passwords and other account identifiers safe
                            and secure. --}}
                            {{$usage[3]}}
                        </p>
                        <p class="terms__policy_text">
                            <span class="number_terms">
                                1.5
                            </span>
                            {{-- The account owner is entirely responsible for all activities that occur under such
                            password or account. Furthermore, you must notify us of any unauthorized use of your
                            password or account. The Site shall not be responsible or liable, directly or indirectly, in
                            any way for any loss or damage of any kind incurred as a result of, or in connection with,
                            your failure to comply with this section. Our website uses cookies; by using our website or
                            agreeing to these terms and
                            conditions,
                            you consent to our use of cookies in accordance with the terms of our [privacy and cookies
                            policy]. --}}
                            {{$usage[4]}}
                        </p>
                        <p class="terms__policy_text">
                            <span class="number_terms">
                                1.6
                            </span>
                            {{-- During the registration process you agree to receive promotional emails from the
                            Site. You can subsequently opt out of receiving such promotional e-mails by clicking on the
                            link at the bottom of any promotional email. --}}
                            {{$usage[5]}}
                        </p>




                    </div>

                </div>

                <div id="privacy__policy">

                    <div class="terms__policy_container">

                        <h2 class="terms__policy_title">
                            Privacy Policy<span>
                                <img src="resources/images/Ellipse.png" alt="">
                            </span>
                        </h2>

                        <p class="terms__policy_text">
                            <span>
                                {{-- <strong>IMPORTANT: PLEASE READ THESE TERMS CAREFULLY.</strong> These Terms of Use, along
                                with any Terms and
                                Conditions appearing on the website, any Terms of Offer appearing on the website, along
                                with
                                any posted rules or instructions, constitute the entire agreement between you and us
                                regarding your use of the website and related information, data and services
                                (collectively,
                                the "Services" or "Service").<strong> YOUR USE OF THE SERVICE CONSTITUTES ACCEPTANCE OF
                                    THESE TERMS
                                    OF USE, INCLUDING THE PRIVACY POLICY.</strong> --}}
                                <p class="terms__policy_text">
                                    {{$term[0]->privacy_desc}}
                                    {{-- tru-DATA is a subsidiary of TrippleGee & CO. PLC, registered as tru-DATA LIMITED in
                                    Nigeria.
                                    TrippleGee & CO. PLC, is an indigenous security print and label services provider.
                                    The
                                    tru-DATA
                                    technology, the web, desktop and mobile applications are proprietary software of
                                    TrippleGee
                                    & CO.
                                    PLC. --}}
                                </p>
                                {{-- <p class="terms__policy_text">
                                    tru-DATA LIMITED (“tru-DATA”) respects the privacy of our users. This Privacy Policy
                                    (“Policy”) describes our privacy practices concerning information collected in
                                    connection
                                    with verification, and related online services. A separate policy available here,
                                    describes
                                    our privacy practices in connection with our online website, located at
                                    www.tru-data.com.
                                    tru-DATA makes the Services available to third parties. tru-DATA collects, uses, and
                                    discloses individual users’ information only as directed by these third parties and,
                                    accordingly, tru-DATA is a mere processor of user information with respect to the
                                    Services
                                    and not a controller. Further, some features of the Services may be disabled or
                                    altered by
                                    the data controller, or the controller may require tru-DATA to collect, use,
                                    disclose, or
                                    otherwise process data in ways that differ from those described below. Thus, to
                                    fully
                                    understand how your information will be handled when you use the Services, you must
                                    review
                                    not just this Policy, but also the privacy policy of the third party with whom you
                                    are
                                    dealing directly (the “Third-Party Data Controller”).
                                </p>
                                <p class="terms__policy_text">
                                    Notwithstanding the above, tru-DATA may process certain individual users’
                                    information in anonymized form for its own purposes.
                                </p>
                                <p class="terms__policy_text">
                                    tru-DATA is headquartered in Lagos Nigeria, Yaba. 62, Old Yaba Road, Adekunle
                                    Bus-Stop.
                                </p> --}}
                            </span>


                    </div>

                    <div class="terms__main_text_container">
                        <h3 class="terms__p_title">
                            <span class="terms__numbering">
                                1.
                            </span>
                            <?php 

                             $policyTitle =json_decode($term[0]->privacy_title);
                             $policyDesc = json_decode($term[0]->privacy_policy_title);
                           
                            ?>
                            {{-- WHAT PERSONAL AND OTHER INFORMATION tru-DATA COLLECTS ABOUT YOU --}}
                          {{$policyTitle[0]}}
                            <span>
                                <img src="resources/images/Ellipse.png" alt="">
                            </span>

                        </h3>
               

                        <p class="terms__policy_text">
                            <span class="number_terms">
                                1.1
                            </span>
                            {{$policyDesc[0]}}
                            {{-- tru-DATA collects “personal information” about users of the Services. “Personal information”
                            is information such as a name, email address, or identification card image, which refers to
                            an identified or identifiable person. tru-DATA processes personal information on behalf of
                            the Third-Party Data Controller. For its own purposes, tru-DATA processes only anonymized
                            information. “Anonymized information” is information which does not relate to an identified
                            or identifiable person or is rendered anonymous in such a manner that the person is no
                            longer identifiable.  --}}
                        </p>
                        <p class="terms__policy_text">
                            <span class="number_terms">
                                1.2
                            </span>
                            <span>
                                {{$policyDesc[1]}}
                                {{-- <strong>Personal Information.</strong> tru-DATA collects a wide range of personal
                                information through the
                                Services. This information varies depending on the tru-DATA application and the
                                Third-Party Data Controller in question, but may include such information as name,
                                physical address, email address, telephone number, driver’s license number, state or
                                national ID card number, passport number, other ID card number, credit or debit card
                                number, CVV, expiration date, and/or date of birth. In some cases, tru-DATA may collect
                                a visually scanned or photographed image of your face and/or your identification card,
                                driver’s license, passport, utility bill, bank account statement, insurance card, or
                                credit/debit card. --}}
                            </span>
                            <span>
                            </span>
                        </p>
                        <p class="terms__policy_text">
                            <span class="number_terms">
                                1.3
                            </span>
                            <span>
                                {{$policyDesc[2]}}
                                {{-- <strong>Cookies and Other Tracking Data.</strong> When
                                you use the Services, we automatically receive and record certain information from your
                                computer (or other device) and/or your web browser. This may include such information as
                                the third-party website or application into which the Services are integrated, the date
                                and time that you use the Services, your IP address and domain name, your software and
                                hardware attributes (including operating system, device model, and hashed device
                                fingerprint information), and your general geographic location (e.g., your city, state,
                                or metropolitan region). We will process such data only as instructed by the Third-Party
                                Data Controller. --}}
                            </span>
                        </p>
                        <p class="terms__policy_text">
                            <span class="number_terms">
                                1.4
                            </span>
                            <span>
                                {{$policyDesc[3]}}
                                {{-- At the direction of the Third-Party Data Controller, tru-DATA also might obtain
                                information about you from other third parties, such as fraud-prevention services. --}}
                            </span>
                        </p>

                    </div>



                </div>

                <div id="cookies__policy">

                    <div class="terms__policy_container">

                        <h2 class="terms__policy_title">
                            Cookies Policy<span>
                                <img src="resources/images/Ellipse.png" alt="">
                            </span>
                        </h2>

                        <p class="terms__policy_text">
                            <span>
                                {{$term[0]->cookies}}
                                {{-- <strong>What are cookies?</strong> Cookies are small files that are stored on your
                                computer or other
                                device by your web browser. A cookie allows tru-DATA to recognize whether you have used
                                the Services before and may store user preferences and other information. --}}
                            </span></p>
                        {{-- <p class="terms__policy_text">
                            <span>
                                <strong>How are cookies used?</strong> For example, cookies can be used to collect
                                information about your
                                use
                                of the Services during your current session and over time, your computer or other
                                device’s
                                operating system and browser type, your Internet service provider, your domain name and
                                IP
                                address, and your general geographic location. We process personal information generated
                                by
                                cookies only as instructed by the Third-Party Data Controller.
                            </span>
                        </p>
                        <p class="terms__policy_text">
                            <span>
                                “Session cookies” are temporary bits of information which are deleted when you exit your
                                web browser. Session cookies are typically used to improve navigation and to collect web
                                statistics.
                            </span>
                        </p>
                        <p class="terms__policy_text">
                            <span>
                                “Persistent cookies” are more permanent bits of information that are stored and remain
                                on your computer until they are deleted by you. This type of cookie stores information
                                on your computer for a number of purposes; such as saving your passwords. Persistent
                                cookies delete themselves after a certain period of time but are renewed each time you
                                visit the website.
                            </span>
                        </p>
                        <p class="terms__policy_text">
                            <span>
                                <strong>How do you avoid cookies?</strong> If you are concerned about having cookies on
                                your computer or
                                device, you can set your browser to refuse all cookies or to indicate when a cookie is
                                being set, allowing you to decide whether to accept it. You can also delete cookies from
                                your computer. However, if you choose to block or delete cookies, certain features of
                                the Services may not operate correctly.
                            </span>
                        </p> --}}

                    </div>
                    <?php
                   $cookieHeader = json_decode($term[0]->cookies_title);
                   $cookiesPolicies = json_decode($term[0]->cookies_policies);

                    ?>

                    <div class="terms__main_text_container">
                        <h3 class="terms__p_title">
                            <span class="terms__numbering">
                                1.
                            </span>
                            {{$cookieHeader[0]}}
                            {{-- HOW tru-DATA USES THE PERSONAL AND ANONYMIZED INFORMATION THAT WE COLLECT. --}}
                            <span>
                                <img src="resources/images/Ellipse.png" alt="">
                            </span>

                        </h3>

                        <p class="terms__policy_text">
                            <span class="number_terms">
                                1.1
                            </span>
                            <span>
                                {{-- In general, tru-DATA uses the personal and anonymized information that we collect in
                                connection with the Services as discussed in this section of the Policy. --}}
                                {{$cookiesPolicies[0]}}
                            </span>
                        </p>
                        <p class="terms__policy_text">
                            <span class="number_terms">
                                1.2
                            </span><span>
                                {{$cookiesPolicies[1]}}
                                {{-- Personal information is used by tru-DATA only as directed by the Third-Party Data
                                Controller that integrates the Services into its website, application, or other online
                                service. Subject to the privacy policy of the Third-Party Data Controller, we use your
                                personal information as follows on behalf of the Third-Party Data Controller: --}}

                                {{-- <br><br>
                                tru-DATA may use your personal information to provide the Services. For example, we
                                might use your credit card information or ID card information to populate an online
                                form, or to verify your identity in connection with your use of another online service.
                                We also may use your personal information to fulfill the terms of any agreement between
                                us and the Third-Party Data Controller; to complete a transaction that you initiate; to
                                deliver confirmations, account information, notifications, and similar operational
                                communications; and to comply with legal and/or regulatory requirements.
                                <br><br>
                                Anonymized information that we collect in connection with the Services is used by
                                tru-DATA for its own purposes to perform analytics and research concerning the Services. --}}
                            </span>

                        </p>



                    </div>

                </div>

                <div id="security">

                    <div class="terms__policy_container">

                        <h2 class="terms__policy_title">
                            Security<span>
                                <img src="resources/images/Ellipse.png" alt="">
                            </span>
                        </h2>


                        <p class="terms__policy_text">
                            {{$term[0]->security}}
                            {{-- tru-DATA uses commercially reasonable physical, electronic, and procedural safeguards to
                            protect your personal information against loss or unauthorized access, use, modification, or
                            deletion. Among other things, tru-DATA encrypts sensitive information both in transit and at
                            rest. tru-DATA is PCI Level 1 compliant and regularly conducts security audits,
                            vulnerability scans, and penetration tests to ensure compliance with security best practices
                            and standards. However, no security program is foolproof, and thus we cannot guarantee the
                            absolute security of your personal or other information. Moreover, we cannot guarantee the
                            safety of your information when in the possession of other parties, such as the Third-Party
                            Data Controller. --}}
                        </p>

                    </div>
                    <?php 
                      $securityTitle = json_decode($term[0]->security_title);
                      $securityDesc  = json_decode($term[0]->security_desc);
                    ?>

                    <div class="terms__main_text_container">
                        <h3 class="terms__p_title">
                            <span class="terms__numbering">
                                1.
                            </span>
                            {{$securityTitle[0]}}
                            {{-- Changes to this POLICY --}}
                            <span>
                                <img src="resources/images/Ellipse.png" alt="">
                            </span>

                        </h3>

                        <p class="terms__policy_text">
                            <span class="number_terms">
                                1.1
                            </span>
                            {{$securityDesc[0]}}
                            {{-- Technology and the Internet are rapidly changing. tru-DATA therefore is likely to make changes to the Services in the future and as a consequence will need to revise this Policy to reflect those changes.  When we revise the Policy, tru-DATA  will post the new Policy on the tru-DATA website’s home page (www.tru-data.com), so you should review that page periodically.  If we make a material change to the Policy, you will be provided with appropriate notice.  If we maintain your email address, we also may email you a copy of the revised Policy at your most recently provided email address.  It is therefore important that you update your email address if it changes. --}}
                                                    </p>
                
                    </div>

                </div>


               



            </div>

        </div>

    </section>

    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/terms.js"></script>
</body>



</html>
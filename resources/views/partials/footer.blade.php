<div class="footer__container row">
    
                <div class="footer__item_flex_container">
    
                    <div class="footer__inner_item">
                        <div class="img__logo_footer_container">
                            <img src="resources/images/tru-DATA.fw.png" alt="">
                        </div>
    
                        <span class="footer__text">
                            {{-- <span style="text-transform: lowercase">tru-</span><span style="text-transform: uppercase">DATA</span> is Nigeria's first Automated True Identity Verification Platform that ensures that
                            encrypted documents can NEVER be altered in a lifetime and does not require Internet Data on the
                            mobile application to verify the encrypted document. --}}
                            {{$footer[0]->trudata}}
                        </span>
    
    
    
                    </div>
    
                    <div class="footer__inner_item">
    
                        <div class="img__logo_footer_container">
                            <h3 class="footer__inner_item_title">
                                COMPANY
                            </h3>
                        </div>
                      <?php $company = json_decode($footer[0]->company); ?>
                        <a href="{{ url('/about-us/') }}" class="footer__text">
                            {{-- About --}}
                            {{$company[0]}}
                        </a>
                        <a href="{{ url('/why-tru-data/') }}" class="footer__text">
                            {{$company[1]}}
                            {{-- Why <span style="text-transform: lowercase">tru-</span><span style="text-transform: uppercase">DATA</span> --}}
                        </a>
                        <a href="" class="footer__text">
                            {{-- How It Works --}}
                            {{$company[2]}}
                        </a>
                        <a href="{{url('/blog')}}" class="footer__text">
                            {{-- Blog --}}
                            {{$company[3]}}
                        </a>
                        <a href="{{url('/faq/')}}" class="footer__text">
                            {{-- FAQS --}}
                            {{$company[4]}}
                        </a>
    
                    </div>
    
                    <div class="footer__inner_item">
    
                        <div class="img__logo_footer_container">
                            <h3 class="footer__inner_item_title">
                                PRODUCTS
                            </h3>
                        </div>
                 <?php $product =  json_decode($footer[0]->product); ?>
                        <a href="" class="footer__text">
                            {{-- Features --}}
                            {{$product[0]}}
                        </a>
                        <a href="" class="footer__text">
                            {{-- Desktop App --}}
                            {{$product[1]}}
                        </a>
                        <a href="" class="footer__text">
                            {{-- Mobile App --}}
                            {{$product[2]}}
                        </a>
    
                    </div>
    
                    <div class="footer__inner_item">
                        <div class="img__logo_footer_container">
                            <h3 class="footer__inner_item_title">
                                LEGAL
                            </h3>
                        </div>
                      
                        <?php $legal =  json_decode($footer[0]->legal);?>

                        <a href="{{url('/terms')}}" class="footer__text">
                            {{-- Terms of Service --}}
                            {{$legal[0]}}
                        </a>
                        <a href="{{url('/terms')}}" class="footer__text">
                            {{-- Privacy Policy --}}
                            {{$legal[1]}}
                        </a>
                        <a href="" class="footer__text">
                            {{-- Mobile App --}}
                            {{$legal[2]}}
                        </a>
    
                    </div>
    
                    <div class="footer__inner_item">
    
                        <div class="img__logo_footer_container">
                            <h3 class="footer__inner_item_title footer__inner_item_title--centered">
                                CONNECT WITH US
                            </h3>
                        </div>
                        <?php 
                         
                         $socialDecode = json_decode($socials[0]->name);
                        //  dd($socialDecode[0]);

                         ?>
    
                        <div class="footer__social_container">
                            <a href="https://www.facebook.com/.{{$socialDecode[0]}}" target="_blank" class="footer__social_link_img">
                                <img src="resources/images/facebook__footer.svg" alt="" class="footer__social_img">
                            </a>
                            <a href="https://twitter.com/{{$socialDecode[3]}}" class="footer__social_link_img" target="_blank">
                                <img src="resources/images/twitter_footer.svg" alt="" class="footer__social_img">
                            </a>
                            <a href="" class="footer__social_link_img">
                                <img src="resources/images/inst__footer.svg" alt="" class="footer__social_img">
                            </a>
                        <a href="https://www.linkedin.com/company/{{$socialDecode[2]}}" target="_blank"
                                class="footer__social_link_img">
                                <img src="resources/images/linkedin__footer.svg" alt="" class="footer__social_img">
                            </a>
                            <a href="" class="footer__social_link_img" target="_blank">
                                <img src="resources/images/youtube__footer.svg" alt="" class="footer__social_img">
                            </a>
                        </div>
    
                        <span class="footer__text footer__text--center">
                            <span style="text-transform: lowercase">{{$footer[0]->connectEmail}}</span><br>
                            {{-- +234 8055190713 --}}
                            {{$footer[0]->connectAddress}}
                        </span>
    
                    </div>
    
                </div>
    
                <div class="footer__misc_content">
    
                    <span class="footer__text footer__text--center">
                        {{$footer[0]->welcome}}
                        {{-- you are always welcome to us at our office!. --}}
                        <br><br>
                        {{$footer[0]->coy_address}}
                        {{-- 62, old yaba road , lagos Nigeria. --}}
                    </span>
    
                </div>
    
                <div class="footer__under_content">
    
                    <span class="footer__text footer__text--small">
                        &copy; {{ now()->year }}  <span style="text-transform: lowercase">tru-</span><span style="text-transform: uppercase">DATA</span> | Disclosures <br><br>
                        {{$footer[0]->copyright}}
    
                        {{-- <span style="text-transform: lowercase">tru-</span><span style="text-transform: uppercase">DATA</span> is a property of TrippleGee & Co. PLC. , a company duly registered with the Corporate
                        Affairs Commission, Nigeria with RC Number: 1000002. <span style="text-transform: lowercase">tru-</span><span style="text-transform: uppercase">DATA</span> is the platform implemented by
                        TrippleGee & co. PLC. for its members. <span style="text-transform: lowercase">tru-</span><span style="text-transform: uppercase">DATA</span>, and CCooperative Multipurpose Society Limited are
                        legal entities in Nigeria. <br>
                        Our investment professionals invest savers funds in financial instruments and manage the investments
                        to ensure optimum return. To facilitate security of savers funds, assets are held by Meristem
                        Trustees, a company registered with the Security and Exchange Commission (SEC) on behalf of savers.
                        These assets are marked to market periodically to ensure savers' investments are protected. --}}
    
                    </span>
    
                </div>
    
            </div>
<div class="row why__header_inner_nav">
        <?php 

        $menu = json_decode($menu->menu);
        
        
        ?>
                        <div class="header__menu_btn menu__icon header__menu_btn--resp">
                                <img src="resources/images/R.svg" alt="">
                            </div>
    
                    <div class="why__header_logo_container">
                        <img src="resources/images/icon_logo__white.png" alt="">
                    </div>
    
                    <div class="why__header_menu_links">
    
                        <a href="{{url('/')}}" class="why__header_link">
                            {{-- Home --}}
                            {{Ucfirst($menu[0])}}
                        </a>
                        <a href="{{url('/about-us/')}}" class="why__header_link">
                            {{Ucfirst($menu[1])}}
                            {{-- About tru-DATA --}}
                        </a>
                        <a href="{{url('/why-tru-data/')}}" class="why__header_link">
                            {{Ucfirst($menu[2])}}
                            {{-- Why tru-DATA --}}
                        </a>
                        <!-- <a href="blog.html" class="why__header_link">
                            Blog
                        </a> -->
                        <a href="{{url('/contact-us/')}}" class="why__header_link  why__header_link--active">
                            {{Ucfirst($menu[3])}}
                            {{-- Contact --}}
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
    
    
    
                </div>
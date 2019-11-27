<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Dashboard
    </title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- build:css /assets/styles/styles.css -->
    <link rel="stylesheet" href="../assets/styles/styles-a4b2e688ed.css">
    <!-- endbuild -->

    <!-- build:js /assets/scripts/Vendor.js -->
    <script src="../assets/scripts/Vendor-57062a8ee8.js"></script>
    <!-- endbuild -->
    <style>
            .pagination>.active>a,
  .pagination>.active>a:focus,
  .pagination>.active>a:hover,
  .pagination>.active>span,
  .pagination>.active>span:focus,
  .pagination>.active>span:hover {
      z-index: 2;
      color: grey;
      cursor: default;
      background-color: transparent;
      border-color: grey;
  }
  
  
      </style>
</head>

<body>



    <div class="main__section">

        <div class="side-navigation">

            <div class="side-navigation__logo_container">
                <img src="../assets/images/tru-DATA.png" alt="">
            </div>

            <div class="side-navigation__link_container">

                <div class="side-navigation__inner_link_container">
                    <a href="{{url('/admin')}}" class="side-navigation__link">
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M17.2352 5.2934C16.9797 5.01536 16.5787 4.97437 16.28 5.19585C15.155 6.03049 9.51173 10.2274 8.90524 10.8875C8.02573 11.8447 8.02573 13.4022 8.90524 14.3595C9.34499 14.838 9.92268 15.0774 10.5003 15.0774C11.0779 15.0774 11.6556 14.838 12.0954 14.3595C12.7018 13.6994 16.558 7.55752 17.3249 6.33303C17.5283 6.00802 17.4907 5.57151 17.2352 5.2934ZM11.0319 13.2021C10.7388 13.5212 10.2618 13.5212 9.96863 13.2021C9.67546 12.8831 9.67542 12.3641 9.96848 12.045C10.2041 11.7915 11.8063 10.5479 13.7776 9.05657C12.4074 11.202 11.2647 12.9457 11.0319 13.2021Z"
                                    fill="#FFFFFF" />
                                <path
                                    d="M4.3432 16.4296L3.41497 16.9224C2.73577 15.6031 2.37955 14.1307 2.37955 12.6233C2.37955 11.5189 2.56667 10.4611 2.90815 9.48563L3.97176 10.0409C4.07665 10.0956 4.18737 10.1216 4.29644 10.1216C4.57664 10.1216 4.84563 9.95032 4.97492 9.65695C5.15448 9.24945 4.99658 8.76061 4.62213 8.56515L3.57201 8.01694C4.87721 5.70019 7.13546 4.08498 9.74831 3.8227V5.05353C9.74831 5.50551 10.0849 5.87188 10.5002 5.87188C10.9155 5.87188 11.2521 5.50551 11.2521 5.05353V3.82208C12.148 3.91083 13.0148 4.15912 13.8376 4.56338C14.216 4.74935 14.6614 4.56608 14.8323 4.15425C15.0032 3.74229 14.8348 3.25763 14.4563 3.07166C13.2094 2.45908 11.8784 2.14844 10.5002 2.14844C7.9294 2.14844 5.5125 3.23799 3.69464 5.21643C1.87686 7.1949 0.875732 9.82536 0.875732 12.6233C0.875732 14.6909 1.43959 16.7017 2.50636 18.4383C2.65005 18.6721 2.88762 18.8019 3.13191 18.8019C3.24297 18.8019 3.35546 18.7751 3.46114 18.719L5.00256 17.9006C5.3758 17.7025 5.53077 17.2126 5.3487 16.8063C5.16662 16.4001 4.71645 16.2315 4.3432 16.4296Z"
                                    fill="#FFFFFF" />
                                <path
                                    d="M19.2764 8.31783C19.1056 7.90591 18.6603 7.7226 18.2817 7.90865C17.9032 8.09462 17.7349 8.57929 17.9058 8.99121C18.3803 10.1352 18.6209 11.3573 18.6209 12.6235C18.6209 14.1331 18.2635 15.608 17.5823 16.9287L16.6132 16.4265C16.2383 16.2322 15.7896 16.4054 15.6111 16.8135C15.4325 17.2215 15.5917 17.7099 15.9667 17.9042L17.5457 18.7226C17.6496 18.7764 17.7597 18.8021 17.8686 18.8021C18.1129 18.8021 18.3505 18.6722 18.494 18.4385C19.5608 16.7019 20.1247 14.691 20.1247 12.6235C20.1247 11.1235 19.8393 9.67485 19.2764 8.31783Z"
                                    fill="#FFFFFF" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="19.2489" height="20.9497" fill="white"
                                        transform="translate(0.875732)" />
                                </clipPath>
                            </defs>
                        </svg>
                        Dashboard
                    </a>
                </div>

                <div class="side-navigation__inner_link_container">
                    <a href="{{url('/')}}" class="side-navigation__link">
                        <svg width="21" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17.0415 3.5722H3.00724C3.00724 3.5722 1.94403 3.40412 1.94403 2.89987L17.2541 1.72328V0.714782C17.2541 0.714782 17.0655 -0.205645 15.3404 0.0424469L1.73139 1.89137C1.73139 1.89137 0.0302734 2.05945 0.0302734 3.74029V13.3211C0.0302734 14.2492 0.982263 15.0019 2.15667 15.0019H17.0415C18.2159 15.0019 19.1679 14.2492 19.1679 13.3211V5.25304C19.1679 4.32488 18.2159 3.5722 17.0415 3.5722ZM15.7656 10.4636C14.9436 10.4636 14.2772 9.93686 14.2772 9.28705C14.2772 8.63724 14.9436 8.11046 15.7656 8.11046C16.5877 8.11046 17.2541 8.63724 17.2541 9.28705C17.2541 9.93686 16.5877 10.4636 15.7656 10.4636Z"
                                    fill="#FFFFFF" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="19.1376" height="15.0019" fill="white"
                                        transform="translate(0.0302734)" />
                                </clipPath>
                            </defs>
                        </svg>
                        Back To Main Site
                    </a>
                </div>

            </div>

        </div>

        <div class="main-content">

            <header class="header">

                <div class="header__container">

                    <p class="header__custom-msg">
                     Hi, {{Auth::user()->name}}
                    </p>

                    <div class="header__custom_inner-right_container">

                        <div class="header__custom-avatar">
                            <img src="../assets/images/user.svg" class="header__user-img" alt="user's photo">
                        </div>

                        <div class="header__notification">
                            <img src="../assets/images/notification.svg" class="icon icon--notification"
                                height="20" alt="">
                            <sup class="header__notification_label">
                                1
                            </sup>
                        </div>

                        <div class="header__log_container">

                            <p class="header__log-text">
                                {{-- LOG OUT
                                <span class="icon icon--logout">
                                    <img src="../assets/images/log_out.svg" height="20" alt="">
                                </span> --}}
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                                  </a>
                                  <span class="icon icon--logout">
                                        <img src="../assets/images/log_out.svg" height="20" alt="">
                                    </span>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                   
                                </form>
                            </p>

                        </div>

                    </div>

                </div>



            </header>

            <div class="main-content__container">

                <div class="manage-account">

                

                    <div class="manage-account__tool-bar">
                   
                        <a href="{{url('/leadership-create/')}}" class="btn manage-account__btn btn--create btn--medium">
                            <img src="../assets/images/plus_.svg" alt="">
                            &nbsp;&nbsp;Create New Leadership
                        </a>
                    
                    </div>

                 

            

                    <div class="manage-account__body">
                            @include('flash::message')
                        <div class="manage-account-user-wrapper manage-account-user-wrapper--view">

                            <div class="manage-account_user-list-container">
                                
                      <div class="form__header--list1">
                            <p class="">
                                <img src="../resource/images/left-arrow.svg" alt="" class="back__arrow"><span class=""><a href="{{ url()->previous() }}">Back</a></span>
                            </p>
                         
                        </div>
                        <br><br>

                                <div class="manage-account_user-list-item-header">

                                    <h3
                                        class="manage-account_user-list-title main-content__text main-content__text--bold">
                                        STATUS
                                    </h3>
                                    <h3
                                        class="manage-account_user-list-title main-content__text main-content__text--bold">
                                       Name
                                    </h3>
                                 
                                    <h3
                                        class="manage-account_user-list-title main-content__text main-content__text--bold">
                                        Role
                                    </h3>
                                    <h3
                                        class="manage-account_user-list-title main-content__text main-content__text--bold">
                                        Actions
                                    </h3>

                                </div>
           @foreach($leaders as $leader)
                               <div class="manage-account_user-list-item">

                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <span class="manage-account_status-on"></span>
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                       {{$leader->name}}
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                       {{$leader->title}}
                                    </p>
                               
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        {{-- <a href="user-info.html" class="manage-account_user-view">
                                            <img src="../assets/images/eye.svg" class="manage-account_eye-icon"
                                                alt="">
                                        </a> --}}
                                    &nbsp;&nbsp;&nbsp; <a href="{{url('/leadership-edit/'.$leader->id)}}" class="btn btn--danger">
                                            EDIT
                                        </a>
                                        @if($leader->status == 0)
                                        &nbsp;&nbsp;&nbsp; <a href="{{url('/approve/leadership/'.$leader->id)}}" class="manage-account_user-del btn btn--approve">
                                          APPROVE
                                        </a>
                                        @else
                                        &nbsp;&nbsp;&nbsp; <a href="{{url('/suspend/leadership/'.$leader->id)}}" class="manage-account_user-del btn btn--suspend">
                                                REMOVE
                                       </a>
                                    @endif
                                    </p>

                                </div>
                @endforeach

                         

                            </div>


                            <div class="page__pagination">

                                <div class="page__pagination_links">
                                    {{$leaders->links()}}
                                    {{-- <a href="" class="page__pagination_link">Previous</a>
                                    <a href="" class="page__pagination_link page__pagination_link--active">1</a>
                                    <a href="" class="page__pagination_link">2</a>
                                    <a href="" class="page__pagination_link">3</a>
                                    <a href="" class="page__pagination_link">Next</a> --}}

                                </div>

                            </div>

                        </div>

                        <div class="manage-account-user-wrapper">

                            <div class="manage-account_user-list-container">

                                <div class="manage-account_user-list-item-header">

                                    <h3
                                        class="manage-account_user-list-title main-content__text main-content__text--bold">
                                        STATUS
                                    </h3>
                                    <h3
                                        class="manage-account_user-list-title main-content__text main-content__text--bold">
                                        Full Name
                                    </h3>
                                    <h3
                                        class="manage-account_user-list-title main-content__text main-content__text--bold">
                                        Email Address
                                    </h3>
                                    <h3
                                        class="manage-account_user-list-title main-content__text main-content__text--bold">
                                        Name
                                    </h3>
                                    <h3
                                        class="manage-account_user-list-title main-content__text main-content__text--bold">
                                        Actions
                                    </h3>

                                </div>

                                <div class="manage-account_user-list-item">

                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <span class="manage-account_status-on"></span>
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        Jon Doe
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        jondoe@tru-data.com
                                    </p>
                                    <p
                                        class="manage-account_user-list-title main-content__text main-content__text--small">
                                        MIKA GROUP PLC
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <a href="user-info-companies.html" class="manage-account_user-view">
                                            <img src="../assets/images/eye.svg" class="manage-account_eye-icon"
                                                alt="">
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="btn btn--danger">
                                            Inactivate
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="manage-account_user-del">
                                            <img src="../assets/images/delete.svg" alt="">
                                        </a>
                                    </p>

                                </div>

                                <div class="manage-account_user-list-item">

                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <span class="manage-account_status-on"></span>
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        Jon Doe
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        jondoe@trudata.com
                                    </p>
                                    <p
                                        class="manage-account_user-list-title main-content__text main-content__text--small">
                                        TELSA GROUP OF COMPAINIES INC
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <a href="user-info-companies.html" class="manage-account_user-view">
                                            <img src="../assets/images/eye.svg" class="manage-account_eye-icon"
                                                alt="">
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="btn btn--danger">
                                            Inactivate
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="manage-account_user-del">
                                            <img src="../assets/images/delete.svg" alt="">
                                        </a>
                                    </p>

                                </div>

                                <div class="manage-account_user-list-item">

                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <span class="manage-account_status-on manage-account_status-on--off"></span>
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        Jon Doe
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        jondoe@trudata.com
                                    </p>
                                    <p
                                        class="manage-account_user-list-title main-content__text main-content__text--small">
                                        GOOGLE INC
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <a href="user-info-companies.html" class="manage-account_user-view">
                                            <img src="../assets/images/eye.svg" class="manage-account_eye-icon"
                                                alt="">
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="btn btn--success">
                                            Activate
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="manage-account_user-del">
                                            <img src="../assets/images/delete.svg" alt="">
                                        </a>
                                    </p>

                                </div>

                                <div class="manage-account_user-list-item">

                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <span class="manage-account_status-on"></span>
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        Jon Doe
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        jondoe@trudata.com
                                    </p>
                                    <p
                                        class="manage-account_user-list-title main-content__text main-content__text--small">
                                        LEADWAY ASSURANCE PLC
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <a href="user-info-companies.html" class="manage-account_user-view">
                                            <img src="../assets/images/eye.svg" class="manage-account_eye-icon"
                                                alt="">
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="btn btn--danger">
                                            Inactivate
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="manage-account_user-del">
                                            <img src="../assets/images/delete.svg" alt="">
                                        </a>
                                    </p>

                                </div>

                                <div class="manage-account_user-list-item">

                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <span class="manage-account_status-on"></span>
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        Jon Doe
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        jondoe@trudata.com
                                    </p>
                                    <p
                                        class="manage-account_user-list-title main-content__text main-content__text--small">
                                        PR CONSULTANCY
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <a href="user-info-companies.html" class="manage-account_user-view">
                                            <img src="../assets/images/eye.svg" class="manage-account_eye-icon"
                                                alt="">
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="btn btn--danger">
                                            Inactivate
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="manage-account_user-del">
                                            <img src="../assets/images/delete.svg" alt="">
                                        </a>
                                    </p>

                                </div>

                                <div class="manage-account_user-list-item">

                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <span class="manage-account_status-on manage-account_status-on--off"></span>
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        Jon Doe
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        jondoe@trudata.com
                                    </p>
                                    <p
                                        class="manage-account_user-list-title main-content__text main-content__text--small">
                                        B&G COPERATIONS
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <a href="user-info-companies.html" class="manage-account_user-view">
                                            <img src="../assets/images/eye.svg" class="manage-account_eye-icon"
                                                alt="">
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="btn btn--success">
                                            Activate
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="manage-account_user-del">
                                            <img src="../assets/images/delete.svg" alt="">
                                        </a>
                                    </p>

                                </div>
                                <div class="manage-account_user-list-item">

                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <span class="manage-account_status-on"></span>
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        Jon Doe
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        jondoe@trudata.com
                                    </p>
                                    <p
                                        class="manage-account_user-list-title main-content__text main-content__text--small">
                                        BBN NIGERIA
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <a href="user-info-companies.html" class="manage-account_user-view">
                                            <img src="../assets/images/eye.svg" class="manage-account_eye-icon"
                                                alt="">
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="btn btn--danger">
                                            Inactivate
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="manage-account_user-del">
                                            <img src="../assets/images/delete.svg" alt="">
                                        </a>
                                    </p>

                                </div>

                                <div class="manage-account_user-list-item">

                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <span class="manage-account_status-on manage-account_status-on--off"></span>
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        Jon Doe
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        jondoe@trudata.com
                                    </p>
                                    <p
                                        class="manage-account_user-list-title main-content__text main-content__text--small">
                                        BIX CONSULT
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <a href="user-info-companies.html" class="manage-account_user-view">
                                            <img src="../assets/images/eye.svg" class="manage-account_eye-icon"
                                                alt="">
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="btn btn--success">
                                            Activate
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="manage-account_user-del">
                                            <img src="../assets/images/delete.svg" alt="">
                                        </a>
                                    </p>

                                </div>

                                <div class="manage-account_user-list-item">

                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <span class="manage-account_status-on"></span>
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        Jon Doe
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        jondoe@trudata.com
                                    </p>
                                    <p
                                        class="manage-account_user-list-title main-content__text main-content__text--small">
                                        BRILLA FM
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <a href="user-info-companies.html" class="manage-account_user-view">
                                            <img src="../assets/images/eye.svg" class="manage-account_eye-icon"
                                                alt="">
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="btn btn--danger">
                                            Inactivate
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="manage-account_user-del">
                                            <img src="../assets/images/delete.svg" alt="">
                                        </a>
                                    </p>

                                </div>

                                <div class="manage-account_user-list-item">

                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <span class="manage-account_status-on"></span>
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        Jon Doe
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        jondoe@trudata.com
                                    </p>
                                    <p
                                        class="manage-account_user-list-title main-content__text main-content__text--small">
                                        KATTY HOTELS
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <a href="user-info-companies.html" class="manage-account_user-view">
                                            <img src="../assets/images/eye.svg" class="manage-account_eye-icon"
                                                alt="">
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="btn btn--danger">
                                            Inactivate
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="manage-account_user-del">
                                            <img src="../assets/images/delete.svg" alt="">
                                        </a>
                                    </p>

                                </div>

                                <div class="manage-account_user-list-item">

                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <span class="manage-account_status-on manage-account_status-on--off"></span>
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        Jon Doe
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        jondoe@trudata.com
                                    </p>
                                    <p
                                        class="manage-account_user-list-title main-content__text main-content__text--small">
                                        DAT COPS
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <a href="user-info-companies.html" class="manage-account_user-view">
                                            <img src="../assets/images/eye.svg" class="manage-account_eye-icon"
                                                alt="">
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="btn btn--success">
                                            Activate
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="manage-account_user-del">
                                            <img src="../assets/images/delete.svg" alt="">
                                        </a>
                                    </p>

                                </div>

                            </div>


                            <div class="page__pagination">

                                <div class="page__pagination_links">

                                    <a href="" class="page__pagination_link">Previous</a>
                                    <a href="" class="page__pagination_link page__pagination_link--active">1</a>
                                    <a href="" class="page__pagination_link">2</a>
                                    <a href="" class="page__pagination_link">3</a>
                                    <a href="" class="page__pagination_link">Next</a>

                                </div>

                            </div>

                        </div>

                        <div class="manage-account-user-wrapper">

                            <div class="manage-account_user-list-container">

                                <div class="manage-account_user-list-item-header">

                                    <h3
                                        class="manage-account_user-list-title main-content__text main-content__text--bold">
                                        STATUS
                                    </h3>
                                    <h3
                                        class="manage-account_user-list-title main-content__text main-content__text--bold">
                                        Full Name
                                    </h3>
                                    <h3
                                        class="manage-account_user-list-title main-content__text main-content__text--bold">
                                        Email Address
                                    </h3>
                                    <h3
                                        class="manage-account_user-list-title main-content__text main-content__text--bold">
                                        Role
                                    </h3>
                                    <h3
                                        class="manage-account_user-list-title main-content__text main-content__text--bold">
                                        Actions
                                    </h3>

                                </div>

                                <div class="manage-account_user-list-item">

                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <span class="manage-account_status-on"></span>
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        Jon Doe
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        jondoe@tru-data.com
                                    </p>
                                    <p
                                        class="manage-account_user-list-title main-content__text main-content__text--small">
                                        EDITOR
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <a href="user-info-companies.html" class="manage-account_user-view">
                                            <img src="../assets/images/eye.svg" class="manage-account_eye-icon"
                                                alt="">
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="btn btn--danger">
                                            Inactivate
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="manage-account_user-del">
                                            <img src="../assets/images/delete.svg" alt="">
                                        </a>
                                    </p>

                                </div>

                                <div class="manage-account_user-list-item">

                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <span class="manage-account_status-on"></span>
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        Jon Doe
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        jondoe@trudata.com
                                    </p>
                                    <p
                                        class="manage-account_user-list-title main-content__text main-content__text--small">
                                        OPERATIONS MANAGER
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <a href="user-info-companies.html" class="manage-account_user-view">
                                            <img src="../assets/images/eye.svg" class="manage-account_eye-icon"
                                                alt="">
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="btn btn--danger">
                                            Inactivate
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="manage-account_user-del">
                                            <img src="../assets/images/delete.svg" alt="">
                                        </a>
                                    </p>

                                </div>

                                <div class="manage-account_user-list-item">

                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <span class="manage-account_status-on manage-account_status-on--off"></span>
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        Jon Doe
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        jondoe@trudata.com
                                    </p>
                                    <p
                                        class="manage-account_user-list-title main-content__text main-content__text--small">
                                        AUDITOR
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <a href="user-info-companies.html" class="manage-account_user-view">
                                            <img src="../assets/images/eye.svg" class="manage-account_eye-icon"
                                                alt="">
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="btn btn--success">
                                            Activate
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="manage-account_user-del">
                                            <img src="../assets/images/delete.svg" alt="">
                                        </a>
                                    </p>

                                </div>

                                <div class="manage-account_user-list-item">

                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <span class="manage-account_status-on"></span>
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        Jon Doe
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        jondoe@trudata.com
                                    </p>
                                    <p
                                        class="manage-account_user-list-title main-content__text main-content__text--small">
                                        HR
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <a href="user-info-companies.html" class="manage-account_user-view">
                                            <img src="../assets/images/eye.svg" class="manage-account_eye-icon"
                                                alt="">
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="btn btn--danger">
                                            Inactivate
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="manage-account_user-del">
                                            <img src="../assets/images/delete.svg" alt="">
                                        </a>
                                    </p>

                                </div>

                                <div class="manage-account_user-list-item">

                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <span class="manage-account_status-on"></span>
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        Jon Doe
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        jondoe@trudata.com
                                    </p>
                                    <p
                                        class="manage-account_user-list-title main-content__text main-content__text--small">
                                        QA MANAGER
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <a href="user-info-companies.html" class="manage-account_user-view">
                                            <img src="../assets/images/eye.svg" class="manage-account_eye-icon"
                                                alt="">
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="btn btn--danger">
                                            Inactivate
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="manage-account_user-del">
                                            <img src="../assets/images/delete.svg" alt="">
                                        </a>
                                    </p>

                                </div>

                                <div class="manage-account_user-list-item">

                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <span class="manage-account_status-on manage-account_status-on--off"></span>
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        Jon Doe
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        jondoe@trudata.com
                                    </p>
                                    <p
                                        class="manage-account_user-list-title main-content__text main-content__text--small">
                                        ADMIN MANAGER
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <a href="user-info-companies.html" class="manage-account_user-view">
                                            <img src="../assets/images/eye.svg" class="manage-account_eye-icon"
                                                alt="">
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="btn btn--success">
                                            Activate
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="manage-account_user-del">
                                            <img src="../assets/images/delete.svg" alt="">
                                        </a>
                                    </p>

                                </div>
                                <div class="manage-account_user-list-item">

                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <span class="manage-account_status-on"></span>
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        Jon Doe
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        jondoe@trudata.com
                                    </p>
                                    <p
                                        class="manage-account_user-list-title main-content__text main-content__text--small">
                                        OPERATIONS MANAGER
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <a href="user-info-companies.html" class="manage-account_user-view">
                                            <img src="../assets/images/eye.svg" class="manage-account_eye-icon"
                                                alt="">
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="btn btn--danger">
                                            Inactivate
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="manage-account_user-del">
                                            <img src="../assets/images/delete.svg" alt="">
                                        </a>
                                    </p>

                                </div>

                                <div class="manage-account_user-list-item">

                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <span class="manage-account_status-on manage-account_status-on--off"></span>
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        Jon Doe
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        jondoe@trudata.com
                                    </p>
                                    <p
                                        class="manage-account_user-list-title main-content__text main-content__text--small">
                                        AUDITOR
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <a href="user-info-companies.html" class="manage-account_user-view">
                                            <img src="../assets/images/eye.svg" class="manage-account_eye-icon"
                                                alt="">
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="btn btn--success">
                                            Activate
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="manage-account_user-del">
                                            <img src="../assets/images/delete.svg" alt="">
                                        </a>
                                    </p>

                                </div>

                                <div class="manage-account_user-list-item">

                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <span class="manage-account_status-on"></span>
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        Jon Doe
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        jondoe@trudata.com
                                    </p>
                                    <p
                                        class="manage-account_user-list-title main-content__text main-content__text--small">
                                        HR
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <a href="user-info-companies.html" class="manage-account_user-view">
                                            <img src="../assets/images/eye.svg" class="manage-account_eye-icon"
                                                alt="">
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="btn btn--danger">
                                            Inactivate
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="manage-account_user-del">
                                            <img src="../assets/images/delete.svg" alt="">
                                        </a>
                                    </p>

                                </div>

                                <div class="manage-account_user-list-item">

                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <span class="manage-account_status-on"></span>
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        Jon Doe
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        jondoe@trudata.com
                                    </p>
                                    <p
                                        class="manage-account_user-list-title main-content__text main-content__text--small">
                                        QA MANAGER
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <a href="user-info-companies.html" class="manage-account_user-view">
                                            <img src="../assets/images/eye.svg" class="manage-account_eye-icon"
                                                alt="">
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="btn btn--danger">
                                            Inactivate
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="manage-account_user-del">
                                            <img src="../assets/images/delete.svg" alt="">
                                        </a>
                                    </p>

                                </div>

                                <div class="manage-account_user-list-item">

                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <span class="manage-account_status-on manage-account_status-on--off"></span>
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        Jon Doe
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        jondoe@trudata.com
                                    </p>
                                    <p
                                        class="manage-account_user-list-title main-content__text main-content__text--small">
                                        ADMIN MANAGER
                                    </p>
                                    <p class="manage-account_user-list main-content__text main-content__text--small">
                                        <a href="user-info-companies.html" class="manage-account_user-view">
                                            <img src="../assets/images/eye.svg" class="manage-account_eye-icon"
                                                alt="">
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="btn btn--success">
                                            Activate
                                        </a>
                                        &nbsp;&nbsp;&nbsp; <a href="" class="manage-account_user-del">
                                            <img src="../assets/images/delete.svg" alt="">
                                        </a>
                                    </p>

                                </div>

                            </div>


                            <div class="page__pagination">

                                <div class="page__pagination_links">

                                    <a href="" class="page__pagination_link">Previous</a>
                                    <a href="" class="page__pagination_link page__pagination_link--active">1</a>
                                    <a href="" class="page__pagination_link">2</a>
                                    <a href="" class="page__pagination_link">3</a>
                                    <a href="" class="page__pagination_link">Next</a>

                                </div>

                            </div>

                        </div>



                    </div>

                </div>

            </div>

        </div>


    </div>

    <div class="modal__manage-acct">

        <div class="modal__inner modal__inner--adjusted modal__inner--acct">

            <div class="modal__inner_container modal__inner_container--adjusted">

                <div class="modal_inner-content">

                    <div class="modal__inner_header">

                        <img src="../assets/images/x.svg" width="22px"
                            class="settings__profile_modal_cancel modal__history-close" alt="">

                        <h2 class="main-content__text">
                            New Admin
                        </h2>

                        <img src="" class="modal__cl_btn" alt="">

                    </div>

                    <div class="modal__body">

                        <div class="modal__body_form_container">

                            <div class="modal__body_input-item-container">
                                <label class="manage-account__label main-content__text main-content__text--small"
                                    for="first-name">
                                    First Name
                                </label>
                                <input style="width: 280px" placeholder="Customer First Name"
                                    class="settings__profile-input" type="text" id="first-name">
                            </div>
                            <div class="modal__body_input-item-container">
                                <label class="manage-account__label main-content__text main-content__text--small"
                                    for="last-name">
                                    Last Name
                                </label>
                                <input style="width: 280px" placeholder="Customer Last Name"
                                    class="settings__profile-input" type="text" id="last-name">
                            </div>
                            <div class="modal__body_input-item-container">
                                <label class="manage-account__label main-content__text main-content__text--small"
                                    for="email">
                                    Email
                                </label>
                                <input style="width: 280px" placeholder="Customer Email Address"
                                    class="settings__profile-input" type="email" id="email">
                            </div>
                            <div class="modal__body_input-item-container">
                                <label class="manage-account__label main-content__text main-content__text--small"
                                    for="number">
                                    Phone
                                </label>
                                <input style="width: 280px" placeholder="Customer Phone Number"
                                    class="settings__profile-input" type="number" id="number">
                            </div>
                            <div class="modal__body_input-item-container">
                                <label class="manage-account__label main-content__text main-content__text--small"
                                    for="role">
                                    Role
                                </label>
                                <input style="width: 280px" placeholder="Customer Role" class="settings__profile-input"
                                    type="text" id="role">
                            </div>

                            <div class="modal__group_btn">
                                <a href="" class="btn btn--medium btn--faded">
                                    CANCEL
                                </a>
                                &nbsp;&nbsp;&nbsp;
                                <a href="" class="btn btn--medium">
                                    CREATE
                                </a>

                            </div>

                        </div>



                    </div>

                </div>






            </div>

        </div>

    </div>



    <!-- build:js /../assets/scripts/App.js -->
    <script src="../assets/scripts/App-3a24d57a57.js"></script> <!-- endbuild -->

</body>




</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Site Admin
    </title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- build:css /../assets/styles/styles.css -->
    <link rel="stylesheet" href="../assets/styles/styles-a4b2e688ed.css">
    <!-- endbuild -->
    <link href="../../vendor/css/owl.carousel.min.css" rel="stylesheet">
    <link href="../../vendor/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="resources/css/modal.css"> -->
    <!-- <link rel="stylesheet" href="vendors/css/animate.css"> -->
    <link href="../../resource/css/styles.css" rel="stylesheet">

    <!-- build:js /../assets/scripts/Vendor.js -->
    <script src="../assets/scripts/Vendor-57062a8ee8.js"></script>
    <!-- endbuild -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
        .modal__body_input-item-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .why_us_img{
            width:20%;
        }
        select{
            width: 100%;
            padding: 10px;
            border: 1px solid #C4C4C4;
            box-sizing: border-box;
            border-radius: 4px;
            color: black;
            font-family: Poppins;
            font-style: italic;
            font-weight: normal;
            font-size: 17px;
            line-height: 31px;
            text-align: justify;
            text-transform: lowercase;
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
                    <a href="{{ url('/admin') }}" class="side-navigation__link side-navigation__link--active">
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M17.2352 5.2934C16.9797 5.01536 16.5787 4.97437 16.28 5.19585C15.155 6.03049 9.51173 10.2274 8.90524 10.8875C8.02573 11.8447 8.02573 13.4022 8.90524 14.3595C9.34499 14.838 9.92268 15.0774 10.5003 15.0774C11.0779 15.0774 11.6556 14.838 12.0954 14.3595C12.7018 13.6994 16.558 7.55752 17.3249 6.33303C17.5283 6.00802 17.4907 5.57151 17.2352 5.2934ZM11.0319 13.2021C10.7388 13.5212 10.2618 13.5212 9.96863 13.2021C9.67546 12.8831 9.67542 12.3641 9.96848 12.045C10.2041 11.7915 11.8063 10.5479 13.7776 9.05657C12.4074 11.202 11.2647 12.9457 11.0319 13.2021Z"
                                    fill="#FF8B00" />
                                <path
                                    d="M4.3432 16.4296L3.41497 16.9224C2.73577 15.6031 2.37955 14.1307 2.37955 12.6233C2.37955 11.5189 2.56667 10.4611 2.90815 9.48563L3.97176 10.0409C4.07665 10.0956 4.18737 10.1216 4.29644 10.1216C4.57664 10.1216 4.84563 9.95032 4.97492 9.65695C5.15448 9.24945 4.99658 8.76061 4.62213 8.56515L3.57201 8.01694C4.87721 5.70019 7.13546 4.08498 9.74831 3.8227V5.05353C9.74831 5.50551 10.0849 5.87188 10.5002 5.87188C10.9155 5.87188 11.2521 5.50551 11.2521 5.05353V3.82208C12.148 3.91083 13.0148 4.15912 13.8376 4.56338C14.216 4.74935 14.6614 4.56608 14.8323 4.15425C15.0032 3.74229 14.8348 3.25763 14.4563 3.07166C13.2094 2.45908 11.8784 2.14844 10.5002 2.14844C7.9294 2.14844 5.5125 3.23799 3.69464 5.21643C1.87686 7.1949 0.875732 9.82536 0.875732 12.6233C0.875732 14.6909 1.43959 16.7017 2.50636 18.4383C2.65005 18.6721 2.88762 18.8019 3.13191 18.8019C3.24297 18.8019 3.35546 18.7751 3.46114 18.719L5.00256 17.9006C5.3758 17.7025 5.53077 17.2126 5.3487 16.8063C5.16662 16.4001 4.71645 16.2315 4.3432 16.4296Z"
                                    fill="#FF8B00" />
                                <path
                                    d="M19.2764 8.31783C19.1056 7.90591 18.6603 7.7226 18.2817 7.90865C17.9032 8.09462 17.7349 8.57929 17.9058 8.99121C18.3803 10.1352 18.6209 11.3573 18.6209 12.6235C18.6209 14.1331 18.2635 15.608 17.5823 16.9287L16.6132 16.4265C16.2383 16.2322 15.7896 16.4054 15.6111 16.8135C15.4325 17.2215 15.5917 17.7099 15.9667 17.9042L17.5457 18.7226C17.6496 18.7764 17.7597 18.8021 17.8686 18.8021C18.1129 18.8021 18.3505 18.6722 18.494 18.4385C19.5608 16.7019 20.1247 14.691 20.1247 12.6235C20.1247 11.1235 19.8393 9.67485 19.2764 8.31783Z"
                                    fill="#FF8B00" />
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
                    <a href="{{ url('/') }}" class="side-navigation__link">
                        <svg width="21" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17.0415 3.5722H3.00724C3.00724 3.5722 1.94403 3.40412 1.94403 2.89987L17.2541 1.72328V0.714782C17.2541 0.714782 17.0655 -0.205645 15.3404 0.0424469L1.73139 1.89137C1.73139 1.89137 0.0302734 2.05945 0.0302734 3.74029V13.3211C0.0302734 14.2492 0.982263 15.0019 2.15667 15.0019H17.0415C18.2159 15.0019 19.1679 14.2492 19.1679 13.3211V5.25304C19.1679 4.32488 18.2159 3.5722 17.0415 3.5722ZM15.7656 10.4636C14.9436 10.4636 14.2772 9.93686 14.2772 9.28705C14.2772 8.63724 14.9436 8.11046 15.7656 8.11046C16.5877 8.11046 17.2541 8.63724 17.2541 9.28705C17.2541 9.93686 16.5877 10.4636 15.7656 10.4636Z"
                                    fill="#ffffff" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="19.1376" height="15.0019" fill="white"
                                        transform="translate(0.0302734)" />
                                </clipPath>
                            </defs>
                        </svg>
                        Back to Main Site
                    </a>
                </div>

                <div class="side-navigation__inner_link_container">
                    {{-- <a href="" class="side-navigation__link"> --}}
                      
                        <svg class="svg__margin" width="21" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.9069 5.17282C12.8763 4.60028 12.2911 4.69768 11.7202 4.69768C12.1419 4.81001 12.5409 4.96628 12.9069 5.17282Z"
                                fill="#ffffff" />
                            <path
                                d="M6.80381 3.73828C4.58746 3.73828 3.56731 6.5436 5.33907 7.95453C5.94306 6.34176 7.14543 5.18375 8.72167 4.72667C8.29049 4.13057 7.59385 3.73828 6.80381 3.73828Z"
                                fill="#ffffff" />
                            <path
                                d="M2.22489 7.51595C2.31521 7.80578 2.43224 8.08383 2.57126 8.34727L1.84322 9.07571C1.6477 9.27123 1.6477 9.58857 1.84322 9.78449L3.1265 11.0682C3.21996 11.1616 3.34801 11.2142 3.48147 11.2142C3.61346 11.2142 3.74065 11.1616 3.83573 11.0682L4.56296 10.3397C4.6721 10.3975 4.79307 10.4329 4.9061 10.4827C4.9061 10.4744 4.90529 10.4658 4.90529 10.4575C4.90529 9.86222 4.97366 9.30066 5.09539 8.77334C4.21735 8.20824 3.63147 7.22733 3.63147 6.1074C3.63147 4.358 5.05453 2.93453 6.80353 2.93453C7.98784 2.93453 9.01037 3.59384 9.5562 4.5571C10.1389 4.48483 10.6863 4.48483 11.3453 4.60934C11.2605 4.35294 11.1608 4.102 11.0359 3.86678L11.7639 3.13798C11.8589 3.04412 11.9115 2.91647 11.9115 2.78377C11.9115 2.65102 11.8589 2.52342 11.7639 2.42956L10.4813 1.14668C10.3832 1.04852 10.2552 0.999821 10.1272 0.999821C9.99911 0.999821 9.87111 1.04852 9.77371 1.14668L9.04334 1.87549C8.7795 1.7357 8.50227 1.61868 8.21173 1.53033V0.500669C8.21173 0.224239 7.98865 0 7.71141 0H5.89646C5.62079 0 5.39534 0.224239 5.39534 0.500669V1.53028C5.10556 1.61863 4.82827 1.73565 4.56362 1.87544L3.83573 1.14744C3.73752 1.04928 3.60952 1.00058 3.48147 1.00058C3.35347 1.00058 3.22471 1.04928 3.12731 1.14704L1.84322 2.42991C1.74976 2.52418 1.69716 2.65137 1.69716 2.78453C1.69716 2.91764 1.74976 3.04488 1.84322 3.13874L2.57126 3.86714C2.43219 4.13103 2.31521 4.40867 2.22651 4.69845H1.19766C0.920418 4.69845 0.696533 4.92304 0.696533 5.19988V7.01488C0.696533 7.2909 0.920418 7.51595 1.19766 7.51595H2.22489Z"
                                fill="#ffffff" />
                            <path
                                d="M17.9472 17.2273C18.7499 16.7871 19.3012 15.9445 19.3012 14.9666C19.3012 13.5396 18.1397 12.3789 16.7127 12.3789C16.2108 12.3789 15.7458 12.5289 15.3485 12.7771C15.1105 13.7242 14.7359 14.6301 14.2458 15.417C15.6351 15.6782 16.9098 16.3108 17.9472 17.2273Z"
                                fill="#FFffff" />
                            <path
                                d="M23.3029 13.9873C23.3029 13.6885 23.0602 13.4465 22.7626 13.4465H21.6521C21.5563 13.1335 21.4291 12.8335 21.2783 12.5488L22.0644 11.7627C22.1665 11.6614 22.223 11.524 22.223 11.3807C22.223 11.2373 22.1665 11.0998 22.0644 10.9982L20.6805 9.61396C20.5754 9.50826 20.4363 9.45526 20.2982 9.45526C20.1599 9.45526 20.0217 9.50826 19.9165 9.61396L19.1288 10.4005C18.8444 10.2497 18.5452 10.1233 18.2311 10.0278V8.91732C18.2311 8.61889 17.9899 8.37695 17.6915 8.37695H15.7336C15.6024 8.37695 15.487 8.42955 15.3928 8.50733C15.5577 9.10889 15.648 9.76118 15.648 10.457C15.648 10.8988 15.6135 11.3473 15.5491 11.7933C15.9135 11.659 16.3014 11.5746 16.7122 11.5746C18.5829 11.5746 20.1049 13.0963 20.1049 14.9665C20.1049 16.1619 19.4806 17.2096 18.5436 17.8139C19.2254 18.5616 19.7673 19.4486 20.1199 20.4425C20.178 20.4625 20.2384 20.4771 20.2989 20.4771C20.4371 20.4771 20.5754 20.4245 20.6814 20.3188L22.066 18.9346C22.1674 18.8332 22.2231 18.6958 22.2231 18.5525C22.2231 18.4092 22.1674 18.2718 22.066 18.17L21.2783 17.3835C21.4291 17.0992 21.5563 16.7991 21.6522 16.4858H22.7626C22.9055 16.4858 23.0446 16.4293 23.1451 16.3271C23.2464 16.2262 23.3038 16.0884 23.3038 15.9451L23.3029 13.9873Z"
                                fill="#FFffff" />
                            <path
                                d="M19.0184 20.932C18.1788 18.4616 15.9602 16.7625 13.3991 16.5312C12.5415 17.4394 11.4797 18.0156 10.2772 18.0156C9.07564 18.0156 8.01301 17.4395 7.15621 16.5312C4.59359 16.7625 2.37492 18.4616 1.53531 20.9324L1.07121 22.2985C0.938457 22.6916 1.00203 23.1248 1.24397 23.462C1.48585 23.7994 1.87542 23.9997 2.29006 23.9997H18.2636C18.679 23.9997 19.0686 23.7994 19.3105 23.462C19.5516 23.1248 19.616 22.6916 19.4825 22.2985L19.0184 20.932Z"
                                fill="#FFffff" />
                            <path
                                d="M6.11157 10.4579C6.11157 13.522 7.97685 16.81 10.2763 16.81C12.5767 16.81 14.4419 13.522 14.4419 10.4579C14.442 4.10627 6.11157 4.09368 6.11157 10.4579Z"
                                fill="#FFffff" />
                        </svg>
                     <button class="side-navigation__link" id="form-submit-button"> SEND MAIL </button>
                    {{-- </a> --}}
                </div>  

            
                

            </div>

        </div>

        <div class="main-content">

            <header class="heade">

                <div class="header__container">

                    <p class="header__custom-msg">
                        Hi, {{Ucfirst(Auth::user()->name)}} - Welcome to tru-Data !!!
                    </p>

                    <div class="header__custom_inner-right_container">

                        <div class="header__custom-avatar">
                            <img src="../assets/images/user.svg" class="header__user-img" alt="user's photo">
                        </div>

                        <div class="header__notification">
                            <img src="../assets/images/notification.svg" class="icon icon--notification" height="20"
                                alt="">
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
  <br><br><br><br><br>
  @include('flash::message')
  <br><br>
            <div class="main-content__container">


                <div class="main-content__inner_wrapper">
                    
                        <div class="form__header--list1">
                                <p class="">
                                    <img src="../resource/images/left-arrow.svg" alt="" class="back__arrow"><span class=""><a href="{{ url()->previous() }}">Back</a></span>
                                </p>
                             
                            </div>

                    <form id="form-submit" method="post" action="{{url('/post-mail-to-admin/')}}" enctype="multipart/form-data">
                        @csrf
                    <div class="main__container">
                        <div class="center__container">
                        
                    
                      


                        <div class="center__container--wrapper center__container--third-wrapper">
                            <h3>Send Mail To  -  {{$admin->name}}  <small>({{$admin->role['name']}})</small></h3>
                            <br>
                                <input  class="input" placeholder="fullname" name="email" value="{{$admin->email}}" disabled>
                                <input type="hidden" class="input" placeholder="fullname" name="email" value="{{$admin->email}}" >

                                <input  class="input" placeholder="subject" name="subject" value="">
                                <textarea name="main_body"></textarea>  
                             
                                {{-- <div class="container custom__edit--img-inner"><span class="span__text--container">Width - 1840px Height - 1236px</span> <img src="../resource/images/featuredimg__tworeport.jpg"></div> --}}
                        </div>
                   

                      
                 
                     
                    </div>
                    </div>
                </form>
                </div>

                

                {{-- <div class="analytics_section">

                    <div class="analytics_section__stat">

                        <h3 class="analytics_section__title main-content__text main-content__text--small">
                            OVERALL STATS AS OF TODAY
                        </h3>
                        <div class="analytics_section__table-container">
                            <table class="analytics_section__table main-content__text main-content__text--ex-small">
                                <tr>
                                    <th></th>
                                    <th>
                                        <a href="" class="analytics_section__reset_btn">
                                            <img src="../assets/images/refresh-button.svg" alt="">
                                        </a>
                                    </th>
                                </tr>
                                <tr>
                                    <td>TOTAL AMOUNT DEPOSIT</td>
                                    <td class="analytics_section__table-centered">550</td>
                                </tr>
                                <tr>
                                    <td>TOTAL AMOUNT OF DOCUMENT VERIFIED</td>
                                    <td class="analytics_section__table-centered">550</td>
                                </tr>
                            </table>

                            <table class="analytics_section__table main-content__text main-content__text--ex-small">
                                <tr>
                                    <th></th>
                                    <th>
                                        <a href="" class="analytics_section__reset_btn">
                                            <img src="../assets/images/refresh-button.svg" alt="">
                                        </a>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="main-content__text--bold">DOCUMENTS</td>
                                    <td class="main-content__colored-text analytics_section__table-centered">20</td>
                                </tr>
                                <tr>
                                    <td>Successful</td>
                                    <td class="analytics_section__table-centered">5</td>
                                </tr>
                                <tr>
                                    <td>Voided</td>
                                    <td class="analytics_section__table-centered">5</td>
                                </tr>
                                <tr>
                                    <td>Expired</td>
                                    <td class="analytics_section__table-centered">5</td>
                                </tr>
                                <tr>
                                    <td>Pending</td>
                                    <td class="analytics_section__table-centered">5</td>
                                </tr>
                            </table>
                        </div>

                    </div>



                </div> --}}



                {{-- <div class="canvas__container" style="width:90%; margin: 0 auto 40px auto">
                    <div class="canvas__select">
                        <div class="canvas__label">
                            <p class="main-content__text main-content__text--small">
                                Showing metrics for Custom Period
                            </p>

                            <div class="custom-select" style="width: 220px">
                                <select name="" id="">
                                    <option value="0">Today</option>
                                    <option value="1">This Week</option>
                                    <option value="2">This Month</option>
                                    <option value="3">Last 30 Days</option>
                                    <option value="4">Last 90 Days</option>
                                    <option value="4">This Year</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <canvas id="myChart"></canvas>

                </div> --}}



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
                            Verifiable Organisations
                        </h2>

                        <img src="" class="modal__cl_btn" alt="">

                    </div>

                    <div class="modal__body">

                        <div class="modal__body_form_container"
                            style="width: 400px; height: 180px; overflow-x:auto;padding-left: 20%;">

                            <div class="gen-content__check-input-container">

                                <input type="checkbox" name="gen-type" checked class="gen-content__check-box"
                                    id="select-1">
                                <label for="select-1"
                                    class="gen-content__check-label main-content__text--capitalize main-content__text main-content__text--small">GTBANK
                                </label>

                            </div>
                            <div class="gen-content__check-input-container">

                                <input type="checkbox" name="gen-type" checked class="gen-content__check-box"
                                    id="select-2">
                                <label for="select-2"
                                    class="gen-content__check-label main-content__text--capitalize main-content__text main-content__text--small">DANGOTE
                                    CEMENT</label>

                            </div>
                            <div class="gen-content__check-input-container">

                                <input type="checkbox" name="gen-type" checked class="gen-content__check-box"
                                    id="select-3">
                                <label for="select-3"
                                    class="gen-content__check-label main-content__text--capitalize main-content__text main-content__text--small">PAYSTACK</label>

                            </div>
                            <div class="gen-content__check-input-container">

                                <input type="checkbox" name="gen-type" checked class="gen-content__check-box"
                                    id="select-4">
                                <label for="select-4"
                                    class="gen-content__check-label main-content__text--capitalize main-content__text main-content__text--small">select
                                    INTERSWITCH </label>

                            </div>


                        </div>

                        <div class="modal__group_btn" style="justify-content: center; margin-top: 0px">

                            <a href="" class="btn btn--medium" style="Padding-left: 38px;padding-right: 38px;">
                                OK
                            </a>

                        </div>


                    </div>

                </div>






            </div>

        </div>

    </div>

    <script>
        //switching missions;

        let switchBtns = document.querySelectorAll(".js-btn");
        let switchableContainers = document.querySelectorAll(".switchable-container");
        for (let i = 0; i < switchBtns.length; i++) {
            switchBtns[i].addEventListener('click', function(e) {
                e.preventDefault();
                switchableContainers.forEach(function(item) {
                    item.classList.remove('switchable-container--on');
                });
                switchBtns.forEach(function(item) {
                    item.classList.remove('active');
                });
                switchableContainers[i].classList.add('switchable-container--on');
                switchBtns[i].classList.add('active')
            })
        }
        //swiyching visions
        let VisionswitchBtns = document.querySelectorAll(".v-js-btn");
        let VisionswitchableContainers = document.querySelectorAll(".vision_switchable--container ");
        for (let i = 0; i < VisionswitchBtns.length; i++) {
            VisionswitchBtns[i].addEventListener('click', function(e) {
                e.preventDefault();
                VisionswitchableContainers.forEach(function(item) {
                    item.classList.remove('v--switchable-container--on');
                });
                VisionswitchBtns.forEach(function(item) {
                    item.classList.remove('active');
                });
                VisionswitchableContainers[i].classList.add('v--switchable-container--on');
                VisionswitchBtns[i].classList.add('active')
            })
        }
        //switching values

        let ValuesswitchBtns = document.querySelectorAll(".values--js-btn");
        let ValueswitchableContainers = document.querySelectorAll(".values--switchable--container");
        for (let i = 0; i < ValuesswitchBtns.length; i++) {
            ValuesswitchBtns[i].addEventListener('click', function(e) {
                e.preventDefault();
                ValueswitchableContainers.forEach(function(item) {
                    item.classList.remove('values--switchable--container-on');
                });
                ValuesswitchBtns.forEach(function(item) {
                    item.classList.remove('active');
                });
                ValueswitchableContainers[i].classList.add('values--switchable--container-on');
                ValuesswitchBtns[i].classList.add('active')
            })
        }

        //jquery  to subbmifom

    $('#form-submit-button').on('click', function(){
    $('#form-submit').submit();
     });

    </script>

    <script src="../resource/js/admin.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    {{-- <script>
        $('textarea').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
    </script> --}}

    <!-- build:js /../assets/scripts/App.js -->
    <script src="../assets/scripts/App-3a24d57a57.js"></script> <!-- endbuild -->
    <script>
            $('#flash-overlay-modal').modal();
        </script>

</body>




</html>

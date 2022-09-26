<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css?ver=<?php echo date("ymd-Gi", filemtime("./style/style.css")) ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div id="menu_res">
        <div id="close" class="close">X</div>
        <a href="#">HOME</a>
        <a href="#gamified_history">GAMIFIED HISTORY</a>
        <a href="#technology">TECHNOLOGY</a>
        <a href="#community_owned">COMMUNITY-OWNED</a>
        <button class="btn btn-white-bldng">
            Contact Us
            <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5.00002C0 4.86741 0.0526784 4.74024 0.146447 4.64647C0.240215 4.5527 0.367392 4.50002 0.5 4.50002H12.293L9.146 1.35402C9.05211 1.26013 8.99937 1.1328 8.99937 1.00002C8.99937 0.867245 9.05211 0.739908 9.146 0.646021C9.23989 0.552134 9.36722 0.49939 9.5 0.49939C9.63278 0.49939 9.76011 0.552134 9.854 0.646021L13.854 4.64602C13.9006 4.69247 13.9375 4.74764 13.9627 4.80839C13.9879 4.86913 14.0009 4.93425 14.0009 5.00002C14.0009 5.06579 13.9879 5.13091 13.9627 5.19165C13.9375 5.2524 13.9006 5.30758 13.854 5.35402L9.854 9.35402C9.76011 9.44791 9.63278 9.50065 9.5 9.50065C9.36722 9.50065 9.23989 9.44791 9.146 9.35402C9.05211 9.26013 8.99937 9.1328 8.99937 9.00002C8.99937 8.86725 9.05211 8.73991 9.146 8.64602L12.293 5.50002H0.5C0.367392 5.50002 0.240215 5.44734 0.146447 5.35357C0.0526784 5.25981 0 5.13263 0 5.00002Z" fill="#FAF7F1"/>
            </svg>
        </button>
    </div>
    <header>
        <img src="./assets/logo.svg" class="logo">
        <div class="menu">
            <a href="#">HOME</a>
            <a href="#gamified_history">GAMIFIED HISTORY</a>
            <a href="#technology">TECHNOLOGY</a>
            <a href="#community_owned">COMMUNITY-OWNED</a>
            <button class="btn btn-dark-bldng">
                Contact Us
                <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5.00002C0 4.86741 0.0526784 4.74024 0.146447 4.64647C0.240215 4.5527 0.367392 4.50002 0.5 4.50002H12.293L9.146 1.35402C9.05211 1.26013 8.99937 1.1328 8.99937 1.00002C8.99937 0.867245 9.05211 0.739908 9.146 0.646021C9.23989 0.552134 9.36722 0.49939 9.5 0.49939C9.63278 0.49939 9.76011 0.552134 9.854 0.646021L13.854 4.64602C13.9006 4.69247 13.9375 4.74764 13.9627 4.80839C13.9879 4.86913 14.0009 4.93425 14.0009 5.00002C14.0009 5.06579 13.9879 5.13091 13.9627 5.19165C13.9375 5.2524 13.9006 5.30758 13.854 5.35402L9.854 9.35402C9.76011 9.44791 9.63278 9.50065 9.5 9.50065C9.36722 9.50065 9.23989 9.44791 9.146 9.35402C9.05211 9.26013 8.99937 9.1328 8.99937 9.00002C8.99937 8.86725 9.05211 8.73991 9.146 8.64602L12.293 5.50002H0.5C0.367392 5.50002 0.240215 5.44734 0.146447 5.35357C0.0526784 5.25981 0 5.13263 0 5.00002Z" fill="#FAF7F1"/>
                </svg>
            </button>
        </div>
        <svg id="burger" class="burger" width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="22" height="3" rx="1.5" fill="#1D1C3A"/>
            <rect y="7" width="22" height="3" rx="1.5" fill="#1D1C3A"/>
            <rect y="14" width="22" height="3" rx="1.5" fill="#1D1C3A"/>
        </svg>
    </header>
    <section id="hero">
        <div class="overlay"></div>
        <canvas class="webgl" id="canvas"></canvas>
        <div class="text">
            <h1>BLOCKCHAIN<br>GAMING<br>STUDIOS</h1>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis hendrerit integer varius eleifend turpis nunc ultrices mauris. Tincidunt facilisis eget euismod fringilla potenti viverra aliquam, lobortis quam. Integer varius et interdum scelerisque pharetra sollicitudin. Vestibulum dolor eget enim faucibus diam hac.</p>
        </div>
        <a href="#gamified_history" class="scroll_div">
            <span>SCROLL DOWN</span>
            <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.24791 0.950409C4.35749 0.950409 4.46258 0.991454 4.54006 1.06452C4.61755 1.13758 4.66108 1.23667 4.66108 1.33999L4.66108 10.5288L7.26071 8.07671C7.33829 8.00355 7.44351 7.96246 7.55323 7.96246C7.66295 7.96246 7.76817 8.00355 7.84575 8.07671C7.92333 8.14986 7.96692 8.24908 7.96692 8.35253C7.96692 8.45599 7.92333 8.55521 7.84575 8.62836L4.54043 11.745C4.50205 11.7813 4.45646 11.8101 4.40626 11.8297C4.35607 11.8494 4.30226 11.8595 4.24791 11.8595C4.19356 11.8595 4.13975 11.8494 4.08956 11.8297C4.03936 11.8101 3.99377 11.7813 3.95539 11.745L0.650068 8.62836C0.572487 8.55521 0.528903 8.45599 0.528903 8.35253C0.528903 8.24908 0.572487 8.14986 0.650068 8.07671C0.72765 8.00355 0.832873 7.96246 0.942589 7.96246C1.05231 7.96246 1.15753 8.00355 1.23511 8.07671L3.83475 10.5288L3.83475 1.33999C3.83475 1.23667 3.87828 1.13758 3.95576 1.06452C4.03324 0.991454 4.13833 0.950409 4.24791 0.950409Z" fill="#1D1C3A"/>
            </svg>
        </a>
    </section>
    <section id="gamified_history">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 text-center">
                    <img src="./assets/Rock.png" alt="Rock" class="rock">
                </div>
                <div class="col-12 col-md-6">
                    <h4>
                        <svg width="35" height="41" viewBox="0 0 35 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M35 10.1036L17.5 0L0 10.1036L17.5 20.2073L35 10.1036Z" fill="#5FBEFE"/>
                            <path d="M0 30.3109L17.5 40.4145V20.2073L0 10.1036V30.3109Z" fill="#4785FF"/>
                            <path d="M34.9999 30.3109V10.1036L17.4999 20.2073V40.4145L34.9999 30.3109Z" fill="#222FFC"/>
                        </svg>
                        CREATING GAMIFIED HISTORY
                    </h4>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis hendrerit integer varius eleifend turpis nunc ultrices mauris. Tincidunt facilisis eget euismod fringilla potenti viverra aliquam, lobortis quam. Integer varius et interdum scelerisque pharetra sollicitudin.</p>
                    <br>
                    <button class="btn btn-dark-bldng">
                        Contact Us
                        <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5.00002C0 4.86741 0.0526784 4.74024 0.146447 4.64647C0.240215 4.5527 0.367392 4.50002 0.5 4.50002H12.293L9.146 1.35402C9.05211 1.26013 8.99937 1.1328 8.99937 1.00002C8.99937 0.867245 9.05211 0.739908 9.146 0.646021C9.23989 0.552134 9.36722 0.49939 9.5 0.49939C9.63278 0.49939 9.76011 0.552134 9.854 0.646021L13.854 4.64602C13.9006 4.69247 13.9375 4.74764 13.9627 4.80839C13.9879 4.86913 14.0009 4.93425 14.0009 5.00002C14.0009 5.06579 13.9879 5.13091 13.9627 5.19165C13.9375 5.2524 13.9006 5.30758 13.854 5.35402L9.854 9.35402C9.76011 9.44791 9.63278 9.50065 9.5 9.50065C9.36722 9.50065 9.23989 9.44791 9.146 9.35402C9.05211 9.26013 8.99937 9.1328 8.99937 9.00002C8.99937 8.86725 9.05211 8.73991 9.146 8.64602L12.293 5.50002H0.5C0.367392 5.50002 0.240215 5.44734 0.146447 5.35357C0.0526784 5.25981 0 5.13263 0 5.00002Z" fill="#FAF7F1"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section id="technology">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-5">
                    <h4>
                        <svg width="35" height="41" viewBox="0 0 35 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M35 10.1036L17.5 0L0 10.1036L17.5 20.2073L35 10.1036Z" fill="#5FBEFE"/>
                            <path d="M0 30.3109L17.5 40.4145V20.2073L0 10.1036V30.3109Z" fill="#4785FF"/>
                            <path d="M34.9999 30.3109V10.1036L17.4999 20.2073V40.4145L34.9999 30.3109Z" fill="#222FFC"/>
                        </svg>
                        BRIDGING PAST AND FUTURE
                    </h4>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis hendrerit integer varius eleifend turpis nunc ultrices mauris.</p>
                </div>
                <div class="col-12 col-lg-1"></div>
                <div class="col-12 col-lg-6 map">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis hendrerit integer varius eleifend turpis nunc ultrices mauris. Tincidunt facilisis eget euismod fringilla potenti viverra.</p>
                    <img src="./assets/map.svg" alt="Workplace" usemap="#workmap">

                    <map name="workmap">
                        <area shape="rect" alt="community" coords="480,0,1000,180" alt="community" href="#community">
                        <area shape="rect" alt="future" coords="0,990,430,1172" alt="future" href="#future">
                        <area shape="rect" alt="past" coords="1100,990,1400,1172" alt="past" href="#past">
                    </map>
                </div>
            </div>
        </div>
    </section>
    <section id="community_owned">
        <img src="./assets/element_2.svg" class="element_1">
        <img src="./assets/element_1.svg" class="element_2">
        <img src="./assets/element_3.svg" class="element_3">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>FOR GAMERS<br>BY GAMERS</h2>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum tellus nunc hac eu tellus at. Quisque sed quam pretium in. Orci, id quam lectus velit nunc erat eu ut ac. Massa quis dolor elit quam commodo id auctor interdum. Vestibulum gravida volutpat quam aliquam ultrices id mus nunc aliquam. Fringilla risus placerat adipiscing ut sed amet turpis dignissim. Senectus quisque arcu sit nam. Tincidunt enim interdum in sit eget.</p>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="text-center">
            <h2>Let’s create something<br>amazing <b>together</b>.</h2>
            <br>
            <button class="btn btn-white-bldng">
                Contact Us
                <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5.00002C0 4.86741 0.0526784 4.74024 0.146447 4.64647C0.240215 4.5527 0.367392 4.50002 0.5 4.50002H12.293L9.146 1.35402C9.05211 1.26013 8.99937 1.1328 8.99937 1.00002C8.99937 0.867245 9.05211 0.739908 9.146 0.646021C9.23989 0.552134 9.36722 0.49939 9.5 0.49939C9.63278 0.49939 9.76011 0.552134 9.854 0.646021L13.854 4.64602C13.9006 4.69247 13.9375 4.74764 13.9627 4.80839C13.9879 4.86913 14.0009 4.93425 14.0009 5.00002C14.0009 5.06579 13.9879 5.13091 13.9627 5.19165C13.9375 5.2524 13.9006 5.30758 13.854 5.35402L9.854 9.35402C9.76011 9.44791 9.63278 9.50065 9.5 9.50065C9.36722 9.50065 9.23989 9.44791 9.146 9.35402C9.05211 9.26013 8.99937 9.1328 8.99937 9.00002C8.99937 8.86725 9.05211 8.73991 9.146 8.64602L12.293 5.50002H0.5C0.367392 5.50002 0.240215 5.44734 0.146447 5.35357C0.0526784 5.25981 0 5.13263 0 5.00002Z" fill="#FAF7F1"/>
                </svg>
            </button>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <img src="./assets/logo_white.svg" class="logo">
                </div>
                <div class="col-12 col-md-1"></div>
                <div class="col-12 col-md-4 info">
                    <p>123 Market St. #22B<br>Charlottesville, California<br>44635</p>
                    <br>
                    <a href="tel:4345464356">(434) 546-4356</a>
                    <a href="mailto:contact@bldngblckstudios.com">contact@bldngblckstudios.com</a>
                </div>
                <div class="col-12 col-md-4 right">
                    <svg width="168" height="40" viewBox="0 0 168 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M98.095 11.9679C98.1105 12.3199 98.1105 12.6559 98.1105 13.0079C98.1259 23.68 90.2851 36 75.9464 36C71.7173 36 67.5654 34.736 64 32.368C64.6174 32.448 65.2348 32.48 65.8522 32.48C69.3558 32.48 72.7669 31.264 75.5297 29.008C72.1958 28.944 69.2632 26.688 68.2445 23.392C69.4175 23.632 70.6214 23.584 71.7636 23.248C68.1365 22.512 65.528 19.1999 65.5126 15.3439C65.5126 15.3119 65.5126 15.2799 65.5126 15.2479C66.593 15.8719 67.8123 16.2239 69.0471 16.2559C65.6361 13.8879 64.5711 9.16791 66.6393 5.4719C70.606 10.5279 76.4403 13.5839 82.7067 13.9199C82.0739 11.1199 82.9383 8.17591 84.9602 6.1919C88.0934 3.13589 93.0325 3.2959 95.9959 6.54391C97.7401 6.1919 99.4224 5.5199 100.95 4.5759C100.364 6.44791 99.1446 8.03191 97.524 9.03991C99.0674 8.84791 100.58 8.41591 102 7.77591C100.95 9.40792 99.6231 10.8159 98.095 11.9679Z" fill="#FAF7F1"/>
                    <path d="M161.736 8.64285C159.21 7.48366 156.5 6.62962 153.668 6.14048C153.616 6.13104 153.565 6.15463 153.538 6.20182C153.19 6.8215 152.804 7.62993 152.534 8.26535C149.487 7.80924 146.456 7.80924 143.472 8.26535C143.202 7.6158 142.802 6.8215 142.452 6.20182C142.425 6.15621 142.374 6.13261 142.322 6.14048C139.491 6.62806 136.782 7.4821 134.254 8.64285C134.232 8.65228 134.213 8.66802 134.201 8.68846C129.062 16.3654 127.655 23.8537 128.345 31.2491C128.348 31.2853 128.369 31.3199 128.397 31.3419C131.787 33.8316 135.071 35.3431 138.294 36.345C138.346 36.3608 138.401 36.3419 138.433 36.2994C139.196 35.2582 139.875 34.1604 140.458 33.0059C140.493 32.9383 140.46 32.8581 140.389 32.8313C139.311 32.4224 138.285 31.9238 137.298 31.3576C137.219 31.312 137.213 31.2003 137.285 31.1468C137.493 30.9911 137.701 30.8291 137.899 30.6655C137.935 30.6357 137.985 30.6294 138.027 30.6482C144.514 33.6099 151.537 33.6099 157.947 30.6482C157.989 30.6278 158.039 30.6341 158.077 30.664C158.275 30.8275 158.483 30.9911 158.692 31.1468C158.764 31.2003 158.76 31.312 158.681 31.3576C157.694 31.9348 156.668 32.4224 155.588 32.8298C155.518 32.8565 155.486 32.9383 155.521 33.0059C156.116 34.1588 156.796 35.2566 157.544 36.2978C157.575 36.3419 157.632 36.3608 157.683 36.345C160.922 35.3431 164.206 33.8316 167.596 31.3419C167.626 31.3199 167.645 31.2868 167.648 31.2507C168.474 22.7007 166.264 15.2739 161.787 8.69002C161.776 8.66802 161.758 8.65228 161.736 8.64285ZM141.427 26.7461C139.474 26.7461 137.865 24.9531 137.865 22.7511C137.865 20.5491 139.443 18.7561 141.427 18.7561C143.427 18.7561 145.02 20.5649 144.989 22.7511C144.989 24.9531 143.411 26.7461 141.427 26.7461ZM154.597 26.7461C152.645 26.7461 151.035 24.9531 151.035 22.7511C151.035 20.5491 152.613 18.7561 154.597 18.7561C156.597 18.7561 158.191 20.5649 158.16 22.7511C158.16 24.9531 156.597 26.7461 154.597 26.7461Z" fill="#FAF7F1"/>
                    <g clip-path="url(#clip0_25_2)">
                    <path d="M19 5.42437C24.0762 5.42437 24.6721 5.447 26.6785 5.53751C28.534 5.62048 29.5371 5.92973 30.2084 6.19373C31.0985 6.54069 31.7321 6.948 32.3958 7.61175C33.0596 8.27551 33.4744 8.90909 33.8138 9.79913C34.0703 10.4704 34.3871 11.4736 34.4701 13.3291C34.5606 15.3355 34.5832 15.9313 34.5832 21.0075C34.5832 26.0838 34.5606 26.6796 34.4701 28.686C34.3871 30.5415 34.0778 31.5447 33.8138 32.216C33.4669 33.106 33.0596 33.7396 32.3958 34.4033C31.7321 35.0671 31.0985 35.4819 30.2084 35.8214C29.5371 36.0778 28.534 36.3946 26.6785 36.4776C24.6721 36.5681 24.0762 36.5907 19 36.5907C13.9238 36.5907 13.3279 36.5681 11.3216 36.4776C9.46607 36.3946 8.46289 36.0854 7.79159 35.8214C6.90155 35.4744 6.26797 35.0671 5.60421 34.4033C4.94046 33.7396 4.52561 33.106 4.18619 32.216C3.92974 31.5447 3.61294 30.5415 3.52997 28.686C3.43946 26.6796 3.41683 26.0838 3.41683 21.0075C3.41683 15.9313 3.43946 15.3355 3.52997 13.3291C3.61294 11.4736 3.92219 10.4704 4.18619 9.79913C4.53315 8.90909 4.94046 8.27551 5.60421 7.61175C6.26797 6.948 6.90155 6.53315 7.79159 6.19373C8.46289 5.93728 9.46607 5.62048 11.3216 5.53751C13.3279 5.43946 13.9313 5.42437 19 5.42437ZM19 2C13.8408 2 13.1921 2.02263 11.1632 2.11314C9.14173 2.20365 7.76142 2.52799 6.55459 2.99563C5.30251 3.47836 4.24653 4.13458 3.19055 5.19055C2.13458 6.24653 1.48591 7.31004 0.995634 8.55459C0.527988 9.76141 0.203652 11.1417 0.11314 13.1707C0.022628 15.1921 0 15.8408 0 21C0 26.1592 0.022628 26.8079 0.11314 28.8368C0.203652 30.8583 0.527988 32.2386 0.995634 33.453C1.47837 34.705 2.13458 35.761 3.19055 36.817C4.24653 37.873 5.31005 38.5216 6.55459 39.0119C7.76142 39.4796 9.14173 39.8039 11.1707 39.8944C13.1997 39.9849 13.8408 40.0075 19.0076 40.0075C24.1743 40.0075 24.8154 39.9849 26.8444 39.8944C28.8658 39.8039 30.2462 39.4796 31.4605 39.0119C32.7126 38.5292 33.7686 37.873 34.8246 36.817C35.8805 35.761 36.5292 34.6975 37.0195 33.453C37.4871 32.2461 37.8115 30.8658 37.902 28.8368C37.9925 26.8079 38.0151 26.1667 38.0151 21C38.0151 15.8333 37.9925 15.1921 37.902 13.1632C37.8115 11.1417 37.4871 9.76141 37.0195 8.54704C36.5367 7.29496 35.8805 6.23898 34.8246 5.18301C33.7686 4.12703 32.7051 3.47836 31.4605 2.98809C30.2537 2.52044 28.8734 2.19611 26.8444 2.1056C24.8079 2.02263 24.1592 2 19 2Z" fill="#FAF7F1"/>
                    <path d="M19 11.2473C13.6145 11.2473 9.23978 15.6145 9.23978 21.0075C9.23978 26.4005 13.607 30.7678 19 30.7678C24.393 30.7678 28.7602 26.4005 28.7602 21.0075C28.7602 15.6145 24.393 11.2473 19 11.2473ZM19 27.3358C15.5002 27.3358 12.6642 24.4998 12.6642 21C12.6642 17.5002 15.5002 14.6641 19 14.6641C22.4998 14.6641 25.3358 17.5002 25.3358 21C25.3358 24.4998 22.4998 27.3358 19 27.3358Z" fill="#FAF7F1"/>
                    <path d="M29.1449 13.1329C30.4029 13.1329 31.4228 12.1131 31.4228 10.855C31.4228 9.59699 30.4029 8.57715 29.1449 8.57715C27.8868 8.57715 26.867 9.59699 26.867 10.855C26.867 12.1131 27.8868 13.1329 29.1449 13.1329Z" fill="#FAF7F1"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_25_2">
                    <rect width="38" height="38" fill="white" transform="translate(0 2)"/>
                    </clipPath>
                    </defs>
                    </svg>
                    <br>
                    <br>
                    <p>© 2022 BLDNG BLCK STUDIOS</p>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r70/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/stats.js/r11/Stats.js"></script>
    <script src='https://code.jquery.com/jquery-3.6.0.min.js' integrity='sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=' crossorigin='anonymous'></script>
    <script src="./scripts/map.min.js"></script>
    <script type="module" src="./scripts/app.js?ver=<?php echo date("ymd-Gi", filemtime("./scripts/app.js")) ?>"></script>
    <script>
        $(document).ready(function(e) {
            $('img[usemap]').rwdImageMaps();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#menu_res').css('height', window.innerHeight)
            $('#burger').click(function(){
                $('#menu_res').toggleClass('active_menu');
            });
            $('#close').click(function(){
                $('#menu_res').toggleClass('active_menu');
            });
            $('#menu_res a').click(function(){
                $('#menu_res').toggleClass('active_menu');
            });
        });
        $(window).resize(function(){
            $('#menu_res').css('height', window.innerHeight)
        });
    </script>
</body>
</html>
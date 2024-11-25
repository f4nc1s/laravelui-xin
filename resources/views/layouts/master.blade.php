<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">
  <head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{ env('APP_NAME', 'Xinui') }}">
    <meta name="author" content="{{ env('APP_NAME', 'Xinui') }}">
    <meta name="robots" content="noindex, nofollow">

     <!-- Favicon -->
     <link rel="icon" href="{{ asset('assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">

     <!-- Choices JS -->
    <script src="{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

    <!-- Main Theme JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
      <!-- Bootstrap Css -->
      <link id="style" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

      <!-- Style Css -->
      <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

      <!-- Icons Css -->
      <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">

      <!-- Node Waves Css -->
      <link href="{{ asset('assets/libs/node-waves/waves.min.css') }}" rel="stylesheet">

      <!-- Simplebar Css -->
      <link href="{{ asset('assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">

      <!-- Color Picker Css -->
      <link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/libs/@simonwep/pickr/themes/nano.min.css') }}">

      <!-- Choices Css -->
      <link rel="stylesheet" href="{{ asset('assets/libs/choices.js/public/assets/styles/choices.min.css') }}">

      <!-- FlatPickr CSS -->
      <link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}">

      <!-- Auto Complete CSS -->
      <link rel="stylesheet" href="{{ asset('assets/libs/@tarekraafat/autocomplete.js/css/autoComplete.css') }}">

      <!-- Swiper CSS -->
      <link rel="stylesheet" href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}">

    @yield('css')
     <!-- Include CSS files compiled by Vite -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('js')
  </head>

  <body class="">
    <!-- Switcher -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom d-block p-0">
            <div class="d-flex align-items-center justify-content-between p-3">
                <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <nav class="border-top border-block-start-dashed">
                <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                    <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home"
                        type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button>
                    <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile"
                        type="button" role="tab" aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
                </div>
            </nav>
        </div>
        <div class="offcanvas-body">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab"
                    tabindex="0">
                    <div class="">
                        <p class="switcher-style-head">Theme Color Mode:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-light-theme">
                                        Light
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-dark-theme">
                                        Dark
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Directions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-ltr">
                                        LTR
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-rtl">
                                        RTL
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Navigation Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-vertical">
                                        Vertical
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-horizontal">
                                        Horizontal
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style"
                                        id="switcher-horizontal">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-menu-styles">
                        <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-click">
                                        Menu Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-hover">
                                        Menu Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-hover">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-click">
                                        Icon Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-hover">
                                        Icon Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-hover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidemenu-layout-styles">
                        <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-default-menu">
                                        Default Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-default-menu" checked>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-closed-menu">
                                        Closed Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-closed-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icontext-menu">
                                        Icon Text
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icontext-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-overlay">
                                        Icon Overlay
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icon-overlay">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-detached">
                                        Detached
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-detached">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-double-menu">
                                        Double Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-double-menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Page Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-regular">
                                        Regular
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-regular"
                                    checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-classic">
                                        Classic
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-classic">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-modern">
                                        Modern
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-modern">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Layout Width Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-sm-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-full-width">
                                        Full Width
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width"
                                        checked>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-boxed">
                                        Boxed
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Menu Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Header Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-fixed" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Loader:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-enable">
                                        Enable
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-enable">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-disable">
                                        Disable
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-disable" checked>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
                    <div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Menu Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-light">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-dark" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu"
                                        type="radio" name="menu-colors" id="switcher-menu-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Header Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Header" type="radio" name="header-colors"
                                        id="switcher-header-light" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Header" type="radio" name="header-colors"
                                        id="switcher-header-dark">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Header" type="radio" name="header-colors"
                                        id="switcher-header-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Header" type="radio" name="header-colors"
                                        id="switcher-header-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Transparent Header" type="radio" name="header-colors"
                                        id="switcher-header-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Primary:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-1" type="radio"
                                        name="theme-primary" id="switcher-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-2" type="radio"
                                        name="theme-primary" id="switcher-primary1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary"
                                        id="switcher-primary2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary"
                                        id="switcher-primary3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary"
                                        id="switcher-primary4">
                                </div>
                                <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                    <div class="theme-container-primary"></div>
                                    <div class="pickr-container-primary"  onchange="updateChartColor(this.value)"></div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Background:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-1" type="radio"
                                        name="theme-background" id="switcher-background">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-2" type="radio"
                                        name="theme-background" id="switcher-background1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-3" type="radio" name="theme-background"
                                        id="switcher-background2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-4" type="radio"
                                        name="theme-background" id="switcher-background3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-5" type="radio"
                                        name="theme-background" id="switcher-background4">
                                </div>
                                <div class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                    <div class="theme-container-background"></div>
                                    <div class="pickr-container-background"></div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-image mb-3">
                            <p class="switcher-style-head">Menu With Background Image:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img1" type="radio"
                                        name="menu-background" id="switcher-bg-img">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img2" type="radio"
                                        name="menu-background" id="switcher-bg-img1">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img3" type="radio" name="menu-background"
                                        id="switcher-bg-img2">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img4" type="radio"
                                        name="menu-background" id="switcher-bg-img3">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img5" type="radio"
                                        name="menu-background" id="switcher-bg-img4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between canvas-footer flex-nowrap gap-2">
                    <a href="https://themeforest.net/user/spruko/portfolio" target="_blank" class="btn btn-primary text-nowrap">Buy Now</a>
                    <a href="https://themeforest.net/user/spruko/portfolio" target="_blank" class="btn btn-secondary text-nowrap">Our Portfolio</a>
                    <a href="javascript:void(0);" id="reset-all" class="btn btn-danger text-nowrap">Reset</a>
                </div>
            </div>
        </div>
      </div>
        <!-- End switcher -->
    <!-- Loader -->
    <div id="loader">
      <img src="{{ asset('assets/images/media/loader.svg') }}" alt="">
    </div>
    <!-- Loader -->
    <div class="page">
                  <!-- Start::main-header -->

				<header class="app-header sticky" id="header">

					<!-- Start::main-header-container -->
					<div class="main-header-container container-fluid">

						<!-- Start::header-content-left -->
						<div class="header-content-left">

							<!-- Start::header-element -->
							<div class="header-element">
								<div class="horizontal-logo">
									<a href="index.php.html" class="header-logo">
										<img src="../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
										<img src="../assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
										<img src="../assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
										<img src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
										<img src="../assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
										<img src="../assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
									</a>
								</div>
							</div>
							<!-- End::header-element -->

							<!-- Start::header-element -->
							<div class="header-element mx-lg-0 mx-2">
								<a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
							</div>
							<!-- End::header-element -->

							<!-- Start::header-element -->
							<div class="header-element header-search d-md-block d-none my-auto auto-complete-search">
								<!-- Start::header-link -->
								<input type="text" class="header-search-bar form-control" id="header-search" placeholder="Search anything here ..." spellcheck=false autocomplete="off" autocapitalize="off">
								<a href="javascript:void(0);" class="header-search-icon border-0">
									<i class="ri-search-line"></i>
								</a>
								<!-- End::header-link -->
							</div>
							<!-- End::header-element -->

						</div>
						<!-- End::header-content-left -->

						<!-- Start::header-content-right -->
						<ul class="header-content-right">

							<!-- Start::header-element -->
							<li class="header-element d-md-none d-block">
								<a href="javascript:void(0);" class="header-link" data-bs-toggle="modal" data-bs-target="#header-responsive-search">
									<!-- Start::header-link-icon -->
									<i class="bi bi-search header-link-icon d-flex"></i>
									<!-- End::header-link-icon -->
								</a>
							</li>
							<!-- End::header-element -->

							<!-- Start::header-element -->
							<li class="header-element country-selector dropdown">
								<!-- Start::header-link|dropdown-toggle -->
								<a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown">
									<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 header-link-icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802" />
									</svg>

								</a>
								<!-- End::header-link|dropdown-toggle -->
								<ul class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
									<li>
										<a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
											<div class="d-flex align-items-center justify-content-between">
												<div class="d-flex align-items-center">
													<span class="avatar avatar-rounded avatar-xs lh-1 me-2">
														<img src="../assets/images/flags/us_flag.jpg" alt="img">
													</span>
													English
												</div>
											</div>
										</a>
									</li>
									<li>
										<a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
											<span class="avatar avatar-rounded avatar-xs lh-1 me-2">
												<img src="../assets/images/flags/spain_flag.jpg" alt="img" >
											</span>
											español
										</a>
									</li>
									<li>
										<a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
											<span class="avatar avatar-rounded avatar-xs lh-1 me-2">
												<img src="../assets/images/flags/french_flag.jpg" alt="img" >
											</span>
											français
										</a>
									</li>
									<li>
										<a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
											<span class="avatar avatar-rounded avatar-xs lh-1 me-2">
												<img src="../assets/images/flags/uae_flag.jpg" alt="img" >
											</span>
											عربي
										</a>
									</li>
									<li>
										<a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
											<span class="avatar avatar-rounded avatar-xs lh-1 me-2">
												<img src="../assets/images/flags/germany_flag.jpg" alt="img" >
											</span>
											Deutsch
										</a>
									</li>
									<li>
										<a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
											<span class="avatar avatar-rounded avatar-xs lh-1 me-2">
												<img src="../assets/images/flags/china_flag.jpg" alt="img" >
											</span>
											中国人
										</a>
									</li>
									<li>
										<a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
											<span class="avatar avatar-rounded avatar-xs lh-1 me-2">
												<img src="../assets/images/flags/italy_flag.jpg" alt="img" >
											</span>
											Italiano
										</a>
									</li>
									<li>
										<a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
											<span class="avatar avatar-rounded avatar-xs lh-1 me-2">
												<img src="../assets/images/flags/russia_flag.jpg" alt="img" >
											</span>
											Русский
										</a>
									</li>
								</ul>
							</li>
							<!-- End::header-element -->

							<!-- Start::header-element -->
							<li class="header-element header-theme-mode">
								<!-- Start::header-link|layout-setting -->
								<a href="javascript:void(0);" class="header-link layout-setting">
									<span class="light-layout">
										<!-- Start::header-link-icon -->
										<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 header-link-icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
											<path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
										</svg>
										<!-- End::header-link-icon -->
									</span>
									<span class="dark-layout">
										<!-- Start::header-link-icon -->
										<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 header-link-icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
											<path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
										</svg>
										<!-- End::header-link-icon -->
									</span>
								</a>
								<!-- End::header-link|layout-setting -->
							</li>
							<!-- End::header-element -->

							<!-- Start::header-element -->
							<li class="header-element cart-dropdown dropdown">
								<!-- Start::header-link|dropdown-toggle -->
								<a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown">
									<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 header-link-icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
									</svg>
									<span class="badge bg-secondary rounded-pill header-icon-badge" id="cart-icon-badge">5</span>
								</a>
								<!-- End::header-link|dropdown-toggle -->
								<!-- Start::main-header-dropdown -->
								<div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
									<div class="p-3">
										<div class="d-flex align-items-center justify-content-between">
											<p class="mb-0 fs-15 fw-medium">Cart Items<span class="badge bg-primary2 text-fixed-white ms-1 fs-12 rounded-circle" id="cart-data">5</span></p>
											<div class="d-flex align-items-center gap-2">
												<span class="fs-12 fw-medium text-muted">Sub Total : </span>
												<h6 class="mb-0"> $740</h6>
											</div>
										</div>
									</div>
									<div class="dropdown-divider"></div>
									<ul class="list-unstyled mb-0" id="header-cart-items-scroll">
										<li class="dropdown-item">
											<div class="d-flex align-items-center cart-dropdown-item gap-3">
												<div class="lh-1">
													<span class="avatar avatar-xl bg-primary-transparent">
														<img src="../assets/images/ecommerce/png/30.png" alt="Wireless Headphones">
													</span>
												</div>
												<div class="flex-fill">
													<div class="d-flex align-items-center justify-content-between mb-0">
														<div class="mb-0 fs-14 fw-medium">
															<a href="cart.php.html">Wireless Headphones</a>
															<div class="text-truncate">
																<p class="mb-0 header-cart-text text-truncate fs-11 text-muted">Wireless freedom with crystal-clear sound and comfortable </p>
																<h6 class="fw-medium mb-0 mt-1"><span class="text-success fw-normal me-1 fs-11 d-inline-block">(Qty : 1)</span>$78</h6>
															</div>
														</div>
														<div class="text-end">
															<a href="javascript:void(0);" class="header-cart-remove dropdown-item-close"><i class="ri-close-line"></i></a>
															<h6 class="fw-medium mb-0 mt-3"><span class="text-info op-4 fw-normal me-1 fs-11 d-inline-block">Total :</span>$75</h6>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="dropdown-item">
											<div class="d-flex align-items-center cart-dropdown-item gap-3">
												<div class="lh-1">
													<span class="avatar avatar-xl bg-primary-transparent">
														<img src="../assets/images/ecommerce/png/29.png" alt="Ladies Hand Bag">
													</span>
												</div>
												<div class="flex-fill">
													<div class="d-flex align-items-center justify-content-between mb-0">
														<div class="mb-0 fs-14 fw-medium">
															<a href="cart.php.html">Ladies Hand Bag</a>
															<div class="text-truncate">
																<p class="mb-0 header-cart-text text-truncate fs-11 text-muted">Both fashion and functionality. </p>
																<h6 class="fw-medium mb-0 mt-1"><span class="text-success fw-normal me-1 fs-11 d-inline-block">(Qty : 2)</span>$15</h6>
															</div>
														</div>
														<div class="text-end">
															<a href="javascript:void(0);" class="header-cart-remove dropdown-item-close"><i class="ri-close-line"></i></a>
															<h6 class="fw-medium mb-0 mt-3"><span class="text-info op-4 fw-normal me-1 fs-11 d-inline-block">Total :</span>$30</h6>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="dropdown-item">
											<div class="d-flex align-items-center cart-dropdown-item gap-3">
												<div class="lh-1">
													<span class="avatar avatar-xl bg-primary-transparent">
														<img src="../assets/images/ecommerce/png/32.png" alt="Elegant Flower Pot">
													</span>
												</div>
												<div class="flex-fill">
													<div class="d-flex align-items-center justify-content-between mb-0">
														<div class="mb-0 fs-14 fw-medium">
															<a href="cart.php.html">Elegant Flower Pot</a>
															<div class="text-truncate">
																<p class="mb-0 header-cart-text text-truncate fs-11 text-muted">Add natural beauty to your space </p>
																<h6 class="fw-medium mb-0 mt-1"><span class="text-success fw-normal me-1 fs-11 d-inline-block">(Qty : 1)</span>$84</h6>
															</div>
														</div>
														<div class="text-end">
															<a href="javascript:void(0);" class="header-cart-remove dropdown-item-close"><i class="ri-close-line"></i></a>
															<h6 class="fw-medium mb-0 mt-3"><span class="text-info op-4 fw-normal me-1 fs-11 d-inline-block">Total :</span>$84</h6>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="dropdown-item">
											<div class="d-flex align-items-center cart-dropdown-item gap-3">
												<div class="lh-1">
													<span class="avatar avatar-xl bg-primary-transparent">
														<img src="../assets/images/ecommerce/png/12.png" alt="Kids' Party Wear Frock">
													</span>
												</div>
												<div class="flex-fill">
													<div class="d-flex align-items-center justify-content-between mb-0">
														<div class="mb-0 fs-14 fw-medium">
															<a href="cart.php.html">Kids' Party Wear Frock</a>
															<div class="text-truncate">
																<p class="mb-0 header-cart-text text-truncate fs-11 text-muted">Crafted from soft, breathable fabric and adorned with delightful </p>
																<h6 class="fw-medium mb-0 mt-1"><span class="text-success fw-normal me-1 fs-11 d-inline-block">(Qty : 1)</span>$37</h6>
															</div>
														</div>
														<div class="text-end">
															<a href="javascript:void(0);" class="header-cart-remove dropdown-item-close"><i class="ri-close-line"></i></a>
															<h6 class="fw-medium mb-0 mt-3"><span class="text-info op-4 fw-normal me-1 fs-11 d-inline-block">Total :</span>$37</h6>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="dropdown-item">
											<div class="d-flex align-items-center cart-dropdown-item gap-3">
												<div class="lh-1">
													<span class="avatar avatar-xl bg-primary-transparent">
														<img src="../assets/images/ecommerce/png/16.png" alt="Smart Watch">
													</span>
												</div>
												<div class="flex-fill">
													<div class="d-flex align-items-center justify-content-between mb-0">
														<div class="mb-0 fs-14 fw-medium">
															<a href="cart.php.html">Advanced Smart Watch</a>
															<div class="text-truncate">
																<p class="mb-0 header-cart-text text-truncate fs-11 text-muted">ultimate in wearable technology,combining cutting-edge </p>
																<h6 class="fw-medium mb-0 mt-1"><span class="text-success fw-normal me-1 fs-11 d-inline-block">(Qty : 2)</span>$29</h6>
															</div>
														</div>
														<div class="text-end">
															<a href="javascript:void(0);" class="header-cart-remove dropdown-item-close"><i class="ri-close-line"></i></a>
															<h6 class="fw-medium mb-0 mt-3"><span class="text-info op-4 fw-normal me-1 fs-11 d-inline-block">Total :</span>$48</h6>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
									<div class="p-3 empty-header-item border-top d-flex gap-2 align-items-center">
										<a href="checkout.php.html" class="btn flex-fill btn-primary btn-wave">Proceed to checkout</a>
									</div>
									<div class="p-5 empty-item d-none">
										<div class="text-center">
											<span class="avatar avatar-xl avatar-rounded bg-primary-transparent">
												<i class="ri-shopping-cart-2-line fs-2"></i>
											</span>
											<h6 class="fw-medium mb-1 mt-3">Your Cart is Empty</h6>
											<span class="mb-3 fw-normal fs-13 d-block">Add some items to make me happy :)</span>
											<a href="products.php.html" class="btn btn-primary1 btn-wave btn-sm m-1" data-abc="true">continue shopping <i class="bi bi-arrow-right ms-1"></i></a>
										</div>
									</div>
								</div>
								<!-- End::main-header-dropdown -->
							</li>
							<!-- End::header-element -->

							<!-- Start::header-element -->
							<li class="header-element notifications-dropdown d-xl-block d-none dropdown">
								<!-- Start::header-link|dropdown-toggle -->
								<a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" id="messageDropdown" aria-expanded="false">
									<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 header-link-icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
									</svg>
									<span class="header-icon-pulse bg-primary2 rounded pulse pulse-secondary"></span>
								</a>
								<!-- End::header-link|dropdown-toggle -->
								<!-- Start::main-header-dropdown -->
								<div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
									<div class="p-3">
										<div class="d-flex align-items-center justify-content-between">
											<p class="mb-0 fs-15 fw-medium">Notifications</p>
											<span class="badge bg-secondary text-fixed-white" id="notifiation-data">5 Unread</span>
										</div>
									</div>
									<div class="dropdown-divider"></div>
									<ul class="list-unstyled mb-0" id="header-notification-scroll">
										<li class="dropdown-item">
											<div class="d-flex align-items-center">
												<div class="pe-2 lh-1">
													<span class="avatar avatar-md avatar-rounded bg-primary">
														<img src="../assets/images/faces/1.jpg" alt="user1">
													</span>
												</div>
												<div class="flex-grow-1 d-flex align-items-center justify-content-between">
													<div>
														<p class="mb-0 fw-medium"><a href="chat.php.html">New Messages</a></p>
														<div class="text-muted fw-normal fs-12 header-notification-text text-truncate">Jane Sam sent you a message.</div>
														<div class="fw-normal fs-10 text-muted op-8">Now</div>
													</div>
													<div>
														<a href="javascript:void(0);" class="min-w-fit-content dropdown-item-close1">
															<i class="ri-close-line"></i>
														</a>
													</div>
												</div>
											</div>
										</li>
										<li class="dropdown-item">
											<div class="d-flex align-items-center">
												<div class="pe-2 lh-1">
													<span class="avatar avatar-md bg-primary avatar-rounded fs-20">
														<i class="fe fe-shopping-cart lh-1 "></i>
													</span>
												</div>
												<div class="flex-grow-1 d-flex align-items-center justify-content-between">
													<div>
														<p class="mb-0 fw-medium"><a href="chat.php.html">Order Updates</a></p>
														<div class="text-muted fw-normal fs-12 header-notification-text text-truncate">Order <span class="text-primary1">#54321</span> has been shipped.</div>
														<div class="fw-normal fs-10 text-muted op-8">2 hours ago</div>
													</div>
													<div>
														<a href="javascript:void(0);" class="min-w-fit-content dropdown-item-close1">
															<i class="ri-close-line"></i>
														</a>
													</div>
												</div>
											</div>
										</li>
										<li class="dropdown-item">
											<div class="d-flex align-items-center">
												<div class="pe-2 lh-1">
													<span class="avatar avatar-md bg-orange avatar-rounded">
														<img src="../assets/images/faces/10.jpg" alt="user1">
													</span>
												</div>
												<div class="flex-grow-1 d-flex align-items-center justify-content-between">
													<div>
														<p class="mb-0 fw-medium"><a href="chat.php.html">Comment on Post</a></p>
														<div class="text-muted fw-normal fs-12 header-notification-text text-truncate">Reacted: <span class="text-primary3">John Richard</span> on your next purchase!</div>
														<div class="fw-normal fs-10 text-muted op-8">2 hours ago</div>
													</div>
													<div>
														<a href="javascript:void(0);" class="min-w-fit-content dropdown-item-close1">
															<i class="ri-close-line"></i>
														</a>
													</div>
												</div>
											</div>
										</li>
										<li class="dropdown-item">
											<div class="d-flex align-items-center">
												<div class="pe-2 lh-1">
													<span class="avatar avatar-md bg-success avatar-rounded">
														<img src="../assets/images/faces/11.jpg" alt="user1">
													</span>
												</div>
												<div class="flex-grow-1 d-flex align-items-center justify-content-between">
													<div>
														<p class="mb-0 fw-medium"><a href="chat.php.html">Follow Request</a></p>
														<div class="text-muted fw-normal fs-12 header-notification-text text-truncate"><span class="text-info">Kelin Brown</span> has sent you the request.</div>
														<div class="fw-normal fs-10 text-muted op-8">1 Day ago</div>
													</div>
													<div>
														<a href="javascript:void(0);" class="min-w-fit-content dropdown-item-close1">
															<i class="ri-close-line"></i>
														</a>
													</div>
												</div>
											</div>
										</li>
										<li class="dropdown-item">
											<div class="d-flex align-items-center">
												<div class="pe-2 lh-1">
													<span class="avatar avatar-md bg-primary2 avatar-rounded">
														<i class="ri-gift-line lh-1 fs-16"></i>
													</span>
												</div>
												<div class="flex-grow-1 d-flex align-items-center justify-content-between">
													<div>
														<p class="mb-0 fw-medium"><a href="chat.php.html">Exclusive Offers</a></p>
														<div class="text-muted fw-normal fs-12 header-notification-text text-truncate">Enjoy<span class="text-success">20% off</span> on your next purchase!</div>
														<div class="fw-normal fs-10 text-muted op-8">5 hours ago</div>
													</div>
													<div>
														<a href="javascript:void(0);" class="min-w-fit-content dropdown-item-close1">
															<i class="ri-close-line"></i>
														</a>
													</div>
												</div>
											</div>
										</li>
									</ul>

									<div class="p-3 empty-header-item1 border-top">
										<div class="d-grid">
											<a href="javascript:void(0);" class="btn btn-primary btn-wave">View All</a>
										</div>
									</div>
									<div class="p-5 empty-item1 d-none">
										<div class="text-center">
											<span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">
												<i class="ri-notification-off-line fs-2"></i>
											</span>
											<h6 class="fw-medium mt-3">No New Notifications</h6>
										</div>
									</div>
								</div>
								<!-- End::main-header-dropdown -->
							</li>
							<!-- End::header-element -->

							<!-- Start::header-element -->
							<li class="header-element header-fullscreen">
								<!-- Start::header-link -->
								<a onclick="openFullscreen();" href="javascript:void(0);" class="header-link">
									<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 full-screen-open header-link-icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
									</svg>
									<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 full-screen-close header-link-icon d-none" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" d="M9 9V4.5M9 9H4.5M9 9 3.75 3.75M9 15v4.5M9 15H4.5M9 15l-5.25 5.25M15 9h4.5M15 9V4.5M15 9l5.25-5.25M15 15h4.5M15 15v4.5m0-4.5 5.25 5.25" />
									</svg>
								</a>
								<!-- End::header-link -->
							</li>
							<!-- End::header-element -->

							<!-- Start::header-element -->
							<li class="header-element dropdown">
								<!-- Start::header-link|dropdown-toggle -->
								<a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
									<div class="d-flex align-items-center">
										<div>
											<img src="../assets/images/faces/15.jpg" alt="img" class="avatar avatar-sm">
										</div>
									</div>
								</a>
								<!-- End::header-link|dropdown-toggle -->
								<ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end" aria-labelledby="mainHeaderProfile">
									<li>
										<div class="dropdown-item text-center border-bottom">
											<span>
												Mr.Henry
											</span>
											<span class="d-block fs-12 text-muted">UI/UX Designer</span>
										</div>
									</li>
									<li><a class="dropdown-item d-flex align-items-center" href="profile.php.html"><i class="fe fe-user p-1 rounded-circle bg-primary-transparent me-2 fs-16"></i>Profile</a></li>
									<li><a class="dropdown-item d-flex align-items-center" href="mail.php.html"><i class="fe fe-mail p-1 rounded-circle bg-primary-transparent me-2 fs-16"></i>Mail Inbox</a></li>
									<li><a class="dropdown-item d-flex align-items-center" href="file-manager.php.html"><i class="fe fe-database p-1 rounded-circle bg-primary-transparent klist me-2 fs-16"></i>File Manger<span class="badge bg-primary1 text-fixed-white ms-auto fs-9">2</span></a></li>
									<li><a class="dropdown-item d-flex align-items-center" href="mail-settings.php.html"><i class="fe fe-settings p-1 rounded-circle bg-primary-transparent ings me-2 fs-16"></i>Settings</a></li>
									<li class="border-top bg-light"><a class="dropdown-item d-flex align-items-center" href="chat.php.html"><i class="fe fe-help-circle p-1 rounded-circle bg-primary-transparent set me-2 fs-16"></i>Help</a></li>
									<li><a class="dropdown-item d-flex align-items-center" href="sign-in-cover.php.html"><i class="fe fe-lock p-1 rounded-circle bg-primary-transparent ut me-2 fs-16"></i>Log Out</a></li>
								</ul>
							</li>
							<!-- End::header-element -->

							<!-- Start::header-element -->
							<li class="header-element">
								<!-- Start::header-link|switcher-icon -->
								<a href="javascript:void(0);" class="header-link switcher-icon" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
									<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 header-link-icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
										<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
									</svg>
								</a>
								<!-- End::header-link|switcher-icon -->
							</li>
							<!-- End::header-element -->

						</ul>
						<!-- End::header-content-right -->

					</div>
					<!-- End::main-header-container -->

				</header>
					            <!-- End::main-header -->

            <!-- Start::main-sidebar -->

			<aside class="app-sidebar" id="sidebar">

				<!-- Start::main-sidebar-header -->
				<div class="main-sidebar-header">
					<a href="index.php.html" class="header-logo">
						<img src="../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
						<img src="../assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
						<img src="../assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
						<img src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
						<img src="../assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
						<img src="../assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
					</a>
				</div>
				<!-- End::main-sidebar-header -->

				<!-- Start::main-sidebar -->
				<div class="main-sidebar" id="sidebar-scroll">

					<!-- Start::nav -->
					<nav class="main-menu-container nav nav-pills flex-column sub-open">
						<div class="slide-left" id="slide-left">
							<svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
						</div>
						<ul class="main-menu">
							<!-- Start::slide__category -->
							<li class="slide__category"><span class="category-name">Main</span></li>
							<!-- End::slide__category -->

							<!-- Start::slide -->
							<li class="slide has-sub">
								<a href="javascript:void(0);" class="side-menu__item">
									<i class="ri-arrow-down-s-line side-menu__angle"></i>
									<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" /></svg>
									<span class="side-menu__label">Dashboards</span>
								</a>
								<ul class="slide-menu child1">
									<li class="slide side-menu__label1">
										<a href="javascript:void(0)">Dashboards</a>
									</li>
									<li class="slide">
										<a href="index.php.html" class="side-menu__item">Sales</a>
									</li>
									<li class="slide">
										<a href="index2.php.html" class="side-menu__item">Analytics</a>
									</li>
									<li class="slide">
										<a href="index3.php.html" class="side-menu__item">Ecommerce</a>
									</li>
									<li class="slide">
										<a href="index4.php.html" class="side-menu__item">CRM</a>
									</li>
									<li class="slide">
										<a href="index5.php.html" class="side-menu__item">HRM</a>
									</li>
									<li class="slide">
										<a href="index6.php.html" class="side-menu__item">NFT</a>
									</li>
									<li class="slide">
										<a href="index7.php.html" class="side-menu__item">Crypto</a>
									</li>
									<li class="slide">
										<a href="index8.php.html" class="side-menu__item">Jobs</a>
									</li>
									<li class="slide">
										<a href="index9.php.html" class="side-menu__item">Projects</a>
									</li>
									<li class="slide">
										<a href="index10.php.html" class="side-menu__item">Courses</a>
									</li>
									<li class="slide">
										<a href="index11.php.html" class="side-menu__item">Stocks</a>
									</li>
									<li class="slide">
										<a href="index12.php.html" class="side-menu__item">Medical</a>
									</li>
									<li class="slide">
										<a href="index13.php.html" class="side-menu__item">POS System</a>
									</li>
									<li class="slide">
										<a href="index14.php.html" class="side-menu__item">Podcast</a>
									</li>
									<li class="slide">
										<a href="index15.php.html" class="side-menu__item">School</a>
									</li>
									<li class="slide">
										<a href="index16.php.html" class="side-menu__item">Social Media</a>
									</li>
								</ul>
							</li>
							<!-- End::slide -->

							<!-- Start::slide__category -->
							<li class="slide__category"><span class="category-name">Web Apps</span></li>
							<!-- End::slide__category -->

							<!-- Start::slide -->
							<li class="slide has-sub">
								<a href="javascript:void(0);" class="side-menu__item">
									<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z" />
									</svg>
									<span class="side-menu__label">Apps</span>
									<i class="ri-arrow-down-s-line side-menu__angle"></i>
								</a>
								<ul class="slide-menu child1">
									<li class="slide side-menu__label1">
										<a href="javascript:void(0)">Apps</a>
									</li>
									<li class="slide has-sub">
										<a href="javascript:void(0);" class="side-menu__item">Ecommerce
											<i class="ri-arrow-down-s-line side-menu__angle"></i></a>
										<ul class="slide-menu child2">
											<li class="slide">
												<a href="add-products.php.html" class="side-menu__item">Add Products</a>
											</li>
											<li class="slide">
												<a href="cart.php.html" class="side-menu__item">Cart</a>
											</li>
											<li class="slide">
												<a href="checkout.php.html" class="side-menu__item">Checkout</a>
											</li>
											<li class="slide">
												<a href="edit-products.php.html" class="side-menu__item">Edit Products</a>
											</li>
											<li class="slide">
												<a href="order-details.php.html" class="side-menu__item">Order Details</a>
											</li>
											<li class="slide">
												<a href="orders.php.html" class="side-menu__item">Orders</a>
											</li>
											<li class="slide">
												<a href="products.php.html" class="side-menu__item">Products</a>
											</li>
											<li class="slide">
												<a href="product-details.php.html" class="side-menu__item">Products Details</a>
											</li>
											<li class="slide">
												<a href="products-list.php.html" class="side-menu__item">Products List</a>
											</li>
											<li class="slide">
												<a href="wishlist.php.html" class="side-menu__item">Wishlist</a>
											</li>
										</ul>
									</li>
									<li class="slide">
										<a href="full-calendar.php.html" class="side-menu__item">Full Calendar</a>
									</li>
									<li class="slide">
										<a href="gallery.php.html" class="side-menu__item">Gallery</a>
									</li>
									<li class="slide">
										<a href="sweet-alerts.php.html" class="side-menu__item">Sweet Alerts</a>
									</li>
									<li class="slide has-sub">
										<a href="javascript:void(0);" class="side-menu__item">Projects
											<i class="ri-arrow-down-s-line side-menu__angle"></i></a>
										<ul class="slide-menu child2">
											<li class="slide">
												<a href="projects-list.php.html" class="side-menu__item">Projects List</a>
											</li>
											<li class="slide">
												<a href="projects-overview.php.html" class="side-menu__item">Projects Overview</a>
											</li>
											<li class="slide">
												<a href="projects-create.php.html" class="side-menu__item">Create Project</a>
											</li>
										</ul>
									</li>
									<li class="slide has-sub">
										<a href="javascript:void(0);" class="side-menu__item">Task
											<i class="ri-arrow-down-s-line side-menu__angle"></i></a>
										<ul class="slide-menu child2">
											<li class="slide">
												<a href="task-kanban-board.php.html" class="side-menu__item">Kanban Board</a>
											</li>
											<li class="slide">
												<a href="task-list-view.php.html" class="side-menu__item">List View</a>
											</li>
											<li class="slide">
												<a href="task-details.php.html" class="side-menu__item">Task Details</a>
											</li>
										</ul>
									</li>
									<li class="slide has-sub">
										<a href="javascript:void(0);" class="side-menu__item">Jobs
											<i class="ri-arrow-down-s-line side-menu__angle"></i></a>
										<ul class="slide-menu child2">
											<li class="slide">
												<a href="job-details.php.html" class="side-menu__item">Job Details</a>
											</li>
											<li class="slide">
												<a href="job-company-search.php.html" class="side-menu__item">Search Company</a>
											</li>
											<li class="slide">
												<a href="job-search.php.html" class="side-menu__item">Search Jobs</a>
											</li>
											<li class="slide">
												<a href="job-post.php.html" class="side-menu__item">Job Post</a>
											</li>
											<li class="slide">
												<a href="jobs-list.php.html" class="side-menu__item">Jobs List</a>
											</li>
											<li class="slide">
												<a href="job-candidate-search.php.html" class="side-menu__item">Search Candidate</a>
											</li>
											<li class="slide">
												<a href="job-candidate-details.php.html" class="side-menu__item">Candidate Details</a>
											</li>
										</ul>
									</li>
									<li class="slide has-sub">
										<a href="javascript:void(0);" class="side-menu__item">NFT
											<i class="ri-arrow-down-s-line side-menu__angle"></i></a>
										<ul class="slide-menu child2">
											<li class="slide">
												<a href="nft-marketplace.php.html" class="side-menu__item">Market Place</a>
											</li>
											<li class="slide">
												<a href="nft-details.php.html" class="side-menu__item">NFT Details</a>
											</li>
											<li class="slide">
												<a href="nft-create.php.html" class="side-menu__item">Create NFT</a>
											</li>
											<li class="slide">
												<a href="nft-wallet-integration.php.html" class="side-menu__item">Wallet Integration</a>
											</li>
											<li class="slide">
												<a href="nft-live-auction.php.html" class="side-menu__item">Live Auction</a>
											</li>
										</ul>
									</li>
									<li class="slide has-sub">
										<a href="javascript:void(0);" class="side-menu__item">CRM
											<i class="ri-arrow-down-s-line side-menu__angle"></i></a>
										<ul class="slide-menu child2">
											<li class="slide">
												<a href="crm-contacts.php.html" class="side-menu__item">Contacts</a>
											</li>
											<li class="slide">
												<a href="crm-companies.php.html" class="side-menu__item">Companies</a>
											</li>
											<li class="slide">
												<a href="crm-deals.php.html" class="side-menu__item">Deals</a>
											</li>
											<li class="slide">
												<a href="crm-leads.php.html" class="side-menu__item">Leads</a>
											</li>
										</ul>
									</li>
									<li class="slide has-sub">
										<a href="javascript:void(0);" class="side-menu__item">Crypto
											<i class="ri-arrow-down-s-line side-menu__angle"></i></a>
										<ul class="slide-menu child2">
											<li class="slide">
												<a href="crypto-transactions.php.html" class="side-menu__item">Transactions</a>
											</li>
											<li class="slide">
												<a href="crypto-currency-exchange.php.html" class="side-menu__item">Currency Exchange</a>
											</li>
											<li class="slide">
												<a href="crypto-buy-sell.php.html" class="side-menu__item">Buy & Sell</a>
											</li>
											<li class="slide">
												<a href="crypto-marketcap.php.html" class="side-menu__item">Marketcap</a>
											</li>
											<li class="slide">
												<a href="crypto-wallet.php.html" class="side-menu__item">Wallet</a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<!-- End::slide -->

							<!-- Start::slide -->
							<li class="slide has-sub">
								<a href="javascript:void(0);" class="side-menu__item">
									<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75" />
									</svg>
									<span class="side-menu__label">Nested Menu</span>
									<i class="ri-arrow-down-s-line side-menu__angle"></i>
								</a>
								<ul class="slide-menu child1">
									<li class="slide side-menu__label1">
										<a href="javascript:void(0)">Nested Menu</a>
									</li>
									<li class="slide">
										<a href="javascript:void(0);" class="side-menu__item">Nested-1</a>
									</li>
									<li class="slide has-sub">
										<a href="javascript:void(0);" class="side-menu__item">Nested-2
											<i class="ri-arrow-down-s-line side-menu__angle"></i></a>
										<ul class="slide-menu child2">
											<li class="slide">
												<a href="javascript:void(0);" class="side-menu__item">Nested-2.1</a>
											</li>
											<li class="slide has-sub">
												<a href="javascript:void(0);" class="side-menu__item">Nested-2.2
													<i class="ri-arrow-down-s-line side-menu__angle"></i></a>
												<ul class="slide-menu child3">
													<li class="slide">
														<a href="javascript:void(0);" class="side-menu__item">Nested-2.2.1</a>
													</li>
													<li class="slide">
														<a href="javascript:void(0);" class="side-menu__item">Nested-2.2.2</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<!-- End::slide -->

							<!-- Start::slide__category -->
							<li class="slide__category"><span class="category-name">Pages</span></li>
							<!-- End::slide__category -->

							<!-- Start::slide -->
							<li class="slide has-sub">
								<a href="javascript:void(0);" class="side-menu__item">
									<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
									</svg>
									<span class="side-menu__label">Authentication</span>
									<i class="ri-arrow-down-s-line side-menu__angle"></i>
								</a>
								<ul class="slide-menu child1">
									<li class="slide side-menu__label1">
										<a href="javascript:void(0)">Authentication</a>
									</li>
									<li class="slide">
										<a href="coming-soon.php.html" class="side-menu__item">Coming Soon</a>
									</li>
									<li class="slide has-sub">
										<a href="javascript:void(0);" class="side-menu__item">Create Password
											<i class="ri-arrow-down-s-line side-menu__angle"></i></a>
										<ul class="slide-menu child2">
											<li class="slide">
												<a href="create-password-basic.php.html" class="side-menu__item">Basic</a>
											</li>
											<li class="slide">
												<a href="create-password-cover.php.html" class="side-menu__item">Cover</a>
											</li>
										</ul>
									</li>
									<li class="slide has-sub">
										<a href="javascript:void(0);" class="side-menu__item">Lock Screen
											<i class="ri-arrow-down-s-line side-menu__angle"></i></a>
										<ul class="slide-menu child2">
											<li class="slide">
												<a href="lockscreen-basic.php.html" class="side-menu__item">Basic</a>
											</li>
											<li class="slide">
												<a href="lockscreen-cover.php.html" class="side-menu__item">Cover</a>
											</li>
										</ul>
									</li>
									<li class="slide has-sub">
										<a href="javascript:void(0);" class="side-menu__item">Reset Password
											<i class="ri-arrow-down-s-line side-menu__angle"></i></a>
										<ul class="slide-menu child2">
											<li class="slide">
												<a href="reset-password-basic.php.html" class="side-menu__item">Basic</a>
											</li>
											<li class="slide">
												<a href="reset-password-cover.php.html" class="side-menu__item">Cover</a>
											</li>
										</ul>
									</li>
									<li class="slide has-sub">
										<a href="javascript:void(0);" class="side-menu__item">Sign Up
											<i class="ri-arrow-down-s-line side-menu__angle"></i></a>
										<ul class="slide-menu child2">
											<li class="slide">
												<a href="sign-up-basic.php.html" class="side-menu__item">Basic</a>
											</li>
											<li class="slide">
												<a href="sign-up-cover.php.html" class="side-menu__item">Cover</a>
											</li>
										</ul>
									</li>
									<li class="slide has-sub">
										<a href="javascript:void(0);" class="side-menu__item">Sign In
											<i class="ri-arrow-down-s-line side-menu__angle"></i></a>
										<ul class="slide-menu child2">
											<li class="slide">
												<a href="sign-in-basic.php.html" class="side-menu__item">Basic</a>
											</li>
											<li class="slide">
												<a href="sign-in-cover.php.html" class="side-menu__item">Cover</a>
											</li>
										</ul>
									</li>
									<li class="slide has-sub">
										<a href="javascript:void(0);" class="side-menu__item">Two Step Verification
											<i class="ri-arrow-down-s-line side-menu__angle"></i></a>
										<ul class="slide-menu child2">
											<li class="slide">
												<a href="two-step-verification-basic.php.html" class="side-menu__item">Basic</a>
											</li>
											<li class="slide">
												<a href="two-step-verification-cover.php.html" class="side-menu__item">Cover</a>
											</li>
										</ul>
									</li>
									<li class="slide">
										<a href="under-maintenance.php.html" class="side-menu__item">Under Maintenance</a>
									</li>
								</ul>
							</li>
							<!-- End::slide -->

							<!-- Start::slide -->
							<li class="slide has-sub">
								<a href="javascript:void(0);" class="side-menu__item">
									<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
									</svg>
									<span class="side-menu__label">Error</span>
									<i class="ri-arrow-down-s-line side-menu__angle"></i>
								</a>
								<ul class="slide-menu child1">
									<li class="slide side-menu__label1">
										<a href="javascript:void(0)">Error</a>
									</li>
									<li class="slide">
										<a href="error401.php.html" class="side-menu__item">401 - Error</a>
									</li>
									<li class="slide">
										<a href="error404.php.html" class="side-menu__item">404 - Error</a>
									</li>
									<li class="slide">
										<a href="error500.php.html" class="side-menu__item">500 - Error</a>
									</li>
								</ul>
							</li>
							<!-- End::slide -->

							<!-- Start::slide -->
							<li class="slide has-sub">
								<a href="javascript:void(0);" class="side-menu__item">
									<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
									</svg>
									<span class="side-menu__label">Pages</span>
									<i class="ri-arrow-down-s-line side-menu__angle"></i>
								</a>
								<ul class="slide-menu child1 pages-ul">
									<li class="slide side-menu__label1">
										<a href="javascript:void(0)">Pages</a>
									</li>
									<li class="slide has-sub">
										<a href="javascript:void(0);" class="side-menu__item">Blog
											<i class="ri-arrow-down-s-line side-menu__angle"></i></a>
										<ul class="slide-menu child2">
											<li class="slide">
												<a href="blog.php.html" class="side-menu__item">Blog</a>
											</li>
											<li class="slide">
												<a href="blog-details.php.html" class="side-menu__item">Blog Details</a>
											</li>
											<li class="slide">
												<a href="blog-create.php.html" class="side-menu__item">Create Blog</a>
											</li>
										</ul>
									</li>
									<li class="slide">
										<a href="chat.php.html" class="side-menu__item">Chat</a>
									</li>
									<li class="slide has-sub">
										<a href="javascript:void(0);" class="side-menu__item">Email
											<i class="ri-arrow-down-s-line side-menu__angle"></i></a>
										<ul class="slide-menu child2">
											<li class="slide">
												<a href="mail.php.html" class="side-menu__item">Mail App</a>
											</li>
											<li class="slide">
												<a href="mail-settings.php.html" class="side-menu__item">Mail Settings</a>
											</li>
										</ul>
									</li>
									<li class="slide">
										<a href="emptypage.php.html" class="side-menu__item">Empty</a>
									</li>
									<li class="slide">
										<a href="faqs.php.html" class="side-menu__item">FAQ's</a>
									</li>
									<li class="slide">
										<a href="file-manager.php.html" class="side-menu__item">File Manager</a>
									</li>
									<li class="slide has-sub">
										<a href="javascript:void(0);" class="side-menu__item">Invoice
											<i class="ri-arrow-down-s-line side-menu__angle"></i></a>
										<ul class="slide-menu child2">
											<li class="slide">
												<a href="invoice-create.php.html" class="side-menu__item">Create Invoice</a>
											</li>
											<li class="slide">
												<a href="invoice-details.php.html" class="side-menu__item">Invoice Details</a>
											</li>
											<li class="slide">
												<a href="invoice-list.php.html" class="side-menu__item">Invoice List</a>
											</li>
										</ul>
									</li>
									<li class="slide">
										<a href="landing.php.html" class="side-menu__item">Landing Page</a>
									</li>
									<li class="slide">
										<a href="pricing.php.html" class="side-menu__item">Pricing</a>
									</li>
									<li class="slide">
										<a href="profile.php.html" class="side-menu__item">Profile</a>
									</li>
									<li class="slide">
										<a href="profile-settings.php.html" class="side-menu__item">Profile Settings</a>
									</li>
									<li class="slide">
										<a href="reviews.php.html" class="side-menu__item">Reviews</a>
									</li>
									<li class="slide">
										<a href="search-results.php.html" class="side-menu__item">Search</a>
									</li>
									<li class="slide">
										<a href="team.php.html" class="side-menu__item">Team</a>
									</li>
									<li class="slide">
										<a href="terms-conditions.php.html" class="side-menu__item">Terms & Conditions</a>
									</li>
									<li class="slide">
										<a href="timeline.php.html" class="side-menu__item">Timeline</a>
									</li>
									<li class="slide">
										<a href="to-do-list.php.html" class="side-menu__item">To Do List</a>
									</li>
								</ul>
							</li>
							<!-- End::slide -->

							<!-- Start::slide__category -->
							<li class="slide__category"><span class="category-name">General</span></li>
							<!-- End::slide__category -->

							<!-- Start::slide -->
							<li class="slide has-sub">
								<a href="javascript:void(0);" class="side-menu__item">
									<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" d="M15.666 3.888A2.25 2.25 0 0 0 13.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 0 1-.75.75H9a.75.75 0 0 1-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 0 1-2.25 2.25H6.75A2.25 2.25 0 0 1 4.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 0 1 1.927-.184" />
									</svg>
									<span class="side-menu__label">Forms</span>
									<i class="ri-arrow-down-s-line side-menu__angle"></i>
								</a>
								<ul class="slide-menu child1">
									<li class="slide side-menu__label1">
										<a href="javascript:void(0)">Forms</a>
									</li>
									<li class="slide">
										<a href="form-advanced.php.html" class="side-menu__item">Form Advanced</a>
									</li>
									<li class="slide has-sub">
										<a href="javascript:void(0);" class="side-menu__item">Form Elements
											<i class="ri-arrow-down-s-line side-menu__angle"></i></a>
										<ul class="slide-menu child2">
											<li class="slide">
												<a href="form-inputs.php.html" class="side-menu__item">Inputs</a>
											</li>
											<li class="slide">
												<a href="form-check-radios.php.html" class="side-menu__item">Checks & Radios</a>
											</li>
											<li class="slide">
												<a href="form-input-group.php.html" class="side-menu__item">Input Group</a>
											</li>
											<li class="slide">
												<a href="form-select.php.html" class="side-menu__item">Form Select</a>
											</li>
											<li class="slide">
												<a href="form-range.php.html" class="side-menu__item">Range Slider</a>
											</li>
											<li class="slide">
												<a href="form-input-masks.php.html" class="side-menu__item">Input Masks</a>
											</li>
											<li class="slide">
												<a href="form-file-uploads.php.html" class="side-menu__item">File Uploads</a>
											</li>
											<li class="slide">
												<a href="form-datetime-pickers.php.html" class="side-menu__item">Date,Time Picker</a>
											</li>
											<li class="slide">
												<a href="form-color-pickers.php.html" class="side-menu__item">Color Pickers</a>
											</li>
										</ul>
									</li>
									<li class="slide">
										<a href="floating-labels.php.html" class="side-menu__item">Floating Labels</a>
									</li>
									<li class="slide">
										<a href="form-layout.php.html" class="side-menu__item">Form Layouts</a>
									</li>
									<li class="slide">
										<a href="form-wizards.php.html" class="side-menu__item">Form Wizards</a>
									</li>
									<li class="slide">
										<a href="quill-editor.php.html" class="side-menu__item">Quill Editor</a>
									</li>
									<li class="slide">
										<a href="form-validation.php.html" class="side-menu__item">Validation</a>
									</li>
									<li class="slide">
										<a href="form-select2.php.html" class="side-menu__item">Select2</a>
									</li>
								</ul>
							</li>
							<!-- End::slide -->

							<!-- Start::slide -->
							<li class="slide has-sub">
								<a href="javascript:void(0);" class="side-menu__item">
									<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
									</svg>
									<span class="side-menu__label">Ui Elements</span>
									<i class="ri-arrow-down-s-line side-menu__angle"></i>
								</a>
								<ul class="slide-menu child1 mega-menu">
									<li class="slide side-menu__label1">
										<a href="javascript:void(0)">Ui Elements</a>
									</li>
									<li class="slide">
										<a href="alerts.php.html" class="side-menu__item">Alerts</a>
									</li>
									<li class="slide">
										<a href="badge.php.html" class="side-menu__item">Badge</a>
									</li>
									<li class="slide">
										<a href="breadcrumb.php.html" class="side-menu__item">Breadcrumb</a>
									</li>
									<li class="slide">
										<a href="buttons.php.html" class="side-menu__item">Buttons</a>
									</li>
									<li class="slide">
										<a href="buttongroup.php.html" class="side-menu__item">Button Group</a>
									</li>
									<li class="slide">
										<a href="cards.php.html" class="side-menu__item">Cards</a>
									</li>
									<li class="slide">
										<a href="dropdowns.php.html" class="side-menu__item">Dropdowns</a>
									</li>
									<li class="slide">
										<a href="images-figures.php.html" class="side-menu__item">Images & Figures</a>
									</li>
									<li class="slide">
										<a href="links-interactions.php.html" class="side-menu__item">Links & Interactions</a>
									</li>
									<li class="slide">
										<a href="listgroup.php.html" class="side-menu__item">List Group</a>
									</li>
									<li class="slide">
										<a href="navs-tabs.php.html" class="side-menu__item">Navs & Tabs</a>
									</li>
									<li class="slide">
										<a href="object-fit.php.html" class="side-menu__item">Object Fit</a>
									</li>
									<li class="slide">
										<a href="pagination.php.html" class="side-menu__item">Pagination</a>
									</li>
									<li class="slide">
										<a href="popovers.php.html" class="side-menu__item">Popovers</a>
									</li>
									<li class="slide">
										<a href="progress.php.html" class="side-menu__item">Progress</a>
									</li>
									<li class="slide">
										<a href="spinners.php.html" class="side-menu__item">Spinners</a>
									</li>
									<li class="slide">
										<a href="toasts.php.html" class="side-menu__item">Toasts</a>
									</li>
									<li class="slide">
										<a href="tooltips.php.html" class="side-menu__item">Tooltips</a>
									</li>
									<li class="slide">
										<a href="typography.php.html" class="side-menu__item">Typography</a>
									</li>
								</ul>
							</li>
							<!-- End::slide -->

							<!-- Start::slide -->
							<li class="slide has-sub">
								<a href="javascript:void(0);" class="side-menu__item">
									<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" d="M4.098 19.902a3.75 3.75 0 0 0 5.304 0l6.401-6.402M6.75 21A3.75 3.75 0 0 1 3 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 0 0 3.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008Z" />
									</svg>
									<span class="side-menu__label">Advanced UI</span>
									<i class="ri-arrow-down-s-line side-menu__angle"></i>
								</a>
								<ul class="slide-menu child1">
									<li class="slide side-menu__label1">
										<a href="javascript:void(0)">Advanced Ui</a>
									</li>
									<li class="slide">
										<a href="accordions-collpase.php.html" class="side-menu__item">Accordions & Collapse</a>
									</li>
									<li class="slide">
										<a href="carousel.php.html" class="side-menu__item">Carousel</a>
									</li>
									<li class="slide">
										<a href="draggable-cards.php.html" class="side-menu__item">Draggable Cards</a>
									</li>
									<li class="slide">
										<a href="media-player.php.html" class="side-menu__item">Media Player</a>
									</li>
									<li class="slide">
										<a href="modals-closes.php.html" class="side-menu__item">Modals & Closes</a>
									</li>
									<li class="slide">
										<a href="navbar.php.html" class="side-menu__item">Navbar</a>
									</li>
									<li class="slide">
										<a href="offcanvas.php.html" class="side-menu__item">Offcanvas</a>
									</li>
									<li class="slide">
										<a href="placeholders.php.html" class="side-menu__item">Placeholders</a>
									</li>
									<li class="slide">
										<a href="ratings.php.html" class="side-menu__item">Ratings</a>
									</li>
									<li class="slide">
										<a href="ribbons.php.html" class="side-menu__item">Ribbons</a>
									</li>
									<li class="slide">
										<a href="scrollspy.php.html" class="side-menu__item">Scrollspy</a>
									</li>
									<li class="slide">
										<a href="sortable-list.php.html" class="side-menu__item">Sortable JS</a>
									</li>
									<li class="slide">
										<a href="swiperjs.php.html" class="side-menu__item">Swiper JS</a>
									</li>
									<li class="slide">
										<a href="tour.php.html" class="side-menu__item">Tour</a>
									</li>
								</ul>
							</li>
							<!-- End::slide -->

							<!-- Start::slide -->
							<li class="slide has-sub">
								<a href="javascript:void(0);" class="side-menu__item">
									<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 0 0-2.15-1.588H6.911a2.25 2.25 0 0 0-2.15 1.588L2.35 13.177a2.25 2.25 0 0 0-.1.661Z" />
									</svg>
									<span class="side-menu__label">Utilities</span>
									<i class="ri-arrow-down-s-line side-menu__angle"></i>
								</a>
								<ul class="slide-menu child1">
									<li class="slide side-menu__label1">
										<a href="javascript:void(0)">Utilities</a>
									</li>
									<li class="slide">
										<a href="avatars.php.html" class="side-menu__item">Avatars</a>
									</li>
									<li class="slide">
										<a href="borders.php.html" class="side-menu__item">Borders</a>
									</li>
									<li class="slide">
										<a href="breakpoints.php.html" class="side-menu__item">Breakpoints</a>
									</li>
									<li class="slide">
										<a href="colors.php.html" class="side-menu__item">Colors</a>
									</li>
									<li class="slide">
										<a href="columns.php.html" class="side-menu__item">Columns</a>
									</li>
									<li class="slide">
										<a href="css-grid.php.html" class="side-menu__item">Css Grid</a>
									</li>
									<li class="slide">
										<a href="flex.php.html" class="side-menu__item">Flex</a>
									</li>
									<li class="slide">
										<a href="gutters.php.html" class="side-menu__item">Gutters</a>
									</li>
									<li class="slide">
										<a href="helpers.php.html" class="side-menu__item">Helpers</a>
									</li>
									<li class="slide">
										<a href="position.php.html" class="side-menu__item">Position</a>
									</li>
									<li class="slide">
										<a href="more.php.html" class="side-menu__item">Additional Content</a>
									</li>
								</ul>
							</li>
							<!-- End::slide -->

							<!-- Start::slide -->
							<li class="slide">
								<a href="widgets.php.html" class="side-menu__item">
									<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
									</svg>
									<span class="side-menu__label">Widgets</span>
								</a>
							</li>
							<!-- End::slide -->

							<!-- Start::slide__category -->
							<li class="slide__category"><span class="category-name">Maps & Icons</span></li>
							<!-- End::slide__category -->

							<!-- Start::slide -->
							<li class="slide has-sub">
								<a href="javascript:void(0);" class="side-menu__item">
									<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498 4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 0 0-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0Z" />
									</svg>
									<span class="side-menu__label">Maps</span>
									<i class="ri-arrow-down-s-line side-menu__angle"></i>
								</a>
								<ul class="slide-menu child1">
									<li class="slide side-menu__label1">
										<a href="javascript:void(0)">Maps</a>
									</li>
									<li class="slide">
										<a href="vector-maps.php.html" class="side-menu__item">Vector Maps</a>
									</li>
									<li class="slide">
										<a href="leaflet-maps.php.html" class="side-menu__item">Leaflet Maps</a>
									</li>
									<li class="slide">
										<a href="google-maps.php.html" class="side-menu__item">Google Maps</a>
									</li>
								</ul>
							</li>
							<!-- End::slide -->

							<!-- Start::slide -->
							<li class="slide">
								<a href="icons.php.html" class="side-menu__item">
									<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
									</svg>
									<span class="side-menu__label">Icons</span>
								</a>
							</li>
							<!-- End::slide -->

							<!-- Start::slide__category -->
							<li class="slide__category"><span class="category-name">Tables & Charts</span></li>
							<!-- End::slide__category -->

							<!-- Start::slide -->
							<li class="slide has-sub">
								<a href="javascript:void(0);" class="side-menu__item">
									<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
									</svg>
									<span class="side-menu__label">Charts</span>
									<i class="ri-arrow-down-s-line side-menu__angle"></i>
								</a>
								<ul class="slide-menu child1">
									<li class="slide side-menu__label1">
										<a href="javascript:void(0)">Charts</a>
									</li>
									<li class="slide has-sub">
										<a href="javascript:void(0);" class="side-menu__item">Apex Charts
											<i class="ri-arrow-down-s-line side-menu__angle"></i></a>
										<ul class="slide-menu child2">
											<li class="slide">
												<a href="apex-line-charts.php.html" class="side-menu__item">Line Charts</a>
											</li>
											<li class="slide">
												<a href="apex-area-charts.php.html" class="side-menu__item">Area Charts</a>
											</li>
											<li class="slide">
												<a href="apex-column-charts.php.html" class="side-menu__item">Column Charts</a>
											</li>
											<li class="slide">
												<a href="apex-bar-charts.php.html" class="side-menu__item">Bar Charts</a>
											</li>
											<li class="slide">
												<a href="apex-mixed-charts.php.html" class="side-menu__item">Mixed Charts</a>
											</li>
											<li class="slide">
												<a href="apex-rangearea-charts.php.html" class="side-menu__item">Range Area Charts</a>
											</li>
											<li class="slide">
												<a href="apex-timeline-charts.php.html" class="side-menu__item">Timeline Charts</a>
											</li>
											<li class="slide">
												<a href="apex-funnel-charts.php.html" class="side-menu__item">Funnel Charts</a>
											</li>
											<li class="slide">
												<a href="apex-candlestick-charts.php.html" class="side-menu__item">CandleStick
													Charts</a>
											</li>
											<li class="slide">
												<a href="apex-boxplot-charts.php.html" class="side-menu__item">Boxplot Charts</a>
											</li>
											<li class="slide">
												<a href="apex-bubble-charts.php.html" class="side-menu__item">Bubble Charts</a>
											</li>
											<li class="slide">
												<a href="apex-scatter-charts.php.html" class="side-menu__item">Scatter Charts</a>
											</li>
											<li class="slide">
												<a href="apex-heatmap-charts.php.html" class="side-menu__item">Heatmap Charts</a>
											</li>
											<li class="slide">
												<a href="apex-treemap-charts.php.html" class="side-menu__item">Treemap Charts</a>
											</li>
											<li class="slide">
												<a href="apex-pie-charts.php.html" class="side-menu__item">Pie Charts</a>
											</li>
											<li class="slide">
												<a href="apex-radialbar-charts.php.html" class="side-menu__item">Radialbar Charts</a>
											</li>
											<li class="slide">
												<a href="apex-radar-charts.php.html" class="side-menu__item">Radar Charts</a>
											</li>
											<li class="slide">
												<a href="apex-polararea-charts.php.html" class="side-menu__item">Polararea Charts</a>
											</li>
											<li class="slide">
												<a href="apex-slope-charts.php.html" class="side-menu__item">Slope Charts</a>
											</li>
										</ul>
									</li>
									<li class="slide">
										<a href="chartjs-charts.php.html" class="side-menu__item">Chartjs Charts</a>
									</li>
									<li class="slide">
										<a href="echarts.php.html" class="side-menu__item">Echart Charts</a>
									</li>
								</ul>
							</li>
							<!-- End::slide -->

							<!-- Start::slide -->
							<li class="slide has-sub">
								<a href="javascript:void(0);" class="side-menu__item">
									<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 0 1-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0 1 12 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
									</svg>
									<span class="side-menu__label">Tables</span>
									<i class="ri-arrow-down-s-line side-menu__angle"></i>
								</a>
								<ul class="slide-menu child1">
									<li class="slide side-menu__label1">
										<a href="javascript:void(0)">Tables</a>
									</li>
									<li class="slide">
										<a href="tables.php.html" class="side-menu__item">Tables</a>
									</li>
									<li class="slide">
										<a href="grid-tables.php.html" class="side-menu__item">Grid JS Tables</a>
									</li>
									<li class="slide">
										<a href="data-tables.php.html" class="side-menu__item">Data Tables</a>
									</li>
								</ul>
							</li>
							<!-- End::slide -->

						</ul>
						<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
					</nav>
					<!-- End::nav -->

				</div>
				<!-- End::main-sidebar -->

			</aside>
            <!-- End::main-sidebar -->
      <!-- Start::app-content -->
      <div class="main-content app-content">
        @yield('content')
      </div>
      <!-- End::app-content -->

      <!-- Start::main-footer -->
      <footer class="footer mt-auto py-3 bg-white text-center">
        <div class="container">
          <span class="text-muted"> Copyright © <span id="year"></span>
            <a href="javascript:void(0);" class="text-dark fw-medium">Xintra</a>. Designed with <span class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);">
              <span class="fw-medium text-primary">Spruko</span>
            </a> All rights reserved </span>
        </div>
      </footer>
      <!-- End::main-footer -->
    </div>
    <!-- Start::main-scripts -->
    <!-- Scroll To Top -->
    <div class="scrollToTop">
      <span class="arrow">
        <i class="ti ti-arrow-narrow-up fs-20"></i>
      </span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->
     <!-- Popper JS -->
     <script src="{{ asset('assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>

     <!-- Bootstrap JS -->
     <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

     <!-- Node Waves JS-->
     <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

     <!-- Simplebar JS -->
     <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
     <script src="{{ asset('assets/js/simplebar.js') }}"></script>

     <!-- Auto Complete JS -->
     <script src="{{ asset('assets/libs/@tarekraafat/autocomplete.js/autoComplete.min.js') }}"></script>

     <!-- Color Picker JS -->
     <script src="{{ asset('assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>

     <!-- Date & Time Picker JS -->
     <script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>

     <!-- Apex Charts JS -->
     <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

     <!-- Swiper JS -->
     <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

     <!-- Crypto Dashboard -->
     <script src="{{ asset('assets/js/crypto-dashboard.js') }}"></script>

     <!-- Sticky JS -->
     <script src="{{ asset('assets/js/sticky.js') }}"></script>

     <!-- Defaultmenu JS -->
     <script src="{{ asset('assets/js/defaultmenu.min.js') }}"></script>

     <!-- Custom JS -->
     <script src="{{ asset('assets/js/custom.js') }}"></script>

     <!-- Custom-Switcher JS -->
     <script src="{{ asset('assets/js/custom-switcher.min.js') }}"></script>
  </body>
</html>

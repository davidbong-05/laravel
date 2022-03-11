<!DOCTYPE html>
{{--
Product Name: {{ theme()->getOption('product', 'description') }}
Author: KeenThemes
Purchase: {{ theme()->getOption('product', 'purchase') }}
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: {{ theme()->getOption('product', 'license') }}
--}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {!! theme()->printHtmlAttributes('html') !!} {{
theme()->printHtmlClasses('html') }}>
{{-- begin::Head --}}

<head>
    <meta charset="utf-8" />
    <title>{{ ucfirst(theme()->getOption('meta', 'title')) }} | Keenthemes</title>
    <meta name="description" content="{{ ucfirst(theme()->getOption('meta', 'description')) }}" />
    <meta name="keywords" content="{{ theme()->getOption('meta', 'keywords') }}" />
    <link rel="canonical" href="{{ ucfirst(theme()->getOption('meta', 'canonical')) }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{ asset(theme()->getDemo() . '/' .theme()->getOption('assets', 'favicon')) }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- begin::Fonts --}}
    {{ theme()->includeFonts() }}
    {{-- end::Fonts --}}

    @if (theme()->hasOption('page', 'assets/vendors/css'))
    {{-- begin::Page Vendor Stylesheets(used by this page) --}}
    @foreach (array_unique(theme()->getOption('page', 'assets/vendors/css')) as $file)
    {!! preloadCss(assetCustom($file)) !!}
    @endforeach
    {{-- end::Page Vendor Stylesheets --}}
    @endif

    @if (theme()->hasOption('page', 'assets/custom/css'))
    {{-- begin::Page Custom Stylesheets(used by this page) --}}
    @foreach (array_unique(theme()->getOption('page', 'assets/custom/css')) as $file)
    {!! preloadCss(assetCustom($file)) !!}
    @endforeach
    {{-- end::Page Custom Stylesheets --}}
    @endif

    @if (theme()->hasOption('assets', 'css'))
    {{-- begin::Global Stylesheets Bundle(used by all pages) --}}
    @foreach (array_unique(theme()->getOption('assets', 'css')) as $file)
    @if (strpos($file, 'plugins') !== false)
    {!! preloadCss(assetCustom($file)) !!}
    @else
    <link href="{{ assetCustom($file) }}" rel="stylesheet" type="text/css" />
    @endif
    @endforeach
    {{-- end::Global Stylesheets Bundle --}}
    @endif

    @if (theme()->getViewMode() === 'preview')
    {{ theme()->getView('partials/trackers/_ga-general') }}
    {{ theme()->getView('partials/trackers/_ga-tag-manager-for-head') }}
    @endif

    @yield('styles')
</head>
{{-- end::Head --}}

{{-- begin::Body --}}

<body {!! theme()->printHtmlAttributes('body') !!} {!! theme()->printHtmlClasses('body') !!} {!!
    theme()->printCssVariables('body') !!}>

    <!-- BEGIN: Content-->
    <div class="app-content p-4">
        <div class="content-body">
            <!-- Draggable cards section start -->
            <section id="draggable-cards">
                <!-- id the area for the dragging as card-drag-area -->
                <div class="row" id="card-drag-area">
                    <!-- class the item to be drag as draggable (only to change the cursor from arrow to grab)-->
                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Draggable Card 1</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Jelly beans sugar plum cheesecake cookie oat cake
                                    soufflé.Tootsie roll bonbon liquorice tiramisu pie
                                    powder.Donut sweet roll marzipan pastry cookie cake tootsie
                                    roll oat cake cookie.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12 draggable">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Draggable Card 2</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Jelly beans sugar plum cheesecake cookie oat cake
                                    soufflé.Tootsie roll bonbon liquorice tiramisu pie
                                    powder.Donut sweet roll marzipan pastry cookie cake tootsie
                                    roll oat cake cookie.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12 draggable">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Draggable Card 3</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Jelly beans sugar plum cheesecake cookie oat cake
                                    soufflé.Tootsie roll bonbon liquorice tiramisu pie
                                    powder.Donut sweet roll marzipan pastry cookie cake tootsie
                                    roll oat cake cookie.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12 draggable">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Draggable Card 4</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Jelly beans sugar plum cheesecake cookie oat cake
                                    soufflé.Tootsie roll bonbon liquorice tiramisu pie
                                    powder.Donut sweet roll marzipan pastry cookie cake tootsie
                                    roll oat cake cookie.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Draggable cards section end -->

            <!-- Sortable lists section start -->
            <section id="sortable-lists">
                <div class="row">
                    <!-- Basic List Group starts -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic List Group Sortable</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    The most basic list group is simply an unordered list with
                                    list items, and the proper classes.
                                </p>
                                <!-- id the list for the dragging as basic-list-group -->
                                <ul class="list-group" id="basic-list-group">
                                    <!-- class the item to be drag as draggable -->
                                    <li class="list-group-item draggable">
                                        <div class="d-flex">
                                            <img src="_asset/images/portrait/small/avatar-s-12.jpg"
                                                class="rounded-circle me-2" alt="img-placeholder" height="50"
                                                width="50" />
                                            <div class="more-info">
                                                <h5>Mary S. Navarre</h5>
                                                <span>Chupa chups tiramisu apple pie biscuit sweet roll
                                                    bonbon macaroon toffee icing.</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item draggable">
                                        <div class="d-flex">
                                            <img src="_asset/images/portrait/small/avatar-s-1.jpg"
                                                class="rounded-circle me-2" alt="img-placeholder" height="50"
                                                width="50" />
                                            <div class="more-info">
                                                <h5>Samuel M. Ellis</h5>
                                                <span>Toffee powder marzipan tiramisu. Cake cake dessert
                                                    danish.</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item draggable">
                                        <div class="d-flex">
                                            <img src="_asset/images/portrait/small/avatar-s-2.jpg"
                                                class="rounded-circle me-2" alt="img-placeholder" height="50"
                                                width="50" />
                                            <div class="more-info">
                                                <h5>Sandra C. Toney</h5>
                                                <span>Sugar plum fruitcake gummies marzipan liquorice
                                                    tiramisu. Pastry liquorice chupa chupsake</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item draggable">
                                        <div class="d-flex">
                                            <img src="_asset/images/portrait/small/avatar-s-3.jpg"
                                                class="rounded-circle me-2" alt="img-placeholder" height="50"
                                                width="50" />
                                            <div class="more-info">
                                                <h5>Cleveland C. Goins</h5>
                                                <span>Toffee powder marzipan tiramisu. Cake cake dessert
                                                    danish.</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item draggable">
                                        <div class="d-flex">
                                            <img src="_asset/images/portrait/small/avatar-s-4.jpg"
                                                class="rounded-circle me-2" alt="img-placeholder" height="50"
                                                width="50" />
                                            <div class="more-info">
                                                <h5>Linda M. English</h5>
                                                <span>Chupa chups tiramisu apple pie biscuit sweet roll
                                                    bonbon macaroon toffee icing.</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Basic List Group ends -->

                    <!-- Multiple List Group starts -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Multiple Lists</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Drag and drop items of more than one list. Add same group to
                                    group prop
                                </p>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <h4 class="my-1">People Group 1</h4>
                                        <!-- id the list group 1 for the dragging as multiple-list-group-a -->
                                        <ul class="list-group list-group-flush" id="multiple-list-group-a">
                                            <!-- class the item to be drag as draggable -->
                                            <li class="list-group-item draggable">
                                                <div class="d-flex">
                                                    <img src="_asset/images/portrait/small/avatar-s-12.jpg"
                                                        class="rounded-circle me-2" alt="img-placeholder" height="50"
                                                        width="50" />
                                                    <div class="more-info">
                                                        <h5>Mary S. Navarre</h5>
                                                        <span>Chupa chups tiramisu apple pie biscuit sweet
                                                            roll bonbon macaroon.</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item draggable">
                                                <div class="d-flex">
                                                    <img src="_asset/images/portrait/small/avatar-s-1.jpg"
                                                        class="rounded-circle me-2" alt="img-placeholder" height="50"
                                                        width="50" />
                                                    <div class="more-info">
                                                        <h5>Samuel M. Ellis</h5>
                                                        <span>Toffee powder marzipan tiramisu. Cake cake
                                                            dessert danish.</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item draggable">
                                                <div class="d-flex">
                                                    <img src="_asset/images/portrait/small/avatar-s-2.jpg"
                                                        class="rounded-circle me-2" alt="img-placeholder" height="50"
                                                        width="50" />
                                                    <div class="more-info">
                                                        <h5>Sandra C. Toney</h5>
                                                        <span>Sugar plum fruitcake gummies marzipan liquorice
                                                            tiramisu.</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item draggable">
                                                <div class="d-flex">
                                                    <img src="_asset/images/portrait/small/avatar-s-3.jpg"
                                                        class="rounded-circle me-2" alt="img-placeholder" height="50"
                                                        width="50" />
                                                    <div class="more-info">
                                                        <h5>Cleveland C. Goins</h5>
                                                        <span>Toffee powder marzipan tiramisu. Cake cake
                                                            dessert danish.</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item draggable">
                                                <div class="d-flex">
                                                    <img src="_asset/images/portrait/small/avatar-s-4.jpg"
                                                        class="rounded-circle me-2" alt="img-placeholder" height="50"
                                                        width="50" />
                                                    <div class="more-info">
                                                        <h5>Linda M. English</h5>
                                                        <span>Chupa chups tiramisu apple pie biscuit sweet
                                                            roll bonbon macaroon.</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <h4 class="my-1">People Group 2</h4>
                                        <!-- id the list group 2 for the dragging as multiple-list-group-b -->
                                        <ul class="list-group list-group-flush" id="multiple-list-group-b">
                                            <!-- class the item to be drag as draggable -->
                                            <li class="list-group-item draggable">
                                                <div class="d-flex">
                                                    <img src="_asset/images/portrait/small/avatar-s-12.jpg"
                                                        class="rounded-circle me-2" alt="img-placeholder" height="50"
                                                        width="50" />
                                                    <div class="more-info">
                                                        <h5>Mary S. Navarre</h5>
                                                        <span>Chupa chups tiramisu apple pie biscuit sweet
                                                            roll bonbon macaroon.</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item draggable">
                                                <div class="d-flex">
                                                    <img src="_asset/images/portrait/small/avatar-s-1.jpg"
                                                        class="rounded-circle me-2" alt="img-placeholder" height="50"
                                                        width="50" />
                                                    <div class="more-info">
                                                        <h5>Samuel M. Ellis</h5>
                                                        <span>Toffee powder marzipan tiramisu. Cake cake
                                                            dessert danish.</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item draggable">
                                                <div class="d-flex">
                                                    <img src="_asset/images/portrait/small/avatar-s-2.jpg"
                                                        class="rounded-circle me-2" alt="img-placeholder" height="50"
                                                        width="50" />
                                                    <div class="more-info">
                                                        <h5>Sandra C. Toney</h5>
                                                        <span>Sugar plum fruitcake gummies marzipan liquorice
                                                            tiramisu</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item draggable">
                                                <div class="d-flex">
                                                    <img src="_asset/images/portrait/small/avatar-s-3.jpg"
                                                        class="rounded-circle me-2" alt="img-placeholder" height="50"
                                                        width="50" />
                                                    <div class="more-info">
                                                        <h5>Cleveland C. Goins</h5>
                                                        <span>Toffee powder marzipan tiramisu. Cake cake
                                                            dessert danish.</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item draggable">
                                                <div class="d-flex">
                                                    <img src="_asset/images/portrait/small/avatar-s-4.jpg"
                                                        class="rounded-circle me-2" alt="img-placeholder" height="50"
                                                        width="50" />
                                                    <div class="more-info">
                                                        <h5>Linda M. English</h5>
                                                        <span>Chupa chups tiramisu apple pie biscuit sweet
                                                            roll bonbon macaroon.</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Multiple List Group ends -->
                </div>
            </section>
            <!-- Sortable lists section end -->

            <!-- Clone List Starts -->
            <section id="clone-lists">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Clone List</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Clone list items from another existing list.
                                </p>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <h4 class="my-1">Badge Source 1</h4>
                                        <!-- id the list group 1 for the dragging and cloning as badge-list-1 -->
                                        <div id="badge-list-1" class="demo-inline-spacing">
                                            <!-- class the item to be drag as draggable -->
                                            <span class="badge rounded-pill bg-secondary draggable">Youtube</span>
                                            <span class="badge rounded-pill bg-primary draggable">Facebook</span>
                                            <span class="badge rounded-pill bg-success draggable">Google</span>
                                            <span class="badge rounded-pill bg-danger draggable">Instagram</span>
                                            <span class="badge rounded-pill bg-info draggable">Twitter</span>
                                            <span class="badge rounded-pill bg-warning draggable">Discord</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <h4 class="my-1">Badge Source 2</h4>
                                        <!-- id the list group 2 for the dragging and cloning as badge-list-2 -->
                                        <div id="badge-list-2" class="demo-inline-spacing">
                                            <!-- class the item to be drag as draggable -->
                                            <span
                                                class="badge rounded-pill border border-secondary text-secondary draggable">Github</span>
                                            <span
                                                class="badge rounded-pill border border-primary text-primary draggable">Gitlab</span>
                                            <span
                                                class="badge rounded-pill border border-success text-success draggable">Slack</span>
                                            <span
                                                class="badge rounded-pill border border-danger text-danger draggable">Pintrest</span>
                                            <span
                                                class="badge rounded-pill border border-info text-info draggable">Tinder</span>
                                            <span
                                                class="badge rounded-pill border border-warning text-warning draggable">Amazon</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Clone List Ends -->

            <!-- With Handle Starts -->
            <section id="dd-with-handle">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Drag And Drop With Handle</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    You have to customize drag handle yourself using class
                                    <code>.handle</code>.
                                </p>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4 class="my-1">List One</h4>
                                        <!-- id the list group 1 for the dragging and cloning as handle-list-1 -->
                                        <ul class="list-group" id="handle-list-1">
                                            <li class="list-group-item">
                                                <!-- class the handle to be drag as handle -->
                                                <span class="handle me-50">+</span>Cras justo odio
                                            </li>
                                            <li class="list-group-item">
                                                <span class="handle me-50">+</span>Dapibus ac
                                                facilisis in
                                            </li>
                                            <li class="list-group-item">
                                                <span class="handle me-50">+</span>Morbi leo risus
                                            </li>
                                            <li class="list-group-item">
                                                <span class="handle me-50">+</span>Porta ac
                                                consectetur ac
                                            </li>
                                            <li class="list-group-item">
                                                <span class="handle me-50">+</span>Vestibulum at eros
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <h4 class="my-1">List Two</h4>
                                        <!-- id the list group 1 for the dragging and cloning as handle-list-2 -->
                                        <ul class="list-group" id="handle-list-2">
                                            <li class="list-group-item">
                                                <!-- class the handle to be drag as handle -->
                                                <span class="handle me-50">+</span>Cras justo odio
                                            </li>
                                            <li class="list-group-item">
                                                <span class="handle me-50">+</span>Dapibus ac
                                                facilisis in
                                            </li>
                                            <li class="list-group-item">
                                                <span class="handle me-50">+</span>Morbi leo risus
                                            </li>
                                            <li class="list-group-item">
                                                <span class="handle me-50">+</span>Porta ac
                                                consectetur ac
                                            </li>
                                            <li class="list-group-item">
                                                <span class="handle me-50">+</span>Vestibulum at eros
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- With Handle Ends -->
        </div>
    </div>
    <!-- END: Content-->
    @if (theme()->getOption('layout', 'loader/display') === true)
    {{ theme()->getView('layout/_loader') }}
    @endif

    @yield('content')

    {{-- begin::Javascript --}}
    @if (theme()->hasOption('assets', 'js'))
    {{-- begin::Global Javascript Bundle(used by all pages) --}}
    @foreach (array_unique(theme()->getOption('assets', 'js')) as $file)
    <script src="{{ asset(theme()->getDemo() . '/' .$file) }}"></script>
    @endforeach
    {{-- end::Global Javascript Bundle --}}
    @endif

    @if (theme()->hasOption('page', 'assets/vendors/js'))
    {{-- begin::Page Vendors Javascript(used by this page) --}}
    @foreach (array_unique(theme()->getOption('page', 'assets/vendors/js')) as $file)
    <script src="{{ asset(theme()->getDemo() . '/' .$file) }}"></script>
    @endforeach
    {{-- end::Page Vendors Javascript --}}
    @endif

    @if (theme()->hasOption('page', 'assets/custom/js'))
    {{-- begin::Page Custom Javascript(used by this page) --}}
    @foreach (array_unique(theme()->getOption('page', 'assets/custom/js')) as $file)
    <script src="{{ asset(theme()->getDemo() . '/' .$file) }}"></script>
    @endforeach
    {{-- end::Page Custom Javascript --}}
    @endif
    {{-- end::Javascript --}}

    @if (theme()->getViewMode() === 'preview')
    {{ theme()->getView('partials/trackers/_ga-tag-manager-for-body') }}
    @endif

    @yield('scripts')
    <script>
        $(function () {
            'use strict';

            // Draggable Cards
            dragula([document.getElementById('card-drag-area')]);

            // Sortable Lists
            dragula([document.getElementById('basic-list-group')]);
            dragula([document.getElementById('multiple-list-group-a'), document.getElementById('multiple-list-group-b')]);

            // Cloning
            dragula([document.getElementById('badge-list-1'), document.getElementById('badge-list-2')], {
            copy: true
            });

            // With Handles

            dragula([document.getElementById('handle-list-1'), document.getElementById('handle-list-2')], {
            moves: function (el, container, handle) {
            return handle.classList.contains('handle');
            }
            });
            });
    </script>
</body>
{{-- end::Body --}}

</html>

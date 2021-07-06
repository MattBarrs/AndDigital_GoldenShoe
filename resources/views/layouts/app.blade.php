<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="shortcut icon" sizes="114x114" href="{{ asset('images/logos/gold_shoe.png') }}">
    <title>Golden Shoe</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Golden Shoes') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">

            <a href="/">   <img src="/images/logos/logo_gs.png" style="border-radius:10px;margin-right: auto; margin-top: auto;margin-bottom: auto;width: 15%;"/></a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('summer_collection') }}">{{ __('Summer Collection') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('three_d_demo') }}">{{ __('3D Model Demo') }}</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1 style="margin-left:5px;">{{ __('Help Section') }}</h1></div>

                <br/><br/>
                <table style="margin-left:5px;">
                    <tr>
                        <td style="">
                            <div class="p-6">
                                <div class="flex items-center"style="display: inline;">
                                    <img src="/images/size_guide/size_guide.png" style="width:7%;height:7%;"/>
                                    <a href="/size_guide/" class="underline text-gray-900 dark:text-white">Size Guide</a>
                                </div>

                                <div class="ml-12">
                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                        Size guide is a fantastic way to calculate what size shoe you need!
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                                <div class="flex items-center"style="display: inline;">
                                    <img src="/images/delivery.png" style="width:7%;height:7%;"/>
                                    <a href="/delivery_estimates/" class="underline text-gray-900 dark:text-white">Delivery Estimates</a>
                                </div>

                                <div class="ml-12">
                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                        View the delivery estimates for all of your orders.
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                                <div class="flex items-center"style="display: inline;">
                                    <img src="/images/report_problem.png" style="width:7%;height:7%;"/>
                                    <a href="/report_problem/" class="underline text-gray-900 dark:text-white">Contact Customer Support</a>
                                </div>

                                <div class="ml-12">
                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                        Create a report to let us know if you found anything wrong with the website.
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                                <div class="flex items-center"style="display: inline;">
                                    <img src="/images/return.png" style="width:7%;height:7%;"/>
                                    <a href="/return_items/" class="underline text-gray-900 dark:text-white">Return Items</a>

                                    <div class="ml-12">
                                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                            Realised your order is not the one for shoe?
                                            <br/>
                                            We can get you the right size, the right colour, we're here to help!

                                        </div>
                                    </div>
                                </div>
                        </td>
                    </tr>
                </table>
                <br/><br/>

            </div>
        </div>
    </div>
</div>
</body>
<br/><br/><br/><br/><br/>
<footer align="center" style="background:#ffffff;padding:20px;text-align: center;">
    <div>
        <table>
            <thead>
            <tr>
                <td  rowspan="3">
                    <img src="/images/logos/logo_gs.png" style="border-radius:10px;margin-right: auto; margin-top: auto;margin-bottom: auto;width: 15%;"/>
                    +
                    <img src="/images/logos/logo_and.jpg" style="border-radius:10px;margin-right: auto; margin-top: auto;margin-bottom: auto;width: 15%;"/>
                </td>
                <td>
                    <a href="https://mobile.twitter.com/search?q=golden%20shoe%20&src=typed_query">
                        Visit us on our Twitter <img src="/images/logos/twitter.png" style="border-radius:10px;margin-right: auto; margin-top: auto;margin-bottom: auto;width: 5%;"/>
                    </a>
                </td>
            </tr>
            <tr>
                <td >
                    <a href="https://www.facebook.com/search/top?q=golden%20shoe">
                        Visit us on our Facebook <img src="/images/logos/fb.png" style="border-radius:10px;margin-right: auto; margin-top: auto;margin-bottom: auto;width: 5%;"/>
                    </a>
                </td>
            </tr>
            <tr>
                <td >
                    <a href="https://www.instagram.com/explore/search/keyword/?q=golden%20shoe">
                        Visit us on our Instagram <img src="/images/logos/insta.png" style="border-radius:10px;margin-right: auto; margin-top: auto;margin-bottom: auto;width: 5%;"/>
                    </a>
                </td>
            </tr>
            </thead>
        </table>
        <table>
            <thead>
            <tr>
                <td class="tg-0pky" rowspan="3">

                </td>
                <th class="tg-0pky">

                </th>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
            </tr>
            </thead>
        </table>


    </div>
    <div>

</html>

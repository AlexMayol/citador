@extends('layouts.app')


@section('content')

<div id="app" name="app">
    <datehours></datehours>
</div>
<div class="relative bg-gray-50">
    <div class="relative bg-white shadow">
        <div class="px-4 mx-auto max-w-7xl sm:px-6">
            <div class="flex items-center justify-between py-6 md:justify-start md:space-x-10">
                <div class="flex flex-1 w-0">
                    <a href="#" class="inline-flex">
                        <img class="w-auto h-8 sm:h-10"
                            src="https://tailwindui.com/img/logos/workflow-mark-on-white.svg" alt="Workflow">
                    </a>
                </div>
                <div class="-my-2 -mr-2 md:hidden">
                    <button type="button"
                        class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                        <!-- Heroicon name: menu -->
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
                <nav class="hidden space-x-10 md:flex">
                    <a href="#"
                        class="inline-flex items-center space-x-2 text-base font-medium leading-6 text-gray-500 transition duration-150 ease-in-out hover:text-gray-900">
                        Solutions
                    </a>
                    <a href="#"
                        class="text-base font-medium leading-6 text-gray-500 transition duration-150 ease-in-out hover:text-gray-900">
                        Pricing
                    </a>
                    <a href="#"
                        class="text-base font-medium leading-6 text-gray-500 transition duration-150 ease-in-out hover:text-gray-900">
                        Docs
                    </a>
                    <a href="#"
                        class="inline-flex items-center space-x-2 text-base font-medium leading-6 text-gray-500 transition duration-150 ease-in-out hover:text-gray-900">
                        More
                    </a>
                </nav>
                <div class="items-center justify-end hidden space-x-8 md:flex md:flex-1 lg:w-0">
                    <a href="#"
                        class="text-base font-medium leading-6 text-gray-500 whitespace-no-wrap transition duration-150 ease-in-out hover:text-gray-900">
                        Sign in
                    </a>
                    <span class="inline-flex rounded-md shadow-sm">
                        <a href="#"
                            class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">
                            Sign up
                        </a>
                    </span>
                </div>
            </div>
        </div>

        <!--
        Mobile menu, show/hide based on mobile menu state.
  
        Entering: "duration-200 ease-out"
          From: "opacity-0 scale-95"
          To: "opacity-100 scale-100"
        Leaving: "duration-100 ease-in"
          From: "opacity-100 scale-100"
          To: "opacity-0 scale-95"
      -->
        <div class="absolute inset-x-0 top-0 z-10 p-2 transition origin-top-right transform md:hidden">
            <div class="rounded-lg shadow-lg">
                <div class="bg-white divide-y-2 rounded-lg shadow-xs divide-gray-50">
                    <div class="px-5 pt-5 pb-6 space-y-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <img class="w-auto h-8"
                                    src="https://tailwindui.com/img/logos/workflow-mark-on-white.svg" alt="Workflow">
                            </div>
                            <div class="-mr-2">
                                <button type="button"
                                    class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                                    <!-- Heroicon name: x -->
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div>
                            <nav class="grid gap-y-8">
                                <a href="#"
                                    class="flex items-center p-3 -m-3 space-x-3 transition duration-150 ease-in-out rounded-md hover:bg-gray-50">
                                    <!-- Heroicon name: chart-bar -->
                                    <svg class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                    <div class="text-base font-medium leading-6 text-gray-900">
                                        Analytics
                                    </div>
                                </a>
                                <a href="#"
                                    class="flex items-center p-3 -m-3 space-x-3 transition duration-150 ease-in-out rounded-md hover:bg-gray-50">
                                    <!-- Heroicon name: cursor-click -->
                                    <svg class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                    </svg>
                                    <div class="text-base font-medium leading-6 text-gray-900">
                                        Engagement
                                    </div>
                                </a>
                                <a href="#"
                                    class="flex items-center p-3 -m-3 space-x-3 transition duration-150 ease-in-out rounded-md hover:bg-gray-50">
                                    <!-- Heroicon name: shield-check -->
                                    <svg class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                    <div class="text-base font-medium leading-6 text-gray-900">
                                        Security
                                    </div>
                                </a>
                                <a href="#"
                                    class="flex items-center p-3 -m-3 space-x-3 transition duration-150 ease-in-out rounded-md hover:bg-gray-50">
                                    <!-- Heroicon name: view-grid -->
                                    <svg class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                    </svg>
                                    <div class="text-base font-medium leading-6 text-gray-900">
                                        Integrations
                                    </div>
                                </a>
                                <a href="#"
                                    class="flex items-center p-3 -m-3 space-x-3 transition duration-150 ease-in-out rounded-md hover:bg-gray-50">
                                    <!-- Heroicon name: refresh -->
                                    <svg class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                    </svg>
                                    <div class="text-base font-medium leading-6 text-gray-900">
                                        Automations
                                    </div>
                                </a>
                            </nav>
                        </div>
                    </div>
                    <div class="px-5 py-6 space-y-6">
                        <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                            <a href="#"
                                class="text-base font-medium leading-6 text-gray-900 transition duration-150 ease-in-out hover:text-gray-700">
                                Pricing
                            </a>
                            <a href="#"
                                class="text-base font-medium leading-6 text-gray-900 transition duration-150 ease-in-out hover:text-gray-700">
                                Docs
                            </a>
                            <a href="#"
                                class="text-base font-medium leading-6 text-gray-900 transition duration-150 ease-in-out hover:text-gray-700">
                                Enterprise
                            </a>
                            <a href="#"
                                class="text-base font-medium leading-6 text-gray-900 transition duration-150 ease-in-out hover:text-gray-700">
                                Blog
                            </a>
                            <a href="#"
                                class="text-base font-medium leading-6 text-gray-900 transition duration-150 ease-in-out hover:text-gray-700">
                                Help Center
                            </a>
                            <a href="#"
                                class="text-base font-medium leading-6 text-gray-900 transition duration-150 ease-in-out hover:text-gray-700">
                                Guides
                            </a>
                            <a href="#"
                                class="text-base font-medium leading-6 text-gray-900 transition duration-150 ease-in-out hover:text-gray-700">
                                Security
                            </a>
                            <a href="#"
                                class="text-base font-medium leading-6 text-gray-900 transition duration-150 ease-in-out hover:text-gray-700">
                                Events
                            </a>
                        </div>
                        <div class="space-y-6">
                            <span class="flex w-full rounded-md shadow-sm">
                                <a href="#"
                                    class="flex items-center justify-center w-full px-4 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">
                                    Sign up
                                </a>
                            </span>
                            <p class="text-base font-medium leading-6 text-center text-gray-500">
                                Existing customer?
                                <a href="#"
                                    class="text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-500">
                                    Sign in
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main class="lg:relative">
        <div class="w-full pt-16 pb-20 mx-auto text-center max-w-7xl lg:py-48 lg:text-left">
            <div class="px-4 lg:w-1/2 sm:px-8 xl:pr-16">
                <h2
                    class="text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:text-5xl sm:leading-none md:text-6xl lg:text-5xl xl:text-6xl">
                    Data to enrich your
                    <br class="xl:hidden">
                    <span class="text-indigo-600">online business</span>
                </h2>
                <p class="max-w-md mx-auto mt-3 text-lg text-gray-500 sm:text-xl md:mt-5 md:max-w-3xl">
                    Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt
                    amet fugiat veniam occaecat fugiat aliqua.
                </p>
                <div class="mt-10 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow">
                        <a href="#"
                            class="flex items-center justify-center w-full px-8 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo md:py-4 md:text-lg md:px-10">
                            Get started
                        </a>
                    </div>
                    <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                        <a href="#"
                            class="flex items-center justify-center w-full px-8 py-3 text-base font-medium leading-6 text-indigo-600 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-indigo-500 focus:outline-none focus:border-indigo-300 focus:shadow-outline-indigo md:py-4 md:text-lg md:px-10">
                            Live demo
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative w-full h-64 sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 lg:h-full">
            <img class="absolute inset-0 object-cover w-full h-full"
                src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80"
                alt="Woman on her phone">
        </div>
    </main>
</div>

@endsection
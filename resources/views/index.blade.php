<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Currency Man</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <h2 style="font-size: 2rem; margin-bottom: 0">
                $ Currency Man
            </h2>
        </div>

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6">
                    <div class="flex items-center">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                             fill="#a0aec0"
                             x="0px" y="0px"
                             width="24px" height="24px" viewBox="0 0 71.682 71.682"
                             style="enable-background:new 0 0 71.682 71.682;"
                             xml:space="preserve">
<g>
    <g>
        <path d="M48.161,33.825l0.672,0.447c-1.121,0.673-2.912,1.12-5.377,1.567V34.72c2.017-2.017,3.137-4.704,3.137-7.616h1.347v-5.376
			h-4.033v5.376h1.344c0,2.465-0.896,4.479-2.24,6.271l-3.584-4.032h-7.617l-3.359,3.81c-1.344-1.568-2.24-3.81-2.24-6.272h1.344
			v-5.376h-4.031v5.601h1.344c0,2.912,1.12,5.601,3.136,7.616v1.119c-2.24-0.447-4.032-0.896-5.376-1.567l0.672-0.447l-2.688-4.704
			l-3.584,2.016l2.688,4.704l1.344-0.896c1.568,1.119,4.032,1.792,6.944,2.24v2.463c-1.344,1.346-2.464,3.139-2.912,5.151h-1.567
			v5.375h4.031v-5.149h-0.896c0.448-1.344,1.12-2.688,2.016-3.81l3.136,3.81h7.617l3.137-3.81c0.896,1.119,1.566,2.466,2.017,3.81
			H43.68v5.377h4.031v-5.377h-1.568c-0.447-2.019-1.565-3.81-2.91-5.15v-2.465c2.91-0.447,5.375-1.346,6.943-2.241l1.344,0.896
			l2.688-4.702l-3.584-2.018L48.161,33.825z"/>
        <path d="M64.96,0H6.72C2.912,0,0,2.912,0,6.721v58.241c0,3.808,2.912,6.72,6.72,6.72h58.24c3.812,0,6.722-2.912,6.722-6.72V6.721
			C71.68,3.136,68.544,0,64.96,0z M25.088,4.929c1.344,0,2.688,1.119,2.688,2.688c0,1.568-1.12,2.688-2.688,2.688
			c-1.344,0-2.688-1.12-2.688-2.688C22.401,6.049,23.521,4.929,25.088,4.929z M17.472,4.929c1.345,0,2.688,1.119,2.688,2.688
			c0,1.568-1.12,2.688-2.688,2.688c-1.567,0-2.688-1.12-2.688-2.688C14.784,6.049,16.128,4.929,17.472,4.929z M10.08,4.929
			c1.344,0,2.688,1.119,2.688,2.688c0,1.568-1.12,2.688-2.688,2.688s-2.688-1.12-2.688-2.688C7.392,6.049,8.512,4.929,10.08,4.929z
			 M63.841,59.361c0,2.464-2.018,4.479-4.479,4.479H12.321c-2.464,0-4.48-2.016-4.48-4.479v-40.32c0-2.464,2.017-4.479,4.48-4.479
			h19.04c4.256,0,4.479,0,4.479-2.239c0-2.912,2.016-4.48,4.48-4.48h19.039c2.466,0,4.48,2.017,4.48,4.48L63.841,59.361
			L63.841,59.361z"/>
    </g>
</g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g></svg>
                        <div class="ml-4 text-lg leading-7 font-semibold">
                            <span class="underline text-gray-900 dark:text-white">
                                Crawler
                            </span>
                        </div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Our crawlers automatically collect the most up to date currency rates from reliable websites
                            and store them into the database for future analytics and processing.
                        </div>
                    </div>
                </div>

                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                    <div class="flex items-center">


                        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <g>
                                    <path d="M7.4831 10.261V16.9547" stroke="#a0aec0" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.0368 7.05737V16.9553" stroke="#a0aec0" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16.5158 13.7983V16.9552" stroke="#a0aec0" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M2.30005 12.0369C2.30005 4.73479 4.73479 2.30005 12.0369 2.30005C19.339 2.30005 21.7737 4.73479 21.7737 12.0369C21.7737 19.339 19.339 21.7737 12.0369 21.7737C4.73479 21.7737 2.30005 19.339 2.30005 12.0369Z"
                                          stroke="#a0aec0" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </g>
                            </g>
                        </svg>

                        <div class="ml-4 text-lg leading-7 font-semibold">
                            <span
                                class="underline text-gray-900 dark:text-white">
                                Charts
                            </span>
                        </div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            We provide charts for you to view and compare the rates, choose a desired time range and
                            export the chart in case needed.
                        </div>
                    </div>
                </div>

                <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                    <div class="flex items-center">

                        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M14.2929 4.29289C14 4.58579 14 5.05719 14 6C14 6.94281 14 7.41421 14.2929 7.70711C14.5858 8 15.0572 8 16 8H18C18.9428 8 19.4142 8 19.7071 7.70711C20 7.41421 20 6.94281 20 6C20 5.05719 20 4.58579 19.7071 4.29289C19.4142 4 18.9428 4 18 4H16C15.0572 4 14.5858 4 14.2929 4.29289ZM4.29289 16.2929C4 16.5858 4 17.0572 4 18C4 18.9428 4 19.4142 4.29289 19.7071C4.58579 20 5.05719 20 6 20H8C8.94281 20 9.41421 20 9.70711 19.7071C10 19.4142 10 18.9428 10 18C10 17.0572 10 16.5858 9.70711 16.2929C9.41421 16 8.94281 16 8 16H6C5.05719 16 4.58579 16 4.29289 16.2929ZM14 14C14 13.0572 14 12.5858 14.2929 12.2929C14.5858 12 15.0572 12 16 12H18C18.9428 12 19.4142 12 19.7071 12.2929C20 12.5858 20 13.0572 20 14V18C20 18.9428 20 19.4142 19.7071 19.7071C19.4142 20 18.9428 20 18 20H16C15.0572 20 14.5858 20 14.2929 19.7071C14 19.4142 14 18.9428 14 18V14ZM4.29289 4.29289C4 4.58579 4 5.05719 4 6V10C4 10.9428 4 11.4142 4.29289 11.7071C4.58579 12 5.05719 12 6 12H8C8.94281 12 9.41421 12 9.70711 11.7071C10 11.4142 10 10.9428 10 10V6C10 5.05719 10 4.58579 9.70711 4.29289C9.41421 4 8.94281 4 8 4H6C5.05719 4 4.58579 4 4.29289 4.29289Z"
                                  fill="#a0aec0"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M4.82324 4.82324L4.82567 4.82187C4.8276 4.82086 4.83092 4.81924 4.83596 4.81717C4.85774 4.80821 4.90611 4.79291 5.00266 4.77993C5.21339 4.7516 5.50739 4.75001 6 4.75001H8C8.49261 4.75001 8.78661 4.7516 8.99734 4.77993C9.09389 4.79291 9.14225 4.80821 9.16403 4.81717C9.16908 4.81924 9.17239 4.82086 9.17433 4.82187L9.17676 4.82324L9.17814 4.82568C9.17915 4.82761 9.18077 4.83093 9.18284 4.83597C9.1918 4.85775 9.20709 4.90611 9.22008 5.00267C9.24841 5.21339 9.25 5.5074 9.25 6.00001V10C9.25 10.4926 9.24841 10.7866 9.22008 10.9973C9.20709 11.0939 9.1918 11.1423 9.18284 11.164C9.18077 11.1691 9.17915 11.1724 9.17814 11.1743L9.17676 11.1768L9.17433 11.1781C9.17239 11.1792 9.16908 11.1808 9.16403 11.1828C9.14225 11.1918 9.09389 11.2071 8.99734 11.2201C8.78661 11.2484 8.49261 11.25 8 11.25H6C5.50739 11.25 5.21339 11.2484 5.00266 11.2201C4.90611 11.2071 4.85774 11.1918 4.83596 11.1828C4.83092 11.1808 4.8276 11.1792 4.82567 11.1781L4.82324 11.1768L4.82186 11.1743C4.82085 11.1724 4.81923 11.1691 4.81716 11.164C4.8082 11.1423 4.79291 11.0939 4.77992 10.9973C4.75159 10.7866 4.75 10.4926 4.75 10V6.00001C4.75 5.5074 4.75159 5.21339 4.77992 5.00267C4.79291 4.90611 4.8082 4.85775 4.81716 4.83597C4.81923 4.83093 4.82085 4.82761 4.82186 4.82568L4.82324 4.82324ZM5.95525 3.25C5.97013 3.25001 5.98504 3.25001 6 3.25001H8C8.01496 3.25001 8.02987 3.25001 8.04475 3.25C8.47756 3.24995 8.8744 3.24991 9.19721 3.29331C9.55269 3.3411 9.92841 3.45355 10.2374 3.76257C10.5465 4.07159 10.6589 4.44732 10.7067 4.8028C10.7501 5.12561 10.7501 5.52245 10.75 5.95526C10.75 5.97014 10.75 5.98505 10.75 6.00001V10C10.75 10.015 10.75 10.0299 10.75 10.0448C10.7501 10.4776 10.7501 10.8744 10.7067 11.1972C10.6589 11.5527 10.5465 11.9284 10.2374 12.2374C9.92841 12.5465 9.55269 12.6589 9.19721 12.7067C8.87439 12.7501 8.47756 12.7501 8.04474 12.75C8.02987 12.75 8.01496 12.75 8 12.75H6C5.98504 12.75 5.97013 12.75 5.95526 12.75C5.52244 12.7501 5.1256 12.7501 4.80279 12.7067C4.44731 12.6589 4.07159 12.5465 3.76256 12.2374C3.45354 11.9284 3.34109 11.5527 3.2933 11.1972C3.2499 10.8744 3.24994 10.4776 3.25 10.0448C3.25 10.0299 3.25 10.015 3.25 10V6.00001C3.25 5.98505 3.25 5.97013 3.25 5.95526C3.24994 5.52244 3.2499 5.12561 3.2933 4.8028C3.34109 4.44732 3.45354 4.07159 3.76256 3.76257C4.07159 3.45355 4.44731 3.3411 4.80279 3.29331C5.1256 3.24991 5.52243 3.24995 5.95525 3.25ZM14.8257 4.82187L14.8232 4.82324L14.8219 4.82568C14.8209 4.82761 14.8192 4.83093 14.8172 4.83597C14.8082 4.85775 14.7929 4.90611 14.7799 5.00267C14.7516 5.21339 14.75 5.5074 14.75 6.00001C14.75 6.49261 14.7516 6.78662 14.7799 6.99734C14.7929 7.0939 14.8082 7.14226 14.8172 7.16404C14.818 7.16606 14.8194 7.1693 14.8194 7.1693C14.8204 7.17152 14.8219 7.17434 14.8219 7.17434L14.8232 7.17677L14.8257 7.17815C14.8276 7.17916 14.8309 7.18077 14.836 7.18285C14.8577 7.19181 14.9061 7.2071 15.0027 7.22008C15.2134 7.24841 15.5074 7.25001 16 7.25001H18C18.4926 7.25001 18.7866 7.24841 18.9973 7.22008C19.0939 7.2071 19.1423 7.19181 19.164 7.18285C19.1691 7.18077 19.1724 7.17916 19.1743 7.17815L19.1768 7.17677L19.1781 7.17434C19.1791 7.1724 19.1808 7.16909 19.1828 7.16404C19.1918 7.14226 19.2071 7.0939 19.2201 6.99734C19.2484 6.78662 19.25 6.49261 19.25 6.00001C19.25 5.5074 19.2484 5.21339 19.2201 5.00267C19.2071 4.90611 19.1918 4.85775 19.1828 4.83597C19.1808 4.83093 19.1791 4.82761 19.1781 4.82568L19.1768 4.82324L19.1743 4.82187C19.1724 4.82086 19.1691 4.81924 19.164 4.81717C19.1423 4.80821 19.0939 4.79291 18.9973 4.77993C18.7866 4.7516 18.4926 4.75001 18 4.75001H16C15.5074 4.75001 15.2134 4.7516 15.0027 4.77993C14.9061 4.79291 14.8577 4.80821 14.836 4.81717C14.8309 4.81924 14.8276 4.82086 14.8257 4.82187ZM15.9553 3.25H18.0447C18.4776 3.24995 18.8744 3.24991 19.1972 3.29331C19.5527 3.3411 19.9284 3.45355 20.2374 3.76257C20.5465 4.07159 20.6589 4.44732 20.7067 4.8028C20.7501 5.12561 20.7501 5.52244 20.75 5.95526V6.04475C20.7501 6.47757 20.7501 6.8744 20.7067 7.19721C20.6589 7.5527 20.5465 7.92842 20.2374 8.23744C19.9284 8.54647 19.5527 8.65891 19.1972 8.70671C18.8744 8.75011 18.4776 8.75006 18.0447 8.75001H15.9553C15.5224 8.75006 15.1256 8.75011 14.8028 8.70671C14.4473 8.65891 14.0716 8.54647 13.7626 8.23744C13.4535 7.92842 13.3411 7.5527 13.2933 7.19721C13.2499 6.8744 13.2499 6.47757 13.25 6.04475C13.25 6.02988 13.25 6.01496 13.25 6.00001C13.25 5.98505 13.25 5.97014 13.25 5.95526C13.2499 5.52245 13.2499 5.12561 13.2933 4.8028C13.3411 4.44732 13.4535 4.07159 13.7626 3.76257C14.0716 3.45355 14.4473 3.3411 14.8028 3.29331C15.1256 3.24991 15.5224 3.24995 15.9553 3.25ZM15.9553 11.25H18.0447C18.4776 11.25 18.8744 11.2499 19.1972 11.2933C19.5527 11.3411 19.9284 11.4535 20.2374 11.7626C20.5465 12.0716 20.6589 12.4473 20.7067 12.8028C20.7501 13.1256 20.7501 13.5224 20.75 13.9553V18.0448C20.7501 18.4776 20.7501 18.8744 20.7067 19.1972C20.6589 19.5527 20.5465 19.9284 20.2374 20.2374C19.9284 20.5465 19.5527 20.6589 19.1972 20.7067C18.8744 20.7501 18.4776 20.7501 18.0447 20.75H15.9553C15.5224 20.7501 15.1256 20.7501 14.8028 20.7067C14.4473 20.6589 14.0716 20.5465 13.7626 20.2374C13.4535 19.9284 13.3411 19.5527 13.2933 19.1972C13.2499 18.8744 13.2499 18.4776 13.25 18.0448L13.25 14C13.25 13.9851 13.25 13.9701 13.25 13.9553C13.2499 13.5224 13.2499 13.1256 13.2933 12.8028C13.3411 12.4473 13.4535 12.0716 13.7626 11.7626C14.0716 11.4535 14.4473 11.3411 14.8028 11.2933C15.1256 11.2499 15.5224 11.25 15.9553 11.25ZM14.8257 12.8219L14.8232 12.8232L14.8219 12.8257C14.8209 12.8276 14.8192 12.8309 14.8172 12.836C14.8082 12.8578 14.7929 12.9061 14.7799 13.0027C14.7516 13.2134 14.75 13.5074 14.75 14V18C14.75 18.4926 14.7516 18.7866 14.7799 18.9973C14.7929 19.0939 14.8082 19.1423 14.8172 19.164C14.8192 19.1691 14.8209 19.1724 14.8219 19.1743L14.8232 19.1768L14.8257 19.1781C14.8276 19.1792 14.8309 19.1808 14.836 19.1828C14.8577 19.1918 14.9061 19.2071 15.0027 19.2201C15.2134 19.2484 15.5074 19.25 16 19.25H18C18.4926 19.25 18.7866 19.2484 18.9973 19.2201C19.0939 19.2071 19.1423 19.1918 19.164 19.1828C19.1691 19.1808 19.1724 19.1792 19.1743 19.1781L19.1768 19.1768L19.1781 19.1743C19.1791 19.1724 19.1808 19.1691 19.1828 19.164C19.1918 19.1423 19.2071 19.0939 19.2201 18.9973C19.2484 18.7866 19.25 18.4926 19.25 18V14C19.25 13.5074 19.2484 13.2134 19.2201 13.0027C19.2071 12.9061 19.1918 12.8578 19.1828 12.836C19.1816 12.833 19.1805 12.8306 19.1797 12.8287L19.1781 12.8257L19.1768 12.8232L19.1743 12.8219C19.1724 12.8209 19.1691 12.8192 19.164 12.8172C19.1423 12.8082 19.0939 12.7929 18.9973 12.7799C18.7866 12.7516 18.4926 12.75 18 12.75H16C15.5074 12.75 15.2134 12.7516 15.0027 12.7799C14.9061 12.7929 14.8577 12.8082 14.836 12.8172C14.8309 12.8192 14.8276 12.8209 14.8257 12.8219ZM4.82567 16.8219L4.82324 16.8232L4.82186 16.8257C4.82085 16.8276 4.81923 16.8309 4.81716 16.836C4.8082 16.8578 4.7929 16.9061 4.77992 17.0027C4.75159 17.2134 4.75 17.5074 4.75 18C4.75 18.4926 4.75159 18.7866 4.77992 18.9973C4.7929 19.0939 4.8082 19.1423 4.81716 19.164C4.81923 19.1691 4.82085 19.1724 4.82186 19.1743L4.82324 19.1768L4.82567 19.1781C4.8276 19.1792 4.83092 19.1808 4.83596 19.1828C4.85774 19.1918 4.90611 19.2071 5.00266 19.2201C5.21339 19.2484 5.50739 19.25 6 19.25H8C8.49261 19.25 8.78661 19.2484 8.99734 19.2201C9.09389 19.2071 9.14225 19.1918 9.16403 19.1828C9.16658 19.1818 9.1704 19.1801 9.1704 19.1801L9.17433 19.1781L9.17676 19.1768L9.17814 19.1743L9.1796 19.1714C9.18049 19.1695 9.18158 19.1671 9.18284 19.164C9.1918 19.1423 9.20709 19.0939 9.22008 18.9973C9.24841 18.7866 9.25 18.4926 9.25 18C9.25 17.5074 9.24841 17.2134 9.22008 17.0027C9.20709 16.9061 9.1918 16.8578 9.18284 16.836C9.18077 16.8309 9.17915 16.8276 9.17814 16.8257L9.17676 16.8232L9.17433 16.8219C9.17239 16.8209 9.16908 16.8192 9.16403 16.8172C9.14225 16.8082 9.09389 16.7929 8.99734 16.7799C8.78661 16.7516 8.49261 16.75 8 16.75H6C5.50739 16.75 5.21339 16.7516 5.00266 16.7799C4.90611 16.7929 4.85774 16.8082 4.83596 16.8172C4.83092 16.8192 4.8276 16.8209 4.82567 16.8219ZM5.95526 15.25H8.04474C8.47756 15.25 8.87439 15.2499 9.19721 15.2933C9.55269 15.3411 9.92841 15.4535 10.2374 15.7626C10.5465 16.0716 10.6589 16.4473 10.7067 16.8028C10.7501 17.1256 10.7501 17.5224 10.75 17.9553V18.0448C10.7501 18.4776 10.7501 18.8744 10.7067 19.1972C10.6589 19.5527 10.5465 19.9284 10.2374 20.2374C9.92841 20.5465 9.55269 20.6589 9.19721 20.7067C8.87439 20.7501 8.47756 20.7501 8.04474 20.75H5.95525C5.52244 20.7501 5.1256 20.7501 4.80279 20.7067C4.44731 20.6589 4.07159 20.5465 3.76256 20.2374C3.45354 19.9284 3.34109 19.5527 3.2933 19.1972C3.2499 18.8744 3.24994 18.4776 3.25 18.0448V17.9553C3.24994 17.5224 3.2499 17.1256 3.2933 16.8028C3.34109 16.4473 3.45354 16.0716 3.76256 15.7626C4.07159 15.4535 4.44731 15.3411 4.80279 15.2933C5.1256 15.2499 5.52244 15.25 5.95526 15.25Z"
                                  fill="#a0aec0"/>
                        </svg>

                        <div class="ml-4 text-lg leading-7 font-semibold">
                            <span class="underline text-gray-900 dark:text-white">
                                Dashboard
                            </span>
                        </div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            You can access to your dashboard for a complete summary of the recent rates and currencies.
                            We provide a huge variety of tools for you to analyse the numbers and prices.
                        </div>
                    </div>
                </div>

                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                    <div class="flex items-center">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                             \
                             width="24px" height="24px" fill="#a0aec0"
                             x="0px" y="0px"
                             viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve">
<g>
    <g>
        <path d="M205.5,210h-12.6v26.2h12.6c7.2,0,13.1-5.9,13.1-13.1C218.6,215.9,212.7,210,205.5,210z"/>
        <path d="M418.1,173.1V71.9H316.9L245,0l-71.9,71.9H71.9v101.5L0,245l71.9,71.9v101.5h101.5L245,490l71.9-71.9h101.5V316.9L490,245
			L418.1,173.1z M148.4,236.2c4.8,0,8.8,3.9,8.8,8.8c0,4.9-3.9,8.8-8.8,8.8h-25.8v35c0,4.8-3.9,8.8-8.8,8.8s-8.8-3.9-8.8-8.8v-87.4
			c0-4.8,3.9-8.8,8.8-8.8h34.5c4.8,0,8.8,3.9,8.8,8.8c0,4.8-3.9,8.8-8.8,8.8h-25.8v26.2h25.9V236.2z M231.3,295.5
			c-2.5,1.1-9,1.3-11.8-3.9l-19.2-37.9h-7.5v35c0,4.8-3.9,8.8-8.8,8.8c-4.8,0-8.8-3.9-8.8-8.8v-87.4c0-4.8,3.9-8.8,8.8-8.8h21.4
			c16.9,0,30.6,13.7,30.6,30.6c0,12.2-7.2,22.8-17.6,27.7l16.7,32.9C237.3,288,235.7,293.4,231.3,295.5z M302.3,236.2
			c4.8,0,8.8,3.9,8.8,8.8c0,4.9-3.9,8.8-8.8,8.8h-25.8V280h25.8c4.8,0,8.8,3.9,8.8,8.8c0,4.8-3.9,8.8-8.8,8.8h-34.5
			c-4.8,0-8.8-3.9-8.8-8.8v-87.4c0-4.8,3.9-8.8,8.8-8.8h34.5c4.8,0,8.8,3.9,8.8,8.8c0,4.8-3.9,8.8-8.8,8.8h-25.8v26.2h25.8V236.2z
			 M376.1,236.2c4.8,0,8.8,3.9,8.8,8.8c0,4.9-3.9,8.8-8.8,8.8h-25.8V280h25.8c4.8,0,8.8,3.9,8.8,8.8c0,4.8-3.9,8.8-8.8,8.8h-34.5
			c-4.8,0-8.8-3.9-8.8-8.8v-87.4c0-4.8,3.9-8.8,8.8-8.8h34.5c4.8,0,8.8,3.9,8.8,8.8c0,4.8-3.9,8.8-8.8,8.8h-25.8v26.2h25.8V236.2z"
        />
    </g>
</g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
</svg>
                        <div class="ml-4 text-lg leading-7 font-semibold">
                            <span class="underline text-gray-900 dark:text-white">
                                Free to Access
                            </span>
                        </div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Everything we provide is free, but the registration is invite-based. The admin invites you,
                            you get free access forever. That's it.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex mt-4"
             style="width: 100%; justify-content: flex-end; color: #8993a0">
            <div>
                Created by Aram Zahedi
            </div>
        </div>
    </div>
</div>
</body>
</html>

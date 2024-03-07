<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'AJC Pisonet')</title>
    <link rel="icon" type="image/x-icon" href="/assets/agclogo.png">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Bootstrap CDN CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- Font-awesome-icons CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        .z-10 {
            z-index: 10
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }

        /* Extra Styling here */
        nav {
            background: rgba(146, 125, 125, 0.35);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .logo {
            width: 120px;
        }

        .nav-link.active {
            color: red !important;
        }

        .nav-link {
            font-size: 20px;
            text-align: center;
        }

        .nav-link:hover {
            color: rgb(0, 0, 0);
            text-decoration: underline;
        }

        .promo_link.active {
            color: red !important;
        }

        .card-body{
            background: rgba( 185, 83, 83, 0.15 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 12px );
            -webkit-backdrop-filter: blur( 12px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
        }
        .card_body:focus{
            background: rgba( 185, 83, 83,);

        }


        /* Query here */
        @media screen and (max-width:700px) {
            .logo {
                width: 80px;
            }

            .nav-link {
                font-size: 16px !important;
            }
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: "Roboto", serif;
        }

        h1,
        h2,
        h3,
        h4,
        p {
            background: transparent;
            font-weight: 500;
            pointer-events: none;
        }

        .head {
            width: 100%;
            height: 80vh;
            background-image: linear-gradient(rgba(218, 194, 178, 0.719), rgba(111, 78, 82, 0.259)), url(./assets/head.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
            color: #fefefe;
            padding: 10%;
        }

        .Fiber_Experience {
            background: #e35b53;
            color: #FEFEFE;
            padding: 40px 0;
            font-weight: 600;

        }

        .bundle {
            display: table-cell;
            vertical-align: right;
            width: 4rem;
        }

        .fa-signal,
        .fa-film,
        .fa-wifi {
            font-size: 25px;
        }

        .text {
            font-size: 22px;
            color: #FEFEFE;
            font-weight: 900;
            letter-spacing: 1px;
        }

        .text_title {
            padding: 0;
            background: rgba(226, 225, 223, 0.56);
        }

        .chat {
            background-color: #F8EFE6;
        }

        .support {
            background-color: #F3EED8;
        }

        .plan {
            width: 100%;
            height: fit-content;
            padding: 80px;
            background: linear-gradient(rgba(111, 78, 82, 0.259), rgba(218, 194, 178, 0.719)), url(./assets/familyinternet.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
        }

        .plan2 {
            background: linear-gradient(rgba(111, 78, 82, 0.259), rgba(218, 194, 178, 0.719)), url(./assets/familyinternet.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
        }

        .mbps {
            font-size: 45px;
            padding: 10px;
            color: #fefefe;
        }

        .p_mbps {
            color: #fefefe;
        }



        .center_bundle {
            border-right: 1px #fefefe solid;
            border-left: 1px #fefefe solid;
        }

        @media screen and (max-width: 768px) {
            .center_bundle {
                border-right: none;
                border-left: none;
                border-top: 1px #fefefe solid;
                border-bottom: 1px #fefefe solid;
            }
        }

        .faq {
            background: rgba(232, 118, 118, 0.589);
            width: 100%
        }

        .accordion-button {
            background: transparent;
            outline: none;
            border-radius: 0;
            border: none;
        }

        .accordion-item {
            background: transparent;
            border: none;
            border-bottom: 1px #333 solid;
            outline: none;
            border-radius: 0;
        }

        .accordion-button:focus {
            background: transparent;
            box-shadow: none
        }

        .accordion-button:active {
            background: transparent;
            box-shadow: none;
        }



        .hero-section {
            padding: 15%;
            background-image: linear-gradient(rgba(218, 194, 178, 0.719), rgba(111, 78, 82, 0.259)), url(./assets/internet-head.jpg);
            background-position: 50% 25%;
            background-size: auto, cover;

        }

        .hero-section2 {
            padding: 11%;
            background-image: linear-gradient(rgba(218, 194, 178, 0.719), rgba(111, 78, 82, 0.259)), url(./assets/promos.jpg);
            background-position: 50% 25%;
            background-size: auto, cover;
        }

        #texts {
            width: 55%;
            color: #f5f5f5;
            font-size: 40px;

        }

        #paragraph {
            width: 55%;
            color: #f5f5f5;
            font-size: 20px;
        }

        #exclusive-deals {
            font-weight: 900 !important;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 6vh !important;
            width: 55%;
            color: inherit;
        }

        footer {
            position: fixed;
            bottom: 0;
        }

        @media (max-height:1440px) {
            footer {
                position: static;
            }

            header {
                padding-top: 40px;
            }
        }

        .main-footer {
            background-color: #e4e3e3;
            box-sizing: border-box;
            width: 100%;
            text-align: left;
            font: bold 16px sans-serif;
            padding: 50px 50px 60px 50px;

        }

        .main-footer .footer-left,
        .main-footer .footer-center,
        .main-footer .footer-right {
            display: inline-block;
            vertical-align: top;
        }


        .main-footer .footer-left {
            width: 30%;
        }

        .main-footer h3 {
            color: #594A4E;
            font: normal 36px 'Cookie', cursive;
            margin: 0;
        }


        .main-footer h3 span {
            color: #f0525f;
        }


        .main-footer .footer-links {
            color: #594A4E;
            margin: 20px 0 12px;
        }

        .main-footer .footer-links a {
            display: inline-block;
            line-height: 1.8;
            text-decoration: none;
            color: inherit;
        }

        .main-footer .footer-company-name {
            color: #594A4E;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
        }


        .main-footer .footer-center {
            width: 35%;
        }

        .main-footer .footer-center i {
            background-color: #33383b;
            color: #ffffff;
            font-size: 25px;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            text-align: center;
            line-height: 42px;
            margin: 10px 15px;
            vertical-align: middle;
        }

        .mainf-footer .footer-center i.fa-envelope {
            font-size: 17px;
            line-height: 38px;
        }

        .main-footer .footer-center p {
            display: inline-block;
            color: #594A4E;
            vertical-align: middle;
            margin: 0;
        }

        .main-footer .footer-center p span {
            display: block;
            font-weight: normal;
            font-size: 14px;
            line-height: 2;
        }

        .main-footer .footer-center p a {
            color: #594A4E;
            text-decoration: none;
        }



        .main-footer .footer-right {
            width: 30%;
        }

        .main-footer .footer-company-about {
            line-height: 20px;
            color: #92999f;
            font-size: 13px;
            font-weight: normal;
            margin: 0;
        }

        .main-footer .footer-company-about span {
            display: block;
            color: #594A4E;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .main-footer .footer-icons {
            margin-top: 25px;
        }

        .main-footer .footer-icons a {
            display: inline-block;
            width: 35px;
            height: 35px;
            cursor: pointer;
            background-color: #33383b;
            border-radius: 2px;
            font-size: 20px;
            color: #ffffff;
            text-align: center;
            line-height: 35px;
            margin-right: 3px;
            margin-bottom: 5px;
        }

        .main-footer .footer-icons a:hover {
            background-color: #3F71EA;
        }

        .footer-links a:hover {
            color: #3F71EA;
        }

        @media (max-width: 880px) {

            .main-footer .footer-left,
            .main-footer .footer-center,
            .main-footer .footer-right {
                display: block;
                width: 100%;
                margin-bottom: 40px;
                text-align: center;
            }

            .main-footer .footer-center i {
                margin-left: 0;
            }
        }

        h2 {
            color: #f0525f;
        }

        .promo-card{
            display:flex;
            flex-direction: column;
            box-shadow: -2px 2px 29px -3px rgba(108,106,106,0.65);
            -webkit-box-shadow: -2px 2px 29px -3px rgba(108,106,106,0.65);
            -moz-box-shadow: -2px 2px 29px -3px rgba(108,106,106,0.65); */
            /* justify-content: space-evenly;
        }

        /* .promo-card .card {
            background-color: #E9E9E9;
            transition: background-color 0.3s ease;
        }

        .promo-card .card2 {
            background-color: #E9E9E9;
            transition: background-color 0.3s ease;
        }


        .promo-card .card {
            border: none;

        } */

        .card {
            padding-bottom: 3rem !important;
            height: auto;
        }

        .multiple-card {
            border-radius: 0 !important;
            margin-top: 3rem !important;
            margin-left: 1.5rem !important;
            margin-right: 1.5rem !important;
            border: 0 !important;
            background-image: none;
            border-width: 0px;

        }



        .accordion {
            display: flex;
            flex-direction: column;
            font-family: "Sora", sans-serif;
            max-width: 991px;
            min-width: 320px;
            margin: 50px auto;
            padding: 0 50px;
        }

        .accordion h1 {
            font-size: 32px;
            text-align: center;
        }

        .accordion-item {
            margin-top: 16px;
            border: 1px solid #fcfcfc;
            border-radius: 6px;
            background: #ffffff;
            box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px;
        }

        .accordion-item .accordion-item-title {
            position: relative;
            margin: 0;
            display: flex;
            width: 100%;
            font-size: 15px;
            cursor: pointer;
            justify-content: space-between;
            flex-direction: row-reverse;
            padding: 14px 20px;
            box-sizing: border-box;
            align-items: center;
        }

        .accordion-item .accordion-item-desc {
            display: none;
            font-size: 14px;
            line-height: 22px;
            font-weight: 300;
            color: #444;
            border-top: 1px dashed #ddd;
            padding: 10px 20px 20px;
            box-sizing: border-box;
        }

        .accordion-item input[type="checkbox"] {
            position: absolute;
            height: 0;
            width: 0;
            opacity: 0;
        }

        .accordion-item input[type="checkbox"]:checked~.accordion-item-desc {
            display: block;
        }

        .accordion-item input[type="checkbox"]:checked~.accordion-item-title .icon:after {
            content: "-";
            font-size: 20px;
        }

        .accordion-item input[type="checkbox"]~.accordion-item-title .icon:after {
            content: "+";
            font-size: 20px;
        }

        .accordion-item:first-child {
            margin-top: 0;
        }

        .accordion-item .icon {
            margin-left: 14px;
        }

        @media screen and (max-width: 767px) {
            .accordion {
                padding: 0 16px;
            }

            .accordion h1 {
                font-size: 22px;
            }
        }

        .button-apply-now {
            width: auto;
            position: relative;
            display: inline-block;
            text-align: center;
            color: #fff;
            background-color: red;
            box-shadow: none;
            transition: all .2s ease-in-out;
            left: 6%;
            top: 30px;

        }

        .button-apply-now:hover {
            background-color: #fff;
            color: black;
        }

        /* @media screen and (max-width: 801px) {
            .button-apply-now {
                position: sticky;
                padding: 0 16px;
                top: 0;
            }
        } */

        @media screen and (max-width: 768px) {
            .button-apply-now {
                position: sticky;
                padding: 6px;
                top: 0;
                font-size: 14px;
                margin-top: 16px;
                left: auto;
            }

            #texts {
                font-size: 20px;
                font-weight: bold;
                width: 100% !important;

            }

            #paragraph {
                font-size: 14px;
            }
        }


        @media screen and (max-width: 1000px) {
            .agc-logo {
                position: relative;
                left: 30vh;
                margin: 0;

            }

        }

        @media screen and (max-width: 320px) {
            .agc-logo {
                position: relative;
                left: 9vh;
                margin: 0;
                height: 50%;

            }

            .exclusive-deals {
                font-size: 10px;
            }

        }

        @media screen and (max-width: 375px) {
            .agc-logo {
                position: relative;
                left: 19vh;
                margin: 0;
                height: 50%;

            }

            .button-apply-now {
                width: auto;
                font-size: 12px;
            }

        }



        @media screen and (max-width: 425px) {
            .agc-logo {
                position: relative;
                left: 14vh;
                margin: 0;
                height: 50%;

            }

            .button-apply-now {
                width: auto;
                font-size: 10px;
            }

        }

        .upcontainer {
            text-align: center;
            margin: 4vh auto;
            max-width: 600px;
        }

        .snippetTitle {
            font-weight: 400 !important;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            text-align: center;
            color: #333;
            padding-top: 32px;
            letter-spacing: normal;
            font-stretch: normal;
            font-style: normal;
            font-variant: normal;
            font-size: 30px;
        }

        .Bseller {
            padding: 5px 10px 18px 10px;
            border-radius: 15px 15px 0 0;
            border: none !important;
            background-color: #FF0000;
            min-height: 40px;
            width: 35.7vh;
            /* Adjust this value as needed */
            position: absolute;
            top: 92.2vh;
            /* Adjust this value as needed */
            left: 117vh;
            /* Adjust this value as needed */
            transform: translate(-50.9%, -50%);
        }


        .text-18 {
            font-size: 18px !important;

        }


        @media (max-width: 768px) {
            .best-seller-2 {
                position: relative;
                left: 17vh;
                top: 6vh;
                z-index: 11;
                height: 10px;
                min-height: 40px;
                min-width: 6px;

            }
        }

        .sign-up-free {
            font-size: 14px;
            font-weight: bolder;
            background-color: #FFDD59;
            height: auto;
            width: auto;
            /* position: absolute; */
            border-width: 10px;
            padding: 5px 10px;
        }



        .text-pink-500 {
            color: #EC4899;
        }

        .two-months-free {

        }
    </style>
</head>

<body class="antialiased">
    @include('navbar')
    @yield('content')
    @include('footer')



    {{-- Bootstrap CDN Javascript --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

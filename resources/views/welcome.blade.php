<!DOCTYPE html> <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>I Want That Piece</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link rel="icon" type="image/pg" href="{{ asset('img/logoWTP.png') }}">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

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

    /*BARRA DE NAVEGACION*/

    .header {
        background-color: #8CBED6;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 85px;
        padding: 5px 10%;
    }

    .header .logo {
        cursor: pointer;
    }

    .header .logo img {
        height: 70px;
        width: auto;
        transition: all 0.3s;
    }

    .header .logo img:hover {
        transform: scale(1.2);
    }

    .header .nav-links {
        list-style: none;
    }

    .header .nav-links li {
        display: inline-block;
        padding: 0 20px;
    }

    .header .nav-links li:hover {
        transform: scale(1.1);
    }

    .header .nav-links a {
        font-size: 700;
        color: #eceff1;
        text-decoration: none;
    }

    .header .nav-links li a:hover {
        color: #ffbc0e;
    }

    .header .btn button {
        font-weight: 700;
        color: #1b3039;
        padding: 9px 25px;
        background: #eceff1;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease 0s;
    }

    .header .btn button:hover {
        background-color: #e2f1f8;
        color: #ffbc0e;
        transform: scale(1.1);
    }

    /**IMAGEN DE FONDO */
    body {
        background-image: url('{{ asset("img/fondo.jpg") }}');
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 100vh;
        margin: 0;
        padding-bottom: 100px;
    }


    .image-container:hover .image-overlay {
        opacity: 1;
    }

    .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        background: rgba(255, 255, 255, 0.17);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(6.9px);
        -webkit-backdrop-filter: blur(6.9px);
        border: 1px solid rgba(255, 255, 255, 1);
        transition: opacity 0.3s ease;

    }

    .image-container {
        position: relative;
        overflow: hidden;
        width: 100px;
        /* Ancho del div */
        height: 150px;
        /* Alto del div */
        background: rgba(255, 255, 255, 0.15);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(0px);
        -webkit-backdrop-filter: blur(0px);
        border: 1px solid rgba(255, 255, 255, 1);
    }

    /**MARCAS */
    .marcas {
        padding-top: 50px;
        display: flex;
        justify-content: center;
        /* Centra los elementos horizontalmente */
        align-items: center;
        /* Centra los elementos verticalmente */
        width: 100%;
        gap: 90px;
    }

    .marcas .marca {
        width: 100%;
        /* Ancho del contenido dentro de cada columna */
    }

    h1 {
        text-align: center;
        padding-top: 50px;
    }

    .img-fluid2 {
        padding-top: 20px
    }

    .img-fluid3 {
        padding-top: 40px
    }

    /**Carrusell */
    .carrusel {
        padding-top: 50px;
        height: auto;
        width: 100%;
        text-align: center;
    }

    .carousel {
        max-width: 800px;
        margin: 0 auto;
    }

    .carousel .carousel-item img {
        height: 410px;
        /* Establece la altura deseada para las imágenes */
        width: 100%;
        /* Garantiza que las imágenes ocupen el 100% del ancho del contenedor */
        object-fit: cover;
    }

    /** FOOTER*/
    .footer {
        background-color: #0f2f76;
        padding: 10px 2rem;
        color: white;
        position: fixed;
        bottom: 0;
        width: 100%;
        z-index: 2;
    }

    .footer-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .text-left {
        flex-grow: 1;
    }

    .social-media-container {
        display: flex;
        align-items: center;
    }

    .footer-col {
        display: flex;
        flex-direction: row;
        gap: 3rem;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body class="antialiased">
    <header class="header">
        <div class="logo">
            <img src="../img/logoWTP.png" alt="Logo de la marca">
        </div>
        <!-- <nav>
        <ul class="nav-links">
                <li><a href="nosotros">Sobre nosotros</a></li>
                <li><a href="piezas">Piezas</a></li>
                <li><a href="#">Soporte</a></li>
        </ul>            
        </nav> -->
        @if (Route::has('login'))
        <div class="inicio-registro">
        @auth
            <a class="btn" href="{{route('home')}}"><button>Inicio</button></a>
            <a class="btn" href="{{route('logout')}}"><button>Salir</button></a>
            @else
            <a class="btn" href="{{route('login')}}"><button>Iniciar sesion</button></a>
            
            @if (Route::has('register'))
            <a class="btn" href="{{route('register')}}"><button>Registrarse</button></a>
            @endif
            @endauth
        </div>
        @endif
    </header>

    <!--Marcas-->
    <h1>Principales marcas</h1>
    <div class="marcas">

        <div>
            <div class="image-container">
                <img src="{{ asset('img/msi_gris.png') }}" alt="Imagen 1" class="img-fluid">
                <div class="image-overlay">
                    <a href="https://es.msi.com"><img src="{{ asset('img/msi_normal.png') }}" alt="Imagen 1 Hover"
                            class="img-fluid"></a>
                </div>
            </div>
        </div>
        <div>
            <div class="image-container">
                <img src="{{ asset('img/asus_gris.png') }}" alt="Imagen 1" class="img-fluid2">
                <div class="image-overlay">
                    <a href="https://rog.asus.com/es/"><img src="{{ asset('img/asus_normal.png') }}"
                            alt="Imagen 1 Hover" class="img-fluid2"></a>
                </div>
            </div>
        </div>
        <div>
            <div class="image-container">
                <img src="{{ asset('img/gigabyte_gris.png') }}" alt="Imagen 1" class="img-fluid2">
                <div class="image-overlay">
                    <a href="https://www.gigabyte.com/es"><img src="{{ asset('img/gigabyte_normal.png') }}"
                            alt="Imagen 1 Hover" class="img-fluid2"></a>
                </div>
            </div>
        </div>
        <div>
            <div class="image-container">
                <img src="{{ asset('img/amd_gris.png') }}" alt="Imagen 1" class="img-fluid3">
                <div class="image-overlay">
                    <a href="https://www.amd.com/es.html"><img src="{{ asset('img/amd_normal.png') }}"
                            alt="Imagen 1 Hover" class="img-fluid3"></a>
                </div>
            </div>
        </div>
        <div>
            <div class="image-container">
                <img src="{{ asset('img/hyper_gris.png') }}" alt="Imagen 1" class="img-fluid2">
                <div class="image-overlay">
                    <a href="https://row.hyperx.com/?loc=ES&lang=EN"><img src="{{ asset('img/hyper_normal.png') }}"
                            alt="Imagen 1 Hover" class="img-fluid2"></a>
                </div>
            </div>
        </div>
        <div>
            <div class="image-container">
                <img src="{{ asset('img/intel_gris.png') }}" alt="Imagen 1" class="img-fluid3">
                <div class="image-overlay">
                    <a
                        href="https://www.intel.com/content/www/us/en/company-overview/wonderful.html?cid=sem&source=sa360&campid=2023_q4_cbu_es_gmocoma_gmobasc_awa_text-link_brand_na_cd_intel-brand_3500137429_google_b2b%2Bb2c_oos_mixed-pbm_intel&ad_group=brand_freeform_b2b1-awa&intel_term=intel&sa360id=43700078122184926&gclid=Cj0KCQjw4bipBhCyARIsAFsieCy9FUeQhp_AERc-dUKduYftvUfpBE6G4JS6PYtCg4-Dc_KELof7A3saAjqtEALw_wcB&gclsrc=aw.ds"><img
                            src="{{ asset('img/intel_normal.png') }}" alt="Imagen 1 Hover" class="img-fluid3"></a>
                </div>
            </div>
        </div>
    </div>

    <!--Carrusel-->
    <div class="carrusel">
    <div id="carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4500">
        <div class="carousel-inner"style="border-radius: 5px;">
            <div class="carousel-item active">
                <img src="img/caja_n.jpg" class="d-block w-100" alt="Caja_NXTC">
            </div>
            <div class="carousel-item">
                <img src="img/asus.jpg" class="d-block w-100" alt="Asus_Rog_Ally">
            </div>
            <div class="carousel-item">
                <img src="img/amd.jpg" class="d-block w-100" alt="Tarjetas_amd">
            </div>
        </div>
    </div>
</div>


    <!-- FOOTER -->
    <footer class="footer">
     
     <div class="footer-content">
         <span>
             Copyright © 2023 I want that piece
             <br>
             Contacto: dennismurciasuarez@gmail.com
             <br>
             Dirección:  C/ Una de mi imaginacion, 1, 50015 Zaragoza
         </span>
         <div class="footer-col">
             <div class="social-media-container">
                 <a href="#"><img src="{{ asset('img/logofacebook.png') }}" alt="Facebook Logo" width="40px" class="social-logo"></a>
                 <a href="#"><img src="{{ asset('img/logotwitter.png') }}" alt="Twitter Logo" width="40px" class="social-logo"></a>
                 <a href="#"><img src="{{ asset('img/logoinstagram.png') }}" alt="Instagram Logo" width="40px" class="social-logo"></a>
             </div>
             
         </div>
     </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>
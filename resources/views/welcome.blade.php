<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

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

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
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
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
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

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
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

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
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
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 713 847.85985"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="20%" height="20%">
                    <g>
                        <g>
                            <title></title>
                        </g>
                        <g>
                            <path
                                d="M482.08,603.40047a122.5375,122.5375,0,0,0,5.13995,12.38v.01q2.355,4.92,5.12006,9.59H707.36v.43q2.925-4.875,5.38-10.04a120.09911,120.09911,0,0,0,5.14-12.37Zm5.42,12.25v-2H712.49v2Zm16.76,26.54H695.7a125.03246,125.03246,0,0,0,10.71-14.81H493.55A125.04086,125.04086,0,0,0,504.26,642.19051Z"
                                transform="translate(-243.5 -26.81984)" fill="rgba(210, 195, 53, 1)"></path>
                        </g>
                        <g>
                            <path
                                d="M721.24,592.1805c-.77,3.13-1.67,6.2-2.68,9.22H481.4c-1.01-3.02-1.91-6.09-2.68-9.22Z"
                                transform="translate(-243.5 -26.81984)" fill="rgba(210, 195, 53, 1)"></path>
                        </g>
                        <g>
                            <path
                                d="M721.39,591.59047v-1.41H478.57v1.41q-1.27506-5.22-2.11-10.63H723.5Q722.675,586.36052,721.39,591.59047Z"
                                transform="translate(-243.5 -26.81984)" fill="rgba(210, 195, 53, 1)"></path>
                        </g>
                        <g>
                            <path
                                d="M476.02,567.7405v2H724.71c-.19,3.11-.49,6.18-.92,9.22H476.17c-.42-3.02-.73-6.08-.91-9.18-.18-2.62-.26-5.26-.26-7.93,0-1.8.04-3.59.11-5.37v-.02q.25506-5.685.98-11.22v-.01q.63-4.635,1.56994-9.16H721.9v-1.82q1.22992,5.43,1.96,11.04H476.53v2H724.11q.495,4.185.7,8.44l.03.78H476.28v2H724.91c.04,1.11005.05,2.22.05,3.34,0,1.98-.05,3.94-.14,5.89Z"
                                transform="translate(-243.5 -26.81984)" fill="rgba(210, 195, 53, 1)"></path>
                        </g>
                        <g>
                            <path
                                d="M721.86,534.07051H478.1q1.065-4.68007,2.47-9.22H719.35v-.11C720.31,527.80049,721.14,530.91048,721.86,534.07051Z"
                                transform="translate(-243.5 -26.81984)" fill="rgba(210, 195, 53, 1)"></path>
                        </g>
                        <g>
                            <path
                                d="M718.75,522.85048H481.21q1.86-5.7,4.25-11.14v1.91H714.5v-1.9Q716.885,517.15046,718.75,522.85048Z"
                                transform="translate(-243.5 -26.81984)" fill="rgba(210, 195, 53, 1)"></path>
                        </g>
                        <g>
                            <path
                                d="M714.45,511.6205H485.5q2.07-4.71,4.53-9.22H709.66v-.5Q712.27,506.64052,714.45,511.6205Z"
                                transform="translate(-243.5 -26.81984)" fill="rgba(210, 195, 53, 1)"></path>
                        </g>
                        <g>
                            <path d="M708.82,500.40047H491.13a125.00629,125.00629,0,0,1,217.69,0Z"
                                transform="translate(-243.5 -26.81984)" fill="rgba(210, 195, 53, 1)"></path>
                        </g>
                        <g>
                            <path d="M478.57,591.59047a5.65309,5.65309,0,0,0,.15.59h-.15Z"
                                transform="translate(-243.5 -26.81984)" opacity="0.5"></path>
                        </g>
                        <g>
                            <path d="M721.39,591.59047v.59h-.15A5.66578,5.66578,0,0,0,721.39,591.59047Z"
                                transform="translate(-243.5 -26.81984)" opacity="0.5"></path>
                        </g>
                        <g>
                            <path d="M724.96,567.7405v2h-.25c.02-.25.04-.5.05-.75.02-.42.04-.83.06-1.25Z"
                                transform="translate(-243.5 -26.81984)" opacity="0.5"></path>
                        </g>
                        <g>
                            <path d="M724.96,556.51045v2h-.05c-.01-.67-.04-1.32995-.06994-2Z"
                                transform="translate(-243.5 -26.81984)" opacity="0.5"></path>
                        </g>
                        <g>
                            <path d="M721.9,534.07051v.18c-.01-.06-.03-.12-.04-.18Z"
                                transform="translate(-243.5 -26.81984)" opacity="0.5"></path>
                        </g>
                        <g>
                            <path d="M485.46,511.6205h.04a.35671.35671,0,0,1-.04.09Z"
                                transform="translate(-243.5 -26.81984)" opacity="0.5"></path>
                        </g>
                        <g>
                            <path d="M714.5,511.6205v.1a.93491.93491,0,0,0-.05-.1Z"
                                transform="translate(-243.5 -26.81984)" opacity="0.5"></path>
                        </g>
                        <g>
                            <rect x="254.71045" y="462.35773" width="203.53857" height="2" opacity="0.5"></rect>
                        </g>
                        <g>
                            <rect x="263.12744" y="451.13507" width="187.21436" height="2" opacity="0.5"></rect>
                        </g>
                        <g>
                            <rect x="274.60547" y="439.91242" width="163.74902" height="2" opacity="0.5"></rect>
                        </g>
                        <g>
                            <rect x="530.60291" y="455.63704" width="136.20288" height="2"
                                transform="translate(-244.39073 -25.64963) rotate(-0.11191)" opacity="0.5"></rect>
                        </g>
                        <g>
                            <rect x="278.67409" y="469.36066" width="59.68421" height="132.24798"
                                fill="rgba(178, 118, 118, 1)"></rect>
                        </g>
                        <g>
                            <path
                                d="M305.97756,481.81258h2.52666a14.04031,14.04031,0,0,1,14.04031,14.04031v19.88043a0,0,0,0,1,0,0H291.93725a0,0,0,0,1,0,0V495.85289A14.04031,14.04031,0,0,1,305.97756,481.81258Z"
                                fill="rgba(210, 195, 53, 1)"></path>
                        </g>
                        <g>
                            <path
                                d="M415.14371,468.20378h0a15.30363,15.30363,0,0,1,15.30363,15.30363v24.996a0,0,0,0,1,0,0H399.84008a0,0,0,0,1,0,0v-24.996A15.30363,15.30363,0,0,1,415.14371,468.20378Z"
                                fill="rgba(178, 118, 118, 1)"></path>
                        </g>
                        <g>
                            <path
                                d="M716.79757,546.03576a31.9499,31.9499,0,0,1-.199,3.57085H599.97976V542.975H716.64962Q716.795,544.49774,716.79757,546.03576Z"
                                transform="translate(-243.5 -26.81984)" fill="rgba(178, 118, 118, 1)"></path>
                        </g>
                        <g>
                            <path
                                d="M616.71516,523.64925l1.13367-1.752a26.26686,26.26686,0,0,0-1.16307-2.72264l-.73307.59209.58044-.897c-.55316-1.08889-.98843-1.77495-.98843-1.77495a25.173,25.173,0,0,0-3.0332,7.37624l1.45476,2.24827-1.61048-1.30078a10.62658,10.62658,0,0,0-.08836,1.33255c0,4.49266,1.46729,8.13468,3.27728,8.13468s3.27729-3.642,3.27729-8.13468a13.9907,13.9907,0,0,0-.74974-4.19782Z"
                                transform="translate(-243.5 -26.81984)" fill="rgba(96, 89, 226, 1)"></path>
                        </g>
                        <g>
                            <path
                                d="M624.73942,527.54413l2.0405-.43725a26.26669,26.26669,0,0,0,1.10277-2.74761l-.937-.09969,1.04474-.22386c.37881-1.16111.55615-1.954.55615-1.954a25.173,25.173,0,0,0-7.36059,3.071l-.5611,2.61843-.219-2.05857a10.62774,10.62774,0,0,0-1.00473.87977c-3.17679,3.1768-4.71456,6.78962-3.4347,8.06948s4.89268-.25791,8.06948-3.4347a13.99068,13.99068,0,0,0,2.43816-3.49845Z"
                                transform="translate(-243.5 -26.81984)" fill="rgba(96, 89, 226, 1)"></path>
                        </g>
                        <g>
                            <path
                                d="M625.48473,544.92845c-4.73171.30267-9.8874-.0176-15.37219,0V532.37089a55.40742,55.40742,0,0,0,15.37219,0Z"
                                transform="translate(-243.5 -26.81984)" fill="rgba(178, 118, 118, 1)"></path>
                        </g>
                        <g>
                            <path
                                d="M693.7435,523.64925l1.13367-1.752a26.26686,26.26686,0,0,0-1.16307-2.72264l-.73307.59209.58044-.897c-.55316-1.08889-.98843-1.77495-.98843-1.77495a25.173,25.173,0,0,0-3.0332,7.37624l1.45476,2.24827-1.61048-1.30078a10.62658,10.62658,0,0,0-.08836,1.33255c0,4.49266,1.46729,8.13468,3.27728,8.13468s3.27729-3.642,3.27729-8.13468a13.9907,13.9907,0,0,0-.74974-4.19782Z"
                                transform="translate(-243.5 -26.81984)" fill="rgba(96, 89, 226, 1)"></path>
                        </g>
                        <g>
                            <path
                                d="M701.76776,527.54413l2.0405-.43725a26.26669,26.26669,0,0,0,1.10277-2.74761l-.937-.09969,1.04474-.22386c.37881-1.16111.55615-1.954.55615-1.954a25.173,25.173,0,0,0-7.36059,3.071l-.5611,2.61843-.219-2.05857a10.62774,10.62774,0,0,0-1.00473.87977c-3.17679,3.1768-4.71456,6.78962-3.4347,8.06948s4.89269-.25791,8.06948-3.4347a13.99068,13.99068,0,0,0,2.43816-3.49845Z"
                                transform="translate(-243.5 -26.81984)" fill="rgba(96, 89, 226, 1)"></path>
                        </g>
                        <g>
                            <path
                                d="M702.51307,544.92845c-4.73171.30267-9.8874-.0176-15.37219,0V532.37089a55.40742,55.40742,0,0,0,15.37219,0Z"
                                transform="translate(-243.5 -26.81984)" fill="rgba(178, 118, 118, 1)"></path>
                        </g>
                        <g>
                            <ellipse cx="285.81579" cy="539.34904" rx="6.12146" ry="5.15252"
                                fill="rgba(210, 195, 53, 1)"></ellipse>
                        </g>
                        <g>
                            <path
                                d="M890.19,720.98049c-64.01,91.42-170.12,151.2-290.19,151.2-121.51,0-228.72-61.22-292.47-154.5,54.9-104.35,166.37-78.5,292.47-78.5C727.42,639.1805,835.87,614.84047,890.19,720.98049Z"
                                transform="translate(-243.5 -26.81984)" fill="rgba(96, 89, 226, 1)"></path>
                        </g>
                        <g>
                            <path
                                d="M600,664.1805c121.207,0,225.24512-22.01483,281.85815,67.19635q4.27332-5.61411,8.33179-11.39636c-54.31994-106.14-162.77-81.8-290.18994-81.8-126.1,0-237.57007-25.85-292.47,78.5q4.071,5.95678,8.3822,11.73211C373.276,640.78438,480.01318,664.1805,600,664.1805Z"
                                transform="translate(-243.5 -26.81984)" fill="rgba(210, 195, 53, 1)"></path>
                        </g>
                        <g>
                            <path
                                d="M600,874.67969a356.04078,356.04078,0,1,1,167.29492-41.60547A356.62661,356.62661,0,0,1,600,874.67969Zm0-709.99951a353.49979,353.49979,0,1,0,165.88477,665.7456A356.51758,356.51758,0,0,0,889.78125,720.68945a354.039,354.039,0,0,0,35.93652-340.105h0A353.211,353.211,0,0,0,600,164.68018Z"
                                transform="translate(-243.5 -26.81984)" fill="rgba(210, 195, 53, 1)"></path>
                        </g>
                        <g>
                            <path
                                d="M600,872.67969a354.41892,354.41892,0,0,1-354.5-354.5C245.5,322.708,404.52783,163.68018,600,163.68018c195.47168,0,354.5,159.02783,354.5,354.49951a352.22931,352.22931,0,0,1-63.90137,203.09082h0A355.09683,355.09683,0,0,1,600,872.67969Zm0-705.99951c-193.81787,0-351.5,157.68212-351.5,351.49951A351.52653,351.52653,0,0,0,888.1416,719.5498h0A349.24831,349.24831,0,0,0,951.5,518.17969C951.5,324.3623,793.81738,166.68018,600,166.68018Z"
                                transform="translate(-243.5 -26.81984)" fill="rgba(210, 195, 53, 1)"></path>
                        </g>
                        <g>
                            <circle cx="132" cy="203.86066" r="95.5" fill="rgba(97, 27, 41, 1)"></circle>
                        </g>
                        <g>
                            <circle cx="535.39077" cy="163.5" r="163.5" fill="rgba(96, 89, 226, 1)"></circle>
                        </g>
                        <g>
                            <path
                                d="M900.51225,81.11468A163.51275,163.51275,0,0,1,628.07291,254.1583,163.51409,163.51409,0,1,0,900.51225,81.11468Z"
                                transform="translate(-243.5 -26.81984)" opacity="0.2"></path>
                        </g>
                        <g>
                            <polygon points="535.84 163.5 536.289 163.5 544.374 627.049 527.306 627.049 535.84 163.5"
                                fill="rgba(210, 195, 53, 1)"></polygon>
                        </g>
                        <g>
                            <rect x="789.67099" y="431.07808" width="8.08516" height="30.54396"
                                transform="translate(575.41119 -490.73056) rotate(62.23413)"
                                fill="rgba(210, 195, 53, 1)"></rect>
                        </g>
                        <g>
                            <path d="M752.54365,633.79323s.69056-14.46983,14.84712-12.78791"
                                transform="translate(-243.5 -26.81984)" fill="rgba(210, 195, 53, 1)"></path>
                        </g>
                        <g>
                            <circle cx="505.04365" cy="586.1183" r="7.08526" fill="rgba(96, 89, 226, 1)"></circle>
                        </g>
                        <g>
                            <rect x="503.89077" y="598.04945" width="2" height="14" fill="rgba(210, 195, 53, 1)"></rect>
                        </g>
                        <g>
                            <path d="M845.54365,660.79323s.69056-14.46983,14.84712-12.78791"
                                transform="translate(-243.5 -26.81984)" fill="rgba(210, 195, 53, 1)"></path>
                        </g>
                        <g>
                            <circle cx="598.04365" cy="613.1183" r="7.08526" fill="rgba(96, 89, 226, 1)"></circle>
                        </g>
                        <g>
                            <rect x="596.89077" y="625.04945" width="2" height="14" fill="rgba(210, 195, 53, 1)"></rect>
                        </g>
                        <g>
                            <path d="M348.54365,666.79323s.69056-14.46983,14.84712-12.78791"
                                transform="translate(-243.5 -26.81984)" fill="rgba(210, 195, 53, 1)"></path>
                        </g>
                        <g>
                            <circle cx="101.04365" cy="619.1183" r="7.08526" fill="rgba(96, 89, 226, 1)"></circle>
                        </g>
                        <g>
                            <rect x="99.89077" y="631.04945" width="2" height="14" fill="rgba(210, 195, 53, 1)"></rect>
                        </g>
                        <g>
                            <path d="M808.54365,643.79323s.69056-14.46983,14.84712-12.78791"
                                transform="translate(-243.5 -26.81984)" fill="rgba(210, 195, 53, 1)"></path>
                        </g>
                        <g>
                            <circle cx="561.04365" cy="596.1183" r="7.08526" fill="rgba(96, 89, 226, 1)"></circle>
                        </g>
                        <g>
                            <rect x="559.89077" y="608.04945" width="2" height="14" fill="rgba(210, 195, 53, 1)"></rect>
                        </g>
                        <g>
                            <path
                                d="M425.18508,236.33517l9.20569-7.36279c-7.15149-.789-10.08991,3.11127-11.29248,6.19836-5.587-2.31994-11.66919.72046-11.66919.72046l18.41888,6.68671A13.938,13.938,0,0,0,425.18508,236.33517Z"
                                transform="translate(-243.5 -26.81984)" fill="rgba(210, 195, 53, 1)"></path>
                        </g>
                        <g>
                            <path
                                d="M565.18508,311.33517l9.20569-7.36279c-7.15149-.789-10.08991,3.11127-11.29248,6.19836-5.587-2.31994-11.66919.72046-11.66919.72046l18.41888,6.68671A13.938,13.938,0,0,0,565.18508,311.33517Z"
                                transform="translate(-243.5 -26.81984)" fill="rgba(210, 195, 53, 1)"></path>
                        </g>
                        <g>
                            <path
                                d="M414.18508,375.33517l9.20569-7.36279c-7.15149-.789-10.08991,3.11127-11.29248,6.19836-5.587-2.31994-11.66919.72046-11.66919.72046l18.41888,6.68671A13.938,13.938,0,0,0,414.18508,375.33517Z"
                                transform="translate(-243.5 -26.81984)" fill="rgba(210, 195, 53, 1)"></path>
                        </g>
                        <g>
                            <path
                                d="M724,563.1805a116.42056,116.42056,0,0,1-9.73,46.75L506.9,506.01045l-15.77-7.82995,21.37-1.17005,185.21-10.12C715.34,507.3705,724,534.03047,724,563.1805Z"
                                transform="translate(-243.5 -26.81984)" opacity="0.2"></path>
                        </g>
                        <g>
                            <polygon
                                points="505.5 471.361 207.5 471.361 207.5 447.361 355.5 385.361 505.5 447.361 505.5 471.361"
                                fill="rgba(210, 195, 53, 1)"></polygon>
                        </g>
                    </g>
                </svg>
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs"
                                    class="underline text-gray-900 dark:text-white">Documentation</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Laravel has wonderful, thorough documentation covering every aspect of the framework.
                                Whether you are new to the framework or have previous experience with Laravel, we
                                recommend reading all of the documentation from beginning to end.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                                </path>
                                <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com"
                                    class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript
                                development. Check them out, see for yourself, and massively level up your development
                                skills in the process.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                </path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/"
                                    class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Laravel News is a community driven portal and newsletter aggregating all of the latest
                                and most important news in the Laravel ecosystem, including new package releases and
                                tutorials.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant
                                Ecosystem</div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Laravel's robust library of first-party tools and libraries, such as <a
                                    href="https://forge.laravel.com" class="underline">Forge</a>, <a
                                    href="https://vapor.laravel.com" class="underline">Vapor</a>, <a
                                    href="https://nova.laravel.com" class="underline">Nova</a>, and <a
                                    href="https://envoyer.io" class="underline">Envoyer</a> help you take your
                                projects to the next level. Pair them with powerful open source libraries like <a
                                    href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a
                                    href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a
                                    href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a
                                    href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a
                                    href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a
                                    href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and
                                more.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                            <path
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>

                        <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                            Shop
                        </a>

                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                            <path
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>

                        <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                            Sponsor
                        </a>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div>
</body>

</html>

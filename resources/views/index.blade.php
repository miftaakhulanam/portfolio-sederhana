@extends('layouts.main')

@section('container')
    <section class="bg-gray-900 md:grid md:grid-cols-2 flex-col-reverse h-screen pt-20 relative container" id="home">
        <svg id='patternId' width='100%' height='100%' class="absolute opacity-5" xmlns='http://www.w3.org/2000/svg'>
            <defs>
                <pattern id='a' patternUnits='userSpaceOnUse' width='69.141' height='40'
                    patternTransform='scale(1) rotate(150)'>
                    <rect x='0' y='0' width='100%' height='100%' fill='hsla(0, 0%, 100%, 0)' />
                    <path
                        d='M69.212 40H46.118L34.57 20 46.118 0h23.094l11.547 20zM57.665 60H34.57L23.023 40 34.57 20h23.095l11.547 20zm0-40H34.57L23.023 0 34.57-20h23.095L69.212 0zM34.57 60H11.476L-.07 40l11.547-20h23.095l11.547 20zm0-40H11.476L-.07 0l11.547-20h23.095L46.118 0zM23.023 40H-.07l-11.547-20L-.07 0h23.094L34.57 20z'
                        stroke-width='1' stroke='hsla(259, 0%, 27%, 1)' fill='none' />
                </pattern>
            </defs>
            <rect width='800%' height='800%' transform='translate(0,0)' fill='url(#a)' />
        </svg>
        <div class="flex flex-col justify-center lg:py-16 z-10">
            <p class="text-2xl text-sky-500 font-medium mb-2">Halo, nama saya</p>
            <h1 class="text-white text-3xl font-sans md:text-6xl font-semibold mb-2">Miftakhul Anam</h1>
            <p class="text-lg font-normal text-gray-400 mb-6">Saya adalah seorang <span
                    class="text-gray-300 font-medium">Junior
                    Programmer</span></p>
            <p class="text-lg font-light text-gray-400 mb-6">"Untuk menjadi programmer yang handal memang tidak mudah.
                Tapi
                kalo kamu punya duit, bolehlah pinjam dulu seratus"
            </p>
            <div class="flex space-x-4">
                <a href="https://instagram.com/miftaakhul_anam?igshid=MzNlNGNkZWQ4Mg=="
                    class="inline-flex
                    justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg
                    bg-sky-500 hover:bg-sky-600 focus:ring-4 focus:ring-sky-700"
                    target="_blank">
                    Contact me
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center rounded-lg border-2 text-sky-500 border-sky-500 hover:bg-sky-500 focus:ring-gray-800 hover:text-white">
                    About me
                </a>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <div
                class="md:w-96 w-72 border h-fit border-gray-700 rounded overflow-hidden shadow-2xl transition duration-500 hover:shadow-sky-500 z-10 group cursor-zoom-in">
                <div class="flex justify-start bg-gray-900 p-1 relative left-0 right-0 h-6 z-50 border-b border-gray-700">
                    <div class="rounded-full w-2 h-2 m-1 mr-0 bg-gray-700 ml-1 group-hover:bg-red-600"></div>
                    <div class="rounded-full w-2 h-2 m-1 mr-0 bg-gray-700 group-hover:bg-yellow-300"></div>
                    <div class="rounded-full w-2 h-2 m-1 mr-0 bg-gray-700 group-hover:bg-green-600"></div>
                </div>
                <img src="img/miftakhul.jpg" class="group-hover:scale-150 group-hover:rotate-12 transition duration-500"
                    alt="Miftakhul Anam">
            </div>
        </div>
    </section>


    <div class="bg-gray-900 grid grid-cols-2 gap-x-20 container">
        <div class="py-8 lg:py-16 my-auto flex flex-col justify-center">
            <p class="text-2xl text-sky-500 font-medium mb-2">Tentang saya</p>
            <h1 class="text-white text-3xl font-sans md:text-3xl font-semibold mb-2">Berikut adalah riwayat hidup saya</h1>
            <p class="text-lg font-normal text-gray-400 mb-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Consequatur sunt, cumque quidem repellendus reiciendis, debitis non facilis deleniti reprehenderit, animi
                vel modi architecto rerum itaque.</p>
        </div>
        <div class="py-8 lg:py-16 my-auto">
            <h1 class="text-white text-3xl font-sans md:text-3xl font-semibold mb-2">Yuk Mutualan</h1>
            <p class="text-lg font-normal text-gray-400 mb-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit
                nostrum voluptas consequuntur magnam perferendis laboriosam.</p>
            <div class="flex gap-x-3">
                <div
                    class="w-10 h-10 rounded-full border-[1px] border-slate-300 flex justify-center items-center hover:bg-sky-500 hover:border-sky-500 group">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1.3em" class="fill-slate-300 group-hover:fill-slate-100"
                        viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                    </svg>
                </div>
                <div
                    class="w-10 h-10 rounded-full border-[1px] border-slate-300 flex justify-center items-center hover:bg-sky-500 hover:border-sky-500 group">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1.3em" class="fill-slate-300 group-hover:fill-slate-100"
                        viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" />
                    </svg>
                </div>
                <div
                    class="w-10 h-10 rounded-full border-[1px] border-slate-300 flex justify-center items-center hover:bg-sky-500 hover:border-sky-500 group">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1.3em" class="fill-slate-300 group-hover:fill-slate-100"
                        viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                    </svg>
                </div>
                <div
                    class="w-10 h-10 rounded-full border-[1px] border-slate-300 flex justify-center items-center hover:bg-sky-500 hover:border-sky-500 group">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1.3em" class="fill-slate-300 group-hover:fill-slate-100"
                        viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z" />
                    </svg>
                </div>
                <div
                    class="w-10 h-10 rounded-full border-[1px] border-slate-300 flex justify-center items-center hover:bg-sky-500 hover:border-sky-500 group">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1.3em" class="fill-slate-300 group-hover:fill-slate-100"
                        viewBox="0 0 496 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>


    <section class="bg-gray-800 h-100 container py-10" id="skills">
        <div class="flex flex-col w-1/2  mx-auto items-center py-10">
            <p class="text-2xl text-sky-500 font-medium">Skills</p>
            <h1 class="text-white text-3xl font-sans md:text-3xl font-semibold mb-3">Berikut teknologi yang saya pelajari
            </h1>
            <p class="text-lg font-normal text-gray-400 mb-6 text-center">Lorem ipsum dolor sit, amet consectetur
                adipisicing elit.
                Consequatur sunt, cumque quidem repellendus reiciendis.</p>
        </div>
        <div class="flex flex-wrap gap-5 pb-10 justify-center">
            <div
                class="flex h-28 w-96 items-center p-3 text-base font-bold text-gray-900 rounded-lg shadow-sm shadow-slate-900 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white overflow-hidden group hover:bg-gradient-to-br hover:from-sky-600 hover:to-sky-400 hover:-translate-y-4 duration-500">
                <svg class="-mt-11 fill-sky-500 group-hover:fill-slate-100" xmlns="http://www.w3.org/2000/svg"
                    height="7em"
                    viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z" />
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap text-xl text-slate-300 text-center">HTML 5</span>
            </div>
            <div
                class="flex h-28 w-96 items-center p-3 text-base font-bold text-gray-900 rounded-lg shadow-sm shadow-slate-900 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white overflow-hidden group hover:bg-gradient-to-br hover:from-sky-600 hover:to-sky-400 hover:-translate-y-4 duration-500">
                <svg class="-mt-11 fill-sky-500 group-hover:fill-slate-100" xmlns="http://www.w3.org/2000/svg"
                    height="7em"
                    viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M0 32l34.9 395.8L192 480l157.1-52.2L384 32H0zm313.1 80l-4.8 47.3L193 208.6l-.3.1h111.5l-12.8 146.6-98.2 28.7-98.8-29.2-6.4-73.9h48.9l3.2 38.3 52.6 13.3 54.7-15.4 3.7-61.6-166.3-.5v-.1l-.2.1-3.6-46.3L193.1 162l6.5-2.7H76.7L70.9 112h242.2z" />
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap text-xl text-slate-300 text-center">CSS 3</span>
            </div>
            <div
                class="flex h-28 w-96 items-center p-3 text-base font-bold text-gray-900 rounded-lg shadow-sm shadow-slate-900 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white overflow-hidden group hover:bg-gradient-to-br hover:from-sky-600 hover:to-sky-400 hover:-translate-y-4 duration-500">
                <svg class="-mt-11 fill-sky-500 group-hover:fill-slate-100" xmlns="http://www.w3.org/2000/svg"
                    height="7em"
                    viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M0 32v448h448V32H0zm243.8 349.4c0 43.6-25.6 63.5-62.9 63.5-33.7 0-53.2-17.4-63.2-38.5l34.3-20.7c6.6 11.7 12.6 21.6 27.1 21.6 13.8 0 22.6-5.4 22.6-26.5V237.7h42.1v143.7zm99.6 63.5c-39.1 0-64.4-18.6-76.7-43l34.3-19.8c9 14.7 20.8 25.6 41.5 25.6 17.4 0 28.6-8.7 28.6-20.8 0-14.4-11.4-19.5-30.7-28l-10.5-4.5c-30.4-12.9-50.5-29.2-50.5-63.5 0-31.6 24.1-55.6 61.6-55.6 26.8 0 46 9.3 59.8 33.7L368 290c-7.2-12.9-15-18-27.1-18-12.3 0-20.1 7.8-20.1 18 0 12.6 7.8 17.7 25.9 25.6l10.5 4.5c35.8 15.3 55.9 31 55.9 66.2 0 37.8-29.8 58.6-69.7 58.6z" />
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap text-xl text-slate-300 text-center">JAVASCRIPT</span>
            </div>
            <div
                class="flex h-28 w-96 items-center p-3 text-base font-bold text-gray-900 rounded-lg shadow-sm shadow-slate-900 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white overflow-hidden group hover:bg-gradient-to-br hover:from-sky-600 hover:to-sky-400 hover:-translate-y-4 duration-500">
                <svg class="w-36 -mt-12 fill-sky-500 group-hover:fill-slate-100" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                    enable-background="new 0 0 512 512" xml:space="preserve">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g id="5151e0c8492e5103c096af88a51e2ea6">
                            <path display="inline"
                                d="M401.054,224c3.714,4.115,4.595,11.181,2.653,21.19c-2.029,10.425-5.935,17.862-11.723,22.32 c-5.793,4.458-14.602,6.687-26.432,6.687h-17.849l10.957-56.37h20.103C389.913,217.827,397.34,219.886,401.054,224z M149.754,217.827h-20.103l-10.958,56.37h17.848c11.827,0,20.639-2.229,26.432-6.687c5.789-4.458,9.694-11.896,11.723-22.32 c1.942-10.01,1.06-17.075-2.653-21.19C168.33,219.886,160.903,217.827,149.754,217.827z M511.5,256 c0,74.229-114.393,134.403-255.5,134.403S0.5,330.229,0.5,256c0-74.228,114.393-134.403,255.5-134.403S511.5,181.772,511.5,256z M198.542,265.286c3.04-5.448,5.203-11.461,6.483-18.037c3.102-15.967,0.761-28.403-7.024-37.313 c-7.781-8.91-20.165-13.363-37.136-13.363h-56.423L78.265,331.261h29.342l6.958-35.805h25.134c11.087,0,20.21-1.164,27.372-3.497 c7.161-2.329,13.669-6.233,19.528-11.719C191.514,275.72,195.493,270.738,198.542,265.286z M301.814,295.456l12.181-62.682 c2.479-12.747,0.619-21.971-5.572-27.664c-6.196-5.688-17.449-8.537-33.768-8.537h-25.933l6.961-35.81h-29.11l-26.182,134.692 h29.11l14.996-77.165h23.267c7.448,0,12.317,1.232,14.604,3.698c2.287,2.467,2.773,7.091,1.455,13.869l-11.581,59.598H301.814z M427.011,209.937c-7.78-8.91-20.164-13.363-37.135-13.363h-56.424l-26.178,134.688h29.343l6.957-35.805h25.135 c11.086,0,20.21-1.164,27.371-3.497c7.161-2.329,13.669-6.233,19.528-11.719c4.92-4.521,8.896-9.502,11.943-14.954 c3.044-5.448,5.202-11.461,6.483-18.037C437.137,231.282,434.796,218.846,427.011,209.937z">
                            </path>
                        </g>
                    </g>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap text-xl text-slate-300 text-center">PHP</span>
            </div>
            <div
                class="flex h-28 w-96 items-center p-3 text-base font-bold text-gray-900 rounded-lg shadow-sm shadow-slate-900 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white overflow-hidden group hover:bg-gradient-to-br hover:from-sky-600 hover:to-sky-400 hover:-translate-y-4 duration-500">
                <svg class="w-36 fill-sky-500 group-hover:fill-slate-100 -mt-14" viewBox="0 0 24 24" role="img"
                    xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <title>Tailwind CSS icon</title>
                        <path
                            d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z">
                        </path>
                    </g>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap text-xl text-slate-300 text-center">TAILWIND CSS</span>
            </div>
            <div
                class="flex h-28 w-96 items-center p-3 text-base font-bold text-gray-900 rounded-lg shadow-sm shadow-slate-900 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white overflow-hidden group hover:bg-gradient-to-br hover:from-sky-600 hover:to-sky-400 hover:-translate-y-4 duration-500">
                <svg class="-mt-11 fill-sky-500 group-hover:fill-slate-100" xmlns="http://www.w3.org/2000/svg"
                    height="7em"
                    viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M504.4,115.83a5.72,5.72,0,0,0-.28-.68,8.52,8.52,0,0,0-.53-1.25,6,6,0,0,0-.54-.71,9.36,9.36,0,0,0-.72-.94c-.23-.22-.52-.4-.77-.6a8.84,8.84,0,0,0-.9-.68L404.4,55.55a8,8,0,0,0-8,0L300.12,111h0a8.07,8.07,0,0,0-.88.69,7.68,7.68,0,0,0-.78.6,8.23,8.23,0,0,0-.72.93c-.17.24-.39.45-.54.71a9.7,9.7,0,0,0-.52,1.25c-.08.23-.21.44-.28.68a8.08,8.08,0,0,0-.28,2.08V223.18l-80.22,46.19V63.44a7.8,7.8,0,0,0-.28-2.09c-.06-.24-.2-.45-.28-.68a8.35,8.35,0,0,0-.52-1.24c-.14-.26-.37-.47-.54-.72a9.36,9.36,0,0,0-.72-.94,9.46,9.46,0,0,0-.78-.6,9.8,9.8,0,0,0-.88-.68h0L115.61,1.07a8,8,0,0,0-8,0L11.34,56.49h0a6.52,6.52,0,0,0-.88.69,7.81,7.81,0,0,0-.79.6,8.15,8.15,0,0,0-.71.93c-.18.25-.4.46-.55.72a7.88,7.88,0,0,0-.51,1.24,6.46,6.46,0,0,0-.29.67,8.18,8.18,0,0,0-.28,2.1v329.7a8,8,0,0,0,4,6.95l192.5,110.84a8.83,8.83,0,0,0,1.33.54c.21.08.41.2.63.26a7.92,7.92,0,0,0,4.1,0c.2-.05.37-.16.55-.22a8.6,8.6,0,0,0,1.4-.58L404.4,400.09a8,8,0,0,0,4-6.95V287.88l92.24-53.11a8,8,0,0,0,4-7V117.92A8.63,8.63,0,0,0,504.4,115.83ZM111.6,17.28h0l80.19,46.15-80.2,46.18L31.41,63.44Zm88.25,60V278.6l-46.53,26.79-33.69,19.4V123.5l46.53-26.79Zm0,412.78L23.37,388.5V77.32L57.06,96.7l46.52,26.8V338.68a6.94,6.94,0,0,0,.12.9,8,8,0,0,0,.16,1.18h0a5.92,5.92,0,0,0,.38.9,6.38,6.38,0,0,0,.42,1v0a8.54,8.54,0,0,0,.6.78,7.62,7.62,0,0,0,.66.84l0,0c.23.22.52.38.77.58a8.93,8.93,0,0,0,.86.66l0,0,0,0,92.19,52.18Zm8-106.17-80.06-45.32,84.09-48.41,92.26-53.11,80.13,46.13-58.8,33.56Zm184.52,4.57L215.88,490.11V397.8L346.6,323.2l45.77-26.15Zm0-119.13L358.68,250l-46.53-26.79V131.79l33.69,19.4L392.37,178Zm8-105.28-80.2-46.17,80.2-46.16,80.18,46.15Zm8,105.28V178L455,151.19l33.68-19.4v91.39h0Z" />
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap text-xl text-slate-300 text-center">LARAVEL</span>
            </div>
        </div>


    </section>


    <section class="bg-gray-700 h-100 container py-10" id="portfolio">
        <div class="flex flex-col w-1/2  mx-auto items-center py-10">
            <p class="text-2xl text-sky-500 font-medium">Portfolio</p>
            <h1 class="text-white text-3xl font-sans md:text-3xl font-semibold  mb-3">Beberapa project terbaru saya</h1>
            <p class="text-lg font-normal text-gray-400 mb-6 text-center">Lorem ipsum dolor sit, amet consectetur
                adipisicing elit.
                Consequatur sunt, cumque quidem repellendus reiciendis.</p>
        </div>
        <div class="grid grid-cols-2">
            <div class="w-full px-20 py-4 flex flex-col justify-end items-center">
                <img src="img/web1.png"
                    class="border border-slate-400 rounded-md saturate-0 hover:ring-4 hover:border-none hover:ring-sky-500 transition duration-500 hover:scale-105 hover:filter-none"
                    alt="">
                <h1 class="text-lg font-normal text-slate-100 mt-3">Website Informasi Sekolah</h1>
                <h1 class="text-base font-normal text-slate-500 mb-3">Only frontend</h1>
            </div>
            <div class="w-full px-20 py-4 flex flex-col justify-end items-center">
                <img src="img/web2.png"
                    class="border border-slate-400 rounded-md saturate-0 hover:ring-4 hover:border-none hover:ring-sky-500 transition duration-500 hover:scale-105 hover:filter-none"
                    alt="">
                <h1 class="text-lg font-normal text-slate-100 mt-3">Website Pelatihan Gerabah</h1>
                <h1 class="text-base font-normal text-slate-500 mb-3">Frontend, Backend</h1>
            </div>
            <div class="w-full px-20 py-4 flex flex-col justify-end items-center">
                <img src="img/web3.png"
                    class="border border-slate-400 rounded-md saturate-0 hover:ring-4 hover:border-none hover:ring-sky-500 transition duration-500 hover:scale-105 hover:filter-none"
                    alt="">
                <h1 class="text-lg font-normal text-slate-100 mt-3">Website Pengolahan Sampah</h1>
                <h1 class="text-base font-normal text-slate-500 mb-3">Frontend, Backend</h1>
            </div>
            <div class="w-full px-20 py-4 flex flex-col justify-end items-center">
                <img src="img/web4.png"
                    class="border border-slate-400 rounded-md saturate-0 hover:ring-4 hover:border-none hover:ring-sky-500 transition duration-500 hover:scale-105 hover:filter-none"
                    alt="">
                <h1 class="text-lg font-normal text-slate-100 mt-3">Website Company Profile</h1>
                <h1 class="text-base font-normal text-slate-500 mb-3">Frontend, Backend</h1>
            </div>
        </div>
    </section>

    <section class="bg-gray-800 h-100 container py-10" id="contact">
        <div class="flex flex-col w-1/2  mx-auto items-center py-10">
            <p class="text-2xl text-sky-500 font-medium">Contact</p>
            <h1 class="text-white text-3xl font-sans md:text-3xl font-semibold  mb-3">Hubungi saya</h1>
            <p class="text-lg font-normal text-gray-400 mb-6 text-center">Lorem ipsum dolor sit, amet consectetur
                adipisicing elit.</p>
        </div>


        <div class="w-[60%] mx-auto pb-14">
            <form>
                <div class="mb-6">
                    <label for="nama" class="block mb-2 text-sm font-medium text-sky-500 dark:text-white">Nama</label>
                    <input type="text" id="nama"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                        required>
                </div>
                <div class="mb-6">
                    <label for="email"
                        class="block mb-2 text-sm font-medium text-sky-500 dark:text-white">Email</label>
                    <input type="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                        required>
                </div>
                <div class="mb-6">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-sky-500 dark:text-white">Pesan</label>
                    <textarea id="message" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"></textarea>
                </div>

                <button type="submit"
                    class="text-white bg-sky-500 hover:bg-sky-600 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-full text-sm w-full px-5 py-2.5 text-center dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">Kirim</button>
            </form>
        </div>
    </section>


    <footer class="bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="#" class="flex items-center">
                        <img src="img/logo.png" class="h-8 mr-3" alt="FlowBite Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Miftakhul.</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-36">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase text-white">Contact</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-2">miftakhulanam014@gmail.com</li>
                            <li class="mb-2">Jl. KH. Hasyim Asy'ari</li>
                            <li class="mb-2">Lamongan Jawa Timur</li>
                            <li class="mb-2">Kode Pos : 62257</li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase text-white">Tautan</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-3">
                                <a href="#" class="hover:text-sky-500">Home</a>
                            </li>
                            <li class="mb-3">
                                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                    class="flex items-center justify-between w-full py-2 pl-3 pr-4 rounded md:border-0  md:p-0 md:w-auto transition duration-200 md:hover:text-sky-500 border-gray-700 hover:bg-gray-700 md:hover:bg-transparent">Profile
                                    <svg class="w-2.5 h-2.5 ml-28" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg></button>
                                <!-- Dropdown menu -->
                                <div id="dropdownNavbar"
                                    class="z-10 hidden font-normal divide-y rounded-lg shadow w-44 bg-gray-700 divide-gray-600">
                                    <ul class="ml-52 py-2 text-sm text-gray-400" aria-labelledby="dropdownLargeButton">
                                        <li>
                                            <a href="/profile"
                                                class="block px-4 py-2 hover:bg-gray-600 hover:text-white">Profile</a>
                                        </li>
                                        <li>
                                            <a href="/curriculu_vitae"
                                                class="block px-4 py-2 hover:bg-gray-600 hover:text-white">Curriculum
                                                vitae</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mb-3">
                                <a href="#" class="hover:text-sky-500">Skills</a>
                            </li>
                            <li class="mb-3">
                                <a href="#" class="hover:text-sky-500">Portfolio</a>
                            </li>
                            <li class="mb-3">
                                <a href="#" class="hover:text-sky-500">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="flex gap-x-3 justify-center">
                <div
                    class="w-10 h-10 rounded-full border-[1px] border-slate-300 flex justify-center items-center hover:bg-sky-500 hover:border-sky-500 group">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1.3em"
                        class="fill-slate-300 group-hover:fill-slate-100"
                        viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                    </svg>
                </div>
                <div
                    class="w-10 h-10 rounded-full border-[1px] border-slate-300 flex justify-center items-center hover:bg-sky-500 hover:border-sky-500 group">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1.3em"
                        class="fill-slate-300 group-hover:fill-slate-100"
                        viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" />
                    </svg>
                </div>
                <div
                    class="w-10 h-10 rounded-full border-[1px] border-slate-300 flex justify-center items-center hover:bg-sky-500 hover:border-sky-500 group">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1.3em"
                        class="fill-slate-300 group-hover:fill-slate-100"
                        viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                    </svg>
                </div>
                <div
                    class="w-10 h-10 rounded-full border-[1px] border-slate-300 flex justify-center items-center hover:bg-sky-500 hover:border-sky-500 group">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1.3em"
                        class="fill-slate-300 group-hover:fill-slate-100"
                        viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z" />
                    </svg>
                </div>
                <div
                    class="w-10 h-10 rounded-full border-[1px] border-slate-300 flex justify-center items-center hover:bg-sky-500 hover:border-sky-500 group">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1.3em"
                        class="fill-slate-300 group-hover:fill-slate-100"
                        viewBox="0 0 496 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                    </svg>
                </div>
            </div>
            <div class="text-center pt-5">
                <p class="text-xs text-gray-500">Dibuat oleh <a class="text-sm font-semibold text-sky-500"
                        href="https://instagram.com/miftaakhul_anam?igshid=MzNlNGNkZWQ4Mg==" target="_blank">Miftakhul
                        Anam</a></p>
            </div>
        </div>
    </footer>
@endsection

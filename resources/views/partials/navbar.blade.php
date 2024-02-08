<nav class="bg-gray-900 fixed w-screen backdrop-filter backdrop-blur-lg bg-opacity-30 z-50">
    <div class="container">

        <div class=" flex flex-wrap items-center justify-between mx-auto py-4">
            <a href="#" class="flex items-center">
                <img src="img/logo.png" class="h-8 mr-3" alt="Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Miftakhul.</span>
            </a>
            <button data-collapse-toggle="navbar-dropdown" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm rounded-lg md:hidden focus:outline-none focus:ring-2 text-gray-400 hover:bg-gray-700 focus:ring-gray-600"
                aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul
                    class="flex flex-col gap-10 font-medium p-4 md:p-0 mt-4 border rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 border-gray-700">
                    <li>
                        <a href="/#home"
                            class="block py-2 pl-3 pr-4 text-white rounded md:p-0 hover:text-sky-500 bg-sky-600 md:bg-transparent"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 rounded md:border-0  md:p-0 md:w-auto text-white transition duration-200 md:hover:text-sky-500 focus:text-white border-gray-700 hover:bg-gray-700 md:hover:bg-transparent">Profile
                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="z-10 hidden font-normal divide-y rounded-lg shadow w-44 bg-gray-700 divide-gray-600">
                            <ul class="py-2 text-sm text-gray-400" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="/profile"
                                        class="block px-4 py-2 hover:bg-gray-600 hover:text-white">Profile</a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/uc?export=download&id=1BhrPJoFCu95ifjEkFAl_N85VQrl2tcVh"
                                        class="block px-4 py-2 hover:bg-gray-600 hover:text-white"
                                        target="_blank">Curriculum
                                        vitae</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="/#skills"
                            class="block py-2 pl-3 pr-4 rounded md:border-0 md:p-0 text-white transition duration-200 md:hover:text-sky-500 hover:bg-gray-700 hover:text-white md:hover:bg-transparent">Skills</a>
                    </li>
                    <li>
                        <a href="/#portfolio"
                            class="block py-2 pl-3 pr-4 rounded md:border-0 md:p-0 text-white transition duration-200 md:hover:text-sky-500 hover:bg-gray-700 hover:text-white md:hover:bg-transparent">Portfolio</a>
                    </li>
                    <li>
                        <a href="/#contact"
                            class="block py-2 pl-3 pr-4 rounded md:border-0 md:p-0 text-white transition duration-200 md:hover:text-sky-500 hover:bg-gray-700 hover:text-white md:hover:bg-transparent">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

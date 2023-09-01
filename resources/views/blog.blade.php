<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Justread</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="overflow-x-hidden">
    <div class="w-screen ">
        <nav class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 ">
            <div class="px-12 flex flex-wrap items-center justify-between mx-auto ">
                <div class="flex gap-10">
                    <a href="#" class="flex items-center">
                        <span style="font-family: 'Kanit', sans-serif;"
                            class="flex justify-center items-center self-center text-3xl font-extrabold whitespace-nowrap dark:text-white italic">Justread<span
                                class="text-[#0065cc]">.</span>
                            <div class="text-gray-400 not-italic text-xs font-medium h-16 pt-4">WP</div>
                        </span>
                    </a>
                    <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
                        <ul
                            class="flex flex-col font-medium text-sm p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-6 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                            <li>
                                <a href="#"
                                    class="block py-2 pl-3 pr-4 text-gray-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">ABOUT</a>
                            </li>
                            <li>
                                <button id="categoriesNavbarLink" data-dropdown-toggle="categoriesNavbar"
                                    class="flex items-center justify-between w-full py-2 pl-3 pr-4  text-gray-500 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">CATEGORIES
                                    <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>

                                <div id="categoriesNavbar"
                                    class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                        aria-labelledby="dropdownLargeButton">
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <button id="readabilityNavbarLink" data-dropdown-toggle="readabilityNavbar"
                                    class="flex items-center justify-between w-full py-2 pl-3 pr-4  text-gray-500 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">READABILITY
                                    <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>

                                <div id="readabilityNavbar"
                                    class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                        aria-labelledby="dropdownLargeButton">
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 pl-3 pr-4 text-gray-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </div>


                <!--                <div class=" flex justify-between items-center ">
                    <div class=" flex justify-between items-center gap-2 mr-4">
                </div> -->
        </nav>

        <div class="bg-[#f5f7f8] flex flex-wrap justify-between py-20 px-44 h-full gap-12">
            @foreach ($blogs as $blog)
                <section
                    class="flex flex-col w-[350px] h-[450px] rounded overflow-hidden shadow-lg justify-between bg-white">
                    <div>
                        <?php
                        echo '<img class="w-full h-[180px]" height="80" width="80" src="data:image/jpeg;base64,' . base64_encode($blog->ruta) . ' alt="ruta.jpg""/>';
                        ?>
                        <div class="px-6 pt-4">
                            <p class="text-gray-400 text-sm">
                                {{ $blog->tipo }}
                            </p>
                        </div>
                        <div class="px-6 pb-4">
                            <div class="font-bold text-xl mb-2 h-[60px] ">{{ $blog->nombre }}</div>
                            <div class="text-ellipsis overflow-hidden text-gray-700 text-base h-[100px] ">
                                {{ $blog->descri }}
                            </div>
                        </div>
                    </div>
                    <div class="px-6 pb-4 flex justify-between text-gray-400 text-sm">
                        <div class="flex">
                            <?php
                            echo '<img  height="20" width="20" src="data:image/jpg;base64,' . base64_encode($blog->ruta_u) . ' alt="sus""/>';
                            ?>
                            <p>{{ $blog->nombre_u }}</p>
                        </div>
                        <div>
                            <?php
                            $originalDate = $blog->fecha;
                            $day = date('d', strtotime($originalDate));
                            $month = date('m', strtotime($originalDate));
                            $monthName = date('F', mktime(0, 0, 0, $month, 10));
                            $year = date('Y', strtotime($originalDate));
                            ?>
                            <p>{{ $monthName }} {{ $day }} , {{ $year }}</p>

                        </div>
                    </div>
                </section>
            @endforeach
        </div>
    </div>
</body>

</html>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style type="text/css">
        /* ===== Scrollbar CSS ===== */
          /* Firefox */
          * {
            scrollbar-width: auto;
            scrollbar-color: #40474b #121a21;
          }

          /* Chrome, Edge, and Safari */
          *::-webkit-scrollbar {
            width: 5px;
          }

          *::-webkit-scrollbar-track {
            background: #121a21;
          }

          *::-webkit-scrollbar-thumb {
            background-color: #40474b;
            border-radius: 0px;
            border: 0px solid #ffffff;
          }
    </style>

</head>
<body class="w-full max-h-screen overflow-hidden text-white">

    <main class="w-full">

        <div class="fixed top-0 w-full h-14" style="background-color: #202C33;">
            <div class="grid grid-cols-12 gap-0 h-screen divide-x divide-gray-700/60">
                <div class="col-span-4 h-full py-2 px-4">
                    <div class="grid grid-cols-3">
                        <div class="cursor-pointer">
                            <img src="{{ asset('propic.jpg') }}" class="w-auto h-10 rounded-full" />
                        </div>
                        <div class="col-start-3 py-2">
                            <div class="grid grid-cols-3 gap-4">
                                <div class="cursor-pointer"><svg version="1.1" id="df9d3429-f0ef-48b5-b5eb-f9d27b2deba6" x="0" y="0" viewBox="0 0 24 24" width="26" height="26" class=""><path fill="#AEBAC1" d="M12.072 1.761a10.05 10.05 0 0 0-9.303 5.65.977.977 0 0 0 1.756.855 8.098 8.098 0 0 1 7.496-4.553.977.977 0 1 0 .051-1.952zM1.926 13.64a10.052 10.052 0 0 0 7.461 7.925.977.977 0 0 0 .471-1.895 8.097 8.097 0 0 1-6.012-6.386.977.977 0 0 0-1.92.356zm13.729 7.454a10.053 10.053 0 0 0 6.201-8.946.976.976 0 1 0-1.951-.081v.014a8.097 8.097 0 0 1-4.997 7.209.977.977 0 0 0 .727 1.813l.02-.009z"></path><path fill="#009588" d="M19 1.5a3 3 0 1 1 0 6 3 3 0 0 1 0-6z"></path></svg></div>
                                <div class="cursor-pointer"><svg viewBox="0 0 24 24" width="26" height="26" class=""><path fill="#AEBAC1" d="M19.005 3.175H4.674C3.642 3.175 3 3.789 3 4.821V21.02l3.544-3.514h12.461c1.033 0 2.064-1.06 2.064-2.093V4.821c-.001-1.032-1.032-1.646-2.064-1.646zm-4.989 9.869H7.041V11.1h6.975v1.944zm3-4H7.041V7.1h9.975v1.944z"></path></svg></div>
                                <div class="cursor-pointer"><svg viewBox="0 0 24 24" width="26" height="26" class=""><path fill="#AEBAC1" d="M12 7a2 2 0 1 0-.001-4.001A2 2 0 0 0 12 7zm0 2a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 9zm0 6a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 15z"></path></svg></div>
                            </div>
                        </div>
                        <div class="col-span-3">
                            <div class="text-gray-400 divide-y divide-gray-700/60 pt-4">
                              <span class="absolute inset-y-0 left-0 top-20 flex items-center pl-6 pt-1">
                                <button search-glass-icon type="submit" class="p-1">
                                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                </button>
                                <button search-arrow-icon type="submit" class="p-1 absolute" style="opacity: 0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="#16A884" viewBox="0 0 24 24" stroke="#16A884" stroke-width="2">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                    </svg>
                                </button>
                              </span>
                              <input type="search" name="q" class="w-full py-2 text-sm text-white rounded-lg pl-14 focus:outline-none border-transparent focus:border-transparent focus:ring-0" placeholder="Search your conversations..." autocomplete="off"  style="background-color: #202C33;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-8 h-full">

                </div>
            </div>
        </div>

        <div class="pt-14 grid grid-cols-12 gap-0 h-screen" style="background-color: #121A21;">
            <div class="absolute inset-0 w-1/3 top-28 overflow-auto">
                  <div class="h-0">
                        <div class="grid grid-cols-1 divide-y divide-gray-700/60">
                            <div></div>
                            <div class="divide-none"></div>
                        </div>
                  </div>
                  <div class="h-17">
                        <div class=" cursor-pointer grid grid-cols-12 divide-y divide-gray-700/60 ">
                            <div class="col-span-2 pl-5 py-4 pr-2">
                                <img src="{{ asset('propic.jpg') }}" class="w-auto h-11 rounded-full" />
                            </div>
                            <div class="col-span-10 py-2 mr-5">
                                <div class="flex justify-between py-1">
                                    <span class="">42 acting 21 🚓😂</span>
                                    <span class="text-xs text-gray-500">yesterday</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm">Spartacus: 😉😉💪🏻💯💯❤️</span>
                                </div>
                            </div>
                        </div>
                  </div>
                  <div class="h-17 bg-[#2A3942]">
                        <div class=" cursor-pointer grid grid-cols-12 divide-y divide-gray-700/60 ">
                            <div class="col-span-2 pl-5 py-4 pr-2">
                                <img src="{{ asset('propic.jpg') }}" class="w-auto h-11 rounded-full" />
                            </div>
                            <div class="col-span-10 py-2 mr-5">
                                <div class="flex justify-between py-1">
                                    <span class="">42 acting 21 🚓😂</span>
                                    <span class="text-xs text-gray-500">yesterday</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm">Spartacus: 😉😉💪🏻💯💯❤️</span>
                                </div>
                            </div>
                        </div>
                  </div>
                  <div class="h-17">
                        <div class=" cursor-pointer grid grid-cols-12 divide-y divide-gray-700/60 ">
                            <div class="col-span-2 pl-5 py-4 pr-2">
                                <img src="{{ asset('propic.jpg') }}" class="w-auto h-11 rounded-full" />
                            </div>
                            <div class="col-span-10 py-2 mr-5">
                                <div class="flex justify-between py-1">
                                    <span class="">42 acting 21 🚓😂</span>
                                    <span class="text-xs text-gray-500">yesterday</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm">Spartacus: 😉😉💪🏻💯💯❤️</span>
                                </div>
                            </div>
                        </div>
                  </div>
                  <div class="h-17">
                        <div class=" cursor-pointer grid grid-cols-12 divide-y divide-gray-700/60 ">
                            <div class="col-span-2 pl-5 py-4 pr-2">
                                <img src="{{ asset('propic.jpg') }}" class="w-auto h-11 rounded-full" />
                            </div>
                            <div class="col-span-10 py-2 mr-5">
                                <div class="flex justify-between py-1">
                                    <span class="">42 acting 21 🚓😂</span>
                                    <span class="text-xs text-gray-500">yesterday</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm">Spartacus: 😉😉💪🏻💯💯❤️</span>
                                </div>
                            </div>
                        </div>
                  </div>
                  <div class="h-17">
                        <div class=" cursor-pointer grid grid-cols-12 divide-y divide-gray-700/60 ">
                            <div class="col-span-2 pl-5 py-4 pr-2">
                                <img src="{{ asset('propic.jpg') }}" class="w-auto h-11 rounded-full" />
                            </div>
                            <div class="col-span-10 py-2 mr-5">
                                <div class="flex justify-between py-1">
                                    <span class="">42 acting 21 🚓😂</span>
                                    <span class="text-xs text-gray-500">yesterday</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm">Spartacus: 😉😉💪🏻💯💯❤️</span>
                                </div>
                            </div>
                        </div>
                  </div>
                  <div class="h-17">
                        <div class=" cursor-pointer grid grid-cols-12 divide-y divide-gray-700/60 ">
                            <div class="col-span-2 pl-5 py-4 pr-2">
                                <img src="{{ asset('propic.jpg') }}" class="w-auto h-11 rounded-full" />
                            </div>
                            <div class="col-span-10 py-2 mr-5">
                                <div class="flex justify-between py-1">
                                    <span class="">42 acting 21 🚓😂</span>
                                    <span class="text-xs text-gray-500">yesterday</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm">Spartacus: 😉😉💪🏻💯💯❤️</span>
                                </div>
                            </div>
                        </div>
                  </div>
                  <div class="h-17">
                        <div class=" cursor-pointer grid grid-cols-12 divide-y divide-gray-700/60 ">
                            <div class="col-span-2 pl-5 py-4 pr-2">
                                <img src="{{ asset('propic.jpg') }}" class="w-auto h-11 rounded-full" />
                            </div>
                            <div class="col-span-10 py-2 mr-5">
                                <div class="flex justify-between py-1">
                                    <span class="">42 acting 21 🚓😂</span>
                                    <span class="text-xs text-gray-500">yesterday</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm">Spartacus: 😉😉💪🏻💯💯❤️</span>
                                </div>
                            </div>
                        </div>
                  </div>
                  <div class="h-17">
                        <div class=" cursor-pointer grid grid-cols-12 divide-y divide-gray-700/60 ">
                            <div class="col-span-2 pl-5 py-4 pr-2">
                                <img src="{{ asset('propic.jpg') }}" class="w-auto h-11 rounded-full" />
                            </div>
                            <div class="col-span-10 py-2 mr-5">
                                <div class="flex justify-between py-1">
                                    <span class="">42 acting 21 🚓😂</span>
                                    <span class="text-xs text-gray-500">yesterday</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm">Spartacus: 😉😉💪🏻💯💯❤️</span>
                                </div>
                            </div>
                        </div>
                  </div>
            </div>
            <div class="absolute inset-0 left-1/3 w-2/3 top-14 overflow-auto">
                <div class="grid grid-cols-1 overflow-auto">
                  <div class="h-96"></div>
                  <div class="h-96"></div>
                  <div class="h-96"></div>
                </div>
            </div>
        </div>

    </main>

    <script type="text/javascript">
        const search = document.querySelector('input[type="search"]');

        let searchGlassIcon = document.querySelector('[search-glass-icon]');
        let searchArrowIcon = document.querySelector('[search-arrow-icon]');

        search.addEventListener('click', (event) => {
            searchGlassIcon.animate([
                { transform: 'rotate(-270deg)' },
                { opacity: 0 }
            ], { duration: 200, easing: 'ease', fill: 'forwards'});

            searchArrowIcon.animate([
                { transform: 'rotate(-90deg)' },
                { opacity: 1 },
            ], { duration: 300, easing: 'ease', fill: 'forwards' });
        });

        search.addEventListener('focusout', (event) => {
            search.blur();
            searchGlassIcon.animate([
                { transform: 'rotate(90deg)' },
                { opacity: 1 }
            ], { duration: 200, easing: 'ease', fill: 'forwards' });

            searchArrowIcon.animate([
                { transform: 'rotate(180deg)' },
                { opacity: 0 }
            ], { duration: 300, easing: 'ease', fill: 'forwards' });
        });
    </script>

</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<div x-data="{ open: false }" class="flex h-screen bg-gray-50 dark:bg-gray-900">

    <!-- SIDEBAR -->
    <aside 
        @mouseenter="open = true"
        @mouseleave="open = false"
        class="bg-white dark:bg-gray-800 shadow-xl border-r border-gray-200 dark:border-gray-700 flex flex-col transition-all duration-300"
        :class="open ? 'w-72' : 'w-20'"
    >

        <!-- LOGO -->
        <div class="flex items-center gap-3 px-6 py-6 border-b border-gray-200 dark:border-gray-700 transition-all duration-300">
            <div class="bg-blue-600 text-white w-10 h-10 rounded-xl flex items-center justify-center font-bold text-lg shadow-md">
                T
            </div>
            <h1 
                class="text-2xl font-semibold text-gray-800 dark:text-gray-100 tracking-tight whitespace-nowrap overflow-hidden transition-all duration-300"
                :class="open ? 'opacity-100 w-auto' : 'opacity-0 w-0'"
            >
                T-Book Admin
            </h1>
        </div>

        <!-- MENU -->
        <nav class="flex-1 px-3 py-6 overflow-y-auto">
            <ul class="space-y-2">

                <!-- Dashboard -->
                <li>
                    <a href="/dashboard"
                       class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 dark:text-gray-200 
                              hover:bg-blue-50 dark:hover:bg-gray-700 hover:text-blue-600 
                              transition-all duration-200 group">
                        
                        <!-- ICON -->
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6 group-hover:text-blue-600 shrink-0"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0h6"/>
                        </svg>

                        <!-- LABEL -->
                        <span class="text-base font-medium transition-all duration-300 whitespace-nowrap overflow-hidden"
                              :class="open ? 'opacity-100 w-auto' : 'opacity-0 w-0'">
                            Dashboard
                        </span>
                    </a>
                </li>

                <!-- BOOKS SECTION -->
                <li class="pt-2">

                    <!-- SECTION TITLE -->
                    <p class="text-xs font-bold text-gray-400 dark:text-gray-500 uppercase tracking-wide px-4 pb-1 transition-all duration-300"
                       :class="open ? 'opacity-100 h-auto' : 'opacity-0 h-0 overflow-hidden'">
                        Books
                    </p>

                    <!-- All Books -->
                    <a href="/books"
                       class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-blue-50 dark:hover:bg-gray-700 
                              text-gray-700 dark:text-gray-200 hover:text-blue-600 transition group">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6 shrink-0 group-hover:text-blue-600"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6V4m0 2a2 2 0 00-2 2v8a2 2 0 002 2m0-12a2 2 0 012 2v8a2 2 0 01-2 2m-7 4h14"/>
                        </svg>

                        <span class="text-base font-medium transition-all duration-300"
                              :class="open ? 'opacity-100 w-auto' : 'opacity-0 w-0 overflow-hidden'">
                            All Books
                        </span>
                    </a>

                    <!-- Add Book -->
                    <a href="/books/create"
                       class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-blue-50 dark:hover:bg-gray-700 
                              text-gray-700 dark:text-gray-200 hover:text-blue-600 transition group">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6 shrink-0 group-hover:text-blue-600"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4v16m8-8H4"/>
                        </svg>

                        <span class="text-base font-medium transition-all duration-300"
                              :class="open ? 'opacity-100 w-auto' : 'opacity-0 w-0 overflow-hidden'">
                            Add Book
                        </span>
                    </a>

                    <!-- Categories -->
                    <a href="/categories"
                       class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-blue-50 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-200 hover:text-blue-600 transition group">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6 shrink-0 group-hover:text-blue-600"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 7h10M7 12h10M7 17h6"/>
                        </svg>

                        <span class="text-base font-medium transition-all duration-300"
                              :class="open ? 'opacity-100 w-auto' : 'opacity-0 w-0 overflow-hidden'">
                            Categories
                        </span>
                    </a>

                </li>

                <!-- Transactions -->
                <li class="pt-4">
                    <p class="text-xs font-bold text-gray-400 dark:text-gray-500 uppercase tracking-wide px-4 pb-1 transition-all duration-300"
                       :class="open ? 'opacity-100 h-auto' : 'opacity-0 h-0 overflow-hidden'">
                        Transactions
                    </p>

                    <!-- Lending -->
                    <a href="/lending"
                       class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-blue-50 dark:hover:bg-gray-700 
                              text-gray-700 dark:text-gray-200 hover:text-blue-600 transition group">

                        <svg class="h-6 w-6 shrink-0 group-hover:text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-width="2" d="M8 7h13M8 12h13M8 17h13M3 7h.01M3 12h.01M3 17h.01"/>
                        </svg>

                        <span class="text-base font-medium transition-all duration-300"
                              :class="open ? 'opacity-100 w-auto' : 'opacity-0 w-0 overflow-hidden'">
                            Lending
                        </span>
                    </a>

                    <!-- Returning -->
                    <a href="/returning"
                       class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-blue-50 dark:hover:bg-gray-700 
                              text-gray-700 dark:text-gray-200 hover:text-blue-600 transition group">

                        <svg class="h-6 w-6 shrink-0 group-hover:text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-width="2" d="M4 4v6h6M20 20v-6h-6"/>
                        </svg>

                        <span class="text-base font-medium transition-all duration-300"
                              :class="open ? 'opacity-100 w-auto' : 'opacity-0 w-0 overflow-hidden'">
                            Returning
                        </span>
                    </a>
                </li>

                <!-- USERS -->
                <li class="pt-4">
                    <p class="text-xs font-bold text-gray-400 dark:text-gray-500 uppercase tracking-wide px-4 pb-1 transition-all duration-300"
                       :class="open ? 'opacity-100 h-auto' : 'opacity-0 h-0 overflow-hidden'">
                        Users
                    </p>

                    <a href="/users"
                       class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 dark:text-gray-200 
                              hover:bg-blue-50 dark:hover:bg-gray-700 hover:text-blue-600 transition group">
                        
                        <svg class="h-6 w-6 shrink-0 group-hover:text-blue-600"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-width="2"
                                  d="M17 20h5v-2a4 4 0 00-5-4m-7 6H2v-2a4 4 0 015-4m5-6a4 4 0 11-8 0 4 4 0 018 0zm6 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>

                        <span class="text-base font-medium transition-all duration-300"
                              :class="open ? 'opacity-100 w-auto' : 'opacity-0 w-0 overflow-hidden'">
                            All Users
                        </span>
                    </a>
                </li>

            </ul>
        </nav>

        <!-- FOOTER LOGOUT -->
        <div class="p-4 border-t border-gray-200 dark:border-gray-700">
            <a href="/logout"
               class="flex items-center gap-3 px-4 py-3 text-red-600 hover:bg-red-50 dark:hover:bg-gray-700 
                      rounded-xl transition font-medium">

                <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-width="2"
                          d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 11-4 0v-1m4-10V5a2 2 0 10-4 0v1"/>
                </svg>

                <span class="transition-all duration-300"
                      :class="open ? 'opacity-100 w-auto' : 'opacity-0 w-0 overflow-hidden'">
                    Logout
                </span>
            </a>
        </div>

    </aside>

    <!-- CONTENT -->
    <main class="flex-1 p-6">
        {{ $slot }}
    </main>

</div>

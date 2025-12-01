<x-sideBar>

    <div class="space-y-8">

        <!-- TITLE -->
        <div>
            <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-100 tracking-tight">
                Dashboard Overview
            </h1>
            <p class="text-gray-500 mt-1 text-sm">
                Welcome back, here’s your library summary at a glance.
            </p>
        </div>


        <!-- TOP STATS -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Total Books -->
            <div class="p-6 bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700">
                <div class="flex justify-between items-start mb-4">
                    <span class="text-gray-600 dark:text-gray-400 font-medium">Total Books</span>
                    <div class="p-2 bg-blue-500/10 text-blue-600 rounded-xl">
                        📚
                    </div>
                </div>
                <h2 class="text-3xl font-semibold text-gray-900 dark:text-gray-100">1,248</h2>
                <p class="text-xs text-green-500 mt-1">+14 new books this week</p>
            </div>

            <!-- Active Borrowers -->
            <div class="p-6 bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700">
                <div class="flex justify-between items-start mb-4">
                    <span class="text-gray-600 dark:text-gray-400 font-medium">Active Borrowers</span>
                    <div class="p-2 bg-purple-500/10 text-purple-600 rounded-xl">
                        👤
                    </div>
                </div>
                <h2 class="text-3xl font-semibold text-gray-900 dark:text-gray-100">312</h2>
                <p class="text-xs text-green-500 mt-1">+6% compared to last month</p>
            </div>

            <!-- Books Borrowed -->
            <div class="p-6 bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700">
                <div class="flex justify-between items-start mb-4">
                    <span class="text-gray-600 dark:text-gray-400 font-medium">Books Borrowed</span>
                    <div class="p-2 bg-yellow-500/10 text-yellow-600 rounded-xl">
                        📖
                    </div>
                </div>
                <h2 class="text-3xl font-semibold text-gray-900 dark:text-gray-100">482</h2>
                <p class="text-xs text-red-500 mt-1">-3% from last week</p>
            </div>
        </div>


        <!-- CHART & RECENT TABLE -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- CHART -->
            <div class="lg:col-span-2 p-6 bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">
                    Borrowing Trend
                </h3>

                <!-- Chart Placeholder -->
                <div class="h-64 bg-gray-100 dark:bg-gray-700 rounded-xl flex items-center justify-center text-gray-500 dark:text-gray-300">
                    <span class="text-sm">Chart will be here</span>
                </div>
            </div>

            <!-- Recent Activities -->
            <div class="p-6 bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">
                    Recent Activities
                </h3>

                <ul class="space-y-4">

                    <li class="flex items-center justify-between">
                        <div>
                            <p class="font-medium text-gray-800 dark:text-gray-100">
                                Farhan borrowed “Atomic Habits”
                            </p>
                            <p class="text-xs text-gray-500 mt-1">2 hours ago</p>
                        </div>
                        <span class="text-blue-600 text-sm font-medium">Borrowed</span>
                    </li>

                    <li class="flex items-center justify-between">
                        <div>
                            <p class="font-medium text-gray-800 dark:text-gray-100">
                                Sinta returned “The Alchemist”
                            </p>
                            <p class="text-xs text-gray-500 mt-1">Yesterday</p>
                        </div>
                        <span class="text-green-600 text-sm font-medium">Returned</span>
                    </li>

                    <li class="flex items-center justify-between">
                        <div>
                            <p class="font-medium text-gray-800 dark:text-gray-100">
                                Rudi borrowed “Design Patterns”
                            </p>
                            <p class="text-xs text-gray-500 mt-1">3 days ago</p>
                        </div>
                        <span class="text-blue-600 text-sm font-medium">Borrowed</span>
                    </li>

                </ul>

            </div>

        </div>

    </div>

</x-sideBar>

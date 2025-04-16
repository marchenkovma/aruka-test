@props(['class' => ''])

<div x-data="themeSwitcher" class="relative {{ $class }}">
    <div class="flex items-center space-x-1 bg-gray-100 dark:bg-gray-800 rounded-lg p-1">
        <!-- Светлая тема -->
        <button 
            @click="setTheme('light')"
            class="flex items-center justify-center w-8 h-8 rounded-md transition-all duration-200
                   hover:bg-white dark:hover:bg-gray-700
                   focus:outline-none focus:ring-2 focus:ring-indigo-500"
            :class="{ 'bg-white dark:bg-gray-700 shadow-sm': theme === 'light' }"
            x-tooltip="'Светлая тема'"
        >
            <svg class="w-4 h-4 text-gray-800 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>

        <!-- Темная тема -->
        <button 
            @click="setTheme('dark')"
            class="flex items-center justify-center w-8 h-8 rounded-md transition-all duration-200
                   hover:bg-white dark:hover:bg-gray-700
                   focus:outline-none focus:ring-2 focus:ring-indigo-500"
            :class="{ 'bg-white dark:bg-gray-700 shadow-sm': theme === 'dark' }"
            x-tooltip="'Темная тема'"
        >
            <svg class="w-4 h-4 text-gray-800 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>

        <!-- Системная тема -->
        <button 
            @click="setTheme('system')"
            class="flex items-center justify-center w-8 h-8 rounded-md transition-all duration-200
                   hover:bg-white dark:hover:bg-gray-700
                   focus:outline-none focus:ring-2 focus:ring-indigo-500"
            :class="{ 'bg-white dark:bg-gray-700 shadow-sm': theme === 'system' }"
            x-tooltip="'Системная тема'"
        >
            <svg class="w-4 h-4 text-gray-800 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
    </div>
</div> 
<header>
    <nav class="mx-auto my-7 flex max-w-5xl justify-center justify-between">
        <div>
            <a
                class="flex items-center gap-2"
                href="{{ route('home') }}"
            >
                <svg
                    class="h-7 fill-current"
                    viewBox="0 0 90 100"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M6 13C6 9.13401 9.13401 6 13 6H77C80.866 6 84 9.13401 84 13V87C84 90.866 80.866 94 77 94H13C9.13401 94 6 90.866 6 87V13ZM13 0C5.8203 0 0 5.8203 0 13V87C0 94.1797 5.8203 100 13 100H77C84.1797 100 90 94.1797 90 87V13C90 5.8203 84.1797 0 77 0H13ZM54 68C55.6569 68 57 66.6569 57 65C57 63.3431 55.6569 62 54 62H20C18.3431 62 17 63.3431 17 65C17 66.6569 18.3431 68 20 68H54ZM72 50C72 51.6569 70.6569 53 69 53H20C18.3431 53 17 51.6569 17 50C17 48.3431 18.3431 47 20 47H69C70.6569 47 72 48.3431 72 50ZM69 38C70.6569 38 72 36.6569 72 35C72 33.3431 70.6569 32 69 32H20C18.3431 32 17 33.3431 17 35C17 36.6569 18.3431 38 20 38H69Z"
                    />
                </svg>

                <span>{{ config('app.name', 'Laravel') }}</span>
            </a>
        </div>
        <ul class="flex items-center gap-5 font-medium">
            <li>
                <a
                    class="block px-3 text-blue-700 hover:underline dark:text-blue-500"
                    href="{{ route('home') }}"
                >
                    {{ __('Home') }}
                </a>
            </li>
            @auth
                <li>
                    <a
                        class="block px-3 hover:text-blue-700 hover:underline hover:dark:text-blue-500"
                        href="{{ route('dashboard') }}"
                    >
                        {{ __('Dashboard') }}
                    </a>
                </li>
            @endauth
            <li>
                <a
                    class="block px-3 hover:text-blue-700 hover:underline hover:dark:text-blue-500"
                    href="{{ route('articles.index') }}"
                >
                    {{ __('Articles') }}
                </a>
            </li>
            <li>
                <a
                    class="block px-3 hover:text-blue-700 hover:underline hover:dark:text-blue-500"
                    href="{{ route('categories.index') }}"
                >
                    {{ __('Categories') }}
                </a>
            </li>
            <li>
                <a
                    class="block px-3 hover:text-blue-700 hover:underline hover:dark:text-blue-500"
                    href="{{ route('about') }}"
                >
                    {{ __('About') }}
                </a>
            </li>
            @guest
                <li>
                    <a
                        class="block px-3 hover:text-blue-700 hover:underline hover:dark:text-blue-500"
                        href="{{ route('login') }}"
                    >
                        {{ __('Login') }}
                    </a>
                </li>
                <li>
                    <a
                        class="block px-3 hover:text-blue-700 hover:underline hover:dark:text-blue-500"
                        href="{{ route('register') }}"
                    >
                        {{ __('Register') }}
                    </a>
                </li>
            @else
                <li>
                    <a
                        class="block px-3 hover:text-blue-700 hover:underline hover:dark:text-blue-500"
                        href="{{ route('profile.edit') }}"
                    >
                        {{ __('Profile') }}
                    </a>
                </li>
                <li>
                    <form
                        method="POST"
                        action="{{ route('logout') }}"
                        x-ref="logoutForm"
                    >

                        @csrf

                        <a
                            class="block px-3 hover:text-blue-700 hover:underline hover:dark:text-blue-500"
                            href="{{ route('logout') }}"
                            @click.prevent="$refs.logoutForm.submit()"
                        >
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </li>
            @endguest
            <li>
                <div x-data="themeSwitcher">
                    <button @click="toggleTheme()">
                        <span x-show="theme === 'light'">
                            {{ __('Light') }}
                        </span>
                        <span x-show="theme === 'dark'">
                            {{ __('Dark') }}
                        </span>
                        <span x-show="theme === 'system' || theme === undefined">
                            {{ __('Dark') }}
                        </span>
                    </button>
                </div>

            </li>
        </ul>
    </nav>
</header>

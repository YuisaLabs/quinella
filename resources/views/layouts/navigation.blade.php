<div id="hs-application-sidebar"
    class="hs-overlay  [--auto-close:lg]
            hs-overlay-open:translate-x-0
            -translate-x-full transition-all duration-300 transform
            w-65 h-full
            hidden
            fixed inset-y-0 start-0 z-60
            bg-white border-e border-gray-200
            lg:block lg:translate-x-0 lg:end-auto lg:bottom-0
        "
    role="dialog" tabindex="-1" aria-label="Sidebar">
    <div class="relative flex flex-col h-full max-h-full">
        <div class="px-6 pt-4 flex items-center">
            <!-- Brand -->
            <a class="flex-none font-semibold text-xl text-black focus:outline-hidden focus:opacity-80 dark:text-white"
                href="route('dashboard.index')" aria-label="Brand">Quinella</a>
            <!-- End Brand -->

            <div class="hidden lg:block ms-2">

            </div>
        </div>

        <!-- Content -->
        <div
            class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
            <nav class="hs-accordion-group p-3 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
                <ul class="flex flex-col space-y-0.5">
                    <li>
                        <x-nav-link :href="route('dashboard.index')" :active="request()->routeIs('dashboard.index')">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-dashboard">
                                <rect width="7" height="9" x="3" y="3" rx="1" />
                                <rect width="7" height="5" x="14" y="3" rx="1" />
                                <rect width="7" height="9" x="14" y="12" rx="1" />
                                <rect width="7" height="5" x="3" y="16" rx="1" />
                            </svg>
                            Overview
                        </x-nav-link>
                    </li>

                    <li>
                        <x-nav-link :href="route('dashboard.clients')" :active="request()->routeIs('dashboard.clients')">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-id-card">
                                <path d="M16 10h2" />
                                <path d="M16 14h2" />
                                <path d="M6.17 15a3 3 0 0 1 5.66 0" />
                                <circle cx="9" cy="11" r="2" />
                                <rect x="2" y="5" width="20" height="14" rx="2" />
                            </svg>
                            Clients
                        </x-nav-link>
                    </li>

                    <li>
                        <x-nav-link :href="route('dashboard.users')" :active="request()->routeIs('dashboard.users')">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-round">
                                <circle cx="12" cy="8" r="5" />
                                <path d="M20 21a8 8 0 0 0-16 0" />
                            </svg>
                            Users
                        </x-nav-link>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- End Content -->
    </div>
</div>


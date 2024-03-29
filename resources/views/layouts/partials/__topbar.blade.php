<div class="relative z-10 flex-shrink-0 flex h-16 bg-gray-100 border-b border-gray-200 lg:border-none">
  <button @click="sidebar = !sidebar" type="button" class="px-4 border-r border-gray-200 text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cyan-500 lg:hidden">
    <span class="sr-only">Open sidebar</span>
    <!-- Heroicon name: outline/menu-alt-1 -->
    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
    </svg>
  </button>
  <!-- Search bar -->
  <div class="flex-1 px-4 flex justify-between sm:px-6 lg:max-w-full lg:mx-auto lg:px-8">
    <div class="flex-1 flex"></div>
    <div class="ml-4 flex items-center md:ml-6">
      
      <button type="button" class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
        <span class="sr-only">View notifications</span>

        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
        </svg>
      </button>
      
      <!-- Profile dropdown -->
      <div class="ml-3 relative" x-data="{profile:false}">
        <div>
          <button @click="profile = !profile" type="button" class="max-w-xs bg-white rounded-full flex items-center text-sm focus:outline-none lg:p-2 lg:rounded-md lg:hover:bg-gray-50" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
            <span class="hidden ml-3 text-gray-700 text-sm font-medium lg:block"><span class="sr-only">Open user menu for </span>{{auth()->user()->name}}</span>
            <!-- Heroicon name: solid/chevron-down -->
            <svg class="hidden flex-shrink-0 ml-1 h-5 w-5 text-gray-400 lg:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </button>
        </div>
        <div :class="{'hidden':!profile, 'block':profile}" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
          <div class="block px-4 py-2 text-xs text-gray-400">
              {{ __('Manage Account') }}
          </div>

          <x-dropdown-link href="{{ route('profile.show') }}">
              {{ __('Profile') }}
          </x-dropdown-link>

          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown-link href="{{ route('logout') }}"
                onclick="event.preventDefault(); this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<nav>
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          
        </div>
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex shrink-0 items-center">
            <img class="h-8 w-auto" src="https://elearn.uc.ac.id/pluginfile.php/1/theme_lambda/logo/1727138432/LOGO-UC-PANJANG-FIX-SEP-2021-01.png" alt="Your Company">
          </div>
          <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:text-orange-900" aria-current="page">Home</a>
              <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:text-orange-900">Restaurant</a>
              <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:text-orange-900">Fusions</a>
              <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-white  hover:text-orange-900">Order Status</a>
            </div>
          </div>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          <button type="button" class="relative rounded-full  p-1 text-gray-400 hover:text-orange-900 focus:outline-none focus:ring-2 ">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">chart</span>
            
            <svg class="" width="24" height="24" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2 2.39478H7.45455L11.1091 21.02C11.2338 21.6604 11.5753 22.2356 12.0739 22.645C12.5725 23.0545 13.1964 23.2719 13.8364 23.2594H27.0909C27.7309 23.2719 28.3548 23.0545 28.8533 22.645C29.3519 22.2356 29.6935 21.6604 29.8182 21.02L32 9.34966H8.81818M14.2727 30.2143C14.2727 30.9825 13.6622 31.6053 12.9091 31.6053C12.156 31.6053 11.5455 30.9825 11.5455 30.2143C11.5455 29.4461 12.156 28.8233 12.9091 28.8233C13.6622 28.8233 14.2727 29.4461 14.2727 30.2143ZM29.2727 30.2143C29.2727 30.9825 28.6622 31.6053 27.9091 31.6053C27.156 31.6053 26.5455 30.9825 26.5455 30.2143C26.5455 29.4461 27.156 28.8233 27.9091 28.8233C28.6622 28.8233 29.2727 29.4461 29.2727 30.2143Z" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              
          </button>
  
          <div class="relative ml-3">
            <!-- Tombol -->
            <button 
              type="button" 
              id="user-menu-button" 
              class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
              aria-expanded="false" 
              aria-haspopup="true"
            >
              <span class="sr-only">Open user menu</span>
              <img class="h-8 w-8 rounded-full" 
                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" 
                alt="User profile picture">
            </button>
          
            <!-- Dropdown -->
            <div 
              id="dropdown-menu" 
              class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5"
              role="menu" 
              aria-orientation="vertical" 
              aria-labelledby="user-menu-button" 
              tabindex="-1"
            >
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
            </div>
          </div>
          
          
        </div>
      </div>
    </div>
  
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Home</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Restaurant</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Fusions</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Order Status</a>
      </div>
    </div>
  </nav>
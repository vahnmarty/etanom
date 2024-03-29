<aside class="w-0 min-h-screen overflow-hidden transition-all ease-in-out md:w-80 bg-normal-green">
    <div class="px-8 py-8">
        <a href="">
            <img src="{{ asset('img/logo-white.png') }}" class="w-full h-9">
        </a>
    </div>
    <div>
        <div class="px-8 space-y-1">
            <a href="{{ url('dashboard') }}" class="flex w-full gap-4 px-8 py-4 text-gray-100 rounded-md hover:text-white hover:bg-green-700 {{ request()->is('dashboard*') ? 'bg-green-700 hover:bg-green-800' : '' }}">
                <x-heroicon-s-squares-2x2 class="flex-shrink-0 w-5 h-5" />
                <strong>Home</strong>
            </a>
            <a href="{{ url('shop/seedballs') }}" class="flex w-full gap-4 px-8 py-4 text-gray-100 rounded-md hover:text-white hover:bg-green-700 {{ request()->is('shop*') ? 'bg-green-700 hover:bg-green-800' : '' }}">
                <x-heroicon-o-shopping-cart class="flex-shrink-0 w-5 h-5" />
                <strong>Purchase</strong>
            </a>
            <a href="{{ url('orders') }}" class="flex w-full gap-4 px-8 py-4 text-gray-100 rounded-md hover:text-white hover:bg-green-700 {{ request()->is('orders*') ? 'bg-green-700 hover:bg-green-800' : '' }}">
                <x-heroicon-o-chart-bar-square class="flex-shrink-0 w-5 h-5" />
                <strong>Orders</strong>
            </a>
            <a href="{{ url('inventory') }}" class="flex w-full gap-4 px-8 py-4 text-gray-100 rounded-md hover:text-white hover:bg-green-700 {{ request()->is('inventory*') ? 'bg-green-700 hover:bg-green-800' : '' }}">
                <x-heroicon-o-cube class="flex-shrink-0 w-5 h-5" />
                <strong>Inventory</strong>
            </a>
            <a href="{{ url('gifts') }}" class="flex w-full gap-4 px-8 py-4 text-gray-100 rounded-md hover:text-white hover:bg-green-700 {{ request()->is('gifts*') ? 'bg-green-700 hover:bg-green-800' : '' }}">
                <x-heroicon-o-gift class="flex-shrink-0 w-5 h-5" />
                <strong>Gifts</strong>
            </a>
            <a href="{{ url('certificates') }}" class="flex w-full gap-4 px-8 py-4 text-gray-100 rounded-md hover:text-white hover:bg-green-700 {{ request()->is('certificates*') ? 'bg-green-700 hover:bg-green-800' : '' }}">
                <x-heroicon-o-academic-cap class="flex-shrink-0 w-5 h-5" />
                <strong>Certificates</strong>
            </a>
        </div>
        <div class="px-8 py-6">
            <p class="text-sm text-gray-100">OTHERS</p>
        </div>
        <div class="px-8 ">
            <a href="{{ url('dashboard') }}" class="flex w-full gap-4 px-8 py-2 text-gray-100 rounded-md hover:text-white hover:bg-green-700">
                <x-heroicon-o-newspaper class="flex-shrink-0 w-5 h-5" />
                <span>News</span>
            </a>
            <a href="{{ url('dashboard') }}" class="flex w-full gap-4 px-8 py-2 text-gray-100 rounded-md hover:text-white hover:bg-green-700">
                <x-heroicon-o-clipboard-document class="flex-shrink-0 w-5 h-5" />
                <span>Bulletin Board</span>
            </a>
            <a href="{{ url('dashboard') }}" class="flex w-full gap-4 px-8 py-2 text-gray-100 rounded-md hover:text-white hover:bg-green-700">
                <x-heroicon-o-users class="flex-shrink-0 w-5 h-5" />
                <span>Crowdfunding</span>
            </a>
            <a href="{{ url('dashboard') }}" class="flex w-full gap-4 px-8 py-2 text-gray-100 rounded-md hover:text-white hover:bg-green-700">
                <x-heroicon-o-cube-transparent class="flex-shrink-0 w-5 h-5" />
                <span>Galansiyang</span>
            </a>
        </div>
            
    </div>
</aside>
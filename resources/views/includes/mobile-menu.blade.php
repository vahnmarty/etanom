<div x-data="{ open: true }" 
        x-on:scrollzzz.window="open = window.scrollY > 10"
        x-show="open"
        x-cloak
        x-transition class="fixed bottom-0 left-0 right-0 px-4 py-2 bg-white border-t shadow-inner lg:hidden">
        <div class="flex items-center gap-3 justify-evenly">
            <div class="flex flex-col items-center justify-center">
                <div class="h-6">
                    <x-heroicon-o-home class="w-5 h-5 text-gray-600" />
                </div>
                <span class="mt-0.5 text-xs">Home</span>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="h-6">
                    <x-heroicon-o-user class="w-5 h-5 text-gray-600" />
                </div>
                <span class="mt-0.5 text-xs">Account</span>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div
                    class="flex items-center justify-center w-16 h-16 p-4 -mt-8 bg-white border rounded-full shadow-md">
                    <x-heroicon-s-bolt class="w-10 h-10 text-green-700" />
                </div>
                <span class="mt-0.5 text-xs">Plant</span>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="h-6">
                    <x-heroicon-o-chat-bubble-bottom-center-text class="w-5 h-5 text-gray-600" />
                </div>
                <span class="mt-0.5 text-xs">Inbox</span>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="h-6">
                    <x-heroicon-o-bars-3 class="w-5 h-5 text-gray-600" />
                </div>
                <span class="mt-0.5 text-xs">Menu</span>
            </div>
        </div>
    </div>
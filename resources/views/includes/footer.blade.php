<footer class="text-white bg-gray-900">
    <div class="max-w-5xl px-4 py-16 mx-auto sm:px-6"> 
        <div class="grid gap-8 py-6 lg:gap-0 lg:grid-cols-2">
            <div class="pr-8">
                <a href="#">
                    <img src="{{ url('img/logo.svg') }}" class="w-auto h-10" alt="">
                </a>
                <p class="mt-6">We plant and nurture forests for you</p>
            </div>
            <div class="grid grid-cols-3 gap-1 lg:gap-6">
                <div>
                    <h6 class="font-bold text-light-green">Explore</h6>

                    <div class="mt-4 space-y-2">
                        <a href="" class="block text-xs lg:text-base">About Us</a>
                        <a href="" class="block text-xs lg:text-base">FAQ</a>
                        <a href="" class="block text-xs lg:text-base">Contact Us</a>
                    </div>
                </div>

                <div class="col-span-2 pr-3">
                    <h6 class="font-bold text-light-green">Newsletter</h6>

                    <form class="mt-4 space-y-2">
                        <div class="relative">
                            <input type="email" class="w-full h-10 text-sm text-left placeholder-white bg-transparent border border-white rounded-md" placeholder="Enter your email">
                            <button type="submit" class="absolute top-[0.05rem] bottom-[0.05rem] px-3 right-[0.02rem] bg-light-green rounded-r-md">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-900">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                  </svg>
                                  
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="pt-8 mt-8 border-t">
            <div class="flex justify-between">
                <div>
                    <p class="text-sm text-gray-400">&copy; {{ date('Y') }} Sikai Inc. All Rights reserved.</p>
                </div>
                <div>
                    <a href="https://www.facebook.com/eTanomPH" target="_blank" class="flex items-center gap-2 text-xs lg:text-base">
                        <svg class="w-5 h-5 hover:opacity-80" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor" focusable="false" aria-hidden="true">
                            <path d="M23.9981 11.9991C23.9981 5.37216 18.626 0 11.9991 0C5.37216 0 0 5.37216 0 11.9991C0 17.9882 4.38789 22.9522 10.1242 23.8524V15.4676H7.07758V11.9991H10.1242V9.35553C10.1242 6.34826 11.9156 4.68714 14.6564 4.68714C15.9692 4.68714 17.3424 4.92149 17.3424 4.92149V7.87439H15.8294C14.3388 7.87439 13.8739 8.79933 13.8739 9.74824V11.9991H17.2018L16.6698 15.4676H13.8739V23.8524C19.6103 22.9522 23.9981 17.9882 23.9981 11.9991Z"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
        </div>
        
    </div>
</footer>
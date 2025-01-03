<nav class="bg-white border-b border-gray-200 px-4 lg:px-6 py-2.5">
    <style>
        .marqueediv{
            background:#3788c0;
            padding-top:10px;
            border-radius:5px;
        }
    </style>
    <div class="marqueediv" >
         <marquee style="color:#fff ;">মেধাবৃত্তি পরীক্ষা তারিখ : ২৮ ডিসেম্বর ২০২৪ খ্রি.  সময় : বেলা ১১.০০ মিনিট মুন্সিগঞ্জ সদর, টংগিবাড়ী ও লৌহজং উপজেলার অধীন বিদ্যালয়গুলোর পরীক্ষা কেন্দ্র : সোনারং সরকারি পাইলট মডেল উচ্চ বিদ্যালয়। 
                                        সিরাজদিখান ও শ্রীনগর উপজেলার অধীন বিদ্যালয়গুলোর পরীক্ষা কেন্দ্র : রাজদিয়া অভয় পাইলট উচ্চ বিদ্যালয়।</marquee >
    </div>
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
        <!-- Logo Section -->
        <div>
            <a href="{{ url('/') }}" class="flex items-center"> 
                <img src="{{ asset('assets/img/bg.png') }}" class="mr-3 h-8 sm:h-16" alt="Logo" />
            </a>
        </div>

        <div>
         
            <!-- Dropdown Menu -->
            <div class="relative">
                <button id="dropdownButton" data-dropdown-toggle="dropdownMenu"
                    class="flex items-center justify-between py-2 px-4 font-medium text-gray-900 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 rounded-md">
                    Syllabus
                    <svg class="w-3 h-3 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1l4 4 4-4" />
                    </svg>
                </button>
                <div id="dropdownMenu"
                    class="absolute hidden z-10 bg-white border border-gray-200 rounded-lg shadow-lg text-sm w-auto whitespace-nowrap">
                    <ul class="py-2">
                        @foreach ($syllabus as $syl)
                            <li>
                                <a href="{{ asset('uploads/files/syllabus/' . $syl->file) }}"
                                    class="block px-10 py-2 text-gray-700 hover:bg-gray-100">
                                    {{ $syl->sclass }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <!-- Navbar Items Section -->
        <div class="flex items-center space-x-4">

            <!-- Authentication Links -->
            <div class="hidden lg:flex space-x-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="text-gray-800 hover:bg-gray-100 font-medium rounded-lg text-sm px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Dashboard
                        </a>
                    @else
                        {{-- <a href="{{ route('login') }}"
                            class="text-gray-800 hover:bg-gray-100 font-medium rounded-lg text-sm px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Log in
                        </a> --}}
                    @endauth
                @endif
            </div>

            <!-- Mobile Menu Toggle -->
            <button data-collapse-toggle="mobileMenu" type="button"
                class="inline-flex items-center p-2 text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="hidden w-full lg:hidden" id="mobileMenu">
            <ul class="flex flex-col mt-4 space-y-2 font-medium">
                <li><a href="{{ url('/') }}"
                        class="block py-2 px-4 text-gray-700 hover:bg-gray-100">Registration</a></li>
            </ul>
        </div>
    </div>
</nav>

<script>
    // Toggle Dropdown Menu
    document.addEventListener('DOMContentLoaded', () => {
        const dropdownButton = document.getElementById('dropdownButton');
        const dropdownMenu = document.getElementById('dropdownMenu');

        dropdownButton.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', (event) => {
            if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });

        // Toggle Mobile Menu
        const mobileMenuButton = document.querySelector('[data-collapse-toggle="mobileMenu"]');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>

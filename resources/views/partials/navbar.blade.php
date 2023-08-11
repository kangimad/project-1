<div class="flex flex-row justify-between bg-emerald-600 fixed px-16 py-2 text-gray-300 w-full">
    <div class="logo font-bold">
        <p class="text-white hover:text-emerald-200">
            PROJECT-1
        </p>
    </div>
    <div class="menu"></div>
        <ul class="flex flex-row">
            <li>
                <a href="/puskesmas" class="px-2 font-semibold . {{ $active == 'puskesmas' ? 'text-white font-bold' : ''}}">
                    Puskesmas
                </a>
            </li>
            <li>
                <a href="/rumah-sakit" class="px-2 font-semibold  . {{ $active == 'rumah-sakit' ? 'text-white font-bold' : ''}}">
                    Rumah Sakit
                </a>
            </li>
            <li>
                <a href="/about-me" class="px-2 font-semibold  . {{ $active == 'about-me' ? 'text-white font-bold' : ''}}">
                    About Me
                </a>
            </li>
        </ul>
    </div>
</div>

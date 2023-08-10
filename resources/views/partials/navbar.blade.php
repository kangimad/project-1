<div class="flex flex-row justify-between bg-emerald-700 fixed px-16 py-2 text-slate-400 w-full">
    <div class="logo font-bold">
        <p class="text-white hover:text-emerald-200">LOGO</p>
    </div>
    <div class="menu"></div>
        <ul class="flex flex-row">
            <li><a href="/puskesmas" class="px-2 font-semibold . {{ $active == 'puskesmas' ? 'text-white' : ''}}">Puskesmas</a></li>
            <li><a href="/" class="px-2 font-semibold  . {{ $active == 'rumah-sakit' ? 'text-white' : ''}}">Rumah Sakit</a></li>
            <li><a href="/" class="px-2 font-semibold  . {{ $active == 'about-me' ? 'text-white' : ''}}">About Me</a></li>
        </ul>
    </div>
</div>

@extends('template')
@section('content')
    {{-- @dd($puskesmas) --}}
    <div class="px-16 pt-14 pb-5">

        <form method="get" action="/puskesmas">
            <div class="flex flex-row justify-center">
                <div class="group w-6/12 md:w-6/12 lg:w-6/12">
                    <div class="relative flex items-center">
                        <input id="8" type="text" class="peer relative h-10 w-full rounded-md bg-gray-50 pl-4 pr-20 font-thin outline-none drop-shadow-sm transition-all duration-200 ease-in-out focus:bg-white focus:drop-shadow-lg" />
                        <button class="absolute right-0 h-10 w-16 rounded-r-md bg-emerald-200 text-xs font-semibold text-white transition-all duration-200 ease-in-out group-focus-within:bg-emerald-400 group-focus-within:hover:bg-emerald-600">Send</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="flex flex-row px-16 pb-5">
        <table class="border mx-auto w-10/12">
            <thead>
                <tr class="bg-slate-300">
                    <th class="border border-slate-600">#</th>
                    <th class="border border-slate-600 text-center">Kabupaten / Kota</th>
                    <th class="border border-slate-600">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($puskesmas as $pus)
                    <tr>
                        <td class="border border-slate-700 text-center">{{ $i++ }}</td>
                        <td class="border border-slate-700 px-3">{{ $pus->kabupaten_kota }}</td>
                        <td class="border border-slate-700 text-center">{{ $pus->jumlah }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <hr>
    <div class="flex justify-center mb-2">
        {{ $puskesmas->links() }}
    </div>
@endsection

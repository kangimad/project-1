@extends('template')
@section('content')
    {{-- @dd($puskesmas) --}}
    <div class="px-16 pt-14 pb-5">
        <form method="get" action="/puskesmas">
            <div class="flex flex-row justify-center">
                <input type="text" id="search"
                    class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-700 focus:border-emerald-700 block w-96"
                    placeholder="   Masukkan pencarian" required>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                    Search
                </button>
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
                    $i=1
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
    <div class="flex justify-center">
        {{ $puskesmas->links() }}
    </div>
@endsection

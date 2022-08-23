<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <section id="header">
        @include('partials.headeradmin')
    </section>

    <section id="home">
        <div class="container border-b-4 border-black mx-auto my-6">
            <h2 class="text-center uppercase font-serif text-4xl text-black font-bold">Data Training</h2>
        </div>

    </section>
    <section id="table">
        <div class="mx-10">
            <div class="flex mx-auto mt-5 w-full">
                <div class="w-full rounded-3xl overflow-hidden shadow-lg">
                    <div class="text-white" style="background-color: rgba(64, 94, 79, 1)">
                        <h1 class="py-2 px-4">Data Training Verbal</h1>
                    </div>
                    <div class="w-full overflow-auto">
                        <div class="mx-6 py-2">
                            <div class="my-3">
                                <form action="{{ route('saveDataTraining', 1) }}" method="POST" class="flex flex-row  items-center" enctype="multipart/form-data">
                                    @csrf
                                    <label class="block bg-gray-200 overflow-hidden rounded-full mr-3">
                                        <span class="sr-only">Choose File</span>
                                        <input type="file" name="data"
                                            class="block w-full text-sm  text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-green-200 file:text-gray-700 hover:file:bg-green-100" />
                                    </label>

                                    <button type="submit" value="Upload" class="py-1 my-3 rounded-3xl px-4 font-serif text-black hover:text-white shadow-lg" style="background-color: rgba(213, 221, 209, 1)">
                                        Simpan
                                    </button>
                                </form>
                            </div>
                            <table class="divide-y divide-gray-300 w-full" id="dataTable">
                                <thead style="background-color: rgba(64, 94, 79, 1)">
                                    <tr>
                                        <th class="px-6 py-2 text-xs text-white">
                                            No
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Bakat
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Soal 1
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Soal 2
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Soal 3
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Soal 4
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Soal 5
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Soal 6
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Soal 7
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Soal 8
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Soal 9
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Soal 10
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Hasil
                                        </th>
                                    </tr>
                                </thead>
                                @foreach ($dataVerbal as $i => $dat)
                                    <tbody class="bg-white divide-y divide-gray-300">
                                        <tr class="text-center whitespace-nowrap">
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                <div class="text-xs text-gray-900">
                                                    {{$i++ +1}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-xs text-gray-900">
                                                    {{$dat->bakat->nama}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-xs text-gray-900">
                                                    {{$dat->soal1}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-xs text-gray-900">
                                                    {{$dat->soal2}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-xs text-gray-900">
                                                    {{$dat->soal3}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-xs text-gray-900">
                                                    {{$dat->soal4}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-xs text-gray-900">
                                                    {{$dat->soal5}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-xs text-gray-900">
                                                    {{$dat->soal6}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-xs text-gray-900">
                                                    {{$dat->soal7}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-xs text-gray-900">
                                                    {{$dat->soal8}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-xs text-gray-900">
                                                    {{$dat->soal9}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-xs text-gray-900">
                                                    {{$dat->soal10}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-xs text-gray-900">
                                                    {{$dat->hasil}}
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex mx-auto mt-5 w-full">
                <div class="w-full rounded-3xl overflow-hidden shadow-lg">
                    <div class="text-white" style="background-color: rgba(64, 94, 79, 1)">
                        <h1 class="py-2 px-4">Data Soal Verbal</h1>
                    </div>
                    <div class="w-full overflow-auto">
                        <div class="mx-6 py-2">
                            <div class="my-3">
                                <a href="" class="py-1 my-3 rounded-3xl px-4 font-serif text-black hover:text-white shadow-lg" style="background-color: rgba(213, 221, 209, 1)">
                                    + Tambah Data
                                </a>
                            </div>
                            <table class="divide-y divide-gray-300 w-full" id="dataTable">
                                <thead style="background-color: rgba(64, 94, 79, 1)">
                                    <tr>
                                        <th class="px-6 py-2 text-xs text-white">
                                            No
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Soal
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Jawaban A
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Jawaban B
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Jawaban C
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Jawaban D
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-300">
                                    <tr class="text-center whitespace-nowrap">
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            <div class="text-xs text-gray-900">
                                                1
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                ijksad
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                sjakdas
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                sjkadsa
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                sjkadsa
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                sjkadsa
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex mx-auto mt-5 w-full">
                <div class="w-full rounded-3xl overflow-hidden shadow-lg">
                    <div class="text-white" style="background-color: rgba(64, 94, 79, 1)">
                        <h1 class="py-2 px-4">Data Soal Verbal</h1>
                    </div>
                    <div class="w-full overflow-auto">
                        <div class="mx-6 py-2">
                            <div class="my-3">
                                <a href="" class="py-1 my-3 rounded-3xl px-4 font-serif text-black hover:text-white shadow-lg" style="background-color: rgba(213, 221, 209, 1)">
                                    + Tambah Data
                                </a>
                            </div>
                            <table class="divide-y divide-gray-300 w-full" id="dataTable">
                                <thead style="background-color: rgba(64, 94, 79, 1)">
                                    <tr>
                                        <th class="px-6 py-2 text-xs text-white">
                                            No
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Soal
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Jawaban A
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Jawaban B
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Jawaban C
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Jawaban D
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-300">
                                    <tr class="text-center whitespace-nowrap">
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            <div class="text-xs text-gray-900">
                                                1
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                ijksad
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                sjakdas
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                sjkadsa
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                sjkadsa
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                sjkadsa
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex mx-auto mt-5 w-full">
                <div class="w-full rounded-3xl overflow-hidden shadow-lg">
                    <div class="text-white" style="background-color: rgba(64, 94, 79, 1)">
                        <h1 class="py-2 px-4">Data Soal Verbal</h1>
                    </div>
                    <div class="w-full overflow-auto">
                        <div class="mx-6 py-2">
                            <div class="my-3">
                                <a href="" class="py-1 my-3 rounded-3xl px-4 font-serif text-black hover:text-white shadow-lg" style="background-color: rgba(213, 221, 209, 1)">
                                    + Tambah Data
                                </a>
                            </div>
                            <table class="divide-y divide-gray-300 w-full" id="dataTable">
                                <thead style="background-color: rgba(64, 94, 79, 1)">
                                    <tr>
                                        <th class="px-6 py-2 text-xs text-white">
                                            No
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Soal
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Jawaban A
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Jawaban B
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Jawaban C
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Jawaban D
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-300">
                                    <tr class="text-center whitespace-nowrap">
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            <div class="text-xs text-gray-900">
                                                1
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                ijksad
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                sjakdas
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                sjkadsa
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                sjkadsa
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                sjkadsa
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex mx-auto mt-5 w-full">
                <div class="w-full rounded-3xl overflow-hidden shadow-lg">
                    <div class="text-white" style="background-color: rgba(64, 94, 79, 1)">
                        <h1 class="py-2 px-4">Data Soal Verbal</h1>
                    </div>
                    <div class="w-full overflow-auto">
                        <div class="mx-6 py-2">
                            <div class="my-3">
                                <a href="" class="py-1 my-3 rounded-3xl px-4 font-serif text-black hover:text-white shadow-lg" style="background-color: rgba(213, 221, 209, 1)">
                                    + Tambah Data
                                </a>
                            </div>
                            <table class="divide-y divide-gray-300 w-full" id="dataTable">
                                <thead style="background-color: rgba(64, 94, 79, 1)">
                                    <tr>
                                        <th class="px-6 py-2 text-xs text-white">
                                            No
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Soal
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Jawaban A
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Jawaban B
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Jawaban C
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Jawaban D
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-300">
                                    <tr class="text-center whitespace-nowrap">
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            <div class="text-xs text-gray-900">
                                                1
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                ijksad
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                sjakdas
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                sjkadsa
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                sjkadsa
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                sjkadsa
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex mx-auto mt-5 w-full">
                <div class="w-full rounded-3xl overflow-hidden shadow-lg">
                    <div class="text-white" style="background-color: rgba(64, 94, 79, 1)">
                        <h1 class="py-2 px-4">Data Soal Verbal</h1>
                    </div>
                    <div class="w-full overflow-auto">
                        <div class="mx-6 py-2">
                            <div class="my-3">
                                <a href="" class="py-1 my-3 rounded-3xl px-4 font-serif text-black hover:text-white shadow-lg" style="background-color: rgba(213, 221, 209, 1)">
                                    + Tambah Data
                                </a>
                            </div>
                            <table class="divide-y divide-gray-300 w-full" id="dataTable">
                                <thead style="background-color: rgba(64, 94, 79, 1)">
                                    <tr>
                                        <th class="px-6 py-2 text-xs text-white">
                                            No
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Soal
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Jawaban A
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Jawaban B
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Jawaban C
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Jawaban D
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-300">
                                    <tr class="text-center whitespace-nowrap">
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            <div class="text-xs text-gray-900">
                                                1
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                ijksad
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                sjakdas
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                sjkadsa
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                sjkadsa
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                sjkadsa
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

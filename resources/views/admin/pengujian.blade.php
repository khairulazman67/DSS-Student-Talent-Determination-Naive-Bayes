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
        <div class="container border-b-2 border-purple-800 mx-auto my-6">
            <h2 class="text-center uppercase font-serif text-4xl text-purple-800 font-bold">Data Training</h2>
        </div>
        <div class="container mx-auto">
            <a href="" class="bg-purple-300 py-2 rounded-lg px-2 font-serif text-gray-600 font-bold hover:text-white shadow-lg">
                + Add Data
            </a>
        </div>
    </section>
    <section id="table">
        <div class="container flex mx-auto mt-5 w-full">
            <div class="w-full rounded overflow-hidden shadow-lg">
                <div class="bg-purple-600 text-white">
                    <h1 class="py-2 px-4">Data mahasiswa</h1>
                </div>
                <div class="w-full">
                    <div class="mx-6 py-2">
                        <table class="divide-y divide-gray-300 w-full" id="dataTable">
                            <thead class="bg-purple-600">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-white">
                                        ID
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Jenis kelamin
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Pekerjaan
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Status
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        IPK
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Lulus
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($data as $i => $dt)
                                <tbody class="bg-white divide-y divide-gray-300">
                                    <tr class="text-center whitespace-nowrap">
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ ++$i }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900">
                                                {{ $dt->jenis_kelamin }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ $dt->pekerjaan }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ $dt->status }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-500">
                                                {{ $dt->ipk }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-500">
                                                {{ $dt->lulus }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="#"
                                                class="inline-block text-white py-1 px-2 rounded-lg text-center border bg-purple-400">
                                                Detail
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <section id="header">
        @include('partials.headeruser')
    </section>

    <section id="home">
        <div class="container border-b-2 border-purple-800 mx-auto my-8">
            <h2 class="text-center uppercase font-serif text-4xl font-bold text-purple-800">Form Pengujian</h2>
        </div>
        <div class="container my-8 mx-auto">
            <div class="border shadow-purple-200 rounded-lg shadow-lg">
                <div class="px-4 py-2 flex flex-col">
                    <h2 class="font-serif">
                        Soal :
                    </h2>
                    <h2 class="font-serif">
                        Soal Nomor satu
                    </h2>
                </div>
                <div class="mx-8 space-y-4 py-4">
                    <div class="form-check space-x-2">
                        <input type="checkbox" id="checkbox">
                        <label for="checkbox">Soal1</label>
                    </div>
                    <div class="form-check space-x-2">
                        <input type="checkbox" id="checkbox">
                        <label for="checkbox">Soal1</label>
                    </div>
                    <div class="form-check space-x-2">
                        <input type="checkbox" id="checkbox">
                        <label for="checkbox">Soal1</label>
                    </div>
                    <div class="form-check space-x-2">
                        <input type="checkbox" id="checkbox">
                        <label for="checkbox">Soal1</label>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>

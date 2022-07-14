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
        <div class="container border-b-2 border-black mx-auto my-8">
            <h2 class="text-center uppercase font-serif text-lg">Data Mahasiswa</h2>
        </div>
        <div class="container my-8 mx-auto">
            <div class="border rounded-lg shadow-xl mx-10">
                <div class="border-b-2 border-black mx-2 my-4">
                    <h2 class="font-serif font-bold text-2xl">Data Diri</h2>
                </div>
                <form action="{{ route('edit',$data->id) }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-6 gap-4">
                        <h2>Nim</h2>
                        <h2>:</h2>
                        <input type="text" name="nim" id="nim">{{ $data->nim }}
                    </div>
                    <button type="submit">
                        Save
                    </button>
                </form>
            </div>
        </div>
    </section>

</body>

</html>

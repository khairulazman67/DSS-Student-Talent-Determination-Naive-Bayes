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
    <section id="table">
        <div class="container flex mx-auto mt-5 w-full">
            <div class="w-full rounded-3xl overflow-hidden shadow-lg my-8">
                <form action="{{ route('post') }}" method="POST">
                    @csrf
                    <div class="flex flex-col mx-36 space-y-4">
                        <div class="grid grid-cols-5 gap-3 mx-4">
                            <label for="nim" class="col-start-1 col-end-2">Nim</label>
                            <input type="text" name="" id="nim" class="col-start-2 col-end-5 rounded-lg shadow-lg w-full">
                        </div>
                        <div class="grid grid-cols-5 gap-3 mx-4">
                            <label for="nama" class="col-start-1 col-end-2">Nama</label>
                            <input type="text" name="" id="nama" class="col-start-2 col-end-5 rounded-lg shadow-lg w-full">
                        </div>
                        <div class="grid grid-cols-5 gap-3 mx-4">
                            <label for="email" class="col-start-1 col-end-2">Email</label>
                            <input type="text" name="" id="email" class="col-start-2 col-end-5 rounded-lg shadow-lg w-full">
                        </div>
                        <div class="grid grid-cols-5 gap-3 mx-4">
                            <label for="nohp" class="col-start-1 col-end-2">No Handphone</label>
                            <input type="text" name="" id="nohp" class="col-start-2 col-end-5 rounded-lg shadow-lg w-full">
                        </div>
                        <div class="grid grid-cols-5 gap-3 mx-4">
                            <label for="alamat" class="col-start-1 col-end-2">Alamat</label>
                            <input type="text" name="" id="alamat" class="col-start-2 col-end-5 rounded-lg shadow-lg w-full">
                        </div>
                        <div class="grid grid-cols-5 gap-3 mx-4">
                            <label for="jurusan" class="col-start-1 col-end-2">Jurusan</label>
                            <input type="text" name="" id="jurusan" class="col-start-2 col-end-5 rounded-lg shadow-lg w-full">
                        </div>
                        <div class="grid grid-cols-5 gap-3 mx-4">
                            <label for="prodi" class="col-start-1 col-end-2">Prodi</label>
                            <input type="text" name="" id="prodi" class="col-start-2 col-end-5 rounded-lg shadow-lg w-full">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>

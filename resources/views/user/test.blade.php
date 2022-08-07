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
        <div class="container border-b-2 mx-auto my-8 border-black">
            <h2 class="text-center uppercase font-serif text-4xl font-bold text-black">Form Pengujian</h2>
        </div>
        <div class="container my-8 mx-auto">
            <div class="border shadow-purple-200 rounded-lg shadow-lg">
                <div class="px-4 py-2">
                    <h2 class="font-serif">
                        Soal :
                    </h2>
                </div>
                <form action="" method="POST">
                    @csrf
                    @foreach ($soal as $s)
                        <div class="px-4 py-2">
                            <h2 class="font-serif">
                                {{ $s->soal }}
                            </h2>
                        </div>
                        <div class="mx-8 space-y-4 py-4">
                            <div class="form-check space-x-2">A
                                <input type="radio" name="{{ $s->id }}" id="{{ $s->id }}" value="a"> {{ $s->a }}
                            </div>
                            <div class="form-check space-x-2">B
                                <input type="radio" name="{{ $s->id }}" id="{{ $s->id }}" value="b"> {{ $s->b }}
                            </div>
                            <div class="form-check space-x-2">C
                                <input type="radio" name="{{ $s->id }}" id="{{ $s->id }}" value="c"> {{ $s->c }}
                            </div>
                            <div class="form-check space-x-2">D
                                <input type="radio" name="{{ $s->id }}" id="{{ $s->id }}" value="D"> {{ $s->d }}
                            </div>
                        </div>
                    @endforeach
                </form>
            </div>
        </div>
    </section>

</body>

</html>

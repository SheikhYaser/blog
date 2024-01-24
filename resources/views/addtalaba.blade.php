<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width,
    initial-scale=1.0"> <title>Document</title> <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> </head>
    <body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('talaba') }}">Talabalar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('addtalaba') }}">Talaba
                        Qo`shish</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <h1 class="text-center mt-2">Talabalar Qo`shish</h1>
    <form method="post" action="{{ route('talabastore') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <input type="text" name="fio" placeholder="FIO" class="form-control @error('fio') in-valid @enderror" value="{{ old('fio') }}">
            @error('fio')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="text" name="tel" placeholder="TEL" class="form-control  @error('tel') in-valid @enderror" value="{{ old('tel') }}">
            @error('tel')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="email" name="email" placeholder="EMAIL" class="form-control  @error('email') in-valid @enderror" value="{{ old('email') }}">
            @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="number" name="yosh" placeholder="Yosh" class="form-control  @error('yosh') in-valid @enderror" value="{{ old('yosh') }}">
            @error('yosh')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="file" name="image" class="form-control  @error('image') in-valid @enderror" value="{{ old('image') }}">
            @error('image')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <select class="form-select" name="manzil" aria-label="Default select example  @error('manzil') in-valid @enderror" value="{{ old('manzil') }}">
            @error('manzil')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <option>Andijon</option>
            <option>Namangan</option>
            <option>Farg`ona</option>
            <option>Samarqand</option>
            <option>Toshkent</option>
            <option>Buxoro</option>
        </select>
        <button type="submit" name="ok" class="btn btn-primary mt-5">Save All</button>
    </form>
</div>
</body>

</html>
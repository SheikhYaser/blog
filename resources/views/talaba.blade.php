<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid"> <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"> <a class="nav-link active" aria-current="page"
                            href="{{ route('talaba') }}">Talabalar</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link active" aria-current="page"
                            href="{{ route('addtalaba') }}">
                            Talaba Qo`shish</a>
                    </li>

                </ul>
            </div>
        </div>

    </nav>
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Talaba Qo`shish
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Malumot Kriting !</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form method="POST" action="{{ route('add') }}">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <input type="text" name="fio" placeholder="FIO"
                                            class="form-control  @error('fio') in-valid @enderror"
                                            value="{{ old('fio') }}">
                                        @error('fio')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="tel" placeholder="TEL"
                                            class="form-control  @error('tel') in-valid @enderror"
                                            value="{{ old('tel') }}">
                                        @error('tel')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" name="email" placeholder="EMAIL"
                                            class="form-control  @error('email') in-valid @enderror"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <input type="number" name="yosh" placeholder="YOSH"
                                            class="form-control  @error('yosh') in-valid @enderror"
                                            value="{{ old('yosh') }}">
                                        @error('yosh')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <select class="form-select"
                                        aria-label="Default select example  @error('manzil') in-valid @enderror"
                                        value="{{ old('manzil') }}">
                                        @error('manzil')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <option>Andijon</option>
                                        <option>Namangan</option>
                                        <option>Farg`ona</option>
                                        <option>Toshkent</option>
                                        <option>Samarqand</option>
                                    </select>
                                    <div class="mb-3">
                                        <input type="submit" class="btn btn-info mt-3" name="ok" value="Add" class="form-control">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h1 class="text-center">Talabalar Ro`yhati</h1>
            @if (Session::has('alert'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>
                        <h4 class="text-center">🚫 You successfully deleted the student ! 🚫</h4>
                    </strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        </div>
        @endif
        <form class="row mt-5" method="get" action="{{ route('search') }}">
            @csrf
            <div class="col-11">
                <input type="text" class="form-control" name="search" placeholder="Search">
            </div>
            <div class="col-1">
                <button type="submit" name="ok" class="btn btn-primary mb-3">Search</button>
            </div>
        </form>


        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">FIO</th>
                    <th scope="col">TEL</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">FUNCTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($models as $model)
                    <tr>
                        <th scope="row">{{ $model->id }}</th>
                        <td>{{ $model->fio }}</td>
                        <td>{{ $model->tel }}</td>
                        <td>{{ $model->email }}</td>
                        <td>
                            <form action="{{ route('delete', $model->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('show', $model->id) }}" class="btn btn-primary">View 👁‍🗨</a>
                                <a href="{{ route('edit', $model->id) }}" class="btn btn-warning">Update 🔄</a>
                                <button type="submit" class="btn btn-danger">Delete 🚫</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

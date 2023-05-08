<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Child Education</title>
</head>

<body>
    <div class="container">
        <div class="login">
            <form method="POST" action="{{ route('login') }}">
                <h1>Masuk</h1>
                <hr>
                    <p>Class Child Education</p>
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Kata Sandi</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Masuk
                                </button><br>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Lupa Kata Sandi?
                                    </a>
                                @endif
                            </div>
                        </div>
            </form>
        </div>
        <div class="right">
            <img src="{{url('admin/assets/img/Judul.png')}}" alt="login"/>
        </div>
    </div>
    <style>
     * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #36d3f0;
        }

        .container {
            width: 100%;
            display: flex;
            max-width: 850px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .login {
            width: 400px;
        }

        form {
            width: 250px;
            margin: 60px auto;
        }

        h1 {
            margin: 20px;
            text-align: center;
            font-weight: bolder;
            text-transform: uppercase;
        }

        hr {
            border-top: 2px solid #ffa12c;
        }

        p {
            text-align: center;
            margin: 10px;
        }

        .right img {
            margin: auto;
            width: 500px; 
            padding: 100px;
        }

        form label {
            display: block;
            font-size: 16px;
            font-weight: 600;
            padding: 5px;
        }

        input {
            width: 100%;
            margin: 2px;
            border: none;
            outline: none;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid gray;
        }

        button {
            border: none;
            outline: none;
            padding: 8px;
            width: 252px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            border-radius: 5px;
            background: #ffa12c;
        }

        button:hover {
            background: rgba(214, 86, 64, 1);
        }


        @media (max-width: 880px) {
            .container {
                width: 100%;
                max-width: 750px;
                margin-left: 20px;
                margin-right: 20px;
            }

            form {
                width: 300px;
                margin: 20px auto;
            }

            .login {
                width: 400px;
                padding: 20px;
            }

            button {
                width: 100%;
            }

            .right img {
                width: 100%;
                height: 100%;
            }
        }

    </style>
</body>

</html>
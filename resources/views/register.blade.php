<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Notive | Register</title>
</head>

<body class="w-screen h-screen">
    <form action="/register" method="POST" class="w-full h-full px-96 flex flex-col gap-4 justify-center content-center">
        @csrf

        <label for="nama" class="control-label">Nama</label>
        <input type="text" name="name" id="name"
            class="px-3 py-1 bg-white text-gray-700 border border-solid border-gray-300 rounded focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
        <label for="nama" class="control-label">Email</label>
        <input type="email" name="email" id="email"
            class="px-3 py-1 bg-white text-gray-700 border border-solid border-gray-300 rounded focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
        <label for="nama" class="control-label">Password</label>
        <input type="password" name="password" id="password"
            class="px-3 py-1 bg-white text-gray-700 border border-solid border-gray-300 rounded focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Telegram User Id') }}</label>


        <input id="user_id"
            class="px-3 py-1 bg-white text-gray-700 border border-solid border-gray-300 rounded focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
            @error('user_id') is-invalid @enderror" name="user_id" value="{{ old('user_id') }}" required
            autocomplete="user_id">

        @error('user_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <button type="submit" value="submit"
            class="px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">REGISTER</button>
    </form>
</body>

</html>

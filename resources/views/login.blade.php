<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{route('student.login')}}">
        @csrf
        <div class="p-6 bg-red-400">
            <h1>Login</h1>
        </div>
        <div class="p-6 bg-blue-700 border border-black">
            <div class="p-6">
                <label for="email">Email: </label>
                <input name="email" type="text" id="email" class="border-2 border-black border-solid rounded"/>

                <label for="password">Password: </label>
                <input name="password" type="password" id="password" class="border-2 border-black border-solid rounded" />

            </div>

            <div>
                <button type="submit" value="submit" class="bg-orange-400">Submit </button>
            </div>

        </div>

    </form>


</body>
</html>

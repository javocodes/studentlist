<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Home</title>
</head>
<body>
    <nav class="border border-2 border-gray-300">
        <ul class="p-6 list-none bg-red-400">
        <div class="flex flex-wrap justify-center justify-evenly">
            @auth
            <div>
                <li>
                    <a href="{{route('student.logout')}}"> <button class="text-white text-bold">logout</button> </a>
                </li>
            </div>
            @endauth

            @guest
            <div>
                <li>
                    <a href="{{route('student.create')}}"> <button class="text-white text-bold">Create Student</button> </a>
                </li>
            </div>

            <div>
                <li>
                    <a href="{{route('student.view')}}"> <button class="text-white text-bold">View Student</button> </a>
                </li>
            </div>

            <div>
                <li>
                    <a href="{{route('student.loginview')}}"> <button class="text-white text-bold">Login</button> </a>
                </li>
            </div>

            <div>
                <li>
                    <a href="{{route('student.register')}}"> <button class="text-white text-bold">Register</button> </a>
                </li>
            </div>
            @endguest
        </div>
        </ul>
    </nav>
    <header>
        <div>
            <div class="relative bg-indigo-300 pb-2/3 sm:pt-1/2 lg:pt-2/3">
                <img src="
                https://images.pexels.com/photos/270640/pexels-photo-270640.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940
                "
                alt="student desk"
                class="inset-0 object-cover w-full h-full rounded-lg shadow-lg absolut"
                />
            </div>
            <h1 class="absolute px-6 py-4 text-3xl text-white left-80 top-40 text-bold">Welcome To The Student Contact List Application!</h1>

        </div>

    </header>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<nav class="border border-2 border-gray-300 w-full text-gray-700 bg-orange-500 dark-mode:text-gray-200 dark-mode:bg-gray-800">
    <ul class="p-6 list-none ">
        <div class="flex justify-center item-center text-black text-bold font-bold">
            @auth
                <div>
                    <li>
                        <a href="{{route('student.logout')}}" class="px-4 py-2 mt-2 text-lg text-bold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                            <button class="text-white text-bold">logout</button>
                        </a>
                    </li>
                </div>
            @endauth

            @guest
                <div>
                    <li>
                        <a href="{{route('student.create')}}" class="px-2 py-2 mt-2 text-lg font-bold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                            <button class="">Create Student</button> </a>
                    </li>
                </div>

                <div>
                    <li>
                        <a href="{{route('student.view')}}" class="px-2 py-2 mt-2 text-lg text-bold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                            <button class="text-bold">View Student</button> </a>
                    </li>
                </div>

                <div>
                    <li>
                        <a href="{{route('student.loginview')}}" class="px-2 py-2 mt-2 text-lg text-bold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                            <button class="">Login</button> </a>
                    </li>
                </div>

                <div>
                    <li>
                        <a href="{{route('student.register')}}" class="px-2 py-2 mt-2 text-lg text-bold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                            <button class="">Register</button> </a>
                    </li>
                </div>
            @endguest
        </div>
    </ul>
</nav>

<div>
    @yield('content')
</div>

</body>
</html>

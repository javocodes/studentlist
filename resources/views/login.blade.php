@extends('layouts.app')

@section('content')
    <form method="POST" action="{{route('student.login')}}">
        @csrf
        <main
            class="container mx-auto p-4 mt-12 bg-white flex flex-col items-center justify-center text-gray-700"
        >
            <div class="w-10/12 sm:w-8/12 md:w-6/12 lg:w-5/12 xl:w-4/12 mb-4">
                <h1 class="text-4xl font-semibold text-center ">Welcome Back!</h1>
            </div>
            <div class="w-10/12 sm:w-8/12 md:w-6/12 lg:w-5/12 xl:w-4/12 mb-6">
                <label for="">Email:</label>
                <input
                    class="mb-4 p-2 appearance-none block w-full bg-gray-200 placeholder-gray-900 rounded border focus:border-teal-500"
                    type="text"
                    name="email"  id="email"
                />
                <label for="">Password:</label>
                <input
                    class="mb-4 p-2 appearance-none block w-full bg-gray-200 placeholder-gray-900 rounded border focus:border-teal-500"
                    type="text"
                    name="password" id="password"
                />

                <div class="flex items-center">
                    <button
                        class="ml-auto w-1/2 bg-gray-800 text-white p-2 rounded font-semibold hover:bg-gray-900"
                        type="submit"
                    >
                        Log In
                    </button>
                </div>
            </div>


        </main>

    </form>
@endsection






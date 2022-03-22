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
    {{-- {{dd($student)}} --}}
    @if ($errors->any())
        <div>
            <ul class="text-red-500 bg-red-300">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{url('student/update/'.$student->id)}}">
        @csrf
        <div>
            <label for="fname">First Name: </label>
            <input name="fname" type="text" id="fname" value="{{$student->fname}}"/>

            <label for="lname">Last Name: </label>
            <input name="lname" type="text" id="lname" value="{{$student->lname}}" />
        </div>


        <div>
            <label for="address"> Address: </label>
            <input name="address" type="text" id="address" value="{{$student->address}}"/>

            <label for="parish">Parish: </label>
            <input name="parish" type="text" id="parish" value="{{$student->parish}}"/>
        </div>

        <div>
            <label for="phone_no"> Phone Number: </label>
            <input name="phone_no" type="text" id="phone_no" value="{{$student->phone_no}}"/>

            <label for="email"> Email: </label>
            <input name="email" type="email" id="email" value="{{$student->email}}"/>
        </div>

        <div>
            <label for="cohort"> Cohort: </label>
            <input name="cohort" type="cohort" id="cohort" value="{{$student->cohort}}"/>
        </div>

        <div>
            <button type="submit" value="submit" class="bg-orange-400">Submit </button>
        </div>

    </form>

</body>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
@if (session()->has('message'))
        <script>
            Swal.fire(
            'AWESOME!',
            'New Student Created!',
            'success'
            )
        </script>
    @endif
</html>

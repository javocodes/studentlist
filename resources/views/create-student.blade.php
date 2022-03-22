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
    <form method="POST" action="{{route('student.save')}}">
        @csrf
        <div class="p-6 bg-red-400">
            <h1>Enter Student Information</h1>
        </div>
        <div class="p-6 bg-blue-700 border border-black">
            <div class="p-6">
                <label for="fname">First Name: </label>
                <input name="fname" type="text" id="fname" class="border-2 border-black border-solid rounded"/>

                <label for="lname">Last Name: </label>
                <input name="lname" type="text" id="lname" class="border-2 border-black border-solid rounded" />

            </div>
            <div class="p-6">
                <label for="address"> Address: </label>
                <input name="address" type="text" id="address" class="border-2 border-black border-solid rounded"/>

                <label for="parish">Parish: </label>
                <input name="parish" type="text" id="parish" class="border-2 border-black border-solid rounded" />
            </div>

            <div class="p-6">
                <label for="phone_no"> Phone Number: </label>
                <input name="phone_no" type="text" id="phone_no" class="border-2 border-black border-solid rounded" />

                <label for="email"> Email: </label>
                <input name="email" type="email" id="email" class="border-2 border-black border-solid rounded" />
            </div>

            <div class="p-6">
                <label for="cohort"> Cohort: </label>
                <input name="cohort" type="cohort" id="cohort" class="border-2 border-black border-solid rounded" />
            </div>
            <div>
                <button type="submit" value="submit" class="bg-orange-400">Submit </button>
            </div>

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

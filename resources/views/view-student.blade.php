<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />

</head>
<body>

@auth
    <a href="{{route('student.logout')}}"> <button class="text-white bg-red-400 text-bold">logout</button> </a>
@endauth

 <table>
        <h1>Students Table</h1>
        <th>
            <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td> Address </td>
                <td> Phone Number</td>
                <td>Parish</td>
                <td>Cohort</td>
                <td>Email</td>
                <td>
                    Action
                </td>
            </tr>
        </th>
        <tbody>
            @foreach ($students as $student )
            <tr>
                <td> {{$student->fname}} </td>
                <td> {{$student->lname}} </td>
                <td> {{$student->address}} </td>
                <td> {{$student->phone_no}} </td>
                <td> {{$student->parish}} </td>
                <td> {{$student->cohort}} </td>
                <td> {{$student->email}} </td>
                <td> <a href="{{route('student.edit', ['id'=>$student->id])}}"> Edit </a></td>
            </tr>

            @endforeach
        </tbody>


    </table>

</body>
<script src="https://cdn.tailwindcss.com"></script>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
    <style>
        tr {
            padding: 10px;
            border: 2px #000000 solid;
        }

        th, td {
            padding: 10px;
            border: 2px #000000 solid;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Instructor</th>
            <th>Subject</th>
        </tr>

        @foreach ($students as $student)
        <tr>
            <td>{{ $student->student_name }}</td>
            <td>{{ $student->gender }}</td>
            @foreach ($student->instructors as $instructor)
                <td>{{ $instructor->instructor_name }}</td>
                <td>{{ $instructor->subject }}</td>
            @endforeach
        </tr>
        @endforeach
    </table>
</body>
</html>

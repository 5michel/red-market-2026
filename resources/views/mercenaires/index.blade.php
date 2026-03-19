<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2" bordercolor="green" >
            <tr>
                <td>Lastname</td>
                <td>Firstname</td>
                <td>Age</td>
            </tr>
            @foreach ($mercenaires as $key => $value)
                <tr>
                    <td>{{ $value['lastname'] }}</td>
                    <td>{{ $value['firstname'] }}</td>
                    <td>{{ $value['age'] }}</td>
                </tr>
            @endforeach
</table>
</body>
</html>
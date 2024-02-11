<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello Everyone</h1>

    @if (count($records) === 1)
    I have one record!
    @elseif (count($records) > 1)
    I have multiple records!
    @else
    I don't have any records!
    @endif

    @include('partials.ptag')


</body>

</html>
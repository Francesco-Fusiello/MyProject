<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FLAY</title>
</head>
<body>
    <div>
        <h1>{{__('ui.titMail')}}</h1>
        <h2>{{__('ui.mail2')}}:</h2>
        <p>{{__('ui.name')}} {{$user->name}}</p>
        <p>E-mail: {{$user->email}}</p>
        <p>{{__('ui.mail3')}}</p>
        <a href="{{route('make.revisor',compact('user'))}}">{{__('ui.mail4')}}</a>
    </div>
</body>
</html>
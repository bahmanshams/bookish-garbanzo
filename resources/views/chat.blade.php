<!doctype html>
<html lang="en" xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
<div class="container">
    <div class="row" id="app">
        <ul class="list-group offset-4 col-4">
            <li class="list-group-item active">Chat Room</li>
            <message></message>
            <input type="text" class="form-control" placeholder="Type your message here..." v-model="message" v-on:keyup.enter="send">
        </ul>
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

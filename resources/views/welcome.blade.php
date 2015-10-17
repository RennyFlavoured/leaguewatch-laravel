<!DOCTYPE html>
<html>
    <head>
        <title>LeagueWatch</title>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/materialize.min.css') }}"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/stlye.css') }}"  media="screen,projection"/>
    </head>
    <body>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="{{ URL::asset('js/materialize.min.js') }}"></script>
        <div class="container">
            <div class="content">
                <div id="title-pic">
                    <img src="{{ URL::asset('img/liss.png') }}" />
                </div>
                <div class="search_box">  
                {!! Form::open(array('url' => 'game')) !!}

                    {!! Form::text('name', @$name) !!}

                    {!! Form::submit('Send') !!}

                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </body>
</html>

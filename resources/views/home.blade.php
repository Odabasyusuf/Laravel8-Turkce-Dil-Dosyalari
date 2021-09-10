@extends('layouts.app')

@section('content')

    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);

            margin: auto;
            text-align: center;
        }

        .title {
            color: grey;
            font-size: 18px;
        }

        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        a {
            text-decoration: none;
            font-size: 22px;
            color: black;
        }

        button:hover, a:hover {
            opacity: 0.7;
        }
    </style>
<div class="container">
    <div class="row justify-content-center">
        @isset($persons)
            @foreach($persons as $person)
                <div class="col-md-4 mb-5">
                    <div class="card text-center">
                        <p class="thumbnail">
                            <img src="{{$person->avatar}}" alt="" style="width:100px">
                        </p>
                        <p><strong>{{$person->first_name}} {{$person->last_name}}</strong></p>
                        <p style="margin-top: -10px">{{$person->email}}</p>
                        <p><a href="{{route('person.profile',$person->id)}}"><button>Profile</button></a></p>
                    </div>
                </div>
            @endforeach
        @endisset
    </div>
</div>

@endsection

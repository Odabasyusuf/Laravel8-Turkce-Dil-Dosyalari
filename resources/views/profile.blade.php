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
<div class="container text-center">
        <div class="container mb-4">
            <div class="col-lg-12">
                <img src="{{$person->avatar}}" alt="" class="rounded-circle">
                <div class="media-body mt-3">
                    <h4 class="font-weight-bold mb-4">{{$person->first_name}} {{$person->last_name}}</h4>
                    <div class="text-muted mb-4">
                        Açıklama
                    </div>
                </div>
            </div>
</div>

@endsection

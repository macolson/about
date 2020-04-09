@extends('_layouts.master')

@section('body')
    <div class="max-w-full lg:max-w-7xl w-full shadow-lg m-auto bg-white flex flex-col lg:flex-row">

        @include('sidebar')

        <div class="w-full lg:w-3/5 p-5 lg:p-10">
            @include('about')
            @include('experience')
            @include('education')
        </div>
    </div>
    <style>
        .connection:after {
            content: "";
            display: block;
            width: 1px;
            background-color: #d9d9d9;
            height: 100%;
            position: absolute;
            left: 5px;
            z-index: 3;
            top: 7px;
        }
    </style>
@endsection


@extends('layouts.app')
 
@section('title', 'Page Title')
 
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
@section('content')

  <h1 class="text-3xl font-bold text-blue-700">
    Hello world!
  </h1>
     <a href="{{url('/halaman2')}}">
            <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Halaman 2
            </button>
 @endsection


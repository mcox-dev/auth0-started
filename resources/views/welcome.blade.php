@extends('layout.app')

@section('content')
<h1 class="text-gray-600 dark:text-gray-400">
    Welcome {{ Auth::user()->email ?? '' }}
</h1>
@endsection

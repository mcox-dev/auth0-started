@extends('layout.app')

@section('content')
<div class="text-gray-600 dark:text-gray-400">
  <ul>
    @foreach ($user as $field => $value)
    <li>
      <strong>{{ $field }}:</strong>
      <span>{{ $value }}</span>
    </li>
    @endforeach
  </ul>
</div>
@endsection

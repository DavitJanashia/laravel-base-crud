@extends('layouts.main-layout')
@section('section1')
  <ul>
    <h2>La lista paganti:</h2>
    @foreach ($paganti as $pagante)
      <li>
        <a href="#">
          {{ $pagante -> name }}
          {{ $pagante -> lastname }}
        </a>
      </li>
    @endforeach
  </ul>
@endsection

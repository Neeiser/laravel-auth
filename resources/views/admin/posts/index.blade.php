@extends('layouts.admin')

@section('pagetitle', 'Index')

@section('pageContent')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#ID</th>
        <th scope="col">CREATOR'S NAME</th>
        <th scope="col">TITLE</th>
        {{-- <th scope="col">DESCRIPTION</th> --}} {{-- Non lo metto, si vedrà nello show --}}
        <th scope="col">SLUG GENERATED</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($postsData as $post)
        <tr>
          <th scope="row">{{ $post->id }}</th>
          <td class="col-1">{{ $post->creator_name }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->slug }}</td>
        </tr>
      @endforeach
    </tbody>
</table>
@endsection
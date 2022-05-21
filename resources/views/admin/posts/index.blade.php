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
        <th scope="col">ACTIONS</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($postsData as $post)
        <tr>
          <th scope="row">{{ $post->id }}</th>
          <td class="col-1">{{ $post->creator_name }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->slug }}</td>
          <td>
          <form action="{{ route('admin.posts.show', $post->id)}}">
            <button>EDIT</button>
          </form>
          <form action="{{ route('admin.posts.destroy', $post->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button>DELETE</button>
          </form>
          </td>
        </tr>
      @endforeach
    </tbody>
</table>
@endsection
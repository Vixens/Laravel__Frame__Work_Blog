@extends('layouts.admin')

@section('title') Admin Posts @endsection

@section('content')
<div class="content">


<div class="card">
    <div class="card-header bg-light">
        Admin Posts
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Created at </th>
                    <th>Updated at </th>
                    <th>Comments </th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td class="text-nowrap"><a href="{{ route('singlePost',$post->id) }}">{{ $post->title }}</a></td>
                    <td>{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</td>
                    <td>{{ \Carbon\Carbon::parse($post->updated_at)->diffForHumans() }}</td>
                    <td>{{ $post->comments->count() }}</td>
                    <td>
                        <a href="{{ route('adminpostEdit',$post->id) }}" class="btn-warning"> Edit</a>
                        <form  id="deletePost-{{ $post->id }}" action="{{ route('admindeletePost',$post->id) }}" method="POST" >@csrf</form>
                        <a href="#"  class="btn-danger" data-toggle="modal" data-target="#deletePostModal-{{ $post->id }}"> Remove</a>
                    </td>
                </tr>
               
                @endforeach
               
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>

@foreach ($posts as $post)
<!-- Modal -->

<div class="modal fade" id="deletePostModal-{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">You are about to delete {{ $post->title }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You sure?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No Keep it </button>
        <form  id="deletePost-{{ $post->id }}" action="{{ route('admindeletePost',$post->id) }}" method="POST" >@csrf
        <button type="submit" class="btn btn-primary">Yes, Delete it </button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection
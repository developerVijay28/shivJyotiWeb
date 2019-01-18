@extends('adminPanel.dashbord')
@section('adminWorkingSection')
<h4>All The News Details</h4>
<table class="table table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col">id</th>
        <th scope="col">Topic</th>
        <th scope="col">Content</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    @foreach ($newsData as $news)
        
   
    <tbody>
      <tr>
      <th scope="row">{{$news->id}}</th>
      <td>{{$news->topic}}</td>
      <td>{{$news->news_content}}</td>
      <td>
{{-- <form action="{{route('quoteCreate.destroy',$data->id)}}" method="POST">

        @csrf

                    @method('DELETE')

    <h4 class="delete"><button type="submit" class="btn btn-danger btn-sm">X</button></h4>

</form> --}}
<form action="{{route('admin.adminNews.destroy',$news->id)}}" method="POST">
        @csrf
    @method('DELETE')
    
    
<button type="submit" class="btn btn-danger">X</button>
</form> 
        </td>
      </tr>
    </tbody>
    @endforeach
</table>
@endsection

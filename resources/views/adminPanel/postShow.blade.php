@extends('adminPanel.dashbord')

@section('myStyle')

<style type="text/css">

.delete{

    text-align-last:right;

}

.card{

    background-color: antiquewhite;

     padding-block-end: 2rem;

    border-spacing: 2rem;

    margin: 1rem;





}





a{

    color: red;



}
</style>

@endsection
@section('adminWorkingSection')
<h4>All The POST</h4>
<div class="container">
    <div class="row">
        @foreach($allPost as $postData )
            
       
        <div class="sm">

            <div class="card" style="width: 18rem;">

            <div class="card-body">
            <h5>{{$postData->category_name}}</h5>
            <form action="{{route('admin.adminPost.destroy',$postData->id)}}" method="POST">
                @csrf
                @method('DELETE')
                    <h4 class="delete"><button type="submit" class="btn btn-danger btn-sm">X</button></h4>
                </form>
                    <p class="card-text"><b>{{$postData->post_content}}</b></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<nav aria-label="Page navigation example">

        <ul class="pagination justify-content-center">



            {{$allPost->render()}}





        </ul>

        </nav>
@endsection
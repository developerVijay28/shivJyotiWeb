@extends('adminPanel.dashbord')
@section('adminWorkingSection')
<h4>Add the Latest News And Events Here</h4>
<form action="{{route('admin.adminNews.store')}}" method="POST">
    {{-- <form action="{{route('quoteCreate.store')}}" method="POST" class="center"> --}}


    @method('post')
@csrf
                <div class="form-group">
                <label for="inputState">Some Tpoic</label>
                    <input type="text" name="topic" class="form-control" id="inputState">
                    </div>
                    <div class="form-group">
                            <label for="exampleFormControlTextarea1">Write Brif</label>
                            <textarea class="form-control" name="news_content" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                          <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg">POST IT</button>
                          </div>

    </form>
@endsection

@extends('adminPanel.dashbord')
@section('adminWorkingSection')
<h4>Add the Post Here</h4>
<form action="{{url('adminPost')}}" method="POST">
  @method('post')
  @csrf
        
                <div class="form-group">
                <label for="inputState">Category</label>
                    <select id="inputState" class="form-control" name="category_name">
                      <option selected disabled>Choose...</option>
                      <option value="Acedamic">Acedamic</option>
                      <option value="Quotes">Quotes</option>
                      <option value="Course">Course</option>
                      <option value="ExTimeLine">Exam Time Line</option>
                      
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="topic">Topic/Header</label>
                      <input type="text" class="form-control" name="topic" id="topic">
                    </div>
                    <div class="form-group">
                            <label for="exampleFormControlTextarea1">Write Overview</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="post_content"></textarea>
                          </div>
                          <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg">POST</button>
                          </div>
        
    </form>
@endsection
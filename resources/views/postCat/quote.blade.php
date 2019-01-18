@extends('includes/htmlSupport')
@section('mainBody')
    @include('includes/navBar')
    <section class="pop-cour">
            <div class="container com-sp pad-bot-70">
                <div class="row">
                    <div class="con-title">
                        <h2>All <span>Quotes</span></h2>
<div class="row">
    @foreach ($quotes as $quote)
        
    
        <div class="col-sm-4">
        <div class="card w-50">
            <div class="card-body">
            <h2 class="card-title con-title"><span>{{$quote->topic}}</span></h2>
            <p class="card-text">" <i>{{$quote->post_content}}</i> "</p>
            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
        </div>
        </div>
        @endforeach
</div>
                    </div>
                </div>
                <!---end of div conatiner--->
            </div>
    </section>
    <!--SECTION START-->
@include('includes/footerCourse')
<!--SECTION END-->

<!--HEADER SECTION-->
@include('includes/footer')
    <!--END HEADER SECTION-->

<!--SECTION LOGIN, REGISTER AND FORGOT PASSWORD-->
@include('includes/socialActivites/socailLoginUP')
<!--- end of login Up social portion---->
<!-- SOCIAL MEDIA SHARE -->
@include('includes/socialActivites/sideSocialLink')
<!---end of side Social Bar---->
    @endsection
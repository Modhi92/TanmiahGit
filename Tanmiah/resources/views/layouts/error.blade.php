<div class="col-lg-12">
    @if(count($errors))
        <div class="form-group">
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

<!-- massage flash -->

    @if($flash=session('messageT'))
        <div id="flash-massage" class=" alert alert-success" role=alert">
            <h4> {{$flash}}</h4>
        </div>
    @endif
    @if($flash=session('messageF'))
        <div id="flash-massage" class=" alert alert-danger" role=alert">
            <h4> {{$flash}}</h4>
        </div>
    @endif

</div>

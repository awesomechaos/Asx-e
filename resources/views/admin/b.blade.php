{!! Form::open(['url' => '/admin']) !!}
    <div class="form-group">
        {!! Form::label('title','标题:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content','正文:') !!}
        {!! Form::textarea('content',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('发表文章',['class'=>'btn btn-success form-control']) !!}
    </div>
{!! Form::close() !!}
@foreach($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach
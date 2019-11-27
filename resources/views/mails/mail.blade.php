{{-- {{$name}}
{{$body}} --}}


{{-- @extends('beautymail::templates.ark')
 
@section('content')
 
    @include('beautymail::templates.ark.heading', [
        'heading' => 'Hello World!',
        'level' => 'h1'
    ])
 
    @include('beautymail::templates.ark.contentStart')
 
        <h4 class="secondary"><strong>Hello World</strong></h4>
        <p>This is a test</p>
 
    @include('beautymail::templates.ark.contentEnd')
 
    @include('beautymail::templates.ark.heading', [
        'heading' => 'Another headline',
        'level' => 'h2'
    ])
 
    @include('beautymail::templates.ark.contentStart')
 
        <h4 class="secondary"><strong>Hello World again</strong></h4>
        <p>This is another test</p>
 
    @include('beautymail::templates.ark.contentEnd')
 
@stop --}}



<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
</head>
<body>
    <h2>Demo mail from JustLaravel</h2>
 
    @if(isset($body))
    <div class="w3-container w3-orange">
 
        <p>
            <b>The data you have entered is :</b><span
                style="color: #e36c39; background: #EEE";> {{ $data['body'])}}</span>
 
        </p>
 
    </div>
    @endif
</body>
</html>
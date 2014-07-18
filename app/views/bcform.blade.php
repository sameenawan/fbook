@extends('master')

@section('head')
    <title>Paragraph Text Generator</title>
@stop

@section('pagetitle')
<h2>Developers Friend</h2>
@stop

@section('body')
	{{Form::open(array('url' => '/p3')) }}
	
		<p>
		{{ Form::label('qty','# of Paragraphs')}}
		{{ Form::text('qty','5') }}
		</p>
		<br/>
		<input type="submit"  value="Get Text!" name="submit" id="loremSubmit" class="button">
	{{Form::close()}}
@stop

@extends('master')

@section('head')
    <title>Paragraph Text Generator</title>
@stop

@section('pagetitle')
	<h2>Developers Friend - Your Paragraphs Below</h2>
@stop

@section('body')


	
	<?php
		$generator = new Badcow\LoremIpsum\Generator(); 
			$generator->setParagraphMean(5);
			$generator->setSentenceMean(15);
		$paragraphs = $generator->getParagraphs($qty); 
    ?>

    <div class="result">
    	@foreach ($paragraphs as $paragraph)
    		<p>{{ $paragraph }}</p>
    	@endforeach
    </div>

@stop
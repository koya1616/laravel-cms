<?php
$title = '投稿編集';
?>
@extends('back.layouts.base')
 
@section('content')
<div class="card-header">投稿編集</div>
<div class="card-body">
    {!! Form::model($post, [
        'route' => ['back.posts.update', $post],
        'method' => 'put'
    ]) !!}
    @include('back.posts._form')
    {!! Form::close() !!}
</div>
@endsection
@extends('base')

@section('title', 'Forum')

@section('content')
@include('shared.header')

<div class="container">
    <div class="main-body p-0">
        <div class="inner-wrapper">
            <div class="inner-sidebar">
                <div class="inner-sidebar-header justify-content-center">
                    <a href="{{ route('forum.create') }}" class="btn colorFour has-icon btn-block" type="button" data-toggle="modal" data-target="#threadModal">
                        <i class="fa-solid fa-plus"></i>
                        NEW DISCUSSION
                    </a>
                </div>
            </div>
            <div class="inner-main">
                <div class="inner-main-header">
                    <span class="input-icon input-icon-sm ml-auto w-auto">
                    <input type="text" class="form-control form-control-sm bg-gray-200 border-gray-200 shadow-none mb-4 mt-4" placeholder="Search forum" />
                </span>
                </div>

                <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
                    @foreach ($questions as $question)
                    <div class="card mb-2">
                        <div class="card-body p-2 p-sm-3">
                            <div class="media forum-item">
                                <a href="{{ route('forum.show', $question->id) }}" data-toggle="collapse" data-target=".forum-content"><img src="{{asset($question->user->image[0]->url)}}" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                                <div class="media-body">
                                    <h6><a href="{{ route('forum.show', $question->id) }}" data-toggle="collapse" data-target=".forum-content" class="text-body">{{ $question->category->name }}</a></h6>
                                    <h6><a href="{{ route('forum.show', $question->id) }}" data-toggle="collapse" data-target=".forum-content" class="text-body">{{ $question->title }}</a></h6>
                                    <p class="text-secondary">
                                        {{ $question->content }}
                                    </p>
                                    <p class="text-muted"> Auteur : <a href="{{route('user.show', $question->user->id)}}">{{ $question->user->firstname . ' ' . $question->user->name }}</a></p>
                                </div>
                                <div class="text-muted small text-center align-self-center">

                                    <span><i class="far fa-comment ml-2"></i>{{count($question->responses)}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

    @include('shared.footer')
@endsection

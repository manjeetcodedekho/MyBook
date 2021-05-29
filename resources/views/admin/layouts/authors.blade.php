@extends('admin.layouts.master')
@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-5">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<h1>&nbsp;Add Author</h1>
    @if(Session::has('message'))
    <div class="alert alert-success">
    {{ Session::get('message')}}
    </div>
    @endif
    <div class="py-12">
        <form action="{{ route('authors.store') }}" method="POST">
            @csrf
            <div class="container">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="author_name">
                    @error('author_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="author_email">
                    @error('author_email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Bio</label>
                    <textarea class="form-control" name="author_bio" id=""></textarea>
                </div>
                @error('author_bio')
                <span class="text-danger">{{ $message }}</span>
                @enderror<br>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Add Author</button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
@endsection
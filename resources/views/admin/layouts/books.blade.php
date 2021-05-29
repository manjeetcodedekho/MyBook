@extends('admin.layouts.master')
@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-5">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h3>Add Books</h3>
    @if(Session::has('message'))
    <div class="alert alert-success">
        {{ Session::get('message')}}
    </div>
    @endif
    <div class="py-12">
        <form action="{{ route('keep.book') }}" method="POST">
            @csrf
            <div class="container">
                <div class="form-group">
                    <label for="">Author</label>
                    <select name="author_id" class="form-control select2" id="">
                        <option label="Choose Author" selected="" disabled=""></option>
                        @foreach($author as $row)
                        <option value="{{$row->id}}">{{ $row-> author_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Badge</label>
                    <select name="badge_id" class="form-control select2" id="">
                        <option label="Choose Badge" selected="" disabled=""></option>
                        @foreach($badge as $row)
                        <option value="{{$row->id}}">{{ $row-> badge_label}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Book Name</label>
                    <input type="text" class="form-control" name="book_name">
                    @error('book_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Book Price</label>
                    <input type="text" class="form-control" name="book_price">
                    @error('book_price')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Book ISBN</label>
                    <input type="text" class="form-control" name="book_isbn">
                    @error('book_isbn')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Publish Date</label>
                    <input type="date" class="form-control" name="book_publish_date">
                    @error('book_publish_date')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div><br>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Add Book</button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
@endsection
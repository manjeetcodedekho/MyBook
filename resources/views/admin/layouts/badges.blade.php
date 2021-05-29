@extends('admin.layouts.master')
@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-5">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h3>Add Badges</h3>
    @if(Session::has('message'))
    <div class="alert alert-success">
        {{ Session::get('message')}}
    </div>
    @endif
    <div class="py-12">
        <form action="{{ route('save.badges') }}" method="POST">
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
                    <label for="">Label</label>
                    <input type="text" class="form-control" name="badge_label">
                    @error('badge_label')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" class="form-control" name="badge_description">
                    @error('badge_description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div><br>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Add Badge</button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
@endsection
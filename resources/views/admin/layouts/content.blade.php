@extends('admin.layouts.master')
@section('content')


<main>
    <div class="container ">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Author</th>
                            <th>Book Count</th>
                            <th>Book List</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($book as $bk)
                        <tr>
                            <td>{{$bk->author->author_name }}<br>{{$bk->author->author_email }} <br>{{$bk->badge->badge_label}}
                            </td>
                            <td>{{ $bk->author_id }} </td>
                            <td>{{$bk->book_name }}</td>
                            <td><i class="fa fa-trash"></i></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
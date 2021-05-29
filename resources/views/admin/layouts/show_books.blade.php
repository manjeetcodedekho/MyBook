@extends('admin.layouts.master')
@section('content')


<div class="container md-5">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Author List</li>
                </ol>
            </nav>
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Book Name</th>
                        <th>Book Price</th>
                        <th>Book ISBN</th>
                        <th>Book Rating</th>
                        <th>Book Publish Date</th>
                        <th>Del</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($book as $bk)
                    <tr>
                        <td>{{$bk->book_name }}</td>
                        <td>{{$bk->book_price }}</td>
                        <td>{{$bk->book_isbn }}</td>
                        <td>{{$bk->book_average_rating }}</td>
                        <td>{{$bk->book_publish_date }}</td>
                        <td><i class="fa fa-trash"></i></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
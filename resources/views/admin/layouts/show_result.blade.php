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
            <table data-page-length="5" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Book Name</th>
                        <th>Book Price ₹</th>
                        <th>Book ISBN</th>
                        <th>Book Rating</th>
                        <th>Book Publish Date</th>
                        <th>Del</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($searchbook as $search)
                    <tr>
                        <td>{{$search->book_name }}</td>
                        <td>{{$search->book_price }} ₹</td>
                        <td>{{$search->book_isbn }}</td>
                        <td>{{$search->book_average_rating }}</td>
                        <td>{{$search->book_publish_date }}</td>
                        <td><i class="fa fa-trash"></i></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $searchbook->links() }}
        </div>
    </div>
</div>


@endsection
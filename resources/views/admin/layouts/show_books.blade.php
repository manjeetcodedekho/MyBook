@extends('admin.layouts.master')
@section('content')


<div class="container md-5">
    <div class="row">
        <div class="col-md-12">
            <div class="input-group">
                <form action="{{ route('book.search') }}" method="POST">
                    @csrf
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" name="search" />
                    <button type="submit" class="btn btn-outline-primary">search</button>
                </form>
            </div><br>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Book List</li>
                </ol>
            </nav>
            <table data-page-length="5" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Book Name</th>
                        <th>Book Price ₹</th>
                        <th>Book ISBN</th>
                        <th>Book Publish Date</th>
                        <th>Del</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($book as $bk)
                    <tr>
                        <td>{{$bk->book_name }}</td>
                        <td>{{$bk->book_price }} ₹</td>
                        <td>{{$bk->book_isbn }}</td>
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
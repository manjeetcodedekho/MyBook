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
                        <th>Author Name</th>
                        <th>Author Email</th>
                        <th>Author Bio</th>
                        <th>Del</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($author as $auth)
                    <tr>
                        <td>{{$auth->author_name }}</td>
                        <td>{{$auth->author_email }}</td>
                        <td>{{$auth->author_bio }}</td>
                        <td><i class="fa fa-trash"></i></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
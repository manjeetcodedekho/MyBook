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
                        <th>Badge</th>
                        <th>Description</th>
                        <th>Del</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($badges as $badge)
                    <tr>
                        <td>{{$badge->badge_label }}</td>
                        <td>{{$badge->badge_description }}</td>
                        <td><i class="fa fa-trash"></i></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Autos</div>
                    <div class="card-body">
                        <a href="{{ url('/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>მანქანის დასახელება</th>
                                        <th>ავტომობილის მოდელი</th>
                                        <th>მანქანის გამოშვების თარიღი</th>
                                        <th>ძრავის მოცულობა</th>
                                        <th>განბაჟება</th>
                                        <th>ფასი</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($autos as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->saxeli }}</td>
                                        <td>{{ $item->modeli }}</td>
                                        <td>{{ $item->gamoshvebit_tarigi }}</td>
                                        <td>{{ $item->dzravi }}</td>
                                        <td>{{ $item->ganbajeba }}</td>
                                        <td>{{ $item->fasi }}</td>
 
                                        <td>
                                            <a href="{{ url('/auto/' . $item->id) }}" title="View Autos"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/auto/' . $item->id . '/edit') }}" title="Edit Autos"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="GET" enctype="multipart/form-data" action="{{ url('/contact' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Autos" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
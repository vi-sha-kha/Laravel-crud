@extends('crud.layout')

@section('content')
<div class="row">
    <h2>Laravel 10 CRUD APP</h2>
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('crud.create') }}"> Back</a>
        </div>
    </div>

      @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>S.N.</th>
            <th>Subject</th>
            <th>Action</th>
        </tr>

        @foreach ($crud as $crud)
        <tr>
            <td>{{++$i}}</td>
            <td>{{$crud->subject}}</td>
            <td>
                <form action="route{{'crud.index'}}" method="POST">
                    {{-- <a class="btn btn-info" href="{{route('crud.show',$crud->id)}}">Show</a> --}}
                    <a class="btn btn-primary" href="{{route("crud.edit",$crud->id)}}">Edit</a>

                    @csrf
                    @method('DELETE')

                   <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>


        </tr>
        @endforeach
    </table>
</div>



{{-- {{!! $crud-> links() !!}} --}}

@endsection

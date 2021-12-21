@extends('coffeeBeanTable.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left text-center">
               
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('coffeeBeanTable.create') }}"> Create Coffee Bean Table</a>
            </div><br>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <span>{{ $message }}</span>
    </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Caffeine Level</th>
            <th>Cost/lb</th>
            <th>Bean Type</th>
            <th>Roast</th>
            <th>Grind</th>
            <th>Country of Origin</th>
            <th>Action</th>
        </tr>
        @foreach ($coffeeBeanTable as $coffeeBeanTable)
        <tr>
            <td>{{ $coffeeBeanTable->id}}</td>
            <td>{{ $coffeeBeanTable->Name }}</td>
            <td>{{ $coffeeBeanTable->Caffeine_Level}}</td>
            <td>{{ $coffeeBeanTable->Cost/lb }}</td>
            <td>{{ $coffeeBeanTable->Bean_Type}}</td>
            <td>{{ $coffeeBeanTable->Roast}}</td>
            <td>{{ $coffeeBeanTable->Grind}}</td>
            <td>{{ $coffeeBeanTable->Country_of_Origin}}</td>
            <td><form action="{{ route('coffeeBeanTable.destroy',$coffeeBeanTable->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('coffeeBeanTable.show',$coffeeBeanTable->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('coffeeBeanTable.edit',$coffeeBeanTable->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Do you really want to delete coffee Bean Table!')" class="btn btn-danger">Delete</button>
            </form></td>
        </tr>
        @endforeach
    </table>
{!! $coffeeBeanTable->links() !!}
@endsection

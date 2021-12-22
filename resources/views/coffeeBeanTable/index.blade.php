@extends('coffeeBeanTable.layout')
@section('content')
<body>
   <div>
     <div class="col-lg-12 margin-tb">
       <div class="pull-left text-center">
          </div>
            <h1>Welcome to Coffee Beans Application!</h1>
           </div>
               @if ($message = Session::get('success'))
               <div class="alert alert-success">
                    <span>{{ $message }}</span>
               </div>
                @endif
                <div class="pull-right">
                <br>
                <a class="btn btn-success" href="{{ route('coffeeBeanTable.create') }}"> Create a Coffee Bean Table Entry</a>
               </div><br>
               <table class="table">
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
                     @foreach ($coffeeBeanTable as $coffeeBeanTables)
                     <tr>
                        <td>{{ $coffeeBeanTables->id}}</td>
                        <td>{{ $coffeeBeanTables->Name}}</td>
                        <td>{{ $coffeeBeanTables->Caffeine_Level}}</td>
                        <td>{{ $coffeeBeanTables->Cost_lb}}</td>
                        <td>{{ $coffeeBeanTables->Bean_Type}}</td>
                        <td>{{ $coffeeBeanTables->Roast}}</td>
                        <td>{{ $coffeeBeanTables->Grind}}</td>
                        <td>{{ $coffeeBeanTables->Country_of_Origin}}</td>
                        <td>
                        <form action="{{ route('coffeeBeanTable.destroy',$coffeeBeanTables->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('coffeeBeanTable.show',$coffeeBeanTables->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('coffeeBeanTable.edit',$coffeeBeanTables->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Do you really want to delete a Coffee Bean Table Entry?')" class="btn btn-danger">Delete</button>
                        </form>
                        </td>
                      </tr>
                     @endforeach
               </table>
        <div class="d-flex justify-content-center">
            {{ $coffeeBeanTable->links('pagination::bootstrap-4') }}
        </div>
      </div>
</div>
</body>
@endsection

@extends('coffeeBeanTable.layout')
@section('content')
 <br><br>
    <div class="row text-center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1> Coffee Bean Table Detail </h1>
            </div>
        </div>
    </div><br>
    <br>
    <br>
<div class="row">
  <div class="split right">

 
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" >
                <strong>ID:</strong>
                {{ $coffeeBeanTable->id  }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" >
                <strong>Name:</strong>
                {{ $coffeeBeanTable->Name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Caffeine Level:</strong>
                {{ $coffeeBeanTable->Caffeine_Level }}
            </div>
        </div>
            
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cost_lb:</strong>
                {{ $coffeeBeanTable->Cost_lb}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bean Type:</strong>
                {{ $coffeeBeanTable->Bean_Type}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Roast:</strong>
                {{ $coffeeBeanTable->Roast }}
            </div>
        </div>
          
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Grind:</strong>
                {{ $coffeeBeanTable->Grind }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Country of Origin:</strong>
                {{ $coffeeBeanTable->Country_of_Origin }}
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a class="btn btn-primary" href="{{ route('coffeeBeanTable.index') }}"> Back</a>
        </div>
    </div>

  </div>
  <div class="split left">


<img src="https://images.unsplash.com/photo-1587734195503-904fca47e0e9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y29mZmVlJTIwYmVhbnxlbnwwfHwwfHw%3D&w=1000&q=80" width="300" height="400">

  </div>
</div>
@endsection

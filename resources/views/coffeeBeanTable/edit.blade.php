@extends('coffeeBeanTable.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Edit Coffee Bean Table Entry</h1><br>  
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> something we are problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('coffeeBeanTable.update',$coffeeBeanTable->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="Name" value="{{ $coffeeBeanTable->Name}}" class="form-control" placeholder="name">
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Caffeine Level:</strong>
                <select id="Caffeine Level " name="Caffeine Level"  class="form-control">
                  <option value="">--- Choose a Caffeine Level ---</option>>
                  <option value="decaf"<?php if($coffeeBeanTable->Caffeine_Level == 'decaf'){ echo 'selected'; }?>>decaf</option>
                  <option value="low"<?php if( $coffeeBeanTable->Caffeine_Level  == 'low'){ echo 'selected'; }?>>low</option>
                  <option value="medium"<?php if($coffeeBeanTable->Caffeine_Level == 'medium'){ echo 'selected'; }?>>medium</option>
                  <option value="high"<?php if( $coffeeBeanTable->Caffeine_Level  == 'high'){ echo 'selected'; }?>>high</option>
                 </select>
             </div>
         </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cost/lb:</strong>
                <input type="text" name="Cost_lb" value="{{ $coffeeBeanTable->Cost_lb}}" class="form-control" placeholder="Cost/lb">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bean Type:</strong>
                <select id="Bean Type: " name="Bean Type"  class="form-control">
                <option value="">--- Choose a Bean Type---</option>>
                <option value="Arabica"<?php if($coffeeBeanTable->Bean_Type == 'Arabica'){ echo 'selected'; }?>>Arabica</option>
                <option value="Robusta"<?php if( $coffeeBeanTable->Bean_Type == 'Robusta'){ echo 'selected'; }?>>Robusta</option>
                <option value="Liberca"<?php if($coffeeBeanTable->Bean_Type == 'Liberca'){ echo 'selected'; }?>>Liberca</option>
                <option value="Excelsa"<?php if( $coffeeBeanTable->Bean_Type == 'Excelsa'){ echo 'selected'; }?>>Excelsa</option>
                <option value="Other"<?php if( $coffeeBeanTable->Bean_Type == 'Other'){ echo 'selected'; }?>>Other</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Roast:</strong>
                <select id="Roast " name="Roast"  class="form-control">
                <option value="">--- Choose a Roast---</option>>
                <option value="dark"<?php if($coffeeBeanTable->Roast== 'dark'){ echo 'selected'; }?>>dark</option>
                <option value="medium"<?php if( $coffeeBeanTable->Roast== 'medium'){ echo 'selected'; }?>>medium</option>
                <option value="light"<?php if($coffeeBeanTable->Roast== 'light'){ echo 'selected'; }?>>light</option>
                <option value="french"<?php if( $coffeeBeanTable->Roast== 'french'){ echo 'selected'; }?>>french</option>
                </select>
             </div>
         </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Grind:</strong>
                <select id="Grind " name="Grind"  class="form-control">
                <option value="">--- Choose a Grind---</option>>
                <option value="whole-bean"<?php if($coffeeBeanTable->Grind== 'whole-bean'){ echo 'selected'; }?>>whole-bean</option>
                <option value="fine"<?php if( $coffeeBeanTable->Grind== 'fine'){ echo 'selected'; }?>>fine</option>
                <option value="medium"<?php if($coffeeBeanTable->Grind== 'medium'){ echo 'selected'; }?>>medium</option>
                <option value="coarse"<?php if( $coffeeBeanTable->Grind== 'coarse'){ echo 'selected'; }?>>coarse</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Country of Origin:</strong>
                <input type="text" name="Country_of_Origin" value="{{ $coffeeBeanTable->Country_of_Origin}}" class="form-control" placeholder="Country of Origin">
            </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('coffeeBeanTable.index') }}"> Back</a>
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </div> <br>
    </form>
@endsection

@extends('coffeeBeanTable.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Create a Coffee Bean Table Entry</h1>
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
    <form action="{{ route('coffeeBeanTable.store') }}" method="POST">
    @csrf
           <div class="row" >
              <div class="col-xs-12 col-sm-12 col-md-12" >
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="Name" class="form-control" placeholder="name" value={{old('Name')}} >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Caffeine Level:</strong>
                    <select name="Caffeine_Level"  class="form-control">
                    <option value="" {{ old('Caffeine_Level') == "" ? 'selected' : '' }} >--- Choose a Caffeine Level ---</option>
                    <option value="decaf" {{ old('Caffeine_Level') == "decaf" ? 'selected' : '' }} >decaf</option>
                    <option value="low" {{ old('Caffeine_Level') == "low" ? 'selected' : '' }} >low</option>
                    <option value="medium" {{ old('Caffeine_Level') == "medium" ? 'selected' : '' }} >medium</option>
                    <option value="high" {{ old('Caffeine_Level') == "high" ? 'selected' : '' }} >high</option>
                    </select>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cost/lb:</strong>
                    <input type="number" step="0.01" name="Cost_lb" class="form-control" placeholder="cost/lb" value={{old('Cost_lb')}}>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Bean Type:</strong>
                    <select name="Bean_Type"  class="form-control">
                    <option value="" {{ old('Bean_Type') == "" ? 'selected' : '' }} >--- Choose a Bean Type ---</option>
                    <option value="Arabica" {{ old('Bean_Type') == "Arabica" ? 'selected' : '' }} >Arabica</option>
                    <option value="Robusta" {{ old('Bean_Type') == "Robusta" ? 'selected' : '' }} >Robusta</option>
                    <option value="Liberca" {{ old('Bean_Type') == "Liberca" ? 'selected' : '' }} >Liberca</option>
                    <option value="Excelsa" {{ old('Bean_Type') == "Excelsa" ? 'selected' : '' }} >Excelsa</option>
                    <option value="Other" {{ old('Bean_Type') == "Other" ? 'selected' : '' }} >Other</option>
                    </select>
                 </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Roast:</strong>
                    <select id="Roast" name="Roast"  class="form-control">
                    <option value="" {{ old('Roast') == "" ? 'selected' : '' }} >--- Choose a Roast ---</option>
                    <option value="dark" {{ old('Roast') == "dark" ? 'selected' : '' }} >dark</option>
                    <option value="medium" {{ old('Roast') == "medium" ? 'selected' : '' }} >medium</option>
                    <option value="light" {{ old('Roast') == "light" ? 'selected' : '' }} >light</option>
                    <option value="french" {{ old('Roast') == "french" ? 'selected' : '' }} >french</option>
                    </select>
                 </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Grind:</strong>
                    <select name="Grind"  class="form-control">
                    <option value="" {{ old('Grind') == "" ? 'selected' : '' }} >--- Choose a Grind ---</option>
                    <option value="whole-bean" {{ old('Grind') == "whole-bean" ? 'selected' : '' }} > whole-bean</option>
                    <option value="fine" {{ old('Grind') == "fine" ? 'selected' : '' }} >fine</option>
                    <option value="medium" {{ old('Grind') == "medium" ? 'selected' : '' }} >medium</option>
                    <option value="coarse" {{ old('Grind') == "coarse" ? 'selected' : '' }} >coarse</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Country of Origin:</strong>
                <input type="text" name="Country_of_Origin" class="form-control" placeholder="country of origin" value={{old('Country_of_Origin')}}>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('coffeeBeanTable.index') }}"> Back</a>
            <button type="submit" class="btn btn-success">Submit</button>
            <br><br><br>
        </div> <br><br>
    </div>
    </form>
@endsection

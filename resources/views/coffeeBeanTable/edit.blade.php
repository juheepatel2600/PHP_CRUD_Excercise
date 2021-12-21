@extends('coffeeBeanTable.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit coffee Bean Table</h2>
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
                <strong>ID:</strong>
                <input type="number" name="id" value="{{ $coffeeBeanTable->id}}" class="form-control" placeholder="id">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="Name" value="{{ $coffeeBeanTable>Name}}" class="form-control" placeholder="name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Caffeine Level:</strong>
                <input type="text" name="Caffeine_Level" value="{{ $coffeeBeanTable->Caffeine_Level }}" class="form-control" placeholder="Caffeine Level">
            </div>
        </div>
            <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cost/lb:</strong>
                <input type="number" name="Cost/lb" value="{{ $coffeeBeanTable->Cost/lb}}" class="form-control" placeholder="Cost/lb">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bean Type:</strong>
                <input type="text" name="Bean_Type" value="{{ $coffeeBeanTable>Bean_Type}" class="form-control" placeholder="Bean Type">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Roast:</strong>
                <input type="text" name="Roast" value="{{ $coffeeBeanTable->Roast}}" class="form-control" placeholder="Roast">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Grind:</strong>
                <input type="text" name="Grind" value="{{ $coffeeBeanTable->Grind}" class="form-control" placeholder="Grind">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Roast:</strong>
                <input type="text" name="Country_of_Origin" value="{{ $coffeeBeanTable->Country_of_Origin}}" class="form-control" placeholder="Country of Origin">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('coffeeBeanTable.index') }}"> Back</a>
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </div>
    </form>
@endsection

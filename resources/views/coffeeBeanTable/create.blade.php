@extends('coffeeBeanTable.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create coffee Bean Table</h2>
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
    <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID:</strong>
                    <input type="number" name="ID" class="form-control" placeholder="id">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="Name" class="form-control" placeholder="name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Caffeine Level:</strong>
                <input type="text"  name="Caffeine Level" class="form-control" placeholder="caffeine level">
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cost/lb:</strong>
                    <input type="number" name="Cost/lb" class="form-control" placeholder="cost/lb">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Bean Type:</strong>
                    <input type="text" name="Bean Type" class="form-control" placeholder="bean Type">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Roast:</strong>
                <input type="text" name="Roast" class="form-control" placeholder="roast">
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Grind:</strong>
                    <input type="text" name="Grind" class="form-control" placeholder="grind">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Country of Origin:</strong>
                <input type="text" name="Country of Origin" class="form-control" placeholder="country of origin">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('coffeeBeanTable.index') }}"> Back</a>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
    </form>
@endsection

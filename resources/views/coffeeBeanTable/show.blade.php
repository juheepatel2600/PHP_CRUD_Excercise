@extends('coffeeBeanTable.layout')
@section('content')
    <br><br>
    <div class="row text-center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3> coffee Bean Table Detail </h3>
            </div>
        </div>
    </div><br>
    <div class="row text-center">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID:</strong>
                {{ $coffeeBeanTable->id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $coffeeBeanTable->Name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Caffeine Level:</strong>
                {{ $coffeeBeanTable->Caffeine Level }}
            </div>
        </div>
            <div class="row text-center">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cost/lb:</strong>
                {{ $coffeeBeanTable->Cost/lb}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bean Type:</strong>
                {{ $coffeeBeanTable->Bean Type}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Roast:</strong>
                {{ $coffeeBeanTable->Roast }}
            </div>
        </div>
            <div class="row text-center">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Grind:</strong>
                {{ $coffeeBeanTable->Grind }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Country of Origin:</strong>
                {{ $coffeeBeanTable->Country of Origin }}
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a class="btn btn-primary" href="{{ route('coffeeBeanTable.index') }}"> Back</a>
        </div>
    </div>
@endsection

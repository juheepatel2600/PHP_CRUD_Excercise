

@extends('coffeeBeanTable.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Create coffee Bean Table</h1>
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
                    <input type="text" name="Name" class="form-control" placeholder="name" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Caffeine Level:</strong>
<select id="Caffeine Level" name="Caffeine Level"  class="form-control">
  <option value="decaf">decaf</option>
  <option value="low">low</option>
  <option value="medium">medium</option>
  <option value="high">high</option>
</select>

</div>
</div>



        
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cost lb:</strong>
                    <input type="number" min="1" name="Cost_lb" class="form-control" placeholder="cost/lb">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bean Type:</strong>
<select id="Bean Type" name="Bean Type"  class="form-control">
  <option value="Arabica">Arabica</option>
  <option value="Robusta">Robusta</option>
  <option value="Liberca">Liberca</option>
  <option value="Excelsa">Excelsa</option>
  <option value="Other">Other</option>
</select>

</div>
</div>



<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Roast:</strong>
<select id="Roast" name="Roast"  class="form-control">
  <option value="dark">dark</option>
  <option value="medium">medium</option>
  <option value="light">light</option>
  <option value="french">french</option>
</select>

</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Grind:</strong>
<select id="Grind" name="Grind"  class="form-control">
  <option value=" whole-bean"> whole-bean</option>
  <option value="fine">fine</option>
  <option value="medium">medium</option>
  <option value="coarse">coarse</option>
</select>

</div>
</div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Country of Origin:</strong>
                <input type="text" name="Country_of_Origin" class="form-control" placeholder="country of origin">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('coffeeBeanTable.index') }}"> Back</a>
            <button type="submit" class="btn btn-success">Submit</button>
            <br>
        <br>
<br>
        </div>

        
        

    </div>
    </form>
@endsection

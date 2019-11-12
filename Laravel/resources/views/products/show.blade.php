@extends('products.layout')
@section('content')
    <div class="row" >
        <div class="col-lg-12 margin-tb">
            <div class="pull-left my-4">
                <h2> {{ $product->name }}</h2>
            </div>

            <div class="pull-right">
            <div class="row" >
            <div class="col-lg-4">
                <a class="btn btn-primary mb-4" href="{{ route('products.index') }}"> zurück</a>
                </div>
                <div class="col-lg-3 offset-5">
                <a class="btn btn-info mb-4" href="{{ route('products.edit',$product->id) }}">Bearbeiten</a>
                <button type="submit" class="btn btn-danger mb-4">Löschen</button>
                </div>
                </div>
            </div>
        </div>


    </div>
    <div class="container" style="background-color: White; padding-top: 25px">
    <div class="row" >
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <p><strong>Dauer:</strong>
                {{ $product->dauer }}</p>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <img src="{{ $product->img }}" class="card-img-top" alt="..." style="height: 500px; width: auto">
                
            </div>
        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <p><strong>Zutaten:</strong><br>
                
                <!-- hier fehlt noch foreach-schleife -->
                    <ul>
                    
                        <li> {{ $product->zutaten }} </li>
                     
                    </ul>
                
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <p><strong>Zubereitung:</strong><br>
                {{ $product->detail }}</p>
            </div>
        </div>
        </div>
    </div>
@endsection
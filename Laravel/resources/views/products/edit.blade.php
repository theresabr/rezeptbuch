@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left my-4">
                <h2>Rezept bearbeiten</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary mb-4" href="{{ route('products.index') }}"> Zurück</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ups!</strong> Die ist bei der Eingabe ein Fehler unterlaufen.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kurzbeschreibung:</strong>
                    <textarea class="form-control" style="height:150px" name="kurzbeschreibung" placeholder="Kurzbeschreibung">{{ $product->kurzbeschreibung }}</textarea>
                </div>
            </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Dauer:</strong>
                    <textarea class="form-control" style="height:150px" name="dauer" placeholder="Daueren">{{ $product->dauer }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Zutaten:</strong>
                    <textarea class="form-control" style="height:150px" name="zutaten" placeholder="Zutaten">{{ $product->zutaten }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Zubereitung:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Zubereitung">{{ $product->detail }}</textarea>
                </div>
            </div>

 

            <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="margin-bottom:50px">
              <button type="submit" class="btn btn-primary">Speichern</button>
            </div>
        </div>

    </form>
@endsection
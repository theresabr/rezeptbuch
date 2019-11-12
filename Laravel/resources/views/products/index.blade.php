@extends('products.layout')

<!-- was hier steht kommt layout wo steht yield -->
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left my-4">
                <h1>Mein erstes Laravel-Projekt</h1>
            </div>
            <div class="pull-right mb-4">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Neues Rezept anlegen</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Nr.</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Aktion</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Details</a>

                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Bearbeiten</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Löschen</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $products->links() !!}

<div class="row">
@foreach($products as $product)
<div class="col-4" >
<div class="card" style="width: 18rem; margin-bottom: 100px;">
  <a href="{{ route('products.show',$product->id) }}"> <img src="{{$product->img}}" class="card-img-top" alt="..." style="height: 300px; width: 100%;"></a>
  <div class="card-body">
    <h5 class="card-title">{{$product->name}}</h5>
    <p class="card-text">{{$product->kurzbeschreibung}}</p>
    <a href="{{ route('products.show',$product->id) }}" class="btn btn-primary">Zum Rezept</a>
  </div>
</div>
</div>
@endforeach
</div>  


@endsection
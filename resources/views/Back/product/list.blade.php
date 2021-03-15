@extends('back.layout.app')
@section('Title')
Mehsullar
@endsection
@section('content')

<!-- Example Basic -->

<h4 class="example-title">Product</h4>

<div class="example table-responsive">
    <a class="btn btn-success" href="{{ route('product.create') }}"><i class="fas fa-plus"></i></a>
    @isset($products)


    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Mehsul adi</th>
                <th>Mehsul sekli </th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->title_az }}</td>
                <td><img src="{{ asset( $product->image ) }}" target="_blank" style="width: 100px;height:100px" alt=""
                        id="profile-img"> </td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <div class="col-6">
                            <a href="{{ route('product.edit',$product->id) }} " class="btn btn-secondary " role="button"
                                aria-pressed="true"><i class="fas fa-pen" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-6">
                            <form method="Post" action="{{ route('product.destroy',$product->id) }}">
                                @csrf
                                @method('Delete')
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"
                                        aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </td>

            </tr>
            @endforeach


            </td>
            </tr>
        </tbody>
    </table>
    @endisset
</div>

@endsection



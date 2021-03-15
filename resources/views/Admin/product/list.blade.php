<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mehsullar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">{{ $message }}</div>
        @endif
            <a href="{{ route('product.create') }}" class="btn btn-success "><i class="fas fa-pencil-alt"></i>

            </a>

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @if ($products)
                        @foreach ($products as $product)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $product->title_az }}</td>

                            <td> <img src="{{ asset( $product->image ) }}" target = "_blank" style="width: 40px" alt=""> </td>
                            <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('product.edit',$product->id) }}" class="btn  btn-primary"><i class="fas fa-edit"></i></a>
                                <form method="Post" action="{{ route('product.destroy',$product->id) }}">
                                    @csrf
                                    @method('Delete')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </div>
                            </td>
                          </tr>
                        @endforeach
                    @endif
                </tbody>
              </table>


        </div>
    </div>
</x-app-layout>

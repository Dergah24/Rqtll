@extends('back.layout.app')
@section('content')


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">{{ $message }}</div>
        @endif
            <a href="{{ route('slider.create') }}" class="btn btn-success "><i class="fas fa-plus"></i></a>
            @isset($sliders)
            <table class="table">
                <thead>

                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>



                    @foreach ($sliders as $slider)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $slider->title_az }}</td>
                        <td>{{ $slider->desc_az }}</td>
                        <td> <img src="{{ asset( $slider->image ) }}" target = "_blank" style="width: 40px" alt=""> </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">

                                    <div class="col-6">
                                        <a href="{{ route('slider.edit',$slider->id) }}" class="btn  btn-primary"><i class="fas fa-edit"></i></a>
                                    </div>

                                    <div class="col-6">
                                        <form method="Post" action="{{ route('slider.destroy',$slider->id) }}">
                                            @csrf
                                            @method('Delete')
                                            <button type="submit" class="btn  btn-danger"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </div>


                            </div>
                        </td>
                      </tr>
                    @endforeach

                </tbody>
              </table>
              @endisset
        </div>
    </div>
@endsection

@extends('back.layout.app')
@section('page-name')
Galery
@endsection
@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto  lg:px-8">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <a href="#" data-toggle="modal" data-target="#exampleModalLong" class="btn btn-success " data-toggle="modal"
            data-target="#exampleModal"><i class="site-menu-icon wb-plus" aria-hidden="true"></i></a>
        <div class="col-12">
            <div class="container">
                <div class="row">
                    @foreach ($dates as $date)
                    <div class="col-2 ">
                        <div class="card ">
                            <strong>
                                <h4 class="cart-title">{{ $date->title }}</h4>
                            </strong>
                            <div class=""  width="100px" >
                                <img class="card-img-top center  " width="80px" height="80px" src="{{ asset('image/'.$date->image) }}"
                                style="width:80px" alt="{{ $date->title }}">
                                <div class="row">

                                       <div class="col-6">
                                        <a class="btn btn-sm btn-success " data-target="#edit{{ $date->id }}" class="btn btn-success "
                                            data-toggle="modal" data-target="#edit{{ $date->id }}">
                                            <i class="fas fa-edit" aria-hidden="true"></i>
                                        </a>
                                       </div>
                                       <div class="col-6">
                                        <form method="Post" action="{{ route('galery.destroy',$date->id) }}">
                                            @csrf
                                            @method('Delete')
                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"
                                                    aria-hidden="true"></i></button>
                                        </form>
                                       </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="edit{{ $date->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <!-- Edit modal-->
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle{{ $date->id }}">Galery Image Edit</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('galery.update',$date->id) }}" method="Post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('Put')
                                        <div class="mb-3">
                                            <label for="title" class="form-label">GAlery Image  Name</label>
                                            <input type="text" class="form-control" value="{{ $date->title }}" name="title">
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col">

                                                <img src="{{ asset('image/'.$date->image)}}" style="width: 50px">
                                            </div>
                                            <div class="mb-3 col">
                                                <label for="image" class="form-label">Galery Image</label>
                                                <input type="file" class="form-control" id="image" name="image">
                                            </div>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Ceate Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Galery Image Insert</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('galery.store') }}" method="Post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Galery Image Name</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Galery Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

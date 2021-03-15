<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mehsul Yenileme') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
           @endif
            <form method="post" action="{{ route('product.update',$product->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Azerbaycan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">Русский</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">English</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="col az ">
                            <div class="mb-3 ">
                                <label for="Title" class="form-label">Title Az</label>
                                <input type="text" name="title_az" value="{{ $product->title_az }}" required class="form-control"
                                    id="Title" placeholder="Title">
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="col   ">
                            <div class="mb-3">
                                <label for="Title" class="form-label">Title Ru</label>
                                <input type="text" name="title_ru" value="{{ $product->title_ru }}" class="form-control"
                                    id="Title" placeholder="Title">
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="col ">
                            <div class="mb-3">
                                <label for="Title" class="form-label">Title En</label>
                                <input type="text" name="title_en" value="{{ $product->title_az}}" required class="form-control"
                                    id="Title" placeholder="Title">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row ">
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="col-xs-3 col-sm-1">
                            <img src='{{ asset($product->image) }}'
                                 alt="Profile Picture" class="img-responsive img-rounded"
                                 style="max-height: 80px; max-width: 80px;">
                          </div>

                    </div>
                  <div class="col-6">
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control"  id="image">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
    @endsection
@extends('back.layout.app')
@section('content')



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
            <form method="post" action="{{ route('slider.update',$slider->id) }}" enctype="multipart/form-data">
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
                                <input type="text" name="title_az" value="{{ $slider->title_az }}" required class="form-control"
                                    id="Title" placeholder="Title">
                            </div>
                            <div class="mb-3">
                                <label for="desc" class="form-label">Decription Az</label>
                                <textarea name="desc_az" id="" cols="20" rows="5" required class="form-control"
                                    id="desc">{{ $slider->desc_az }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="col   ">
                            <div class="mb-3">
                                <label for="Title" class="form-label">Title Ru</label>
                                <input type="text" name="title_ru" value="{{ $slider->title_ru }}" class="form-control"
                                    id="Title" placeholder="Title">
                            </div>
                            <div class="mb-3">
                                <label for="desc" class="form-label">Decription Ru</label>
                                <textarea name="desc_ru" id="" cols="20" rows="5" class="form-control"
                                    id="desc">{{ $slider->desc_ru}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="col ">
                            <div class="mb-3">
                                <label for="Title" class="form-label">Title En</label>
                                <input type="text" name="title_en" value="{{ $slider->title_az}}" required class="form-control"
                                    id="Title" placeholder="Title">
                            </div>
                            <div class="mb-3">
                                <label for="desc" class="form-label">Decription En</label>
                                <textarea name="desc_en" id="" cols="20" rows="5" required class="form-control"
                                    id="desc">{{ $slider->desc_ru }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="col-4">
                            <div class="mb-3 ">
                                <label for="link" class="form-label">Link </label>
                                <input type="text" name="link" value="{{ $slider->link }} " required class="form-control"
                                    id="Title" placeholder="Link">
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="link" class="form-label">Slider Image </label>
                        <div class="col-xs-3 col-sm-1">

                            <img src='{{ asset($slider->image) }}'
                                 alt="Profile Picture" class="img-responsive img-rounded"
                                 style="max-height: 80px; max-width: 80px;">
                          </div>

                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control"  name="image">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection

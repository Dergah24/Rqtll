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
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link active"
                                data-toggle="tab" href="#exampleTabsOne" aria-controls="exampleTabsOne"
                                role="tab">Azerbaycan</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab"
                                href="#exampleTabsTwo" aria-controls="exampleTabsTwo" role="tab">Русский</a>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab"
                                href="#exampleTabsThree" aria-controls="exampleTabsThree"
                                role="tab">English</a></li>
                    </ul>
                </div>
                <div class="tab-content pt-20">
                    <div class="tab-pane active" id="exampleTabsOne" role="tabpanel">
                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="col az ">
                                <div class="mb-3 ">
                                    <label for="Title" class="form-label">Title (AZ)</label>
                                    <input type="text" name="title_az" value="{{ $slider->title_az }}"
                                        required class="form-control" placeholder="Title">
                                </div>
                                <div class="mb-3">
                                    <label for="desc" class="form-label">Decription (AZ)</label>
                                    <textarea name="desc_az" cols="20" rows="5"
                                        class="form-control">{{ $slider->desc_az }}</textarea>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="exampleTabsTwo" role="tabpanel">
                        <div class="col   ">
                            <div class="mb-3">
                                <label for="Title" class="form-label">Title (RU)</label>
                                <input type="text" name="title_ru" value="{{ $slider->title_ru }}"
                                    class="form-control" placeholder="Title">
                            </div>
                            <div class="mb-3">
                                <label for="desc" class="form-label">Decription (RU)</label>
                                <textarea name="desc_ru" cols="20" rows="5"
                                    class="form-control">{{$slider->desc_ru }}</textarea>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane" id="exampleTabsThree" role="tabpanel">
                        <div class="col ">
                            <div class="mb-3">
                                <label for="Title" class="form-label">Title En</label>
                                <input type="text" name="title_en" value="{{ $slider->title_en }}"
                                    class="form-control" placeholder="Title">
                            </div>
                            <div class="mb-3">
                                <label for="desc" class="form-label">Decription En</label>
                                <textarea name="desc_en" cols="20" rows="5"
                                    class="form-control">{{$slider->desc_en }}</textarea>
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






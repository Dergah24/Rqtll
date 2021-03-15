@extends('back.layout.app')
@section('title')
    Slayder
@endsection
@section('content')



    <div class="py-12">
        @include('sweetalert::alert')
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
            <form method="post" action="{{ route('slider.store') }}" enctype="multipart/form-data">
                @csrf
               

<div class="py-12">
    @include('sweetalert::alert')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
        <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
            @csrf
            <!-- Example Tabs -->
            <div class="example-wrap">
                <div class="nav-tabs-horizontal" data-plugin="tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab"
                                href="#exampleTabsOne" aria-controls="exampleTabsOne" role="tab">Azerbaycan</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab"
                                href="#exampleTabsTwo" aria-controls="exampleTabsTwo" role="tab">Русский</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab"
                                href="#exampleTabsThree" aria-controls="exampleTabsThree" role="tab">English</a></li>
                    </ul>
                    <div class="tab-content pt-20">
                        <div class="tab-pane active" id="exampleTabsOne" role="tabpanel">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="col az ">
                                    <div class="mb-3 ">
                                        <label for="Title" class="form-label">Title (AZ)</label>
                                        <input type="text" name="title_az" value="{{ old('title_az') }}" required
                                            class="form-control" placeholder="Title">
                                    </div>
                                    <div class="mb-3">
                                        <label for="desc" class="form-label">Decription (AZ)</label>
                                        <textarea name="desc_az"  cols="20" rows="5" class="form-control"
                                            >{{ old('desc_az') }}</textarea>
                                    </div>
        
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="exampleTabsTwo" role="tabpanel">
                            <div class="col   ">
                                <div class="mb-3">
                                    <label for="Title" class="form-label">Title (RU)</label>
                                    <input type="text" name="title_ru" value="{{ old('title_ru') }}"
                                        class="form-control"  placeholder="Title">
                                </div>
                                <div class="mb-3">
                                    <label for="desc" class="form-label">Decription (RU)</label>
                                    <textarea name="desc_ru"  cols="20" rows="5" class="form-control"
                                       >{{ old('desc_ru') }}</textarea>
                                </div>
    
                            </div>
                        </div>
                        <div class="tab-pane" id="exampleTabsThree" role="tabpanel">
                            <div class="col ">
                                <div class="mb-3">
                                    <label for="Title" class="form-label">Title En</label>
                                    <input type="text" name="title_en" value="{{ old('title_en') }}"
                                        class="form-control" placeholder="Title">
                                </div>
                                <div class="mb-3">
                                    <label for="desc" class="form-label">Decription En</label>
                                    <textarea name="desc_en"  cols="20" rows="5" class="form-control"
                                        >{{ old('desc_en') }}</textarea>
                                </div>
    
                            </div>

                        </div>
                    </div>
                </div>
               <div class="row">
                <div class="col-6">
                    <div class="mb-3 ">
                        <label for="link" class="form-label">Link </label>
                        <input type="text" name="link" value="{{ old('link') }} " class="form-control"
                            id="link" placeholder="Link">
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file"   class="form-control" name="image">
                    </div>
                
                </div>
                <div class="col-3">
                  
                </div>
                
               </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
</div>

@endsection




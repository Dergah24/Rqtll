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
            <form method="post" action="{{ route('product.update',$product->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

               <!-- Example Tabs -->
               <div class="example-wrap">
                <div class="nav-tabs-horizontal" data-plugin="tabs">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#exampleTabsOne"
                        aria-controls="exampleTabsOne" role="tab">Azerbaycan</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsTwo"
                        aria-controls="exampleTabsTwo" role="tab">Русский</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsThree"
                        aria-controls="exampleTabsThree" role="tab">English</a></li>


                  </ul>
                  <div class="tab-content pt-20">
                      <!-- Az tab -->
                    <div class="tab-pane active" id="exampleTabsOne" role="tabpanel">
                        <div class="col az ">
                            <div class="mb-3 ">
                                <label for="Title" class="form-label">Title Az</label>
                                <input type="text" name="title_az" value="{{ $product->title_az }}" required class="form-control"
                                    id="Title" placeholder="Title">
                            </div>

                        </div>
                    </div>
                     <!-- Ru tab -->
                    <div class="tab-pane" id="exampleTabsTwo" role="tabpanel">
                        <div class="col   ">
                            <div class="mb-3">
                                <label for="Title" class="form-label">Title Ru</label>
                                <input type="text" name="title_ru" value="{{ $product->title_ru }}" class="form-control"
                                    id="Title" placeholder="Title">
                            </div>

                        </div>
                    </div>
                     <!-- Az tab -->
                    <div class="tab-pane" id="exampleTabsThree" role="tabpanel">
                        <div class="col ">
                            <div class="mb-3">
                                <label for="Title" class="form-label">Title En</label>
                                <input type="text" name="title_en" value="{{ $product->title_en}}" required class="form-control"
                                    id="Title" placeholder="Title">
                            </div>
                        </div>
                    </div>

                  </div>
                </div>
                <!-- Image  -->
                <div class="row">
                    <div class="col-6">
                        <div class="col-xs-3 col-sm-1">
                            <img src='{{ asset($product->image) }}'
                                 alt="Product Picture" class="img-responsive img-rounded"
                                 id="blah" alt="your image" width="100" height="100">
                          </div>

                    </div>
                  <div class="col-6">
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control"  id="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>



            </form>
        </div>
    </div>


            </div>
    @endsection

@extends('back.layout.app')

@section('title')
Contact Creat
@endsection
@section('content')


<div class="py-12">
    <h3>Contact create</h3>
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
        <form method="post" action="{{ route('contact.update',$contact->id) }}" enctype="multipart/form-data">
            @csrf
            @method('Put')


                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <div class="input-group input-group-icon">
                              <span class="input-group-addon">
                                <span class="icon wb-home" aria-hidden="true"></span>
                              </span>
                              <input type="text" class="form-control" name="address" placeholder="Address" value="{{ $contact->address }}">
                            </div>
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="input-group input-group-icon">
                              <span class="input-group-addon">
                                <span class="icon wb-envelope" aria-hidden="true"></span>
                              </span>
                              <input type="text" class="form-control" placeholder="Email" name="email" value="{{ $contact->email }}">
                            </div>
                          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="input-group input-group-icon">
                              <span class="input-group-addon">
                                <span class="fas fa-phone-alt" aria-hidden="true"> </span>+994
                              </span>
                              <input type="text" class="form-control" placeholder="Phone Namber" name="tel1" value="{{  $contact->tel1 }}">
                            </div>
                          </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col">
                        <div class="form-group">
                            <div class="input-group input-group-icon">
                              <span class="input-group-addon">
                                <span class="fas fa-phone-alt" aria-hidden="true"> </span>+994
                              </span>
                              <input type="text" class="form-control" placeholder="Phone namber" name="tel2" value="{{ $contact->tel2 }}">
                            </div>
                          </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col">
                        <div class="form-group">
                            <div class="input-group input-group-icon">
                              <span class="input-group-addon">
                                <span class="fas fa-phone-alt" aria-hidden="true"> </span>+994
                              </span>
                              <input type="text" class="form-control" placeholder="Phone Namber" name="tel3" value="{{ $contact->tel3 }}">
                            </div>
                          </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <div class="input-group input-group-icon">
                              <span class="input-group-addon">
                                <span class="fab fa-facebook" aria-hidden="true"></span>
                              </span>
                              <input type="text" class="form-control" placeholder="Facebook link" name='facebook' value="{{ $contact->facebook }}">
                            </div>
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="input-group input-group-icon">
                              <span class="input-group-addon">
                                <span class="fab fa-instagram" aria-hidden="true"></span>
                              </span>
                              <input type="text" class="form-control" placeholder="Instagram link" name="insta" value="{{ $contact->insta }}">
                            </div>
                          </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <div class="input-group input-group-icon">
                              <span class="input-group-addon">
                                <span class="fab fa-twitter" aria-hidden="true"></span>
                              </span>
                              <input type="text" class="form-control" placeholder="Twitter link" name="twitter" value="{{ $contact->twitter }}">
                            </div>
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="input-group input-group-icon">
                              <span class="input-group-addon">
                                <span class="fab fa-linkedin" aria-hidden="true"></span>
                              </span>
                              <input type="text" class="form-control" placeholder="Linkedin link" name="linkedin" value="{{  $contact->linkedin }}">
                            </div>
                          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="input-group input-group-icon">
                              <span class="input-group-addon">
                                <span class="fas fa-map-marker-alt" aria-hidden="true"></span>
                              </span>
                              <input type="text" class="form-control" placeholder="Google map location" name="maplink" value="{{  $contact->maplink }}">
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-success">Save Contact</button>
                    </div>
                </div>







        </form>
    </div>
</div>





</div>
@endsection



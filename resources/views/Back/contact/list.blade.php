@extends('back.layout.app')
@section('page-name')
    Mehsullar
@endsection
@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">{{ $message }}</div>
        @endif
            <a href="{{ route('contact.edit',$contact->id) }}" class="btn btn-success  "><i class="site-menu-icon wb-pencil" aria-hidden="true"></i></a>

            <table class="table">
                <thead>
                  <tr>

                    <th scope="col">Unvan</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefon 1</th>
                    <th scope="col">Telefon 2</th>
                    <th scope="col">Telefon 3</th>
                    <th scope="col"> Facebook</th>
                    <th scope="col">Insatagram</th>
                    <th scope="col">Linkedin</th>
                    <th scope="col">twitter</th>
                    <th scope="col">location</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>

                        <td >{{ \Illuminate\Support\Str::limit($contact->address,  10, $end = '...')  }}</td>
                        <td >{{ $contact->email }}</td>
                        <td >{{ $contact->tel1 }}</td>
                        <td >{{ $contact->tel2 }}</td>
                        <td >{{ $contact->tel3 }}</td>
                        <td >{{  \Illuminate\Support\Str::limit($contact->facebook,  10, $end = '...') }}</td>
                        <td >{{  \Illuminate\Support\Str::limit($contact->insta,  10, $end = '...') }}</td>
                        <td >{{  \Illuminate\Support\Str::limit($contact->linkedin,  10, $end = '...') }}</td>
                        <td >{{ \Illuminate\Support\Str::limit($contact->twitter,  10, $end = '...') }}</td>
                        <td >{{ \Illuminate\Support\Str::limit($contact->maplink,  10, $end = '...') }}</td>
                    </tr>
                </tbody>
              </table>


        </div>
    </div>

    @endsection


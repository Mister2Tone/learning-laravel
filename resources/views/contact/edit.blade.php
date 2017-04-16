@extends('template')

@section('title','Contact')

@section('content')
    
 	<a name="alertValidate"></a>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Edit Contact</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form name="sentMessage" id="contactForm" action="/contacts/{{$contact->id}}" method="POST" role="form" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" id="name" value="{{ $contact->name }}">
                                <p class="help-block text-danger" id="nameHelp"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="email">Email Address</label>
                                <input type="text" class="form-control" placeholder="Email Address" name="email" id="email" value="{{ $contact->email }}">
                                <p class="help-block text-danger" id="emailHelp"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control" placeholder="Phone Number" name="phone" id="phone" value="{{ $contact->phone }}">
                                <p class="help-block text-danger" id="phoneHelp"></p>
                            </div>
                        </div>
                        <input type="hidden" name="_method" value="PUT">
                        {{csrf_field()}}
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="fsorm-group col-xs-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg" id="submitBtn">Edit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

   
@endsection
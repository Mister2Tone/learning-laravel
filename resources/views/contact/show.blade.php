@extends('template')

@section('title', 'Contact')

@section('content')
	<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Show Contact</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                	<div class="">
                        <h1>Name: {{$contact->name}}</h1>
                        <h1>Email: {{$contact->email}}</h1>
                        <h1>Phone: {{$contact->phone}}</h1> 
                    </div>
                    
                    
                	<div class="row">
                        <div class="fsorm-group col-xs-12 text-center">
                            <button type="button" class="btn btn-primary btn-lg" id="indexBtn" onclick="index_contact()">Back</button>
                        </div>
                    </div>
                  
                    
                </div>
            </div>
        </div>
    </section>

    <script>
    	function index_contact(){
    		document.location = "/contacts";
    	}
    </script>
	
@endsection
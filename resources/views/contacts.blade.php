@extends('template')

@section('title', 'Contact List')

@section('content')
	<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact List</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                	@if(count($contacts) == 0) 
                        <h1>Don't have data in DB, please inform your contact first.</h1>
                    @endif
                    <table class="table table-hover table-bordered">
                		<tr>
                			<th>#</th>
                			<th>Name</th>
                			<th>Email</th>
                			<th>Phone</th>
                		</tr>

                		@foreach($contacts as $index => $item)
                		<tr>
                			<td>{{++$index}}</td>
                			<td>{{ $item->name }}</td>
                			<td>{{ $item->email }}</td>
                			<td>{{ $item->phone }}</td>
                		</tr>
    					@endforeach 
                	</table>
                	<div class="row">
                        <div class="fsorm-group col-xs-12 text-center">
                            <button type="button" class="btn btn-primary btn-lg" id="createBtn" onclick="create_contact()">Create</button>
                        </div>
                    </div>
                  
                    
                </div>
            </div>
        </div>
    </section>

    <script>
    	function create_contact(){
    		document.location = "/contacts/create";
    	}
    </script>
	
@endsection
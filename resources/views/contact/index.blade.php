@extends('template')

@section('title', 'Contact')

@section('content')
    <div style="margin-top:3em;"></div>
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
                            <th>Operation</th>
                		</tr>

                		@foreach($contacts as $index => $item)
                		<tr>
                			<td>{{ $PAGE_CAPACITY*($page-1) + ($index+1) }}</td>
                			<td>{{ $item->name }}</td>
                			<td>{{ $item->email }}</td>
                			<td>{{ $item->phone }}</td>
                            <td>    
                                <form action="contacts/{{$item->id}}" method="post" class="form-inline">
                                    <a href="contacts/{{$item->id}}" class="btn btn-primary">Show</a>
                                    <a href="contacts/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                		</tr>
    					@endforeach 
                	</table>
                    <div class="text-center">
                        {{ $contacts->links() }}
                    </div>
                    
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
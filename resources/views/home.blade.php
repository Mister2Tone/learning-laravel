@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!<br>
                    <div style="color:green; font-weight:bold;">Wait about <span id="countDown"></span> second then going to another page</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var count = 3;
    document.getElementById('countDown').innerHTML = count;
    setInterval(function(){
        count--;
        document.getElementById('countDown').innerHTML = count;
        if (count == 0) {
            window.location = '/contacts'; 
        }
    },1000);
</script>
@endsection

@if( \Illuminate\Support\Facades\Session::has("success") )
    <div class="alert alert-success success no-print" style="color: green" role="alert" id="flash-messages-success">
        {{ \Illuminate\Support\Facades\Session::get("success") }}
    </div>
@endif

@if( \Illuminate\Support\Facades\Session::has("error") )
    <div class="alert alert-danger success no-print" style="color: red" role="alert" id="flash-messages-error">
        {!! \Illuminate\Support\Facades\Session::get("error") !!}
    </div>
@endif

@if( \Illuminate\Support\Facades\Session::has("success-flash") )
    <div class="alert alert-success success no-print" role="alert">
        <button class="close" data-dismiss="alert">×</button>
        {{ \Illuminate\Support\Facades\Session::get("success-flash") }}
    </div>
@endif
@if( \Illuminate\Support\Facades\Session::has("error-flash") )
    <div class="alert alert-danger success no-print" role="alert">
        <button class="close" data-dismiss="alert">×</button>
        {!! \Illuminate\Support\Facades\Session::get("error-flash") !!}
    </div>
@endif

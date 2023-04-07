@if (session()->has('success'))
<div class="alert alert-icon alert-inverse-success mt-5" role="alert">
    <i class="fa fa-info-circle"></i> {{ session()->get('success') }}!
</div>
@endif


@if(session()->has('error'))
<div class="alert alert-icon alert-inverse-danger mt-5" role="alert">
    <i class="fa fa-info-circle"></i> {{ session()->get('error') }}!
</div>
@endif

{{-- executes when we registered successfully --}}
@if (@session('run'))
<div class="alert alert-success">{{session('run')}}
</div>
@endif
@if (@session('success'))
<div class="alert alert-success">{{session('success')}}
</div>
@endif

{{-- executes when error is found in email and passwords --}}
@if (@session('error'))
<div class="alert alert-danger">{{session('error')}}
</div>
@endif
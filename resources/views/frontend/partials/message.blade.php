@if(session()->get('success'))
<div class="alert alert-success alert-dismissable">
	<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
	{{ session()->get('success') }}  
</div>
@endif

@if(session()->get('error'))
<div class="alert alert-danger alert-dismissable">
	<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    {{ session()->get('error') }}  
</div>
@endif
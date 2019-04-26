@if(session('message'))
	<script>
	$(document).ready(function(){
		swal('Success',"{{ session('message') }}",'success');
	});
</script>
@endif
@if(session('info'))
	<script>
	$(document).ready(function(){
		swal('Success',"{{ session('info') }}",'info');
	});
</script>
@endif
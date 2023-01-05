<script>
$(document).ready(function(){
	$('#modalOpenLg').on('show.bs.modal', function(e){
		var id = $(e.relatedTarget).data('id');
		var type = $(e.relatedTarget).data('type');

		if(type=='addDean'){var link ="php/sao/faculty/modal/dean_add.php";}
		if(type=='assignDean'){var link ="php/sao/faculty/modal/dean_assign.php";}
		
		$.get(link, function(returnData){
			$('#modalOpenLgBody').html(returnData);
		});
	});
	$('#modalOpenMd').on('show.bs.modal', function(e){
		var id = $(e.relatedTarget).data('id');
		var type = $(e.relatedTarget).data('type');
		
		if(type=='updFacultyStatus'){var link ="php/sao/faculty/modal/faculty_status_update.php?faculty_id="+id;}

		if(type=='updFaculty'){var link ="php/sao/faculty/modal/faculty_upd.php?faculty_id="+id;}

		$.get(link, function(returnData){
			$('#modalOpenMdBody').html(returnData);
		});
	});
	$('#modalOpenSm').on('show.bs.modal', function(e){
		var id = $(e.relatedTarget).data('id');
		var type = $(e.relatedTarget).data('type');


		$.get(link, function(returnData){
			$('#modalOpenSmBody').html(returnData);
		});
	});
	$('#modalOpenMd').on('show.bs.modal', function(e){
		var id = $(e.relatedTarget).data('id');
		var type = $(e.relatedTarget).data('type');
		if(type=='updFacultyStatus'){var link ="php/sao/faculty/modal/faculty_status_update.php?faculty_id="+id;}
		if(type=='updFaculty'){var link ="php/sao/faculty/modal/faculty_update.php";}
		$.get(link, function(returnData){
			$('#modalOpenMdBody').html(returnData);
		});
	});

});
</script>
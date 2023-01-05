<script>
$(document).ready(function(){
	$('#modalOpenLg').on('show.bs.modal', function(e){
		var id = $(e.relatedTarget).data('id');
		var type = $(e.relatedTarget).data('type');

		if(type=='addFaculty'){var link ="php/faculty/faculty/modal/faculty_add.php";}
		if(type=='assignProgramHead'){var link ="php/faculty/faculty/modal/program_head_assign.php";}
		
		$.get(link, function(returnData){
			$('#modalOpenLgBody').html(returnData);
		});
	});
	$('#modalOpenMd').on('show.bs.modal', function(e){
		var id = $(e.relatedTarget).data('id');
		var type = $(e.relatedTarget).data('type');
		
		if(type=='updFacultyStatus'){var link ="php/faculty/faculty/modal/faculty_status_update.php?faculty_id="+id;}

		if(type=='updFaculty'){var link ="php/faculty/faculty/modal/faculty_upd.php?faculty_id="+id;}

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
<script>
	$(document).ready(function(){
		$('#modalOpenMd').on('show.bs.modal', function(e){
			var id = $(e.relatedTarget).data('id');
			var type = $(e.relatedTarget).data('type');

			if(type=='updStudent'){var link ="php/sao/student/modal/student_upd.php?student_id="+id;}
			if(type=='updStudStatus'){var link ="php/sao/student/modal/student_upd.php?student_id="+id;}
			
			if(type=='updStudView'){var link ="php/sao/student/modal/student_view.php?student_id="+id;}
			
			$.get(link, function(returnData){
				$('#modalOpenMdBody').html(returnData);
			});
		});
	})
</script>
<script>
	$(document).ready(function(){
		$('#modalOpenLg').on('show.bs.modal', function(e){
			var id = $(e.relatedTarget).data('id');
			var type = $(e.relatedTarget).data('type');

			if(type=='updReport'){var link ="php/sao/report/modal/report_upd.php?report_id="+id;}
			if(type=='forwardReport'){var link ="php/sao/report/modal/report_forward.php?report_id="+id;}
			if(type=='enlargePhoto'){var link ="php/sao/report/modal/enlargephoto.php?src="+id;}

			$.get(link, function(returnData){
				$('#modalOpenLgBody').html(returnData);
			});
		});


	})
</script>
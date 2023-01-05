<script>
	$(document).ready(function(){
		$('#modalOpenLg').on('show.bs.modal', function(e){
			var id = $(e.relatedTarget).data('id');
			var type = $(e.relatedTarget).data('type');


			$.get(link, function(returnData){
				$('#modalOpenLgBody').html(returnData);
			});
		});
		$('#modalOpenMd').on('show.bs.modal', function(e){
			var id = $(e.relatedTarget).data('id');
			var type = $(e.relatedTarget).data('type');

			if(type=='addComplaint'){var link ="php/student/report/modal/report_add.php";}

			$.get(link, function(returnData){
				$('#modalOpenMdBody').html(returnData);
			});
		});
		$('#modalOpenSm').on('show.bs.modal', function(e){
			var id = $(e.relatedTarget).data('id');
			var type = $(e.relatedTarget).data('type');

			if(type=='addOffense'){var link ="php/sao/offenselist/modal/offenselist_add.php";}


			$.get(link, function(returnData){
				$('#modalOpenSmBody').html(returnData);
			});
		});
		$('#modalOpenLg').on('show.bs.modal', function(e){
			var id = $(e.relatedTarget).data('id');
			var type = $(e.relatedTarget).data('type');

			if(type=='updComplaint'){var link ="php/sao/report/modal/report_upd.php";}

			$.get(link, function(returnData){
				$('#modalOpenLgBody').html(returnData);
			});
		});
	})
</script>
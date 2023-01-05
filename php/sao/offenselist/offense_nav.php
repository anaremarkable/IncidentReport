<script>
	$(document).ready(function(){
		$('#modalOpenLg').on('show.bs.modal', function(e){
			var id = $(e.relatedTarget).data('id');
			var type = $(e.relatedTarget).data('type');

			if(type=='viewOffenseSuggestion'){var link ="php/sao/offenselist/modal/offense_suggestion_view.php?offense_id="+id;}

			$.get(link, function(returnData){
				$('#modalOpenLgBody').html(returnData);
			});
		});
		$('#modalOpenMd').on('show.bs.modal', function(e){
			var id = $(e.relatedTarget).data('id');
			var type = $(e.relatedTarget).data('type');

			if(type=='updOffense'){var link ="php/sao/offenselist/modal/offenselist_upd.php?offense_id="+id;}
			if(type=='delOffenseSuggestion'){var link ="php/sao/offenselist/modal/offenselist_suggestion_del.php?offense_suggestion_id="+id;}

			$.get(link, function(returnData){
				$('#modalOpenMdBody').html(returnData);
			});
		});
		
		$('#modalOpenSm').on('show.bs.modal', function(e){
			var id = $(e.relatedTarget).data('id');
			var type = $(e.relatedTarget).data('type');

			if(type=='addOffense'){var link ="php/sao/offenselist/modal/offenselist_add.php";}
			if(type=='addSuggestion'){var link ="php/sao/offenselist/modal/offenselist_suggest_add.php?offense_id="+id;}

			$.get(link, function(returnData){
				$('#modalOpenSmBody').html(returnData);
			});
		});
	})
</script>
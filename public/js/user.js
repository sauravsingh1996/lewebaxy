$(function()  
{
$(".todolist").on('click', function(){
		$url=$(this).val();
	var user = $(this).data('user_id');
	//alert(user);
	$.ajax({
		url:"https://gorest.co.in/public-api/users/"+user+"/todos",
			//url: $('#hf_base_url').val() + '/users/todo'+user,
			method: "get",
			data: {'_token' : $('meta[name="csrf-token"]').attr('content')},
			success:function(result)
			{

		var $li;
		var $ul = $('<ul></ul>');
		if (result.data.length>0) {
		jQuery(result.data).each(function(i, item){
			$li = $('<li>' + item.title + '</li>');
			$ul.append($li);
		})
		}
		else{
			$li = $('<li>no record found</li>');
			$ul.append($li);
		}
				$('#todos-modal').modal('show');
				$("#todos-modal .modal-body").html($ul);
		}
	});
}); 
});
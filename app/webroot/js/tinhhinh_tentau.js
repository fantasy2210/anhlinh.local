$(function(){
	$("#TaucaId").select2({
        placeholder: 'Vui lòng chọn tàu cá',
		multiple: false,
		minimumInputLength: 2,
        ajax: {
            url: "/taucas/select2",
            dataType: 'json',
            quietMillis: 100,
            data: function (term, page) {
                return {
                    term: term, //search term
                    page_limit: 50 // page size
                };
            },
            results: function (data, page) {				
                return { results: data.results };
            }
        },
		initSelection: function(element, callback) {
			var data = [];
			$(element.val().split(",")).each(function(i) {
				var item = this.split(':');
				data.push({
					id: item[0],
					text: item[1]
				});
			});
			$(element).val('');
			callback(data);
		},
		formatSelection: format
    });
	$("#TaucaId").on("change",function(e) {
		if(e && e.removed)
		{
		   console.log(e);
		}		
	});
	function format(state) {
		
		if (!state.id) return state.text; // optgroup
		$("#TinhhinhLoaihoatdong").val(state.hanhnghe);;
		return state.text;
	}
});
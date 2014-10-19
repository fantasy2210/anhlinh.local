$(function(){
	$("#VanbandenNguoinhan").select2({
        placeholder: 'Vui lòng chọn người nhận',
		multiple: true,
		minimumInputLength: 2,
        ajax: {
            url: "/danhsaches/select2",
            dataType: 'json',
            quietMillis: 100,
            data: function (term, page) {
                return {
                    term: term, //search term
                    page_limit: 10 // page size
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
		}     
    });
});
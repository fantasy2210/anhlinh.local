var myArray = [];
Dropzone.autoDiscover = false;
$(function () {
    Dropzone.options.myDropzone = {
		dictDefaultMessage: "<i class='fa fa-upload'></i>Tải lên văn bản",
        init: function() {
            this.on("addedfile", function(file) {
                // Create the remove button
                var removeButton = Dropzone.createElement("<button class='btn'>Loại bỏ</button>");

                // Capture the Dropzone instance as closure.
                var _this = this;
                // Listen to the click event
                removeButton.addEventListener("click", function(e) {
                    // Make sure the button click doesn't submit the form:
                    e.preventDefault();
                    e.stopPropagation();
                    // Remove the file preview.					
					$.post("/attachfiles/delete/"+file.xhr.responseText, function(data){
						if(data == "1") {
							_this.removeFile(file);
							// If you want to the delete the file on the server as well,
							// you can do the AJAX request here.
							if(myArray.indexOf(file.xhr.responseText) >= 0) {
								myArray = $.grep(myArray, function( a ) {
								  return a !== file.xhr.responseText;
								});
							}
							$("#VanbandenAttachfile").val(myArray.join( "," ));
						}
					});
					//console.log(file);
                });

                // Add the button to the file preview element.
                file.previewElement.appendChild(removeButton);
            });
			this.on("success", function(file, responseText) {
				// Handle the responseText here. For example, add the text to the preview element:	
				//console.log(myArray.indexOf(responseText));	
				if((myArray.indexOf(responseText)) < 0) {
					myArray.push(responseText);
				}
				$("#VanbandenAttachfile").val(myArray.join( "," ));
			});
        }
    };	
	var myDropzone = new Dropzone("#my-dropzone",Dropzone.options.myDropzone);
	if(mockFile) {
		$.each(mockFile,function(key, value){
		   myDropzone.emit("addedfile", value);
		});		
	}
});
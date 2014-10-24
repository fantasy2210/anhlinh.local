/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function () {
    /* Validate dữ liệu */
    $('#VungbienAddForm').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            "data[Vungbien][ten]": {
                validators: {
                    notEmpty: {
                        message: 'Phải nhập tên vùng biển'
                    }
                }
            }
        }
    });
    $('#add-vungbien-button').click(function (e) {

        bootbox
                .dialog({
                    title: 'Thêm vùng biển mới',
                    message: $('#VungbienAddForm'),
                    show: false // We will show it manually later
                })
                .on('shown.bs.modal', function () {
                    $('#VungbienAddForm').show()
                            .bootstrapValidator('resetForm', true); // Reset form
                })
                .on('hide.bs.modal', function (e) {
                    // Bootbox will remove the modal (including the body which contains the login form)
                    // after hiding the modal
                    // Therefor, we need to backup the form
                    $('#VungbienAddForm').hide().appendTo('body');
                }).on('success.form.bv', function (e) {
            // Prevent form submission
            e.preventDefault();
            var $form = $(e.target), // The form instance
                    bv = $form.data('bootstrapValidator');   // BootstrapValidator instance

            // Use Ajax to submit form data

            $.post($form.attr('action'), $form.serialize(), function (result) {
                if (!result.success) {
                    bootbox.alert(result.message);
                } else {
                    // ... Process the result ...
                    $("#TaucannbatgiuVungbienId").append('<option value="' + result.id + '" selected="selected">' + result.name + '</option>');
                    //Xóa trắng huyện và xã
                    //$("#TinhHinhVenBienHuyenId").empty();
                    //$("#TinhHinhVenBienXaId").empty();
                    // Hide the modal containing the form
                    $form.parents('.bootbox').modal('hide');
                }

            }, 'json');
        })
                .modal('show');
    });
});
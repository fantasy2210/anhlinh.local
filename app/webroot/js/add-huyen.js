/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function () {
    $('#add-huyen-button').click(function (e) {
        bootbox
                .dialog({
                    title: 'Thêm huyện mới',
                    message: $('#HuyenAddForm'),
                    show: false // We will show it manually later
                })
                .on('shown.bs.modal', function () {
                    $('#HuyenAddForm').show()
                            .bootstrapValidator('resetForm', true); // Reset form
                })
                .on('hide.bs.modal', function (e) {
                    // Bootbox will remove the modal (including the body which contains the login form)
                    // after hiding the modal
                    // Therefor, we need to backup the form
                    $('#HuyenAddForm').hide().appendTo('body');
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
                    $("#TinhHinhVenBienTinhId").val(result.tinh_id).prop('selected', true);
                    $("#TinhHinhVenBienHuyenId").append('<option value="' + result.id + '" selected="selected">' + result.name + '</option>');
                    // Hide the modal containing the form
                    $form.parents('.bootbox').modal('hide');
                }

            }, 'json');
        })
                .modal('show');
    });
});
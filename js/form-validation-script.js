var Script = function () {

    $.validator.setDefaults({
        submitHandler: function() { alert("submitted!"); }
    });

    $().ready(function() {
        // validate the comment form when it is submitted
        $("#feedback_form").validate();

        // validate signup form on keyup and submit
        $("#form_pembelian").validate({
            rules: {
                jpembelian: {
                    required: true,
                    minlength: 3
                }
            },
            messages: {                
                jpembelian: {
                    required: "Jumlah Pembelian harus diisi!",
                    minlength: "Minimal pembelian harus lebih besar dari 0!"
                }
            }
        });

    });


}();
var Script = function () {

    $().ready(function() {
        // validate the comment form when it is submitted
        $("#feedback_form").validate();

        // validate signup form on keyup and submit
        $("#form_pembelian").validate({
            rules: {
                jpembelian: {
                    required: true
                },
				pbarang: {
                    required: true
                },
				gkkdsatelit: {
                    required: true
                },
				tharga: {
                    required: true
                }
            },
            messages: {                
                jpembelian: {
                    required: "Jumlah Pembelian harus diisi!"
                },
				pbarang: {
                    required: "Anda belum memilih barang!"
                },
				gkkdsatelit: {
                    required: "Anda belum memilih ke wilayah mana barang akan dikirim!"
                },
				tharga: {
                    required: "Total pembayaran harus terisi!"
                }
            }
        });

    });


}();
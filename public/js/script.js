    $('.tombolTambah').on('click', function () {
    $('#formModalLabel').html('Tambah Data Nasabah');
    $('.modal-footer button[type=submit]').html('Insert');

});

    $('.tampilModalUbah').on('click', function () {
    $('#judulModal').html('Ubah Data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Edit');
    $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/nasabah/ubah');

const id = $(this).data('id');

$.ajax({
    url: 'http://localhost/phpmvc/public/nasabah/getubah',
    data: {id : id},
    type: 'post',
    dataType: 'json',
    success: function (data) {
        $('#nama').val(data.nama);
        $('#no').val(data.no);
        $('#email').val(data.email);
        $('#KPR').val(data.KPR);
        $('#id').val(data.id);
    }
});
    
    

});

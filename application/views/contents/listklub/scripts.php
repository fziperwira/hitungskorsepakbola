<!-- DataTables  & Plugins -->
<script src="<?= base_url(); ?>/public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>/public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>/public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>/public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>/public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>/public/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url(); ?>/public/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>/public/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>/public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>/public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url(); ?>/public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Sweet Alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- SweetAlert2 -->
<script src="<?= base_url(); ?>/public/plugins/sweetalert2/sweetalert2.min.js"></script>

<script>
$(function () {
    $("#t_daftar_klub").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["excel", "pdf", "print"]
    }).buttons().container().appendTo('#t_daftar_klub_wrapper .col-md-6:eq(0)');
});

$(document).on('click', '#btnTambahKlub', function(e) {
    e.preventDefault();
    save_method = 'add';
    $("#title").text("Form Input Klub Bola");
    $('[name="nama_klub"]').val('');
    $('[name="kota_klub"]').val('');
    $('[name="detail"]').val('');
    $('#ModalTambahKlub').modal('show');
});

function reload_table() {
    table.ajax.reload(null, false); //reload datatable ajax 
}

$(document).on("submit", "#formtambahklub", function(event) {
        event.preventDefault();
        $('#btnSave').text("Tunggu...");
        $('#btnSave').prop('disabled', true);
        $.ajax({
            type: "POST",
            url: "<?= site_url('ListKlub/ajax_add') ?>",
            dataType: "JSON",
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function(res) {
                if (res.status === true) {
                    $('#btnSave').text("Save");
                    Swal.fire(
                        'Sukses',
                        'Berhasil menambahkan data!',
                        'success'
                    )
                    } else {
                        Swal.fire(
                            'Gagal',
                            '' + res.msg + '',
                            'error'
                        )
                        $('#btnSave').text("Menyimpan");
                        $('#btnSave').prop('disabled', false);
                    }
                    $('#ModalTambahKlub').modal('hide');
                    setTimeout(() => {
                                window.location.reload();
                            }, 3000);
            }
        });
        return false;
});

function EditKlubBola(id) {
    save_method = 'update';
    $('#formtambahklub')[0].reset(); // reset form on modals
    // $('.form-group').removeClass('has-error'); // clear error class
    // $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url: "<?= site_url('ListKlub/ajax_edit/') ?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
            // console.log(data);
            $('[name="id_klub"]').val(data.id_klub);
            $('[name="nama_klub"]').val(data.nama_klub);
            $('[name="kota_klub"]').val(data.kota_klub);
            $('[name="detail"]').val(data.detail);
            $('#ModalTambahKlub').modal('show');
            $('.modal-title').text('Edit Data Klub Bola');

        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert('Error get data from ajax');
        }
    });
}

function DeleteKlubBola(id) {
    Swal.fire({
        title: 'Peringatan',
        text: "Apakah anda yakin ingin hapus data ini?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Ya, Hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "<?= site_url('ListKlub/ajax_delete') ?>/" + id,
                type: "POST",
                dataType: "JSON",
                success: function(data) {
                    Swal.fire(
                        'Sukses',
                        'Berhasil menghapus data!',
                        'success'
                    )
                    setTimeout(() => {
                                window.location.reload();
                            }, 3000);
            },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error deleting data');
                }
            });

        }
});
return false;
}
</script>
<?php
defined('BASEPATH') or die('No direct script access allowed!');
?>
<div class="page-header">
    <h1>Pemesanan</h1>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table table-striped table-bordered table-hover" id="datatablesPengalaman">
            <thead>
                <th>No</th>
                <th>Nama Marketing</th>
                <th>Nama Pembeli</th>
                <th>No KTP</th>
                <th>Alamat Lengkap</th>
                <th>No HP</th>
                <th>Perumahan</th>
                <th>Tipe</th>
                <th>No Blok</th>
                <th>Skema Pembayaran</th>
                <th>Tanggal Itj</th>
                <th>Sebagai Berikut</th>
                <th>Tanggal Input</th>
                <th>Status</th>
            </thead>

            <tbody>
                <?php
                if (count($result) > 0) {
                    $start = 1;
                    foreach ($result as $key => $value) {?>
                        <tr>
                            <td><?= $start++ ?></td>
                            <td><?= $value->nama_marketing ?></td>
                            <td><?= $value->nama_pembeli ?></td>
                            <td><?= $value->no_ktp ?></td>
                            <td><?= $value->alamat_lengkap ?></td>
                            <td><?= $value->no_hp ?></td>
                            <td><?= $value->nama_perumahan?></td>
                            <td><?= $value->tipe ?></td>
                            <td><?= $value->no_blok ?></td>
                            <td><?= $value->skema_pembayaran ?></td>
                            <td><?= $value->tanggal_itj ?></td>
                            <td><?= $value->sbg_berikut ?></td>
                            <td><?= $value->tgl_input ?></td>
                            <td><?php
                                  if ($value->status == 0) {
                                    echo "<div style='background-color: yellow;'>Belum diproses</div>";
                                  }
                                  elseif ($value->status == 1) {
                                    echo "<div style='background-color: lightgreen;'>Proses</div>";
                                  }
                                  elseif ($value->status == 2) {
                                    echo "<div style='background-color: lightblue;'>Sukses</div>";
                                  }
                                  else{
                                    echo "<div style='background-color: red;'>Dibatalkan</div>";
                                  }
                                  ?>
                                  <button type="button" class="btn btn-primary btn-xs" onclick="edit_produk('<?= $value->id_pemesanan ?>')">
                                    <i class="fa fa-edit"></i>
                            </td>
                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada data yang tersedia</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<div id="modalresult" class="modal fade" tabindex="-1"></div>
<script>
    $(document).ready(function() {
        tinyMCE.init({
            mode: "exact",
            elements: "input_deskripsi",
            theme: "advanced",
            plugins: "jbimages,autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",
            language: "en",
            theme_advanced_buttons1: "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
            theme_advanced_buttons2: "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
            theme_advanced_buttons3: "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
            theme_advanced_buttons4: "jbimg,|,insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
            theme_advanced_toolbar_location: "top",
            theme_advanced_toolbar_align: "left",
            theme_advanced_statusbar_location: "bottom",
            theme_advanced_resizing: true,
            relative_urls: false,
            width: '100%'
        });
    });

    $('#formAddPengalaman').submit(function(e) {
        e.preventDefault();
        tinyMCE.triggerSave();

        let formData = new FormData(this);
        let elementsForm = $(this).find('button, input, textarea');

        elementsForm.attr('disabled', true);

        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            dataType: 'json',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                elementsForm.removeAttr('disabled');

                if (response.RESULT == 'OK') {
                    swal({
                        title: response.MESSAGE,
                        type: 'success'
                    }, function() {
                        $("a[data-dismiss='modal']").click();
                        window.location.reload();
                    });
                } else {
                    swal({
                        title: response.MESSAGE,
                        type: 'error'
                    });
                }
            }
        }).fail(function() {
            elementsForm.removeAttr('disabled');
            swal({
                title: 'Terjadi kesalahan',
                type: 'error'
            });
        });
    });

    $("a[href='#tambahproduk']").click(function() {
        $('input[type="reset"]').click();
    });

    function delete_produk(id) {
        let confirmation = confirm('Apakah anda yakin ingin menghapus data?');

        if (confirmation) {
            $.ajax({
                url: '<?= base_url(uri_string() . '/hapus_produk') ?>',
                method: 'POST',
                dataType: 'json',
                data: {
                    id: id
                },
                success: function(response) {
                    if (response.RESULT == 'OK') {
                        swal({
                            title: response.MESSAGE,
                            type: 'success'
                        }, function() {
                            window.location.reload();
                        });
                    } else {
                        swal({
                            title: response.MESSAGE,
                            type: 'error'
                        });
                    }
                }
            }).fail(function() {
                swal({
                    title: 'Terjadi kesalahan',
                    type: 'error'
                });
            });
        }
    }

        function edit_produk(id) {
        $.ajax({
            url: '<?= base_url(uri_string() . '/modal_edit_produk') ?>',
            method: 'POST',
            dataType: 'json',
            data: {
                id: id
            },
            success: function(response) {
                if (response.RESULT == 'OK') {
                    $('#modalresult').html(response.HTML);
                    $('#modalresult').modal('show');
                } else {
                    swal({
                        title: response.MESSAGE,
                        type: 'error'
                    });
                }
            }
        }).fail(function() {
            swal({
                title: 'Terjadi kesalahan',
                type: 'error'
            });
        });
    }
</script>
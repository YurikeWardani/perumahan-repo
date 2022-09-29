<?php
defined('BASEPATH') or die('No direct script access allowed!');
?>
<div class="page-header">
    <h1>Produk</h1>
</div>

<div class="widget-main padding-6">
    <div class="row">
        <div class="col-md-12" style="overflow-y: auto">
            <div style="padding-bottom: 10px;">
                <a href="#tambahproduk" role="button" class="btn btn-primary" data-toggle="modal">Tambah Produk</a>
            </div>

            <div id="tambahproduk" class="modal fade" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form class="form-horizontal" role="form" id="formAddProdukKetersediaan" action="<?= base_url(uri_string() . '/add_produk') ?>" method="POST" enctype="multipart/form-data">
                            <input type="reset" class="hidden">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h3 class="smaller lighter blue no-margin">Tambah Produk</h3>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Nama Perumahan</label>
                                        <select name="perumahan" id="select_perumahan" class="form-control"  required>
                                            <option value=""></option>
                                            <?php foreach ($perumahan->result() as $key => $value) : ?>
                                                <option value="<?= $value->id_perumahan ?>"><?= $value->nama_perumahan ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="col-md-12">
                                        <label>Harga Produk</label>
                                        <input type="number" class="form-control" name="harga_produk" placeholder="Harga Produk" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label>Gambar Produk</label>
                                        <input type="file" class="form-control" name="gambar_produk" id="input_foto1" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label>Slider 1</label>
                                        <input type="file" class="form-control" name="slider1" id="input_foto2" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label>Slider 2</label>
                                        <input type="file" class="form-control" name="slider2" id="input_foto3" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label>Slider 3</label>
                                        <input type="file" class="form-control" name="slider3" id="input_foto4" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label>Jumlah Kamar Tidur</label>
                                        <input type="number" class="form-control" name="kamar_tidur" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label>Jumlah Kamar Mandi</label>
                                        <input type="number" class="form-control" name="kamar_mandi" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label>Pondasi</label>
                                        <input type="text" class="form-control" placeholder="Pondasi" name="pondasi" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label>Sanitasi</label>
                                        <input type="text" class="form-control" placeholder="Sanitasi" name="sanitasi" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label>Daun Pintu</label>
                                        <input type="text" class="form-control" placeholder="Daun Pintu" name="daun_pintu" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label>Rangka Atap</label>
                                        <input type="text" class="form-control" placeholder="Rangka Atap" name="rangka_atap" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label>Plafon</label>
                                        <input type="text" class="form-control" placeholder="Plafon" name="plafon" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label>Carpot</label>
                                        <input type="text" class="form-control" placeholder="Carpot" name="carpot" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label>Lantai</label>
                                        <input type="text" class="form-control" placeholder="Lantai" name="lantai" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label>Pagar</label>
                                        <input type="text" class="form-control" placeholder="Pagar" name="pagar" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label>Listrik</label>
                                        <input type="text" class="form-control" placeholder="Listrik" name="listrik" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label>Kusen</label>
                                        <input type="text" class="form-control" placeholder="Kusen" name="kusen" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label>Tipe</label>
                                        <input type="text" class="form-control" placeholder="Tipe" name="tipe" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label>Dinding</label>
                                        <input type="text" class="form-control" placeholder="Dinding" name="dinding" required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-sm pull-right" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-success btn-sm pull-right" style="margin-right: 5px;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <table class="table table-striped table-bordered table-hover" id="datatablesProdukKetersediaan">
                <thead>
                    <th>No</th>
                    <th>Nama Perumahan</th>
                    <th>Harga Produk</th>
                    <th>Gambar Produk</th>
                    <th>Slider 1</th>
                    <th>Slider 2</th>
                    <th>Slider 3</th>
                    <th>Jumlah Kamar Tidur</th>
                    <th>Jumlah Kamar Mandi</th>
                    <th>Pondasi</th>
                    <th>Sanitasi</th>
                    <th>Daun Pintu</th>
                    <th>Rangka Atap</th>
                    <th>Plafon</th>
                    <th>Carpot</th>
                    <th>Lantai</th>
                    <th>Pagar</th>
                    <th>Listrik</th>
                    <th>Kusen</th>
                    <th>Tipe</th>
                    <th>Dinding</th>
                    <th>Action</th>
                </thead>

                <tbody>
                    <?php
                    if (count($result) > 0) {
                        $start = 1;
                        foreach ($result as $key => $value) { ?>
                            <tr>
                                <td><?= $start++ ?></td>
                                <td><?= $value->nama_perumahan ?></td>
                                <td><?= $value->harga_produk ?></td>
                                <td class="text-center">
                                    <?php if ($value->gambar_produk) { ?>
                                        <img src="<?= base_url('assets/img/' . $value->gambar_produk) ?>" width="100">
                                    <?php } ?>
                                </td>
                                <td class="text-center">
                                    <?php if ($value->slider1) { ?>
                                        <img src="<?= base_url('assets/img/' . $value->slider1) ?>" width="100">
                                    <?php } ?>
                                </td>
                                <td class="text-center">
                                    <?php if ($value->slider2) { ?>
                                        <img src="<?= base_url('assets/img/' . $value->slider2) ?>" width="100">
                                    <?php } ?>
                                </td>
                                <td class="text-center">
                                    <?php if ($value->slider3) { ?>
                                        <img src="<?= base_url('assets/img/' . $value->slider3) ?>" width="100">
                                    <?php } ?>
                                </td>
                                <td><?= $value->kamar_tidur ?></td>
                                <td><?= $value->kamar_mandi ?></td>
                                <td><?= $value->pondasi ?></td>
                                <td><?= $value->sanitasi ?></td>
                                <td><?= $value->daun_pintu ?></td>
                                <td><?= $value->rangka_atap ?></td>
                                <td><?= $value->plafon ?></td>
                                <td><?= $value->carpot ?></td>
                                <td><?= $value->lantai ?></td>
                                <td><?= $value->pagar ?></td>
                                <td><?= $value->listrik ?></td>
                                <td><?= $value->kusen ?></td>
                                <td><?= $value->tipe ?></td>
                                <td><?= $value->dinding ?></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-xs" onclick="edit_produk('<?= $value->id_produk ?>')">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-xs" onclick="delete_produk('<?= $value->id_produk ?>')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php }
                    } else { ?>
                        <tr>
                            <td colspan="21" class="text-center">Tidak ada data yang tersedia</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div id="modalresult" class="modal fade" tabindex="-1"></div>
<script>
    $(document).ready(function() {
        tinyMCE.init({
            mode: "exact",
            elements: "input_spesifikasi",
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

    $('#formAddProdukKetersediaan').submit(function(e) {
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
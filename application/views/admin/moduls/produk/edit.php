<?php
defined('BASEPATH') or die('No direct script access allowed!');
?>

<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form class="form-horizontal" role="form" id="formEditProdukKetersediaan" action="<?= base_url('C_produk/edit_produk') ?>" method="POST" enctype="multipart/form-data">
            <input type="reset" class="hidden">
            <input type="hidden" name="id_produk" value="<?= $data->id_produk ?>">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="smaller lighter blue no-margin">Edit Produk</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <label>Perumahan</label>
                        <select name="perumahan" id="edit_select_perumahan" class="form-control" required>
                            <option value=""></option>
                            <?php foreach ($perumahan->result() as $key => $value) : ?>
                                <option value="<?= $value->id_perumahan ?>" <?= ($value->id_perumahan == $data->id_perumahan ? 'selected' : null) ?>><?= $value->nama_perumahan ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label>Jumlah Kamar Tidur</label>
                        <input type="number" class="form-control" name="kamar_tidur" required value="<?= $data->kamar_tidur ?>">
                   </div>

                    <div class="col-md-12">
                        <label>Jumlah Kamar Mandi</label>
                        <input type="number" class="form-control" name="kamar_mandi" required value="<?= $data->kamar_mandi ?>">
                    </div>            
                    <div class="col-md-12">
                        <label>Harga Produk</label>
                        <input type="text" class="form-control" name="harga_produk" placeholder="Harga Produk" value="<?= $data->harga_produk ?>" required>
                    </div>

                    <div class="col-md-12">
                        <label>Gambar Produk</label>
                        <input type="file" class="form-control" name="gambar_produk" id="edit_input_foto1">
                    </div>

                    <div class="col-md-12">
                        <label>Slider 1</label>
                        <input type="file" class="form-control" name="slider1" id="edit_input_foto2">
                    </div>

                    <div class="col-md-12">
                        <label>Slider 2</label>
                        <input type="file" class="form-control" name="slider2" id="edit_input_foto3">
                    </div>

                    <div class="col-md-12">
                        <label>Slider 3</label>
                        <input type="file" class="form-control" name="slider3" id="edit_input_foto4">
                    </div>

                    <div class="col-md-12">
                        <label>Pondasi</label>
                        <input type="text" class="form-control" placeholder="Pondasi" name="pondasi" value="<?= $data->pondasi ?>" required>
                    </div>

                    <div class="col-md-12">
                        <label>Sanitasi</label>
                        <input type="text" class="form-control" placeholder="Sanitasi" name="sanitasi" value="<?= $data->sanitasi ?>" required>
                    </div>

                    <div class="col-md-12">
                        <label>Daun Pintu</label>
                        <input type="text" class="form-control" placeholder="Daun Pintu" name="daun_pintu" value="<?= $data->daun_pintu ?>" required>
                    </div>

                    <div class="col-md-12">
                        <label>Rangka Atap</label>
                        <input type="text" class="form-control" placeholder="Rangka Atap" name="rangka_atap" value="<?= $data->rangka_atap ?>" required>
                    </div>

                    <div class="col-md-12">
                        <label>Plafon</label>
                        <input type="text" class="form-control" placeholder="Plafon" name="plafon" value="<?= $data->plafon ?>" required>
                    </div>

                    <div class="col-md-12">
                        <label>Carpot</label>
                        <input type="text" class="form-control" placeholder="Carpot" name="carpot" value="<?= $data->carpot ?>" required>
                    </div>

                    <div class="col-md-12">
                        <label>Lantai</label>
                        <input type="text" class="form-control" placeholder="Lantai" name="lantai" value="<?= $data->lantai ?>" required>
                    </div>

                    <div class="col-md-12">
                        <label>Pagar</label>
                        <input type="text" class="form-control" placeholder="Pagar" name="pagar" value="<?= $data->pagar ?>" required>
                    </div>

                    <div class="col-md-12">
                        <label>Listrik</label>
                        <input type="text" class="form-control" placeholder="Listrik" name="listrik" value="<?= $data->listrik ?>" required>
                    </div>

                    <div class="col-md-12">
                        <label>Kusen</label>
                        <input type="text" class="form-control" placeholder="Kusen" name="kusen" value="<?= $data->kusen ?>" required>
                    </div>

                    <div class="col-md-12">
                        <label>Tipe</label>
                        <input type="text" class="form-control" placeholder="Tipe" name="tipe" value="<?= $data->tipe ?>" required>
                    </div>

                    <div class="col-md-12">
                        <label>Dinding</label>
                        <input type="text" class="form-control" placeholder="Dinding" name="dinding" value="<?= $data->dinding ?>" required>
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
<script>
    $(document).ready(function() {
        tinyMCE.init({
            mode: "exact",
            elements: "edit_input_spesifikasi",
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

    $('#formEditProdukKetersediaan').submit(function(e) {
        e.preventDefault();

        let formData = new FormData(this);
        let elementsForm = $(this).find('button, textarea, input');

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
                        $('#modalresult').modal('hide');
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
</script>
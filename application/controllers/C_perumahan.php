<?php

class C_perumahan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_perumahan', 'perumahan');
    }

    public function index()
    {
        $data['view_file'] = 'admin/moduls/V_perumahan';
        $data['result'] = $this->perumahan->perumahan()->result();
        return $this->load->view('admin/admin_view', $data);
    }

    public function add_produk()
    {
        $nama_perumahan = $this->input->post('nama_perumahan');
        $alamat_perumahan = $this->input->post('alamat_perumahan');
        $lat = $this->input->post('lat');
        $long = $this->input->post('long');

        $dataInsert['nama_perumahan'] = $nama_perumahan;
        $dataInsert['alamat_perumahan'] = $alamat_perumahan;
        $dataInsert['lat'] = $lat;
        $dataInsert['long'] = $long;

        if ($this->perumahan->insert($dataInsert)) {
            echo json_encode(array(
                'RESULT' => 'OK',
                'MESSAGE' => 'Data berhasil ditambahkan'
            ));
            exit;
        } else {
            echo json_encode(array(
                'RESULT' => 'FAILED',
                'MESSAGE' => 'Gagal menambahkan data'
            ));
            exit;
        }
    }

    public function hapus_produk()
    {
        $id = getPost('id', null);

        if ($id == null) return JSONResponseDefault('FAILED', 'ID tidak ditemukan');

        $getData = $this->perumahan->perumahan($id);

        if ($getData->num_rows() == 0) {
            return JSONResponseDefault('FAILED', 'Tidak ada data yang ditemukan');
        }


        if ($this->perumahan->delete($id)) {
            return JSONResponseDefault('OK', 'Data berhasil dihapus');
        } else {
            return JSONResponseDefault('FAILED', 'Gagal menghapus data');
        }
    }

    public function modal_edit_produk()
    {
        $id = getPost('id');

        if ($id == null) return JSONResponseDefault('FAILED', 'ID tidak ditemukan');

        $getData = $this->perumahan->perumahan($id);

        if ($getData->num_rows() == 0) {
            return JSONResponseDefault('FAILED', 'Data tidak ditemukan');
        }

        $data['data'] = $getData->row();

        return JSONResponse(array(
            'RESULT' => 'OK',
            'HTML' => $this->load->view('admin/moduls/perumahan/edit', $data, true)
        ));
    }

    public function edit_produk()
    {
        $id = getPost('id_perumahan');

        if ($id == null) return JSONResponseDefault('FAILED', 'ID tidak ditemukan');

        $getData = $this->perumahan->perumahan($id);

        if ($getData->num_rows() == 0) {
            return JSONResponseDefault('FAILED', 'Data tidak ditemukan');
        }

        $nama_perumahan = getPost('nama_perumahan');
        $alamat_perumahan = getPost('alamat_perumahan');
        $lat = getPost('lat');
        $long = getPost('long');

        $updateData['nama_perumahan'] = $nama_perumahan;
        $updateData['alamat_perumahan'] = $alamat_perumahan;
        $updateData['lat'] = $lat;
        $updateData['long']    = $long;

        if ($this->perumahan->update($id, $updateData)) {
            return JSONResponseDefault('OK', 'Data berhasil diubah');
        } else {
            return JSONResponseDefault('FAILED', 'Gagal mengubah data');
        }
    }
}
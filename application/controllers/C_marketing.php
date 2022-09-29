<?php

class C_marketing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_marketing', 'marketing');
    }

    public function index()
    {
        $data['view_file'] = 'admin/moduls/V_marketing';
        $data['result'] = $this->marketing->marketing()->result();
        return $this->load->view('admin/admin_view', $data);
    }

    public function add_produk()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama_marketing = $this->input->post('nama_marketing');
        $alamat_marketing = $this->input->post('alamat_marketing');
        $nohp_marketing = $this->input->post('nohp_marketing');
        $email_marketing = $this->input->post('email_marketing');
        
        $dataInsert['username'] = $username;
        $dataInsert['password'] = $password;
        $dataInsert['nama_marketing'] = $nama_marketing;
        $dataInsert['alamat_marketing'] = $alamat_marketing;
        $dataInsert['nohp_marketing'] = $nohp_marketing;
        $dataInsert['email_marketing'] = $email_marketing;

        if ($this->marketing->insert($dataInsert)) {
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

        $getData = $this->marketing->marketing($id);

        if ($getData->num_rows() == 0) {
            return JSONResponseDefault('FAILED', 'Tidak ada data yang ditemukan');
        }

        if ($this->marketing->delete($id)) {
            return JSONResponseDefault('OK', 'Data berhasil dihapus');
        } else {
            return JSONResponseDefault('FAILED', 'Gagal menghapus data');
        }
    }

    public function modal_edit_produk()
    {
        $id = getPost('id');

        if ($id == null) return JSONResponseDefault('FAILED', 'ID tidak ditemukan');

        $getData = $this->marketing->marketing($id);

        if ($getData->num_rows() == 0) {
            return JSONResponseDefault('FAILED', 'Data tidak ditemukan');
        }

        $data['data'] = $getData->row();

        return JSONResponse(array(
            'RESULT' => 'OK',
            'HTML' => $this->load->view('admin/moduls/marketing/edit', $data, true)
        ));
    }

    public function edit_produk()
    {
        $id = getPost('old_username');

        if ($id == null) return JSONResponseDefault('FAILED', 'ID tidak ditemukan');

        $getData = $this->marketing->marketing($id);

        if ($getData->num_rows() == 0) {
            return JSONResponseDefault('FAILED', 'Data tidak ditemukan');
        }

        $username = getPost('username');
        $password = getPost('password');
        $nama_marketing = getPost('nama_marketing');
        $alamat_marketing = getPost('alamat_marketing');
        $nohp_marketing = getPost('nohp_marketing');
        $email_marketing = getPost('email_marketing');

        $updateData['username'] = $username;
        $updateData['password'] = $password;
        $updateData['nama_marketing'] = $nama_marketing;
        $updateData['alamat_marketing'] = $alamat_marketing;
        $updateData['nohp_marketing'] = $nohp_marketing;
        $updateData['email_marketing']    = $email_marketing;

        if ($this->marketing->update($id, $updateData)) {
            return JSONResponseDefault('OK', 'Data berhasil diubah');
        } else {
            return JSONResponseDefault('FAILED', 'Gagal mengubah data');
        }
    }
}

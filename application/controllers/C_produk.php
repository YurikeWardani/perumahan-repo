<?php
defined('BASEPATH') or die('No direct script access allowed!');

class C_produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_produk', 'produk');
        $this->load->model('M_perumahan', 'perumahan');
    }

    public function index()
    {
        $data['view_file'] = 'admin/moduls/V_produk';
        $data['result'] = $this->produk->produk()->result();
        $data['perumahan'] = $this->perumahan->perumahan();

        return $this->load->view('admin/admin_view', $data);
    }

    private function uploader($upload, $index = array())
    {
        $data = array();

        foreach ($index as $key => $value) {
            if (isset($_FILES[$value]['size']) > 0) {
                if ($upload->upload($value)) {
                    $file_name = $upload->get_file_name();

                    $data[$key] = $file_name;
                } else {
                    return false;
                }
            } else {
                $data[$key] = null;
            }
        }

        return $data;
    }

    public function remover($upload, $index = array(), $location)
    {
        foreach ($index as $key => $value) {
            if (!$upload->remove($value, $location)) {
                return false;
            }
        }

        return true;
    }

    public function add_produk()
    {
        $harga_produk = $this->input->post('harga_produk');
        $kamar_tidur = $this->input->post('kamar_tidur');
        $kamar_mandi = $this->input->post('kamar_mandi');
        $pondasi = $this->input->post('pondasi');
        $sanitasi = $this->input->post('sanitasi');
        $daun_pintu = $this->input->post('daun_pintu');
        $rangka_atap = $this->input->post('rangka_atap');
        $plafon = $this->input->post('plafon');
        $carpot = $this->input->post('carpot');
        $lantai = $this->input->post('lantai');
        $pagar = $this->input->post('pagar');
        $listrik = $this->input->post('listrik');
        $kusen = $this->input->post('kusen');
        $tipe = $this->input->post('tipe');
        $dinding = $this->input->post('dinding');
        $perumahan = $this->input->post('perumahan');

        $upload = new FileUploadLibrary();
        $upload->setConfig(array(
            'upload_path' => realpath('assets/img'),
            'allowed_types' => 'jpg|png|jpeg',
            'max_size' => 2048, //2 MB
            'encrypt_name' => true
        ));
        $upload->initialize();

        $dataUpload = $this->uploader($upload, array(
            'gambar_produk' => 'gambar_produk',
            'slider1' => 'slider1',
            'slider2' => 'slider2',
            'slider3' => 'slider3'
        ));

        $dataInsert['harga_produk'] = $harga_produk;
        $dataInsert['kamar_tidur'] = $kamar_tidur;
        $dataInsert['kamar_mandi'] = $kamar_mandi;
        $dataInsert['pondasi'] = $pondasi;
        $dataInsert['sanitasi'] = $sanitasi;
        $dataInsert['daun_pintu'] = $daun_pintu;
        $dataInsert['rangka_atap'] = $rangka_atap;
        $dataInsert['plafon'] = $plafon;
        $dataInsert['carpot'] = $carpot;
        $dataInsert['lantai'] = $lantai;
        $dataInsert['pagar'] = $pagar;
        $dataInsert['listrik'] = $listrik;
        $dataInsert['kusen'] = $kusen;
        $dataInsert['tipe'] = $tipe;
        $dataInsert['dinding'] = $dinding;
        $dataInsert['id_perumahan'] = $perumahan;

        foreach ($dataUpload as $key => $value) {
            $dataInsert[$key] = $value;
        }

        if ($this->produk->insert($dataInsert)) {
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

        $getData = $this->produk->produk($id);

        if ($getData->num_rows() == 0) {
            return JSONResponseDefault('FAILED', 'Tidak ada data yang ditemukan');
        }

        $upload = new FileUploadLibrary();
        $row = $getData->row();

        $remove = $this->remover($upload, array(
            $row->gambar_produk,
            $row->slider1,
            $row->slider2,
            $row->slider3
        ), 'assets/img');

        if (!$remove) {
            return JSONResponseDefault('FAILED', 'Gagal menghapus beberapa gambar');
        }

        if ($this->produk->delete($id)) {
            return JSONResponseDefault('OK', 'Data berhasil dihapus');
        } else {
            return JSONResponseDefault('FAILED', 'Gagal menghapus data');
        }
    }

    public function modal_edit_produk()
    {
        $id = getPost('id');

        if ($id == null) return JSONResponseDefault('FAILED', 'ID tidak ditemukan');

        $getData = $this->produk->produk($id);

        if ($getData->num_rows() == 0) {
            return JSONResponseDefault('FAILED', 'Data tidak ditemukan');
        }

        $data['data'] = $getData->row();
        $data['perumahan'] = $this->perumahan->perumahan();

        return JSONResponse(array(
            'RESULT' => 'OK',
            'HTML' => $this->load->view('admin/moduls/produk/edit', $data, true)
        ));
    }

    private function edit_img_remover($upload, $row, $index = array())
    {
        $data = array();
        $deletedData = array();

        foreach ($index as $key => $value) {
            if ($_FILES[$value]['size'] > 0) {
                $data[$key] = $value;
                $deletedData[] = $row->$key;
            }
        }

        $this->remover($upload, $deletedData, 'assets/img');

        return $this->uploader($upload, $data);
    }

    public function edit_produk()
    {
        $id = getPost('id_produk');

        if ($id == null) return JSONResponseDefault('FAILED', 'ID tidak ditemukan');

        $getData = $this->produk->produk($id);

        if ($getData->num_rows() == 0) {
            return JSONResponseDefault('FAILED', 'Data tidak ditemukan');
        }

        $harga_produk = getPost('harga_produk');
        $kamar_tidur = getPost('kamar_tidur');
        $kamar_mandi = getPost('kamar_mandi');
        $pondasi = getPost('pondasi');
        $sanitasi = getPost('sanitasi');
        $daun_pintu = getPost('daun_pintu');
        $rangka_atap = getPost('rangka_atap');
        $plafon = getPost('plafon');
        $carpot = getPost('carpot');
        $lantai = getPost('lantai');
        $pagar = getPost('pagar');
        $listrik = getPost('listrik');
        $kusen = getPost('kusen');
        $tipe = getPost('tipe');
        $dinding = getPost('dinding');
        $perumahan = getPost('perumahan');

        $updateData['harga_produk'] = $harga_produk;
        $updateData['kamar_tidur'] = $kamar_tidur;
        $updateData['kamar_mandi'] = $kamar_mandi;
        $updateData['pondasi'] = $pondasi;
        $updateData['sanitasi'] = $sanitasi;
        $updateData['daun_pintu'] = $daun_pintu;
        $updateData['rangka_atap'] = $rangka_atap;
        $updateData['plafon'] = $plafon;
        $updateData['carpot'] = $carpot;
        $updateData['lantai'] = $lantai;
        $updateData['pagar'] = $pagar;
        $updateData['listrik'] = $listrik;
        $updateData['kusen'] = $kusen;
        $updateData['tipe'] = $tipe;
        $updateData['dinding'] = $dinding;
        $updateData['id_perumahan'] = $perumahan;

        $upload = new FileUploadLibrary();
        $upload->setConfig(array(
            'upload_path' => realpath('assets/img'),
            'allowed_types' => 'jpg|png|jpeg',
            'max_size' => 2048, //2 MB
            'encrypt_name' => true
        ));
        $upload->initialize();

        $dataUpload = $this->edit_img_remover($upload, $getData->row(), array(
            'gambar_produk' => 'gambar_produk',
            'slider1' => 'slider1',
            'slider2' => 'slider2',
            'slider3' => 'slider3'
        ));

        foreach ($dataUpload as $key => $value) {
            $updateData[$key] = $value;
        }

        if ($this->produk->update($id, $updateData)) {
            return JSONResponseDefault('OK', 'Data berhasil diubah');
        } else {
            return JSONResponseDefault('FAILED', 'Gagal mengubah data');
        }
    }
}

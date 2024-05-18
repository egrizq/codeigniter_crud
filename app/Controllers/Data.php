<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Data_model;

class Data extends Controller
{
    public function index()
    {
        $model = new Data_model;
        $data['title'] = 'Data Barang';
        $data['getBarang'] = $model->getData();

        echo view('data_view', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Barang';
        echo view('tambah_view', $data);
    }

    public function add()
    {
        $model = new Data_model;
        $data = array(
            'NAMA' => $this->request->getPost('nama'),
            'AGAMA' => $this->request->getPost('agama'),
            'TEMPATLAHIR' => $this->request->getPost('lahir'),
            'TINGGIBADAN' => $this->request->getPost('tinggi_badan'),
            'BERATBADAN' => $this->request->getPost('berat'),
            'NAMAHUBUNGAN' => $this->request->getPost('pernikahan'),
            'JENIS_DOKUMEN' => $this->request->getPost('jenis_identitas'),
            'NOMOR_DOKUMEN' => $this->request->getPost('nomor_identitas'),
            'NAMAHOBBY' => $this->request->getPost('hobby'),
            'ALAMAT' => $this->request->getPost('alamat')
        );
        $model->saveData($data);
        echo '
            <script>
                alert("Sukses Tambah Data");"
            </script>
        ';
    }

    public function edit($id)
    {
        $model = new Data_model;
        $getData = $model->getData($id)->getRow();
        if(isset($getData))
        {
            $data['data'] = $getData;

            echo view('edit_view', $data);
        } else 
        {
            echo '
                <script>
                    alert("ID '.$id.' Tidak ditemukan");
                </script>
            ';
        }
    }

    public function update()
    {
        $model = new Data_model;
        $id = $this->request->getPost('id');
        $data = array(
            'NAMA' => $this->request->getPost('nama'),
            'AGAMA' => $this->request->getPost('agama'),
            'TEMPATLAHIR' => $this->request->getPost('lahir'),
            'TINGGIBADAN' => $this->request->getPost('tinggi_badan'),
            'BERATBADAN' => $this->request->getPost('berat'),
            'NAMAHUBUNGAN' => $this->request->getPost('pernikahan'),
            'JENIS_DOKUMEN' => $this->request->getPost('jenis_identitas'),
            'NOMOR_DOKUMEN' => $this->request->getPost('nomor_identitas'),
            'NAMAHOBBY' => $this->request->getPost('hobby'),
            'ALAMAT' => $this->request->getPost('alamat')
        );
        $model->editData($data, $id);
        echo '
            <script>
                alert("Sukses Edit Data");
            </script>
        ';                     
    }

    public function hapus($id)
    {
        $model = new Data_model;
        $getBarang = $model->getData($id)->getRow();
        if(isset($getBarang))
        {
            $model->hapusData($id);
            echo '
                <script>
                    alert("Data telah berhasil dihapus");
                </script>
            ';
        } else 
        {
            echo '
                <script>
                    alert("Hapus Gagal!, ID '.$id.' Tidak ditemukan");
                </script>
        ';
        }
    }
}
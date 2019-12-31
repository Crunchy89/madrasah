<?php
class Berita_model extends CI_Model
{

    public function berita_rules()
    {
        return [
            [
                'field' => 'judul',
                'label' => 'Judul',
                'rules'  => 'trim|required',
                'errors' => array(
                    'required' => 'Field %s tidak boleh kosong'
                )
            ],
            [
                'field' => 'berita',
                'label' => 'Berita',
                'rules'  => 'required',
                'errors' => array(
                    'required' => 'Field %s tidak boleh kosong'
                )
            ]
        ];
    }
    private function _uploadImage()
    {
        $config['upload_path']          = 'assets/img/berita/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }
        return "noimage.png";
    }
    public function tambah()
    {
        $judul = htmlspecialchars($this->input->post('judul'));
        $berita = htmlspecialchars($this->input->post('berita'));
        $date = date('Y-M-d');
        if ($_FILES["gambar"]["name"]) {
            $gambar = $this->_uploadImage();
        } else {
            $gambar = "noimage.png";
        }
        $this->db->set('judul_berita', $judul);
        $this->db->set('isi_berita', $berita);
        $this->db->set('gambar_berita', $gambar);
        $this->db->set('status', 1);
        $this->db->set('tanggal', $date);
        $this->db->insert('berita');
        redirect('berita');
    }
    public function edit_data()
    {
        $id = htmlspecialchars($this->input->post('id'));
        $judul = htmlspecialchars($this->input->post('judul'));
        $berita = htmlspecialchars($this->input->post('berita'));
        $gambar_lama = $this->input->post["gambar_lama"];
        $date = date('Y-M-d');
        if ($_FILES["gambar"]["name"]) {
            $gambar = $this->_uploadImage();
            if ($gambar_lama != $gambar && $gambar_lama != "noimage.png") {
                unlink("assets/img/berita/$gambar_lama");
            }
        } else {
            $gambar = $gambar_lama;
        }
        $this->db->set('judul_berita', $judul);
        $this->db->set('isi_berita', $berita);
        $this->db->set('gambar_berita', $gambar);
        $this->db->set('tanggal', $date);
        $this->db->where('id_berita', $id);
        $this->db->update('berita');
        redirect('berita');
    }
    public function active($id)
    {
        $this->db->set('status', 1);
        $this->db->where('id_berita', $id);
        $this->db->update('berita');
        redirect('berita');
    }
    public function deactive($id)
    {
        $this->db->set('status', 2);
        $this->db->where('id_berita', $id);
        $this->db->update('berita');
        redirect('berita');
    }
    public function hapus()
    {
        $id = htmlspecialchars($this->input->post('id'));
        $gambar = $this->db->query("SELECT gambar_berita FROM berita WHERE id_berita = $id")->row();
        if ($gambar->gambar_berita != "noimage.png") {
            unlink("assets/img/berita/$gambar->gambar_berita");
        }
        $this->db->where('id_berita', $id);
        $this->db->delete('berita');
        redirect('berita');
    }
}

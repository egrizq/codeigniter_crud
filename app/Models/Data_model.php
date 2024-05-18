<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class Data_model extends Model
{
    protected $table = 'tbl_pendaftaran';
     
    public function getData($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['ID_PENDAFTARAN' => $id]);
        }   
    }

    public function saveData($data)
    {
        $builder = $this->db->table($this->table);
        $builder->insert($data);

        header("Location: /");
        exit();
    }
    
    public function editData($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('ID_PENDAFTARAN', $id);
        $builder->update($data);

        
        header("Location: /");
        exit();
    }

    public function hapusData($id)
    {
        $builder = $this->db->table($this->table);
        $builder->delete(['ID_PENDAFTARAN' => $id]);

        
        header("Location: /");
        exit();
    }
}
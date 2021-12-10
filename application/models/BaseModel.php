<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BaseModel extends CI_Model{
    public function getAll($time=null,$jenis=null,$page=0){
        $ITEMS_COUNT=10;
        // this month: SELECT * from bencana where month(tanggal_kejadian)=month(now()) and year(tanggal_kejadian)=year(now())
        // this week: SELECT * from bencana where yearweek(tanggal_kejadian,1)=yearweek(now(),1)
        // this year: SELECT * from bencana where year(tanggal_kejadian)=year(now())
        // today: SELECT * from bencana where date(tanggal_kejadian)=curdate()
        $where="";
        if(!is_null($time)){
            $where="where ";
            switch($time){
                case "0":
                    $where=$where."bencana.id!=999999";
                    break;
                case "1":
                    $where=$where."date(tanggal_kejadian)=curdate()";
                    break;
                case "2":
                    $where=$where."yearweek(tanggal_kejadian,1)=yearweek(now(),1)";
                    break;
                case "3":
                    $where=$where."month(tanggal_kejadian)=month(now()) and year(tanggal_kejadian)=year(now())";
                    break;
                case "4":
                    $where=$where."year(tanggal_kejadian)=year(now())";
                    break;
            }
        }
        if(!is_null($jenis)&&$jenis!=0){
            
            if(!is_null($time)) $where=$where." and ";
            else $where="where ";
            $where=$where."jenis_bencana_id=".$jenis;
        }
        $paging="";
        if($page>0) $paging=" limit ".(($page-1)*$ITEMS_COUNT).",".$ITEMS_COUNT;
        
        $data = $this->db->query("SELECT bencana.id,jenis_bencana_id,judul_bencana,latitude,longitude,deskripsi_bencana,photo_bencana,tanggal_kejadian,alamat,jb.jenis_bencana,jb.icon,jb.color FROM bencana left join jenis_bencana as jb on jb.id=jenis_bencana_id ".$where.$paging);
        return $data->result_array();
    }
    public function getAllJenis(){
        $data = $this->db->query("SELECT jenis_bencana_id,jb.jenis_bencana,count(1) total FROM bencana left join jenis_bencana as jb on jb.id=jenis_bencana_id group by jenis_bencana_id");
        return $data->result_array();
    }
    public function getStats(){
        $stats_total = $this->db->query("SELECT count(1) total FROM bencana;")->row();
        $stats_monthly = $this->db->query("SELECT count(1) total from bencana where month(tanggal_kejadian)=month(now()) and year(tanggal_kejadian)=year(now());")->row();
        $stats_yearly = $this->db->query("SELECT count(1) total from bencana where year(tanggal_kejadian)=year(now());")->row();
        return ["total"=>$stats_total->total,"monthly"=>$stats_monthly->total,"yearly"=> $stats_yearly->total];
    }
    public function getJenisBencana(){
        $data = $this->db->query("SELECT jb.id,jb.jenis_bencana,jb.icon,jb.color,count(bencana.id) total FROM jenis_bencana jb left join bencana on jb.id=jenis_bencana_id group by jb.id;");
        return $data->result_array();
    }
    public function postBencana($data){
        $this->db->insert('bencana', $data);
        // based on https://stackoverflow.com/a/9729598
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    public function editBencana($data,$id){
        $this->db->where('id', $id);
        $this->db->update('bencana', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    public function delBencana($id){
        $this->db->where('id', $id);
        $this->db->delete('bencana');
        return ($this->db->affected_rows() != 1) ? false : true;
    }
}
?>
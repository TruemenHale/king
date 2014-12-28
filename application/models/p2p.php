<?php
class P2p extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
    }
    
    function addBd(){
        $this->load->library('form_validation');
        $config=array(array('field'=> 'title','rules'=>'trim|required|min_length[5]|max_length[20]|xss_clean')
            ,array('field'=>'total','rules'=>'trim|required|greater_than[5000]')
            ,array('field'=>'rate','rules'=>'trim|required')
            ,array('field'=>'intro','rules'=>'trim|required|max_length[10000]|xss_clean')
            ,array('field'=>'paytype','rules'=>'required|numeric')
            ,array('field'=>'type','rules'=>'required|numeric')
            ,array('field'=>'isday','rules'=>'required|numeric')
            ,array('field'=>'period','rules'=>'required|less_than[13]|numeric')
            //,array('field'=>'','rules'=>'')
            );
        $this->form_validation->set_rules($config);
        if (!$this->form_validation->run()) {
            return 'error';
        }else {
            $data=$this->input->post(array('title','total','rate','intro','paytype','type','isday','period','start','end'));
            $data['pid']=$this->session->userdata('id');
            $data['bdtype']=$this->db->query("SELECT rank FROM p2p_user WHERE pid=$data[pid]")->row()->rank;
            $this->db->insert('issue',$data);
            return true;
        }
    }
    
    function getUserInfo(){
        $id=$this->session->userdata('id');
        $res=$this->db->query("SELECT * FROM p2p_user WHERE pid=$id");
        if ($res->num_rows()==0){
            $this->db->query("INSERT INTO  p2p_user (`pid`) VALUES ($id)");
            return $this->db->query("SELECT * FROM p2p_user WHERE pid=$id")->row_array();
        }else{
            return $res->row_array();
        }
    }

    function getMeIndex(){
        $id=$this->session->userdata('id');
        $data=$this->db->query("SELECT * FROM possess WHERE pid=$id")->row_array();
        return $data;
    }
    
    function getIndex(){
        $sql="(SELECT bid,`total`,title,`rate`,`period`,`paytype`,status,`end`,(SELECT `user` FROM user WHERE user.pid=p2p_bd.pid) as `user` FROM p2p_bd";
        $sql=$sql." WHERE status=1 ORDER BY end LIMIT 0,6) UNION ".$sql." WHERE status=2 ORDER BY end DESC LIMIT 0,2)";
        $data['bd'] =  $this->db->query($sql)->result_array();

        //p2p首页公告列表
        $sql="SELECT id,title,time FROM announce ORDER BY time DESC LIMIT 0,5";
        $data['ann'] = $this->db->query($sql)->result_array();
        return $data;
    }
    
    function invest($money,$bid){
        $id=$this->session->userdata('id');
        $this->db->trans_start();
        $data=$this->db->query("SELECT total,froze FROM possess WHERE pid=$id FOR UPDATE")->row_array();
        $have=$data['total'];
        if ($have>=$money){
            $data['total']-=$money;
            $data['froze']+=$money;
            $this->db->where('pid',$id)->update('possess',$data);
            $this->db->insert('p2p_tz',array('pid'=>$id,'bid'=>$bid,'money'=>$money));
            if ($this->db->trans_complete()) return true;
            else return '未知错误';
        }
        $this->db->trans_complete();
        return '余额不足，请充值！';
    }
}
?>
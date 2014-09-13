<?php

class mod_producto extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function insert($data) {
        $this->db->insert('producto', $data);
    }
    
    function insert_tipo($data) {
        $this->db->insert('tipo_producto', $data);
    }
    
    function update($id, $data) {
        $this->db->where('codi_prod', $id);
        $this->db->update('producto', $data);
    }
    
    public function get_vproducto() {
        $this->db->select('producto.codi_prod, producto.codi_tpro,producto.nomb_prod,producto.obsv_prod,'
                . 'producto.esta_prod,tipo_producto.nomb_tipo');
        $this->db->from('producto');
        $this->db->join('tipo_producto', 'producto.codi_tpro = tipo_producto.codi_tpro');
        $query = $this->db->get();
        return $query->result();
    }
    
    function get_vproducto_paginate($limit, $start, $string = "") {
        $this->db->select('producto.codi_prod, producto.codi_tpro,producto.nomb_prod,producto.obsv_prod,'
                . 'producto.esta_prod,tipo_producto.nomb_tipo');
        $this->db->from('producto');
        $this->db->join('tipo_producto', 'producto.codi_tpro = tipo_producto.codi_tpro');
        $this->db->like('producto.codi_prod', $string);
        $this->db->or_like('producto.codi_tpro', $string);
        $this->db->or_like('producto.nomb_prod', $string);
        $this->db->or_like('producto.obsv_prod', $string);
        $this->db->or_like('tipo_producto.nomb_tipo', $string);
        $query = $this->db->get();
        $productos = $query->result();
        $i = 0;
        $c = 0;
        $result = array();
        foreach ($productos as $row) {
            if ($i >= $start) {
                if ($c < $limit) {
                    $result[$c] = $row;
                    $c++;
                } else {
                    break;
                }
            }
            $i++;
        }
        return $result;
    }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bases_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function insertaRegistro($data)
    {
        $cadena = "insert into datos_particulares(nombre,a_paterno,a_materno,id_pais,id_estado,id_municipio,id_medio,f_registro) values('" . $data['nombre'] . "','" . $data['paterno'] . "','" . $data['materno'] . "'," . $data['pais'] . "," . $data['estado'] . "," . $data['municipio'] . "," . $data['medio'] . ",'2017-10-27')";
        $this->db->trans_begin();
        $this->db->query($cadena);

        if ($this->db->trans_status() === FALSE)
            $this->db->trans_rollback();
        else
            $this->db->trans_commit();
    }

    public function validaLogin($data)
    {
        $cadena = "select * from usuarios where login='" . $data['login']
            . "' and password='" . $data['password'] . "'";
        $query = $this->db->query($cadena);
        return $query;
    }

    public function getMedios()
    {
        $cadena = "select * from catalogo_medios";
        $query = $this->db->query($cadena);
        return $query;
    }

    public function getEscuelas()
    {
        $cadena = "select * from catalogo_escuelas order by nombre_escuela";
        $query = $this->db->query($cadena);
        return $query;
    }

    public function llenaEstados($pais)
    {
        $cadena = "select * from catalogo_estados where id_pais='" . $pais . "'";
        $query = $this->db->query($cadena);
        if ($query->num_rows() > 0)
            return $query;
        else
            return FALSE;
    }

    public function llenaSalones($sede)
    {
        $cadena = "select * from catalogo_salones where id_sede='" . $sede . "'";
        $query = $this->db->query($cadena);
        if ($query->num_rows() > 0)
            return $query;
        else
            return FALSE;
    }

    public function muestraInscritos($salon)
    {
        $cadena = "call usp_cuenta_alumnos('" . $salon . "')";
        $query = $this->db->query($cadena);
        if ($query->num_rows() > 0)
            return $query;
        else
            return FALSE;
    }

    public function llenaMunicipios($estado)
    {
        $cadena = "select * from catalogo_municipios where id_estado='" . $estado . "'";
        $query = $this->db->query($cadena);
        if ($query->num_rows() > 0)
            return $query;
        else
            return FALSE;
    }

    public function getPaises()
    {
        $cadena = "select * from catalogo_pais order by nombre_pais";
        $query = $this->db->query($cadena);
        return $query;
    }

    public function getSedes()
    {
        $cadena = "select * from catalogo_sedes where ubicacion='Local' order by nombre_sede";
        $query = $this->db->query($cadena);
        return $query;
    }
}

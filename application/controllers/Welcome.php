<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('bases_model');
        $this->load->library('encrypt');
    }


    public function cerrarSesion()
    {
        $datasession = array('nivel' => '');
        $this->session->unset_userdata($datasession);
        $this->session->sess_destroy();
        redirect('/Welcome/index/', 'refresh');
    }

    public function llenaEstados()
    {
        $options = "";
        if ($this->input->post('pais'))
        {
            $pais = $this->input->post('pais');
            $estados = $this->bases_model->llenaEstados($pais); ?>
            <div name="estado" id="estado">
                <label for="estado">Selecciona un Estado:</label>
                <select class="form-control" id="estado1" name="estado1">
                    <?php foreach ($estados->result() as $fila) { ?>
                        <option value="<?= $fila->id_estado ?>"><?= $fila->nombre_estado ?></option>
                    <?php } ?>
                </select>
            </div>
            <?php
        }
    }

    public function llenaSalones()
    {
        if ($this->input->post('sede')) {
            $sede = $this->input->post('sede');
            $salones = $this->bases_model->llenaSalones($sede); ?>
            <div name="salon" id="salon">
                <label for="salon">Selecciona un Salón:</label>
                <select class="form-control" id="salon1" name="salon1">
                    <?php foreach ($salones->result() as $fila) { ?>
                        <option value="<?= $fila->id_salon ?>"><?= $fila->nombre_salon . "  capacidad(" . $fila->capacidad . ")  " ?></option>
                    <?php } ?>
                </select>
            </div>
            <?php
        }
    }

    public function muestraInscritos()
    {
        if ($this->input->post('salon')) {
            $salon = $this->input->post('salon');
            $inscritos = $this->bases_model->muestraInscritos($salon); ?>
            <div name="inscrito" id="inscrito">
                <label for="inscrito">Total de Inscritos:</label>
                <input type="text" readonly value="<?php foreach ($inscritos->result() as $fila) {
                    echo $fila->num;
                } ?>"/>
            </div>
            <?php
        }
    }


    public function llenaMunicipios()
    {
        $options = "";
        if ($this->input->post('estado')) {
            $estado = $this->input->post('estado');
            $municipios = $this->bases_model->llenaMunicipios($estado); ?>
            <div name="municipio" id="municipio">
                <label for="municipio">Selecciona un Municipio:</label>
                <select class="form-control" id="municipio" name="municipio">
                    <?php foreach ($municipios->result() as $fila) { ?>
                        <option value="<?= $fila->id_municipio ?>"><?= $fila->nombre_municipio ?></option>
                    <?php } ?>
                </select>
            </div>
            <?php
        }
    }

    public function validaLogin()
    {
        //$encrypted_string = $this->encrypt->encode($this->input->post('login'));
        //var_dump($this->input->post('login'));
        //var_dump($this->encrypt->decode($encrypted_string));

        $data = array(
            'login' => $this->input->post('login'),
            'password' => $this->input->post('pwd'));

        $usuarios = $this->bases_model->validaLogin($data);
        $datasession = "";

        foreach ($usuarios->result() as $row)
        {
            $datasession = array(
                'login' => $row->login, 'password' => $row->password,
                'nivel' => $row->nivel,);
        }

        $this->session->set_userdata($datasession);
        $this->load->view('headerbootstrap');
        $this->load->view('encabezado');
        $data['medios'] = $this->bases_model->getMedios();
        $data['escuelas'] = $this->bases_model->getEscuelas();
        $data['paises'] = $this->bases_model->getPaises();
        $data['sedes'] = $this->bases_model->getSedes();
        $this->load->view('registro', $data);
        $this->load->view('footerbootstrap');
    }

    public function index()
    {
        $this->load->view('headerbootstrap');
        $this->load->view('login');
    }

    public function insertaRegistro()
    {
        $data['data'] = array(
            'nombre' => $this->input->post('nombre'),
            'paterno' => $this->input->post('paterno'),
            'materno' => $this->input->post('materno'),
            'medio' => $this->input->post('medio'),
            'pais' => $this->input->post('pais'),
            'estado' => $this->input->post('estado1'),
            'municipio' => $this->input->post('municipio'),);
        $this->bases_model->insertaRegistro($data['data']);
    }
}

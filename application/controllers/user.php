<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->output->set_header('Access-Control-Allow-Origin: *');

        $this->load->model('usermodel', 'user');
    }

    function index()
    {
        $this->load->library('pagination');

        $total = $this->user->countAll();

        $page = 1;

        if (@$this->uri->segment(2)) {
            $page = $this->uri->segment(2);
        }

        $limit = 2;
        $offset = ($page - 1) * $limit;

        $data['users'] = $this->user->getAll(array('offset' => $offset, 'limit' => $limit));

        $config['use_page_numbers'] = TRUE;

        $config['base_url'] = site_url('user');

        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['uri_segment'] = 2;
        $config['num_links'] = 2;

        $config['full_tag_open'] = "<p style='float:right;'>";
        $config['full_tag_close'] = '</p>';
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['next_link'] = '&gt;';
        $config['prev_link'] = '&lt;';
        $config['cur_tag_open'] = ' <b>';
        $config['cur_tag_close'] = '</b>';

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view("user/index", $data);
    }


    function create()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('user[user_name]', 'Nome', 'required');
        $this->form_validation->set_rules('user[user_email]', 'E-mail', 'required|valid_email');
        $this->form_validation->set_rules('user[user_password]', 'Senha', 'required|min_length[6]|max_length[8]');
        $this->form_validation->set_rules('user[user_cfm_password]', 'Confirme a Senha', 'required|min_length[6]|max_length[8]|matches[user[user_password]]');
        $this->form_validation->set_rules('user[user_phone]', 'Telefone', 'required');
        // $this->form_validation->set_rules('user[user_rg]', 'RG', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view("user/create");

        }else{

            if (@$_POST['create_user']) {

                if($this->phone_is_valid($_POST['user']['user_phone'])) {

                    $data = $_POST['user'];
                    $data['user_date'] = date('Y-m-d H:i:s');
                    $this->user->add($data);
                    $this->session->set_flashdata('message', 'Usuário criado com sucesso!');
                    redirect("user");

                }else{

                    $this->session->set_flashdata('message', 'Telefone inválido!');
                    $this->load->view("user/create");
                }

            }

        }
    }

    function edit()
    {

        $id = $this->uri->segment(3);

        $user = $this->user->getById($id);

        if (!$user) {
            redirect("user");
        }

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('user[user_name]', 'Nome', 'required');
        $this->form_validation->set_rules('user[user_email]', 'E-mail', 'required|valid_email');
        $this->form_validation->set_rules('user[user_password]', 'Senha', 'required|min_length[6]|max_length[8]');
        $this->form_validation->set_rules('user[user_cfm_password]', 'Confirme a Senha', 'required|min_length[6]|max_length[8]|matches[user[user_password]]');
        $this->form_validation->set_rules('user[user_phone]', 'Telefone', 'required');
        // $this->form_validation->set_rules('user[user_rg]', 'RG', 'required');


        if ($this->form_validation->run() == false) {

            $data['user'] = $user;
            $this->load->view("user/edit", $data);

        } else {


            if (@$_POST['update_user']) {

                if($this->phone_is_valid($_POST['user']['user_phone'])){

                $userdata = $_POST['user'];
                $this->user->update($userdata, $id);
                $this->session->set_flashdata('message', 'Usuário atualizado com sucesso!');

                redirect("user");

                }else{

                    $this->session->set_flashdata('message', 'Telefone inválido!');
                    $data['user'] = $user;
                    $this->load->view("user/edit", $data);
                }
            }

        }


    }

    function delete()
    {
        $id = $this->uri->segment(3);
        $this->user->delete($id);
        $this->session->set_flashdata('message', 'Usuário deletado!');
        redirect("user");
    }


    function phone_is_valid($value) {

        $value = trim($value);

        $match = '/^\(?[0-9]{2}\)?[-. ]?[0-9]{5}[-. ]?[0-9]{4}$/';
        $replace = '/^\(?([0-9]{2})\)?[-. ]?([0-9]{5})[-. ]?([0-9]{4})$/';
        $return = '($1) $2-$3';

        if (preg_match($match, $value)) {

            $num = preg_replace('/[^0-9]/', '', $value);
            $ddd =  substr ($num, 0, 2);
            $fn =  substr ($num, 2, 1);

            if ($ddd==00|$ddd==01|$ddd==02|$ddd==03|$ddd==04|$ddd==05|$ddd==06|$ddd==07|$ddd==08|$ddd==09|$ddd==10) {
                return false;
            }
            
            if ($fn==6|$fn==7|$fn==8|$fn==9){
                return preg_replace($replace, $return, $value);
            }else{
                return false;
            }

        } else {
            return false;
        }
    }


}

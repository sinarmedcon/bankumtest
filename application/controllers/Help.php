<?php 

class Help extends CI_Controller{
    public function about()
    {
        //this function is used to
        //show about us information 

        $auth['title'] = 'AnglerNap :: About Us';
        $this->load->view('auth/template/header', $auth);
        $this->load->view('auth/index/about');
        $this->load->view('auth/template/footer');
    }

    public function term()
    {
        //this function is used to
        //show term information

        $auth['title'] = 'AnglerNap :: Term';
        $this->load->view('auth/template/header', $auth);
        $this->load->view('auth/index/term');
        $this->load->view('auth/template/footer');
    }

    public function privacy()
    {
        //this function is used to
        //show our privacy information

        $auth['title'] = 'AnglerNap :: Privacy';
        $this->load->view('auth/template/header', $auth);
        $this->load->view('auth/index/privacy');
        $this->load->view('auth/template/footer');
    }

    public function D66276873()
    {
        //this function is used to load
        //documentation how to use
        //anglernap
        $auth['title'] = 'AnglerNap :: Using AnglerNap';
        $this->load->view('auth/template/header', $auth);
        $this->load->view('help/using/66276873');
        $this->load->view('auth/template/footer');
    }

    public function B8884784()
    {
        //this function is used to load 
        //documentation how to manage
        //user account

        $auth['title'] = 'AnglerNap :: Manage Your Account';
        $this->load->view('auth/template/header', $auth);
        $this->load->view('help/manage/B8884784');
        $this->load->view('auth/template/footer');
    }

    public function M98987487()
    {
        //this function is used to load
        //documentation problem solving
        $auth['title'] = 'AnglerNap :: Problem Solving';
        $this->load->view('auth/template/header', $auth);
        $this->load->view('help/solve/98987487');
        $this->load->view('auth/template/footer');
    }
}
<?php 

class Auth extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model', 'auth');
        $this->load->helper('time_ago');
        $this->load->library('form_validation');
        $this->load->library('encryption');
        $this->load->library('upload');
    }

    public function index()
    {
        $t['title'] = 'Welcome to Bankumtest';
        $this->load->view('auth/template/header', $t);
        $this->load->view('auth/index/main');
        $this->load->view('auth/template/footer');
    }

    public function post()
    {
        $data = [
            'error' => '',
            'success' => ''
        ];
        $t['title'] = 'Bankumtest :: Write a Post';
        $this->load->view('auth/template/header', $t);
        $this->load->view('auth/index/post', $data);
        $this->load->view('auth/template/footer');
    }

    public function post_process()
    {
        $config = [
            [
                'field' => 'title',
                'label' => 'Title',
                'rules' => 'required'
            ],
            [
                'field' => 'content',
                'label' => 'Content',
                'rules' => 'required'
            ]
        ];
        $this->form_validation->set_rules($config);
        if($this->form_validation->run() == FALSE)
        {
            $data = [
                'error' => '',
                'success' => ''
            ];
            $t['title'] = 'Bankumtest :: Validation Error!';
            $this->load->view('auth/template/header', $t);
            $this->load->view('auth/index/post', $data);
            $this->load->view('auth/template/footer');
        } else {
            $title = $this->input->post('title');
            $content = $this->input->post('content');
            $thumbnail = $_FILES["thumbnail"]["name"];
            $config = [
                'upload_path' => './thumbnail/',
                'allowed_types' => 'jpg|jpeg|png|gif',
                'overwrite' => TRUE,
                'remove_spaces' => FALSE,
                'file_name' => $thumbnail
            ];
            $this->upload->initialize($config);
            if($this->upload->do_upload('thumbnail'))
            {
                $dateString = '%Y-%m-%d %H:%i:%s';
                $time = time();
                $times = mdate($dateString, $time);
                $result = [
                    'title' => $title,
                    'content' => $content,
                    'thumbnail' => $thumbnail,
                    'time' => $times
                ];
                $upload = $this->auth->post_content($result);
                if($upload)
                {
                    $data = [
                        'error' => '',
                        'success' => 'Your Content Has Been Post'
                    ];
                    $t['title'] = 'Bankumtest :: Your Content Has Been Posted';
                    $this->load->view('auth/template/header', $t);
                    $this->load->view('auth/index/post', $data);
                    $this->load->view('auth/template/footer');
                } else {
                    $data = [
                        'error' => $this->upload->display_errors(),
                        'success' => ''
                    ];
                    $t['title'] = 'Bankumtest :: Error';
                    $this->load->view('auth/template/header', $t);
                    $this->load->view('auth/index/post', $data);
                    $this->load->view('auth/template/footer');
                }
            }
        }
    }

    public function readmore()
    {
        $keyid = $this->input->get('keyid');
        $get = $this->auth->get_keyid($keyid);
        foreach($get->result() as $row)
        {
            $title = $row->title;
            $content = $row->content;
            $thumbnail = $row->thumbnail;
            $time = time_ago($row->time);

            $data = [
                'title' => $title,
                'content' => $content,
                'thumbnail' => $thumbnail,
                'time' => $time
            ];
            $t['title'] = 'Bankumtest :: '.$title;
            $this->load->view('auth/template/header', $t);
            $this->load->view('auth/index/readmore', $data);
            $this->load->view('auth/template/footer');
        }
    }

    public function dashboard()
    {
        $t['title'] = 'Bankumtest :: Dashboard';
        $this->load->view('auth/template/header', $t);
        $this->load->view('auth/index/dashboard');
        $this->load->view('auth/template/footer');
    }

    public function update()
    {
        $keyid = $this->input->post('keyid');
        $this->session->set_userdata('keyid', $keyid);
        $get = $this->auth->get_keyid($keyid);
        foreach($get->result() as $row)
        {
            $title = $row->title;
            $content = $row->content;
            $thumbnail = $row->thumbnail;
            $data = [
                'title' => $title,
                'content' => $content,
                'error' => '',
                'success' => '',
                'thumbnail' => $thumbnail
            ];
            $t['title'] = 'Bankumtest :: Update Content';
            $this->load->view('auth/template/header', $t);
            $this->load->view('auth/index/update', $data);
            $this->load->view('auth/template/footer');

        }
    }

    public function update_process()
    {
        $keyid = $this->session->userdata('keyid');
        $config = [
            [
                'field' => 'title',
                'label' => 'Title',
                'rules' => 'required'
            ],
            [
                'field' => 'content',
                'label' => 'Content',
                'rules' => 'required'
            ]
        ];
        $this->form_validation->set_rules($config);
        if($this->form_validation->run() == FALSE)
        {
            $get = $this->auth->get_keyid($keyid);
            foreach($get->result() as $row)
            {
                $title = $row->title;
                $content = $row->content;
                $thumbnail = $row->thumbnail;
                $data = [
                    'title' => $title,
                    'content' => $content,
                    'error' => '',
                    'success' => '',
                    'thumbnail' => $thumbnail
                ];
                $t['title'] = 'Bankumtest :: Update Content';
                $this->load->view('auth/template/header', $t);
                $this->load->view('auth/index/update', $data);
                $this->load->view('auth/template/footer');

            }
        } else {
            $title = $this->input->post('title');
            $content = $this->input->post('content');
            $thumbnail = $_FILES["thumbnail"]["name"];
            $config = [
                'upload_path' => './thumbnail/',
                'allowed_types' => 'jpg|jpeg|png|gif',
                'overwrite' => TRUE,
                'remove_spaces' => FALSE,
                'file_name' => $thumbnail
            ];
            $this->upload->initialize($config);
            if($this->upload->do_upload('thumbnail'))
            {
                $dateString = '%Y-%m-%d %H:%i:%s';
                $time = time();
                $times = mdate($dateString, $time);
                $result = [
                    'title' => $title,
                    'content' => $content,
                    'thumbnail' => $thumbnail,
                    'time' => $times
                ];
                $update = $this->auth->update_content($result, $keyid);
                if($update)
                {
                    $get = $this->auth->get_keyid($keyid);
                    foreach($get->result() as $row)
                    {
                        $title = $row->title;
                        $content = $row->content;
                        $thumbnail = $row->thumbnail;
                        $data = [
                            'title' => $title,
                            'content' => $content,
                            'error' => '',
                            'success' => 'Update Success',
                            'thumbnail' => $thumbnail
                        ];
                        $t['title'] = 'Bankumtest :: Update Content';
                        $this->load->view('auth/template/header', $t);
                        $this->load->view('auth/index/update', $data);
                        $this->load->view('auth/template/footer');

                    }
                } else {
                    $get = $this->auth->get_keyid($keyid);
                    foreach($get->result() as $row)
                    {
                        $title = $row->title;
                        $content = $row->content;
                        $thumbnail = $row->thumbnail;
                        $data = [
                            'title' => $title,
                            'content' => $content,
                            'error' => $this->upload->display_errors(),
                            'success' => '',
                            'thumbnail' => $thumbnail
                        ];
                        $t['title'] = 'Bankumtest :: Update Content';
                        $this->load->view('auth/template/header', $t);
                        $this->load->view('auth/index/update', $data);
                        $this->load->view('auth/template/footer');

                    }
                }
            }
        }
    }

    public function delete()
    {
        $keyid = $this->input->post('keyid');
        $del = $this->auth->delete($keyid);
        $url = base_url();
        redirect($url);
    }

    public function term()
    {
        $t['title'] = 'Bankumtest :: Term & Agreement';
        $this->load->view('auth/template/header', $t);
        $this->load->view('auth/index/term');
        $this->load->view('auth/template/footer');
    }

}
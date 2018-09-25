<?php 
class Pages extends CI_Controller {
    public function view($page="home", $slug=null){
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }
        
        $this->load->model('Json');

        $data['data'] = $this->Json->getDataFromJSON();
        $data['slug'] = $slug;
        $data['active_page'] = $page;

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');
    }

    public function news($slug) {
        $this->load->model('Json');

        $data['data'] = $this->Json->getDataFromJSON();
        $data['slug'] = $slug;
        $data['active_page'] = "news";

        $this->load->view('templates/header', $data);
        $this->load->view('pages/news-content', $data);
        $this->load->view('templates/footer');
    }
}
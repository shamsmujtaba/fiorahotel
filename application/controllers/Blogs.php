<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blogs extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $data['title'] = 'blogs';
        $data['description'] = 'Read Our Blogs ';

        $var['content'] = $this->load->view('blogs', $data, true);
        $this->load->view('template2023', $var);
    }


    public function get_blogs($slug)
    {
        $data = $this->get_page_setting($slug);

        $var['content'] = $this->load->view('blogs/' . $slug . '', $data, true);
        $this->load->view('template2023', $var);
    }

    
    function get_page_setting($slug)
    {

        $data = array();
        if ($slug == '10-tips-for-tripping-to-murree') {
            $data['title'] = '10 BEST TIPS FOR HAVING A TRIP IN MURREE – PAKISTAN';
            $data['description']= 'Living Paradise On Planet Earth: Northern Areas';
            return $data;
        } elseif ($slug == 'murree-for-nature-lovers-adventure-seekers') {
            $data['title'] = 'Murree for Nature Lovers & Adventure Seekers';
            $data['description']= 'Living Paradise On Planet Earth: Northern Areas';
            return $data;
        }elseif ($slug=='living-paradise-on-planet-earth-northern-areas'){
            $data['title']= 'Living Paradise On Planet Earth: Northern Areas';
            $data['description']= 'Living Paradise On Planet Earth: Northern Areas';
            return $data;
    }
}
}

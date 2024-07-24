<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __Construct()
    {
        parent::__Construct();
        if (!in_array($this->router->fetch_method(), ['login', 'process_login'])) {
            $this->check_session();
        }
        $this->load->model('admin_model');
    }

    public function check_session()
    {
        // Check if the user is logged in
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }

        // Check for inactivity timeout (10 minutes)
        $last_activity = $this->session->userdata('last_activity');
        if (time() - $last_activity > 600) {
            $this->session->sess_destroy();
            redirect('login');
        }

        // Update last activity timestamp
        $this->session->set_userdata('last_activity', time());
    }


    // Controller function
    public function search()
    {
        $draw = $this->input->post('draw');
        $start = $this->input->post('start');
        $length = $this->input->post('length');
        $columnIndex = $this->input->post('order')[0]['column'];
        $columnName = $this->input->post('columns')[$columnIndex]['data'];
        $columnSortOrder = $this->input->post('order')[0]['dir'];
        $searchValue = $this->input->post('search')['value'];

        $searchByFromdate = $this->input->post('searchByFromdate');
        $searchByTodate = $this->input->post('searchByTodate');



        // Total number of records without filtering
        $totalRecords = $this->common_model->select_latest_review_by_phone_number_without_filter_count(
            '*',
            'reviews',
            'contact_no',
            'id',
            'DESC',
        );

        $totalRecords = $this->common_model->select_latest_review_by_phone_number_without_filter_count(
            '*',
            'reviews',
            'contact_no',
            'id',
            'DESC',
        );

        $recordsFiltered = $this->common_model->select_latest_review_by_phone_number_with_filter_count(
            '*',
            'reviews',
            $searchValue,
            $searchByFromdate,
            $searchByTodate,
            'contact_no',
            'id',
            'DESC',
        );

        // Search query
        $searchQuery = $this->common_model->buildSearchQuery($searchValue, $searchByFromdate, $searchByTodate);

        $reviews = $this->common_model->select_latest_review_by_phone_number_with_filter(
            '*',
            'reviews',
            'contact_no',
            'id',
            'DESC',
            $searchQuery,
            $start,
            $length
        );

        $totalRecordwithFilter = count($reviews);
        // die;
        $data = array();

        foreach ($reviews as $row) {
            $timestamp = strtotime($row->checkout_date);
            $formattedDate = date("d-M-Y", $timestamp);

            $data[] = array(
                "customer_name" => $row->customer_name,
                "contact_no" => $row->contact_no,
                "roomId" => $row->roomId,
                "comments" => $row->comments,
                "quality" => $row->quality,
                "timeliness" => $row->timeliness,
                "comfort" => $row->comfort,
                "ambience" => $row->ambience,
                "checkout_date" => $formattedDate,
            );
        }

        // Response
        $response = array(
            "draw" => intval($draw),
            "recordsTotal" => $totalRecords,
            "recordsFiltered" => $recordsFiltered,
            "data" => $data
        );
        echo json_encode($response);
        die;
    }

    public function index()
    {
        $data['title'] = 'Fiora Dashboard';

        $data['full_name'] = $this->session->userdata('full_name');
        $review_counts = $this->common_model->count_reviews_by_quality('reviews');
        $data['review_counts'] = $review_counts[0];
        $data['reviews'] = $this->common_model->select_latest_review_by_phone_number('*', 'reviews', 'contact_no', 'id', 'DESC');

        if ($data['reviews']) {
            $var['content'] = $this->load->view('admin/feedbacks', $data, true);
            $this->load->view('admin/template2023', $var);
        } else {
            echo 'no data';
        }
    }

    public function deleteSingleLead()
    {
        $id = $_POST['id'];
        $query2 =  $this->admin_model->delete_where(array('id' => $id), 'leads');

        if ($query2) {
            echo json_encode(array('success' => 'success', 'msg' => 'Lead Deleted Successfully'));
        } else {
            echo json_encode(array('failed' => 'failed', 'msg' => 'Not Deleted'));
        }
    }

    public function login()
    {
        $this->load->view('login');
    }



    public function process_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->admin_model->check_login($username, $password);
        if ($user) {
            $this->session->set_userdata([
                'logged_in' => true,
                'last_activity' => time(),

            ]);
            redirect('dashboard');
        } else {
            redirect('login');
        }
    }
}

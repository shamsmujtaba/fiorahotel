<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function contactUs()
    {
        $data = $this->input->post();
        // print_r($data);
        // exit;
        $this->sendemail($data);
        $this->session->set_flashdata('success', 'Thanks for submission');
        redirect(base_url());
    }
    public function sendemail($postData)
    {
        require_once './vendor/autoload.php';

        $mgClient = Mailgun\Mailgun::create('Mailgun Key');
        $domain = "domain name";

        $template = '';

        $data['data'] = $postData;
        $template = $this->load->view('email_template', $data, true);

        $params = array(
            'from' => 'contact-form@fiorahotel.com',
            'to' => 'info@fiorahotel.com',
            'subject' => 'Form Submited On Fiora Hotel',
            'text' => 'Testing Email',
            'html' => $template,
        );

        try {
            $mgClient->messages()->send($domain, $params);
            return 1;
        } catch (Exception $e) {
            // echo $e->getMessage();
            return 0;
        }
    }



    public function submitReview()
    {
        // Check if the request method is POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve all POST data
            $postData = $this->input->post();
            $dateTime = DateTime::createFromFormat('d-m-Y',  $postData['checkout_date']);

            // Format the date as MySQL-compatible string
            $postData['checkout_date'] = $dateTime->format('Y-m-d H:i:s');
            if ($postData['quality'] == 'poor' || $postData['timeliness'] == 'poor' || $postData['comfort'] == 'poor' || $postData['cleanliness'] == 'poor' || $postData['ambience'] == 'poor') {
                $this->send_bad_review_email($postData);
            }
            // Insert data into the 'leads' table using the common_model
            $lead_id = $this->common_model->insert_array('reviews', $postData);

            // Check if the insertion was successful
            if ($lead_id) {
                $this->session->set_flashdata('message', 'Review Submitted Successfully');
            } else {
                $this->session->set_flashdata('message', 'Form Submission Failed');
            }
        } else {
            $this->session->set_flashdata('message', 'Invalid Request Method');
        }
        redirect('google-reviews');
    }

    public function send_bad_review_email($postData)
    {
        require_once './vendor/autoload.php';

        $mgClient = Mailgun\Mailgun::create('Mailgun Key');
        $domain = "domain  name";

        $template = '';

        $data['data'] = $postData;
        $template = $this->load->view('admin/review_template', $data, true);

        $params = array(
            'from' => 'contact-form@fiorahotel.com',
            'to' => 'info@fiorahotel.com',
            'subject' => 'Bad Review Submitted by client on Fiora Hotel',
            'text' => 'Poor Reviews Alert',
            'html' => $template,
        );

        try {
            $mgClient->messages()->send($domain, $params);
            return 1;
        } catch (Exception $e) {
            // echo $e->getMessage();
            return 0;
        }
    }
}

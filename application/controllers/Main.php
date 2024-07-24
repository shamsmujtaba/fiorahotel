<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
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

		

// 		$data = $this->getReviews();
		$data['title'] = 'Fiora Hotel - Hotel Booking in Murree';
		$data['description'] = 'Experience luxury and serenity at Fiora Hotel. Impeccable service and serene ambiance await. Hotel Booking in Murree for an unforgettable stay.';
		$data['canonical'] = base_url();
		$var['content'] = $this->load->view('home', $data, true);
		$this->load->view('template2023', $var);
	}

	public function threeDimages()
	{
		$data['title'] = 'Fiora Hotel | 3D Images';
		$data['description'] = 'Experience luxury and serenity at Fiora Hotel. Impeccable service and serene ambiance await. Book now for an unforgettable stay.';
		$var['content'] = $this->load->view('3d_images', $data, true);
		$this->load->view('template3d', $var);
	}
	public function googleReviews()
	{

		

// 		$data = $this->getReviews();
		$data['title'] = 'Google Reviews:: Hotel Booking in Murree';
		$data['description'] = 'Experience luxury and serenity at Fiora Hotel. Impeccable service and serene ambiance await. Book now for an unforgettable stay.';
		$data['canonical'] = base_url().'google-reviews';
		$var['content'] = $this->load->view('reviews', $data, true);
		$this->load->view('template2023', $var);
	}
	public function getReviews()
	{
		$cid = 5238456790674600095; //CID of a place can be genrated from https://pleper.com/index.php?do=tools&sdo=cid_converter
		//execute curl
		$url = 'https://maps.googleapis.com/maps/api/place/details/json?cid=' . $cid . '&key=AIzaSyBlyiBabBnPFsJCujCKYojfBsvlG9b3yN0';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, false);
		$data = curl_exec($ch);
		curl_close($ch);

		$arrayData = json_decode($data, true); // json object to array conversion
		$result = $arrayData['result'];
		$overall_ratings = '';

		$result['user_ratings_total']; // display total number of users who rated
		$result['rating']; // display total average rating
		$result['reviews'];   //holds information like author_name, author_url, language, profile_photo_url, rating, relative_time_description, text, time
		$result['url'];
		// echo "<pre>";
		// print_r($result['url']);
		// die;
		// echo $reviews[0]->author_name;
		// $authorName = $reviews[0]['author_name'];
		// echo $authorName;

		// foreach ($reviews as $review) {
		//     $authorName = $review['author_name'];
		//     // You can do something with $authorName here, such as printing it or storing it.
		// }


		// die;
		//display on view
		// var_dump($total_users);
		// var_dump($overall_ratings);
		// var_dump($reviews);  

		return $result;
	}

	public function rooms()
	{
		$data['title'] = 'Luxurious Rooms & Suites | Fiora Hotel Murree - Book Your Retreat';
		$data['description'] = 'Indulge in luxury at Fiora Hotel Murree. Explore our range of exquisite rooms and suites, designed for your comfort and relaxation.';
		

		$var['content'] = $this->load->view('rooms', $data, true);
		$this->load->view('template2023', $var);
	}



	public function faqs()
	{
		$data['title'] = 'Frequently Asked Questions | Fiora Hotel Murree ';
		
		$data['description'] = 'Find answers to your questions about Fiora Hotel Murree in our comprehensive FAQ section. Get all the information you need for a seamless stay';
		$var['content'] = $this->load->view('faqs', $data, true);
		$this->load->view('template2023', $var);
	}

	public function checkout()
	{
		$data['title'] = 'Checkout | Fiora Hotel Murree ';
		
		$data['description'] = 'Checkout';
		$var['content'] = $this->load->view('checkout', $data, true);
		$this->load->view('template2023', $var);
	}



	public function contact()
	{
		$data = $this->input->post();
		// Validate reCAPTCHA
		$this->form_validation->set_rules('g-recaptcha-response', 'reCAPTCHA', 'required|callback_verify_recaptcha');

		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('message', 'Message', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Contact Fiora Hotel Murree - Reach Out to Us Today';
			$data['description'] = 'Have questions or need assistance? Contact Fiora Hotel Murree today. We are here to help you plan an unforgettable stay. Get in touch now';
			$var['content'] = $this->load->view('contact', $data, true);
			$this->load->view('template2023', $var);
		} else {
			$this->sendemail($data);
			$this->session->set_flashdata('success', 'Thanks for submission');
			redirect(base_url());
		}
	}

	public function verify_recaptcha($recaptchaResponse)
	{

		$secretKey = $this->config->item('google_secret'); // Replace with your reCAPTCHA Secret Key

		$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$recaptchaResponse");
		$responseData = json_decode($response);

		if ($responseData->success) {
			return TRUE; // reCAPTCHA validation succeeded
		} else {
			$this->form_validation->set_message('verify_recaptcha', 'reCAPTCHA verification failed. Please try again.');
			return FALSE; // reCAPTCHA validation failed
		}
	}

	public function sendemail($postData)
	{
		require_once './vendor/autoload.php';

		$mgClient = Mailgun\Mailgun::create('Mailgun Key');
		$domain = "domain name";

		$template = '';

		$data['data'] = $postData;
		$template = $this->load->view('email_template', $data, true);
		// $template = $this->load->view('frontend/email_templates/' . $page, $data, true);

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
			return 0;
		}
	}


	public function gallery()
	{
		$data['title'] = 'Fiora Hotel Murree Gallery - Explore Our Serene Retreat';
		$data['description'] = 'Immerse yourself in the beauty of Fiora Hotel Murree. Browse our gallery to discover the serenity and elegance that await you. Plan your visit today';

		$var['content'] = $this->load->view('gallery', $data, true);
		$this->load->view('template2023', $var);
	}

	public function delux_room()
	{
		$data['title'] = 'Luxury Deluxe Rooms | Fiora Hotel Murree - Book Your Retreat';
		$data['description'] = 'Experience pure luxury in our Deluxe Rooms at Fiora Hotel Murree. Immerse yourself in comfort and style. Reserve your Deluxe Room for an exquisite stay';

		$var['content'] = $this->load->view('delux_room', $data, true);
		$this->load->view('template2023', $var);
	}

	public function delux_room_simple()
	{
		$data['title'] = 'Luxury Deluxe Rooms | Fiora Hotel Murree - Book Your Retreat';
		$data['description'] = 'Experience pure luxury in our Deluxe Rooms at Fiora Hotel Murree. Immerse yourself in comfort and style. Reserve your Deluxe Room for an exquisite stay';
	
		$var['content'] = $this->load->view('delux_room_simple', $data, true);
		$this->load->view('template2023', $var);
	}


	public function studio_room()
	{
		$data['title'] = 'Check Studio Rooms | Fiora Hotel Murree - Book Your Retreat';
		$data['description'] = 'Discover chic and stylish Studio Rooms at Fiora Hotel Murree. Your perfect sanctuary for relaxation and comfort. Book your Studio Room now for a memorable stay';

		$var['content'] = $this->load->view('studio_room', $data, true);
		$this->load->view('template2023', $var);
	}

	public function standard_room()
	{
		$data['title'] = ' Standard King Rooms | Fiora Hotel Murree - Book Now';
		$data['description'] = 'Enjoy comfort and affordability with our Standard King Rooms at Fiora Hotel Murree. Perfect for a cozy and relaxing stay. Reserve your Standard Room today';
	
		$var['content'] = $this->load->view('standard_room', $data, true);
		$this->load->view('template2023', $var);
	}

	public function standard_room_simple()
	{
		$data['title'] = 'Comfortable Standard Rooms | Fiora Hotel Murree - Book Now';
		$data['description'] = 'Enjoy comfort and affordability with our Standard Rooms at Fiora Hotel Murree. Perfect for a cozy and relaxing stay. Reserve your Standard Room today';
	
		$var['content'] = $this->load->view('standard_room_simple', $data, true);
		$this->load->view('template2023', $var);
	}

	public function pent_house()
	{
		$data['title'] = 'Luxurious Penthouse | Fiora Hotel Murree - Book Now';
		$data['description'] = 'Experience the pinnacle of luxury in our Penthouse Suites at Fiora Hotel Murree. Spectacular views and unparalleled comfort await. Reserve your Penthouse Suite today.';
		
		$var['content'] = $this->load->view('pent_house', $data, true);
		$this->load->view('template2023', $var);
	}

	public function exc_suitroom()
	{
		$data['title'] = 'Executive Suite Room | Fiora Hotel Murree - Luxury Accommodation';
		$data['description'] = 'Indulge in luxury with our Executive Suite Rooms at Fiora Hotel Murree. Spacious and elegant, these suites are perfect for a lavish retreat. Book your Executive Suite today';
		
		$var['content'] = $this->load->view('exc_suitroom', $data, true);
		$this->load->view('template2023', $var);
	}

	public function deluxe_exc()
	{
		$data['title'] = 'Royal Suite | Fiora Hotel Murree - Opulent Luxury Accommodation';
		$data['description'] = 'Experience opulence and grandeur in our Royal Suite at Fiora Hotel Murree. Unparalleled luxury and space await. Reserve your Royal Suite for a majestic stay';
		

		$var['content'] = $this->load->view('deluxe_exc', $data, true);
		$this->load->view('template2023', $var);
	}

	public function family_suite()
	{
		$data['title'] = 'Family Suite | Fiora Hotel Murree - Opulent Luxury Accommodation';
		$data['description'] = 'Experience opulence and grandeur in our Royal Suite at Fiora Hotel Murree. Unparalleled luxury and space await. Reserve your Royal Suite for a majestic stay';
		

		$var['content'] = $this->load->view('family-suite', $data, true);
		$this->load->view('template2023', $var);
	}

	public function about_us()
	{
		$data['title'] = 'About Fiora Hotel Murree - Our Story and Commitment to Excellence';
		$data['description'] = 'Discover the story behind Fiora Hotel Murree. Learn about our commitment to providing exceptional hospitality and creating memorable guest experiences.';
		

		$var['content'] = $this->load->view('about_us', $data, true);
		$this->load->view('template2023', $var);
	}

	public function privacy_policy()
	{
		$data['title'] = 'Privacy Policy | Fiora Hotel Murree - Our Commitment to Data Protection';
		$data['description'] = 'Learn about Fiora Hotel Murree commitment to data protection and guest privacy in our comprehensive Privacy Policy. Your information is secure with us.';
		

		$var['content'] = $this->load->view('privacy_policy', $data, true);
		$this->load->view('template2023', $var);
	}

	public function reviewAdd(){
		$data['title'] = 'Add a Review | Fiora Hotel Murree ';
		
		$data['description'] = 'Checkout';
		$var['content'] = $this->load->view('add-a-review', $data, true);
		$this->load->view('template2023', $var);
	}
}

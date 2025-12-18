<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
	
	public function about()
	{
		$this->load->view('about');
	}
	
	public function portfolio()
	{
		$this->load->view('portfolio');
	}
	
	public function services()
	{
		$this->load->view('services');
	}
	
	public function blogs()
	{
		$this->load->view('blogs');
	}
	
	public function connect()
	{
		$this->load->view('connect');
	}
	
// 	public function 404()
// 	{
// 		$this->load->view('404');
// 	}
	
	public function cancellation_and_refund()
	{
		$this->load->view('cancellation-and-refund');
	}
	
	public function digital_marketing_course()
	{
		$this->load->view('digital-marketing-course');
	}
	
	public function digital_marketing_tools()
	{
		$this->load->view('digital-marketing-tools');
	}
	
	public function digital_marketing_trends_in_2023()
	{
		$this->load->view('digital-marketing-trends-in-2023');
	}
	
	public function impact_of_ai_on_performance_marketing()
	{
		$this->load->view('impact-of-ai-on-performance-marketing');
	}
	
	public function meet_koshank()
	{
		$this->load->view('meet-koshank');
	}

	public function personalization_in_performance_marketing()
	{
		$this->load->view('personalization-in-performance-marketing');
	}
	
	public function power_of_data_in_performance_marketing()
	{
		$this->load->view('power-of-data-in-performance-marketing');
	}
	
	public function privacy_policy()
	{
		$this->load->view('privacy-policy');
	}
	
	public function profile()
	{
		$this->load->view('profile');
	}
	
	public function shipping_and_delivery()
	{
		$this->load->view('shipping-and-delivery');
	}
	
	public function terms_and_conditions()
	{
		$this->load->view('terms-and-conditions');
	}
	
	public function thank_you()
	{
		$this->load->view('thank-you');
	}
	
	public function shankar_dange()
	{
		$this->load->view('shankar-dange');
	}
	
	public function vaishnavi_beldar()
	{
		$this->load->view('vaishnavi-beldar');
	}
    
    public function soham_kumthekar()
	{
		$this->load->view('soham-kumthekar');
	}
    
    public function prasanna_karmalkar()
	{
		$this->load->view('prasanna-karmalkar');
	}
    
	public function koshankleads(){
		
		$data = [
			'name'=>$_POST['name'],
			'email'=>$_POST['email'],
		    'phone'=>$_POST['phone'],
		    'companyname'=>$_POST['companyname'],
		    'message'=>$_POST['message'],
        	'added_on'=>date("Y-m-d h:i:s A"),
			'status'=>1
		];

	 	$res = $this->db->insert('koshank_leads',$data);
       
    //   start 365 crm 
    
        // $cou = $this->companyname($_POST['companyname']);
        // $for = $this->message($_POST['message']);
        
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://www.api.365leadmanagement.com/wpaddwebsiteleads',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS =>array(
            'web_api_key'=>'c2hhbmthcmRhbmdlQHlhaG9vLmNvbS80NjQyLzQ2NDIvMTEwNzIwMjQxMDA1Mjc=',
            'customerName'=>$_POST['name'],
            'customerEmail'=>$_POST['email'],
            'customerMobile'=>$_POST['phone'],
            'customerComment'=>$cou,
            'Label'=>$for
            ),
		CURLOPT_HTTPHEADER => array(
				'Authorization: c2hhbmthcmRhbmdlQHlhaG9vLmNvbS80NjQyLzQ2NDIvMTEwNzIwMjQxMDA1Mjc='
		),
));

$response = curl_exec($curl);

curl_close($curl);
       //end 365 crm
       

        if($res){
			$Subject3="Koshank Enquiry: Koshank ";
			$email='shankardange@yahoo.com'; 

			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$To2 = $email;
			$from= $_POST['email'];
	        $headers .= "From: $from";
			$postdata = http_build_query(['name'=>$_POST['name']]); 
	        $opts = [
	            'https' =>
	            [
	                'method'=> 'POST',  // GET or POST
	                'header' => 'Content-type: application/x-www-form-urlencoded'. PHP_EOL .'Content-Length: '. strlen($postdata). PHP_EOL,
	                'content' => $postdata
	            ],
		        
	        ];
	        $message3=file_get_contents("https://koshank.com/mail_template", false, stream_context_create($opts));
	        $mail3=mail($To2,$Subject3,$message3,$headers);
	            	
		 }
// 			echo json_encode($res);
			header("location:https://koshank.com/thank-you");
    }
        
	 public function mail_template(){
        $data['leads_data']=$this->db->select('*')->from('koshank_leads')->order_by('id','DESC')->limit('1')->get()->result_array();
        $this->load->view('mail_template',$data);
    }
	
}

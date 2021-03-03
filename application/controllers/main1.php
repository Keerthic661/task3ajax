<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main1 extends CI_Controller {

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


	/**
 * Super Class
 *
 * @package	Package Name
 * @subpackage	Subpackage
 * @category	Category
 * @author	keerthi c
 * @link	http://localhost/ajaxtask3/
 */
	//first loading page
	public function index()
	{
		$this->load->view('login');
	}
	

	//user home page
	public function trexam()
	{
		$this->load->view('trexam');

	}
	
	//registration page
	public function register()
	{
		$this->load->view('reg');
	}

	//email validation ajax
	public function email_availibility()  
      {  
      	 if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))  

           {  
                echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Invalid Email</span></label>';  
           }  
           else  
           {  
                $this->load->model("mainmodel1");  
                if($this->mainmodel1->is_email_available($_POST["email"]))  
                {  
                     echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Email Already register</label>';  
                }  
                else  
                {  
                     echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> </label>';  
                }  
           }  
     
      }
      //phnno validation ajax
      public function phno_availability()
      {

                $this->load->model("mainmodel1");  
                if($this->mainmodel1->is_phno_available($_POST["phno"]))  
                {  
                     echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Phone number Already register</label>';  
                }  
                else  
                {  
                     echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> </label>';  
                }  
           } 

      public function uname_availability()
      {

                $this->load->model("mainmodel1");  
                if($this->mainmodel1->is_uname_available($_POST["uname"]))  
                {  
                     echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> user name Already register</label>';  
                }  
                else  
                {  
                     echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> </label>';  
                }  
           } 
      

	//Registration Action or data insertion
	public function regi()
	{
		//$this->load->helper(array('form', 'url'));
		
		$this->load->library("form_validation");
		$this->form_validation->set_rules("fname","name",'required');
		$this->form_validation->set_rules("lname","last name",'required');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("phno","phone number",'required');
		$this->form_validation->set_rules("dob","date of birth",'required');
		$this->form_validation->set_rules("address","address",'required');
		$this->form_validation->set_rules("district","district",'required');
		$this->form_validation->set_rules("pin","pin",'required');
		$this->form_validation->set_rules("uname","user name",'required');
		// $uname=$this->input->post('uname');
		// $result=$this->mainmodel1->checkuser($uname);
		// if($result)
		// {
		// echo  1;	
		// }
		// else
		// {
		// echo  0;	
		// }
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		{
			
			$this->load->model('mainmodel1');	
		$pass=$this->input->post("password");
		$encpass=$this->mainmodel1->encpswd($pass);
		$a=array("fname"=>$this->input->post("fname"),
				"lname"=>$this->input->post("lname"),
				"email"=>$this->input->post("email"),
				"phno"=>$this->input->post("phno"),
				"dob"=>$this->input->post("dob"),
				"address"=>$this->input->post("address"),
				"district"=>$this->input->post("district"),
				"pin"=>$this->input->post("pin"),
				
				"uname"=>$this->input->post("uname"),
				"password"=>$encpass,'status'=>'0','utype'=>'0');
		// $b=array("uname"=>$this->filter_input(type, variable_name)->post("uname"),
		// 		"password"=>$encpass,'status'=>'0','utype'=>'0');
		$this->mainmodel1->regi($a);
		redirect(base_url().'main1/register');
		}
		// else
		// {
		// 	$this->load->view('myform');

		// }

		
	}
	
	//view page Approval/reject 
	public function viewregap()
	{
		if($_SESSION['logged_in']==true && $_SESSION['utype']=='1')
        {

		$this->load->model('mainmodel1');
		$data['n']=$this->mainmodel1->viewt();
		$this->load->view('viewregap',$data);
		}
        else
        {
             redirect(base_url().'main/index');
        }
		

	}
	//approve action 
	public function approve()
	{
		if($_SESSION['logged_in']==true && $_SESSION['utype']=='1')
        {

		$this->load->model('mainmodel1');
		$id=$this->uri->segment(3);
		$this->mainmodel1->approve($id);
		redirect('main1/viewregap','refresh');
		}
        else
        {
             redirect(base_url().'main/index');
        }
		
		
	}

	//reject action page
	public function reject()
	{
		if($_SESSION['logged_in']==true && $_SESSION['utype']=='1')
        {

		$this->load->model('mainmodel1');
		$id=$this->uri->segment(3);
		$this->mainmodel1->reject($id);
		redirect('main1/viewregap','refresh');
		}
        else
        {
             redirect(base_url().'main/index');
        }
		
		

		
	}
	public function delete()
	{
		if($_SESSION['logged_in']==true && $_SESSION['utype']=='1')
        {

		$this->load->model('mainmodel1');
		$id=$this->uri->segment(3);
		$this->mainmodel1->delete($id);
		redirect('main1/viewregap','refresh');
		}
        else
        {
             redirect(base_url().'main/index');
        }
		
		
	}

	//login view page
	public function login()
	{
		$this->load->view('login');

	}


	//login Check
	public function logincheck()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("uname","uname",'required');
		$this->form_validation->set_rules("pass","password",'required');
		if($this->form_validation->run())
		{
		
			$this->load->model('mainmodel1');	
			$uname=$this->input->post("uname");
			$password=$this->input->post("pass");
			$a=$this->mainmodel1->logi($uname,$password);
			if($a)
			{
			$id=$this->mainmodel1->getuserid($uname);
			$user=$this->mainmodel1->getuser($id);
			$this->load->library(array('session'));
			$this->session->set_userdata(array('id'=>(int)$user->id,
				'status'=>$user->status,'utype'=>$user->utype,'logged_in'=>(bool)true));
			if($_SESSION['status']=='1' && $_SESSION['utype']=='1' && $_SESSION['logged_in']==true)
			{
				redirect(base_url().'main1/viewregap');
			}
			elseif($_SESSION['status']=='1' && $_SESSION['utype']=='0' && $_SESSION['logged_in']==true)
			{
				redirect(base_url().'main1/regupdate');
			}
			else
			{
				echo "waiting for approval";

			}
		}
		else
		{
			echo "invalid user";
		}
	}
	else
	{
		redirect(base_url().'main/reg');
	}
}


 //update profile by user 
public function regupdate()
    {
       if($_SESSION['logged_in']==true && $_SESSION['utype']=='0')
        {
        
        $this->load->model('mainmodel1');
        $id=$this->session->id;
        $data['user_data']=$this->mainmodel1->regupdateform($id);
        $this->load->view('userupdate',$data);
        }
        else
        {
             redirect(base_url().'main1/index');
        }

    }
    //profile update by user
    public function reguserupdate()
    {
        $a=array("fname"=>$this->input->post("fname"),
				"lname"=>$this->input->post("lname"),
				"email"=>$this->input->post("email"),
				"phno"=>$this->input->post("phno"),
				"dob"=>$this->input->post("dob"),
				"address"=>$this->input->post("address"),
				"district"=>$this->input->post("district"),
				"pin"=>$this->input->post("pin"));
        $this->load->model('mainmodel1');
       
        if($this->input->post("submit"))
        {
            $id=$this->session->id;
            $this->mainmodel1->regupdateform1($a,$id);
            redirect('main1/regupdate','refresh');
        }

    }
function logout()
{
    $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }
    $this->session->sess_destroy();
    redirect(base_url().'main1/index');
}

	//view for sent email view email_send.php
	public function emailsend()
	{
		$this->load->view('emailsend');
	}

	//createmailing action 
	public function send()
{
    $to =  $this->input->post('from');  // User email pass here
    $subject = 'Welcome To Elevenstech';

    $from = 'keerthickurup@gmail.com';              // Pass here your mail id

    $emailContent = '<!DOCTYPE><html><head></head><body><table width="600px" style="border:1px solid #cccccc;margin: auto;border-spacing:0;"><tr><td style="background:#000000;padding-left:3%"><img src="http://elevenstechwebtutorials.com/assets/logo/logo.png" width="300px" vspace=10 /></td></tr>';
    $emailContent .='<tr><td style="height:20px"></td></tr>';


    $emailContent .= $this->input->post('message');  //   Post message available here


    $emailContent .='<tr><td style="height:20px"></td></tr>';
    $emailContent .= "<tr><td style='background:#000000;color: #999999;padding: 2%;text-align: center;font-size: 13px;'><p style='margin-top:1px;'><a href='http://elevenstechwebtutorials.com/' target='_blank' style='text-decoration:none;color: #60d2ff;'>www.elevenstechwebtutorials.com</a></p></td></tr></table></body></html>";
                


    $config['protocol']    = 'smtp';
    $config['smtp_host']    = 'ssl://smtp.gmail.com';
    $config['smtp_port']    = '465';
    $config['smtp_timeout'] = '60';

    $config['smtp_user']    = 'keerthickurup@gmail.com';    //Important
    $config['smtp_pass']    = 'kathukethu';  //Important

    $config['charset']    = 'utf-8';
    $config['newline']    = "\r\n";
    $config['mailtype'] = 'html'; // or html
    $config['validation'] = TRUE; // bool whether to validate email or not 

     

    $this->email->initialize($config);
    $this->email->set_mailtype("html");
    $this->email->from($from);
    $this->email->to($to);
    $this->email->subject($subject);
    $this->email->message($emailContent);
    $this->email->send();

    $this->session->set_flashdata('msg',"Mail has been sent successfully");
    $this->session->set_flashdata('msg_class','alert-success');
    return redirect('main1/emailsend');
}

}
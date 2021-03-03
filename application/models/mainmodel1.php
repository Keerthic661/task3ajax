<?php
class mainmodel1 extends CI_model
{
	//work

	//data insertion 
		public function regi($a)
		{

		$this->db->insert("registration",$a);

		}

		//password encryption
		public function encpswd($pass)
			{
				return password_hash($pass, PASSWORD_BCRYPT);
			}


			function is_email_available($email)  
      {  
           $this->db->where('email', $email);  
           $query = $this->db->get("registration");  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;  
           }  
      }  
      public function is_phno_available($phno)  
      {  
           $this->db->where('phno', $phno);  
           $query = $this->db->get("registration");  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;  
           }  
      } 
      public function is_uname_available($uname)
       {  
           $this->db->where('uname', $uname);  
           $query = $this->db->get("registration");  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;  
           }  
      } 

     

			//view user details 
		public function viewt()
			{
				$this->db->select('*');
				$qry=$this->db->get("registration");
				return $qry;

			}

			//approval
	public function approve($id)
	{
		$this->db->set('status','1');
		$qry=$this->db->where("id",$id);
		$qry=$this->db->update("registration");
		return $qry;
	}

	//reject
	public function reject($id)
	{
		$this->db->set('status','2');
		$qry=$this->db->where("id",$id);
		$qry=$this->db->update("registration");
		return $qry;
	}

//delete
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete("registration");
	}


//login

	public function logi($uname,$pass)
	{
		$this->db->select('password');
		
		$this->db->where("uname=","$uname");
		$this->db->or_where("email=","$uname");
		$this->db->or_where("phno=","$uname");
		
		$this->db->from('registration');
		$qry=$this->db->get()->row("password");
		return $this->verifypas($pass,$qry);
	}
	public function verifypas($pass,$qry)
	{
		return password_verify($pass,$qry);
	}
	public function getuserid($uname)
	{
		$this->db->select('id');
		$this->db->from("registration");
		$this->db->where("uname=","$uname");
		$this->db->or_where("email=","$uname");
		$this->db->or_where("phno=","$uname");
		
		return $this->db->get()->row('id');
	}
	public function getuser($id)
	{
		$this->db->select('*');
		$this->db->from("registration");
		$this->db->where("id",$id);
		return $this->db->get()->row();
	}

//User profile updation
public function regupdateform($id)

{
$this->db->select('*');

$qry=$this->db->where("id",$id);
$qry=$this->db->get("registration");
return $qry;
}
public function regupdateform1($a,$id)
{
        $this->db->select('*');
        $qry=$this->db->where("id",$id);
        $qry=$this->db->update("registration",$a);
        return $qry;


}
}
?>
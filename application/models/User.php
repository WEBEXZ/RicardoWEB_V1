<?php
Class User extends CI_Model
{
 function login($username, $password,$cazatalentos)
 {
  if($cazatalentos==1)
  {
  
   $this -> db -> select('FCEMAIL, FCPASSWORD');
   $this -> db -> from('TAUSUARIOS');
   $this -> db -> where('FCEMAIL', $username);
   $this -> db -> where('FCPASSWORD', MD5($password));
   $this -> db -> limit(1);
  }
  else
  {
   $this -> db -> select('FCEMAIL, FCPASSWORD');
   $this -> db -> from('TAEMPRESA');
   $this -> db -> where('FCEMAIL', $username);
   $this -> db -> where('FCPASSWORD', MD5($password));
   $this -> db -> limit(1);
  }
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 
 
 function valida_correo($emailperdido,$pass,$cazatalentos)
 {
 if($cazatalentos==1)
  {
   $this -> db -> select('FCNOMBRE');
   $this -> db -> from('TAUSUARIOS');
   $this -> db -> where('FCEMAIL', $emailperdido);
   $this -> db -> limit(1);
  
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
      $this->db->set('FCPASSWORD', MD5($pass));
      $this->db->where('FCEMAIL', $emailperdido);
      $this->db->update('TAUSUARIOS');

     if( $this->db->affected_rows() ==1)
       {
          return $query->result();
       }
    else
      {
        return false;
      }


   }
   else
   {
     return false;
   }
  }
  else 
  {
   $this -> db -> select('FCEMPRESA');
   $this -> db -> from('TAEMPRESA');
   $this -> db -> where('FCEMAIL', $emailperdido);
   $this -> db -> limit(1);
  
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
      $this->db->set('FCPASSWORD', MD5($pass));
      $this->db->where('FCEMAIL', $emailperdido);
      $this->db->update('TAEMPRESA');

     if( $this->db->affected_rows() ==1)
       {
          return $query->result();
       }
    else
      {
        return false;
      }


   }
   else
   {
     return false;
   } 
	  
	  
  }
 }

}
?>
<?php 

class User extends CI_Model
{
	var $ide_usuario = '';
	var $nom_usuario = '';
	var $ape_usuario = '';
    var $nick_usuario = '';
	var $eda_usuario = '';
	var $cor_usuario = '';
    var $cla_usuario = '';
	var $rol_usuario = '';
	var $est_usuario = '';

    public function listUsers()
    {

       
        $query = $this->db->get('usuarios');
        return $query->result();
    }

     public function addUser()
    {
    	$this->ide_usuario = $this->input->post('ide_usuario');
    	$this->nom_usuario = $this->input->post('nom_usuario');
    	$this->ape_usuario = $this->input->post('ape_usuario');
        $this->nick_usuario = $this->input->post('nick_usuario');
    	$this->eda_usuario = $this->input->post('eda_usuario');
    	$this->cor_usuario = $this->input->post('cor_usuario');
        $this->cla_usuario = $this->input->post('cla_usuario');
    	$this->rol_usuario = $this->input->post('rol_usuario');
    	$this->est_usuario = $this->input->post('est_usuario');

    	if (!$this->db->insert('usuarios', $this))
    	 {
    	    echo "<script>";
    	    echo "alert('problemas para adicionar el usuario');";
    	    echo "</script>";  
    	 }
    	 else
    	  {
    	    echo "<script>";
    	    echo "alert('usuario adicionado con exito ');";
    	    echo "</script>"; 
    	     }    
    }

    public function listUser($ide_usuario)
    {

        $this->ide_usuario =$ide_usuario;
        $query = $this->db->get('usuarios', array('ide_usuario' => $this->ide_usuario));
        return $query->result();
    }

     public function updUser()
    {
        $this->ide_usuario = $this->input->post('ide_usuario');
        $this->nom_usuario = $this->input->post('nom_usuario');
        $this->ape_usuario = $this->input->post('ape_usuario');
        $this->nick_usuario = $this->input->post('nick_usuario');
        $this->eda_usuario = $this->input->post('eda_usuario');
        $this->cor_usuario = $this->input->post('cor_usuario');
        $this->cla_usuario = $this->input->post('cla_usuario');
        $this->rol_usuario = $this->input->post('rol_usuario');
        $this->est_usuario = $this->input->post('est_usuario');

        $this->db->where('ide_usuario', $this->ide_usuario);

        if (!$this->db->update('usuarios', $this))
         {
            echo "<script>";
            echo "alert('problemas para modificar el usuario');";
            echo "</script>";  
         }
         else
          {
            echo "<script>";
            echo "alert('usuario modificadocon exito ');";
            echo "window.location.replace('".base_url()."');";
            echo "</script>"; 
             }    
    }

     public function dltUser($ide_usuario)
     {
        $this->ide_usuario = $ide_usuario;
        $this->db->where('ide_usuario', $this->ide_usuario);

        if (!$this->db->delete('usuarios'))
         {
            echo "<script>";
            echo "alert('problemas al eliminar el usuario');";
            echo "</script>";  
         }
         else
          {
            echo "<script>";
            echo "alert('usuario eliminado con exito ');";
            echo "window.location.replace('".base_url()."');";
            echo "</script>"; 
             }   
     }


}


?>
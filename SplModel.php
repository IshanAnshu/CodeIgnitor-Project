<?php

class SplModel extends CI_Model
{
    public function addingShelf($file_name, $product_name, $cost, $tag)
    {
       // $query = $this->db->query("INSERT INTO supplement.proteins (name, image, cost) values ($name, $image, $cost)");
       // return $query;
       $data = array(
        'file_name' => $file_name,
        'product_name'=> $product_name,
        'cost' => $cost,
    'tag' => $tag);

        $this->db->insert('shelf', $data);

    }
    public function addingProtein($file_name, $product_name, $cost)
    {
       // $query = $this->db->query("INSERT INTO supplement.proteins (name, image, cost) values ($name, $image, $cost)");
       // return $query;
       $data = array(
        'file_name' => $file_name,
        'product_name'=> $product_name,
        'cost' => $cost);

        $this->db->insert('proteins', $data);

    }

    public function addingGainer($file_name, $product_name, $cost)
    {
       // $query = $this->db->query("INSERT INTO supplement.proteins (name, image, cost) values ($name, $image, $cost)");
       // return $query;
       $data = array(
        'file_name' => $file_name,
        'product_name'=> $product_name,
        'cost' => $cost);

        $this->db->insert('gainers', $data);

    }

    public function addingAminoAcid($file_name, $product_name, $cost)
    {
       // $query = $this->db->query("INSERT INTO supplement.proteins (name, image, cost) values ($name, $image, $cost)");
       // return $query;
       $data = array(
        'file_name' => $file_name,
        'product_name'=> $product_name,
        'cost' => $cost);

        $this->db->insert('aminoacids', $data);

    }

    public function changingMobileNumber($number)
    {
        $data = array(
            'mobile_number' => $number,
            'item'=> "Mobile"
            );
            
          $this->db->where('id', '1');
        $this->db->update('homepagecontent', $data);
    }
    
    public function getShelfDetails()
    {
        $query = $this->db->query("SELECT id, file_name, product_name, cost, tag FROM shelf");
        return $query;
    }

    public function getProteinsDetails()
    {
        $query = $this->db->query("SELECT id, file_name, product_name, cost FROM proteins");
        return $query;
    }

    public function getGainersDetails()
    {
        $query = $this->db->query("SELECT id, file_name, product_name, cost FROM gainers");
        return $query;
    }

    public function getAminoAcidsDetails()
    {
        $query = $this->db->query("SELECT id, file_name, product_name, cost FROM aminoacids");
        return $query;
    }
    public function  getMobileNumber()
    {
        $query = $this->db->query("SELECT mobile_number FROM homepagecontent where id='1'");
        return $query;
    }

    public function  getSlider1()
    {
        $query = $this->db->query("SELECT file_name FROM homepagecontent where id='2'");
        return $query;
    }

    public function  getSlider2()
    {
        $query = $this->db->query("SELECT file_name FROM homepagecontent where id='3'");
        return $query;
    }

    public function  getSlider3()
    {
        $query = $this->db->query("SELECT file_name FROM homepagecontent where id='4'");
        return $query;
    }

    public function  getProteinsImage()
    {
        $query = $this->db->query("SELECT file_name FROM homepagecontent where id='5'");
        return $query;
    }

    public function  getGainersImage()
    {
        $query = $this->db->query("SELECT file_name FROM homepagecontent where id='6'");
        return $query;
    }

    public function  getProteinBarsImage()
    {
        $query = $this->db->query("SELECT file_name FROM homepagecontent where id='7'");
        return $query;
    }

    public function  getAminoAcidsImage()
    {
        $query = $this->db->query("SELECT file_name FROM homepagecontent where id='8'");
        return $query;
    }

    public function changingSlider1($file_name)
    {
        $data = array(
            'file_name' => $file_name,
            'item'=> "Slider1"
            );
            
          $this->db->where('id', '2');
        $this->db->update('homepagecontent', $data);
    }

    public function changingSlider2($file_name)
    {
        $data = array(
            'file_name' => $file_name,
            'item'=> "Slider2"
            );
            
          $this->db->where('id', '3');
        $this->db->update('homepagecontent', $data);
    }

    public function changingSlider3($file_name)
    {
        $data = array(
            'file_name' => $file_name,
            'item'=> "Slider3"
            );
            
          $this->db->where('id', '4');
        $this->db->update('homepagecontent', $data);
    }

    
    public function changingProteinsImage($file_name)
    {
        $data = array(
            'file_name' => $file_name,
            'item'=> "Proteins Image"
            );
            
          $this->db->where('id', '5');
        $this->db->update('homepagecontent', $data);
    }

    public function changingGainersImage($file_name)
    {
        $data = array(
            'file_name' => $file_name,
            'item'=> "Gainers Image"
            );
            
          $this->db->where('id', '6');
        $this->db->update('homepagecontent', $data);
    }

    public function changingProteinBarsImage($file_name)
    {
        $data = array(
            'file_name' => $file_name,
            'item'=> "Protein Bars Image"
            );
            
          $this->db->where('id', '7');
        $this->db->update('homepagecontent', $data);
    }

    public function changingAminoAcidsImage($file_name)
    {
        $data = array(
            'file_name' => $file_name,
            'item'=> "Amino Acids Image"
            );
            
          $this->db->where('id', '8');
        $this->db->update('homepagecontent', $data);
    }

    public function removingProtein($id)
    {
      $state =  $this->db->delete('proteins', array('id' => $id)); 
      return $state;
    }

    public function removingGainer($id)
    {
      $state =  $this->db->delete('gainers', array('id' => $id)); 
      return $state;
    }

    public function removingAminoAcid($id)
    {
      $state =  $this->db->delete('aminoacids', array('id' => $id)); 
      return $state;
    }

    public function removingShowcaseProduct($id)
    {
        $state =  $this->db->delete('shelf', array('id' => $id)); 
        return $state;
    }

    public function login($username, $password)
    {
        $this->db->select('email','password');
        $this->db->from('users');
        $this->db->where('email', $username);
        $this->db->where('password', $password);
        
        $query = $this->db->get();
        
        if($query->num_rows()==1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function addUser($name, $username, $password, $contact, $city, $address)
    {
        $data = array(
            'name' => $name,
            'email'=> $username,
            'password' => $password,
            'contact'=> $contact,
            'city'=> $city,
            'address'=>$address);
    
            $this->db->insert('users', $data);
    }



    public function fetch_protein_name_cost($id)
    {
        $this->db->select('product_name, cost');
        $this->db->from('proteins');
        $this->db->where('id', $id);
        $query = $this->db->get();


        if ($query->num_rows() > 0) {
            //return $query->row()->product_name;
            return $query;
        }
        return false;
       // return $query->result();
       
    }


    public function tentative_protein($id, $protein_name, $cost)
    {
        $data = array(
            'item' => "protein",
            'product_id'=> $id,
            'cost'=>$cost,
            'product_name' => $protein_name);
    
            $this->db->insert('cart', $data);
    }



    public function fetch_gainer_name_cost($id)
    {
        $this->db->select('product_name, cost');
        $this->db->from('gainers');
        $this->db->where('id', $id);
        $query = $this->db->get();


        if ($query->num_rows() > 0) {
            return $query;
        }
        return false;
       // return $query->result();
       
    }


    public function tentative_gainer($id, $gainer_name, $cost)
    {
        $data = array(
            'item' => "gainer",
            'product_id'=> $id,
            'cost' =>$cost,
            'product_name' => $gainer_name);
    
            $this->db->insert('cart', $data);
    }

    public function fetch_amino_acid_name_cost($id)
    {
        $this->db->select('product_name, cost');
        $this->db->from('aminoacids');
        $this->db->where('id', $id);
        $query = $this->db->get();


        if ($query->num_rows() > 0) {
            return $query;
        }
        return false;
       // return $query->result();
       
    }


    public function tentative_amino_acid($id, $amino_acid_name, $cost)
    {
        $data = array(
            'item' => "amino acid",
            'product_id'=> $id,
            'cost' => $cost,
            'product_name' => $amino_acid_name);
    
            $this->db->insert('cart', $data);
    }


    public function getCartDetails()
    {
        $query = $this->db->query("SELECT id, product_id, item, product_name, cost FROM cart");
        return $query;
    }

    public function feedOrder($item, $product_id, $product_name, $cost, $username)
    {
        $data = array(
            'item' => $item,
            'product_id'=> $product_id,
            'cost' => $cost,
            'username'=> $username,
            'product_name' => $product_name);
    
            $this->db->insert('orders', $data);
    }
}




































?>
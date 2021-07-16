<?php

class splController extends CI_Controller
{
    public function index()
    {
            $this->load->model('SplModel');
            $query = $this->SplModel->getSlider1();
            $row = $query->row_array();            
            $data['slider1'] = $row['file_name'];

            $this->load->model('SplModel');
            $query = $this->SplModel->getSlider2();
            $row = $query->row_array();            
            $data['slider2'] = $row['file_name'];

            $this->load->model('SplModel');
            $query = $this->SplModel->getSlider3();
            $row = $query->row_array();            
            $data['slider3'] = $row['file_name'];

            $this->load->model('SplModel');
            $query = $this->SplModel->getProteinsImage();
            $row = $query->row_array();            
            $data['ProteinsImage'] = $row['file_name'];

            $this->load->model('SplModel');
            $query = $this->SplModel->getGainersImage();
            $row = $query->row_array();            
            $data['GainersImage'] = $row['file_name'];

            $this->load->model('SplModel');
            $query = $this->SplModel->getProteinBarsImage();
            $row = $query->row_array();            
            $data['ProteinBarsImage'] = $row['file_name'];

            $this->load->model('SplModel');
            $query = $this->SplModel->getAminoAcidsImage();
            $row = $query->row_array();            
            $data['AminoAcidsImage'] = $row['file_name'];

            $this->load->model('SplModel');
            $query = $this->SplModel->getMobileNumber();
            $row = $query->row_array();            
            $data['MobileNumber'] = $row['mobile_number'];

            if($this->session->userdata('username')=='')
            { 
              $data['btt_username'] = "";
              $data['btt_state_logout_and_username'] = "none";
             // $data['btt_signup_or_login'] = "none";
              //$this->load->view('vsc_spl_product_from_model.php', $data);
            }
            else
            {
              $data['btt_username'] = $this->session->userdata('username');
              $data['btt_state_logout_and_username'] = "block";
             //  $this->load->view('vsc_spl_product_from_model.php', $data);
            }






        $this->load->view('vsc_spl_homepage2.php',$data);
    }
    


    public function panel()
    {
            $this->load->view('panel');
            $this->load->model('SplModel');
            $data["fetch_data"] = $this->SplModel->getShelfDetails();
            $this->load->view('showcase_panel',$data);
            $this->load->model('SplModel');
            $data["fetch_data"] = $this->SplModel->getProteinsDetails();
            $this->load->view('proteins_panel', $data);
            $this->load->model('SplModel');
            $data["fetch_data"] = $this->SplModel->getGainersDetails();
            $this->load->view('gainers_panel', $data);
            $this->load->model('SplModel');
            $data["fetch_data"] = $this->SplModel->getAminoAcidsDetails();
            $this->load->view('amino_acids_panel', $data);

    }


    


    


    public function toLoadProductsPage()
    {
      if($this->session->userdata('username')!='')
      { 
        $data['btt_state_logout_and_username'] = "block";
        $data['btt_text'] = "Add to Cart";
        $data['btt_state'] = "block";
        $data['btt_signup_or_login'] = "none";
        //$this->load->view('vsc_spl_product_from_model.php', $data);
      }
      else
      {
        $data['btt_state_logout_and_username'] = "none";
        $data['btt_state'] = "none";
        $data['btt_signup_or_login'] = "block";
        $data['btt_text_sign_up'] = "Sign Up, to make account";
        $data['btt_text_login'] = "Login to buy";
       //  $this->load->view('vsc_spl_product_from_model.php', $data);
      }
            $this->load->model('SplModel');
            $data["fetch_data"] = $this->SplModel->getShelfDetails();
            $this->load->view('showcase',$data);
            $this->load->model('SplModel');
            $data["fetch_data"] = $this->SplModel->getProteinsDetails();
            $this->load->view('proteins', $data);
            $this->load->model('SplModel');
            $data["fetch_data"] = $this->SplModel->getGainersDetails();
            $this->load->view('gainers', $data);
            $this->load->model('SplModel');
            $data["fetch_data"] = $this->SplModel->getAminoAcidsDetails();
            $this->load->view('amino_acids', $data);
            $this->load->model('SplModel');
            $data["fetch_data"] = $this->SplModel->getMobileNumber();
            $this->load->view('contacts', $data);

    }    

    /*public function toLoadProductsPageGainers()
    {
        $this->load->view('vsc_spl_product_from_model');
       // redirect('http://127.0.0.1/CodeIgniter-3.1.9/index.php/vsc_spl_product_from_model.php');
    } */ 
   
    public function signup()
    {
      $this->load->view('sign_up');
    }

    public function login()
    {
      $this->load->view('login');
    }


    public function addShelf()
    {
      $product_name = $this->input->post('name');
      $image = $this->input->post('image');
      $cost = $this->input->post('cost');
      $tag = $this->input->post('tag');
      
      $config['upload_path'] = './uploads/';
      $config['allowed_types'] = 'gif|jpg|jpeg|png';
      $config['max_size']='2048';
      $config['max_width']='2000';
      $config['max_height']='2000';
      $this->load->library('upload', $config);
      if(!$this->upload->do_upload('image'))
      {
        $errors=array('error'=>$this->upload->display_errors());
        print_r($errors);
        die;
      }
      else{
       // $_FILES['image']['name']=$name;
        $data=array('upload_data'=>$this->upload->data());
        
        $file_name=$_FILES['image']['name'];
      }

     // chmod($config['upload_path'], 777);
      $this->load->model('SplModel');
      $state = $this->SplModel->addingShelf($file_name, $product_name, $cost, $tag);
            /*if($state == true)
            {
              $data['text']= "Product Inserted";
              $this->load->view('testing');
            }
            else
            {
              $data['text']= "Some Error. Product Not Inserted";
                $this->load->view('uppjeditProfile');
            }*/
            redirect('splController/panel');

    }

    public function addProtein()
    {
      $product_name = $this->input->post('name');
      $image = $this->input->post('image');
      $cost = $this->input->post('cost');
      
      $config['upload_path'] = './uploads/';
      $config['allowed_types'] = 'gif|jpg|jpeg|png';
      $config['max_size']='2048';
      $config['max_width']='2000';
      $config['max_height']='2000';
      $this->load->library('upload', $config);
      if(!$this->upload->do_upload('image'))
      {
        $errors=array('error'=>$this->upload->display_errors());
        print_r($errors);
        die;
      }
      else{
       // $_FILES['image']['name']=$name;
        $data=array('upload_data'=>$this->upload->data());
        
        $file_name=$_FILES['image']['name'];
      }

     // chmod($config['upload_path'], 777);
      $this->load->model('SplModel');
      $state = $this->SplModel->addingProtein($file_name, $product_name, $cost);
            /*if($state == true)
            {
              $data['text']= "Product Inserted";
              $this->load->view('testing');
            }
            else
            {
              $data['text']= "Some Error. Product Not Inserted";
                $this->load->view('uppjeditProfile');
            }*/
            redirect('splController/panel');

    }


    public function addGainer()
    {
      $product_name = $this->input->post('name');
      $image = $this->input->post('image');
      $cost = $this->input->post('cost');
      
      $config['upload_path'] = './uploads/';
      $config['allowed_types'] = 'gif|jpg|jpeg|png';
      $config['max_size']='2048';
      $config['max_width']='2000';
      $config['max_height']='2000';
      $this->load->library('upload', $config);
      if(!$this->upload->do_upload('image'))
      {
        $errors=array('error'=>$this->upload->display_errors());
        print_r($errors);
        die;
      }
      else{
       // $_FILES['image']['name']=$name;
        $data=array('upload_data'=>$this->upload->data());
        
        $file_name=$_FILES['image']['name'];
      }

     // chmod($config['upload_path'], 777);
      $this->load->model('SplModel');
      $state = $this->SplModel->addingGainer($file_name, $product_name, $cost);
            /*if($state == true)
            {
              $data['text']= "Product Inserted";
              $this->load->view('testing');
            }
            else
            {
              $data['text']= "Some Error. Product Not Inserted";
                $this->load->view('uppjeditProfile');
            }*/
            redirect('splController/panel');

    }


    public function addAminoAcid()
    {
      $product_name = $this->input->post('name');
      $image = $this->input->post('image');
      $cost = $this->input->post('cost');
      
      $config['upload_path'] = './uploads/';
      $config['allowed_types'] = 'gif|jpg|jpeg|png';
      $config['max_size']='2048';
      $config['max_width']='2000';
      $config['max_height']='2000';
      $this->load->library('upload', $config);
      if(!$this->upload->do_upload('image'))
      {
        $errors=array('error'=>$this->upload->display_errors());
        print_r($errors);
        die;
      }
      else{
       // $_FILES['image']['name']=$name;
        $data=array('upload_data'=>$this->upload->data());
        
        $file_name=$_FILES['image']['name'];
      }

     // chmod($config['upload_path'], 777);
      $this->load->model('SplModel');
      $state = $this->SplModel->addingAminoAcid($file_name, $product_name, $cost);
            /*if($state == true)
            {
              $data['text']= "Product Inserted";
              $this->load->view('testing');
            }
            else
            {
              $data['text']= "Some Error. Product Not Inserted";
                $this->load->view('uppjeditProfile');
            }*/
            redirect('splController/panel');

    }

    public function changeMobileNumber()
    {
      $number = $this->input->post('name');
      $this->load->model('SplModel');
      $state = $this->SplModel->changingMobileNumber($number);

      redirect('splController/panel');
    }

    public function changeSlider1()
    {
      
      $image = $this->input->post('image');
     
      
      $config['upload_path'] = './uploads/';
      $config['allowed_types'] = 'gif|jpg|jpeg|png';
      $config['max_size']='2048';
      $config['max_width']='2000';
      $config['max_height']='2000';
      $this->load->library('upload', $config);
      if(!$this->upload->do_upload('image'))
      {
        $errors=array('error'=>$this->upload->display_errors());
        print_r($errors);
        die;
      }
      else{
       // $_FILES['image']['name']=$name;
        $data=array('upload_data'=>$this->upload->data());
        
        $file_name=$_FILES['image']['name'];
      }

     // chmod($config['upload_path'], 777);
      $this->load->model('SplModel');
      $state = $this->SplModel->changingSlider1($file_name);
            /*if($state == true)
            {
              $data['text']= "Product Inserted";
              $this->load->view('testing');
            }
            else
            {
              $data['text']= "Some Error. Product Not Inserted";
                $this->load->view('uppjeditProfile');
            }*/
            redirect('splController/panel');

    }

    public function changeSlider2()
    {
      
      $image = $this->input->post('image');
     
      
      $config['upload_path'] = './uploads/';
      $config['allowed_types'] = 'gif|jpg|jpeg|png';
      $config['max_size']='2048';
      $config['max_width']='2000';
      $config['max_height']='2000';
      $this->load->library('upload', $config);
      if(!$this->upload->do_upload('image'))
      {
        $errors=array('error'=>$this->upload->display_errors());
        print_r($errors);
        die;
      }
      else{
       // $_FILES['image']['name']=$name;
        $data=array('upload_data'=>$this->upload->data());
        
        $file_name=$_FILES['image']['name'];
      }

     // chmod($config['upload_path'], 777);
      $this->load->model('SplModel');
      $state = $this->SplModel->changingSlider2($file_name);
            /*if($state == true)
            {
              $data['text']= "Product Inserted";
              $this->load->view('testing');
            }
            else
            {
              $data['text']= "Some Error. Product Not Inserted";
                $this->load->view('uppjeditProfile');
            }*/
            redirect('splController/panel');

    }


    public function changeSlider3()
    {
      
      $image = $this->input->post('image');
     
      
      $config['upload_path'] = './uploads/';
      $config['allowed_types'] = 'gif|jpg|jpeg|png';
      $config['max_size']='2048';
      $config['max_width']='2000';
      $config['max_height']='2000';
      $this->load->library('upload', $config);
      if(!$this->upload->do_upload('image'))
      {
        $errors=array('error'=>$this->upload->display_errors());
        print_r($errors);
        die;
      }
      else{
       // $_FILES['image']['name']=$name;
        $data=array('upload_data'=>$this->upload->data());
        
        $file_name=$_FILES['image']['name'];
      }

     // chmod($config['upload_path'], 777);
      $this->load->model('SplModel');
      $state = $this->SplModel->changingSlider3($file_name);
            /*if($state == true)
            {
              $data['text']= "Product Inserted";
              $this->load->view('testing');
            }
            else
            {
              $data['text']= "Some Error. Product Not Inserted";
                $this->load->view('uppjeditProfile');
            }*/
            redirect('splController/panel');

    }


    public function changeProteinsImage()
    {
      $image = $this->input->post('image');
     
      
      $config['upload_path'] = './uploads/';
      $config['allowed_types'] = 'gif|jpg|jpeg|png';
      $config['max_size']='2048';
      $config['max_width']='2000';
      $config['max_height']='2000';
      $this->load->library('upload', $config);
      if(!$this->upload->do_upload('image'))
      {
        $errors=array('error'=>$this->upload->display_errors());
        print_r($errors);
        die;
      }
      else{
       // $_FILES['image']['name']=$name;
        $data=array('upload_data'=>$this->upload->data());
        
        $file_name=$_FILES['image']['name'];
      }

     // chmod($config['upload_path'], 777);
      $this->load->model('SplModel');
      $state = $this->SplModel->changingProteinsImage($file_name);
            /*if($state == true)
            {
              $data['text']= "Product Inserted";
              $this->load->view('testing');
            }
            else
            {
              $data['text']= "Some Error. Product Not Inserted";
                $this->load->view('uppjeditProfile');
            }*/
            redirect('splController/panel');
    }


    public function changeGainersImage()
    {
      $image = $this->input->post('image');
     
      
      $config['upload_path'] = './uploads/';
      $config['allowed_types'] = 'gif|jpg|jpeg|png';
      $config['max_size']='2048';
      $config['max_width']='2000';
      $config['max_height']='2000';
      $this->load->library('upload', $config);
      if(!$this->upload->do_upload('image'))
      {
        $errors=array('error'=>$this->upload->display_errors());
        print_r($errors);
        die;
      }
      else{
       // $_FILES['image']['name']=$name;
        $data=array('upload_data'=>$this->upload->data());
        
        $file_name=$_FILES['image']['name'];
      }

     // chmod($config['upload_path'], 777);
      $this->load->model('SplModel');
      $state = $this->SplModel->changingGainersImage($file_name);
            /*if($state == true)
            {
              $data['text']= "Product Inserted";
              $this->load->view('testing');
            }
            else
            {
              $data['text']= "Some Error. Product Not Inserted";
                $this->load->view('uppjeditProfile');
            }*/
            redirect('splController/panel');
    }

    public function changeProteinBarsImage()
    {
      $image = $this->input->post('image');
     
      
      $config['upload_path'] = './uploads/';
      $config['allowed_types'] = 'gif|jpg|jpeg|png';
      $config['max_size']='2048';
      $config['max_width']='2000';
      $config['max_height']='2000';
      $this->load->library('upload', $config);
      if(!$this->upload->do_upload('image'))
      {
        $errors=array('error'=>$this->upload->display_errors());
        print_r($errors);
        die;
      }
      else{
       // $_FILES['image']['name']=$name;
        $data=array('upload_data'=>$this->upload->data());
        
        $file_name=$_FILES['image']['name'];
      }

     // chmod($config['upload_path'], 777);
      $this->load->model('SplModel');
      $state = $this->SplModel->changingProteinBarsImage($file_name);
            /*if($state == true)
            {
              $data['text']= "Product Inserted";
              $this->load->view('testing');
            }
            else
            {
              $data['text']= "Some Error. Product Not Inserted";
                $this->load->view('uppjeditProfile');
            }*/
            redirect('splController/panel');
    }

    public function changeAminoAcidsImage()
    {
      $image = $this->input->post('image');
     
      
      $config['upload_path'] = './uploads/';
      $config['allowed_types'] = 'gif|jpg|jpeg|png';
      $config['max_size']='2048';
      $config['max_width']='2000';
      $config['max_height']='2000';
      $this->load->library('upload', $config);
      if(!$this->upload->do_upload('image'))
      {
        $errors=array('error'=>$this->upload->display_errors());
        print_r($errors);
        die;
      }
      else{
       // $_FILES['image']['name']=$name;
        $data=array('upload_data'=>$this->upload->data());
        
        $file_name=$_FILES['image']['name'];
      }

     // chmod($config['upload_path'], 777);
      $this->load->model('SplModel');
      $state = $this->SplModel->changingAminoAcidsImage($file_name);
            /*if($state == true)
            {
              $data['text']= "Product Inserted";
              $this->load->view('testing');
            }
            else
            {
              $data['text']= "Some Error. Product Not Inserted";
                $this->load->view('uppjeditProfile');
            }*/
            redirect('splController/panel');
    }

    public function removeProtein($id)
    {
      $this->load->model('SplModel');
      $state = $this->SplModel->removingProtein($id);
      redirect('splController/panel');
     
    }

    public function removeGainer($id)
    {
      $this->load->model('SplModel');
      $state = $this->SplModel->removingGainer($id);
      redirect('splController/panel');
     
    }

    public function removeAminoAcid($id)
    {
      $this->load->model('SplModel');
      $state = $this->SplModel->removingAminoAcid($id);
      redirect('splController/panel');
     
    }
    public function removeShowcaseProduct($id)
    {
      $this->load->model('SplModel');
      $state = $this->SplModel->removingShowcaseProduct($id);
      redirect('splController/panel');
     
    }

    public function checkLogin()
    {
        //First check the validity of the data input by the user.
        $this->form_validation->set_rules('username', 'Username', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|callback_verifyUser');//callback is sort of 
        if($this->form_validation->run()==false)                                       //calling verifyUser fxn
        {
            $this->load->view('login');
        }
        else
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
           // $data['username']= $username;
            //$data['password']= $password;
            $session_data = array("username"=>$username);
            $this->session->set_userdata($session_data);
            
            redirect('splController/toLoadProductsPage');
        }
    }

    public function verifyUser()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $this->load->model('SplModel');
        
        if($this->SplModel->login($username, $password))
        {
            return true;
        }
        else
        {
            $this->form_validation->set_message('verifyUser','Incorrect Email or password. Please try again...');
            return false;
        }
    }

    public function sign_up()
    {
      $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('username', 'E-mail', 'required|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->set_rules('contact', 'Contact', 'required|exact_length[10]|numeric');
      $this->form_validation->set_message('numeric', 'The {field} field cannot be non-numeric');
      $this->form_validation->set_message('exact_length[10]', 'The {field} field cannot be less than 10 digits');
      $this->form_validation->set_rules('city', 'City', 'required');
      $this->form_validation->set_rules('address', 'Address', 'required');


      if($this->form_validation->run()==false)                                       //calling verifyUser fxn
        {
            $this->load->view('sign_up');
        }
        else
        {
          
          
          $name = $this->input->post('name');        
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $contact = $this->input->post('contact');
        $city = $this->input->post('city');
        $address = $this->input->post('address');

        $this->load->model('SplModel');
        $this->SplModel->addUser($name, $username, $password, $contact, $city, $address);


            $username = $this->input->post('username');
            //$password = $this->input->post('password');
           // $data['username']= $username;
            //$data['password']= $password;
            $session_data = array("username"=>$username);
            $this->session->set_userdata($session_data);
            
            redirect('splController/toLoadProductsPage');

        }
    }

    public function logout()
    {
       /* $this->load->model('SplModel');
        $data["fetch_data"] = $this->SplModel->getCartDetails();

        foreach($fetch_data->result() as $row)
        {
          $item = $row->item;
          $product_id = $row->product_id;
          $product_name = $row->product_name;
          $cost = $row->cost;

          $username = $this->session->userdata('username');
          $this->load->model('SplModel');
          $this->SplModel->feedOrder($item, $product_id, $product_name, $cost, $username);
        }*/
        $this->db->empty_table('cart');
        $this->session->unset_userdata('username');
        //echo 'logout successful';
        redirect('http://127.0.0.1/CodeIgniter-3.1.9/index.php/splController');
    }


    public function add_to_cart_proteins($id)
    {
      $this->load->model('SplModel');
      $protein_name_cost = $this->SplModel->fetch_protein_name_cost($id);

      $row = $protein_name_cost->row_array();
      $protein_name= $row['product_name'];
      $cost= $row['cost'];
      //$data['text']=$protein_name;
     // $this->load->view('testing', $data);
      $this->load->model('SplModel');
      $this->SplModel->tentative_protein($id, $protein_name, $cost);
      redirect('splController/cart');
   
    }

    public function add_to_cart_gainers($id)
    {
      $this->load->model('SplModel');
      $gainer_name_cost = $this->SplModel->fetch_gainer_name_cost($id);

      $row = $gainer_name_cost->row_array();
      $gainer_name= $row['product_name'];
      $cost= $row['cost'];
     // $data['text']=$protein_name;
     // $this->load->view('testing', $data);
      $this->load->model('SplModel');
      $this->SplModel->tentative_gainer($id, $gainer_name, $cost);
      redirect('splController/cart');
   
    }


    public function add_to_cart_amino_acids($id)
    {
      $this->load->model('SplModel');
      $amino_acid_name_cost = $this->SplModel->fetch_amino_acid_name_cost($id);

      $row = $amino_acid_name_cost->row_array();
      $amino_acid_name= $row['product_name'];
      $cost= $row['cost'];
     // $data['text']=$protein_name;
     // $this->load->view('testing', $data);
      $this->load->model('SplModel');
      $this->SplModel->tentative_amino_acid($id, $amino_acid_name, $cost);
      redirect('splController/cart');
   
    }

    public function cart()
    {                   
          $this->load->model('SplModel');
          $data["fetch_data"] = $this->SplModel->getCartDetails();
         $this->load->view('cart', $data);
             
          
          
    }
    public function confirmOrder()
    {
      $this->load->model('SplModel');
        $data["fetch_data"] = $this->SplModel->getCartDetails();

        foreach($data["fetch_data"]->result() as $row)
        {
          $item = $row->item;
          $product_id = $row->product_id;
          $product_name = $row->product_name;
          $cost = $row->cost;

          $username = $this->session->userdata('username');
          $this->load->model('SplModel');
          $this->SplModel->feedOrder($item, $product_id, $product_name, $cost, $username);
        }

        redirect('http://127.0.0.1/CodeIgniter-3.1.9/index.php/splController');
    }

 }
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pic extends CI_Controller
{
    public function file_data()
    {
        //validate the form data 

        $this->form_validation->set_rules('pic_title', 'Picture Title', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('upload_form');
        } else {

            //get the form values
            $data['pic_title'] = $this->input->post('pic_title');
            $data['pic_desc'] = $this->input->post('pic_desc');

            //file upload code 
            //set file upload settings 
            $config['upload_path']          = APPPATH . '../assets/uploads/';
            $config['allowed_types']        = 'docx|pdf';
            $config['max_size']             = 800;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('pic_file')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('upload_form', $error);
            } else {

                //file is uploaded successfully
                //now get the file uploaded data 
                $upload_data = $this->upload->data();

                //get the uploaded file name
                $data['pic_file'] = $upload_data['file_name'];

                //store pic data to the db
                $this->pic_model->store_pic_data($data);

                redirect('/');
            }
            $this->load->view('pic');
        }
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
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
		$data['title'] = "Halaman Login";
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('_templates/header', $data);
			$this->load->view('loginPage');
			$this->load->view('_templates/footer', $data);
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$auth = $this->BukuTamuModel->authorize($username, $password);

			if ($auth == false) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Username atau password salah!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('Welcome');
			} else {
				$this->session->set_userdata('username', $auth->username);
				$this->session->set_userdata('foto', $auth->nip);

				if ($auth->nip != NULL) {
					redirect('DataTamu');
				} else {
					redirect('Welcome');
				}
			}
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Welcome');
	}
}

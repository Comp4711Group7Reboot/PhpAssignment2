<?php
/**
 * core/MY_Controller.php
 *
 * Default application controller
 *
 * @author		JLP
 * @copyright           2010-2013, James L. Parry
 * ------------------------------------------------------------------------
 */
class Application extends CI_Controller {
	protected $data = array();	  // parameters for view components
	protected $id;				  // identifier for our content
	/**
	 * Constructor.
	 * Establish view parameters & load common helpers
	 */
	function __construct()
	{
		parent::__construct();
		$this->data = array();
		$this->data['title'] = 'Quotes CMS';	// our default title
		$this->errors = array();
		$this->data['pageTitle'] = 'welcome';   // our default page
	}
	/**
	 * Render this page
	 */
	function render()
	{
                $this->data['logged_in'] = $this->session->userdata('logged_in');
 		$this->data['username'] = $this->session->userdata('username');
                
                if($this->data['logged_in'] == TRUE)
                {
                    $this->data['loginstatus'] = 'logout';
                    $this->data['loginholder'] = 'logout';
                    $this->data['registrationholder'] = '';
                    
                }
                else
                {
                    $this->data['loginstatus'] = '';
                    $this->data['loginholder'] = 'login';
                    $this->data['registrationholder'] = '<a href="/authorization/register">Register</a>';
                }
                
		//$this->data['menubar'] = $this->parser->parse('_menubar', $this->config->item('menu_choices'), true);
		$this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
		// finally, build the browser page!
		$this->data['data'] = &$this->data;
		$this->parser->parse('_template', $this->data);
	}
        
        
        
        function restrict($roleRequired = null) 
        {
            $userRole = $this->session->userdata('userRole');
            if ($roleRequired != null) 
            {
                if (is_array($roleRequired)) 
                {
                    if (!in_array($userRole, $roleRequired)) 
                    {
                        redirect("/");
                        return;
                    }
                } 
                else if ($userRole != $roleRequired) 
                {
                    redirect("/");
                    return;
                }
            }
        }

}
/* End of file MY_Controller.php */
/* Location: application/core/MY_Controller.php */
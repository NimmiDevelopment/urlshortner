<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Project Name: webfun
 * Created by PhpStorm.
 * Author: Nimmitha Vidyathilaka
 * Email: nimmidevelopment@gmail.com
 * Date: 3/19/16
 * Time: 4:01 PM
 */
   class MY_Controller extends CI_Controller {
       function __construct() {
           parent::__construct();
           $this->load->helper('form');
           $this->load->helper('url');
           $this->load->helper('security');
           $this->load->helper('language');
           // Load language file
           $this->lang->load('en_admin', 'english');
       }
   }

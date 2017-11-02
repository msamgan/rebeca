<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

class PagesController extends AppController
{
	public function dashboard()
    {
    	if (!$this->isAdmin()) { $this->redirect('/dashboard'); }
    }
}
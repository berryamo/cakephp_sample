<?php
declare(strict_types=1);

namespace App\Controller\Admin;
 
use Cake\Controller\Controller;
use Cake\Event\EventInterface;
 
class AdminController extends Controller
{
    public function initialize(): void
    {
        parent::initialize();
 
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Authentication.Authentication');
    }
}
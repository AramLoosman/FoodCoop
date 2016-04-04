<?php namespace AramLoosman\Foodcoop\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class CollectiveOrders extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('AramLoosman.Foodcoop', 'main-menu-item', 'foodcoop-collectiveorders');
    }
}
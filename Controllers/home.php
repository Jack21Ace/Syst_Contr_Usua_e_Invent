<?php
class home extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function home($params)
    {
        $this->views->getView($this, 'home');
    }
}

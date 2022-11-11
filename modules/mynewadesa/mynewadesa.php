<?php


 class MyNewAdesa extends Module
{
    public function __construct(){
        $this->name = 'mynewadesa';
        $this->tab = 'backoffice_features';
        $this->version = '1.0.0';
        $this->author = 'benseghir narimen';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = ['min' => '1.6', 'max' => _PS_VERSION_];
        $this->bootstrap = true;

        parent::__construct();
        $this->displayName = $this->l('my new adesa');
        $this->description = $this->l('my new adesa');
        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
    }
/* the install function & the register hook 
are for showning the things in the function get content in
 the display hook for example in the left column in our page*/ 
    
    public function install(){
        return parent::install()
        && $this -> registerhook('displayProductAdditionalInfo')
        && $this -> registerhook('displayFooterAfter');
    }

    // th uninstall function
    public function uninstall(){
        return parent::uninstall();
        // && $this -> registerhook('displayProductAdditionalInfo')
        // && $this -> registerhook('displayFooterAfter');
    }
    // to display the content in the front office
    public function getContent(){
            return "hi there";
    }
    // public function hookdisplayProductAdditionalInfo()
    // {
    //     return "hello my name is narimen and i am a web developer";
    // }
    public function hookdisplayFooterAfter()
    {
        return "hello my name is narimen and i am a web developer";
    }

}
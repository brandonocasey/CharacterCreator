<?php
/*
 * Project: Nathan MVC
 * File: /classes/basemodel.php
 * Purpose: abstract class from which models extend.
 * Author: Nathan Davison
 */

class BaseModel {

    protected $viewModel;

    //create the base and utility objects available to all models on model creation
    public function __construct()
    {
        $this->viewModel = new ViewModel();
	$this->commonViewData();
    }

    /**
     *  Given a file, i.e. /css/base.css, replaces it with a string containing the
     *  file's mtime, i.e. /css/base.1221534296.css.
     *
     *  @param $file  The file to be loaded.  Must be an absolute path (i.e.
     *                starting with slash).
     */
    protected function auto_version($file)
    {
        if(strpos($file, '/') !== 0 || !file_exists($_SERVER['DOCUMENT_ROOT'] . $file))
        return $file;

        $mtime = filemtime($_SERVER['DOCUMENT_ROOT'] . $file);
        return preg_replace('{\\.([^./]+)$}', ".$mtime.\$1", $file);
    }
    //establish viewModel data that is required for all views in this method (i.e. the main template)
    protected function commonViewData()
    {
        $this->viewModel->set( 'css', $this->auto_version( '/css/base.css' ) );
        $this->viewModel->set( 'js', $this->auto_version( '/js/base.js' ) );

    //e.g. $this->viewModel->set("mainMenu",array("Home" => "/home", "Help" => "/help"));
    }
}

?>

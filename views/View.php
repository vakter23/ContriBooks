<?php
class View
{
    private $_file;
    private $_t;

    public function __construct($action)
    {
        $this->_file = 'views/view'.$action.'.php';
    }

    public function generate($data)
    {

        $content = $this->generateFile($this->_file,$data);

        $view = $this->generateFile('views/template.php' , array('t' => $this->_t,
        'content' => $content));

        echo $view;
    }

    private function generateFile($file,$data)
    {
//             var_dump($this->file);

        if(file_exists($file))
        {
            extract($data);

            ob_start();

            require $file;

            return ob_get_clean();
        }
        else
            throw new Exception('FIchier '.$file.' Introuvable');
    }
}

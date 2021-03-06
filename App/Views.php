<?php

namespace App;

class Views
implements \Countable
{
    protected $data = [];

    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }

    public function __get($k)
    {
        return $this->data[$k];
    }

    public function render($template)
    {
        ob_start();
        foreach ($this->data as $key => $value) {
            $$key = $value;
//            $ex = new Exceptions\Db("Exception Db", 2);
//            throw $ex;
        }
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function display($template)
    {
      
        echo $this->render($template);
    }
    
    public function count()
    {
        return count($this->data);
    }

}
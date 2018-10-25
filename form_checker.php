<?php 

class FormChecker
{
    private $_ok;
    private $_httpContent;

    public function __construct(array $httpFormContent)
    {   
        $this->_ok = True;

        foreach($httpFormContent as $k => $v)
        {
            $key = htmlspecialchars($k);
            $value = htmlspecialchars($v);

            $this->_httpContent[$key] = $value;

            if(empty($value) || !isset($value))
                $this->_ok = False;
            
        }
    }

    public function debug_checker()
    {
        echo '<pre>';
        foreach($this->_httpContent as $k => $v)
        {
            if(empty($v) || !isset($v))
                echo '<p style="color: red">' . $k . " => " . $v . '</p>';
            else 
                echo '<p style="color: green">' . $k . " => " . $v . '</p>';

        }

        echo '</pre>';
    }

    public function is_validate()
    {
        return $this->_ok;
    }
}
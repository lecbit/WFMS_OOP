<?php
class File
{
    public $fp;
    public $file;

    public function __construct($file){
        $this->file = $file;
        if(!is_writable($this->file)){
            echo 'Недоступный файл';
            exit;
        }
        $this->fp = fopen($this->file, 'a');
    }

    public function __destruct()
    {
        fclose($this->fp);
        echo 'Destuct<br>';
    }

    public function write($text){
        echo 'Write<br>';
        if(fwrite($this->fp, $text) === FALSE){
            echo 'Ne mogu';
            exit;
        }
    }
}
?>
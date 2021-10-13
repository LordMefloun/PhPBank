<?php
spl_autoload_register('autoLoader');
function autoLoader($className){
        $directorys = array(
            'classes/',
            '../classes/'
        );
       
        foreach($directorys as $directory)
        {
            if(file_exists($directory.$className . '.class.php'))
            {
                require_once($directory.$className . '.class.php');
                return;
            }           
        }
}
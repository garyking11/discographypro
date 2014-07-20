<?php

class FooController
{
    
    function get()
    {
        
        $album = new \Entity\Album(1273);
        
        echo $album->name.'<br /><br />';
        
        echo $album['Foo'].'<br /><br />';
        
        echo $album->artist->name.'<br /><br />';
        echo $album->agency->name.'<br /><br />';
        echo $album->studio->name.'<br /><br />';

        echo '<pre>'.print_r($album->fields, true).'</pre>';
        
    }
    
    
}
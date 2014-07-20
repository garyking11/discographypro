<?php

return array (
  
    '/foo'                          => 'FooController',
    '/admin/stacks/create'          => 'Stacks\\Create',
    '/admin/stacks/:number/edit'    => 'Stacks\\Update',
    '/([a-zA-Z0-9-_]+)'             => 'PageController',
    '/'                             => 'PageController',
    
);
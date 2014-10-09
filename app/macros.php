<?php

Form::macro('delete', function($url, $button_label = 'Delete', $parameters = [], $options = [])
{

    if (empty($parameters)) {
        $parameters = [
            'method'    =>  'DELETE',
            'class'     =>  'form-group delete-form',
            'url'       =>  $url
        ];
    } else {
        $parameters['url'] = $url;
        $parameters['method'] = 'DELETE';
    }

    return Form::open($parameters)
        . Form::submit($button_label, $options)
        . Form::close();

});


<?php

class contactsConfirmPlugin extends waPlugin // не уверен насчёт contactsPlugin
{
    public function backendContactInfo($params)
    {
        $contact_id = $params['contact_id']; // пока не нужно

        return array(
            'after_header'  => 'Custom content to be displayed under contact name',
            'header'        => 'Custom content to be displayed next to contact name',
            'before_header' => 'Custom content to be displayed above contact name',
            'before_top'    => 'Custom content to be displayed above main contact fields',
            'after_top'     => 'Custom content to be displayed under main contact fields',
            'photo'         => 'Custom content to be displayed under contact photo',
        );
    }
}

<?php

class contactsConfirmPlugin extends waPlugin
{
    public function backendContactInfo($params)
    {
        $contact_id = $params['contact_id']; // пока не нужно

        $html = '<a href="#" id="plugin_'.$this->id.'" class="plugin-'.$this->id.'">Подтвердить заявку на регистрацию</a>';

        return array(
            'after_header'  => $html,
            'header'        => 'next to contact name',
            'before_header' => 'above contact name',
            'before_top'    => 'above main contact fields',
            'after_top'     => 'under main contact fields',
            'photo'         => 'under contact photo',
        );
    }

    public function backendAssets()
    {
        $url = $this->getPluginStaticUrl(true);
        return '<link rel="stylesheet" href="'.$url.'css/confirm.css"><script src="'.$url.'js/confirm.js"></script>';
    }
}

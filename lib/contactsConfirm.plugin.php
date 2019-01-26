<?php

class contactsConfirmPlugin extends waPlugin // не уверен насчёт contactsPlugin
{
    public function backendContactInfo($params)
    {
        $contact_id = $params['contact_id']; // пока не нужно

        $after_header_html = '
        <a href="javascript:void(0);" class="contact-confirmation" id="contact_confirmation">
            Отправить ссылку на подтвержение регистрации
        </a>
        ';

        return array(
            'after_header'  => $after_header_html,
            'header'        => 'next to contact name',
            'before_header' => 'above contact name',
            'before_top'    => 'above main contact fields',
            'after_top'     => 'under main contact fields',
            'photo'         => 'under contact photo',
        );
    }

    public function backendAssets()
    {
        $this->addCss('css/confirm.css');
        $this->addJs('js/confirm.js');
    }
}

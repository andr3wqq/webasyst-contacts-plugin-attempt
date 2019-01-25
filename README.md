Данный репозиторий - попытка написать плагин для приложения "Контакты".  
Плагин использует хук **_backend_contact_info_**.  
Документация по хуку лежит здесь [здесь](https://developers.webasyst.com/hooks/contacts/backend_contact_info/).  
Ниже тестовый код обработчика хука, я его использовал в плагине.

```php
public function backendContactInfo($params)
{
    $contact_id = $params['contact_id'];
    return array(
        'after_header'  => 'Custom content to be displayed under contact name',
        'header'        => 'Custom content to be displayed next to contact name',
        'before_header' => 'Custom content to be displayed above contact name',
        'before_top'    => 'Custom content to be displayed above main contact fields',
        'after_top'     => 'Custom content to be displayed under main contact fields',
        'photo'         => 'Custom content to be displayed under contact photo',
    );
}
```
Код репозитория нужно поместить в папку _/wa-apps/contacts/plugins/confirm/_  
Не забудьте создать файл **_plugins.php_** в папке _/wa-config/apps/contacts/_ и добавить в него

```php
<?php

return array (
  'confirm' => true,
);
//EOF
```

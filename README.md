Данный репозиторий - попытка написать плагин для приложения "Контакты".  
Плагин использует хуки **_backend_contact_info_** и **_backend_assets_**.  
Документация по хукам лежит [здесь](https://developers.webasyst.com/hooks/contacts/).  
Код репозитория нужно поместить в папку _/wa-apps/contacts/plugins/confirm/_  
Не забудьте создать файл **_plugins.php_** в папке _/wa-config/apps/contacts/_ и добавить в него

```php
<?php

return array (
  'confirm' => true,
);
//EOF
```

p.s. также не забудьте почистить кеш в Инсталлере.

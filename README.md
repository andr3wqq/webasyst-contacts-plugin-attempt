Данный репозиторий - попытка написать плагин для приложения "Контакты".  

Плагин использует хуки **_backend_contact_info_** и **_backend_assets_**.  

Документация по хукам лежит [здесь](https://developers.webasyst.com/hooks/contacts/).  


1. Включите режим разработки, указав в файле _/wa-config/config.php_
```php
'debug' => true
```

2. Код репозитория поместите в папку _/wa-apps/contacts/plugins/confirm/_  

3. Создайте файл **_plugins.php_** в папке _/wa-config/apps/contacts/_ и добавьте в него

```php
<?php

return array (
  'confirm' => true,
);
//EOF
```

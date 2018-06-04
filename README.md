# sylius-company-data-plugin
Provides a way to create datas for your selling company on Sylius.

# Installation-procedure
```bash
$ composer require behappy/company-data-plugin
```

## Enable the plugin

```php
// in app/AppKernel.php
public function registerBundles() {
	$bundles = array(
		// ...
		new BeHappy\SyliusCompanyDataPlugin\BeHappy(),
		...
	);
	// ...
}
```

```yml
#in app/config/config.yml
imports:
    ...
    - { resource: "@BeHappySyliusCompanyDataPlugin/Resources/config/config.yml" }
    ...
```

```yml
# in routing.yml
...

behappy_mail_plugin:
    resource: '@BeHappySyliusCompanyDataPlugin/Resources/config/routing.yml'
...
```

## Generate database

Simply launch

```bash
php bin/console doctrine:schema:update --dump-sql --force
``` 


# That's it !
You now have a new entry in Admin under configuration tab : Company data

There you can configure yout company(ies) data(s) in order to be used by other plugins.

# Thanks
This plugin is partially inspired by BitBagCommerce/SyliusInvoicingPlugin (https://github.com/BitBagCommerce/SyliusInvoicingPlugin).

# Feel free to contribute
You can also ask your questions at the mail address in the composer.json mentioning this package.

# Other
You can also check our other packages (including Sylius plugins at https://github.com/BeHappyCommunication )
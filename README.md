#Welcome to Appointments widget!

The main idea is combination different web technologies for testing purposes.

##REQUIREMENTS

This scrip requires the next packages for to work.

- [phpunit/phpunit](https://github.com/sebastianbergmann/phpunit): (Optional) Used for to run the unitary tests. (Requires PHP >= 5.6.0)

##INSTALL

Download the source code from GITHUB and then execute the next command for download the third parties dependencies.

```bash
	$ composer install
```

The above command will install all the dependencies required automatically.

NOTICE: You need to have composer installed in your system, for more information follow the next link [How install composer?](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)

##USAGE

Open the script index.php from your favourite browser.

##TESTS

If you want run the test, you can use the next command:

```bash
		$ phpunit --bootstrap vendor/autoload.php src/Jarenal/Tests

```

NOTE: Before run the tests you will need install:

- [Install PHPUNIT globally](https://phpunit.de/manual/current/en/installation.html)
- [phpunit/phpunit](https://github.com/sebastianbergmann/phpunit) package through composer.
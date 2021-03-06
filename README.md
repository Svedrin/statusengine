Statusengine  - the missing event broker
============

You can also vist the project page of [Statusengine](http://www.statusengine.org)

Requirements
--------------
- **Nagios 4** or **Naemon**
- MySQL server
- PHP 5.4 or greater
- Ubuntu 14.04 LTS

Installation
--------------

1. Clone repository
```bash
chmod +x install.sh
./install.sh
```

2. Set your username and password of MySQL server in /opt/statusengine/cakephp/app/Config/database.php
```php
	public $legacy = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'nagios',
		'password' => '12345',
		'database' => 'nagios',
		'prefix' => 'nagios_',
		//'encoding' => 'utf8',
	);
```

3. Create database (using CakePHP shell) MyISAM
```bash
/opt/statusengine/cakephp/app/Console/cake schema update --plugin Legacy --file legacy_schema.php --connection legacy
```
or:

3. Create database InnoDB
```bash
/opt/statusengine/cakephp/app/Console/cake schema update --plugin Legacy --file legacy_schema_innodb.php --connection legacy
```

4. Change path to your nagios.cfg / naemon.cfg in /opt/statusengine/cakephp/app/Config/Statusengine.php if different on your system
```php
'coreconfig' => '/etc/naemon/naemon.cfg',
```

5. Start Statusengine in legacy mode:
```bash
/opt/statusengine/cakephp/app/Console/cake statusengine_legacy -w
```

6. Load the broker module in naemon.cfg:
```
broker_module=/opt/statusengine/statusengine.o
```

If you want to specify a different path to the JSON config, add the path behind the module path, like so:
```
broker_module=/opt/statusengine/statusengine.o /some/other/config.json
```


Migrate to Statusengine
--------------

1. Clone repository
```bash
chmod +x install.sh
./install.sh
```

2. Set your username and password of MySQL server in /opt/statusengine/cakephp/app/Config/database.php
```php
	public $legacy = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'nagios',
		'password' => '12345',
		'database' => 'nagios',
		'prefix' => 'nagios_',
		//'encoding' => 'utf8',
	);
```

3. Upgrade database with CakePHP schema shell (MyISAM):
```bash
/opt/statusengine/cakephp/app/Console/cake schema update --plugin Legacy --file legacy_schema.php --connection legacy
```
or InnoDB

3. Upgrade database with CakePHP schema shell (InnoDB)
```bash
/opt/statusengine/cakephp/app/Console/cake schema update --plugin Legacy --file legacy_schema_innodb.php --connection legacy
```

4. Change path to your nagios.cfg / naemon.cfg in /opt/statusengine/cakephp/app/Config/Statusengine.php if different on your system
```php
'coreconfig' => '/etc/naemon/naemon.cfg',
```

5. Start Statusengine in legacy mode:
```bash
/opt/statusengine/cakephp/app/Console/cake statusengine_legacy -w
```

Tested with
--------------
* Naemon 0.8.0 - master
* Nagios 4.0.8
* mod_gearman
* NagVis
* MySQL
* MariaDB

Licence
--------------
Copyright (c) 2014 - present Daniel Ziegler <daniel@statusengine.org>

Statusengine is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation in version 2

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

<?php
// source: /var/www/html/src/config/common.neon
// source: /var/www/html/src/config/services.neon
// source: /var/www/html/src/config/doctrine.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_f8c2e1ce96 extends Nette\DI\Container
{
	protected array $aliases = [
		'application' => 'application.application',
		'cacheStorage' => 'cache.storage',
		'httpRequest' => 'http.request',
		'httpResponse' => 'http.response',
		'nette.cacheJournal' => 'cache.journal',
		'nette.httpRequestFactory' => 'http.requestFactory',
		'nette.latteFactory' => 'latte.latteFactory',
		'nette.mailer' => 'mail.mailer',
		'nette.presenterFactory' => 'application.presenterFactory',
		'nette.templateFactory' => 'latte.templateFactory',
		'nette.userStorage' => 'security.userStorage',
		'session' => 'session.session',
		'user' => 'security.user',
	];

	protected array $wiring = [
		'Nette\DI\Container' => [['container']],
		'Nette\Application\Application' => [['application.application']],
		'Nette\Application\IPresenterFactory' => [['application.presenterFactory']],
		'Nette\Application\LinkGenerator' => [['application.linkGenerator']],
		'Nette\Caching\Storages\Journal' => [['cache.journal']],
		'Nette\Caching\Storage' => [['cache.storage']],
		'Nette\Http\RequestFactory' => [['http.requestFactory']],
		'Nette\Http\IRequest' => [['http.request']],
		'Nette\Http\Request' => [['http.request']],
		'Nette\Http\IResponse' => [['http.response']],
		'Nette\Http\Response' => [['http.response']],
		'Nette\Bridges\ApplicationLatte\LatteFactory' => [['latte.latteFactory']],
		'Nette\Application\UI\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Bridges\ApplicationLatte\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Mail\Mailer' => [['mail.mailer']],
		'Nette\Security\Passwords' => [['security.passwords']],
		'Nette\Security\UserStorage' => [['security.userStorage']],
		'Nette\Security\User' => [['security.user']],
		'Nette\Http\Session' => [['session.session']],
		'Tracy\ILogger' => [['tracy.logger']],
		'Tracy\BlueScreen' => [['tracy.blueScreen']],
		'Tracy\Bar' => [['tracy.bar']],
		'Symfony\Component\Console\Application' => [['console.application']],
		'Symfony\Contracts\Service\ResetInterface' => [['console.application']],
		'Contributte\Console\Application' => [['console.application']],
		'Symfony\Component\Console\CommandLoader\CommandLoaderInterface' => [['console.commandLoader']],
		'Doctrine\DBAL\Logging\SQLLogger' => [1 => ['doctrine.dbal.logger']],
		'Doctrine\DBAL\Logging\LoggerChain' => [['doctrine.dbal.logger']],
		'Doctrine\DBAL\Configuration' => [0 => ['doctrine.orm.configuration'], 2 => ['doctrine.dbal.configuration']],
		'Doctrine\Common\EventManager' => [['doctrine.dbal.eventManager']],
		'Nettrine\DBAL\Events\ContainerAwareEventManager' => [['doctrine.dbal.eventManager']],
		'Nettrine\DBAL\ConnectionFactory' => [['doctrine.dbal.connectionFactory']],
		'Doctrine\DBAL\Connection' => [['doctrine.dbal.connection']],
		'Nettrine\DBAL\ConnectionAccessor' => [['doctrine.dbal.connectionAccessor']],
		'Doctrine\DBAL\Tools\Console\ConnectionProvider' => [2 => ['doctrine.dbal.console.connectionProvider']],
		'Doctrine\DBAL\Tools\Console\ConnectionProvider\SingleConnectionProvider' => [
			2 => ['doctrine.dbal.console.connectionProvider'],
		],
		'Symfony\Component\Console\Command\Command' => [
			2 => [
				'doctrine.dbal.console.reservedWordsCommand',
				'doctrine.dbal.console.runSqlCommand',
				'doctrine.orm.console.schemaToolCreateCommand',
				'doctrine.orm.console.schemaToolUpdateCommand',
				'doctrine.orm.console.schemaToolDropCommand',
				'doctrine.orm.console.convertMappingCommand',
				'doctrine.orm.console.ensureProductionSettingsCommand',
				'doctrine.orm.console.generateEntitiesCommand',
				'doctrine.orm.console.generateProxiesCommand',
				'doctrine.orm.console.generateRepositoriesCommand',
				'doctrine.orm.console.infoCommand',
				'doctrine.orm.console.mappingDescribeCommand',
				'doctrine.orm.console.runDqlCommand',
				'doctrine.orm.console.validateSchemaCommand',
				'doctrine.orm.console.clearMetadataCacheCommand',
				'doctrine.migrations.currentCommand',
				'doctrine.migrations.diffCommand',
				'doctrine.migrations.dumpSchemaCommand',
				'doctrine.migrations.executeCommand',
				'doctrine.migrations.generateCommand',
				'doctrine.migrations.latestCommand',
				'doctrine.migrations.listCommand',
				'doctrine.migrations.migrateCommand',
				'doctrine.migrations.rollupCommand',
				'doctrine.migrations.statusCommand',
				'doctrine.migrations.syncMetadataCommand',
				'doctrine.migrations.upToDateCommand',
				'doctrine.migrations.versionCommand',
			],
		],
		'Doctrine\DBAL\Tools\Console\Command\ReservedWordsCommand' => [2 => ['doctrine.dbal.console.reservedWordsCommand']],
		'Doctrine\DBAL\Tools\Console\Command\RunSqlCommand' => [2 => ['doctrine.dbal.console.runSqlCommand']],
		'Doctrine\ORM\Configuration' => [['doctrine.orm.configuration']],
		'Doctrine\ORM\Mapping\EntityListenerResolver' => [['doctrine.orm.entityListenerResolver']],
		'Nettrine\ORM\Mapping\ContainerEntityListenerResolver' => [['doctrine.orm.entityListenerResolver']],
		'Doctrine\ORM\EntityManagerInterface' => [['doctrine.orm.entityManagerDecorator']],
		'Doctrine\Persistence\ObjectManager' => [['doctrine.orm.entityManagerDecorator']],
		'Doctrine\ORM\EntityManager' => [['doctrine.orm.entityManagerDecorator']],
		'Doctrine\Persistence\AbstractManagerRegistry' => [['doctrine.orm.managerRegistry']],
		'Doctrine\Persistence\ConnectionRegistry' => [['doctrine.orm.managerRegistry']],
		'Doctrine\Persistence\ManagerRegistry' => [['doctrine.orm.managerRegistry']],
		'Nettrine\ORM\ManagerRegistry' => [['doctrine.orm.managerRegistry']],
		'Doctrine\Persistence\Mapping\Driver\MappingDriver' => [
			0 => ['doctrine.orm.mappingDriver'],
			2 => [1 => 'doctrine.orm.attributes.attributeDriver'],
		],
		'Doctrine\Persistence\Mapping\Driver\MappingDriverChain' => [['doctrine.orm.mappingDriver']],
		'Doctrine\ORM\Mapping\Driver\CompatibilityAnnotationDriver' => [2 => ['doctrine.orm.attributes.attributeDriver']],
		'Doctrine\ORM\Mapping\Driver\AttributeDriver' => [2 => ['doctrine.orm.attributes.attributeDriver']],
		'Symfony\Component\Console\Helper\Helper' => [2 => ['doctrine.orm.console.entityManagerHelper']],
		'Symfony\Component\Console\Helper\HelperInterface' => [2 => ['doctrine.orm.console.entityManagerHelper']],
		'Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper' => [2 => ['doctrine.orm.console.entityManagerHelper']],
		'Doctrine\ORM\Tools\Console\Command\SchemaTool\AbstractCommand' => [
			2 => [
				'doctrine.orm.console.schemaToolCreateCommand',
				'doctrine.orm.console.schemaToolUpdateCommand',
				'doctrine.orm.console.schemaToolDropCommand',
			],
		],
		'Doctrine\ORM\Tools\Console\Command\AbstractEntityManagerCommand' => [
			2 => [
				'doctrine.orm.console.schemaToolCreateCommand',
				'doctrine.orm.console.schemaToolUpdateCommand',
				'doctrine.orm.console.schemaToolDropCommand',
				'doctrine.orm.console.convertMappingCommand',
				'doctrine.orm.console.ensureProductionSettingsCommand',
				'doctrine.orm.console.generateEntitiesCommand',
				'doctrine.orm.console.generateProxiesCommand',
				'doctrine.orm.console.generateRepositoriesCommand',
				'doctrine.orm.console.infoCommand',
				'doctrine.orm.console.mappingDescribeCommand',
				'doctrine.orm.console.runDqlCommand',
				'doctrine.orm.console.validateSchemaCommand',
				'doctrine.orm.console.clearMetadataCacheCommand',
			],
		],
		'Doctrine\ORM\Tools\Console\Command\SchemaTool\CreateCommand' => [
			2 => ['doctrine.orm.console.schemaToolCreateCommand'],
		],
		'Doctrine\ORM\Tools\Console\Command\SchemaTool\UpdateCommand' => [
			2 => ['doctrine.orm.console.schemaToolUpdateCommand'],
		],
		'Doctrine\ORM\Tools\Console\Command\SchemaTool\DropCommand' => [
			2 => ['doctrine.orm.console.schemaToolDropCommand'],
		],
		'Doctrine\ORM\Tools\Console\Command\ConvertMappingCommand' => [2 => ['doctrine.orm.console.convertMappingCommand']],
		'Doctrine\ORM\Tools\Console\Command\EnsureProductionSettingsCommand' => [
			2 => ['doctrine.orm.console.ensureProductionSettingsCommand'],
		],
		'Doctrine\ORM\Tools\Console\Command\GenerateEntitiesCommand' => [
			2 => ['doctrine.orm.console.generateEntitiesCommand'],
		],
		'Doctrine\ORM\Tools\Console\Command\GenerateProxiesCommand' => [
			2 => ['doctrine.orm.console.generateProxiesCommand'],
		],
		'Doctrine\ORM\Tools\Console\Command\GenerateRepositoriesCommand' => [
			2 => ['doctrine.orm.console.generateRepositoriesCommand'],
		],
		'Doctrine\ORM\Tools\Console\Command\InfoCommand' => [2 => ['doctrine.orm.console.infoCommand']],
		'Doctrine\ORM\Tools\Console\Command\MappingDescribeCommand' => [
			2 => ['doctrine.orm.console.mappingDescribeCommand'],
		],
		'Doctrine\ORM\Tools\Console\Command\RunDqlCommand' => [2 => ['doctrine.orm.console.runDqlCommand']],
		'Doctrine\ORM\Tools\Console\Command\ValidateSchemaCommand' => [2 => ['doctrine.orm.console.validateSchemaCommand']],
		'Doctrine\ORM\Tools\Console\Command\ClearCache\MetadataCommand' => [
			2 => ['doctrine.orm.console.clearMetadataCacheCommand'],
		],
		'Doctrine\Common\Cache\Cache' => [['doctrine.cache.driver']],
		'Doctrine\Migrations\Metadata\Storage\MetadataStorageConfiguration' => [
			['doctrine.migrations.configuration.tableStorage'],
		],
		'Doctrine\Migrations\Metadata\Storage\TableMetadataStorageConfiguration' => [
			['doctrine.migrations.configuration.tableStorage'],
		],
		'Doctrine\Migrations\Configuration\Configuration' => [['doctrine.migrations.configuration']],
		'Doctrine\Migrations\Version\MigrationFactory' => [['doctrine.migrations.migrationFactory']],
		'Nettrine\Migrations\Version\DbalMigrationFactory' => [['doctrine.migrations.migrationFactory']],
		'Nettrine\Migrations\DI\DependencyFactory' => [2 => ['doctrine.migrations.nettrineDependencyFactory']],
		'Doctrine\Migrations\DependencyFactory' => [['doctrine.migrations.dependencyFactory']],
		'Doctrine\Migrations\Tools\Console\Command\DoctrineCommand' => [
			2 => [
				'doctrine.migrations.currentCommand',
				'doctrine.migrations.diffCommand',
				'doctrine.migrations.dumpSchemaCommand',
				'doctrine.migrations.executeCommand',
				'doctrine.migrations.generateCommand',
				'doctrine.migrations.latestCommand',
				'doctrine.migrations.listCommand',
				'doctrine.migrations.migrateCommand',
				'doctrine.migrations.rollupCommand',
				'doctrine.migrations.statusCommand',
				'doctrine.migrations.syncMetadataCommand',
				'doctrine.migrations.upToDateCommand',
				'doctrine.migrations.versionCommand',
			],
		],
		'Doctrine\Migrations\Tools\Console\Command\CurrentCommand' => [2 => ['doctrine.migrations.currentCommand']],
		'Doctrine\Migrations\Tools\Console\Command\DiffCommand' => [2 => ['doctrine.migrations.diffCommand']],
		'Doctrine\Migrations\Tools\Console\Command\DumpSchemaCommand' => [2 => ['doctrine.migrations.dumpSchemaCommand']],
		'Doctrine\Migrations\Tools\Console\Command\ExecuteCommand' => [2 => ['doctrine.migrations.executeCommand']],
		'Doctrine\Migrations\Tools\Console\Command\GenerateCommand' => [2 => ['doctrine.migrations.generateCommand']],
		'Doctrine\Migrations\Tools\Console\Command\LatestCommand' => [2 => ['doctrine.migrations.latestCommand']],
		'Doctrine\Migrations\Tools\Console\Command\ListCommand' => [2 => ['doctrine.migrations.listCommand']],
		'Doctrine\Migrations\Tools\Console\Command\MigrateCommand' => [2 => ['doctrine.migrations.migrateCommand']],
		'Doctrine\Migrations\Tools\Console\Command\RollupCommand' => [2 => ['doctrine.migrations.rollupCommand']],
		'Doctrine\Migrations\Tools\Console\Command\StatusCommand' => [2 => ['doctrine.migrations.statusCommand']],
		'Doctrine\Migrations\Tools\Console\Command\SyncMetadataCommand' => [
			2 => ['doctrine.migrations.syncMetadataCommand'],
		],
		'Doctrine\Migrations\Tools\Console\Command\UpToDateCommand' => [2 => ['doctrine.migrations.upToDateCommand']],
		'Doctrine\Migrations\Tools\Console\Command\VersionCommand' => [2 => ['doctrine.migrations.versionCommand']],
		'Nette\Routing\RouteList' => [['01']],
		'Nette\Routing\Router' => [['01']],
		'ArrayAccess' => [2 => ['01', 'application.2', 'application.3']],
		'Nette\Application\Routers\RouteList' => [['01']],
		'Nette\Application\IPresenter' => [
			2 => ['application.1', 'application.2', 'application.3', 'application.4', 'application.5'],
		],
		'App\UI\Error\Error5xx\Error5xxPresenter' => [2 => ['application.1']],
		'Nette\Application\UI\Presenter' => [2 => ['application.2', 'application.3']],
		'Nette\Application\UI\Control' => [2 => ['application.2', 'application.3']],
		'Nette\Application\UI\Component' => [2 => ['application.2', 'application.3']],
		'Nette\ComponentModel\Container' => [2 => ['application.2', 'application.3']],
		'Nette\ComponentModel\Component' => [2 => ['application.2', 'application.3']],
		'Nette\Application\UI\Renderable' => [2 => ['application.2', 'application.3']],
		'Nette\Application\UI\StatePersistent' => [2 => ['application.2', 'application.3']],
		'Nette\Application\UI\SignalReceiver' => [2 => ['application.2', 'application.3']],
		'Nette\ComponentModel\IContainer' => [2 => ['application.2', 'application.3']],
		'Nette\ComponentModel\IComponent' => [2 => ['application.2', 'application.3']],
		'App\UI\Error\Error4xx\Error4xxPresenter' => [2 => ['application.2']],
		'App\Whalebone\DeviceModule\Presenters\DevicePresenter' => [2 => ['application.3']],
		'NetteModule\ErrorPresenter' => [2 => ['application.4']],
		'NetteModule\MicroPresenter' => [2 => ['application.5']],
		'Doctrine\ORM\EntityRepository' => [['02', '03']],
		'Doctrine\Common\Collections\Selectable' => [['02', '03']],
		'Doctrine\Persistence\ObjectRepository' => [['02', '03']],
		'App\Whalebone\DeviceModule\Repositories\DeviceOwnerRepository' => [['02']],
		'App\Whalebone\DeviceModule\Repositories\DeviceRepository' => [['03']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
	}


	public function createService01(): Nette\Application\Routers\RouteList
	{
		return App\Core\RouterFactory::createRouter();
	}


	public function createService02(): App\Whalebone\DeviceModule\Repositories\DeviceOwnerRepository
	{
		return new App\Whalebone\DeviceModule\Repositories\DeviceOwnerRepository($this->getService('doctrine.orm.entityManagerDecorator'));
	}


	public function createService03(): App\Whalebone\DeviceModule\Repositories\DeviceRepository
	{
		return new App\Whalebone\DeviceModule\Repositories\DeviceRepository($this->getService('doctrine.orm.entityManagerDecorator'));
	}


	public function createServiceApplication__1(): App\UI\Error\Error5xx\Error5xxPresenter
	{
		return new App\UI\Error\Error5xx\Error5xxPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__2(): App\UI\Error\Error4xx\Error4xxPresenter
	{
		$service = new App\UI\Error\Error4xx\Error4xxPresenter;
		$service->injectPrimary(
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__3(): App\Whalebone\DeviceModule\Presenters\DevicePresenter
	{
		$service = new App\Whalebone\DeviceModule\Presenters\DevicePresenter($this->getService('03'));
		$service->injectPrimary(
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__4(): NetteModule\ErrorPresenter
	{
		return new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__5(): NetteModule\MicroPresenter
	{
		return new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('01'));
	}


	public function createServiceApplication__application(): Nette\Application\Application
	{
		$service = new Nette\Application\Application(
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
		);
		Nette\Bridges\ApplicationDI\ApplicationExtension::initializeBlueScreenPanel(
			$this->getService('tracy.blueScreen'),
			$service,
		);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\ApplicationTracy\RoutingPanel(
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('application.presenterFactory'),
		));
		return $service;
	}


	public function createServiceApplication__linkGenerator(): Nette\Application\LinkGenerator
	{
		return new Nette\Application\LinkGenerator(
			$this->getService('01'),
			$this->getService('http.request')->getUrl()->withoutUserInfo(),
			$this->getService('application.presenterFactory'),
		);
	}


	public function createServiceApplication__presenterFactory(): Nette\Application\IPresenterFactory
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback(
			$this,
			5,
			'/var/www/html/src/temp/cache/nette.application/touch',
		));
		$service->setMapping(['Whalebone' => 'App\Whalebone\*\Presenters\*Presenter']);
		return $service;
	}


	public function createServiceCache__journal(): Nette\Caching\Storages\Journal
	{
		return new Nette\Caching\Storages\SQLiteJournal('/var/www/html/src/temp/cache/journal.s3db');
	}


	public function createServiceCache__storage(): Nette\Caching\Storage
	{
		return new Nette\Caching\Storages\FileStorage('/var/www/html/src/temp/cache', $this->getService('cache.journal'));
	}


	public function createServiceConsole__application(): Contributte\Console\Application
	{
		$service = new Contributte\Console\Application;
		$service->setCommandLoader($this->getService('console.commandLoader'));
		$service->getHelperSet()->set($this->getService('doctrine.orm.console.entityManagerHelper'),'em');
		return $service;
	}


	public function createServiceConsole__commandLoader(): Symfony\Component\Console\CommandLoader\CommandLoaderInterface
	{
		return new Contributte\Console\CommandLoader\ContainerCommandLoader(
			$this,
			[
			'dbal:reserved-words' => 'doctrine.dbal.console.reservedWordsCommand',
			'dbal:run-sql' => 'doctrine.dbal.console.runSqlCommand',
			'orm:schema-tool:create' => 'doctrine.orm.console.schemaToolCreateCommand',
			'orm:schema-tool:update' => 'doctrine.orm.console.schemaToolUpdateCommand',
			'orm:schema-tool:drop' => 'doctrine.orm.console.schemaToolDropCommand',
			'orm:convert-mapping' => 'doctrine.orm.console.convertMappingCommand',
			'orm:ensure-production-settings' => 'doctrine.orm.console.ensureProductionSettingsCommand',
			'orm:generate-entities' => 'doctrine.orm.console.generateEntitiesCommand',
			'orm:generate-proxies' => 'doctrine.orm.console.generateProxiesCommand',
			'orm:generate-repositories' => 'doctrine.orm.console.generateRepositoriesCommand',
			'orm:info' => 'doctrine.orm.console.infoCommand',
			'orm:mapping:describe' => 'doctrine.orm.console.mappingDescribeCommand',
			'orm:run-dql' => 'doctrine.orm.console.runDqlCommand',
			'orm:validate-schema' => 'doctrine.orm.console.validateSchemaCommand',
			'orm:clear-cache:metadata' => 'doctrine.orm.console.clearMetadataCacheCommand',
			'migrations:current' => 'doctrine.migrations.currentCommand',
			'migrations:diff' => 'doctrine.migrations.diffCommand',
			'migrations:dump-schema' => 'doctrine.migrations.dumpSchemaCommand',
			'migrations:execute' => 'doctrine.migrations.executeCommand',
			'migrations:generate' => 'doctrine.migrations.generateCommand',
			'migrations:latest' => 'doctrine.migrations.latestCommand',
			'migrations:list' => 'doctrine.migrations.listCommand',
			'migrations:migrate' => 'doctrine.migrations.migrateCommand',
			'migrations:rollup' => 'doctrine.migrations.rollupCommand',
			'migrations:status' => 'doctrine.migrations.statusCommand',
			'migrations:sync-metadata-storage' => 'doctrine.migrations.syncMetadataCommand',
			'migrations:up-to-date' => 'doctrine.migrations.upToDateCommand',
			'migrations:version' => 'doctrine.migrations.versionCommand',
		],
		);
	}


	public function createServiceContainer(): Nette\DI\Container
	{
		return $this;
	}


	public function createServiceDoctrine__cache__driver(): Doctrine\Common\Cache\Cache
	{
		return new Doctrine\Common\Cache\PhpFileCache('/var/www/html/src/temp/cache/nettrine.cache');
	}


	public function createServiceDoctrine__dbal__configuration(): Doctrine\DBAL\Configuration
	{
		$service = new Doctrine\DBAL\Configuration;
		$service->setSQLLogger($this->getService('doctrine.dbal.logger'));
		$service->setResultCacheImpl($this->getService('doctrine.cache.driver'));
		$service->setAutoCommit(true);
		return $service;
	}


	public function createServiceDoctrine__dbal__connection(): Doctrine\DBAL\Connection
	{
		return $this->getService('doctrine.dbal.connectionFactory')->createConnection(
			[
			'driver' => 'pdo_mysql',
			'host' => 'nette_db',
			'dbname' => 'nette_db',
			'user' => 'root',
			'password' => 'root_password',
			'charset' => 'utf8mb4',
			'port' => 3306,
			'types' => [],
			'typesMapping' => [],
		],
			$this->getService('doctrine.dbal.configuration'),
			$this->getService('doctrine.dbal.eventManager'),
		);
	}


	public function createServiceDoctrine__dbal__connectionAccessor(): Nettrine\DBAL\ConnectionAccessor
	{
		return new class ($this) implements Nettrine\DBAL\ConnectionAccessor {
			public function __construct(
				private Container_f8c2e1ce96 $container,
			) {
			}


			public function get(): Doctrine\DBAL\Connection
			{
				return $this->container->getService('doctrine.dbal.connection');
			}
		};
	}


	public function createServiceDoctrine__dbal__connectionFactory(): Nettrine\DBAL\ConnectionFactory
	{
		return new Nettrine\DBAL\ConnectionFactory([], []);
	}


	public function createServiceDoctrine__dbal__console__connectionProvider(
	): Doctrine\DBAL\Tools\Console\ConnectionProvider\SingleConnectionProvider
	{
		return new Doctrine\DBAL\Tools\Console\ConnectionProvider\SingleConnectionProvider($this->getService('doctrine.dbal.connection'));
	}


	public function createServiceDoctrine__dbal__console__reservedWordsCommand(
	): Doctrine\DBAL\Tools\Console\Command\ReservedWordsCommand
	{
		return new Doctrine\DBAL\Tools\Console\Command\ReservedWordsCommand($this->getService('doctrine.dbal.console.connectionProvider'));
	}


	public function createServiceDoctrine__dbal__console__runSqlCommand(
	): Doctrine\DBAL\Tools\Console\Command\RunSqlCommand
	{
		return new Doctrine\DBAL\Tools\Console\Command\RunSqlCommand($this->getService('doctrine.dbal.console.connectionProvider'));
	}


	public function createServiceDoctrine__dbal__eventManager(): Nettrine\DBAL\Events\ContainerAwareEventManager
	{
		return new Nettrine\DBAL\Events\ContainerAwareEventManager($this);
	}


	public function createServiceDoctrine__dbal__logger(): Doctrine\DBAL\Logging\LoggerChain
	{
		return new Doctrine\DBAL\Logging\LoggerChain([]);
	}


	public function createServiceDoctrine__migrations__configuration(): Doctrine\Migrations\Configuration\Configuration
	{
		$service = new Doctrine\Migrations\Configuration\Configuration;
		$service->setCustomTemplate(null);
		$service->setMetadataStorageConfiguration($this->getService('doctrine.migrations.configuration.tableStorage'));
		$service->addMigrationsDirectory('App\Migration', '/var/www/html/src/app/Migration');
		$service->setAllOrNothing(false);
		return $service;
	}


	public function createServiceDoctrine__migrations__configuration__tableStorage(
	): Doctrine\Migrations\Metadata\Storage\TableMetadataStorageConfiguration
	{
		$service = new Doctrine\Migrations\Metadata\Storage\TableMetadataStorageConfiguration;
		$service->setTableName('doctrine_migrations');
		$service->setVersionColumnName('version');
		return $service;
	}


	public function createServiceDoctrine__migrations__currentCommand(
	): Doctrine\Migrations\Tools\Console\Command\CurrentCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\CurrentCommand($this->getService('doctrine.migrations.dependencyFactory'));
	}


	public function createServiceDoctrine__migrations__dependencyFactory(): Doctrine\Migrations\DependencyFactory
	{
		return $this->getService('doctrine.migrations.nettrineDependencyFactory')->createDependencyFactory();
	}


	public function createServiceDoctrine__migrations__diffCommand(
	): Doctrine\Migrations\Tools\Console\Command\DiffCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\DiffCommand($this->getService('doctrine.migrations.dependencyFactory'));
	}


	public function createServiceDoctrine__migrations__dumpSchemaCommand(
	): Doctrine\Migrations\Tools\Console\Command\DumpSchemaCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\DumpSchemaCommand($this->getService('doctrine.migrations.dependencyFactory'));
	}


	public function createServiceDoctrine__migrations__executeCommand(
	): Doctrine\Migrations\Tools\Console\Command\ExecuteCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\ExecuteCommand($this->getService('doctrine.migrations.dependencyFactory'));
	}


	public function createServiceDoctrine__migrations__generateCommand(
	): Doctrine\Migrations\Tools\Console\Command\GenerateCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\GenerateCommand($this->getService('doctrine.migrations.dependencyFactory'));
	}


	public function createServiceDoctrine__migrations__latestCommand(
	): Doctrine\Migrations\Tools\Console\Command\LatestCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\LatestCommand($this->getService('doctrine.migrations.dependencyFactory'));
	}


	public function createServiceDoctrine__migrations__listCommand(
	): Doctrine\Migrations\Tools\Console\Command\ListCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\ListCommand($this->getService('doctrine.migrations.dependencyFactory'));
	}


	public function createServiceDoctrine__migrations__migrateCommand(
	): Doctrine\Migrations\Tools\Console\Command\MigrateCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\MigrateCommand($this->getService('doctrine.migrations.dependencyFactory'));
	}


	public function createServiceDoctrine__migrations__migrationFactory(
	): Nettrine\Migrations\Version\DbalMigrationFactory
	{
		return new Nettrine\Migrations\Version\DbalMigrationFactory($this, $this->getService('doctrine.dbal.connection'));
	}


	public function createServiceDoctrine__migrations__nettrineDependencyFactory(
	): Nettrine\Migrations\DI\DependencyFactory
	{
		return new Nettrine\Migrations\DI\DependencyFactory(
			$this->getService('doctrine.migrations.configuration'),
			$this->getService('doctrine.migrations.migrationFactory'),
			$this->getService('doctrine.dbal.connection'),
			$this->getService('doctrine.orm.entityManagerDecorator'),
		);
	}


	public function createServiceDoctrine__migrations__rollupCommand(
	): Doctrine\Migrations\Tools\Console\Command\RollupCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\RollupCommand($this->getService('doctrine.migrations.dependencyFactory'));
	}


	public function createServiceDoctrine__migrations__statusCommand(
	): Doctrine\Migrations\Tools\Console\Command\StatusCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\StatusCommand($this->getService('doctrine.migrations.dependencyFactory'));
	}


	public function createServiceDoctrine__migrations__syncMetadataCommand(
	): Doctrine\Migrations\Tools\Console\Command\SyncMetadataCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\SyncMetadataCommand($this->getService('doctrine.migrations.dependencyFactory'));
	}


	public function createServiceDoctrine__migrations__upToDateCommand(
	): Doctrine\Migrations\Tools\Console\Command\UpToDateCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\UpToDateCommand($this->getService('doctrine.migrations.dependencyFactory'));
	}


	public function createServiceDoctrine__migrations__versionCommand(
	): Doctrine\Migrations\Tools\Console\Command\VersionCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\VersionCommand($this->getService('doctrine.migrations.dependencyFactory'));
	}


	public function createServiceDoctrine__orm__attributes__attributeDriver(
	): Doctrine\ORM\Mapping\Driver\AttributeDriver
	{
		$service = new Doctrine\ORM\Mapping\Driver\AttributeDriver(['/var/www/html/src/app/Whalebone/DeviceModule/Models']);
		$service->addExcludePaths([]);
		return $service;
	}


	public function createServiceDoctrine__orm__configuration(): Doctrine\ORM\Configuration
	{
		$service = new Doctrine\ORM\Configuration;
		$service->setProxyDir('/var/www/html/src/temp/proxies');
		$service->setAutoGenerateProxyClasses(2);
		$service->setProxyNamespace('Nettrine\Proxy');
		$service->setMetadataDriverImpl($this->getService('doctrine.orm.mappingDriver'));
		$service->setCustomStringFunctions([]);
		$service->setCustomNumericFunctions([]);
		$service->setCustomDatetimeFunctions([
			'dayOfWeek' => 'DoctrineExtensions\Query\Mysql\DayOfWeek',
			'year' => 'DoctrineExtensions\Query\Mysql\Year',
			'month' => 'DoctrineExtensions\Query\Mysql\Month',
			'date' => 'DoctrineExtensions\Query\Mysql\Date',
		]);
		$service->setCustomHydrationModes([]);
		$service->setNamingStrategy(new Doctrine\ORM\Mapping\UnderscoreNamingStrategy);
		$service->setEntityListenerResolver($this->getService('doctrine.orm.entityListenerResolver'));
		return $service;
	}


	public function createServiceDoctrine__orm__console__clearMetadataCacheCommand(
	): Doctrine\ORM\Tools\Console\Command\ClearCache\MetadataCommand
	{
		return new Doctrine\ORM\Tools\Console\Command\ClearCache\MetadataCommand;
	}


	public function createServiceDoctrine__orm__console__convertMappingCommand(
	): Doctrine\ORM\Tools\Console\Command\ConvertMappingCommand
	{
		return new Doctrine\ORM\Tools\Console\Command\ConvertMappingCommand;
	}


	public function createServiceDoctrine__orm__console__ensureProductionSettingsCommand(
	): Doctrine\ORM\Tools\Console\Command\EnsureProductionSettingsCommand
	{
		return new Doctrine\ORM\Tools\Console\Command\EnsureProductionSettingsCommand;
	}


	public function createServiceDoctrine__orm__console__entityManagerHelper(
	): Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper
	{
		return new Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($this->getService('doctrine.orm.entityManagerDecorator'));
	}


	public function createServiceDoctrine__orm__console__generateEntitiesCommand(
	): Doctrine\ORM\Tools\Console\Command\GenerateEntitiesCommand
	{
		return new Doctrine\ORM\Tools\Console\Command\GenerateEntitiesCommand;
	}


	public function createServiceDoctrine__orm__console__generateProxiesCommand(
	): Doctrine\ORM\Tools\Console\Command\GenerateProxiesCommand
	{
		return new Doctrine\ORM\Tools\Console\Command\GenerateProxiesCommand;
	}


	public function createServiceDoctrine__orm__console__generateRepositoriesCommand(
	): Doctrine\ORM\Tools\Console\Command\GenerateRepositoriesCommand
	{
		return new Doctrine\ORM\Tools\Console\Command\GenerateRepositoriesCommand;
	}


	public function createServiceDoctrine__orm__console__infoCommand(): Doctrine\ORM\Tools\Console\Command\InfoCommand
	{
		return new Doctrine\ORM\Tools\Console\Command\InfoCommand;
	}


	public function createServiceDoctrine__orm__console__mappingDescribeCommand(
	): Doctrine\ORM\Tools\Console\Command\MappingDescribeCommand
	{
		return new Doctrine\ORM\Tools\Console\Command\MappingDescribeCommand;
	}


	public function createServiceDoctrine__orm__console__runDqlCommand(
	): Doctrine\ORM\Tools\Console\Command\RunDqlCommand
	{
		return new Doctrine\ORM\Tools\Console\Command\RunDqlCommand;
	}


	public function createServiceDoctrine__orm__console__schemaToolCreateCommand(
	): Doctrine\ORM\Tools\Console\Command\SchemaTool\CreateCommand
	{
		return new Doctrine\ORM\Tools\Console\Command\SchemaTool\CreateCommand;
	}


	public function createServiceDoctrine__orm__console__schemaToolDropCommand(
	): Doctrine\ORM\Tools\Console\Command\SchemaTool\DropCommand
	{
		return new Doctrine\ORM\Tools\Console\Command\SchemaTool\DropCommand;
	}


	public function createServiceDoctrine__orm__console__schemaToolUpdateCommand(
	): Doctrine\ORM\Tools\Console\Command\SchemaTool\UpdateCommand
	{
		return new Doctrine\ORM\Tools\Console\Command\SchemaTool\UpdateCommand;
	}


	public function createServiceDoctrine__orm__console__validateSchemaCommand(
	): Doctrine\ORM\Tools\Console\Command\ValidateSchemaCommand
	{
		return new Doctrine\ORM\Tools\Console\Command\ValidateSchemaCommand;
	}


	public function createServiceDoctrine__orm__entityListenerResolver(
	): Nettrine\ORM\Mapping\ContainerEntityListenerResolver
	{
		return new Nettrine\ORM\Mapping\ContainerEntityListenerResolver($this);
	}


	public function createServiceDoctrine__orm__entityManagerDecorator(): Doctrine\ORM\EntityManager
	{
		return new Doctrine\ORM\EntityManager(
			$this->getService('doctrine.dbal.connection'),
			$this->getService('doctrine.orm.configuration'),
			$this->getService('doctrine.dbal.eventManager'),
		);
	}


	public function createServiceDoctrine__orm__managerRegistry(): Nettrine\ORM\ManagerRegistry
	{
		return new Nettrine\ORM\ManagerRegistry(
			$this->getService('doctrine.dbal.connection'),
			$this->getService('doctrine.orm.entityManagerDecorator'),
			$this,
		);
	}


	public function createServiceDoctrine__orm__mappingDriver(): Doctrine\Persistence\Mapping\Driver\MappingDriverChain
	{
		$service = new Doctrine\Persistence\Mapping\Driver\MappingDriverChain;
		$service->addDriver($this->getService('doctrine.orm.attributes.attributeDriver'), 'App\Whalebone\DeviceModule\Models');
		return $service;
	}


	public function createServiceHttp__request(): Nette\Http\Request
	{
		return $this->getService('http.requestFactory')->fromGlobals();
	}


	public function createServiceHttp__requestFactory(): Nette\Http\RequestFactory
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy([]);
		return $service;
	}


	public function createServiceHttp__response(): Nette\Http\Response
	{
		$service = new Nette\Http\Response;
		$service->cookieSecure = $this->getService('http.request')->isSecured();
		return $service;
	}


	public function createServiceLatte__latteFactory(): Nette\Bridges\ApplicationLatte\LatteFactory
	{
		return new class ($this) implements Nette\Bridges\ApplicationLatte\LatteFactory {
			public function __construct(
				private Container_f8c2e1ce96 $container,
			) {
			}


			public function create(): Latte\Engine
			{
				$service = new Latte\Engine;
				$service->setTempDirectory('/var/www/html/src/temp/cache/latte');
				$service->setAutoRefresh(true);
				$service->setStrictTypes(true);
				$service->setStrictParsing(true);
				$service->enablePhpLinter(null);
				func_num_args() && $service->addExtension(new Nette\Bridges\ApplicationLatte\UIExtension(func_get_arg(0)));
				$service->addExtension(new Nette\Bridges\CacheLatte\CacheExtension($this->container->getService('cache.storage')));
				$service->addExtension(new Nette\Bridges\FormsLatte\FormsExtension);
				$service->addExtension(new App\UI\Accessory\LatteExtension);
				return $service;
			}
		};
	}


	public function createServiceLatte__templateFactory(): Nette\Bridges\ApplicationLatte\TemplateFactory
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory(
			$this->getService('latte.latteFactory'),
			$this->getService('http.request'),
			$this->getService('security.user'),
			$this->getService('cache.storage'),
			null,
		);
		Nette\Bridges\ApplicationDI\LatteExtension::initLattePanel($service, $this->getService('tracy.bar'), false);
		return $service;
	}


	public function createServiceMail__mailer(): Nette\Mail\Mailer
	{
		return new Nette\Mail\SendmailMailer;
	}


	public function createServiceSecurity__passwords(): Nette\Security\Passwords
	{
		return new Nette\Security\Passwords;
	}


	public function createServiceSecurity__user(): Nette\Security\User
	{
		$service = new Nette\Security\User($this->getService('security.userStorage'));
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\SecurityTracy\UserPanel($service));
		return $service;
	}


	public function createServiceSecurity__userStorage(): Nette\Security\UserStorage
	{
		return new Nette\Bridges\SecurityHttp\SessionStorage($this->getService('session.session'));
	}


	public function createServiceSession__session(): Nette\Http\Session
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setOptions(['cookieSamesite' => 'Lax']);
		return $service;
	}


	public function createServiceTracy__bar(): Tracy\Bar
	{
		return Tracy\Debugger::getBar();
	}


	public function createServiceTracy__blueScreen(): Tracy\BlueScreen
	{
		return Tracy\Debugger::getBlueScreen();
	}


	public function createServiceTracy__logger(): Tracy\ILogger
	{
		return Tracy\Debugger::getLogger();
	}


	public function initialize(): void
	{
		// di.
		(function () {
			$this->getService('tracy.bar')->addPanel(new Nette\Bridges\DITracy\ContainerPanel($this));
		})();
		// tracy.
		(function () {
			if (!Tracy\Debugger::isEnabled()) { return; }
			$logger = $this->getService('tracy.logger');
			if ($logger instanceof Tracy\Logger) $logger->mailer = [
				new Tracy\Bridges\Nette\MailSender(
					$this->getService('mail.mailer'),
					null,
					$this->getByType('Nette\Http\Request', false)?->getUrl()->getHost(),
				),
				'send',
			];
		})();
	}
}

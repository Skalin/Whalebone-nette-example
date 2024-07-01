<?php
// source: /var/www/html/src/config/common.neon
// source: /var/www/html/src/config/services.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_6bf3f1837a extends Nette\DI\Container
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
		'Doctrine\Common\Cache\Cache' => [['nettrine.cache.driver']],
		'Doctrine\DBAL\Logging\SQLLogger' => [1 => ['nettrine.dbal.logger']],
		'Doctrine\DBAL\Logging\LoggerChain' => [['nettrine.dbal.logger']],
		'Doctrine\DBAL\Configuration' => [2 => ['nettrine.dbal.configuration']],
		'Doctrine\Common\EventManager' => [['nettrine.dbal.eventManager']],
		'Nettrine\DBAL\Events\ContainerAwareEventManager' => [['nettrine.dbal.eventManager']],
		'Nettrine\DBAL\ConnectionFactory' => [['nettrine.dbal.connectionFactory']],
		'Doctrine\DBAL\Connection' => [['nettrine.dbal.connection']],
		'Nettrine\DBAL\ConnectionAccessor' => [['nettrine.dbal.connectionAccessor']],
		'Doctrine\DBAL\Tools\Console\ConnectionProvider' => [2 => ['nettrine.dbal.console.connectionProvider']],
		'Doctrine\DBAL\Tools\Console\ConnectionProvider\SingleConnectionProvider' => [
			2 => ['nettrine.dbal.console.connectionProvider'],
		],
		'Symfony\Component\Console\Command\Command' => [
			2 => ['nettrine.dbal.console.reservedWordsCommand', 'nettrine.dbal.console.runSqlCommand'],
		],
		'Doctrine\DBAL\Tools\Console\Command\ReservedWordsCommand' => [2 => ['nettrine.dbal.console.reservedWordsCommand']],
		'Doctrine\DBAL\Tools\Console\Command\RunSqlCommand' => [2 => ['nettrine.dbal.console.runSqlCommand']],
		'Nette\Routing\RouteList' => [['01']],
		'Nette\Routing\Router' => [['01']],
		'ArrayAccess' => [2 => ['01', 'application.2', 'application.3']],
		'Nette\Application\Routers\RouteList' => [['01']],
		'Symfony\Component\Console\Application' => [['02']],
		'Symfony\Contracts\Service\ResetInterface' => [['02']],
		'Contributte\Console\Application' => [['02']],
		'Nette\DI\CompilerExtension' => [['03']],
		'Nettrine\DBAL\DI\DbalConsoleExtension' => [['03']],
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
		'app\Whalebone\DeviceModule\Presenters\DevicePresenter' => [2 => ['application.3']],
		'NetteModule\ErrorPresenter' => [2 => ['application.4']],
		'NetteModule\MicroPresenter' => [2 => ['application.5']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
	}


	public function createService01(): Nette\Application\Routers\RouteList
	{
		return App\Core\RouterFactory::createRouter();
	}


	public function createService02(): Contributte\Console\Application
	{
		return new Contributte\Console\Application;
	}


	public function createService03(): Nettrine\DBAL\DI\DbalConsoleExtension
	{
		return new Nettrine\DBAL\DI\DbalConsoleExtension;
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


	public function createServiceApplication__3(): app\Whalebone\DeviceModule\Presenters\DevicePresenter
	{
		$service = new app\Whalebone\DeviceModule\Presenters\DevicePresenter;
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


	public function createServiceContainer(): Nette\DI\Container
	{
		return $this;
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
				private Container_6bf3f1837a $container,
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


	public function createServiceNettrine__cache__driver(): Doctrine\Common\Cache\Cache
	{
		return new Doctrine\Common\Cache\PhpFileCache('/var/www/html/src/temp/cache/nettrine.cache');
	}


	public function createServiceNettrine__dbal__configuration(): Doctrine\DBAL\Configuration
	{
		$service = new Doctrine\DBAL\Configuration;
		$service->setSQLLogger($this->getService('nettrine.dbal.logger'));
		$service->setResultCacheImpl($this->getService('nettrine.cache.driver'));
		$service->setAutoCommit(true);
		return $service;
	}


	public function createServiceNettrine__dbal__connection(): Doctrine\DBAL\Connection
	{
		return $this->getService('nettrine.dbal.connectionFactory')->createConnection(
			[
			'driver' => 'pdo_mysql',
			'host' => 'localhost',
			'dbname' => 'your_database_name',
			'user' => 'your_database_user',
			'password' => 'your_database_password',
			'charset' => 'utf8mb4',
			'port' => 3306,
			'types' => [],
			'typesMapping' => [],
		],
			$this->getService('nettrine.dbal.configuration'),
			$this->getService('nettrine.dbal.eventManager'),
		);
	}


	public function createServiceNettrine__dbal__connectionAccessor(): Nettrine\DBAL\ConnectionAccessor
	{
		return new class ($this) implements Nettrine\DBAL\ConnectionAccessor {
			public function __construct(
				private Container_6bf3f1837a $container,
			) {
			}


			public function get(): Doctrine\DBAL\Connection
			{
				return $this->container->getService('nettrine.dbal.connection');
			}
		};
	}


	public function createServiceNettrine__dbal__connectionFactory(): Nettrine\DBAL\ConnectionFactory
	{
		return new Nettrine\DBAL\ConnectionFactory([], []);
	}


	public function createServiceNettrine__dbal__console__connectionProvider(
	): Doctrine\DBAL\Tools\Console\ConnectionProvider\SingleConnectionProvider
	{
		return new Doctrine\DBAL\Tools\Console\ConnectionProvider\SingleConnectionProvider($this->getService('nettrine.dbal.connection'));
	}


	public function createServiceNettrine__dbal__console__reservedWordsCommand(
	): Doctrine\DBAL\Tools\Console\Command\ReservedWordsCommand
	{
		return new Doctrine\DBAL\Tools\Console\Command\ReservedWordsCommand($this->getService('nettrine.dbal.console.connectionProvider'));
	}


	public function createServiceNettrine__dbal__console__runSqlCommand(
	): Doctrine\DBAL\Tools\Console\Command\RunSqlCommand
	{
		return new Doctrine\DBAL\Tools\Console\Command\RunSqlCommand($this->getService('nettrine.dbal.console.connectionProvider'));
	}


	public function createServiceNettrine__dbal__eventManager(): Nettrine\DBAL\Events\ContainerAwareEventManager
	{
		return new Nettrine\DBAL\Events\ContainerAwareEventManager($this);
	}


	public function createServiceNettrine__dbal__logger(): Doctrine\DBAL\Logging\LoggerChain
	{
		return new Doctrine\DBAL\Logging\LoggerChain([]);
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

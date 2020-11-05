<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Test;

use CodeIgniter\Test\ControllerTester;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\UserAgent;
use CodeIgniter\HTTP\URI;

class ControllerTestCase extends \CodeIgniter\Test\CIDatabaseTestCase
{

    use ControllerTester;

    protected $refresh = true;
    
    protected $seed = 'BasicApp\Test\Database\Seeds\TestSeeder';

    protected $namespace = 'BasicApp\Test';

    protected $csrfToken;

    protected $csrfHash;

    public function __construct()
    {
        parent::__construct();

        $this->csrfToken = $this->getCsrfToken();

        $this->csrfHash = $this->getCsrfHash();
    }

    protected function createRequest($appConfig = null, ?URI $uri = null, $input = 'php://input', ?UserAgent $userAgent = null)
    {
        if (!$appConfig)
        {
            if ($this->appConfig)
            {
                $appConfig = $this->appConfig;
            }
            else
            {
                $appConfig = config('app');
            }
        }

        if (!$userAgent)
        {
            $userAgent = new UserAgent();
        }

        if (!$uri)
        {
            $uri = new URI($appConfig->baseURL ?? 'http://example.com');
        }

        return new IncomingRequest($appConfig, $uri, $input, $userAgent);
    }

    public function getCsrfToken()
    {
        return csrf_token();
    }

    public function getCsrfHash()
    {
        return csrf_hash();
    }
    
}
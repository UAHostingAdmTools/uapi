<?php

namespace AdmTools\UApi;

use JMS\Serializer;
use JMS\Serializer\SerializerBuilder;
use Doctrine\Common\Annotations\AnnotationRegistry;

/**
 * Class Processor
 * AdmTools\UApi
 */
class Processor
{
    const DEFAULT_FORMAT = 'json';

    /**
     * @var string
     */
	protected $login;

    /**
     * @var string
     */
	protected $token;

    /**
     * @var string
     */
	protected $host = 'https://adm.tools/api.php';

    /**
     * @var Serializer\Serializer
     */
    protected $serializer;

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return $this
     */
    public function setLogin($login)
    {
        $this->login = (string) $login;
        return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return $this
     */
    public function setToken($token)
    {
        $this->token = (string) $token;
        return $this;
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param string $host
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = (string) $host;
        return $this;
    }

    /**
     * @return Serializer\Serializer
     */
    public function getSerializer()
    {
        if ($this->serializer) {
            return $this->serializer;
        }

        AnnotationRegistry::registerLoader('class_exists');
        $this->serializer = SerializerBuilder::create()
            ->addDefaultHandlers()
            ->build();

        return $this->serializer;
    }

    /**
     * @param Serializer\Serializer $serializer
     * @return $this
     */
    public function setSerializer(Serializer\Serializer $serializer)
    {
        $this->serializer = $serializer;
        return $this;
    }

    /**
     * Processor constructor.
     * @param $login
     * @param $token
     * @param $host
     */
	public function __construct($login, $token, $host = null)
    {
        $this->setLogin($login);
        $this->setToken($token);

        if (null !== $host) {
            $this->setHost($host);
        }
    }

    /**
     * @param Request $request
     * @return mixed|string
     * @throws \Httpful\Exception\ConnectionErrorException
     */
    public function send(Request $request)
    {
        $request
            ->setAuthLogin($this->getLogin())
            ->setAuthToken($this->getToken())
        ;

        $data = $this->getSerializer()
            ->serialize($request, self::DEFAULT_FORMAT);

        /** @var \Httpful\Response $response */
        $response = \Httpful\Request::post($this->getHost())->sendsType('json')->body($data)->send();

        /** @var Response $response */
        $response = $this
            ->getSerializer()
            ->deserialize(
                $response->raw_body,
                $request->getResponseClass(),
                self::DEFAULT_FORMAT
            );


        return $response;
    }
}
<?php

namespace Gigigo\Orchextra;

use GuzzleHttp\Client;

class Auth{
  /**
    * @var string
  */
  protected $url;
  /**
    * @var string
  */
  protected $clientId;
  /**
    * @var string
  */
  protected $clientSecret;
  /**
    * @var Client
  */
  protected $client;
    /**
     * @var
     */
  protected $res;
    /**
     * @var string
     */
  protected $username;
    /**
     * @var string
     */
  protected $password;
  /**
    * Auth constructor
    *
    * @param $url
  */
  public function __construct($url = '')
  {
      $this->setUrl($url);
      $this->client = new Client();
  }
  /**
    * @param $url
    *
    * @return $this
  */
  public function setUrl($url)
  {
    if (empty($url)) {
        throw new \InvalidArgumentException('The url is required');
    }
    $this->url = $url;
    return $this;
  }
    /**
     * @return string
     */
    public function getToken()
    {
        return $this->res->token;
    }
    /**
     * @return int
     */
    public function getExpiresIn()
    {
        return $this->res->expiresIn;
    }

    /**
     * @param $clientId
     * @param $clientSecret
     */
  public function authClient($clientId, $clientSecret)
  {
      $response = $this->client->request('POST', $this->url.'/auth', ['json' => ['clientId' => $clientId, 'clientSecret' => $clientSecret]])
          ->getBody()
          ->getContents();
      $this->res = json_decode($response);

  }

    /**
     * @param $username
     * @param $password
     * @return User
     */
  public function loginUser($username, $password)
  {
    $response = $this->client->request('POST', $this->url.'/login', ['json' => ['username' => $username, 'password' => $password]])
      ->getBody()
      ->getContents();
      return new User(json_decode($response));
  }
}

<?php

/**
 * Guzzle based implementation of Google_IO.
 * 
 * @author Santosh Chamoli <santosh.chamoli@jabong.com>
 */

if (!class_exists('Google_Client')) {
  require_once dirname(__FILE__) . '/../autoload.php';
}


class Google_IO_Guzzle extends Google_IO_Abstract
{

  private $options = array();
  
  /**
   * Used to hold Guzzle client object
   * if client is not reused then there is no performance benefit of using this custom class
   * @var Guzzle\Http\Client
   */
  private $guzzleClient = null;
  
  public function __construct(Google_Client $client)
  {
    if (!class_exists('Guzzle\Http\Client')) {
      $error = 'Cannot find class Guzzle\Http\Client';
      $client->getLogger()->critical($error);
      throw new Google_IO_Exception($error);
    }

    parent::__construct($client);
  }
  
  private function getGuzzleClient()
  {
      if ($this->guzzleClient == null) {
          $this->guzzleClient = new Guzzle\Http\Client();
      }
      return $this->guzzleClient;
  }
  

  
  /**
   * Execute an HTTP Request
   *
   * @param Google_Http_Request $request the http request to be executed
   * @return array containing response headers, body, and http code
   * @throws Google_IO_Exception on curl or IO error
   */
  public function executeRequest(Google_Http_Request $request)
  {
    $client = $this->getGuzzleClient();
    $options = array(
        'exceptions' => true
    );
    $method = $request->getRequestMethod();
    if (strcasecmp($method, 'get') == 0) {
        $req = $client->get($request->getUrl(), $request->getRequestHeaders(), $options);
    } elseif (strcasecmp($method, 'post') == 0) {
        $req = $client->post($request->getUrl(), $request->getRequestHeaders(), $request->getPostBody(), $options);
    } elseif (strcasecmp($method, 'delete') == 0) { 
        $req = $client->delete($request->getUrl(), $request->getRequestHeaders(), null, $options);
    } elseif (strcasecmp($method, 'put') == 0) { 
        $req = $client->put($request->getUrl(), $request->getRequestHeaders(), $request->getPostBody(), $options);
    } else {
        throw new Google_IO_Exception(__CLASS__ . '#' .  __LINE__ . ' Request method not supported');
    }
    
    if ($request->canGzip())
    {
        $req->addHeader('Accept-Encoding', 'gzip,deflate');
    }
    
    $this->client->getLogger()->debug(
        'guzzle request',
        array(
            'url' => $request->getUrl(),
            'method' => $request->getRequestMethod(),
            'headers' => $req->getHeaders(),
            'body' => $request->getPostBody()
        )
    );
    
    try {
        $result = $client->send($req);
        $rawHeaders = $result->getRawHeaders();
        $responseHeaders = $this->getHttpResponseHeaders($rawHeaders);
        $responseBody = $result->getBody();
        $responseCode = $result->getStatusCode();
    } catch (Exception $ex) {
        // check if http response info can be retrieved from exception
        // this gives calling service opportunity to handle failures
        if ($ex instanceof Guzzle\Http\Exception\BadResponseException) {
            $response = $ex->getResponse();
            $responseBody = $response->getBody();
            $rawHeaders = $response->getRawHeaders();
            $responseHeaders = $this->getHttpResponseHeaders($rawHeaders);
            $responseCode = $response->getStatusCode();
        } else {
            throw $ex;
        }
    }

    $this->client->getLogger()->debug(
        'guzzle response',
        array(
            'code'    => $responseCode,
            'headers' => $responseHeaders,
            'body'    => $responseBody,
        )
    );
    
    return array($responseBody, $responseHeaders, $responseCode);
  }
  
  /**
   * Set options that update the transport implementation's behavior.
   * @param $options
   */
  public function setOptions($options) {}

  /**
   * Set the maximum request time in seconds.
   * @param $timeout in seconds
   */
  public function setTimeout($timeout) {}

  /**
   * Get the maximum request time in seconds.
   * @return timeout in seconds
   */
  public function getTimeout() {}

  /**
   * Test for the presence of a cURL header processing bug
   *
   * The cURL bug was present in versions prior to 7.30.0 and caused the header
   * length to be miscalculated when a "Connection established" header added by
   * some proxies was present.
   *
   * @return boolean
   */
  protected function needsQuirk() {}
}

<?php
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for Now (v1).
 *
 * <p>
 * Create and manage Google Now cards.
 * </p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/now/api/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Now extends Google_Service
{


  public $contexts;
  public $publicCards;
  public $users_cards;
  

  /**
   * Constructs the internal representation of the Now service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'now/v1/';
    $this->version = 'v1';
    $this->serviceName = 'now';

    $this->contexts = new Google_Service_Now_Contexts_Resource(
        $this,
        $this->serviceName,
        'contexts',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'contexts',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'delete' => array(
              'path' => 'contexts/{contextId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'contextId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'contexts/{contextId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'contextId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'contexts',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->publicCards = new Google_Service_Now_PublicCards_Resource(
        $this,
        $this->serviceName,
        'publicCards',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'publicCards',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'delete' => array(
              'path' => 'publicCards/{cardId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'cardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'userId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'get' => array(
              'path' => 'publicCards/{cardId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'cardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'userId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'publicCards',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'userId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'publicCards/{cardId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'cardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'userId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'update' => array(
              'path' => 'publicCards/{cardId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'cardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'userId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->users_cards = new Google_Service_Now_UsersCards_Resource(
        $this,
        $this->serviceName,
        'cards',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'users/{userId}/cards',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'users/{userId}/cards/{cardId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'cardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'users/{userId}/cards/{cardId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'cardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'users/{userId}/cards',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'users/{userId}/cards/{cardId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'cardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'users/{userId}/cards/{cardId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'cardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
  }
}


/**
 * The "contexts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $nowService = new Google_Service_Now(...);
 *   $contexts = $nowService->contexts;
 *  </code>
 */
class Google_Service_Now_Contexts_Resource extends Google_Service_Resource
{

  /**
   * Creates a new context. (contexts.create)
   *
   * @param Google_Context $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Now_Context
   */
  public function create(Google_Service_Now_Context $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Now_Context");
  }
  /**
   * Deletes the specified context. (contexts.delete)
   *
   * @param string $contextId
   * The ID of the existing context.
   * @param array $optParams Optional parameters.
   */
  public function delete($contextId, $optParams = array())
  {
    $params = array('contextId' => $contextId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Gets the specified context. (contexts.get)
   *
   * @param string $contextId
   * The ID of the existing context.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Now_Context
   */
  public function get($contextId, $optParams = array())
  {
    $params = array('contextId' => $contextId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Now_Context");
  }
  /**
   * Lists all contexts. (contexts.listContexts)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The token of the page to retrieve.
   * @opt_param int pageSize
   * The size of the page to retrieve.
   * @return Google_Service_Now_ListContextsResponse
   */
  public function listContexts($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Now_ListContextsResponse");
  }
}

/**
 * The "publicCards" collection of methods.
 * Typical usage is:
 *  <code>
 *   $nowService = new Google_Service_Now(...);
 *   $publicCards = $nowService->publicCards;
 *  </code>
 */
class Google_Service_Now_PublicCards_Resource extends Google_Service_Resource
{

  /**
   * Creates a new public Google Now card. (publicCards.create)
   *
   * @param Google_Card $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string userId
   * The OAuth2 user ID of the authenticated user. Usually, you should pass the special value me,
    * which is used to indicate the authenticated user.
   * @return Google_Service_Now_Card
   */
  public function create(Google_Service_Now_Card $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Now_Card");
  }
  /**
   * Deletes the specified public Google Now card. (publicCards.delete)
   *
   * @param string $cardId
   * The ID of the existing Now card.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string userId
   * The OAuth2 user ID of the authenticated user. Usually, you should pass the special value me,
    * which is used to indicate the authenticated user.
   */
  public function delete($cardId, $optParams = array())
  {
    $params = array('cardId' => $cardId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Gets the specified public Google Now card. If the card has expired, an error
   * code google.rpc.Code.NOT_FOUND will be raised. (publicCards.get)
   *
   * @param string $cardId
   * The ID of the existing Now card.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string userId
   * The OAuth2 user ID of the authenticated user. Usually, you should pass the special value me,
    * which is used to indicate the authenticated user.
   * @return Google_Service_Now_Card
   */
  public function get($cardId, $optParams = array())
  {
    $params = array('cardId' => $cardId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Now_Card");
  }
  /**
   * Lists all currently active public Google Now cards.
   * (publicCards.listPublicCards)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The token of the page to retrieve.
   * @opt_param string userId
   * The OAuth2 user ID of the authenticated user. Usually, you should pass the special value me,
    * which is used to indicate the authenticated user.
   * @opt_param int pageSize
   * The size of the page to retrieve.
   * @return Google_Service_Now_ListCardsResponse
   */
  public function listPublicCards($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Now_ListCardsResponse");
  }
  /**
   * Updates the specified public Google Now card. This method supports patch
   * semantics. (publicCards.patch)
   *
   * @param string $cardId
   * The ID of the existing Now card.
   * @param Google_Card $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string userId
   * The OAuth2 user ID of the authenticated user. Usually, you should pass the special value me,
    * which is used to indicate the authenticated user.
   * @return Google_Service_Now_Card
   */
  public function patch($cardId, Google_Service_Now_Card $postBody, $optParams = array())
  {
    $params = array('cardId' => $cardId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Now_Card");
  }
  /**
   * Updates the specified public Google Now card. (publicCards.update)
   *
   * @param string $cardId
   * The ID of the existing Now card.
   * @param Google_Card $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string userId
   * The OAuth2 user ID of the authenticated user. Usually, you should pass the special value me,
    * which is used to indicate the authenticated user.
   * @return Google_Service_Now_Card
   */
  public function update($cardId, Google_Service_Now_Card $postBody, $optParams = array())
  {
    $params = array('cardId' => $cardId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Now_Card");
  }
}

/**
 * The "users" collection of methods.
 * Typical usage is:
 *  <code>
 *   $nowService = new Google_Service_Now(...);
 *   $users = $nowService->users;
 *  </code>
 */
class Google_Service_Now_Users_Resource extends Google_Service_Resource
{

}

/**
 * The "cards" collection of methods.
 * Typical usage is:
 *  <code>
 *   $nowService = new Google_Service_Now(...);
 *   $cards = $nowService->cards;
 *  </code>
 */
class Google_Service_Now_UsersCards_Resource extends Google_Service_Resource
{

  /**
   * Creates a new Google Now card. (cards.create)
   *
   * @param string $userId
   * The OAuth2 user ID of the authenticated user. Usually, you should pass the special value me,
    * which is used to indicate the authenticated user.
   * @param Google_Card $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Now_Card
   */
  public function create($userId, Google_Service_Now_Card $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Now_Card");
  }
  /**
   * Deletes the specified Google Now card. (cards.delete)
   *
   * @param string $userId
   * The OAuth2 user ID of the authenticated user. Usually, you should pass the special value me,
    * which is used to indicate the authenticated user.
   * @param string $cardId
   * The ID of the existing Now card.
   * @param array $optParams Optional parameters.
   */
  public function delete($userId, $cardId, $optParams = array())
  {
    $params = array('userId' => $userId, 'cardId' => $cardId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Gets the specified Google Now card. If the card has expired, an error code
   * google.rpc.Code.NOT_FOUND will be raised. (cards.get)
   *
   * @param string $userId
   * The OAuth2 user ID of the authenticated user. Usually, you should pass the special value me,
    * which is used to indicate the authenticated user.
   * @param string $cardId
   * The ID of the existing Now card.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Now_Card
   */
  public function get($userId, $cardId, $optParams = array())
  {
    $params = array('userId' => $userId, 'cardId' => $cardId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Now_Card");
  }
  /**
   * Lists all currently active Google Now cards for the user. Cards are not
   * returned after they expire (past their end time). (cards.listUsersCards)
   *
   * @param string $userId
   * The OAuth2 user ID of the authenticated user. Usually, you should pass the special value me,
    * which is used to indicate the authenticated user.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The token of the page to retrieve.
   * @opt_param int pageSize
   * The size of the page to retrieve.
   * @return Google_Service_Now_ListCardsResponse
   */
  public function listUsersCards($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Now_ListCardsResponse");
  }
  /**
   * Updates the specified Google Now card. This method supports patch semantics.
   * (cards.patch)
   *
   * @param string $userId
   * The OAuth2 user ID of the authenticated user. Usually, you should pass the special value me,
    * which is used to indicate the authenticated user.
   * @param string $cardId
   * The ID of the existing Now card.
   * @param Google_Card $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Now_Card
   */
  public function patch($userId, $cardId, Google_Service_Now_Card $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'cardId' => $cardId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Now_Card");
  }
  /**
   * Updates the specified Google Now card. (cards.update)
   *
   * @param string $userId
   * The OAuth2 user ID of the authenticated user. Usually, you should pass the special value me,
    * which is used to indicate the authenticated user.
   * @param string $cardId
   * The ID of the existing Now card.
   * @param Google_Card $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Now_Card
   */
  public function update($userId, $cardId, Google_Service_Now_Card $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'cardId' => $cardId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Now_Card");
  }
}




class Google_Service_Now_Action extends Google_Collection
{
  protected $collection_key = 'urls';
  protected $internal_gapi_mappings = array(
  );
  public $urls;

  public function setUrls($urls)
  {
    $this->urls = $urls;
  }

  public function getUrls()
  {
    return $this->urls;
  }
}

class Google_Service_Now_Address extends Google_Collection
{
  protected $collection_key = 'addressLines';
  protected $internal_gapi_mappings = array(
  );
  public $addressLines;
  public $name;
  public $phoneNumber;

  public function setAddressLines($addressLines)
  {
    $this->addressLines = $addressLines;
  }

  public function getAddressLines()
  {
    return $this->addressLines;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }

  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
}

class Google_Service_Now_BarcodeCard extends Google_Collection
{
  protected $collection_key = 'labelContentPairs';
  protected $internal_gapi_mappings = array(
  );
  protected $barcodeImageType = 'Google_Service_Now_Image';
  protected $barcodeImageDataType = '';
  public $barcodeText;
  protected $buttonsType = 'Google_Service_Now_Button';
  protected $buttonsDataType = 'array';
  public $domainUrl;
  protected $labelContentPairsType = 'Google_Service_Now_LabelContentPair';
  protected $labelContentPairsDataType = 'array';
  protected $logoType = 'Google_Service_Now_Image';
  protected $logoDataType = '';
  public $secondaryTitle;
  protected $subtitleType = 'Google_Service_Now_TemplatedString';
  protected $subtitleDataType = '';
  protected $tapActionType = 'Google_Service_Now_Action';
  protected $tapActionDataType = '';
  protected $titleType = 'Google_Service_Now_TemplatedString';
  protected $titleDataType = '';

  public function setBarcodeImage(Google_Service_Now_Image $barcodeImage)
  {
    $this->barcodeImage = $barcodeImage;
  }

  public function getBarcodeImage()
  {
    return $this->barcodeImage;
  }

  public function setBarcodeText($barcodeText)
  {
    $this->barcodeText = $barcodeText;
  }

  public function getBarcodeText()
  {
    return $this->barcodeText;
  }

  public function setButtons($buttons)
  {
    $this->buttons = $buttons;
  }

  public function getButtons()
  {
    return $this->buttons;
  }

  public function setDomainUrl($domainUrl)
  {
    $this->domainUrl = $domainUrl;
  }

  public function getDomainUrl()
  {
    return $this->domainUrl;
  }

  public function setLabelContentPairs($labelContentPairs)
  {
    $this->labelContentPairs = $labelContentPairs;
  }

  public function getLabelContentPairs()
  {
    return $this->labelContentPairs;
  }

  public function setLogo(Google_Service_Now_Image $logo)
  {
    $this->logo = $logo;
  }

  public function getLogo()
  {
    return $this->logo;
  }

  public function setSecondaryTitle($secondaryTitle)
  {
    $this->secondaryTitle = $secondaryTitle;
  }

  public function getSecondaryTitle()
  {
    return $this->secondaryTitle;
  }

  public function setSubtitle(Google_Service_Now_TemplatedString $subtitle)
  {
    $this->subtitle = $subtitle;
  }

  public function getSubtitle()
  {
    return $this->subtitle;
  }

  public function setTapAction(Google_Service_Now_Action $tapAction)
  {
    $this->tapAction = $tapAction;
  }

  public function getTapAction()
  {
    return $this->tapAction;
  }

  public function setTitle(Google_Service_Now_TemplatedString $title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }
}

class Google_Service_Now_Button extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $icon;
  public $name;
  protected $tapActionType = 'Google_Service_Now_Action';
  protected $tapActionDataType = '';

  public function setIcon($icon)
  {
    $this->icon = $icon;
  }

  public function getIcon()
  {
    return $this->icon;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setTapAction(Google_Service_Now_Action $tapAction)
  {
    $this->tapAction = $tapAction;
  }

  public function getTapAction()
  {
    return $this->tapAction;
  }
}

class Google_Service_Now_Card extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $cardId;
  protected $contentType = 'Google_Service_Now_CardContent';
  protected $contentDataType = '';
  protected $contextsType = 'Google_Service_Now_CardContexts';
  protected $contextsDataType = '';

  public function setCardId($cardId)
  {
    $this->cardId = $cardId;
  }

  public function getCardId()
  {
    return $this->cardId;
  }

  public function setContent(Google_Service_Now_CardContent $content)
  {
    $this->content = $content;
  }

  public function getContent()
  {
    return $this->content;
  }

  public function setContexts(Google_Service_Now_CardContexts $contexts)
  {
    $this->contexts = $contexts;
  }

  public function getContexts()
  {
    return $this->contexts;
  }
}

class Google_Service_Now_CardContent extends Google_Collection
{
  protected $collection_key = 'locales';
  protected $internal_gapi_mappings = array(
  );
  protected $barcodeCardType = 'Google_Service_Now_BarcodeCard';
  protected $barcodeCardDataType = '';
  protected $genericCardType = 'Google_Service_Now_GenericCard';
  protected $genericCardDataType = '';
  protected $justificationType = 'Google_Service_Now_TemplatedString';
  protected $justificationDataType = '';
  protected $listCardType = 'Google_Service_Now_ListCard';
  protected $listCardDataType = '';
  public $locales;
  protected $mapCardType = 'Google_Service_Now_MapCard';
  protected $mapCardDataType = '';
  protected $photoCardType = 'Google_Service_Now_PhotoCard';
  protected $photoCardDataType = '';
  protected $tableCardType = 'Google_Service_Now_TableCard';
  protected $tableCardDataType = '';
  protected $videoCardType = 'Google_Service_Now_VideoCard';
  protected $videoCardDataType = '';

  public function setBarcodeCard(Google_Service_Now_BarcodeCard $barcodeCard)
  {
    $this->barcodeCard = $barcodeCard;
  }

  public function getBarcodeCard()
  {
    return $this->barcodeCard;
  }

  public function setGenericCard(Google_Service_Now_GenericCard $genericCard)
  {
    $this->genericCard = $genericCard;
  }

  public function getGenericCard()
  {
    return $this->genericCard;
  }

  public function setJustification(Google_Service_Now_TemplatedString $justification)
  {
    $this->justification = $justification;
  }

  public function getJustification()
  {
    return $this->justification;
  }

  public function setListCard(Google_Service_Now_ListCard $listCard)
  {
    $this->listCard = $listCard;
  }

  public function getListCard()
  {
    return $this->listCard;
  }

  public function setLocales($locales)
  {
    $this->locales = $locales;
  }

  public function getLocales()
  {
    return $this->locales;
  }

  public function setMapCard(Google_Service_Now_MapCard $mapCard)
  {
    $this->mapCard = $mapCard;
  }

  public function getMapCard()
  {
    return $this->mapCard;
  }

  public function setPhotoCard(Google_Service_Now_PhotoCard $photoCard)
  {
    $this->photoCard = $photoCard;
  }

  public function getPhotoCard()
  {
    return $this->photoCard;
  }

  public function setTableCard(Google_Service_Now_TableCard $tableCard)
  {
    $this->tableCard = $tableCard;
  }

  public function getTableCard()
  {
    return $this->tableCard;
  }

  public function setVideoCard(Google_Service_Now_VideoCard $videoCard)
  {
    $this->videoCard = $videoCard;
  }

  public function getVideoCard()
  {
    return $this->videoCard;
  }
}

class Google_Service_Now_CardContexts extends Google_Collection
{
  protected $collection_key = 'inlineContexts';
  protected $internal_gapi_mappings = array(
  );
  public $contextIds;
  protected $inlineContextsType = 'Google_Service_Now_Context';
  protected $inlineContextsDataType = 'array';

  public function setContextIds($contextIds)
  {
    $this->contextIds = $contextIds;
  }

  public function getContextIds()
  {
    return $this->contextIds;
  }

  public function setInlineContexts($inlineContexts)
  {
    $this->inlineContexts = $inlineContexts;
  }

  public function getInlineContexts()
  {
    return $this->inlineContexts;
  }
}

class Google_Service_Now_Context extends Google_Collection
{
  protected $collection_key = 'anyOfWeatherContexts';
  protected $internal_gapi_mappings = array(
  );
  protected $anyOfActivityContextsType = 'Google_Service_Now_ContextActivityContextWrapper';
  protected $anyOfActivityContextsDataType = 'array';
  public $anyOfInterests;
  protected $anyOfLocationContextsType = 'Google_Service_Now_ContextLocationContextWrapper';
  protected $anyOfLocationContextsDataType = 'array';
  protected $anyOfLocationsType = 'Google_Service_Now_Location';
  protected $anyOfLocationsDataType = 'array';
  public $anyOfPlaceTypes;
  public $anyOfRegions;
  protected $anyOfTimeContextsType = 'Google_Service_Now_ContextTimeContextWrapper';
  protected $anyOfTimeContextsDataType = 'array';
  protected $anyOfWeatherContextsType = 'Google_Service_Now_ContextWeatherContextWrapper';
  protected $anyOfWeatherContextsDataType = 'array';
  public $contextId;
  protected $localTimeRangeType = 'Google_Service_Now_LocalTimeRange';
  protected $localTimeRangeDataType = '';
  protected $timeRangeType = 'Google_Service_Now_TimeRange';
  protected $timeRangeDataType = '';

  public function setAnyOfActivityContexts($anyOfActivityContexts)
  {
    $this->anyOfActivityContexts = $anyOfActivityContexts;
  }

  public function getAnyOfActivityContexts()
  {
    return $this->anyOfActivityContexts;
  }

  public function setAnyOfInterests($anyOfInterests)
  {
    $this->anyOfInterests = $anyOfInterests;
  }

  public function getAnyOfInterests()
  {
    return $this->anyOfInterests;
  }

  public function setAnyOfLocationContexts($anyOfLocationContexts)
  {
    $this->anyOfLocationContexts = $anyOfLocationContexts;
  }

  public function getAnyOfLocationContexts()
  {
    return $this->anyOfLocationContexts;
  }

  public function setAnyOfLocations($anyOfLocations)
  {
    $this->anyOfLocations = $anyOfLocations;
  }

  public function getAnyOfLocations()
  {
    return $this->anyOfLocations;
  }

  public function setAnyOfPlaceTypes($anyOfPlaceTypes)
  {
    $this->anyOfPlaceTypes = $anyOfPlaceTypes;
  }

  public function getAnyOfPlaceTypes()
  {
    return $this->anyOfPlaceTypes;
  }

  public function setAnyOfRegions($anyOfRegions)
  {
    $this->anyOfRegions = $anyOfRegions;
  }

  public function getAnyOfRegions()
  {
    return $this->anyOfRegions;
  }

  public function setAnyOfTimeContexts($anyOfTimeContexts)
  {
    $this->anyOfTimeContexts = $anyOfTimeContexts;
  }

  public function getAnyOfTimeContexts()
  {
    return $this->anyOfTimeContexts;
  }

  public function setAnyOfWeatherContexts($anyOfWeatherContexts)
  {
    $this->anyOfWeatherContexts = $anyOfWeatherContexts;
  }

  public function getAnyOfWeatherContexts()
  {
    return $this->anyOfWeatherContexts;
  }

  public function setContextId($contextId)
  {
    $this->contextId = $contextId;
  }

  public function getContextId()
  {
    return $this->contextId;
  }

  public function setLocalTimeRange(Google_Service_Now_LocalTimeRange $localTimeRange)
  {
    $this->localTimeRange = $localTimeRange;
  }

  public function getLocalTimeRange()
  {
    return $this->localTimeRange;
  }

  public function setTimeRange(Google_Service_Now_TimeRange $timeRange)
  {
    $this->timeRange = $timeRange;
  }

  public function getTimeRange()
  {
    return $this->timeRange;
  }
}

class Google_Service_Now_ContextActivityContextWrapper extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $activityContext;

  public function setActivityContext($activityContext)
  {
    $this->activityContext = $activityContext;
  }

  public function getActivityContext()
  {
    return $this->activityContext;
  }
}

class Google_Service_Now_ContextLocationContextWrapper extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $locationContext;

  public function setLocationContext($locationContext)
  {
    $this->locationContext = $locationContext;
  }

  public function getLocationContext()
  {
    return $this->locationContext;
  }
}

class Google_Service_Now_ContextTimeContextWrapper extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $timeContext;

  public function setTimeContext($timeContext)
  {
    $this->timeContext = $timeContext;
  }

  public function getTimeContext()
  {
    return $this->timeContext;
  }
}

class Google_Service_Now_ContextWeatherContextWrapper extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $weatherContext;

  public function setWeatherContext($weatherContext)
  {
    $this->weatherContext = $weatherContext;
  }

  public function getWeatherContext()
  {
    return $this->weatherContext;
  }
}

class Google_Service_Now_GenericCard extends Google_Collection
{
  protected $collection_key = 'buttons';
  protected $internal_gapi_mappings = array(
  );
  protected $addressType = 'Google_Service_Now_Address';
  protected $addressDataType = '';
  protected $buttonsType = 'Google_Service_Now_Button';
  protected $buttonsDataType = 'array';
  protected $contentType = 'Google_Service_Now_TemplatedString';
  protected $contentDataType = '';
  protected $imageType = 'Google_Service_Now_Image';
  protected $imageDataType = '';
  protected $logoType = 'Google_Service_Now_Image';
  protected $logoDataType = '';
  protected $tapActionType = 'Google_Service_Now_Action';
  protected $tapActionDataType = '';
  protected $titleType = 'Google_Service_Now_TemplatedString';
  protected $titleDataType = '';

  public function setAddress(Google_Service_Now_Address $address)
  {
    $this->address = $address;
  }

  public function getAddress()
  {
    return $this->address;
  }

  public function setButtons($buttons)
  {
    $this->buttons = $buttons;
  }

  public function getButtons()
  {
    return $this->buttons;
  }

  public function setContent(Google_Service_Now_TemplatedString $content)
  {
    $this->content = $content;
  }

  public function getContent()
  {
    return $this->content;
  }

  public function setImage(Google_Service_Now_Image $image)
  {
    $this->image = $image;
  }

  public function getImage()
  {
    return $this->image;
  }

  public function setLogo(Google_Service_Now_Image $logo)
  {
    $this->logo = $logo;
  }

  public function getLogo()
  {
    return $this->logo;
  }

  public function setTapAction(Google_Service_Now_Action $tapAction)
  {
    $this->tapAction = $tapAction;
  }

  public function getTapAction()
  {
    return $this->tapAction;
  }

  public function setTitle(Google_Service_Now_TemplatedString $title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }
}

class Google_Service_Now_Image extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $url;

  public function setUrl($url)
  {
    $this->url = $url;
  }

  public function getUrl()
  {
    return $this->url;
  }
}

class Google_Service_Now_LabelContentPair extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $contentType = 'Google_Service_Now_TemplatedString';
  protected $contentDataType = '';
  protected $labelType = 'Google_Service_Now_TemplatedString';
  protected $labelDataType = '';

  public function setContent(Google_Service_Now_TemplatedString $content)
  {
    $this->content = $content;
  }

  public function getContent()
  {
    return $this->content;
  }

  public function setLabel(Google_Service_Now_TemplatedString $label)
  {
    $this->label = $label;
  }

  public function getLabel()
  {
    return $this->label;
  }
}

class Google_Service_Now_ListCard extends Google_Collection
{
  protected $collection_key = 'listItems';
  protected $internal_gapi_mappings = array(
  );
  protected $buttonType = 'Google_Service_Now_Button';
  protected $buttonDataType = '';
  protected $listItemsType = 'Google_Service_Now_ListItem';
  protected $listItemsDataType = 'array';
  protected $logoType = 'Google_Service_Now_Image';
  protected $logoDataType = '';
  protected $titleType = 'Google_Service_Now_TemplatedString';
  protected $titleDataType = '';

  public function setButton(Google_Service_Now_Button $button)
  {
    $this->button = $button;
  }

  public function getButton()
  {
    return $this->button;
  }

  public function setListItems($listItems)
  {
    $this->listItems = $listItems;
  }

  public function getListItems()
  {
    return $this->listItems;
  }

  public function setLogo(Google_Service_Now_Image $logo)
  {
    $this->logo = $logo;
  }

  public function getLogo()
  {
    return $this->logo;
  }

  public function setTitle(Google_Service_Now_TemplatedString $title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }
}

class Google_Service_Now_ListCardsResponse extends Google_Collection
{
  protected $collection_key = 'cards';
  protected $internal_gapi_mappings = array(
  );
  protected $cardsType = 'Google_Service_Now_Card';
  protected $cardsDataType = 'array';
  public $nextPageToken;

  public function setCards($cards)
  {
    $this->cards = $cards;
  }

  public function getCards()
  {
    return $this->cards;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class Google_Service_Now_ListContextsResponse extends Google_Collection
{
  protected $collection_key = 'contexts';
  protected $internal_gapi_mappings = array(
  );
  protected $contextsType = 'Google_Service_Now_Context';
  protected $contextsDataType = 'array';
  public $nextPageToken;

  public function setContexts($contexts)
  {
    $this->contexts = $contexts;
  }

  public function getContexts()
  {
    return $this->contexts;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class Google_Service_Now_ListItem extends Google_Collection
{
  protected $collection_key = 'details';
  protected $internal_gapi_mappings = array(
  );
  protected $detailsType = 'Google_Service_Now_TemplatedString';
  protected $detailsDataType = 'array';
  protected $imageType = 'Google_Service_Now_Image';
  protected $imageDataType = '';
  protected $subtitleType = 'Google_Service_Now_TemplatedString';
  protected $subtitleDataType = '';
  protected $tapActionType = 'Google_Service_Now_Action';
  protected $tapActionDataType = '';
  protected $titleType = 'Google_Service_Now_TemplatedString';
  protected $titleDataType = '';

  public function setDetails($details)
  {
    $this->details = $details;
  }

  public function getDetails()
  {
    return $this->details;
  }

  public function setImage(Google_Service_Now_Image $image)
  {
    $this->image = $image;
  }

  public function getImage()
  {
    return $this->image;
  }

  public function setSubtitle(Google_Service_Now_TemplatedString $subtitle)
  {
    $this->subtitle = $subtitle;
  }

  public function getSubtitle()
  {
    return $this->subtitle;
  }

  public function setTapAction(Google_Service_Now_Action $tapAction)
  {
    $this->tapAction = $tapAction;
  }

  public function getTapAction()
  {
    return $this->tapAction;
  }

  public function setTitle(Google_Service_Now_TemplatedString $title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }
}

class Google_Service_Now_LocalTimeRange extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $endTime;
  public $startTime;

  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }

  public function getEndTime()
  {
    return $this->endTime;
  }

  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }

  public function getStartTime()
  {
    return $this->startTime;
  }
}

class Google_Service_Now_Location extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $latitude;
  public $longitude;
  public $name;
  public $radiusMeters;

  public function setLatitude($latitude)
  {
    $this->latitude = $latitude;
  }

  public function getLatitude()
  {
    return $this->latitude;
  }

  public function setLongitude($longitude)
  {
    $this->longitude = $longitude;
  }

  public function getLongitude()
  {
    return $this->longitude;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setRadiusMeters($radiusMeters)
  {
    $this->radiusMeters = $radiusMeters;
  }

  public function getRadiusMeters()
  {
    return $this->radiusMeters;
  }
}

class Google_Service_Now_Map extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $locationType = 'Google_Service_Now_Location';
  protected $locationDataType = '';
  public $showRoute;
  public $showUserLocation;

  public function setLocation(Google_Service_Now_Location $location)
  {
    $this->location = $location;
  }

  public function getLocation()
  {
    return $this->location;
  }

  public function setShowRoute($showRoute)
  {
    $this->showRoute = $showRoute;
  }

  public function getShowRoute()
  {
    return $this->showRoute;
  }

  public function setShowUserLocation($showUserLocation)
  {
    $this->showUserLocation = $showUserLocation;
  }

  public function getShowUserLocation()
  {
    return $this->showUserLocation;
  }
}

class Google_Service_Now_MapCard extends Google_Collection
{
  protected $collection_key = 'labelContentPairs';
  protected $internal_gapi_mappings = array(
  );
  protected $buttonsType = 'Google_Service_Now_Button';
  protected $buttonsDataType = 'array';
  protected $labelContentPairsType = 'Google_Service_Now_LabelContentPair';
  protected $labelContentPairsDataType = 'array';
  protected $logoType = 'Google_Service_Now_Image';
  protected $logoDataType = '';
  protected $mapType = 'Google_Service_Now_Map';
  protected $mapDataType = '';
  protected $titleType = 'Google_Service_Now_TemplatedString';
  protected $titleDataType = '';

  public function setButtons($buttons)
  {
    $this->buttons = $buttons;
  }

  public function getButtons()
  {
    return $this->buttons;
  }

  public function setLabelContentPairs($labelContentPairs)
  {
    $this->labelContentPairs = $labelContentPairs;
  }

  public function getLabelContentPairs()
  {
    return $this->labelContentPairs;
  }

  public function setLogo(Google_Service_Now_Image $logo)
  {
    $this->logo = $logo;
  }

  public function getLogo()
  {
    return $this->logo;
  }

  public function setMap(Google_Service_Now_Map $map)
  {
    $this->map = $map;
  }

  public function getMap()
  {
    return $this->map;
  }

  public function setTitle(Google_Service_Now_TemplatedString $title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }
}

class Google_Service_Now_PhotoCard extends Google_Collection
{
  protected $collection_key = 'tappableImages';
  protected $internal_gapi_mappings = array(
  );
  protected $logoType = 'Google_Service_Now_Image';
  protected $logoDataType = '';
  protected $tappableImagesType = 'Google_Service_Now_TappableImage';
  protected $tappableImagesDataType = 'array';
  protected $titleType = 'Google_Service_Now_TemplatedString';
  protected $titleDataType = '';

  public function setLogo(Google_Service_Now_Image $logo)
  {
    $this->logo = $logo;
  }

  public function getLogo()
  {
    return $this->logo;
  }

  public function setTappableImages($tappableImages)
  {
    $this->tappableImages = $tappableImages;
  }

  public function getTappableImages()
  {
    return $this->tappableImages;
  }

  public function setTitle(Google_Service_Now_TemplatedString $title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }
}

class Google_Service_Now_TableCard extends Google_Collection
{
  protected $collection_key = 'labelContentPairs';
  protected $internal_gapi_mappings = array(
  );
  protected $addressType = 'Google_Service_Now_Address';
  protected $addressDataType = '';
  protected $buttonsType = 'Google_Service_Now_Button';
  protected $buttonsDataType = 'array';
  protected $labelContentPairsType = 'Google_Service_Now_LabelContentPair';
  protected $labelContentPairsDataType = 'array';
  protected $logoType = 'Google_Service_Now_Image';
  protected $logoDataType = '';
  protected $tapActionType = 'Google_Service_Now_Action';
  protected $tapActionDataType = '';
  protected $titleType = 'Google_Service_Now_TemplatedString';
  protected $titleDataType = '';

  public function setAddress(Google_Service_Now_Address $address)
  {
    $this->address = $address;
  }

  public function getAddress()
  {
    return $this->address;
  }

  public function setButtons($buttons)
  {
    $this->buttons = $buttons;
  }

  public function getButtons()
  {
    return $this->buttons;
  }

  public function setLabelContentPairs($labelContentPairs)
  {
    $this->labelContentPairs = $labelContentPairs;
  }

  public function getLabelContentPairs()
  {
    return $this->labelContentPairs;
  }

  public function setLogo(Google_Service_Now_Image $logo)
  {
    $this->logo = $logo;
  }

  public function getLogo()
  {
    return $this->logo;
  }

  public function setTapAction(Google_Service_Now_Action $tapAction)
  {
    $this->tapAction = $tapAction;
  }

  public function getTapAction()
  {
    return $this->tapAction;
  }

  public function setTitle(Google_Service_Now_TemplatedString $title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }
}

class Google_Service_Now_TappableImage extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $actionType = 'Google_Service_Now_Action';
  protected $actionDataType = '';
  protected $imageType = 'Google_Service_Now_Image';
  protected $imageDataType = '';

  public function setAction(Google_Service_Now_Action $action)
  {
    $this->action = $action;
  }

  public function getAction()
  {
    return $this->action;
  }

  public function setImage(Google_Service_Now_Image $image)
  {
    $this->image = $image;
  }

  public function getImage()
  {
    return $this->image;
  }
}

class Google_Service_Now_TemplatedString extends Google_Collection
{
  protected $collection_key = 'parameters';
  protected $internal_gapi_mappings = array(
  );
  public $displayString;
  protected $parametersType = 'Google_Service_Now_TemplatedStringParameter';
  protected $parametersDataType = 'array';

  public function setDisplayString($displayString)
  {
    $this->displayString = $displayString;
  }

  public function getDisplayString()
  {
    return $this->displayString;
  }

  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }

  public function getParameters()
  {
    return $this->parameters;
  }
}

class Google_Service_Now_TemplatedStringParameter extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $timestampType = 'Google_Service_Now_Timestamp';
  protected $timestampDataType = '';
  public $type;

  public function setTimestamp(Google_Service_Now_Timestamp $timestamp)
  {
    $this->timestamp = $timestamp;
  }

  public function getTimestamp()
  {
    return $this->timestamp;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}

class Google_Service_Now_TimeRange extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $endTimeType = 'Google_Service_Now_Timestamp';
  protected $endTimeDataType = '';
  protected $startTimeType = 'Google_Service_Now_Timestamp';
  protected $startTimeDataType = '';

  public function setEndTime(Google_Service_Now_Timestamp $endTime)
  {
    $this->endTime = $endTime;
  }

  public function getEndTime()
  {
    return $this->endTime;
  }

  public function setStartTime(Google_Service_Now_Timestamp $startTime)
  {
    $this->startTime = $startTime;
  }

  public function getStartTime()
  {
    return $this->startTime;
  }
}

class Google_Service_Now_Timestamp extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $nanos;
  public $seconds;

  public function setNanos($nanos)
  {
    $this->nanos = $nanos;
  }

  public function getNanos()
  {
    return $this->nanos;
  }

  public function setSeconds($seconds)
  {
    $this->seconds = $seconds;
  }

  public function getSeconds()
  {
    return $this->seconds;
  }
}

class Google_Service_Now_VideoCard extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $backgroundColor;
  protected $contentType = 'Google_Service_Now_TemplatedString';
  protected $contentDataType = '';
  public $durationSeconds;
  protected $logoType = 'Google_Service_Now_Image';
  protected $logoDataType = '';
  protected $tappableImageType = 'Google_Service_Now_TappableImage';
  protected $tappableImageDataType = '';
  protected $titleType = 'Google_Service_Now_TemplatedString';
  protected $titleDataType = '';

  public function setBackgroundColor($backgroundColor)
  {
    $this->backgroundColor = $backgroundColor;
  }

  public function getBackgroundColor()
  {
    return $this->backgroundColor;
  }

  public function setContent(Google_Service_Now_TemplatedString $content)
  {
    $this->content = $content;
  }

  public function getContent()
  {
    return $this->content;
  }

  public function setDurationSeconds($durationSeconds)
  {
    $this->durationSeconds = $durationSeconds;
  }

  public function getDurationSeconds()
  {
    return $this->durationSeconds;
  }

  public function setLogo(Google_Service_Now_Image $logo)
  {
    $this->logo = $logo;
  }

  public function getLogo()
  {
    return $this->logo;
  }

  public function setTappableImage(Google_Service_Now_TappableImage $tappableImage)
  {
    $this->tappableImage = $tappableImage;
  }

  public function getTappableImage()
  {
    return $this->tappableImage;
  }

  public function setTitle(Google_Service_Now_TemplatedString $title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }
}

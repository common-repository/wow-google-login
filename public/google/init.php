<?php

require_once dirname(__FILE__).'/apiClient.php';
require_once dirname(__FILE__).'/contrib/apiOauth2Service.php';

$client = new apiClient();
$client->setClientId($settings['google_client_id']);
$client->setClientSecret($settings['google_client_secret']);
$client->setDeveloperKey($settings['google_api_key']);
$client->setRedirectUri(self::login_url());
$client->setApprovalPrompt('auto');

$oauth2 = new apiOauth2Service($client);

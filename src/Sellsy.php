<?php

/**
 * Sellsy Client.
 *
 * LICENSE
 *
 * This source file is subject to the MIT license and the version 3 of the GPL3
 * license that are bundled with this package in the folder licences
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to richarddeloge@gmail.com so we can send you a copy immediately.
 *
 *
 * @copyright   Copyright (c) 2009-2016 Richard Déloge (richarddeloge@gmail.com)
 *
 * @link        http://teknoo.software/sellsy-client Project website
 *
 * @license     http://teknoo.software/sellsy-client/license/mit         MIT License
 *
 * @author      Richard Déloge <richarddeloge@gmail.com>
 *
 * @version     0.8.0
 */
namespace Teknoo\Sellsy;

use Teknoo\Sellsy\Client\Client as SellsyClient;
use GuzzleHttp\Client;
use Teknoo\Sellsy\Transport\Guzzle;
use Teknoo\Sellsy\Transport\TransportInterface;

class Sellsy
{
    /**
     * @var Client
     */
    private $guzzleClient;

    /**
     * @var TransportInterface
     */
    private $transport;

    /**
     * Sellsy API End point
     *
     * @var string
     */
    private $apiUrl;

    /**
     * OAuth access token (provided by Sellsy).
     *
     * @var string
     */
    private $oauthAccessToken;

    /**
     * OAuth secret (provided by Sellsy).
     *
     * @var string
     */
    private $oauthAccessTokenSecret;

    /**
     * OAuth consumer token (provided by Sellsy).
     *
     * @var string
     */
    private $oauthConsumerKey;

    /**
     * OAuth consumer secret  (provided by Sellsy).
     *
     * @var string
     */
    private $oauthConsumerSecret;

    /**
     * @var SellsyClient
     */
    private $client;

    /**
     * Sellsy constructor.
     * @param string $apiUrl
     * @param string $oauthAccessToken
     * @param string $oauthAccessTokenSecret
     * @param string $oauthConsumerKey
     * @param string $oauthConsumerSecret
     */
    public function __construct(
        string $apiUrl,
        string $oauthAccessToken,
        string $oauthAccessTokenSecret,
        string $oauthConsumerKey,
        string $oauthConsumerSecret
    ) {
        $this->apiUrl = $apiUrl;
        $this->oauthAccessToken = $oauthAccessToken;
        $this->oauthAccessTokenSecret = $oauthAccessTokenSecret;
        $this->oauthConsumerKey = $oauthConsumerKey;
        $this->oauthConsumerSecret = $oauthConsumerSecret;
    }

    /**
     * @return Client
     */
    public function getGuzzleClient(): Client
    {
        if (!$this->guzzleClient instanceof Client) {
            $this->guzzleClient = new Client();
        }

        return $this->guzzleClient;
    }

    /**
     * @return TransportInterface
     */
    public function getTransport(): TransportInterface
    {
        if (!$this->transport instanceof TransportInterface) {
            $this->transport = new Guzzle($this->getGuzzleClient());
        }

        return $this->transport;
    }

    /**
     * @return SellsyClient
     */
    public function getClient(): SellsyClient
    {
        if (!$this->client instanceof SellsyClient) {
            $this->client = new SellsyClient(
                $this->getTransport(),
                $this->apiUrl,
                $this->oauthAccessToken,
                $this->oauthAccessTokenSecret,
                $this->oauthConsumerKey,
                $this->oauthConsumerSecret
            );
        }

        return $this->client;
    }

    /**
     * @param Client $guzzleClient
     * @return self
     */
    public function setGuzzleClient(Client $guzzleClient): Sellsy
    {
        $this->guzzleClient = $guzzleClient;

        return $this;
    }

    /**
     * @param TransportInterface $transport
     * @return self
     */
    public function setTransport(TransportInterface $transport): Sellsy
    {
        $this->transport = $transport;

        return $this;
    }

    /**
     * @param SellsyClient $client
     * @return self
     */
    public function setClient(SellsyClient $client): Sellsy
    {
        $this->client = $client;

        return $this;
    }
}
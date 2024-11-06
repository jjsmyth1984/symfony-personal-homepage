<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomepageControllerTest extends WebTestCase
{

    /**
     * @var KernelBrowser|null
     */
    private ?KernelBrowser $client = null;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->client = static::createClient();
    }

    public function testHomepageResponse(): void
    {

        // Mock get request
        $this->client->request('get', '/');

        // Actual status code value
        $actualStatus = $this->client->getResponse()->getStatusCode();

        // Assert
        $this->assertResponseIsSuccessful(); // Lowest level, confirmation of the route with successful response
        $this->assertResponseStatusCodeSame(200, $actualStatus); // Confirms server level successful 200 http code

    }
}

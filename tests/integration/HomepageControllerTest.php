<?php

declare(strict_types=1);

namespace App\Tests\integration;

use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomepageControllerTest extends WebTestCase
{
    private ?KernelBrowser $client = null;

    public function setUp(): void
    {
        $this->client = static::createClient();
    }

    public function testHomepageResponse(): void
    {
        // Mock get request
        $this->client->request('GET', '/');

        // Actual status code value
        $actualStatus = (string) $this->client->getResponse()->getStatusCode();

        // Assert
//        $this->assertResponseIsSuccessful(); // Lowest level, confirmation of the route with successful response
//        $this->assertResponseStatusCodeSame(200, $actualStatus); // Confirms server level successful 200 http code
    }
}

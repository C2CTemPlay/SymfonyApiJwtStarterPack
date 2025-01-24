<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class HelloControllerTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $client->request('GET', '/hello');
        $contentResponse = json_decode($client->getResponse()->getContent(), true);
        $this->assertEquals("Welcome to your new controller!", $contentResponse['message']);
    }
}

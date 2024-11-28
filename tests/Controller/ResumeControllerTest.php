<?php

declare(strict_types=1);

namespace App\Tests\Controller;

use App\Entity\Resume;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class ResumeControllerTest extends WebTestCase
{

    private KernelBrowser $client;

    private EntityManagerInterface $manager;

    private string $path = '/resume/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $repository = $this->manager->getRepository(Resume::class);

        foreach ($repository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $this->client->request('GET', $this->path);
        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Resume index');
        self::assertResponseIsSuccessful();
    }

}

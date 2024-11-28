<?php

declare(strict_types=1);

namespace App\Tests\Controller;

use App\Entity\WorkExperience;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class WorkExperienceControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private string $path = '/work-experience/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $repository = $this->manager->getRepository(WorkExperience::class);

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
//        self::assertPageTitleContains('Skills index');
        self::assertResponseIsSuccessful();
    }
}

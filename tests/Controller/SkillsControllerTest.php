<?php

namespace App\Tests\Controller;

use App\Entity\Skills;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class SkillsControllerTest extends WebTestCase
{

//    /**
//     * @var KernelBrowser
//     */
//    private KernelBrowser $client;
//
//    /**
//     * @var EntityManagerInterface
//     */
//    private EntityManagerInterface $manager;
//
//    /**
//     * @var EntityRepository
//     */
//    private EntityRepository $repository;
//    private string $path = '/skills/';
//
//    protected function setUp(): void
//    {
//        $this->client = static::createClient();
//        $this->manager = static::getContainer()->get('doctrine')->getManager();
//        $this->repository = $this->manager->getRepository(Skills::class);
//
//        foreach ($this->repository->findAll() as $object) {
//            $this->manager->remove($object);
//        }
//
//        $this->manager->flush();
//    }
//
//    public function testIndex(): void
//    {
//        $this->client->followRedirects();
//        $crawler = $this->client->request('GET', $this->path);
//
//        self::assertResponseStatusCodeSame(200);
//        self::assertPageTitleContains('Skill index');
//
//        // Use the $crawler to perform additional assertions e.g.
//        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
//    }
//
//    public function testNew(): void
//    {
//        $this->markTestIncomplete();
//        $this->client->request('GET', sprintf('%snew', $this->path));
//
//        self::assertResponseStatusCodeSame(200);
//
//        $this->client->submitForm('Save', [
//            'skill[title]' => 'Testing',
//            'skill[percentage]' => 'Testing',
//            'skill[foreignObjectX]' => 'Testing',
//            'skill[foreignObjectY]' => 'Testing',
//            'skill[foreignObjectWidth]' => 'Testing',
//            'skill[foreignObjectHeight]' => 'Testing',
//            'skill[user]' => 'Testing',
//        ]);
//
//        self::assertResponseRedirects($this->path);
//
//        self::assertSame(1, $this->repository->count([]));
//    }
//
//    public function testShow(): void
//    {
//        $this->markTestIncomplete();
//        $fixture = new Skills();
//        $fixture->setTitle('My Title');
//        $fixture->setPercentage('My Title');
//        $fixture->setForeignObjectX('My Title');
//        $fixture->setForeignObjectY('My Title');
//        $fixture->setForeignObjectWidth('My Title');
//        $fixture->setForeignObjectHeight('My Title');
//        $fixture->setUser('My Title');
//
//        $this->manager->persist($fixture);
//        $this->manager->flush();
//
//        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
//
//        self::assertResponseStatusCodeSame(200);
//        self::assertPageTitleContains('Skill');
//
//        // Use assertions to check that the properties are properly displayed.
//    }
//
//    public function testEdit(): void
//    {
//        $this->markTestIncomplete();
//        $fixture = new Skills();
//        $fixture->setTitle('Value');
//        $fixture->setPercentage('Value');
//        $fixture->setForeignObjectX('Value');
//        $fixture->setForeignObjectY('Value');
//        $fixture->setForeignObjectWidth('Value');
//        $fixture->setForeignObjectHeight('Value');
//        $fixture->setUser('Value');
//
//        $this->manager->persist($fixture);
//        $this->manager->flush();
//
//        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));
//
//        $this->client->submitForm('Update', [
//            'skill[title]' => 'Something New',
//            'skill[percentage]' => 'Something New',
//            'skill[foreignObjectX]' => 'Something New',
//            'skill[foreignObjectY]' => 'Something New',
//            'skill[foreignObjectWidth]' => 'Something New',
//            'skill[foreignObjectHeight]' => 'Something New',
//            'skill[user]' => 'Something New',
//        ]);
//
//        self::assertResponseRedirects('/admin/skills/');
//
//        $fixture = $this->repository->findAll();
//
//        self::assertSame('Something New', $fixture[0]->getTitle());
//        self::assertSame('Something New', $fixture[0]->getPercentage());
//        self::assertSame('Something New', $fixture[0]->getForeignObjectX());
//        self::assertSame('Something New', $fixture[0]->getForeignObjectY());
//        self::assertSame('Something New', $fixture[0]->getForeignObjectWidth());
//        self::assertSame('Something New', $fixture[0]->getForeignObjectHeight());
//        self::assertSame('Something New', $fixture[0]->getUser());
//    }
//
//    public function testRemove(): void
//    {
//        $this->markTestIncomplete();
//        $fixture = new Skills();
//        $fixture->setTitle('Value');
//        $fixture->setPercentage('Value');
//        $fixture->setForeignObjectX('Value');
//        $fixture->setForeignObjectY('Value');
//        $fixture->setForeignObjectWidth('Value');
//        $fixture->setForeignObjectHeight('Value');
//        $fixture->setUser('Value');
//
//        $this->manager->persist($fixture);
//        $this->manager->flush();
//
//        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
//        $this->client->submitForm('Delete');
//
//        self::assertResponseRedirects('/admin/skills/');
//        self::assertSame(0, $this->repository->count([]));
//    }
}

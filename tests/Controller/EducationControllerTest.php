<?php

namespace App\Tests\Controller;

use App\Entity\Education;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class EducationControllerTest extends WebTestCase
{
//    private KernelBrowser $client;
//    private EntityManagerInterface $manager;
//    private EntityRepository $repository;
//    private string $path = '/admin/education/';
//
//    protected function setUp(): void
//    {
//        $this->client = static::createClient();
//        $this->manager = static::getContainer()->get('doctrine')->getManager();
//        $this->repository = $this->manager->getRepository(Education::class);
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
//        self::assertPageTitleContains('Education index');
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
//            'education[course]' => 'Testing',
//            'education[institution]' => 'Testing',
//            'education[title]' => 'Testing',
//            'education[start_date]' => 'Testing',
//            'education[end_date]' => 'Testing',
//            'education[user]' => 'Testing',
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
//        $fixture = new Education();
//        $fixture->setCourse('My Title');
//        $fixture->setInstitution('My Title');
//        $fixture->setTitle('My Title');
//        $fixture->setStart_date('My Title');
//        $fixture->setEnd_date('My Title');
//        $fixture->setUser('My Title');
//
//        $this->manager->persist($fixture);
//        $this->manager->flush();
//
//        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
//
//        self::assertResponseStatusCodeSame(200);
//        self::assertPageTitleContains('Education');
//
//        // Use assertions to check that the properties are properly displayed.
//    }
//
//    public function testEdit(): void
//    {
//        $this->markTestIncomplete();
//        $fixture = new Education();
//        $fixture->setCourse('Value');
//        $fixture->setInstitution('Value');
//        $fixture->setTitle('Value');
//        $fixture->setStart_date('Value');
//        $fixture->setEnd_date('Value');
//        $fixture->setUser('Value');
//
//        $this->manager->persist($fixture);
//        $this->manager->flush();
//
//        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));
//
//        $this->client->submitForm('Update', [
//            'education[course]' => 'Something New',
//            'education[institution]' => 'Something New',
//            'education[title]' => 'Something New',
//            'education[start_date]' => 'Something New',
//            'education[end_date]' => 'Something New',
//            'education[user]' => 'Something New',
//        ]);
//
//        self::assertResponseRedirects('/education/');
//
//        $fixture = $this->repository->findAll();
//
//        self::assertSame('Something New', $fixture[0]->getCourse());
//        self::assertSame('Something New', $fixture[0]->getInstitution());
//        self::assertSame('Something New', $fixture[0]->getTitle());
//        self::assertSame('Something New', $fixture[0]->getStart_date());
//        self::assertSame('Something New', $fixture[0]->getEnd_date());
//        self::assertSame('Something New', $fixture[0]->getUser());
//    }
//
//    public function testRemove(): void
//    {
//        $this->markTestIncomplete();
//        $fixture = new Education();
//        $fixture->setCourse('Value');
//        $fixture->setInstitution('Value');
//        $fixture->setTitle('Value');
//        $fixture->setStart_date('Value');
//        $fixture->setEnd_date('Value');
//        $fixture->setUser('Value');
//
//        $this->manager->persist($fixture);
//        $this->manager->flush();
//
//        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
//        $this->client->submitForm('Delete');
//
//        self::assertResponseRedirects('/education/');
//        self::assertSame(0, $this->repository->count([]));
//    }
}

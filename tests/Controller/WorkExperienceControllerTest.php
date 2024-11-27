<?php

namespace App\Tests\Controller;

use App\Entity\WorkExperience;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class WorkExperienceControllerTest extends WebTestCase
{
//    private KernelBrowser $client;
//    private EntityManagerInterface $manager;
//    private EntityRepository $repository;
//    private string $path = '/admin/work-experience/';
//
//    protected function setUp(): void
//    {
//        $this->client = static::createClient();
//        $this->manager = static::getContainer()->get('doctrine')->getManager();
//        $this->repository = $this->manager->getRepository(WorkExperience::class);
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
//        self::assertPageTitleContains('WorkExperience index');
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
//            'work_experience[title]' => 'Testing',
//            'work_experience[business]' => 'Testing',
//            'work_experience[start_date]' => 'Testing',
//            'work_experience[end_date]' => 'Testing',
//            'work_experience[description]' => 'Testing',
//            'work_experience[user]' => 'Testing',
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
//        $fixture = new WorkExperience();
//        $fixture->setTitle('My Title');
//        $fixture->setBusiness('My Title');
//        $fixture->setStart_date('My Title');
//        $fixture->setEnd_date('My Title');
//        $fixture->setDescription('My Title');
//        $fixture->setUser('My Title');
//
//        $this->manager->persist($fixture);
//        $this->manager->flush();
//
//        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
//
//        self::assertResponseStatusCodeSame(200);
//        self::assertPageTitleContains('WorkExperience');
//
//        // Use assertions to check that the properties are properly displayed.
//    }
//
//    public function testEdit(): void
//    {
//        $this->markTestIncomplete();
//        $fixture = new WorkExperience();
//        $fixture->setTitle('Value');
//        $fixture->setBusiness('Value');
//        $fixture->setStart_date('Value');
//        $fixture->setEnd_date('Value');
//        $fixture->setDescription('Value');
//        $fixture->setUser('Value');
//
//        $this->manager->persist($fixture);
//        $this->manager->flush();
//
//        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));
//
//        $this->client->submitForm('Update', [
//            'work_experience[title]' => 'Something New',
//            'work_experience[business]' => 'Something New',
//            'work_experience[start_date]' => 'Something New',
//            'work_experience[end_date]' => 'Something New',
//            'work_experience[description]' => 'Something New',
//            'work_experience[user]' => 'Something New',
//        ]);
//
//        self::assertResponseRedirects('/work/experience/');
//
//        $fixture = $this->repository->findAll();
//
//        self::assertSame('Something New', $fixture[0]->getTitle());
//        self::assertSame('Something New', $fixture[0]->getBusiness());
//        self::assertSame('Something New', $fixture[0]->getStart_date());
//        self::assertSame('Something New', $fixture[0]->getEnd_date());
//        self::assertSame('Something New', $fixture[0]->getDescription());
//        self::assertSame('Something New', $fixture[0]->getUser());
//    }
//
//    public function testRemove(): void
//    {
//        $this->markTestIncomplete();
//        $fixture = new WorkExperience();
//        $fixture->setTitle('Value');
//        $fixture->setBusiness('Value');
//        $fixture->setStart_date('Value');
//        $fixture->setEnd_date('Value');
//        $fixture->setDescription('Value');
//        $fixture->setUser('Value');
//
//        $this->manager->persist($fixture);
//        $this->manager->flush();
//
//        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
//        $this->client->submitForm('Delete');
//
//        self::assertResponseRedirects('/work/experience/');
//        self::assertSame(0, $this->repository->count([]));
//    }
}

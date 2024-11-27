<?php

namespace App\Tests\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class UserControllerTest extends WebTestCase
{
//    private KernelBrowser $client;
//    private EntityManagerInterface $manager;
//    private EntityRepository $repository;
//    private string $path = '/user/';
//
//    protected function setUp(): void
//    {
//        $this->client = static::createClient();
//        $this->manager = static::getContainer()->get('doctrine')->getManager();
//        $this->repository = $this->manager->getRepository(User::class);
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
//        self::assertPageTitleContains('User index');
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
//            'user[firstname]' => 'Testing',
//            'user[surname]' => 'Testing',
//            'user[jobTitle]' => 'Testing',
//            'user[location]' => 'Testing',
//            'user[linkedin]' => 'Testing',
//            'user[github]' => 'Testing',
//            'user[website]' => 'Testing',
//            'user[email]' => 'Testing',
//            'user[aboutMe]' => 'Testing',
//            'user[philosophy]' => 'Testing',
//            'user[createdAt]' => 'Testing',
//            'user[lastUpdatedAt]' => 'Testing',
//            'user[roles]' => 'Testing',
//            'user[password]' => 'Testing',
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
//        $fixture = new User();
//        $fixture->setFirstname('My Title');
//        $fixture->setSurname('My Title');
//        $fixture->setJobTitle('My Title');
//        $fixture->setLocation('My Title');
//        $fixture->setLinkedin('My Title');
//        $fixture->setGithub('My Title');
//        $fixture->setWebsite('My Title');
//        $fixture->setEmail('My Title');
//        $fixture->setAboutMe('My Title');
//        $fixture->setPhilosophy('My Title');
//        $fixture->setCreatedAt('My Title');
//        $fixture->setLastUpdatedAt('My Title');
//        $fixture->setRoles('My Title');
//        $fixture->setPassword('My Title');
//
//        $this->manager->persist($fixture);
//        $this->manager->flush();
//
//        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
//
//        self::assertResponseStatusCodeSame(200);
//        self::assertPageTitleContains('User');
//
//        // Use assertions to check that the properties are properly displayed.
//    }
//
//    public function testEdit(): void
//    {
//        $this->markTestIncomplete();
//        $fixture = new User();
//        $fixture->setFirstname('Value');
//        $fixture->setSurname('Value');
//        $fixture->setJobTitle('Value');
//        $fixture->setLocation('Value');
//        $fixture->setLinkedin('Value');
//        $fixture->setGithub('Value');
//        $fixture->setWebsite('Value');
//        $fixture->setEmail('Value');
//        $fixture->setAboutMe('Value');
//        $fixture->setPhilosophy('Value');
//        $fixture->setCreatedAt('Value');
//        $fixture->setLastUpdatedAt('Value');
//        $fixture->setRoles('Value');
//        $fixture->setPassword('Value');
//
//        $this->manager->persist($fixture);
//        $this->manager->flush();
//
//        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));
//
//        $this->client->submitForm('Update', [
//            'user[firstname]' => 'Something New',
//            'user[surname]' => 'Something New',
//            'user[jobTitle]' => 'Something New',
//            'user[location]' => 'Something New',
//            'user[linkedin]' => 'Something New',
//            'user[github]' => 'Something New',
//            'user[website]' => 'Something New',
//            'user[email]' => 'Something New',
//            'user[aboutMe]' => 'Something New',
//            'user[philosophy]' => 'Something New',
//            'user[createdAt]' => 'Something New',
//            'user[lastUpdatedAt]' => 'Something New',
//            'user[roles]' => 'Something New',
//            'user[password]' => 'Something New',
//        ]);
//
//        self::assertResponseRedirects('/user/');
//
//        $fixture = $this->repository->findAll();
//
//        self::assertSame('Something New', $fixture[0]->getFirstname());
//        self::assertSame('Something New', $fixture[0]->getSurname());
//        self::assertSame('Something New', $fixture[0]->getJobTitle());
//        self::assertSame('Something New', $fixture[0]->getLocation());
//        self::assertSame('Something New', $fixture[0]->getLinkedin());
//        self::assertSame('Something New', $fixture[0]->getGithub());
//        self::assertSame('Something New', $fixture[0]->getWebsite());
//        self::assertSame('Something New', $fixture[0]->getEmail());
//        self::assertSame('Something New', $fixture[0]->getAboutMe());
//        self::assertSame('Something New', $fixture[0]->getPhilosophy());
//        self::assertSame('Something New', $fixture[0]->getCreatedAt());
//        self::assertSame('Something New', $fixture[0]->getLastUpdatedAt());
//        self::assertSame('Something New', $fixture[0]->getRoles());
//        self::assertSame('Something New', $fixture[0]->getPassword());
//    }
//
//    public function testRemove(): void
//    {
//        $this->markTestIncomplete();
//        $fixture = new User();
//        $fixture->setFirstname('Value');
//        $fixture->setSurname('Value');
//        $fixture->setJobTitle('Value');
//        $fixture->setLocation('Value');
//        $fixture->setLinkedin('Value');
//        $fixture->setGithub('Value');
//        $fixture->setWebsite('Value');
//        $fixture->setEmail('Value');
//        $fixture->setAboutMe('Value');
//        $fixture->setPhilosophy('Value');
//        $fixture->setCreatedAt('Value');
//        $fixture->setLastUpdatedAt('Value');
//        $fixture->setRoles('Value');
//        $fixture->setPassword('Value');
//
//        $this->manager->persist($fixture);
//        $this->manager->flush();
//
//        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
//        $this->client->submitForm('Delete');
//
//        self::assertResponseRedirects('/user/');
//        self::assertSame(0, $this->repository->count([]));
//    }
}

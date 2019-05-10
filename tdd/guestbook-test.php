<?php

use PHPUnit\Framework\TestCase as TestCase;

class GuestbookTest extends TestCase
{
    private $guestbook;

    public function setUp()
    {
        $this->guestbook = new Guestbook();
    }

    public function tearDown()
    {
        unset($this->guestbook);
    }

    //test to ensure that the guestbook contains at least one entry
    public function testCountGuestbookEntries()
    {
        $entries = $this->guestbook->viewAll();
        $this->assertInternalType('array', $entries);
        $this->assertTrue(count($entries));
    }
}
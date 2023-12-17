<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class RentalMobilTest extends TestCase
{
    public function testReadableDirectory(): void
    {
        $this->assertDirectoryIsReadable('/xampp/htdocs/rental_mobil');
    }

    public function testWriteableDirectory(): void
    {
        $this->assertDirectoryIsWritable('/xampp/htdocs/rental_mobil');
    }

    public function testProducerFirst(): string
    {
        $this->assertTrue(true);

        return 'pertama';
    }

    public function testProducerSecond(): string
    {
        $this->assertTrue(true);

        return 'kedua';
    }

    public function testExpectWelcomeMessage(): void
    {
        $this->expectOutputString('Mobil kami selalu tersedia');

        print 'Mobil kami selalu tersedia';
    }


}
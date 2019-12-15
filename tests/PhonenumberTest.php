<?php

namespace Tematech\Phonenumber\Tests;

use PHPUnit\Framework\TestCase;
use Tematech\Phonenumber\Phonenumber;

class PhonenumberTest extends TestCase
{
    /**
     * Undocumented function
     * @test
     * @return boolean
     */
    public function is_orange_phone()
    {
        $this->assertEquals(Phonenumber::getOperator('691131446'), Phonenumber::ORANGE);
        $this->assertEquals(Phonenumber::getOperator('91131446'), Phonenumber::ORANGE);
        $this->assertEquals(Phonenumber::getOperator('23791131446'), Phonenumber::ORANGE);
        $this->assertEquals(Phonenumber::getOperator('237691131446'), Phonenumber::ORANGE);
        $this->assertEquals(Phonenumber::getOperator('237691131237'), Phonenumber::ORANGE);
        $this->assertEquals(Phonenumber::getOperator('237691237237'), Phonenumber::ORANGE);
    }
    /**
     * Undocumented function
     * @test
     * @return boolean
     */
    public function is_mtn_phone()
    {
        $this->assertEquals(Phonenumber::getOperator('6789864666'), Phonenumber::MTN);
        $this->assertEquals(Phonenumber::getOperator('651203598'), Phonenumber::MTN);
        $this->assertEquals(Phonenumber::getOperator('78986466'), Phonenumber::MTN);
        $this->assertEquals(Phonenumber::getOperator('23778986466'), Phonenumber::MTN);
        $this->assertEquals(Phonenumber::getOperator('237678986466'), Phonenumber::MTN);
    }
    /**
     * Undocumented function
     * @test
     * @return void
     */
    public function phone_without_prefix()
    {
        $this->assertEquals(Phonenumber::getPhoneWithoutPrefix('237691131446'), '691131446');
        $this->assertEquals(Phonenumber::getPhoneWithoutPrefix('23791131446'), '691131446');
    }
}

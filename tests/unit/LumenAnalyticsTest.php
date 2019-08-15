<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use LumenAnalytics\LumenAnalytics;

final class LumenAnalyticsTest extends TestCase {
    /**
     * Test that the analytics client variable exists
     *
     */
   public function testHasClientVariable(){
       $this->assertClassHasAttribute('client', LumenAnalytics::class);
   }

   public function testInit(){
       $context = $this->createMock(LumenAnalytics::class);

       $context->method('init')->willReturn(\Google_Service_Analytics::class);


   }
}
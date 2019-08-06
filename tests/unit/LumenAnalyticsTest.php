<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use LumenAnalytics\LumenAnalytics;

final class LumenAnalyticsTest extends TestCase {
   public function testHasClientVariable(){
       $this->assertClassHasAttribute('client', LumenAnalytics::class);
   }
}
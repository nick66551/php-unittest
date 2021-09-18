<?php

namespace Tests {

use App\FakeHoliday;
use DateTime;
use PHPUnit\Framework\TestCase;

    class HolidayTest extends TestCase
    {
        private $holiday;

        protected function setUp()
        {
            $this->holiday = new FakeHoliday();
        }

        public function test_today_is_xmas()
        {
            $this->givenToday(12, 25);
            $this->sayXmasShouldResponse('Merry Xmas');
        }

        public function test_today_is_not_xmas()
        {
            $this->givenToday(11, 25);
            $this->sayXmasShouldResponse('Today is not Xmas');
        }

        private function givenToday($month, $day)
        {
            $today = new DateTime();
            $today->setDate(2010, $month, $day);
            $this->holiday->setToday($today);
        }

        private function sayXmasShouldResponse($expected)
        {
            $response = $this->holiday->SayXmas();
            $this->assertEquals($expected, $response);
        }
    }
}

namespace App {

class FakeHoliday extends Holiday
    {
        private $today;

        public function setToday($date)
        {
            $this->today = $date;
        }

        protected function getToday()
        {
            return $this->today;
        }
    }
}
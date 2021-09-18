<?php
/**
 * Created by PhpStorm.
 * User: joeychen
 * Date: 2018/9/24
 * Time: 下午 04:58
 */

namespace App;

use DateTime;

class Holiday
{
    public function SayXmas()
    {
        $today = $this->getToday();
        $todayDate = $today->format('md');
        if ($todayDate == '1224' || $todayDate == '1225') {
            return 'Merry Xmas';
        }
        else {
            return 'Today is not Xmas';
        }
    }

    protected function getToday()
    {
        $today = new DateTime();

        return $today;
    }
}
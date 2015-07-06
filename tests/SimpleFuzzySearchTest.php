<?php

use wataridori\SFS\SimpleFuzzySearch;

class SimpleFuzzySearchTest extends PHPUnit_Framework_TestCase
{
    private $arrayData = [
        [
            'nickname' => 'thangtd90',
            'fullname' => 'Tran Duc Thang',
        ],
        [
            'nickname' => 'trongbs',
            'fullname' => 'Tran Ba Trong',
        ],
        [
            'nickname' => 'vigov5',
            'fullname' => 'Nguyen Anh Tien',
        ],
        [
            'nickname' => 'kienBG',
            'fullname' => 'Do Trung Kien',
        ],
        [
            'nickname' => 'vuong',
            'fullname' => 'Nguyen Van Vuong',
        ],
        [
            'nickname' => 'dainghia',
            'fullname' => 'Le Van Nghia',
        ],
        [
            'nickname' => 'tungctf',
            'fullname' => 'Nguyen Duc Tung',
        ],
    ];

    public function testSearch()
    {
        $sfs = new SimpleFuzzySearch($this->arrayData, ['nickname', 'fullname'], 'tung');
        $results = $sfs->search();
        $this->assertTrue($this->found('Nguyen Duc Tung', $results, 'fullname'));
        $this->assertTrue($this->found('Do Trung Kien', $results, 'fullname'));
        $this->assertFalse($this->found('Le Van Nghia', $results, 'fullname'));

        $results = $sfs->search('trn dc thsng');
        $this->assertTrue($this->found('Tran Duc Thang', $results, 'fullname'));
    }

    private function found($string, $results, $attribute)
    {
        foreach ($results as $result) {
            if ($result[0][$attribute] === $string) {
                return true;
            }
        }

        return false;
    }
}
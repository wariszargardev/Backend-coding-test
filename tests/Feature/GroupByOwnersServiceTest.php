<?php

namespace Tests\Feature;

use App\Services\GroupByOwnersService;
use Tests\TestCase;

class GroupByOwnersServiceTest extends TestCase
{

    public function it_groups_files_by_owners()
    {
        $service = new GroupByOwnersService();

        $files = [
            'insurance.txt' => 'Company A',
            'letter.docx' => 'Company A',
            'Contract.docx' => 'Company B',
        ];

        $expectedResult = [
            'Company A' => ['insurance.txt', 'letter.docx'],
            'Company B' => ['Contract.docx'],
        ];

        $result = $service->groupByOwners($files);

        $this->assertEquals($expectedResult, $result);
    }
}

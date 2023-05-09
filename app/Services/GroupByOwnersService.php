<?php

namespace App\Services;

class GroupByOwnersService
{
    public function groupByOwners(array $files): array
    {
        $result = [];

        foreach ($files as $filename => $owner) {
            if (!isset($result[$owner])) {
                $result[$owner] = [];
            }
            $result[$owner][] = $filename;
        }

        return $result;
    }
}

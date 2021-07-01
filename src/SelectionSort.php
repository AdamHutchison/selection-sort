<?php

namespace SelectionSort;

class SelectionSort
{
    private array $list;

    /**
     * @param array[int] $sortedList
     */
    public function __construct(array $unsortedList)
    {
        $this->list = $unsortedList;
    }

    public function getSortedList(): array
    {
        $sortedList = [];

        while (count($this->list)) {
            $lowValue = null;
            $keyToDrop = null;

            foreach ($this->list as $key => $item) {
                if ($item < $lowValue || $lowValue == null) {
                    $lowValue = $item;
                    $keyToDrop = $key;
                }
            }

            $sortedList[] = $lowValue;
            unset($this->list[$keyToDrop]);
        }

        return $sortedList;
    }
}

<?php
<?
$data1 = ['parent.child.field.value' => 1,
    'parent.child.field2' => 2,
    'parent2.child.name' => 'test',
    'parent2.child2.name' => 'test',
    'parent2.child2.position' => 10,
    'parent3.child3.position' => 10,
    'keydefault' => 100];

$sep = ".";

function separateArray(array $input,$sep)
{
    $result = array();
    foreach ($input as $key => $value)
    {
        $newArr = & $result;
        foreach (explode($sep,$key) as $sepKey)
        {
            $newArr = &$newArr[$sepKey];
        }
            $newArr = $value;
    }
    return $result;
}

print_r(separateArray($data1,$sep));

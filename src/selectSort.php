<?php
/**
 * 选择排序.
 *
 * @param array $arr 待排序的数组
 */
function selectSort(&$arr)
{
    // 外层循环，假定元素$arr[$i]为最小元素
    for ($size = count($arr), $i = 0; $i < $size - 1; ++$i) {
        // 保存最小元素索引到$p
        // 内层循环，将元素$arr[$j]与最小元素进行比较
        for ($p = $i, $j = $i + 1; $j < $size; ++$j) {
            // 若元素$arr[$j]小于最小元素，继续假定$arr[$j]为最小元素，保存索引到$p
            if ($arr[$j] < $arr[$p]) {
                $p = $j;
            }
        }
        // 若假定最小元素索引不等于实际最小元素索引，交换两元素位置
        if ($p != $i) {
            list($arr[$i], $arr[$p]) = [$arr[$p], $arr[$i]];
        }
    }
}

<?php

set_time_limit(0);

function binary_search($search, $list)
{
    $top = count($list) - 1;
    $bot = 0;

    while( $top >= $bot )
    {
        $mid = floor( ( $top + $bot ) / 2 );

        if ( $list[$mid] < $search) $bot = $mid + 1;
        else if ($list[$mid] > $search) $top = $mid - 1;
        else return true;
    }

    return false;
}

function sequential_search($search, &$list)
{
    $index = 0;
    $list[] = $search;

    while( $list[ $index++ ] != $search );

    if( $index < count($list) )
    {
        array_unshift( $list, $list[ $index-1 ] );

        unset( $list[ $index ] );
        unset( $list[ count( $list ) + 1 ] );

        return true;
    }

    return false;
}

function bubble_sort($list)
{
    $n = count($list) - 1;

    do
    {
        $swapped = false;

        for( $i = 0; $i < $n; ++$i )
        {
            if( $list[ $i ] > $list[ $i + 1 ] )
            {
                $t = $list[$i];

                $list[ $i ] = $list[ $i + 1 ];
                $list[ $i + 1 ] = $t;

                $swapped = true;
            }
        }
    }
    while( $swapped );

    return $list;
}

function generate_random_list($length = 15)
{
    $list = [];

    for( $i = 0; $i <= $length; $i++ )
        $list[] = rand( 1, 100 );

    return $list;
}
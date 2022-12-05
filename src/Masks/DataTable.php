<?php

namespace Yuga\DataTables\Masks;

use Yuga\Support\Masks\Mask;

class DataTable extends Mask
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getMaskAccessor() 
    { 
        return 'dataTables'; 
    }
}
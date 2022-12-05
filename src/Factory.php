<?php

namespace Yuga\DataTables;

use Yuga\Http\Request;

class Factory
{
    /**
     * The Request instance.
     *
     * @var \Yuga\Http\Request
     */
    protected $request;

    /**
     * Create a new Widget Manager instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Create a new DataTable instance.
     *
     * @param array $columns
     *
     * @return array
     */
    public function make(array $columns = [])
    {
        return new DataTable($this, $columns);
    }

    /**
     * Returns the Request instance.
     *
     * @return \Yuga\Http\Request
     */
    public function getRequest()
    {
        return $this->request;
    }
}

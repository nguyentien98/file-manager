<?php 
namespace TienNguyen\File;

/**
 * Package to manage your folders
 */
class File
{

    protected $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function scan()
    {
        # code...
    }
}
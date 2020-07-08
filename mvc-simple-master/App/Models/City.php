<?php
declare(strict_types=1);

namespace App\Models;

use Lib\Model;

class City extends Model
{
    public function __construct() {
        parent::__construct();
        $this->name = 'city';
    }
}
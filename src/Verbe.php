<?php
namespace App;

interface Verbe
{
    public function radical( string $verbe );
    public function terminaison( string $verbe );
}
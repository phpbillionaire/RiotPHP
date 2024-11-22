<?php
namespace App\Interfaces;

interface TftStatusEndpointInterface
{
    public function getTftStatus(): array;
}
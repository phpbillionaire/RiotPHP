<?php
namespace App\Endpoints\LOL\Match\DTO;

final readonly class MatchDto
{
    private MetadataDto $metadata;
    private InfoDto $info;
    public function __construct(MetadataDto $metadata, InfoDto $info)
    {
        $this->metadata = $metadata;
        $this->info = $info;
    }
    public function getMetadata(): MetadataDto
    {
        return $this->metadata;
    }
    public function getInfo(): InfoDto
    {
        return $this->info;
    }
}
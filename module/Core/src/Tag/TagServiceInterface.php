<?php

declare(strict_types=1);

namespace Shlinkio\Shlink\Core\Tag;

use Doctrine\Common\Collections\Collection;
use Shlinkio\Shlink\Core\Entity\Tag;
use Shlinkio\Shlink\Core\Exception\TagConflictException;
use Shlinkio\Shlink\Core\Exception\TagNotFoundException;
use Shlinkio\Shlink\Core\Tag\Model\TagInfo;

interface TagServiceInterface
{
    /**
     * @return Tag[]
     */
    public function listTags(): array;

    /**
     * @return TagInfo[]
     */
    public function tagsInfo(): array;

    /**
     * @param string[] $tagNames
     */
    public function deleteTags(array $tagNames): void;

    /**
     * @deprecated
     * @param string[] $tagNames
     * @return Collection|Tag[]
     */
    public function createTags(array $tagNames): Collection;

    /**
     * @throws TagNotFoundException
     * @throws TagConflictException
     */
    public function renameTag(string $oldName, string $newName): Tag;
}

<?php

/**
 * (c) FSi sp. z o.o. <info@fsi.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace FSi\Component\Files\Upload;

use FSi\Component\Files\UploadedWebFile;
use Psr\Http\Message\StreamInterface;

interface FileFactory
{
    public function create(
        StreamInterface $stream,
        string $originalName,
        string $type,
        int $size,
        ?int $error
    ): UploadedWebFile;

    public function createFromPath(string $path, ?string $targetName = null): UploadedWebFile;
}

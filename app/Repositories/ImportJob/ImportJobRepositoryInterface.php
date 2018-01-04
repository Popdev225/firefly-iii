<?php
/**
 * ImportJobRepositoryInterface.php
 * Copyright (c) 2017 thegrumpydictator@gmail.com
 *
 * This file is part of Firefly III.
 *
 * Firefly III is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Firefly III is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Firefly III. If not, see <http://www.gnu.org/licenses/>.
 */
declare(strict_types=1);

namespace FireflyIII\Repositories\ImportJob;

use FireflyIII\Models\ImportJob;
use FireflyIII\User;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Interface ImportJobRepositoryInterface.
 */
interface ImportJobRepositoryInterface
{
    /**
     * @param string $type
     *
     * @return ImportJob
     */
    public function create(string $type): ImportJob;

    /**
     * Return import file content.
     *
     * @param ImportJob $job
     *
     * @return string
     */
    public function uploadFileContents(ImportJob $job): string;

    /**
     * @param string $key
     *
     * @return ImportJob
     */
    public function findByKey(string $key): ImportJob;

    /**
     * Return configuration of job.
     *
     * @param ImportJob $job
     *
     * @return array
     */
    public function getConfiguration(ImportJob $job): array;

    /**
     * @param ImportJob    $job
     * @param UploadedFile $file
     *
     * @return bool
     */
    public function processConfiguration(ImportJob $job, UploadedFile $file): bool;

    /**
     * @param ImportJob         $job
     * @param null|UploadedFile $file
     *
     * @return bool
     */
    public function processFile(ImportJob $job, ?UploadedFile $file): bool;

    /**
     * @param ImportJob $job
     * @param array     $configuration
     *
     * @return ImportJob
     */
    public function setConfiguration(ImportJob $job, array $configuration): ImportJob;

    /**
     * @param User $user
     */
    public function setUser(User $user);

    /**
     * @param ImportJob $job
     * @param string    $status
     *
     * @return ImportJob
     */
    public function updateStatus(ImportJob $job, string $status): ImportJob;
}

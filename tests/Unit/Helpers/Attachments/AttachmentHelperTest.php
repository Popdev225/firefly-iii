<?php
/**
 * AttachmentHelperTest.php
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

namespace Tests\Unit\Helpers\Attachments;

use Crypt;
use FireflyIII\Helpers\Attachments\AttachmentHelper;
use FireflyIII\Models\Attachment;
use FireflyIII\Models\TransactionJournal;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Log;
use Tests\TestCase;

/**
 * Class AttachmentHelperTest
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class AttachmentHelperTest extends TestCase
{
    /**
     *
     */
    public function setUp(): void
    {
        parent::setUp();
        Log::info(sprintf('Now in %s.', get_class($this)));
    }

    /**
     * @covers  \FireflyIII\Helpers\Attachments\AttachmentHelper
     */
    public function testGetAttachmentLocation(): void
    {
        $attachment = Attachment::first();
        $helper     = new AttachmentHelper;
        $path       = $path = sprintf('%sat-%d.data', DIRECTORY_SEPARATOR, (int)$attachment->id);
        $this->assertEquals($helper->getAttachmentLocation($attachment), $path);
    }

    /**
     * Test invalid mime thing
     *
     * @covers \FireflyIII\Helpers\Attachments\AttachmentHelper
     */
    public function testInvalidMime(): void
    {
        $journal = TransactionJournal::first();
        $helper  = new AttachmentHelper;
        $path    = resource_path('stubs/binary.bin');
        $file    = new UploadedFile($path, 'binary.bin', 'application/octet-stream', filesize($path), null, true);

        $helper->saveAttachmentsForModel($journal, [$file]);
        $errors   = $helper->getErrors();
        $messages = $helper->getMessages();

        $this->assertCount(1, $errors);
        $this->assertCount(0, $messages);
        $this->assertEquals('File "binary.bin" is of type "application/octet-stream" which is not accepted as a new upload.', $errors->first());
    }

    /**
     * Test valid file upload.
     *
     * @covers \FireflyIII\Helpers\Attachments\AttachmentHelper
     */
    public function testSave(): void
    {
        Storage::fake('upload');

        $journal = TransactionJournal::first();
        $helper  = new AttachmentHelper;
        $path    = public_path('apple-touch-icon.png');
        $file    = new UploadedFile($path, 'apple-touch-icon.png', 'image/png', filesize($path), null, true);

        $helper->saveAttachmentsForModel($journal, [$file]);
        $errors      = $helper->getErrors();
        $messages    = $helper->getMessages();
        $attachments = $helper->getAttachments();

        $this->assertCount(0, $errors);
        $this->assertCount(1, $messages);
        $this->assertEquals('Succesfully uploaded file "apple-touch-icon.png".', $messages->first());

        // Assert the file was stored...
        Storage::disk('upload')->assertExists(sprintf('at-%d.data', $attachments->first()->id));
    }

    /**
     * @covers  \FireflyIII\Helpers\Attachments\AttachmentHelper
     */
    public function testSaveAttachmentFromApi(): void
    {
        // mock calls:
        Crypt::shouldReceive('encrypt')->times(1)->andReturn('Some encrypted content');
        Storage::fake('upload');

        $path   = public_path('apple-touch-icon.png');
        $helper = new AttachmentHelper;

        // make new attachment:
        $journal    = $this->user()->transactionJournals()->inRandomOrder()->first();
        $attachment = Attachment::create(
            [
                'attachable_id'   => $journal->id,
                'user_id'         => $this->user()->id,
                'attachable_type' => TransactionJournal::class,
                'md5'             => md5('Hello' . random_int(1, 10000)),
                'filename'        => 'file.txt',
                'title'           => 'Some title',
                'description'     => 'Some descr',
                'mime'            => 'text/plain',
                'size'            => 30,
                'uploaded'        => true,
            ]
        );

        // call helper
        $result = $helper->saveAttachmentFromApi($attachment, file_get_contents($path));

        $this->assertTrue($result);

    }

    /**
     * @covers  \FireflyIII\Helpers\Attachments\AttachmentHelper
     */
    public function testSaveAttachmentFromApiBadMime(): void
    {
        // mock calls:
        Storage::fake('upload');

        $path   = public_path('browserconfig.xml');
        $helper = new AttachmentHelper;

        // make new attachment:
        $journal    = $this->user()->transactionJournals()->inRandomOrder()->first();
        $attachment = Attachment::create(
            [
                'attachable_id'   => $journal->id,
                'user_id'         => $this->user()->id,
                'attachable_type' => TransactionJournal::class,
                'md5'             => md5('Hello' . random_int(1, 10000)),
                'filename'        => 'file.txt',
                'title'           => 'Some title',
                'description'     => 'Some descr',
                'mime'            => 'text/plain',
                'size'            => 30,
                'uploaded'        => true,
            ]
        );

        // call helper
        $result = $helper->saveAttachmentFromApi($attachment, file_get_contents($path));

        $this->assertFalse($result);

    }

    /**
     * Test double file upload. Needs to be after testSave.
     *
     * @covers  \FireflyIII\Helpers\Attachments\AttachmentHelper
     */
    public function testSaveEmpty(): void
    {
        $journal = TransactionJournal::first();
        $helper  = new AttachmentHelper;

        $res = $helper->saveAttachmentsForModel($journal, null);
        $this->assertTrue($res);
    }


    /**
     * Test double file upload. Needs to be after testSave.
     *
     * @covers  \FireflyIII\Helpers\Attachments\AttachmentHelper
     */
    public function testSaveSecond(): void
    {
        $journal = TransactionJournal::first();
        $helper  = new AttachmentHelper;
        $path    = public_path('apple-touch-icon.png');
        $file    = new UploadedFile($path, 'apple-touch-icon.png', 'image/png', filesize($path), null, true);

        $helper->saveAttachmentsForModel($journal, [$file]);
        $errors   = $helper->getErrors();
        $messages = $helper->getMessages();

        $this->assertCount(1, $errors);
        $this->assertCount(0, $messages);
        $this->assertEquals('Uploaded file "apple-touch-icon.png" is already attached to this object.', $errors->first());
    }
}

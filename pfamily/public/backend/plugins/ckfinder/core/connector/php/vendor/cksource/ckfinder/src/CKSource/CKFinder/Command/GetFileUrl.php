<?php

/*
 * CKFinder
 * ========
 * https://ckeditor.com/ckfinder/
 * Copyright (c) 2007-2022, CKSource Holding sp. z o.o. All rights reserved.
 *
 * The software, this file and its contents are subject to the CKFinder
 * License. Please read the license.txt file before using, installing, copying,
 * modifying or distribute this file or part of its contents. The contents of
 * this file is part of the Source Code of CKFinder.
 */

namespace CKSource\CKFinder\Command;

use CKSource\CKFinder\Acl\Permission;
use CKSource\CKFinder\Exception\FileNotFoundException;
use CKSource\CKFinder\Exception\InvalidExtensionException;
use CKSource\CKFinder\Exception\InvalidRequestException;
use CKSource\CKFinder\Filesystem\Folder\WorkingFolder;
use League\Flysystem\FilesystemException;
use Symfony\Component\HttpFoundation\Request;

class GetFileUrl extends CommandAbstract
{
    protected $requires = [Permission::FILE_VIEW];

    /**
     * @throws InvalidExtensionException
     * @throws FileNotFoundException
     * @throws FilesystemException
     * @throws InvalidRequestException
     */
    public function execute(WorkingFolder $workingFolder, Request $request)
    {
        $fileName = (string) $request->get('fileName');
        $thumbnail = (string) $request->get('thumbnail');

        $fileNames = (array) $request->get('fileNames');

        if (!empty($fileNames)) {
            $urls = [];

            foreach ($fileNames as $fileName) {
                $urls[$fileName] = $workingFolder->getFileUrl($fileName);
            }

            return ['urls' => $urls];
        }

        return [
            'url' => $workingFolder->getFileUrl($fileName, $thumbnail),
        ];
    }
}

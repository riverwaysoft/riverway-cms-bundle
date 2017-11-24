<?php

namespace Riverway\Cms\CoreBundle\Service;

use Liip\ImagineBundle\Imagine\Cache\CacheManager;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Iterator\RecursiveDirectoryIterator;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileManager
{
    private $targetDir;
    private $webDir;
    private $cacheManager;
    private $filesystem;

    public function __construct(string $targetDir, string $webDir, CacheManager $cacheManager, Filesystem $filesystem)
    {
        $this->targetDir = stripcslashes($targetDir);
        $this->webDir = stripcslashes($webDir);
        $this->cacheManager = $cacheManager;
        $this->filesystem = $filesystem;
    }

    /**
     * @param UploadedFile $file
     * @return \SplFileInfo
     */
    public function upload(UploadedFile $file): \SplFileInfo
    {
        $webDir = $this->webDir.'/'.(new \DateTime())->format('Y-m-d');
        $targetDir = $this->targetDir.'/'.(new \DateTime())->format('Y-m-d');
        if (!file_exists($targetDir)) {
            mkdir($targetDir);
        }
        $fileName = uniqid().'.'.$file->guessExtension();
        $file->move($targetDir, $fileName);
        $info = new \SplFileInfo($webDir.'/'.$fileName);

        return $info;
    }

    public function remove(string $path)
    {
        $t=$this->targetDir.'/'.$path;
        $this->filesystem->remove($t);
    }

    /**
     * @return array
     */
    public function recursiveFetch(): array
    {
        $res = [];
        $objects = new \RecursiveIteratorIterator(new RecursiveDirectoryIterator($this->targetDir,
            \RecursiveDirectoryIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::LEAVES_ONLY);
        foreach ($objects as $name => $object) {
            if (strstr($name, '.git') !== false) {
                continue;
            }
            $realPath = explode('/web', $name)[1];
            $r = [];
            $r['image'] = $this->cacheManager->getBrowserPath($realPath, 'normal');
            $r['id'] = $object->getRelativePathname();
            $r['thumb'] = $this->cacheManager->getBrowserPath($realPath, 'thumb');
            $r['real_path'] = $realPath;
            $res[] = $r;
        }

        return $res;

    }
}
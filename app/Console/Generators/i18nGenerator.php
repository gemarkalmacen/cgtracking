<?php

namespace App\Console\Generators;

use Illuminate\Filesystem\Filesystem as File;

class i18nGenerator
{
    protected $file;

    public function __construct()
    {   
        $this->file = new File();
    }

    public function run($target, $path)
    {
        // prepare directory if not exist
        $this->prepareTarget($target);
        $this->core($target, $path);        
    }

    private function prepareTarget($target)
    {
        $dirname = dirname($target);
        if (!$this->file->exists($target)) {
            $this->file->makeDirectory($target, 0755, true);
        }
    }

    private function core($target, $path)
    {
        // iterate translation files
        $messages = [];
        foreach ($this->file->allFiles($path) as $file) {
            $pathName = $file->getRelativePathName();
            $extension = $this->file->extension($pathName);

            if ($extension != 'php') {
                continue;
            }

            // format path for json keys
            $key = substr($pathName, 0, -4);
            $key = str_replace(DIRECTORY_SEPARATOR, '/', $key);
            $key = preg_replace('/\//', '.', $key, 1);
            $fullPath = $path.DIRECTORY_SEPARATOR.$pathName;

            // assign translations per locale-file
            $parts = explode('.', $key);
            $messages[$parts[0]][$parts[1]] = include $fullPath;
        }

        foreach($messages as $locale => $content) {
            $template = str_replace('\'{ messages }\'', json_encode($content), "export default '{ messages }';");
            $template = preg_replace('/(:)(\w+)/', '{${2}}', $template); // wrap attributes with {}
            $this->file->put($target.$locale.'.js', $template);
        }
    }
}
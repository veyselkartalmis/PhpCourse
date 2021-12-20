<?php

    class File {
        public static $fileName;
        public static function Create($fileName, $text)
        {
            self::$fileName = $fileName;
            $file = fopen($fileName, 'w+');
            fwrite($file, $text);
            fclose($file);
        }
        public function Read($fileName = null)
        {
            if (!$fileName) $fileName = self::$fileName;
            return file_get_contents($fileName);
        }
    }

    File::Create('a.txt', 'Veysel Kartalmış');
    //echo File::Read();

    $file = new File;
    echo $file->Read();

?>
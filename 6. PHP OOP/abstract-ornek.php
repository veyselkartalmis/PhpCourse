<?php

    abstract class Plugin
    {
        abstract public function setTitle($title); //abstract eklenince muhakkak bundan üretilenlerde
        abstract public function setContent($content); //bu fonksiyonlardan olmak zorunda.
        public function show(){ //bu fonksiyon hepsinde içeriği ortak olacağı için abstract yapmadım
            echo "<div class='plugin'>
            <h1>". $this->title ."</h1>
            <p>". $this->content ."</p>
            </div>";
        }
    }

    class LastComments extends Plugin{
        public function setTitle($title){
            $this->title = $title;
        }
        public function setContent($content){
            $this->content = $content;
        }
    }

    class SocialMedia extends Plugin{
        public function setTitle($title){
            $this->title = $title;
        }
        public function setContent($content){
            $this->content = $content;
        }
    }

    $comments = new LastComments;
    $comments->setTitle("Son Yorumlar");
    $comments->setContent("burada son yorumlar yer alacak");

    $social = new SocialMedia;
    $social->setTitle("Sosyal Medya");
    $social->setContent("sosyal medya linkleri burada olacak");

    echo $comments->show();
    echo $social->show();


?>
<?php class book{
    public $title;
    public function read(){
        echo "ahmed read $this->title now ";
    }
}
$t1=new book ();
$t1->title="story";
$t1->read() ;?>
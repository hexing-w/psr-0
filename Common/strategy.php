<?php
interface UserStrategy
{
    function showAd();
    function showCategory();
}


class FemaleUser implements UserStrategy
{
    function showAd(){
        echo "2016冬季女装";
    }
    function showCategory(){
        echo "女装";
    }
}

class MaleUser implements UserStrategy
{
    function showAd(){
        echo "IPhone6s";
    }
    function showCategory(){
        echo "电子产品";
    }
}

class Page
{
    protected $strategy;
    function index(){
        echo "AD";
        $this->strategy->showAd();
        echo "<br>";
        echo "Category";
        $this->strategy->showCategory();
        echo "<br>";
    }
    function setStrategy(UserStrategy $strategy){
        $this->strategy=$strategy;
    }
}

$page = new Page();
if(isset($_GET['male'])){
    $strategy = new MaleUser();
}else {
    $strategy = new FemaleUser();
}
$page->setStrategy($strategy);
$page->index();

<?php
    class ParentClass{
        public $sub1;
        public $sub2;
        public $sub3;

        function __construct($p, $c, $m){
            $this->sub1 = $p;
            $this->sub2 = $c;
            $this->sub3 = $m;
        }
    } 
?>

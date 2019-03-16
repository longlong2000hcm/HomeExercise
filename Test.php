<html>
<head>
</head>
<body>
<?php
    class Person {
    private $fn;
    private $ln;
    public function getFn()
    {
        return $this->fn;
    }

    public function setFn($fn)
    {
        $this->fn = $fn;

        return $this;
    }

    public function getLn()
    {
        return $this->ln;
    }

    public function setLn($ln)
    {
        $this->ln = $ln;

        return $this;
    }
    public function print_properties() {
      echo $this->fn.' '.$this->ln;
    }
  }
  $aPerson = new Person();
  $aPerson->setFn('Long');
  $aPerson->setLn('Vo');
  $aPerson->print_properties();
?>
</body>
</html>

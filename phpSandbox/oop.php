<?php
    class Queer{
        private $name;
        private $bar;
        
        public function __construct($name, $bar)
        {
            $this->name = $name;
            $this->bar = $bar;
            echo "A beautiful" . __CLASS__ . "was born<br>";
        }

        public function setName($name) {
            $this->name = $name;
        }
        public function getName() {
            return $this->name;
        }
        public function setBar($bar) {
            $this->bar = $bar;
        }
        public function getBar() {
            return $this->bar;
        }
        
    }

    class Diva extends Queer{
        private $vibe;
        public function __construct($name, $bar, $vibe){
            parent:: __construct($name, $bar, $vibe);
            $this->vibe = $vibe;
            // echo "Introducing a new" . __CLASS__;
        }

        public function setVibe($vibe) {
            $this->vibe = $vibe;
        }
        public function getVibe() {
            return $this->vibe;
        }

    }

    if(filter_has_var(INPUT_POST, 'diva')){
        // Get form data
        $userName = htmlspecialchars($_POST['name']); 
        $userBar = htmlspecialchars($_POST['bar']); 
        
        $queer2 = new Diva ($userName, $userBar, 'Fierce');
        // echo $queer2->getVibe();
        echo "" . $queer2->getVibe() . " " . $queer2->getName() . "'s  favorite bar is ". $queer2->getBar() . "!";
    }
    
    if(filter_has_var(INPUT_POST, 'submit')){
        // Get form data
        $userName = htmlspecialchars($_POST['name']); 
        $userBar = htmlspecialchars($_POST['bar']); 
        
        $queer1 = new Queer ($userName, $userBar);

        echo " " . $queer1->getName() . "'s  favorite bar is ". $queer1->getBar() . "!";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css" >
    <title>Write Your Story</title>
</head>
<body>
    <div>
        <h1>Edit your story</h1>
        <div style="width: 70%; margin-left: 10%" class="conatiner">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <lable>Name</lable>
                <input class="form-control" type="text" name="name">
                <lable>Fav Bar</lable>
                <input class="form-control" type="text" name="bar">
                <button type="diva" name="diva" value="diva" class="btn btn-primary">Diva me</button>
                <button type="button" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    
</body>
</html>
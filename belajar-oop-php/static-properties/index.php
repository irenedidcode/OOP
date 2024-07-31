<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <?php
        class ParentClass {
            public static $judul = "hai saya properti static " . __CLASS__;

            public function display(){
                echo self::$judul;
            }
        }

        class ChildClass extends ParentClass {
            public static $judul = "hai " . __CLASS__;

            public function display(){
                echo parent::$judul;
            }
        }

        $obj = new ParentClass;
        $obj2 = new ChildClass;
    ?>

    <h1><?php echo ChildClass::$judul ?> Testing </h1>
    <h1><?php echo $obj->display() ?></h1>
    <h1><?php echo $obj2->display() ?></h1>


</body>
</html>
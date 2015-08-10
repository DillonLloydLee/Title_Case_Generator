<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_makeTitleCase_oneWord()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowulf";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf", $result);
        }

        function test_makeTitleCase_multipleWords()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowulf is great";

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("Beowulf Is Great", $result);

        }
    }



 ?>

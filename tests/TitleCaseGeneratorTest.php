<?php

    require_once "src/TitleCaseGenerator.php";  // opens class

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase  {    // Class declaration, extends means it's a special test class

        function test_makeTitleCase_oneWord()  // method to run 1st test
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
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "the little mermaid";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("The Little Mermaid", $result);
        }
    }

?>

<?php
    class TitleCaseGenerator {

      function makeTitleCase($input_title) {  // we'll pass in a sentence argument
          $input_array_of_words = explode(" ", $input_title);
          $output_title_case = [];

          foreach ($input_array_of_words as $word) {
            array_push($output_title_case, ucfirst($word));
          }

          return implode(" ", $output_title_case); // turns array into string
      }
    }
?>

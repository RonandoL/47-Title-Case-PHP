<?php
    class TitleCaseGenerator {

      // using this method to change title case
      function makeTitleCase($input_string) {  // we'll pass in a sentence argument
          $input_string = strtolower($input_string);     // makes input lowercase, standardized
          $input_array = explode(" ", $input_string);  // create array from string
          $dont_capitalize = ["a", "at", "by", "an", "the", "and", "but", "or", "of", "for", "nor", "on", "at", "to", "from"];
          $output_title_case = [];

          foreach ($input_array as $word) {
              if (array_search($word, $dont_capitalize)) {  // if word matches, push
                  array_push($output_title_case, $word);
              } else {
                  array_push($output_title_case, ucfirst($word));  // if not, cap & push
              }
          }

          $first_word = array_shift($output_title_case);
          $first_word = ucfirst($first_word);
          array_unshift($output_title_case, $first_word);




          return implode(" ", $output_title_case); // turns array into string
      }
    }
?>

<!-- Bootstrap core CSS -->
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> <!-- vendor/bootstrap/css/bootstrap.min.css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- vendor/bootstrap/css/bootstrap.min.css -->

<!-- Custom fonts for this template -->
<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet"> <!-- vendor/fontawesome-free/css/all.min.css -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"> <!-- vendor/fontawesome-free/css/all.min.css -->
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../css/grayscale.min.css" rel="stylesheet">

<section id="quiz_process" class="projects-section bg-light">
  <div class="container">

    <?php
    # Retrieving Quiz 1 Answers

    $q1_ques1_ans = $_POST['q1_ques1_ans'];
    $q1_ques2_ans = $_POST['q1_ques2_ans'];
    $q1_ques3_ans = $_POST['q1_ques3_ans'];
    $q1_ques4_ans = $_POST['q1_ques4_ans'];
    $q1_ques5_ans = $_POST['q1_ques5_ans'];
    $q1_ques6_ans = $_POST['q1_ques6_ans'];
    $q1_ques7_ans = $_POST['q1_ques7_ans'];
    $q1_ques8_ans = $_POST['q1_ques8_ans'];
    $q1_ques9_ans = $_POST['q1_ques9_ans'];
    $q1_ques10_ans = $_POST['q1_ques10_ans'];

    $score = 0;

    # Checking Quiz 1 Answers

    if ($q1_ques1_ans == "A") {
      $score++;
    }
    if ($q1_ques2_ans == "D") {
      $score++;
    }
    if ($q1_ques3_ans == "C") {
      $score++;
    }
    if ($q1_ques4_ans == "C") {
      $score++;
    }
    if ($q1_ques5_ans == "C") {
      $score++;
    }
    if ($q1_ques6_ans == "D") {
      $score++;
    }
    if ($q1_ques7_ans == "D") {
      $score++;
    }
    if ($q1_ques8_ans == "B") {
      $score++;
    }
    if ($q1_ques9_ans == "B") {
      $score++;
    }
    if ($q1_ques10_ans == "A") {
      $score++;
    }

    # Echo the different Grade's string 
    if ($score >= 1 && $score <= 3) {
      echo "<div class=\"container display-4 font-italic text-center\">Hmm... please go and study!</div>";
    }
    if ($score >= 4 && $score <= 5) {
      echo "<div class=\"container display-4 font-italic text-center\">Okay, you should try harder!</div>";
    }
    if ($score >= 6 && $score <= 7) {
      echo "Good Job! ";
    }
    if ($score >= 8 && $score <= 10) {
      echo "<div class=\"container display-4 font-italic text-center\">Wow! Good job!</div>";
    }
    if ($score == 0) {
      echo "<div class=\"container display-4 font-italic text-center\">Have you even tried?</div>";
    }

    echo "<div class=\"container text-center\">
        <h3 class=\"font-weight-bold mt-5\"> Your have scored: </h3> 
          
          <h1 class=\"display-3 font-weight-bold\"> $score / 10 <h1>
          
        </div>"
    ?>

    <!-- Try again button -->
    <div class="container mt-5 text-center">
      <a href="../index.php" class="btn btn-primary js-scroll-trigger">Try again?</a>
    </div>
  </div>



  <!-- Display chosen answers history -->
  <section id="quiz_history" class="projects-section bg-light">
    <div class="container">

      <!-- # Question 1 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 1</kbd></small>
        <h3 class="mt-4"> Which of the following is used to declare a constant?</h3>

        <?php

        # Question 1 Array
        $q1_ques1_ans_array = array(
          "A" => "const",
          "B" => "define",
          "C" => "constant",
          "D" => "#pragma"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q1_ques1_ans'] == "A" && $_POST['q1_ques1_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques1_ans_array['A'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q1_ques1_ans'] != "A" && $_POST['q1_ques1_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q1_ques1_ans_array[$_POST['q1_ques1_ans']];
          }
          # Display correct answer
          if ($_POST['q1_ques1_ans'] != "A" && $_POST['q1_ques1_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques1_ans_array['A'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q1_ques1_ans'] != "A" && $_POST['q1_ques1_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q1_ques1_ans'] != "A" && $_POST['q1_ques1_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques1_ans_array['A'] . "</h5>";
          }
        }
        ?>
      </div>

      <!-- # Question 2 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 2</kbd></small>
        <h3 class="mt-4">Which of the following is the way to create comments in PHP?</h3>

        <?php

        # Question 1 Array
        $q1_ques2_ans_array = array(
          "A" => "// commented code to end of line",
          "B" => "/* commented code here */",
          "C" => "# commented code to end of line",
          "D" => "All of the above"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q1_ques2_ans'] == "D" && $_POST['q1_ques2_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques2_ans_array['D'] . "<br><br>" . $q1_ques2_ans_array['A'] . "<br>" . $q1_ques2_ans_array['B'] . "<br>" . $q1_ques2_ans_array['C'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q1_ques2_ans'] != "D" && $_POST['q1_ques2_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q1_ques2_ans_array[$_POST['q1_ques2_ans']];
          }
          # Display correct answer
          if ($_POST['q1_ques2_ans'] != "D" && $_POST['q1_ques2_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques2_ans_array['D'] . "<br><br>" . $q1_ques2_ans_array['A'] . "<br>" . $q1_ques2_ans_array['B'] . "<br>" . $q1_ques2_ans_array['C'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q1_ques2_ans'] != "D" && $_POST['q1_ques2_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q1_ques2_ans'] != "D" && $_POST['q1_ques2_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques2_ans_array['D'] . "<br><br>" . $q1_ques2_ans_array['A'] . "<br>" . $q1_ques2_ans_array['B'] . "<br>" . $q1_ques2_ans_array['C'] . "</h5>";
          }
        }
        ?>
      </div>

      <!-- # Question 3 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 3</kbd></small>
        <h3 class="mt-4">What does PHP stand for?</h3>

        <?php

        # Question 3 Array
        $q1_ques3_ans_array = array(
          "A" => "Preprocessed Hypertext Page",
          "B" => "Hypertext Markup Language",
          "C" => "PHP: Hypertext Preprocessor",
          "D" => "Hypertext Transfer Protocol"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q1_ques3_ans'] == "C" && $_POST['q1_ques3_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques3_ans_array['C'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q1_ques3_ans'] != "C" && $_POST['q1_ques3_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q1_ques3_ans_array[$_POST['q1_ques3_ans']];
          }
          # Display correct answer
          if ($_POST['q1_ques3_ans'] != "C" && $_POST['q1_ques3_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques3_ans_array['C'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q1_ques3_ans'] != "C" && $_POST['q1_ques3_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q1_ques3_ans'] != "C" && $_POST['q1_ques3_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques3_ans_array['C'] . "</h5>";
          }
        }
        ?>
      </div>

      <!-- # Question 4 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 4</kbd></small>
        <h3 class="mt-4">Which of the following is NOT a valid PHP comparison operator?</h3>

        <?php

        # Question 4 Array
        $q1_ques4_ans_array = array(
          "A" => "!=",
          "B" => ">=",
          "C" => "<=>",
          "D" => "<>"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q1_ques4_ans'] == "C" && $_POST['q1_ques4_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques4_ans_array['C'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q1_ques4_ans'] != "C" && $_POST['q1_ques4_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q1_ques4_ans_array[$_POST['q1_ques4_ans']];
          }
          # Display correct answer
          if ($_POST['q1_ques4_ans'] != "C" && $_POST['q1_ques4_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques4_ans_array['C'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q1_ques4_ans'] != "C" && $_POST['q1_ques4_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q1_ques4_ans'] != "C" && $_POST['q1_ques4_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques4_ans_array['C'] . "</h5>";
          }
        }
        ?>
      </div>

      <!-- # Question 5 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 5</kbd></small>
        <h3 class="mt-4">Which of the following is NOT a magic predefined constant?</h3>

        <?php

        # Question 5 Array
        $q1_ques5_ans_array = array(
          "A" => "__LINE__",
          "B" => "__FILE__",
          "C" => "__DATE__",
          "D" => "__CLASS__"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q1_ques5_ans'] == "C" && $_POST['q1_ques5_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques5_ans_array['C'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q1_ques5_ans'] != "C" && $_POST['q1_ques5_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q1_ques5_ans_array[$_POST['q1_ques5_ans']];
          }
          # Display correct answer
          if ($_POST['q1_ques5_ans'] != "C" && $_POST['q1_ques5_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques5_ans_array['C'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q1_ques5_ans'] != "C" && $_POST['q1_ques5_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q1_ques5_ans'] != "C" && $_POST['q1_ques5_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques5_ans_array['C'] . "</h5>";
          }
        }
        ?>
      </div>

      <!-- # Question 6 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 6</kbd></small>
        <h3 class="mt-4">What is the strpos() function used for?</h3>

        <?php

        # Question 6 Array
        $q1_ques6_ans_array = array(
          "A" => "Search for numbers within a string",
          "B" => "Locate position of a string’s first character",
          "C" => "Find the last character of a string",
          "D" => "Find the position of the first occurrence of a string"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q1_ques6_ans'] == "D" && $_POST['q1_ques6_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques6_ans_array['D'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q1_ques6_ans'] != "D" && $_POST['q1_ques6_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q1_ques6_ans_array[$_POST['q1_ques6_ans']];
          }
          # Display correct answer
          if ($_POST['q1_ques6_ans'] != "D" && $_POST['q1_ques6_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques6_ans_array['D'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q1_ques6_ans'] != "D" && $_POST['q1_ques6_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q1_ques6_ans'] != "D" && $_POST['q1_ques6_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques6_ans_array['D'] . "</h5>";
          }
        }
        ?>
      </div>

      <!-- # Question 7 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 7</kbd></small>
        <h3 class="mt-4">Which of the following differences are valid between PHP 4 and PHP 5?</h3>

        <?php

        # Question 7 Array
        $q1_ques7_ans_array = array(
          "A" => "Built-in native support for SQLite",
          "B" => "Improved MySQL support",
          "C" => "Support for inheritance",
          "D" => "Both a and b"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q1_ques7_ans'] == "D" && $_POST['q1_ques7_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques7_ans_array['D'] . "<br><br>" . $q1_ques7_ans_array['A'] . "<br>" . $q1_ques7_ans_array['B'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q1_ques7_ans'] != "D" && $_POST['q1_ques7_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q1_ques7_ans_array[$_POST['q1_ques7_ans']];
          }
          # Display correct answer
          if ($_POST['q1_ques7_ans'] != "D" && $_POST['q1_ques7_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques7_ans_array['D'] . "<br><br>" . $q1_ques7_ans_array['A'] . "<br>" . $q1_ques7_ans_array['B'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q1_ques7_ans'] != "D" && $_POST['q1_ques7_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q1_ques7_ans'] != "D" && $_POST['q1_ques7_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques7_ans_array['D'] . "<br><br>" . $q1_ques7_ans_array['A'] . "<br>" . $q1_ques7_ans_array['B'] . "</h5>";
          }
        }
        ?>
      </div>

      <!-- # Question 8 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 8</kbd></small>
        <h3 class="mt-4">Which function is used to strip whitespace (or other characters) from the beginning and end of a string?</h3>

        <?php

        # Question 8 Array
        $q1_ques8_ans_array = array(
          "A" => "trim_str",
          "B" => "trim",
          "C" => "strip",
          "D" => "strip_str"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q1_ques8_ans'] == "B" && $_POST['q1_ques8_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques8_ans_array['B'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q1_ques8_ans'] != "B" && $_POST['q1_ques8_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q1_ques8_ans_array[$_POST['q1_ques8_ans']];
          }
          # Display correct answer
          if ($_POST['q1_ques8_ans'] != "B" && $_POST['q1_ques8_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques8_ans_array['B'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q1_ques8_ans'] != "B" && $_POST['q1_ques8_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q1_ques8_ans'] != "B" && $_POST['q1_ques8_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques8_ans_array['B'] . "</h5>";
          }
        }
        ?>
      </div>

      <!-- # Question 9 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 9</kbd></small>
        <h3 class="mt-4">How do I create PHP arrays in a HTML < form>?</h3>

        <?php

        # Question 9 Array
        $q1_ques9_ans_array = array(
          "A" => "< input name= MyArray[]/>",
          "B" => "< input name=\"MyArray[]\" />",
          "C" => "< input =\"MyArray[]\" />",
          "D" => "< input MyArray[] />"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q1_ques9_ans'] == "B" && $_POST['q1_ques9_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques9_ans_array['B'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q1_ques9_ans'] != "B" && $_POST['q1_ques9_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q1_ques9_ans_array[$_POST['q1_ques9_ans']];
          }
          # Display correct answer
          if ($_POST['q1_ques9_ans'] != "B" && $_POST['q1_ques9_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques9_ans_array['B'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q1_ques9_ans'] != "B" && $_POST['q1_ques9_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q1_ques9_ans'] != "B" && $_POST['q1_ques9_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques9_ans_array['B'] . "</h5>";
          }
        }
        ?>
      </div>

      <!-- # Question 10 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 10</kbd></small>
        <h3 class="mt-4">What is the difference between GET and POST method?</h3>

        <?php

        # Question 10 Array
        $q1_ques10_ans_array = array(
          "A" => "GET displays the form values entered in the URL of the address bar where as POST does not",
          "B" => "POST displays the form values entered in the URL of the address bar where as GET does not",
          "C" => "There is no difference",
          "D" => "Both a and b"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q1_ques10_ans'] == "A" && $_POST['q1_ques10_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques10_ans_array['A'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q1_ques10_ans'] != "A" && $_POST['q1_ques10_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q1_ques10_ans_array[$_POST['q1_ques10_ans']];
          }
          # Display correct answer
          if ($_POST['q1_ques10_ans'] != "A" && $_POST['q1_ques10_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques10_ans_array['A'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q1_ques10_ans'] != "A" && $_POST['q1_ques10_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q1_ques10_ans'] != "A" && $_POST['q1_ques10_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q1_ques10_ans_array['A'] . "</h5>";
          }
        }
        ?>
      </div>

      <br>
      <!-- Try again button -->
      <div class="container mt-5 text-center">
        <a href="../index.php" class="btn btn-primary js-scroll-trigger">Try again?</a>
      </div>
    </div>


    </div>
  </section>

  <!-- Sign up Section -->
  <?php include './sign_up.php' ?>

  <!-- Footer -->
  <?php include './footer.php' ?>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../js/grayscale.min.js"></script>
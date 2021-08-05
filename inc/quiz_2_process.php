<!-- Bootstrap core CSS -->
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> <!-- vendor/bootstrap/css/bootstrap.min.css -->

<!-- Custom fonts for this template -->
<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet"> <!-- vendor/fontawesome-free/css/all.min.css -->
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../css/grayscale.min.css" rel="stylesheet">

<section id="quiz_process" class="projects-section bg-light">
  <div class="container">

    <?php

    # Retrieving Quiz 2 Answers

    $q2_ques1_ans = $_POST['q2_ques1_ans'];
    $q2_ques2_ans = $_POST['q2_ques2_ans'];
    $q2_ques3_ans = $_POST['q2_ques3_ans'];
    $q2_ques4_ans = $_POST['q2_ques4_ans'];
    $q2_ques5_ans = $_POST['q2_ques5_ans'];
    $q2_ques6_ans = $_POST['q2_ques6_ans'];
    $q2_ques7_ans = $_POST['q2_ques7_ans'];
    $q2_ques8_ans = $_POST['q2_ques8_ans'];
    $q2_ques9_ans = $_POST['q2_ques9_ans'];
    $q2_ques10_ans = $_POST['q2_ques10_ans'];

    $score = 0;

    # Checking Quiz 2 Answers

    if ($q2_ques1_ans == "C") {
      $score++;
    }
    if ($q2_ques2_ans == "C") {
      $score++;
    }
    if ($q2_ques3_ans == "D") {
      $score++;
    }
    if ($q2_ques4_ans == "D") {
      $score++;
    }
    if ($q2_ques5_ans == "B") {
      $score++;
    }
    if ($q2_ques6_ans == "C") {
      $score++;
    }
    if ($q2_ques7_ans == "D") {
      $score++;
    }
    if ($q2_ques8_ans == "A") {
      $score++;
    }
    if ($q2_ques9_ans == "C") {
      $score++;
    }
    if ($q2_ques10_ans == "C") {
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
        <h3 class="mt-4">What does HTML stands for?</h3>

        <?php

        # Question 1 Array
        $q2_ques1_ans_array = array(
          "A" => "Hypertext Machine language",
          "B" => "Hypertext and links markup language",
          "C" => "Hypertext Markup Language",
          "D" => "Hightext machine language"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q2_ques1_ans'] == "C" && $_POST['q2_ques1_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques1_ans_array['C'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q2_ques1_ans'] != "C" && $_POST['q2_ques1_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q2_ques1_ans_array[$_POST['q2_ques1_ans']];
          }
          # Display correct answer
          if ($_POST['q2_ques1_ans'] != "C" && $_POST['q2_ques1_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques1_ans_array['C'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q2_ques1_ans'] != "C" && $_POST['q2_ques1_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q2_ques1_ans'] != "C" && $_POST['q2_ques1_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques1_ans_array['C'] . "</h5>";
          }
        }
        ?>
      </div>

      <!-- # Question 2 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 2</kbd></small>
        <h3 class="mt-4">How is document type initialized in HTML5.?</h3>

        <?php

        # Question 2 Array
        $q2_ques2_ans_array = array(
          "A" => "< /DOCTYPE HTML >",
          "B" => "< /DOCTYPE >",
          "C" => "< !DOCTYPE HTML >",
          "D" => "< /DOCTYPE html >"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q2_ques2_ans'] == "C" && $_POST['q2_ques2_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques2_ans_array['C'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q2_ques2_ans'] != "C" && $_POST['q2_ques2_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q2_ques2_ans_array[$_POST['q2_ques2_ans']];
          }
          # Display correct answer
          if ($_POST['q2_ques2_ans'] != "C" && $_POST['q2_ques2_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques2_ans_array['C'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q2_ques2_ans'] != "C" && $_POST['q2_ques2_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q2_ques2_ans'] != "C" && $_POST['q2_ques2_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques2_ans_array['C'] . "</h5>";
          }
        }
        ?>
      </div>

      <!-- # Question 3 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 3</kbd></small>
        <h3 class="mt-4">Which of the following HTML Elements is used for making any text bold ?</h3>

        <?php

        # Question 3 Array
        $q2_ques3_ans_array = array(
          "A" => "< p >",
          "B" => "< i >",
          "C" => "< li >",
          "D" => "< b >"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q2_ques3_ans'] == "D" && $_POST['q2_ques3_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques3_ans_array['D'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q2_ques3_ans'] != "D" && $_POST['q2_ques3_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q2_ques3_ans_array[$_POST['q2_ques3_ans']];
          }
          # Display correct answer
          if ($_POST['q2_ques3_ans'] != "D" && $_POST['q2_ques3_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques3_ans_array['D'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q2_ques3_ans'] != "D" && $_POST['q2_ques3_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q2_ques3_ans'] != "D" && $_POST['q2_ques3_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques3_ans_array['D'] . "</h5>";
          }
        }
        ?>
      </div>

      <!-- # Question 4 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 4</kbd></small>
        <h3 class="mt-4">Which of the following HTML element is used for creating an unordered list?</h3>

        <?php

        # Question 4 Array
        $q2_ques4_ans_array = array(
          "A" => "< ui >",
          "B" => "< i >",
          "C" => "< em >",
          "D" => "< ul >"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q2_ques4_ans'] == "D" && $_POST['q2_ques4_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques4_ans_array['D'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q2_ques4_ans'] != "D" && $_POST['q2_ques4_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q2_ques4_ans_array[$_POST['q2_ques4_ans']];
          }
          # Display correct answer
          if ($_POST['q2_ques4_ans'] != "D" && $_POST['q2_ques4_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques4_ans_array['D'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q2_ques4_ans'] != "D" && $_POST['q2_ques4_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q2_ques4_ans'] != "D" && $_POST['q2_ques4_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques4_ans_array['D'] . "</h5>";
          }
        }
        ?>
      </div>

      <!-- # Question 5 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 5</kbd></small>
        <h3 class="mt-4">Which of the following characters indicate closing of a tag?</h3>

        <?php

        # Question 5 Array
        $q2_ques5_ans_array = array(
          "A" => ".",
          "B" => "/",
          "C" => "\ ",
          "D" => "!"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q2_ques5_ans'] == "B" && $_POST['q2_ques5_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques5_ans_array['B'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q2_ques5_ans'] != "B" && $_POST['q2_ques5_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q2_ques5_ans_array[$_POST['q2_ques5_ans']];
          }
          # Display correct answer
          if ($_POST['q2_ques5_ans'] != "B" && $_POST['q2_ques5_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques5_ans_array['B'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q2_ques5_ans'] != "B" && $_POST['q2_ques5_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q2_ques5_ans'] != "B" && $_POST['q2_ques5_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques5_ans_array['B'] . "</h5>";
          }
        }
        ?>
      </div>

      <!-- # Question 6 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 6</kbd></small>
        <h3 class="mt-4">What is the font-size of the h1 heading tag?</h3>

        <?php

        # Question 6 Array
        $q2_ques6_ans_array = array(
          "A" => "3.5 em",
          "B" => "2.17 em",
          "C" => "2 em",
          "D" => "1.5 em"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q2_ques6_ans'] == "C" && $_POST['q2_ques6_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques6_ans_array['C'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q2_ques6_ans'] != "C" && $_POST['q2_ques6_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q2_ques6_ans_array[$_POST['q2_ques6_ans']];
          }
          # Display correct answer
          if ($_POST['q2_ques6_ans'] != "C" && $_POST['q2_ques6_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques6_ans_array['C'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q2_ques6_ans'] != "C" && $_POST['q2_ques6_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q2_ques6_ans'] != "C" && $_POST['q2_ques6_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques6_ans_array['C'] . "</h5>";
          }
        }
        ?>
      </div>

      <!-- # Question 7 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 7</kbd></small>
        <h3 class="mt-4">How many heading tags are there in HTML5?</h3>

        <?php

        # Question 7 Array
        $q2_ques7_ans_array = array(
          "A" => "2",
          "B" => "3",
          "C" => "5",
          "D" => "6"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q2_ques7_ans'] == "D" && $_POST['q2_ques7_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques7_ans_array['D'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q2_ques7_ans'] != "D" && $_POST['q2_ques7_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q2_ques7_ans_array[$_POST['q2_ques7_ans']];
          }
          # Display correct answer
          if ($_POST['q2_ques7_ans'] != "D" && $_POST['q2_ques7_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques7_ans_array['D'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q2_ques7_ans'] != "D" && $_POST['q2_ques7_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q2_ques7_ans'] != "D" && $_POST['q2_ques7_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques7_ans_array['D'] . "</h5>";
          }
        }
        ?>
      </div>

      <!-- # Question 8 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 8</kbd></small>
        <h3 class="mt-4">How many attributes are there in HTML5?</h3>

        <?php

        # Question 8 Array
        $q2_ques8_ans_array = array(
          "A" => "2",
          "B" => "4",
          "C" => "1",
          "D" => "5"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q2_ques8_ans'] == "A" && $_POST['q2_ques8_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques8_ans_array['A'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q2_ques8_ans'] != "A" && $_POST['q2_ques8_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q2_ques8_ans_array[$_POST['q2_ques8_ans']];
          }
          # Display correct answer
          if ($_POST['q2_ques8_ans'] != "A" && $_POST['q2_ques8_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques8_ans_array['A'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q2_ques8_ans'] != "A" && $_POST['q2_ques8_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q2_ques8_ans'] != "A" && $_POST['q2_ques8_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques8_ans_array['A'] . "</h5>";
          }
        }
        ?>
      </div>

      <!-- # Question 9 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 9</kbd></small>
        <h3 class="mt-4">Which of the following attributes is used to add link to any element?</h3>

        <?php

        # Question 9 Array
        $q2_ques9_ans_array = array(
          "A" => "link",
          "B" => "ref",
          "C" => "href",
          "D" => "newref"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q2_ques9_ans'] == "C" && $_POST['q2_ques9_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques9_ans_array['C'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q2_ques9_ans'] != "C" && $_POST['q2_ques9_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q2_ques9_ans_array[$_POST['q2_ques9_ans']];
          }
          # Display correct answer
          if ($_POST['q2_ques9_ans'] != "C" && $_POST['q2_ques9_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques9_ans_array['C'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q2_ques9_ans'] != "C" && $_POST['q2_ques9_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q2_ques9_ans'] != "C" && $_POST['q2_ques9_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques9_ans_array['C'] . "</h5>";
          }
        }
        ?>
      </div>

      <!-- # Question 10 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 10</kbd></small>
        <h3 class="mt-4">Which of the following is the correct way of creating an hyperlink in HTML?</h3>

        <?php

        # Question 10 Array
        $q2_ques10_ans_array = array(
          "A" => "< a>www.geeksforgeeks.org < Geeksforgeeks /a>",
          "B" => "< a href=“www.geeksforgeeks.org” Geeksforgeeks /a>",
          "C" => "< a href= “www.geeksforgeeks.org”>Geeksforgeeks< /a>",
          "D" => "< a link=“www.geeksforgeeks.org” Geeksforgeeks> < /a>"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q2_ques10_ans'] == "C" && $_POST['q2_ques10_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques10_ans_array['C'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q2_ques10_ans'] != "C" && $_POST['q2_ques10_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q2_ques10_ans_array[$_POST['q2_ques10_ans']];
          }
          # Display correct answer
          if ($_POST['q2_ques10_ans'] != "C" && $_POST['q2_ques10_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques10_ans_array['C'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q2_ques10_ans'] != "C" && $_POST['q2_ques10_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q2_ques10_ans'] != "C" && $_POST['q2_ques10_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q2_ques10_ans_array['C'] . "</h5>";
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
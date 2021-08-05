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

    # Retrieving Quiz 3 Answers

    $q3_ques1_ans = $_POST['q3_ques1_ans'];
    $q3_ques2_ans = $_POST['q3_ques2_ans'];
    $q3_ques3_ans = $_POST['q3_ques3_ans'];
    $q3_ques4_ans = $_POST['q3_ques4_ans'];
    $q3_ques5_ans = $_POST['q3_ques5_ans'];
    $q3_ques6_ans = $_POST['q3_ques6_ans'];
    $q3_ques7_ans = $_POST['q3_ques7_ans'];
    $q3_ques8_ans = $_POST['q3_ques8_ans'];
    $q3_ques9_ans = $_POST['q3_ques9_ans'];
    $q3_ques10_ans = $_POST['q3_ques10_ans'];

    $score = 0;

    # Checking Quiz 3 Answers

    if ($q3_ques1_ans == "A") {
      $score++;
    }
    if ($q3_ques2_ans == "B") {
      $score++;
    }
    if ($q3_ques3_ans == "D") {
      $score++;
    }
    if ($q3_ques4_ans == "C") {
      $score++;
    }
    if ($q3_ques5_ans == "B") {
      $score++;
    }
    if ($q3_ques6_ans == "C") {
      $score++;
    }
    if ($q3_ques7_ans == "A") {
      $score++;
    }
    if ($q3_ques8_ans == "B") {
      $score++;
    }
    if ($q3_ques9_ans == "C") {
      $score++;
    }
    if ($q3_ques10_ans == "C") {
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
        <h3 class="mt-4">If we want define a style for an unique element, which css selector will we use ?</h3>

        <?php

        # Question 1 Array
        $q3_ques1_ans_array = array(
          "A" => "id",
          "B" => "text",
          "C" => "class",
          "D" => "name"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q3_ques1_ans'] == "A" && $_POST['q3_ques1_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques1_ans_array['A'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q3_ques1_ans'] != "A" && $_POST['q3_ques1_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q3_ques1_ans_array[$_POST['q3_ques1_ans']];
          }
          # Display correct answer
          if ($_POST['q3_ques1_ans'] != "A" && $_POST['q3_ques1_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques1_ans_array['A'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q3_ques1_ans'] != "A" && $_POST['q3_ques1_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q3_ques1_ans'] != "A" && $_POST['q3_ques1_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques1_ans_array['A'] . "</h5>";
          }
        }
        ?>
      </div>

      <!-- # Question 2 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 2</kbd></small>
        <h3 class="mt-4">If we don't want to allow a floating div to the left side of an element, which css property will we use ?</h3>

        <?php

        # Question 2 Array
        $q3_ques2_ans_array = array(
          "A" => "margin",
          "B" => "clear",
          "C" => "float",
          "D" => "padding"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q3_ques2_ans'] == "B" && $_POST['q3_ques2_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques2_ans_array['B'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q3_ques2_ans'] != "B" && $_POST['q3_ques2_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q3_ques2_ans_array[$_POST['q3_ques2_ans']];
          }
          # Display correct answer
          if ($_POST['q3_ques2_ans'] != "B" && $_POST['q3_ques2_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques2_ans_array['B'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q3_ques2_ans'] != "B" && $_POST['q3_ques2_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q3_ques2_ans'] != "B" && $_POST['q3_ques2_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques2_ans_array['B'] . "</h5>";
          }
        }
        ?>
      </div>

      <!-- # Question 3 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 3</kbd></small>
        <h3 class="mt-4">Suppose we want to arragnge five nos. of DIVs so that DIV4 is placed above DIV1. Now, which css property will we use to control the order of stack?</h3>

        <?php

        # Question 3 Array
        $q3_ques3_ans_array = array(
          "A" => "d-index",
          "B" => "s-index",
          "C" => "x-index",
          "D" => "z-index"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q3_ques3_ans'] == "D" && $_POST['q3_ques3_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques3_ans_array['D'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q3_ques3_ans'] != "D" && $_POST['q3_ques3_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q3_ques3_ans_array[$_POST['q3_ques3_ans']];
          }
          # Display correct answer
          if ($_POST['q3_ques3_ans'] != "D" && $_POST['q3_ques3_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques3_ans_array['D'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q3_ques3_ans'] != "D" && $_POST['q3_ques3_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q3_ques3_ans'] != "D" && $_POST['q3_ques3_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques3_ans_array['D'] . "</h5>";
          }
        }
        ?>
      </div>

      <!-- # Question 4 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 4</kbd></small>
        <h3 class="mt-4">If we want to wrap a block of text around an image, which css property will we use ?</h3>

        <?php

        # Question 4 Array
        $q3_ques4_ans_array = array(
          "A" => "wrap",
          "B" => "push",
          "C" => "float",
          "D" => "align"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q3_ques4_ans'] == "C" && $_POST['q3_ques4_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques4_ans_array['C'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q3_ques4_ans'] != "C" && $_POST['q3_ques4_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q3_ques4_ans_array[$_POST['q3_ques4_ans']];
          }
          # Display correct answer
          if ($_POST['q3_ques4_ans'] != "C" && $_POST['q3_ques4_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques4_ans_array['C'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q3_ques4_ans'] != "C" && $_POST['q3_ques4_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q3_ques4_ans'] != "C" && $_POST['q3_ques4_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques4_ans_array['C'] . "</h5>";
          }
        }
        ?>
      </div>

      <!-- # Question 5 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 5</kbd></small>
        <h3 class="mt-4">If we want to show an Arrow as cursor, then which value we will use ?</h3>

        <?php

        # Question 5 Array
        $q3_ques5_ans_array = array(
          "A" => "pointer",
          "B" => "default",
          "C" => "arrow",
          "D" => "arr"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q3_ques5_ans'] == "B" && $_POST['q3_ques5_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques5_ans_array['B'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q3_ques5_ans'] != "B" && $_POST['q3_ques5_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q3_ques5_ans_array[$_POST['q3_ques5_ans']];
          }
          # Display correct answer
          if ($_POST['q3_ques5_ans'] != "B" && $_POST['q3_ques5_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques5_ans_array['B'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q3_ques5_ans'] != "B" && $_POST['q3_ques5_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q3_ques5_ans'] != "B" && $_POST['q3_ques5_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques5_ans_array['B'] . "</h5>";
          }
        }
        ?>
      </div>

      <!-- # Question 6 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 6</kbd></small>
        <h3 class="mt-4">If we want to use a nice looking green dotted border around an image, which css property will we use?</h3>

        <?php

        # Question 6 Array
        $q3_ques6_ans_array = array(
          "A" => "border-color",
          "B" => "border-decoration",
          "C" => "border-style",
          "D" => "border-line"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q3_ques6_ans'] == "C" && $_POST['q3_ques6_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques6_ans_array['C'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q3_ques6_ans'] != "C" && $_POST['q3_ques6_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q3_ques6_ans_array[$_POST['q3_ques6_ans']];
          }
          # Display correct answer
          if ($_POST['q3_ques6_ans'] != "C" && $_POST['q3_ques6_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques6_ans_array['C'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q3_ques6_ans'] != "C" && $_POST['q3_ques6_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q3_ques6_ans'] != "C" && $_POST['q3_ques6_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques6_ans_array['C'] . "</h5>";
          }
        }
        ?>
      </div>

      <!-- # Question 7 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 7</kbd></small>
        <h3 class="mt-4">Which of the following properties will we use to display border around a cell without any content ?</h3>

        <?php

        # Question 7 Array
        $q3_ques7_ans_array = array(
          "A" => "empty-cell",
          "B" => "blank-cell",
          "C" => "noncontent-cell",
          "D" => "void-cell"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q3_ques7_ans'] == "A" && $_POST['q3_ques7_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques7_ans_array['A'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q3_ques7_ans'] != "A" && $_POST['q3_ques7_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q3_ques7_ans_array[$_POST['q3_ques7_ans']];
          }
          # Display correct answer
          if ($_POST['q3_ques7_ans'] != "A" && $_POST['q3_ques7_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques7_ans_array['A'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q3_ques7_ans'] != "A" && $_POST['q3_ques7_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q3_ques7_ans'] != "A" && $_POST['q3_ques7_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques7_ans_array['A'] . "</h5>";
          }
        }
        ?>
      </div>

      <!-- # Question 8 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 8</kbd></small>
        <h3 class="mt-4">What should be the table width, so that the width of a table adjust to the current width of the browser window?</h3>

        <?php

        # Question 8 Array
        $q3_ques8_ans_array = array(
          "A" => "640 pixels",
          "B" => "100%",
          "C" => "full-screen",
          "D" => "1024 px"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q3_ques8_ans'] == "B" && $_POST['q3_ques8_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques8_ans_array['B'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q3_ques8_ans'] != "B" && $_POST['q3_ques8_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q3_ques8_ans_array[$_POST['q3_ques8_ans']];
          }
          # Display correct answer
          if ($_POST['q3_ques8_ans'] != "B" && $_POST['q3_ques8_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques8_ans_array['B'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q3_ques8_ans'] != "B" && $_POST['q3_ques8_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q3_ques8_ans'] != "B" && $_POST['q3_ques8_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques8_ans_array['B'] . "</h5>";
          }
        }
        ?>
      </div>

      <!-- # Question 9 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 9</kbd></small>
        <h3 class="mt-4">Which attribute can be added to many HTML / XHTML elements to identify them as a member of a specific group ?</h3>

        <?php

        # Question 9 Array
        $q3_ques9_ans_array = array(
          "A" => "id",
          "B" => "div",
          "C" => "class",
          "D" => "span"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q3_ques9_ans'] == "C" && $_POST['q3_ques9_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques9_ans_array['C'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q3_ques9_ans'] != "C" && $_POST['q3_ques9_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q3_ques9_ans_array[$_POST['q3_ques9_ans']];
          }
          # Display correct answer
          if ($_POST['q3_ques9_ans'] != "C" && $_POST['q3_ques9_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques9_ans_array['C'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q3_ques9_ans'] != "C" && $_POST['q3_ques9_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q3_ques9_ans'] != "C" && $_POST['q3_ques9_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques9_ans_array['C'] . "</h5>";
          }
        }
        ?>
      </div>

      <!-- # Question 10 -->
      <div class="mt-4 mb-5">
        <small><kbd>Question: 10</kbd></small>
        <h3 class="mt-4">When we write < img src="img.png">, what does "img.png" inside the double quote implies?</h3>

        <?php

        # Question 10 Array
        $q3_ques10_ans_array = array(
          "A" => "element",
          "B" => "attribute",
          "C" => "value",
          "D" => "operator"
        );

        # Check and display correct and incorrect answers
        if (isset($_POST)) {
          # Correct answer + Selected
          if ($_POST['q3_ques10_ans'] == "C" && $_POST['q3_ques10_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-success\">You had answered this question correctly";
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques10_ans_array['C'] . "</h5>";
          }

          # Incorrect answer + Selected
          if ($_POST['q3_ques10_ans'] != "C" && $_POST['q3_ques10_ans'] != "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You had answered: " . $q3_ques10_ans_array[$_POST['q3_ques10_ans']];
          }
          # Display correct answer
          if ($_POST['q3_ques10_ans'] != "C" && $_POST['q3_ques10_ans'] != "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques10_ans_array['C'] . "</h5>";
          }

          # Incorrect answer + empty
          if ($_POST['q3_ques10_ans'] != "C" && $_POST['q3_ques10_ans'] == "") {
            # Display chosen answer
            echo "<h5 class=\"alert alert-danger\">You did not choose any answer for this question";
          }
          # Display correct answer
          if ($_POST['q3_ques10_ans'] != "C" && $_POST['q3_ques10_ans'] == "") {
            echo "<h5 class=\"alert alert-success\">The correct answer is: " . $q3_ques10_ans_array['C'] . "</h5>";
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
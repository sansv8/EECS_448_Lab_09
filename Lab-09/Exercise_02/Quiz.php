<?php
//Firstly, get all the inputs from the user
$answer1 = $_POST["question1"];
$answer2 = $_POST["question2"];
$answer3 = $_POST["question3"];
$answer4 = $_POST["question4"];
$answer5 = $_POST["question5"];

//Next, create a variable that will the grade
$grade = 0;

//Next, go through each answer to see if they are correct or not
//If question 1 is correct, add 20
if($answer1 == "DFA") $grade = $grade + 20;
if($answer2 == "Turing Recognizable") $grade = $grade + 20;
if($answer3 == "PDA") $grade = $grade + 20;
if($answer4 == "O(n log n)") $grade = $grade + 20;
if($answer5 == "Not Halt and Accept") $grade = $grade + 20;

//Next, set the number of questions that is correct to be grade/20
$numCorrect = $grade/20;

//Next, echo question 1 and its answer
echo "<p> Question #1: What is the most basic type of Finite State Automata?</p>";
echo "<p> Your Answer: $answer1 </p>";
echo "<p> Correct Answer: DFA </p>";

//Next, echo question 2 and its answer
echo "<p> Question #2: What lanugage encompass all languages in the following list? </p>";
echo "<p> Your Answer: $answer2 </p>";
echo "<p> Correct Answer: Turing Recognizable </p>";

//Next, echo question 3 and its answer
echo " <p> Question #3: Which Finite State Automata are not equivalent to other FSAs in following list? </p>";
echo "<p> Your Answer: $answer3 </p>";
echo "<p> Correct Answer: PDA </p>";

//Next, echo question 4 and its answer
echo " <p>Quesiton #4: What is the time complexity of the merge sort?</p>";
echo "<p> Your Answer: $answer4 </p>";
echo "<p> Correct Answer: O(n log n) </p>";

//Next, echo question 5 and its answer
echo " <p> Question #5: Which outcome cannot occur for a Turing Maching </p>";
echo "<p> Your Answer: $answer5 </p>";
echo "<p> Correct Answer: Not Halt and Accept </p>";

//Next, echo the number of questions that are correct
echo "<p>Total number of questions correct: $numCorrect </p>";

//Next, echo the grade
echo "<p>Grade: $grade";
echo "% </p>";

?>
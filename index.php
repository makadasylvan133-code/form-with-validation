<?php
//include the validation script to handle form submission and validation
//example: include 'validate.php'; will include the validate.php file and run the validation logic when the form is submitted
// include_once: if index.php already loaded validate.php, don't load it again
// (loading it twice would redeclare clean_input() and cause a fatal error)
include_once 'validate.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Information Form</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/validation.js"></script>
</head>
<body>
    <h1>Student Information Form</h1>

    <!-- Add the novalidate attribute to the form tag to switch off the browser's own checks
         and show that the server-side checks still protect the page. -->
    <!-- The onsubmit attribute calls the validateForm() function from validation.js to perform client-side validation before submission. -->
     <!-- The action attribute uses htmlspecialchars() to prevent XSS attacks by escaping special characters in the URL. -->
      <!-- The method attribute is set to POST to send form data securely. -->
    <form method="post"  action="student_reflector.php" onsubmit="return validateForm()">
        <p id="clientMsg" class="error"></p>

        <label for="name">Name</label>
        <input type="text" id="name" name="name" required  maxlength="50"
               value="<?php echo htmlspecialchars($name); ?>">
        <span class="error"><?php echo $nameErr; ?></span>

        <label for="program">Program of study</label>
        <select id="program" name="program" required>
            <option value="">-- Select --</option>
            <option value="Computer Systems Technology" <?php if ($program == "Computer Systems Technology") echo "selected"; ?>>Computer Systems Technology</option>
            <option value="Information Technology" <?php if ($program == "Information Technology") echo "selected"; ?>>Information Technology</option>
            <option value="Electronics Technology" <?php if ($program == "Electronics Technology") echo "selected"; ?>>Electronics Technology</option>
        </select>
        <span class="error"><?php echo $programErr; ?></span>

        <label for="year">Year of study</label>
        <input type="number" id="year" name="year"  required 
               value="<?php echo htmlspecialchars($year); ?>">
        <span class="error"><?php echo $yearErr; ?></span>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required
               value="<?php echo htmlspecialchars($email); ?>">
        <span class="error"><?php echo $emailErr; ?></span>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
        <button type="hidden"> <a href="view_students.php">View records</a></button>
    </form>
</body>
</html>

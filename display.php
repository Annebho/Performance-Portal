<?php
// Helper function to get and safely output a value from $_GET
function getVal($key) {
    return isset($_GET[$key]) ? htmlspecialchars($_GET[$key]) : '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>View Submission</title>
</head>
<body>
<section id="home">
  <header style="background-color:#dba13b; height: 50px;">
    <h3 style="color: white; font-size: 12px; text-align: left; font-family: Arial, Helvetica, sans-serif; padding: 10px;">
      Employee Mid-Year Appraisal Review (View Only)
    </h3>
  </header>

  <form>
    <div class="form-container">
      <div class="form-group">
        <h3 style="text-decoration:underline; font-size:12px;">Appraisee Information</h3>
        <label>1. Name:</label>
        <input type="text" value="<?= getVal('name') ?>" readonly>

        <label>3. Email:</label>
        <input type="email" value="<?= getVal('email') ?>" readonly>

        <label>5. Manager</label>
        <input type="text" value="<?= getVal('manager') ?>" readonly>

        <label>7. Reviewer I</label>
        <input type="text" value="<?= getVal('revI') ?>" readonly>
      </div>

      <div class="form-group">
        <br><br><br>
        <label>2. Job Title:</label>
        <input type="text" value="<?= getVal('jobtitle') ?>" readonly>

        <label>4. Department:</label>
        <input type="text" value="<?= getVal('department') ?>" readonly>

        <label>6. Performance Appraisal Cycle:</label>
        <input type="text" value="<?= getVal('pac') ?>" readonly>

        <label>8. Reviewer II:</label>
        <input type="text" value="<?= getVal('revII') ?>" readonly>
      </div>
    </div>

    <h3 style="text-decoration:underline; font-size:12px;">Performance Appraisal Metrics</h3>
    <h3 style="font-size:12px;">Work Objectives</h3>

    <table>
      <thead>
        <tr>
          <th>Category</th>
          <th>Objective</th>
          <th>Success Measure</th>
          <th>Weight</th>
          <th>Mid-Year Review</th>
          <th>End of Year Comments</th>
        </tr>
      </thead>
      <tbody>
  <?php for ($i = 1; $i <= 6; $i++): ?>
    <tr>
      <td><textarea readonly><?= getVal("Category$i") ?></textarea></td>
      <td><textarea readonly><?= getVal("Objective$i") ?></textarea></td>
      <td><textarea readonly><?= getVal("SuccessMeasure$i") ?></textarea></td>
      <td><input type="text" value="<?= getVal("Weight$i") ?>%" readonly></td>
      <td><textarea ><?= getVal("MidYearReview$i") ?></textarea></td>
      <td><textarea ><?= getVal("EndYearReview$i") ?></textarea></td>
    </tr>
  <?php endfor; ?>
</tbody>
    </table>
</section>

<section id="table">
  <h3 style="text-decoration:underline; font-size:22px;">Talent Assessment Feedback: Core Skills</h3>
  <table>
    <thead>
      <tr>
        <th>Category</th>
        <th>Weight</th>
        <th>Mid-Year Review</th>
        <th>End of Year Comments</th>
      </tr>
    </thead>
    <tbody>
        <?php for ($i = 1; $i <= 5; $i++): ?>
    <tr>
      <td><textarea readonly><?= getVal("Kategory$i") ?></textarea></td>
      <td><input type="text" value="<?= getVal("Weightb$i") ?>%" readonly></td>
      <td><textarea ><?= getVal("MidYearReview_b$i") ?></textarea></td>
      <td><textarea ><?= getVal("EndYearReview_b$i") ?></textarea></td>

    </tr>
  <?php endfor; ?>

    </tbody>
  </table>
</form>
</section>
</body>
</html>



<!DOCTYPE html>
<html>
<head>
    <title>Olympiad Registrations</title>
</head>
<body>
    <?php include 'menu.inc'; ?>
    <h2>Register School</h2>
    <form method="post" action="task4.php">
        School Name: <input type="text" name="school_name" required><br><br>
        Address: <input type="text" name="school_address" required><br><br>
        Contact: <input type="text" name="school_contact" required><br><br>
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" value="Register">
    </form>

    <h2>Register Learner</h2>
    <form method="post" action="task4.php">
        School ID: <input type="text" name="school_id" required><br><br>
        Learner Name: <input type="text" name="learner_name" required><br><br>
        Grade: <input type="number" name="grade" required><br><br>
        Subjects: <select id="subjects" name="subjects[]" multiple required>
            <option value="Math">Math</option>
            <option value="Science">Science</option>
            <option value="English">English</option>
             <option value="Afrikaans">Afrikaans</option>
            <option value="Social-Sciences">Social-Sciences</option>
            <option value="Business">Business</option>
        </select><br><br>
        <input type="submit" value="Register">
    </form>
    <h2>Manage Learners</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Grade</th>
                <th>Subjects</th>
                <th>Actions</th>
            </tr>
            <tr>
                    <form method="POST" action="task4.php">
                        <td><input type="text" name="learner_id" value="<?php echo $row['id']; ?>"></td>
                        <td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
                    <td><input type="number" name="grade" value="<?php echo $row['grade']; ?>"></td>
                    <td>
                        <select name="subjects[]" multiple>
                            <option value="Math" <?php echo in_array('Math', explode(',', $row['subjects'])) ? 'selected' : ''; ?>>Math</option>
                            <option value="Science" <?php echo in_array('Science', explode(',', $row['subjects'])) ? 'selected' : ''; ?>>Science</option>
                            <option value="English" <?php echo in_array('English', explode(',', $row['subjects'])) ? 'selected' : ''; ?>>English</option>
                             <option value="Afrikaans" <?php echo in_array('Afrikaans', explode(',', $row['subjects'])) ? 'selected' : ''; ?>>Afrikaans</option>
                            <option value="Social-Sciences" <?php echo in_array('Social-Science', explode(',', $row['subjects'])) ? 'selected' : ''; ?>>Social-Sciences</option>
                            <option value="Business" <?php echo in_array('Business', explode(',', $row['subjects'])) ? 'selected' : ''; ?>>Business</option>
                        </select>
                    </td>
                    <td>
                        <input type="hidden" name="learner_id" value="<?php echo $row['id']; ?>">
                        <button type="submit" name="update">Update</button>
                        <button type="submit" name="delete">Delete</button>
                    </td>
                </form>
            </tr>
        </table>

    <h2>Modify/Delete Learner</h2>
    <form method="post" action="task4.php">
        Learner ID: <input type="text" name="learner_id" required><br><br>
        Learner Name: <input type="text" name="learner_name"><br><br>
        Grade: <input type="number" name="grade"><br><br>
        Subjects: <input type="text" name="subjects"><br><br>
        <input type="submit" name="modify" value="Modify">
        <input type="submit" name="delete" value="Delete">
    </form>

    <h2>Generate Invoice</h2>
    <form method="post" action="task4.php">
        Learner ID: <input type="text" name="learner_id"><br><br>
        <input type="submit" name="individual" value="Generate Individual Invoice"><br><br>
        School ID: <input type="text" name="school_id"><br><br>
        <input type="submit" name="school" value="Generate School Invoice">
    </form>

    <br>
    <iframe src="task4.txt" height="400" width="1200"> 
        Your browser does not support iframes. </iframe> 
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <?php include 'menu.inc'; ?>

    <h2>Add a Member</h2>
<form action="add_member.php" method="post">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    <input type="submit" value="Add Member">
</form>

<h2>Modify MemberGroup</h2>
<form action="modify_membergroup.php" method="post">
    MemberID: <input type="text" name="member_id"><br><br>
    GroupID: <input type="text" name="group_id"><br><br>
    JoiningDate: <input type="date" name="joining_date"><br><br>
    <input type="submit" value="Modify MemberGroup">
</form>

<h2>Delete a Group</h2>
<form action="delete_group.php" method="post">
    GroupID: <input type="text" name="group_id"><br><br>
    <input type="submit" value="Delete Group">
</form>

<h2>SELECT Queries</h2>
<form action="select_query.php" method="post">
    <input type="radio" name="query" value="1"> SELECT * FROM Member ORDER BY MemberName<br>
    <input type="radio" name="query" value="2"> SELECT * FROM Member WHERE MemberName LIKE '%John%'<br>
    <input type="radio" name="query" value="3"> SELECT Member.MemberName, `Group`.GroupName FROM Member INNER JOIN MemberGroup ON Member.MemberID = MemberGroup.MemberID INNER JOIN `Group` ON MemberGroup.GroupID = `Group`.GroupID<br>
    <input type="radio" name="query" value="4"> SELECT * FROM Member LIMIT 3<br>
    <input type="radio" name="query" value="5"> SELECT MAX(MemberID) FROM Member<br>
    <input type="submit" value="Execute Query">
</form>
<br>

<iframe src="task2.txt" height="400" width="1200"> 
 Your browser does not support iframes. </iframe> 
</body>
</html>
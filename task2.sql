CREATE DATABASE my_database;

USE my_database;

CREATE TABLE Member (
    MemberID INT AUTO_INCREMENT PRIMARY KEY,
    MemberName VARCHAR(100),
    MemberEmail VARCHAR(100)
);

CREATE TABLE `Group` (
    GroupID INT AUTO_INCREMENT PRIMARY KEY,
    GroupName VARCHAR(100),
    GroupDescription TEXT
);

CREATE TABLE MemberGroup (
    MemberID INT,
    GroupID INT,
    JoiningDate DATE,
    PRIMARY KEY (MemberID, GroupID),
    FOREIGN KEY (MemberID) REFERENCES Member(MemberID),
    FOREIGN KEY (GroupID) REFERENCES `Group`(GroupID)
);

INSERT INTO Member (MemberName, MemberEmail) VALUES
('John Doe', 'john@example.com'),
('Jane Smith', 'jane@example.com'),
('Alice Johnson', 'alice@example.com'),
('Bob Brown', 'bob@example.com'),
('Charlie Davis', 'charlie@example.com');

INSERT INTO `Group` (GroupName, GroupDescription) VALUES
('Group A', 'Description for Group A'),
('Group B', 'Description for Group B'),
('Group C', 'Description for Group C'),
('Group D', 'Description for Group D'),
('Group E', 'Description for Group E');

INSERT INTO MemberGroup (MemberID, GroupID, JoiningDate) VALUES
(1, 1, '2023-01-01'),
(2, 2, '2023-02-01'),
(3, 3, '2023-03-01'),
(4, 4, '2023-04-01'),
(5, 5, '2023-05-01');


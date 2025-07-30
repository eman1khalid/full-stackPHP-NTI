SELECT courses.title, COUNT(enrollments.student_id) FROM enrollments LEFT JOIN courses ON courses.id=enrollments.course_id GROUP BY courses.title;

SELECT students.name ,COUNT(enrollments.course_id) FROM students JOIN enrollments ON students.id=enrollments.student_id GROUP BY students.name ASC LIMIT 1;

SELECT students.name ,COUNT(enrollments.course_id) FROM students LEFT JOIN enrollments ON students.id=enrollments.student_id GROUP BY students.name ASC LIMIT 1;

SELECT students.name ,COUNT(enrollments.course_id) AS courses FROM students LEFT JOIN enrollments ON students.id=enrollments.student_id GROUP BY students.name;


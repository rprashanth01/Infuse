<?php
	$login_perform_login_faculty_query = 'SELECT FAC_PWORD FROM FACULTY WHERE FAC_ID = \'';
	$login_perform_login_admin_1_query = 'SELECT FAC_PWORD FROM FACULTY WHERE FAC_ID = \'';
	$login_perform_login_admin_2_query = '\' AND FAC_DEPT_ID = \'DEPT00\';';
	$login_perform_login_student_query = 'SELECT STU_PWORD FROM STUDENT WHERE STU_USN = \'';
	$login_perform_login_dept_query = 'SELECT DEPT_PWORD FROM DEPARTMENT WHERE DEPT_ID = \'';
	
	$login_already_done_faculty_query = 'SELECT FAC_NAME FROM FACULTY WHERE FAC_ID = \'';
	$login_already_done_admin_query = 'SELECT FAC_NAME FROM FACULTY WHERE FAC_ID = \'';
	$login_already_done_student_query = 'SELECT STU_NAME FROM STUDENT WHERE STU_USN = \'';
	$login_already_done_dept_query = 'SELECT DEPT_NAME FROM DEPARTMENT WHERE DEPT_ID = \'';
	
	$dept_ise_faculty_query = 'SELECT * FROM FACULTY WHERE FAC_DEPT_ID = \'DEPT01\' ';
	
	$admin_student_add_dept_option_query = 'SELECT DEPT_ID, DEPT_NAME FROM DEPARTMENT WHERE DEPT_ID !=\'DEPT00\'';
	$admin_student_add_processing_query = 'INSERT INTO STUDENT(STU_USN, STU_PWORD, STU_NAME, STU_GENDER, STU_DOB, STU_CASTE, STU_CONTACT_NO, STU_EMAIL_ID, STU_PERM_ADDR, STU_CURR_ADDR, STU_DEPT_ID, STU_ADMIS_TYPE, STU_ADMIS_QUOTA, STU_ADMIS_RANK) VALUES ';
	$admin_student_add_guardian_query = 'INSERT INTO GUARDIAN(GUA_STU_USN, GUA_NAME, GUA_RELATION, GUA_CONTACT_NO, GUA_EMAIL_ID, GUA_ANNUAL_INCOME, GUA_OCCUPATION) VALUES ';
	
	$admin_student_fee_processing_query = 'INSERT INTO FEES_STU(FEES_RECEIPT_NO, FEES_STU_USN, FEES_STU_CONCESSION, FEES_STU_YEAR, FEES_STU_PAID, FEES_STU_DD_NUM, FEES_STU_BANK_NAME, FEES_STU_DATE_PAID) VALUES ';
	
	$admin_faculty_add_dept_option_query = 'SELECT DEPT_ID, DEPT_NAME FROM DEPARTMENT';
	$admin_faculty_add_processing_query = 'INSERT INTO FACULTY(FAC_ID, FAC_PWORD, FAC_NAME, FAC_IMAGE_PATH, FAC_GENDER, FAC_DOB, FAC_CASTE, FAC_CONTACT_NO, FAC_EMAIL_ID, FAC_PERM_ADDR, FAC_CURR_ADDR, FAC_DEPT_ID, FAC_DEPT_DOJ, FAC_DESIG, FAC_SALARY) VALUES ';
	
	$admin_faculty_payslip_details_retreival_query = 'SELECT FAC_ID, FAC_SALARY FROM FACULTY;';
	$admin_faculty_payslip_processing_query = 'INSERT INTO SAL_FAC(SAL_FAC_ID, SAL_FAC_MONTH_YEAR, SAL_FAC_TOT_AMT, SAL_FAC_TAX, SAL_FAC_PPF, SAL_FAC_OTH, SAL_FAC_TAKE_HOME) VALUES ';
	
	$admin_department_add_processing_query = 'INSERT INTO DEPARTMENT(DEPT_ID, DEPT_NAME, DEPT_DESC, DEPT_YEAR_STARTED) VALUES ';
	
	$admin_department_option_query = 'SELECT DEPT_ID, DEPT_NAME FROM DEPARTMENT';
	
	$admin_statistics_student_dept_query = 'SELECT STU_DEPT_ID, COUNT(STU_USN) AS NO_OF_STU FROM STUDENT GROUP BY STU_DEPT_ID ORDER BY STU_DEPT_ID;';
	$admin_statistics_student_sem_query = 'SELECT STU_SEM, COUNT(STU_USN) AS NO_OF_STU FROM STUDENT GROUP BY STU_SEM ORDER BY STU_SEM;';
	$admin_statistics_student_gender_query = 'SELECT STU_GENDER, COUNT(STU_USN) AS NO_OF_STU FROM STUDENT GROUP BY STU_GENDER ORDER BY STU_GENDER;';
	
	$admin_statistics_faculty_dept_query = 'SELECT FAC_DEPT_ID, COUNT(FAC_ID) AS NO_OF_FAC FROM FACULTY GROUP BY FAC_DEPT_ID ORDER BY FAC_DEPT_ID;';
	// $admin_statistics_faculty_desig_query = 'SELECT FAC_DESIG, COUNT(FAC_ID) AS NO_OF_FAC FROM FACULTY GROUP BY FAC_DESIG ORDER BY FAC_DESIG;';
	$admin_statistics_faculty_gender_query = 'SELECT FAC_GENDER, COUNT(FAC_ID) AS NO_OF_FAC FROM FACULTY GROUP BY FAC_GENDER ORDER BY FAC_GENDER;';
	
	$department_statistics_student_sem_1_query = 'SELECT STU_SEM, COUNT(STU_USN) AS NO_OF_STU FROM STUDENT WHERE STU_DEPT_ID = \'';
	$department_statistics_student_sem_2_query = '\' GROUP BY STU_SEM ORDER BY STU_SEM;';
	$department_statistics_student_gender_1_query = 'SELECT STU_GENDER, COUNT(STU_USN) AS NO_OF_STU FROM STUDENT WHERE STU_DEPT_ID = \'';
	$department_statistics_student_gender_2_query = '\' GROUP BY STU_GENDER ORDER BY STU_GENDER;';
	
	$department_statistics_faculty_gender_1_query = 'SELECT FAC_GENDER, COUNT(FAC_ID) AS NO_OF_FAC FROM FACULTY WHERE FAC_DEPT_ID = \'';
	$department_statistics_faculty_gender_2_query = '\' GROUP BY FAC_GENDER ORDER BY FAC_GENDER;';
	
	$department_statistics_student_count_query = 'SELECT COUNT(STU_USN) AS NUM FROM STUDENT WHERE STU_DEPT_ID = \'';
	$department_statistics_faculty_count_query = 'SELECT COUNT(FAC_ID) AS NUM FROM FACULTY WHERE FAC_DEPT_ID = \'';
	
	$department_subject_statistics_query = 'SELECT * FROM SUBJECT WHERE SUB_OFFER_DEPT_ID = \'';
	
	$department_subject_add_processing_query = 'INSERT INTO SUBJECT(SUB_ID, SUB_OFFER_DEPT_ID, SUB_DESC, SUB_CRED_LEC, SUB_CRED_TUT, SUB_CRED_PRAC) VALUES ';
	
	$department_subject_edit_option_query = 'SELECT * FROM SUBJECT WHERE SUB_OFFER_DEPT_ID = \'';
	$department_subject_delete_query = 'DELETE FROM SUBJECT WHERE SUB_ID = \'';
	
	$department_timetable_faculty_option_query = 'SELECT FAC_ID FROM FACULTY WHERE FAC_DEPT_ID = \'';
	$department_timetable_class_option_query = 'SELECT ROOM_ID FROM ROOM WHERE ROOM_OFFER_DEPT_ID = \'';
	$department_timetable_subject_option_query = 'SELECT SUB_ID FROM SUBJECT WHERE SUB_OFFER_DEPT_ID = \'';
	
	$department_timetable_check_query = 'SELECT * FROM TIMETABLE WHERE TT_DAY = \'';
	$department_timetable_delete_query = 'DELETE FROM TIMETABLE WHERE TT_DAY = \'';
	$department_timetable_add_query = 'INSERT INTO TIMETABLE(TT_DAY, TT_PERIOD_NO, TT_FAC_ID, TT_CLASS_ID, TT_SUB_ID) VALUES ';
	
	$faculty_profile_query = 'SELECT * FROM FACULTY WHERE FAC_ID = \'';
	$faculty_profile_dependant_query = 'SELECT * FROM DEPENDANT WHERE DEP_FAC_ID = \'';
	
	$department_desig_faculty_option_query = 'SELECT FAC_ID FROM FACULTY WHERE FAC_DEPT_ID = \'';
	$department_change_desig_query = 'UPDATE FACULTY SET FAC_DESIG = \'';
	
	$department_report_generate_dept_name_query = 'SELECT DEPT_NAME FROM DEPARTMENT WHERE DEPT_ID = \'';
	$department_report_generate_faculty_query = 'SELECT * FROM FACULTY WHERE FAC_DEPT_ID = \'';
	$department_report_generate_student_query = 'SELECT * FROM STUDENT WHERE STU_DEPT_ID = \'';
	$department_report_generate_subject_query = 'SELECT * FROM SUBJECT WHERE SUB_OFFER_DEPT_ID = \'';
	// A QUERY IS PRESENT IN FACULTY_PROFILE_EDIT.php
	// A QUERY IS PRESENT IN FACULTY_ADD_DEPENDANT.php
?>
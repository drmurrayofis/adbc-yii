<body bgcolor="white" text="black">
        <center>
        <p></p><h1><a name="index">Animated DataBase Courseware Project</a></h1>
        <br></center>
        <br><a href="#adbc_intro">Introduction to the ADBC Project</a>
        <br><a href="#adbc_goals">Goals for the ADBC Project</a>
        <br><a href="#nsf_funding">Gaining NSF funding for the project</a>
        <br><a href="#adbc_timeline">Timeline for the ADBC project</a>
        <br><a href="#about_ksu">About Kennesaw State Universtiy</a>
        <br>
        <br>
        <hr size="4" noshade="">
        <p>
            <font color="#0080ff">
                <font size="+1">
                    <strong>
                        <a name="adbc_intro">Introduction to the ADBC Project</a>
                    </strong>
                </font>
            </font>
        </p>
        <p></p><h4>The Animated DataBase Courseware Project started as an online tool
        used to aid students at Kennesaw State University to learn the fundamentals
        of database concepts.<p></p>
        <a href="#index">Return to Index</a>
        <br>
        <br>

        <hr> <!-- NEW SECTION -->

        <p><font color="#0080ff"><font size="+1"><strong><a name="adbc_goals">Goals for the ADBC Project</a></strong></font></font></p>
        <p></p><ol><li><font size="+1">Expansion of current animation modules</font>
        This area focuses on further development and expansion of existing prototype animations. The current
         situation and proposed improvements for each of the modules is outlined below.
        <ul>
        <li>1.1 Database Design - Scenarios to E-R Diagrams</li>
        <p></p>Converting Scenarios (problem specifications) to E-R diagrams is the weakest sub-module of the system
         (part of the Database Design Module). this module curently has only two exercises. We propose to create
         seven more. Further, the existing modules need to be redesigned. The current module structure was found
         to be too sequential, and displays too much infomation on the screen at one time. the model currently
         allows students to move from Scenarios (Problem Specification) to E-R and Class Diagrams and then to tables.
         We will focus on just the conversions of a Scenario to an E-R Diagram (the student will be able to see it
         as a Class Diagram as an alternative to E-R). Three of the new animation exercises will be developed from
         a Problem Specification, similar to our first three prototypes. The four other new exercises will be
        developed from a report format in an attempt to simulate a real world environment, where the system is
        designed based on existing documents. Out scenarios will include: Physician Assigns Drug to Patient
        (ternary relationship); Company Interviews Job Applicant (ternary); Part Contains Sub-parts (unary
        relationship); Employee Has Billing Rate for Project (binary); Students Register for Courses (weak entity
        section); Car is a Vehicle (sub-type); Vendor Supplies Product and Customer Places Order (two binary
        relationships).
        <p>We also propose two additional Normalization Exercises and four Denormalization Exercises. For Normalization,
        we will create an exercise to demonstrate Boyce-Codd Normal Form and an Exercise to demonstrate 4NF. All
        current exercises demonstrate up to 3NF. For Denormalization we will create four exercises with four different
        scenarios: Employees and Schedule, Employee has Telephones, Vendor Quotes Item, and Item has Storage Instruction.
        </p>
        <li>1.2 SQL (Structured Query Language)</li>
        <p>The SQL Module has been the most complete according to objective and subjective evaluations. However,
         we have identified two areas for further development, stored procedures/functions and common misconceptions.
         The stored procedure/functions sub-module will cover an introduction to stored procedures including what
         they are and why they might be used, as well as animations to demonstrate creating a stored procedure and
         calling the procedure both interactively and from within program code. Similar components will also be
         developed for functions.
        </p><p>In the lab environment, we observed that students demonstrated some common misconceptions regarding SQL.
        Therefore, we are proposing the addition of a new sub-module entitled SQL Misconceptions. Figure 1 demonstrates
        a common misconception and how this might be presented in the ADbC. In this example, a misconception exists
        where the code lists the two tables, but does not join them (multiplies instead of join). Every time the
        <b>next</b> button is clicked, one line of Relational Algebra is animated. By clicking the '<b>Correct</b>'
        button, the solution is animated. In addition to this misconception, we propose to implement five additional ones.
        <table bgcolor="FFFFFF" border="1" cellpadding="10">
        <tbody><tr align="center"><td colspan="1"><img border="2" src="/images/documentation_fig_1.jpg"><!-- width="600" height="450"-->
        </td></tr><tr align="center"><td colspan="1">Figure 1. SQL Misconception - Multiply instead of Join
        </td></tr></tbody></table>
        </p><p>
        </p><li>1.3 Transactions</li>
        <p>Within the area of transactions, several concepts are covered. Currently, the most mature animations
         cover the area of Cuncurrency, Recovery and Triggers. We plan to extend this Module to include additional
         animations/programs for each of these areas. In addition, we will also implement an animation exemplifying
         Referential Integrity Constraints: ON UPDATE RESTRICT/CASCADE/SET NULL and ON DELETE RESTRICT/CASCADE/SET
         NULL.
        </p></ul>
        <p></p></li><li><font size="+1">Development of a Standard Interface</font></li>
        The current system has three different interfaces as a result of using three development environemnts:
         Java, Flash, and Visual Basic. These environments were used in order to accommodate the developers' (students')
         expertise. This disparity existed with the participating students who earned couse credit for their work.
         It was not practical to expect these students to learn a new development environment given the time
         constraints imposed by the semester calendar. However, to facilitate continued support, development and
        maintenance of the ADbC, it will be imortant to standardize all program development and the courseware interface.
        As 57 of the 73 animations were programmed in Java, we decided to use Java as the standard for all final products.
        Feedback from the proof-of-concept showed some of the Flash programs had an excessive use of animation and multimedia,
        while some of the Java interfaces were too static. We plan to integrate the best of each interface, refining the
        prototypes and using multimedia exclusevely to explain concepts, avoiding its excessive usee where it does not add
        instructional vlue. Examples of animations from the prof-of-concept grant provide useful illustrations of the format,
        organization, and quality of the animations already developed while they also illustrate the need to standardize the
        interface. Further, these exmples provide a glimpse into what the propsed project is all about and how continued
        support for the project will facilitate further maturation and development of the database courseware.<p></p>
        <p></p><li><font size="+1">Additional Complex Topics (New Topics)</font>
        <p>We are proposing to add an additional five topics to the current set of animation modules. These areas were
        identified by database instructors and professional database administrators who participated in the proof-of-concept
        evaluation. This section allows us to expand the topics covered in the ADbC to include areas that often fall
        outside the scope of an introductory database class. It also allows us to expand the courseware to areas of
        emerging importance.
        </p><ul><li>3.1 Security</li>
        <p>Database and Database Application Security is of ultimate importance, but until recently, has been given little
        importance. According to Knox[25], "Securing the DB may be the single biggest action an organization can take to
        protect its assets." Consequently, we are proposing to create a module centered on the topic of database security.
        Animations in this module will be designed around two areas: Database Application Security (SQL Injection and
        Buffer Overflow) and Database Security (Implementation of Row and Column Level Security using Views and Triggers
        as well as with Virtual Private Databases, Alternative methods of Encryption, and Database Auditing Procedures).
        </p>
        <li>3.2 XML (eXtensible Markup Language)</li>
        <p>XML is increasingly being incorporated with database systems and is becoming widely accepted as a means of data
        exchange between multiple database systems. Therefore, we propose a module focused on XML and its supporting
        technologies. Specifically, this module will introduce XML document creation, use of an XML schema and XML document
        conversion to and from a relational database. Finally, an animation will be developed that demonstrates
        abstracting data from one database, validating that data against a common schema, and passing the validated document
        to an external database system for insertion into the appropriate tables.
        </p><p>In the lab environment, we observed
        </p><li>3.3 Performance and Tuninhg: Data</li>
        <p>A set of animations will bedeveloped to illustrate the advantages and disadvantages of the four popular indexing
        methods as they relate to database systems: Balanced Tree Indexing, Hashing, Bitmap Indexing and Indexed-Only Tables.
        Many animation illustrate balanced trees [15],[16], [17] and hasing [18], [19], [20], but none of the animations focus
        on the notion of when to index and when not to index, nor on the advantages of using each index method. For example,
        our animations will show why a B+ tree is better when the cardinality is larger. We found no animations explaining
        Bitmap Indexing, a new index method that is popular with data warehousing. We also found no animations for Index-Only
        Tables, which are useful for "lookup" tables. We will focus on how a specific query is optimized with a specific
        index. For example:
        </p><ol><li>A "select" statement implemented through binary search, harsh key, primary index to retrieve multiple records,
        clustering index to retrieve multiple records and a B+ tree index on an equality comparison.
        </li><li>A "join" statement implemented through single loop join (using an access structure to retrieve the matching
        records) and sort-merge join.
        </li></ol>

        <p>Animations will show how an SQL statement is resolved as a relational algebra expression composed of a sequence
        of relational algebra statements. For example, animations will show how the query optimizer selects one resolution
        over another (i.e. a Restrict operation might be used before a Join operation to reduce the overhead incurred by
        temporary files).
        </p><li>3.4 Introduction to Data Warehousing</li>
        <p>Visual examples of the main concepts and functions in a Data Warehouse will be presented. An example will show
        partitioning; roll-up, drill-down operation; slice an dice (projection operation on dimensions); and pivoting (cross
        tabulation). We will visually show different database strategies for extracting and loading, for cleaning and
        transforming, and different scenarios based on distribution of data (such as skewed data sets). For example, we will
        animate the Merge/Upsert statement, a new operation that is becoming extremely popular in the data warehousing
        environment, where fact tables need to be refreshed periodically as data arrives from on-line systems. For each row,
        the query must do: "IF ROW EXITS - THEN UPDATE - ELSE INSERT," a conditional expression also referred to as UPSERT.
        </p><li>3.5 Database Architecture through a Startup Process</li>
        <p>While topics related to database architecture and database startup are not commonly taught in a database course,
        students often have questions related to database administration. Therefore, this sub-module is proposed to meet
        student requests and to assist students if they should encounter the need for this information in advanced courses,
        in internships or on the job. Designing databases is a regular task of database administrators (DBA), and often, many
        hours are spent trying to locate missing parameters. Knowledge of database architecture improves the DBA performance
        in dealing with problems that may occur. Animation of the database startup process will include: 1) Reading a parameter
        file to obtain sizing information and control file location, allocating System Global Area and starting the background
        process; 2) Mouting the database (supplying instance with the location of the data and log files); 3) Opening the
        database; and 4) Background Processes, checking header of each data file to make sure they have the most recent
        System Control Number.
        </p></ul>
        <br><a href="#index">Return to Index</a>
        <br>
        <br>

        <hr> <!-- NEW SECTION -->

        <p><font color="#0080ff"><font size="+1"><strong><a name="nsf_funding">Gaining NSF funding for the project</a></strong></font></font>
        </p><p></p><h4>The Animated DataBase Courseware Project started as an online tool used to aid students at Kennesaw State
        University to learn the fundamentals of database concepts. First implemented in May, 2001 as the Database Courseware
        Development Project (known throughout the KSU campus as the 'coffee' site due to it's URL of http://coffee.kennesaw.edu),
        served as the proof-of-concept model for the submission to the National Science Foundation for project funding purposes.
        <p></p>
        <br><a href="#index">Return to Index</a>
        <br>
        <br>

        <hr> <!-- NEW SECTION -->

        <p><font color="#0080ff"><font size="+1"><strong><a name="adbc_timeline">Timeline for the ADBC project</a></strong></font></font>


        <br>
        <br>
        <font size="+1"><b>Table 1. Work Plan of Software Development by Year</b></font>

        <table bgcolor="FFFF99" border="1" cellpadding="10" width="80%">
<!--Year 1-->   <tbody><tr bgcolor="AAAAAA" align="center"><th colspan="2">Year One
        </th></tr><tr align="left"><td><b>Students w/ course credit</b></td><td>
            <ul>
                <li>Develop new animations Scenarios to E-R/Tables.
                </li><li>Begin normalization &amp; denormalization exercises.
            </li></ul>
        </td></tr><tr align="left"><td><b>Paid Graduate Students</b></td><td>
            <ul>
                <li>Standardize Interface (Scenarios to E-R) and SQL.
                </li><li>Implement Evaluation module for SQL.
            </li></ul>
        </td></tr><tr align="left"><td><b>Pl/Co-Pl</b></td><td>
            <ul>
                <li>Coordinate and supervise all student work.
                </li><li>Specify Scenatios to E-R and normalization exercises.
                </li><li>Test animation to Convert Scenarios to E-R and evaluate and specify
                adjustments to work done by students in previous.
                </li><li>Coordinate development of ancillary materials for Scenarios to ER
                and SQL commands.
                </li><li>Conduct workshops on completed modules and sub-modules.
            </li></ul>
<!--Year 2-->   </td></tr><tr bgcolor="AAAAAA" align="center"><th colspan="2">Year Two
        </th></tr><tr align="left"><td><b>Students w/ course credit</b></td><td>
            <ul>
                <li>Complete normalization exercises.
                </li><li>Develop stored procedure and function animations.
                </li><li>Develop SQL misconceptions animations.
            </li></ul>
        </td></tr><tr align="left"><td><b>Paid Graduate Students</b></td><td>
            <ul>
                <li>Implement Evaluation module for Scenarios to E-R and Embedded SQL.
                </li><li>Standardize Interface (Normalization and Denormalization).
            </li></ul>
        </td></tr><tr align="left"><td><b>Pl/Co-Pl</b></td><td>
            <ul>
                <li>Coordinate and supervise all student work.
                </li><li>Incorporate revisions as identified in evaluation analysis.
                </li><li>Specify remaining Normalization and Denormalization Exercises,
                stored procedure and function exercises and SQL misconceptions.
                </li><li>Test the Normalization and Denormalization Exercises.
                </li><li>Finalize ancillary materials for Scenario to ER and coordinate development
                of ancillary materials for normalization, stored procedures and SQL misconceptions.
                </li><li>Conduct workshops on completed modules and sub-modules.
            </li></ul>
<!--Year 3-->   </td></tr><tr bgcolor="AAAAAA" align="center"><th colspan="2">Year Three
        </th></tr><tr align="left"><td><b>Students w/ course credit</b></td><td>
            <ul>
                <li>Develop XML scenarios and animations.
                </li><li>Develop security animations.
                </li><li>Develop Transactional Processing Prototypes.
            </li></ul>
        </td></tr><tr align="left"><td><b>Paid Graduate Students</b></td><td>
            <ul>
                <li>Implement Evaluation module for stored procedure, functions and sQL misconception.
                </li><li>Standardize Interface (stored procedure, function and SQL misconception).
            </li></ul>
        </td></tr><tr align="left"><td><b>Pl/Co-Pl</b></td><td>
            <ul>
                <li>Coordinate and supervise all student work.
                </li><li>Incorporate revisions as identified in evaluation analysis.
                </li><li>Specify security and transactional processing and XML scenarios.
                </li><li>Test stored procedure, function and SQL misconceptions animations.
                </li><li>Finalize ancillary materials for normalization, stored procedures and
                SQL misconceptions and coordinate development of ancillary materials for
                XML and security and transactional processing.
                </li><li>Conduct workshops on completed modules and sub-modules.
            </li></ul>
<!--Year 4-->   </td></tr><tr bgcolor="AAAAAA" align="center"><th colspan="2">Year Four
        </th></tr><tr align="left"><td><b>Students w/ course credit</b></td><td>
            <ul>
                <li>Develop Tuning Prototypes (in Java).
                </li><li>Develop Data Warehouse Prototypes (in Java).
                </li><li>Develop Database Architecture Prototypes (in Java).
            </li></ul>
        </td></tr><tr align="left"><td><b>Paid Graduate Students</b></td><td>
            <ul>
                <li>Implement Evaluation Module for SML and Security.
                </li><li>Standardize Interface (XML and Security Module and transactional processing).
                </li><li>Work with other students in development of Tuning, Data Warehousing
                and Db Architecture Prototypes in Java.
            </li></ul>
        </td></tr><tr align="left"><td><b>Pl/Co-Pl</b></td><td>
            <ul>
                <li>Coordinate and supervise all student work.
                </li><li>Incorporate revisions as identified in evaluation analysis.
                </li><li>Specify Tuning, Data Warehouse and Data Architecture animations.
                </li><li>Test XML, Security and Transactional Processing animations.
                </li><li>Coordinate the implementation of the Tuning, Data Warehouse and
                Data Architecture Prototypes interface in Java.
                </li><li>Finalize ancillary materials for SML and Security, Transactional
                Processing and Data Warehouse.
                </li><li>Test Tuning, Data Warehouse and Db Architecture animations.
                </li><li>Develop and implement a software maintenance plan.
                </li><li>Conduct workshops on completed modules and sub-modules.
            </li></ul>
        </td></tr></tbody></table>
        <br>
        <br>
        <font size="+1"><b>Table 2. Evaluation Schedule by Sub Module</b></font>
        </p><hr>
        <table bgcolor="FFFF99" border="1" cellpadding="10" width="80%">
        <tbody><tr bgcolor="AAAAAA" align="center"><th>Module or Sub Module</th><th>Year 1</th><th>Year 2</th><th>Year 3</th><th>Year 4
        </th></tr><tr align="left"><td>SQL Commands</td><td>Q, EI</td><td>Q, EI</td><td>Q, EI</td><td>Q, EI
        </td></tr><tr align="left"><td>Scenario to ER/Tables</td><td>Q, EI</td><td>Q, EI</td><td>Q, EI</td><td>Q, EI
        </td></tr><tr align="left"><td>Normalization</td><td>Q</td><td>Q, EI</td><td>Q, EI</td><td>Q, EI
        </td></tr><tr align="left"><td>Stored Procedures, Functions</td><td>&nbsp;</td><td>Q</td><td>Q, EI</td><td>Q, EI
        </td></tr><tr align="left"><td>SQL Misconceptions</td><td>&nbsp;</td><td>Q</td><td>Q, EI</td><td>Q, EI
        </td></tr><tr align="left"><td>SQL Transactions</td><td>&nbsp;</td><td>&nbsp;</td><td>Q</td><td>Q, EI
        </td></tr><tr align="left"><td>Security</td><td>&nbsp;</td><td>&nbsp;</td><td>Q</td><td>Q, EI
        </td></tr><tr align="left"><td>XML</td><td>&nbsp;</td><td>&nbsp;</td><td>Q</td><td>Q, EI
        </td></tr><tr align="left"><td>Performance &amp; Tuning</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>Q, EI*
        </td></tr><tr align="left"><td>Data Warehousing</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>Q, EI*
        </td></tr><tr align="left"><td>Database Architecture</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>Q, EI*
        </td></tr></tbody></table>

        Q = Quality of the courseware;&nbsp;&nbsp;EI = Educational Impact&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        *Second semester only
        <br>
        <br>
        <a href="#index">Return to Index</a>

        <!-- End of Work Plan of Software Development by Year -->

        <br>

        <hr> <!-- NEW SECTION -->

        <br>
        <font color="#0080ff"><font size="+1"><strong><a name="about_ksu">About Kennesaw State Universtiy</a></strong></font></font>
        <p></p></h4><h4>Kennesaw State University (KSU), the third-largest university in the University System of Georgia,
         is a comprehensive university with expanding undergraduate and graduate programs in Kennesaw, Georgia, one
         of metropolitan Atlanta's burgeoning northwest suburban communities.<p></p>
        <span class="subhead2"><font face="Verdana" size="2"><b><img border="0" src="/images/kh_vert.jpg" align="right" width="178" height="242"></b></font></span><font face="Verdana" size="2"><span class="subhead2">Kennesaw
            State University (KSU), the third-largest university in the
            University System of Georgia, is a comprehensive university with
            expanding undergraduate and graduate programs in Kennesaw, Georgia,
            one of metropolitan Atlanta's burgeoning northwest suburban
            communities.<br>
            <br>
            Founded in 1963, Kennesaw State is located in Cobb County on a
            beautifully landscaped and pedestrian-friendly campus of 240 acres
            within easy access of Interstate 75 and the northwest quadrant of
            Georgia. Kennesaw State has seen tremendous growth in its facilities
            in the last decade and now boasts more than one million square feet
            of space for administration, instruction and student support
            facilities. Some of the newest facilities include the more than
            160,000-square-foot Social Sciences Building, the largest building
            on campus, and a 4,800-seat Convocation Center - the largest venue
            of its kind in northwest Georgia.<br>
            <br>
            The university's dedication to fostering excellence in public
            service brought it recognition from the American Association of
            State Colleges and Universities as one of the nation's top publicly
            engaged universities in its study "Stepping Forward as Stewards of
            Place." In addition, the American Council on Education selected KSU
            as one of eight institutions in the country for a study called
            "Global Learning for All," which will focus on good practices in
            promoting international student success. KSU was also named one of
            12 founding institutions in a project called "Foundations of
            Excellence in the First Year of College" by Dr. John Gardner and the
            Policy Center on the First-Year College Experience. For this study,
            KSU is conducting a comprehensive analysis of its own policies and
            programs related to the freshman experience. In addition, KSU's
            First-Year Experience has been named a "Program to Look For" by
            U.S.News &amp; World Report three years in a row.<br>
            <br>
            The university is committing itself to expanding the global
            experience of students, faculty and staff through its
            <a href="https://sacs.kennesaw.edu">Quality
            Enhancement Plan</a>, known as the "Get Global" initiative. The QEP is
            part of KSU's continuing efforts to reaffirm its accreditation for
            the next 10 years with the Southern Association's Commission on
            Colleges (SACS). The plan will focus on increasing opportunities for
            international learning experiences, and future plans also include
            implementing a global learning certification program and increasing
            financial support for those who study abroad.<br>
            <br>
            Nearly 20,000 commuter and residential students, including more than
            1,700 from 136 countries, pursue their undergraduate and graduate
            studies at Kennesaw State. The student body is a mix of traditional
            and nontraditional students with an average age of 26. Approximately
            20 percent of students are members of ethnic minorities.<br>
            <br>
            Kennesaw State students can choose majors from more than 60
            bachelor's and master's degree programs, including undergraduate
            degrees in education, health, business, the humanities, the arts,
            science and math. Graduate degree programs are offered in
            professional concentrations including nursing, business, information
            systems, conflict management, education and professional writing.
            KSU has continued to expand its graduate programs by adding a new
            Doctorate of Education in Leadership for Learning in 2006 - the
            first doctorate in the university's history. Nursing students from
            Kennesaw State have one of the highest passing rates on the
            statewide licensing exam and are highly sought-after in the medical
            community, while the College of Education is the second-largest
            preparer of teachers in the state. The Executive MBA program, housed
            in the Coles College of Business, is the second-largest program in
            the country and has been recognized by BusinessWeek with top 10
            ratings in e-business and teamwork.<br>
            <br>
            Students have a myriad of opportunities to experience campus life by
            participating in more than 150 student groups and organizations,
            including student government, sororities and fraternities, social
            and special-interest organizations, student publications and honor
            societies.<br>
            <br>
            The Kennesaw State Owls compete in the Atlantic Sun Conference in
            NCAA Division I intercollegiate athletics, enjoying the first full
            season as a Division I member in 2005-06. KSU has won more than five
            team championships since joining the NCAA during the 1994-95 school
            year, with numerous appearances at national championships dating
            back to KSU's days as a member of the NAIA. Most recently, KSU won
            NCAA titles in men's basketball (2004) and women's soccer (2003).
            The former was the first NCAA basketball crown ever won by a Georgia
            college or university.<br>
            <br>
            In 1963, the University System of Georgia established Kennesaw
            Junior College, which opened its doors to 1,000 students in 1967.
            The college became a four-year institution in 1976 and was named
            Kennesaw College in 1977. In 1988, on its 25th anniversary, it was
            named Kennesaw State College, and it became Kennesaw State
            University in 1996.</span>&nbsp;</font><p>&nbsp;
        <br><a href="#index">Return to Index</a>
        <br>
        </p></h4>
    
</li></ol></h4></body>

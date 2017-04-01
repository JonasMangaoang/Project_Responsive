CREATE TABLE `subject_table` 
    ( `id` INT NOT NULL AUTO_INCREMENT ,
      `code` VARCHAR(20) NOT NULL , 
      `value` VARCHAR(100) NOT NULL , 
      `sections` VARCHAR(100) NULL, 
      PRIMARY KEY (`id`)) ENGINE = InnoDB;
INSERT INTO `subject_table` 
    (`id`, `code`, `value`,`sections`) 
-- VALUES 
--     (NULL, '1DATBSE', 'Database Management System 1'),
--     (NULL, '2BUSLAW', 'Law on Business Organzations');
VALUES 
    (NULL, '1DATBSE', 'Database Management System 1','53 54'),
    (NULL, '2BUSLAW', 'Law on Business Organzations','14 21+11'),
    (NULL, '2COMPAP', 'Competency Appraisal 2','64'),
    (NULL, '2CRILAW', 'Criminal Law Book 2','27'),
    (NULL, '2DATBSE', 'Database Management System 1','55 56'),
    (NULL, '2TECHRE', 'Technical Report Writing 2','27'),
    (NULL, '3DANIM+', '3D ANIMATION','2'),
    (NULL, '3UP6ONE', 'Physics 1','8'),
    (NULL, '4CHEM++', 'General Chemistry',NULL),
    (NULL, '5CRIMI+', 'Human Behavior and Crisis Management',NULL),
    (NULL, 'ABNPSYC', 'ABNORMAL PSYCHOLOGY',NULL),
    (NULL, 'ACCREV2', 'Integrated Accounting Review Part 2',NULL),
    (NULL, 'ADACP13', 'Advanced Accounting Part 1',NULL),
    (NULL, 'ADACP33', 'Accounting for Specialized Industries',NULL),
    (NULL, 'ADALGEB', 'Advanced Algebra',NULL),
    (NULL, 'ADANIME', 'Advanced Animation and Rendering Technique',NULL),
    (NULL, 'ADCOPRO', 'Advanced Computer Programming',NULL),
    (NULL, 'ADDPROG', 'ADVANCED DATABASE PROGRAMMING',NULL),
    (NULL, 'ADINFO3', 'Advertising and Public Information',NULL),
    (NULL, 'ADSTAT+', 'Advanced Statistics',NULL),
    (NULL, 'ADVCAL1', 'Advanced Calculus 1',NULL),
    (NULL, 'ADVMATH', 'Advanced Engineering Mathematics',NULL),
    (NULL, 'ADVWRTV', 'Advanced Writing for Radio and TV',NULL),
    (NULL, 'AFASLIT', 'AFRO-ASIAN LITERATURE',NULL),
    (NULL, 'ALGETRI', 'Advanced Algebra and Trigonometry',NULL),
    (NULL, 'ANALDES', 'System Analysis Design',NULL),
    (NULL, 'ANALGEO', 'Analytical Geometry',NULL),
    (NULL, 'ANATOM1', 'Human Anatomy',NULL),
    (NULL, 'ANFOSYS', 'Accounting Information System',NULL),
    (NULL, 'ANTENNA', 'Transmission Media and Antenna System',NULL),
    (NULL, 'ANTHROP', 'Sociology and Anthropology with Family Planning & HIV/AIDS Education',NULL),
    (NULL, 'ARTINTL', 'ARTIFICIAL INTELLIGENCE',NULL),
    (NULL, 'ASSESS1', 'Assessment of Student Learning 1',NULL),
    (NULL, 'ASSESS2', 'Assessment of Student Learning 2',NULL),
    (NULL, 'ASTRNMY', 'Astronomy',NULL),
    (NULL, 'ATNTERN', 'Internship or Thesis Writing',NULL),
    (NULL, 'AUDISYS', 'Auditing in a CIS Environment',NULL),
    (NULL, 'AUDIT++', 'Assurance Principles, Professional Ethics and Good Governance',NULL),
    (NULL, 'BASMATX', 'Basic Mathematics and Extension',NULL),
    (NULL, 'BIOPSYC', 'Bio-Pschology',NULL),
    (NULL, 'BIOSCI3', 'Biological Science',NULL),
    (NULL, 'BRANCOM', 'BRAND COMMUNICATION DESIGN',NULL),
    (NULL, 'BSAPRAC', 'Practicum Internship or Thesis in Accounting',NULL),
    (NULL, 'BSTPDPR', 'Personality Development and Public Relations 2',NULL),
    (NULL, 'BUSICAL', 'Calculus for Business',NULL),
    (NULL, 'BUSIFIN', 'Basic Finance',NULL),
    (NULL, 'BUSIMP2', 'Business Plan Implementation 2',NULL),
    (NULL, 'BUSLAW4', 'Law on Negotiable Instruments',NULL),
    (NULL, 'BUSMANA', 'Principles of Management in Hospitality insdustry ',NULL),
    (NULL, 'BUSPLA1', 'Business Plan 1',NULL),
    (NULL, 'BUSPLA2', 'Business Plan 2',NULL),
    (NULL, 'BUSPOLI', 'Business Policy',NULL),
    (NULL, 'BUSPOLT', 'Business Policy in Tourism Insdustry',NULL),
    (NULL, 'BUSTAT3', 'Business Statistics',NULL),
    (NULL, 'CALCU13', 'CALCULUS 1',NULL),
    (NULL, 'CALCUP3', 'Calculus 3',NULL),
    (NULL, 'CALPHY1', 'Calculus-based Physics 1',NULL),
    (NULL, 'CALPHY2', 'Calculus-based Physics 2',NULL),
    (NULL, 'CAPSTON', 'Capstone Project Technopreneurship',NULL),
    (NULL, 'CHEM32U', 'GENERAL CHEMISTRY',NULL),
    (NULL, 'CHEMTOX', 'Forensic Chemistry and Toxicology',NULL),
    (NULL, 'CIRANDE', 'Electronic Circuit Analysis and Design',NULL),
    (NULL, 'CIRCIT2', 'Circuits 2',NULL),
    (NULL, 'COEPRAC', 'CPE PRACTICUM',NULL),
    (NULL, 'COMART1', 'Modern Communications Arts 1',NULL),
    (NULL, 'COMBAT+', 'Markmanship and Combat Shooting',NULL),
    (NULL, 'COMGRAP', 'Computer Graphics Animation',NULL),
    (NULL, 'COMPORG', 'Computer System Organization with Assembly Language',NULL),
    (NULL, 'CORPACT', 'Partnership and Corporation Accounting',NULL),
    (NULL, 'COSTAC6', 'Cost Accounting and Cost Management',NULL),
    (NULL, 'CPE-PRA', 'CPE Practicum',NULL),
    (NULL, 'CPEELE1', 'CPE Elective 1',NULL),
    (NULL, 'CPEELE2', 'CPE Elective 2',NULL),
    (NULL, 'CPEPRO2', 'CPE Design Project 2',NULL),
    (NULL, 'CPROGM2', 'Programming 2 Java',NULL),
    (NULL, 'CRI-OJT', 'On-the-Job Training and Community Immersion',NULL),
    (NULL, 'CRIPRO+', 'Criminal Procedure',NULL),
    (NULL, 'CSRTECH', 'Client Server Technology',NULL),
    (NULL, 'CURRENT', 'Cuurent Issues in Psychology',NULL),
    (NULL, 'DATANAL', 'DESIGN AND ANALYSIS OF ALGORITHM',NULL),
    (NULL, 'DBMSPRO', 'Database Management System with Programming',NULL),
    (NULL, 'DESKTOP', 'Desktop Publishing',NULL),
    (NULL, 'DEVCOMM', 'Development Communication',NULL),
    (NULL, 'DEVREAD', 'Developmental Reading 1',NULL),
    (NULL, 'DGANIME', 'DIGITAL CHARACTER ANIMATION',NULL),
    (NULL, 'DIETHER', 'Nutrition and Diet Therapy',NULL),
    (NULL, 'DIFCAL4', 'Differential CalculusA',NULL),
    (NULL, 'DIFFEQN', 'Differential Equations',NULL),
    (NULL, 'DIGFILM', 'DIGITAL FILM',NULL),
    (NULL, 'DIGICOM', 'Digital Communications',NULL),
    (NULL, 'DOMTOUR', 'Domestic Tourism',NULL),
    (NULL, 'DRAWMEC', 'DRAWING 2: MECHANICAL DRAWING',NULL),
    (NULL, 'DSCRETE', 'Discrete Structure',NULL),
    (NULL, 'DYRIGID', 'Dynamics and Rigid Bodies',NULL),
    (NULL, 'EARTH++', 'Earth Science',NULL),
    (NULL, 'ECECOMM', 'Data Communications',NULL),
    (NULL, 'ECEELE1', 'ECE Elective 1',NULL),
    (NULL, 'ECEELE2', 'ECE Elective 2',NULL),
    (NULL, 'ECELAWS', 'ECE Law, Contracts Ethics and Standards',NULL),
    (NULL, 'ECEPRO2', 'ECE Design Project 2',NULL),
    (NULL, 'EDATCOM', 'Data Communications',NULL),
    (NULL, 'EDUPSYC', 'Educational Psychology',NULL),
    (NULL, 'EDUTEC1', 'Educational Technology 1',NULL),
    (NULL, 'ELECMAG', 'Electromagnetics',NULL),
    (NULL, 'ELECT1+', 'Management Information System',NULL),
    (NULL, 'ELECT2+', 'Information System Project Management',NULL),
    (NULL, 'ELESTAT', 'ELEMENTARY STATISTICS',NULL),
    (NULL, 'ENERCON', 'Energy Conversion',NULL),
    (NULL, 'ENGALIT', 'ENGLISH/AMERICAN LITERATURE',NULL),
    (NULL, 'ENGECON', 'Engineering Economy',NULL),
    (NULL, 'ENGGCAD', 'Computer Aided Drafting',NULL),
    (NULL, 'ENGMGT1', 'Engineering Management',NULL),
    (NULL, 'ENGTRIP', 'Seminar and Field Trip',NULL),
    (NULL, 'ENFROPI', 'English Proficiency Instruction',NULL),
    (NULL, 'ENTREP1', 'Entrepreneurship',NULL),
    (NULL, 'ENTRESP', 'ENTERPRISE RESOURCE PLANNING',NULL),
    (NULL, 'ENVICOM', 'Environmental Communication',NULL),
    (NULL, 'ENVIENG', 'Introduction to Environmental Engineering',NULL),
    (NULL, 'ENVISCI', 'ENVIRONMENTAL SCIENCE',NULL),
    (NULL, 'ERGONO+', 'Ergonomics',NULL),
    (NULL, 'ETHICS+', 'Ethics',NULL),
    (NULL, 'EVENTS+', 'Events Management',NULL),
    (NULL, 'FACPLAN1', 'FACILITIES PLANNING',NULL),
    (NULL, 'FAISEM3', 'Semianr 3',NULL),
    (NULL, 'FAISEM6', 'Semianr 6',NULL),
    (NULL, 'FAISEM7', 'Semianr 7',NULL),
    (NULL, 'FINAC26', 'Financial Accounting Part 2',NULL),
    (NULL, 'FINAC33', 'Financial Accounting and Reporting Part 3',NULL),
    (NULL, 'FINMAN1', 'Financial Management 1',NULL),
    (NULL, 'FORENSC', 'FORENSC',NULL),
    (NULL, 'FORLANG', 'Foreign Language',NULL),
    (NULL, 'FRANCHI', 'Franchising',NULL),
    (NULL, 'FRELEC1', 'Free Elective 1',NULL),
    (NULL, 'FRELEC2', 'Free Elective 2',NULL),
    (NULL, 'FRONTOP', 'Front Office Operations',NULL),
    (NULL, 'FUNAC13', 'Fundemantals of Accounting',NULL),
    (NULL, 'FUNDCRI', 'Fundemantals of Criminal Investigation',NULL),
    (NULL, 'GENPSYC', 'General Psychology',NULL),
    (NULL, 'GROUPDY', 'GRUOP DYNAMICS',NULL),
    (NULL, 'HISGOV1', 'PHILIPPINE HISTORY AND GOVERNMENT',NULL),
    (NULL, 'HISTGOV', 'Philippine History & Government w/ New Constitution',NULL),
    (NULL, 'HOSPICE', 'Elective 1 - Hospice Palliative Care',NULL),
    (NULL, 'HRMBAR1', 'Bar and Beverage Operations',NULL),
    (NULL, 'HRMCOOK', 'Commercial Cooking',NULL),
    (NULL, 'HRMPRAC', 'Practicum 700 Hours A',NULL),
    (NULL, 'HRMTQM+', 'Total Quality Management',NULL),
    (NULL, 'HUMART1', 'Introduction to Humanities/Arts Appreciation',NULL),
    (NULL, 'HUMCOM+', 'HUMAN COMPUTER INTERACTION',NULL),
    (NULL, 'HUREMAN', 'Human Resource Management',NULL),
    (NULL, 'IE--PRA', 'IE Practicum',NULL),
    (NULL, 'IE-PROJ', 'Project Feasibility',NULL),
    (NULL, 'IEDSGN2', 'IE Design Project 2',NULL),
    (NULL, 'IMDSIGN', 'INTERACTIVE MEDIA DESIGN',NULL),
    (NULL, 'INDPSYC', 'INDUSTRIAL PSYCHOLOGY',NULL),
    (NULL, 'INELECT', 'Industrial Electronics',NULL),
    (NULL, 'INFOCAM', 'Information/Communication Campaign',NULL),
    (NULL, 'INOCHEM', 'Inorganic Chemistry',NULL),
    (NULL, 'INPRACT', 'Intensive Nursing Practicum RLE-408 hours',NULL),
    (NULL, 'INTCAL4', 'Integral Calculus',NULL),
    (NULL, 'INTCUIS', 'Culinary Arts and International Cuisine',NULL),
    (NULL, 'INTERN+', 'Internship',NULL),
    (NULL, 'INTROIT', 'Introduction to Information Technology',NULL),
    (NULL, 'INTROTE', 'Introduction to New Communication Technology',NULL),
    (NULL, 'INVESMA', 'Mathematics of Investment',NULL),
    (NULL, 'INVESMA', 'Mathematics of Investment',NULL),
    (NULL, 'IQUACON', 'Industrial Quality Control',NULL),
    (NULL, 'ITAPPLI', 'IT Application for the Hospitality insdustry w/ Lad FIDELIO',NULL),
    (NULL, 'JOSERIZ', 'Rizal Life Works and Writings',NULL),
    (NULL, 'JUVENIL', 'Juvenile Deliquency and Crime Prevention',NULL),
    (NULL, 'KOMIKA+', 'Komunikasyon sa Akademikong Filipino',NULL),
    (NULL, 'LANGCUR', 'Language Curriculum for Secondary Schools',NULL),
    (NULL, 'LANGLIT', 'Languages and Literature Assessment',NULL),
    (NULL, 'LAYOUT+', 'TYPOGRAPHY AND LAYOUT',NULL),
    (NULL, 'LIALGEB', 'Linear Algebra',NULL),
    (NULL, 'LITECRI', 'CRITICISM',NULL),
    (NULL, 'LOGASCM', 'Logistic and Supply Chain Management',NULL),
    (NULL, 'LOGIC++', 'Logic',NULL),
    (NULL, 'LOGSWCH', 'Logic Circuits and Switch Theory',NULL),
    (NULL, 'MAELEC2', 'Mathematics Elective 2 Set Theory',NULL),
    (NULL, 'MAELEC3', 'Mathematics Elective 3 Numerical Analysis',NULL),
    (NULL, 'MAELEC4', 'Mathematics Elective 4 Operations Research 1',NULL),
    (NULL, 'MAELEC5', 'Mathematics Elective 5 Theory of Interest',NULL),
    (NULL, 'MANACT2', 'Management Accounting Part 2',NULL),
    (NULL, 'MAPEH++', 'Music Arts PE and Health',NULL),
    (NULL, 'MECDEBO', 'Mechanics of Deformable Bodies',NULL),
    (NULL, 'MEDPROD', 'Media Production Design',NULL),
    (NULL, 'METHORE', 'Methods of Research',NULL),
    (NULL, 'MGMTACC', 'Fundemantals of Management Accounting',NULL),
    (NULL, 'MICRO++', 'Microeconomic and Practice',NULL),
    (NULL, 'MIDSOFT', 'Multi-media Development Software',NULL),
    (NULL, 'MIPROC1', 'Microprocessors System',NULL),
    (NULL, 'MOBDEVT', 'Introduction to Mobile Games Development',NULL),
    (NULL, 'MODGEOM', 'Modern Geometry',NULL),
    (NULL, 'MODSIM+', 'MODELING AND SIMUALTION',NULL),
    (NULL, 'MULIT++', 'Multimedia System',NULL),
    (NULL, 'MULTILE', 'MULTIMEDIA LAWS AND ETHICS',NULL),
    (NULL, 'MULTRES', 'MULTIMEDIA RESEARCH',NULL),
    (NULL, 'NCM102N', 'Care of Mother, Child, Family and Population Group At-risk or With Problems with RLE 306 hours',NULL),
    (NULL, 'NCM104N', 'Care of Clients with Problems in Inflammatory and Immunologic Response, Perception  and Coordination with RLE 204 hours',NULL),
    (NULL, 'NCM105N', 'Care of Clients with Maladaptive Patterns of Behaviors with RLE 102 hours',NULL),
    (NULL, 'NCM107B', 'Nursing Leadership and Management RLE-153 hours',NULL),
    (NULL, 'NET-MGT', 'Network Management',NULL),
    (NULL, 'NETPRIN', 'Network Principles and Programming',NULL),
    (NULL, 'NETWRK+', 'Computer Networks',NULL),
    (NULL, 'NONCOR+', 'Non-Institutional Corrections',NULL),
    (NULL, 'NSTP200', 'National Service Training Program',NULL),
    (NULL, 'NTROFLM', 'Introduction to Film',NULL),
    (NULL, 'NUMMETH', 'Numerical Methods',NULL),
    (NULL, 'NUMTHEO', 'Number Theory',NULL),
    (NULL, 'NURSRE1', 'Nursing Research 1',NULL),
    (NULL, 'OBJPROG', 'OBJECT ORIENTED PROGRAMMING',NULL),
    (NULL, 'OBOPROG', 'Object Oriented Programming',NULL),
    (NULL, 'OBPACO2', 'Field Study 2',NULL),
    (NULL, 'OBPACO4', 'FIELD STUDY 5 and 6',NULL),
    (NULL, 'OHSAFEM', 'Occupational health and Safety Engineering Management',NULL),
    (NULL, 'OPSYSAP', 'Operating Systems Applications',NULL),
    (NULL, 'OR-TWO+', 'Operations Research 2',NULL),
    (NULL, 'ORALCOM', 'Speech and Oral Communication',NULL),
    (NULL, 'ORCRIME', 'Organized Crime Investigation',NULL),
    (NULL, 'ORGCOMM', 'Organizational Communication',NULL),
    (NULL, 'P6ONE5U', 'Physics 1',NULL),
    (NULL, 'PAHAYAG', 'Masining na Pagpapahayag',NULL),
    (NULL, 'PANITIK', 'Ang Panitikan ng Pilipinas',NULL),
    (NULL, 'PCTRBLE', 'PC Troubleshooting',NULL),
    (NULL, 'PGSULAT', 'Pagbasa at Pagsulat Tungo sa Pananaliksik',NULL),
    (NULL, 'PHARMA+', 'Pharmacology',NULL),
    (NULL, 'PHILHIS', 'Philippine History',NULL),
    (NULL, 'PHILITE', 'Philippine Literature in English',NULL),
    (NULL, 'PHOTO++', 'Police Photography',NULL),
    (NULL, 'PHYSCI+', 'Physics for Health Science',NULL),
    (NULL, 'PHYSCI1', 'Physical Science',NULL),
    (NULL, 'PLANE3U', 'Plane Geometry',NULL),
    (NULL, 'POLGOV+', 'Politics and Governance with New Constitution',NULL),
    (NULL, 'POLYGRP', 'Polygraphy Lie Detection',NULL),
    (NULL, 'PORTEX+', 'PORTFOLIO PRESENTATION AND EXHIBIT',NULL),
    (NULL, 'PRACTI1', 'Practicum 1 Industrial',NULL),
    (NULL, 'PRACTIC', 'PRACTICUM minimum 600 Hours',NULL),
    (NULL, 'PREVAL+', 'Preparation and Evaluation of Instructional Material',NULL),
    (NULL, 'PRINECO', 'Principles of Economics with LRT',NULL),
    (NULL, 'PRINMAR', 'Principles of Marketing',NULL),
    (NULL, 'PRINME1', 'Principles of Teaching 1',NULL),
    (NULL, 'PRINME2', 'Principles of Teaching 2',NULL),
    (NULL, 'PRITOUR', 'Tour Guiding and Escorting',NULL),
    (NULL, 'PROBAB1', 'Probability',NULL),
    (NULL, 'PRODDAD', 'Production Design Development',NULL),
    (NULL, 'PRODMAN', 'Productions and Operations Management',NULL),
    (NULL, 'PROETHS', 'PROFESSIONAL ETHICS',NULL),
    (NULL, 'PROJMAN', 'Risk Analysis and Project Management',NULL),
    (NULL, 'PROSTAT', 'Probability and Statistics',NULL),
    (NULL, 'PSTRIG+', 'Plane and Spherical Trigonometry',NULL),
    (NULL, 'PSYSTAT', 'PSYCHOLOGICAL STATISTICS',NULL),
    (NULL, 'PSYTES1', 'Psychological Testing 1',NULL),
    (NULL, 'QUANTEC', 'Quantitative Technique in Business',NULL),
    (NULL, 'R-KEY++', 'INTRODUCTION TO COMPUTER ORGANIZATION AND ARCHITECTURE',NULL),
    (NULL, 'RESCLUB', 'Resort and Club Management',NULL),
    (NULL, 'RESMETH', 'Research and Methodology',NULL),
    (NULL, 'RHYTHM1', 'P.E.2 - Rhythmic Dance Ballroom Dancing',NULL),
    (NULL, 'RPSYCH2', 'RESEARCH IN PSYCHOLOGY 2',NULL),
    (NULL, 'SOCPSYC', 'SOCIAL PSYCHOLOGY',NULL),
    (NULL, 'SOCRES+', 'Social Responsibility and Good Governance',NULL),
    (NULL, 'SOCSCID', 'Building Bridges Across the Social Science Discipline MAkabayan as a Core  Area in the Basic Education',NULL),
    (NULL, 'SOFTWER', 'Software Engineering',NULL),
    (NULL, 'SPCRIME', 'Special Crime Investigation',NULL),
    (NULL, 'SPE102N', 'Human Anatomy and Physiology',NULL),
    (NULL, 'SPE103N', 'Introduction to Biometrics & Movement in Education',NULL),
    (NULL, 'SPE104N', 'Philippine Folk Dance',NULL),
    (NULL, 'SPE105N', 'Individual-Dual Sports & Philippine Games',NULL),
    (NULL, 'SPE108N', 'ORGANIZATION & MANAGEMENT OF PHYSICAL EDUCATION SPORTS & WELLNESS PROGRAM PRACTICUM',NULL),
    (NULL, 'SPE109N', 'INTERNATIONAL FOLK DANCE',NULL),
    (NULL, 'SPEAK++', 'The Teaching of Speaking',NULL),
    (NULL, 'SPECTO2', 'Special Topics in Education 2',NULL),
    (NULL, 'SPECTO3', 'Special Topics in Education 3',NULL),
    (NULL, 'STATONE', 'Basic Statistics',NULL),
    (NULL, 'SYMLOG+', 'Symbolic Logic',NULL),
    (NULL, 'SYNTHES', 'Synthesis',NULL),
    (NULL, 'SYSDES+', 'Systems Analysis and Design',NULL),
    (NULL, 'TEACH6U', 'Student Teaching',NULL),
    (NULL, 'TEACHLI', 'Teaching of Literature',NULL),
    (NULL, 'TEAM+++', 'P.E.4 - Team Sports Volleyball',NULL),
    (NULL, 'TECHCOM', 'Technical Communications',NULL),
    (NULL, 'TECHWRI', 'Technical Writing Business Correspondence and Report Writing',NULL),
    (NULL, 'TECPROF', 'Teaching Profession',NULL),
    (NULL, 'TELALIR', 'Language Research',NULL),
    (NULL, 'THEOPRO', 'Probability',NULL),
    (NULL, 'THEORY1', 'THEORIES OF PERSONALITY',NULL),
    (NULL, 'THERMDY', 'Thermodynamics',NULL),
    (NULL, 'THESIS1', 'Thesis/Special Problem',NULL),
    (NULL, 'TOTALQM', 'Total Quality Management',NULL),
    (NULL, 'TOURIND', 'Tourism Industry Overview',NULL),
    (NULL, 'TOURIS2', 'TOURISM PLANNING AND DEVELOPMENT',NULL),
    (NULL, 'TOURLAW', 'Toursm Laws, Legal Responsibilities and Taxation',NULL),
    (NULL, 'TOURPRO', 'Tourism Promotions and Marketing',NULL),
    (NULL, 'TOURSEL', 'Tourism Impacts and Sustainability',NULL),
    (NULL, 'TOURTRA', 'Travel Agency Management and Operations',NULL),
    (NULL, 'TQM++++', 'Total Quality Management',NULL),
    (NULL, 'TRANTAX', 'Transfer and Business Taxation',NULL),
    (NULL, 'TRAVDOC', 'Travel Documentation',NULL),
    (NULL, 'TRIGO3U', 'TRIGONOMETRY',NULL),
    (NULL, 'VALTWO+', 'Multi-Intelligence',NULL),
    (NULL, 'WEBDEV+', 'Web Development',NULL),
    (NULL, 'WEBPROD', 'WEBPAGE DESIGN AND PRODUCTION',NULL),
    (NULL, 'WESTHOU', 'Approach to Western and Eastern Thougts',NULL),
    (NULL, 'WORLDLI', 'Word Literature',NULL)
    ;

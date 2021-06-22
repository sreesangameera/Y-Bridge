<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        
        DB::table('users')->insert([
            'role'=> 'Admin',
            'fname'=>'Ybridge',
            'lname'=>'Admin',
            'email'=>'ybridgeadmin@univ.jfn.ac.lk',
            'password'=> Hash::make('abcd1234'),
        ]);
        DB::table('users')->insert([
            'role'=> 'Student',
            'fname'=>'Vishnuga',
            'lname'=>'Sivakumaran',
            'email'=>'vs@gmail.com',
            'password'=> Hash::make('abcd1234'),
        ]);
        DB::table('users')->insert([
            'role'=> 'Student',
            'fname'=>'Rasika',
            'lname'=>'Lakmal',
            'email'=>'rld@gmail.com',
            'password'=> Hash::make('abcd1234'),
        ]);
        DB::table('users')->insert([
            'role'=> 'Student',
            'fname'=>'Lalitha',
            'lname'=>'Weerawardhana',
            'email'=>'lw@gmail.com',
            'password'=> Hash::make('abcd1234'),
        ]);
        DB::table('users')->insert([
            'role'=> 'Student',
            'fname'=>'Sreesangameera',
            'lname'=>'Sreeskantharajaah',
            'email'=>'ss@gmail.com',
            'password'=> Hash::make('abcd1234'),
        ]);
        DB::table('users')->insert([
            'role'=> 'Student',
            'fname'=>'Kavikshana',
            'lname'=>'Ujantha Premalal',
            'email'=>'ku@gmail.com',
            'password'=> Hash::make('abcd1234'),
        ]);

      DB::table('users')->insert([
            'role'=> 'Student',
            'fname'=>'Sahan',
            'lname'=>'Herath',
            'email'=>'sahandherath@gmail.com',
            'password'=> Hash::make('abcd1234'),
        ]);

       DB::table('users')->insert([
            'role'=> 'Student',
            'fname'=>'Samitha',
            'lname'=>'Dilan',
            'email'=>'samitadil@gmail.com',
            'password'=> Hash::make('abcd1234'),
        ]);


        DB::table('users')->insert([
            'role'=> 'Student',
            'fname'=>'Nilaxy',
            'lname'=>'Thirugnanseelan',
            'email'=>'nilaxyseelan@gmail.com',
            'password'=> Hash::make('abcd1234'),
        ]);


        DB::table('users')->insert([
            'role'=> 'Student',
            'fname'=>'Vithushan',
            'lname'=>'Logeswaran',
            'email'=>'vithushan@ieee.org',
            'password'=> Hash::make('abcd1234'),
        ]);


        DB::table('students')->insert([
            'StudentID'=> '2016/CSC/002',
            'photo'=>'sahand.herath@gmail.com.jpg',
            'FirstName'=>'Sahan',
            'LastName'=>'Herath',
            'Gender'=>'Male',
            'DateOfBirth'=>'1996-05-26',
            'HomeAddress'=>'kandy',
            'EmailID'=>' sahandherath@gmail.com',
            'LinkedIn'=>'https://www.linkedin.com/in/sahan-herath-035741192/',
            'ContactNumber'=>'0773456784',
            'YearOfStudy'=>'Level-4S',
            'StudyProgramme'=>'Computer Science',
            'SubjectsOffered'=>'CSC',
            'Skills'=>'Deep Learning,E-Learning,High Performance Computing,Human Computer Interaction,Image Processing,Information Systems,Intelligent Systems,IoT',
            
        ]);

        DB::table('students')->insert([
            'StudentID'=> '2016/CSC/003',
            'photo'=>'samitadil@gmail.com.jpg',
            'FirstName'=>'Samitha',
            'LastName'=>'Dilan',
            'Gender'=>'Male',
            'DateOfBirth'=>'1996-06-26',
            'HomeAddress'=>'Ratnapura',
            'EmailID'=>'samitadil@gmail.com',
            'LinkedIn'=>'https://www.linkedin.com/in/samithadilan/',
            'ContactNumber'=>'0773456704',
            'YearOfStudy'=>'Level-4S',
            'StudyProgramme'=>'Computer Science',
            'SubjectsOffered'=>'CSC',
            'Skills'=>'Knowledge Representation,Local Language Computing,Machine Learning,Medical Image Analysis,Medical Imaging,Mobile Computing,Natural Language Processing',
            
        ]);

     
        DB::table('students')->insert([
            'StudentID'=> '2017/SP/002',
            'photo'=>'vs@gmail.com.jpg',
            'FirstName'=>'Vishnuga',
            'LastName'=>'Sivakumaran',
            'Gender'=>'Female',
            'DateOfBirth'=>'1996-03-04',
            'HomeAddress'=>'jaffna',
            'EmailID'=>'vs@gmail.com',
            'LinkedIn'=>'https://www.linkedin.com/in/vishnuga-sivakumaran-a900431a4/',
            'ContactNumber'=>'6',
            'YearOfStudy'=>'Level-3M',
            'StudyProgramme'=>'Computer Science',
            'SubjectsOffered'=>'Direct Computer Science',
            'Skills'=>'Data Mining,Neural Networks,Natural Language Processing,Operating Systems,Parallel Computing',
        ]);
        DB::table('students')->insert([
            'StudentID'=> '2017/SP/040',
            'photo'=>'rl@gmail.com.jpg',
            'FirstName'=>'Rasika',
            'LastName'=>'Lakmal Dassanayaka',
            'Gender'=>'Male',
            'DateOfBirth'=>'1996-12-02',
            'HomeAddress'=>'Gampaha',
            'EmailID'=>'rld@gmail.com',
            'LinkedIn'=>'https://www.linkedin.com/in/rasika-lakmal-dassanayaka-11a52b173/',
            'ContactNumber'=>'0718919576',
            'YearOfStudy'=>'Level-3G',
            'StudyProgramme'=>'Computer Science',
            'SubjectsOffered'=>'PMM,STA,CSC',
            'Skills'=>'IoT,Knowledge Representation,Local Language Computing,Machine Learning,Medical Image Analysis,Medical Imaging',
            
        ]);
        DB::table('students')->insert([
            'StudentID'=> '2017/SP/050',
            'photo'=>'lw@gmail.com.jpg',
            'FirstName'=>'Lalitha',
            'LastName'=>'Weerawardhana',
            'Gender'=>'Male',
            'DateOfBirth'=>'1996-10-06',
            'HomeAddress'=>'Kurunegala',
            'EmailID'=>'lw@gmail.com',
            'LinkedIn'=>'https://www.linkedin.com/in/lalitha-weerawardhana-4247051b2',
            'ContactNumber'=>'0775332814',
            'YearOfStudy'=>'Level-3G',
            'StudyProgramme'=>'Physical Science',
            'SubjectsOffered'=>'PMM,STA,CSC',
            'Skills'=>'E-Learning,Human Computer Interaction,Image Processing,Information Systems,Intelligent Systems',
            
        ]);
        DB::table('students')->insert([
            'StudentID'=> '2017/SP/279',
            'photo'=>'ss@gmail.com.jpg',
            'FirstName'=>'Sreesangameera',
            'LastName'=>'Sreeskantharajaah',
            'Gender'=>'Female',
            'DateOfBirth'=>'1996-06-25',
            'HomeAddress'=>'Jaffna',
            'EmailID'=>'ss@gmail.com',
            'LinkedIn'=>'https://www.linkedin.com/in/sreesangameera-sreeskantharajaah',
            'ContactNumber'=>'89',
            'YearOfStudy'=>'Level-3G',
            'StudyProgramme'=>'Physical Science',
            'SubjectsOffered'=>'PMM,PHY,CSC',
            'Skills'=>'Data Communication,High Performance Computing,Database Management Systems,Deep Learning',
            
        ]);
        DB::table('students')->insert([
            'StudentID'=> '2017/SP/167',
            'photo'=>'ku@gmail.com.jpg',
            'FirstName'=>'Kavikshana',
            'LastName'=>'Ujantha Premalal',
            'Gender'=>'Female',
            'DateOfBirth'=>'1997-02-04',
            'HomeAddress'=>'Trinco',
            'EmailID'=>'ku@gmail.com',
            'LinkedIn'=>'https://www.linkedin.com/in/kavikshana-ujanthapremalal-b20066140',
            'ContactNumber'=>'3',
            'YearOfStudy'=>'Level-3G',
            'StudyProgramme'=>'Physical Science',
            'SubjectsOffered'=>'PMM,STA,CSC',
            'Skills'=>'Computer Graphics,Computer Networks,Computer Vision,Cryptography,Data Communication',
            
        ]);


       DB::table('students')->insert([
            'StudentID'=> '2018/CSC/002',
            'photo'=>'nilaxyseelan@gmail.com.jpg',
            'FirstName'=>'Nilaxy',
            'LastName'=>'Thirugnanseelan',
            'Gender'=>'Female',
            'DateOfBirth'=>'1998-09-21',
            'HomeAddress'=>'Jaffna',
            'EmailID'=>'nilaxyseelan@gmail.com',
            'LinkedIn'=>'https://www.linkedin.com/in/nilaxy-seelan-6517781a4/',
            'ContactNumber'=>'0773456774',
            'YearOfStudy'=>'Level-2S',
            'StudyProgramme'=>'Computer Science',
            'SubjectsOffered'=>'CSC',
            'Skills'=>'Artificial Intelligence,Automata Theory,Big Data Analysis,Bioinformatics Computing,Blockchain,Compiler Design,Computer Architecture',
            
        ]);




        DB::table('students')->insert([
            'StudentID'=> '2018/CSC/003',
            'photo'=>'vithushan@ieee.org.jpg',
            'FirstName'=>'Vithushan',
            'LastName'=>'Logeswaran',
            'Gender'=>'Male',
            'DateOfBirth'=>'1998-06-21',
            'HomeAddress'=>'Jaffna',
            'EmailID'=>'vithushan@ieee.org',
            'LinkedIn'=>'https://www.linkedin.com/in/vithushan-logeswaran-b2658b181/',
            'ContactNumber'=>'0773456686',
            'YearOfStudy'=>'Level-2S',
            'StudyProgramme'=>'Computer Science',
            'SubjectsOffered'=>'CSC',
            'Skills'=>'Computer Graphics,Computer Networks,Computer Vision,Cryptography,Data Communication,Data Mining,Database Management Systems',
            
        ]);



        
       
        DB::table('industrialists')->insert([
            'Photo'=> 'HP@gmail.com.jpg',
            'Title'=>'Mr.',
            'NameWithInitials'=>' H.Purasinghe',
            'Designation'=>'Founder and CEO',
            'CompanyPersonalEmailID'=>'HP@gmail.com',
            'LinkedIn'=>'https://www.linkedin.com/in/harsha-purasinghe-8713504?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3Bb28Ls99zS3KCs8VUQQPerA%3D%3D',
            'FieldOfInterests'=>'Artificial Intelligence,Automata Theory,Big Data Analysis,Compiler Design,Computer Graphics,Data Mining,Image Processing',
            'ContactNumber'=>'0775332814',
            'CompanyName'=>'WSO2',

        ]);

        DB::table('users')->insert([
            'role'=> 'Industry',
            'fname'=>'Harsha ',
            'lname'=>'Purasinghe',
            'email'=>'HP@gmail.com',
            'password'=> Hash::make('abcd1234'),
        ]);

    
        DB::table('industrialists')->insert([
            'Photo'=> 'MSa@gmail.com.jpg',
            'Title'=>'Mr.',
            'NameWithInitials'=>' M.Sekaram',
            'Designation'=>'Founder and CEO',
            'CompanyPersonalEmailID'=>'MSa@gmail.com',
            'LinkedIn'=>'https://www.linkedin.com/in/manosekaram?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3B2RxXZXYBTSCyMZGM3IYkmA%3D%3D',
            'FieldOfInterests'=>'Parallel Computing,Rapid Application Development,Social Network Analysis,Software-defined Networking,Spiking Neural Networks,System Design and Analysis,Web Technologies',
            'ContactNumber'=>'0778218520',
            'CompanyName'=>'99x and StartupX Foundry',

        ]);

        DB::table('users')->insert([
            'role'=> 'Industry',
            'fname'=>'Mano ',
            'lname'=>'Sekaram',
            'email'=>'MSa@gmail.com',
            'password'=> Hash::make('abcd1234'),
        ]);

       

        DB::table('industrialists')->insert([
            'Photo'=> 'SG@gmail.com.jpg',
            'Title'=>'Mr.',
            'NameWithInitials'=>' S.Gamwarige',
            'Designation'=>'General Manager and VP Engineering',
            'CompanyPersonalEmailID'=>'SG@gmail.com',
            'LinkedIn'=>'https://www.linkedin.com/in/sankalpa-gamwarige-35a58b8?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BbuKuDM%2BNSbmmAt5kWhDV5A%3D%3D',
            'FieldOfInterests'=>'Numerical Computing,Operating Systems,Opportunistic Network,Organizational Behaviour,Parallel Computing,Rapid Application Development',
            'ContactNumber'=>'0812464446',
            'CompanyName'=>'Zone24x7 Inc',

        ]);

        DB::table('users')->insert([
            'role'=> 'Industry',
            'fname'=>'Sankalpa',
            'lname'=>'Gamwarige',
            'email'=>'SG@gmail.com',
            'password'=> Hash::make('abcd1234'),
        ]);

        DB::table('industrialists')->insert([
            'Photo'=> 'MR@gmail.com.jpg',
            'Title'=>'Mr.',
            'NameWithInitials'=>'M.Ratnayake',
            'Designation'=>'Chief Information Officer and Board Member',
            'CompanyPersonalEmailID'=>'MR@gmail.com',
            'LinkedIn'=>'https://www.linkedin.com/in/maduratnayake?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BOp1QeRLZTTSFVnk9jJ%2B5GA%3D%3D',
            'FieldOfInterests'=>'Data Mining,Database Management Systems,Deep Learning,E-Learning,High Performance Computing,Human Computer Interaction',
            'ContactNumber'=>'0723845548',
            'CompanyName'=>'Virtusa',

        ]);

        DB::table('users')->insert([
            'role'=> 'Industry',
            'fname'=>'Madu',
            'lname'=>'Ratnayake',
            'email'=>'MR@gmail.com',
            'password'=> Hash::make('abcd1234'),
        ]);

        DB::table('industrialists')->insert([
		'Photo'=> 'DP@gmail.com.jpg',
        'Title'=>'Mr.',
		'NameWithInitials'=>'D.Perera',
		'Designation'=>'Tech Evangelist',
		'CompanyPersonalEmailID'=>'DP@gmail.com',
		'LinkedIn'=>'https://www.linkedin.com/in/dinuthperera',
		'FieldOfInterests'=>'Machine Learning,Medical Image Analysis,Medical Imaging,Mobile Computing,Natural Language Processing,Neural Networks,Numerical Computing',
		'ContactNumber'=>'0771234567',
		'CompanyName'=>'Odoo Dev',
	]);
	

        DB::table('users')->insert([
            'role'=> 'Industry',
            'fname'=>'Dinuth',
            'lname'=>'Perera',
            'email'=>'DP@gmail.com',
            'password'=> Hash::make('abcd1234'),
        ]);



        DB::table('industrialists')->insert([
		'Photo'=> 'KMb@gmail.com.jpg',
        'Title'=>'Mr.',
		'NameWithInitials'=>'K.Malinda',
		'Designation'=>'Flutter Developer',
		'CompanyPersonalEmailID'=>'KMb@gmail.com',
		'LinkedIn'=>'https://www.linkedin.com/in/kamal-malinda',
		'FieldOfInterests'=>'Image Processing,Information Systems,Intelligent Systems,IoT,Knowledge Representation,Local Language Computing,Machine Learning',
		'ContactNumber'=>'0772345678',
		'CompanyName'=>'83 Studios',
	]);
        DB::table('users')->insert([
            'role'=> 'Industry',
            'fname'=>'Kamal',
            'lname'=>'Malinda',
            'email'=>'KMb@gmail.com',
            'password'=> Hash::make('abcd1234'),
        ]);


        DB::table('industrialists')->insert([
		'Photo'=> 'NJ@gmail.com.jpg',
        'Title'=>'Mr.',
		'NameWithInitials'=>'N.Jaleel',
		'Designation'=>'Cheif Operating Officer',
		'CompanyPersonalEmailID'=>'NJ@gmail.com',
		'LinkedIn'=>'https://www.linkedin.com/in/noorain-jaleel-a52586175',
		'FieldOfInterests'=>'Computer Architecture,Computer Graphics,Computer Networks,Computer Vision,Cryptography,Data Communication,Data Mining',
		'ContactNumber'=>'0773465789',
		'CompanyName'=>'KeenEye',
	]);


        DB::table('users')->insert([
            'role'=> 'Industry',
            'fname'=>'Noorain',
            'lname'=>'Jaleel',
            'email'=>'NJ@gmail.com',
            'password'=> Hash::make('abcd1234'),
        ]);


        DB::table('industrialists')->insert([
		'Photo'=> 'PW@gmail.com.jpg',
        'Title'=>'Mr.',
		'NameWithInitials'=>'P.Weerasekara',
		'Designation'=>'Chief Operating Officer',
		'CompanyPersonalEmailID'=>'PW@gmail.com',
		'LinkedIn'=>'https://www.linkedin.com/in/panduka-weerasekara-672165111',
		'FieldOfInterests'=>'Artificial Intelligence,Automata Theory,Big Data Analysis,Bioinformatics Computing,Blockchain,Compiler Design',
		'ContactNumber'=>'0762345768',
		'CompanyName'=>'PelicanCube',
	]);

    DB::table('users')->insert([
            'role'=> 'Industry',
            'fname'=>'Panduka',
            'lname'=>'Weerasekara',
            'email'=>'PW@gmail.com',
            'password'=> Hash::make('abcd1234'),
        ]);









        DB::table('academics')->insert([
            'EmployeeID'=> '01',
            'Photo'=>'SM@gmail.com.jpg',
            'Title'=>'Dr.',
            'FirstName'=>'S',
            'LastName'=>' Mahesan',
            'Gender'=>'Male',
            'DateOfBirth'=>'1967-05-12',
            'Designation'=>'Senior Lecturer',
            'AdminRole'=>'',
            'EmailID'=>'SM@gmail.com',
            'LinkedIn'=>'https://www.linkedin.com/in/mahesan-s-5003583?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BB1rqRyszQpisVhHuf23jBA%3D%3D',
            'ContactNumber'=>'0212218194',
            'OfficialWebsite'=>'http://www.csc.jfn.ac.lk/index.php/profile-dr-s-mahesan/',
            'ResearchInterest'=>'Knowledge Representation,Natural Language Processing,Automata Theory,Intelligent Systems,Information Systems,High Performance Computing,Numerical Computing,Image Processing,BioInformatics Computing',
            
        ]);

        DB::table('users')->insert([
            'role'=> 'Lecturer',
            'fname'=>'S',
            'lname'=>'Mahesan',
            'email'=>'SM@gmail.com',
            'password'=> Hash::make('abcd1234'),
        ]);

        DB::table('academics')->insert([
            'EmployeeID'=> '02',
            'Photo'=>'EC@gmail.com.jpg',
            'Title'=>'Dr.',
            'FirstName'=>'Eugene',
            'LastName'=>'Charles',
            'Gender'=>'Male',
            'DateOfBirth'=>'1970-02-24',
            'Designation'=>'Senior Lecturer',
            'AdminRole'=>'',
            'EmailID'=>'EC@gmail.com',
            'LinkedIn'=>'https://www.linkedin.com/in/charles-eugene-79351341?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BmA27V%2BNeQ1GzZR3eX1ukpw%3D%3D',
            'ContactNumber'=>'0775698523',
            'OfficialWebsite'=>'http://www.csc.jfn.ac.lk/index.php/profile-dr-e-y-a-charles/',
            'ResearchInterest'=>'Data Mining,Machine Learning,Neural Networks,Spiking Neural Networks',
            

        ]);

        DB::table('users')->insert([
            'role'=> 'Lecturer',
            'fname'=>'Eugene',
            'lname'=>'Charles',
            'email'=>'EC@gmail.com',
            'password'=> Hash::make('abcd1234'),
        ]);


        DB::table('academics')->insert([
            'EmployeeID'=> '03',
            'Photo'=>'KT@gmail.com.jpg',
            'Title'=>'Dr.',
            'FirstName'=>'Kathiravelu',
            'LastName'=>'Thabotharan',
            'Gender'=>'Male',
            'DateOfBirth'=>'1969-05-29',
            'Designation'=>'Senior Lecturer',
            'AdminRole'=>'',
            'EmailID'=>'KT@gmail.com',
            'LinkedIn'=>'https://www.linkedin.com/in/thabotharan?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3B8AHwMGZ8ROO4uuxJvAtp9w%3D%3D',
            'ContactNumber'=>'0775648972',
            'OfficialWebsite'=>'http://www.csc.jfn.ac.lk/index.php/profile-dr-k-thabotharan/',
            'ResearchInterest'=>'Opportunistic Network,Computer Networks,Social Network Analysis,IoT,Big Data Analysis',
            
        ]);

        DB::table('users')->insert([
            'role'=> 'Lecturer',
            'fname'=>'Kathiravelu',
            'lname'=>'Thabotharan',
            'email'=>'KT@gmail.com',
            'password'=> Hash::make('abcd1234'),
        ]);


        DB::table('academics')->insert([
            'EmployeeID'=> '04',
            'Photo'=>'AR@gmail.com.jpg',
            'Title'=>'Dr.',
            'FirstName'=>'Amirthalingam',
            'LastName'=>'Ramanan',
            'Gender'=>'Male',
            'DateOfBirth'=>'1968-04-18',
            'Designation'=>'Senior Lecturer',
            'AdminRole'=>'',
            'EmailID'=>'AR@gmail.com',
            'LinkedIn'=>'https://www.linkedin.com/in/amirthalingam-ramanan-23337221?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BqAzsvYvjQOC3rf%2FcDlW7Tg%3D%3D',
            'ContactNumber'=>'0740543210',
            'OfficialWebsite'=>'http://www.csc.jfn.ac.lk/index.php/profile-dr-a-ramanan/',
            'ResearchInterest'=>'Image Processing,Computer Vision,Machine Learning,Deep Learning',
            

        ]);

        DB::table('users')->insert([
            'role'=> 'Lecturer',
            'fname'=>'Amirthalingam',
            'lname'=>'Ramanan',
            'email'=>'AR@gmail.com',
            'password'=> Hash::make('abcd1234'),
        ]);


        DB::table('academics')->insert([
            'EmployeeID'=> '05',
            'Photo'=>'BM@gmail.com.jpg',
            'Title'=>'Dr.',
            'FirstName'=>'Barathy',
            'LastName'=>'Mayurathan',
            'Gender'=>'Female',
            'DateOfBirth'=>'1970-06-25',
            'Designation'=>'Senior Lecturer',
            'AdminRole'=>'',
            'EmailID'=>'BM@gmail.com',
            'LinkedIn'=>'https://www.linkedin.com/in/barathy-mayurathan-b0633317a?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_vie w_base_contact_details%3B85oGMDTLSaCDTRQDVWkJWg%3D%3D',
            'ContactNumber'=>'0723845562',
            'OfficialWebsite'=>'http://www.csc.jfn.ac.lk/index.php/profile-dr-mrs-b-mayurathan/',
            'ResearchInterest'=>'Computer Vision,Machine Learning',
            

        ]);

        DB::table('users')->insert([
            'role'=> 'Lecturer',
            'fname'=>'Barathy',
            'lname'=>'Mayurathan',
            'email'=>'BM@gmail.com',
            'password'=> Hash::make('abcd1234'),
        ]);


        DB::table('academics')->insert([
            'EmployeeID'=> '06',
            'Photo'=>'MS@gmail.com.jpg',
            'Title'=>'Dr.',
            'FirstName'=>'Manivannan',
            'LastName'=>'Siyamalan',
            'Gender'=>'Male',
            'DateOfBirth'=>'1976-08-14',
            'Designation'=>'Senior Lecturer',
            'AdminRole'=>'',
            'EmailID'=>'MS@gmail.com',
            'LinkedIn'=>'https://www.linkedin.com/in/siyamalanmanivannan?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3Ba59PqMYUTC%2BfJKu%2BeV3q%2BQ%3D%3D',
            'ContactNumber'=>'0775446259',
            'OfficialWebsite'=>'http://www.csc.jfn.ac.lk/index.php/profile-dr-m-siyamalan/',
            'ResearchInterest'=>'Deep Learning,Machine Learning,Computer Vision,Medical Image Analysis',
           

        ]);

        DB::table('users')->insert([
            'role'=> 'Lecturer',
            'fname'=>'Manivannan',
            'lname'=>'Siyamalan',
            'email'=>'MS@gmail.com',
            'password'=> Hash::make('abcd1234'),
        ]);


        DB::table('academics')->insert([
            'EmployeeID'=> '07',
            'Photo'=>'KS@gmail.com.jpg',
            'Title'=>'Mr.',
            'FirstName'=>'Kengatharaiyer',
            'LastName'=>'Sarveswaran',
            'Gender'=>'Male',
            'DateOfBirth'=>'1980-06-10',
            'Designation'=>'Lecturer',
            'AdminRole'=>'',
            'EmailID'=>'KS@gmail.com',
            'LinkedIn'=>'https://www.linkedin.com/in/iamsarves?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3Bf8HfoLXMRpu8z6BdMdXSUw%3D%3D',
            'ContactNumber'=>'0785265984',
            'OfficialWebsite'=>'http://www.csc.jfn.ac.lk/index.php/profile-mr-k-sarveswaran/',
            'ResearchInterest'=>'E-Learning,Local Language Computing,Web Technologies',
            
        ]);

        DB::table('users')->insert([
            'role'=> 'Lecturer',
            'fname'=>'Kengatharaiyer',
            'lname'=>'Sarveswaran',
            'email'=>'KS@gmail.com',
            'password'=> Hash::make('abcd1234'),
        ]);


        DB::table('academics')->insert([
            'EmployeeID'=> '08',
            'Photo'=>'SSa@gmail.com.jpg',
            'Title'=>'Mr.',
            'FirstName'=>'Sriskandarajah',
            'LastName'=>'Shriparen',
            'Gender'=>'Male',
            'DateOfBirth'=>'1979-08-15',
            'Designation'=>'Lecturer (Probationary)',
            'AdminRole'=>'',
            'EmailID'=>'SSa@gmail.com',
            'LinkedIn'=>'https://www.linkedin.com/in/sriskandarajah-shriparen-43583737?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3B1UCej2%2F1TPu9isUsC5S84Q%3D%3D',
            'ContactNumber'=>'0776542589',
            'OfficialWebsite'=>'http://www.csc.jfn.ac.lk/index.php/profile-mr-s-shriparen/',
            'ResearchInterest'=>'Computer Networks,Software-defined Networking',
            
        ]);

        DB::table('users')->insert([
            'role'=> 'Lecturer',
            'fname'=>'Sriskandarajah',
            'lname'=>'Shriparen',
            'email'=>'SSa@gmail.com',
            'password'=> Hash::make('abcd1234'),
        ]);


        DB::table('academics')->insert([
            'EmployeeID'=> '09',
            'Photo'=>'ST@gmail.com.jpg',
            'Title'=>'Ms.',
            'FirstName'=>'Samantha',
            'LastName'=>'Tharani',
            'Gender'=>'Female',
            'DateOfBirth'=>'1984-06-30',
            'Designation'=>'Lecturer (Probationary)',
            'AdminRole'=>'',
            'EmailID'=>'ST@gmail.com',
            'LinkedIn'=>'https://www.linkedin.com/in/samanthajeyakumar?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3Bxst0nxYkSz2Aei88Qh7FuQ%3D%3D',
            'ContactNumber'=>'212218194',
            'OfficialWebsite'=>'http://www.csc.jfn.ac.lk/index.php/profile-ms-j-samantha-tharani/',
            'ResearchInterest'=>'Database Management Systems,Blockchain,IoT,Big Data Analysis',
            

        ]);

        DB::table('users')->insert([
            'role'=> 'Lecturer',
            'fname'=>'Samantha',
            'lname'=>'Tharani',
            'email'=>'ST@gmail.com',
            'password'=> Hash::make('abcd1234'),
        ]);

        DB::table('users')->insert([
            'role'=> 'Lecturer',
            'fname'=>'Somaskandan',
            'lname'=>'Suthakar',
            'email'=>'SSaa@gmail.com',
            'password'=> Hash::make('abcd1234'),
        ]);

        DB::table('academics')->insert([
            'EmployeeID'=> '10',
            'Photo'=>'SSaa@gmail.com.jpg',
            'Title'=>'Mr.',
            'FirstName'=>'Somaskandan',
            'LastName'=>'Suthakar',
            'Gender'=>'Male',
            'DateOfBirth'=>'1984-06-30',
            'Designation'=>'Senior Lecturer',
            'AdminRole'=>'Head of the Department',
            'EmailID'=>'SSaa@gmail.com',
            'LinkedIn'=>'https://www.linkedin.com/in/suthakar-somaskandan-4a96031a/?originalSubdomain=lk',
            'ContactNumber'=>'212218193',
            'OfficialWebsite'=>'http://www.csc.jfn.ac.lk/index.php/profile-mr-s-suthakar/',
            'ResearchInterest'=>'Computer Graphics,High Performance Computing,Medical Imaging'
        ]);

        
        DB::table('student_societies')->insert([
            'Link'=> 'www.society.jfn.ac.lk/comsoc/',
            'Date'=>'',
            'EName'=>'CompSoc',
            'Description'=>'Our aims and objectives to promote the dissemination of scientific knowledge with special emphasis on Computers and their application.',
        ]);
        DB::table('student_societies')->insert([
            'Link'=> 'www.facebook.com/uojgavelclub/?_rdc=1&_rdr',
            'Date'=>'',
            'EName'=>'Gavel-Club',
            'Description'=>'The Gavel Club of the University of Jaffna was initiated in 2018 by Computer Society of Department of Computer Science, Faculty of Science, University of Jaffna.',
        ]);
        DB::table('student_societies')->insert([
            'Link'=> 'www.society.jfn.ac.lk/ieee/',
            'Date'=>'',
            'EName'=>'IEEE Student Branch',
            'Description'=>'The IEEE student branch of the University of Jaffna, Sri Lanka consists of IEEE members from the Department of Computer Science and Faculty of Engineering of the University of Jaffna.',
        ]);
        DB::table('upcoming_events')->insert([
            'Link'=> 't.me/c/1194079853/1099',
            'Date'=>'2021-03-28',
            'EName'=>'UOJ ECE 2019 ',
            'Description'=>'see more details through link provided',
            
        ]);

        
    
        //$this->call(RoleSeeder::class);
        //$this->call(UserSeeder::class);
        $this->call(DictionarySeeder::class);
        $this->call(MainTerm::class);
    
        
    }

}

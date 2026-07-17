<?php
// Static content data for the site. Centralized so it is easy to extend
// (e.g., move to database later) and consistent across pages.

function programs_data(): array {
    return [
        [
            'id' => 'cs',
            'title' => 'BSc in Computer Science',
            'level' => 'Degree',
            'duration' => '4 Years',
            'icon' => 'cpu',
            'accent' => 'blue',
            'blurb' => 'Software engineering, AI, and data systems built on a strong theoretical foundation.',
            'highlights' => ['Algorithms & Data Structures', 'Machine Learning', 'Web & Mobile Development', 'Cloud Systems'],
            'tuition' => 'ETB 38,000 / year',
        ],
        [
            'id' => 'bus',
            'title' => 'BA in Business Administration',
            'level' => 'Degree',
            'duration' => '4 Years',
            'icon' => 'briefcase',
            'accent' => 'green',
            'blurb' => "Entrepreneurship, finance, and management for Ethiopia's growing economy.",
            'highlights' => ['Financial Management', 'Marketing Strategy', 'Operations & Supply Chain', 'Entrepreneurship'],
            'tuition' => 'ETB 32,000 / year',
        ],
        [
            'id' => 'eng',
            'title' => 'BSc in Civil Engineering',
            'level' => 'Degree',
            'duration' => '5 Years',
            'icon' => 'ruler',
            'accent' => 'amber',
            'blurb' => 'Infrastructure, structural design, and sustainable construction practices.',
            'highlights' => ['Structural Analysis', 'Hydraulics', 'Construction Management', 'Geotechnics'],
            'tuition' => 'ETB 42,000 / year',
        ],
        [
            'id' => 'nurse',
            'title' => 'BSc in Nursing',
            'level' => 'Degree',
            'duration' => '4 Years',
            'icon' => 'heart',
            'accent' => 'rose',
            'blurb' => "Community health and clinical practice for Ethiopia's healthcare sector.",
            'highlights' => ['Clinical Practice', 'Community Health', 'Pharmacology', 'Patient Care Systems'],
            'tuition' => 'ETB 36,000 / year',
        ],
        [
            'id' => 'account',
            'title' => 'Diploma in Accounting & Finance',
            'level' => 'TVET Diploma',
            'duration' => '2 Years',
            'icon' => 'calculator',
            'accent' => 'teal',
            'blurb' => 'Practical accounting, taxation, and payroll for immediate employment.',
            'highlights' => ['Bookkeeping', 'Taxation', 'Payroll Systems', 'Audit Fundamentals'],
            'tuition' => 'ETB 18,000 / year',
        ],
        [
            'id' => 'ict',
            'title' => 'Diploma in Information Technology',
            'level' => 'TVET Diploma',
            'duration' => '2 Years',
            'icon' => 'network',
            'accent' => 'indigo',
            'blurb' => 'Networking, hardware, and support skills for IT operations roles.',
            'highlights' => ['Network Administration', 'System Support', 'Cybersecurity Basics', 'Database Admin'],
            'tuition' => 'ETB 20,000 / year',
        ],
        [
            'id' => 'hosp',
            'title' => 'Diploma in Hospitality & Tourism',
            'level' => 'TVET Diploma',
            'duration' => '2 Years',
            'icon' => 'globe',
            'accent' => 'orange',
            'blurb' => "Hotel operations, tour guiding, and Ethiopia's growing tourism industry.",
            'highlights' => ['Hotel Operations', 'Tour Guiding', 'Food & Beverage', 'Customer Experience'],
            'tuition' => 'ETB 16,000 / year',
        ],
        [
            'id' => 'arch',
            'title' => 'Diploma in Architectural Drafting',
            'level' => 'TVET Diploma',
            'duration' => '2 Years',
            'icon' => 'building',
            'accent' => 'slate',
            'blurb' => 'CAD, building design, and modern drafting for construction firms.',
            'highlights' => ['AutoCAD', 'Building Information Modeling', 'Site Planning', '3D Visualization'],
            'tuition' => 'ETB 19,000 / year',
        ],
    ];
}

function faculty_data(): array {
    return [
        [
            'name' => 'Dr. Selamawit Bekele',
            'role' => 'Dean, Faculty of Computing',
            'qual' => 'PhD, Computer Science - University of Cape Town',
            'bio' => 'Researcher in machine learning and AI ethics with 15 years in academia and industry.',
            'photo' => 'https://images.pexels.com/photos/5212317/pexels-photo-5212317.jpeg?auto=compress&cs=tinysrgb&w=400',
        ],
        [
            'name' => 'Dr. Abebe Mengistu',
            'role' => 'Head, Business School',
            'qual' => 'PhD, Business Administration - Addis Ababa University',
            'bio' => 'Strategy and entrepreneurship scholar; advisor to several Ethiopian startups.',
            'photo' => 'https://images.pexels.com/photos/8961065/pexels-photo-8961065.jpeg?auto=compress&cs=tinysrgb&w=400',
        ],
        [
            'name' => 'Eng. Hiwot Tadesse',
            'role' => 'Head, Civil Engineering Department',
            'qual' => 'MSc, Structural Engineering - TU Delft',
            'bio' => 'Licensed engineer with expertise in seismic design and sustainable materials.',
            'photo' => 'https://images.pexels.com/photos/5212703/pexels-photo-5212703.jpeg?auto=compress&cs=tinysrgb&w=400',
        ],
        [
            'name' => 'Dr. Yonas Girma',
            'role' => 'Director, Nursing Program',
            'qual' => 'PhD, Public Health - Johns Hopkins University',
            'bio' => 'Leads community health partnerships with regional hospitals across Ethiopia.',
            'photo' => 'https://images.pexels.com/photos/5407206/pexels-photo-5407206.jpeg?auto=compress&cs=tinysrgb&w=400',
        ],
        [
            'name' => 'Mr. Daniel Assefa',
            'role' => 'Lead Instructor, IT & Networking',
            'qual' => 'MSc, Information Systems - University of Twente',
            'bio' => 'Cisco-certified trainer; built enterprise networks for banks and telecoms.',
            'photo' => 'https://images.pexels.com/photos/5212343/pexels-photo-5212343.jpeg?auto=compress&cs=tinysrgb&w=400',
        ],
        [
            'name' => 'Ms. Meron Tesfaye',
            'role' => 'Coordinator, Hospitality & Tourism',
            'qual' => 'MA, Tourism Management - University of Guelph',
            'bio' => 'Industry veteran with 12 years in luxury hospitality across East Africa.',
            'photo' => 'https://images.pexels.com/photos/5212695/pexels-photo-5212695.jpeg?auto=compress&cs=tinysrgb&w=400',
        ],
        [
            'name' => 'Dr. Bethlehem Wolde',
            'role' => 'Chair, Accounting & Finance',
            'qual' => 'PhD, Accounting - University of Nairobi',
            'bio' => 'CPA and researcher in corporate governance and SME finance.',
            'photo' => 'https://images.pexels.com/photos/5212701/pexels-photo-5212701.jpeg?auto=compress&cs=tinysrgb&w=400',
        ],
        [
            'name' => 'Arch. Nahom Solomon',
            'role' => 'Instructor, Architectural Drafting',
            'qual' => 'MArch - Ethiopian Institute of Architecture',
            'bio' => 'Practicing architect focused on climate-responsive urban design.',
            'photo' => 'https://images.pexels.com/photos/8961342/pexels-photo-8961342.jpeg?auto=compress&cs=tinysrgb&w=400',
        ],
    ];
}

function news_data(): array {
    return [
        [
            'id' => 'n1',
            'title' => 'AFC Signs MoU with Addis Ababa Science & Technology University',
            'date' => '2026-06-28',
            'category' => 'Partnership',
            'excerpt' => 'A new partnership will enable joint research, faculty exchange, and shared lab facilities starting fall 2026.',
            'image' => 'https://images.pexels.com/photos/207692/pexels-photo-207692.jpeg?auto=compress&cs=tinysrgb&w=800',
        ],
        [
            'id' => 'n2',
            'title' => 'Computer Science Cohort Wins National Hackathon',
            'date' => '2026-06-15',
            'category' => 'Student Success',
            'excerpt' => 'A team of four third-year students took first place with an offline-first agritech mobile app.',
            'image' => 'https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg?auto=compress&cs=tinysrgb&w=800',
        ],
        [
            'id' => 'n3',
            'title' => 'New Biomedical Lab Opens on Main Campus',
            'date' => '2026-05-30',
            'category' => 'Campus',
            'excerpt' => 'The facility supports nursing and pre-med students with modern diagnostic and simulation equipment.',
            'image' => 'https://images.pexels.com/photos/263402/pexels-photo-263402.jpeg?auto=compress&cs=tinysrgb&w=800',
        ],
        [
            'id' => 'n4',
            'title' => 'AFC Hosts 2026 Career & Internship Fair',
            'date' => '2026-05-12',
            'category' => 'Events',
            'excerpt' => 'Over 40 employers met with students across all programs; 120 internship offers were extended.',
            'image' => 'https://images.pexels.com/photos/2774556/pexels-photo-2774556.jpeg?auto=compress&cs=tinysrgb&w=800',
        ],
        [
            'id' => 'n5',
            'title' => 'Scholarship Program Expanded for Rural Students',
            'date' => '2026-04-22',
            'category' => 'Announcement',
            'excerpt' => 'AFC doubles its need-based scholarship budget to support 200 students from underserved regions.',
            'image' => 'https://images.pexels.com/photos/207692/pexels-photo-207692.jpeg?auto=compress&cs=tinysrgb&w=800',
        ],
        [
            'id' => 'n6',
            'title' => 'Faculty Research Published in East African Journal of Business',
            'date' => '2026-03-18',
            'category' => 'Research',
            'excerpt' => 'Three faculty members co-authored a study on SME financing gaps in the Horn of Africa.',
            'image' => 'https://images.pexels.com/photos/256541/pexels-photo-256541.jpeg?auto=compress&cs=tinysrgb&w=800',
        ],
    ];
}

function events_data(): array {
    return [
        [
            'id' => 'e1',
            'title' => 'Open Day - Tour the Campus',
            'date' => '2026-08-09',
            'time' => '9:00 AM',
            'location' => 'Main Campus, Bole Road',
            'desc' => 'Prospective students and families are invited to meet faculty, tour labs, and attend sample lectures.',
        ],
        [
            'id' => 'e2',
            'title' => 'Industry Talk: Fintech in Ethiopia',
            'date' => '2026-08-17',
            'time' => '2:00 PM',
            'location' => 'Auditorium A',
            'desc' => 'Guest panel featuring leaders from Safaricom Telecommunications, Dashen Bank, and Chapa.',
        ],
        [
            'id' => 'e3',
            'title' => 'Fall Semester Begins',
            'date' => '2026-09-21',
            'time' => '8:30 AM',
            'location' => 'All Campuses',
            'desc' => 'Orientation week for new and returning students across all programs.',
        ],
        [
            'id' => 'e4',
            'title' => 'AFC TechFest 2026',
            'date' => '2026-10-10',
            'time' => '10:00 AM',
            'location' => 'Innovation Plaza',
            'desc' => 'Annual showcase of student projects, robotics, and software demos open to the public.',
        ],
    ];
}

function gallery_data(): array {
    return [
        ['src' => 'https://images.pexels.com/photos/207692/pexels-photo-207692.jpeg?auto=compress&cs=tinysrgb&w=800', 'alt' => 'Main campus building at dusk', 'cat' => 'Campus'],
        ['src' => 'https://images.pexels.com/photos/256541/pexels-photo-256541.jpeg?auto=compress&cs=tinysrgb&w=800', 'alt' => 'Library reading room', 'cat' => 'Facilities'],
        ['src' => 'https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg?auto=compress&cs=tinysrgb&w=800', 'alt' => 'Lecture in progress', 'cat' => 'Academics'],
        ['src' => 'https://images.pexels.com/photos/263402/pexels-photo-263402.jpeg?auto=compress&cs=tinysrgb&w=800', 'alt' => 'Biomedical lab equipment', 'cat' => 'Facilities'],
        ['src' => 'https://images.pexels.com/photos/2774556/pexels-photo-2774556.jpeg?auto=compress&cs=tinysrgb&w=800', 'alt' => 'Career fair exhibition hall', 'cat' => 'Events'],
        ['src' => 'https://images.pexels.com/photos/5212343/pexels-photo-5212343.jpeg?auto=compress&cs=tinysrgb&w=800', 'alt' => 'Networking lab session', 'cat' => 'Academics'],
        ['src' => 'https://images.pexels.com/photos/5212703/pexels-photo-5212703.jpeg?auto=compress&cs=tinysrgb&w=800', 'alt' => 'Engineering workshop', 'cat' => 'Facilities'],
        ['src' => 'https://images.pexels.com/photos/8961065/pexels-photo-8961065.jpeg?auto=compress&cs=tinysrgb&w=800', 'alt' => 'Business case competition', 'cat' => 'Events'],
        ['src' => 'https://images.pexels.com/photos/1597756/pexels-photo-1597756.jpeg?auto=compress&cs=tinysrgb&w=800', 'alt' => 'Graduation ceremony', 'cat' => 'Student Life'],
        ['src' => 'https://images.pexels.com/photos/1438072/pexels-photo-1438072.jpeg?auto=compress&cs=tinysrgb&w=800', 'alt' => 'Courtyard study area', 'cat' => 'Campus'],
        ['src' => 'https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&w=800', 'alt' => 'Team meeting in innovation hub', 'cat' => 'Student Life'],
        ['src' => 'https://images.pexels.com/photos/1181406/pexels-photo-1181406.jpeg?auto=compress&cs=tinysrgb&w=800', 'alt' => 'Students walking between classes', 'cat' => 'Campus'],
    ];
}

function stats_data(): array {
    return [
        ['value' => '8,400+', 'label' => 'Alumni Worldwide'],
        ['value' => '32', 'label' => 'Academic Programs'],
        ['value' => '180+', 'label' => 'Qualified Faculty'],
        ['value' => '94%', 'label' => 'Graduate Employment'],
    ];
}

function portals_data(): array {
    return [
        ['id' => 'student', 'title' => 'Student Portal', 'icon' => 'graduation', 'desc' => 'Grades, schedules, transcripts, and academic records in one place.'],
        ['id' => 'lecturer', 'title' => 'Lecturer Portal', 'icon' => 'chalkboard', 'desc' => 'Course management, grading, attendance, and student analytics.'],
        ['id' => 'payments', 'title' => 'Online Payments', 'icon' => 'wallet', 'desc' => 'Tuition and fee payments with secure, instant digital receipts.'],
        ['id' => 'lms', 'title' => 'Learning Management System', 'icon' => 'book', 'desc' => 'Course materials, assignments, quizzes, and virtual classrooms.'],
        ['id' => 'ai', 'title' => 'AI Assistant', 'icon' => 'sparkles', 'desc' => '24/7 academic support, study guides, and instant answers.'],
        ['id' => 'alumni', 'title' => 'Alumni Portal', 'icon' => 'network', 'desc' => 'Reconnect, mentor, give back, and access exclusive opportunities.'],
        ['id' => 'mobile', 'title' => 'Mobile App', 'icon' => 'phone', 'desc' => 'Everything AFC on the go - notifications, schedules, and payments.'],
    ];
}

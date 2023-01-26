const sliders = [{
    // route: '/apply/um-students',
    image: 'slider-1.png',
}, {
    // route: undefined,
    image: 'announcement.jpg',
}, {
    route: '/apply/um-students',
    image: 'students.jpg',
}, {
    route: '/apply/intl',
    image: 'international.jpg',
}, {
    route: '/apply/general',
    image: 'general.jpg',
}]

const locations = [
    'Aula Perpustakaan lantai 2',
]

const lectures = [{
    name: 'Setting the scene',
    profile_id: 0,
    abstract: `TBA`,
    references: [
        'TBA',
        /* 'Antwi-Boasiako, J. & Nyarkoh, E. (2021). Government communication during the Covid-19 pandemic: The case of Ghana. International Journal of Public Administration, 44(11-12), 1039-1040. https://doi.org/10.1080/01900692.2020.1841792',
        'Azlan A. A., Hamzah M.R., Sern T.J., Ayub S.H., Mohamad, E. (2020). Public knowledge, attitudes and practices towards COVID-19: A cross-sectional study in Malaysia. PLoS ONE, 15(5): e0233668. https://doi.org/10.1371/journal.pone.0233668',
        'Chen, C-M. (2020). Public health messages about COVID-19 prevention in multilingual Taiwan. Multilingua, 39(5), 597-606. https://doi.org/10.1515/multi-2020-0092',
        'Dreisbach, J.L., & Mendoza-Dreisbach, S. (2021). Unity in adversity: Multilingual crisis translation and emergency linguistics in the COVID-19 pandemic. The Open Public Health Journal, 14, 94-97. DOI: 10.2174/1874944502114010094',
        'El-Jardali, Bou-Karroum, L., & Fadlallah, R. (2020). Amplifying the role of knowledge translation platforms in the COVID-19 pandemic response. Health Research Policy and Systems, 18(58), 1-7. https://doi.org/10.1186/s12961-020-00576-y', */
    ],
    mode: 1,
    location_id: 0
}, {
    name: 'Does Indonesian COVID-19 Emergency Law Secure Rule of Law and Human Rights?',
    profile_id: 1,
    abstract: `TBA`,
    references: [
        'TBA',
    ],
    mode: 1,
    location_id: 0
}, {
    name: 'TBA',
    profile_id: 2,
    abstract: `TBA`,
    references: [
        'TBA',
    ],
    mode: 1,
    location_id: 0
}, {
    name: 'TBA',
    profile_id: 3,
    abstract: `TBA`,
    references: [
        'TBA',
    ],
    mode: 1,
    location_id: 0
}, {
    name: 'TBA',
    profile_id: 4,
    abstract: `TBA`,
    references: [
        'TBA',
    ],
    mode: 1,
    location_id: 0
}, {
    name: 'TBA',
    profile_id: 5,
    abstract: `TBA`,
    references: [
        'TBA',
    ],
    mode: 0,
}, {
    name: 'TBA',
    profile_id: 6,
    abstract: `TBA`,
    references: [
        'TBA',
    ],
    mode: 0,
}, {
    name: 'TBA',
    profile_id: 7,
    abstract: `TBA`,
    references: [
        'TBA',
    ],
    mode: 0,
}, {
    name: 'TBA',
    profile_id: 4,
    abstract: `TBA`,
    references: [
        'TBA',
    ],
    mode: 0,
}, {
    name: 'TBA',
    profile_id: 9,
    abstract: `TBA`,
    references: [
        'TBA',
    ],
    mode: 0,
}, {
    name: 'TBA',
    profile_id: 10,
    abstract: `TBA`,
    references: [
        'TBA',
    ],
    mode: 0,
}, {
    name: 'Recovering Learning Loss in Education: Lessons Learned from Indonesia',
    profile_id: 11,
    abstract: `TBA`,
    references: [
        'TBA',
    ],
    mode: 0,
}, {
    name: 'TBA',
    profile_id: 12,
    abstract: `TBA`,
    references: [
        'TBA',
    ],
    mode: 0,
}, {
    name: 'Conclusion',
    profile_id: 13,
    abstract: `TBA`,
    references: [
        'TBA',
    ],
    location_id: 0,
}].map(lecture => {
    lecture.location = lecture.mode === 1 ? locations[lecture.location_id] : ''
    return lecture
})

const timeBlocks = [
    '01:00 PM',
    '01:30 PM',
    '02:00 PM',
    '02:30 PM',
    '03:00 PM',
    '03:30 PM',
    '04:00 PM',
    '04:30 PM',
]

const schedules = [{
    date: '10 February, 2023',
    rundowns: [{
        started: '01:30 PM',
        block: 1,
        title: 'Opening',
        uni: 'Universitas Negeri Malang',
        country: 'Indonesia'
    }, {
        started: '02:00 PM',
        block: 2,
        lecture_id: 0
    },]
}, {
    date: '17 February 2023',
    rundowns: [{
        started: '01:30 PM',
        block: 3,
        lecture_id: 1
    }, {
        started: '03:00 PM',
        block: 3,
        lecture_id: 2
    },]
}, {
    date: '24 February 2023',
    rundowns: [{
        started: '01:30 PM',
        block: 3,
        lecture_id: 3
    }, {
        started: '03:00 PM',
        block: 3,
        lecture_id: 4
    },]
}, {
    date: '3 March 2023',
    rundowns: [{
        started: '01:30 PM',
        block: 3,
        lecture_id: 5
    }, {
        started: '03:00 PM',
        block: 3,
        lecture_id: 6
    },]
}, {
    date: '10 March 2023',
    rundowns: [{
        started: '01:30 PM',
        block: 3,
        lecture_id: 7
    }, {
        started: '03:00 PM',
        block: 3,
        lecture_id: 8
    },]
}, {
    date: '17 March 2023',
    rundowns: [{
        started: '01:30 PM',
        block: 3,
        lecture_id: 9
    }, {
        started: '03:00 PM',
        block: 3,
        lecture_id: 10
    },]
}, {
    date: '31 March 2023',
    rundowns: [{
        started: '01:00 PM',
        block: 3,
        lecture_id: 11
    }, {
        started: '03:00 PM',
        block: 3,
        lecture_id: 12
    },]
}, {
    date: '14 April 2023',
    rundowns: [{
        started: '01:30 PM',
        block: 3,
        lecture_id: 13
    }, {
        started: '03:00 PM',
        block: 2,
        title: 'Closing',
        uni: 'Online',
        country: ''
    },]
}]

const profiles = [{
    name: 'Dr. Evi Eliyanah',
    uni: 'Universitas Negeri Malang',
    country: 'Indonesia',
    photo: 'https://um.ac.id/wp-content/uploads/2020/12/WhatsApp-Image-2020-12-16-at-10.57.07.jpeg',
    fields: 'Gender Studies, Cultural Studies, and Asian Studies',
    research: 'Popular representations of masculinity in Indonesia',
    graduated: 'The Australian National University, 2019',
    email: 'evi.eliyanah.fs@um.ac.id',
    biography: `Evi is a profile at the Department of English, Universitas Negeri Malang. She obtained her PhD in Asian Studies from the Australian National University in 2019. She has done quite an extensive research and publication in gender, cultural and gender studies. Her latest publications on gender and Indonesian cinema can be accessed in internationally reputable journals, such as Social Sciences, International Journal on Indonesian Studies and Situations: Cultural Studies in Asian Context.`
}, {
    name: 'Dr. Herlambang P. Wiratraman',
    uni: 'Universitas Gajah Mada',
    country: 'Indonesia',
    photo: 'profile.png',
    fields: '-',
    research: '-',
    graduated: '-',
    email: 'herlambang.perdana@ugm.ac.id',
    biography: ``
}, {
    name: 'Sri Fatmawati, S.Si., M.Sc., Ph.D',
    uni: 'Institut Teknologi Sepuluh November',
    country: 'Indonesia',
    photo: 'profile.png',
    fields: '-',
    research: '-',
    graduated: '-',
    email: 'fatma@chem.its.ac.id',
    biography: ``
}, {
    name: 'Dr. Sc Akhmad Sabarudin',
    uni: 'Universitas Brawijaya',
    country: 'Indonesia',
    photo: 'profile.png',
    fields: '-',
    research: '-',
    graduated: '-',
    email: 'sabarjpn@gmail.com',
    biography: ``
}, {
    name: 'Nurenzia Yannuar, S.S., M.A.,Ph.D',
    uni: 'Universitas Negeri Malang',
    country: 'Indonesia',
    photo: 'profile.png',
    fields: '-',
    research: '-',
    graduated: '-',
    email: 'nurenzia.yannuar.fs@um.ac.id',
    biography: ``
}, {
    name: 'Dr Elly (Ellen) Kent',
    uni: 'University New South Wales',
    country: 'Indonesia',
    photo: 'profile.png',
    fields: '-',
    research: '-',
    graduated: '-',
    email: 'e.kent@adfa.edu.au',
    biography: ``
}, {
    name: 'Dr Richard Tomlins',
    uni: 'Coventry University',
    country: 'United Kingdom',
    photo: 'profile.png',
    fields: '-',
    research: '-',
    graduated: '-',
    email: '-',
    biography: ``
}, {
    name: 'Miranda P Tahalele',
    uni: 'BINUS University',
    country: 'Indonesia',
    photo: 'profile.png',
    fields: '-',
    research: '-',
    graduated: '-',
    email: 'fatma@chem.its.ac.id',
    biography: ``
}, {
    name: 'Prof. Dr.Eng. Yudi Darma, S.Si., M.Si.',
    uni: 'Institut Teknologi Bandung',
    country: 'Indonesia',
    photo: 'profile.png',
    fields: '-',
    research: '-',
    graduated: '-',
    email: 'yudi@itb.ac.id',
    biography: ``
}, {
    name: 'Nor Ismah',
    uni: 'Universitas Nahdlatul Ulama (UNU) Yogyakarta',
    country: 'Indonesia',
    photo: 'profile.png',
    fields: '-',
    research: '-',
    graduated: '-',
    email: 'norismahkz@gmail.com',
    biography: ``
}, {
    name: 'Nelly Martin-Anatias, Ph.D.',
    uni: 'Massey University of New Zealand',
    country: 'New Zealand',
    photo: 'profile.png',
    fields: '-',
    research: '-',
    graduated: '-',
    email: 'N.Martin4@massey.ac.nz',
    biography: ``
}, {
    name: 'Daniel Suryadarma',
    uni: 'Akademi Ilmuwan Muda Indonesia',
    country: 'Indonesia',
    photo: 'profile.png',
    fields: '-',
    research: '-',
    graduated: '-',
    email: 'fatma@chem.its.ac.id',
    biography: ``
}, {
    name: 'Azhar Ahmad Smaragdina , S.Pd, M.Pd & Nabhan Fuad Choiron ,SS, MA',
    uni: 'Universitas Negeri Malang',
    country: 'Indonesia',
    photo: 'profile.png',
    fields: '-',
    research: '-',
    graduated: '-',
    email: '-',
    biography: ``
}, {
    name: 'Hj. Dianni Risda, S. Pd., M. Ed.',
    uni: 'Universitas Pendidikan Indonesia',
    country: 'Indonesia',
    photo: 'profile.png',
    fields: '-',
    research: '-',
    graduated: '-',
    email: 'diannirisda71@gmail.com',
    biography: ``
}, {
    name: 'Prof. Chung Joon Kon',
    uni: 'Eurasia Foundation',
    country: 'Indonesia',
    photo: 'profile.png',
    fields: '-',
    research: '-',
    graduated: '-',
    email: '-',
    biography: ``
}]

const applicants = [{
    to: '/apply/um-students',
    slug: 'um-students',
    name: 'UM Students',
    description: 'As the main participants of this event, UM students have the opportunity to join this programme in a complete package. Students are required to attend minimum 80% of the lecture meetings and conduct a final project related to the topic delivered throughout the lecture series. In addition to certificate of attendance, students with the best final project have the opportunity to win a scholarship grant for their project development.',
    eligible: 'Active students of Universitas Negeri Malang from any degree and study program as well as non-degree programs who are willing and committed to attend the minimum requirements of lectures’ attendances and to work on the required final project.',
    required: [
        '<a href="https://drive.google.com/file/d/18ayhnfshFq2b3BpyHkCYqYbEE-33Hk6z/view">Letter of commitment</a>',
        'A scan of student\'s ID card (.jpg)',
        'A scan of English proficiency certificate/English proficiency prediction (TOEFL/TKBI/IELTS/IBT) (optional)'
    ],
    benefits: [
        'Project development grant',
        'Direct learning from experts',
        'New academic insights',
        'International experience & network',
        'E-Certificate',
    ],
    timelines: [{
        title: '<b>Registration Deadline</b>',
        date: '18 January - 3 February 2023',
    }, {
        title: 'Lecture Series',
        date: '10 February - 14 April 2023 (Every Friday)',
    }],
    applications: [
        'Prepare the required documents.',
        'Fill out the registration form <a href="https://bit.um.ac.id/REALS23_students" target="_blank">here</a>',
    ],
    selections: [
        'Demonstrates a strong commitment to active participation in Rethinking EurAsia Lecture Series from the beginning until the end of the courses',
        'Indicates a serious interest in current issue in Europe and Asia',
        'Indicates awareness of the issue on <b>Post-Pandemic World Challenges</b>',
        'Indicates an adequate proficiency in spoken and written English',
    ]
}, {
    to: '/apply/intl',
    slug: 'intl',
    name: 'International Participants',
    description: 'This category applies to foreign national applicants (students and graduates) who wish to join our lecture series. The applicants have the opportunity to choose any lectures according to their interests. There is no minimum number of attendance required and no obligation to conduct a final project. The participants will also get an e-certificate after joining the lecture series.',
    eligible: 'Internationals of any nationality (students and non-students) from any degree and study programs who are willing and committed to attend the selected lecture(s).',
    required: [
        'Formal Photo 4x6 (plain background)(.jpg);',
        'Scan of Passport/ National ID (.jpg/.pdf) (optional)',
        'Translation of National ID (if the document is not in English) (optional)',
    ],
    benefits: [
        'Learning from world renowned academics',
        'International network',
        'E-Certificate',
    ],
    timelines: [{
        title: '<b>Registration Deadline</b>',
        date: '24 hours before the schedule of the selected lecture(s)',
    }, {
        title: 'Lecture Series',
        date: '10 February - 14 April 2023 (Every Friday)',
    }],
    applications: [
        'Prepare the required documents.',
        'Fill out the registration form <a href="https://bit.um.ac.id/REALS23_intl" target="_blank">here</a>',
    ],
    selections: [
        'Demonstrates a strong commitment to active participation in Rethinking EurAsia Lecture Series from the beginning until the end of the courses',
        'Indicates a serious interest in current issue in Europe and Asia',
        'Indicates awareness of the issue on <b>Post-Pandemic World Challenges</b>',
        'Indicates an adequate proficiency in spoken and written English',
    ]
}, {
    to: '/apply/general',
    slug: 'general',
    name: 'General Participants',
    description: 'This category applies to Indonesian applicants who are not registered as UM students. It includes alumni, lecturer, or students from other universities in Indonesia who wish to join our lecture series. The applicants have the opportunity to choose any lectures according to their interests. There is no minimum number of attendance required and no obligation to conduct a final project. The participants will also get an e-certificate after joining the lecture series.',
    eligible: 'Alumni, lecturers, or students from other universities (non UM) in Indonesia who wish to join our lecture series. The applicants have the opportunity to choose any lectures according to their interests. There is no minimum number of attendance required and no obligation to conduct a final project. The participants will also get an e-certificate after joining the lecture series',
    required: [
        'A scan of ID card',
        'A scan of English proficiency certificate/English proficiency prediction (TOEFL/TKBI/IELTS/IBT) (optional)'
    ],
    benefits: [
        'You can choose the course you are interested in',
        'Direct learning from experts',
        'New insights',
        'International experience & network',
        'E-Certificate',
    ],
    timelines: [{
        title: '<b>Registration Deadline</b>',
        date: '24 hours before the schedule of the selected lecture(s)',
    }, {
        title: 'Lecture Series',
        date: '10 February - 14 April 2023 (Every Friday)',
    }],
    applications: [
        'Prepare the required documents.',
        'Fill out the registration form <a href="https://bit.um.ac.id/REALS23_general" target="_blank">here</a>',
    ],
    selections: [
        'Demonstrates a strong commitment to active participation in Rethinking EurAsia Lecture Series from the beginning until the end of the courses',
        'Indicates a serious interest in current issue in Europe and Asia',
        'Indicates awareness of the issue on <b>Post-Pandemic World Challenges</b>',
        'Indicates an adequate proficiency in spoken and written English',
    ]
}]

const downloads = {
    2021: {
        final: '#',
        flyer: 'https://drive.google.com/file/d/1DqAVYLyVlMo_1idNBViDZbNRs8ERwYvf/view?usp=sharing',
        intl: {
            info: 'https://drive.google.com/file/d/17OCwKh10e86C3q-GegW3ntUAgV9wVsWg/view?usp=sharing',
            schedule: 'https://drive.google.com/file/d/18IP2yFeAupFW4qe7wDfbskQNPrTjiB9V/view?usp=sharing'
        },
        attachments: [{
            image: 'sliderbiru.jpg',
            title: 'Indonesian food in a global context',
            lecturer: 'Indonesian food in a global context',
            download: 'https://drive.google.com/file/d/1dHBtmKmVUgXb8UKA2E6UtwFZTTCJS8RI/view?usp=sharing'
        }, {
            image: undefined,
            title: 'Indonesian food in a global context',
            lecturer: 'Indonesian food in a global context',
            download: 'https://drive.google.com/file/d/1dHBtmKmVUgXb8UKA2E6UtwFZTTCJS8RI/view?usp=sharing'
        }]
    },
    2020: {
        final: '#',
        flyer: 'https://drive.google.com/file/d/1DqAVYLyVlMo_1idNBViDZbNRs8ERwYvf/view?usp=sharing',
        intl: {
            info: 'https://drive.google.com/file/d/17OCwKh10e86C3q-GegW3ntUAgV9wVsWg/view?usp=sharing',
            schedule: 'https://drive.google.com/file/d/18IP2yFeAupFW4qe7wDfbskQNPrTjiB9V/view?usp=sharing'
        },
        attachments: [{
            image: undefined,
            title: 'Indonesian food in a global context2',
            lecturer: 'Indonesian food in a global context',
            download: 'https://drive.google.com/file/d/1dHBtmKmVUgXb8UKA2E6UtwFZTTCJS8RI/view?usp=sharing'
        }, {
            image: undefined,
            title: 'Indonesian food in a global context3',
            lecturer: 'Indonesian food in a global context',
            download: 'https://drive.google.com/file/d/1dHBtmKmVUgXb8UKA2E6UtwFZTTCJS8RI/view?usp=sharing'
        }]
    },
}

const galleries = [
    'https://lh3.googleusercontent.com/u/0/drive-viewer/AFDK6gP577sNgxEI1v-YMEXSNZFxvcbt_YcWczbCX4lWiGBnuFt9CJJlQotopk4gjsUzLUfROI9mFU23G1d9vpjsOf7llSwx=w891-h901',
    'https://lh3.googleusercontent.com/u/0/drive-viewer/AFDK6gNAAmBLi26dApInJ4ksO8SDyWUXl0APOxiua92KR6hT9hk_76XFH2_WEWa6Z68HZesQrawFvCYSXV8pdg91l1bOkxEv9A=w1848-h901',
    'https://lh3.googleusercontent.com/u/0/drive-viewer/AFDK6gO6EvwllL4z4g3HRe5ujjRcC7kyRnS8rXhe6VJKS_hLtAQUuesG5bTAyKt0KExJavsBIt1mTaBYpEXq2dnjMDJQiYIhtA=w1848-h901',
    // 'https://um.ac.id/wp-content/uploads/2020/12/WhatsApp-Image-2020-12-16-at-10.57.07.jpeg',
    // 'https://drive.google.com/uc?id=1GTyAxHn2VOfm_G48YEWACOx_A4GFKBoe&export=view',
    // 'https://drive.google.com/uc?id=1tRQAFfu-vAT_tqp09PCcZUx_YpJA7Wnq&export=view',
    // 'https://drive.google.com/uc?id=1l4e6KFz-vWAvcFG5nEb6D_lQqKEj08T6&export=view',
]

/* sliders.push(...galleries.map(gallery => {
    return { image: gallery }
})) */

galleries.push(...sliders/* .filter((slide, i) => {
    return i < sliders.length - galleries.length
}) */.map(slider => {
    return slider.image
}))

export { sliders, lectures, timeBlocks, schedules, profiles, applicants, downloads, galleries }
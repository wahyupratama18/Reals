const sliders = [{
    // route: undefined,
    image: 'slidermain.jpg',
}, {
    // route: undefined,
    image: 'sliderhijau.jpg',
}, {
    // route: undefined,
    image: 'sliderbiru.jpg',
}]

const lectures = [{
    name: 'Setting the scene: In the same storm but different boats',
    profile_id: 1,
    abstract: `
    <p>
        All over the world, the pandemic has exacerbated social inequalities in ways never before seen in the 21st century. It is the task of social scientists and academics to carry out rigorous social analysis able to fully comprehend the underlying structure reproducing these social inequalities and what it does to already marginalised communities. This lecture grounds its thinking on Burawoy’s (2015) call for social scientists and academics to approach social inequalities as not merely an objective reality that is researched and explained, but to also see ourselves as actors and instruments within it. All social scientists and academics face the social dilemma of reproducing social inequalities through our academic labouring. The institutions we work in, our type of employment, available findings and resources, as well as the topics of research we can or can not study all contribute to our inevitable complicities in procreating social exclusions. This lecture problematises the neoliberalisation of higher education that limits the kinds of research we, as academics in Indonesia and those part of the Global South, can carry out. The lecture thus aims to widen the space for academic reflexivity, as well as social acceptance, of the responsibilities social scientists and academics must bear in a time of increased and more complex wealth and social inequalities.
    </p>
    <p>download material <a target="_blank" href="https://drive.google.com/file/d/1JaARKZPugizxKXpNyXEVRTsiG4SgTN0e/view?usp=sharing">here</a></p>`,
    references: [
        'Antwi-Boasiako, J. & Nyarkoh, E. (2021). Government communication during the Covid-19 pandemic: The case of Ghana. International Journal of Public Administration, 44(11-12), 1039-1040. https://doi.org/10.1080/01900692.2020.1841792',
        'Azlan A. A., Hamzah M.R., Sern T.J., Ayub S.H., Mohamad, E. (2020). Public knowledge, attitudes and practices towards COVID-19: A cross-sectional study in Malaysia. PLoS ONE, 15(5): e0233668. https://doi.org/10.1371/journal.pone.0233668',
        'Chen, C-M. (2020). Public health messages about COVID-19 prevention in multilingual Taiwan. Multilingua, 39(5), 597-606. https://doi.org/10.1515/multi-2020-0092',
        'Dreisbach, J.L., & Mendoza-Dreisbach, S. (2021). Unity in adversity: Multilingual crisis translation and emergency linguistics in the COVID-19 pandemic. The Open Public Health Journal, 14, 94-97. DOI: 10.2174/1874944502114010094',
        'El-Jardali, Bou-Karroum, L., & Fadlallah, R. (2020). Amplifying the role of knowledge translation platforms in the COVID-19 pandemic response. Health Research Policy and Systems, 18(58), 1-7. https://doi.org/10.1186/s12961-020-00576-y',
    ]
}, {
    name: 'Public Health Communication about COVID-19 Response: A Discourse Analysis of the Mobility Constraints Terms in Indonesia and Malaysia.',
    profile_id: 0
}, {
    name: 'The Cultural Political Economy of Social Sciences in Indonesia',
    profile_id: 0
}, {
    name: 'State Capacity and Public Policy: Challenges during the global pandemic',
    profile_id: 0
}, {
    name: 'The Urgency of post-COVID-19 equitable recovery',
    profile_id: 0
}, {
    name: 'Language in the time of COVID-19',
    profile_id: 0
}, {
    name: 'Setting the Scene',
    profile_id: 0
}, {
    name: 'Social Media for Combatting Disinformation in the Time of Corona',
    profile_id: 0
}]

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
    date: '24 September, 2023',
    rundowns: [{
        started: '01:30 PM',
        block: 1,
        title: 'Opening',
        uni: 'Universitas Negeri Malang',
        country: 'Indonesia'
    }, {
        started: '02:00 PM',
        block: 4,
        lecture_id: 0
    },]
}, {
    date: '25 September, 2023',
    rundowns: [{
        started: '01:00 PM',
        block: 4,
        lecture_id: 1
    }, {
        started: '03:00 PM',
        block: 3,
        lecture_id: 2
    },]
},]

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
    name: 'Dr. Evi Eliyanah2',
    uni: 'Universitas Negeri Malang',
    country: 'Indonesia',
    photo: 'https://um.ac.id/wp-content/uploads/2020/12/WhatsApp-Image-2020-12-16-at-10.57.07.jpeg',
    fields: 'Gender Studies, Cultural Studies, and Asian Studies',
    research: 'Popular representations of masculinity in Indonesia',
    graduated: 'The Australian National University, 2019',
    email: 'evi.eliyanah.fs@um.ac.id',
    biography: `Evi is a profile at the Department of English, Universitas Negeri Malang. She obtained her PhD in Asian Studies from the Australian National University in 2019. She has done quite an extensive research and publication in gender, cultural and gender studies. Her latest publications on gender and Indonesian cinema can be accessed in internationally reputable journals, such as Social Sciences, International Journal on Indonesian Studies and Situations: Cultural Studies in Asian Context.`
}]

const applicants = [{
    to: '/apply/um-students',
    slug: 'um-students',
    name: 'UM Students',
    description: 'As the main participants of this event, UM students have the opportunity to join this programme in a complete package. Students are required to attend minimum 80% of the lecture meetings and conduct a final project related to the topic delivered throughout the lecture series. In addition to certificate of attendance, students with the best final project have the opportunity to win a scholarship grant for their project development.',
    eligible: 'Active students of Universitas Negeri Malang from any degree and study program as well as non-degree programs who are willing and committed to attend the minimum requirements of lectures’ attendances and to work on the required final project.',
    required: [
        '<a href="https://drive.google.com/file/d/19b-8yBUOpn8W7EGKkhjAz5JuCqM4SgbM/view?usp=sharing">Letter of commitment</a>',
        'A scan of student’s ID card (.jpg)',
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
        date: '17 September 2021',
    }, {
        title: 'Announcement',
        date: '22 September 2021',
    }],
    applications: [
        'Prepare the required documents.',
        'Fill out the registration form <a href="https://forms.gle/YuQ8TLe9zt5VSEcr6">here</a>',
    ],
    selections: [
        'Demonstrates a strong commitment to active participation in Rethinking EurAsia Lecture Series from the beginning until the end of the courses',
        'Indicates a serious interest in current issue in Europe and Asia',
        'Indicates awareness of the issue on Years of Living Precariously: Maintaining Resilience amidst a Global Pandemic in Europe and Asia',
        'Indicates an adequate proficiency in spoken and written English',
    ]
}, {
    to: '/apply/intl',
    slug: 'intl',
    name: 'International Participants',
    description: 'This category applies to foreign national applicants (students and graduates) who wish to join our lecture series. The applicants have the opportunity to choose any lectures according to their interests. There is no minimum number of attendance required and no obligation to conduct a final project. The participants will also get an e-certificate after joining the lecture series.',
    eligible: 'Internationals of any nationality (students and non-students) from any degree and study programs who are willing and committed to attend the selected lecture(s).',
    required: [
        '<a href="https://drive.google.com/file/d/19b-8yBUOpn8W7EGKkhjAz5JuCqM4SgbM/view?usp=sharing">Letter of commitment</a>',
        'A scan of student’s ID card (.jpg)',
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
        date: '17 September 2021',
    }, {
        title: 'Announcement',
        date: '22 September 2021',
    }],
    applications: [
        'Prepare the required documents.',
        'Fill out the registration form <a href="https://forms.gle/YuQ8TLe9zt5VSEcr6">here</a>',
    ],
    selections: [
        'Demonstrates a strong commitment to active participation in Rethinking EurAsia Lecture Series from the beginning until the end of the courses',
        'Indicates a serious interest in current issue in Europe and Asia',
        'Indicates awareness of the issue on Years of Living Precariously: Maintaining Resilience amidst a Global Pandemic in Europe and Asia',
        'Indicates an adequate proficiency in spoken and written English',
    ]
}, {
    to: '/apply/general',
    slug: 'general',
    name: 'General Participants',
    description: 'This category applies to Indonesian applicants who are not registered as UM students. It includes alumni, lecturer, or students from other universities in Indonesia who wish to join our lecture series. The applicants have the opportunity to choose any lectures according to their interests. There is no minimum number of attendance required and no obligation to conduct a final project. The participants will also get an e-certificate after joining the lecture series.',
    eligible: '',
    required: [
        '<a href="https://drive.google.com/file/d/19b-8yBUOpn8W7EGKkhjAz5JuCqM4SgbM/view?usp=sharing">Letter of commitment</a>',
        'A scan of student’s ID card (.jpg)',
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
        date: '17 September 2021',
    }, {
        title: 'Announcement',
        date: '22 September 2021',
    }],
    applications: [
        'Prepare the required documents.',
        'Fill out the registration form <a href="https://forms.gle/YuQ8TLe9zt5VSEcr6">here</a>',
    ],
    selections: [
        'Demonstrates a strong commitment to active participation in Rethinking EurAsia Lecture Series from the beginning until the end of the courses',
        'Indicates a serious interest in current issue in Europe and Asia',
        'Indicates awareness of the issue on Years of Living Precariously: Maintaining Resilience amidst a Global Pandemic in Europe and Asia',
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

export { sliders, lectures, timeBlocks, schedules, profiles, applicants, downloads }
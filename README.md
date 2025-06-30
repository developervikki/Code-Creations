# 💼 Vikash Yadav | Personal Portfolio Website

Welcome to my personal portfolio repository! This project showcases my profile, skills, achievements, and project work as a Computer Science Engineering student and developer.

---

## 📁 Folder Structure
portfolio/
│
├── index.php                   # Landing/Home Page
├── about.php                   # About Me
├── projects.php                # Project Portfolio (Dynamic/Static)
├── resume.php                  # View or Download Resume
├── contact.php                 # Contact Form (mail or FormSubmit)
├── 404.php                     # Custom 404 Error Page
│
├── admin/                      # (Optional) Admin dashboard to manage content
│   ├── login.php               # Admin login
│   ├── dashboard.php           # Admin dashboard
│   └── edit-project.php        # Edit portfolio items
│
├── blog/
│   ├── index.php               # Blog home
│   ├── post1.php               # Sample blog post
│   └── post2.php
│
├── certificates/
│   ├── index.php               # Certificate viewer
│   └── assets/                 # PDF/Image files of certificates
│
├── achievements/
│   └── index.php               # Awards, accomplishments
│
├── experience/
│   └── index.php               # Work and internship experience
│
├── education/
│   └── index.php               # Academic background
│
├── testimonials/
│   └── index.php               # Testimonials/feedback
│
├── includes/                   # Shared reusable components
│   ├── header.html             # Navbar
│   ├── footer.html             # Footer
│   └── preload.html            # Preloader markup
│
├── assets/                     # Static assets
│   ├── css/
│   │   ├── style.css           # Custom styling
│   │   └── tailwind.css        # Tailwind base (if not CDN)
│   ├── js/
│   │   ├── main.js             # Main scripts
│   │   └── animation.js        # Typed.js, particles, scroll
│   ├── img/                    # Images (profile, project previews)
│   └── icons/                  # Social media or skill icons
│
├── data/                       # Dynamic content files
│   ├── skills.json             # Skills list
│   └── projects.json           # Projects data
│
├── .gitignore                  # For GitHub: node_modules, vendor, etc.
├── README.md                   # GitHub documentation
├── CNAME                       # For custom domain (GitHub Pages)
└── LICENSE                     # MIT or your preferred license



portfolio/
│
├── index.php # Landing/Home Page
├── about.php # About Me Section
├── projects.php # Project Showcases
├── resume.php # Resume Download/View
├── contact.php # Contact Form
│
├── assets/
│ ├── css/
│ │ ├── style.css # Custom styles
│ │ └── tailwind.css # Tailwind CSS
│ ├── js/
│ │ ├── main.js # Core JavaScript
│ │ └── animation.js # Typing, scroll, particle animations
│ ├── img/ # Image assets (profile, projects)
│ └── icons/ # Social media and tech icons
│
├── includes/
│ ├── header.html # Navigation bar (included via PHP)
│ ├── footer.html # Footer section
│ └── preload.html # Preloader loader HTML
│
├── data/
│ ├── projects.json # List of dynamic projects
│ └── skills.json # Skills used in the skills section
│
├── blog/
│ ├── index.php # Blog Home
│ ├── post1.php # Sample Blog Post 1
│ └── post2.php # Sample Blog Post 2
│
├── testimonials/
│ └── index.php # Testimonials Page
│
├── certificates/
│ ├── index.php # Certifications Gallery
│ └── assets/ # Images or PDFs of certificates
│
├── achievements/
│ └── index.php # Awards and Achievements
│
├── experience/
│ └── index.php # Work/Internship Experiences
│
├── education/
│ └── index.php # Academic Timeline
│
├── 404.php # Custom 404 Error Page
├── .gitignore # Ignored files (e.g., uploads, .env)
├── CNAME # GitHub Pages custom domain (optional)
└── README.md # You are here


---

## 🚀 Features

- ✅ Fully responsive layout using **Tailwind CSS**
- 🎯 Particle.js and Typed.js for beautiful animations
- 🧩 Modular design with includes (`header.html`, `footer.html`, etc.)
- 📂 Organized by real-world sections: Skills, Projects, Blog, Certificates, etc.
- 💾 Optional JSON-driven sections for easy data management
- 📱 Mobile-first design
- 🌐 Live link-ready (GitHub Pages or personal hosting)

---

## 🛠️ Technologies Used

- **HTML5**, **PHP** for server-side rendering
- **Tailwind CSS** for modern styling
- **JavaScript** for interactivity and animations
- **Typed.js**, **Particles.js** for effects
- **JSON** for data management (skills/projects)

---

## 📦 Setup Instructions

1. Clone the repository:
   ```bash
   git clone https://github.com/developervikki/portfolio.git
   cd portfolio

2. (Optional) Set up a local server:
php -S localhost:8000

3.Visit:
http://localhost:8000/index.php



🌟 Resume Builder Web Application

PHP MySQL HTML CSS JavaScript | License: MIT | Stars: ⭐

An advanced web application to create professional resumes instantly | Multi-template support | User-friendly | Session-based authentication

Create modern, professional resumes with ease. Built with PHP, MySQL, and styled with CSS, this web app allows users to generate resumes, choose from multiple templates, and download them with their uploaded profile photo and entered details.

🚀 Quick Start • ✨ Features • 📸 Screenshots • 🛠️ Installation • 📖 Usage • 🤝 Contributing
🌟 What Makes This Special?

Complete Resume Creation Solution
✅ Multi-Template Support – Choose from Simple, Moderate, Professional, Creative, Modern, Classic templates

✅ User Authentication – Signup/Login with secure password hashing

✅ Offline Ready – Runs locally on your system with XAMPP/WAMP

✅ Profile Photo Upload – Add personal photo to resumes

✅ Modern Design – Clean, intuitive user interface

✅ Responsive Layout – Works on desktop and mobile browsers

✅ PDF/HTML Ready – Export resumes for printing or sharing

✅ Session Management – Secure login sessions with logout functionality

✨ Features

Core Capabilities

🎯 Dynamic Resume Generation – Fill form and generate a resume instantly

🖼️ Profile Photo – Upload photo for a personalized resume

📋 Template Selection – Choose from 6 professionally designed templates

💬 Secure Login/Signup – Passwords hashed for security

📄 Download/Print Ready – Save your resume for professional use

🌈 Colorful Buttons & UI – Interactive, visually appealing interface

⚡ Session Handling – Prevent unauthorized access to forms/resumes

📸 Screenshots

Signup/Login Page – Clean form with colorful buttons
Resume Form Page – Enter personal, education, skills, and project info
Generated Resume – Multiple templates to choose from
Download/Preview – Export resume in professional format


🛠️ Installation

Prerequisites
XAMPP/WAMP server with PHP 8+
MySQL 5.7+
500MB free disk space
Browser (Chrome, Edge, Firefox recommended)


Quick Install

# 1. Clone the repository
git clone https://github.com/<your-username>/resume-builder.git
cd resume-builder

# 2. Move to XAMPP htdocs folder
# e.g., C:\xampp\htdocs\resume-builder

# 3. Import database
# Open phpMyAdmin -> Create DB 'resume_builder' -> Import 'resume_builder.sql'

# 4. Start XAMPP Apache & MySQL
# 5. Open browser and navigate to
http://localhost/resume-builder/login.html

📖 Usage
Running the Application
Signup with your username and password
Login using the same credentials
Fill the Resume Form with:
Name, Email, Phone
Skills, Education, Projects
Profile Photo
Select Template
Click Generate Resume
View the generated resume and download/print it
🗂️ Project Structure
resume-builder/
├── form.php               # Main resume form
├── login.php              # User login handling
├── signup.php             # User signup handling
├── save_resume.php        # Save resume to DB
├── resume.php             # Display generated resume
├── templates/             # Resume templates (simple, professional, etc.)
├── images/                # Uploaded profile photos
├── db.php                 # Database connection
├── style.css              # Styling for pages
├── login.html
├── signup.html
└── README.md

🧠 How It Works
User signs up → credentials stored securely (password hashed)
User logs in → session started
Resume form submitted → details saved in MySQL database
Resume generated → selected template applied with profile photo
Resume displayed → user can preview, print, or save

🔧 Configuration
Database Connection: Edit db.php with your MySQL credentials
Templates: Update templates/ folder for custom styles
CSS: Modify style.css for colors, fonts, buttons, and layout
🧪 Testing
Open browser and test:
Signup → Login → Form submission → Resume generation
Verify session management by trying to access form.php without login
Test each template to ensure proper formatting
⚡ Advanced Usage
Add new templates:
Create a new PHP file under templates/
Update save_resume.php to save template choice
Add new fields:
Update form.php and save_resume.php
Update template files to display new field
🐛 Troubleshooting
Database connection failed → Check db.php credentials
Session not working → Ensure PHP sessions enabled and XAMPP running
Image upload errors → Check folder permissions in images/
🤝 Contributing
Ways to Contribute
🐛 Report Bugs: Open an issue
💡 Suggest Features: Create a feature request
📝 Improve Documentation: Help make the README better
🎨 Enhance UI: Update style.css or templates
🗂️ Add Templates: Create new professional resume templates
Contribution Process
Fork the repository
Create a new branch: git checkout -b feature/YourFeature
Commit changes: git commit -m "Add YourFeature"
Push: git push origin feature/YourFeature
Open a Pull Request

📄 License
This project is licensed under the MIT License – see LICENSE file for details.

📧 Contact & Support
GitHub: @your-username⁠�
Email: your.email@example.com

⚠️ Disclaimer
This tool is for educational and portfolio purposes only. Users are responsible for ensuring correct information is entered in resumes.

**Resume Builder** is licensed under the [MIT License](LICENSE)

✅ Made with ❤️ using PHP, MySQL, HTML, CSS, JavaScript

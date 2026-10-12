<?php
$skillSections = [
    [
        'title' => 'Programming & Development',
        'groups' => [
            'Programming Languages' => ['Python', 'PHP', 'Java', 'JavaScript', 'C++', 'Dart', 'SQL', 'Bash', 'HTML5', 'CSS3'],
            'Frameworks & Libraries' => ['Laravel', 'Livewire', 'Flask', 'React', 'Alpine.js', 'Tailwind CSS', 'DaisyUI', 'Bootstrap', 'Filament'],
            'Databases' => ['MySQL', 'MariaDB', 'PostgreSQL', 'SQLite', 'MongoDB'],
            'Backend Development' => ['RESTful APIs', 'Laravel Eloquent ORM', 'Laravel Queues & Jobs', 'Laravel Task Scheduling', 'OAuth 2.0', 'Role-Based Access Control (RBAC)', 'Webhooks', 'WebSockets & Real-Time Communication'],
            'Mobile Development' => ['Flutter Development', 'Android Development', 'OneSignal Push Notifications'],
        ],
    ],
    [
        'title' => 'Cybersecurity',
        'groups' => [
            'Offensive Security' => ['Web Application Penetration Testing', 'Vulnerability Assessment', 'Ethical Hacking', 'Web Exploitation', 'Network Reconnaissance', 'Reverse Engineering', 'Steganography', 'Capture the Flag (CTF)'],
            'Digital Forensics & Incident Response' => ['Windows Forensics', 'Memory Acquisition & Analysis', 'File Carving', 'Registry Forensics', 'Windows Event Log Analysis', 'Prefetch & Amcache Analysis', 'Persistence Analysis', 'Evidence Acquisition & Chain of Custody', 'File Integrity Verification (SHA-256)'],
            'Security Tools' => ['Kali Linux', 'Burp Suite', 'Nmap', 'Wireshark', 'Metasploit', 'SQLmap', 'Gobuster', 'Nikto', 'Hydra', 'John the Ripper', 'Hashcat', 'Ghidra', 'Steghide'],
            'Security Awareness & Education' => ['Phishing Awareness', 'Social Engineering', 'Password Security', 'Security Awareness Training'],
        ],
    ],
    [
        'title' => 'Networking & Infrastructure',
        'groups' => [
            'Networking' => ['TCP/IP', 'DNS', 'IP Addressing & Subnetting', 'VLANs', 'HTTP/HTTPS', 'SSL/TLS', 'Network Traffic Analysis', 'Cisco Packet Tracer'],
            'Server Administration' => ['Linux (Ubuntu)', 'Nginx', 'PHP-FPM', 'SSH', 'Cron', 'Supervisor', 'PM2', 'Automated Backups', 'Virtual Private Servers (VPS)'],
            'Cloud & DevOps' => ['DigitalOcean', 'Cloudflare DNS & SSL/TLS', 'Cloudflare R2', 'Git & GitHub', 'Sentry', 'CI/CD Fundamentals'],
        ],
    ],
    [
        'title' => 'Software Architecture & Engineering',
        'groups' => [
            'Architecture & Design' => ['Object-Oriented Programming (OOP)', 'MVC Architecture', 'Multi-Tenant SaaS Architecture', 'Relational Database Design', 'Database Migrations', 'REST API Design'],
            'Application Systems' => ['Authentication & Authorization', 'Background Job Processing', 'Subscription & Billing Systems', 'Automated Reporting & PDF Generation'],
            'Requirements & Documentation' => ['Software Requirements Specification (SRS)', 'Product Requirements Documents (PRD)'],
        ],
    ],
    [
        'title' => 'Artificial Intelligence & Automation',
        'groups' => [
            'AI Technologies' => ['Google AI Studio', 'AI API Integration', 'Model Context Protocol (MCP)', 'Prompt Engineering', 'AI-Assisted Development'],
            'Automation' => ['Python Scripting', 'Scheduled Jobs', 'Notification Automation'],
        ],
    ],
    [
        'title' => 'UI/UX & Interface Development',
        'groups' => [
            'Interface Development' => ['Responsive Web Design', 'Dashboard & Admin Panel Design', 'Component-Based UI Development', 'Design Systems', 'Interactive UI Components', 'Frontend Animations', 'Mobile UI Development'],
        ],
    ],
    [
        'title' => 'Development Tools & Platforms',
        'groups' => [
            'Tools & Environments' => ['Visual Studio Code', 'Composer', 'NPM', 'Laravel Artisan', 'PIP', 'Linux CLI', 'GNOME Shell Extensions', 'Virtual Machines'],
        ],
    ],
];
?>
<?php include 'includes/header.php' ?>
<main class="feed-container social-layout">
    <?php include 'includes/sidebars.php' ?>
    <div class="portfolio-shell">
        <header class="page-header">
            <h1 class="page-title">Technical Skills &amp; Expertise</h1>
            <p class="page-subtitle">A broad skills inventory; hands-on depth varies across areas.</p>
        </header>

        <div class="technical-skills">
            <?php foreach ($skillSections as $index => $section): ?>
                <?php $sectionId = 'technical-skills-' . ($index + 1); ?>
                <section class="technical-skill-section" aria-labelledby="<?= $sectionId ?>">
                    <h2 id="<?= $sectionId ?>"><span><?= $index + 1 ?>.</span> <?= htmlspecialchars($section['title'], ENT_QUOTES, 'UTF-8') ?></h2>
                    <div class="technical-skill-groups <?= count($section['groups']) === 1 ? 'technical-skill-groups--single' : '' ?>">
                        <?php foreach ($section['groups'] as $groupTitle => $skills): ?>
                            <section class="technical-skill-group">
                                <h3><?= htmlspecialchars($groupTitle, ENT_QUOTES, 'UTF-8') ?></h3>
                                <div class="skill-tags">
                                    <?php foreach ($skills as $skill): ?>
                                        <span class="skill-tag"><?= htmlspecialchars($skill, ENT_QUOTES, 'UTF-8') ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </section>
                        <?php endforeach; ?>
                    </div>
                </section>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<?php include 'includes/footer.php' ?>

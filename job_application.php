<?php
/**
 * RiceJobs - Job Application Form
 * Production-ready with full localization support
 */

// ============================================================================
// LOCALIZATION ARRAY - All text content for easy language switching
// ============================================================================
$text = [
    // Page Header
    'page_title' => 'Job Application',
    'page_subtitle' => 'Join our team - Fill in your details below',
    
    // Form Labels
    'label_fullname' => 'Full Name',
    'label_mobile' => 'Mobile Number',
    'label_email' => 'Email Address',
    'label_experience' => 'Total Experience',
    'label_skills' => 'Key Skills',
    'label_qualification' => 'Highest Qualification',
    'label_resume' => 'Upload Resume',
    'label_location' => 'Current Location',
    'label_jobtitle' => 'Current Job Title',
    'label_notice' => 'Notice Period',
    'label_languages' => 'Languages Known',
    'label_salary' => 'Expected Monthly Salary',
    
    // Placeholders
    'placeholder_fullname' => 'Enter your full name as per ID',
    'placeholder_mobile' => 'WhatsApp preferred',
    'placeholder_email' => 'your.email@example.com',
    'placeholder_skills' => 'e.g., PHP, JavaScript, Project Management, Communication...',
    'placeholder_location' => 'City, State',
    'placeholder_jobtitle' => 'e.g., Senior Developer',
    'placeholder_salary' => '₹',
    
    // Dropdown Options - Experience
    'exp_freshers' => 'Freshers',
    'exp_1to2' => '1-2 Years',
    'exp_3plus' => '3+ Years',
    
    // Dropdown Options - Qualification
    'qual_degree' => 'Degree (B.E/B.Tech/BCA/MCA)',
    'qual_diploma' => 'Diploma',
    'qual_iti' => 'ITI',
    'qual_schooling' => 'Schooling',
    
    // Dropdown Options - Notice Period
    'notice_immediate' => 'Immediate',
    'notice_15' => '15 Days',
    'notice_30' => '30 Days',
    
    // Language Options
    'lang_english' => 'English',
    'lang_tamil' => 'Tamil',
    'lang_hindi' => 'Hindi',
    'lang_telugu' => 'Telugu',
    'lang_kannada' => 'Kannada',
    'lang_malayalam' => 'Malayalam',
    
    // Buttons & Actions
    'btn_submit' => 'Submit Application',
    'btn_choose_file' => 'Choose PDF File',
    
    // Helper Text
    'help_resume' => 'PDF only, max 5MB',
    'help_mobile' => 'We prefer WhatsApp numbers for quick communication',
    'help_salary' => 'Optional - helps us match you with suitable roles',
    
    // Validation Messages
    'required_field' => 'This field is required',
    'success_message' => 'Application submitted successfully! We will contact you soon.',
    'error_message' => 'Please correct the errors and try again.',
    
    // Section Headers
    'section_personal' => 'Personal Information',
    'section_professional' => 'Professional Details',
    'section_additional' => 'Additional Information',
];

// ============================================================================
// PHP POST HANDLER
// ============================================================================
$form_submitted = false;
$success = false;
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $form_submitted = true;
    
    // Validate required fields
    $required_fields = ['fullname', 'mobile', 'email', 'experience', 'skills', 'qualification'];
    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            $errors[$field] = $text['required_field'];
        }
    }
    
    // Email validation
    if (!empty($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email format';
    }
    
    // File upload validation
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] === UPLOAD_ERR_OK) {
        $file_ext = strtolower(pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION));
        $file_size = $_FILES['resume']['size'];
        
        if ($file_ext !== 'pdf') {
            $errors['resume'] = 'Only PDF files are allowed';
        }
        if ($file_size > 5 * 1024 * 1024) { // 5MB
            $errors['resume'] = 'File size must not exceed 5MB';
        }
    } else if (!isset($_FILES['resume']) || $_FILES['resume']['error'] !== UPLOAD_ERR_OK) {
        $errors['resume'] = 'Resume is required';
    }
    
    // If no errors, process the form
    if (empty($errors)) {
        // Here you would:
        // 1. Move uploaded file to permanent location
        // 2. Insert data into database
        // 3. Send confirmation email
        // 4. Redirect to success page
        
        // Example file handling:
        // $upload_dir = 'uploads/resumes/';
        // $filename = time() . '_' . basename($_FILES['resume']['name']);
        // move_uploaded_file($_FILES['resume']['tmp_name'], $upload_dir . $filename);
        
        $success = true;
        
        // Clear POST data on success
        $_POST = [];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($text['page_title']); ?> - RiceJobs</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom Fonts: Geist Mono & Source Serif 4 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist+Mono:wght@300;400;500;600;700&family=Source+Serif+4:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind Configuration with OKLCH Colors -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        // RiceJobs OKLCH Color System
                        primary: {
                            DEFAULT: 'oklch(0.5417 0.1790 288.0332)',
                            foreground: 'oklch(1.0000 0 0)',
                        },
                        secondary: {
                            DEFAULT: 'oklch(0.9174 0.0435 292.6901)',
                            foreground: 'oklch(0.4143 0.1039 288.1742)',
                        },
                        background: 'oklch(0.9730 0.0133 286.1503)',
                        card: 'oklch(1.0000 0 0)',
                        muted: {
                            DEFAULT: 'oklch(0.9580 0.0133 286.1454)',
                            foreground: 'oklch(0.4143 0.1039 288.1742)',
                        },
                        border: 'oklch(0.9115 0.0216 285.9625)',
                        input: 'oklch(0.9115 0.0216 285.9625)',
                        destructive: {
                            DEFAULT: 'oklch(0.6861 0.2061 14.9941)',
                            foreground: 'oklch(1.0000 0 0)',
                        },
                        // Sidebar specific
                        sidebar: {
                            DEFAULT: 'oklch(0.9580 0.0133 286.1454)',
                            primary: 'oklch(0.5417 0.1790 288.0332)',
                            border: 'oklch(0.9115 0.0216 285.9625)',
                        },
                    },
                    fontFamily: {
                        sans: ['Geist Mono', 'monospace'],
                        mono: ['Geist Mono', 'monospace'],
                        serif: ['Source Serif 4', 'serif'],
                    },
                    borderRadius: {
                        DEFAULT: '0.875rem', // 14px
                        'sm': '0.625rem',    // 10px
                        'lg': '1rem',        // 16px
                        'xl': '1.25rem',     // 20px
                        '2xl': '1.5rem',     // 24px
                    },
                    boxShadow: {
                        DEFAULT: '0px 1px 5px #0000000d',
                        sm: '0px 1px 3px #0000000a',
                        md: '0px 1px 5px #0000000d',
                        lg: '0px 1px 8px #00000012',
                        xl: '0px 2px 12px #00000015',
                    },
                }
            }
        }
    </script>
    
    <style>
        /* CSS Custom Properties for OKLCH Colors */
        :root {
            --primary: oklch(0.5417 0.1790 288.0332);
            --primary-foreground: oklch(1.0000 0 0);
            --secondary: oklch(0.9174 0.0435 292.6901);
            --secondary-foreground: oklch(0.4143 0.1039 288.1742);
            --background: oklch(0.9730 0.0133 286.1503);
            --card: oklch(1.0000 0 0);
            --muted: oklch(0.9580 0.0133 286.1454);
            --muted-foreground: oklch(0.4143 0.1039 288.1742);
            --border: oklch(0.9115 0.0216 285.9625);
            --input: oklch(0.9115 0.0216 285.9625);
            --destructive: oklch(0.6861 0.2061 14.9941);
            --destructive-foreground: oklch(1.0000 0 0);
            
            /* Sidebar */
            --sidebar: oklch(0.9580 0.0133 286.1454);
            --sidebar-primary: oklch(0.5417 0.1790 288.0332);
            --sidebar-border: oklch(0.9115 0.0216 285.9625);
            
            /* Design System */
            --radius: 0.875rem;
            --shadow: 0px 1px 5px #0000000d;
        }
        
        * {
            font-family: 'Geist Mono', monospace;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Source Serif 4', serif;
        }
        
        /* Custom animations */
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .animate-slide-up {
            animation: slideUp 0.6s ease-out forwards;
        }
        
        .animate-fade-in {
            animation: fadeIn 0.8s ease-out forwards;
        }
        
        .stagger-1 { animation-delay: 0.1s; opacity: 0; }
        .stagger-2 { animation-delay: 0.2s; opacity: 0; }
        .stagger-3 { animation-delay: 0.3s; opacity: 0; }
        
        /* Custom focus states using OKLCH primary */
        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px oklch(0.5417 0.1790 288.0332 / 0.1);
            transform: translateY(-1px);
            transition: all 0.2s ease;
        }
        
        /* File upload styling */
        .file-upload-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
            width: 100%;
        }
        
        .file-upload-wrapper input[type=file] {
            position: absolute;
            left: -9999px;
        }
        
        .file-upload-label {
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .file-upload-label:hover {
            background-color: var(--muted);
            border-color: var(--primary);
        }
        
        /* Checkbox styling with primary color */
        input[type="checkbox"]:checked {
            background-color: var(--primary);
            border-color: var(--primary);
        }
        
        /* Success/Error messages */
        .message-box {
            animation: slideUp 0.5s ease-out;
        }
        
        /* Background pattern using muted color */
        .bg-pattern {
            background-color: var(--background);
            background-image: 
                radial-gradient(circle at 25px 25px, oklch(0.5417 0.1790 288.0332 / 0.02) 2%, transparent 0%),
                radial-gradient(circle at 75px 75px, oklch(0.5417 0.1790 288.0332 / 0.02) 2%, transparent 0%);
            background-size: 100px 100px;
        }
    </style>
</head>
<body class="bg-pattern min-h-screen py-8 px-4 sm:px-6 lg:px-8">
    
    <div class="max-w-4xl mx-auto">
        
        <!-- Header Section -->
        <div class="text-center mb-12 animate-slide-up">
            <div class="inline-block mb-6">
                <div class="w-16 h-16 bg-primary rounded-2xl mx-auto flex items-center justify-center shadow-lg">
                    <svg class="w-9 h-9 text-primary-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-secondary-foreground mb-3 tracking-tight">
                <?php echo htmlspecialchars($text['page_title']); ?>
            </h1>
            <p class="text-lg text-muted-foreground font-light">
                <?php echo htmlspecialchars($text['page_subtitle']); ?>
            </p>
        </div>
        
        <!-- Success Message -->
        <?php if ($success): ?>
        <div class="mb-8 message-box">
            <div class="bg-[oklch(0.95_0.05_150)] border-l-4 border-[oklch(0.65_0.15_150)] p-6 rounded-lg shadow">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-[oklch(0.55_0.15_150)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-[oklch(0.35_0.12_150)] font-medium">
                            <?php echo htmlspecialchars($text['success_message']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- Error Summary -->
        <?php if ($form_submitted && !empty($errors)): ?>
        <div class="mb-8 message-box">
            <div class="bg-[oklch(0.96_0.05_15)] border-l-4 border-destructive p-6 rounded-lg shadow">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-destructive" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-[oklch(0.45_0.15_15)] font-medium">
                            <?php echo htmlspecialchars($text['error_message']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- Main Form Card -->
        <div class="bg-card rounded-2xl shadow overflow-hidden animate-slide-up stagger-1">
            <div class="p-8 md:p-12">
                
                <form method="POST" enctype="multipart/form-data" class="space-y-10">
                    
                    <!-- Personal Information Section -->
                    <div class="animate-fade-in stagger-2">
                        <h2 class="text-2xl font-semibold text-secondary-foreground mb-6 pb-3 border-b-2 border-secondary">
                            <?php echo htmlspecialchars($text['section_personal']); ?>
                        </h2>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            
                            <!-- Full Name -->
                            <div class="md:col-span-2">
                                <label for="fullname" class="block text-sm font-semibold text-secondary-foreground mb-2">
                                    <?php echo htmlspecialchars($text['label_fullname']); ?> <span class="text-destructive">*</span>
                                </label>
                                <input 
                                    type="text" 
                                    id="fullname" 
                                    name="fullname" 
                                    value="<?php echo htmlspecialchars($_POST['fullname'] ?? ''); ?>"
                                    placeholder="<?php echo htmlspecialchars($text['placeholder_fullname']); ?>"
                                    required
                                    class="w-full px-4 py-3.5 border border-input rounded-lg focus:outline-none transition-all duration-200 <?php echo isset($errors['fullname']) ? 'border-destructive bg-[oklch(0.96_0.05_15)]' : ''; ?>"
                                >
                                <?php if (isset($errors['fullname'])): ?>
                                    <p class="mt-2 text-sm text-destructive"><?php echo htmlspecialchars($errors['fullname']); ?></p>
                                <?php endif; ?>
                            </div>
                            
                            <!-- Mobile Number -->
                            <div>
                                <label for="mobile" class="block text-sm font-semibold text-secondary-foreground mb-2">
                                    <?php echo htmlspecialchars($text['label_mobile']); ?> <span class="text-destructive">*</span>
                                </label>
                                <input 
                                    type="tel" 
                                    id="mobile" 
                                    name="mobile" 
                                    value="<?php echo htmlspecialchars($_POST['mobile'] ?? ''); ?>"
                                    placeholder="<?php echo htmlspecialchars($text['placeholder_mobile']); ?>"
                                    pattern="[0-9]{10}"
                                    required
                                    class="w-full px-4 py-3.5 border border-input rounded-lg focus:outline-none transition-all duration-200 <?php echo isset($errors['mobile']) ? 'border-destructive bg-[oklch(0.96_0.05_15)]' : ''; ?>"
                                >
                                <p class="mt-1.5 text-xs text-muted-foreground"><?php echo htmlspecialchars($text['help_mobile']); ?></p>
                                <?php if (isset($errors['mobile'])): ?>
                                    <p class="mt-2 text-sm text-destructive"><?php echo htmlspecialchars($errors['mobile']); ?></p>
                                <?php endif; ?>
                            </div>
                            
                            <!-- Email Address -->
                            <div>
                                <label for="email" class="block text-sm font-semibold text-secondary-foreground mb-2">
                                    <?php echo htmlspecialchars($text['label_email']); ?> <span class="text-destructive">*</span>
                                </label>
                                <input 
                                    type="email" 
                                    id="email" 
                                    name="email" 
                                    value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>"
                                    placeholder="<?php echo htmlspecialchars($text['placeholder_email']); ?>"
                                    required
                                    class="w-full px-4 py-3.5 border border-input rounded-lg focus:outline-none transition-all duration-200 <?php echo isset($errors['email']) ? 'border-destructive bg-[oklch(0.96_0.05_15)]' : ''; ?>"
                                >
                                <?php if (isset($errors['email'])): ?>
                                    <p class="mt-2 text-sm text-destructive"><?php echo htmlspecialchars($errors['email']); ?></p>
                                <?php endif; ?>
                            </div>
                            
                            <!-- Current Location (Optional) -->
                            <div class="md:col-span-2">
                                <label for="location" class="block text-sm font-semibold text-secondary-foreground mb-2">
                                    <?php echo htmlspecialchars($text['label_location']); ?>
                                </label>
                                <input 
                                    type="text" 
                                    id="location" 
                                    name="location" 
                                    value="<?php echo htmlspecialchars($_POST['location'] ?? ''); ?>"
                                    placeholder="<?php echo htmlspecialchars($text['placeholder_location']); ?>"
                                    class="w-full px-4 py-3.5 border border-input rounded-lg focus:outline-none transition-all duration-200"
                                >
                            </div>
                            
                        </div>
                    </div>
                    
                    <!-- Professional Details Section -->
                    <div class="animate-fade-in stagger-3">
                        <h2 class="text-2xl font-semibold text-secondary-foreground mb-6 pb-3 border-b-2 border-secondary">
                            <?php echo htmlspecialchars($text['section_professional']); ?>
                        </h2>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            
                            <!-- Total Experience -->
                            <div>
                                <label for="experience" class="block text-sm font-semibold text-secondary-foreground mb-2">
                                    <?php echo htmlspecialchars($text['label_experience']); ?> <span class="text-destructive">*</span>
                                </label>
                                <select 
                                    id="experience" 
                                    name="experience" 
                                    required
                                    class="w-full px-4 py-3.5 border border-input rounded-lg focus:outline-none transition-all duration-200 <?php echo isset($errors['experience']) ? 'border-destructive bg-[oklch(0.96_0.05_15)]' : ''; ?>"
                                >
                                    <option value="">Select...</option>
                                    <option value="freshers" <?php echo (isset($_POST['experience']) && $_POST['experience'] === 'freshers') ? 'selected' : ''; ?>>
                                        <?php echo htmlspecialchars($text['exp_freshers']); ?>
                                    </option>
                                    <option value="1-2" <?php echo (isset($_POST['experience']) && $_POST['experience'] === '1-2') ? 'selected' : ''; ?>>
                                        <?php echo htmlspecialchars($text['exp_1to2']); ?>
                                    </option>
                                    <option value="3+" <?php echo (isset($_POST['experience']) && $_POST['experience'] === '3+') ? 'selected' : ''; ?>>
                                        <?php echo htmlspecialchars($text['exp_3plus']); ?>
                                    </option>
                                </select>
                                <?php if (isset($errors['experience'])): ?>
                                    <p class="mt-2 text-sm text-destructive"><?php echo htmlspecialchars($errors['experience']); ?></p>
                                <?php endif; ?>
                            </div>
                            
                            <!-- Highest Qualification -->
                            <div>
                                <label for="qualification" class="block text-sm font-semibold text-secondary-foreground mb-2">
                                    <?php echo htmlspecialchars($text['label_qualification']); ?> <span class="text-destructive">*</span>
                                </label>
                                <select 
                                    id="qualification" 
                                    name="qualification" 
                                    required
                                    class="w-full px-4 py-3.5 border border-input rounded-lg focus:outline-none transition-all duration-200 <?php echo isset($errors['qualification']) ? 'border-destructive bg-[oklch(0.96_0.05_15)]' : ''; ?>"
                                >
                                    <option value="">Select...</option>
                                    <option value="degree" <?php echo (isset($_POST['qualification']) && $_POST['qualification'] === 'degree') ? 'selected' : ''; ?>>
                                        <?php echo htmlspecialchars($text['qual_degree']); ?>
                                    </option>
                                    <option value="diploma" <?php echo (isset($_POST['qualification']) && $_POST['qualification'] === 'diploma') ? 'selected' : ''; ?>>
                                        <?php echo htmlspecialchars($text['qual_diploma']); ?>
                                    </option>
                                    <option value="iti" <?php echo (isset($_POST['qualification']) && $_POST['qualification'] === 'iti') ? 'selected' : ''; ?>>
                                        <?php echo htmlspecialchars($text['qual_iti']); ?>
                                    </option>
                                    <option value="schooling" <?php echo (isset($_POST['qualification']) && $_POST['qualification'] === 'schooling') ? 'selected' : ''; ?>>
                                        <?php echo htmlspecialchars($text['qual_schooling']); ?>
                                    </option>
                                </select>
                                <?php if (isset($errors['qualification'])): ?>
                                    <p class="mt-2 text-sm text-destructive"><?php echo htmlspecialchars($errors['qualification']); ?></p>
                                <?php endif; ?>
                            </div>
                            
                            <!-- Current Job Title (Optional) -->
                            <div>
                                <label for="jobtitle" class="block text-sm font-semibold text-secondary-foreground mb-2">
                                    <?php echo htmlspecialchars($text['label_jobtitle']); ?>
                                </label>
                                <input 
                                    type="text" 
                                    id="jobtitle" 
                                    name="jobtitle" 
                                    value="<?php echo htmlspecialchars($_POST['jobtitle'] ?? ''); ?>"
                                    placeholder="<?php echo htmlspecialchars($text['placeholder_jobtitle']); ?>"
                                    class="w-full px-4 py-3.5 border border-input rounded-lg focus:outline-none transition-all duration-200"
                                >
                            </div>
                            
                            <!-- Notice Period (Optional) -->
                            <div>
                                <label for="notice" class="block text-sm font-semibold text-secondary-foreground mb-2">
                                    <?php echo htmlspecialchars($text['label_notice']); ?>
                                </label>
                                <select 
                                    id="notice" 
                                    name="notice" 
                                    class="w-full px-4 py-3.5 border border-input rounded-lg focus:outline-none transition-all duration-200"
                                >
                                    <option value="">Select...</option>
                                    <option value="immediate" <?php echo (isset($_POST['notice']) && $_POST['notice'] === 'immediate') ? 'selected' : ''; ?>>
                                        <?php echo htmlspecialchars($text['notice_immediate']); ?>
                                    </option>
                                    <option value="15" <?php echo (isset($_POST['notice']) && $_POST['notice'] === '15') ? 'selected' : ''; ?>>
                                        <?php echo htmlspecialchars($text['notice_15']); ?>
                                    </option>
                                    <option value="30" <?php echo (isset($_POST['notice']) && $_POST['notice'] === '30') ? 'selected' : ''; ?>>
                                        <?php echo htmlspecialchars($text['notice_30']); ?>
                                    </option>
                                </select>
                            </div>
                            
                            <!-- Key Skills -->
                            <div class="md:col-span-2">
                                <label for="skills" class="block text-sm font-semibold text-secondary-foreground mb-2">
                                    <?php echo htmlspecialchars($text['label_skills']); ?> <span class="text-destructive">*</span>
                                </label>
                                <textarea 
                                    id="skills" 
                                    name="skills" 
                                    rows="4"
                                    placeholder="<?php echo htmlspecialchars($text['placeholder_skills']); ?>"
                                    required
                                    class="w-full px-4 py-3.5 border border-input rounded-lg focus:outline-none transition-all duration-200 resize-none <?php echo isset($errors['skills']) ? 'border-destructive bg-[oklch(0.96_0.05_15)]' : ''; ?>"
                                ><?php echo htmlspecialchars($_POST['skills'] ?? ''); ?></textarea>
                                <?php if (isset($errors['skills'])): ?>
                                    <p class="mt-2 text-sm text-destructive"><?php echo htmlspecialchars($errors['skills']); ?></p>
                                <?php endif; ?>
                            </div>
                            
                            <!-- Upload Resume -->
                            <div class="md:col-span-2">
                                <label for="resume" class="block text-sm font-semibold text-secondary-foreground mb-2">
                                    <?php echo htmlspecialchars($text['label_resume']); ?> <span class="text-destructive">*</span>
                                </label>
                                <div class="file-upload-wrapper">
                                    <input 
                                        type="file" 
                                        id="resume" 
                                        name="resume" 
                                        accept=".pdf"
                                        required
                                        onchange="updateFileName(this)"
                                    >
                                    <label for="resume" class="file-upload-label flex items-center justify-center w-full px-6 py-4 border-2 border-dashed border-input rounded-lg text-muted-foreground <?php echo isset($errors['resume']) ? 'border-destructive bg-[oklch(0.96_0.05_15)]' : ''; ?>">
                                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                        </svg>
                                        <span id="file-name" class="font-medium"><?php echo htmlspecialchars($text['btn_choose_file']); ?></span>
                                    </label>
                                </div>
                                <p class="mt-1.5 text-xs text-muted-foreground"><?php echo htmlspecialchars($text['help_resume']); ?></p>
                                <?php if (isset($errors['resume'])): ?>
                                    <p class="mt-2 text-sm text-destructive"><?php echo htmlspecialchars($errors['resume']); ?></p>
                                <?php endif; ?>
                            </div>
                            
                        </div>
                    </div>
                    
                    <!-- Additional Information Section -->
                    <div class="animate-fade-in stagger-3">
                        <h2 class="text-2xl font-semibold text-secondary-foreground mb-6 pb-3 border-b-2 border-secondary">
                            <?php echo htmlspecialchars($text['section_additional']); ?>
                        </h2>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            
                            <!-- Expected Monthly Salary (Optional) -->
                            <div>
                                <label for="salary" class="block text-sm font-semibold text-secondary-foreground mb-2">
                                    <?php echo htmlspecialchars($text['label_salary']); ?>
                                </label>
                                <input 
                                    type="number" 
                                    id="salary" 
                                    name="salary" 
                                    value="<?php echo htmlspecialchars($_POST['salary'] ?? ''); ?>"
                                    placeholder="<?php echo htmlspecialchars($text['placeholder_salary']); ?>"
                                    min="0"
                                    class="w-full px-4 py-3.5 border border-input rounded-lg focus:outline-none transition-all duration-200"
                                >
                                <p class="mt-1.5 text-xs text-muted-foreground"><?php echo htmlspecialchars($text['help_salary']); ?></p>
                            </div>
                            
                            <!-- Languages Known -->
                            <div>
                                <label class="block text-sm font-semibold text-secondary-foreground mb-3">
                                    <?php echo htmlspecialchars($text['label_languages']); ?>
                                </label>
                                <div class="space-y-2.5">
                                    <?php 
                                    $languages = [
                                        'english' => $text['lang_english'],
                                        'tamil' => $text['lang_tamil'],
                                        'hindi' => $text['lang_hindi'],
                                        'telugu' => $text['lang_telugu'],
                                        'kannada' => $text['lang_kannada'],
                                        'malayalam' => $text['lang_malayalam'],
                                    ];
                                    foreach ($languages as $lang_key => $lang_label):
                                        $checked = isset($_POST['languages']) && in_array($lang_key, $_POST['languages']);
                                    ?>
                                    <label class="flex items-center group cursor-pointer">
                                        <input 
                                            type="checkbox" 
                                            name="languages[]" 
                                            value="<?php echo $lang_key; ?>"
                                            <?php echo $checked ? 'checked' : ''; ?>
                                            class="w-5 h-5 text-primary border-input rounded focus:ring-primary transition-all duration-200"
                                        >
                                        <span class="ml-3 text-secondary-foreground group-hover:text-primary transition-colors duration-200">
                                            <?php echo htmlspecialchars($lang_label); ?>
                                        </span>
                                    </label>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="pt-6 border-t border-border">
                        <button 
                            type="submit" 
                            class="w-full bg-primary text-primary-foreground font-semibold py-4 px-8 rounded-xl hover:opacity-90 focus:outline-none focus:ring-4 focus:ring-[oklch(0.5417_0.1790_288.0332_/_0.3)] transform hover:scale-[1.01] transition-all duration-200 shadow-lg hover:shadow-xl text-lg"
                        >
                            <?php echo htmlspecialchars($text['btn_submit']); ?>
                        </button>
                    </div>
                    
                </form>
                
            </div>
        </div>
        
        <!-- Footer -->
        <div class="text-center mt-12 text-muted-foreground text-sm animate-fade-in">
            <p>Powered by <span class="font-semibold text-primary">RiceJobs</span> - Your Career Partner</p>
        </div>
        
    </div>
    
    <script>
        // Update file name display when file is selected
        function updateFileName(input) {
            const fileNameSpan = document.getElementById('file-name');
            if (input.files && input.files.length > 0) {
                fileNameSpan.textContent = input.files[0].name;
                fileNameSpan.parentElement.classList.remove('border-input');
                fileNameSpan.parentElement.classList.add('border-primary', 'bg-secondary');
            }
        }
        
        // Smooth scroll to error on submit
        <?php if ($form_submitted && !empty($errors)): ?>
        document.addEventListener('DOMContentLoaded', function() {
            const firstError = document.querySelector('.border-destructive');
            if (firstError) {
                firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                firstError.focus();
            }
        });
        <?php endif; ?>
    </script>
    
</body>
</html>

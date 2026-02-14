<?php
/**
 * RiceJobs - Job Application Form
 * Production-ready with full localization support (English & Tamil)
 * Design System: OKLCH / Geist Mono / Source Serif 4 / Noto Sans Tamil
 */

// ============================================================================
// LOCALIZATION ARRAYS
// ============================================================================

// English (Default)
$text_en = [
    'page_title' => 'RiceJobs',
    'page_subtitle' => 'Join our ecosystem - Localized & Automated.',
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
    
    'placeholder_fullname' => 'e.g., Priya Sharma',
    'placeholder_mobile' => '9876543210',
    'placeholder_email' => 'priya.sharma@example.com',
    'placeholder_skills' => 'React, Node.js, TypeScript, Agile, Communication',
    'placeholder_location' => 'Chennai, Tamil Nadu',
    'placeholder_jobtitle' => 'Senior Full Stack Developer',
    'placeholder_salary' => '₹',
    
    'exp_freshers' => 'Freshers',
    'exp_1to2' => '1-2 Years',
    'exp_3plus' => '3+ Years',
    'qual_degree' => 'Degree (B.E/B.Tech/BCA/MCA)',
    'qual_diploma' => 'Diploma',
    'qual_iti' => 'ITI',
    'qual_schooling' => 'Schooling',
    'notice_immediate' => 'Immediate',
    'notice_15' => '15 Days',
    'notice_30' => '30 Days',
    
    'lang_english' => 'English',
    'lang_tamil' => 'Tamil',
    'lang_hindi' => 'Hindi',
    'lang_telugu' => 'Telugu',
    'lang_kannada' => 'Kannada',
    'lang_malayalam' => 'Malayalam',
    
    'btn_submit' => 'Submit Application',
    'btn_submitting' => 'Processing...',
    'btn_choose_file' => 'Choose PDF File',
    'upload_hint' => 'PDF only, max 5MB',
    
    'help_mobile' => 'We prefer WhatsApp numbers for quick communication',
    'help_salary' => 'Optional - helps us match you with suitable roles',
    
    'required_field' => 'This field is required',
    'success_title' => 'Application Sent!',
    'success_message' => 'Your profile has been successfully submitted to our recruitment team.',
    'error_title' => 'Submission Failed',
    'error_message' => 'Please correct the highlighted errors below.',
    'error_email' => 'Invalid email format',
    'error_file_type' => 'Only PDF files are allowed',
    'error_file_size' => 'File size must not exceed 5MB',
    'error_file_missing' => 'Resume is required',
    
    'section_personal' => 'Personal Information',
    'section_professional' => 'Professional Details',
    'section_additional' => 'Additional Information',
    'toggle_lang' => 'தமிழ்' // Text to show on button when in English
];

// Tamil
$text_ta = [
    'page_title' => 'RiceJobs',
    'page_subtitle' => 'எங்கள் அணியில் இணையுங்கள் - உங்கள் விவரங்களை கீழே நிரப்பவும்',
    
    'label_fullname' => 'முழு பெயர்',
    'label_mobile' => 'அலைபேசி எண்',
    'label_email' => 'மின்னஞ்சல் முகவரி',
    'label_experience' => 'மொத்த அனுபவம்',
    'label_skills' => 'முக்கிய திறன்கள்',
    'label_qualification' => 'கல்வித் தகுதி',
    'label_resume' => 'சுயவிவரம் (Resume)',
    'label_location' => 'தற்போதைய இடம்',
    'label_jobtitle' => 'தற்போதைய பதவி',
    'label_notice' => 'நோட்டீஸ் காலம்',
    'label_languages' => 'தெரிந்த மொழிகள்',
    'label_salary' => 'எதிர்பார்க்கும் மாத சம்பளம்',
    
    'placeholder_fullname' => 'பெயர் (ID-யில் உள்ளபடி)',
    'placeholder_mobile' => 'WhatsApp எண் சிறந்தது',
    'placeholder_email' => 'priya.sharma@example.com',
    'placeholder_skills' => 'எ.கா: PHP, JavaScript, Project Management...',
    'placeholder_location' => 'நகரம், மாநிலம்',
    'placeholder_jobtitle' => 'எ.கா: Senior Developer',
    'placeholder_salary' => '₹',
    
    'exp_freshers' => 'அனுபவம் இல்லை (Fresher)',
    'exp_1to2' => '1-2 ஆண்டுகள்',
    'exp_3plus' => '3+ ஆண்டுகள்',
    'qual_degree' => 'பட்டப்படிப்பு (B.E/B.Tech)',
    'qual_diploma' => 'டிப்ளமோ (Diploma)',
    'qual_iti' => 'ஐடிஐ (ITI)',
    'qual_schooling' => 'பள்ளிப்படிப்பு',
    'notice_immediate' => 'உடனடியாக சேர முடியும்',
    'notice_15' => '15 நாட்கள்',
    'notice_30' => '30 நாட்கள்',
    
    'lang_english' => 'ஆங்கிலம் (English)',
    'lang_tamil' => 'தமிழ் (Tamil)',
    'lang_hindi' => 'இந்தி (Hindi)',
    'lang_telugu' => 'தெலுங்கு (Telugu)',
    'lang_kannada' => 'கன்னடம் (Kannada)',
    'lang_malayalam' => 'மலையாளம் (Malayalam)',
    
    'btn_submit' => 'விண்ணப்பிக்கவும்',
    'btn_submitting' => 'செயலாக்கத்...',
    'btn_choose_file' => 'PDF கோப்பைத் தேர்ந்தெடுக்கவும்',
    'upload_hint' => 'PDF மட்டும், அதிகபட்சம் 5MB',
    
    'help_mobile' => 'தொடர்புக்கு WhatsApp எண் சிறந்தது',
    'help_salary' => 'விருப்பினால் - பொருத்தமான வேலைகளைக் கண்டறிய உதவும்',
    
    'required_field' => 'இது அவசியம்',
    'success_title' => 'விண்ணப்பம் அனுப்பப்பட்டது!',
    'success_message' => 'உங்கள் விவரங்கள் வெற்றிகரமாக சமர்ப்பிக்கப்பட்டன.',
    'error_title' => 'சமர்ப்பிப்பதில் தோல்வி',
    'error_message' => 'கீழே உள்ள பிழைகளைச் சரிசெய்யவும்.',
    'error_email' => 'தவறான மின்னஞ்சல் வடிவம்',
    'error_file_type' => 'PDF கோப்புகள் மட்டுமே அனுமதிக்கப்படும்',
    'error_file_size' => 'கோப்பு அளவு 5MB க்கு மிகாமல் இருக்க வேண்டும்',
    'error_file_missing' => 'சுயவிவரம் (Resume) தேவை',
    
    'section_personal' => 'தனிப்பட்ட தகவல்கள்',
    'section_professional' => 'தொழில்முறை விவரங்கள்',
    'section_additional' => 'கூடுதல் தகவல்கள்',
    'toggle_lang' => 'English' // Text to show on button when in Tamil
];

// Language Switching Logic
$lang = isset($_GET['lang']) && $_GET['lang'] === 'ta' ? 'ta' : 'en';
$text = ($lang === 'ta') ? $text_ta : $text_en;

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
        $errors['email'] = $text['error_email'];
    }
    
    // File upload validation
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] === UPLOAD_ERR_OK) {
        $file_ext = strtolower(pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION));
        $file_size = $_FILES['resume']['size'];
        
        if ($file_ext !== 'pdf') {
            $errors['resume'] = $text['error_file_type'];
        }
        if ($file_size > 5 * 1024 * 1024) { // 5MB
            $errors['resume'] = $text['error_file_size'];
        }
    } else if (!isset($_FILES['resume']) || $_FILES['resume']['error'] !== UPLOAD_ERR_OK) {
        $errors['resume'] = $text['error_file_missing'];
    }
    
    // If no errors, process the form
    if (empty($errors)) {
        $success = true;
        $_POST = [];
    }
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($text['page_title']); ?></title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Custom Fonts: Geist Mono & Source Serif 4 & Noto Sans Tamil -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist+Mono:wght@300;400;500;600;700&family=Noto+Sans+Tamil:wght@300;400;500;600;700&family=Source+Serif+4:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    
    <!-- Tailwind Configuration with OKLCH Colors -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        // RiceJobs OKLCH Color System
                        primary: {
                            DEFAULT: 'oklch(0.5417 0.1790 288.0332)', // Vibrant Purple
                            hover: 'oklch(0.48 0.1790 288.0332)',
                            foreground: '#ffffff',
                        },
                        background: 'oklch(0.9730 0.0133 286.1503)', // Light Tint
                        surface: '#ffffff',
                        border: 'oklch(0.9115 0.0216 285.9625)',
                        input: 'oklch(0.9115 0.0216 285.9625)',
                        destructive: {
                            DEFAULT: 'oklch(0.6861 0.2061 14.9941)',
                            foreground: '#ffffff',
                        },
                        muted: {
                            DEFAULT: 'oklch(0.9580 0.0133 286.1454)',
                            foreground: 'oklch(0.55 0.05 286.15)',
                        }
                    },
                    fontFamily: {
                        sans: ['"Geist Mono"', '"Noto Sans Tamil"', 'monospace'],
                        serif: ['"Source Serif 4"', '"Noto Sans Tamil"', 'serif'],
                    },
                    borderRadius: {
                        DEFAULT: '0.875rem', // 14px Strict Requirement
                        'lg': '0.875rem',    
                        'xl': '1.25rem',
                    },
                    boxShadow: {
                        DEFAULT: '0px 1px 5px rgba(0,0,0,0.05)',
                        'focus': '0 0 0 4px oklch(0.5417 0.1790 288.0332 / 0.15)',
                        'card': '0 4px 6px -1px rgba(0, 0, 0, 0.02), 0 2px 4px -1px rgba(0, 0, 0, 0.02)',
                    },
                    animation: {
                        'fade-in-up': 'fadeInUp 0.6s ease-out forwards',
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        body {
            font-family: 'Geist Mono', 'Noto Sans Tamil', monospace;
            background-color: theme('colors.background');
        }
        
        h1, h2, h3 {
            font-family: 'Source Serif 4', 'Noto Sans Tamil', serif;
        }
        
        /* Custom form interactions */
        input, select, textarea {
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        input:hover, select:hover, textarea:hover {
            border-color: theme('colors.primary.DEFAULT');
        }

        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: theme('colors.primary.DEFAULT');
            box-shadow: theme('boxShadow.focus');
            background-color: theme('colors.surface');
            transform: translateY(-1px);
        }

        /* File Upload Styling */
        .file-upload-input {
            opacity: 0;
            position: absolute;
            width: 100%;
            height: 100%;
            cursor: pointer;
            z-index: 10;
        }
        
        .file-upload-zone {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .file-upload-input:hover + .file-upload-zone {
            border-color: theme('colors.primary.DEFAULT');
            background-color: theme('colors.muted.DEFAULT');
            transform: scale-[1.01];
        }

        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="min-h-screen text-slate-800 relative">
    
    <!-- Immersive Header Background -->
    <div class="absolute top-0 inset-x-0 h-[400px] -z-10 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-[oklch(0.3_0.15_288)] via-primary to-[oklch(0.25_0.12_280)]"></div>
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 25px 25px, white 2%, transparent 0%); background-size: 50px 50px;"></div>
        <div class="absolute bottom-0 inset-x-0 h-32 bg-gradient-to-t from-[oklch(0.9730_0.0133_286.1503)] to-transparent"></div>
    </div>

    <!-- Language Toggle (Absolute Position) -->
    <div class="absolute top-6 right-6 z-50">
        <a href="?lang=<?php echo $lang === 'en' ? 'ta' : 'en'; ?>" class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-md border border-white/20 rounded-full text-white font-medium hover:bg-white/20 transition-all text-sm shadow-lg group">
            <i data-lucide="globe" class="w-4 h-4 group-hover:rotate-12 transition-transform"></i>
            <span><?php echo $text['toggle_lang']; ?></span>
        </a>
    </div>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-12">
        
        <!-- Header Section -->
        <div class="text-center mb-16 relative z-10 animate-fade-in-up">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-white/10 backdrop-blur-md border border-white/20 mb-6 shadow-lg shadow-primary/30">
                <i data-lucide="briefcase" class="w-8 h-8 text-white"></i>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-4 tracking-tight drop-shadow-sm">
                <?php echo htmlspecialchars($text['page_title']); ?>
            </h1>
            <p class="text-xl text-white/90 font-light tracking-wide max-w-2xl mx-auto">
                <?php echo htmlspecialchars($text['page_subtitle']); ?>
            </p>
        </div>
        
        <!-- Success Message -->
        <?php if ($success): ?>
        <div class="mb-12 max-w-2xl mx-auto animate-fade-in-up">
            <div class="bg-surface rounded-2xl p-10 shadow-lg text-center border border-primary/20 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary/40 via-primary to-primary/40"></div>
                
                <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-primary/5 mb-6 ring-8 ring-primary/5">
                    <i data-lucide="check-circle-2" class="w-10 h-10 text-primary"></i>
                </div>
                
                <h3 class="text-3xl font-serif font-bold text-slate-900 mb-3">
                    <?php echo htmlspecialchars($text['success_title']); ?>
                </h3>
                <p class="text-slate-600 text-lg mb-8 max-w-md mx-auto leading-relaxed">
                    <?php echo htmlspecialchars($text['success_message']); ?>
                </p>
                
                <a href="index.php?lang=<?php echo $lang; ?>" class="inline-flex items-center gap-2 px-8 py-4 bg-muted text-slate-700 rounded-xl hover:bg-primary/10 hover:text-primary transition-colors font-semibold group">
                    <i data-lucide="refresh-ccw" class="w-4 h-4 group-hover:rotate-180 transition-transform duration-500"></i>
                    Submit Another Application
                </a>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- Error Summary -->
        <?php if ($form_submitted && !empty($errors)): ?>
        <div class="mb-8 max-w-3xl mx-auto animate-fade-in-up">
            <div class="bg-surface rounded-xl border-l-4 border-destructive p-5 shadow-sm flex items-start gap-4 ring-1 ring-black/5">
                <div class="p-2.5 bg-destructive/10 rounded-full text-destructive shrink-0 mt-0.5">
                    <i data-lucide="alert-circle" class="w-5 h-5"></i>
                </div>
                <div>
                    <h3 class="font-bold text-slate-900 text-lg mb-1"><?php echo htmlspecialchars($text['error_title']); ?></h3>
                    <p class="text-slate-600 mb-3"><?php echo htmlspecialchars($text['error_message']); ?></p>
                    <ul class="text-sm text-destructive space-y-1.5 list-disc list-inside font-medium bg-destructive/5 p-3 rounded-lg">
                        <?php foreach($errors as $field => $msg): ?>
                            <li><?php echo htmlspecialchars($msg); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php endif; ?>
        
        <?php if (!$success): ?>
        <form method="POST" enctype="multipart/form-data" class="space-y-8" id="jobForm" action="?lang=<?php echo $lang; ?>">
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                
                <!-- COLUMN 1: Personal & Additional -->
                <div class="space-y-8" style="animation: fadeInUp 0.6s ease-out 0.1s backwards;">
                    
                    <!-- Personal Information Card -->
                    <div class="bg-surface rounded-2xl shadow-card border border-border/50 hover:shadow-lg transition-shadow duration-300 overflow-hidden group">
                        <div class="px-6 py-4 border-b border-border bg-muted/30 flex items-center gap-3">
                            <span class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold text-sm ring-4 ring-white">01</span>
                            <h2 class="text-lg font-semibold text-slate-800 font-serif">
                                <?php echo htmlspecialchars($text['section_personal']); ?>
                            </h2>
                        </div>
                        
                        <div class="p-6 md:p-8 space-y-6">
                            <!-- Full Name -->
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">
                                    <?php echo htmlspecialchars($text['label_fullname']); ?> <span class="text-destructive">*</span>
                                </label>
                                <div class="relative">
                                    <i data-lucide="user" class="absolute left-4 top-3.5 w-5 h-5 text-slate-400 group-hover:text-primary transition-colors"></i>
                                    <input 
                                        type="text" 
                                        name="fullname" 
                                        autofocus
                                        value="<?php echo htmlspecialchars($_POST['fullname'] ?? ''); ?>"
                                        placeholder="<?php echo htmlspecialchars($text['placeholder_fullname']); ?>"
                                        class="w-full pl-12 pr-4 py-3 bg-background border <?php echo isset($errors['fullname']) ? 'border-destructive' : 'border-input'; ?> rounded-lg text-slate-800 placeholder:text-slate-400"
                                    >
                                </div>
                                <?php if (isset($errors['fullname'])): ?>
                                    <p class="mt-1.5 text-xs text-destructive font-medium flex items-center gap-1">
                                        <i data-lucide="info" class="w-3 h-3"></i> <?php echo htmlspecialchars($errors['fullname']); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            
                            <!-- Mobile -->
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">
                                    <?php echo htmlspecialchars($text['label_mobile']); ?> <span class="text-destructive">*</span>
                                </label>
                                <div class="relative">
                                    <i data-lucide="phone" class="absolute left-4 top-3.5 w-5 h-5 text-slate-400 group-hover:text-primary transition-colors"></i>
                                    <input 
                                        type="tel" 
                                        name="mobile" 
                                        value="<?php echo htmlspecialchars($_POST['mobile'] ?? ''); ?>"
                                        placeholder="<?php echo htmlspecialchars($text['placeholder_mobile']); ?>"
                                        class="w-full pl-12 pr-4 py-3 bg-background border <?php echo isset($errors['mobile']) ? 'border-destructive' : 'border-input'; ?> rounded-lg text-slate-800 placeholder:text-slate-400"
                                    >
                                </div>
                                <p class="mt-1.5 text-xs text-slate-500"><?php echo htmlspecialchars($text['help_mobile']); ?></p>
                            </div>
                            
                            <!-- Email -->
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">
                                    <?php echo htmlspecialchars($text['label_email']); ?> <span class="text-destructive">*</span>
                                </label>
                                <div class="relative">
                                    <i data-lucide="mail" class="absolute left-4 top-3.5 w-5 h-5 text-slate-400 group-hover:text-primary transition-colors"></i>
                                    <input 
                                        type="email" 
                                        name="email" 
                                        value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>"
                                        placeholder="<?php echo htmlspecialchars($text['placeholder_email']); ?>"
                                        class="w-full pl-12 pr-4 py-3 bg-background border <?php echo isset($errors['email']) ? 'border-destructive' : 'border-input'; ?> rounded-lg text-slate-800 placeholder:text-slate-400"
                                    >
                                </div>
                            </div>

                            <!-- Location -->
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">
                                    <?php echo htmlspecialchars($text['label_location']); ?>
                                </label>
                                <div class="relative">
                                    <i data-lucide="map-pin" class="absolute left-4 top-3.5 w-5 h-5 text-slate-400 group-hover:text-primary transition-colors"></i>
                                    <input 
                                        type="text" 
                                        name="location" 
                                        value="<?php echo htmlspecialchars($_POST['location'] ?? ''); ?>"
                                        placeholder="<?php echo htmlspecialchars($text['placeholder_location']); ?>"
                                        class="w-full pl-12 pr-4 py-3 bg-background border border-input rounded-lg text-slate-800 placeholder:text-slate-400"
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Information Card -->
                    <div class="bg-surface rounded-2xl shadow-card border border-border/50 hover:shadow-lg transition-shadow duration-300 overflow-hidden group">
                        <div class="px-6 py-4 border-b border-border bg-muted/30 flex items-center gap-3">
                            <span class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold text-sm ring-4 ring-white">03</span>
                            <h2 class="text-lg font-semibold text-slate-800 font-serif">
                                <?php echo htmlspecialchars($text['section_additional']); ?>
                            </h2>
                        </div>

                        <div class="p-6 md:p-8 space-y-6">
                            <!-- Expected Salary -->
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">
                                    <?php echo htmlspecialchars($text['label_salary']); ?>
                                </label>
                                <div class="relative">
                                    <span class="absolute left-4 top-3 text-slate-400 font-bold group-hover:text-primary transition-colors">₹</span>
                                    <input 
                                        type="number" 
                                        name="salary" 
                                        value="<?php echo htmlspecialchars($_POST['salary'] ?? ''); ?>"
                                        placeholder="0.00"
                                        class="w-full pl-10 pr-4 py-3 bg-background border border-input rounded-lg text-slate-800 placeholder:text-slate-400"
                                    >
                                </div>
                                <p class="mt-1.5 text-xs text-slate-500"><?php echo htmlspecialchars($text['help_salary']); ?></p>
                            </div>

                            <!-- Languages (Animated Pills) -->
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-3">
                                    <?php echo htmlspecialchars($text['label_languages']); ?>
                                </label>
                                <div class="flex flex-wrap gap-3">
                                    <?php 
                                    $languages = [
                                        'english' => $text['lang_english'],
                                        'tamil' => $text['lang_tamil'],
                                        'hindi' => $text['lang_hindi'],
                                        'telugu' => $text['lang_telugu'],
                                        'kannada' => $text['lang_kannada'],
                                        'malayalam' => $text['lang_malayalam'],
                                    ];
                                    foreach ($languages as $key => $val):
                                        $checked = isset($_POST['languages']) && in_array($key, $_POST['languages']);
                                    ?>
                                    <label class="cursor-pointer relative group/lang">
                                        <input type="checkbox" name="languages[]" value="<?php echo $key; ?>" class="peer sr-only" <?php echo $checked ? 'checked' : ''; ?>>
                                        <div class="flex items-center gap-2 px-4 py-2.5 rounded-full border border-input bg-background text-slate-600 text-sm font-medium transition-all duration-200 peer-checked:border-primary peer-checked:bg-primary/5 peer-checked:text-primary hover:border-primary/50 hover:bg-muted group-hover/lang:translate-y-px">
                                            <span><?php echo $val; ?></span>
                                            <i data-lucide="check" class="w-3.5 h-3.5 opacity-0 scale-50 transition-all duration-200 peer-checked:opacity-100 peer-checked:scale-100"></i>
                                        </div>
                                    </label>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <!-- COLUMN 2: Professional Details -->
                <div class="space-y-8" style="animation: fadeInUp 0.6s ease-out 0.2s backwards;">
                    
                    <div class="bg-surface rounded-2xl shadow-card border border-border/50 hover:shadow-lg transition-shadow duration-300 overflow-hidden h-full group">
                        <div class="px-6 py-4 border-b border-border bg-muted/30 flex items-center gap-3">
                            <span class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold text-sm ring-4 ring-white">02</span>
                            <h2 class="text-lg font-semibold text-slate-800 font-serif">
                                <?php echo htmlspecialchars($text['section_professional']); ?>
                            </h2>
                        </div>
                        
                        <div class="p-6 md:p-8 space-y-6">
                            <!-- Job Title -->
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">
                                    <?php echo htmlspecialchars($text['label_jobtitle']); ?>
                                </label>
                                <input 
                                    type="text" 
                                    name="jobtitle" 
                                    value="<?php echo htmlspecialchars($_POST['jobtitle'] ?? ''); ?>"
                                    placeholder="<?php echo htmlspecialchars($text['placeholder_jobtitle']); ?>"
                                    class="w-full px-4 py-3 bg-background border border-input rounded-lg text-slate-800 placeholder:text-slate-400"
                                >
                            </div>

                            <!-- Experience & Qualification -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                                        <?php echo htmlspecialchars($text['label_experience']); ?> <span class="text-destructive">*</span>
                                    </label>
                                    <div class="relative">
                                        <select 
                                            name="experience" 
                                            class="w-full px-4 py-3 bg-background border <?php echo isset($errors['experience']) ? 'border-destructive' : 'border-input'; ?> rounded-lg text-slate-800 appearance-none cursor-pointer"
                                        >
                                            <option value="" disabled selected>Select Level</option>
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
                                        <i data-lucide="chevron-down" class="absolute right-4 top-3.5 w-5 h-5 text-slate-400 pointer-events-none"></i>
                                    </div>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                                        <?php echo htmlspecialchars($text['label_qualification']); ?> <span class="text-destructive">*</span>
                                    </label>
                                    <div class="relative">
                                        <select 
                                            name="qualification" 
                                            class="w-full px-4 py-3 bg-background border <?php echo isset($errors['qualification']) ? 'border-destructive' : 'border-input'; ?> rounded-lg text-slate-800 appearance-none cursor-pointer"
                                        >
                                            <option value="" disabled selected>Select...</option>
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
                                        <i data-lucide="chevron-down" class="absolute right-4 top-3.5 w-5 h-5 text-slate-400 pointer-events-none"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Skills -->
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">
                                    <?php echo htmlspecialchars($text['label_skills']); ?> <span class="text-destructive">*</span>
                                </label>
                                <textarea 
                                    name="skills" 
                                    rows="3" 
                                    placeholder="<?php echo htmlspecialchars($text['placeholder_skills']); ?>"
                                    class="w-full px-4 py-3 bg-background border <?php echo isset($errors['skills']) ? 'border-destructive' : 'border-input'; ?> rounded-lg text-slate-800 placeholder:text-slate-400 resize-none"
                                ><?php echo htmlspecialchars($_POST['skills'] ?? ''); ?></textarea>
                            </div>

                            <!-- Notice Period (Radio Cards) -->
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-3">
                                    <?php echo htmlspecialchars($text['label_notice']); ?>
                                </label>
                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                                    <?php 
                                    $notices = [
                                        'immediate' => $text['notice_immediate'],
                                        '15' => $text['notice_15'],
                                        '30' => $text['notice_30']
                                    ];
                                    foreach($notices as $val => $label): 
                                        $isSelected = (isset($_POST['notice']) && $_POST['notice'] === $val);
                                    ?>
                                    <label class="cursor-pointer relative group/notice">
                                        <input type="radio" name="notice" value="<?php echo $val; ?>" class="peer sr-only" <?php echo $isSelected ? 'checked' : ''; ?>>
                                        <div class="px-3 py-3 text-sm text-center font-medium rounded-lg border border-input bg-background text-slate-600 transition-all duration-200 peer-checked:border-primary peer-checked:bg-primary/5 peer-checked:text-primary hover:border-primary/50 hover:bg-muted peer-focus:ring-2 peer-focus:ring-primary/20">
                                            <?php echo $label; ?>
                                        </div>
                                    </label>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <!-- Resume Upload (Smart Interaction) -->
                            <div class="pt-4 border-t border-border border-dashed">
                                <label class="block text-sm font-semibold text-slate-700 mb-3">
                                    <?php echo htmlspecialchars($text['label_resume']); ?> <span class="text-destructive">*</span>
                                </label>
                                <div class="relative group h-40">
                                    <input 
                                        type="file" 
                                        name="resume" 
                                        accept=".pdf" 
                                        class="file-upload-input" 
                                        onchange="updateFileName(this)"
                                    >
                                    <div id="drop-zone" class="file-upload-zone w-full h-full border-2 border-dashed <?php echo isset($errors['resume']) ? 'border-destructive bg-destructive/5' : 'border-input bg-background'; ?> rounded-xl flex flex-col items-center justify-center text-center p-6 transition-all duration-300 group-hover:border-primary group-hover:bg-primary/5">
                                        <div class="icon-container w-12 h-12 rounded-full bg-white shadow-sm flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-300">
                                            <i data-lucide="upload-cloud" class="w-6 h-6 text-primary"></i>
                                        </div>
                                        <p id="file-label" class="text-sm font-semibold text-slate-700 group-hover:text-primary transition-colors">
                                            <?php echo htmlspecialchars($text['btn_choose_file']); ?>
                                        </p>
                                        <p id="file-sublabel" class="text-xs text-slate-500 mt-2 font-mono">
                                            <?php echo htmlspecialchars($text['upload_hint']); ?>
                                        </p>
                                    </div>
                                </div>
                                <?php if (isset($errors['resume'])): ?>
                                    <p class="mt-2 text-xs text-destructive font-medium flex items-center gap-1">
                                        <i data-lucide="alert-circle" class="w-3 h-3"></i> <?php echo htmlspecialchars($errors['resume']); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <!-- Submit Action -->
            <div class="pt-12 border-t border-border flex flex-col items-center animate-fade-in-up" style="animation-delay: 0.3s;">
                <button 
                    type="submit" 
                    id="submitBtn"
                    class="w-full md:w-auto min-w-[280px] bg-primary text-white font-bold text-lg py-4 px-10 rounded-xl shadow-lg shadow-primary/30 hover:bg-primary-hover hover:shadow-xl hover:shadow-primary/40 focus:outline-none focus:ring-4 focus:ring-primary/20 transform hover:-translate-y-1 active:scale-[0.98] transition-all duration-300 group"
                    onclick="this.innerText='<?php echo htmlspecialchars($text['btn_submitting']); ?>'; this.classList.add('opacity-80', 'cursor-wait');"
                >
                    <span class="flex items-center justify-center gap-2">
                        <?php echo htmlspecialchars($text['btn_submit']); ?>
                        <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                    </span>
                </button>
                <p class="mt-5 text-xs text-slate-400 flex items-center gap-1.5 opacity-80">
                    <i data-lucide="lock" class="w-3 h-3"></i> Secure SSL Encrypted Submission
                </p>
            </div>
            
        </form>
        <?php endif; ?>
        
        <!-- Footer -->
        <div class="mt-20 text-center border-t border-border pt-8 pb-4">
            <p class="text-slate-400 text-sm font-light">
                &copy; <?php echo date('Y'); ?> RiceJobs. All rights reserved.
            </p>
        </div>
        
    </div>

    <script>
        lucide.createIcons();

        function updateFileName(input) {
            const label = document.getElementById('file-label');
            const subLabel = document.getElementById('file-sublabel');
            const zone = document.getElementById('drop-zone');
            const iconContainer = zone.querySelector('.icon-container');
            
            if (input.files && input.files[0]) {
                const file = input.files[0];
                const sizeMB = (file.size / 1024 / 1024).toFixed(2);
                
                // Update content
                label.textContent = file.name;
                subLabel.textContent = `PDF • ${sizeMB} MB`;
                
                // Update styles to indicate success
                zone.classList.remove('border-input', 'border-destructive', 'bg-destructive/5', 'bg-background');
                zone.classList.add('border-primary', 'bg-primary/5');
                label.classList.add('text-primary');
                
                // Update icon to file type
                iconContainer.innerHTML = '<i data-lucide="file-check-2" class="w-6 h-6 text-primary"></i>';
                lucide.createIcons();
            }
        }
    </script>
</body>
</html>
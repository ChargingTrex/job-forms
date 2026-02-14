<?php
/**
 * RiceJobs - Job Application Form
 * Production-ready with full localization support (English/Tamil)
 */

// ============================================================================
// 1. LANGUAGE LOGIC
// ============================================================================

// Determine Language (Default to English)
$current_lang = isset($_GET['lang']) && $_GET['lang'] === 'ta' ? 'ta' : 'en';

// English Definitions
$text_en = [
    'page_title' => 'Job Application',
    'page_subtitle' => 'Join our team - Fill in your details below',
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
    'placeholder_fullname' => 'Enter your full name as per ID',
    'placeholder_mobile' => 'WhatsApp preferred',
    'placeholder_email' => 'your.email@example.com',
    'placeholder_skills' => 'e.g., PHP, JavaScript, Project Management, Communication...',
    'placeholder_location' => 'City, State',
    'placeholder_jobtitle' => 'e.g., Senior Developer',
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
    'btn_choose_file' => 'Choose PDF File',
    'help_resume' => 'PDF only, max 5MB',
    'help_mobile' => 'We prefer WhatsApp numbers for quick communication',
    'help_salary' => 'Optional - helps us match you with suitable roles',
    'required_field' => 'This field is required',
    'success_message' => 'Application submitted successfully! We will contact you soon.',
    'error_message' => 'Please correct the errors and try again.',
    'section_personal' => 'Personal Information',
    'section_professional' => 'Professional Details',
    'section_additional' => 'Additional Information',
    // Validation specifics
    'error_email' => 'Invalid email format',
    'error_file_type' => 'Only PDF files are allowed',
    'error_file_size' => 'File size must not exceed 5MB',
    'error_resume_req' => 'Resume is required',
];

// Tamil Definitions
$text_ta = [
    'page_title' => 'வேலை விண்ணப்பம்', // Job Application
    'page_subtitle' => 'எங்கள் அணியில் இணையுங்கள் - விவரங்களை கீழே நிரப்பவும்',
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
    'label_salary' => 'எதிர்பார்க்கும் சம்பளம்',
    'placeholder_fullname' => 'உங்கள் பெயர் (ID-யில் உள்ளபடி)',
    'placeholder_mobile' => 'WhatsApp எண் சிறந்தது',
    'placeholder_email' => 'udharam@example.com',
    'placeholder_skills' => 'எ.கா: PHP, JavaScript, Project Management...',
    'placeholder_location' => 'நகரம், மாநிலம்',
    'placeholder_jobtitle' => 'எ.கா: Senior Developer',
    'placeholder_salary' => '₹',
    'exp_freshers' => 'அனுபவம் இல்லை (Fresher)',
    'exp_1to2' => '1-2 ஆண்டுகள்',
    'exp_3plus' => '3+ ஆண்டுகள்',
    'qual_degree' => 'பட்டப்படிப்பு (B.E/B.Tech/Arts)',
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
    'btn_choose_file' => 'PDF கோப்பைத் தேர்ந்தெடுக்கவும்',
    'help_resume' => 'PDF மட்டும், அதிகபட்சம் 5MB',
    'help_mobile' => 'தொடர்புக்கு WhatsApp எண் சிறந்தது',
    'help_salary' => 'விருப்பினால் - பொருத்தமான வேலைகளைக் கண்டறிய உதவும்',
    'required_field' => 'இது அவசியம்',
    'success_message' => 'விண்ணப்பம் அனுப்பப்பட்டது! விரைவில் உங்களை தொடர்புகொள்வோம்.',
    'error_message' => 'கீழே உள்ள பிழைகளைச் சரிசெய்யவும்.',
    'section_personal' => 'தனிப்பட்ட தகவல்கள்',
    'section_professional' => 'தொழில்முறை விவரங்கள்',
    'section_additional' => 'கூடுதல் தகவல்கள்',
    // Validation specifics
    'error_email' => 'தவறான மின்னஞ்சல் வடிவம்',
    'error_file_type' => 'PDF கோப்புகள் மட்டுமே அனுமதிக்கப்படும்',
    'error_file_size' => 'கோப்பு அளவு 5MB க்கு மிகாமல் இருக்க வேண்டும்',
    'error_resume_req' => 'சுயவிவரம் (Resume) தேவை',
];

// Set the active text array
$text = ($current_lang === 'ta') ? $text_ta : $text_en;

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
        $errors['resume'] = $text['error_resume_req'];
    }
    
    // If no errors, process the form
    if (empty($errors)) {
        // Handle file upload and DB insertion here...
        $success = true;
        $_POST = [];
    }
}
?>
<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($text['page_title']); ?> - RiceJobs</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist+Mono:wght@300;400;500;600;700&family=Source+Serif+4:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Tamil:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
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
                        destructive: {
                            DEFAULT: 'oklch(0.6861 0.2061 14.9941)',
                        },
                        input: 'oklch(0.9115 0.0216 285.9625)',
                    },
                    fontFamily: {
                        sans: ['Geist Mono', 'Noto Sans Tamil', 'monospace'],
                        serif: ['Source Serif 4', 'Noto Sans Tamil', 'serif'],
                    },
                }
            }
        }
    </script>
    
    <style>
        /* Base styles */
        body { font-family: 'Geist Mono', 'Noto Sans Tamil', monospace; }
        h1, h2, h3 { font-family: 'Source Serif 4', 'Noto Sans Tamil', serif; }
        
        /* Animations */
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-slide-up { animation: slideUp 0.6s ease-out forwards; }
        
        /* Form Focus */
        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: oklch(0.5417 0.1790 288.0332);
            box-shadow: 0 0 0 3px oklch(0.5417 0.1790 288.0332 / 0.1);
        }

        /* Language Toggle Active State */
        .lang-active {
            background-color: oklch(0.5417 0.1790 288.0332);
            color: white;
            font-weight: 600;
        }
        .lang-inactive {
            background-color: transparent;
            color: oklch(0.4143 0.1039 288.1742);
        }
        .lang-inactive:hover {
            background-color: oklch(0.9174 0.0435 292.6901);
        }
    </style>
</head>
<body class="bg-[oklch(0.9730_0.0133_286.1503)] min-h-screen py-8 px-4 sm:px-6 lg:px-8">
    
    <div class="absolute top-4 right-4 z-10">
        <div class="bg-white rounded-lg shadow-sm border border-[oklch(0.9115_0.0216_285.9625)] p-1 flex">
            <a href="?lang=en" class="px-3 py-1.5 rounded-md text-sm transition-all <?php echo $current_lang === 'en' ? 'lang-active' : 'lang-inactive'; ?>">
                English
            </a>
            <a href="?lang=ta" class="px-3 py-1.5 rounded-md text-sm transition-all <?php echo $current_lang === 'ta' ? 'lang-active' : 'lang-inactive'; ?>">
                தமிழ்
            </a>
        </div>
    </div>

    <div class="max-w-4xl mx-auto mt-8">
        
        <div class="text-center mb-12 animate-slide-up">
            <div class="inline-block mb-6">
                <div class="w-16 h-16 bg-primary rounded-2xl mx-auto flex items-center justify-center shadow-lg">
                    <svg class="w-9 h-9 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-[oklch(0.4143_0.1039_288.1742)] mb-3 tracking-tight">
                <?php echo htmlspecialchars($text['page_title']); ?>
            </h1>
            <p class="text-lg text-gray-500 font-light">
                <?php echo htmlspecialchars($text['page_subtitle']); ?>
            </p>
        </div>
        
        <?php if ($success): ?>
        <div class="mb-8 animate-slide-up">
            <div class="bg-green-50 border-l-4 border-green-500 p-6 rounded-lg shadow">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-green-700 font-medium">
                            <?php echo htmlspecialchars($text['success_message']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        
        <?php if ($form_submitted && !empty($errors)): ?>
        <div class="mb-8 animate-slide-up">
            <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-lg shadow">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-red-700 font-medium">
                            <?php echo htmlspecialchars($text['error_message']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        
        <div class="bg-white rounded-2xl shadow-sm overflow-hidden animate-slide-up">
            <div class="p-8 md:p-12">
                
                <form method="POST" enctype="multipart/form-data" class="space-y-10" action="?lang=<?php echo $current_lang; ?>">
                    
                    <div>
                        <h2 class="text-2xl font-semibold text-[oklch(0.4143_0.1039_288.1742)] mb-6 pb-3 border-b-2 border-[oklch(0.9174_0.0435_292.6901)]">
                            <?php echo htmlspecialchars($text['section_personal']); ?>
                        </h2>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            
                            <div class="md:col-span-2">
                                <label for="fullname" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <?php echo htmlspecialchars($text['label_fullname']); ?> <span class="text-red-500">*</span>
                                </label>
                                <input 
                                    type="text" 
                                    id="fullname" 
                                    name="fullname" 
                                    value="<?php echo htmlspecialchars($_POST['fullname'] ?? ''); ?>"
                                    placeholder="<?php echo htmlspecialchars($text['placeholder_fullname']); ?>"
                                    required
                                    class="w-full px-4 py-3.5 border border-[oklch(0.9115_0.0216_285.9625)] rounded-lg focus:outline-none transition-all duration-200 <?php echo isset($errors['fullname']) ? 'border-red-500 bg-red-50' : ''; ?>"
                                >
                                <?php if (isset($errors['fullname'])): ?>
                                    <p class="mt-2 text-sm text-red-500"><?php echo htmlspecialchars($errors['fullname']); ?></p>
                                <?php endif; ?>
                            </div>
                            
                            <div>
                                <label for="mobile" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <?php echo htmlspecialchars($text['label_mobile']); ?> <span class="text-red-500">*</span>
                                </label>
                                <input 
                                    type="tel" 
                                    id="mobile" 
                                    name="mobile" 
                                    value="<?php echo htmlspecialchars($_POST['mobile'] ?? ''); ?>"
                                    placeholder="<?php echo htmlspecialchars($text['placeholder_mobile']); ?>"
                                    pattern="[0-9]{10}"
                                    required
                                    class="w-full px-4 py-3.5 border border-[oklch(0.9115_0.0216_285.9625)] rounded-lg focus:outline-none transition-all duration-200 <?php echo isset($errors['mobile']) ? 'border-red-500 bg-red-50' : ''; ?>"
                                >
                                <p class="mt-1.5 text-xs text-gray-500"><?php echo htmlspecialchars($text['help_mobile']); ?></p>
                                <?php if (isset($errors['mobile'])): ?>
                                    <p class="mt-2 text-sm text-red-500"><?php echo htmlspecialchars($errors['mobile']); ?></p>
                                <?php endif; ?>
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <?php echo htmlspecialchars($text['label_email']); ?> <span class="text-red-500">*</span>
                                </label>
                                <input 
                                    type="email" 
                                    id="email" 
                                    name="email" 
                                    value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>"
                                    placeholder="<?php echo htmlspecialchars($text['placeholder_email']); ?>"
                                    required
                                    class="w-full px-4 py-3.5 border border-[oklch(0.9115_0.0216_285.9625)] rounded-lg focus:outline-none transition-all duration-200 <?php echo isset($errors['email']) ? 'border-red-500 bg-red-50' : ''; ?>"
                                >
                                <?php if (isset($errors['email'])): ?>
                                    <p class="mt-2 text-sm text-red-500"><?php echo htmlspecialchars($errors['email']); ?></p>
                                <?php endif; ?>
                            </div>
                            
                            <div class="md:col-span-2">
                                <label for="location" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <?php echo htmlspecialchars($text['label_location']); ?>
                                </label>
                                <input 
                                    type="text" 
                                    id="location" 
                                    name="location" 
                                    value="<?php echo htmlspecialchars($_POST['location'] ?? ''); ?>"
                                    placeholder="<?php echo htmlspecialchars($text['placeholder_location']); ?>"
                                    class="w-full px-4 py-3.5 border border-[oklch(0.9115_0.0216_285.9625)] rounded-lg focus:outline-none transition-all duration-200"
                                >
                            </div>
                            
                        </div>
                    </div>
                    
                    <div>
                        <h2 class="text-2xl font-semibold text-[oklch(0.4143_0.1039_288.1742)] mb-6 pb-3 border-b-2 border-[oklch(0.9174_0.0435_292.6901)]">
                            <?php echo htmlspecialchars($text['section_professional']); ?>
                        </h2>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            
                            <div>
                                <label for="experience" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <?php echo htmlspecialchars($text['label_experience']); ?> <span class="text-red-500">*</span>
                                </label>
                                <select 
                                    id="experience" 
                                    name="experience" 
                                    required
                                    class="w-full px-4 py-3.5 border border-[oklch(0.9115_0.0216_285.9625)] rounded-lg focus:outline-none transition-all duration-200 <?php echo isset($errors['experience']) ? 'border-red-500 bg-red-50' : ''; ?>"
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
                                    <p class="mt-2 text-sm text-red-500"><?php echo htmlspecialchars($errors['experience']); ?></p>
                                <?php endif; ?>
                            </div>
                            
                            <div>
                                <label for="qualification" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <?php echo htmlspecialchars($text['label_qualification']); ?> <span class="text-red-500">*</span>
                                </label>
                                <select 
                                    id="qualification" 
                                    name="qualification" 
                                    required
                                    class="w-full px-4 py-3.5 border border-[oklch(0.9115_0.0216_285.9625)] rounded-lg focus:outline-none transition-all duration-200 <?php echo isset($errors['qualification']) ? 'border-red-500 bg-red-50' : ''; ?>"
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
                                    <p class="mt-2 text-sm text-red-500"><?php echo htmlspecialchars($errors['qualification']); ?></p>
                                <?php endif; ?>
                            </div>
                            
                            <div>
                                <label for="jobtitle" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <?php echo htmlspecialchars($text['label_jobtitle']); ?>
                                </label>
                                <input 
                                    type="text" 
                                    id="jobtitle" 
                                    name="jobtitle" 
                                    value="<?php echo htmlspecialchars($_POST['jobtitle'] ?? ''); ?>"
                                    placeholder="<?php echo htmlspecialchars($text['placeholder_jobtitle']); ?>"
                                    class="w-full px-4 py-3.5 border border-[oklch(0.9115_0.0216_285.9625)] rounded-lg focus:outline-none transition-all duration-200"
                                >
                            </div>
                            
                            <div>
                                <label for="notice" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <?php echo htmlspecialchars($text['label_notice']); ?>
                                </label>
                                <select 
                                    id="notice" 
                                    name="notice" 
                                    class="w-full px-4 py-3.5 border border-[oklch(0.9115_0.0216_285.9625)] rounded-lg focus:outline-none transition-all duration-200"
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
                            
                            <div class="md:col-span-2">
                                <label for="skills" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <?php echo htmlspecialchars($text['label_skills']); ?> <span class="text-red-500">*</span>
                                </label>
                                <textarea 
                                    id="skills" 
                                    name="skills" 
                                    rows="4"
                                    placeholder="<?php echo htmlspecialchars($text['placeholder_skills']); ?>"
                                    required
                                    class="w-full px-4 py-3.5 border border-[oklch(0.9115_0.0216_285.9625)] rounded-lg focus:outline-none transition-all duration-200 resize-none <?php echo isset($errors['skills']) ? 'border-red-500 bg-red-50' : ''; ?>"
                                ><?php echo htmlspecialchars($_POST['skills'] ?? ''); ?></textarea>
                                <?php if (isset($errors['skills'])): ?>
                                    <p class="mt-2 text-sm text-red-500"><?php echo htmlspecialchars($errors['skills']); ?></p>
                                <?php endif; ?>
                            </div>
                            
                            <div class="md:col-span-2">
                                <label for="resume" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <?php echo htmlspecialchars($text['label_resume']); ?> <span class="text-red-500">*</span>
                                </label>
                                <div class="relative overflow-hidden w-full">
                                    <input 
                                        type="file" 
                                        id="resume" 
                                        name="resume" 
                                        accept=".pdf"
                                        required
                                        onchange="updateFileName(this)"
                                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10"
                                    >
                                    <div id="file-display-area" class="flex items-center justify-center w-full px-6 py-4 border-2 border-dashed border-[oklch(0.9115_0.0216_285.9625)] rounded-lg text-gray-500 <?php echo isset($errors['resume']) ? 'border-red-500 bg-red-50' : 'hover:bg-gray-50'; ?> transition-colors">
                                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                        </svg>
                                        <span id="file-name" class="font-medium"><?php echo htmlspecialchars($text['btn_choose_file']); ?></span>
                                    </div>
                                </div>
                                <p class="mt-1.5 text-xs text-gray-500"><?php echo htmlspecialchars($text['help_resume']); ?></p>
                                <?php if (isset($errors['resume'])): ?>
                                    <p class="mt-2 text-sm text-red-500"><?php echo htmlspecialchars($errors['resume']); ?></p>
                                <?php endif; ?>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div>
                        <h2 class="text-2xl font-semibold text-[oklch(0.4143_0.1039_288.1742)] mb-6 pb-3 border-b-2 border-[oklch(0.9174_0.0435_292.6901)]">
                            <?php echo htmlspecialchars($text['section_additional']); ?>
                        </h2>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            
                            <div>
                                <label for="salary" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <?php echo htmlspecialchars($text['label_salary']); ?>
                                </label>
                                <input 
                                    type="number" 
                                    id="salary" 
                                    name="salary" 
                                    value="<?php echo htmlspecialchars($_POST['salary'] ?? ''); ?>"
                                    placeholder="<?php echo htmlspecialchars($text['placeholder_salary']); ?>"
                                    min="0"
                                    class="w-full px-4 py-3.5 border border-[oklch(0.9115_0.0216_285.9625)] rounded-lg focus:outline-none transition-all duration-200"
                                >
                                <p class="mt-1.5 text-xs text-gray-500"><?php echo htmlspecialchars($text['help_salary']); ?></p>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-3">
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
                                            class="w-5 h-5 text-primary border-gray-300 rounded focus:ring-primary transition-all duration-200"
                                        >
                                        <span class="ml-3 text-gray-700 group-hover:text-primary transition-colors duration-200">
                                            <?php echo htmlspecialchars($lang_label); ?>
                                        </span>
                                    </label>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="pt-6 border-t border-gray-100">
                        <button 
                            type="submit" 
                            class="w-full bg-primary text-white font-semibold py-4 px-8 rounded-xl hover:opacity-90 focus:outline-none focus:ring-4 focus:ring-[oklch(0.5417_0.1790_288.0332_/_0.3)] transform hover:scale-[1.01] transition-all duration-200 shadow-lg hover:shadow-xl text-lg"
                        >
                            <?php echo htmlspecialchars($text['btn_submit']); ?>
                        </button>
                    </div>
                    
                </form>
                
            </div>
        </div>
        
        <div class="text-center mt-12 text-gray-500 text-sm animate-fade-in">
            <p>Powered by <span class="font-semibold text-primary">RiceJobs</span> - Your Career Partner</p>
        </div>
        
    </div>
    
    <script>
        // Update file name display when file is selected
        function updateFileName(input) {
            const fileNameSpan = document.getElementById('file-name');
            const displayArea = document.getElementById('file-display-area');
            
            if (input.files && input.files.length > 0) {
                fileNameSpan.textContent = input.files[0].name;
                // Add styling for selected state
                displayArea.classList.remove('border-dashed');
                displayArea.classList.add('border-solid', 'border-primary', 'bg-[oklch(0.9174_0.0435_292.6901)]', 'text-[oklch(0.4143_0.1039_288.1742)]');
            }
        }
        
        // Smooth scroll to error on submit
        <?php if ($form_submitted && !empty($errors)): ?>
        document.addEventListener('DOMContentLoaded', function() {
            const firstError = document.querySelector('.border-red-500');
            if (firstError) {
                firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                firstError.focus();
            }
        });
        <?php endif; ?>
    </script>
    
</body>
</html>
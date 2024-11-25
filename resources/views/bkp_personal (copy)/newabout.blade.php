<x-navlayout>
    <x-slot:heading>
        About Page
    </x-slot:heading>
<div class="profile-header"></div>
    <div class="profile-picture">
        <img src="{{ asset('assets/images/profile.png') }}" alt="Profile Picture">
    </div>
    
    <div class="profile-info">
        <h1>Priyanshu Dave</h1>
        <p class="job-title">Software Developer | Laravel & Magento Enthusiast</p>
        <p>Location: Anytown, India</p>
        <div class="action-buttons">
            <a href="javascript:void(0);" onclick="copyEmail()">
                <button>Connect</button>
            </a>
            <button>Message</button>
        </div>
    </div>
    
    <div class="section">
        <h2>About</h2>
        <p>I’m a passionate software developer with experience in Laravel and Magento. I believe in the power of technology to bring positive changes and am dedicated to continuous improvement and learning.</p>
    </div>
    
    <div class="section">
        <h2>Experience</h2>
        <p><strong>Software Developer at XYZ Company</strong></p>
        <p>January 2022 - Present</p>
        <p>Developed and maintained web applications using Laravel and Magento.</p>
    </div>

</x-navlayout>
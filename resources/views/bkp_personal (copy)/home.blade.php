<x-navlayout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>

    <h1 class="text-2xl font-semibold mb-4">{{ $greetings }}, Welcome to My Personal Website. My self {{ $name }}</h1>

    <div class="space-y-6">
        <!-- Personal Introduction -->
        <div class="bg-white p-6 rounded-md shadow-md">
            <h2 class="text-xl font-semibold">Hi, I'm Priyanshu!</h2>
            <p class="mt-4 text-gray-700">I am a web developer with a passion for building dynamic and responsive websites. I specialize in Laravel, PHP, and front-end technologies like HTML, CSS, and JavaScript.</p>
        </div>

        <!-- Social Media Links -->
        <div class="bg-white p-6 rounded-md shadow-md mt-6">
            <h2 class="text-xl font-semibold">Connect with me</h2>
            <div class="mt-4 flex space-x-4">
                <a href="https://www.linkedin.com/in/yourprofile" target="_blank" class="text-blue-600 hover:text-blue-800">LinkedIn</a>
                <a href="https://github.com/yourprofile" target="_blank" class="text-gray-800 hover:text-black">GitHub</a>
                <a href="https://twitter.com/yourprofile" target="_blank" class="text-blue-400 hover:text-blue-600">Twitter</a>
            </div>
        </div>

        <!-- Skills Section -->
        <div class="bg-white p-6 rounded-md shadow-md mt-6">
            <h2 class="text-xl font-semibold">My Skills</h2>
            <ul class="mt-4 space-y-2">
                <li class="text-gray-600">💻 Web Development (Laravel, Vue.js, React)</li>
                <li class="text-gray-600">🖌️ Front-end (HTML, CSS, Tailwind CSS)</li>
                <li class="text-gray-600">🔧 Database Management (MySQL, PostgreSQL)</li>
                <li class="text-gray-600">📦 Version Control (Git, GitHub)</li>
            </ul>
        </div>
    </div>
</x-navlayout>

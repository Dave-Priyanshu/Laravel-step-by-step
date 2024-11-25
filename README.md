```markdown
# Learn Laravel - Job Listing Project

![Laravel Logo](https://laravel.com/img/logomark.min.svg)  
This repository is created as a part of my learning process to understand **Laravel** by building a small job listing project. In this project, I will go through key concepts of Laravel such as routing, views, components, models, and data passing and many more. Below is a step-by-step process of how I learned and implemented various features in this project.

---

## 📝 1. Initial Setup: Routes and Views

To start the project, I created three basic views:

- `home.blade.php`
- `contact.blade.php`
- `jobs.blade.php`

Each of these views contained duplicate code for the header. This is where the project begins to show the need for **reusable components**.

---

## 🔧 2. Creating a Reusable Component - `navlayout.blade.php`

To avoid repeating code, I created a component named **`navlayout.blade.php`**, which contains the header code. This component was then included in all views using the following syntax:

```php
<x-navlayout></x-navlayout>
```

This made the code cleaner and allowed me to reuse the header across different pages.

---

## ⚡ 3. Dynamic Data Passing using Slots

Next, I learned how to dynamically pass data to views using **slots**. In the `navlayout.blade.php` component, I added a slot for the header:

```php
<x-slot:heading>
    {{$heading}}
</x-slot:heading>
```

To pass dynamic content to the header, I used the following syntax in the parent view:

```php
<x-slot:heading>My Custom Heading</x-slot:heading>
```

This makes the header component reusable for any page with custom content.

---

## 🧩 4. Using Models to Simplify Data Handling

Initially, I was passing the job data directly to the routes in an array, like this:

```php
Route::get('/jobs', function () {
    return view('personal.jobs',[
        'jobs'=> [
            ['id'=> 1, 'title'=> 'Director', 'salary'=> '$50,000'],
            ['id'=> 2, 'title'=> 'Programmer', 'salary'=> '$10,000'],
            ['id'=> 3, 'title'=> 'Teacher', 'salary'=> '$40,000']
        ]
    ]);
});
```

However, to make things more scalable and organized, I created a model called **`Job.php`** and moved the job data logic to the model. I defined two methods in the `Job` model: `all()` to get all jobs and `find()` to get a job by ID.

---

### Updated Code using the Job Model:

#### Routes (`web.php`):

```php
<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function() {
    return view('personal.home');
})->name('personal.home');

Route::get('/jobs', function() {
    return view('personal.jobs', [
        'jobs' => Job::all()
    ]);
})->name('personal.jobs');

Route::get('/jobs/{id}', function($id) {
    $job = Job::find($id);
    return view('personal.job', ['job' => $job]);
});

Route::get('/contact', function() {
    return view('personal.contact');
})->name('personal.contact');
```

#### Job Model (`Job.php`):

```php
<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all(): array
    {
        return [
            ['id'=> 1, 'title'=> 'Director', 'salary'=> '$50,000'],
            ['id'=> 2, 'title'=> 'Programmer', 'salary'=> '$10,000'],
            ['id'=> 3, 'title'=> 'Teacher', 'salary'=> '$40,000']
        ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), function($job) use ($id) {
            return $job['id'] == $id;
        });
        
        if (! $job) {    
            abort(404, 'Job not found');
        }
        
        return $job;
    }
}
```

---

### Why Use a Model?

- **Separation of Concerns**: The data is no longer hardcoded in the routes, making the code more modular and maintainable.
- **Scalability**: Adding, removing, or modifying jobs in the future will be easier as the logic is centralized in the `Job` model.

---

## 💻 5. Views

The views were updated to work with the model and dynamic data passed from the routes.

### `jobs.blade.php` (Jobs Listing Page):

```php
<x-navlayout>
    <x-slot:heading>
        Job's Page
    </x-slot:heading>

    <h1 class="text-2xl font-semibold mb-4"> Welcome to Jobs Page</h1>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}">
                    <strong>{{ $job['title'] }}</strong>: Pay's {{$job['salary']}} per year.
                </a>
            </li>  
        @endforeach
    </ul>
</x-navlayout>
```

### `job.blade.php` (Single Job Page):

```php
<x-navlayout>
    <x-slot:heading>
        Job's Listing Page
    </x-slot:heading>

    <h1 class="text-2xl font-semibold mb-4"> Welcome to the Job Listing Page</h1>

    <h2 class="font-bold text-lg">{{ $job['title'] }}:</h2>
    <p>
        This job pays {{ $job['salary'] }} per year.
    </p>
</x-navlayout>
```

---

## 🚀 Conclusion

This project helped me understand several key concepts in Laravel such as routing, views, reusable components, dynamic data passing using slots, and how to simplify data handling using models. The job listing project has now become more modular, and I can scale it easily for future use. 

This experience will help me with more advanced Laravel features as I continue my learning journey.

---

### 🚀 Future Enhancements:
- 

---

### ⚙️ Technologies Used:
- **PHP** (Laravel Framework)
- **Blade Templating**
- **Models**

---

### ✨ Follow Me:
- GitHub: [Dave-Priyanshu](https://github.com/Dave-Priyanshu)

Feel free to contribute, provide feedback, or ask questions. Happy coding! 👨‍💻👩‍💻


